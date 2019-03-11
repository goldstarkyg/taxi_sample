//
//  Extensions.swift
//  Taximobility Driver
//
//  Created by Gireesh on 2/19/16.
//  Copyright © 2016 Ndot. All rights reserved.
//


import UIKit
import Localize_Swift

var loaderView = UIView()
var count = 0
var noInternetBgView = UIView()
let loadingImageView = UIImageView.init()


class Extensions: NSObject {
    
    //MARK:Language Selection
    class func setSelectedLanguage(langauge:String)->Void {
        NSUserDefaults.standardUserDefaults().setObject(langauge, forKey: "AppLanguage")
        NSUserDefaults.standardUserDefaults().synchronize()
    }
    
    class func getSelectedLanguage()->String {
        let language =  NSUserDefaults.standardUserDefaults().objectForKey("AppLanguage")
        
        if language != nil {
            return language as! String!
        } else {
            return "en"
        }
        
    }
    
    ///Change App languages En,ta
    class func changeAnotherLanguage() -> Void {
        let languages = AppInfo.sharedInfo.appLanguages as NSArray
        
        if Extensions.getSelectedLanguage() == k_EnglishKey {
            //Change to Tamil
            Localize.setCurrentLanguage("\((languages.objectAtIndex(1).objectForKey("key"))!)")
            Extensions.setSelectedLanguage("\((languages.objectAtIndex(1).objectForKey("key"))!)")
        } else {
            //Change to English
            Localize.setCurrentLanguage("\((languages.objectAtIndex(0).objectForKey("key"))!)")
            Extensions.setSelectedLanguage("\((languages.objectAtIndex(0).objectForKey("key"))!)")
        }
    }
    
    
    //MARK:Loader
    class func createLoaderView()->Void {
        
        //Creating a loader view
        loaderView = UIView.init()
        loaderView.translatesAutoresizingMaskIntoConstraints = false
        APP.window?.addSubview(loaderView)
        loaderView.backgroundColor = UIColor.shadedBgColor()
        var layoutDic = [String:AnyObject]()
        layoutDic["window"] = APP.window
        layoutDic["loaderView"] = loaderView
        
        //Setting alignment using Autolayout
        APP.window?.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[loaderView]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views:layoutDic))
        APP.window?.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[loaderView]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views:layoutDic))
        
        //Creating a rorating image view
        loadingImageView.image = UIImage(named:"loading")
        loaderView.addSubview(loadingImageView)
        loadingImageView.translatesAutoresizingMaskIntoConstraints = false
        loadingImageView.addConstraint(NSLayoutConstraint(item: loadingImageView, attribute:.Width, relatedBy: .Equal, toItem: nil, attribute:.NotAnAttribute, multiplier:1.0, constant:80))
        loadingImageView.addConstraint(NSLayoutConstraint(item: loadingImageView, attribute:.Height, relatedBy: .Equal, toItem: nil, attribute:.NotAnAttribute, multiplier:1.0, constant:83))
        loaderView.addConstraint(NSLayoutConstraint(item: loadingImageView, attribute:.CenterX, relatedBy: .Equal, toItem: loaderView, attribute:.CenterX, multiplier:1.0, constant:0))
        loaderView.addConstraint(NSLayoutConstraint(item: loadingImageView, attribute:.CenterY, relatedBy: .Equal, toItem: loaderView, attribute:.CenterY, multiplier:1.0, constant:0))
        
        //Creating an imageview with a static image
        let staticImage = UIImageView.init()
        staticImage.image = UIImage(named:"loading_map")
        loaderView.addSubview(staticImage)
        staticImage.translatesAutoresizingMaskIntoConstraints = false
        staticImage.addConstraint(NSLayoutConstraint(item: staticImage, attribute:.Width, relatedBy: .Equal, toItem: nil, attribute:.NotAnAttribute, multiplier:1.0, constant:19))
        staticImage.addConstraint(NSLayoutConstraint(item: staticImage, attribute:.Height, relatedBy: .Equal, toItem: nil, attribute:.NotAnAttribute, multiplier:1.0, constant:28))
        loaderView.addConstraint(NSLayoutConstraint(item: staticImage, attribute:.CenterX, relatedBy: .Equal, toItem: loaderView, attribute:.CenterX, multiplier:1.0, constant:0))
        loaderView.addConstraint(NSLayoutConstraint(item: staticImage, attribute:.CenterY, relatedBy: .Equal, toItem: loaderView, attribute:.CenterY, multiplier:1.0, constant:0))
        
        loaderView.hidden = true
    }
    
    class func startIndicator()->Void {
        //Shwowing the loader view
        //Adding animation
        
        let animationGroup = CAAnimationGroup()
        animationGroup.duration = 1.1
        animationGroup.repeatCount = Float.infinity
        
        let easeOut = CAMediaTimingFunction.init(name: kCAMediaTimingFunctionEaseOut)
        let pulseAnimation = CABasicAnimation.init(keyPath: "transform.rotation.z")
        pulseAnimation.fromValue = 0
        pulseAnimation.toValue = 2 * M_PI
        pulseAnimation.duration = 1.0
        pulseAnimation.timingFunction = easeOut
        
        animationGroup.animations = [pulseAnimation]
        loadingImageView.layer.addAnimation(animationGroup, forKey:"SpinAnimation")
        
        //        let animation = CABasicAnimation()
        //        animation.keyPath = "transform.rotation.z"
        //        animation.fromValue = 0
        //        animation.toValue = 2 * M_PI
        //        animation.duration = 1.0
        //        animation.repeatCount = Float.infinity
        //        loadingImageView.layer.addAnimation(animation, forKey:"SpinAnimation")
        loaderView.hidden = false
        APP.window?.bringSubviewToFront(loaderView)
    }
    
    class func resumeAnimation()->Void {
        //this is to restart animation if the app comes from background to foreground
        let animationGroup = CAAnimationGroup()
        animationGroup.duration = 1.1
        animationGroup.repeatCount = Float.infinity
        
        let easeOut = CAMediaTimingFunction.init(name: kCAMediaTimingFunctionEaseOut)
        let pulseAnimation = CABasicAnimation.init(keyPath: "transform.rotation.z")
        pulseAnimation.fromValue = 0
        pulseAnimation.toValue = 2 * M_PI
        pulseAnimation.duration = 1.0
        pulseAnimation.timingFunction = easeOut
        
        animationGroup.animations = [pulseAnimation]
        loadingImageView.layer.addAnimation(animationGroup, forKey:"SpinAnimation")
    }
    
    class func stopIndicator()->Void {
        //Hidding the loader view
        loaderView.hidden = true
    }
    
    //MARK:Core Config
    class func callGetCoreCong()->Void {
        //Calling the GetcoreConfig
        let urlString:String! = "\(k_BaseURL)\(apiKey)?type=getcoreconfig&lang=\(Extensions.getSelectedLanguage())"
        
        let encodedUrl : String! = urlString.stringByAddingPercentEncodingWithAllowedCharacters(NSCharacterSet.URLQueryAllowedCharacterSet())
        
        Extensions.showNetworkIndicator()
        
        //API Call
        let data:NSData! = NSData.init(contentsOfURL: NSURL.init(string: encodedUrl)!)
        if data != nil {
            do {
                //Converting data to Dictionary
                let resultDictionary : NSDictionary! = try NSJSONSerialization.JSONObjectWithData(data!, options: .MutableContainers) as! NSDictionary
                
                if resultDictionary != nil || resultDictionary.count>0 {
                    // Successful conversion
                    if resultDictionary["status"] as! Int == 1 {
                        
                        //    print("get Core Config--->\(resultDictionary)")
                        
                        Extensions.setCoreConfigInfo(resultDictionary)
                        //Setting google map and geo keys recieved from GetCoreConfig
                        Extensions.setGoogleMapKey(resultDictionary.objectForKey("detail")?.objectAtIndex(0).objectForKey("ios_google_map_key") as! String)
                        Extensions.setGooglePlaceKey(resultDictionary.objectForKey("detail")?.objectAtIndex(0).objectForKey("ios_google_geo_key") as! String)
                    } else {
                        Extensions.showAlert("APP TITLE".localized(), messageString:resultDictionary.objectForKey("message") as! String)
                    }
                } else {
                    Extensions.showAlert("APP TITLE".localized(), messageString:"Please check your Internet Connection".localized())
                }
            } catch {
                Extensions.stopIndicator()
                print("Error while converting the data")
            }
        } else {
            count = count + 1;
            //Checking the network connection status before calling the CoreCOnfig Again
            do {
                let reachability = try Reachability.reachabilityForInternetConnection()
                
                if reachability.isReachable() {
                    if count<3 {
                        Extensions.callGetCoreCong()
                    }
                } else {
                    showAlert("APP TITLE".localized(), messageString:"Please check your Internet Connection".localized())
                }
            } catch {
                
            }
        }
        Extensions.hideNetworkIndicator()
    }
    
    class func setCoreConfigInfo(data:NSDictionary)->Void {
        NSUserDefaults.standardUserDefaults().setObject(data, forKey: "coreConfigDriverInfo")
        NSUserDefaults.standardUserDefaults().synchronize()
    }
    
    class func coreConfigInfos()->NSDictionary {
        let coreConfigDic = NSUserDefaults.standardUserDefaults().objectForKey("coreConfigDriverInfo")
        
        if coreConfigDic != nil {
            return coreConfigDic as! NSDictionary
        } else {
            return NSDictionary()
        }
    }
    
    class  func retryGetCoreConfig()->Void {
        //Will call the getCoreConfig API and hide the
        //No internet view on successful call
        if Extensions.coreConfigInfos().count == 0 {
            [Extensions .callGetCoreCong()]
            
            if Extensions.coreConfigInfos().count != 0 {
                Extensions.hideInternetView()
              //  print("Get Core Receieved")
            } else {
              //  print("Get Core Not Receieved")
                
            }
        }
    }
    
    //MARK:Google Map and Geo Key
    class func setGoogleMapKey(key:String)->Void {
        //Storing the GMap Key
        NSUserDefaults.standardUserDefaults().setObject(key, forKey:"GoogleMapKey")
        NSUserDefaults.standardUserDefaults().synchronize()
    }
    
    class func googleMapKey()->String {
        //Rtrun GMAP key
        let mapKey = NSUserDefaults.standardUserDefaults().objectForKey("GoogleMapKey")
        if mapKey != nil {
            return mapKey as! String
        } else {
            return "AIzaSyDiii8IqDVE5SaDhVkT-4Lg8joCkEw_Iic"
        }
    }
    
    class func setGooglePlaceKey(key:String)->Void {
        //Save Geo Key
        NSUserDefaults.standardUserDefaults().setObject(key, forKey:"GooglePlaceKey")
        NSUserDefaults.standardUserDefaults().synchronize()
    }
    
    class func googlePlaceKey()->String {
        //Return the Goekey
        let placeKey = NSUserDefaults.standardUserDefaults().objectForKey("GooglePlaceKey")
        
        if placeKey != nil {
            return placeKey as! String
        } else {
            return "AIzaSyA77JBYKRCJwLQbVHtOQobVNNY3_ehdvts"
        }
    }
    //MARK:Show Alert
    class func showAlert(title:String!,messageString:String!)->Void {
        //Showing the alert
        GKAlert.sharedInstance.showAlertWith(title,
                                             message: messageString,
                                             buttonTitle1: "OK".localized(),
                                             buttonTitle2: "",
                                             key: "")
    }
    
    //MARK: No Internet
    class func createNoInternetView()->Void {
        //Creating noInternetView using autolayout to show the message when no Internet connection
        noInternetBgView = UIView.init()
        APP.window?.addSubview(noInternetBgView)
        noInternetBgView.translatesAutoresizingMaskIntoConstraints = false
        noInternetBgView.backgroundColor = UIColor.shadedBgColor()
        
        var layoutDic = [String:AnyObject]()
        layoutDic["noInternetBgView"] = noInternetBgView
        APP.window?.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[noInternetBgView(64)]", options: NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDic))
        APP.window?.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[noInternetBgView]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDic))
        
        //Creating the message label
        let messageLbl = UILabel.init()
        noInternetBgView.addSubview(messageLbl)
        layoutDic["messageLbl"] = messageLbl
        messageLbl.translatesAutoresizingMaskIntoConstraints = false
        noInternetBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[messageLbl]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDic))
        noInternetBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[messageLbl]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDic))
        
        messageLbl.font = UIFont.setAppFont(14)
        messageLbl.textAlignment = NSTextAlignment.Center
        messageLbl.textColor = UIColor.whiteColor()
        messageLbl.backgroundColor = UIColor.redColor()
        noInternetBgView.hidden = true
        messageLbl.text = "Check Your Network Connection".localized()
    }
    
    class func showInternetView()->Void {
        //Will show the no internet message with an animation
        APP.window?.userInteractionEnabled = false
        UIView.transitionWithView(noInternetBgView, duration: 0.7, options: UIViewAnimationOptions.TransitionCrossDissolve, animations: { () -> Void in
            APP.window?.bringSubviewToFront(noInternetBgView)
            noInternetBgView.hidden = false
            }, completion: nil)
    }
    
    class func hideInternetView()->Void {
        //Will hide the NoInternetMessage with an animation
        APP.window?.userInteractionEnabled = true
        noInternetBgView.hidden = true
        let animation = CATransition.init()
        
        animation.type = kCATransitionPush
        animation.subtype = kCATransitionFromTop
        animation.duration = 0.5
        animation.timingFunction = CAMediaTimingFunction(name:kCAMediaTimingFunctionEaseInEaseOut)
        noInternetBgView.layer.addAnimation(animation, forKey:"")
    }
    
    //MARK: User Info
    class func setUserLoginInfos(info:NSDictionary)->Void {
        //Saving the user login information
        let data = NSKeyedArchiver.archivedDataWithRootObject(info)
        
        NSUserDefaults.standardUserDefaults().setObject(data, forKey:"userLoginInfo")
        NSUserDefaults.standardUserDefaults().synchronize()
    }
    
    class func userLoginInfos()->NSDictionary {
        //Retreiving the user login information
        let data = NSUserDefaults.standardUserDefaults().objectForKey("userLoginInfo") as! NSData
        
        let userInfo = NSKeyedUnarchiver.unarchiveObjectWithData(data)
        
        if userInfo != nil {
            return userInfo as! NSDictionary
        } else {
            return NSDictionary()
        }
    }
    //MARK: My Car model name
    ///Save my Car model name from Logged In API response
    class func myCarModelName(modelName: String)->Void {
        NSUserDefaults.standardUserDefaults().setValue(modelName, forKey: "myCarModelName")
        NSUserDefaults.standardUserDefaults().synchronize()
    }
    
    ///Get my Car model name from Logged In API response
    class func myCarModelName()->String {
        let modelName = NSUserDefaults.standardUserDefaults().valueForKey("myCarModelName") as! String
        return modelName
    }
    
    //MARK: Login Status
    class func setDriverLoginStatus(status:Bool)->Void {
        
        NSUserDefaults.standardUserDefaults().setBool(status, forKey: "driverLoginStatus")
        NSUserDefaults.standardUserDefaults().synchronize()
        
        ///Disable light off
        UIApplication.sharedApplication().idleTimerDisabled = status
    }
    
    class func driverLoginStatus()->Bool {
        var status:Bool! = NSUserDefaults.standardUserDefaults().boolForKey("driverLoginStatus")
        
        if (status == nil) {
            status = false;
        }
        return status
    }
    
    //MARK:Device Indetifier and MD5
    class func getUniqueIdentider()->String {
        var deviceUUID:AnyObject! = SSKeychain.passwordForService("AnyService", account: "AnyUser")
        
        if (deviceUUID == nil) {
            
            deviceUUID = ""
            deviceUUID = UIDevice.currentDevice().identifierForVendor?.UUIDString
            do {
                try SSKeychain.setPassword(deviceUUID as! String, forService: "AnyService", account: "AnyUser", error:())
            } catch {
                
            }
        }
        return deviceUUID as! String;
    }
    
    class func createMD5(password:String)->String {
        let str = password.cStringUsingEncoding(NSUTF8StringEncoding)
        let strLen = CC_LONG(password.lengthOfBytesUsingEncoding(NSUTF8StringEncoding))
        let digestLen = Int(CC_MD5_DIGEST_LENGTH)
        let result = UnsafeMutablePointer<CUnsignedChar>.alloc(digestLen)
        
        CC_MD5(str!, strLen, result)
        
        let hash = NSMutableString()
        
        for i in 0..<digestLen {
            hash.appendFormat("%02x", result[i])
        }
        result.dealloc(digestLen)
        return hash as String
    }
    
    //MARK: Driver Statistics
    class func setDriverStatistics(statistics:NSDictionary)->Void {
        NSUserDefaults.standardUserDefaults().setObject(statistics, forKey: "driverStatistics")
        NSUserDefaults.standardUserDefaults().synchronize()
    }
    
    class func driverStatistics()->NSDictionary {
        let statisticsDic = NSUserDefaults.standardUserDefaults().objectForKey("driverStatistics")
        
        if statisticsDic != nil {
            return statisticsDic as! NSDictionary
        } else {
            return NSDictionary()
        }
    }
    
    //MARK:Date Format & Append Currency
    class func changeDateFormat(receivedDate:AnyObject!)->String {
        //        let dateFormatter = NSDateFormatter.init()
        //
        //        if (receivedDate != nil)
        //        {
        //            dateFormatter.dateFormat = "yyyy-MM-dd HH:mm:ss"
        //            let intermediateDate = dateFormatter.dateFromString(receivedDate as! String)
        //            dateFormatter.dateFormat = "dd-MMM-yyyy hh:mm:ss a"
        //            let intermeduateDateString = dateFormatter.stringFromDate(intermediateDate!)
        //
        //            let myDate = dateFormatter.dateFromString(intermeduateDateString)
        //            dateFormatter.dateFormat = "EE,ddMMM - yyyy hh:mm:ss a"
        //            let myDateInString = dateFormatter.stringFromDate(myDate!)
        //            return myDateInString
        //        }
        //        else
        //        {
        //
        //            dateFormatter.dateFormat = "dd-MMM-yyyy hh:mm:ss a";
        //            let todayDate = NSDate()
        //            let intermeduateDateString = dateFormatter.stringFromDate(todayDate)
        //
        //            let myDate = dateFormatter.dateFromString(intermeduateDateString)
        //            dateFormatter.dateFormat = "EE,ddMMM - yyyy hh:mm:ss a"
        //            let myDateInString = dateFormatter.stringFromDate(myDate!)
        //            return myDateInString
        //        }
        return receivedDate as! String
    }
    
    class func appendCurrencyWithString(data:String)->String {
        let currencySymbol = Extensions.coreConfigInfos().objectForKey("detail")?.objectAtIndex(0).objectForKey("site_currency") as! String
        let appendedString = currencySymbol.stringByAppendingString(data)
        
        return appendedString
    }
    
    class func appendCurrencyWithStringWithSpace(data:String)->String {
        
        let currencySymbol = Extensions.coreConfigInfos().objectForKey("detail")?.objectAtIndex(0).objectForKey("site_currency") as! String
        
        let appendedString = currencySymbol.stringByAppendingString(" ").stringByAppendingString(data)
        return appendedString
    }
    //MARK:Ongoing TripID
    class func setOngoingTripId(tripId:AnyObject)->Void {
        NSUserDefaults.standardUserDefaults().setObject(tripId, forKey: "ongoingTripID")
        NSUserDefaults.standardUserDefaults().synchronize()
    }
    
    class func onGoingTripId()->String {
        let tripId = NSUserDefaults.standardUserDefaults().objectForKey("ongoingTripID")
        if tripId == nil {
            return ""
        } else {
            return tripId as! String
        }
    }
    
    //MARK:Trip Details
    class func setTripDetails(tripDetails:AnyObject)->Void {
        NSUserDefaults.standardUserDefaults().setObject(tripDetails, forKey: "currentTripDetails")
        NSUserDefaults.standardUserDefaults().synchronize()
    }
    
    class func tripDetails()->NSDictionary {
        
        let tripDetails = NSUserDefaults.standardUserDefaults().objectForKey("currentTripDetails")
        
        if tripDetails == nil {
            return NSDictionary()
        } else {
            return tripDetails as! NSDictionary
        }
    }
    
    //MARK:Internet Connection
    class func isInternetConnectionAvaiable()->Bool {
        var reachability:Reachability!
        do {
            reachability  = try Reachability.reachabilityForInternetConnection()
        } catch {
            print("Catched Reachablity issue")
        }
        
        return reachability.isReachable()
    }
    
    //MARK:Driver Status
    class func setDriverCurrentStatus(status:AnyObject)->Void {
        NSUserDefaults.standardUserDefaults().setObject(status, forKey: "currentStatusDriver")
        NSUserDefaults.standardUserDefaults().synchronize()
    }
    
    class func driverCurrentStatus()->String {
        let status = NSUserDefaults.standardUserDefaults().objectForKey("currentStatusDriver")
        if status == nil {
            return k_DriverFree
        } else {
            return status as! String
        }
    }
    
    //MARK:Above Below Speed Timer
    class func setAboveBelowSpeedTimerStatus(status:Bool)->Void {
        NSUserDefaults.standardUserDefaults().setObject(status, forKey: "AboveBelowSpeedTimerStatus")
        NSUserDefaults.standardUserDefaults().synchronize()
    }
    
    class func aboveBelowSpeedTimerStatus()->Bool {
        return NSUserDefaults.standardUserDefaults().boolForKey("AboveBelowSpeedTimerStatus")
    }
    
    //MARK:Accept Page Status
    class func setDriverInAcceptPage(status:Bool)->Void {
        NSUserDefaults.standardUserDefaults().setBool(status, forKey: "isDriverInAccept")
        NSUserDefaults.standardUserDefaults().synchronize()
    }
    
    class func isDriverInAcceptPage()->Bool {
        return NSUserDefaults.standardUserDefaults().boolForKey("isDriverInAccept")
    }
    
    class func setTripStartedStatus(status:Bool)->Void {
        NSUserDefaults.standardUserDefaults().setObject(status, forKey: "driverTripStartStatus")
        NSUserDefaults.standardUserDefaults().synchronize()
    }
    
    class func getTripStartedStatus()->Bool {
        return NSUserDefaults.standardUserDefaults().boolForKey("driverTripStartStatus")
    }
    
    //MARK:Waiting Time
    class func setWaitingTime(time:String)->Void {
        NSUserDefaults.standardUserDefaults().setObject(time, forKey: "driverWaitingTimeDefault")
        NSUserDefaults.standardUserDefaults().synchronize()
    }
    
    class func getWaitingTime()->String {
        let time = NSUserDefaults.standardUserDefaults().objectForKey("driverWaitingTimeDefault")
        if time == nil {
            return "00:00:00"
        } else {
            return time as! String
        }
    }
    
    //MARK: Checking Device Type
    class func isIpadDevice()->Bool {
        if UI_USER_INTERFACE_IDIOM() == UIUserInterfaceIdiom.Pad {
            return true
        } else {
            return false
        }
    }
    
    class func setIsInTripInProgressPage(status:Bool)->Void {
        NSUserDefaults.standardUserDefaults().setBool(status, forKey: "isInTripInProgressPage")
        NSUserDefaults.standardUserDefaults().synchronize()
    }
    
    class func isInTripInProgressPage()->Bool {
        return NSUserDefaults.standardUserDefaults().boolForKey("isInTripInProgressPage")
    }
    
    ///Device height = 480
    class func isCurrentDeviceIsiPhone4s()->Bool {
        return UIScreen.mainScreen().bounds.size.height == 480 ? true : false
    }
    
    class func showNetworkIndicator()->Void {
        Extensions.hideNetworkIndicator()
        UIApplication.sharedApplication().networkActivityIndicatorVisible = true
    }
    
    class func hideNetworkIndicator()->Void {
        if  UIApplication.sharedApplication().networkActivityIndicatorVisible {
            UIApplication.sharedApplication().networkActivityIndicatorVisible = false
        }
    }
    
    //MARK: Show and hide Dispatcher Trip complete
    ///Setting Dispatcher Complete trip
    class func allowDispatcherCompleteTrip(allow:Bool)->Void {
        NSUserDefaults.standardUserDefaults().setBool(allow, forKey: "Allow_dispatcher_Complete")
        NSUserDefaults.standardUserDefaults().synchronize()
    }
    
    class func canAllowDispatcherCompleteTrip()->Bool {
        return NSUserDefaults.standardUserDefaults().boolForKey("Allow_dispatcher_Complete")
    }
}
