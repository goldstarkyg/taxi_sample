//
//  AppColor.swift
//  Taximobility Driver
//
//  Created by Gireesh on 2/19/16.
//  Copyright © 2016 Ndot. All rights reserved.
//

//Category class for UIColor
import UIKit

extension UIColor {
    
    class func statusBarColor()->(UIColor) {
        return UIColor(red:255/255.0, green:1/255.0, blue:0/255.0, alpha:1.0)
    }
    
    //MARK: Application Color
    class func applicationHeaderColor()->(UIColor) {
        return UIColor(red:247/255.0, green:245/255.0, blue:246/255.0, alpha:1.0)
    }
    
    class func applicationHeaderTitleColor()->(UIColor){
        return UIColor(red: 65/255.0, green: 63/255.0, blue: 64/255.0, alpha: 1.0);
    }
    
    class func dashBoardMenuBgColor()->UIColor{
        return UIColor.whiteColor()
    }
    
    class func dashBoardMenuTitleColor()->UIColor {
        return UIColor.getTextFieldTextColor()
    }
    
    //MARK:Black Transperant
    class func shadedTableBgColor()->UIColor {
        return UIColor(red: 26/255.0, green: 26/255.0, blue: 26/255.0, alpha: 0.9)
    }
    
    class func shadedBgColor()->UIColor {
        return UIColor(red: 26/255.0, green: 26/255.0, blue: 26/255.0, alpha: 0.5)
    }
    
    //MARK:Common Font Colors
    class func blackTextColor()->UIColor {
        return UIColor.blackColor()
    }
    
    class func whiteTextColor()->UIColor {
        return UIColor.whiteColor()
    }
    
    class func getGrayColor()->UIColor {
        return UIColor.alertTitleColor() //UIColor.grayColor()
    }
    
    class func getTextFieldTextColor()->UIColor {
        return UIColor.blackTextColor() //UIColor(red: 52/255.0, green: 52/255.0, blue: 52/255.0, alpha: 1.0)
    }
    
    class func timeRemainingLbltxtColor()->UIColor {
        return UIColor.whiteColor()
    }
    
    //MARK:Alert
    class func alertTitleColor()->UIColor {
        return UIColor.blackColor()
    }
    
    class func alertViewColor()->UIColor {
        return UIColor.whiteColor()
    }
    
    class func textFieldUnderLineColor()->UIColor {
        return UIColor(red: 206/255.0, green: 206/255.0, blue: 206/255.0, alpha: 1.0);
    }
    
    class func placeHolderColor()->UIColor {
        return UIColor(red: 120/255.0, green: 120/255.0, blue: 120/255.0, alpha: 1.0);
    }
    
    class func applicationSubmitColor()->UIColor {
        return UIColor(red: 238/255.0, green: 51/255.0, blue: 36/255.0, alpha: 1.0);
    }
    
    class func cellGrayColor()->UIColor {
        return UIColor(red:247/255.0, green:245/255.0, blue:246/255.0, alpha:1.0)
    }
    
    
    /*  
     //MARK: Login
     class func getForgotBtnTextColor()->UIColor {
     return UIColor(red: 117/255.0, green: 117/255.0, blue: 117/255.0, alpha: 1.0)
     }
     
     class func getLoginBgColor()->UIColor {
     return UIColor(red: 240/255.0, green: 240/255.0, blue: 240/255.0, alpha: 1.0)
     }
     
     //MARK:Home
     class func dashBoardMenuBorderColor()->UIColor {
     return UIColor.textFieldUnderLineColor()
     }
     
     class func getCurrentLocationLblTxtColor()->UIColor {
     return UIColor(red: 68/255.0, green: 68/255.0, blue: 68/255.0, alpha: 1.0)
     }
     
     class func getCellSeperatorColor()->UIColor {
     return UIColor(red: 208/255.0, green: 208/255.0, blue: 208/255.0, alpha: 1.0)
     }
     
     class func getStatisticsDetailsColor()->UIColor {
     return UIColor(red: 68/255.0, green: 68/255.0, blue: 68/255.0, alpha: 1.0)
     }
     
     class func getDetailsColor()->UIColor {
     return UIColor(red: 136/255.0, green: 136/255.0, blue: 136/212.0, alpha: 1.0)
     }
     
     class func getTaxiDetailsTxtColor()->UIColor {
     return UIColor(red: 95/255.0, green: 95/255.0, blue: 95/255.0, alpha: 1.0)
     }
     
     class func getDarkGrayColor()->UIColor {
     return UIColor.darkGrayColor()
     }
     
     class func getTouchBtnColor()->UIColor {
     return UIColor.lightGrayColor()
     }
     
     
     //MARK:Accept Page
     class func rejectBtnBgColor()->UIColor {
     return UIColor.getApplicationSubmitColor()
     }
     
     class func getAcceptBtnBgColor()->UIColor {
     return UIColor(red: 135/255.0, green: 220/255.0, blue: 31/255.0, alpha: 1.0)
     }
     
     //MARK:Payment
     class func getPaymentCompleteGreenColor()->UIColor {
     return UIColor(red: 76/255.0, green: 222/255.0, blue: 65/255.0, alpha: 1.0)
     }
     
     class func getUnregisteredCardGray()->UIColor {
     return UIColor(red: 100/255.0, green: 100/255.0, blue: 100/255.0, alpha: 1.0)
     }
     
     class func getUnregisteredSeperatorColor()->UIColor {
     return UIColor(red: 194/255.0, green: 194/255.0, blue: 194/255.0, alpha: 1.0)
     }
     
     
     class func getAlertViewCancelBtnColor()->UIColor {
     return UIColor.lightGrayColor()
     }
     
     class func getAlertViewCancelBtnTitleColor()->UIColor {
     return UIColor.blackColor()
     }
     
     class func applicationCancelColor()->UIColor {
     return UIColor(red: 239/255.0, green: 0/255.0, blue: 104/255.0, alpha: 1.0);
     }
     */
    
}
