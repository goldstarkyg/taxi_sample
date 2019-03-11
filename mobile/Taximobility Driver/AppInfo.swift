//
//  AppInfo.swift
//  AppInfo
//
//  Created by ndot on 16/08/16.
//  Copyright © 2016 Ktr. All rights reserved.
//

import Foundation
import UIKit

class AppInfo: NSObject {
    
    static var sharedInfo:AppInfo {
        struct Static {
            static var onceToken: dispatch_once_t = 0
            static var instance: AppInfo? = nil
        }
        dispatch_once(&Static.onceToken) {
            Static.instance = AppInfo()
        }
        return Static.instance!
    }
    
    //MARK: Device details
    ///Current device Name
    var deviceName: String {
        
        var systemInfo = utsname()
        uname(&systemInfo)
        let machineMirror = Mirror(reflecting: systemInfo.machine)
        let identifier = machineMirror.children.reduce("") { identifier, element in
            guard let value = element.value as? Int8 where value != 0 else { return identifier }
            return identifier + String(UnicodeScalar(UInt8(value)))
        }
        
        switch identifier {
        case "iPod5,1":                                 return "iPod Touch 5"
        case "iPod7,1":                                 return "iPod Touch 6"
        case "iPhone3,1", "iPhone3,2", "iPhone3,3":     return "iPhone 4"
        case "iPhone4,1":                               return "iPhone 4s"
        case "iPhone5,1", "iPhone5,2":                  return "iPhone 5"
        case "iPhone5,3", "iPhone5,4":                  return "iPhone 5c"
        case "iPhone6,1", "iPhone6,2":                  return "iPhone 5s"
        case "iPhone7,2":                               return "iPhone 6"
        case "iPhone7,1":                               return "iPhone 6 Plus"
        case "iPhone8,1":                               return "iPhone 6s"
        case "iPhone8,2":                               return "iPhone 6s Plus"
        case "iPhone8,4":                               return "iPhone SE"
        case "iPad2,1", "iPad2,2", "iPad2,3", "iPad2,4":return "iPad 2"
        case "iPad3,1", "iPad3,2", "iPad3,3":           return "iPad 3"
        case "iPad3,4", "iPad3,5", "iPad3,6":           return "iPad 4"
        case "iPad4,1", "iPad4,2", "iPad4,3":           return "iPad Air"
        case "iPad5,3", "iPad5,4":                      return "iPad Air 2"
        case "iPad2,5", "iPad2,6", "iPad2,7":           return "iPad Mini"
        case "iPad4,4", "iPad4,5", "iPad4,6":           return "iPad Mini 2"
        case "iPad4,7", "iPad4,8", "iPad4,9":           return "iPad Mini 3"
        case "iPad5,1", "iPad5,2":                      return "iPad Mini 4"
        case "iPad6,3", "iPad6,4", "iPad6,7", "iPad6,8":return "iPad Pro"
        case "AppleTV5,3":                              return "Apple TV"
        case "i386", "x86_64":                          return "Simulator"
        default:                                        return identifier
        }
    }
    
    ///iOS Device type = 2
    var deviceType:String {
        return "2"
    }
    
    ///Current device OS Version
    var osVersion: String {
        let deviceVersion = UIDevice.currentDevice().systemName+" "+UIDevice.currentDevice().systemVersion
        return deviceVersion
    }
    
    //MARK: Application details
    ///Application version number with build number.
    var appVersion: String {
        let version = NSBundle.mainBundle().infoDictionary?["CFBundleShortVersionString"] as? String
        let build = NSBundle.mainBundle().infoDictionary?["CFBundleVersion"] as? String
        let versionToDisplay = "V "+version!+"."+"\(build!)"
        
        return versionToDisplay
    }
    
    ///Application Display name - From info.plist
    var appDisplayName:String {
        let appName = NSBundle.mainBundle().infoDictionary!["CFBundleDisplayName"] as! String
        return appName
    }
    
    ///Application Languages - From CommonDetails.plist
    var appLanguages:NSArray {
        
        var commonDetails = NSDictionary()
        var languages = NSArray()
        
        if let path = NSBundle.mainBundle().pathForResource("CommonDetails", ofType: "plist") {
            commonDetails = NSDictionary(contentsOfFile: path)!
            languages = commonDetails.objectForKey("App Languages") as! NSArray
        }
        return languages
    }
    
    ///Application car icon details - From CommonDetails.plist
    func myCarIcon() -> String {
        
        let myCarModelName = Extensions.myCarModelName()
        
        var commonDetails = NSDictionary()
        var carIcons = NSArray()
        var carIcon:String
        
        if let path = NSBundle.mainBundle().pathForResource("CommonDetails", ofType: "plist") {
            commonDetails = NSDictionary(contentsOfFile: path)!
            carIcons = commonDetails.objectForKey("Car Models") as! NSArray
        }
        
        let carIconPredicate = NSPredicate(format: "name CONTAINS[c] %@", myCarModelName)
        var searchResults = carIcons.filteredArrayUsingPredicate(carIconPredicate)
        
        if searchResults.count == 0 {
            carIcon = carIcons[0].valueForKey("icon") as! String
        } else {
            carIcon = searchResults[0].valueForKey("icon") as! String
        }
        
       // print("Car Icon : \(carIcon)")
        
        return carIcon // carIcons
    }
    
    //MARK:Free Disk space
    ///Free space in GB
    func deviceFreeSpaceInGigaBytes() -> Double? {
        
        let documentDirectoryPath = NSSearchPathForDirectoriesInDomains(.DocumentDirectory, .UserDomainMask, true)
      
        if let systemAttributes = try? NSFileManager.defaultManager().attributesOfFileSystemForPath(documentDirectoryPath.last!) {
            if let freeSizeInBytes = systemAttributes[NSFileSystemFreeSize] as? NSNumber {
                //                print("KB: \(freeSizeInBytes.doubleValue/1024)")
                //                print("MB: \((freeSizeInBytes.doubleValue/1024)/1024)")
                let freeSizeInGB:Double = ((freeSizeInBytes.doubleValue/1024)/1024)/1024 as Double
                print("GB: \(freeSizeInGB)")
                return freeSizeInGB
            }
        }
        // something failed
        return nil
    }
}


