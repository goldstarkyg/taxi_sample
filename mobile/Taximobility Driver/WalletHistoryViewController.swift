//
//  WalletHistoryViewController.swift
//  Taximobility Driver
//
//  Created by Gireesh on 5/10/16.
//  Copyright © 2016 Ndot. All rights reserved.
//

import UIKit

class WalletHistoryViewController: BaseViewController,UITableViewDelegate,UITableViewDataSource {
   
    var historyTbl:UITableView! = UITableView()
    var historyArray:NSArray! = NSArray()
    let noDataFoundLbl:UILabel! = UILabel.init()
    
    override func viewDidLoad() {
        super.viewDidLoad()
        titleLbl.text = "Wallet History".localized().uppercaseString
       
        // Back btn
        backBtn.hidden = false
        backBtn.setImage(UIImage(named:"back"), forState: UIControlState.Normal)
        backBtn.addTarget(self, action:#selector(WalletHistoryViewController.goBackFromWallet), forControlEvents: UIControlEvents.TouchUpInside)
        historyTbl  = UITableView.init(frame: CGRectZero, style: UITableViewStyle.Plain)
        var layoutDic = [String:AnyObject]()
      
        //BackToHomeBtn
        let backtoHomeBtn = UIButton.init()
        backtoHomeBtn.translatesAutoresizingMaskIntoConstraints = false
        self.view.addSubview(backtoHomeBtn)
        layoutDic["backtoHomeBtn"] = backtoHomeBtn
        backtoHomeBtn.backgroundColor = UIColor.applicationSubmitColor()
        backtoHomeBtn.setTitle("Back To Home".localized(), forState: UIControlState.Normal)
        backtoHomeBtn.setTitleColor(UIColor.whiteTextColor(), forState: UIControlState.Normal)
        backtoHomeBtn.titleLabel?.font = Extensions.isIpadDevice() ? UIFont.setAppFont(20) : UIFont.setAppFont(16)
        backtoHomeBtn.addTarget(self, action: #selector(WalletHistoryViewController.goBackToHome), forControlEvents: UIControlEvents.TouchUpInside)
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[backtoHomeBtn(Height)]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: ["Height":Extensions.isIpadDevice() ? 60 : 40], views: layoutDic))
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[backtoHomeBtn]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
        
        //History Tbl
        historyTbl.translatesAutoresizingMaskIntoConstraints = false
        self.view.addSubview(historyTbl)
        layoutDic["historyTbl"] = historyTbl
        layoutDic["topLayout"] = self.topLayoutGuide
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[topLayout]-(44)-[historyTbl]-(0)-[backtoHomeBtn]", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[historyTbl]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
        historyTbl.delegate = self
        historyTbl.dataSource = self
        historyTbl.separatorStyle = UITableViewCellSeparatorStyle.None
        self.automaticallyAdjustsScrollViewInsets = false
       
        //NoDataLbl
        layoutDic["noDataFoundLbl"] = noDataFoundLbl
        noDataFoundLbl.translatesAutoresizingMaskIntoConstraints = false
        self.view.addSubview(noDataFoundLbl)
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[noDataFoundLbl]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
        self.view.addConstraint(NSLayoutConstraint.init(item: noDataFoundLbl, attribute: .CenterY, relatedBy: .Equal, toItem: self.view, attribute: .CenterY, multiplier: 1.0, constant: 0))
        noDataFoundLbl.addConstraint(NSLayoutConstraint.init(item: noDataFoundLbl, attribute: .Height, relatedBy: .Equal, toItem: nil, attribute:.NotAnAttribute, multiplier: 1.0, constant: 30))
        noDataFoundLbl.textAlignment = NSTextAlignment.Center
        noDataFoundLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(19) : UIFont.setAppFont(15)
        noDataFoundLbl.textColor = UIColor.blackTextColor()
        noDataFoundLbl.hidden = true
        noDataFoundLbl.text = "No Data Found".localized()
        
        self.callHistoryApi()
    }
   
    //MARK: API Call
    func callHistoryApi()->Void {
        let postDic = ["driver_id":"\(Extensions.userLoginInfos().objectForKey("userid")!)"]
        
        APIDownlaod.downloadDataFromServer("\(k_BaseURL)\(apiKey)/?lang=\(Extensions.getSelectedLanguage())&type=driver_wallet", bodyData: postDic, method:"POST", key:"") { (resultDic) -> Void in
            
            if resultDic.objectForKey("status") as! Int == 1 {
              //  print("Result Dic--->\(resultDic)")
                self.historyArray = resultDic.objectForKey("request_lists") as! NSArray
                self.historyTbl.reloadData()
            } else {
                Extensions.showAlert("APP TITLE".localized(), messageString: resultDic.objectForKey("message") as! String)
            }
        }
    }
    
    //MARK:TableView Delagates
    func tableView(tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        if historyArray.count == 0 {
            historyTbl.hidden = true
            noDataFoundLbl.hidden = false
        } else {
            historyTbl.hidden = false
            noDataFoundLbl.hidden = true
        }
        return historyArray.count
    }
    
    func tableView(tableView: UITableView, cellForRowAtIndexPath indexPath: NSIndexPath) -> UITableViewCell {
        var cell = tableView.dequeueReusableCellWithIdentifier("history")
        
        if cell == nil {
            
            cell = UITableViewCell.init(style: UITableViewCellStyle.Default, reuseIdentifier: "history")
            let viewSize = UIScreen.mainScreen().bounds.size.width/3
            var startX:CGFloat = 0
            
            for i in 0..<3 {
                let titleLbl = UILabel.init(frame: CGRectMake(startX, 0,viewSize, Extensions.isIpadDevice() ? 50 : 50))
                titleLbl.textAlignment = NSTextAlignment.Center
                titleLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(16) : UIFont.setAppFont(13)
                titleLbl.textColor = UIColor.placeHolderColor()
                titleLbl.numberOfLines = 0
                titleLbl.lineBreakMode = NSLineBreakMode.ByWordWrapping
                
                if i == 0 {
                    titleLbl.text = Extensions.appendCurrencyWithStringWithSpace("\(historyArray.objectAtIndex(indexPath.row).objectForKey("wallet_request_amount")!)")
                } else if i == 1 {
                    titleLbl.text = Extensions.changeDateFormat("\(historyArray.objectAtIndex(indexPath.row).objectForKey("wallet_request_date")!)")
                } else if i == 2 {
                    titleLbl.text = "\(historyArray.objectAtIndex(indexPath.row).objectForKey("status")!)"
                    
                    if "\(historyArray.objectAtIndex(indexPath.row).objectForKey("status")!)" == "Disapproved".localized() {
                        titleLbl.textColor = UIColor.redColor()
                    } else if "\(historyArray.objectAtIndex(indexPath.row).objectForKey("status")!)" == "Pending" {
                        titleLbl.textColor = UIColor.orangeColor()
                    } else if "\(historyArray.objectAtIndex(indexPath.row).objectForKey("status")!)" == "Approved" {
                        titleLbl.textColor = UIColor.greenColor()
                    }
                }
                cell!.addSubview(titleLbl)
                startX = startX + viewSize
            }
            
            if indexPath.row == historyArray.count - 1 {
                let separatorLine = UIView.init()
                layoutDic["separatorLine"] = separatorLine
                cell?.addSubview(separatorLine)
                separatorLine.translatesAutoresizingMaskIntoConstraints = false
                cell?.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[separatorLine(1)]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
                cell?.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[separatorLine]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
                separatorLine.backgroundColor = UIColor(red: 206/255.0, green: 206/255.0, blue: 206/255.0, alpha: 0.6)
            }
        }
        cell?.selectionStyle = UITableViewCellSelectionStyle.None
        
        if indexPath.row % 2 == 0 {
            cell?.backgroundColor = UIColor.whiteColor()
        } else {
            cell?.backgroundColor = UIColor.cellGrayColor()
        }
        return cell!
    }
    
    func numberOfSectionsInTableView(tableView: UITableView) -> Int {
        return 1
    }
    
    func tableView(tableView: UITableView, heightForRowAtIndexPath indexPath: NSIndexPath) -> CGFloat {
        return 50
    }
    
    func tableView(tableView: UITableView, heightForHeaderInSection section: Int) -> CGFloat {
        return 50
    }
    
    func tableView(tableView: UITableView, viewForHeaderInSection section: Int) -> UIView? {
        let headerViews = UIView.init()
        headerViews.frame = CGRectMake(0, 0, UIScreen.mainScreen().bounds.size.width,Extensions.isIpadDevice() ? 50 : 50)
        let viewSize = headerViews.frame.size.width/3
        var startX:CGFloat = 0
        
        for i in 0..<3 {
            let titleLbl = UILabel.init(frame: CGRectMake(startX, 0,viewSize, headerViews.frame.size.height))
            titleLbl.textAlignment = NSTextAlignment.Center
            titleLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFontBold(18) : UIFont.setAppFontBold(14)
            titleLbl.textColor = UIColor.blackTextColor()
            titleLbl.numberOfLines = 0
            titleLbl.lineBreakMode = NSLineBreakMode.ByWordWrapping
            
            if i == 0 {
                titleLbl.text = "Requested Amount".localized()
            } else if i == 1 {
                titleLbl.text = "Requested Date".localized()
            } else if i == 2 {
                titleLbl.text = "Status".localized()
            }
            
            headerViews.addSubview(titleLbl)
            startX = startX + viewSize
        }
        return headerViews
    }
    
    func goBackFromWallet()->Void {
        self.navigationController?.popViewControllerAnimated(true)
    }
    
    func goBackToHome()->Void {
        self.navigationController?.popToViewController(((self.navigationController?.viewControllers)! as NSArray).objectAtIndex(0) as! UIViewController, animated: true)
    }
    
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
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
