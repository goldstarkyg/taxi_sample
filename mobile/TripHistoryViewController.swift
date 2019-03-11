//
//  TripHistoryViewController.swift
//  Taximobility Driver
//
//  Created by Gireesh on 2/26/16.
//  Copyright © 2016 Ndot. All rights reserved.
//

import UIKit
import GoogleMaps
import CoreLocation

class TripHistoryViewController: BaseViewController,UITableViewDataSource,UITableViewDelegate,CLLocationManagerDelegate {
    //MARK: Declaration Section
    let tripHistoryTbl:UITableView! = UITableView.init(frame: CGRectZero, style:UITableViewStyle.Grouped)
    
    @IBOutlet var pastBookingsBtn: UIButton!
    @IBOutlet var pendingBookingsBtn: UIButton!
    var overAllHistory:NSDictionary! = NSDictionary()
    var selectedHistoryArray:NSArray! = NSArray()
    var noDataFoundLbl:UILabel! = UILabel.init()
    var selectedSection = Int()
    var locationManager:CLLocationManager = CLLocationManager.init()
    var paymentDic:NSDictionary! = NSDictionary()
    
    override func viewWillAppear(animated: Bool) {
        if APP.isTripIsCancelled == true {
            APP.isTripIsCancelled = false
            self.callHistoryAPI()
        }
    }
    
    override func viewDidLoad() {
        super.viewDidLoad()
        
        // Setting page title and back button
        titleLbl.text = "Trip History".localized().uppercaseString
        backBtn.hidden = false
        backBtn.setImage(UIImage(named: "back"), forState: UIControlState.Normal)
        backBtn.addTarget(self, action:#selector(TripHistoryViewController.goBackFromTripHistory), forControlEvents:UIControlEvents.TouchUpInside)
        
        // Creating the segment
        var layoutDic = [String:AnyObject]()
        layoutDic["topLayout"] = self.topLayoutGuide
        
        //Pending/Past Booking Btns
        pendingBookingsBtn.translatesAutoresizingMaskIntoConstraints = false
        pendingBookingsBtn.backgroundColor = UIColor.applicationSubmitColor()
        pendingBookingsBtn.titleLabel?.font = Extensions.isIpadDevice() ? UIFont.setAppFont(19) : UIFont.setAppFont(15)
        pendingBookingsBtn.setTitle("Pending Bookings".localized(), forState: UIControlState.Normal)
        pendingBookingsBtn.tag = 0
        pendingBookingsBtn.titleLabel?.numberOfLines = 2;
        pendingBookingsBtn.setTitleColor(UIColor.whiteTextColor(), forState: UIControlState.Selected)
        pendingBookingsBtn.setTitleColor(UIColor.getTextFieldTextColor(), forState: UIControlState.Normal)
        pendingBookingsBtn.selected = true
        layoutDic["pendingBookingsBtn"] = pendingBookingsBtn
        pendingBookingsBtn.addTarget(self, action: #selector(TripHistoryViewController.tripHistorySegmentChanged(_:)), forControlEvents: UIControlEvents.TouchUpInside)
        
        pastBookingsBtn.translatesAutoresizingMaskIntoConstraints = false
        pastBookingsBtn.backgroundColor = UIColor.applicationHeaderColor()
        pastBookingsBtn.titleLabel?.font = Extensions.isIpadDevice() ? UIFont.setAppFont(19) : UIFont.setAppFont(15)
        pastBookingsBtn.setTitle("Past Bookings".localized(), forState: UIControlState.Normal)
        pastBookingsBtn.tag = 1
        pastBookingsBtn.setTitleColor(UIColor.whiteTextColor(), forState: UIControlState.Selected)
        pastBookingsBtn.setTitleColor(UIColor.getTextFieldTextColor(), forState: UIControlState.Normal)
        pastBookingsBtn.selected = false
        pastBookingsBtn.titleLabel?.numberOfLines = 2;
        layoutDic["pastBookingsBtn"] = pastBookingsBtn
        pastBookingsBtn.addTarget(self, action: #selector(TripHistoryViewController.tripHistorySegmentChanged(_:)), forControlEvents: UIControlEvents.TouchUpInside)
        
        // Creating the refresh button
        let refreshBtn = UIButton.init(type:UIButtonType.Custom)
        self.view.addSubview(refreshBtn)
        
        refreshBtn.translatesAutoresizingMaskIntoConstraints = false
        refreshBtn.setImage(UIImage(named:"refresh"), forState: UIControlState.Normal)
        refreshBtn.addTarget(self, action: #selector(TripHistoryViewController.refreshBtnTapped), forControlEvents: UIControlEvents.TouchUpInside)
        layoutDic["refreshBtn"] = refreshBtn
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(27)-[refreshBtn(27)]", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[refreshBtn(25)]-(12)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
        
        // Creating the Trip History Table
        tripHistoryTbl.translatesAutoresizingMaskIntoConstraints = false
        layoutDic["tripHistoryTbl"] = tripHistoryTbl
        
        self.view.addSubview(tripHistoryTbl)
        tripHistoryTbl.separatorStyle = UITableViewCellSeparatorStyle.None
        
        let tableYPosition = Extensions.isIpadDevice() ? 110 : 90
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[topLayout]-(tableYPosition)-[tripHistoryTbl]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["tableYPosition":tableYPosition], views: layoutDic))
        
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[tripHistoryTbl]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: layoutDic))
        
        tripHistoryTbl.delegate = self
        tripHistoryTbl.dataSource = self
        tripHistoryTbl.backgroundColor = UIColor.whiteColor()
        tripHistoryTbl.showsVerticalScrollIndicator = false
        self.automaticallyAdjustsScrollViewInsets = false
        // Creatingf the No Data Found Label
        self.view.addSubview(noDataFoundLbl)
        noDataFoundLbl.translatesAutoresizingMaskIntoConstraints = false
        layoutDic["noDataFoundLbl"] = noDataFoundLbl
        noDataFoundLbl.textAlignment = NSTextAlignment.Center
        noDataFoundLbl.textColor = UIColor.blackTextColor()
        noDataFoundLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(20) : UIFont.setAppFont(16)
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[noDataFoundLbl]-(0)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: layoutDic))
        
        self.view.addConstraint(NSLayoutConstraint(item: noDataFoundLbl, attribute: .CenterY, relatedBy: .Equal, toItem: self.view, attribute: .CenterY, multiplier: 1.0, constant: 0))
        noDataFoundLbl.addConstraint(NSLayoutConstraint(item: noDataFoundLbl, attribute: .Height, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: 30))
        
        noDataFoundLbl.text = "No Data Found".localized()
        
        // Calling the API function to get Data
        self.callHistoryAPI()
    }
    
    //MARK: History API call
    func callHistoryAPI()->Void {
        
        let postDataDic = ["driver_id":"\(Extensions.userLoginInfos().objectForKey("userid")!)",
                           "start":"0",
                           "limit":"10",
                           "device_type":"2"]
        
        
        [APIDownlaod .downloadDataFromServer("\(k_BaseURL)\(apiKey)/?lang=\(Extensions.getSelectedLanguage())&type=driver_booking_list", bodyData: postDataDic, method: "POST", key: "", completion: { (resultDic) -> Void in
            
            if resultDic.objectForKey("status") as! Int == 1 {
                // Success
                self.overAllHistory = resultDic.objectForKey("detail") as! NSDictionary
                
                if self.overAllHistory.count > 0 {
                    
                    //Loading the table with data based on the segment selected
                    self.selectedHistoryArray = self.pendingBookingsBtn.selected ? self.overAllHistory.objectForKey("pending_booking") as! NSArray : self.overAllHistory.objectForKey("past_booking") as! NSArray
                    
                    Extensions.startIndicator()
                    dispatch_async(dispatch_get_main_queue(), {
                        self.tripHistoryTbl.reloadData()
                        Extensions.stopIndicator()
                    })
                }
            } else {
                //UnSuccessful call,Showing alert
                Extensions.showAlert("APP TITLE".localized(), messageString:resultDic.objectForKey("message") as! String)
            }
        })]
    }
    
    //MARK:Segment Change
    func tripHistorySegmentChanged(btn:AnyObject)->Void {
        
        let selectedBtn = btn as! UIButton
        if selectedBtn.tag == 0 {
            pendingBookingsBtn.selected = true
            pastBookingsBtn.selected = false
            pendingBookingsBtn.backgroundColor = UIColor.applicationSubmitColor()
            pastBookingsBtn.backgroundColor = UIColor.applicationHeaderColor()
        } else {
            pendingBookingsBtn.selected = false
            pastBookingsBtn.selected = true
            pastBookingsBtn.backgroundColor = UIColor.applicationSubmitColor()
            pendingBookingsBtn.backgroundColor = UIColor.applicationHeaderColor()
        }
        
        if self.overAllHistory.count > 0 {
            // Loading the table with data based on segemnt selected
            self.selectedHistoryArray = self.pendingBookingsBtn.selected ? self.overAllHistory.objectForKey("pending_booking") as! NSArray : self.overAllHistory.objectForKey("past_booking") as! NSArray
            
            Extensions.startIndicator()
            dispatch_async(dispatch_get_main_queue(), {
                self.tripHistoryTbl.reloadData()
                Extensions.stopIndicator()
                
            })
        }
    }
    
    //MARK: Table View DataSource and Delegate
    func numberOfSectionsInTableView(tableView: UITableView) -> Int {
        
        if selectedHistoryArray.count == 0 {
            // If the array count is zero,displaying the
            //No data lbl
            noDataFoundLbl.hidden = false
            self.view.bringSubviewToFront(noDataFoundLbl)
        } else {
            noDataFoundLbl.hidden = true
            return selectedHistoryArray.count + 1
        }
        return selectedHistoryArray.count
    }
    
    func tableView(tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        // Each section contains 3 row
        if section == 0 {
            return 0;
        }
        return 3;
    }
    
    func tableView(tableView: UITableView, cellForRowAtIndexPath indexPath: NSIndexPath) -> UITableViewCell {
        
        var cell:UITableViewCell! = tableView.dequeueReusableCellWithIdentifier("history")
        
        if cell == nil {
            cell = UITableViewCell.init(style: UITableViewCellStyle.Default, reuseIdentifier:"history")
        }
        
        for subView in cell.subviews {
            subView.removeFromSuperview()
        }
        
        var cellLayoutDic = [String:AnyObject]()
        
        // Setting the image
        let historyImage = UIImageView.init()
        cell.addSubview(historyImage)
        cellLayoutDic["historyImage"] = historyImage
        cellLayoutDic["cell"] = cell
        
        historyImage.translatesAutoresizingMaskIntoConstraints = false
        
        let historyImageSize:CGFloat = Extensions.isIpadDevice() ? 22 : 16
        
        cell.addConstraint(NSLayoutConstraint(item: historyImage, attribute: .CenterY, relatedBy: .Equal, toItem: cell, attribute: .CenterY, multiplier:1.0, constant: 0))
        
        historyImage.addConstraint(NSLayoutConstraint(item: historyImage, attribute: .Height, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier:1.0, constant: historyImageSize))
        
        // Setting the Row Title
        let titleLbl = UILabel.init()
        titleLbl.translatesAutoresizingMaskIntoConstraints = false
        cell.addSubview(titleLbl)
        cellLayoutDic["titleLbl"] = titleLbl
        
        titleLbl.numberOfLines = 0
        titleLbl.lineBreakMode = NSLineBreakMode.ByWordWrapping
        titleLbl.textAlignment = Extensions.getSelectedLanguage() == "ar" ? NSTextAlignment.Right : NSTextAlignment.Left
        titleLbl.textColor = UIColor.blackTextColor()
        
        if indexPath.row == 0 {
            titleLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFontBold(17) : UIFont.setAppFontBold(13)
        } else {
            titleLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(13)
        }
        
        cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[titleLbl]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: cellLayoutDic))
        
        // Layout change based on the language
        if Extensions.getSelectedLanguage() == "ar" {
            cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[historyImage(historyImageSize)]-(10)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:["historyImageSize":historyImageSize], views: cellLayoutDic))
            cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(5)-[titleLbl]-(10)-[historyImage]", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: cellLayoutDic))
        } else {
            cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(10)-[historyImage(historyImageSize)]", options:NSLayoutFormatOptions(rawValue: 0), metrics:["historyImageSize":historyImageSize], views: cellLayoutDic))
            cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[historyImage]-(10)-[titleLbl]-(5)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views: cellLayoutDic))
        }
        
        // Datas baed on the row
        if indexPath.row == 0 {
            historyImage.image = Extensions.isIpadDevice() ? UIImage(named: "time_unfocus_iPad") : UIImage(named: "time_unfocus")
            titleLbl.text = Extensions.changeDateFormat("\(self.selectedHistoryArray.objectAtIndex(indexPath.section-1).objectForKey("pickup_time")!)")
        } else if indexPath.row == 1 {
            historyImage.hidden = true
            titleLbl.text = "\(self.selectedHistoryArray.objectAtIndex(indexPath.section-1).objectForKey("pickup_location")!)"
        } else if indexPath.row == 2 {
            historyImage.hidden = true
            
            titleLbl.text = "\(self.selectedHistoryArray.objectAtIndex(indexPath.section-1).objectForKey("drop_location")!)"
            if "\(self.selectedHistoryArray.objectAtIndex(indexPath.section-1).objectForKey("drop_location")!)" == "" {
                titleLbl.textColor = UIColor.placeHolderColor()
                titleLbl.text = "Drop Location is not specified".localized()
            }
        }
        
        switch indexPath.row {
        case 1:
            
            let pickUpImage = UIImageView.init()
            cellLayoutDic["pickUpImage"] = pickUpImage
            pickUpImage.translatesAutoresizingMaskIntoConstraints = false
            pickUpImage.image = Extensions.isIpadDevice() ? UIImage(named: "pickup12_iPad") : UIImage(named: "pickup1")
            cell.addSubview(pickUpImage)
            
            pickUpImage.addConstraint(NSLayoutConstraint.init(item: pickUpImage, attribute: .Height, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: 40))
            cell.addConstraint(NSLayoutConstraint.init(item: pickUpImage, attribute: .CenterY, relatedBy: .Equal, toItem: cell, attribute: .CenterY, multiplier: 1.0, constant: 0))
            
            let pickUpLine = UIView.init();
            pickUpLine.translatesAutoresizingMaskIntoConstraints = false
            pickUpLine.backgroundColor = UIColor(red: 90/255.0, green: 169/255.0, blue: 72/255.0, alpha: 1.0)
            cell.addSubview(pickUpLine)
            cellLayoutDic["pickUpLine"] = pickUpLine
            
            var pickupMetric = [String:AnyObject]()
            pickupMetric["xPositionImage"] = Extensions.isIpadDevice() ? 16 : 12
            pickupMetric["xPositionLine"] = Extensions.isIpadDevice() ? 20 : 16.5
            pickupMetric["lineWidth"] = Extensions.isIpadDevice() ? 1.5 : 1
            pickupMetric["lineLeading"] = Extensions.isIpadDevice() ? -17 : -19
            
            if Extensions.getSelectedLanguage() == "ar" {
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[pickUpImage(10)]-(xPositionImage)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: pickupMetric, views: cellLayoutDic))
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[pickUpLine(lineWidth)]-(xPositionLine)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: pickupMetric, views:cellLayoutDic ))
            } else {
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(xPositionImage)-[pickUpImage(10)]", options: NSLayoutFormatOptions(rawValue:0), metrics: pickupMetric, views: cellLayoutDic))
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(xPositionLine)-[pickUpLine(lineWidth)]", options: NSLayoutFormatOptions(rawValue:0), metrics: pickupMetric, views:cellLayoutDic ))
            }
            
            cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[pickUpImage]-(lineLeading)-[pickUpLine]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: pickupMetric, views:cellLayoutDic ))
            
            break
        case 2:
            let dropImage = UIImageView.init()
            cellLayoutDic["dropImage"] = dropImage
            dropImage.translatesAutoresizingMaskIntoConstraints = false
            dropImage.image = Extensions.isIpadDevice() ? UIImage(named: "drop12_iPad") : UIImage(named: "drop2")
            cell.addSubview(dropImage)
            
            dropImage.addConstraint(NSLayoutConstraint.init(item: dropImage, attribute: .Height, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: 40))
            cell.addConstraint(NSLayoutConstraint.init(item: dropImage, attribute: .CenterY, relatedBy: .Equal, toItem: cell, attribute: .CenterY, multiplier: 1.0, constant: 0))
            
            let dropLine = UIView.init();
            dropLine.translatesAutoresizingMaskIntoConstraints = false
            dropLine.backgroundColor = UIColor.applicationSubmitColor()
            cell.addSubview(dropLine)
            cellLayoutDic["dropLine"] = dropLine
            var dropMetric = [String:AnyObject]()
            dropMetric["xPositionImage"] = Extensions.isIpadDevice() ? 16 : 12
            dropMetric["xPositionLine"] = Extensions.isIpadDevice() ? 20 : 16.5
            dropMetric["lineWidth"] = Extensions.isIpadDevice() ? 1.5 : 1
            dropMetric["lineTrailing"] = Extensions.isIpadDevice() ? -17 : -19
            
            if Extensions.getSelectedLanguage() == "ar" {
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[dropImage(10)]-(xPositionImage)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: dropMetric, views: cellLayoutDic))
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[dropLine(lineWidth)]-(xPositionLine)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: dropMetric, views:cellLayoutDic ))
            } else {
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(xPositionImage)-[dropImage(10)]", options: NSLayoutFormatOptions(rawValue:0), metrics: dropMetric, views: cellLayoutDic))
                cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(xPositionLine)-[dropLine(lineWidth)]", options: NSLayoutFormatOptions(rawValue:0), metrics: dropMetric, views:cellLayoutDic ))
            }
            cell.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[dropLine]-(lineTrailing)-[dropImage]", options: NSLayoutFormatOptions(rawValue:0), metrics: dropMetric, views:cellLayoutDic ))
            
            
            break
        default: break
        }
        cell.selectionStyle = UITableViewCellSelectionStyle.None
        return cell
    }
    
    func tableView(tableView: UITableView, heightForRowAtIndexPath indexPath: NSIndexPath) -> CGFloat {
        // Here the height will be calculated dynamically
        
        if indexPath.section == 0 {
            return 0
        } else {
            var historyValue:String!
            
            if indexPath.row == 0 {
                historyValue = "\(self.selectedHistoryArray.objectAtIndex(indexPath.section-1).objectForKey("pickup_time")!)"
            }
            
            if indexPath.row == 1 {
                historyValue = "\(self.selectedHistoryArray.objectAtIndex(indexPath.section-1).objectForKey("pickup_location")!)"
            }
            
            if indexPath.row == 2 {
                historyValue = "\(self.selectedHistoryArray.objectAtIndex(indexPath.section-1).objectForKey("drop_location")!)"
                
            }
            
            let labelSize = rectForText(historyValue, font: Extensions.isIpadDevice() ? UIFont.setAppFont(17) : UIFont.setAppFont(13), maxSize: CGSizeMake(UIScreen.mainScreen().bounds.size.width-50,999))
            
            let labelHeight = labelSize.height
            
            if Extensions.isIpadDevice() {
                if indexPath.row == 0 {
                    return 40
                } else {
                    if labelHeight + 10 < 40 {
                        return 40
                    } else {
                        return labelHeight + 15
                    }
                }
            } else {
                if indexPath.row == 0 {
                    return 40
                } else {
                    if labelHeight + 10 < 40 {
                        return 40
                    } else {
                        return labelHeight + 15
                    }
                }
            }
        }
    }
    
    func tableView(tableView: UITableView, heightForHeaderInSection section: Int) -> CGFloat {
        if section == 0 {
            return 1
        }
        return Extensions.isIpadDevice() ? 30 : 30
    }
    
    func tableView(tableView: UITableView, heightForFooterInSection section: Int) -> CGFloat {
        if section == 0 {
            return 1
        }
        return 10
    }
    
    func tableView(tableView: UITableView, viewForHeaderInSection section: Int) -> UIView? {
        // Header title will be the passenger name
        
        if section == 0 {
            let headerView = UIView.init()
            headerView.backgroundColor = UIColor.whiteColor()
            headerView.frame = CGRectMake(0, 0, UIScreen.mainScreen().bounds.size.width,1)
            return headerView;
        } else {
            let headerView = UIView.init()
            var headerLayoutDic = [String:AnyObject]()
            headerLayoutDic["headerView"] = headerView
            
            headerView.frame = CGRectMake(0, 0, UIScreen.mainScreen().bounds.size.width,Extensions.isIpadDevice() ? 40 : 30)
            headerView.backgroundColor = UIColor.whiteColor()
            
            let passengerNameLbl = UILabel.init()
            headerLayoutDic["passengerNameLbl"] = passengerNameLbl
            passengerNameLbl.translatesAutoresizingMaskIntoConstraints = false
            passengerNameLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFontBold(17) : UIFont.setAppFontBold(13)
            passengerNameLbl.textAlignment = Extensions.getSelectedLanguage() == "ar" ? NSTextAlignment.Right : NSTextAlignment.Left
            passengerNameLbl.text = "\(selectedHistoryArray.objectAtIndex(section-1).objectForKey("passenger_name")!)"
            passengerNameLbl.textColor = UIColor.blackTextColor()
            headerView.addSubview(passengerNameLbl)
            
            headerView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[passengerNameLbl]-(0)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:headerLayoutDic))
            headerView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(10)-[passengerNameLbl]-(10)-|", options:NSLayoutFormatOptions(rawValue: 0), metrics:nil, views:headerLayoutDic))
            
            return headerView
        }
    }
    
    func tableView(tableView: UITableView, viewForFooterInSection section: Int) -> UIView? {
        if section != 0 {
            let footerView = UIView.init(frame: CGRectMake(0, 0, UIScreen.mainScreen().bounds.size.width,10))
            
            let separatorLbl = UILabel.init(frame: CGRectMake(0, 4.5, footerView.frame.size.width, 1))
            separatorLbl.backgroundColor = UIColor.textFieldUnderLineColor()
            footerView.addSubview(separatorLbl)
            return footerView
        }
        return nil
    }
    
    func tableView(tableView: UITableView, didSelectRowAtIndexPath indexPath: NSIndexPath) {
        
        
        
        // Moving to detail page on selection
        selectedSection = indexPath.section - 1
        
        if pastBookingsBtn.selected {
            self.performSegueWithIdentifier("toHistoryDetailSegue", sender:self)
        } else {
            
            if Int("\(self.selectedHistoryArray.objectAtIndex(selectedSection).objectForKey("travel_status")!)") == 9 ||
                Int("\(self.selectedHistoryArray.objectAtIndex(selectedSection).objectForKey("travel_status")!)") == 3 ||
                Int("\(self.selectedHistoryArray.objectAtIndex(selectedSection).objectForKey("travel_status")!)") == 2 {
                //Trip In Progress
                self.performSegueWithIdentifier("toTripInProgressSegue", sender:self)
            } else if Int("\(self.selectedHistoryArray.objectAtIndex(selectedSection).objectForKey("travel_status")!)") == 5 {
                //Trip Completed,payment pending
                
                self.locationManager.startUpdatingLocation()
                
                if self.locationManager.location?.coordinate.latitude != nil &&
                    self.locationManager.location?.coordinate.latitude != 0 {
                    
                    //Getting current address
                    let geoCoder = GMSGeocoder.init()
                    geoCoder.reverseGeocodeCoordinate(self.locationManager.location!.coordinate) { (response, error) -> Void in
                        
                        
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
                                        
                                        //    let infoDic = NSBundle.mainBundle().infoDictionary
                                        
                                        //                                        let version = infoDic!["CFBundleVersion"]
                                        
                                        //Prepare Post Data
                                        let postDic:NSDictionary = ["trip_id":(self.selectedHistoryArray.objectAtIndex(self.selectedSection).objectForKey("passengers_log_id")!),
                                                                    "drop_latitude":self.locationManager.location!.coordinate.latitude,
                                                                    "drop_longitude":self.locationManager.location!.coordinate.longitude,
                                                                    "distance":"0",
                                                                    "drop_location":convertedAddressLine1,
                                                                    "actual_distance":"",
                                                                    "waiting_hour":"\(self.selectedHistoryArray.objectAtIndex(self.selectedSection).objectForKey("waiting_hour")!)",
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
                                                
                                                self.performSelectorOnMainThread(#selector(TripHistoryViewController.goBackFromTripHistory), withObject: nil, waitUntilDone: true)
                                                Extensions.showAlert("APP TITLE".localized(), messageString: resultDic.objectForKey("message") as! String)
                                            }
                                        })
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    
    func rectForText(text: String, font: UIFont, maxSize: CGSize) -> CGSize {
        //This is a method to calculate the height
        let attrString = NSAttributedString.init(string: text, attributes: [NSFontAttributeName:font])
        let rect = attrString.boundingRectWithSize(maxSize, options: NSStringDrawingOptions.UsesLineFragmentOrigin, context: nil)
        let size = CGSizeMake(rect.size.width, rect.size.height)
        return size
    }
    
    //MARK: Refresh Button
    func refreshBtnTapped()->Void {
        self.callHistoryAPI()
    }
    
    func goBackFromTripHistory()->Void {
        self.navigationController?.popViewControllerAnimated(true)
    }
    
    override func prepareForSegue(segue: UIStoryboardSegue, sender: AnyObject?) {
        
        // Passing the required data to trip detail page
        if segue.identifier == "toHistoryDetailSegue" {
            
            let tripDetailVC:TripHistoryDetailsViewController = segue.destinationViewController as! TripHistoryDetailsViewController
            tripDetailVC.tripdetailsDictionary = selectedHistoryArray.objectAtIndex(selectedSection) as! NSDictionary
        } else if segue.identifier == "toPaymentSegue" {
            let paymentObj = segue.destinationViewController as! PaymentViewController
            paymentObj.paymentDetailDic = paymentDic
        } else {
            let InTripObject = segue.destinationViewController as? TripInProgressViewController
            InTripObject?.IsItFromAcceptPage = false
            Extensions.setOngoingTripId("\(selectedHistoryArray.objectAtIndex(selectedSection).objectForKey("passengers_log_id")!)")
        }
    }
}
