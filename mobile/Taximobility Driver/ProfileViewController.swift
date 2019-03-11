//
//  ProfileViewController.swift
//  Taximobility Driver
//
//  Created by Gireesh on 2/24/16.
//  Copyright © 2016 Ndot. All rights reserved.
//

import UIKit

var layoutDic = [String:AnyObject]()

class ProfileViewController: BaseViewController,UITextFieldDelegate,UIImagePickerControllerDelegate,UINavigationControllerDelegate,UIGestureRecognizerDelegate,UITableViewDataSource,UITableViewDelegate,GKAlertDelegate,UIScrollViewDelegate {
    
    //MARK: Declaration Section
    @IBOutlet var profileScrollView: UIScrollView!
    let scrollContentView:UIView! = UIView.init()
    let profileImageView:UIImageView! = UIImageView.init()
    
    let firstNameTxt:UITextField! = UITextField.init()
    let lastNameTxt:UITextField! = UITextField.init()
    let emailTxt:UITextField! = UITextField.init()
    let mobileTxt:UITextField! = UITextField.init()
    let passwordTxt:UITextField! = UITextField.init()
    let confirmPasswordTxt:UITextField! = UITextField.init()
    let driverRating:EDStarRating! = EDStarRating.init()
    let walletInfoLbl:UILabel! = UILabel.init()
    var firstNameString:String!
    var lastNameString:String!
    var emailString:String!
    var mobileString:String!
    var passwordString:String!
    var confirmPasswordString:String!
    var bankNameString:String!
    var bankACString:String!
    var salutationString:String!
    var modelString:String!
    var taxiNumberString:String!
    var fromDateString:String!
    var todateString:String!
    var isProfileImageChanged:Bool!
    let taxiDetailsTbl:UITableView! = UITableView.init()
    let taxiDetailsBgView:UIView! = UIView.init()
    var taxiDetailsArray:NSArray! = NSArray()
    var driverWalletAmount:Float! = Float()
    let ACCEPTABLE_CHARECTERS = " ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"
    @IBOutlet var LogoutBtn: UIButton!
    @IBOutlet var SaveBtn: UIButton!
    
    override func viewWillAppear(animated: Bool) {
        super.viewWillAppear(animated)
    }
    
    override func viewDidLoad() {
        super.viewDidLoad()
        
        titleLbl.text = "Profile".localized().uppercaseString
        // Back and Save btn
        backBtn.hidden = false
        backBtn.setImage(UIImage(named:"back"), forState: UIControlState.Normal)
        backBtn.addTarget(self, action:#selector(ProfileViewController.goBackFromProfile), forControlEvents: UIControlEvents.TouchUpInside)
        
        doneBtn.hidden = true
        //Save Btn
        //SaveBtn.backgroundColor = UIColor.getApplicationCancelColor()
        SaveBtn.setBackgroundImage(UIImage(named: "AcceptButtonbg"), forState: .Normal)
        SaveBtn .setTitle("Save".localized().uppercaseString, forState: UIControlState.Normal)
        SaveBtn.titleLabel?.font = Extensions.isIpadDevice() ? UIFont.setButtonFont(20) : UIFont.setButtonFont(16)
        SaveBtn.addTarget(self, action: #selector(ProfileViewController.profileSaveBtnTapped), forControlEvents: UIControlEvents.TouchUpInside)
        SaveBtn.setTitleColor(UIColor.whiteTextColor(), forState: UIControlState.Normal)
        
        //Logout Btn
        // LogoutBtn.backgroundColor = UIColor.getApplicationSubmitColor()
        LogoutBtn.setBackgroundImage(UIImage(named: "DeclineButtonbg"), forState: .Normal)
        LogoutBtn .setTitle("Logout".localized().uppercaseString, forState: UIControlState.Normal)
        LogoutBtn.titleLabel?.font = Extensions.isIpadDevice() ? UIFont.setButtonFont(20) : UIFont.setButtonFont(16)
        LogoutBtn.addTarget(self, action: #selector(ProfileViewController.logoutBtnTapped), forControlEvents: UIControlEvents.TouchUpInside)
        LogoutBtn.setTitleColor(UIColor.blackTextColor(), forState: UIControlState.Normal)
        // Adding the a content view to scroll View
        scrollContentView.translatesAutoresizingMaskIntoConstraints = false
        
        profileScrollView.delegate = self
        profileScrollView.addSubview(scrollContentView)
        
        scrollContentView.backgroundColor = UIColor.whiteColor()
        layoutDic["scrollContentView"] = scrollContentView
        layoutDic["profileScrollView"] = profileScrollView
        
        var metricDic = [String:AnyObject]()
        
        if Extensions.isIpadDevice() {
            metricDic["cHeight"] = 1024
        } else {
            if Extensions.isCurrentDeviceIsiPhone4s() {
                metricDic["cHeight"] = 550
            } else {
                metricDic["cHeight"] = 550
            }
        }
        
        metricDic["cWidth"] = UIScreen.mainScreen().bounds.size.width
        
        profileScrollView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|[scrollContentView(cHeight)]|", options: NSLayoutFormatOptions(rawValue: 0), metrics:metricDic, views:layoutDic))
        profileScrollView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|[scrollContentView(cWidth)]|", options: NSLayoutFormatOptions(rawValue: 0), metrics:metricDic, views:layoutDic))
        
        //Invite Friend Btn
        let inviteFriendBtn = UIButton.init(type: UIButtonType.Custom)
        inviteFriendBtn.translatesAutoresizingMaskIntoConstraints = false
        scrollContentView.addSubview(inviteFriendBtn)
        inviteFriendBtn.hidden = true
        layoutDic["inviteFriendBtn"] = inviteFriendBtn
        var attributes = [
            NSFontAttributeName : Extensions.isIpadDevice() ? UIFont.setAppFont(20) : UIFont.setAppFont(15),
            NSForegroundColorAttributeName : UIColor.applicationSubmitColor(),
            NSUnderlineStyleAttributeName : NSUnderlineStyle.StyleSingle.rawValue]
        
        var attributedString = NSAttributedString(string: "Invite Friends".localized(), attributes: attributes)
        inviteFriendBtn.setAttributedTitle(attributedString, forState: .Normal)
        var contentWidth = self.rectForText("Invite Friends".localized(), font:(inviteFriendBtn.titleLabel?.font)!, maxSize: CGSizeMake(100,25))
        
        var height = 25
        
        if Extensions.isIpadDevice() {
            
        } else {
            if contentWidth > UIScreen.mainScreen().bounds.size.width/2-35 {
                contentWidth = 100
                height = 40
                inviteFriendBtn.titleLabel?.lineBreakMode = NSLineBreakMode.ByWordWrapping
            }
        }
        var inviteMetric = [String:AnyObject]()
        inviteMetric["yPosition"] = Extensions.isIpadDevice() ? 110 : 65
        inviteMetric["height"] = height
        
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(yPosition)-[inviteFriendBtn(height)]", options: NSLayoutFormatOptions(rawValue:0), metrics: inviteMetric, views: layoutDic))
        
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[inviteFriendBtn(width)]-(10)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: ["width":contentWidth], views: layoutDic))
        inviteFriendBtn.contentHorizontalAlignment = UIControlContentHorizontalAlignment.Right
        inviteFriendBtn.addTarget(self, action: #selector(ProfileViewController.inviteFriendAction), forControlEvents: UIControlEvents.TouchUpInside)
        profileScrollView.showsVerticalScrollIndicator = false
        
        //Withdraw Wallet Amount Btn
        let withdrawAmountBtn = UIButton.init(type: UIButtonType.Custom)
        withdrawAmountBtn.translatesAutoresizingMaskIntoConstraints = false
        scrollContentView.addSubview(withdrawAmountBtn)
        withdrawAmountBtn.hidden = true
        layoutDic["withdrawAmountBtn"] = withdrawAmountBtn
        attributes = [ NSFontAttributeName : Extensions.isIpadDevice() ? UIFont.setAppFont(20) : UIFont.setAppFont(15),
                       NSForegroundColorAttributeName : UIColor.applicationSubmitColor(),
                       NSUnderlineStyleAttributeName : NSUnderlineStyle.StyleSingle.rawValue]
        
        attributedString = NSAttributedString(string: "Withdraw".localized(), attributes: attributes)
        withdrawAmountBtn.setAttributedTitle(attributedString, forState: .Normal)
        contentWidth = self.rectForText("Withdraw".localized(), font:(withdrawAmountBtn.titleLabel?.font)!, maxSize: CGSizeMake(100,25))
        
        height = 25
        if Extensions.isIpadDevice() {
            
        } else {
            if contentWidth > UIScreen.mainScreen().bounds.size.width/2-35 {
                contentWidth = 80
                height = 40
                inviteFriendBtn.titleLabel?.lineBreakMode = NSLineBreakMode.ByWordWrapping
            }
        }
        var withdrawMetric = [String:AnyObject]()
        withdrawMetric["yPosition"] = Extensions.isIpadDevice() ? 110 : 65
        withdrawMetric["height"] = height
        
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(yPosition)-[withdrawAmountBtn(height)]", options: NSLayoutFormatOptions(rawValue:0), metrics: withdrawMetric, views: layoutDic))
        
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(10)-[withdrawAmountBtn(width)]", options: NSLayoutFormatOptions(rawValue:0), metrics: ["width":contentWidth], views: layoutDic))
        withdrawAmountBtn.contentHorizontalAlignment = UIControlContentHorizontalAlignment.Right
        withdrawAmountBtn.addTarget(self, action: #selector(ProfileViewController.withdrawBtnTapped), forControlEvents: UIControlEvents.TouchUpInside)
        //
        
        let profilebgImageSize:CGFloat = 80
        let Ybgposition = 20
        var imagebgMetricDic = [String:AnyObject]()
        imagebgMetricDic["profilebgImageSize"] = profilebgImageSize
        imagebgMetricDic["Ybgposition"] = Ybgposition
        // Profile Image
        let bgImage:UIImageView = UIImageView()
        bgImage.translatesAutoresizingMaskIntoConstraints = false
        bgImage.image = UIImage(named: "ProfileBg")
        scrollContentView.addSubview(bgImage)
        layoutDic["bgImage"] = bgImage
        bgImage.bringSubviewToFront(scrollContentView)
        
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(Ybgposition)-[bgImage(profilebgImageSize)]", options:NSLayoutFormatOptions(rawValue: 0), metrics: imagebgMetricDic, views:layoutDic))
        scrollContentView.addConstraint(NSLayoutConstraint.init(item: bgImage, attribute: .CenterX, relatedBy: .Equal, toItem: scrollContentView, attribute: .CenterX, multiplier: 1.0, constant: 0))
        bgImage.addConstraint(NSLayoutConstraint.init(item: bgImage, attribute: .Width, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: profilebgImageSize))
        
        //////
        let profileImageSize:CGFloat = Extensions.isIpadDevice() ? 100 : 70
        let Yposition = Extensions.isIpadDevice() ? 25 : 25
        var imageMetricDic = [String:AnyObject]()
        imageMetricDic["profileImageSize"] = profileImageSize
        imageMetricDic["Yposition"] = Yposition
        // Profile Image
        profileImageView.translatesAutoresizingMaskIntoConstraints = false
        scrollContentView.addSubview(profileImageView)
        layoutDic["profileImageView"] = profileImageView
        profileImageView.bringSubviewToFront(scrollContentView)
        
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(Yposition)-[profileImageView(profileImageSize)]", options:NSLayoutFormatOptions(rawValue: 0), metrics: imageMetricDic, views:layoutDic))
        scrollContentView.addConstraint(NSLayoutConstraint.init(item: profileImageView, attribute: .CenterX, relatedBy: .Equal, toItem: scrollContentView, attribute: .CenterX, multiplier: 1.0, constant: 0))
        profileImageView.addConstraint(NSLayoutConstraint.init(item: profileImageView, attribute: .Width, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: profileImageSize))
        
        //  profileImageView.layer.cornerRadius = profileImageSize/2
        //   profileImageView.layer.masksToBounds = true
        
        // Profile Image Change Btn
        let profileImageBtn = UIButton.init(type: UIButtonType.Custom)
        profileImageBtn.translatesAutoresizingMaskIntoConstraints = false
        layoutDic["profileImageBtn"] = profileImageBtn
        scrollContentView.addSubview(profileImageBtn)
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(Yposition)-[profileImageBtn(profileImageSize)]", options:NSLayoutFormatOptions(rawValue: 0), metrics: imageMetricDic, views:layoutDic))
        scrollContentView.addConstraint(NSLayoutConstraint.init(item: profileImageBtn, attribute: .CenterX, relatedBy: .Equal, toItem: scrollContentView, attribute: .CenterX, multiplier: 1.0, constant: 0))
        profileImageBtn.addConstraint(NSLayoutConstraint.init(item: profileImageBtn, attribute: .Width, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: profileImageSize))
        profileImageBtn.addTarget(self, action:#selector(ProfileViewController.profileImageBtnTapped), forControlEvents:UIControlEvents.TouchUpInside)
        
        //        profileImageBtn.setImage(UIImage(named: "ProfileBg"), forState: .Normal)
        
        //ProfileBgView
        imageMetricDic["position"] = -profileImageSize/2
        imageMetricDic["bgHeight"] = Extensions.isIpadDevice() ? 216 : 110
        let profileBackgroundImageView = UIImageView.init(image: Extensions.isIpadDevice() ? UIImage(named: "profileBg_iPad") : UIImage(named: "profileBg"))
        profileBackgroundImageView.translatesAutoresizingMaskIntoConstraints = false
        layoutDic["profileBackgroundImageView"] = profileBackgroundImageView
        scrollContentView.addSubview(profileBackgroundImageView)
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[profileImageView]-(position)-[profileBackgroundImageView(bgHeight)]", options: NSLayoutFormatOptions(rawValue:0), metrics:imageMetricDic , views: layoutDic))
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[profileBackgroundImageView]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
        
        scrollContentView.bringSubviewToFront(profileImageView)
        scrollContentView.bringSubviewToFront(profileImageBtn)
        scrollContentView.bringSubviewToFront(inviteFriendBtn)
        scrollContentView.bringSubviewToFront(withdrawAmountBtn)
        scrollContentView.bringSubviewToFront(bgImage)
        
        //Driver rating
        driverRating.translatesAutoresizingMaskIntoConstraints = false
        driverRating.backgroundColor = UIColor.clearColor()
        driverRating.maxRating = 5
        driverRating.horizontalMargin = 35.0
        driverRating.editable = false
        driverRating.rating = 3
        driverRating.starImage = Extensions.isIpadDevice() ? UIImage(named:"rating_unfocus_iPad") : UIImage(named:"rating_unfocus")
        driverRating.starHighlightedImage = Extensions.isIpadDevice() ? UIImage(named:"rating_focus_iPad") : UIImage(named:"rating_focus")
        scrollContentView.addSubview(driverRating)
        layoutDic["driverRating"] = driverRating
        let ratingWidth:CGFloat = Extensions.isIpadDevice() ? 210 : 150
        let constant:CGFloat = Extensions.isIpadDevice() ? 2.5 : 2.5
        let YPosition = Extensions.isIpadDevice() ? 15 : -2
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[profileImageView]-(YPosition)-[driverRating(30)]", options:NSLayoutFormatOptions(rawValue: 0), metrics:["YPosition":YPosition], views:layoutDic))
        scrollContentView.addConstraint(NSLayoutConstraint.init(item: driverRating, attribute: .CenterX, relatedBy: .Equal, toItem: scrollContentView, attribute: .CenterX, multiplier: 1.0, constant: constant))
        driverRating.addConstraint(NSLayoutConstraint.init(item: driverRating, attribute: .Width, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: ratingWidth))
        
        //WalletInfo Label
        walletInfoLbl.translatesAutoresizingMaskIntoConstraints = false
        scrollContentView.addSubview(walletInfoLbl)
        walletInfoLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(58) : UIFont.setAppFont(28)
        walletInfoLbl.textColor = UIColor.getTextFieldTextColor()
        walletInfoLbl.textAlignment = NSTextAlignment.Center
        layoutDic["walletInfoLbl"] = walletInfoLbl
        layoutDic["walletYPosition"] = Extensions.isIpadDevice() ? 20 : 3
        layoutDic["walletHeight"] = Extensions.isIpadDevice() ? 60 : 30
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[driverRating]-(walletYPosition)-[walletInfoLbl(walletHeight)]", options: NSLayoutFormatOptions(rawValue:0), metrics: layoutDic, views: layoutDic))
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[walletInfoLbl]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
        
        let textFieldHeight = Extensions.isIpadDevice() ? 55 : 40
        var txtMetricDic = [String:AnyObject]()
        txtMetricDic["textFieldHeight"] = textFieldHeight
        
        //First Name Txt
        firstNameTxt.translatesAutoresizingMaskIntoConstraints = false
        layoutDic["firstNameTxt"] = firstNameTxt
        scrollContentView.addSubview(firstNameTxt)
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[profileBackgroundImageView]-(5)-[firstNameTxt(textFieldHeight)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: txtMetricDic, views:layoutDic))
        firstNameTxt.font = Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(13)
        firstNameTxt.textColor = UIColor.blackTextColor()
        self.setPlaceHolder(firstNameTxt, placeHolder:"First Name".localized())
        firstNameTxt.textAlignment = Extensions.getSelectedLanguage() == "ar" ? NSTextAlignment.Right : NSTextAlignment.Left
        firstNameTxt.returnKeyType = UIReturnKeyType.Next
        
        //Last Name Txt
        lastNameTxt.translatesAutoresizingMaskIntoConstraints = false
        layoutDic["lastNameTxt"] = lastNameTxt
        scrollContentView.addSubview(lastNameTxt)
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[firstNameTxt]-(3)-[lastNameTxt(textFieldHeight)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: txtMetricDic, views:layoutDic))
        lastNameTxt.font = Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(13)
        lastNameTxt.textColor = UIColor.blackTextColor()
        self.setPlaceHolder(lastNameTxt, placeHolder:"Last Name".localized())
        lastNameTxt.textAlignment = Extensions.getSelectedLanguage() == "ar" ? NSTextAlignment.Right : NSTextAlignment.Left
        lastNameTxt.returnKeyType = UIReturnKeyType.Next
        
        
        //Email TXt
        emailTxt.translatesAutoresizingMaskIntoConstraints = false
        layoutDic["emailTxt"] = emailTxt
        scrollContentView.addSubview(emailTxt)
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[lastNameTxt]-(3)-[emailTxt(textFieldHeight)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: txtMetricDic, views:layoutDic))
        emailTxt.font = Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(13)
        emailTxt.textColor = UIColor.blackTextColor()
        self.setPlaceHolder(emailTxt, placeHolder:"Email".localized())
        emailTxt.textAlignment = Extensions.getSelectedLanguage() == "ar" ? NSTextAlignment.Right : NSTextAlignment.Left
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(10)-[emailTxt]-(10)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views:layoutDic))
        
        //Mobile Txt
        mobileTxt.translatesAutoresizingMaskIntoConstraints = false
        layoutDic["mobileTxt"] = mobileTxt
        scrollContentView.addSubview(mobileTxt)
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[emailTxt]-(3)-[mobileTxt(textFieldHeight)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: txtMetricDic, views:layoutDic))
        mobileTxt.font = Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(13)
        mobileTxt.textColor = UIColor.blackTextColor()
        self.setPlaceHolder(mobileTxt, placeHolder:"Mobile Number".localized())
        mobileTxt.textAlignment = Extensions.getSelectedLanguage() == "ar" ? NSTextAlignment.Right : NSTextAlignment.Left
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(10)-[mobileTxt]-(10)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views:layoutDic))
        
        //Password Txt
        passwordTxt.translatesAutoresizingMaskIntoConstraints = false
        layoutDic["passwordTxt"] = passwordTxt
        scrollContentView.addSubview(passwordTxt)
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[mobileTxt]-(3)-[passwordTxt(textFieldHeight)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: txtMetricDic, views:layoutDic))
        passwordTxt.font = Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(13)
        passwordTxt.textColor = UIColor.blackTextColor()
        self.setPlaceHolder(passwordTxt, placeHolder:"Password".localized())
        passwordTxt.textAlignment = Extensions.getSelectedLanguage() == "ar" ? NSTextAlignment.Right : NSTextAlignment.Left
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(10)-[passwordTxt]-(10)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views:layoutDic))
        passwordTxt.returnKeyType = UIReturnKeyType.Next
        
        //Confirm Password Txt
        confirmPasswordTxt.translatesAutoresizingMaskIntoConstraints = false
        layoutDic["confirmPasswordTxt"] = confirmPasswordTxt
        scrollContentView.addSubview(confirmPasswordTxt)
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[passwordTxt]-(3)-[confirmPasswordTxt(textFieldHeight)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: txtMetricDic, views:layoutDic))
        confirmPasswordTxt.font = Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(13)
        confirmPasswordTxt.textColor = UIColor.blackTextColor()
        self.setPlaceHolder(confirmPasswordTxt, placeHolder:"Confirm Password".localized())
        confirmPasswordTxt.textAlignment = Extensions.getSelectedLanguage() == "ar" ? NSTextAlignment.Right : NSTextAlignment.Left
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(10)-[confirmPasswordTxt]-(10)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views:layoutDic))
        passwordTxt.secureTextEntry = true
        confirmPasswordTxt.secureTextEntry = true
        //Setting the padview to add Show/Hide Password Option
        self.createTextFieldPadView(passwordTxt)
        self.createTextFieldPadView(confirmPasswordTxt)
        confirmPasswordTxt.returnKeyType = UIReturnKeyType.Default
        
        //        //Bank Name Txt
        //        bankNameTxt.translatesAutoresizingMaskIntoConstraints = false
        //        layoutDic["bankNameTxt"] = bankNameTxt
        //        scrollContentView.addSubview(bankNameTxt)
        //        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[confirmPasswordTxt]-(3)-[bankNameTxt(textFieldHeight)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: txtMetricDic, views:layoutDic))
        //        bankNameTxt.font = Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(13)
        //        bankNameTxt.textColor = UIColor.blackTextColor()
        //        self.setPlaceHolder(bankNameTxt, placeHolder:"Bank".localized())
        //        bankNameTxt.textAlignment = Extensions.getSelectedLanguage() == "ar" ? NSTextAlignment.Right : NSTextAlignment.Left
        //        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(10)-[bankNameTxt]-(10)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views:layoutDic))
        //
        //        //Bank ACC Txt
        //        bankACTxt.translatesAutoresizingMaskIntoConstraints = false
        //        layoutDic["bankACTxt"] = bankACTxt
        //        scrollContentView.addSubview(bankACTxt)
        //        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[bankNameTxt]-(3)-[bankACTxt(textFieldHeight)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: txtMetricDic, views:layoutDic))
        //        bankACTxt.font = Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(13)
        //        bankACTxt.textColor = UIColor.blackTextColor()
        //        self.setPlaceHolder(bankACTxt, placeHolder:"Bank A/C no".localized())
        //        bankACTxt.textAlignment = Extensions.getSelectedLanguage() == "ar" ? NSTextAlignment.Right : NSTextAlignment.Left
        //        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(10)-[bankACTxt]-(10)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views:layoutDic))
        
        // Adding Seperator lines
        self.createUnderLine(firstNameTxt, name:"firstNameTxt")
        self.createUnderLine(lastNameTxt, name: "lastNameTxt")
        self.createUnderLine(emailTxt, name: "emailTxt")
        self.createUnderLine(mobileTxt, name: "mobileTxt")
        self.createUnderLine(passwordTxt, name: "passwordTxt")
        self.createUnderLine(confirmPasswordTxt, name: "confirmPasswordTxt")
        //self.createUnderLine(bankNameTxt, name: "bankNameTxt")
        //self.createUnderLine(bankACTxt, name: "bankACTxt")
        //Create Pad Image
        self.createImagePadView(firstNameTxt)
        self.createImagePadView(lastNameTxt)
        self.createImagePadView(emailTxt)
        self.createImagePadView(mobileTxt)
        self.createImagePadView(passwordTxt)
        self.createImagePadView(confirmPasswordTxt)
        
        //Taxi Deatils Btn
        let taxiDetailsBtn = UIButton.init(type: UIButtonType.Custom)
        
        scrollContentView.addSubview(taxiDetailsBtn)
        taxiDetailsBtn.translatesAutoresizingMaskIntoConstraints = false
        layoutDic["taxiDetailsBtn"] = taxiDetailsBtn
        layoutDic["btnYPosition"] = Extensions.isIpadDevice() ? 50 : 25
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[confirmPasswordTxt]-(btnYPosition)-[taxiDetailsBtn(30)]", options:NSLayoutFormatOptions(rawValue: 0), metrics:layoutDic, views:layoutDic))
        scrollContentView.addConstraint(NSLayoutConstraint.init(item: taxiDetailsBtn, attribute: .CenterX, relatedBy: .Equal, toItem: scrollContentView, attribute: .CenterX, multiplier: 1.0, constant: 0))
        contentWidth = self.rectForText("Taxi Details".localized(), font:Extensions.isIpadDevice() ? UIFont.setAppFont(20) : UIFont.setAppFont(15), maxSize: CGSizeMake(320,30))
        taxiDetailsBtn.addConstraint(NSLayoutConstraint.init(item: taxiDetailsBtn, attribute: .Width, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: contentWidth))
        taxiDetailsBtn.setTitleColor(UIColor.blackTextColor(), forState: UIControlState.Normal)
        attributes = [
            NSFontAttributeName : Extensions.isIpadDevice() ? UIFont.setAppFont(20) : UIFont.setAppFont(15),
            NSForegroundColorAttributeName : UIColor.blackTextColor(),
            NSUnderlineStyleAttributeName : NSUnderlineStyle.StyleSingle.rawValue
        ]
        attributedString = NSAttributedString(string: "Taxi Details".localized(), attributes: attributes)
        taxiDetailsBtn.setAttributedTitle(attributedString, forState: .Normal)
        taxiDetailsBtn.titleLabel?.font = Extensions.isIpadDevice() ? UIFont.setAppFont(20) : UIFont.setAppFont(15)
        taxiDetailsBtn.addTarget(self, action: #selector(ProfileViewController.taxiDeatialsBtnTapped), forControlEvents:UIControlEvents.TouchUpInside)
        
        // Setting text field delegate
        firstNameTxt.delegate = self
        lastNameTxt.delegate = self
        emailTxt.delegate = self
        mobileTxt.delegate = self
        passwordTxt.delegate = self
        confirmPasswordTxt.delegate = self
        emailTxt.userInteractionEnabled = false
        mobileTxt.userInteractionEnabled = false
        driverWalletAmount = 0
        modelString = ""
        taxiNumberString = ""
        fromDateString = ""
        todateString = ""
        self.callProfileViewAPI()
        isProfileImageChanged = false
        
        // Setting Up Taxi deatils view
        self.setUpTaxiDetailsView()
    }
    func createUnderLine(textFeild:UITextField,name:String)->Void
    {
        // Dynamically create the underline for each textfield
        let seperatorLine = UILabel.init()
        
        scrollContentView.addSubview(seperatorLine)
        
        seperatorLine.translatesAutoresizingMaskIntoConstraints = false
        let lineName = "line_\(name)"
        layoutDic["\(lineName)"] = seperatorLine
        
        
        seperatorLine.backgroundColor = UIColor.textFieldUnderLineColor()
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[\(name)]-(0)-[\(lineName)(1)]", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDic))
        
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(10)-[\(lineName)]-(10)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDic))
        
    }
    
    func createTextFieldPadView(textField:UITextField) {
        // This method will create pad view for textfeild
        
        let showBtn = UIButton.init(type: UIButtonType.Custom)
        showBtn.frame = CGRectMake(0, 0, 40,40)
        showBtn.contentHorizontalAlignment = UIControlContentHorizontalAlignment.Center
        showBtn.setTitle("Show".localized(), forState: UIControlState.Normal)
        showBtn.addTarget(self, action: #selector(ProfileViewController.showPassword(_:)), forControlEvents: UIControlEvents.TouchUpInside)
        showBtn.titleLabel?.font = UIFont.setAppFont(14)
        let stringsize:CGSize! = showBtn.titleLabel?.text!.sizeWithAttributes([NSFontAttributeName:(showBtn.titleLabel?.font)!])
        //or whatever font you're using
        
        let buttonWidth = stringsize.width + 5
        
        showBtn.frame = CGRectMake(0, 0, buttonWidth,40)
        
        showBtn.setTitleColor(UIColor.getGrayColor(), forState: UIControlState.Normal)
        
        if textField == passwordTxt
        {
            showBtn.tag = 1
        }
        else
        {
            showBtn.tag = 2
        }
        if Extensions.getSelectedLanguage() == "ar"
        {
            textField.leftView = showBtn
        }
        else
        {
            textField.rightView = showBtn
            
        }
        
    }
    func createImagePadView(txtField:UITextField)->Void
    {
        let width:CGFloat = Extensions.isIpadDevice() ? 60 : 30
        
        let padView = UIView.init(frame: CGRectMake(0, 0, width,40))
        let padImageView = UIImageView.init()
        
        if Extensions.getSelectedLanguage() == "ar"
        {
            txtField.rightViewMode = UITextFieldViewMode.Always
            txtField.rightView = padView
        }
        else
        {
            txtField.leftViewMode = UITextFieldViewMode.Always
            txtField.leftView = padView
        }
        
        if Extensions.isIpadDevice()
        {
            if txtField == firstNameTxt || txtField == lastNameTxt {
                padImageView.image = UIImage(named:"signup_name_iPad" )
                padImageView.frame = CGRectMake(padView.frame.size.width/2-11.5, padView.frame.size.height/2-11.5, 23, 23)
            } else if txtField == emailTxt {
                padImageView.image = UIImage(named:"signup_email_iPad" )
                padImageView.frame = CGRectMake(padView.frame.size.width/2-12, padView.frame.size.height/2-7, 24,14)
            } else if txtField == mobileTxt {
                padImageView.image = UIImage(named:"login_mobile_iPad2" )
                padImageView.frame = CGRectMake(padView.frame.size.width/2-12, padView.frame.size.height/2-12, 24,24)
            } else if txtField == passwordTxt {
                padImageView.image = UIImage(named:"signup_password_iPad" )
                padImageView.frame = CGRectMake(padView.frame.size.width/2-10, padView.frame.size.height/2-12, 20,24)
            } else if txtField == confirmPasswordTxt {
                padImageView.image = UIImage(named:"signup_confirm_iPad" )
                padImageView.frame = CGRectMake(padView.frame.size.width/2-12.5, padView.frame.size.height/2-11.5, 25,23)
            }
            //            else if txtField == bankNameTxt
            //            {
            //                padImageView.image = UIImage(named:"bank_iPad" )
            //                padImageView.frame = CGRectMake(padView.frame.size.width/2-11.5, padView.frame.size.height/2-11.5, 23,23)
            //            }
            //            else if txtField == bankACTxt
            //            {
            //                padImageView.image = UIImage(named:"bankAccount_iPad" )
            //                padImageView.frame = CGRectMake(padView.frame.size.width/2-10, padView.frame.size.height/2-11.5, 20,23)
            //            }
        }
        else
        {
            if txtField == firstNameTxt || txtField == lastNameTxt
            {
                padImageView.image = UIImage(named:"signup_name" )
                padImageView.frame = CGRectMake(padView.frame.size.width/2-7.5, padView.frame.size.height/2-7.5, 15, 15)
            }
            else if txtField == emailTxt
            {
                padImageView.image = UIImage(named:"signup_email" )
                padImageView.frame = CGRectMake(padView.frame.size.width/2-9, padView.frame.size.height/2-5.5, 18,11)
            }
            else if txtField == mobileTxt
            {
                padImageView.image = UIImage(named:"login_mobile" )
                padImageView.frame = CGRectMake(padView.frame.size.width/2-8, padView.frame.size.height/2-8, 16,16)
            }
            else if txtField == passwordTxt
            {
                padImageView.image = UIImage(named:"signup_password" )
                padImageView.frame = CGRectMake(padView.frame.size.width/2-7.5, padView.frame.size.height/2-9.5, 15,19)
            }
            else if txtField == confirmPasswordTxt
            {
                padImageView.image = UIImage(named:"signup_confirm" )
                padImageView.frame = CGRectMake(padView.frame.size.width/2-10.5, padView.frame.size.height/2-9.5, 21,19)
            }
            //            else if txtField == bankNameTxt
            //            {
            //                padImageView.image = UIImage(named:"bank" )
            //                padImageView.frame = CGRectMake(padView.frame.size.width/2-7.5, padView.frame.size.height/2-7.5, 15,15)
            //            }
            //            else if txtField == bankACTxt
            //            {
            //                padImageView.image = UIImage(named:"bankAccount" )
            //                padImageView.frame = CGRectMake(padView.frame.size.width/2-6.5, padView.frame.size.height/2-7.5, 13,15)
            //            }
        }
        
        
        
        padView.addSubview(padImageView)
        
        
        
    }
    func showPassword(btn:AnyObject)->Void
    {
        // Method for enable/Disable password security entry
        let tappedBtn = btn as! UIButton
        
        if tappedBtn.titleLabel?.text == "Show".localized()
        {
            
            if tappedBtn.tag == 1
            {
                passwordTxt.secureTextEntry = false
                
                let attributedText = NSAttributedString.init(string: passwordTxt.text!)
                
                passwordTxt.attributedText = attributedText;
                passwordTxt.font = Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(13)
                
            }
            else
            {
                confirmPasswordTxt.secureTextEntry = false
                let attributedText = NSAttributedString.init(string: confirmPasswordTxt.text!)
                
                confirmPasswordTxt.attributedText = attributedText;
                confirmPasswordTxt.font = Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(13)
                
            }
            tappedBtn.setTitle("Hide".localized(), forState: UIControlState.Normal)
        }
        else
        {
            
            if tappedBtn.tag == 1
            {
                passwordTxt.secureTextEntry = true
            }
            else
            {
                confirmPasswordTxt.secureTextEntry = true
                
            }
            tappedBtn.setTitle("Show".localized(), forState: UIControlState.Normal)
        }
    }
    
    func goBackFromProfile()->Void {
        self.view.endEditing(true)
        //Moving back From profile page
        self.navigationController?.popViewControllerAnimated(true)
    }
    //MARK: API Calls
    func callProfileViewAPI()->Void
    {
        //Image Loading Indicator
        let indicator = UIActivityIndicatorView.init()
        indicator.color = UIColor.grayColor()
        
        self.scrollContentView.addSubview(indicator)
        
        indicator.center  = self.profileImageView.center
        indicator.startAnimating()
        
        indicator.translatesAutoresizingMaskIntoConstraints = false
        
        layoutDic["indicator"] = indicator
        
        
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(10)-[firstNameTxt]-(10)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views:layoutDic))
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(10)-[lastNameTxt]-(10)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views:layoutDic))
        let indicatorLeading:CGFloat = Extensions.isIpadDevice() ? -65 : -50
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[profileImageView]-(indicatorLeading)-[indicator(30)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["indicatorLeading":indicatorLeading], views:layoutDic))
        
        scrollContentView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[profileImageView]-(indicatorLeading)-[indicator(30)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["indicatorLeading":indicatorLeading], views:layoutDic))
        // Getting profile details from Server
        let postDic = ["userid":"\(Extensions.userLoginInfos().objectForKey("userid")!)"]
        
        APIDownlaod.downloadDataFromServer("\(k_BaseURL)\(apiKey)/?lang=\(Extensions.getSelectedLanguage())&type=driver_profile", bodyData: postDic, method:"POST", key:"") { (resultDic) -> Void in
            
          //  print(resultDic)
            
            if resultDic.objectForKey("status") as! Int == 1 {
                // Success
                let profileDic:NSDictionary = resultDic.objectForKey("detail") as! NSDictionary!
                self.walletInfoLbl.text = Extensions.appendCurrencyWithStringWithSpace(String(format: "%0.2f",Float("\(profileDic.objectForKey("driver_wallet_amount")!)")!))
                self.walletInfoLbl.hidden = true
                self.driverWalletAmount = Float(profileDic.objectForKey("driver_wallet_amount")! as! String)!
              //  print(self.driverWalletAmount)
               
                self.firstNameTxt.text = "\(profileDic.objectForKey("name")!)"
                self.lastNameTxt.text = "\(profileDic.objectForKey("lastname")!)"
                self.emailTxt.text = "\(profileDic.objectForKey("email")!)"
                self.mobileTxt.text = "\(profileDic.objectForKey("phone")!)"
             //   print(profileDic.objectForKey("phone")!)
             
                self.firstNameString = "\(profileDic.objectForKey("name")!)"
                self.lastNameString = "\(profileDic.objectForKey("lastname")!)"
                self.emailString = "\(profileDic.objectForKey("email")!)"
                self.mobileString = "\(profileDic.objectForKey("phone")!)"
                //                    self.bankNameString = "\(profileDic.objectForKey("bankname")!)"
                //                    self.bankACString = "\(profileDic.objectForKey("bankaccount_no")!)"
                self.salutationString = "\(profileDic.objectForKey("salutation")!)"
                self.modelString = "\(profileDic.objectForKey("taxi_model")!)"
                self.taxiNumberString = "\(profileDic.objectForKey("taxi_no")!)"
                self.fromDateString = Extensions.changeDateFormat("\(profileDic.objectForKey("taxi_map_from")!)")
                self.todateString = Extensions.changeDateFormat("\(profileDic.objectForKey("taxi_map_to")!)")
                self.driverRating.rating = profileDic.objectForKey("driver_rating")! as! Float
                let profileImageURL:AnyObject! = profileDic.objectForKey("main_image_path")
                
                if profileImageURL != nil {
                    // Checking image exist in the cache or not
                    if ImageCache.isImageExistOnCache(profileImageURL) {
                        // Exist
                        self.profileImageView.image = ImageCache.getImage(profileImageURL)
                        indicator.hidden = true
                        indicator.removeFromSuperview()
                    } else {
                        // Not Exist
                        
                        let queue:dispatch_queue_t = dispatch_get_global_queue(DISPATCH_QUEUE_PRIORITY_DEFAULT,0)
                        
                        dispatch_async(queue, { () -> Void in
                            
                            let encodedUrl : String! = profileImageURL.stringByAddingPercentEncodingWithAllowedCharacters(NSCharacterSet.URLQueryAllowedCharacterSet())
                            
                            let imageData:NSData! = NSData.init(contentsOfURL:NSURL.init(string:encodedUrl)!)
                            
                            dispatch_async(dispatch_get_main_queue(), { ()->Void in
                                
                                if imageData != nil {
                                    if UIImage(data:imageData) != nil {
                                        //Storing the image in the cache
                                        ImageCache.storeImage(UIImage(data:imageData)!, url: profileImageURL)
                                        
                                        self.profileImageView.image = UIImage(data: imageData)
                                        
                                        indicator.hidden = true
                                        indicator.removeFromSuperview()
                                    }
                                }
                            })
                        })
                    }
                }
            } else {
                //Failed,Showing the alert
                Extensions.showAlert("APP TITLE", messageString:resultDic.objectForKey("message") as! String)
            }
        }
    }
    
    //MARK: Taxi Details
    func taxiDeatialsBtnTapped()->Void {
        self.view.endEditing(true)
        //Shwoing taxi details
        let titleDic:NSDictionary! = ["Title":"Taxi Details".localized(),"Value":""]
        let taxiModelDic:NSDictionary! = ["Title":"Taxi Model".localized(),"Value": modelString]
        let taxiNumberDic:NSDictionary! = ["Title":"Taxi number".localized() ,"Value": taxiNumberString]
        let taxiFromDateDic:NSDictionary! = ["Title":"Taxi from date".localized() ,"Value": fromDateString]
        let taxiToDateDic:NSDictionary! = ["Title":"Taxi to date".localized() ,"Value": todateString]
       
        taxiDetailsArray = [titleDic,taxiModelDic,taxiNumberDic,taxiFromDateDic,taxiToDateDic]
        taxiDetailsTbl.reloadData()
        taxiDetailsBgView.hidden = false
        self.view.bringSubviewToFront(taxiDetailsBgView)
    }
    
    func setUpTaxiDetailsView()->Void {
        // Creating the taxi details view
        var layoutDicTaxiDetails = [String:AnyObject]()
        // Bg View
        taxiDetailsBgView.translatesAutoresizingMaskIntoConstraints = false
        self.view.addSubview(taxiDetailsBgView)
        
        layoutDicTaxiDetails["taxiDetailsBgView"] = taxiDetailsBgView
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[taxiDetailsBgView]-(0)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDicTaxiDetails))
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[taxiDetailsBgView]-(0)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDicTaxiDetails))
        taxiDetailsBgView.backgroundColor = UIColor.shadedBgColor()
        
        // Taxi Deatail table
        taxiDetailsTbl .translatesAutoresizingMaskIntoConstraints = false
        taxiDetailsBgView.addSubview(taxiDetailsTbl)
        layoutDicTaxiDetails["taxiDetailTbl"] = taxiDetailsTbl
        taxiDetailsBgView.addConstraint(NSLayoutConstraint(item: taxiDetailsTbl, attribute:.CenterY, relatedBy: .Equal, toItem: taxiDetailsBgView, attribute: .CenterY, multiplier:1.0, constant:0))
        taxiDetailsBgView.addConstraint(NSLayoutConstraint(item: taxiDetailsTbl, attribute:.CenterX, relatedBy: .Equal, toItem: taxiDetailsBgView, attribute: .CenterX, multiplier:1.0, constant:0))
        
        let tableHeight:CGFloat = Extensions.isIpadDevice() ? 277 : 205
        taxiDetailsTbl.addConstraint(NSLayoutConstraint(item: taxiDetailsTbl, attribute:.Height, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier:1.0, constant:tableHeight))
        
        let tableWidth:CGFloat = Extensions.isIpadDevice() ? 500 : 300
        taxiDetailsTbl.addConstraint(NSLayoutConstraint(item: taxiDetailsTbl, attribute:.Width, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier:1.0, constant:tableWidth))
        taxiDetailsTbl.separatorStyle = UITableViewCellSeparatorStyle.None
        taxiDetailsTbl.delegate = self
        taxiDetailsTbl.dataSource = self
        taxiDetailsTbl.userInteractionEnabled = false
        
        let layer:CALayer = taxiDetailsTbl.layer;
        layer.shadowOffset = CGSizeMake(1, 1);
        layer.shadowColor = UIColor.blackColor().CGColor
        layer.shadowRadius = 2.0
        layer.shadowOpacity = 0.6
        //layer.shadowPath = UIBezierPath.init(rect: layer.bounds).CGPath
        layer.rasterizationScale = UIScreen.mainScreen().scale; // to define retina or not
        layer.shouldRasterize = true;
        taxiDetailsTbl.clipsToBounds = false
        
        // Adding gesture to hide the view ehn user tapped on bg view
        let tapGesture = UITapGestureRecognizer.init(target: self, action: #selector(ProfileViewController.tapGestureFired))
        tapGesture.delegate = self
        tapGesture.cancelsTouchesInView = false
        taxiDetailsBgView.addGestureRecognizer(tapGesture)
        taxiDetailsBgView.hidden = true
    }
    
    func gestureRecognizer(gestureRecognizer: UIGestureRecognizer, shouldReceiveTouch touch: UITouch) -> Bool {
        // Method to recognize whether the tap originated from bg view or table view
        if touch.view!.isDescendantOfView(taxiDetailsTbl) {
            return false
        } else {
            return true
        }
    }
    
    func tapGestureFired()->Void {
        taxiDetailsBgView.hidden = true
    }
    
    //MARK: Logged Out
    func logoutBtnTapped()->Void {
        self.view.endEditing(true)
        
        //User LogOut
        GKAlert.sharedInstance.Delegate = self
        GKAlert.sharedInstance.showAlertWith("APP TITLE".localized(),
                                             message:"Are you sure you want to logout?".localized(),
                                             buttonTitle1: "Log Out".localized(),
                                             buttonTitle2: "CANCEL".localized(),
                                             key: "Logout")
    }
    
    //Alert Delegate
    func GKAlertClickedButtonAtIndex(index:Int,tag:String)->Void {
        if tag == "Logout" && index == 0{
            let postDic = ["driver_id":"\(Extensions.userLoginInfos().objectForKey("userid")!)",
                           "shiftupdate_id":"\(Extensions.userLoginInfos().objectForKey("shiftupdate_id")!)"]
            
            APIDownlaod.downloadDataFromServer("\(k_BaseURL)\(apiKey)/?lang=\(Extensions.getSelectedLanguage())&type=user_logout", bodyData:postDic, method: "POST", key:"", completion: { (resultDic) -> Void in
                
                if resultDic.objectForKey("status") as! Int == 1 {
                    self.navigationController?.popViewControllerAnimated(true)
                    Extensions.showAlert("APP TITLE".localized(), messageString: resultDic.objectForKey("message") as! String)
                    
                    Extensions.setDriverLoginStatus(false)
                    Extensions.setDriverCurrentStatus(k_DriverFree)
                    Extensions.setAboveBelowSpeedTimerStatus(false)
                    TrackLocation.sharedInstance.stopTrackingDriver()
                    
                    //Show second launch screen
                    NSUserDefaults.standardUserDefaults().setBool(true, forKey: "hideLaunchScreen")
                    NSUserDefaults.standardUserDefaults().synchronize()
                } else {
                    Extensions.showAlert("APP TITLE".localized(), messageString: resultDic.objectForKey("message") as! String)
                }
            })
        } else if tag == "withdrawAlert" && index == 0 {
          //  print("Yes from user")
            let postDic = ["driver_id":"\(Extensions.userLoginInfos().objectForKey("userid")!)",
                           "driver_wallet_amount":"\(driverWalletAmount)"]
          //  print("Dic--\(postDic)")
            APIDownlaod.downloadDataFromServer("\(k_BaseURL)\(apiKey)/?lang=\(Extensions.getSelectedLanguage())&type=driver_wallet_request", bodyData:postDic, method: "POST", key:"", completion: { (resultDic) -> Void in
                
                if resultDic.objectForKey("status") as! Int == 1 {
                    self.walletInfoLbl.text = Extensions.appendCurrencyWithStringWithSpace("0.00")
                    self.driverWalletAmount = 0
                    Extensions.showAlert("APP TITLE".localized(), messageString: resultDic.objectForKey("message") as! String)
                } else {
                    Extensions.showAlert("APP TITLE".localized(), messageString: resultDic.objectForKey("message") as! String)
                }
            })
        }
    }
    
    func GKAlertClickedButtonAtIndexWithText(index:Int,tag:String,text:String) {
        
    }
    
    //MARK: Save Profile
    func profileSaveBtnTapped()->Void {
        //Save btn tapped
        self.view.endEditing(true)
        if firstNameString == firstNameTxt.text &&
            lastNameString == lastNameTxt.text &&
            !isProfileImageChanged &&
            Validation.isEmpty(passwordTxt) {
            //No Changes made,showing alert
            Extensions.showAlert("APP TITLE".localized(), messageString:"No changes has been made".localized())
        } else {
            //Changes made, Saving the info to server
            
           // print("Changes made")
            
            if !Validation.isContainEnoughCharacters(firstNameTxt, count: 4) {
                Extensions.showAlert("APP TITLE".localized(), messageString: "First name must contain atleast 4 characters".localized())
            } else if Validation.isEmpty(lastNameTxt) {
                Extensions.showAlert("APP TITLE".localized(), messageString: "Please enter your last name".localized())
                
            }
                //            else if passwordTxt.text?.characters.count == 0
                //            {
                //                Extensions.showAlert("APP TITLE".localized(), Message: "Please enter the password".localized())
                //            }
            else if !Validation.isContainEnoughCharacters(passwordTxt, count: 6) && !Validation.isEmpty(passwordTxt) {
                Extensions.showAlert("APP TITLE".localized(), messageString: "Password should be minimum 6 characters".localized())
                
            } else if !Validation.isEmpty(passwordTxt) && Validation.isEmpty(confirmPasswordTxt)            {
                Extensions.showAlert("APP TITLE".localized(), messageString: "Please enter the confirm password".localized())
            } else if !Validation.haveSameText(passwordTxt, textField2: confirmPasswordTxt) {
                Extensions.showAlert("APP TITLE".localized(), messageString: "Password does not match".localized())
                
            } else {
                
                // Valiation success
                
                let imageData:NSData! = UIImageJPEGRepresentation(profileImageView.image!, 0.1)
                
                let base64ImageStringData:String! = imageData.base64EncodedStringWithOptions(.Encoding64CharacterLineLength)
                
                //var finalImageString:String! = String(data: base64ImageStringData, encoding: NSUTF8StringEncoding)
                var finalImageString:String! = base64ImageStringData
                
                if finalImageString == nil {
                  //  print("BASE 64 Conversion failed")
                    finalImageString = ""
                }
                
                let postDataDic = ["driver_id" : "\(Extensions.userLoginInfos().objectForKey("userid")!)",
                                   "email":emailTxt.text,
                                   "phone":mobileTxt.text,
                                   "salutation":salutationString,
                                   "firstname":firstNameTxt.text,
                                   "lastname":lastNameTxt.text,
                                   "password":passwordTxt.text,
                                   "bankname":"",
                                   "bankaccount_no":"",
                                   "profile_picture":finalImageString]
                
                APIDownlaod.downloadDataFromServer("\(k_BaseURL)\(apiKey)/?lang=\(Extensions.getSelectedLanguage())&type=edit_driver_profile", bodyData: postDataDic, method: "POST", key:"", completion: { (resultDic) -> Void in
                    
                    if resultDic.objectForKey("status") as! Int == 1 {
                        
                        Extensions.showAlert("APP TITLE".localized(), messageString:resultDic.objectForKey("message") as! String)
                        
                        self.isProfileImageChanged = false
                        self.firstNameString = self.firstNameTxt.text
                        self.lastNameString = self.lastNameTxt.text
                        self.passwordString = self.passwordTxt.text
                        //                        self.bankNameString = self.bankNameTxt.text
                        //                        self.bankACString = self.bankACTxt.text
                        
                    } else {
                        Extensions.showAlert("APP TITLE".localized(), messageString:resultDic.objectForKey("message") as! String)
                        
                    }
                })
            }
        }
    }
    
    //MARK:Profile Image Change
    func profileImageBtnTapped()->Void {
        // Profile image change btn tapped
        self.view.endEditing(true)
        
        // Creating the Action sheet
        let imagePickerController = UIAlertController.init(title:nil, message:nil, preferredStyle: UIAlertControllerStyle.ActionSheet)
        
        let cameraAction = UIAlertAction.init(title:"Take Photo".localized(), style:UIAlertActionStyle.Default) { (UIAlertAction) -> Void in
            
            if UIImagePickerController.isSourceTypeAvailable(UIImagePickerControllerSourceType.Camera) {
               
                let cameraPicker = UIImagePickerController.init()
                cameraPicker.sourceType = UIImagePickerControllerSourceType.Camera
                cameraPicker.cameraFlashMode = UIImagePickerControllerCameraFlashMode.Off
                cameraPicker.allowsEditing = false
                cameraPicker.delegate = self
                self.presentViewController(cameraPicker, animated:true, completion:nil)
                
            } else {
                Extensions.showAlert("ERROR".localized(), messageString:"This device doesn't have a camera.".localized())
            }
        }
        
        let galleryAction = UIAlertAction.init(title:"Choose from Library".localized(), style:UIAlertActionStyle.Default) { (UIAlertAction) -> Void in
            
            if UIImagePickerController.isSourceTypeAvailable(UIImagePickerControllerSourceType.PhotoLibrary) {
                let galleryPicker = UIImagePickerController.init()
                galleryPicker.sourceType = UIImagePickerControllerSourceType.PhotoLibrary
                galleryPicker.allowsEditing = false
                galleryPicker.delegate = self
                
                galleryPicker.navigationBar.translucent = false
                galleryPicker.navigationBar.barTintColor = .redColor() // Background color
                galleryPicker.navigationBar.tintColor = .whiteColor() // Cancel button ~ any UITabBarButton items
                galleryPicker.navigationBar.titleTextAttributes = [
                    NSForegroundColorAttributeName : UIColor.whiteColor()]
                
                self.presentViewController(galleryPicker, animated:true, completion:nil)
            } else {
                Extensions.showAlert("ERROR".localized(), messageString:"This device doesn't support photo libraries.".localized())
            }
        }
        
        let cancelAction = UIAlertAction.init(title:"CANCEL".localized(), style:UIAlertActionStyle.Destructive, handler:nil)
        imagePickerController.addAction(cameraAction)
        imagePickerController.addAction(galleryAction)
        imagePickerController.addAction(cancelAction)
       // print(UIDevice.currentDevice().model)
        
        // Shwoing the action sheet
        if UIDevice.currentDevice().model == "iPad" {
          
            let popoverController = imagePickerController.popoverPresentationController
            popoverController!.sourceView = profileImageView
            popoverController!.sourceRect = CGRectMake(0, UIScreen.mainScreen().bounds.size.height, UIScreen.mainScreen().bounds.size.width, 150)
            self.presentViewController(imagePickerController, animated:true, completion:nil)
        } else {
            self.presentViewController(imagePickerController, animated:true, completion:nil)
        }
    }
    
    func imagePickerController(picker: UIImagePickerController, didFinishPickingMediaWithInfo info: [String : AnyObject]) {
        // Image Selected
        isProfileImageChanged = true
        let selectedImage:UIImage = info["UIImagePickerControllerOriginalImage"] as! UIImage
        
        profileImageView.image = self.fixOrientation(selectedImage)
        picker.dismissViewControllerAnimated(true, completion:nil)
    }
    
    func imagePickerControllerDidCancel(picker: UIImagePickerController) {
        picker.dismissViewControllerAnimated(true, completion:nil)
    }
    
    func fixOrientation(img:UIImage) -> UIImage {
        // This is the method for correcting the image orientation
        if (img.imageOrientation == UIImageOrientation.Up) {
            return img;
        }
        
        UIGraphicsBeginImageContextWithOptions(img.size, false, img.scale);
        let rect = CGRect(x: 0, y: 0, width: img.size.width, height: img.size.height)
        img.drawInRect(rect)
        
        let normalizedImage : UIImage = UIGraphicsGetImageFromCurrentImageContext()
        UIGraphicsEndImageContext();
        return normalizedImage;
    }
    
    //MARK: View Animation
    func animateTextField(textField:UITextField,ups:Bool)->Void {
        // To move the view when keyboard appered
        var distance:Int!
        
        if textField == firstNameTxt && Extensions.isCurrentDeviceIsiPhone4s() {
            distance = -50
            self.keyBoardAnimation(CGFloat(distance), up:ups)
        } else if textField == lastNameTxt && Extensions.isCurrentDeviceIsiPhone4s() {
            distance = -80
            self.keyBoardAnimation(CGFloat(distance), up:ups)
        }
            //        else if textField == bankNameTxt
            //        {
            //            distance = UIScreen.mainScreen().bounds.size.height == 480 ? -125 : -75
            //            self.keyBoardAnimation(CGFloat(distance), up:ups)
            //            self.scrollTheView()
            //
            //        }
            //        else if textField == bankACTxt
            //        {
            //            distance = UIScreen.mainScreen().bounds.size.height == 480 ? -160 : -110
            //            self.keyBoardAnimation(CGFloat(distance), up:ups)
            //            self.scrollTheView()
            //        }
        else if textField == passwordTxt {
            if Extensions.isCurrentDeviceIsiPhone4s() {
                distance = -50
                self.keyBoardAnimation(CGFloat(distance), up:ups)
                self.scrollTheView()
            } else {
                distance = -50
                self.keyBoardAnimation(CGFloat(distance), up:ups)
                self.scrollTheView()
            }
        } else if textField == confirmPasswordTxt {
            if Extensions.isCurrentDeviceIsiPhone4s() {
                distance = -90
                self.keyBoardAnimation(CGFloat(distance), up:ups)
                self.scrollTheView()
            } else {
                distance = -90
                self.keyBoardAnimation(CGFloat(distance), up:ups)
                self.scrollTheView()
                self.scrollTheView()
            }
        }
    }
    
    func keyBoardAnimation(value:CGFloat,up:Bool) {
        // Animating the view when keyboard appeared,called from animate textfield func
        let movementDuration = 0.5
        let movement:CGFloat = up ? value : -value
        UIView.beginAnimations("animateTextField", context:nil)
        UIView.setAnimationBeginsFromCurrentState(true)
        UIView.setAnimationDuration(movementDuration)
        self.view.frame = CGRectOffset(self.view.frame, 0, movement)
        UIView.commitAnimations()
    }
    
    //MARK:TextField Delegate
    func textFieldDidBeginEditing(textField: UITextField) {
        self.animateTextField(textField, ups:true)
    }
    
    func textFieldDidEndEditing(textField: UITextField) {
        self.animateTextField(textField, ups:false)
    }
    
    func textFieldShouldReturn(textField: UITextField) -> Bool {
        
        if textField == firstNameTxt {
            firstNameTxt.resignFirstResponder()
            lastNameTxt.becomeFirstResponder()
        } else if textField == lastNameTxt {
            lastNameTxt.resignFirstResponder()
            passwordTxt.becomeFirstResponder()
        } else if textField == passwordTxt {
            passwordTxt.resignFirstResponder()
            confirmPasswordTxt.becomeFirstResponder()
        } else if textField == confirmPasswordTxt {
            confirmPasswordTxt.resignFirstResponder()
            //            bankNameTxt.becomeFirstResponder()
        }
            //        else if textField == bankNameTxt
            //        {
            //            bankNameTxt.resignFirstResponder()
            //            bankACTxt.becomeFirstResponder()
            //        }
            //        else if textField == bankACTxt
            //        {
            //            bankACTxt.resignFirstResponder()
            //        }
        else {
            textField.resignFirstResponder()
        }
        return true
    }
    
    func textField(textField: UITextField, shouldChangeCharactersInRange range: NSRange, replacementString string: String) -> Bool {
        
        let newLength = (textField.text?.characters.count)! + string.characters.count - range.length
        // Setting maximum text lenghth to 20
        if newLength <= 20 {
            
            if textField == passwordTxt || textField == confirmPasswordTxt {
                // Showing/Hidding the btn based on the text length
                if newLength > 0 {
                    textField.leftViewMode = UITextFieldViewMode.Always
                    textField.rightViewMode = UITextFieldViewMode.Always
                } else {
                    if Extensions.getSelectedLanguage() == "ar" {
                        textField.leftViewMode = UITextFieldViewMode.Never
                    } else {
                        textField.rightViewMode = UITextFieldViewMode.Never
                    }
                }
            } else if textField == firstNameTxt || textField == lastNameTxt {
                let Regex = "[A-Za-z^]*"
                let TestResult = NSPredicate.init(format:"SELF MATCHES %@",Regex)
                return TestResult.evaluateWithObject(string)
            }
            //            else if textField == bankACTxt
            //            {
            //                let Regex = "[A-Za-z0-9^]*"
            //                let TestResult = NSPredicate.init(format:"SELF MATCHES %@",Regex)
            //                return TestResult.evaluateWithObject(string)
            //
            //            }
            //            else if textField == bankNameTxt
            //            {
            //                let Regex = "[A-Za-z^]*"
            //                let TestResult = NSPredicate.init(format:"SELF MATCHES %@",Regex)
            //                return TestResult.evaluateWithObject(string)
            //            }
        } else {
            return false
        }
        return true
    }
    
    //MARK: Table View Data Source
    func tableView(tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        return taxiDetailsArray.count
    }
    
    func tableView(tableView: UITableView, cellForRowAtIndexPath indexPath: NSIndexPath) -> UITableViewCell {
        // Taxi details
        var cell:UITableViewCell! = tableView.dequeueReusableCellWithIdentifier("taxiDetails")
        
        if cell == nil {
            cell = UITableViewCell.init(style: UITableViewCellStyle.Default, reuseIdentifier: "taxiDetails")
            
            cell.selectionStyle = UITableViewCellSelectionStyle.None
            
            var detailsLayoutDic = [String:AnyObject]()
            let titleLbl = UILabel.init()
            cell.addSubview(titleLbl)
            titleLbl.translatesAutoresizingMaskIntoConstraints = false
            detailsLayoutDic["titleLbl"] = titleLbl
            
            if indexPath.row == 0 {
                // Setting the header title
                titleLbl.backgroundColor = UIColor.applicationHeaderColor()
                titleLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(19) :UIFont.setAppFont(15)
                titleLbl.textColor = UIColor.blackTextColor()
                titleLbl.textAlignment = NSTextAlignment.Center
                titleLbl.text = "\(taxiDetailsArray.objectAtIndex(indexPath.row).objectForKey("Title")!)"
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[titleLbl]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: detailsLayoutDic))
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[titleLbl]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: detailsLayoutDic))
            } else {
                // Setting the key values
                titleLbl.backgroundColor = UIColor.clearColor()
                titleLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(18) :UIFont.setAppFont(14)
                titleLbl.textColor = UIColor.blackTextColor()
                titleLbl.textAlignment = NSTextAlignment.Left
                titleLbl.numberOfLines = 2
                titleLbl.text = "\(taxiDetailsArray.objectAtIndex(indexPath.row).objectForKey("Title")!)"
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[titleLbl]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: detailsLayoutDic))
                let titleWidth:CGFloat = Extensions.isIpadDevice() ? 200 : 110
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(10)-[titleLbl(titleWidth)]", options: NSLayoutFormatOptions(rawValue: 0), metrics:["titleWidth":titleWidth], views: detailsLayoutDic))
                
                let seperatorLbl = UILabel.init()
                cell.addSubview(seperatorLbl)
                seperatorLbl.translatesAutoresizingMaskIntoConstraints = false
                detailsLayoutDic["seperatorLbl"] = seperatorLbl
                seperatorLbl.backgroundColor = UIColor.clearColor()
                seperatorLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(21) :UIFont.setAppFont(17)
                seperatorLbl.textColor = UIColor.blackTextColor()
                seperatorLbl.textAlignment = NSTextAlignment.Left
                seperatorLbl.text = ":"
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[seperatorLbl]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: detailsLayoutDic))
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[titleLbl]-(5)-[seperatorLbl(3)]", options: NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: detailsLayoutDic))
                
                let detailLbl = UILabel.init()
                cell.addSubview(detailLbl)
                detailLbl.translatesAutoresizingMaskIntoConstraints = false
                detailsLayoutDic["detailLbl"] = detailLbl
                detailLbl.backgroundColor = UIColor.clearColor()
                detailLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(17) :UIFont.setAppFont(13)
                detailLbl.textColor = UIColor.blackTextColor()
                detailLbl.textAlignment = NSTextAlignment.Left
                detailLbl.numberOfLines = 2
                detailLbl.text = "\(taxiDetailsArray.objectAtIndex(indexPath.row).objectForKey("Value")!)"
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[detailLbl]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: detailsLayoutDic))
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[seperatorLbl]-(10)-[detailLbl]-(10)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: detailsLayoutDic))
            }
        }
        return cell
    }
    
    func tableView(tableView: UITableView, heightForRowAtIndexPath indexPath: NSIndexPath) -> CGFloat {
        if Extensions.isIpadDevice() {
            return 55
        } else {
            return 40;
        }
    }
    
    func rectForText(text: String, font: UIFont, maxSize: CGSize) -> CGFloat {
        //This is a method to calculate the height
        let label = UILabel(frame: CGRectMake(0, 0, maxSize.width, maxSize.height))
        
        label.font = font
        label.text = text
        label.sizeToFit()
        return label.frame.width
    }
    
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    // MARK: Invite Friend Action
    func inviteFriendAction()->Void {
        self.view.endEditing(true)
        Extensions.startIndicator()
        self.performSegueWithIdentifier("toInviteSegue", sender: self)
    }
    
    //MARK: Set Place Holder
    func setPlaceHolder(txtField:UITextField,placeHolder:String)->Void {
        txtField.attributedPlaceholder = NSAttributedString.init(string: placeHolder, attributes: [NSFontAttributeName:txtField.font!,NSForegroundColorAttributeName:UIColor.placeHolderColor()])
    }
    
    //MARK: Withraw Action
    func withdrawBtnTapped()->Void {
        self.view.endEditing(true)
     //   print("Withdraw Btn Tapped")
     
        if driverWalletAmount > 0 {
            let withdrawAlert = GKAlert.sharedInstance
            withdrawAlert.Delegate = self
            withdrawAlert.showAlertWith("", message: "Do you want to withdraw".localized() + " \(walletInfoLbl.text!)?", buttonTitle1: "OK".localized(), buttonTitle2: "CANCEL".localized(), key: "withdrawAlert")
        } else {
            Extensions.showAlert("APP TITLE".localized(), messageString: "Sorry,Your wallet balance is too low".localized())
        }
    }
    
    func scrollTheView()->Void {
        UIView.beginAnimations("animateTextField", context:nil)
        UIView.setAnimationBeginsFromCurrentState(true)
        UIView.setAnimationDuration(2.0)
        profileScrollView.scrollRectToVisible(CGRect(x: 0, y: 350, width: profileScrollView.frame.size.width, height: profileScrollView.frame.size.height), animated: true)
        UIView.commitAnimations()
    }
    
    //MARK: ScrollView Delegate
    func scrollViewDidScroll(scrollView: UIScrollView) {
        let scrollViewHeight = scrollView.frame.size.height
        let scrollViewContentSizeHeight = scrollView.contentSize.height
        let scrollOffset = scrollView.contentOffset.y
        
        if scrollOffset == 0 {
            //Top
            self.view.endEditing(true)
        } else if scrollOffset + scrollViewHeight == scrollViewContentSizeHeight {
            //Bottom
            self.view.endEditing(true)
        }
    }
    
    /*
     // MARK: - Navigation
     
     // In a storyboard-based application, you will often want to do a little preparation before navigation
     override func prepareForSegue(segue: UIStoryboardSegue, sender: AnyObject?) {
     // Get the new view controller using segue.destinationViewController.
     // Pass the selected object to the new view controller.
     }
     */
}


