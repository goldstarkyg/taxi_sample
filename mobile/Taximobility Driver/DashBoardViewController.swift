//
//  DashBoardViewController.swift
//  Taximobility Driver
//
//  Created by Gireesh on 5/10/16.
//  Copyright © 2016 Ndot. All rights reserved.
//

//
//  DashBoardViewController.swift
//  Taximobility Driver
//
//  Created by Gireesh on 2/19/16.
//  Copyright © 2016 Ndot. All rights reserved.
//

import UIKit
import Localize_Swift
import GoogleMaps

var  menuDic : NSArray = NSArray()
var menuBgView = UIView()

class DashBoardViewController: BaseViewController,UITextFieldDelegate,UITableViewDataSource,UITableViewDelegate,UIGestureRecognizerDelegate,BackToHome,acceptProtocol,GKAlertDelegate {
    @IBOutlet var logoImg: UIImageView!
    @IBOutlet var dashBoardView: UIView!
    @IBOutlet var loginBgView: UIView!
    @IBOutlet var passwordTxt: UITextField!
    @IBOutlet var mobileNumberTxt: UITextField!
    
    var signInBtn: UIButton!
    var currentLocationLbl: UILabel!
    var currentLocationAddressLbl: UILabel!
    var statisticsTbl: UITableView!
    var languageTbl: UITableView!
    var statisticsArray :NSArray!
    var languageBgView : UIView!
    var languageArray: NSArray!
    var languageSettingsBtn : UIButton!
    let trackObject = TrackLocation.sharedInstance
    var acceptObject:AcceptViewController?
    var paymentDic:NSDictionary! = NSDictionary()
    var forgotPasswordBtn:UIButton!
    var languageButton:UIButton! = UIButton()
    var showBtn:UIButton!
    
    @IBOutlet var secondLaunchScreen: UIImageView!
  
    override func viewWillAppear(animated: Bool) {
        super.viewWillAppear(animated)
        
        if Extensions.driverLoginStatus() == false {
            // User is not logged in,Showing the login view
            self .setUpLoginView()
        } else {
            //User is logged in,Shwoing the dashboard view
            self.setUpDashBoardView()
        }
        Extensions.setDriverInAcceptPage(false)
    }
    
    // MARK: View Did Load
    override func viewDidLoad() {
        super.viewDidLoad()
        self.view.addSubview(dashBoardView)
        dashBoardView.translatesAutoresizingMaskIntoConstraints = false
        var layoutDic = [String:AnyObject]()
        layoutDic["dashBoardView"] = dashBoardView
        layoutDic["topLayout"] = self.topLayoutGuide
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[topLayout]-(44)-[dashBoardView]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views:layoutDic))
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[dashBoardView]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views:layoutDic))
        //Setting the Track location delegate
        trackObject.Delegate = self
        
        NSNotificationCenter.defaultCenter().addObserver(self, selector: #selector(passToTripDetails(_:)) , name: "trip has been completed by dispatcher", object: nil)
        
        if Extensions.driverLoginStatus() {
            //User is logged in,Shwoing the dashboard view
            self.setUpDashBoardView()
            
            //If driver is having trip means this func will send to Trip in progress page
            if Extensions.onGoingTripId() != "" {
                passToTrackMyTrip()
            }
        }
    }
    
    func passToTripDetails(notification:NSNotification) -> Void {
        
        if notification.name == "trip has been completed by dispatcher" {
            let passedValues = notification.object as! NSDictionary
            let passTripID:String =  passedValues["tripID"] as! String
            let passTripDetail:NSArray = passedValues["details"] as! NSArray
            
         //   print("Pass trip ID: \(passTripID)")
         //   print("pass Trip Detail: \(passTripDetail)")
            
            let delayTime = dispatch_time(DISPATCH_TIME_NOW, Int64(1 * Double(NSEC_PER_SEC)))
            
            dispatch_after(delayTime, dispatch_get_main_queue()) {
                self.performSegueWithIdentifier("HometoHistoryDetailSegue", sender: passTripDetail)
            }
        }
    }
    
    func passToTrackMyTrip() -> Void {
        //Ongoing trip is there,getting trip detail
        let postDataDic = ["trip_id":Extensions.onGoingTripId()]
        APIDownlaod.downloadDataFromServer("\(k_BaseURL)\(apiKey)/?lang=\(Extensions.getSelectedLanguage())&type=get_trip_detail", bodyData: postDataDic, method: "POST", key: "") { (resultDic) -> Void in
            
            if resultDic.objectForKey("status") as! Int == 1 {
                
                let tripdetailDic = resultDic.objectForKey("detail") as! NSDictionary
                
                if Int("\(tripdetailDic.objectForKey("travel_status")!)") == 9 ||
                    Int("\(tripdetailDic.objectForKey( "travel_status")!)") == 3 ||
                    Int("\(tripdetailDic.objectForKey("travel_status")!)") == 2 {
                    //Trip In Progress
                    self.performSegueWithIdentifier("toTrackTripSegue", sender: self)
                } else if Int("\(tripdetailDic.objectForKey("travel_status")!)") == 5 {
                   
                    //Trip Completed,payment pending
                    if LocationManager.sharedInstance.locationManager.location?.coordinate.latitude != nil && LocationManager.sharedInstance.locationManager.location?.coordinate.latitude != 0 {
                        
                        //Getting current address
                        let geoCoder = GMSGeocoder.init()
                        geoCoder.reverseGeocodeCoordinate(LocationManager.sharedInstance.locationManager.location!.coordinate) { (response, error) -> Void in
                            
                            if error != nil {
                                print(error.localizedDescription)
                            } else {
                                if response != nil {
                                    let addresss:GMSAddress! = response.firstResult()
                                    
                                    if addresss != nil {
                                        let addressArray:NSArray! = addresss.lines as NSArray
                                        
                                        if addressArray.count > 0 {
                                            
                                            var convertedAddressLine1:AnyObject! = addressArray.objectAtIndex(0)
                                            let space = " ,"
                                            let convertedAddressLine2:AnyObject! = addressArray.objectAtIndex(1)
                                            let country:AnyObject! = addresss.country
                                            
                                            convertedAddressLine1 = convertedAddressLine1.stringByAppendingString(space).stringByAppendingString(convertedAddressLine2 as! String).stringByAppendingString(space).stringByAppendingString(country as! String)
                                            
                                            //Prepare Post Data
                                            let postDic:NSDictionary = ["trip_id":Extensions.onGoingTripId(),
                                                                        "drop_latitude":LocationManager.sharedInstance.locationManager.location!.coordinate.latitude,
                                                                        "drop_longitude":LocationManager.sharedInstance.locationManager.location!.coordinate.longitude,
                                                                        "distance":"0",
                                                                        "drop_location":convertedAddressLine1,
                                                                        "actual_distance":"",
                                                                        "waiting_hour":"\(tripdetailDic.objectForKey("waiting_time")!)",
                                                                        "driver_app_version":AppInfo.sharedInfo.appVersion,
                                                                        "app_version":AppInfo.sharedInfo.appVersion,
                                                                        "brand_name":AppInfo.sharedInfo.deviceName,
                                                                        "os_version":AppInfo.sharedInfo.osVersion,
                                                                        "device_type":AppInfo.sharedInfo.deviceType]
                                            //Calling API
                                            APIDownlaod.downloadDataFromServer("\(k_BaseURL)\(apiKey)/?lang=\(Extensions.getSelectedLanguage())&type=complete_trip", bodyData: postDic, method: "POST", key: "", completion: { (resultDic) -> Void in
                                                
                                                if resultDic.objectForKey("status") as! Int == 4 {
                                                    //Success,Move to Payment page
                                                    Extensions.setWaitingTime("00:00:00")
                                                    self.paymentDic = resultDic.objectForKey("detail") as! NSDictionary
                                                    
                                                    self.performSegueWithIdentifier("toPaymentSegue", sender: self)
                                                } else {
                                                    Extensions.showAlert("APP TITLE".localized(), messageString: resultDic.objectForKey("message") as! String)
                                                }
                                            })
                                        }
                                    }
                                }
                            }
                        }
                    }
                } else if Int("\(tripdetailDic.objectForKey("travel_status")!)") == 2 {
                    
                } else if Int("\(tripdetailDic.objectForKey("travel_status")!)") == 1 {
                    Extensions.setWaitingTime("00:00:00")
                    Extensions.setDriverCurrentStatus(k_DriverFree)
                    Extensions.setDriverInAcceptPage(false)
                    Extensions.setAboveBelowSpeedTimerStatus(false)
                    Extensions.setOngoingTripId("")
                }
            }
        }
    }
    
    // MARK: Setup Login View
    func setUpLoginView()->Void {
        // Creating the login view
        //LogoImage
        logoImg.image = Extensions.isIpadDevice() ? UIImage(named: "logo_iPad") : UIImage(named: "logo")
        
        dashBoardView.hidden = true
        titleLbl.hidden = false
        titleLbl.text = "SIGN IN".localized().uppercaseString
        titleImageView.hidden = true
        self.setPlaceHolder(mobileNumberTxt, placeHolder: "Mobile Number".localized())
        self.createUnderLineForTextField(mobileNumberTxt)
        self.setPlaceHolder(passwordTxt, placeHolder: "Password".localized())
        self.createUnderLineForTextField(passwordTxt)
        
        passwordTxt.font = Extensions.isIpadDevice() ? UIFont.setAppFont(19) : UIFont.setAppFont(14)
        mobileNumberTxt.font = Extensions.isIpadDevice() ? UIFont.setAppFont(19) : UIFont.setAppFont(14)
        passwordTxt.textColor = UIColor.getTextFieldTextColor()
        mobileNumberTxt.textColor = UIColor.getTextFieldTextColor()
        passwordTxt.text = ""
        mobileNumberTxt.text = ""
        passwordTxt.secureTextEntry = true
        passwordTxt.returnKeyType = .Go
        self.createPadViewForTextField(mobileNumberTxt)
        self.view.backgroundColor = UIColor.whiteColor()
        
        for btn in self.view.subviews {
            if btn.isKindOfClass(UIButton) {
                btn.removeFromSuperview()
            }
        }
        
        //TODO: For Developer purpose - current device is simulator means set mobile number and password
        #if (arch(i386) || arch(x86_64)) && os(iOS)
            //Simulator
            mobileNumberTxt.text = "8887776662"
            passwordTxt.text = "qwerty"
        #endif
        
        doneBtn.hidden = true;
        
        var layoutDic = [String:AnyObject]()
        signInBtn = UIButton.init()
        signInBtn.translatesAutoresizingMaskIntoConstraints = false
        self.view.addSubview(signInBtn)
        signInBtn.titleLabel?.font = Extensions.isIpadDevice() ? UIFont.setButtonFont(21) : UIFont.setButtonFont(16)
        signInBtn .setTitle("Sign In".localized().uppercaseString, forState: UIControlState.Normal)
        layoutDic["signInBtn"] = signInBtn
        signInBtn.setBackgroundImage(UIImage(named: "signinButtonbg"), forState: .Normal)
        //  signInBtn.backgroundColor = UIColor.getApplicationCancelColor()
        signInBtn.addTarget(self, action: #selector(DashBoardViewController.loginDoneBtnTapped), forControlEvents: UIControlEvents.TouchUpInside)
        let signInHeight = Extensions.isIpadDevice() ? 60 : 40
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[signInBtn(signInHeight)]-(4)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: ["signInHeight":signInHeight], views: layoutDic))
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(8)-[signInBtn]-(8)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
        // Forgot Password Button
        
        forgotPasswordBtn = UIButton.init(type: UIButtonType.Custom)
        forgotPasswordBtn .setTitle(String(format: "%@?","Forgot Password".localized()), forState: UIControlState.Normal)
        forgotPasswordBtn.titleLabel?.font = Extensions.isIpadDevice() ? UIFont.setAppFont(20) : UIFont.setAppFont(15)
        forgotPasswordBtn.addTarget(self, action: #selector(DashBoardViewController.forgotPasswordBtnTapped), forControlEvents: UIControlEvents.TouchUpInside)
        
        self.view.addSubview(forgotPasswordBtn)
        forgotPasswordBtn.translatesAutoresizingMaskIntoConstraints = false
        forgotPasswordBtn.setTitleColor(UIColor.getTextFieldTextColor(), forState: UIControlState.Normal)
        layoutDic["forgotPasswordBtn"] = forgotPasswordBtn
        layoutDic["loginBgView"] = loginBgView
        let forgotY = Extensions.isIpadDevice() ? 30 : 15
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[loginBgView]-(forgotY)-[forgotPasswordBtn(30)]", options: NSLayoutFormatOptions(rawValue: 0), metrics:["forgotY":forgotY], views:layoutDic))
        
        // Setting the Padding view to show/Hide the password
        showBtn = UIButton.init(type: UIButtonType.Custom)
        showBtn.frame = CGRectMake(0, 0, 40,30)
        showBtn.contentHorizontalAlignment = UIControlContentHorizontalAlignment.Center
        showBtn.setTitle("Show".localized(), forState: UIControlState.Normal)
        showBtn.addTarget(self, action: #selector(DashBoardViewController.showPassword(_:)), forControlEvents: UIControlEvents.TouchUpInside)
        showBtn.titleLabel?.font = UIFont.setAppFont(14)
        
        let stringsize:CGSize! = showBtn.titleLabel?.text!.sizeWithAttributes([NSFontAttributeName:(showBtn.titleLabel?.font)!])
        
        //or whatever font you're using
        let buttonWidth = stringsize.width + 5
        showBtn.frame = CGRectMake(0, 0, buttonWidth,30)
        showBtn.setTitleColor(UIColor.placeHolderColor(), forState: UIControlState.Normal)
        
        let forgotWidth = Extensions.isIpadDevice() ? 200 : 200
        
        if Extensions.getSelectedLanguage() == "ar" {
            passwordTxt.textAlignment = NSTextAlignment.Right
            mobileNumberTxt.textAlignment = NSTextAlignment.Right
            
            self.view.addConstraints( NSLayoutConstraint.constraintsWithVisualFormat("H:|-(10)-[forgotPasswordBtn(forgotWidth)]", options: NSLayoutFormatOptions(rawValue: 0), metrics:["forgotWidth":forgotWidth], views:layoutDic))
            forgotPasswordBtn.contentHorizontalAlignment = UIControlContentHorizontalAlignment.Left
            passwordTxt.leftView = showBtn
        } else {
            passwordTxt.textAlignment = NSTextAlignment.Left
            mobileNumberTxt.textAlignment = NSTextAlignment.Left
            //(forgotWidth)
            self.view.addConstraints( NSLayoutConstraint.constraintsWithVisualFormat("H:|-[forgotPasswordBtn]-(10)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics:["forgotWidth":forgotWidth], views:layoutDic))
            forgotPasswordBtn.contentHorizontalAlignment = UIControlContentHorizontalAlignment.Right
            
            passwordTxt.rightView = showBtn
        }
        
        passwordTxt.leftViewMode = UITextFieldViewMode.Never
        passwordTxt.rightViewMode = UITextFieldViewMode.Never
        self.createPadViewForTextField(passwordTxt)
        
        mobileNumberTxt.keyboardType = UIKeyboardType.NumberPad
        //Done button tool bar for number pad
        let keyboardToolBar = UIToolbar.init()
        
        keyboardToolBar.sizeToFit()
        
        let flexBarBtn = UIBarButtonItem.init(barButtonSystemItem: UIBarButtonSystemItem.FlexibleSpace, target: nil, action: nil)
        
        let doneBarBtn = UIBarButtonItem.init(title: "Next".localized(), style: UIBarButtonItemStyle.Plain, target: self, action: #selector(DashBoardViewController.keybaoardToolBarDoneTapped))
        
        keyboardToolBar.items = [flexBarBtn,doneBarBtn]
        
        mobileNumberTxt.inputAccessoryView = keyboardToolBar
        
        if Extensions.isCurrentDeviceIsiPhone4s() {
            self.secondLaunchScreen.image = UIImage(named: "secondLaunchScreen")
        } else {
            self.secondLaunchScreen.image = UIImage(named: "secondLaunchScreen_536")
        }
        
        if !NSUserDefaults.standardUserDefaults().boolForKey("hideLaunchScreen") {
            
            signInBtn.hidden = true
            forgotPasswordBtn.hidden = true
            self.navigationView.hidden = true
            secondLaunchScreen.hidden = false
            
            let dispatchTime: dispatch_time_t = dispatch_time(DISPATCH_TIME_NOW, Int64(3 * Double(NSEC_PER_SEC)))
            dispatch_after(dispatchTime, dispatch_get_main_queue(), {
                
                self.signInBtn.hidden = false
                self.forgotPasswordBtn.hidden = false
                self.navigationView.hidden = false
                self.secondLaunchScreen.hidden = true
                
                //   NSUserDefaults.standardUserDefaults().setBool(true, forKey: "hideLaunchScreen")
                //    NSUserDefaults.standardUserDefaults().synchronize()
            })
            
        } else {
            secondLaunchScreen.hidden = true
            
            NSUserDefaults.standardUserDefaults().setBool(true, forKey: "hideLaunchScreen")
            NSUserDefaults.standardUserDefaults().synchronize()
        }
        
        languageButton.removeFromSuperview()
        
        //navigation view right side done button - Language button
        languageButton = UIButton.init(type: UIButtonType.Custom)
        navigationView.addSubview(languageButton);
        languageButton.translatesAutoresizingMaskIntoConstraints = false;
        languageButton.setTitleColor(UIColor.whiteTextColor(), forState: UIControlState.Normal)
        languageButton.contentHorizontalAlignment = UIControlContentHorizontalAlignment.Center
        languageButton.contentVerticalAlignment = UIControlContentVerticalAlignment.Center
        languageButton.setBackgroundImage(UIImage(named: "languagebg"), forState: .Normal)
        languageButton.titleLabel?.font = UIFont.setAppFont(11)
        languageButton.setTitle("change_language".localized() , forState: .Normal)
        languageButton.addTarget(self, action: #selector(changeLanguage), forControlEvents: UIControlEvents.TouchUpInside)
        
        layoutDic["languageButton"] = languageButton
        navigationView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(24)-[languageButton(36)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: layoutDic))
        navigationView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[languageButton(60)]-(5)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: layoutDic))
    }
    
    func keybaoardToolBarDoneTapped()->Void {
        //Resigning mobile number text field and moving keyboard to next field
        mobileNumberTxt.resignFirstResponder()
        passwordTxt.becomeFirstResponder()
    }
    
    func  createUnderLineForTextField(txtField:UITextField) -> Void {
        
        let underLine = UILabel.init()
        loginBgView.addSubview(underLine)
        underLine.translatesAutoresizingMaskIntoConstraints = false;
        underLine.backgroundColor = UIColor.textFieldUnderLineColor()
        var lineLayoutDic = [String:AnyObject]()
        lineLayoutDic["underLine"] = underLine
        lineLayoutDic["txtField"] = txtField
        
        loginBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[txtField]-(0)-[underLine(1)]", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: lineLayoutDic))
        loginBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(15)-[underLine]-(15)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: lineLayoutDic))
    }
    
    func createPadViewForTextField(txtField:UITextField) -> Void {
        
        if Extensions.isIpadDevice() {
            let padView = UIView.init(frame: CGRectMake(0, 0, 50, txtField.frame.size.height))
            
            let padImageView = UIImageView.init()
            
            if txtField == mobileNumberTxt {
                padImageView.frame = CGRectMake(padView.frame.size.width/2-20,padView.frame.size.height/2-12, 30, 30)
                padImageView.image = UIImage(named: "login_mobile_iPad")
            } else if txtField == passwordTxt {
                padImageView.frame = CGRectMake(padView.frame.size.width/2-15,padView.frame.size.height/2-15, 21, 30)
                padImageView.image = UIImage(named: "login_password_iPad")
            }
            
            if Extensions.getSelectedLanguage() == "ar" {
                txtField.rightView = padView
                txtField.rightViewMode = UITextFieldViewMode.Always;
                
                if txtField == mobileNumberTxt {
                    padImageView.frame = CGRectMake(padView.frame.size.width/2-4,padView.frame.size.height/2-6, 16, 16)
                    txtField.leftViewMode = UITextFieldViewMode.Never
                } else {
                    padImageView.frame = CGRectMake(padView.frame.size.width/2-3,padView.frame.size.height/2-10.5, 12, 17)
                }
            } else {
                txtField.leftView = padView
                txtField.leftViewMode = UITextFieldViewMode.Always;
                if txtField == mobileNumberTxt {
                    txtField.rightViewMode = UITextFieldViewMode.Never
                }
            }
            padView.addSubview(padImageView)
        } else {
            let padView = UIView.init(frame: CGRectMake(0, 0, 25, txtField.frame.size.height))
            let padImageView = UIImageView.init()
            
            if txtField == mobileNumberTxt {
                padImageView.frame = CGRectMake(padView.frame.size.width/2-12,padView.frame.size.height/2-6, 16, 16)
                padImageView.image = UIImage(named: "login_mobile")
            } else if txtField == passwordTxt {
                padImageView.frame = CGRectMake(padView.frame.size.width/2-12,padView.frame.size.height/2-10.5, 12, 17)
                padImageView.image = UIImage(named: "login_password")
            }
            
            if Extensions.getSelectedLanguage() == "ar" {
                txtField.rightView = padView
                txtField.rightViewMode = UITextFieldViewMode.Always;
                
                if txtField == mobileNumberTxt {
                    padImageView.frame = CGRectMake(padView.frame.size.width/2-4,padView.frame.size.height/2-6, 16, 16)
                    txtField.leftViewMode = UITextFieldViewMode.Never
                } else {
                    padImageView.frame = CGRectMake(padView.frame.size.width/2-3,padView.frame.size.height/2-10.5, 12, 17)
                    
                }
            } else {
                txtField.leftView = padView
                txtField.leftViewMode = UITextFieldViewMode.Always;
                
                if txtField == mobileNumberTxt {
                    txtField.rightViewMode = UITextFieldViewMode.Never
                }
            }
            padView.addSubview(padImageView)
        }
    }
    
    func setPlaceHolder(txtField:UITextField,placeHolder:String)->Void {
        txtField.attributedPlaceholder = NSAttributedString.init(string: placeHolder, attributes: [NSFontAttributeName:txtField.font!,NSForegroundColorAttributeName:UIColor.placeHolderColor()])
    }
    
    //    -(void)setPlaceHolder:(UITextField*)txtField placeHolder:(NSString*)text
    //    {
    //    txtField.attributedPlaceholder = [[NSAttributedString alloc] initWithString:text attributes:@{NSForegroundColorAttributeName: [UIColor placeHolderColor]}];
    //    }
   
    // MARK: Login
    func loginDoneBtnTapped()->Void {
        //Done button tapped
        self.view.endEditing(true)
        
        //Validations
        if !Validation.isValidMobileNumber(mobileNumberTxt.text!) {
            
            Extensions.showAlert("APP TITLE".localized(), messageString: "Please enter your mobile number".localized())
        } else if Validation.isEmpty(passwordTxt) {
            Extensions.showAlert("APP TITLE".localized(), messageString: "Please enter the password".localized())
            
        } else if !Validation.isContainEnoughCharacters(passwordTxt, count: 6) && !Validation.isEmpty(passwordTxt) {
            Extensions.showAlert("APP TITLE".localized(), messageString: "Password should be minimum 6 characters".localized())
        }
        
      else {
            // All datas are correct,Proceed to login API
            let loginDic:NSDictionary  = ["phone":mobileNumberTxt.text!,
                                          "password":Extensions.createMD5(passwordTxt.text!),
                                          "device_id":Extensions.getUniqueIdentider(),
                                          "device_token":"12534235",
                                          "device_type":AppInfo.sharedInfo.deviceType,
                                          "brand_name":AppInfo.sharedInfo.deviceName,
                                          "os_version":AppInfo.sharedInfo.osVersion,
                                          "app_version":AppInfo.sharedInfo.appVersion]
            
            APIDownlaod.downloadDataFromServer("\(k_BaseURL)\(apiKey)/?lang=\(Extensions.getSelectedLanguage())&type=driver_login", bodyData:loginDic , method: "POST", key: "", completion: { (resultDic) -> Void in
             //   print("Result Dic--->\(resultDic)")
                
                if resultDic.objectForKey("status") as! Int == 1 {
                    // Successful Login
                    Extensions.setUserLoginInfos(resultDic.objectForKey("detail")?.objectForKey("driver_details")!.objectAtIndex(0) as! NSDictionary)

                    //saving my car model name
                    Extensions.myCarModelName("\(resultDic.objectForKey("detail")!.objectForKey("driver_details")!.objectAtIndex(0).objectForKey("model_name")!)")
                    
                    Extensions.setDriverStatistics(resultDic.objectForKey("detail")?.objectForKey("driver_details")!.objectAtIndex(0).objectForKey("driver_statistics") as! NSDictionary)
                    
                    Extensions.setOngoingTripId("\(resultDic.objectForKey("detail")!.objectForKey("driver_details")!.objectAtIndex(0).objectForKey("trip_id")!)")
                    
                    if "\(resultDic.objectForKey("detail")?.objectForKey("driver_details")!.objectAtIndex(0).objectForKey("travel_status")!)" != "" {
                        
                        let travelStatus = "\(resultDic.objectForKey("detail")?.objectForKey("driver_details")!.objectAtIndex(0).objectForKey("travel_status")!)"
                        
                        if travelStatus == "9" || travelStatus == "3" {
                            Extensions.setDriverCurrentStatus(k_DriverFree)
                            
                        } else if travelStatus == "2" || travelStatus == "5" {
                            Extensions.setDriverCurrentStatus(k_DriverActive)
                        }
                    } else {
                        Extensions.setDriverCurrentStatus(k_DriverFree)
                    }
                    Extensions.setDriverLoginStatus(true)
                    Extensions.setWaitingTime("00:00:00")
                    if "\(resultDic.objectForKey("detail")!.objectForKey("driver_details")!.objectAtIndex(0).objectForKey("driver_first_login")!)" == "1" {
                        let refferalAlert = GKAlert.sharedInstance
                        refferalAlert.Delegate = self
                        refferalAlert.showReferralAlert("", message: "Enter the referral Code".localized(), buttonTitle1: "OK".localized(), buttonTitle2: "Skip".localized(), key: "Referral")
                        
                    } else {
                        self.setUpDashBoardView()
                    }
                } else {
                    // Not a Successful login,Showing the alert
                    Extensions.showAlert("APP TITLE".localized(), messageString:resultDic.objectForKey("message") as! String)
                }
            })
            
        }
    }
    //MARK:Forgot Password
    func forgotPasswordBtnTapped()->Void {
        self.view.endEditing(true)
        GKAlert.sharedInstance.Delegate = self
        GKAlert.sharedInstance.showAlertWithTextField("Forgot Password".localized(), message: "".localized(), buttonTitle1: "OK".localized(), buttonTitle2: "CANCEL".localized(), key: "ForgotPassword")
    }
    
    func GKAlertClickedButtonAtIndex(index:Int,tag:String) {
        if index == 0 && tag == "ReferralTry" {
            let refferalAlert = GKAlert.sharedInstance
            refferalAlert.Delegate = self
            refferalAlert.showReferralAlert("", message: "Enter the referral Code", buttonTitle1: "OK".localized(), buttonTitle2: "Skip".localized(), key: "Referral")
        } else if index == 1 && tag == "ReferralTry" {
            self.setUpDashBoardView()
        } else if index == 0 && tag == "trip has been completed by dispatcher" {
            
        }
    }
    
    func GKAlertClickedButtonAtIndexWithText(index:Int,tag:String,text:String) {
        
        if index == 0 && tag == "ForgotPassword" {
            let PostData = ["phone_no":"",
                            "user_type":"D"]
            APIDownlaod.downloadDataFromServer("\(k_BaseURL)\(apiKey)/?lang=\(Extensions.getSelectedLanguage())&type=forgot_password", bodyData: PostData, method: "POST", key: "", completion: { (resultDic) -> Void in
                
                Extensions.showAlert("APP TITLE".localized(), messageString:resultDic.objectForKey("message") as! String)
            })
        } else if index == 0 && tag == "Referral" {
           // print("Ok Tapped")
            let postDic = ["driver_id":"\(Extensions.userLoginInfos().objectForKey("userid")!)",
                           "referral_code":text]
            
            APIDownlaod.downloadDataFromServer("\(k_BaseURL)\(apiKey)/?lang=\(Extensions.getSelectedLanguage())&type=check_driver_referral_code", bodyData: postDic, method: "POST", key: "", completion: { (resultDic) -> Void in
                if resultDic.objectForKey("status") as! Int == 1 {
                    Extensions.showAlert("APP TITLE".localized(), messageString:resultDic.objectForKey("message") as! String)
                    self.setUpDashBoardView()
                } else if resultDic.objectForKey("status") as! Int == -2 {
                    let refferalAlert = GKAlert.sharedInstance
                    refferalAlert.Delegate = self
                    refferalAlert.showAlertWith("", message: resultDic.objectForKey("message") as! String, buttonTitle1: "OK".localized(), buttonTitle2: "CANCEL".localized(), key: "ReferralTry")
                } else {
                    Extensions.showAlert("APP TITLE".localized(), messageString:resultDic.objectForKey("message") as! String)
                    self.setUpDashBoardView()
                }
            })
        } else if index == 1 && tag == "Referral" {
           // print("Skip Tapped")
            self.setUpDashBoardView()
        }
    }
    
    //MARK: Show/Hide Password
    func showPassword(btn:AnyObject)->Void {
        //Show/Hide Password Functionality
        let showBTn = btn as! UIButton
        if showBTn.titleLabel?.text == "Show".localized() {
            showBTn.setTitle("Hide".localized(), forState: UIControlState.Normal)
            let attributedText = NSAttributedString.init(string: passwordTxt.text!)
            passwordTxt.attributedText = attributedText;
            passwordTxt.secureTextEntry = false
            passwordTxt.font =  Extensions.isIpadDevice() ? UIFont.setAppFont(19) : UIFont.setAppFont(14)
        } else {
            showBTn.setTitle("Show".localized(), forState: UIControlState.Normal)
            passwordTxt.secureTextEntry = true
        }
    }
    
    // MARK: TextField Delagates
    func textFieldDidBeginEditing(textField: UITextField) {
        if textField == mobileNumberTxt || textField == passwordTxt {
            self.animateTextField(textField, ups: true)
        }
    }
    
    func textFieldDidEndEditing(textField: UITextField) {
        if textField == mobileNumberTxt || textField == passwordTxt {
            self.animateTextField(textField, ups: false)
        }
    }
    
    func textFieldShouldReturn(textField: UITextField) -> Bool {
        if textField == mobileNumberTxt {
            mobileNumberTxt.resignFirstResponder()
            passwordTxt.becomeFirstResponder()
        } else if textField == passwordTxt {
            passwordTxt.resignFirstResponder()
            self.loginDoneBtnTapped()
            
        } else {
            
        }
        return true
    }
    
    func textField(textField: UITextField, shouldChangeCharactersInRange range: NSRange, replacementString string: String) -> Bool {
        if textField == passwordTxt {
            let newLength = (textField.text?.characters.count)! + string.characters.count - range.length
            
            if newLength <= 20 {
                if newLength >= 1 {
                    textField.leftViewMode = UITextFieldViewMode.Always
                    textField.rightViewMode = UITextFieldViewMode.Always
                } else {
                    if Extensions.getSelectedLanguage() == "ar" {
                        textField.leftViewMode = UITextFieldViewMode.Never
                    } else {
                        textField.rightViewMode = UITextFieldViewMode.Never
                    }
                }
                return true
            } else {
                return false
            }
        } else if textField == mobileNumberTxt {
            let newLength = (textField.text?.characters.count)! + string.characters.count - range.length
            
            if newLength <= 10 {
                let newCharacters = NSCharacterSet(charactersInString: string)
                return NSCharacterSet.decimalDigitCharacterSet().isSupersetOfSet(newCharacters)
            } else {
                return false
            }
        }
        return true
    }
    
    //MARK: Set Up Dashboard
    func setUpDashBoardView()->Void {
        self.view.bringSubviewToFront(dashBoardView)
        for subViews in dashBoardView.subviews {
            subViews.removeFromSuperview()
        }
        
        languageButton.removeFromSuperview()
        
        dashBoardView.hidden = false
        titleLbl.hidden = true
        titleImageView.hidden = false
        titleImageView.image = Extensions.isIpadDevice() ? UIImage(named: "headerLogo_iPad") : UIImage(named: "headerLogo")
        
        // Top Menu Items
        var layoutDic = [String:AnyObject]()
        let trackMyTripDic = ["Title":"Track My Trip".localized(),
                              "Segue":"trackMyTripSegue",
                              "image": Extensions.isIpadDevice() ? "ongoing-trip_unfocus_iPad" : "ongoing-trip_unfocus",
                              "image_focus":"ongoing-trip_focus"]
        
        let profileDic = ["Title":"Profile".localized(),
                          "Segue":"toProfileSegue",
                          "image":Extensions.isIpadDevice() ? "me_unfocus_iPad" : "me_unfocus",
                          "image_focus":"me_focus"]
        
        let myJobsDic = ["Title":"My Jobs".localized(),
                         "Segue":"toTripHistorySegue",
                         "image":Extensions.isIpadDevice() ? "jobs_unfocus_iPad" : "jobs_unfocus",
                         "image_focus":"jobs_focus"]
        
        self.languageButton.hidden = true
        doneBtn.hidden = false;
        doneBtn.setImage(UIImage(named:Extensions.userLoginInfos().objectForKey("shift_status") as! String == k_DriverShiftIn ? "on_\(Extensions.getSelectedLanguage())" : "off_\(Extensions.getSelectedLanguage())"), forState: UIControlState.Normal)
        
        doneBtn.removeTarget(self, action:#selector(DashBoardViewController.loginDoneBtnTapped), forControlEvents: UIControlEvents.TouchUpInside)
        doneBtn.addTarget(self, action:#selector(DashBoardViewController.changeShiftStatus(_:)), forControlEvents: UIControlEvents.TouchUpInside)
        
        menuDic = [trackMyTripDic,profileDic,myJobsDic]
       
        // Creating the top menu view
        menuBgView = UIView.init()
        menuBgView.translatesAutoresizingMaskIntoConstraints = false
        dashBoardView.addSubview(menuBgView)
        layoutDic["menuBgView"] = menuBgView
        layoutDic["dashBoardView"] = dashBoardView
        
        let menuHeight = UIDevice.currentDevice().model == "iPad" ? 145 : 100
        
        dashBoardView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(10)-[menuBgView(menuHeight)]", options: NSLayoutFormatOptions(rawValue: 0), metrics:["menuHeight":menuHeight], views:layoutDic))
        dashBoardView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[menuBgView]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDic))
        menuBgView.backgroundColor = UIColor.dashBoardMenuBgColor()
        //        menuBgView.layer.borderWidth = 1.0
        //        menuBgView.layer.borderColor = UIColor.dashBoardMenuBorderColor().CGColor
       
        //Creating the three sub menus
        let width = UIScreen.mainScreen().bounds.size.width / 3
        var startX:CGFloat = 0
        let startY:CGFloat = UIDevice.currentDevice().model == "iPad" ? 0 : 0
        let height:CGFloat = 100
        
        for i in 0 ..< menuDic.count {
            let menu = UIView.init()
            menu.frame = CGRectMake(startX,startY,width,height)
            menu.tag = i
            
            let menuImageView  = UIImageView.init()
            menuImageView.frame  = Extensions.isIpadDevice() ? CGRectMake(width/2-44, 0, 88, 88) : CGRectMake(width/2-33, 0, 66, 66)
            menuImageView.image = UIImage(named: menuDic.objectAtIndex(i).objectForKey("image") as! String)
            menuImageView.tag = 101
            
            menu .addSubview(menuImageView)
            
            startX = startX + width
            
            let menuTitle = UILabel.init()
            menuTitle.frame = CGRectMake(2,Extensions.isIpadDevice() ? (menuImageView.frame.origin.y + menuImageView.frame.size.height+2) : (menuImageView.frame.origin.y + menuImageView.frame.size.height),menu.frame.size.width-4,40)
            menuTitle.textColor = UIColor.blackTextColor()
            menuTitle.textAlignment = NSTextAlignment.Center
            menuTitle.font = Extensions.isIpadDevice() ? UIFont.setAppFont(16) : UIFont.setAppFont(12)
            menuTitle.text = menuDic.objectAtIndex(i).objectForKey("Title") as? String
            menu.addSubview(menuTitle)
            menuTitle.numberOfLines = 3;
            
            let menuSelectBtn = UIButton.init()
            menuSelectBtn.tag = 1000
            menuSelectBtn.frame = CGRectMake(0, 0, menu.frame.size.width,menu.frame.size.height)
            menuSelectBtn.addTarget(self, action: #selector(DashBoardViewController.menuSelectBtnTapped(_:)), forControlEvents: UIControlEvents.TouchUpInside)
            menu.addSubview(menuSelectBtn)
            
            menuBgView.addSubview(menu)
        }
        
        //Menu underLine
        let saparatorView = UIView.init()
        dashBoardView.addSubview(saparatorView)
        saparatorView.backgroundColor = UIColor.textFieldUnderLineColor()
        saparatorView.translatesAutoresizingMaskIntoConstraints = false
        layoutDic["saparatorView"] = saparatorView
        dashBoardView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[menuBgView]-(5)-[saparatorView(1)]", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic));
        dashBoardView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[saparatorView]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic));
        
        // Creating Language Change Settings Btn
        languageSettingsBtn = UIButton.init(type: UIButtonType.Custom)
        languageSettingsBtn.setTitleColor(UIColor.whiteColor(), forState: UIControlState.Normal)
        //        languageSettingsBtn.setTitle("".localized(), forState: UIControlState.Normal)
        languageSettingsBtn.setBackgroundImage(UIImage(named: "signinButtonbg"), forState: .Normal)
        //        languageSettingsBtn.backgroundColor = UIColor.getApplicationSubmitColor()
        languageSettingsBtn.setTitle("Language Settings".localized().uppercaseString, forState: UIControlState.Normal)
        
        let fontSize:CGFloat = 17.0
        //        if Extensions.getSelectedLanguage() == k_EnglishKey {
        //            fontSize = 17.0
        //        } else {
        //            fontSize = 17.0
        //        }
        
        languageSettingsBtn.titleLabel?.font = UIFont.setButtonFont(fontSize)
        languageSettingsBtn.contentHorizontalAlignment = UIControlContentHorizontalAlignment.Center
        layoutDic["languageSettingsBtn"] = languageSettingsBtn
        dashBoardView.addSubview(languageSettingsBtn)
        languageSettingsBtn.translatesAutoresizingMaskIntoConstraints = false
        let stringsize:CGSize! = languageSettingsBtn.titleLabel?.text!.sizeWithAttributes([NSFontAttributeName:(languageSettingsBtn.titleLabel?.font)!])
        //or whatever font you're using
        
        let buttonWidth = stringsize.width + 10 > 100 ? stringsize.width + 10 : 100
        
        languageSettingsBtn.addTarget(self, action:#selector(DashBoardViewController.changeLanguageBtnTapped(_:)), forControlEvents:UIControlEvents.TouchUpInside)
        let laguageBtnHeight = Extensions.isIpadDevice() ? 60 : 40
        dashBoardView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[languageSettingsBtn(laguageBtnHeight)]-(8)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics:["laguageBtnHeight":laguageBtnHeight], views:layoutDic))
        dashBoardView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(8)-[languageSettingsBtn]-(8)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics:["buttonWidth":buttonWidth], views:layoutDic))
        //Statistics Top View
        
        let statisticsHeaderView = UIView.init()
        statisticsHeaderView.translatesAutoresizingMaskIntoConstraints = false
        statisticsHeaderView.backgroundColor = UIColor.applicationHeaderColor()
        dashBoardView.addSubview(statisticsHeaderView)
        
        let statisticHeaderHeight = Extensions.isIpadDevice() ? 76 : 60
        let staticHeaderY = Extensions.isIpadDevice() ? 213 : 160
        var metricDic = [String:AnyObject]()
        metricDic["statisticHeaderHeight"] = statisticHeaderHeight
        metricDic["staticHeaderY"] = staticHeaderY
        layoutDic["statisticsHeaderView"] = statisticsHeaderView
        
        dashBoardView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(staticHeaderY)-[statisticsHeaderView(statisticHeaderHeight)]",options:NSLayoutFormatOptions(rawValue: 0), metrics:metricDic, views:layoutDic))
        dashBoardView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[statisticsHeaderView]-(0)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDic))
        
        let statisticsImg = UIImageView.init(image: Extensions.isIpadDevice() ? UIImage(named:"statistics_iPad") : UIImage(named:"statistics"))
        statisticsImg.translatesAutoresizingMaskIntoConstraints = false
        dashBoardView.addSubview(statisticsImg)
        layoutDic["statisticsImg"] = statisticsImg
        dashBoardView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[menuBgView]-(20)-[statisticsImg(statisticHeaderHeight)]", options: NSLayoutFormatOptions(rawValue: 0), metrics:metricDic, views:layoutDic))
        dashBoardView.addConstraint(NSLayoutConstraint.init(item: statisticsImg, attribute: NSLayoutAttribute.CenterX, relatedBy: .Equal, toItem: dashBoardView, attribute: .CenterX, multiplier: 1.0, constant: 0))
        statisticsImg.addConstraint(NSLayoutConstraint.init(item: statisticsImg, attribute: NSLayoutAttribute.Height, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: CGFloat(statisticHeaderHeight)))
        
        let statisticsTitleLbl = UILabel.init()
        statisticsTitleLbl.translatesAutoresizingMaskIntoConstraints = false
        statisticsTitleLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(19) : UIFont.setAppFont(16)
        statisticsTitleLbl.textColor = UIColor.blackTextColor()
        statisticsHeaderView.addSubview(statisticsTitleLbl)
        layoutDic["statisticsTitleLbl"] = statisticsTitleLbl
        statisticsHeaderView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(26)-[statisticsTitleLbl]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDic))
        statisticsHeaderView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[statisticsTitleLbl]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDic))
        statisticsTitleLbl.text = "STATISTICS".localized()
        statisticsTitleLbl.textAlignment = NSTextAlignment.Center;
        
        let versionLbl = UILabel.init()
        versionLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(19) : UIFont.setAppFont(16)
        versionLbl.text = AppInfo.sharedInfo.appVersion
        versionLbl.textColor = UIColor.blackTextColor()
        versionLbl.textAlignment = NSTextAlignment.Right
        statisticsHeaderView.addSubview(versionLbl)
        versionLbl.translatesAutoresizingMaskIntoConstraints = false
        layoutDic["versionLbl"] = versionLbl
        statisticsHeaderView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[versionLbl(70)]-(15)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
        statisticsHeaderView.addConstraint(NSLayoutConstraint.init(item: versionLbl, attribute: .CenterY, relatedBy: .Equal, toItem: statisticsHeaderView, attribute: .CenterY, multiplier: 1.0, constant: 0))
        versionLbl.addConstraint(NSLayoutConstraint.init(item: versionLbl, attribute: .Height, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: 30))
        
        // Creating Statistics Tbl
        statisticsTbl = UITableView.init()
        statisticsTbl.translatesAutoresizingMaskIntoConstraints = false
        dashBoardView.addSubview(statisticsTbl)
        layoutDic["statisticsTbl"] = statisticsTbl
        statisticsTbl.delegate=self
        statisticsTbl.dataSource = self
        statisticsTbl.separatorStyle = UITableViewCellSeparatorStyle.None
        statisticsTbl.showsVerticalScrollIndicator = false
        dashBoardView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[statisticsHeaderView]-(10)-[statisticsTbl]-(10)-[languageSettingsBtn]", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDic))
        dashBoardView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[statisticsTbl]-(0)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDic))
        
        //Startinng tracking driver
        TrackLocation.sharedInstance.startTrackingDriver()
        self .setUpStatistics()
        self.setUPLanguageView()
        
    }
    
    //MARK: Set Up Statistics
    func setUpStatistics()->Void {
        // Setting up the statistics data
        if Extensions.driverStatistics().count > 0 {
            let jobsDic:NSDictionary! = ["Title":"Total completed jobs".localized(),"Details":Extensions.driverStatistics().objectForKey("completed_trip")!]
            
            let rejectDic:NSDictionary! = ["Title":"Rejected".localized(),"Details":Extensions.driverStatistics().objectForKey("overall_rejected_trips")!]
           
            let cancelDic:NSDictionary! = ["Title":"Cancelled".localized(),"Details":Extensions.driverStatistics().objectForKey("cancelled_trips")!]
           
            let driverDic:NSDictionary! = ["Title":"Time Driven".localized(),"Details":Extensions.driverStatistics().objectForKey("time_driven")!]
            
            let earningDic:NSDictionary! = ["Title":"Today Earning".localized(),"Details":Extensions.appendCurrencyWithStringWithSpace("\(Extensions.driverStatistics().objectForKey("today_earnings")!)")]
           
            let totalEarningDic:NSDictionary! = ["Title":"Total earning".localized(),"Details":Extensions.appendCurrencyWithStringWithSpace("\(Extensions.driverStatistics().objectForKey("total_earnings")!)")]
            
            let totalTripDic:NSDictionary! = ["Title":"Total trip".localized(),"Details":Extensions.driverStatistics().objectForKey("total_trip")!]
            
            statisticsArray = [jobsDic,
                               rejectDic,
                               cancelDic,
                               driverDic,
                               earningDic,
                               totalEarningDic,
                               totalTripDic]
            
            Extensions.startIndicator()
            dispatch_async(dispatch_get_main_queue(), { 
                self.statisticsTbl.reloadData()
                Extensions.stopIndicator()
            })
            
        }
    }
    
    func locationManager(manager: CLLocationManager, didUpdateLocations locations: [CLLocation]) {
        
        
    }
    
    
    //MARK: SetUp Language
    func setUPLanguageView()->Void {
        // Creating the language setting bg view
        var layoutDic = [String:AnyObject]()
        languageBgView = UIView.init()
        languageBgView.translatesAutoresizingMaskIntoConstraints = false
        self.view.addSubview(languageBgView)
        languageBgView.backgroundColor = UIColor.shadedBgColor()
        layoutDic["languageBgView"] = languageBgView
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[languageBgView]-(0)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: layoutDic))
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[languageBgView]-(0)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: layoutDic))
        
        // Adding tap gesture
        let tapGesture = UITapGestureRecognizer.init(target:self, action:#selector(DashBoardViewController.hideLanguageView))
        tapGesture.delegate = self
        tapGesture.cancelsTouchesInView = false
        languageBgView.addGestureRecognizer(tapGesture)
        
        // Creating the language table
        languageTbl = UITableView.init()
        languageBgView.addSubview(languageTbl)
        languageTbl.translatesAutoresizingMaskIntoConstraints = false
        layoutDic["languageTbl"] = languageTbl
        languageBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(15)-[languageTbl]-(15)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDic))
        languageTbl.addConstraint(NSLayoutConstraint(item: languageTbl, attribute:.Height, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier:1.0, constant: 110))
        languageBgView.addConstraint(NSLayoutConstraint(item: languageTbl, attribute:.CenterY, relatedBy: .Equal, toItem: languageBgView, attribute: .CenterY, multiplier:1.0, constant: 0))
        languageTbl.backgroundColor = UIColor.whiteColor()
        let layer:CALayer = languageTbl.layer;
        layer.shadowOffset = CGSizeMake(1, 1);
        layer.shadowColor = UIColor.blackColor().CGColor
        layer.shadowRadius = 2.0
        layer.shadowOpacity = 0.6
        //layer.shadowPath = UIBezierPath.init(rect: layer.bounds).CGPath
        layer.rasterizationScale = UIScreen.mainScreen().scale; // to define retina or not
        layer.shouldRasterize = true;
        languageTbl.clipsToBounds = false
        languageTbl.separatorStyle = UITableViewCellSeparatorStyle.None
        languageTbl.scrollEnabled = false
        languageTbl.dataSource = self
        languageTbl.delegate = self
        
        // Creating the language table data
        let titleDic:NSDictionary = ["Title":"Select Language".localized(),"key":""]
        let englishDic:NSDictionary = ["Title":k_English,"key":k_EnglishKey]
        let tamil:NSDictionary = ["Title":k_Tamil,"key":k_TamilKey]
        //        let arabicDic:NSDictionary = ["Title":"العربية","key":"ar"]
        //        let русскиDic:NSDictionary = ["Title":"русский","key":"ru"]
        //        let dustDic:NSDictionary = ["Title":"Deutsch","key":"de"]
        languageArray = [titleDic,englishDic,tamil]
        
        Extensions.startIndicator()
        dispatch_async(dispatch_get_main_queue(), {
            self.languageTbl.reloadData()
            Extensions.stopIndicator()
        })
        
        self.languageBgView.hidden = true
    }
    
    //MARK: Menu Button Click
    func menuSelectBtnTapped(btn:AnyObject)->Void {
        let tappedMenuBtn : UIButton! = btn as! UIButton
        let tappedBtnSuperView = tappedMenuBtn.superview
        
        for Views in (menuBgView.subviews) {
            
            if Views.isKindOfClass(UIView) {
                if Views.tag == tappedBtnSuperView?.tag {
                    // This is the tapped menu
                    //Changing the image now
                    let ViewsArray : NSArray = Views.subviews
                    
                    let selectedImageView : UIImageView = (ViewsArray.objectAtIndex(0)) as! UIImageView
                    selectedImageView.image = UIImage(named:menuDic.objectAtIndex(Views.tag).objectForKey("image")as! String)
                } else {
                    // Set the reamaining menu to use the unfocus image
                    let ViewsArray : NSArray = Views.subviews
                    let selectedImageView : UIImageView = (ViewsArray.objectAtIndex(0)) as! UIImageView
                    selectedImageView.image = UIImage(named:menuDic.objectAtIndex(Views.tag).objectForKey("image")as! String)
                }
            }
        }
        
        if tappedBtnSuperView?.tag != 0 {
            self.performSegueWithIdentifier((menuDic.objectAtIndex((tappedBtnSuperView?.tag)!) as! NSDictionary).objectForKey("Segue") as! String, sender: self)
        } else {
          //  print(Extensions.onGoingTripId())
            //Track current Trip
            if Extensions.onGoingTripId() == "" {
                //No ongoing trip
                self.performSegueWithIdentifier("toMyLocationSegue", sender:self)
            } else {
                passToTrackMyTrip()
            }
        }
    }
    
    //MARK:Shift Change
    func changeShiftStatus(btn:AnyObject)->Void {
        
        var status = ""
        // Changing the driver shift status
        if Extensions.userLoginInfos().objectForKey("shift_status") as! String == k_DriverShiftIn {
            status = k_DriverShiftOut
        } else {
            status = k_DriverShiftIn
        }
        
        // Calling the API
        let postDataDic:NSDictionary = ["driver_id":Extensions.userLoginInfos().objectForKey("userid")!,
                                        "shiftstatus":status,
                                        "reason":"",
                                        "update_id":status == k_DriverShiftIn ? "" : Extensions.userLoginInfos().objectForKey("shiftupdate_id")!]
        
        APIDownlaod.downloadDataFromServer("\(k_BaseURL)\(apiKey)/?lang=\(Extensions.getSelectedLanguage())&type=driver_shift_status", bodyData: postDataDic, method: "POST", key: "Shift") { (resultDic) -> Void in
            
            if resultDic.objectForKey("status") as! Int == 1 {
                //Success
                Extensions.showAlert("APP TITLE".localized(), messageString:resultDic.objectForKey("message") as! String)
                
                self.doneBtn.setImage(UIImage(named: status == k_DriverShiftIn ? "on_\(Extensions.getSelectedLanguage())" : "off_\(Extensions.getSelectedLanguage())"), forState: UIControlState.Normal)
                
                var loginDic:NSMutableDictionary! = NSMutableDictionary()
                
                loginDic = (Extensions.userLoginInfos() as NSDictionary).mutableCopy() as! NSMutableDictionary
                
                if status == k_DriverShiftIn {
                    loginDic.setObject((resultDic.objectForKey("detail")?.objectForKey("update_id"))!, forKey: "shiftupdate_id")
                    
                }
                loginDic.setObject(status, forKey: "shift_status")
                
                Extensions.setUserLoginInfos(loginDic)
                
                status == k_DriverShiftIn ? TrackLocation.sharedInstance.startTrackingDriver() : TrackLocation.sharedInstance.stopTrackingDriver()
                
            } else {
                //Failed,Showing the alert
                Extensions.showAlert("APP TITLE".localized(), messageString:resultDic.objectForKey("message") as! String)
            }
            
        }
        
        
    }
    //MARK: Table View Data Source , Delegate
    func tableView(tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        if tableView == statisticsTbl {
            return statisticsArray.count;
        } else {
            return languageArray.count
        }
    }
    
    func tableView(tableView: UITableView, cellForRowAtIndexPath indexPath: NSIndexPath) -> UITableViewCell {
        
        if tableView == statisticsTbl {
            var cell:UITableViewCell! = tableView.dequeueReusableCellWithIdentifier("statistics")
            
            if cell == nil {
                cell = UITableViewCell.init(style: UITableViewCellStyle.Default, reuseIdentifier: "statistics")
            }
            
            for subview in cell.subviews {
                subview.removeFromSuperview()
            }
            
            var layoutDic = [String:AnyObject]()
            
            let titleLbl = UILabel.init()
            titleLbl.translatesAutoresizingMaskIntoConstraints = false
            cell.addSubview(titleLbl)
            titleLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFontBold(16) : UIFont.setAppFontBold(13)
            titleLbl.textColor = UIColor.blackTextColor()
            titleLbl.text =  (statisticsArray.objectAtIndex(indexPath.row) as! NSDictionary).objectForKey("Title") as? String
            
            titleLbl.numberOfLines = 0;
            titleLbl.lineBreakMode = NSLineBreakMode.ByWordWrapping;
            
            layoutDic["titleLbl"] = titleLbl
            titleLbl.textAlignment = Extensions.getSelectedLanguage() == "ar" ? NSTextAlignment.Right : NSTextAlignment.Left
            cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[titleLbl]-(0)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDic))
            let seperator = UILabel.init()
            seperator.translatesAutoresizingMaskIntoConstraints = false
            cell.addSubview(seperator)
            seperator.font = Extensions.isIpadDevice() ? UIFont.setAppFont(16) : UIFont.setAppFont(13)
            seperator.textColor = UIColor.blackTextColor()
            seperator.text = ":"
            seperator.textAlignment = Extensions.getSelectedLanguage() == "ar" ? NSTextAlignment.Right : NSTextAlignment.Left
            layoutDic["seperator"] = seperator
            cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[seperator]-(0)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDic))
            
            let detailLbl = UILabel.init()
            detailLbl.translatesAutoresizingMaskIntoConstraints = false
            cell.addSubview(detailLbl)
            detailLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFontBold(16) : UIFont.setAppFontBold(13)
            detailLbl.textColor = UIColor.blackTextColor()
            detailLbl.text = "\((statisticsArray.objectAtIndex(indexPath.row) as! NSDictionary).objectForKey("Details")!)"
            detailLbl.textAlignment = Extensions.getSelectedLanguage() == "ar" ? NSTextAlignment.Right : NSTextAlignment.Left
            layoutDic["detailLbl"] = detailLbl
            cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[detailLbl]-(0)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDic))
            
            var widths:CGFloat = 0
            
            if Extensions.isIpadDevice() {
                widths = UIScreen.mainScreen().bounds.size.width/2-60
            } else {
                if Extensions.getSelectedLanguage() == "ar" {
                    widths = 150
                } else if Extensions.getSelectedLanguage() == "ru" {
                    widths = 160
                } else if Extensions.getSelectedLanguage() == "fr" {
                    widths = 170
                } else {
                    widths = 130
                }
            }
            
            let horizontalSpace = Extensions.isIpadDevice() ? 25 : 15
            
            if Extensions.getSelectedLanguage() == "ar" {
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[titleLbl(width)]-(15)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:["width":widths], views:layoutDic))
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[seperator(4)]-(15)-[titleLbl]", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDic))
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[detailLbl(135)]-(horizontalSpace)-[seperator]", options:NSLayoutFormatOptions(rawValue: 0), metrics:["horizontalSpace":horizontalSpace], views:layoutDic))
            } else {
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(15)-[titleLbl(width)]", options:NSLayoutFormatOptions(rawValue: 0), metrics:["width":widths], views:layoutDic))
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[titleLbl]-(15)-[seperator(4)]", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDic))
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[seperator]-(horizontalSpace)-[detailLbl(135)]", options:NSLayoutFormatOptions(rawValue: 0), metrics:["horizontalSpace":horizontalSpace], views:layoutDic))
            }
            
            if indexPath.row % 2 == 0 {
                cell.backgroundColor = UIColor .whiteColor()
            } else{
                cell.backgroundColor = UIColor.cellGrayColor()
            }
            
            cell.selectionStyle = UITableViewCellSelectionStyle.None
            
            if indexPath.row == statisticsArray.count - 1 {
                let separatorView = UIView.init()
                layoutDic["separatorView"] = separatorView
                separatorView.translatesAutoresizingMaskIntoConstraints = false
                separatorView.backgroundColor = UIColor(red: 206/255.0, green: 206/255.0, blue: 206/255.0, alpha: 0.6)
                cell.addSubview(separatorView)
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[separatorView(1)]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[separatorView]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
            }
            
            return cell
        } else {
            var cell:UITableViewCell! = tableView.dequeueReusableCellWithIdentifier("language")
            if cell == nil {
                var layoutDic = [String:AnyObject]()
                cell = UITableViewCell.init(style: UITableViewCellStyle.Default, reuseIdentifier: "language")
                
                let titleLbl = UILabel.init()
                titleLbl.font = Extensions.isIpadDevice() ? indexPath.row == 0 ? UIFont.setAppFont(18) : UIFont.setAppFont(15) : indexPath.row == 0 ? UIFont.setAppFont(15) : UIFont.setAppFont(13)
                titleLbl.textColor = UIColor.blackTextColor()
                //indexPath.row == 0 ? UIColor.getApplicationSubmitColor() :
                titleLbl.textAlignment = Extensions.getSelectedLanguage() == "ar" ? NSTextAlignment.Right : NSTextAlignment.Left
                
                layoutDic["titleLbl"] = titleLbl
                
                cell.addSubview(titleLbl)
                
                titleLbl.text = "\(languageArray.objectAtIndex(indexPath.row).objectForKey("Title")!)"
                
                titleLbl.translatesAutoresizingMaskIntoConstraints = false
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[titleLbl]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDic))
                if indexPath.row == 0 {
                    titleLbl.textAlignment = NSTextAlignment.Center
                    cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[titleLbl]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDic))
                } else {
                    cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(20)-[titleLbl]-(20)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDic))
                }
                
                let seperatorLbl = UILabel.init()
                seperatorLbl.backgroundColor =  UIColor.textFieldUnderLineColor()
                seperatorLbl.translatesAutoresizingMaskIntoConstraints = false
                layoutDic["seperatorLbl"] = seperatorLbl
                cell.addSubview(seperatorLbl)
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[seperatorLbl(0.7)]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDic))
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[seperatorLbl]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDic))
            }
            return cell
        }
    }
    
    func tableView(tableView: UITableView, heightForRowAtIndexPath indexPath: NSIndexPath) -> CGFloat {
        if tableView == statisticsTbl {
            return Extensions.isIpadDevice() ? 48 : 38
        } else {
            return Extensions.isIpadDevice() ? 48 : 38
        }
    }
    
    func tableView(tableView: UITableView, didSelectRowAtIndexPath indexPath: NSIndexPath) {
        if tableView == languageTbl {
            
            Extensions.startIndicator()
            
            dispatch_async(dispatch_get_main_queue(), {
                if Extensions.getSelectedLanguage() == "\((self.languageArray.objectAtIndex(indexPath.row).objectForKey("key"))!)" {
                    // Selected language is same as the previous language
                    self.hideLanguageView()
                } else {
                    // Selected a new language, reloading the dashboard
                    Localize.setCurrentLanguage("\((self.languageArray.objectAtIndex(indexPath.row).objectForKey("key"))!)")
                    Extensions.setSelectedLanguage("\((self.languageArray.objectAtIndex(indexPath.row).objectForKey("key"))!)")
                    self.hideLanguageView()
                    self.setUpDashBoardView()
                }
                
                Extensions.stopIndicator()
            })
            
        }
    }
    
    //MARK: Change Language
    func changeLanguageBtnTapped(btn:AnyObject)->Void {
        
        Extensions.startIndicator()
        
        dispatch_async(dispatch_get_main_queue()) {
            //Language Settings btn tapped
            self.languageSettingsBtn.backgroundColor = UIColor.lightGrayColor()
            self.languageBgView.hidden = false
            self.dashBoardView.bringSubviewToFront(self.languageBgView)
            
            self.languageTbl.reloadData()
            //  Extensions.changeAnotherLanguage()
            // self.setUpDashBoardView()
            
            Extensions.stopIndicator()
        }
    }
    
    func hideLanguageView()->Void {
        // For hidding the language view
        languageBgView.hidden = true
        languageSettingsBtn.backgroundColor = UIColor.applicationSubmitColor()
    }
    
    func gestureRecognizer(gestureRecognizer: UIGestureRecognizer, shouldReceiveTouch touch: UITouch) -> Bool {
        if (touch.view!.isDescendantOfView(languageTbl)) {
            // Touched inside the language table
            return false
        } else {
            return true
        }
        
    }
    
    //MARK: Trip Request
    func moveToAcceptRejectPage()->Void {
        self.performSegueWithIdentifier("toAcceptSegue", sender: self)
    }
    
    //MARK:Trip Accepted
    func moveToInTripPage()->Void {
        self.performSegueWithIdentifier("toTripInSegue", sender: self)
    }
    
    //MARK:Trip Cancelled
    func moveToHome()->Void {
        //Trip is cancelled
        self.navigationController?.popToViewController(((self.navigationController?.viewControllers)! as NSArray).objectAtIndex(0) as! UIViewController, animated: true)
    }
    
    //MARK:Admin Logout,Block
    func logoutFromBackEnd() {
        self.setUpLoginView()
    }
    
    //MARK:Dispatcher Location Change
    func showNewTripDetails() {
        self.performSegueWithIdentifier("toTrackTripSegue", sender: self)
    }
    
    override func prepareForSegue(segue: UIStoryboardSegue, sender: AnyObject?) {
        if segue.identifier == "toAcceptSegue" {
            // Passing the required data to Accept/Reject page
            
            acceptObject = segue.destinationViewController as? AcceptViewController
            acceptObject!.AcceptDelegate = self
        } else if segue.identifier == "toTripInSegue" {
            // Passing the required data to TripInProgress page
            
            let inTripObject = segue.destinationViewController as? TripInProgressViewController
            inTripObject?.IsItFromAcceptPage = true
        } else if segue.identifier == "toPaymentSegue" {
            // Passing the required data to Payment page
            
            let paymentObject = segue.destinationViewController as? PaymentViewController
            paymentObject?.paymentDetailDic = paymentDic
        } else if segue.identifier == "toPaymentCompleteSegue" {
            
            let paymentObject = segue.destinationViewController as? PaymentCompleteViewController
            paymentObject?.paymentCompleteDic = paymentDic
        } else if segue.identifier == "HometoHistoryDetailSegue" {
            // Pass completed trip details
            let tripDetail:NSArray = sender as! NSArray
            
            let tripDetailVC:TripHistoryDetailsViewController = segue.destinationViewController as! TripHistoryDetailsViewController
            tripDetailVC.tripdetailsDictionary = tripDetail[0] as! NSDictionary
        }
    }
    
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
    }
    
    //Keyboard Animation
    func animateTextField(textField:UITextField,ups:Bool)->Void {
        // To move the view when keyboard appered
        if Extensions.isCurrentDeviceIsiPhone4s() {
            var distance:Int!
            
            if textField == mobileNumberTxt {
                distance = -65
                self.keyBoardAnimation(CGFloat(distance), up:ups)
            } else if textField == passwordTxt {
                distance = -95
                self.keyBoardAnimation(CGFloat(distance), up:ups)
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
    
    override func touchesBegan(touches: Set<UITouch>, withEvent event: UIEvent?) {
        
        if let touch = touches.first{
            
            if touch.view == self.view || touch.view == logoImg {
                self.view.endEditing(true)
            }
        }
        
        super.touchesBegan(touches, withEvent: event)
    }
    
    //MARK: Change language from BaseViewController
    ///Change the Application language en and ta
    func changeLanguage() {
        // print("Change language in Login page")
        Extensions.changeAnotherLanguage()
        Extensions.startIndicator()
        
        dispatch_async(dispatch_get_main_queue()) {
            self.titleLbl.text = "SIGN IN".localized().uppercaseString
            self.signInBtn.setTitle("Sign In".localized().uppercaseString, forState: UIControlState.Normal)
            
            self.languageButton.setTitle("change_language".localized() , forState: .Normal)
            self.setPlaceHolder(self.mobileNumberTxt, placeHolder: "Mobile Number".localized())
            self.setPlaceHolder(self.passwordTxt, placeHolder: "Password".localized())
            self.showBtn.setTitle("Show".localized(), forState: UIControlState.Normal)
            self.forgotPasswordBtn.setTitle(String(format: "%@?","Forgot Password".localized()), forState: UIControlState.Normal)
            
            Extensions.stopIndicator()
        }
    }
}
