//
//  UnRegisteredCardPaymentViewController.swift
//  Taximobility Driver
//
//  Created by Gireesh on 3/7/16.
//  Copyright © 2016 Ndot. All rights reserved.
//

import UIKit

class UnRegisteredCardPaymentViewController: BaseViewController,UITextFieldDelegate,UIPickerViewDataSource,UIPickerViewDelegate {

    //MARK: Declaration Section
    @IBOutlet var expiryDateBtn: UIButton!
    @IBOutlet var cvvTxt: UITextField!
    @IBOutlet var cardNumberTxt: UITextField!
    @IBOutlet var expiryDateTxt: UITextField!
    var paymentDetailDic:NSDictionary!
    var layoutDic = [String:AnyObject]()
    var currentDateComponents:NSDateComponents!
    var yearString:NSString!
    let expiryDatePicker:UIPickerView = UIPickerView.init()
    var monthArray:NSMutableArray! = NSMutableArray()
    var yearArray:NSMutableArray! = NSMutableArray()
    var paymentSuccessDic:NSDictionary = NSDictionary()
    @IBOutlet var saveBtn: UIButton!
    //MARK: View Did Load
    override func viewDidLoad()
    {
        
        super.viewDidLoad()
        //Setting Title
        titleLbl.text = ("UNREGISTERED CARD".localized()).capitalizedString
        //Back buuton and Done button
        backBtn.hidden = false
        backBtn.setImage(UIImage(named: "back"), forState: UIControlState.Normal)
        backBtn.addTarget(self, action: #selector(UnRegisteredCardPaymentViewController.moveBackFromUnCard), forControlEvents: UIControlEvents.TouchUpInside)
        
        //Save Btn
        saveBtn.backgroundColor = UIColor.applicationSubmitColor()
        saveBtn.setTitle("Done".localized(), forState: UIControlState.Normal)
        saveBtn.setTitleColor(UIColor.whiteTextColor(), forState: UIControlState.Normal)
        saveBtn.addTarget(self, action: #selector(UnRegisteredCardPaymentViewController.proceedWithCard), forControlEvents: UIControlEvents.TouchUpInside)
        saveBtn.titleLabel?.font = Extensions.isIpadDevice() ? UIFont.setAppFont(20) : UIFont.setAppFont(16)
        
        //Setting attributes for textfields
        cvvTxt.textColor = UIColor.getTextFieldTextColor()
        expiryDateTxt.textColor = UIColor.getTextFieldTextColor()
        cardNumberTxt.textColor = UIColor.getTextFieldTextColor()
        
        cvvTxt.font = Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(13)
        expiryDateTxt.font = Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(13)
        cardNumberTxt.font = Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(13)
        cardNumberTxt.keyboardType = UIKeyboardType.NumberPad
        
        self.createLeftPadView(cvvTxt, textString: "CVV".localized())
        self.createLeftPadView(cardNumberTxt, textString: "Card No".localized())
        self.createLeftPadView(expiryDateTxt, textString: "Expiry".localized())

        expiryDateBtn.addTarget(self, action: #selector(UnRegisteredCardPaymentViewController.expiryDateBtnTapped), forControlEvents: UIControlEvents.TouchUpInside)
        
        self.setPlaceHolder(cvvTxt, placeHolder: "3 Digit".localized())
        self.setPlaceHolder(cardNumberTxt, placeHolder: "**** **** **** 4610")
        self.setPlaceHolder(expiryDateTxt, placeHolder: "MM/YYYY")
        
        currentDateComponents = NSCalendar.currentCalendar().components([NSCalendarUnit.Day,NSCalendarUnit.Month,NSCalendarUnit.Year], fromDate: NSDate.init())
        
        //Setting month and year array
        let month = currentDateComponents.month
        let year = currentDateComponents.year
        
        for i in year  ..< year + 12 
        {
            yearArray.addObject(i)
        }
        
        for i in month ..< 13
        {
            if i < 10
            {
                monthArray.addObject("0\(i)")
                
            }
            else
            {
                monthArray.addObject(i)
            }
        }
        //Tool bar
        let keyboardToolBar = UIToolbar.init()
        
        keyboardToolBar.sizeToFit()
        
        let flexBarBtn = UIBarButtonItem.init(barButtonSystemItem: UIBarButtonSystemItem.FlexibleSpace, target: nil, action: nil)
        
        let doneBarBtn = UIBarButtonItem.init(title: "Done".localized(), style: UIBarButtonItemStyle.Plain, target: self, action: #selector(UnRegisteredCardPaymentViewController.keybaoardToolBarDoneTapped))
        
        keyboardToolBar.items = [flexBarBtn,doneBarBtn]
        
        //Picker View
        expiryDatePicker.delegate = self
        expiryDatePicker.dataSource = self
        
        expiryDatePicker.backgroundColor = UIColor(red: 240/255.0, green: 240/255.0, blue: 240/255.0, alpha: 1.0)
        layoutDic["expiryDatePicker"] = expiryDatePicker
        
        expiryDateTxt.inputView = expiryDatePicker
        expiryDateTxt.inputAccessoryView = keyboardToolBar
        
        //Card Number and CVV Tool bar for number pad
        let numberPadToolbar = UIToolbar.init()
        
        numberPadToolbar.sizeToFit()
        
        let numberPadDoneBtn = UIBarButtonItem.init(title: "Done".localized(), style: UIBarButtonItemStyle.Plain, target: self, action: #selector(UnRegisteredCardPaymentViewController.numberPadDoneBtnTapped))
        
        numberPadToolbar.items = [flexBarBtn,numberPadDoneBtn]
        cardNumberTxt.inputAccessoryView = numberPadToolbar
        cvvTxt.inputAccessoryView = numberPadToolbar
        cvvTxt.keyboardType = UIKeyboardType.NumberPad
        
    }
    func createLeftPadView(textField:UITextField,textString:String)->Void
    {
        //This function will create left/Right pad view for the textfield based on the selected language
        let leftPadView = UIView.init()
        if Extensions.isIpadDevice()
        {
            leftPadView.frame = CGRectMake(0, 0,150,60)
        }
        else
        {
            leftPadView.frame = CGRectMake(0, 0,80,30)
        }
        
        
        let titleLbl:UILabel = UILabel.init()
        
        layoutDic["titleLbl"] = titleLbl
        
        titleLbl.translatesAutoresizingMaskIntoConstraints = false
        
        leftPadView.addSubview(titleLbl)
        
        leftPadView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[titleLbl]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: layoutDic))
        
        leftPadView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(5)-[titleLbl]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: layoutDic))
        
        titleLbl.textColor = UIColor.getTextFieldTextColor()
        titleLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(13)
        titleLbl.text = textString
        
        titleLbl.textAlignment = Extensions.getSelectedLanguage() == "ar" ? NSTextAlignment.Right : NSTextAlignment.Left
        textField.leftViewMode = UITextFieldViewMode.Always
        textField.rightViewMode = UITextFieldViewMode.Always
        
        if Extensions.getSelectedLanguage() == "ar"
        {
            textField.rightView = leftPadView
            textField.textAlignment = NSTextAlignment.Right
        }
        else
        {
            textField.leftView = leftPadView
            textField.textAlignment = NSTextAlignment.Left
        }
        
    }
    //MARK: Proceed with Card
    func proceedWithCard()->Void
    {
        
        let cardNumberString = cardNumberTxt.text?.stringByReplacingOccurrencesOfString(" ", withString: "")
        
        if cardNumberString?.characters.count < 16
        {
            Extensions.showAlert("APP TITLE".localized(), messageString: "Enter valid credit card number".localized())
        }
        else if Validation.isEmpty(expiryDateTxt)
        {
            Extensions.showAlert("APP TITLE".localized(), messageString: "Enter valid expiry date".localized())
        }
        else if !Validation.isContainEnoughCharacters(cvvTxt, count: 3)
        {
            Extensions.showAlert("APP TITLE".localized(), messageString: "Enter valid CVV number".localized())
        }
        else
        {
            //Valid Data is entered by user
            
            let postData:NSDictionary = ["trip_id":paymentDetailDic.objectForKey("trip_id")!,
                                         "distance":paymentDetailDic.objectForKey("distance")!,
                                         "actual_distance":"0",
                                         "actual_amount":paymentDetailDic.objectForKey("total_fare")!,
                                         "trip_fare":paymentDetailDic.objectForKey("trip_fare")!,
                                         "fare":paymentDetailDic.objectForKey("total_fare")!,
                                         "tips":"0",
                                         "passenger_promo_discount":"",
                                         "passenger_discount":paymentDetailDic.objectForKey("passenger_discount")!,
                                         "tax_amount":paymentDetailDic.objectForKey("tax_amount")!,
                                         "remarks":"",
                                         "nightfare_applicable":paymentDetailDic.objectForKey("nightfare_applicable")!,
                                         "eveningfare_applicable":paymentDetailDic.objectForKey("eveningfare_applicable")!,
                                         "eveningfare":paymentDetailDic.objectForKey("eveningfare")!,
                                         "nightfare":paymentDetailDic.objectForKey("nightfare")!,
                                         "waiting_time":paymentDetailDic.objectForKey("waiting_time")!,
                                         "waiting_cost":paymentDetailDic.objectForKey("waiting_cost")!,
                                         "creditcard_no":cardNumberString!,
                                         "creditcard_cvv":cvvTxt.text!,
                                         "expmonth":String(expiryDateTxt.text!.characters.prefix(2)),
                                         "expyear":String(expiryDateTxt.text!.characters.suffix(4)),
                                         "pay_mod_id":"3",
                                         "minutes_traveled":paymentDetailDic.objectForKey("minutes_traveled")!,
                                         "minutes_fare":paymentDetailDic.objectForKey("minutes_fare")!,
                                         "promo_discount_per":paymentDetailDic.objectForKey("promo_discount_per")!]
            
           // print(postData)
            
            APIDownlaod.downloadDataFromServer("\(k_BaseURL)\(apiKey)/?lang=\(Extensions.getSelectedLanguage())&type=tripfare_update", bodyData: postData, method: "POST", key: "") { (resultDic) -> Void in
                
                
                if resultDic.objectForKey("status") as! Int == 1 {
                    
                    self.paymentSuccessDic = resultDic.objectForKey("detail") as! NSDictionary
                    
                    Extensions.setWaitingTime("00:00:00")
                    Extensions.setDriverCurrentStatus(k_DriverFree)
                    Extensions.setDriverInAcceptPage(false)
                    Extensions.setAboveBelowSpeedTimerStatus(false)
                    Extensions.setOngoingTripId("")
                    
                    Extensions.setDriverStatistics(resultDic.objectForKey("driver_statistics") as! NSDictionary)
                    
                    self.performSegueWithIdentifier("toPaymentCompleteSegue", sender: self)
                } else {
                    Extensions.showAlert("APP TITLE".localized(), messageString: resultDic.objectForKey("message") as! String)
                }
            }
        }
    }
    
    //MARK: TextField Delegates
    func textField(textField: UITextField, shouldChangeCharactersInRange range: NSRange, replacementString string: String) -> Bool {
        let newLength = (textField.text?.characters.count)! + string.characters.count - range.length
        
        if textField == cardNumberTxt {
            if range.location == 19 {
                return false
            }
            
            if string.characters.count == 0 {
                return true
            }
            
            if range.location == 4 || range.location == 9 || range.location == 14 {
                
                let stringWithSpace = "\(cardNumberTxt.text!) "
                cardNumberTxt.text = stringWithSpace
            }
            
            let newCharacters = NSCharacterSet(charactersInString: string)
            return NSCharacterSet.decimalDigitCharacterSet().isSupersetOfSet(newCharacters)
            
        } else if textField == cvvTxt {
            if newLength < 5 {
                let newCharacters = NSCharacterSet(charactersInString: string)
                return NSCharacterSet.decimalDigitCharacterSet().isSupersetOfSet(newCharacters)
            } else {
                return false
            }
        }
        return true
    }
    
    func textFieldShouldReturn(textField: UITextField) -> Bool {
        textField.resignFirstResponder()
        return true
    }
  
    func expiryDateBtnTapped()->Void {
        //will show the oicker view
        expiryDateTxt.becomeFirstResponder()
    }
 
    //MARK: PickerView Delegate and DataSource
    func numberOfComponentsInPickerView(pickerView: UIPickerView) -> Int {
        return 2
    }
  
    func pickerView(pickerView: UIPickerView, numberOfRowsInComponent component: Int) -> Int {
        
        if component == 0 {
            return monthArray.count
        } else {
            return yearArray.count
        }
    }
    
    func pickerView(pickerView: UIPickerView, titleForRow row: Int, forComponent component: Int) -> String? {
        return component == 0 ? "\(monthArray.objectAtIndex(row))" : "\(yearArray.objectAtIndex(row))"
    }
   
    func pickerView(pickerView: UIPickerView, didSelectRow row: Int, inComponent component: Int) {
        
        let year = currentDateComponents.year
        
        let month = currentDateComponents.month
        
        if component == 1 {
            if year == yearArray.objectAtIndex(row) as! Int {
                //If the selected year equal to current year,then show from current month
                monthArray.removeAllObjects()

                for i in month ..< 13 {
                    if i < 10 {
                        monthArray.addObject("0\(i)")
                    } else {
                        monthArray.addObject(i)
                    }
                }
                
                expiryDatePicker.reloadComponent(0)
                expiryDatePicker.selectedRowInComponent(0)
            } else {
                //IF the selected year not equal to current year,show entire months
                if monthArray.count != 12 {
                    monthArray.removeAllObjects()
                    monthArray = ["01","02","03","04","05","06","07","08","09","10","11","12"]
                    expiryDatePicker.reloadComponent(0)
                    expiryDatePicker.selectedRowInComponent(0)
                }
            }
        }
    }
    
    //MARK: Toolbar Done
    func keybaoardToolBarDoneTapped()->Void {
        expiryDateTxt.text = "\(monthArray.objectAtIndex(expiryDatePicker.selectedRowInComponent(0)))/\(yearArray.objectAtIndex(expiryDatePicker.selectedRowInComponent(1)))"
        expiryDateTxt.resignFirstResponder()
        
    }
   
    func numberPadDoneBtnTapped()->Void {
        self.view.endEditing(true)
    }
    
    //MARK:Prepare For Segue
    override func prepareForSegue(segue: UIStoryboardSegue, sender: AnyObject?) {
        if segue.identifier == "toPaymentCompleteSegue" {
            //Sending the datas to PaymentComplete Page
            let paymentCompleteObj = segue.destinationViewController as? PaymentCompleteViewController
            paymentCompleteObj?.paymentCompleteDic = paymentSuccessDic
        }
    }
    
    //MARK: Move Back
    func moveBackFromUnCard()->Void {
        self.navigationController?.popViewControllerAnimated(true)
    }
    
    //MAR: Set Place Holder
    func setPlaceHolder(txtField:UITextField,placeHolder:String)->Void {
        txtField.attributedPlaceholder = NSAttributedString.init(string: placeHolder, attributes: [NSFontAttributeName:txtField.font!,NSForegroundColorAttributeName:UIColor.placeHolderColor()])
    }

}
