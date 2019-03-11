//
//  AppFont.swift
//  Taximobility Driver
//
//  Created by Gireesh on 2/19/16.
//  Copyright © 2016 Ndot. All rights reserved.
//

//Category Class For UIFont.Chnage the font here to change the app font
import UIKit
extension UIFont {
    class func setAppFont(size:CGFloat)->(UIFont) {
        return UIFont(name: "OpenSans", size: size)!
      //  return UIFont(name: "HelveticaNeue-Thin", size: size)!
    }
    
    class func setAppFontBold(size:CGFloat)->(UIFont) {
       
        return UIFont(name: "OpenSans", size: size)!
        //return UIFont(name: "DroidSans", size: size)!
    }
    
    class func setButtonFont(size:CGFloat)->(UIFont) {
        
        return UIFont(name: "OpenSans-Semibold", size: size)!
//        if Extensions.getSelectedLanguage() == k_EnglishKey {
//            return UIFont(name: "Journal", size: size+6.0)!
//        } else {
//            return UIFont(name: "Journal", size: size)!
//        }
    }
}
