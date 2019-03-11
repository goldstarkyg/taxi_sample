//
//  LocationManager.swift
//  Taximobility
//
//  Created by APPLE on 08/08/16.
//  Copyright © 2016 Ndot. All rights reserved.
//

import UIKit
import CoreLocation

protocol LocationManagerDelegate {
    //Protocol
    func locationUpdation(location:CLLocation, userDirection:CLLocationDirection)->Void
   // func headingUpdation(newHeading:CLHeading)->Void
}

public class LocationManager: NSObject,CLLocationManagerDelegate {
    var locationManager = CLLocationManager()
    var locationDelegate:LocationManagerDelegate?
   
    class var sharedInstance:LocationManager {
        struct Static {
            static var onceToken: dispatch_once_t = 0
            static var instance: LocationManager? = nil
        }
        dispatch_once(&Static.onceToken) {
            Static.instance = LocationManager()
        }
        return Static.instance!
    }
  
    func startLocationManager()->Void {
        locationManager = CLLocationManager.init()
        locationManager.delegate = self
        locationManager.desiredAccuracy = kCLLocationAccuracyBestForNavigation
        if locationManager.respondsToSelector(#selector(CLLocationManager.requestAlwaysAuthorization)) {
            locationManager.requestAlwaysAuthorization()
        }
        locationManager.startUpdatingLocation()
        
        if #available(iOS 9.0, *) {
            locationManager.allowsBackgroundLocationUpdates = true
        } else {
            // Fallback on earlier versions
        }
        
        locationManager.startUpdatingLocation()
    }
    
    public func locationManager(manager: CLLocationManager, didUpdateLocations locations: [CLLocation]) {
        let carDirection:CLLocationDirection = locations[0].course
        self.locationDelegate?.locationUpdation(locations[0],userDirection: carDirection)
    }
//    public func locationManager(manager: CLLocationManager, didUpdateHeading newHeading: CLHeading)
//    {
//        self.locationDelegate?.headingUpdation(newHeading)
//    }
    

}
