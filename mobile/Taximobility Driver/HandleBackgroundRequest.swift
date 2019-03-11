//
//  HandleBackgroundRequest.swift
//  Taximobility Driver
//
//  Created by Gireesh on 3/9/16.
//  Copyright © 2016 Ndot. All rights reserved.
//

//This class is to handle the request when the app is in background
import UIKit

public class HandleBackgroundRequest:NSObject {
    
    var count:Int! = Int()
    var timerStatus:Bool = Bool()
    var countTimer:NSTimer! = NSTimer()
    var timeLimit:Int! = Int()
   
    //MARK: Shared Instance
    class var sharedInstance: HandleBackgroundRequest {
        struct Static {
            static var onceToken: dispatch_once_t = 0
            static var instance: HandleBackgroundRequest? = nil
        }
        dispatch_once(&Static.onceToken)
            {
            Static.instance = HandleBackgroundRequest()
            Static.instance?.initializeTheVariables()
        }
        return Static.instance!
    }
  
    func initializeTheVariables()->Void {
        count = 0;
    }
  
    func incrementCount()->Void {
        //Increase the count using timer
        count = count + 1
        
        if count == 20 {
            self.callTimeOutApi()
        }
    }
   
    func callTimeOutApi()->Void {
        self.stopTimer()
        
        //Setting the Post Data
        let postDataDic = ["trip_id":"\(Extensions.tripDetails().objectForKey("passengers_log_id")!)",
                           "driver_id":"\(Extensions.userLoginInfos().objectForKey("userid")!)",
                           "reason":"",
                           "reject_type":"0",
                           "taxi_id":"\(Extensions.userLoginInfos().objectForKey("taxi_id")!)",
                           "company_id":"\(Extensions.userLoginInfos().objectForKey("company_id")!)"]
        
        //API Call
        APIDownlaod.downloadDataFromServer("\(k_BaseURL)\(apiKey)/?lang=\(Extensions.getSelectedLanguage())&type=reject_trip", bodyData:postDataDic, method: "POST", key: "") { (resultDic) -> Void in
            
            
            if resultDic.objectForKey("status") as! Int == 7 {
                //Success
                Extensions.setDriverStatistics(resultDic.objectForKey("driver_statistics") as! NSDictionary )
                Extensions.setOngoingTripId("")
                
                //Showing the alert
                Extensions.showAlert("APP TITLE".localized(), messageString: resultDic.objectForKey("message") as! String)
            }
        }
    }
    
    func resetCount()->Void {
        count = 0
    }
    
    func startTimer()->Void {
        //Starting the timer when the request is arrived
        timeLimit = Int("\(Extensions.tripDetails().valueForKey("notification_time")!)")
        timerStatus = true
        
        countTimer = NSTimer.init(timeInterval: 1.0, target: self, selector:#selector(HandleBackgroundRequest.incrementCount), userInfo: nil, repeats: true)
        
        NSRunLoop.mainRunLoop().addTimer(countTimer, forMode: NSDefaultRunLoopMode)
    }
    
    func stopTimer()->Void {
        //To stop the timer
        timerStatus = false
        countTimer.invalidate()
        
        countTimer = nil
        
        if countTimer != nil {
            self.stopTimer()
        }
        timeLimit = 0
    }
}