//
//  TripInProgressViewController.swift
//
//
//  Created by Gireesh on 3/2/16.
//
//

import UIKit
import GoogleMaps
import CoreLocation
import CoreTelephony
import SafariServices


class TripInProgressViewController: BaseViewController,GKAlertDelegate,SFSafariViewControllerDelegate,LocationManagerDelegate {
    
    //MARK: Declaration Section
    var IsItFromAcceptPage:Bool = Bool()
    var onGoingTripId:String! = String()
    var tripdetailDic:NSDictionary! = NSDictionary()
    var minimumSpeed:Double! = Double()
    let tripMapView:GMSMapView! = GMSMapView.init()
    let tripDetailBgView = UIView.init()
    var pickUpLocationLbl:UILabel! = UILabel.init()
    var dropLocationLblL:UILabel! = UILabel.init()
    var landMarkLbl:UILabel! = UILabel.init()
    var pickUpHeightConstraint:NSLayoutConstraint?
    var dropHeightConstraint:NSLayoutConstraint?
    var landmarkHeghtConstraint:NSLayoutConstraint?
    var detailViewHeightConstraint:NSLayoutConstraint?
    var nameXpositionConstraint:NSLayoutConstraint?
    var layoutDic = [String:AnyObject]()
    let driverStatusBtn:UIButton! = UIButton.init(type: UIButtonType.Custom)
    let maximizeBtn = UIButton.init(type: UIButtonType.Custom)
    let driverMarker:GMSMarker! = GMSMarker.init()
    let GpsNavigationBtn:UIButton! = UIButton.init(type: UIButtonType.Custom)
    let geoCoder:GMSGeocoder! = GMSGeocoder.init()
    var direction:CLLocationDirection! = CLLocationDirection()
    let buttonCancel = UIButton.init(type: UIButtonType.Custom)
    let separtorLbl = UILabel.init()
    var lastLocation:CLLocation! = CLLocation()
    var paymentDic:NSDictionary! = NSDictionary()
    var passengerPhoneNumber:String! = String()
    let showKm = UILabel.init()
    let speedLbl = UILabel.init()
    var isFirstTimeLoadingSpeed = Bool()
    var indicator:UIActivityIndicatorView?
    var pickUpView: UIView!
    var pickUpMarqueeLbl: MarqueeLabel!
    var pickUpImage: UIImageView!
    var dropView: UIView!
    var dropLbl: MarqueeLabel!
    var dropImage: UIImageView!
    var placeDetailsView: UIView!
    let waitingTimeLbl:UILabel! = UILabel.init()
    var txtFldHeight:CGFloat! = CGFloat()
    var placeDetailViewHeightConstaint:NSLayoutConstraint! = NSLayoutConstraint()
    var tripCancelBtn:UIButton! = UIButton.init()
    //MARK: View Will Appear
    override func viewWillAppear(animated: Bool)
    {
        super.viewWillAppear(animated)
        
        //Waiting Time Notification,For Showing the waiting time
        NSNotificationCenter.defaultCenter().addObserver(self, selector: #selector(TripInProgressViewController.waitingTimeNotificationAction), name: "waitingTimeNotification", object: nil)
        //Distance Notification
        NSNotificationCenter.defaultCenter().addObserver(self, selector: #selector(TripInProgressViewController.distnanceNotificationAction(_:)), name: "distanceNotification", object: nil)
        //Reset the speed when no gps is disabled
        NSNotificationCenter.defaultCenter().addObserver(self, selector: #selector(TripInProgressViewController.resetSpeed), name: "gpsDisabledNotification", object: nil)
        //SetBool
        Extensions.setIsInTripInProgressPage(true)
        //Dispatcher Trip Detail Change Notification
        NSNotificationCenter.defaultCenter().addObserver(self, selector: #selector(TripInProgressViewController.dispatcherTripChange(_:)), name: "dispatcherChangeDetailsNotification", object: nil)
        
    }
    //MARK: View Did Load
    override func viewDidLoad() {
        
        super.viewDidLoad()
        //Setting title and Backbutton
        titleLbl.text = "Trip In progress".localized().uppercaseString
        self.backBtn.hidden = false
        
        self.backBtn.addTarget(self, action: #selector(TripInProgressViewController.goBackFromTripIn), forControlEvents: UIControlEvents.TouchUpInside)
        self.backBtn.setImage(UIImage(named: "back"), forState: UIControlState.Normal)
        
        Extensions.setTripStartedStatus(false)
      //  print(Extensions.onGoingTripId())
        self.updateTripDetailInView()
        isFirstTimeLoadingSpeed = true
        
    }
    //MARK: Get Trip Detail
    func updateTripDetailInView()->Void {
        
        //Calling the API to Get Detail
        let postDataDic = ["trip_id":Extensions.onGoingTripId()]
        APIDownlaod.downloadDataFromServer("\(k_BaseURL)\(apiKey)/?lang=\(Extensions.getSelectedLanguage())&type=get_trip_detail", bodyData: postDataDic, method: "POST", key: "") { (resultDic) -> Void in
            
          //  print("Core Config---->\(Extensions.coreConfigInfos())")
            if resultDic.objectForKey("status") as! Int == 1 {
                //Successful Call
                self.tripdetailDic = resultDic.objectForKey("detail") as! NSDictionary
               // print(self.tripdetailDic)
                self.minimumSpeed = Double("\(self.tripdetailDic.objectForKey("taxi_min_speed")!)")
               
                //Creating the Map
                self.tripMapView.translatesAutoresizingMaskIntoConstraints = false
                self.layoutDic["tripMapView"] = self.tripMapView
                self.layoutDic["topLayout"] = self.topLayoutGuide
                self.view.addSubview(self.tripMapView)
                self.tripMapView.trafficEnabled = true
                self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[topLayout]-(44)-[tripMapView]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: self.layoutDic))
                self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[tripMapView]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: self.layoutDic))
                
                if LocationManager.sharedInstance.locationManager.location?.coordinate.latitude == 0 || LocationManager.sharedInstance.locationManager.location?.coordinate.latitude == nil {
                  //  print("NO GPS")
                    let position:GMSCameraPosition! = GMSCameraPosition.cameraWithLatitude(0, longitude: 0, zoom: 16)
                    
                    self.tripMapView.camera = position
                } else {
                    //Setting the map initial position
                    let position:GMSCameraPosition! = GMSCameraPosition.cameraWithLatitude((LocationManager.sharedInstance.locationManager.location!.coordinate.latitude), longitude: (LocationManager.sharedInstance.locationManager.location!.coordinate.longitude), zoom: 16)
                    
                    self.tripMapView.camera = position
                }
                
                //Trip Detail View
                self.tripDetailBgView.translatesAutoresizingMaskIntoConstraints = false
                self.layoutDic["tripDetailBgView"] = self.tripDetailBgView
                self.view.addSubview(self.tripDetailBgView)
                
                self.tripDetailBgView.backgroundColor = UIColor.clearColor()
                
                let tripDetilBgViewHeight:CGFloat = Extensions.isIpadDevice() ? 142 : 92
                let tripDetailBgViewY:CGFloat = Extensions.isIpadDevice() ? 64 : 54
                
                self.detailViewHeightConstraint = NSLayoutConstraint(item: self.tripDetailBgView, attribute: .Height, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: tripDetilBgViewHeight)
                
                self.view.addConstraint(NSLayoutConstraint(item: self.tripDetailBgView, attribute: .Top, relatedBy: .Equal, toItem: self.topLayoutGuide, attribute: .Bottom, multiplier: 1.0, constant: tripDetailBgViewY))
                
                self.view.addConstraint(self.detailViewHeightConstraint!)
                
                self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[tripDetailBgView]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: self.layoutDic))
                
                //Passenger Image
                let passengerBgImage = UIImageView.init()
                passengerBgImage.image = UIImage(named: "ProfileBg")
                self.layoutDic["passengerBgImage"] = passengerBgImage
                passengerBgImage.translatesAutoresizingMaskIntoConstraints = false
                self.tripDetailBgView.addSubview(passengerBgImage)
                
                let passengerbgImageHeight:CGFloat = 60
                self.tripDetailBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[passengerBgImage(63)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["passengerbgImageHeight":passengerbgImageHeight], views: self.layoutDic))
                
                self.tripDetailBgView.addConstraint(NSLayoutConstraint.init(item: passengerBgImage, attribute: .CenterX, relatedBy: .Equal, toItem: self.tripDetailBgView, attribute: .CenterX, multiplier: 1.0, constant: 0))
                
                passengerBgImage.addConstraint(NSLayoutConstraint.init(item: passengerBgImage, attribute: .Width, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: passengerbgImageHeight))
                
                //Passenger Image
                let passengerImage = UIImageView.init()
                self.layoutDic["passengerImage"] = passengerImage
                passengerImage.translatesAutoresizingMaskIntoConstraints = false
                self.tripDetailBgView.addSubview(passengerImage)
                let passengerImageHeight:CGFloat = Extensions.isIpadDevice() ? 90 : 55
                self.tripDetailBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(3)-[passengerImage(56)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["passengerImageHeight":passengerImageHeight], views: self.layoutDic))
                self.tripDetailBgView.addConstraint(NSLayoutConstraint.init(item: passengerImage, attribute: .CenterX, relatedBy: .Equal, toItem: self.tripDetailBgView, attribute: .CenterX, multiplier: 1.0, constant: 0))
                passengerImage.addConstraint(NSLayoutConstraint.init(item: passengerImage, attribute: .Width, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: passengerImageHeight))
                
                //   passengerImage.layer.cornerRadius = passengerImageHeight/2
                //   passengerImage.layer.masksToBounds = true
                
                //Image Loading Indicator
                self.indicator = UIActivityIndicatorView.init(activityIndicatorStyle: UIActivityIndicatorViewStyle.Gray)
                self.tripDetailBgView.addSubview(self.indicator!)
                self.indicator!.center  = passengerImage.center
                self.indicator!.startAnimating()
                self.indicator?.translatesAutoresizingMaskIntoConstraints = false
                self.layoutDic["indicator"] = self.indicator
                let indicatorPosition = Extensions.isIpadDevice() ? -55 : -38
                self.tripDetailBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[passengerImage]-(indicatorPosition)-[indicator(20)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["indicatorPosition":indicatorPosition], views:self.layoutDic))
                self.tripDetailBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[indicator(20)]-(indicatorPosition)-[passengerImage]", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["indicatorPosition":indicatorPosition], views:self.layoutDic))
                
                self.passengerPhoneNumber = "\(self.tripdetailDic.objectForKey("passenger_phone")!)"
                
                let profileImageURL:AnyObject! = self.tripdetailDic.objectForKey("passenger_image")
                
                passengerImage.layer.borderColor = UIColor.textFieldUnderLineColor().CGColor
                passengerImage.layer.borderWidth = 1.0
                
                if profileImageURL != nil {
                    // Checking image exist in the cache or not
                    if ImageCache.isImageExistOnCache(profileImageURL) {
                        // Exist
                        passengerImage.image = ImageCache.getImage(profileImageURL)
                        self.indicator?.hidden = true
                    } else {
                        // Not Exist
                        let queue:dispatch_queue_t = dispatch_get_global_queue(DISPATCH_QUEUE_PRIORITY_DEFAULT,0)
                        
                        dispatch_async(queue, { () -> Void in
                            
                            let encodedUrl : String! = profileImageURL.stringByAddingPercentEncodingWithAllowedCharacters(NSCharacterSet.URLQueryAllowedCharacterSet())
                            
                            let imageData:NSData! = NSData.init(contentsOfURL:NSURL.init(string:encodedUrl)!)
                            
                            dispatch_async(dispatch_get_main_queue(), { () -> Void in
                                
                                if imageData != nil {
                                    if UIImage(data:imageData) != nil {
                                        //Storing the image in the cache
                                        ImageCache.storeImage(UIImage(data:imageData)!, url: profileImageURL)
                                        passengerImage.image = UIImage(data: imageData)
                                        
                                        self.indicator?.hidden = true
                                    }
                                } else {
                                    
                                }
                            })
                        })
                    }
                }
                //Passenger Info View
                let passengerInfoView = UIView.init()
                passengerInfoView.translatesAutoresizingMaskIntoConstraints = false
                passengerInfoView.backgroundColor = UIColor(red: 247/255.0, green: 247/255.0, blue: 247/255.0, alpha: 1.0)
                passengerInfoView.layer.borderWidth = 1.0
                passengerInfoView.layer.borderColor = UIColor.textFieldUnderLineColor().CGColor
                self.tripDetailBgView.addSubview(passengerInfoView)
                self.layoutDic["passengerInfoView"] = passengerInfoView
                var metricDic = [String:AnyObject]()
                metricDic["Height"] = passengerImageHeight + 5
                metricDic["positionY"] = -(passengerImageHeight/2)
                
                self.tripDetailBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[passengerImage]-(positionY)-[passengerInfoView(Height)]", options: NSLayoutFormatOptions(rawValue:0), metrics: metricDic, views: self.layoutDic))
                self.tripDetailBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[passengerInfoView]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: self.layoutDic))
                self.tripDetailBgView.bringSubviewToFront(passengerImage)
                self.tripDetailBgView.bringSubviewToFront(passengerBgImage)
                self.tripDetailBgView.bringSubviewToFront(self.indicator!)
                
                //Passenger Name Lbl
                let passengerNameLbl = UILabel.init()
                passengerNameLbl.translatesAutoresizingMaskIntoConstraints = false
                passengerNameLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(20) : UIFont.setAppFont(15)
                passengerNameLbl.textAlignment = NSTextAlignment.Center
                passengerNameLbl.textColor = UIColor.blackTextColor()
                passengerNameLbl.text = "\(self.tripdetailDic.objectForKey("passenger_name")!)"
              //  print("Trip Detail Dic-->\(self.tripdetailDic)")
                passengerInfoView.addSubview(passengerNameLbl)
               
                let passengerLblBottom = Extensions.isIpadDevice() ? 8 : 3
                self.layoutDic["passengerNameLbl"] = passengerNameLbl
                passengerInfoView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[passengerNameLbl(30)]-(passengerLblBottom)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: ["passengerLblBottom":passengerLblBottom], views: self.layoutDic))
                passengerInfoView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(5)-[passengerNameLbl]-(5)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: self.layoutDic))
                
                //Call Passenger Btn
                let callPassengerBtn = UIButton.init(type: UIButtonType.Custom)
                callPassengerBtn.translatesAutoresizingMaskIntoConstraints = false
                callPassengerBtn.setImage(Extensions.isIpadDevice() ? UIImage(named: "phone-icon_iPad") : UIImage(named: "phone-icon"), forState: UIControlState.Normal)
                callPassengerBtn.setTitleColor(UIColor.blackTextColor(), forState: UIControlState.Normal)
                callPassengerBtn.titleLabel?.font = Extensions.isIpadDevice() ? UIFont.setAppFont(20) : UIFont.setAppFont(15)
                callPassengerBtn.setTitle("Call".localized(), forState: UIControlState.Normal)
                passengerInfoView.addSubview(callPassengerBtn)
                
                self.layoutDic["callPassengerBtn"] = callPassengerBtn
                passengerInfoView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(leading)-[callPassengerBtn(120)]", options: NSLayoutFormatOptions(rawValue:0), metrics: ["leading":(UIScreen.mainScreen().bounds.size.width/2-30)/2-60], views: self.layoutDic))
                passengerInfoView.addConstraint(NSLayoutConstraint.init(item: callPassengerBtn, attribute: .CenterY, relatedBy: .Equal, toItem: passengerInfoView, attribute: .CenterY, multiplier: 1.0, constant: -8))
                callPassengerBtn.addConstraint(NSLayoutConstraint.init(item: callPassengerBtn, attribute: .Height, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: 30))
                callPassengerBtn.addTarget(self, action: #selector(TripInProgressViewController.callPassengerBtnTapped), forControlEvents: UIControlEvents.TouchUpInside)
                
                //Cancel Trip Btn
                self.tripCancelBtn = UIButton.init(type: UIButtonType.Custom)
                self.tripCancelBtn.translatesAutoresizingMaskIntoConstraints = false
                self.tripCancelBtn.setImage(Extensions.isIpadDevice() ? UIImage(named: "cancel_iPad") : UIImage(named: "cancel") , forState: UIControlState.Normal)
                self.tripCancelBtn.setTitleColor(UIColor.blackTextColor(), forState: UIControlState.Normal)
                self.tripCancelBtn.titleLabel?.font = Extensions.isIpadDevice() ? UIFont.setAppFont(20) : UIFont.setAppFont(15)
                self.tripCancelBtn.setTitle("CANCEL".localized(), forState: UIControlState.Normal)
                passengerInfoView.addSubview(self.tripCancelBtn)
                self.layoutDic["tripCancelBtn"] = self.tripCancelBtn
                
                passengerInfoView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[tripCancelBtn(120)]-(leading)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: ["leading":(UIScreen.mainScreen().bounds.size.width/2-30)/2-60], views: self.layoutDic))
                passengerInfoView.addConstraint(NSLayoutConstraint.init(item: self.tripCancelBtn, attribute: .CenterY, relatedBy: .Equal, toItem: passengerInfoView, attribute: .CenterY, multiplier: 1.0, constant: -8))
                self.tripCancelBtn.addConstraint(NSLayoutConstraint.init(item: self.tripCancelBtn, attribute: .Height, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: 30))
                self.tripCancelBtn.addTarget(self, action: #selector(TripInProgressViewController.tripCancelButtonTapped), forControlEvents: UIControlEvents.TouchUpInside)
                
                //Driver Status button(Bottom of the page)
                //  self.driverStatusBtn.backgroundColor = UIColor.getApplicationSubmitColor()
                self.driverStatusBtn.setBackgroundImage(UIImage(named: "signinButtonbg"), forState: .Normal)
                self.driverStatusBtn.setTitleColor(UIColor.whiteColor(), forState: UIControlState.Normal)
                self.driverStatusBtn.titleLabel!.font = Extensions.isIpadDevice() ? UIFont.setButtonFont(20) : UIFont.setButtonFont(16)
                self.view.addSubview(self.driverStatusBtn)
                self.driverStatusBtn.translatesAutoresizingMaskIntoConstraints = false
                self.layoutDic["driverStatusBtn"] = self.driverStatusBtn
                self.driverStatusBtn.addTarget(self, action: #selector(TripInProgressViewController.driverStatusBtnTapped), forControlEvents: UIControlEvents.TouchUpInside)
                let driverStatusBtnHeight = Extensions.isIpadDevice() ? 60 : 40
                self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[driverStatusBtn(driverStatusBtnHeight)]-(8)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["driverStatusBtnHeight":driverStatusBtnHeight], views: self.layoutDic))
                self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(8)-[driverStatusBtn]-(8)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: self.layoutDic))
                
                //Starting location manager
                LocationManager.sharedInstance.locationDelegate = self
                LocationManager.sharedInstance.locationManager.startUpdatingHeading()
                //Google Voice Navigation Btn
                self.GpsNavigationBtn.translatesAutoresizingMaskIntoConstraints = false
                self.view.addSubview(self.GpsNavigationBtn)
                self.GpsNavigationBtn.setImage(Extensions.isIpadDevice() ? UIImage(named: "gps_arr_iPad") : UIImage(named: "gps_arr"), forState: UIControlState.Normal)
                self.GpsNavigationBtn.addTarget(self, action: #selector(TripInProgressViewController.voiceNavigationBtnTapped), forControlEvents: UIControlEvents.TouchUpInside)
                self.GpsNavigationBtn
                self.layoutDic["GpsNavigationBtn"] = self.GpsNavigationBtn
                let gpsBtnSize = Extensions.isIpadDevice() ? 57 : 33
                self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[GpsNavigationBtn(gpsBtnSize)]-(15)-[driverStatusBtn]", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["gpsBtnSize":gpsBtnSize], views: self.layoutDic))
                self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[GpsNavigationBtn(gpsBtnSize)]-(10)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["gpsBtnSize":gpsBtnSize], views: self.layoutDic))
                
                self.tripMapView.clear()
                
                //Making the changes based on the Travel Status
                if Int("\(self.tripdetailDic.objectForKey("travel_status")!)") == 9 {
                    //Driver Confirmed the trip
                    self.driverStatusBtn.setTitle("I'VE ARRIVED".localized().uppercaseString, forState: UIControlState.Normal)
                    self.driverStatusBtn.setBackgroundImage(UIImage(named: "signinButtonbg"), forState: .Normal)
                    
                    if self.IsItFromAcceptPage {
                        //Disble the driver status btn for 10 seconds(For passenger APP)
                        self.driverStatusBtn.userInteractionEnabled = false
                        NSTimer.scheduledTimerWithTimeInterval(5, target: self, selector: #selector(TripInProgressViewController.enableDriverStatusBtn), userInfo: nil, repeats: false)
                    }
                    
                    self.titleLbl.text = "Pickup passenger".localized().uppercaseString
                    self.GpsNavigationBtn.hidden = false
                    Extensions.setDriverCurrentStatus(k_DriverBusy)
                    Extensions.setWaitingTime("00:00:00")
                    self.driverStatusBtn.tag = 0
                    //Drawing the root from driver initial position to pickup
                    self.pickUpRoot()
                } else if Int("\(self.tripdetailDic.objectForKey("travel_status")!)") == 3 {
                    //Driver Arrived
                    self.driverStatusBtn.setTitle("START TRIP".localized().uppercaseString, forState: UIControlState.Normal)
                    self.driverStatusBtn.setBackgroundImage(UIImage(named: "greenBG"), forState: .Normal)
                    
                    self.titleLbl.text = "Waiting For Passenger".localized().uppercaseString
                    Extensions.setDriverCurrentStatus(k_DriverBusy)
                    Extensions.setWaitingTime("00:00:00")
                    self.enableDisableVoiceNavigation()
                    self.driverStatusBtn.tag = 0
                    
                } else if Int("\(self.tripdetailDic.objectForKey("travel_status")!)") == 2 {
                    //Trip Started
                    self.driverStatusBtn.setTitle("END TRIP".localized().uppercaseString, forState: UIControlState.Normal)
                    self.driverStatusBtn.setBackgroundImage(UIImage(named: "signinButtonbg"), forState: .Normal)
                    
                    self.titleLbl.text = "Trip in progress".localized().uppercaseString
                    self.enableDisableVoiceNavigation()
                    Extensions.setDriverCurrentStatus(k_DriverActive)
                    
                    if Extensions.getSelectedLanguage() == "ar" {
                        self.nameXpositionConstraint?.constant = -10
                    } else {
                        self.nameXpositionConstraint?.constant = 10
                    }
                    
                    self.separtorLbl.hidden = true
                    self.buttonCancel.hidden = true
                    self.backBtn.hidden = true
                    self.driverStatusBtn.tag = 1
                    
                    self.createSpeedandKmLabels()
                    self.tripCancelBtn.userInteractionEnabled = false
                    self.tripCancelBtn.hidden = true
                    self.tripCancelBtn.setTitleColor(UIColor(red: 238/255.0, green: 51/255.0, blue: 36/255.0, alpha: 0.5), forState:UIControlState.Normal )
                }
                
                //Setting pickup,Drop,Landmark Labels
                self.placeDetailsView = UIView.init()
                self.view.addSubview(self.placeDetailsView)
                self.layoutDic["placeDetailsView"] = self.placeDetailsView
                self.placeDetailsView.translatesAutoresizingMaskIntoConstraints = false;
                
                self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[placeDetailsView]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: self.layoutDic))
                self.view.bringSubviewToFront(self.placeDetailsView)
                
                //Pickup Details
                self.pickUpView = UIView.init()
                self.placeDetailsView.addSubview(self.pickUpView)
                self.layoutDic["pickUpView"] = self.pickUpView
                self.pickUpView.translatesAutoresizingMaskIntoConstraints = false
                self.txtFldHeight = Extensions.isIpadDevice() ? 50 : 40
                self.placeDetailsView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[pickUpView(txtFldHeight)]", options: NSLayoutFormatOptions(rawValue:0), metrics: ["txtFldHeight":self.txtFldHeight], views: self.layoutDic))
                self.placeDetailsView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(8)-[pickUpView]-(8)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: self.layoutDic))
                self.pickUpView.layer.borderColor = UIColor.textFieldUnderLineColor().CGColor
                self.pickUpView.backgroundColor = UIColor.whiteColor()
                self.pickUpView.layer.borderWidth = 1.0
                self.pickUpImage = UIImageView.init()
                self.pickUpView.addSubview(self.pickUpImage)
                self.pickUpImage.translatesAutoresizingMaskIntoConstraints = false
                self.pickUpImage.image = Extensions.isIpadDevice() ?UIImage(named: "pickup2_iPad") :  UIImage(named: "pickup2")
                self.layoutDic["pickUpImage"] = self.pickUpImage
                let LeadingImageConstrain = Extensions.isIpadDevice() ? 25 : 10
                var constrainImageDic = [String:AnyObject]()
                constrainImageDic["LeadingImageConstrain"] = LeadingImageConstrain
                self.pickUpView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[pickUpImage]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: self.layoutDic))
                Extensions.getSelectedLanguage() == "ar" ? self.pickUpView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[pickUpImage(10)]-(LeadingImageConstrain)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: constrainImageDic, views: self.layoutDic)) : self.pickUpView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(LeadingImageConstrain)-[pickUpImage(10)]", options: NSLayoutFormatOptions(rawValue:0), metrics: constrainImageDic, views: self.layoutDic))
                //pickup Marquee
                self.pickUpMarqueeLbl = MarqueeLabel.init()
                self.pickUpView.addSubview(self.pickUpMarqueeLbl)
                self.pickUpMarqueeLbl.translatesAutoresizingMaskIntoConstraints = false
                self.layoutDic["pickUpMarqueeLbl"] = self.pickUpMarqueeLbl
                self.pickUpMarqueeLbl.type = .Continuous
                self.pickUpMarqueeLbl.textColor = UIColor.blackTextColor()
                self.pickUpMarqueeLbl.textAlignment = NSTextAlignment.Center
                self.pickUpMarqueeLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(14)
                self.pickUpMarqueeLbl.text =  "\(self.tripdetailDic.objectForKey("current_location") == nil ?   self.tripdetailDic.objectForKey("pickup_location")! : self.tripdetailDic.objectForKey("current_location")!)"
                
                self.pickUpView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[pickUpMarqueeLbl]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: self.layoutDic))
                
                let marqueeLblWidthConstrain = Extensions.isIpadDevice() ? 50 : 35
                
                Extensions.getSelectedLanguage() == "ar" ? self.pickUpView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(5)-[pickUpMarqueeLbl]-(marqueeLblWidthConstrain)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: ["marqueeLblWidthConstrain":marqueeLblWidthConstrain], views: self.layoutDic)) : self.pickUpView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(marqueeLblWidthConstrain)-[pickUpMarqueeLbl]-(5)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: ["marqueeLblWidthConstrain":marqueeLblWidthConstrain], views: self.layoutDic))
                
                //Drop Details
                self.dropView = UIView.init()
                self.placeDetailsView.addSubview(self.dropView)
                self.layoutDic["dropView"] = self.dropView
                self.dropView.translatesAutoresizingMaskIntoConstraints = false
                var txtMetricDic = [String:AnyObject]()
                txtMetricDic["txtFldHeight"] = self.txtFldHeight
                txtMetricDic["positionY"] = self.txtFldHeight - 1
                self.placeDetailsView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(positionY)-[dropView(txtFldHeight)]", options: NSLayoutFormatOptions(rawValue:0), metrics: txtMetricDic, views: self.layoutDic))
                self.placeDetailsView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(8)-[dropView]-(8)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: self.layoutDic))
                self.dropView.layer.borderColor = UIColor.textFieldUnderLineColor().CGColor
                self.dropView.layer.borderWidth = 1.0
                self.dropImage = UIImageView.init()
                self.dropView.addSubview(self.dropImage)
                self.dropView.backgroundColor = UIColor.whiteColor()
                self.dropImage.translatesAutoresizingMaskIntoConstraints = false
                self.dropImage.image = Extensions.isIpadDevice() ? UIImage(named: "drop1_iPad") : UIImage(named: "drop1")
                self.layoutDic["dropImage"] = self.dropImage
                
                self.dropView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[dropImage]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: self.layoutDic))
                if Extensions.getSelectedLanguage() == "ar" {
                    self.dropView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[dropImage(10)]-(LeadingImageConstrain)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: constrainImageDic, views: self.layoutDic))
                } else {
                    self.dropView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(LeadingImageConstrain)-[dropImage(10)]", options: NSLayoutFormatOptions(rawValue:0), metrics: constrainImageDic, views: self.layoutDic))
                }
                //Drop Marquee
                self.dropLbl = MarqueeLabel.init()
                self.dropView.addSubview(self.dropLbl)
                self.dropLbl.translatesAutoresizingMaskIntoConstraints = false
                self.layoutDic["dropLbl"] = self.dropLbl
                self.dropLbl.type = .Continuous
                self.dropLbl.textColor = UIColor.blackTextColor()
                self.dropLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(14)
                self.dropLbl.textAlignment = NSTextAlignment.Center
                self.dropView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[dropLbl]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: self.layoutDic))
                
                Extensions.getSelectedLanguage() == "ar" ? self.dropView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(5)-[dropLbl]-(marqueeLblWidthConstrain)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: ["marqueeLblWidthConstrain":marqueeLblWidthConstrain], views: self.layoutDic)) : self.dropView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(marqueeLblWidthConstrain)-[dropLbl]-(5)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: ["marqueeLblWidthConstrain":marqueeLblWidthConstrain], views: self.layoutDic))
                self.dropLbl.text = "\(self.tripdetailDic.objectForKey("drop_location")!)"
                
                var height = self.txtFldHeight * 2
                
                if("\(self.tripdetailDic.objectForKey("drop_location")!)" == "") {
                    height = self.txtFldHeight
                    self.dropView.hidden = true
                    self.pickUpImage.image = Extensions.isIpadDevice() ? UIImage(named: "pickup1_iPad") : UIImage(named: "pickup1")
                }
                self.view.addConstraint(NSLayoutConstraint.init(item: self.placeDetailsView, attribute: .Top, relatedBy: .Equal, toItem: self.tripDetailBgView, attribute: .Bottom, multiplier: 1.0, constant: 15))
                self.placeDetailViewHeightConstaint = NSLayoutConstraint.init(item: self.placeDetailsView, attribute: .Height, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: height)
                self.placeDetailsView.addConstraint(self.placeDetailViewHeightConstaint)
                
                //Setting the driver marker
                self.driverMarker.icon = UIImage(named: AppInfo.sharedInfo.myCarIcon())
                self.driverMarker.map = self.tripMapView
                
                //Setting the pickup Marker
                let pickUpMarker = GMSMarker.init(position: CLLocationCoordinate2DMake(Double("\(self.tripdetailDic.objectForKey("pickup_latitude")!)")!,Double("\(self.tripdetailDic.objectForKey("pickup_longitude")!)")! ))
                
                pickUpMarker.snippet = "\(self.tripdetailDic.objectForKey("current_location") == nil ? self.tripdetailDic.objectForKey("pickup_location")! : self.tripdetailDic.objectForKey("current_location")!)"
                pickUpMarker.icon = UIImage(named: "map-icon1")
                pickUpMarker.map = self.tripMapView
                
                //Setting the drop marker if the drop location is not empty
                if "\(self.tripdetailDic.objectForKey("drop_location")!)" != "" &&
                    "\(self.tripdetailDic.objectForKey("drop_latitude")!)" != "0" {
                    
                  //  print("Trip Detail Dic-->\(self.tripdetailDic)")
                    
                    let dropMarker = GMSMarker.init(position: CLLocationCoordinate2DMake(Double("\(self.tripdetailDic.objectForKey("drop_latitude")!)")!,Double("\(self.tripdetailDic.objectForKey("drop_longitude")!)")! ))
                    
                    dropMarker.snippet = "\(self.tripdetailDic.objectForKey("drop_location")!)"
                    dropMarker.icon = UIImage(named: "map-icon2")
                    dropMarker.map = self.tripMapView
                }
            } else {
                Extensions.showAlert("APP TITLE".localized(), messageString: resultDic.objectForKey("message") as! String)
            }
        }
    }
    
    func updatePlaceDetails()->Void {
        
        //Redrwaing the trip details with changed information after starting trip
        tripMapView.clear()
        
        self.pickUpMarqueeLbl.text = "\(self.tripdetailDic.objectForKey("current_location") == nil ? self.tripdetailDic.objectForKey("pickup_location")! : self.tripdetailDic.objectForKey("current_location")! )"
        
        dropLbl.text = "\(self.tripdetailDic.objectForKey("drop_location")!)"
        
        self.driverMarker.icon = UIImage(named: AppInfo.sharedInfo.myCarIcon())
        self.driverMarker.map = self.tripMapView
        
        let pickUpMarker = GMSMarker.init(position: CLLocationCoordinate2DMake(Double("\(self.tripdetailDic.objectForKey("pickup_latitude")!)")!,Double("\(self.tripdetailDic.objectForKey("pickup_longitude")!)")! ))
        
        pickUpMarker.snippet = "\(self.tripdetailDic.objectForKey("current_location") == nil ?   self.tripdetailDic.objectForKey("pickup_location")! : self.tripdetailDic.objectForKey("current_location")!)"
        pickUpMarker.icon = UIImage(named: "map-icon1")
        pickUpMarker.map = self.tripMapView
        
        if "\(self.tripdetailDic.objectForKey("drop_location")!)" != "" &&
            "\(self.tripdetailDic.objectForKey("drop_latitude")!)" != "0" {
            
            let dropMarker = GMSMarker.init(position: CLLocationCoordinate2DMake(Double("\(self.tripdetailDic.objectForKey("drop_latitude")!)")!,Double("\(self.tripdetailDic.objectForKey("drop_longitude")!)")! ))
            
            dropMarker.snippet = "\(self.tripdetailDic.objectForKey("drop_location")!)"
            dropMarker.icon = UIImage(named: "map-icon2")
            dropMarker.map = self.tripMapView
        }
    }
    
    func rectForText(text: String, font: UIFont, maxSize: CGSize) -> CGFloat {
        //This is a method to calculate the height
        let label = UILabel(frame: CGRectMake(0, 0, maxSize.width, maxSize.height))
        label.numberOfLines = 6
        label.lineBreakMode = NSLineBreakMode.ByWordWrapping
        label.font = UIFont.setAppFont(13)
        label.text = text
        
        label.sizeToFit()
        
        return label.frame.height
    }
    
    //Display Total Distance and Speed on the navigation bar once
    //the trip is started
    func createSpeedandKmLabels()->Void {
        var layoutDicKm = [String:AnyObject]()
        let showKmMsg = UILabel.init()
        showKmMsg.textColor = UIColor.whiteTextColor()
        showKmMsg.font = UIFont.setAppFont(13)
        showKmMsg.translatesAutoresizingMaskIntoConstraints = false
        layoutDicKm["showKmMsg"] = showKmMsg
        
        let metricString = String(format:"%@ %@","Total".localized(),"km".localized())
        showKmMsg.text = metricString
        
        navigationView.addSubview(showKmMsg)
        
        navigationView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(23)-[showKmMsg(18)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: layoutDicKm))
        navigationView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(8)-[showKmMsg(100)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: layoutDicKm))
        
        showKm.textColor = UIColor.whiteTextColor()
        showKm.font = UIFont.setAppFont(13)
        showKm.textAlignment = NSTextAlignment.Center
        showKm.translatesAutoresizingMaskIntoConstraints = false
        layoutDicKm["showKm"] = showKm
        
        showKm.text = NSUserDefaults.standardUserDefaults().objectForKey("lastNotedDistance") == nil ? "00" : NSUserDefaults.standardUserDefaults().objectForKey("lastNotedDistance") as! String
        
        navigationView.addSubview(showKm)
        
        navigationView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[showKmMsg]-(2)-[showKm(16)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: layoutDicKm))
        navigationView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(9)-[showKm(57)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: layoutDicKm))
        titleHeightConstraint.constant = 20
        
        speedLbl.textColor = UIColor.whiteTextColor()
        speedLbl.font = UIFont.setAppFont(11)
        speedLbl.textAlignment = NSTextAlignment.Center
        speedLbl.translatesAutoresizingMaskIntoConstraints = false
        layoutDicKm["speedLbl"] = speedLbl
        layoutDicKm["titleLbl"] = titleLbl
        
        speedLbl.text = String(format:"%@ 0 %@","Speed".localized(),"km/h".localized())
        
        navigationView.addSubview(speedLbl)
        
        navigationView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[titleLbl]-(3)-[speedLbl(15)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: layoutDicKm))
        
        navigationView.addConstraint(NSLayoutConstraint(item: speedLbl, attribute: .CenterX, relatedBy: .Equal, toItem: navigationView, attribute: .CenterX, multiplier: 1.0, constant: 0))
        
        speedLbl.addConstraint(NSLayoutConstraint(item: speedLbl, attribute: .Width, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: 100))
        
        self .showWaitingTime()
    }
    
    //MARK: Move Back
    func goBackFromTripIn()->Void {
        if IsItFromAcceptPage {
            self.navigationController?.popToViewController(((self.navigationController?.viewControllers)! as NSArray).objectAtIndex(0) as! UIViewController, animated: true)
        } else {
            self.navigationController?.popViewControllerAnimated(true)
        }
    }
    
    //MARK: Trip Cancel
    func tripCancelButtonTapped()->Void {
        //Showing the alert
        GKAlert.sharedInstance.Delegate = self
        GKAlert.sharedInstance.showAlertWith("Trip cancel".localized(),
                                             message: "Are you sure you want to cancel this trip?".localized(),
                                             buttonTitle1: "YES".localized(),
                                             buttonTitle2: "CANCEL".localized(),
                                             key: "TripCancel")
    }
    
    //MARK: Mimimize Maximize
    func minimizeMaximizeBtnTapped(btn:AnyObject)->Void {
        //Show or Hide the Trip Detail View
        if tripDetailBgView.hidden {
            tripDetailBgView.hidden = false
            maximizeBtn.hidden = true
        } else {
            tripDetailBgView.hidden = true
            maximizeBtn.hidden = false
        }
    }
    
    //MARK: Calling Passenger
    func callPassengerBtnTapped()->Void {
        let networkInfo = CTTelephonyNetworkInfo()
        let carrier:CTCarrier! = networkInfo.subscriberCellularProvider
        
        //Cheking whether the device have a sim
        if carrier == nil {
            //No Sim
            Extensions.showAlert("APP TITLE".localized(), messageString: "No sim card installed")
        } else {
            //Sim is there,Trying to call the number
            let phoneURL = NSURL.init(string: "telprompt://\(passengerPhoneNumber)")
            
            if UIApplication.sharedApplication().canOpenURL(phoneURL!) {
                UIApplication.sharedApplication().openURL(phoneURL!)
            } else {
                //Cant make a call,showing alert
                Extensions.showAlert("APP TITLE".localized(), messageString: "Call facility is not available on your device".localized())
            }
        }
    }
    
    //MARK: Driver Status Updation
    func driverStatusBtnTapped()->Void {
        //  driverStatusBtn.backgroundColor = UIColor.getTouchBtnColor()
        
        if driverStatusBtn.titleLabel?.text == "I'VE ARRIVED".localized().uppercaseString {
            //Driver Arrival status,Calling API
            let postDic:NSDictionary = ["trip_id":Extensions.onGoingTripId()]
            
            APIDownlaod.downloadDataFromServer("\(k_BaseURL)\(apiKey)/?lang=\(Extensions.getSelectedLanguage())&type=driver_arrived", bodyData: postDic, method: "POST", key: "", completion: { (resultDic) -> Void in
                
                
                if resultDic.objectForKey("status") as! Int == 1 {
                    //Success
                    //  self.driverStatusBtn.backgroundColor = UIColor.getApplicationSubmitColor()
                    self.driverStatusBtn.setTitle("START TRIP".localized().uppercaseString, forState: UIControlState.Normal)
                    self.driverStatusBtn.setBackgroundImage(UIImage(named: "greenBG"), forState: .Normal)
                    
                    //Changing the page title
                    self.titleLbl.text = "Waiting For Passenger".localized().uppercaseString
                    Extensions.setDriverCurrentStatus(k_DriverBusy)
                    self.enableDisableVoiceNavigation()
                    self.driverStatusBtn.tag = 0
                } else if resultDic.objectForKey("status") as! Int == -1 {
                    //Not success
                    Extensions.showAlert("APP TITLE".localized(), messageString: resultDic.objectForKey("message") as! String)
                    // self.driverStatusBtn.backgroundColor = UIColor.getApplicationSubmitColor()
                } else {
                    Extensions.setOngoingTripId("")
                    Extensions.setDriverCurrentStatus(k_DriverFree)
                    self.performSelectorOnMainThread(#selector(TripInProgressViewController.goBackFromTripIn), withObject: nil, waitUntilDone: true)
                    Extensions.showAlert("APP TITLE".localized(), messageString: resultDic.objectForKey("message") as! String)
                }
            })
        }
        else if driverStatusBtn.titleLabel?.text == "START TRIP".localized().uppercaseString {
            
            NSUserDefaults.standardUserDefaults().setObject(NSDate.init(), forKey: "TimeBeforApplicationTerminated")
            
            //Trip Started Status
            if LocationManager.sharedInstance.locationManager.location?.coordinate.latitude != nil &&
                LocationManager.sharedInstance.locationManager.location?.coordinate.latitude != 0 &&
                LocationManager.sharedInstance.locationManager.location?.horizontalAccuracy < 280 {
                
                //Getting the current address from Coordinate
                geoCoder.reverseGeocodeCoordinate(LocationManager.sharedInstance.locationManager.location!.coordinate) { (response, error) -> Void in
                    
                    if error != nil {
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
                                    
                                    //Setting the POST Dic and making the API Call
                                    let postDic:NSDictionary = ["driver_id":"\(Extensions.userLoginInfos().objectForKey("userid")!)",
                                                                "trip_id":Extensions.onGoingTripId(),
                                                                "latitude":LocationManager.sharedInstance.locationManager.location!.coordinate.latitude,
                                                                "longitude":LocationManager.sharedInstance.locationManager.location!.coordinate.longitude,
                                                                "status":k_DriverActive,
                                                                "actual_pickup_location":convertedAddressLine1]
                                    
                                    APIDownlaod.downloadDataFromServer("\(k_BaseURL)\(apiKey)/?lang=\(Extensions.getSelectedLanguage())&type=driver_status_update", bodyData: postDic, method: "POST", key: "", completion: { (resultDic) -> Void in
                                        
                                       // print(resultDic)
                                        
                                        if resultDic.objectForKey("status") as! Int == 1 {
                                            //Success
                                            //Setting the driverstatus btn tag as 1,the waiting timer will allow to run only if the driver btn tag is 1
                                            self.driverStatusBtn.tag = 1
                                            //  self.driverStatusBtn.backgroundColor = UIColor.getApplicationSubmitColor()
                                            self.driverStatusBtn.setTitle("END TRIP".localized().uppercaseString, forState: UIControlState.Normal)
                                            self.driverStatusBtn.setBackgroundImage(UIImage(named: "signinButtonbg"), forState: .Normal)
                                            
                                            self.titleLbl.text = "Trip in progress".localized().uppercaseString
                                            self.tripdetailDic = resultDic.objectForKey("detail") as! NSDictionary
                                            self.updatePlaceDetails()
                                            Extensions.setDriverCurrentStatus(k_DriverActive)
                                            Extensions.setWaitingTime("00:00:00")
                                            self.enableDisableVoiceNavigation()
                                            
                                            if Extensions.getSelectedLanguage() == "ar" {
                                                self.nameXpositionConstraint?.constant = -10
                                            } else {
                                                self.nameXpositionConstraint?.constant = 10
                                            }
                                            
                                            self.separtorLbl.hidden = true
                                            self.buttonCancel.hidden = true
                                            self.backBtn.hidden = true
                                            
                                            self.createSpeedandKmLabels()
                                            self.tripCancelBtn.userInteractionEnabled = false
                                            self.tripCancelBtn.hidden = true
                                            self.tripCancelBtn.setTitleColor(UIColor(red: 238/255.0, green: 51/255.0, blue: 36/255.0, alpha: 0.5), forState:UIControlState.Normal )
                                        } else if resultDic.objectForKey("status") as! Int == -1 {
                                            Extensions.showAlert("APP TITLE".localized(), messageString: resultDic.objectForKey("message") as! String)
                                            // self.driverStatusBtn.backgroundColor = UIColor.getApplicationSubmitColor()
                                        } else if (resultDic.objectForKey("status") as! Int == 7) {
                                            Extensions.setOngoingTripId("")
                                            Extensions.setDriverCurrentStatus(k_DriverFree)
                                            self.performSelectorOnMainThread(#selector(TripInProgressViewController.goBackFromTripIn), withObject: nil, waitUntilDone: true)
                                            Extensions.showAlert("APP TITLE".localized(), messageString: resultDic.objectForKey("message") as! String)
                                        } else {
                                            self.performSelectorOnMainThread(#selector(TripInProgressViewController.goBackFromTripIn), withObject: nil, waitUntilDone: true)
                                            Extensions.showAlert("APP TITLE".localized(), messageString: resultDic.objectForKey("message") as! String)
                                        }
                                    })
                                    
                                    
                                    
                                }
                                
                                
                            }
                        }
                        
                    }
                    
                    
                    
                    
                }
                
                
                
            }
            else
            {
                Extensions.showAlert("", messageString: "Please wait till the location update gets completed".localized())
            }
            
            
        }
        else if driverStatusBtn.titleLabel?.text == "END TRIP".localized().uppercaseString {
            //End Trip
            //Shwoing the alert
            GKAlert.sharedInstance.showAlertWith("APP TITLE".localized(),
                                                 message: "Are you sure you want to complete this trip?".localized(),
                                                 buttonTitle1: "YES".localized(),
                                                 buttonTitle2: "CANCEL".localized(),
                                                 key: "EndTrip")
            GKAlert.sharedInstance.Delegate = self
        }
        
    }
    //MARK:AlertView Delegate
    func GKAlertClickedButtonAtIndex(index:Int,tag:String)->Void {
        
        if tag == "EndTrip" && index == 0 {
            //Got Confirmation as Yes and Ending the trip
            TrackLocation.sharedInstance.stopWaitingTime()
            Extensions.setAboveBelowSpeedTimerStatus(false)
            
            if LocationManager.sharedInstance.locationManager.location?.coordinate.latitude != nil &&
                LocationManager.sharedInstance.locationManager.location?.coordinate.latitude != 0 &&
                LocationManager.sharedInstance.locationManager.location?.horizontalAccuracy < 280 {
                
                NSNotificationCenter.defaultCenter().postNotificationName("tripEndNotification", object: nil, userInfo: nil)
                GKAlert.sharedInstance.Delegate = self
                
                //Getting the current address
                self.geoCoder.reverseGeocodeCoordinate(LocationManager.sharedInstance.locationManager.location!.coordinate) { (response, error) -> Void in
                    
                    if error != nil {
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
                                    
                                    //Calculating the Waiting time
                                    let waitingTimeString = Extensions.getWaitingTime()
                                    
                                    var hour:Int!
                                    var minute:Int!
                                    var second:Int!
                                    
                                    hour = Int(waitingTimeString.substringWithRange(waitingTimeString.startIndex.advancedBy(0) ..< waitingTimeString.startIndex.advancedBy(2)))
                                    
                                    minute = Int(waitingTimeString.substringWithRange(waitingTimeString.startIndex.advancedBy(3) ..< waitingTimeString.startIndex.advancedBy(5)))
                                    second = Int(waitingTimeString.substringWithRange( waitingTimeString.startIndex.advancedBy(6) ..< waitingTimeString.startIndex.advancedBy(8)))
                                    
                                    let floatMinute = Double(minute)/Double(60)
                                    let floatSeconds = Double(second)/Double(3600)
                                    let TotalHours = Double(hour)+floatMinute + floatSeconds
                                    
                                    //Changing the driver status button tag to 0
                                    self.driverStatusBtn.tag = 0
                                    
                                    //Setting the POST DIC and Making the API CALL
                                    let postDic:NSDictionary = ["trip_id":Extensions.onGoingTripId(),
                                                                "drop_latitude":LocationManager.sharedInstance.locationManager.location!.coordinate.latitude,
                                                                "drop_longitude":LocationManager.sharedInstance.locationManager.location!.coordinate.longitude,
                                                                "distance":"0",
                                                                "drop_location":convertedAddressLine1,
                                                                "actual_distance":"",
                                                                "waiting_hour":String(format:"%0.2f",TotalHours),
                                                                "driver_app_version":AppInfo.sharedInfo.appVersion,
                                                                "app_version":AppInfo.sharedInfo.appVersion,
                                                                "brand_name":AppInfo.sharedInfo.deviceName,
                                                                "os_version":AppInfo.sharedInfo.osVersion,
                                                                "device_type":AppInfo.sharedInfo.deviceType]
                                    
                                    APIDownlaod.downloadDataFromServer("\(k_BaseURL)\(apiKey)/?lang=\(Extensions.getSelectedLanguage())&type=complete_trip", bodyData: postDic, method: "POST", key: "", completion: { (resultDic) -> Void in
                                        
                                        if resultDic.objectForKey("status") as! Int == 4 {
                                            //Successs,and moving to Payment page
                                            Extensions.setWaitingTime("00:00:00")
                                            self.paymentDic = resultDic.objectForKey("detail") as! NSDictionary
                                            NSUserDefaults.standardUserDefaults().removeObjectForKey("lastNotedDistance")
                                            self.performSegueWithIdentifier("toPaymentSegue", sender: self)
                                        } else {
                                            //Failed
                                            Extensions.showAlert("APP TITLE".localized(), messageString: resultDic.objectForKey("message") as! String)
                                        }
                                    })
                                }
                            }
                        }
                    }
                }
            } else {
                Extensions.showAlert("", messageString: "Please wait till the location update gets completed".localized())
            }
        } else if tag == "EndTrip" && index == 1 {
            //driverStatusBtn.backgroundColor = UIColor.getApplicationSubmitColor()
        } else if tag == "TripCancel" && index == 0 {
            //Setting the POST Data
            let postDataDic = ["pass_logid":Extensions.onGoingTripId(),
                               "driver_id":"\(Extensions.userLoginInfos().objectForKey("userid")!)",
                               "taxi_id":"\(Extensions.userLoginInfos().objectForKey("taxi_id")!)",
                               "company_id":"\(Extensions.userLoginInfos().objectForKey("company_id")!)",
                               "driver_reply":"C",
                               "field":"",
                               "flag":"1",
                               "device_type":AppInfo.sharedInfo.deviceType,
                               "brand_name":AppInfo.sharedInfo.deviceName,
                               "os_version":AppInfo.sharedInfo.osVersion,
                               "app_version":AppInfo.sharedInfo.appVersion]
            
            //API Call
            APIDownlaod.downloadDataFromServer("\(k_BaseURL)\(apiKey)/?lang=\(Extensions.getSelectedLanguage())&type=driver_reply", bodyData:postDataDic, method: "POST", key: "") { (resultDic) -> Void in
                
                if resultDic.objectForKey("status") as! Int == 3 {
                    
                    Extensions.setDriverStatistics(resultDic.objectForKey("driver_statistics") as! NSDictionary)
                    
                    Extensions.setOngoingTripId("")
                    Extensions.setAboveBelowSpeedTimerStatus(false)
                    Extensions.setDriverCurrentStatus(k_DriverFree)
                    
                    APP.isTripIsCancelled = true
                    self.goBackFromTripIn()
                    
                    Extensions.showAlert("Trip cancel".localized(), messageString: resultDic.objectForKey("message") as! String)
                } else {
                    Extensions.showAlert("Trip cancel".localized(), messageString: resultDic.objectForKey("message") as! String)
                }
            }
        }
    }
    
    func GKAlertClickedButtonAtIndexWithText(index:Int,tag:String,text:String) {
        
    }
    
    //MARK: Voice Navigation
    func voiceNavigationBtnTapped()->Void {
        
        if LocationManager.sharedInstance.locationManager.location?.coordinate.latitude == nil ||
            LocationManager.sharedInstance.locationManager.location?.coordinate.latitude == 0 {
            //NO GPS
        } else {
            //If the status is confirmed,showing the root from driver location to Pickup
            if driverStatusBtn.titleLabel?.text == "I'VE ARRIVED".localized().uppercaseString {
                var googleMapUrl:String!
                
                if UIApplication.sharedApplication().canOpenURL(NSURL.init(string:"comgooglemaps://")!) {
                    googleMapUrl = "comgooglemaps-x-callback://?saddr=\(LocationManager.sharedInstance.locationManager.location!.coordinate.latitude),\(LocationManager.sharedInstance.locationManager.location!.coordinate.longitude)&daddr=\(tripdetailDic.objectForKey("pickup_latitude")!),\(tripdetailDic.objectForKey("pickup_longitude")!)&directionsmode=driving&x-success=://?resume=true&x-source="
                    UIApplication.sharedApplication().openURL(NSURL.init(string: googleMapUrl)!)
                } else {
                    googleMapUrl = "https://maps.google.com/maps?saddr=\(LocationManager.sharedInstance.locationManager.location!.coordinate.latitude),\(LocationManager.sharedInstance.locationManager.location!.coordinate.longitude)&daddr=\(tripdetailDic.objectForKey("pickup_latitude")!),\(tripdetailDic.objectForKey("pickup_longitude")!)"
                    
                    if #available(iOS 9.0, *) {
                        //If greater than 9.0 open url in safari view controller,insted of browser
                        let safariView = SFSafariViewController.init(URL: NSURL.init(string: googleMapUrl)!)
                        self.presentViewController(safariView, animated: true, completion: nil)
                    } else {
                        // Fallback on earlier versions,open in safari browser
                        UIApplication.sharedApplication().openURL(NSURL.init(string: googleMapUrl)!)
                    }
                }
            } else {
                //Showing the root from current location to Drop(Trip Started)
                var googleMapUrl:String!
                
                if UIApplication.sharedApplication().canOpenURL(NSURL.init(string:"comgooglemaps://")!) {
                    googleMapUrl = "comgooglemaps-x-callback://?saddr=\(LocationManager.sharedInstance.locationManager.location!.coordinate.latitude),\(LocationManager.sharedInstance.locationManager.location!.coordinate.longitude)&daddr=\(tripdetailDic.objectForKey("drop_latitude")!),\(tripdetailDic.objectForKey("drop_longitude")!)&directionsmode=driving&x-success=://?resume=true&x-source="
                    UIApplication.sharedApplication().openURL(NSURL.init(string: googleMapUrl)!)
                } else {
                    googleMapUrl = "https://maps.google.com/maps?saddr=\(LocationManager.sharedInstance.locationManager.location!.coordinate.latitude),\(LocationManager.sharedInstance.locationManager.location!.coordinate.longitude)&daddr=\(tripdetailDic.objectForKey("drop_latitude")!),\(tripdetailDic.objectForKey("drop_longitude")!)"
                    if #available(iOS 9.0, *) {
                        //If greater than 9.0 open url in safari view controller,insted of browser
                        let safariView = SFSafariViewController.init(URL: NSURL.init(string: googleMapUrl)!)
                        self.presentViewController(safariView, animated: true, completion: nil)
                    } else {
                        // Fallback on earlier versions,open in safari browser
                        UIApplication.sharedApplication().openURL(NSURL.init(string: googleMapUrl)!)
                    }
                }
            }
        }
    }
    
    func enableDisableVoiceNavigation()->Void {
        if driverStatusBtn.titleLabel?.text == "I'VE ARRIVED".localized().uppercaseString {
            GpsNavigationBtn.hidden = false
            self.pickUpRoot()
        } else if driverStatusBtn.titleLabel?.text == "START TRIP".localized().uppercaseString {
            GpsNavigationBtn.hidden = true
            if "\(tripdetailDic.objectForKey("drop_location")!)" != "" {
                self.drawPickupToDropRoot()
            }
            
        } else if "\(tripdetailDic.objectForKey("drop_location")!)" == "" {
            GpsNavigationBtn.hidden = true
        } else {
            GpsNavigationBtn.hidden = false
            self.drawPickupToDropRoot()
        }
    }
    
    //MARK: Pickup Root
    func pickUpRoot()->Void {
        
        if LocationManager.sharedInstance.locationManager.location?.coordinate.latitude == nil ||
            LocationManager.sharedInstance.locationManager.location?.coordinate.longitude == nil {
           // print("NO GPS")
        } else {
            //getting the direction suning google direction API
            let url = "http://maps.googleapis.com/maps/api/directions/json?origin=\(LocationManager.sharedInstance.locationManager.location!.coordinate.latitude),\(LocationManager.sharedInstance.locationManager.location!.coordinate.longitude)&destination=\(tripdetailDic.objectForKey("pickup_latitude")!),\(tripdetailDic.objectForKey("pickup_longitude")!)&sensor=true"
           // print("URL here->\(url)")
            APIDownlaod.sendGetMethod(url, key: "root", completion: { (resultDic) -> Void in
                
                if resultDic.objectForKey("status") as! String == "OK" {
                    let rootPath = GMSPath.init(fromEncodedPath: "\(resultDic.objectForKey("routes")!.objectAtIndex(0).objectForKey("overview_polyline")!.objectForKey("points")!)")
                    
                    let rootLine = GMSPolyline.init(path: rootPath)
                    rootLine.strokeColor = UIColor.redColor()
                    rootLine.strokeWidth = 3.0
                    rootLine.map = self.tripMapView
                } else {
                   // print("Unable to get the root from the google")
                }
            })
            
        }
    }
    
    //MARK: Pickup to Drop Root
    func drawPickupToDropRoot()->Void {
        if LocationManager.sharedInstance.locationManager.location?.coordinate.latitude == nil ||
            LocationManager.sharedInstance.locationManager.location?.coordinate.longitude == nil {
           // print("NO GPS")
        } else {
            //getting the direction suning google direction API
            let url = "http://maps.googleapis.com/maps/api/directions/json?origin=\(tripdetailDic.objectForKey("pickup_latitude")!),\(tripdetailDic.objectForKey("pickup_longitude")!)&destination=\(tripdetailDic.objectForKey("drop_latitude")!),\(tripdetailDic.objectForKey("drop_longitude")!)&sensor=true"
            
            APIDownlaod.sendGetMethod(url, key: "root", completion: { (resultDic) -> Void in
                
                if resultDic.objectForKey("status") as! String == "OK" {
                    
                    let rootPath = GMSPath.init(fromEncodedPath: "\(resultDic.objectForKey("routes")!.objectAtIndex(0).objectForKey("overview_polyline")!.objectForKey("points")!)")
                    
                    let rootLine = GMSPolyline.init(path: rootPath)
                    rootLine.strokeColor = UIColor.redColor()
                    rootLine.strokeWidth = 3.0
                    rootLine.map = self.tripMapView
                } else {
                   // print("Unable to get the root from the google")
                }
            })
            
        }
    }
    //MARK: Location Manager Delegates
    func locationUpdation(location:CLLocation, userDirection:CLLocationDirection)->Void {
        var zoomLevel:Float
        
        direction = userDirection
        
        //Setting the zoom level
        if tripMapView.camera.zoom <= 5 {
            zoomLevel = 16
        } else {
            zoomLevel = tripMapView.camera.zoom
        }
        //Setting the camera position for the map
        let position:GMSCameraPosition = GMSCameraPosition.cameraWithLatitude(location.coordinate.latitude, longitude: location.coordinate.longitude, zoom: zoomLevel)
        tripMapView .animateToCameraPosition(position)
        //Setting the position of the driver marker
        driverMarker.position = location.coordinate
        driverMarker.rotation = direction
        
        //Calculating the speed of the car
        if driverStatusBtn.titleLabel?.text == "END TRIP".localized().uppercaseString && driverStatusBtn.tag == 1 {
            
            if lastLocation != nil {
                
                let distance = location.distanceFromLocation(lastLocation)
                let sinceLastLocationUpdateTime = location.timestamp.timeIntervalSinceDate(lastLocation.timestamp)
                
                var calculatedSpeed = (distance/1000) / (sinceLastLocationUpdateTime/60/60)
                
                if "\(Extensions.coreConfigInfos().objectForKey("detail")!.objectAtIndex(0).objectForKey("metric")!)" == "MILES" {
                    calculatedSpeed = calculatedSpeed * 0.621371
                }
                
                if isFirstTimeLoadingSpeed {
                    speedLbl.text = String(format:"%@ 0 %@","Speed".localized(),"km/h".localized())
                    isFirstTimeLoadingSpeed = false
                } else {
                    speedLbl.text = String(format:"%@ %0.0f %@","Speed".localized(),Float("\(calculatedSpeed)")!,"km/h".localized())
                }
                
                if (calculatedSpeed > minimumSpeed) {
                    //Above the minimum speed,stopping the timer
                    TrackLocation.sharedInstance.stopWaitingTime()
                    Extensions.setAboveBelowSpeedTimerStatus(false)
                } else {
                    //Below the speed,Starting the timer
                    if !CLLocationManager.locationServicesEnabled() ||
                        CLLocationManager.authorizationStatus() == .Denied ||
                        LocationManager.sharedInstance.locationManager.location?.coordinate.latitude == 0 ||
                        LocationManager.sharedInstance.locationManager.location?.coordinate.latitude == nil {
                      //  print("NO GPS HERE")
                    } else {
                        TrackLocation.sharedInstance.startWaitingTime()
                        Extensions.setAboveBelowSpeedTimerStatus(true)
                    }
                }
                lastLocation = location
            } else {
                lastLocation = location
            }
        } else {
            TrackLocation.sharedInstance.stopWaitingTime()
            Extensions.setAboveBelowSpeedTimerStatus(false)
        }
        
    }
    //    func headingUpdation(newHeading:CLHeading)->Void
    //    {
    //        //Making the rotation to the driver marker
    //        direction = newHeading.magneticHeading
    //    }
    
    //Notification Receiver
    func waitingTimeNotificationAction()->Void {
        waitingTimeLbl.text = "Waiting Time".localized() + " : \(Extensions.getWaitingTime())"
    }
    
    func distnanceNotificationAction(noti:NSNotification)->Void {
        let notificationDic:NSDictionary = noti.userInfo!
        showKm.text = "\(notificationDic.objectForKey("distance")!)"
        NSUserDefaults.standardUserDefaults().setObject("\(notificationDic.objectForKey("distance")!)", forKey: "lastNotedDistance")
    }
    //MARK: View will Disappear
    override func viewWillDisappear(animated: Bool) {
        NSNotificationCenter.defaultCenter().removeObserver(self, name: "waitingTimeNotification", object: nil)
        NSNotificationCenter.defaultCenter().removeObserver(self, name: "distanceNotification", object: nil)
        Extensions.setIsInTripInProgressPage(false)
        NSNotificationCenter.defaultCenter().removeObserver(self, name: "dispatcherChangeDetailsNotification", object: nil)
        super.viewWillDisappear(animated)
    }
    
    //MARK: Prapare for Segue
    override func prepareForSegue(segue: UIStoryboardSegue, sender: AnyObject?) {
        
        if segue.identifier == "toPaymentSegue" {
            //Sending the payment details to Payment page
            let paymentObj = segue.destinationViewController as? PaymentViewController
            paymentObj?.paymentDetailDic = paymentDic
        }
    }
    
    func resetSpeed()->Void {
        speedLbl.text = ""
    }
    
    //MARK: Showing Waiting Time
    func showWaitingTime()->Void {
        
        waitingTimeLbl.translatesAutoresizingMaskIntoConstraints = false
        layoutDic["waitingTimeLbl"] = waitingTimeLbl
        waitingTimeLbl.backgroundColor = UIColor(red: 247/255.0, green: 247/255.0, blue: 247/255.0, alpha: 1.0)
        waitingTimeLbl.textAlignment = NSTextAlignment.Center
        waitingTimeLbl.font =  Extensions.isIpadDevice() ? UIFont.setAppFont(20) : UIFont.setAppFont(15)
        waitingTimeLbl.textColor = UIColor.blackTextColor()
        self.view.addSubview(waitingTimeLbl)
        
        var metricDic = [String:AnyObject]()
        metricDic["Height"] = Extensions.isIpadDevice() ? 50 : 40
        metricDic["positionY"] = Extensions.isIpadDevice() ? 192 : 137
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[topLayout]-(positionY)-[waitingTimeLbl(Height)]", options: NSLayoutFormatOptions(rawValue:0), metrics:metricDic, views: layoutDic))
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[waitingTimeLbl]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics:nil, views: layoutDic))
        waitingTimeLbl.text = "Waiting Time".localized()+" : "+"\(Extensions.getWaitingTime())"
        
        let separatorViewWaiting = UIView.init()
        waitingTimeLbl.addSubview(separatorViewWaiting)
        separatorViewWaiting.backgroundColor = UIColor.textFieldUnderLineColor()
        separatorViewWaiting.translatesAutoresizingMaskIntoConstraints = false
        layoutDic["separatorViewWaiting"] = separatorViewWaiting
        
        waitingTimeLbl.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[separatorViewWaiting(1)]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics:nil, views: layoutDic))
        waitingTimeLbl.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[separatorViewWaiting]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics:nil, views: layoutDic))
        
        self.detailViewHeightConstraint?.constant = Extensions.isIpadDevice() ? 180 : 120
    }
    
    //MARK:Enable DriverStausBtn
    func enableDriverStatusBtn() {
        driverStatusBtn.userInteractionEnabled = true
    }
    
    //MARK: Dispatcher TripDetail Change
    func dispatcherTripChange(noti:NSNotification)->Void {
        //Updating the new pickup and drop locations
        tripdetailDic = noti.userInfo
        self.updatePlaceDetails()
        self.enableDisableVoiceNavigation()
        self.pickUpImage.image = Extensions.isIpadDevice() ?UIImage(named: "pickup2_iPad") :  UIImage(named: "pickup2")
        var height = txtFldHeight * 2
        
        if("\(self.tripdetailDic.objectForKey("drop_location")!)" == "") {
            height = txtFldHeight
            self.dropView.hidden = true
            self.pickUpImage.image = Extensions.isIpadDevice() ? UIImage(named: "pickup1_iPad") : UIImage(named: "pickup1")
        } else {
            self.dropView.hidden = false
        }
        pickUpHeightConstraint?.constant = height
    }
}
