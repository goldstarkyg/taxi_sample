//
//  PaymentViewController.swift
//
//
//  Created by Gireesh on 3/4/16.
//
//

import UIKit
import CoreTelephony


class PaymentViewController: BaseViewController,UITableViewDataSource,UITableViewDelegate,UITextFieldDelegate {
    //MARK: Declaration Section
    var listArray:NSArray! = NSArray()
    var paymentDetailDic:NSDictionary!
    
    @IBOutlet var paymentTable: UITableView!
    var paymentListTable:UITableView! = UITableView.init()
    
    var layoutDic = [String:AnyObject]()
    
    var paymentSuccessDic:NSDictionary!
    
    let CVVTextField:UITextField! = UITextField.init()
    let cardPaymentBgView = UIView.init()
    let cardView = UIView.init()
    
    @IBOutlet var paymentCollected: UIButton!
    
    override func viewDidLoad() {
        
        super.viewDidLoad()
        
        //Setting the title
        titleLbl.text = "Fare Calculator".localized().uppercaseString
        
        Extensions.setAboveBelowSpeedTimerStatus(false)
        Extensions.setDriverCurrentStatus(k_DriverActive)
        
        // Creating the refresh button
        let refreshBtn = UIButton.init(type:UIButtonType.Custom)
        self.view.addSubview(refreshBtn)
        
        refreshBtn.translatesAutoresizingMaskIntoConstraints = false
        refreshBtn.setImage(UIImage(named:"refresh"), forState: UIControlState.Normal)
        refreshBtn.addTarget(self, action: #selector(PaymentViewController.refreshAction), forControlEvents: UIControlEvents.TouchUpInside)
        layoutDic["refreshBtn"] = refreshBtn
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(27)-[refreshBtn(27)]", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[refreshBtn(25)]-(12)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
        
        // Creating the refresh button
        let callButton = UIButton.init(type:UIButtonType.Custom)
        self.view.addSubview(callButton)
        
        callButton.translatesAutoresizingMaskIntoConstraints = false
        callButton.setImage(UIImage(named:"call icon"), forState: UIControlState.Normal)
        callButton.addTarget(self, action: #selector(PaymentViewController.callCustomerCareAction), forControlEvents: UIControlEvents.TouchUpInside)
        layoutDic["callButton"] = callButton
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(27)-[callButton(27)]", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(12)-[callButton(25)]", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
        
        //Checking whether the dictionary is empty or not
        if paymentDetailDic.count > 0 {
            /*
             //Setting the data to be displayed
             let pickupDic:NSDictionary = ["Title":"PICKUP LOCATION".localized(),"Details":"\(paymentDetailDic.objectForKey("pickup")!)"]
             
             let dropDic:NSDictionary = ["Title":"DROP LOCATION".localized(),"Details":"\(paymentDetailDic.objectForKey("drop")!)"]
             
             let KM_String:String! = String(format:"%0.2f %@",Float("\(paymentDetailDic.objectForKey("distance")!)")!,(paymentDetailDic.objectForKey("metric")) as! String)
             
             let distanceDic:NSDictionary = ["Title":"Total Distance".localized(),"Details":KM_String]
             
             let tripFareCostDic:NSDictionary = ["Title":"Trip Fare".localized(),"Details":Extensions.appendCurrencyWithStringWithSpace(String(format: "%0.2f",Float("\(paymentDetailDic.objectForKey("trip_fare")!)")!))]
             
             let waitingTimeCostDic:NSDictionary = ["Title":String(format:"%@ ( %@)","Waiting Time Cost".localized(),"\(paymentDetailDic.objectForKey("waiting_time")!)"),"Details":Extensions.appendCurrencyWithStringWithSpace(String(format: "%0.2f",Float("\(paymentDetailDic.objectForKey("waiting_cost")!)")!))]
             
             let taxDic:NSDictionary = ["Title":String(format: "Tax %@%@".localized(),"(\(paymentDetailDic.objectForKey("company_tax")!))","%").localized(),"Details":Extensions.appendCurrencyWithStringWithSpace("\(paymentDetailDic.objectForKey("tax_amount")!)")]
             
             let totalDic:NSDictionary = ["Title":"Total".localized(),"Details":Extensions.appendCurrencyWithStringWithSpace(String(format: "%0.2f",Float("\(paymentDetailDic.objectForKey("subtotal_fare")!)")!))]
             
             let walletDic:NSDictionary = ["Title":"Wallet Amount Used".localized(),"Details":Extensions.appendCurrencyWithStringWithSpace(String(format: "%0.2f",Float("\(paymentDetailDic.objectForKey("wallet_amount_used")!)")!))]
             
             let amountPayDic:NSDictionary = ["Title":"Amount to Pay".localized(),"Details":Extensions.appendCurrencyWithStringWithSpace(String(format: "%0.2f",Float("\(paymentDetailDic.objectForKey("total_fare")!)")!))]
             
             let paymentDic:NSDictionary = ["Title":"PAYMENT BY".localized(),"Details":paymentDetailDic.objectForKey("gateway_details")!]
             
             //Checking promo discount is availed by user or not
             print("Payment Dic-->\(paymentDetailDic)")
             if "\(paymentDetailDic.objectForKey("promo_discount_per"))" != "0" {
             
             let discountDic:NSDictionary = ["Title":String(format:"%@ (%@%@)","Discount".localized(),"\(paymentDetailDic.objectForKey("promo_discount_per")!)","%"),"Details":Extensions.appendCurrencyWithStringWithSpace(String(format: "%0.2f",Float("\(paymentDetailDic.objectForKey("promodiscount_amount")!)")!))]
             
             if "\(paymentDetailDic.objectForKey("wallet_amount_used")!)" == "0" {
             listArray = [pickupDic,dropDic,distanceDic,tripFareCostDic,waitingTimeCostDic,discountDic,taxDic,totalDic,paymentDic]
             } else {
             listArray = [pickupDic,dropDic,distanceDic,tripFareCostDic,waitingTimeCostDic,discountDic,taxDic,totalDic,walletDic,amountPayDic,paymentDic]
             }
             print("LIST ARRAY-->\(listArray)")
             } else {
             if "\(paymentDetailDic.objectForKey("wallet_amount_used")!)" == "0" {
             listArray = [pickupDic,dropDic,distanceDic,tripFareCostDic,waitingTimeCostDic,taxDic,totalDic,paymentDic]
             } else {
             listArray = [pickupDic,dropDic,distanceDic,tripFareCostDic,waitingTimeCostDic,taxDic,totalDic,walletDic,amountPayDic,paymentDic]
             }
             }
             */
            paymentTable.removeFromSuperview()
            
            paymentListTable = paymentTable
            paymentListTable.hidden = false
            
            //Payment Details Table
            paymentListTable.translatesAutoresizingMaskIntoConstraints = false
            self.view.addSubview(paymentListTable)
            
            layoutDic["paymentListTable"] = paymentListTable
            layoutDic["topLayout"] = self.topLayoutGuide
            
            self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[topLayout]-(44)-[paymentListTable]-(52)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: layoutDic))
            self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[paymentListTable]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: layoutDic))
            paymentListTable.delegate = self
            paymentListTable.dataSource = self
            paymentListTable.separatorStyle = UITableViewCellSeparatorStyle.None
            paymentListTable.showsVerticalScrollIndicator = false
            
            paymentCollected.setTitle("paymentCollected".localized().uppercaseString, forState: .Normal)
            paymentCollected.titleLabel!.font = Extensions.isIpadDevice() ? UIFont.setButtonFont(20) : UIFont.setButtonFont(16)
        }
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
    
    //MARK: Refresh Button Action
    func refreshAction()->Void {
        //Prepare Post Data
        let postDic:NSDictionary = ["trip_id":Extensions.onGoingTripId(),
                                    "drop_latitude":"",
                                    "drop_longitude":"",
                                    "distance":"",
                                    "drop_location":"",
                                    "actual_distance":"",
                                    "waiting_hour":"",
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
                self.paymentDetailDic = resultDic.objectForKey("detail") as! NSDictionary
                
                Extensions.startIndicator()
                dispatch_async(dispatch_get_main_queue(), {
                    self.paymentListTable.reloadData()
                    Extensions.stopIndicator()
                })
                
            } else {
                Extensions.showAlert("APP TITLE".localized(), messageString: resultDic.objectForKey("message") as! String)
            }
        })
    }
    
    //MARK: call Customer Care Action
    func callCustomerCareAction() -> Void {
        
        let phoneNumber = paymentDetailDic.valueForKey("customer_care") as! String
     //   print("telprompt://\(phoneNumber)")
        
        let networkInfo = CTTelephonyNetworkInfo()
        let carrier:CTCarrier! = networkInfo.subscriberCellularProvider
        //Cheking whether the device have a sim
        if carrier == nil {
            //No Sim
            Extensions.showAlert("APP TITLE".localized(), messageString: "No sim card installed")
        } else {
            //Sim is there,Trying to call the number
            let phoneURL = NSURL.init(string: "telprompt://\(phoneNumber)")
            
            if UIApplication.sharedApplication().canOpenURL(phoneURL!) {
                UIApplication.sharedApplication().openURL(phoneURL!)
            } else {
                //Cant make a call,showing alert
                Extensions.showAlert("APP TITLE".localized(), messageString: "Call facility is not available on your device".localized())
            }
        }
    }
    
    //MARK: Tableview DataSouce and Delegate
    func tableView(tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        return 1 //listArray.count
    }
    
    func tableView(tableView: UITableView, cellForRowAtIndexPath indexPath: NSIndexPath) -> UITableViewCell {
        
        //Craeting the cell object
        let cell:UITableViewCell! = tableView.dequeueReusableCellWithIdentifier("paymentcell")
        
        //if cell == nil {
        // let cell = UITableViewCell.init(style: UITableViewCellStyle.Default, reuseIdentifier: "paymentcell")
        //  }
        /*
         //Removing the subview to avoide overlapping
         for subView in cell.subviews {
         subView.removeFromSuperview()
         }
         
         var cellLayout = [String:AnyObject]()
         
         
         if indexPath.row != listArray.count - 1 {
         //Dispalying the trip Payment details
         
         //Title Label
         let titleLbl = UILabel.init()
         titleLbl.translatesAutoresizingMaskIntoConstraints = false
         titleLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(13)
         titleLbl.textAlignment = Extensions.getSelectedLanguage() == "ar" ? NSTextAlignment.Right :NSTextAlignment.Left
         titleLbl.textColor = UIColor.blackTextColor()
         titleLbl.text = "\(listArray.objectAtIndex(indexPath.row).objectForKey("Title")!)"
         titleLbl.numberOfLines = 0
         titleLbl.lineBreakMode = NSLineBreakMode.ByWordWrapping
         
         cell.addSubview(titleLbl)
         cellLayout["titleLbl"] = titleLbl
         
         cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[titleLbl]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: cellLayout))
         
         //Seperatot Label
         let separatorLbl = UILabel.init()
         separatorLbl.translatesAutoresizingMaskIntoConstraints = false
         separatorLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(13)
         separatorLbl.textAlignment = NSTextAlignment.Center
         separatorLbl.textColor = UIColor.blackTextColor()
         separatorLbl.text = ":"
         
         cell.addSubview(separatorLbl)
         cellLayout["separatorLbl"] = separatorLbl
         
         cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[separatorLbl]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: cellLayout))
         
         //Detail Label
         let detailLbl = UILabel.init()
         detailLbl.translatesAutoresizingMaskIntoConstraints = false
         detailLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(13)
         detailLbl.textAlignment = Extensions.getSelectedLanguage() == "ar" ? NSTextAlignment.Right :NSTextAlignment.Left
         detailLbl.textColor = UIColor.placeHolderColor()
         detailLbl.text = "\(listArray.objectAtIndex(indexPath.row).objectForKey("Details")!)"
         detailLbl.numberOfLines = 0
         detailLbl.lineBreakMode = NSLineBreakMode.ByWordWrapping
         
         cell.addSubview(detailLbl)
         cellLayout["detailLbl"] = detailLbl
         
         cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[detailLbl]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: cellLayout))
         
         let titleLblWidth = Extensions.isIpadDevice() ? 240 : 110
         let separatorLeading = Extensions.isIpadDevice() ? 20 : 10
         let space = Extensions.isIpadDevice() ? 15 : 10
         var metricDic = [String:AnyObject]()
         metricDic["space"] = space
         metricDic["titleLblWidth"] = titleLblWidth
         metricDic["separatorLeading"] = separatorLeading
         if Extensions.getSelectedLanguage() == "ar"
         {
         cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[titleLbl(titleLblWidth)]-(space)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: metricDic, views: cellLayout))
         cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[separatorLbl(5)]-(10)-[titleLbl]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: cellLayout))
         cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(space)-[detailLbl]-(separatorLeading)-[separatorLbl]", options: NSLayoutFormatOptions(rawValue: 0), metrics: metricDic, views: cellLayout))
         }
         else
         {
         cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(space)-[titleLbl(titleLblWidth)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: metricDic, views: cellLayout))
         cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[titleLbl]-(10)-[separatorLbl(5)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: cellLayout))
         cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[separatorLbl]-(separatorLeading)-[detailLbl]-(space)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: metricDic, views: cellLayout))
         
         }
         
         if indexPath.row % 2 == 0
         {
         cell.backgroundColor = UIColor.whiteColor()
         }
         else
         {
         cell.backgroundColor = UIColor(red: 247/255.0, green: 245/255.0, blue: 246/255.0, alpha: 1.0)
         }
         
         if indexPath.row == listArray.count - 2
         {
         let separatorView = UIView.init()
         separatorView.translatesAutoresizingMaskIntoConstraints = false
         separatorView.backgroundColor = UIColor(red: 206/255.0, green: 206/255.0, blue: 206/255.0, alpha: 0.5)
         cellLayout["separatorView"] = separatorView
         cell.addSubview(separatorView)
         cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[separatorView(1)]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: cellLayout))
         cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[separatorView]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: cellLayout))
         
         }
         
         
         }
         else
         {
         //Shwoing the available payment options
         
         let paymentByLbl = UILabel.init()
         paymentByLbl.translatesAutoresizingMaskIntoConstraints = false
         paymentByLbl.text = "\(listArray.objectAtIndex(indexPath.row).objectForKey("Title")!)"
         paymentByLbl.textAlignment = NSTextAlignment.Center
         paymentByLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(21) : UIFont.setAppFont(16)
         paymentByLbl.textColor = UIColor.getTextFieldTextColor()
         cell.addSubview(paymentByLbl)
         cellLayout["paymentByLbl"] = paymentByLbl
         let paymentLabelYPosition = Extensions.isIpadDevice() ? 40 : 20
         cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(20)-[paymentByLbl(paymentLabelYPosition)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["paymentLabelYPosition":paymentLabelYPosition], views: cellLayout))
         cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[paymentByLbl]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: cellLayout))
         
         
         let paymentArray:NSArray = listArray.objectAtIndex(indexPath.row).objectForKey("Details") as! NSArray
         
         let paymentSectionWidth:CGFloat = UIScreen.mainScreen().bounds.size.width / CGFloat(paymentArray.count)
         let paymentBgViewWidth:CGFloat = paymentSectionWidth * CGFloat( paymentArray.count)
         
         let paymentBgView = UIView.init()
         cellLayout["paymentBgView"] = paymentBgView
         paymentBgView.translatesAutoresizingMaskIntoConstraints = false
         cell.addSubview(paymentBgView)
         
         let paymentBgYPosition = Extensions.isIpadDevice() ? 45 : 12
         cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[paymentByLbl]-(paymentBgYPosition)-[paymentBgView]-(20)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["paymentBgYPosition":paymentBgYPosition], views: cellLayout))
         
         cell.addConstraint(NSLayoutConstraint(item: paymentBgView, attribute: .CenterX, relatedBy: .Equal, toItem: cell, attribute: .CenterX, multiplier: 1.0, constant: 0))
         paymentBgView.addConstraint(NSLayoutConstraint(item: paymentBgView, attribute: .Width, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: paymentBgViewWidth))
         
         var start:CGFloat = 0
         let imageSize:CGFloat = Extensions.isIpadDevice()  ? 96 : 76
         
         
         for i in 0 ..< paymentArray.count
         {
         
         let paymentView = UIView.init(frame: CGRectMake(start, 0, paymentSectionWidth,imageSize))
         
         
         let paymentImageView = UIImageView.init(frame: CGRectMake(paymentView.frame.size.width/2-(imageSize/2),0,imageSize, imageSize))
         paymentView.addSubview(paymentImageView)
         
         paymentImageView.contentMode = UIViewContentMode.Center
         
         if paymentArray.objectAtIndex(i).objectForKey("pay_mod_name") as! String == "Cash"
         {
         paymentImageView.image = Extensions.isIpadDevice() ? UIImage(named: "cash_focus_iPad") : UIImage(named: "cash_focus")
         }
         else if paymentArray.objectAtIndex(i).objectForKey("pay_mod_name") as! String == "Wallet"
         {
         paymentImageView.image = Extensions.isIpadDevice() ? UIImage(named: "wallet_focus_iPad") : UIImage(named: "wallet_focus")
         
         }
         else if paymentArray.objectAtIndex(i).objectForKey("pay_mod_name") as! String == "Credit Card"
         {
         paymentImageView.image = Extensions.isIpadDevice() ? UIImage(named: "card-focus_iPad") : UIImage(named: "card-focus")
         
         }
         else if paymentArray.objectAtIndex(i).objectForKey("pay_mod_name") as! String == "New Card"
         
         {
         paymentImageView.image = Extensions.isIpadDevice() ? UIImage(named: "uncard-focus_iPad") : UIImage(named: "uncard-focus")
         
         }
         
         paymentBgView.addSubview(paymentView)
         
         let paymentNameLbl = UILabel.init(frame: CGRectMake(0,Extensions.isIpadDevice() ? paymentImageView.frame.origin.y+paymentImageView.frame.size.height+15 : paymentImageView.frame.origin.y+paymentImageView.frame.size.height ,paymentView.frame.size.width,40))
         cellLayout["paymentNameLbl"] = paymentNameLbl
         paymentNameLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(18) : UIFont.setAppFont(14)
         paymentNameLbl.textColor = UIColor.getTextFieldTextColor()
         paymentView.addSubview(paymentNameLbl)
         paymentNameLbl.textAlignment = NSTextAlignment.Center
         paymentNameLbl.numberOfLines = 0
         paymentNameLbl.lineBreakMode = NSLineBreakMode.ByWordWrapping
         paymentNameLbl.text = "\(paymentArray.objectAtIndex(i).objectForKey("pay_mod_name")!)".localized()
         
         start = start + paymentSectionWidth
         
         let paymentModeButton = UIButton.init(type: UIButtonType.Custom)
         
         paymentModeButton.addTarget(self, action: #selector(PaymentViewController.paymentModeBtnTapped(_:)), forControlEvents: UIControlEvents.TouchUpInside)
         
         paymentModeButton.frame = CGRectMake(0, 0, paymentView.frame.size.width,paymentView.frame.size.height)
         
         paymentView.addSubview(paymentModeButton)
         
         paymentModeButton.tag = Int("\(paymentArray.objectAtIndex(i).objectForKey("pay_mod_id")!)")!
         
         
         
         }
         
         if paymentArray.count == 2 && Extensions.isIpadDevice()
         {
         let separatorView = UIView.init()
         separatorView.backgroundColor = UIColor(red: 206/255.0, green: 206/255.0, blue: 206/255.0, alpha: 0.5)
         paymentBgView.addSubview(separatorView)
         layoutDic["separatorView21"] = separatorView
         separatorView.translatesAutoresizingMaskIntoConstraints = false
         paymentBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(-10)-[separatorView21]-(30)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
         paymentBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(leading)-[separatorView21(1)]", options: NSLayoutFormatOptions(rawValue:0), metrics: ["leading":UIScreen.mainScreen().bounds.size.width/2-0.5], views: layoutDic))
         
         }
         }
         */
        
        let tripFare:UILabel = cell.contentView.viewWithTag(1) as! UILabel
        tripFare.text = "Trip Fare".localized()
        
        let totalFare:UILabel = cell.contentView.viewWithTag(2) as! UILabel
        totalFare.text = "Total Fare".localized()+" : "+Extensions.appendCurrencyWithStringWithSpace(String(format: "%0.2f",Float("\(paymentDetailDic.objectForKey("total_fare")!)")!))
        
        let walletDetection:UILabel = cell.contentView.viewWithTag(3) as! UILabel
        walletDetection.text = "wallet detection".localized()+" : "+Extensions.appendCurrencyWithStringWithSpace(String(format: "%0.2f",Float("\(paymentDetailDic.objectForKey("wallet_amount_used")!)")!))
        
        let collectFromCustomer:UILabel = cell.contentView.viewWithTag(4) as! UILabel
        collectFromCustomer.text = "Collect Cash from Customer".localized()
        
        let amount:UILabel = cell.contentView.viewWithTag(5) as! UILabel
        amount.text = Extensions.appendCurrencyWithStringWithSpace(String(format: "%0.2f",Float("\(paymentDetailDic.objectForKey("remaining_amount")!)")!))
        amount.textColor = UIColor.applicationSubmitColor()
        
        cell.selectionStyle = UITableViewCellSelectionStyle.None
        return cell
    }
    
    func tableView(tableView: UITableView, heightForRowAtIndexPath indexPath: NSIndexPath) -> CGFloat {
        //Height for the cell
        /* if indexPath.row == listArray.count - 1 {
         if Extensions.isIpadDevice() {
         return 300
         } else  {
         return 200
         }
         } else {
         //Calculating the height dynamically based on the data
         let cellHeight = self.rectForText("\(listArray.objectAtIndex(indexPath.row).objectForKey("Details")!)", font: Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(13), maxSize: CGSizeMake(Extensions.isIpadDevice() ? UIScreen.mainScreen().bounds.size.width-330 : UIScreen.mainScreen().bounds.size.width-175, 999))
         
         if cellHeight < 44
         {
         //Minimum Height
         
         if Extensions.isIpadDevice()
         {
         return 64
         }
         else
         {
         return 44
         }
         }
         else
         {
         if Extensions.isIpadDevice()
         {
         return cellHeight + 40
         }
         else
         {
         return cellHeight + 10
         }
         }
         }
         */
        
        return 300
    }
    
    func numberOfSectionsInTableView(tableView: UITableView) -> Int {
        return 1
    }
    
    func tableView(tableView: UITableView, heightForHeaderInSection section: Int) -> CGFloat {
        /* if Extensions.isIpadDevice() {
         return 10
         }
         */
        return 120
    }
    
    func tableView(tableView: UITableView, viewForHeaderInSection section: Int) -> UIView? {
        
        let headerView = UIView()
        self.view.bringSubviewToFront(headerView)
        
        let distanceKM:String = String(format:"%0.2f %@",Float("\(paymentDetailDic.objectForKey("distance")!)")!,"km".localized() )
        
        let mints:NSInteger = paymentDetailDic.objectForKey("minutes_traveled") as! NSInteger
        let traveledMints:String = String(mints).stringByAppendingFormat(" %@","Mins".localized())
        
        let waiting = paymentDetailDic.objectForKey("waiting_time") as! String
        let waitingTimeCostDic = String(waiting).stringByAppendingFormat(" %@","Mins".localized())
        // let waitingTimeCostDic:String = String(waitingTime)
        
        // Top Menu Items
        var layoutDic = [String:AnyObject]()
        let trackMyTripDic = ["Title": "Total Distance".localized(),
                              "value": distanceKM,
                              "image": "totalDistance"]
        
        let profileDic = ["Title": "Trip Mins".localized(),
                          "value": traveledMints,
                          "image": "tripMints"]
        
        let myJobsDic = ["Title": "Waiting Time".localized(),
                         "value": waitingTimeCostDic,
                         "image": "totalWaitingTime"]
        
        menuDic = [trackMyTripDic,profileDic,myJobsDic]
       // print(menuDic)
        
        // Creating the top menu view
        menuBgView = UIView.init()
        menuBgView.translatesAutoresizingMaskIntoConstraints = false
        headerView.addSubview(menuBgView)
        layoutDic["menuBgView"] = menuBgView
        layoutDic["headerView"] = headerView
        
        let menuHeight = 120 //UIDevice.currentDevice().model == "iPad" ? 145 : 120
        
        headerView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[menuBgView(menuHeight)]", options: NSLayoutFormatOptions(rawValue: 0), metrics:["menuHeight":menuHeight], views:layoutDic))
        headerView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[menuBgView]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:layoutDic))
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
            
            menuImageView.frame  = CGRectMake(width/2-17, 20, 34, 34)
            menuImageView.contentMode = .ScaleAspectFit
            menuImageView.image = UIImage(named: menuDic.objectAtIndex(i).objectForKey("image") as! String)
            
            menuImageView.tag = 101
            
            menu .addSubview(menuImageView)
            
            startX = startX + width
            
            let menuTitle = UILabel.init()
            menuTitle.frame = CGRectMake(2,Extensions.isIpadDevice() ? (menuImageView.frame.origin.y + menuImageView.frame.size.height+2) : (menuImageView.frame.origin.y + menuImageView.frame.size.height),menu.frame.size.width-4,46)
            menuTitle.textColor = UIColor.dashBoardMenuTitleColor()
            menuTitle.textAlignment = NSTextAlignment.Center
            menuTitle.font = Extensions.isIpadDevice() ? UIFont.setAppFont(16) : UIFont.setAppFont(12)
            //            menuTitle.text = menuDic.objectAtIndex(i).objectForKey("Title") as? String
            menu.addSubview(menuTitle)
            menuTitle.numberOfLines = 3;
            
            let titleString:String = menuDic.objectAtIndex(i).objectForKey("Title") as! String
            let valueString = menuDic.objectAtIndex(i).objectForKey("value") as! String
            //            let showValue = titleString.stringByAppendingString(menuDic.objectAtIndex(i).objectForKey("value") as! String)
            
            let showAttributedString = NSMutableAttributedString(string: titleString, attributes: [NSFontAttributeName:UIFont.setAppFont(12),NSForegroundColorAttributeName:UIColor.alertTitleColor()])
            
            let attributedValueString = NSAttributedString(string: "\n"+valueString, attributes: [NSFontAttributeName:UIFont.setAppFont(12),NSForegroundColorAttributeName:UIColor.blackTextColor()])
            
            showAttributedString.appendAttributedString(attributedValueString)
            
            //            let paragraphStyle = NSMutableParagraphStyle()
            //            paragraphStyle.lineSpacing = 8
            //            showAttributedString.addAttribute(NSParagraphStyleAttributeName, value:paragraphStyle, range:NSMakeRange(0, showAttributedString.length))
            
            menuTitle.attributedText = showAttributedString
            
            let menuSelectBtn = UIButton.init()
            menuSelectBtn.tag = 1000
            menuSelectBtn.frame = CGRectMake(0, 0, menu.frame.size.width,menu.frame.size.height)
            menuSelectBtn.addTarget(self, action: #selector(DashBoardViewController.menuSelectBtnTapped(_:)), forControlEvents: UIControlEvents.TouchUpInside)
            menu.addSubview(menuSelectBtn)
            menuBgView.addSubview(menu)
        }
        
        return headerView
    }
    
    //MARK:Payment mode Selection
    func paymentModeBtnTapped(btn:AnyObject)->Void {
        
        let paymentBtn = btn as! UIButton
        
        if paymentBtn.tag == 1 || paymentBtn.tag == 5 {
            self.cashPayment(paymentBtn)
        } else if paymentBtn.tag == 2 {
            self.cardPayment()
        } else {
            self.uncardPayment()
        }
        
    }
    
    //MARK: Cash Payment
    func cashPayment(btn:AnyObject)->Void {
        //Cash Payment
        let paymentBtn = btn as! UIButton
        
        //Setting the POST Data and Calling the API
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
                                     "remarks":"","nightfare_applicable":paymentDetailDic.objectForKey("nightfare_applicable")!,
                                     "eveningfare_applicable":paymentDetailDic.objectForKey("eveningfare_applicable")!,
                                     "eveningfare":paymentDetailDic.objectForKey("eveningfare")!,
                                     "nightfare":paymentDetailDic.objectForKey("nightfare")!,
                                     "waiting_time":paymentDetailDic.objectForKey("waiting_time")!,
                                     "waiting_cost":paymentDetailDic.objectForKey("waiting_cost")!,
                                     "creditcard_no":"",
                                     "creditcard_cvv":"",
                                     "expmonth":"",
                                     "expyear":"",
                                     "pay_mod_id":paymentBtn.tag,
                                     "minutes_traveled":paymentDetailDic.objectForKey("minutes_traveled")!,
                                     "minutes_fare":paymentDetailDic.objectForKey("minutes_fare")!,
                                     "promo_discount_per":paymentDetailDic.objectForKey("promo_discount_per")!]
        
        APIDownlaod.downloadDataFromServer("\(k_BaseURL)\(apiKey)/?lang=\(Extensions.getSelectedLanguage())&type=tripfare_update", bodyData: postData, method: "POST", key: "") { (resultDic) -> Void in
            
          //  print("Response ---> \(resultDic)")
            
            if resultDic.objectForKey("status") as! Int == 1 {
                //Success
                self.paymentSuccessDic = resultDic.objectForKey("detail") as! NSDictionary
                
                //Restting the Trip based data
                Extensions.setWaitingTime("00:00:00")
                Extensions.setDriverCurrentStatus(k_DriverFree)
                Extensions.setDriverInAcceptPage(false)
                Extensions.setAboveBelowSpeedTimerStatus(false)
                Extensions.setOngoingTripId("")
                
                //Setting the driver statistics
                Extensions.setDriverStatistics(resultDic.objectForKey("driver_statistics") as! NSDictionary)
                //Moving to Payment Complete Page
                self.moveToPaymentCompletePage()
                
            } else {
                Extensions.showAlert("APP TITLE".localized(), messageString: resultDic.objectForKey("message") as! String)
            }
        }
    }
    
    //MARK: Card Payment
    func cardPayment()->Void {
        
        for subView in cardPaymentBgView.subviews {
            subView.removeFromSuperview()
        }
        
        //Shwoing the Screen to get the CVV from the user
        
        //Creating the bg view
        cardPaymentBgView.backgroundColor = UIColor.shadedBgColor()
        cardPaymentBgView.translatesAutoresizingMaskIntoConstraints = false
        
        layoutDic["cardPaymentBgView"] = cardPaymentBgView
        
        self.view.addSubview(cardPaymentBgView)
        cardPaymentBgView.hidden = false
        
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[cardPaymentBgView]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: layoutDic))
        
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[cardPaymentBgView]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: layoutDic))
        
        //Adding the tap gesture
        let tapGesture = UITapGestureRecognizer.init(target: self, action: #selector(PaymentViewController.cardBgViewTapGesture))
        
        cardPaymentBgView.addGestureRecognizer(tapGesture)
        
        //Card View
        layoutDic["cardView"] = cardView
        
        cardPaymentBgView.addSubview(cardView)
        cardView.translatesAutoresizingMaskIntoConstraints = false
        cardView.addConstraint(NSLayoutConstraint(item: cardView, attribute: .Width, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: 290))
        cardView.addConstraint(NSLayoutConstraint(item: cardView, attribute: .Height, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: 80))
        cardPaymentBgView.addConstraint(NSLayoutConstraint(item: cardView, attribute: .CenterX, relatedBy: .Equal, toItem: cardPaymentBgView, attribute: .CenterX, multiplier: 1.0, constant: 0))
        cardPaymentBgView.addConstraint(NSLayoutConstraint(item: cardView, attribute: .CenterY, relatedBy: .Equal, toItem: cardPaymentBgView, attribute: .CenterY, multiplier: 1.0, constant: 0))
        
        cardView.backgroundColor = UIColor.whiteColor()
        
        //CVV Textfield
        layoutDic["CVVTextField"] = CVVTextField
        cardView.addSubview(CVVTextField)
        CVVTextField.translatesAutoresizingMaskIntoConstraints = false
        CVVTextField.textColor = UIColor.blackTextColor()
        CVVTextField.font = UIFont.setAppFont(15)
        CVVTextField.layer.cornerRadius = 5.0
        CVVTextField.layer.borderColor = UIColor.applicationHeaderColor().CGColor
        CVVTextField.layer.borderWidth = 1.0
        CVVTextField.layer.masksToBounds = true
        let leftPadView = UIView.init(frame: CGRectMake(0, 0, 10, 40))
        CVVTextField.leftView = leftPadView
        CVVTextField.leftViewMode = UITextFieldViewMode.Always
        CVVTextField.delegate = self
        CVVTextField.secureTextEntry = true
        self.setPlaceHolder(CVVTextField, placeHolder: "Enter CVV number".localized())
        CVVTextField.keyboardType = UIKeyboardType.NumberPad
        cardView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[CVVTextField(40)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: layoutDic))
        cardView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[CVVTextField]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: layoutDic))
        //Separator
        let separatorLbl = UILabel.init()
        separatorLbl.backgroundColor = UIColor.textFieldUnderLineColor()
        layoutDic["separatorLbl"] = separatorLbl
        cardView.addSubview(separatorLbl)
        separatorLbl.translatesAutoresizingMaskIntoConstraints = false
        cardView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(39.5)-[separatorLbl(1)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: layoutDic))
        cardView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(10)-[separatorLbl]-(10)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: layoutDic))
        //Ok Button
        let OkBtn = UIButton.init(type: UIButtonType.Custom)
        OkBtn.addTarget(self, action: #selector(PaymentViewController.cvvOkBtnTapped), forControlEvents: UIControlEvents.TouchUpInside)
        OkBtn.titleLabel?.font = UIFont.setAppFont(16)
        OkBtn.setTitle("OK".localized(), forState: UIControlState.Normal)
        OkBtn.setTitleColor(UIColor.getTextFieldTextColor(), forState: UIControlState.Normal)
        cardView.addSubview(OkBtn)
        OkBtn.backgroundColor = UIColor.clearColor()
        OkBtn.translatesAutoresizingMaskIntoConstraints = false
        layoutDic["OkBtn"] = OkBtn
        
        cardView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(40)-[OkBtn(40)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: layoutDic))
        
        cardView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[OkBtn(145)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: layoutDic))
        
        //Cancel Button
        let cancelBtn = UIButton.init(type: UIButtonType.Custom)
        cancelBtn.addTarget(self, action: #selector(PaymentViewController.cvvCancelBtnTapped), forControlEvents: UIControlEvents.TouchUpInside)
        cancelBtn.titleLabel?.font = UIFont.setAppFont(16)
        cancelBtn.setTitle("CANCEL".localized(), forState: UIControlState.Normal)
        cancelBtn.setTitleColor(UIColor.blackTextColor(), forState: UIControlState.Normal)
        cardView.addSubview(cancelBtn)
        cancelBtn.translatesAutoresizingMaskIntoConstraints = false
        cancelBtn.backgroundColor = UIColor.clearColor()
        layoutDic["cancelBtn"] = cancelBtn
        
        cardView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(40)-[cancelBtn(40)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: layoutDic))
        
        cardView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[OkBtn]-(0)-[cancelBtn(145)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: layoutDic))
        
        let separatorLbl2 = UILabel.init()
        separatorLbl2.backgroundColor = UIColor.textFieldUnderLineColor()
        layoutDic["separatorLbl2"] = separatorLbl2
        cardView.addSubview(separatorLbl2)
        separatorLbl2.translatesAutoresizingMaskIntoConstraints = false
        cardView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(45)-[separatorLbl2(30)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: layoutDic))
        cardView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(144.5)-[separatorLbl2(1)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: layoutDic))
        
        //Adding Shadow
        
        let layer:CALayer = cardView.layer;
        layer.shadowOffset = CGSizeMake(1, 1);
        layer.shadowColor = UIColor.blackColor().CGColor
        layer.shadowRadius = 2.0
        layer.shadowOpacity = 0.6
        //layer.shadowPath = UIBezierPath.init(rect: layer.bounds).CGPath
        layer.rasterizationScale = UIScreen.mainScreen().scale; // to define retina or not
        layer.shouldRasterize = true;
        cardView.clipsToBounds = false
        
        //Done button tool bar for number pad
        let keyboardToolBar = UIToolbar.init()
        
        keyboardToolBar.sizeToFit()
        
        let flexBarBtn = UIBarButtonItem.init(barButtonSystemItem: UIBarButtonSystemItem.FlexibleSpace, target: nil, action: nil)
        
        let doneBarBtn = UIBarButtonItem.init(title: "Done".localized(), style: UIBarButtonItemStyle.Plain, target: self, action: #selector(PaymentViewController.keybaoardToolBarDoneTapped))
        
        keyboardToolBar.items = [flexBarBtn,doneBarBtn]
        
        CVVTextField.inputAccessoryView = keyboardToolBar
    }
    
    //MARK: Pay with New Card
    func uncardPayment()->Void {
        //Moving to unregistered Screen
        self.performSegueWithIdentifier("toUnregisteredCardSegue", sender: self)
    }
    
    func cardBgViewTapGesture()->Void {
        cardPaymentBgView.hidden = true
    }
    
    //MARK: CVV OK Cancel
    func cvvOkBtnTapped()->Void {
        self.view.endEditing(true)
        
        if Validation.isEmpty(CVVTextField) {
            Extensions.showAlert("APP TITLE".localized(), messageString: "Enter CVV number".localized())
        } else {
            //Setting post data and calling API
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
                                         "creditcard_no":"",
                                         "creditcard_cvv":CVVTextField.text!,"expmonth":"",
                                         "expyear":"",
                                         "pay_mod_id":"2",
                                         "minutes_traveled":paymentDetailDic.objectForKey("minutes_traveled")!,
                                         "minutes_fare":paymentDetailDic.objectForKey("minutes_fare")!,
                                         "promo_discount_per":paymentDetailDic.objectForKey("promo_discount_per")!]
            
            APIDownlaod.downloadDataFromServer("\(k_BaseURL)\(apiKey)/?lang=\(Extensions.getSelectedLanguage())&type=tripfare_update", bodyData: postData, method: "POST", key: "") { (resultDic) -> Void in
                
              //  print("Response ---> \(resultDic)")
                
                if resultDic.objectForKey("status") as! Int == 1 {
                    //Success
                    
                    //Resetting the trip based data and moving to Payment Complete screen
                    self.paymentSuccessDic = resultDic.objectForKey("detail") as! NSDictionary
                    
                    Extensions.setWaitingTime("00:00:00")
                    Extensions.setDriverCurrentStatus(k_DriverFree)
                    Extensions.setDriverInAcceptPage(false)
                    Extensions.setAboveBelowSpeedTimerStatus(false)
                    Extensions.setOngoingTripId("")
                    
                    Extensions.setDriverStatistics(resultDic.objectForKey("driver_statistics") as! NSDictionary)
                    
                    self.moveToPaymentCompletePage()
                } else {
                    //Not Success
                    Extensions.showAlert("APP TITLE".localized(), messageString: resultDic.objectForKey("message") as! String)
                }
            }
        }
    }
    
    func cvvCancelBtnTapped()->Void {
        cardPaymentBgView.hidden = true
        self.view.endEditing(true)
    }
    
    //MARK: TextField Delegate
    func textField(textField: UITextField, shouldChangeCharactersInRange range: NSRange, replacementString string: String) -> Bool {
        let newLength = (textField.text?.characters.count)! + string.characters.count - range.length
        
        if newLength <= 4 {
            let newCharacters = NSCharacterSet(charactersInString: string)
            return NSCharacterSet.decimalDigitCharacterSet().isSupersetOfSet(newCharacters)
        } else {
            return false
        }
    }
    
    func textFieldShouldReturn(textField: UITextField) -> Bool {
        
        textField.resignFirstResponder()
        return true
    }
    
    func keybaoardToolBarDoneTapped()->Void {
        CVVTextField.resignFirstResponder()
        cardPaymentBgView.hidden = true
        self.cvvOkBtnTapped()
    }
    
    //MARK:Segue Calling
    func moveToPaymentCompletePage()->Void {
        self.performSegueWithIdentifier("toPaymentCompleteSegue", sender: self)
    }
    
    override func prepareForSegue(segue: UIStoryboardSegue, sender: AnyObject?) {
        //Passing data
        if segue.identifier == "toPaymentCompleteSegue" {
            let paymentCompleteObj = segue.destinationViewController as? PaymentCompleteViewController
            paymentCompleteObj?.paymentCompleteDic = paymentSuccessDic
        } else if segue.identifier == "toUnregisteredCardSegue" {
            let unRegisteredObj = segue.destinationViewController as? UnRegisteredCardPaymentViewController
            unRegisteredObj?.paymentDetailDic = paymentDetailDic
        }
    }
    
    func textFieldDidBeginEditing(textField: UITextField) {
        self.keyBoardAnimation(true)
    }
    
    func textFieldDidEndEditing(textField: UITextField) {
        self.keyBoardAnimation(false)
    }
    
    func keyBoardAnimation(up:Bool) {
        // Animating the view when keyboard appeared,called from animate textfield func
        let movementDuration = 0.5
        
        let movement:CGFloat = up ? -80 : 80
        
        UIView.beginAnimations("animateTextField", context:nil)
        UIView.setAnimationBeginsFromCurrentState(true)
        UIView.setAnimationDuration(movementDuration)
        cardView.frame = CGRectOffset(cardView.frame, 0, movement)
        UIView.commitAnimations()
    }
    
    //MARK: Set PlaceHoler
    func setPlaceHolder(txtField:UITextField,placeHolder:String)->Void {
        txtField.attributedPlaceholder = NSAttributedString.init(string: placeHolder, attributes: [NSFontAttributeName:txtField.font!,NSForegroundColorAttributeName:UIColor.placeHolderColor()])
    }
    
    ///Payment Collected Button Action
    @IBAction func paymentCollectedAction(sender: AnyObject) {
        //Setting the POST Data and Calling the API
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
                                     "remarks":"","nightfare_applicable":paymentDetailDic.objectForKey("nightfare_applicable")!,
                                     "eveningfare_applicable":paymentDetailDic.objectForKey("eveningfare_applicable")!,
                                     "eveningfare":paymentDetailDic.objectForKey("eveningfare")!,
                                     "nightfare":paymentDetailDic.objectForKey("nightfare")!,
                                     "waiting_time":paymentDetailDic.objectForKey("waiting_time")!,
                                     "waiting_cost":paymentDetailDic.objectForKey("waiting_cost")!,
                                     "creditcard_no":"",
                                     "creditcard_cvv":"",
                                     "expmonth":"",
                                     "expyear":"",
                                     "pay_mod_id":1,
                                     "minutes_traveled":paymentDetailDic.objectForKey("minutes_traveled")!,
                                     "minutes_fare":paymentDetailDic.objectForKey("minutes_fare")!,
                                     "promo_discount_per":paymentDetailDic.objectForKey("promo_discount_per")!]
        
        
        APIDownlaod.downloadDataFromServer("\(k_BaseURL)\(apiKey)/?lang=\(Extensions.getSelectedLanguage())&type=tripfare_update", bodyData: postData, method: "POST", key: "") { (resultDic) -> Void in
            
           // print("Response ---> \(resultDic)")
            
            if resultDic.objectForKey("status") as! Int == 1 || resultDic.objectForKey("status") as! Int == -1  {
                //Success
                self.paymentSuccessDic = resultDic.objectForKey("detail") as! NSDictionary
                
                //Resetting the Trip based data
                Extensions.setWaitingTime("00:00:00")
                Extensions.setDriverCurrentStatus(k_DriverFree)
                Extensions.setDriverInAcceptPage(false)
                Extensions.setAboveBelowSpeedTimerStatus(false)
                Extensions.setOngoingTripId("")
                
                //Setting the driver statistics
                Extensions.setDriverStatistics(resultDic.objectForKey("driver_statistics") as! NSDictionary)
                //Moving to Payment Complete Page
                //                self.moveToPaymentCompletePage()
                
                self.navigationController?.popToViewController(((self.navigationController?.viewControllers)! as NSArray).objectAtIndex(0) as! UIViewController, animated: true)
            } else {
                Extensions.showAlert("APP TITLE".localized(), messageString: resultDic.objectForKey("message") as! String)
            }
        }
    }
}
