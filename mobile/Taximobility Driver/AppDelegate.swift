//
//  AppDelegate.swift
//  Taximobility Driver
//
//  Created by Gireesh on 2/19/16.
//  Copyright © 2016 Ndot. All rights reserved.
//

import UIKit
import Localize_Swift
import GoogleMaps
import Fabric
import Crashlytics


let APP =  UIApplication.sharedApplication().delegate as! AppDelegate

@UIApplicationMain
class AppDelegate: UIResponder, UIApplicationDelegate {
    
    var window: UIWindow?
    var reachability: Reachability?
    var backgroundUpdateTask: UIBackgroundTaskIdentifier!
    var timer:NSTimer! = NSTimer()
    var isTripIsCancelled:Bool! = Bool()
    var applicationIsInForeGround:Bool = Bool()
    var stayConnectionNotification:UILocalNotification = UILocalNotification()
   
    
    func application(application: UIApplication, didFinishLaunchingWithOptions launchOptions: [NSObject: AnyObject]?) -> Bool {
        
        /*    func printFonts() {
         let fontFamilyNames = UIFont.familyNames()
         for familyName in fontFamilyNames {
         print("Font Family Name = [\(familyName)]")
         let names = UIFont.fontNamesForFamilyName(familyName)
         print("Font Names = [\(names)]")
         }
         }
         printFonts()
         */
        
        Fabric.with([Crashlytics.self])
        
        //Checking the current app version using harpy framework
        Harpy.sharedInstance().appID = applicationID
        Harpy.sharedInstance().presentingViewController = self.window?.rootViewController
        Harpy.sharedInstance().appName = applicationName
        Harpy.sharedInstance().checkVersion()
        
        // Override point for customization after application launch.
        UINavigationBar.appearance().barTintColor = UIColor.applicationHeaderColor()
        
        UINavigationBar.appearance().tintColor = UIColor.whiteColor()
        UIApplication.sharedApplication().statusBarStyle = .LightContent
     
        //For Checking Internet Connection
        self.stopNotifier()
        self.setupReachability(hostName: "www.google.com", useClosures: true)
        self.startNotifier()
        applicationIsInForeGround = true
        //Creating the Loader View
        Extensions.createLoaderView()
        //Creating No Intenet View
        Extensions.createNoInternetView()
        //Calling Get Core Config
        Extensions.callGetCoreCong()
        Extensions.getUniqueIdentider()
        //Initializing the image cache to store images
        ImageCache.initializeCache()
        GMSServices.provideAPIKey(Extensions.googleMapKey())
        //Starting Location Manager
        LocationManager.sharedInstance.startLocationManager()
        
        Extensions.setTripStartedStatus(false)
        
        NSUserDefaults.standardUserDefaults().setObject(["en"], forKey: "AppleLanguages")
        NSUserDefaults.standardUserDefaults().synchronize()
        
        //        application.registerUserNotificationSettings(UIUserNotificationSettings (forTypes: UIUserNotificationType.Alert, categories: nil))
        
        //  application.registerUserNotificationSettings(UIUserNotificationSettings( forTypes: [.Alert, .Badge, .Sound], categories: nil))
        //
        if application.respondsToSelector(#selector(UIApplication.registerUserNotificationSettings(_:))) {
            if #available(iOS 8.0, *) {
                let types:UIUserNotificationType = ([.Alert, .Sound, .Badge])
                let settings:UIUserNotificationSettings = UIUserNotificationSettings(forTypes: types, categories: nil)
                application.registerUserNotificationSettings(settings)
                application.registerForRemoteNotifications()
            } else {
                application.registerForRemoteNotificationTypes([.Alert, .Sound, .Badge])
            }
        } else {
            // Register for Push Notifications before iOS 8
            application.registerForRemoteNotificationTypes([.Alert, .Sound, .Badge])
        }
        //
        if Extensions.aboveBelowSpeedTimerStatus() == true && NSUserDefaults.standardUserDefaults().objectForKey("TimeBeforApplicationTerminated") != nil {
            //Date and Time saved when the app was terminate
            
            let timeBoforeTermination:NSDate = NSUserDefaults.standardUserDefaults().objectForKey("TimeBeforApplicationTerminated") as! NSDate
            
            //Calculating the difference between current time and last saved time
            let interval:NSTimeInterval = NSDate.init().timeIntervalSinceDate(timeBoforeTermination)
            //Calcualting the minutes,seconds and Hours
            
            let leftMinutes = interval / 60
            
            let finalSeconds = fmodf(Float(interval), 60)
            
            let finalHours = leftMinutes / 60
            let finalMinutes = fmodf(Float(leftMinutes), 60)
            
            //Taking the last recorded waiting time
            
            var waitingTimeString = Extensions.getWaitingTime()
            
            var hour:Int!
            var minute:Int!
            var second:Int!
            
            hour = Int(waitingTimeString.substringWithRange(waitingTimeString.startIndex.advancedBy(0) ..< waitingTimeString.startIndex.advancedBy(2)))
            
            minute = Int(waitingTimeString.substringWithRange(waitingTimeString.startIndex.advancedBy(3) ..< waitingTimeString.startIndex.advancedBy(5)))
            
            second = Int(waitingTimeString.substringWithRange( waitingTimeString.startIndex.advancedBy(6) ..< waitingTimeString.startIndex.advancedBy(8)))
            
            //Adding the recorded time with the time which app spend when it is terminate unitil it openend
            second = second + Int(finalSeconds)
            if second >= 60 {
                minute  = minute + 1
                second = 0
            }
            
            minute = minute + Int(finalMinutes)
            if minute >= 60 {
                hour = hour + 1
                minute = 0
            }
            hour = hour + Int(finalHours)
            //Saving the waiting time back
            
            waitingTimeString = String(format:"%@:%@:%@",hour > 9 ? "\(hour)" : "0\(hour)",minute > 9 ? "\(minute)" : "0\(minute)",second > 9 ? "\(second)" : "0\(second)")
            
            Extensions.setWaitingTime(waitingTimeString)
        }
        
        UITextField.appearance().tintColor = UIColor.blackTextColor()
        
        isTripIsCancelled = false
        
        
        //allowing dispatcher complete trip
        Extensions.allowDispatcherCompleteTrip(true)
        
        return true
    }
    
    func applicationWillResignActive(application: UIApplication) {
        // Sent when the application is about to move from active to inactive state. This can occur for certain types of temporary interruptions (such as an incoming phone call or SMS message) or when the user quits the application and it begins the transition to the background state.
        // Use this method to pause ongoing tasks, disable timers, and throttle down OpenGL ES frame rates. Games should use this method to pause the game.
    }
    
    func applicationDidEnterBackground(application: UIApplication) {
        // Use this method to release shared resources, save user data, invalidate timers, and store enough application state information to restore your application to its current state in case it is terminated later.
        applicationIsInForeGround = false
        //Start the background fetch
        self.doBackgroundTask()
        
        //Start the background fetch
        self.doBackgroundTask()
        
    }
    
    func applicationWillEnterForeground(application: UIApplication) {
        // Called as part of the transition from the background to the inactive state; here you can undo many of the changes made on entering the background.
        
     //   print("Application is Foreground")
        applicationIsInForeGround = true
        Extensions.resumeAnimation()
        
        timer.invalidate()
        timer = nil
        
        if (HandleBackgroundRequest.sharedInstance.timeLimit - 1) - HandleBackgroundRequest.sharedInstance.count > 1 {
            NSNotificationCenter.defaultCenter().postNotificationName("AcceptNotification", object: nil, userInfo: nil)
            HandleBackgroundRequest.sharedInstance.stopTimer()
        }
        
        //clear all remind me driver local notification.
        UIApplication.sharedApplication().cancelLocalNotification(stayConnectionNotification)
        
        TrackLocation.sharedInstance.locationDisbaleAlertShowPermission = false
    }
    
    func application(application: UIApplication, didReceiveLocalNotification notification: UILocalNotification) {
        
        //        if (notification.userInfo! as NSDictionary).objectForKey("request") as! String == "yes"
        //        {
        //            if (HandleBackgroundRequest.sharedInstance.timeLimit - 1) - HandleBackgroundRequest.sharedInstance.count > 1
        //            {
        //                NSNotificationCenter.defaultCenter().postNotificationName("AcceptNotification", object: nil, userInfo: nil)
        //
        //                HandleBackgroundRequest.sharedInstance.stopTimer()
        //            }
        //        }
    }
    
    func applicationDidBecomeActive(application: UIApplication) {
        // Restart any tasks that were paused (or not yet started) while the application was inactive. If the application was previously in the background, optionally refresh the user interface.
    }
    
    func applicationWillTerminate(application: UIApplication) {
        // Called when the application is about to terminate. Save data if appropriate. See also applicationDidEnterBackground:.
        
        //When the app is terminted,save the current time if the waiting timer is running at the time of app termination
        if Extensions.aboveBelowSpeedTimerStatus() {
            NSUserDefaults.standardUserDefaults().setObject(NSDate.init(), forKey: "TimeBeforApplicationTerminated")
        }
        
        if Extensions.driverLoginStatus() == false {
            //Show second launch screen
            NSUserDefaults.standardUserDefaults().setBool(false, forKey: "hideLaunchScreen")
            NSUserDefaults.standardUserDefaults().synchronize()
        }
    }
    
    //MARK:Internet Status
    func setupReachability(hostName hostName: String?, useClosures: Bool) {
        
        //Setting up the recahability class,trigger automatically when no internet
        do {
            let reachability = try hostName == nil ? Reachability.reachabilityForInternetConnection() : Reachability(hostname: hostName!)
            self.reachability = reachability
        } catch {
            return
        }
        
        if (useClosures) {
            
            reachability?.whenReachable = { reachability in
                dispatch_async(dispatch_get_main_queue()) {
                    
                    NSLog("Reachable".localized())
                    if Extensions.coreConfigInfos().count == 0 {
                        //GetCoreConfig is emty,Retrying to call
                        Extensions.retryGetCoreConfig()
                    } else {
                        //Hide the no internet window
                        Extensions.hideInternetView()
                    }
                }
            }
            
            reachability?.whenUnreachable = { reachability in
                dispatch_async(dispatch_get_main_queue()) {
                    NSLog("Unreachable".localized())
                    //Hiding the no internet window
                    Extensions.showInternetView()
                }
            }
        }
    }
    
    func startNotifier() {
        //Starting the notifier which will trigger when the netowk status change
        do {
            try reachability?.startNotifier()
        } catch {
            return
        }
    }
    
    func stopNotifier() {
        //Stopping the notifier
        reachability?.stopNotifier()
        NSNotificationCenter.defaultCenter().removeObserver(self, name: ReachabilityChangedNotification, object: nil)
        reachability = nil
    }
    
    //MARK:Background Task
    func beginBackgroundUpdateTask() {
        self.backgroundUpdateTask = UIApplication.sharedApplication().beginBackgroundTaskWithName("locationUpdate", expirationHandler: { () -> Void in
            self.endBackgroundUpdateTask()
        })
    }
    
    
    func endBackgroundUpdateTask() {
        UIApplication.sharedApplication().endBackgroundTask(self.backgroundUpdateTask)
        self.backgroundUpdateTask = UIBackgroundTaskInvalid
    }
    
    func doBackgroundTask() {
        dispatch_async(dispatch_get_global_queue(DISPATCH_QUEUE_PRIORITY_DEFAULT, 0), {
            self.beginBackgroundUpdateTask()
            
            // Do something with the result.
            if self.timer != nil {
                self.timer.invalidate()
                self.timer = nil
            }
            
            //Making the app to run in background forever by calling the API
            self.timer = NSTimer.scheduledTimerWithTimeInterval(6, target: self, selector: #selector(AppDelegate.sendLocationUpdateNotification), userInfo: nil, repeats: true)
            NSRunLoop.currentRunLoop().addTimer(self.timer, forMode: NSDefaultRunLoopMode)
            
            NSRunLoop.currentRunLoop().run()
            // End the background task.
            self.endBackgroundUpdateTask()
        })
    }
    
    func sendLocationUpdateNotification() {
        TrackLocation.sharedInstance.startTrackingDriver()
    }
    
    ///fire Stay connection Notification
    func stayWithServerNotification() -> Void {
        //Cancel all local notifications and fire a remind me driver local notification every 15 mints after app goes background state.
        
        if UIApplication.sharedApplication().scheduledLocalNotifications?.count > 0 {
            UIApplication.sharedApplication().cancelAllLocalNotifications()
        }
        
        if Extensions.driverLoginStatus() {
            for i in 1...4 {
                let timeInterval = NSTimeInterval(i * 900) //1200
                
                stayConnectionNotification = UILocalNotification()
                stayConnectionNotification.fireDate = NSDate.init(timeIntervalSinceNow: timeInterval)
                stayConnectionNotification.repeatInterval = NSCalendarUnit.Hour
                stayConnectionNotification.alertBody = "Press to stay online with Taxi Taxi".localized()
                stayConnectionNotification.soundName = UILocalNotificationDefaultSoundName
                UIApplication.sharedApplication().scheduleLocalNotification(stayConnectionNotification)
            }
        }
    }
}

