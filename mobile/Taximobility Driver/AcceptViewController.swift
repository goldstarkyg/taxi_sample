//
//  AcceptViewController.swift
//
//
//  Created by Gireesh on 3/1/16.
//
//

import UIKit
import CoreLocation
import AVFoundation
import AudioToolbox
import GoogleMaps

//MARK: Protocol
protocol acceptProtocol {
    func moveToInTripPage()->Void
}

class AcceptViewController: BaseViewController,UITableViewDataSource,UITableViewDelegate {
    //MARK: Declaration Section
    var AcceptDelegate:acceptProtocol?
    let acceptTbl:UITableView! = UITableView.init()
    var accepetRejectArray:NSArray! = NSArray()
    var timeRemainingLbl:UILabel = UILabel.init()
    var minValueLbl:UILabel! = UILabel.init()
    var secValueLbl:UILabel! = UILabel.init()
    var secondsRemaining:Int! = Int()
    var timeOutTimer:NSTimer! = NSTimer()
    var soundPlayer:AVAudioPlayer!
    var isDropThere:Bool = Bool()
    
    override func viewDidLoad() {
        super.viewDidLoad()
        //Setting title
        titleLbl.text = "TRIP REQUEST".localized().uppercaseString
        //Hidding the back button
        backBtn.hidden = true
        doneBtn.hidden = true
        
        if !CLLocationManager.locationServicesEnabled() || CLLocationManager.authorizationStatus() == .Denied {
            //NO GPS SHOW ALERT HERE
        }
        
        let pickupSpotMap = GMSMapView.init()
        pickupSpotMap.translatesAutoresizingMaskIntoConstraints = false;
        pickupSpotMap.trafficEnabled = true
        self.view.addSubview(pickupSpotMap);
        var layoutDic = [String:AnyObject]()
        layoutDic["topLayout"] = self.topLayoutGuide
        layoutDic["pickupSpotMap"] = pickupSpotMap
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[topLayout]-(44)-[pickupSpotMap]-(40)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[pickupSpotMap]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
        
        let pickUpCoordinate = CLLocationCoordinate2DMake(Double("\(Extensions.tripDetails().objectForKey("booking_details")!.objectForKey("pickup_latitude")!)")!, Double("\(Extensions.tripDetails().objectForKey("booking_details")!.objectForKey("pickup_longitude")!)")!)
        pickupSpotMap.camera = GMSCameraPosition.cameraWithTarget(pickUpCoordinate, zoom: 16)
        
        let pickUpMarker = GMSMarker.init(position: pickUpCoordinate)
        pickUpMarker.icon = Extensions.isIpadDevice() ? UIImage(named:"pickupPointer_iPad") : UIImage(named:"pickupPointer")
        pickUpMarker.map = pickupSpotMap
        
        self.setUpAcceptRejectView()
    }
    
    override func viewWillAppear(animated: Bool) {
        super.viewWillAppear(animated)
        //Marking that driver is in accept page
        Extensions.setDriverInAcceptPage(true)
    }
    
    override func viewDidLayoutSubviews() {
        let tableHeight = acceptTbl.contentSize.height
        
     //   print("Height=\(tableHeight)")
        
        var layoutDic = [String:AnyObject]()
        layoutDic["acceptTbl"] = acceptTbl
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[acceptTbl(tableHeight)]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["tableHeight":tableHeight], views: layoutDic))
        
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[acceptTbl]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: layoutDic))
    }
    
    //MARK:Setup Accept/Reject
    func setUpAcceptRejectView()->Void {
        
        //Creating a layout dictionary
        var layoutDic = [String:AnyObject]()
        layoutDic["topLayout"] = self.topLayoutGuide
        
        //Creating a table view
        acceptTbl.translatesAutoresizingMaskIntoConstraints = false
        acceptTbl.separatorStyle = UITableViewCellSeparatorStyle.None
        self.view.addSubview(acceptTbl)
        acceptTbl.scrollEnabled = false
        layoutDic["acceptTbl"] = acceptTbl
        
        acceptTbl.delegate = self
        acceptTbl.dataSource = self
        acceptTbl .reloadData()
        
        acceptTbl.backgroundColor = UIColor.shadedTableBgColor()
        
        //Setting the datas to be displayed
        let passengerDic:NSDictionary = ["Title":"Passenger Details".localized(),"Detail":""]
        let nameDic:NSDictionary = ["Title":"NAME".localized(),"Detail":"\(Extensions.tripDetails().objectForKey("booking_details")!.objectForKey("passenger_name")!)"]
        
        let pickupDic:NSDictionary = ["Title":"PICKUP LOCATION".localized(),"Detail":"\(Extensions.tripDetails().objectForKey("booking_details")!.objectForKey("pickupplace")!)"]
        
        let dropDic:NSDictionary = ["Title":"DROP LOCATION".localized(),"Detail":"\(Extensions.tripDetails().objectForKey("booking_details")!.objectForKey("drop")!)"]
        
        let noteDic:NSDictionary = ["Title":"Landmark".localized(),"Detail":"\(Extensions.tripDetails().objectForKey("notes")!)"]
        
        let acceptRejectDic:NSDictionary = ["Title":"Accept","Detail":""]
        
        //Setting the datas to be displayed,based on the condition
        if dropDic.objectForKey("Detail") as! String == "" && noteDic.objectForKey("Detail") as! String == "" {
            accepetRejectArray = [passengerDic,nameDic,pickupDic,acceptRejectDic]
            isDropThere = false
        } else if dropDic.objectForKey("Detail") as! String != "" && noteDic.objectForKey("Detail") as! String == "" {
            accepetRejectArray = [passengerDic,nameDic,pickupDic,dropDic,acceptRejectDic]
            isDropThere = true
        } else if dropDic.objectForKey("Detail") as! String == "" && noteDic.objectForKey("Detail") as! String != "" {
            accepetRejectArray = [passengerDic,nameDic,pickupDic,noteDic,acceptRejectDic]
            isDropThere = false
        } else {
            accepetRejectArray = [passengerDic,nameDic,pickupDic,dropDic,noteDic,acceptRejectDic]
            isDropThere = true
        }
        acceptTbl.reloadData()
        //Audio file
        let audioPath = NSBundle.mainBundle().pathForResource("Alert", ofType: "m4a")
        
        let audioPathURL = NSURL.fileURLWithPath(audioPath!)
        
        do {   //Playing the audio file
            soundPlayer = try AVAudioPlayer.init(contentsOfURL: audioPathURL)
            soundPlayer.numberOfLoops = -1
            soundPlayer.play()
        } catch {
            print("Error while trying to play audio")
        }
        
        //Starting the timer
        timeOutTimer = NSTimer.init(timeInterval: 1.0, target: self, selector: #selector(AcceptViewController.timeOutCalculation), userInfo: nil, repeats: true)
        NSRunLoop.currentRunLoop().addTimer(timeOutTimer!, forMode: NSRunLoopCommonModes)
    }
    
    //MARK:TimerFunction
    func timeOutCalculation()->Void {
        secondsRemaining = secondsRemaining - 1
        
        if !CLLocationManager.locationServicesEnabled() || CLLocationManager.authorizationStatus() == .Denied {
            //NO GPS,SHOW ALERT
        }
        timeRemainingLbl.text = "\(secondsRemaining!) " + "SECONDS LEFT TO ACCEPT".localized().uppercaseString
        secValueLbl.text = secondsRemaining > 9 ? "\(secondsRemaining)" : "0\(secondsRemaining)"
        if secondsRemaining == 0 {
            //Time Out Recahed ,stopping the timer and calling the API
            soundPlayer.stop()
            self.stopTimeOutTimer()
            self.callTimeOutApi()
        }
    }
    
    func stopTimeOutTimer()->Void {
        //Stopping the timer
        timeOutTimer.invalidate()
        if timeOutTimer!.valid {
            self.stopTimeOutTimer()
        }
    }
    
    //MARK:Time Out API
    func callTimeOutApi()->Void {
        //Setting the Post Data
        let postDataDic = ["trip_id":"\(Extensions.tripDetails().objectForKey("passengers_log_id")!)",
                           "driver_id":"\(Extensions.userLoginInfos().objectForKey("userid")!)",
                           "reason":"","reject_type":"0",
                           "taxi_id":"\(Extensions.userLoginInfos().objectForKey("taxi_id")!)",
                           "company_id":"\(Extensions.userLoginInfos().objectForKey("company_id")!)"]
        
        //API Call
        APIDownlaod.downloadDataFromServer("\(k_BaseURL)\(apiKey)/?lang=\(Extensions.getSelectedLanguage())&type=reject_trip", bodyData:postDataDic, method: "POST", key: "") { (resultDic) -> Void in
            
            if resultDic.objectForKey("status") as! Int == 7 {
                //Success
                Extensions.setDriverStatistics(resultDic.objectForKey("driver_statistics") as! NSDictionary )
                Extensions.setOngoingTripId("")
                Extensions.setDriverCurrentStatus(k_DriverFree)
                
                //Move back to home
                self.performSelectorOnMainThread(#selector(AcceptViewController.goBack), withObject: nil, waitUntilDone: true)
                //Showing the alert
                Extensions.showAlert("APP TITLE".localized(), messageString: resultDic.objectForKey("message") as! String)
            } else {
                Extensions.setDriverCurrentStatus(k_DriverFree)
                
                //Move back to home
                self.performSelectorOnMainThread(#selector(AcceptViewController.goBack), withObject: nil, waitUntilDone: true)
            }
        }
    }
    
    //MARK:Accept Api
    func callAcceptApi(btn:AnyObject)->Void {
        //Stopping the timer and sound
        soundPlayer.stop()
        self.stopTimeOutTimer()
        let acceptBtn = btn as! UIButton
        //        acceptBtn.backgroundColor = UIColor.getTouchBtnColor()
        acceptBtn.setBackgroundImage(UIImage(named: "DeclineButtonbg"), forState: .Normal)
        //Setting Post Data
        let postDataDic = ["pass_logid":"\(Extensions.tripDetails().objectForKey("passengers_log_id")!)",
                           "driver_id":"\(Extensions.userLoginInfos().objectForKey("userid")!)",
                           "taxi_id":"\(Extensions.userLoginInfos().objectForKey("taxi_id")!)",
                           "company_id":"\(Extensions.userLoginInfos().objectForKey("company_id")!)",
                           "driver_reply":k_DriverActive,
                           "field":"0",
                           "flag":"",
                           "device_type":AppInfo.sharedInfo.deviceType,
                           "brand_name":AppInfo.sharedInfo.deviceName,
                           "os_version":AppInfo.sharedInfo.osVersion,
                           "app_version":AppInfo.sharedInfo.appVersion]
        
        //API Call
        APIDownlaod.downloadDataFromServer("\(k_BaseURL)\(apiKey)/?lang=\(Extensions.getSelectedLanguage())&type=driver_reply", bodyData:postDataDic, method: "POST", key: "") { (resultDic) -> Void in
            
            if resultDic.objectForKey("status") as! Int == 1 {
                //Success
                //Setting the trip id
                Extensions.setOngoingTripId("\(Extensions.tripDetails().objectForKey("passengers_log_id")!)")
                Extensions.setAboveBelowSpeedTimerStatus(false)
                Extensions.setDriverCurrentStatus(k_DriverBusy)
                
                //allowing dispatcher complete trip
                Extensions.allowDispatcherCompleteTrip(true)
                
                //Moving to Trip in progress page,by using a delegate,which resulted in Dashboard
                //ViewController function  call
                self.AcceptDelegate?.moveToInTripPage()
            } else {
                //Moving back to home
                self.performSelectorOnMainThread(#selector(AcceptViewController.goBack), withObject: nil, waitUntilDone: true)
                //Showing Alert
                Extensions.showAlert("APP TITLE".localized(), messageString: resultDic.objectForKey("message") as! String)
            }
        }
    }
    
    //MARK:Reject API
    func callRejectApi()->Void {
        //Stopping timer and Sound
        soundPlayer.stop()
        self.stopTimeOutTimer()
        
        //Setting the POST Data
        let postDataDic = ["trip_id":"\(Extensions.tripDetails().objectForKey("passengers_log_id")!)",
                           "driver_id":"\(Extensions.userLoginInfos().objectForKey("userid")!)",
                           "reason":"",
                           "reject_type":"1",
                           "taxi_id":"\(Extensions.userLoginInfos().objectForKey("taxi_id")!)",
                           "company_id":"\(Extensions.userLoginInfos().objectForKey("company_id")!)"]
        
      //  print(postDataDic)
        
        //API CALL
        APIDownlaod.downloadDataFromServer("\(k_BaseURL)\(apiKey)/?lang=\(Extensions.getSelectedLanguage())&type=reject_trip", bodyData:postDataDic, method: "POST", key: "") { (resultDic) -> Void in
            
            if resultDic.objectForKey("status") as! Int == 6 {
                //Success
                //Setting driver statistics
                Extensions.setDriverStatistics(resultDic.objectForKey("driver_statistics") as! NSDictionary )
                //Clearing the trip ID
                Extensions.setOngoingTripId("")
                Extensions.setDriverCurrentStatus(k_DriverFree)
                
                //Moving back to home
                self.performSelectorOnMainThread(#selector(AcceptViewController.goBack), withObject: nil, waitUntilDone: true)
                //Show alert
                Extensions.showAlert("APP TITLE".localized(), messageString: resultDic.objectForKey("message") as! String)
            } else {
                
                Extensions.setDriverCurrentStatus(k_DriverFree)
                
                //Moving back to home
                self.performSelectorOnMainThread(#selector(AcceptViewController.goBack), withObject: nil, waitUntilDone: true)
                //Showing Alert
                Extensions.showAlert("APP TITLE".localized(), messageString: "Trip has been already cancelled".localized())
            }
        }
    }
    
    //Move back
    func goBack()->Void {
        self.navigationController?.popToViewController(((self.navigationController?.viewControllers)! as NSArray).objectAtIndex(0) as! UIViewController, animated: true)
    }
    
    //MARK:Table DataSource&Delegate
    func tableView(tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        return accepetRejectArray.count
    }
    
    func tableView(tableView: UITableView, cellForRowAtIndexPath indexPath: NSIndexPath) -> UITableViewCell {
        //Creatting cell object
        var cell:UITableViewCell! = tableView.dequeueReusableCellWithIdentifier("accept")
        
        if cell == nil {
            //If nil,create a cell
            cell = UITableViewCell.init(style: UITableViewCellStyle.Default, reuseIdentifier: "accept")
            
            var cellLayout = [String:AnyObject]()
            
            if indexPath.row != accepetRejectArray.count-1 {
                //Title Lbl
                let TitleLbl = UILabel.init()
                cell.addSubview(TitleLbl)
                TitleLbl.translatesAutoresizingMaskIntoConstraints = false
                cellLayout["TitleLbl"] = TitleLbl
                TitleLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(12)
                TitleLbl.textAlignment = Extensions.getSelectedLanguage() == "ar" ? NSTextAlignment.Right : NSTextAlignment.Left
                TitleLbl.text = "\(accepetRejectArray.objectAtIndex(indexPath.row).objectForKey("Title")!)"
                TitleLbl.textColor = UIColor.whiteTextColor()
                TitleLbl.numberOfLines = 0
                TitleLbl.lineBreakMode = NSLineBreakMode.ByWordWrapping
                
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[TitleLbl]-(0)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: cellLayout))
                
                if indexPath.row == 0 {
                    cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[TitleLbl]-(0)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: cellLayout))
                    TitleLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(20) : UIFont.setAppFont(15)
                    TitleLbl.textAlignment = NSTextAlignment.Center
                    
                    //Separator
                    
                    let separatorView = UIView.init()
                    separatorView.backgroundColor = UIColor.whiteColor()
                    separatorView.translatesAutoresizingMaskIntoConstraints = false
                    cellLayout["separatorView"]=separatorView
                    cell.addSubview(separatorView)
                    cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[separatorView(1)]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: cellLayout))
                    cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(15)-[separatorView]-(15)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: cellLayout))
                    
                } else {
                    //Seperator
                    let seperatorLbl = UILabel.init()
                    cell.addSubview(seperatorLbl)
                    seperatorLbl.translatesAutoresizingMaskIntoConstraints = false
                    cellLayout["seperatorLbl"] = seperatorLbl
                    seperatorLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(12)
                    seperatorLbl.textAlignment = Extensions.getSelectedLanguage() == "ar" ? NSTextAlignment.Right : NSTextAlignment.Left
                    seperatorLbl.text = ":"
                    seperatorLbl.textColor = UIColor.whiteTextColor()
                    
                    cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[seperatorLbl]-(0)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: cellLayout))
                    
                    //Detail Lbl
                    let DetailLbl = UILabel.init()
                    cell.addSubview(DetailLbl)
                    DetailLbl.translatesAutoresizingMaskIntoConstraints = false
                    cellLayout["DetailLbl"] = DetailLbl
                    DetailLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(12)
                    DetailLbl.textAlignment = Extensions.getSelectedLanguage() == "ar" ? NSTextAlignment.Right : NSTextAlignment.Left
                    DetailLbl.text = "\(accepetRejectArray.objectAtIndex(indexPath.row).objectForKey("Detail")!)"
                    DetailLbl.textColor = UIColor.whiteTextColor()
                    DetailLbl.numberOfLines = 0
                    DetailLbl.lineBreakMode = NSLineBreakMode.ByWordWrapping
                    
                    cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[DetailLbl]-(0)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: cellLayout))
                    
                    //Layout change based on Language
                    
                    let titleLblWidth = Extensions.isIpadDevice() ? 180 : 90
                    
                    if Extensions.getSelectedLanguage() == "ar" {
                        cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[TitleLbl(titleLblWidth)]-(35)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:["titleLblWidth":titleLblWidth], views: cellLayout))
                        
                        cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[seperatorLbl(5)]-(10)-[TitleLbl]", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: cellLayout))
                        cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(15)-[DetailLbl]-(10)-[seperatorLbl]", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: cellLayout))
                    } else {
                        cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(35)-[TitleLbl(titleLblWidth)]", options:NSLayoutFormatOptions(rawValue: 0), metrics:["titleLblWidth":titleLblWidth], views: cellLayout))
                        
                        cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[TitleLbl]-(10)-[seperatorLbl(5)]", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: cellLayout))
                        cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[seperatorLbl]-(10)-[DetailLbl]-(15)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: cellLayout))
                    }
                }
                
                switch indexPath.row {
                case 2:
                    let pickUpImage = UIImageView.init()
                    cellLayout["pickUpImage"] = pickUpImage
                    pickUpImage.translatesAutoresizingMaskIntoConstraints = false
                    pickUpImage.image = UIImage(named: "pickup1")
                    cell.addSubview(pickUpImage)
                    pickUpImage.addConstraint(NSLayoutConstraint.init(item: pickUpImage, attribute: .Height, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: 40))
                    cell.addConstraint(NSLayoutConstraint.init(item: pickUpImage, attribute: .CenterY, relatedBy: .Equal, toItem: cell, attribute: .CenterY, multiplier: 1.0, constant: 0))
                    
                    if Extensions.getSelectedLanguage() == "ar" {
                        cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[pickUpImage(10)]-(15)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: cellLayout))
                    } else {
                        cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(15)-[pickUpImage(10)]", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: cellLayout))
                    }
                    
                    if isDropThere {
                        let pickUpLine = UIView.init();
                        pickUpLine.translatesAutoresizingMaskIntoConstraints = false
                        pickUpLine.backgroundColor = UIColor(red: 90/255.0, green: 169/255.0, blue: 72/255.0, alpha: 1.0)
                        cell.addSubview(pickUpLine)
                        cellLayout["pickUpLine"] = pickUpLine
                        
                        if Extensions.getSelectedLanguage() == "ar" {
                            
                            
                            cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[pickUpLine(1)]-(19.5)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views:cellLayout ))
                        } else {
                            
                            
                            cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(19.5)-[pickUpLine(1)]", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views:cellLayout ))
                        }
                        
                        cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[pickUpImage]-(-19)-[pickUpLine]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views:cellLayout ))
                        
                    }
                    
                    break
                case 3:
                    let dropImage = UIImageView.init()
                    cellLayout["dropImage"] = dropImage
                    dropImage.translatesAutoresizingMaskIntoConstraints = false
                    dropImage.image = UIImage(named: "drop2")
                    cell.addSubview(dropImage)
                    
                    dropImage.addConstraint(NSLayoutConstraint.init(item: dropImage, attribute: .Height, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: 40))
                    cell.addConstraint(NSLayoutConstraint.init(item: dropImage, attribute: .CenterY, relatedBy: .Equal, toItem: cell, attribute: .CenterY, multiplier: 1.0, constant: 0))
                    
                    let dropLine = UIView.init();
                    dropLine.translatesAutoresizingMaskIntoConstraints = false
                    dropLine.backgroundColor = UIColor.applicationSubmitColor()
                    cell.addSubview(dropLine)
                    cellLayout["dropLine"] = dropLine
                    
                    if Extensions.getSelectedLanguage() == "ar" {
                        cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[dropImage(10)]-(15)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: cellLayout))
                        cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[dropLine(1)]-(19.5)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views:cellLayout ))
                    } else {
                        cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(15)-[dropImage(10)]", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: cellLayout))
                        cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(19.5)-[dropLine(1)]", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views:cellLayout ))
                    }
                    cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[dropLine]-(-19)-[dropImage]", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views:cellLayout ))
                    break
                default: break
                }
            } else {
                //Accept,Reject button section
                var cellLayout = [String:AnyObject]()
                
                //Separator
                
                let separatorView = UIView.init()
                separatorView.backgroundColor = UIColor.whiteColor()
                separatorView.translatesAutoresizingMaskIntoConstraints = false
                cellLayout["separatorView"]=separatorView
                cell.addSubview(separatorView)
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[separatorView(1)]", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: cellLayout))
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(15)-[separatorView]-(15)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: cellLayout))
                
                //Creatng Background View
                let acceptRejectView = UIView.init()
                
                acceptRejectView.translatesAutoresizingMaskIntoConstraints = false
                cell.addSubview(acceptRejectView)
                
                cellLayout["acceptRejectView"] = acceptRejectView
                
                let acceptRejectViewHeight = Extensions.isIpadDevice() ? 150 : 135
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(8)-[acceptRejectView(acceptRejectViewHeight)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["acceptRejectViewHeight":acceptRejectViewHeight], views: cellLayout))
                
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(35)-[acceptRejectView]-(35)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: cellLayout))
                
                let width = (UIScreen.mainScreen().bounds.size.width - 130)/2
                
                acceptRejectView.backgroundColor = UIColor.clearColor()
                
                //Time Reamaining Lbl
                timeRemainingLbl.translatesAutoresizingMaskIntoConstraints = false
                timeRemainingLbl.textColor = UIColor.timeRemainingLbltxtColor()
                cellLayout["timeRemainingLbl"] = timeRemainingLbl
                acceptRejectView.addSubview(timeRemainingLbl)
                timeRemainingLbl.textAlignment = NSTextAlignment.Center
                timeRemainingLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(18) : UIFont.setAppFont(15)
                
                secondsRemaining = Int("\(Extensions.tripDetails().valueForKey("notification_time")!)")
                
                secondsRemaining = secondsRemaining - HandleBackgroundRequest.sharedInstance.count
                
                timeRemainingLbl.text = "\(secondsRemaining!) " + "SECONDS LEFT TO ACCEPT".localized().uppercaseString
                
                acceptRejectView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[timeRemainingLbl(25)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: cellLayout))
                acceptRejectView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(10)-[timeRemainingLbl]-(10)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: cellLayout))
                
                //MinValue Lbl
                minValueLbl.translatesAutoresizingMaskIntoConstraints = false
                minValueLbl.textColor = UIColor.applicationHeaderTitleColor()
                minValueLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(21) : UIFont.setAppFont(14)
                minValueLbl.backgroundColor = UIColor.whiteColor()
                minValueLbl.layer.cornerRadius = 5.0
                minValueLbl.layer.borderColor = UIColor.whiteColor().CGColor
                minValueLbl.layer.borderWidth = 2.0
                minValueLbl.layer.masksToBounds = true
                minValueLbl.textAlignment = NSTextAlignment.Center
                minValueLbl.text = "00"
                acceptRejectView.addSubview(minValueLbl)
                cellLayout["minValueLbl"] = minValueLbl
                
                //SecValue Lbl
                secValueLbl.translatesAutoresizingMaskIntoConstraints = false
                secValueLbl.textColor = UIColor.applicationHeaderTitleColor()
                secValueLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(21) : UIFont.setAppFont(14)
                secValueLbl.backgroundColor = UIColor.whiteColor()
                secValueLbl.layer.cornerRadius = 5.0
                secValueLbl.layer.borderColor = UIColor.whiteColor().CGColor
                secValueLbl.layer.borderWidth = 2.0
                secValueLbl.layer.masksToBounds = true
                secValueLbl.textAlignment = NSTextAlignment.Center
                secValueLbl.text = "\(secondsRemaining!)"
                acceptRejectView.addSubview(secValueLbl!)
                cellLayout["secValueLbl"] = secValueLbl
                
                //Seperator :
                let seperatorLbl = UILabel.init()
                seperatorLbl.translatesAutoresizingMaskIntoConstraints = false
                seperatorLbl.textAlignment = NSTextAlignment.Center
                seperatorLbl.text = ":"
                seperatorLbl.textColor = UIColor.timeRemainingLbltxtColor()
                seperatorLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(14) : UIFont.setAppFont(12)
                acceptRejectView.addSubview(seperatorLbl)
                
                cellLayout["seperatorLbl"] = seperatorLbl
                
                let minValueLblSize = Extensions.isIpadDevice() ? 45 : 30
                let minValueLblY = Extensions.isIpadDevice() ? 26 : 12
                let separatorY = Extensions.isIpadDevice() ? 25 : 11
                var metricDic = [String:AnyObject]()
                metricDic["minValueLblSize"] = minValueLblSize
                metricDic["minValueLblY"] = minValueLblY
                metricDic["separatorY"] = separatorY
                
                acceptRejectView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[timeRemainingLbl]-(separatorY)-[seperatorLbl(minValueLblSize)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: metricDic, views: cellLayout))
                
                acceptRejectView.addConstraint(NSLayoutConstraint(item: seperatorLbl, attribute: .CenterX, relatedBy: .Equal, toItem: acceptRejectView, attribute: .CenterX, multiplier: 1.0, constant: 0))
                seperatorLbl.addConstraint(NSLayoutConstraint(item: seperatorLbl, attribute: .Width, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: 5))
                
                acceptRejectView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[timeRemainingLbl]-(minValueLblY)-[minValueLbl(minValueLblSize)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: metricDic, views: cellLayout))
                
                
                acceptRejectView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[timeRemainingLbl]-(minValueLblY)-[secValueLbl(minValueLblSize)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: metricDic, views: cellLayout))
                
                //Min Lbl
                let minLbl = UILabel.init()
                minLbl.translatesAutoresizingMaskIntoConstraints = false
                minLbl.text = "Min".localized()
                minLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(14) : UIFont.setAppFont(12)
                minLbl.textColor = UIColor.timeRemainingLbltxtColor()
                minLbl.textAlignment = NSTextAlignment.Center
                acceptRejectView.addSubview(minLbl)
                cellLayout["minLbl"] = minLbl
                //Sec Lbl
                let secLbl = UILabel.init()
                secLbl.translatesAutoresizingMaskIntoConstraints = false
                secLbl.text = "Sec".localized()
                secLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(14) : UIFont.setAppFont(12)
                secLbl.textColor = UIColor.timeRemainingLbltxtColor()
                secLbl.textAlignment = NSTextAlignment.Center
                acceptRejectView.addSubview(secLbl)
                cellLayout["secLbl"] = secLbl
                
                acceptRejectView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[minValueLbl]-(6)-[minLbl(21)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: cellLayout))
                
                acceptRejectView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[secValueLbl]-(6)-[secLbl(21)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: cellLayout))
                
                //Accept Btn
                let acceptBtn = UIButton.init()
                cellLayout["acceptBtn"] = acceptBtn
                acceptBtn.translatesAutoresizingMaskIntoConstraints = false
                acceptBtn.setTitle("DECLINE".localized().uppercaseString, forState: UIControlState.Normal)
                cell.addSubview(acceptBtn)
                acceptBtn.titleLabel?.font = Extensions.isIpadDevice() ? UIFont.setButtonFont(22) : UIFont.setButtonFont(16)
                acceptBtn.setTitleColor(UIColor.whiteTextColor(), forState: UIControlState.Normal)
                //                acceptBtn.backgroundColor = UIColor.getAcceptBtnBgColor()
                acceptBtn.setBackgroundImage(UIImage(named: "AcceptButtonbg"), forState: .Normal)
                acceptBtn.addTarget(self, action: #selector(AcceptViewController.callRejectApi), forControlEvents: UIControlEvents.TouchUpInside)
                
                //Reject Btn
                let rejectBtn = UIButton.init()
                cellLayout["rejectBtn"] = rejectBtn
                rejectBtn.translatesAutoresizingMaskIntoConstraints = false
                rejectBtn.setTitle("ACCEPT".localized().uppercaseString, forState: UIControlState.Normal)
                rejectBtn.titleLabel?.font = Extensions.isIpadDevice() ? UIFont.setButtonFont(22) : UIFont.setButtonFont(16)
                //                rejectBtn.backgroundColor = UIColor.rejectBtnBgColor()
                rejectBtn.setBackgroundImage(UIImage(named: "DeclineButtonbg"), forState: .Normal)
                rejectBtn.setTitleColor(UIColor.blackTextColor(), forState: UIControlState.Normal)
                cell.addSubview(rejectBtn)
                rejectBtn.addTarget(self, action: #selector(AcceptViewController.callAcceptApi(_:)), forControlEvents: UIControlEvents.TouchUpInside)
                
                let acceptRejectBtnHeight = Extensions.isIpadDevice() ? 60 : 40
                
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[acceptBtn(acceptRejectBtnHeight)]-(4)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["acceptRejectBtnHeight":acceptRejectBtnHeight], views: cellLayout))
                
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[rejectBtn(acceptRejectBtnHeight)]-(4)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["acceptRejectBtnHeight":acceptRejectBtnHeight], views: cellLayout))
                
                let minuteSecLblLeading = Extensions.isIpadDevice() ? 12 : 3.5
                
                //Setting layout based on the language
                if Extensions.getSelectedLanguage() == "ar" {
                    
                    acceptRejectView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[secValueLbl(minValueLblSize)]-(7)-[seperatorLbl]", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["minValueLblSize":minValueLblSize], views: cellLayout))
                    acceptRejectView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[seperatorLbl]-(7)-[minValueLbl(minValueLblSize)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["minValueLblSize":minValueLblSize], views: cellLayout))
                    
                    acceptRejectView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[secLbl(37)]-(minuteSecLblLeading)-[seperatorLbl]", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["minuteSecLblLeading":minuteSecLblLeading], views: cellLayout))
                    acceptRejectView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[seperatorLbl]-(minuteSecLblLeading)-[minLbl(37)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["minuteSecLblLeading":minuteSecLblLeading], views: cellLayout))
                    cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[rejectBtn(==acceptBtn)][acceptBtn]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["width":width], views: cellLayout))
                } else {
                    acceptRejectView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[minValueLbl(minValueLblSize)]-(7)-[seperatorLbl]", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["minValueLblSize":minValueLblSize], views: cellLayout))
                    acceptRejectView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[seperatorLbl]-(7)-[secValueLbl(minValueLblSize)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["minValueLblSize":minValueLblSize], views: cellLayout))
                    acceptRejectView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[minLbl(37)]-(minuteSecLblLeading)-[seperatorLbl]", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["minuteSecLblLeading":minuteSecLblLeading], views: cellLayout))
                    acceptRejectView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[seperatorLbl]-(minuteSecLblLeading)-[secLbl(37)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["minuteSecLblLeading":minuteSecLblLeading], views: cellLayout))
                    cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(8)-[acceptBtn(==rejectBtn)]-8-[rejectBtn]-(8)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["width":width], views: cellLayout))
                }
                
                acceptBtn.exclusiveTouch = true
                rejectBtn.exclusiveTouch = true
            }
            
            cell.selectionStyle = UITableViewCellSelectionStyle.None
            
        }
        cell
            .backgroundColor = UIColor.clearColor()
        return cell
    }
    
    func tableView(tableView: UITableView, heightForRowAtIndexPath indexPath: NSIndexPath) -> CGFloat {
        
        if indexPath.row != accepetRejectArray.count-1 {
            
            if indexPath.row == 0 {
                if Extensions.isIpadDevice() {
                    return 60
                } else {
                    return 50
                }
                
            } else {
               // print(accepetRejectArray.objectAtIndex(indexPath.row).objectForKey("Detail") as! String)
                
                let labelSize = self.rectForText(accepetRejectArray.objectAtIndex(indexPath.row).objectForKey("Detail") as! String, font: Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(12), maxSize:Extensions.isIpadDevice() ? CGSizeMake(UIScreen.mainScreen().bounds.size.width-255,999) : CGSizeMake(UIScreen.mainScreen().bounds.size.width-165,999))
                
            //    print(labelSize)
                
                if Extensions.isIpadDevice() {
                    if labelSize < 20 {
                        return 50
                    } else {
                        return labelSize + 30
                    }
                } else {
                    if labelSize < 20 {
                        return 40
                    } else {
                        return labelSize + 20
                    }
                }
            }
        } else {
            if Extensions.isIpadDevice() {
                return 210
            } else {
                return 150
            }
        }
    }
    
    func rectForText(text: String, font: UIFont, maxSize: CGSize) -> CGFloat {
        //This is a method to calculate the height
        let label = UILabel(frame: CGRectMake(0, 0, maxSize.width, maxSize.height))
        label.numberOfLines = 6
        label.lineBreakMode = NSLineBreakMode.ByWordWrapping
        label.font = font
        label.text = text
        
        label.sizeToFit()
        
        return label.frame.height
    }
    
    //MARK:View will Disappear
    override func viewWillDisappear(animated: Bool) {
        //Mark driver is not in accept page
        Extensions.setDriverInAcceptPage(false)
        super.viewWillDisappear(animated)
    }
}
