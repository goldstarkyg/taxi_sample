//
//  MyLocationViewController.swift
//
//
//  Created by Gireesh on 2/25/16.
//
//

import UIKit
import GoogleMaps

class MyLocationViewController: BaseViewController,GMSMapViewDelegate,LocationManagerDelegate {
    
    //MARK: Declaration Section
    var currentAddressValueLbl:UILabel! = UILabel.init()
    let myLocationMap:GMSMapView! = GMSMapView.init()
    let geoCoder:GMSGeocoder = GMSGeocoder.init()
    var isLoadingTheLocationChangeFirst:Bool = Bool()
    var heightConstraint = NSLayoutConstraint()
    var driverMarker:GMSMarker! = GMSMarker.init()
    var initialCameraPosition:GMSCameraPosition! = GMSCameraPosition.init()
    
    override func viewDidLoad() {
        super.viewDidLoad()
        
        //Setting back button
        backBtn.hidden = false
        backBtn.setImage(UIImage(named: "back"), forState: UIControlState.Normal)
        backBtn.addTarget(self, action: #selector(MyLocationViewController.goBackFromMyLocation), forControlEvents: UIControlEvents.TouchUpInside)
        titleLbl.text = "MY LOCATION".localized().uppercaseString
        
        var layoutDic = [String:AnyObject]()
        let currentLocationBgView = UIView.init()
        
        // Creating location background view
        currentLocationBgView.translatesAutoresizingMaskIntoConstraints = false
        currentLocationBgView.backgroundColor = UIColor.whiteColor()
        currentLocationBgView.layer.borderWidth = 1.1
        currentLocationBgView.layer.borderColor = UIColor.textFieldUnderLineColor().CGColor
        self.view.addSubview(currentLocationBgView)
        
        currentLocationBgView.layer.masksToBounds = false;
        currentLocationBgView.layer.shadowOffset = CGSizeMake(0,0);
        currentLocationBgView.layer.shadowRadius = 0.2;
        currentLocationBgView.layer.shadowOpacity = 1.0;
        currentLocationBgView.layer.shadowColor = UIColor.textFieldUnderLineColor().CGColor;
        layoutDic["currentLocationBgView"] = currentLocationBgView
        layoutDic["topLayout"] = self.topLayoutGuide
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(8)-[currentLocationBgView]-(8)-|", options:NSLayoutFormatOptions(rawValue:0), metrics:nil, views:layoutDic))
        heightConstraint = NSLayoutConstraint(item: currentLocationBgView, attribute: .Height, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: 60)
        currentLocationBgView.addConstraint(heightConstraint)
        self.view.addConstraint(NSLayoutConstraint.init(item: currentLocationBgView, attribute: .Top, relatedBy: .Equal, toItem: topLayoutGuide, attribute: .Bottom, multiplier: 1.0, constant: 52))
        
        // Current Location Address
        currentLocationBgView.addSubview(currentAddressValueLbl)
        currentAddressValueLbl.translatesAutoresizingMaskIntoConstraints = false
        layoutDic["currentAddressValueLbl"] = currentAddressValueLbl
        currentLocationBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(10)-[currentAddressValueLbl]-(10)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
        
        let leadPosition = Extensions.isIpadDevice() ? 200 : 15
        currentLocationBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(leadPosition)-[currentAddressValueLbl]-(leadPosition)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: ["leadPosition":leadPosition], views: layoutDic))
        currentAddressValueLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(16) : UIFont.setAppFont(13)
        currentAddressValueLbl.textAlignment = NSTextAlignment.Center
        currentAddressValueLbl.numberOfLines = 0;
        currentAddressValueLbl.lineBreakMode = NSLineBreakMode.ByWordWrapping
        currentAddressValueLbl.textColor = UIColor.blackTextColor()
        
        //Setting the Google MAP
        layoutDic["myLocationMap"] = myLocationMap
        myLocationMap.translatesAutoresizingMaskIntoConstraints = false
        myLocationMap.myLocationEnabled = true
        myLocationMap.trafficEnabled = true
        myLocationMap.buildingsEnabled = true
        self.view.addSubview(myLocationMap)
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[topLayout]-(44)-[myLocationMap]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDic))
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[myLocationMap]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDic))
        self.view.bringSubviewToFront(currentLocationBgView)
        
        // Starting location manager here
        LocationManager.sharedInstance.locationDelegate = self
        isLoadingTheLocationChangeFirst = true
        
        // Setting the driver marker
        driverMarker.icon = Extensions.isIpadDevice() ? UIImage(named: "currentLocation_iPad") : UIImage(named: "currentLocation")
        driverMarker.title = "Driver Location".localized()
        driverMarker.map = myLocationMap
        
        //Creatting GPS button
        let gpsButton = UIButton.init(type: UIButtonType.Custom)
        gpsButton.addTarget(self, action: #selector(MyLocationViewController.gpsButtonTapped), forControlEvents: UIControlEvents.TouchUpInside)
        self.view.addSubview(gpsButton)
        gpsButton.translatesAutoresizingMaskIntoConstraints = false
        
        gpsButton.setBackgroundImage(Extensions.isIpadDevice() ? UIImage(named: "gps_arr_iPad") : UIImage(named: "gps_arr"), forState: UIControlState.Normal)
        layoutDic["gpsButton"] = gpsButton
        let gpsBtnSize = Extensions.isIpadDevice() ? 57 : 33
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[gpsButton(gpsBtnSize)]-(15)-|", options:NSLayoutFormatOptions(rawValue: 0) , metrics:["gpsBtnSize":gpsBtnSize], views: layoutDic))
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[gpsButton(gpsBtnSize)]-(11)-|", options:NSLayoutFormatOptions(rawValue: 0) , metrics:["gpsBtnSize":gpsBtnSize], views: layoutDic))
    }
    
    //MARK: Location Manager Delegate
    func locationUpdation(location:CLLocation, userDirection:CLLocationDirection)->Void {
        
        let currentLocation = location
        let currentLocationCoordinate:CLLocationCoordinate2D! = CLLocationCoordinate2DMake(currentLocation.coordinate.latitude, currentLocation.coordinate.longitude)
        
        // Setting the map center on the first load
        let position:GMSCameraPosition! = GMSCameraPosition.cameraWithTarget(currentLocationCoordinate, zoom: 16.0)
     
        // Saving initial camera position to use when GPS button tapped
        initialCameraPosition = position
        
        //Setting the Position of the Driver Marker
        driverMarker.position = currentLocationCoordinate
        
        if isLoadingTheLocationChangeFirst {
            myLocationMap.animateToCameraPosition(position)
            isLoadingTheLocationChangeFirst = false
        }
        
        // Converting the latitude and logitude into address using Geocoder
        geoCoder.reverseGeocodeCoordinate(initialCameraPosition.target) { (response, error) -> Void in
            
            if error != nil{
                print(error.localizedDescription)
            } else {
                if response != nil {
                    let addresss:GMSAddress! = response.firstResult()
                    
                    if addresss != nil {
                        let addressArray:NSArray! = addresss.lines as NSArray
                        
                        if addressArray.count > 0 {
                            
                            var convertedAddressLine1:AnyObject! = addressArray.objectAtIndex(0)
                            let space = " ,"
                            let convertedAddressLine2:AnyObject! = addressArray.objectAtIndex(1)
                            let country:AnyObject! = addresss.country
                            
                            convertedAddressLine1 = convertedAddressLine1.stringByAppendingString(space).stringByAppendingString(convertedAddressLine2 as! String).stringByAppendingString(space).stringByAppendingString(country as! String)
                            
                            let labelSize = self.rectForText(convertedAddressLine1 as! String, font: Extensions.isIpadDevice() ? UIFont.setAppFont(16) : UIFont.setAppFont(13), maxSize: CGSizeMake(Extensions.isIpadDevice() ? UIScreen.mainScreen().bounds.size.width-400 : UIScreen.mainScreen().bounds.size.width-20,39))
                            
                            self.heightConstraint.constant = labelSize.height + 25
                            self.currentAddressValueLbl.text = "\(convertedAddressLine1)"
                            
                            self.view.layoutIfNeeded()
                        }
                    }
                }
            }
        }
    }
    
    func rectForText(text: String, font: UIFont, maxSize: CGSize) -> CGSize {
        //This is a method to calculate the height
        let attrString = NSAttributedString.init(string: text, attributes: [NSFontAttributeName:font])
        let rect = attrString.boundingRectWithSize(maxSize, options: NSStringDrawingOptions.UsesLineFragmentOrigin, context: nil)
        let size = CGSizeMake(rect.size.width, rect.size.height)
        return size
    }
    
    //MARK: Go Back
    func goBackFromMyLocation()->Void {
        self.navigationController?.popViewControllerAnimated(true)
    }
    
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    //MARK:GPS Action
    func gpsButtonTapped()->Void {
        
        if initialCameraPosition.target.latitude == 0.0 && initialCameraPosition.target.longitude == 0.0 {
            let position:GMSCameraPosition! = GMSCameraPosition.cameraWithTarget(myLocationMap.myLocation.coordinate, zoom: 16.0)
            myLocationMap.animateToCameraPosition(position)
        } else {
            myLocationMap.animateToCameraPosition(initialCameraPosition)
        }
    }
    
    override func viewDidDisappear(animated: Bool) {
        isLoadingTheLocationChangeFirst = true

        super.viewDidDisappear(true)
    }
    
    /*
     // MARK: - Navigation
     
     // In a storyboard-based application, you will often want to do a little preparation before navigation
     override func prepareForSegue(segue: UIStoryboardSegue, sender: AnyObject?) {
     // Get the new view controller using segue.destinationViewController.
     // Pass the selected object to the new view controller.
     }
     */
}
