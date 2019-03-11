//
//  ImageCache.swift
//  Taximobility Driver
//
//  Created by Gireesh on 2/25/16.
//  Copyright © 2016 Ndot. All rights reserved.
//

import UIKit

var imageCaches:NSCache!

class ImageCache:NSObject {
    
    class func initializeCache()->Void {
        imageCaches = NSCache.init()
    }
    
    class func storeImage(image:UIImage,url:AnyObject)->Void {
        imageCaches.setObject(image, forKey:url)
    }
    
    class func getImage(url:AnyObject)->UIImage {
        return imageCaches.objectForKey(url) as! UIImage
    }
    
    class func isImageExistOnCache(url:AnyObject)->Bool {
        return imageCaches.objectForKey(url) != nil ?  true : false
    }
    
    class func clearAllCache()->Void {
        imageCaches.removeAllObjects()
    }
}