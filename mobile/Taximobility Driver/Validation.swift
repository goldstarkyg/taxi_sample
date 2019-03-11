//
//  Validation.swift
//  Taximobility Driver
//
//  Created by Gireesh on 2/23/16.
//  Copyright © 2016 Ndot. All rights reserved.
//

//Use this class for validations

import UIKit

class Validation:NSObject {
    
    class func isValidMobileNumber(mob:String)->Bool {
        //Mobile Number Validation
        let charcter  = NSCharacterSet(charactersInString: "0123456789").invertedSet
        var filtered:NSString!
        let inputString:NSArray = mob.componentsSeparatedByCharactersInSet(charcter)
        filtered = inputString.componentsJoinedByString("")
       
        if  mob == filtered && mob.characters.count < 8 {
            return false
        } else {
            return mob == filtered
        }
    }
    
    class func isValidPassword(passwd:String)->Bool {
        if passwd.characters.count > 5 && passwd.characters.count <= 32 {
            return true
        } else {
            return false
        }
    }
    
    class func isEmpty(textField:UITextField)->Bool {
        return textField.text?.characters.count == 0 ? true : false
    }
    
    class func isContainEnoughCharacters(textField:UITextField,count:Int)->Bool {
        return textField.text?.characters.count < count ? false : true
    }
    
    class func haveSameText(textField1:UITextField,textField2:UITextField)->Bool {
        return textField1.text == textField2.text ? true : false
    }
    
}

