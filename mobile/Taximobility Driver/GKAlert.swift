//
//  GKAlert.swift
//  Taximobility Driver
//
//  Created by Gireesh on 3/8/16.
//  Copyright © 2016 Ndot. All rights reserved.
//

import UIKit

protocol GKAlertDelegate {
    func GKAlertClickedButtonAtIndex(index:Int,tag:String)->Void
    func GKAlertClickedButtonAtIndexWithText(index:Int,tag:String,text:String)
}

public class GKAlert:NSObject,UITextFieldDelegate {
    let backGroundView:UIView! = UIView.init()
    var alertLayout = [String:AnyObject]()
    let alertView = UIView.init()
    var Delegate:GKAlertDelegate?
    var tag:String = String()
    var heightConstraints:NSLayoutConstraint = NSLayoutConstraint()
    let mobileNumberTextField:UITextField = UITextField.init()
    let forgotOk = UIButton.init()
    var alertWidth:CGFloat!
    
    //MARK: Shared Instance
    class var sharedInstance: GKAlert {
        struct Static {
            static var onceToken: dispatch_once_t = 0
            static var instance: GKAlert? = nil
        }
        dispatch_once(&Static.onceToken) {
            Static.instance = GKAlert()
            Static.instance?.createBasicView()
        }
        return Static.instance!
    }
    
    func createBasicView()->Void {
        backGroundView.translatesAutoresizingMaskIntoConstraints = false
        backGroundView.backgroundColor = UIColor.shadedBgColor()
        
        APP.window?.addSubview(backGroundView)
        
        alertLayout["backGroundView"] = backGroundView
        APP.window?.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[backGroundView]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: alertLayout))
        APP.window?.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[backGroundView]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: alertLayout))
        
        heightConstraints = NSLayoutConstraint(item: alertView, attribute: .Height, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant:150)
        
        alertView.addConstraint(heightConstraints)
    }
    
    func showAlertWith(Title:String,message:String,buttonTitle1:String,buttonTitle2:String,key:String) {
        backGroundView.hidden = false
        tag = key
       
        for subview in backGroundView.subviews {
            subview.removeFromSuperview()
        }
        
        for subview in alertView.subviews {
            subview.removeFromSuperview()
        }
        
        alertLayout["alertView"] = alertView
        
        alertView.translatesAutoresizingMaskIntoConstraints = false
        self.showAnimation()
        backGroundView.addSubview(alertView)
        
        alertView.backgroundColor = UIColor.alertViewColor()
        
        let layer:CALayer = alertView.layer;
        layer.shadowOffset = CGSizeMake(1, 1);
        layer.shadowColor = UIColor.blackColor().CGColor
        layer.shadowRadius = 2.0
        layer.shadowOpacity = 0.6
        //layer.shadowPath = UIBezierPath.init(rect: layer.bounds).CGPath
        layer.rasterizationScale = UIScreen.mainScreen().scale; // to define retina or not
        layer.shouldRasterize = true;
        alertView.clipsToBounds = false
        
        backGroundView.addConstraint(NSLayoutConstraint(item: alertView, attribute: .CenterX, relatedBy: .Equal, toItem: backGroundView, attribute: .CenterX, multiplier: 1.0, constant: 0))
        backGroundView.addConstraint(NSLayoutConstraint(item: alertView, attribute: .CenterY, relatedBy: .Equal, toItem: backGroundView, attribute: .CenterY, multiplier: 1.0, constant: 0))
        
        alertView.addConstraint(NSLayoutConstraint(item: alertView, attribute: .Width, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant:UI_USER_INTERFACE_IDIOM() == UIUserInterfaceIdiom.Pad ? 290 : UIScreen.mainScreen().bounds.size.width-30))
        
        alertWidth = UI_USER_INTERFACE_IDIOM() == UIUserInterfaceIdiom.Pad ? 290 : UIScreen.mainScreen().bounds.size.width-30
        
        let messageLbl = UILabel.init()
        alertView.addSubview(messageLbl)
        messageLbl.translatesAutoresizingMaskIntoConstraints = false
        messageLbl.text = message
        //messageLbl.text = "This is a testing alert,where you can show your message in a customized alert view"
        messageLbl.textAlignment = NSTextAlignment.Center
        messageLbl.font = UIFont.setAppFont(15)
        messageLbl.numberOfLines = 0
        messageLbl.lineBreakMode = NSLineBreakMode.ByWordWrapping
        alertLayout["messageLbl"] = messageLbl
        
        var messageHeight = self.rectForText(messageLbl.text!, font: UIFont.setAppFont(15), maxSize: CGSizeMake(256, 999))
        messageHeight = messageHeight + 10
        
        if messageHeight < 35 {
            messageHeight = 35
        }
        
        alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(2.5)-[messageLbl(Height)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["Height":messageHeight+5], views: alertLayout))
        alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(5)-[messageLbl]-(5)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: alertLayout))
        
        let alertHeight = messageHeight + 50
      //  print("Message Height = \(messageHeight)")
        heightConstraints.constant = alertHeight
        
        if buttonTitle2 == "" {
            let okBtn = UIButton.init()
            okBtn.translatesAutoresizingMaskIntoConstraints = false
            okBtn.backgroundColor = UIColor.clearColor()
            okBtn.setTitleColor(UIColor.blackTextColor(), forState: UIControlState.Normal)
            okBtn.setTitle(buttonTitle1, forState: UIControlState.Normal)
            okBtn.titleLabel?.font = UIFont.setAppFont(15)
            alertLayout["okBtn"] = okBtn
            
            alertView.addSubview(okBtn)
            alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[okBtn(40)]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: alertLayout))
            alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[okBtn]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: alertLayout))
            
            okBtn.addTarget(self, action: #selector(GKAlert.okCancelBtnTapped(_:)), forControlEvents: UIControlEvents.TouchUpInside)
            okBtn.tag = 0
            
        } else {
            
            let okBtn = UIButton.init()
            okBtn.translatesAutoresizingMaskIntoConstraints = false
            okBtn.backgroundColor = UIColor.clearColor()
            okBtn.setTitleColor(UIColor.getTextFieldTextColor(), forState: UIControlState.Normal)
            okBtn.setTitle(buttonTitle1, forState: UIControlState.Normal)
            okBtn.titleLabel?.font = UIFont.setAppFont(15)
            alertLayout["okBtn"] = okBtn
            
            alertView.addSubview(okBtn)
            alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[okBtn(40)]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: alertLayout))
            alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[okBtn(width)]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["width":alertWidth/2], views: alertLayout))
            
            okBtn.tag = 0
            
            let cancelBtn = UIButton.init()
            cancelBtn.translatesAutoresizingMaskIntoConstraints = false
            cancelBtn.backgroundColor = UIColor.clearColor()
            cancelBtn.setTitleColor(UIColor.blackTextColor(), forState: UIControlState.Normal)
            cancelBtn.setTitle(buttonTitle2, forState: UIControlState.Normal)
            cancelBtn.titleLabel?.font = UIFont.setAppFont(15)
            alertLayout["cancelBtn"] = cancelBtn
          
            alertView.addSubview(cancelBtn)
            alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[cancelBtn(40)]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: alertLayout))
            alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[cancelBtn(width)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["width":alertWidth/2], views: alertLayout))
            
            cancelBtn.tag = 1
            
            okBtn.addTarget(self, action: #selector(GKAlert.okCancelBtnTapped(_:)), forControlEvents: UIControlEvents.TouchUpInside)
            cancelBtn.addTarget(self, action: #selector(GKAlert.okCancelBtnTapped(_:)), forControlEvents: UIControlEvents.TouchUpInside)
            
            let separatorView2 = UIView.init()
            separatorView2.translatesAutoresizingMaskIntoConstraints = false
            separatorView2.backgroundColor = UIColor.textFieldUnderLineColor()
            alertLayout["separatorView2"] = separatorView2
            alertView.addSubview(separatorView2)
            alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[separatorView2(30)]-(5)-|", options: NSLayoutFormatOptions(rawValue:0), metrics:nil, views: alertLayout))
            alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(position)-[separatorView2(1)]", options: NSLayoutFormatOptions(rawValue:0), metrics:["position":alertWidth/2-0.5], views: alertLayout))
        }
        
        let separatorView = UIView.init()
        separatorView.translatesAutoresizingMaskIntoConstraints = false
        separatorView.backgroundColor = UIColor.textFieldUnderLineColor()
        alertLayout["separatorView"] = separatorView
        alertView.addSubview(separatorView)
        alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[separatorView(1)]-(40.5)-|", options: NSLayoutFormatOptions(rawValue:0), metrics:nil, views: alertLayout))
        alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(10)-[separatorView]-(10)-|", options: NSLayoutFormatOptions(rawValue:0), metrics:nil, views: alertLayout))
    }
    
    func noGpsAlert(Title:String, message:String, buttonTitle1:String, buttonTitle2:String, key:String) {

        self.backGroundView.hidden = false
        self.tag = key
        for subview in self.backGroundView.subviews {
            subview.removeFromSuperview()
        }
      
        for subview in self.alertView.subviews {
            subview.removeFromSuperview()
        }
        
        self.alertLayout["alertView"] = self.alertView
        
        self.alertView.translatesAutoresizingMaskIntoConstraints = false
        self.backGroundView.addSubview(self.alertView)
        
        self.alertView.backgroundColor = UIColor.alertViewColor()
        let layer:CALayer = self.alertView.layer;
        layer.shadowOffset = CGSizeMake(1, 1);
        layer.shadowColor = UIColor.blackColor().CGColor
        layer.shadowRadius = 2.0
        layer.shadowOpacity = 0.6
        //layer.shadowPath = UIBezierPath.init(rect: layer.bounds).CGPath
        layer.rasterizationScale = UIScreen.mainScreen().scale; // to define retina or not
        layer.shouldRasterize = true;
        self.alertView.clipsToBounds = false
        
        self.backGroundView.addConstraint(NSLayoutConstraint(item: self.alertView, attribute: .CenterX, relatedBy: .Equal, toItem: self.backGroundView, attribute: .CenterX, multiplier: 1.0, constant: 0))
        self.backGroundView.addConstraint(NSLayoutConstraint(item: self.alertView, attribute: .CenterY, relatedBy: .Equal, toItem: self.backGroundView, attribute: .CenterY, multiplier: 1.0, constant: 0))
        
        self.alertView.addConstraint(NSLayoutConstraint(item: self.alertView, attribute: .Width, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant:UI_USER_INTERFACE_IDIOM() == UIUserInterfaceIdiom.Pad ? 290 : UIScreen.mainScreen().bounds.size.width-30))
        
        self.alertWidth = UI_USER_INTERFACE_IDIOM() == UIUserInterfaceIdiom.Pad ? 290 : UIScreen.mainScreen().bounds.size.width-30
        
        let messageLbl = UILabel.init()
        self.alertView.addSubview(messageLbl)
        messageLbl.translatesAutoresizingMaskIntoConstraints = false
        messageLbl.text = message
        //messageLbl.text = "This is a testing alert,where you can show your message in a customized alert view"
        messageLbl.textAlignment = NSTextAlignment.Center
        messageLbl.font = UIFont.setAppFont(15)
        messageLbl.numberOfLines = 0
        messageLbl.lineBreakMode = NSLineBreakMode.ByWordWrapping
        self.alertLayout["messageLbl"] = messageLbl
        
        var messageHeight = self.rectForText(messageLbl.text!, font: UIFont.setAppFont(15), maxSize: CGSizeMake(256, 999))
        messageHeight = messageHeight + 10
        
        if messageHeight < 35 {
            messageHeight = 35
        }
        
        self.alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(2.5)-[messageLbl(Height)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["Height":messageHeight+5], views: self.alertLayout))
        self.alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(5)-[messageLbl]-(5)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: self.alertLayout))
        
        let alertHeight = messageHeight + 50
        
       // print("Message Height = \(messageHeight)")
        
        self.heightConstraints.constant = alertHeight
        
        if buttonTitle2 == "" {
            let okBtn = UIButton.init()
            okBtn.translatesAutoresizingMaskIntoConstraints = false
            okBtn.backgroundColor = UIColor.clearColor()
            okBtn.setTitleColor(UIColor.blackTextColor(), forState: UIControlState.Normal)
            okBtn.setTitle(buttonTitle1, forState: UIControlState.Normal)
            okBtn.titleLabel?.font = UIFont.setAppFont(15)
            self.alertLayout["okBtn"] = okBtn
            
            self.alertView.addSubview(okBtn)
            self.alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[okBtn(40)]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: self.alertLayout))
            self.alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[okBtn]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: self.alertLayout))
            
            okBtn.addTarget(self, action: #selector(GKAlert.okCancelBtnTapped(_:)), forControlEvents: UIControlEvents.TouchUpInside)
            okBtn.tag = 0
        } else {
            
            let okBtn = UIButton.init()
            okBtn.translatesAutoresizingMaskIntoConstraints = false
            okBtn.backgroundColor = UIColor.clearColor()
            okBtn.setTitleColor(UIColor.getTextFieldTextColor(), forState: UIControlState.Normal)
            okBtn.setTitle(buttonTitle1, forState: UIControlState.Normal)
            okBtn.titleLabel?.font = UIFont.setAppFont(15)
            self.alertLayout["okBtn"] = okBtn
            
            self.alertView.addSubview(okBtn)
            self.alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[okBtn(40)]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: self.alertLayout))
            self.alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[okBtn(width)]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["width":self.alertWidth/2], views: self.alertLayout))
            
            okBtn.tag = 0
            
            let cancelBtn = UIButton.init()
            cancelBtn.translatesAutoresizingMaskIntoConstraints = false
            cancelBtn.backgroundColor = UIColor.clearColor()
            cancelBtn.setTitleColor(UIColor.blackTextColor(), forState: UIControlState.Normal)
            cancelBtn.setTitle(buttonTitle2, forState: UIControlState.Normal)
            cancelBtn.titleLabel?.font = UIFont.setAppFont(15)
            self.alertLayout["cancelBtn"] = cancelBtn
            
            self.alertView.addSubview(cancelBtn)
            self.alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[cancelBtn(40)]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: self.alertLayout))
            self.alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[cancelBtn(width)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["width":self.alertWidth/2], views: self.alertLayout))
            
            cancelBtn.tag = 1
            
            okBtn.addTarget(self, action: #selector(GKAlert.okCancelBtnTapped(_:)), forControlEvents: UIControlEvents.TouchUpInside)
            cancelBtn.addTarget(self, action: #selector(GKAlert.okCancelBtnTapped(_:)), forControlEvents: UIControlEvents.TouchUpInside)
            
            let separatorView2 = UIView.init()
            separatorView2.translatesAutoresizingMaskIntoConstraints = false
            separatorView2.backgroundColor = UIColor.textFieldUnderLineColor()
            self.alertLayout["separatorView2"] = separatorView2
            self.alertView.addSubview(separatorView2)
            self.alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[separatorView2(30)]-(5)-|", options: NSLayoutFormatOptions(rawValue:0), metrics:nil, views: self.alertLayout))
            self.alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(position)-[separatorView2(1)]", options: NSLayoutFormatOptions(rawValue:0), metrics:["position":self.alertWidth/2-0.5], views: self.alertLayout))
        }
        
        let separatorView = UIView.init()
        separatorView.translatesAutoresizingMaskIntoConstraints = false
        separatorView.backgroundColor = UIColor.textFieldUnderLineColor()
        self.alertLayout["separatorView"] = separatorView
        self.alertView.addSubview(separatorView)
        self.alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[separatorView(1)]-(40.5)-|", options: NSLayoutFormatOptions(rawValue:0), metrics:nil, views: self.alertLayout))
        self.alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(10)-[separatorView]-(10)-|", options: NSLayoutFormatOptions(rawValue:0), metrics:nil, views: self.alertLayout))
    }
    
    func showAlertWithTextField(title:String, message:String, buttonTitle1:String, buttonTitle2:String, key:String) {
        
        backGroundView.hidden = false
        tag = key
        
        for subview in backGroundView.subviews {
            subview.removeFromSuperview()
        }
        
        for subview in alertView.subviews {
            subview.removeFromSuperview()
        }
        alertLayout["alertView"] = alertView
        
        alertView.translatesAutoresizingMaskIntoConstraints = false
        self.showAnimation()
        backGroundView.addSubview(alertView)
        
        alertView.backgroundColor = UIColor.alertViewColor()
        let layer:CALayer = alertView.layer;
        layer.shadowOffset = CGSizeMake(1, 1);
        layer.shadowColor = UIColor.blackColor().CGColor
        layer.shadowRadius = 2.0
        layer.shadowOpacity = 0.6
        //layer.shadowPath = UIBezierPath.init(rect: layer.bounds).CGPath
        layer.rasterizationScale = UIScreen.mainScreen().scale; // to define retina or not
        layer.shouldRasterize = true;
        alertView.clipsToBounds = false
        
        backGroundView.addConstraint(NSLayoutConstraint(item: alertView, attribute: .CenterX, relatedBy: .Equal, toItem: backGroundView, attribute: .CenterX, multiplier: 1.0, constant: 0))
        backGroundView.addConstraint(NSLayoutConstraint(item: alertView, attribute: .CenterY, relatedBy: .Equal, toItem: backGroundView, attribute: .CenterY, multiplier: 1.0, constant: 0))
        
        alertView.addConstraint(NSLayoutConstraint(item: alertView, attribute: .Width, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant:UI_USER_INTERFACE_IDIOM() == UIUserInterfaceIdiom.Pad ? 290 : UIScreen.mainScreen().bounds.size.width-30))
        
        alertWidth = UI_USER_INTERFACE_IDIOM() == UIUserInterfaceIdiom.Pad ? 290 : UIScreen.mainScreen().bounds.size.width-30
        
        heightConstraints.constant = 80
        mobileNumberTextField.translatesAutoresizingMaskIntoConstraints = false
        
        mobileNumberTextField.layer.borderWidth = 0.5
        mobileNumberTextField.layer.borderColor = UIColor.applicationHeaderColor().CGColor
        mobileNumberTextField.textColor = UIColor.alertTitleColor()
        
        mobileNumberTextField.font = UIFont.setAppFont(14)
        mobileNumberTextField.keyboardType = UIKeyboardType.NumberPad
        mobileNumberTextField.tag = 1022
        alertLayout["mobileNumberTextField"] = mobileNumberTextField
        
        alertView.addSubview(mobileNumberTextField)
       
        //Done button tool bar for number pad
        let keyboardToolBar = UIToolbar.init()
        keyboardToolBar.sizeToFit()
        
        let flexBarBtn = UIBarButtonItem.init(barButtonSystemItem: UIBarButtonSystemItem.FlexibleSpace, target: nil, action: nil)
        
        let doneBarBtn = UIBarButtonItem.init(title: "Done".localized(), style: UIBarButtonItemStyle.Plain, target: self, action: #selector(GKAlert.keybaoardToolBarDoneTapped))
        
        keyboardToolBar.items = [flexBarBtn,doneBarBtn]
        
        mobileNumberTextField.inputAccessoryView = keyboardToolBar
        
        alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[mobileNumberTextField]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: alertLayout))
        alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[mobileNumberTextField(40)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: alertLayout))
        
        let leftPadView = UIView.init(frame:CGRectMake(0, 0,10,30))
        mobileNumberTextField.leftView = leftPadView
        mobileNumberTextField.leftViewMode = UITextFieldViewMode.Always
        mobileNumberTextField.delegate = self
        self.setPlaceHolder(mobileNumberTextField, placeHolder:"Enter your mobile number".localized())
        mobileNumberTextField.text = ""
        
        if buttonTitle2 == "" {
            let okBtn = UIButton.init()
            okBtn.translatesAutoresizingMaskIntoConstraints = false
            okBtn.backgroundColor = UIColor.clearColor()
            okBtn.setTitleColor(UIColor.blackTextColor(), forState: UIControlState.Normal)
            okBtn.setTitle(buttonTitle1, forState: UIControlState.Normal)
            okBtn.titleLabel?.font = UIFont.setAppFont(15)
            alertLayout["okBtn"] = okBtn
            
            alertView.addSubview(okBtn)
            
            alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[okBtn(40)]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: alertLayout))
            alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[okBtn]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: alertLayout))
            
            okBtn.addTarget(self, action: #selector(GKAlert.okCancelBtnTapped(_:)), forControlEvents: UIControlEvents.TouchUpInside)
            okBtn.tag = 0
        } else {
            forgotOk.translatesAutoresizingMaskIntoConstraints = false
            forgotOk.backgroundColor = UIColor.clearColor()
            forgotOk.userInteractionEnabled = false
            forgotOk.setTitleColor(UIColor.getGrayColor(), forState: UIControlState.Normal)
            forgotOk.setTitle(buttonTitle1, forState: UIControlState.Normal)
            forgotOk.titleLabel?.font = UIFont.setAppFont(15)
            alertLayout["okBtn"] = forgotOk
            
            alertView.addSubview(forgotOk)
            
            alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[okBtn(40)]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: alertLayout))
            alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[okBtn(width)]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["width":alertWidth/2], views: alertLayout))
            
            forgotOk.tag = 0
            
            let cancelBtn = UIButton.init()
            cancelBtn.translatesAutoresizingMaskIntoConstraints = false
            cancelBtn.backgroundColor = UIColor.clearColor()
            cancelBtn.setTitleColor(UIColor.blackTextColor(), forState: UIControlState.Normal)
            cancelBtn.setTitle(buttonTitle2, forState: UIControlState.Normal)
            cancelBtn.titleLabel?.font = UIFont.setAppFont(15)
            alertLayout["cancelBtn"] = cancelBtn
            
            alertView.addSubview(cancelBtn)
            alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[cancelBtn(40)]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: alertLayout))
            alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[cancelBtn(width)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["width":alertWidth/2], views: alertLayout))
            
            cancelBtn.tag = 1
            
            forgotOk.addTarget(self, action: #selector(GKAlert.okCancelBtnTapped(_:)), forControlEvents: UIControlEvents.TouchUpInside)
            cancelBtn.addTarget(self, action: #selector(GKAlert.okCancelBtnTapped(_:)), forControlEvents: UIControlEvents.TouchUpInside)
            
            let separatorView2 = UIView.init()
            separatorView2.translatesAutoresizingMaskIntoConstraints = false
            separatorView2.backgroundColor = UIColor.textFieldUnderLineColor()
            alertLayout["separatorView2"] = separatorView2
            alertView.addSubview(separatorView2)
            alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[separatorView2(30)]-(5)-|", options: NSLayoutFormatOptions(rawValue:0), metrics:nil, views: alertLayout))
            alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(position)-[separatorView2(1)]", options: NSLayoutFormatOptions(rawValue:0), metrics:["position":alertWidth/2-0.5], views: alertLayout))
        }
        
        let separatorView = UIView.init()
        separatorView.translatesAutoresizingMaskIntoConstraints = false
        separatorView.backgroundColor = UIColor.textFieldUnderLineColor()
        alertLayout["separatorView"] = separatorView
        alertView.addSubview(separatorView)
        alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[separatorView(1)]-(40.5)-|", options: NSLayoutFormatOptions(rawValue:0), metrics:nil, views: alertLayout))
        alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(10)-[separatorView]-(10)-|", options: NSLayoutFormatOptions(rawValue:0), metrics:nil, views: alertLayout))
    }
    
    func showReferralAlert(title:String,message:String,buttonTitle1:String,buttonTitle2:String,key:String) {
        
        backGroundView.hidden = false
        tag = key
        
        for subview in backGroundView.subviews {
            subview.removeFromSuperview()
        }
        
        for subview in alertView.subviews {
            subview.removeFromSuperview()
        }
        alertLayout["alertView"] = alertView
        
        alertView.translatesAutoresizingMaskIntoConstraints = false
        self.showAnimation()
        backGroundView.addSubview(alertView)
        
        alertView.backgroundColor = UIColor.alertViewColor()
        let layer:CALayer = alertView.layer;
        layer.shadowOffset = CGSizeMake(1, 1);
        layer.shadowColor = UIColor.blackColor().CGColor
        layer.shadowRadius = 2.0
        layer.shadowOpacity = 0.6
        //layer.shadowPath = UIBezierPath.init(rect: layer.bounds).CGPath
        layer.rasterizationScale = UIScreen.mainScreen().scale; // to define retina or not
        layer.shouldRasterize = true;
        alertView.clipsToBounds = false
        
        backGroundView.addConstraint(NSLayoutConstraint(item: alertView, attribute: .CenterX, relatedBy: .Equal, toItem: backGroundView, attribute: .CenterX, multiplier: 1.0, constant: 0))
        backGroundView.addConstraint(NSLayoutConstraint(item: alertView, attribute: .CenterY, relatedBy: .Equal, toItem: backGroundView, attribute: .CenterY, multiplier: 1.0, constant: 0))
        
        alertView.addConstraint(NSLayoutConstraint(item: alertView, attribute: .Width, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant:UI_USER_INTERFACE_IDIOM() == UIUserInterfaceIdiom.Pad ? 290 : UIScreen.mainScreen().bounds.size.width-30))
        
        alertWidth = UI_USER_INTERFACE_IDIOM() == UIUserInterfaceIdiom.Pad ? 290 : UIScreen.mainScreen().bounds.size.width-30
        
        heightConstraints.constant = 80
        
        mobileNumberTextField.translatesAutoresizingMaskIntoConstraints = false
        
        mobileNumberTextField.layer.borderWidth = 0.5
        mobileNumberTextField.layer.borderColor = UIColor.applicationHeaderColor().CGColor
        mobileNumberTextField.textColor = UIColor.alertTitleColor()
        mobileNumberTextField.tag = 1021
        mobileNumberTextField.font = UIFont.setAppFont(14)
        mobileNumberTextField.keyboardType = UIKeyboardType.Default
        alertLayout["mobileNumberTextField"] = mobileNumberTextField
        
        alertView.addSubview(mobileNumberTextField)
        
        //Done button tool bar for number pad
        let keyboardToolBar = UIToolbar.init()
        keyboardToolBar.sizeToFit()
        
        let flexBarBtn = UIBarButtonItem.init(barButtonSystemItem: UIBarButtonSystemItem.FlexibleSpace, target: nil, action: nil)
        
        let doneBarBtn = UIBarButtonItem.init(title: "Done".localized(), style: UIBarButtonItemStyle.Plain, target: self, action: #selector(GKAlert.keybaoardToolBarDoneTapped))
        
        keyboardToolBar.items = [flexBarBtn,doneBarBtn]
        
        mobileNumberTextField.inputAccessoryView = keyboardToolBar
        
        alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[mobileNumberTextField]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: alertLayout))
        alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[mobileNumberTextField(40)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: alertLayout))
        
        let leftPadView = UIView.init(frame:CGRectMake(0, 0,10,30))
        mobileNumberTextField.leftView = leftPadView
        mobileNumberTextField.leftViewMode = UITextFieldViewMode.Always
        mobileNumberTextField.delegate = self
        self.setPlaceHolder(mobileNumberTextField, placeHolder:message)
        mobileNumberTextField.text = ""
        
        if buttonTitle2 == "" {
            let okBtn = UIButton.init()
            okBtn.translatesAutoresizingMaskIntoConstraints = false
            okBtn.backgroundColor = UIColor.clearColor()
            okBtn.setTitleColor(UIColor.blackTextColor(), forState: UIControlState.Normal)
            okBtn.setTitle(buttonTitle1, forState: UIControlState.Normal)
            okBtn.titleLabel?.font = UIFont.setAppFont(15)
            alertLayout["okBtn"] = okBtn
            alertView.addSubview(okBtn)
            
            alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[okBtn(40)]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: alertLayout))
            alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[okBtn]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: alertLayout))
            
            okBtn.addTarget(self, action: #selector(GKAlert.okCancelBtnTapped(_:)), forControlEvents: UIControlEvents.TouchUpInside)
            okBtn.tag = 0
        } else {
            forgotOk.translatesAutoresizingMaskIntoConstraints = false
            forgotOk.backgroundColor = UIColor.clearColor()
            forgotOk.userInteractionEnabled = false
            forgotOk.setTitleColor(UIColor.getGrayColor(), forState: UIControlState.Normal)
            forgotOk.setTitle(buttonTitle1, forState: UIControlState.Normal)
            forgotOk.titleLabel?.font = UIFont.setAppFont(15)
            alertLayout["okBtn"] = forgotOk
            
            alertView.addSubview(forgotOk)
            
            alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[okBtn(40)]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: alertLayout))
            alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[okBtn(width)]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["width":alertWidth/2], views: alertLayout))
            
            forgotOk.tag = 0
            
            let cancelBtn = UIButton.init()
            cancelBtn.translatesAutoresizingMaskIntoConstraints = false
            cancelBtn.backgroundColor = UIColor.clearColor()
            cancelBtn.setTitleColor(UIColor.blackTextColor(), forState: UIControlState.Normal)
            cancelBtn.setTitle(buttonTitle2, forState: UIControlState.Normal)
            cancelBtn.titleLabel?.font = UIFont.setAppFont(15)
            alertLayout["cancelBtn"] = cancelBtn
            
            alertView.addSubview(cancelBtn)
            
            alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[cancelBtn(40)]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: alertLayout))
            alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[cancelBtn(width)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["width":alertWidth/2], views: alertLayout))
            
            cancelBtn.tag = 1
            
            forgotOk.addTarget(self, action: #selector(GKAlert.okCancelBtnTapped(_:)), forControlEvents: UIControlEvents.TouchUpInside)
            cancelBtn.addTarget(self, action: #selector(GKAlert.okCancelBtnTapped(_:)), forControlEvents: UIControlEvents.TouchUpInside)
            
            let separatorView2 = UIView.init()
            separatorView2.translatesAutoresizingMaskIntoConstraints = false
            separatorView2.backgroundColor = UIColor.textFieldUnderLineColor()
            alertLayout["separatorView2"] = separatorView2
            alertView.addSubview(separatorView2)
            alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[separatorView2(30)]-(5)-|", options: NSLayoutFormatOptions(rawValue:0), metrics:nil, views: alertLayout))
            alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(position)-[separatorView2(1)]", options: NSLayoutFormatOptions(rawValue:0), metrics:["position":alertWidth/2-0.5], views: alertLayout))
        }
        
        let separatorView = UIView.init()
        separatorView.translatesAutoresizingMaskIntoConstraints = false
        separatorView.backgroundColor = UIColor.textFieldUnderLineColor()
        alertLayout["separatorView"] = separatorView
        alertView.addSubview(separatorView)
        alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[separatorView(1)]-(40.5)-|", options: NSLayoutFormatOptions(rawValue:0), metrics:nil, views: alertLayout))
        alertView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(10)-[separatorView]-(10)-|", options: NSLayoutFormatOptions(rawValue:0), metrics:nil, views: alertLayout))
    }
    
    func rectForText(text: String, font: UIFont, maxSize: CGSize) -> CGFloat {
        //This is a method to calculate the height
        let label = UILabel(frame: CGRectMake(0, 0, maxSize.width, maxSize.height))
        label.numberOfLines = 6
        label.lineBreakMode = NSLineBreakMode.ByWordWrapping
        label.font = font
        label.text = text
        
        label.sizeToFit()
        
        return label.frame.height
    }
    
    func okCancelBtnTapped(btn:AnyObject)->Void {
        
        let tappedBtn = btn as! UIButton
        
       // print("Tapped Btn Tag \(tappedBtn.tag)")
        backGroundView.hidden = true
        
        if mobileNumberTextField.isFirstResponder() {
            mobileNumberTextField.resignFirstResponder()
        }
        
        if tag == "Referral" {
            Delegate?.GKAlertClickedButtonAtIndexWithText(tappedBtn.tag, tag: tag, text: mobileNumberTextField.text!)
        } else {
            if mobileNumberTextField.text != "" {
                Delegate?.GKAlertClickedButtonAtIndexWithText(tappedBtn.tag, tag: tag, text: mobileNumberTextField.text!)
            } else {
                Delegate?.GKAlertClickedButtonAtIndex(tappedBtn.tag, tag: tag)
            }
        }
        
        mobileNumberTextField.text = ""
    }
    
    func showAnimation()->Void {
        if UIApplication.sharedApplication().applicationState == UIApplicationState.Active {
            
            let animation = CAKeyframeAnimation.init(keyPath: "transform")
            
            let scale1 = CATransform3DMakeScale(0.5, 0.5, 1)
            let scale2 = CATransform3DMakeScale(1.2, 1.2, 1)
            let scale3 = CATransform3DMakeScale(0.9, 0.9, 1)
            let scale4 = CATransform3DMakeScale(1.0, 1.0, 1)
            
            let frameValues = [NSValue.init(CATransform3D: scale1),NSValue.init(CATransform3D: scale2),NSValue.init(CATransform3D: scale3),NSValue.init(CATransform3D: scale4)]
            
            animation.values = frameValues
            
            let frameTimes = [NSNumber.init(float: 0.0),NSNumber.init(float: 0.5),NSNumber.init(float: 0.9),NSNumber.init(float: 1.0)]
            animation.keyTimes = frameTimes
            
            animation.fillMode = kCAFillModeForwards
            animation.removedOnCompletion = false
            animation.duration = 0.2
            
            alertView.layer.addAnimation(animation, forKey: "show")
        }
    }
    
    public func textField(textField: UITextField, shouldChangeCharactersInRange range: NSRange, replacementString string: String) -> Bool {
        let newLength = (textField.text?.characters.count)! + string.characters.count - range.length
        
        if textField.tag == 1021 {
            if newLength > 2 {
                forgotOk.userInteractionEnabled = true
                forgotOk.setTitleColor(UIColor.getTextFieldTextColor(), forState: UIControlState.Normal)
            } else {
                forgotOk.userInteractionEnabled = false
                forgotOk.setTitleColor(UIColor.getGrayColor(), forState: UIControlState.Normal)
            }
            
            if newLength < 7 {
                return true
            } else {
                return false
            }
        } else {
            if newLength < 8 {
                forgotOk.userInteractionEnabled = false
                forgotOk.setTitleColor(UIColor.getGrayColor(), forState: UIControlState.Normal)
            } else {
                forgotOk.userInteractionEnabled = true
                forgotOk.setTitleColor(UIColor.getTextFieldTextColor(), forState: UIControlState.Normal)
            }
            
            if newLength < 14 {
                return true
            } else {
                return false
            }
        }
    }
    
    public func textFieldShouldReturn(textField: UITextField) -> Bool {
        textField.resignFirstResponder()
        return true
    }
    
    func keyBoardAnimation(value:CGFloat,up:Bool) {
        // Animating the view when keyboard appeared,called from animate textfield func
        let movementDuration = 0.5
        let movement:CGFloat = up ? -80 : 80
        
        UIView.beginAnimations("animateTextField", context:nil)
        UIView.setAnimationBeginsFromCurrentState(true)
        UIView.setAnimationDuration(movementDuration)
        alertView.frame = CGRectOffset(alertView.frame, 0, movement)
        UIView.commitAnimations()
    }
    
    public func textFieldDidBeginEditing(textField: UITextField) {
        keyBoardAnimation(50, up: true)
    }
    
    public func textFieldDidEndEditing(textField: UITextField) {
        keyBoardAnimation(50, up: false)
    }
    
    func keybaoardToolBarDoneTapped()->Void {
        mobileNumberTextField.resignFirstResponder()
    }
    
    func hideAlert()->Void {
        backGroundView.hidden = true
    }
    
    //MARK: Set Place Holder
    func setPlaceHolder(txtField:UITextField,placeHolder:String)->Void {
        txtField.attributedPlaceholder = NSAttributedString.init(string: placeHolder, attributes: [NSFontAttributeName:txtField.font!,NSForegroundColorAttributeName:UIColor.placeHolderColor()])
    }
    
}