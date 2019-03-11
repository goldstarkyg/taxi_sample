//
//  APIDownload.swift
//  Taximobility Driver
//
//  Created by Gireesh on 2/19/16.
//  Copyright © 2016 Ndot. All rights reserved.
//

import UIKit

class APIDownlaod : NSObject {
    class func sendGetMethod(url:String, key:String, completion:(resultDic:NSDictionary)->Void) {
        
        //Starting Loader
        if key != "root" {
            Extensions.startIndicator()
        }
        // Encoding the URL
        let encodedUrl : String! = url.stringByAddingPercentEncodingWithAllowedCharacters(NSCharacterSet.URLQueryAllowedCharacterSet())
        
        // Creating a request
        let request = NSURLRequest.init(URL:NSURL(string:encodedUrl)!, cachePolicy:NSURLRequestCachePolicy.ReloadIgnoringCacheData, timeoutInterval: k_URLTimeOut)
        //API Call using URLSession
        
        let getMethodTask = NSURLSession.sharedSession().dataTaskWithRequest(request) { (data,response,error) -> Void in
            
            dispatch_async(dispatch_get_main_queue(), { () -> Void in
                
                if error != nil {
                    //Error here
                    Extensions.showAlert("APP TITLE".localized(), messageString: error?.localizedDescription)
                    Extensions.stopIndicator()
                } else {
                    do {
                        //Converting data to Dictionary
                        let resultDictionary : NSDictionary! = try NSJSONSerialization.JSONObjectWithData(data!, options: .MutableContainers) as! NSDictionary
                        
                        if resultDictionary != nil || resultDictionary.count > 0 {
                            Extensions.stopIndicator()
                            // Successful conversion,Calling Handler now
                            completion(resultDic:resultDictionary)
                        }
                    } catch {
                        print("Error: |Class: APIDownload.swift | func: sendGetMethod | url: \(encodedUrl)")

                        Extensions.stopIndicator()
                        print("Error while converting the data")
                    }
                }
            })
        }
        getMethodTask.resume()
    }
    
    class func downloadDataFromServer(baseURL:String, bodyData:NSDictionary, method:String, key:String, completion:(resultDic:NSDictionary)->Void) {
        //Starting Indicator
        Extensions.startIndicator()
        
        let encodedURL = baseURL.stringByAddingPercentEncodingWithAllowedCharacters(NSCharacterSet.URLQueryAllowedCharacterSet())
        
        // Creating URL Object
        let url = NSURL(string:encodedURL!)
        
        // Creating a Mutable Request
        let request = NSMutableURLRequest.init(URL: url!)
        
        //Creating data from Dic
        do {
            let encodedDic = self.performEncoding(bodyData)
            let theJSONData = try NSJSONSerialization.dataWithJSONObject(encodedDic, options: NSJSONWritingOptions(rawValue: 0))
            let theJSONText =  NSString(data: theJSONData, encoding: NSUTF8StringEncoding)! as String
            
          //  print("Jon Txt---->\(url)\(theJSONText)")
            
            let postData = theJSONText.dataUsingEncoding(NSUTF8StringEncoding)
            
            //Setting HTTP values
            request.HTTPMethod = method
            
            request.setValue("application/json", forHTTPHeaderField:"Accept")
            request.setValue("application/json", forHTTPHeaderField:"Content-Type")
            request.setValue(String("\(postData?.length)"), forHTTPHeaderField:"Content-Length")
            request.HTTPBody = postData
            request.timeoutInterval = k_URLTimeOut
            
            let downloadTask = NSURLSession.sharedSession().dataTaskWithRequest(request) { (data, response, error) -> Void in
                
                //API Call over,getting Main queue
                dispatch_async(dispatch_get_main_queue(), { () -> Void in
                    
                    if error == nil {
                        do {
                            let datastring = NSString(data: data!, encoding: NSUTF8StringEncoding)
                         //   print("Response ---->\(datastring)")
                            
                            let resultDictionary:NSDictionary! = try NSJSONSerialization.JSONObjectWithData(data!, options: .MutableContainers) as! NSDictionary
                            
                         //   print("Response ----> \(resultDictionary)")
                            
                            if resultDictionary != nil && resultDictionary.count > 0 {
                                Extensions.stopIndicator()
                                //Successfull call,Calling Completion handler
                                completion(resultDic:resultDictionary)
                            }
                        } catch {
                            //Error
                            print("Error: |Class: APIDownload.swift | func: downloadDataFromServer | url: \(encodedURL)")
                            Extensions.stopIndicator()
                        }
                    } else {
                        //Errror
                        print("Error: \(error?.localizedDescription) |Class: APIDownload.swift | func: downloadDataFromServer | url: \(encodedURL)")

                        Extensions.showAlert("APP TITLE".localized(), messageString: error?.localizedDescription)
                        Extensions.stopIndicator()
                    }
                })
            }
            downloadTask.resume()
        } catch {
            
        }
    }
    
    class func trackDriverLocation(baseURL:String, bodyData:NSDictionary, method:String, key:String, completion:(resultDic:NSDictionary)->Void) {
        //Starting Indicator if it
        let encodedURL = baseURL.stringByAddingPercentEncodingWithAllowedCharacters(NSCharacterSet.URLQueryAllowedCharacterSet())
        
        // Creating URL Object
        let url = NSURL(string:encodedURL!)
        
        // Creating a Mutable Request
        let request = NSMutableURLRequest.init(URL: url!)
        
        Extensions.showNetworkIndicator()
        
        //Creating data from Dic
        do {
            let theJSONData = try NSJSONSerialization.dataWithJSONObject(bodyData, options: NSJSONWritingOptions(rawValue: 0))
            let theJSONText = String(data: theJSONData,
                                     encoding: NSASCIIStringEncoding)!
            let postData = theJSONText.dataUsingEncoding(NSUTF8StringEncoding)
            
            //Setting HTTP values
            request.HTTPMethod = method
            
            request.setValue("application/json", forHTTPHeaderField:"Accept")
            request.setValue("application/json", forHTTPHeaderField:"Content-Type")
            request.setValue(String("\(postData?.length)"), forHTTPHeaderField:"Content-Length")
            request.HTTPBody = postData
            request.timeoutInterval = k_URLTimeOut
            let downloadTask = NSURLSession.sharedSession().dataTaskWithRequest(request) { (data, response, error) -> Void in
                
                //API Call over,getting Main queue
                dispatch_async(dispatch_get_main_queue(), { () -> Void in
                    
                    if error == nil {
                        do {
                            let resultDictionary:NSDictionary! = try NSJSONSerialization.JSONObjectWithData(data!, options: .MutableContainers) as! NSDictionary
                            
                            if resultDictionary != nil && resultDictionary.count > 0 {
                                //Successfull call,Calling Completion handler
                                completion(resultDic:resultDictionary)
                                
                            }
                        } catch {
                            //Error
                            print("Error: |Class: APIDownload.swift | func: trackDriverLocation")
                        }
                        Extensions.hideNetworkIndicator()
                    } else {
                        //Errror
                        print("Class: APIDownload.swift | func: trackDriverLocation | Error: \(error?.localizedDescription)")
                        Extensions.hideNetworkIndicator()
                    }
                })
            }
            downloadTask.resume()
        } catch {
            Extensions.hideNetworkIndicator()
        }
    }
    
    class func performEncoding(details:NSDictionary)->NSDictionary {
        
        let encodedDic:NSMutableDictionary = NSMutableDictionary(dictionary: details)
        let keyArray:NSArray = encodedDic.allKeys
        
        for i in 0 ..< keyArray.count {
            
            if "\(keyArray[i])" != "profile_picture" {
                let originalString:String = "\(encodedDic.objectForKey(keyArray[i])!)"
                let decoded:String = originalString.stringByRemovingPercentEncoding!
                if originalString == decoded {
                    // The URL was not encoded yet
                    let encodedUrlString:String = originalString.stringByAddingPercentEncodingWithAllowedCharacters(NSCharacterSet.URLQueryAllowedCharacterSet())!
                    encodedDic.setObject(encodedUrlString, forKey: "\(keyArray[i])")
                    
                } else {
                    // The URL was already encoded
                }
            }
        }
        return encodedDic;
    }
}

    