//
//  TripHistoryDetailsViewController.swift
//
//
//  Created by Gireesh on 2/29/16.
//
//

import UIKit

class TripHistoryDetailsViewController: BaseViewController,UITableViewDataSource,UITableViewDelegate {
    //MARK: Declaration Section
    var tripdetailsDictionary:NSDictionary!
    let tripDetailsTbl:UITableView! = UITableView.init()
    var displayDetails:NSArray! = NSArray()
    
    override func viewDidLoad() {
        super.viewDidLoad()
        
        // Setting page title and back button
        titleLbl.text = "Trip Details".localized().uppercaseString
        backBtn.hidden = false
        backBtn.setImage(UIImage(named: "back"), forState: UIControlState.Normal)
        backBtn.addTarget(self, action:#selector(TripHistoryDetailsViewController.goBackFromTripDetail), forControlEvents:UIControlEvents.TouchUpInside)
        
        var layoutDic = [String:AnyObject]()
      
        // Passenger Profile Image
        let passengerbgImageView:UIImageView! = UIImageView.init()
        passengerbgImageView.translatesAutoresizingMaskIntoConstraints = false
        passengerbgImageView.image = UIImage(named: "ProfileBg")
        
        let passengerbgImageSize:CGFloat = 84
        layoutDic["passengerbgImageSize"] = passengerbgImageSize
        layoutDic["imagebgYPosition"] = 50
        //   passengerbgImageView.layer.cornerRadius = passengerbgImageSize/2
        //   passengerbgImageView.layer.masksToBounds = true
        layoutDic["passengerbgImageView"] = passengerbgImageView
        layoutDic["topLayout"] = self.topLayoutGuide
        self.view.addSubview(passengerbgImageView)
        
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[topLayout]-(imagebgYPosition)-[passengerbgImageView(passengerbgImageSize)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: layoutDic, views:layoutDic))
        
        self.view.addConstraint(NSLayoutConstraint(item: passengerbgImageView, attribute: .CenterX, relatedBy: .Equal, toItem: self.view, attribute: .CenterX, multiplier: 1.0, constant: 0))
        passengerbgImageView.addConstraint(NSLayoutConstraint(item: passengerbgImageView, attribute: .Width, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: passengerbgImageSize))
        
        // Passenger Profile Image
        let passengerImageView:UIImageView! = UIImageView.init()
        passengerImageView.translatesAutoresizingMaskIntoConstraints = false
//        passengerImageView.backgroundColor = UIColor.yellowColor()
      
        let passengerImageSize:CGFloat = Extensions.isIpadDevice() ? 100 : 75
        layoutDic["passengerImageSize"] = passengerImageSize
        layoutDic["imageYPosition"] = Extensions.isIpadDevice() ? 64 : 54
        //   passengerImageView.layer.cornerRadius = passengerImageSize/2
        //   passengerImageView.layer.masksToBounds = true
        layoutDic["passengerImageView"] = passengerImageView
        layoutDic["topLayout"] = self.topLayoutGuide
        self.view.addSubview(passengerImageView)
        
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[topLayout]-(imageYPosition)-[passengerImageView(passengerImageSize)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: layoutDic, views:layoutDic))
        
        self.view.addConstraint(NSLayoutConstraint(item: passengerImageView, attribute: .CenterX, relatedBy: .Equal, toItem: self.view, attribute: .CenterX, multiplier: 1.0, constant: 0))
        passengerImageView.addConstraint(NSLayoutConstraint(item: passengerImageView, attribute: .Width, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: passengerImageSize))
        
        // Checking image exist in the cache or not
        if ImageCache.isImageExistOnCache(tripdetailsDictionary.objectForKey("profile_image")!) {
            // Exist on the cache
            let profileImage:UIImage! = ImageCache.getImage(tripdetailsDictionary.objectForKey("profile_image")!)
            passengerImageView.image = profileImage
        } else {
            // Not Exist on the cache,loading from Server and save to cache
            let encodedUrl : String! = "\(tripdetailsDictionary.objectForKey("profile_image")!)".stringByAddingPercentEncodingWithAllowedCharacters(NSCharacterSet.URLQueryAllowedCharacterSet())
            
            let imageData:NSData! = NSData.init(contentsOfURL: NSURL.init(string:encodedUrl)!)
            
            if imageData != nil {
                if UIImage(data:imageData) != nil {
                    let profileImage:UIImage! = UIImage(data: imageData)
                    passengerImageView.image = profileImage
                    ImageCache.storeImage(profileImage, url:"\(tripdetailsDictionary.objectForKey("profile_image")!)")
                }
            }
        }
        
        //PassengerImageBgView
        let passengerImageBgView = UIView.init()
        layoutDic["passengerImageBgView"] = passengerImageBgView
        layoutDic["BgYPosition"] = -passengerImageSize/2
        passengerImageBgView.translatesAutoresizingMaskIntoConstraints = false
        self.view.addSubview(passengerImageBgView)
        passengerImageBgView.backgroundColor = UIColor(red: 247/255.0, green: 247/255.0, blue: 247/255.0, alpha: 247/255.0)
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[passengerImageView]-(BgYPosition)-[passengerImageBgView(passengerImageSize)]", options: NSLayoutFormatOptions(rawValue:0), metrics: layoutDic, views: layoutDic))
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[passengerImageBgView]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
        
        self.view.bringSubviewToFront(passengerImageView)
        self.view.bringSubviewToFront(passengerbgImageView)

        //Passenger Name Lbl
        let passengerNameLbl = UILabel.init()
        passengerNameLbl.translatesAutoresizingMaskIntoConstraints = false
        passengerImageBgView.addSubview(passengerNameLbl)
        layoutDic["passengerNameLbl"] = passengerNameLbl
        passengerNameLbl.textColor = UIColor.blackTextColor()
        passengerNameLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(20) : UIFont.setAppFont(16)
        passengerNameLbl.textAlignment = NSTextAlignment.Center
        passengerNameLbl.text = "\(tripdetailsDictionary.objectForKey("passenger_name")!)"
        layoutDic["NameLblBottom"] = Extensions.isIpadDevice() ? 10 : 7
        passengerImageBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[passengerNameLbl(25)]-(NameLblBottom)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: layoutDic, views: layoutDic))
        passengerImageBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(5)-[passengerNameLbl]-(5)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
        
        //Separators
        let separator1 = UIView.init()
        separator1.backgroundColor = UIColor(red: 206/255.0, green: 206/255.0, blue: 206/255.0, alpha: 0.4)
        layoutDic["separator1"] = separator1
        passengerImageBgView.addSubview(separator1)
        separator1.translatesAutoresizingMaskIntoConstraints = false
        passengerImageBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[separator1(1)]", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
        passengerImageBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[separator1]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
        
        let separator2 = UIView.init()
        separator2.backgroundColor = UIColor(red: 206/255.0, green: 206/255.0, blue: 206/255.0, alpha: 0.4)
        layoutDic["separator2"] = separator2
        passengerImageBgView.addSubview(separator2)
        separator2.translatesAutoresizingMaskIntoConstraints = false
        passengerImageBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[separator2(1)]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
        passengerImageBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[separator2]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
   /*
        //BackToHome Btn
        let backToHomeBtn = UIButton.init()
        backToHomeBtn.translatesAutoresizingMaskIntoConstraints = false
        self.view.addSubview(backToHomeBtn)
        layoutDic["backToHomeBtn"] = backToHomeBtn
        backToHomeBtn.backgroundColor = UIColor.getApplicationSubmitColor()
        backToHomeBtn.titleLabel?.font = Extensions.isIpadDevice() ? UIFont.setAppFont(20) : UIFont.setAppFont(16)
        backToHomeBtn.setTitleColor(UIColor.whiteTextColor(), forState: UIControlState.Normal)
        backToHomeBtn.setTitle("Back To Home".localized().uppercaseString, forState: UIControlState.Normal)
        backToHomeBtn.addTarget(self, action: #selector(TripHistoryDetailsViewController.backToHomeBtnTapped), forControlEvents: UIControlEvents.TouchUpInside)
        let backToHomeBtnHeight = Extensions.isIpadDevice()  ? 60 : 40
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[backToHomeBtn(backToHomeBtnHeight)]-|", options: NSLayoutFormatOptions(rawValue:0), metrics: ["backToHomeBtnHeight":backToHomeBtnHeight], views: layoutDic))
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[backToHomeBtn]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
        */
        
        // Trip Detail Table
        self.view.addSubview(tripDetailsTbl)
        tripDetailsTbl.translatesAutoresizingMaskIntoConstraints = false
        layoutDic["tripDetailsTbl"] = tripDetailsTbl
        
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[passengerImageBgView]-(2)-[tripDetailsTbl]-(8)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: layoutDic))
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(5)-[tripDetailsTbl]-(5)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: layoutDic))
        tripDetailsTbl.showsVerticalScrollIndicator = false
        // Setting corener Radius and Border
        tripDetailsTbl.separatorStyle = UITableViewCellSeparatorStyle.None
        //Setting delegate and Data source
        tripDetailsTbl.delegate = self
        tripDetailsTbl.dataSource = self
        
        // Creating array with the detils to be display
        
        let pickupDic:NSDictionary = ["Title":"PICKUP LOCATION".localized(),
                                      "Details": "\(tripdetailsDictionary.objectForKey("pickup_location")!)"]
        
        let dropDic:NSDictionary = ["Title":"DROP LOCATION".localized(),
                                    "Details": "\(tripdetailsDictionary.objectForKey("drop_location")!)"]
        
        let distanceTravelled = String(format:"%0.2f",Float("\(tripdetailsDictionary.objectForKey("distance")!)")!)
        
        let distanceDic:NSDictionary = ["Title":"Distance".localized(),
                                        "Details": distanceTravelled + " "+"km".localized()]
        
        let pickUpTimeDic:NSDictionary = ["Title":"Pickup Date".localized(),
                                          "Details":Extensions.changeDateFormat("\(tripdetailsDictionary.objectForKey( "pickup_time")!)")]
        
        let dropTimeDic:NSDictionary = ["Title":"Drop Time".localized(),
                                        "Details": Extensions.changeDateFormat("\(tripdetailsDictionary.objectForKey( "drop_time")!)")]
        
        let tripDuriationTimeDic:NSDictionary = ["Title":"Trip Duration".localized(),
                                                 "Details": "\(tripdetailsDictionary.objectForKey("trip_duration")!)"]
        
        let tripIdDic:NSDictionary = ["Title":"Trip Id".localized(),
                                      "Details": "\(tripdetailsDictionary.objectForKey("passengers_log_id")!)"]
        
        let paymentDic:NSDictionary = ["Title":"PAYMENT".localized(),
                                       "Details": "\(tripdetailsDictionary.objectForKey("payment_type")!)"]
        
        // Setting the array elements based on the user wallet amount is used or not
        //    let usedAmountDic:NSDictionary = ["Title":"Used Wallet".localized(),
        //                                    "Details":Extensions.appendCurrencyWithStringWithSpace("\(tripdetailsDictionary.objectForKey("used_wallet_amount")!)")]
        
        // if promocode was used in this trip
        let promoCode:String = tripdetailsDictionary.objectForKey("promocode") as! String
        
        let promocodeDiscountDetails:NSDictionary = ["Title":"promo code discount".localized() + (promoCode == "" ? "" : "\n( \(promoCode))"),
                                                     "Details":Extensions.appendCurrencyWithStringWithSpace("\(tripdetailsDictionary.objectForKey("promodiscount_amount")!)")]
        
        let totalFareDic:NSDictionary = ["Title":"Total Fare".localized(),
                                         "Details": Extensions.appendCurrencyWithStringWithSpace( "\(tripdetailsDictionary.objectForKey("total_fare")!)")]
        
        let totalPaidDic:NSDictionary = ["Title":"Total Paid Amount".localized(),
                                         "Details": Extensions.appendCurrencyWithStringWithSpace("\(tripdetailsDictionary.objectForKey("amt")!)")]
        
        let walletDetectionDic:NSDictionary = ["Title":"Wallet Detection".localized(),
                                               "Details":Extensions.appendCurrencyWithStringWithSpace( "\(tripdetailsDictionary.objectForKey("used_wallet_amout")!)")]
        
        let cashInHandDic:NSDictionary = ["Title":"Paid By Cash".localized(),
                                          "Details": Extensions.appendCurrencyWithStringWithSpace("\(tripdetailsDictionary.objectForKey("cash_in_hand")!)")]
        displayDetails = [tripIdDic,
                          pickUpTimeDic,
                          pickupDic,
                          dropTimeDic,
                          dropDic,
                          distanceDic,
                          tripDuriationTimeDic,
                          totalFareDic,
                          promocodeDiscountDetails,
                          totalPaidDic,
                          walletDetectionDic,
                          cashInHandDic,
                          paymentDic]
        
      //  print(tripdetailsDictionary)
        
        Extensions.startIndicator()
        dispatch_async(dispatch_get_main_queue(), {
            self.tripDetailsTbl.reloadData()
            Extensions.stopIndicator()
        })
        
    }
    
    //MARK: Table DataSouce and Delegate
    func tableView(tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        return displayDetails.count
    }
    
    func tableView(tableView: UITableView, heightForRowAtIndexPath indexPath: NSIndexPath) -> CGFloat {
        
        if indexPath.row == 1 || indexPath.row == 3 {
            
            let labelSize = self.rectForText("\(displayDetails.objectAtIndex(indexPath.row).objectForKey("Details")!)", font:Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(13), maxSize: CGSizeMake(Extensions.isIpadDevice() ? UIScreen.mainScreen().bounds.size.width-230 : UIScreen.mainScreen().bounds.size.width-130,999))
            
            return Extensions.isIpadDevice() ? labelSize.height + 35 : labelSize.height + 15
        } else {
            return Extensions.isIpadDevice() ? 55 : 40
        }
    }
    
    func tableView(tableView: UITableView, cellForRowAtIndexPath indexPath: NSIndexPath) -> UITableViewCell {
        
        let cell = UITableViewCell.init(style: UITableViewCellStyle.Default, reuseIdentifier: "historyDetail")
        
        //Layout Dic
        var cellLayoutDic = [String:AnyObject]()
        
        //Creatting Title Lbl
        let titleLbl:UILabel! = UILabel.init()
        cell.addSubview(titleLbl)
        titleLbl.translatesAutoresizingMaskIntoConstraints = false
        cellLayoutDic["titleLbl"] = titleLbl
        cellLayoutDic["cell"] = cell
        titleLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(13)
        titleLbl.textColor = UIColor.blackTextColor()
        titleLbl.numberOfLines = 0
        titleLbl.lineBreakMode = NSLineBreakMode.ByWordWrapping
        titleLbl.text = "\(displayDetails.objectAtIndex(indexPath.row).objectForKey("Title")!)"
        titleLbl.textAlignment = Extensions.getSelectedLanguage() == "ar" ? NSTextAlignment.Right : NSTextAlignment.Left
        cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[titleLbl]-(1)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: cellLayoutDic))
        
        //Seperator
        let seperatorLbl:UILabel! = UILabel.init()
        cell.addSubview(seperatorLbl)
        seperatorLbl.translatesAutoresizingMaskIntoConstraints = false
        cellLayoutDic["seperatorLbl"] = seperatorLbl
        seperatorLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(13)
        seperatorLbl.textColor = UIColor.blackTextColor()
        seperatorLbl.numberOfLines = 0
        seperatorLbl.lineBreakMode = NSLineBreakMode.ByWordWrapping
        seperatorLbl.text = ":"
        cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[seperatorLbl]-(1)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: cellLayoutDic))
        
        //Detail Label
        let detailLbl:UILabel! = UILabel.init()
        cell.addSubview(detailLbl)
        detailLbl.translatesAutoresizingMaskIntoConstraints = false
        cellLayoutDic["detailLbl"] = detailLbl
        detailLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(13)
      //  detailLbl.textColor = UIColor.placeHolderColor()
        detailLbl.numberOfLines = 0
        detailLbl.lineBreakMode = NSLineBreakMode.ByWordWrapping
        detailLbl.textAlignment =  Extensions.getSelectedLanguage() == "ar" ? NSTextAlignment.Right : NSTextAlignment.Left
        detailLbl.text = "\(displayDetails.objectAtIndex(indexPath.row).objectForKey("Details")!)"
        cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[detailLbl]-(1)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: cellLayoutDic))
        
     //   if indexPath.row == 1 || indexPath.row == 3 {
            detailLbl.textColor = UIColor.blackTextColor()
     //   }
        
        let titleLblWidth = Extensions.isIpadDevice() ? 200 : 100
        //Setting layout based on the language
        if Extensions.getSelectedLanguage() == "ar" {
            cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[titleLbl(titleLblWidth)]-(10)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:["titleLblWidth":titleLblWidth], views: cellLayoutDic))
            
            cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[seperatorLbl(3)]-(10)-[titleLbl]", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: cellLayoutDic))
            
            cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(5)-[detailLbl]-(10)-[seperatorLbl]", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: cellLayoutDic))
        } else {
            cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(10)-[titleLbl(titleLblWidth)]", options:NSLayoutFormatOptions(rawValue: 0), metrics:["titleLblWidth":titleLblWidth], views: cellLayoutDic))
            cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[titleLbl]-(10)-[seperatorLbl(3)]", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: cellLayoutDic))
            
            cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[seperatorLbl]-(10)-[detailLbl]-(5)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: cellLayoutDic))
        }
        
        if indexPath.row % 2 == 0 {
            cell.backgroundColor = UIColor.whiteColor()
        } else {
            cell.backgroundColor = UIColor.applicationHeaderColor()
        }
        
        if indexPath.row == displayDetails.count - 1 {
            let separatorView = UIView.init()
            separatorView.translatesAutoresizingMaskIntoConstraints = false
            separatorView.backgroundColor = UIColor(red: 206/255.0, green: 206/255.0, blue: 206/255.0, alpha: 0.5)
            cell.addSubview(separatorView)
            cellLayoutDic["separatorView"] = separatorView
            cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[separatorView(1)]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: cellLayoutDic))
            cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[separatorView]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: cellLayoutDic))
        }
        cell.selectionStyle = UITableViewCellSelectionStyle.None
        return cell
    }
    
    func rectForText(text: String, font: UIFont, maxSize: CGSize) -> CGSize {
        //This is a method to calculate the height
        let attrString = NSAttributedString.init(string: text, attributes: [NSFontAttributeName:font])
        let rect = attrString.boundingRectWithSize(maxSize, options: NSStringDrawingOptions.UsesLineFragmentOrigin, context: nil)
        let size = CGSizeMake(rect.size.width, rect.size.height)
        return size
    }
    
    //MARK: Go Back
    func goBackFromTripDetail()->Void {
        
        //allowing dispatcher complete trip
        Extensions.allowDispatcherCompleteTrip(true)
        
        // Go back from detail to history page
        self.navigationController?.popViewControllerAnimated(true)
    }
    
    //MARK: BackToHome
    func backToHomeBtnTapped()->Void {

        self.navigationController?.popToViewController(((self.navigationController?.viewControllers)! as NSArray).objectAtIndex(0) as! UIViewController, animated: true)
    }
}
