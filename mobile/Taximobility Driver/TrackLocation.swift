//
//  TrackLocation.swift
//
//
//  Created by Gireesh on 3/1/16.
//
//

import UIKit
import CoreLocation

protocol BackToHome {
    //Protocol
    func moveToAcceptRejectPage()->Void
    func moveToHome()->Void
    func logoutFromBackEnd()->Void
    func showNewTripDetails()->Void
}

public class TrackLocation:NSObject, CLLocationManagerDelegate,GKAlertDelegate {
    //MARK: Declaration Section
    var Delegate:BackToHome?
    var trackingTimer:NSTimer!
    var ongoingTripId:String! = String()
    var driverStatus:String! = String()
    
    var lastCalculatedSpeed:Double! = Double()
    var locationManager:CLLocationManager! = CLLocationManager.init()
    var waitingTimeString:String! = String()
    var waitingTimer:NSTimer!
    var backgroundUpdateTask:UIBackgroundTaskIdentifier!
    var locationDisbaleAlertShowPermission:Bool = Bool()
    var lastKnownLocation:CLLocation! = CLLocation()
    
    var saveLocation:CLLocation! = CLLocation()
    var total_latlng:String! = String()
    var currentLatitute:Double! = Double()
    var currentLogitute:Double! = Double()
    var currentLocation:CLLocation!
    var isFirstTimeLocationUpdate = Bool()
    var start_calculation:Bool = Bool()
    var arr_latlng:NSMutableArray = NSMutableArray()
    var last_latlng:String = String()
    var updatedLocation:CLLocation! = CLLocation()
    var noIntenetConnectionLatLong:String! = String()
    var noInternetSpeed:String = String()
    var noInternetAccuracy:String = String()
    
    var local_lat:String = String()
    var lastLocatiom:CLLocation! = CLLocation()
    var endTripLocation:CLLocation! = CLLocation()
    var count:Int = Int()
    var startTripCount:Int = Int()
    
    //MARK: Shared Instance
    class var sharedInstance: TrackLocation {
        struct Static {
            static var onceToken: dispatch_once_t = 0
            static var instance: TrackLocation? = nil
        }
        dispatch_once(&Static.onceToken) {
            Static.instance = TrackLocation()
            Static.instance?.addObserverSection()
            Static.instance?.isFirstTimeLocationUpdate = true
            Static.instance?.start_calculation = false
            Static.instance?.endTripLocation = nil
            Static.instance?.count = 0
            Static.instance?.startTripCount = 0
        }
        return Static.instance!
    }
    
    func addObserverSection()->Void {
        NSNotificationCenter.defaultCenter().addObserver(self, selector: #selector(TrackLocation.moveToAcceptPage), name: "AcceptNotification", object: nil)
        NSNotificationCenter.defaultCenter().addObserver(self, selector: #selector(TrackLocation.tripEndAction(_:)), name: "tripEndNotification", object: nil)
    }
    
    override init() {
        //Initialize the required Varaible
        waitingTimeString = "00:00:00"
    }
    
    //MARK: Start Tracking
    func startTrackingDriver()->Void {
        //Creating Timer
        if Extensions.driverLoginStatus() {
            if Extensions.userLoginInfos().objectForKey("shift_status") as! String == k_DriverShiftIn {
                
                if UIApplication.sharedApplication().applicationState == UIApplicationState.Background {
                    self.updateDriverLocationToServer(trackingTimer!)
                } else {
                    if trackingTimer == nil {
                        trackingTimer = NSTimer.init(timeInterval: 1.0, target: self, selector: #selector(TrackLocation.updateDriverLocationToServer(_:)), userInfo: nil, repeats: true)
                      
                        //Firing the timer
                        NSRunLoop.currentRunLoop().addTimer(trackingTimer!, forMode: NSRunLoopCommonModes)
                    }
                }
                
                //Starting location manager
                locationManager.delegate = self
                
                if #available(iOS 9.0, *) {
                    locationManager.allowsBackgroundLocationUpdates = true
                } else {
                    // Fallback on earlier versions
                }
                
                locationManager.startUpdatingLocation()
                locationManager.desiredAccuracy = kCLLocationAccuracyBestForNavigation
                lastKnownLocation = nil
                
                if backgroundUpdateTask != nil {
                    self.endTask()
                    backgroundUpdateTask = UIBackgroundTaskInvalid
                }
            }
        } else {
            if locationManager != nil {
                self.stopTrackingDriver()
            }
        }
    }
    
    //MARK: Stop Tracking
    func stopTrackingDriver()->Void {
        // Stopping the timer
        trackingTimer?.invalidate()
        trackingTimer = nil
        if (trackingTimer != nil) {
            self.stopTrackingDriver()
        }
        locationManager.stopUpdatingLocation()
    }
    
    //MARK: Server Update
    func updateDriverLocationToServer(timer:NSTimer)->Void {
        
        if !CLLocationManager.locationServicesEnabled() ||
            CLLocationManager.authorizationStatus() == .Denied ||
            locationManager.location?.coordinate.latitude == 0 ||
            locationManager.location?.coordinate.latitude == nil ||
            locationManager.location?.horizontalAccuracy > 280 {
            
            if !CLLocationManager.locationServicesEnabled() ||
                CLLocationManager.authorizationStatus() == .Denied ||
                locationManager.location?.coordinate.latitude == 0 ||
                locationManager.location?.coordinate.latitude == nil {
                
                //No GPS HERE
                if APP.applicationIsInForeGround {
                    if locationDisbaleAlertShowPermission == false {
                        GKAlert.sharedInstance.Delegate = self
                        
                        GKAlert.sharedInstance.noGpsAlert("APP TITLE".localized(),
                                                          message: "TURN ON".localized(),
                                                          buttonTitle1: "Enable Gps".localized(),
                                                          buttonTitle2: "",
                                                          key: "enableGPS")
                        locationDisbaleAlertShowPermission = true
                    }
                }
                NSNotificationCenter.defaultCenter().postNotificationName("gpsDisabledNotification", object: nil, userInfo: nil)
                self.stopWaitingTime()
            }
            locationManager.startUpdatingLocation()
        } else {
            //GPS IS HERE
            if locationDisbaleAlertShowPermission {
                locationDisbaleAlertShowPermission = false
                GKAlert.sharedInstance.hideAlert()
                endTripLocation = locationManager.location
                count = 0
            }
            
            //    print(saveLocation)
            //    print(noIntenetConnectionLatLong)
            //     print(endTripLocation)
            
            if saveLocation != nil || noIntenetConnectionLatLong != "" || endTripLocation != nil {
                
                //Checking Internet connection
                if Extensions.isInternetConnectionAvaiable() {
                    //Intenet Connection available
                    if Extensions.driverLoginStatus() {
                        //Driver is in login
                        
                        if noIntenetConnectionLatLong == "" &&
                            saveLocation == nil &&
                            isFirstTimeLocationUpdate == false &&
                            total_latlng == "" &&
                            endTripLocation == nil {
                            
                           // print("TRY TO UPLOAD LOCATION WITH FALSE LOCATION")
                            
                            //print("Last Location--->\(lastKnownLocation.coordinate.latitude),\(lastKnownLocation.coordinate.longitude)")
                            //latLongString = "\(locationManager.location!.coordinate.latitude),\(locationManager.location!.coordinate.longitude)"
                            if #available(iOS 9.0, *) {
                                locationManager.requestLocation()
                            } else {
                                // Fallback on earlier versions
                                locationManager.startUpdatingLocation()
                            }
                            locationManager.delegate = self
                        } else {
                            local_lat = total_latlng
                            
                            var locationToUpdate = ""
                            var currentSpeed = ""
                            var currentAccuracy = ""
                            
                            if Extensions.driverCurrentStatus() == k_DriverActive {
                                if noIntenetConnectionLatLong != "" {
                                    locationToUpdate = noIntenetConnectionLatLong
                                    currentSpeed = noInternetSpeed
                                    currentAccuracy = noInternetAccuracy
                                    
                                    if Extensions.isInternetConnectionAvaiable() {
                                        noIntenetConnectionLatLong = ""
                                        noInternetSpeed = ""
                                        currentAccuracy = ""
                                    }
                                } else {
                                    if endTripLocation != nil && Extensions.driverCurrentStatus() == k_DriverActive {
                                        
                                        locationToUpdate = "\(String(format:"%0.6f",Float(endTripLocation.coordinate.latitude == 0 ? (locationManager.location?.coordinate.latitude)! : endTripLocation.coordinate.latitude))),\(String(format:"%0.6f",Float(endTripLocation.coordinate.longitude == 0 ? (locationManager.location?.coordinate.longitude)! : endTripLocation.coordinate.longitude)))|"
                                        
                                        currentSpeed = "\(endTripLocation.coordinate.latitude == 0 ? (locationManager.location?.speed)! : endTripLocation.speed)"
                                        
                                        currentAccuracy = "\(endTripLocation.coordinate.latitude == 0 ? (locationManager.location?.horizontalAccuracy)! : endTripLocation.horizontalAccuracy)"
                                        
                                        count = count + 1
                                        if count == 3 {
                                            endTripLocation = nil
                                            count = 0
                                        }
                                    } else {
                                        locationToUpdate = "\(String(format:"%0.6f",Float(saveLocation.coordinate.latitude == 0 ? (locationManager.location?.coordinate.latitude)! : saveLocation.coordinate.latitude))),\(String(format:"%0.6f",Float(saveLocation.coordinate.longitude == 0 ? (locationManager.location?.coordinate.longitude)! : saveLocation.coordinate.longitude)))|"
                                        
                                        currentSpeed = "\(saveLocation.coordinate.latitude == 0 ? (locationManager.location?.speed)! : saveLocation.speed)"
                                        
                                        currentAccuracy = "\(saveLocation.coordinate.latitude == 0 ? (locationManager.location?.horizontalAccuracy)! : saveLocation.horizontalAccuracy)"
                                    }
                                }
                            } else {
                                if noIntenetConnectionLatLong != "" {
                                    locationToUpdate = noIntenetConnectionLatLong
                                    currentSpeed = noInternetSpeed
                                    currentAccuracy = noInternetAccuracy
                                    
                                    if Extensions.isInternetConnectionAvaiable() {
                                        noIntenetConnectionLatLong = ""
                                        noInternetSpeed = ""
                                        currentAccuracy = ""
                                    }
                                } else {
                                    locationToUpdate = "\(String(format:"%0.6f",Float(saveLocation == nil ? (locationManager.location?.coordinate.latitude)! : saveLocation.coordinate.latitude))),\(String(format:"%0.6f",Float(saveLocation == nil ? (locationManager.location?.coordinate.longitude)! : saveLocation.coordinate.longitude)))|"
                                    
                                    currentSpeed = "\(saveLocation == nil ? (locationManager.location?.speed)! : saveLocation.speed)"
                                    
                                    currentAccuracy = "\(saveLocation == nil ? (locationManager.location?.horizontalAccuracy)! : saveLocation.horizontalAccuracy)"
                                }
                            }
                            
                            total_latlng = ""
                            driverStatus = Extensions.driverCurrentStatus()
                            ongoingTripId = Extensions.onGoingTripId()
                            //print("UpDATED LAT LONG-->\(locationToUpdate)")
                            
                            //Setting the parameter dic
                            let paramDic:NSDictionary =  ["driver_id":"\(Extensions.userLoginInfos().objectForKey("userid")!)",
                                                          "trip_id":ongoingTripId,
                                                          "locations":locationToUpdate,
                                                          "above_min_km":Extensions.aboveBelowSpeedTimerStatus() ? "1" : "0",
                                                          "status":driverStatus,
                                                          "device_token":"1234568974",
                                                          "device_type":AppInfo.sharedInfo.deviceType,
                                                          "speed":currentSpeed,
                                                          "time":"\(NSDate.init())",
                                                          "accuracy":currentAccuracy]
                            
                           // print(paramDic)
                            //Calling the API
                            APIDownlaod.trackDriverLocation("\(k_BaseURL)\(apiKey)/?lang=\(Extensions.getSelectedLanguage())&type=driver_location_history", bodyData: paramDic, method: "POST", key: "") { (resultDic) -> Void in
                                
                                let status:Int = resultDic.objectForKey("status") as! Int
                                
                                switch status {
                                case 1:
                                    // Location updated successfully
                                    // print(resultDic)
                                    
                                  //  print("LOCATION UPDATED \(NSDate.init())>\(locationToUpdate)")
                                    
                                    if resultDic.objectForKey("distance") != nil {
                                        
                                        let distanceDic = ["distance":String(format:"%0.2f",Float("\(resultDic.objectForKey("distance")!)")!)]
                                        NSNotificationCenter.defaultCenter().postNotificationName("distanceNotification", object: nil, userInfo: distanceDic)
                                    }
                                case 5:
                                    // Trip Request Received
                                 //   print("There is a trip request")
                                    
                                    //Saving the trip details
                                    Extensions.setTripDetails(resultDic.objectForKey("trip_details")!)
                                    HandleBackgroundRequest.sharedInstance.resetCount()
                                    
                                 //   print(UIApplication.sharedApplication().applicationState)
                                    
                                    if UIApplication.sharedApplication().applicationState == UIApplicationState.Background || UIApplication.sharedApplication().applicationState == UIApplicationState.Inactive {
                                        
                                        let requestNotification = UILocalNotification.init()
                                        requestNotification.alertBody = "Request From Passenger".localized()
                                        requestNotification.soundName = UILocalNotificationDefaultSoundName //"Alert.m4a"
                                        requestNotification.userInfo = ["request":"yes"]
                                        requestNotification.fireDate = NSDate.init()
                                        
                                        UIApplication.sharedApplication().scheduleLocalNotification(requestNotification)
                                        HandleBackgroundRequest.sharedInstance.count = 0
                                        HandleBackgroundRequest.sharedInstance.startTimer()
                                        
                                    } else {
                                        //Moving to the accept screen using a delegate
                                        if !Extensions.isDriverInAcceptPage() {
                                            //Driver dont have any request now
                                            GKAlert.sharedInstance.hideAlert()
                                            self.Delegate?.moveToAcceptRejectPage()
                                        } else {
                                            //Driver is currently in accept page
                                          //  print("Driver already in accept page")
                                        }
                                    }
                                case 7,10:
                                    //Trip Cancelled // Dispatcher cancelled
                                    Extensions.setOngoingTripId("")
                                    Extensions.setDriverCurrentStatus(k_DriverFree)
                                    Extensions.setWaitingTime("00:00:00")
                                    Extensions.setAboveBelowSpeedTimerStatus(false)
                                    Extensions.showAlert("APP TITLE".localized(), messageString: resultDic.objectForKey("message") as! String)
                                    self.Delegate?.moveToHome()
                                case 11:
                                    // getting sms from passenger
                                    Extensions.showAlert("APP TITLE".localized(), messageString: resultDic.objectForKey("message") as! String)
                                    if Extensions.isInTripInProgressPage() {
                                        NSNotificationCenter.defaultCenter().postNotificationName("dispatcherChangeDetailsNotification", object: nil, userInfo:resultDic as [NSObject : AnyObject])
                                    } else {
                                        self.Delegate?.showNewTripDetails()
                                    }
                                case 15:
                                    //Driver is blocked from backend or Logout by admin
                                    if Extensions.driverLoginStatus() {
                                        //If driver is having trip means this func will send to Trip in progress page
                                        if Extensions.onGoingTripId() == "" {
                                            self.stopTrackingDriver()
                                            Extensions.setDriverLoginStatus(false)
                                            Extensions.showAlert("APP TITLE".localized(), messageString: resultDic.objectForKey("message") as! String)
                                            self.Delegate?.logoutFromBackEnd()
                                        }
                                    }
                                    
                                case 18: //Your trip has been completed by dispatcher.
                                    if Extensions.driverLoginStatus() && Extensions.canAllowDispatcherCompleteTrip() {
                                       
                                        //Stop allowing dispatcher complete trip
                                        Extensions.allowDispatcherCompleteTrip(false)
                                        
                                        Extensions.showAlert("APP TITLE".localized(), messageString: resultDic.objectForKey("message") as! String)
                                        /*            {
                                         detail = "";
                                         message = "Your trip has been completed by dispatcher.";
                                         status = 18;
                                         "trip_id" = 234;
                                         }
                                         */
                                    //    print(resultDic)
                                        
                                        Extensions.setOngoingTripId("")
                                        Extensions.setDriverCurrentStatus(k_DriverFree)
                                        Extensions.setWaitingTime("00:00:00")
                                        Extensions.setAboveBelowSpeedTimerStatus(false)
                                        
                                        //Setting the driver statistics
                                        Extensions.setDriverStatistics(resultDic.objectForKey("driver_statistics") as! NSDictionary)
                                        
                                        self.Delegate?.moveToHome()
                                        
                                        let completedTrip:NSDictionary = ["tripID":resultDic.objectForKey("trip_id") as! String,
                                                                          "details":resultDic.objectForKey("detail") as! NSArray]
                                        
                                        NSNotificationCenter.defaultCenter().postNotificationName("trip has been completed by dispatcher", object: completedTrip)
                                    }
                                    
                                default: break
                                }
                                
                                /*
                                 if resultDic.objectForKey("status") as! Int == 1
                                 {
                                 // Location updated successfully
                                 //                                    print(resultDic)
                                 
                                 print("LOCATION UPDATED \(NSDate.init())>\(locationToUpdate)")
                                 
                                 if resultDic.objectForKey("distance") != nil {
                                 
                                 let distanceDic = ["distance":String(format:"%0.2f",Float("\(resultDic.objectForKey("distance")!)")!)]
                                 NSNotificationCenter.defaultCenter().postNotificationName("distanceNotification", object: nil, userInfo: distanceDic)
                                 }
                                 
                                 } else if resultDic.objectForKey("status") as! Int == 5 {
                                 
                                 // Trip Request Received
                                 print("There is a trip request")
                                 
                                 //Saving the trip details
                                 Extensions.setTripDetails(resultDic.objectForKey("trip_details")!)
                                 
                                 HandleBackgroundRequest.sharedInstance.resetCount()
                                 
                                 print(UIApplication.sharedApplication().applicationState)
                                 
                                 if UIApplication.sharedApplication().applicationState == UIApplicationState.Background || UIApplication.sharedApplication().applicationState == UIApplicationState.Inactive {
                                 
                                 let requestNotification = UILocalNotification()
                                 requestNotification.alertBody = "Request From Passenger"
                                 requestNotification.soundName = "Alert.m4a"
                                 requestNotification.userInfo = ["request":"yes"]
                                 
                                 UIApplication.sharedApplication().scheduleLocalNotification(requestNotification)
                                 HandleBackgroundRequest.sharedInstance.count = 0
                                 HandleBackgroundRequest.sharedInstance.startTimer()
                                 
                                 } else {
                                 //Moving to the accept screen using a delegate
                                 if !Extensions.isDriverInAcceptPage() {
                                 //Driver dont have any request now
                                 GKAlert.sharedInstance.hideAlert()
                                 self.Delegate?.moveToAcceptRejectPage()
                                 } else {
                                 //Driver is currently in accept page
                                 print("Driver already in accept page")
                                 }
                                 }
                                 
                                 } else if resultDic.objectForKey("status") as! Int == 7 ||
                                 resultDic.objectForKey("status") as! Int == 10 {
                                 //Trip Cancelled
                                 Extensions.setOngoingTripId("")
                                 Extensions.setDriverCurrentStatus(k_DriverFree)
                                 Extensions.setWaitingTime("00:00:00")
                                 Extensions.setAboveBelowSpeedTimerStatus(false)
                                 Extensions.showAlert("APP TITLE".localized(), Message: resultDic.objectForKey("message") as! String)
                                 self.Delegate?.moveToHome()
                                 } else if resultDic.objectForKey("status") as! Int == 15 {
                                 //Driver is blocked from backend or Logout by admin
                                 self.stopTrackingDriver()
                                 Extensions.setDriverLoginStatus(false)
                                 Extensions.showAlert("APP TITLE".localized(), Message: resultDic.objectForKey("message") as! String)
                                 self.Delegate?.logoutFromBackEnd()
                                 
                                 } else if resultDic.objectForKey("status") as! Int == 11 {
                                 Extensions.showAlert("APP TITLE".localized(), Message: resultDic.objectForKey("message") as! String)
                                 if Extensions.isInTripInProgressPage() {
                                 NSNotificationCenter.defaultCenter().postNotificationName("dispatcherChangeDetailsNotification", object: nil, userInfo:resultDic as [NSObject : AnyObject])
                                 } else {
                                 self.Delegate?.showNewTripDetails()
                                 }
                                 
                                 }
                                 
                                 */
                            }
                            
                        }
                    }
                }
            }
        }
    }
    
    //MARK:Location Manager Delegate
    public func locationManager(manager: CLLocationManager, didUpdateLocations locations: [CLLocation]) {
        
        backgroundUpdateTask = UIApplication.sharedApplication().beginBackgroundTaskWithName("locationUpdate", expirationHandler: { () -> Void in
            self.endTask()
        })
        
        let location = locations.last
        //   print("LOCATION--->\(location)")
        
        if location!.horizontalAccuracy > 200 ||
            locationManager.location == nil ||
            location!.coordinate.latitude == 0 {
            
            saveLocation = nil
            noIntenetConnectionLatLong = ""
            noInternetSpeed = ""
            noInternetAccuracy = ""
            total_latlng  = ""
            
        } else {
            if !isFirstTimeLocationUpdate {
                let lastLocation = locations.last
                let calculatedSpeed:Double = lastLocation!.speed * 3.6
                
                let speedLimit:Double = 10
                
                if calculatedSpeed > speedLimit &&
                    Extensions.driverCurrentStatus() == k_DriverActive {
                    
                    currentLocation = locations.last
                    currentLatitute = currentLocation.coordinate.latitude
                    currentLogitute = currentLocation.coordinate.longitude
                    saveLocation = currentLocation
                    
                    if Extensions.isInternetConnectionAvaiable() {
                        if ( currentLatitute != nil && currentLatitute != 0 && currentLogitute != 0 ) {
                            
                            if start_calculation {
                                arr_latlng.addObject("\(currentLatitute),\(currentLogitute)")
                            }
                            total_latlng = total_latlng.stringByAppendingString("\(currentLatitute),\(currentLogitute)|")
                        }
                    } else {
                        noIntenetConnectionLatLong = noIntenetConnectionLatLong.stringByAppendingString("\(String(format:"%0.6f",Float(currentLatitute))),\(String(format:"%0.6f",Float(currentLogitute)))|")
                        
                        noInternetSpeed = noInternetSpeed.stringByAppendingString("\(currentLocation.speed)")
                        noInternetAccuracy = noInternetAccuracy.stringByAppendingString("\(currentLocation.horizontalAccuracy)")
                    }
                    last_latlng = total_latlng
                    updatedLocation = currentLocation
                    
                } else if (Extensions.driverCurrentStatus() == k_DriverFree || Extensions.driverCurrentStatus() == k_DriverBusy) {
                    startTripCount = 0
                    currentLocation = locations.last
                    currentLatitute = currentLocation.coordinate.latitude
                    currentLogitute = currentLocation.coordinate.longitude
                    saveLocation = currentLocation
                    endTripLocation = nil
                    
                    if Extensions.isInternetConnectionAvaiable() {
                        if ( currentLatitute != nil && currentLatitute != 0 && currentLogitute != 0 ) {
                            
                            if start_calculation {
                                arr_latlng.addObject("\(currentLatitute),\(currentLogitute)")
                            }
                            total_latlng = total_latlng.stringByAppendingString("\(currentLatitute),\(currentLogitute)|")
                        }
                    } else {
                        noIntenetConnectionLatLong = noIntenetConnectionLatLong.stringByAppendingString("\(String(format:"%0.6f",Float("\(currentLatitute)")!),String(format:"%0.6f",Float("\(currentLogitute)")!))|")
                        
                        noInternetSpeed = noInternetSpeed.stringByAppendingString("\(currentLocation.speed)")
                        noInternetAccuracy = noInternetAccuracy.stringByAppendingString("\(currentLocation.horizontalAccuracy)")
                    }
                    last_latlng = total_latlng
                    updatedLocation = currentLocation
                } else if startTripCount == 0 {
                    
                    //TODO: For Develper purpose - Location was not updating after end trip button clicked. For that  startTripCount setted to 1 to 0
                    startTripCount = 0
                    currentLocation = locations.last
                    currentLatitute = currentLocation.coordinate.latitude
                    currentLogitute = currentLocation.coordinate.longitude
                    saveLocation = currentLocation
                    endTripLocation = nil
                    
                    if Extensions.isInternetConnectionAvaiable() {
                        if ( currentLatitute != nil && currentLatitute != 0 && currentLogitute != 0 ) {
                            
                            if start_calculation {
                                arr_latlng.addObject("\(currentLatitute),\(currentLogitute)")
                            }
                            total_latlng = total_latlng.stringByAppendingString("\(currentLatitute),\(currentLogitute)|")
                        }
                    } else {
                        noIntenetConnectionLatLong = noIntenetConnectionLatLong.stringByAppendingString("\(String(format:"%0.6f",Float("\(currentLatitute)")!),String(format:"%0.6f",Float("\(currentLogitute)")!))|")
                        
                        noInternetSpeed = noInternetSpeed.stringByAppendingString("\(currentLocation.speed)")
                        noInternetAccuracy = noInternetAccuracy.stringByAppendingString("\(currentLocation.horizontalAccuracy)")
                    }
                    
                    last_latlng = total_latlng
                    updatedLocation = currentLocation
                } else {
                    saveLocation = nil
                }
            }
            isFirstTimeLocationUpdate = false
        }
        
        if backgroundUpdateTask != UIBackgroundTaskInvalid {
            self.endTask()
        }
    }
    
    public func locationManager(manager: CLLocationManager, didFailWithError error: NSError) {
        locationManager.startUpdatingLocation()
    }
    
    //End Expiration Handler
    func endTask()->Void {
        UIApplication.sharedApplication().endBackgroundTask(backgroundUpdateTask)
        backgroundUpdateTask = UIBackgroundTaskInvalid
    }
    
    //MARK: Waiting Timer
    func startWaitingTime()->Void {
        //Creating and Starting the waiting timer
        if waitingTimer == nil {
            waitingTimer = NSTimer.init(timeInterval: 1.0, target: self, selector: #selector(TrackLocation.calculateWaitingTime), userInfo: nil, repeats: true)
            NSRunLoop.currentRunLoop().addTimer(waitingTimer!, forMode: NSRunLoopCommonModes)
        }
    }
    
    func stopWaitingTime()->Void {
        //Stopping the waiting timer
        waitingTimer?.invalidate()
        waitingTimer = nil
        
        if waitingTimer != nil {
            self.stopWaitingTime()
        }
    }
    
    func getWaitingTime()->String {
        //Will return the waiting time
        return waitingTimeString
    }
    
    func calculateWaitingTime()->Void {
        //Driver is in waiting state,timer is running
        waitingTimeString = Extensions.getWaitingTime()
        
    //    print(Extensions.getWaitingTime())
        
        var hour:Int!
        var minute:Int!
        var second:Int!
        hour = Int(waitingTimeString.substringWithRange(waitingTimeString.startIndex.advancedBy(0) ..< waitingTimeString.startIndex.advancedBy(2)))
        
        minute = Int(waitingTimeString.substringWithRange(waitingTimeString.startIndex.advancedBy(3) ..< waitingTimeString.startIndex.advancedBy(5)))
        second = Int(waitingTimeString.substringWithRange( waitingTimeString.startIndex.advancedBy(6) ..< waitingTimeString.startIndex.advancedBy(8)))
        
        second = second + 1
        if second >= 60 {
            minute  = minute + 1
            second = 0
        }
        
        if minute >= 60 {
            hour = hour + 1
            minute = 0
        }
        
        waitingTimeString = String(format:"%@:%@:%@",hour > 9 ? "\(hour)" : "0\(hour)",minute > 9 ? "\(minute)" : "0\(minute)",second > 9 ? "\(second)" : "0\(second)")
        
        Extensions.setWaitingTime(waitingTimeString)
        NSNotificationCenter.defaultCenter().postNotificationName("waitingTimeNotification", object: nil, userInfo: nil)
    }
    
    func moveToAcceptPage()->Void {
        if Extensions.isDriverInAcceptPage() {
           // print("Driver in accept")
        } else {
            if HandleBackgroundRequest.sharedInstance.timerStatus {
                GKAlert.sharedInstance.hideAlert()
                self.Delegate?.moveToAcceptRejectPage()
            }
        }
    }
    
    //MARK: Alert Delegates
    func GKAlertClickedButtonAtIndex(index:Int,tag:String)->Void {
        if tag == "enableGPS" {
            UIApplication.sharedApplication().openURL(NSURL.init(string: UIApplicationOpenSettingsURLString)!)
        }
    }
    
    func GKAlertClickedButtonAtIndexWithText(index:Int,tag:String,text:String) {
    }
    
    func tripEndAction(noti:NSNotification)->Void {
        endTripLocation = locationManager.location
    }
}
