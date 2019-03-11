//
//  InviteFriendViewController.swift
//  Taximobility Driver
//
//  Created by Gireesh on 5/3/16.
//  Copyright © 2016 Ndot. All rights reserved.
//

import UIKit
import Social
import MessageUI
import FBSDKShareKit

class InviteFriendViewController: BaseViewController,UITableViewDelegate,UITableViewDataSource,MFMessageComposeViewControllerDelegate,MFMailComposeViewControllerDelegate {
    
    var profileImgView: UIImageView! = UIImageView.init()
    var descriptionLbl: UILabel! = UILabel.init()
    var walletAmountLbl: UILabel! = UILabel.init()
    var promoCodeLbl: UILabel! = UILabel.init()
    var earnLbl: UILabel! = UILabel.init()
    var shareTbl:UITableView!
    var shareString:String! = String()
    var fbShareString:String! = String()
    override func viewDidLoad() {
        super.viewDidLoad()
        
        titleLbl.text = "Invite Friends".localized().uppercaseString
        // Back  btn
        backBtn.hidden = false
        backBtn.setImage(UIImage(named:"back"), forState: UIControlState.Normal)
        backBtn.addTarget(self, action:#selector(InviteFriendViewController.goBackFromInvite), forControlEvents: UIControlEvents.TouchUpInside)
        
        //Profile Image
        let profileImageSize:CGFloat = Extensions.isIpadDevice() ? 100 : 70
        profileImgView.layer.cornerRadius = profileImageSize/2
        profileImgView.layer.borderWidth = 0.5
        profileImgView.layer.borderColor = UIColor.textFieldUnderLineColor().CGColor
        profileImgView.layer.masksToBounds = true
        profileImgView.translatesAutoresizingMaskIntoConstraints = false
        self.view.addSubview(profileImgView)
        
        var layoutDic = [String:AnyObject]()
        layoutDic["profileImgView"] = profileImgView
        layoutDic["topLayoutGuide"] = self.topLayoutGuide
        layoutDic["profileImageSize"] = profileImageSize
        layoutDic["profileYSpace"] = Extensions.isIpadDevice() ? 69 : 59
        
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[topLayoutGuide]-(profileYSpace)-[profileImgView(profileImageSize)]", options: NSLayoutFormatOptions(rawValue:0), metrics:layoutDic, views: layoutDic))
        self.view.addConstraint(NSLayoutConstraint.init(item: profileImgView, attribute: .CenterX, relatedBy: .Equal, toItem: self.view, attribute: .CenterX, multiplier: 1.0, constant: 0))
        profileImgView.addConstraint(NSLayoutConstraint.init(item: profileImgView, attribute: .Width, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: profileImageSize))
        
        //Background Image
        let bgImageView = UIImageView.init()
        bgImageView.translatesAutoresizingMaskIntoConstraints = false
        self.view.addSubview(bgImageView)
        bgImageView.image = Extensions.isIpadDevice() ? UIImage(named: "profileBg_iPad") : UIImage(named: "profileBg")
        layoutDic["bgImageView"] = bgImageView
        layoutDic["YPositionBg"] = -profileImageSize/2
        layoutDic["bgImageSize"] = Extensions.isIpadDevice() ? 216 : 149
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[profileImgView]-(YPositionBg)-[bgImageView(bgImageSize)]", options: NSLayoutFormatOptions(rawValue:0), metrics: layoutDic, views: layoutDic))
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[bgImageView]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
        
        self.view.bringSubviewToFront(profileImgView)
        
        //Indicator
        let indicator = UIActivityIndicatorView.init()
        indicator.translatesAutoresizingMaskIntoConstraints = false
        self.view.addSubview(indicator)
        indicator.color = UIColor.grayColor()
        layoutDic["indicator"] = indicator
        
        indicator.startAnimating()
        
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[profileImgView]-(YPosition)-[indicator(20)]", options: NSLayoutFormatOptions(rawValue:0), metrics: ["YPosition":Extensions.isIpadDevice() ? -60 : -45 ], views: layoutDic))
        
        self.view.addConstraint(NSLayoutConstraint.init(item: indicator, attribute: .CenterX, relatedBy: .Equal, toItem: self.view, attribute: .CenterX, multiplier: 1.0, constant: 0))
        indicator.addConstraint(NSLayoutConstraint.init(item: indicator, attribute: .Width, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: 20))
        
        let inviteDetailsBgView = UIView.init()
        inviteDetailsBgView.translatesAutoresizingMaskIntoConstraints = false
        self.view.addSubview(inviteDetailsBgView)
        layoutDic["inviteDetailsBgView"] = inviteDetailsBgView
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[profileImgView]-(1)-[inviteDetailsBgView(inviteBgHeight)]", options: NSLayoutFormatOptions(rawValue:0), metrics: ["inviteBgHeight":Extensions.isIpadDevice() ? 146 : 110], views: layoutDic))
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[inviteDetailsBgView]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
        inviteDetailsBgView.backgroundColor = UIColor.clearColor()
        
        //Setting the Labels
        descriptionLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(19) : UIFont.setAppFont(14)
        descriptionLbl.textAlignment = NSTextAlignment.Center
        descriptionLbl.textColor = UIColor.getTextFieldTextColor()
        descriptionLbl.text = "When a driver join with your code".localized()
        descriptionLbl.numberOfLines = 0
        descriptionLbl.lineBreakMode = NSLineBreakMode.ByWordWrapping
        inviteDetailsBgView.addSubview(descriptionLbl)
        layoutDic["descriptionLbl"] = descriptionLbl
        descriptionLbl.translatesAutoresizingMaskIntoConstraints = false
        inviteDetailsBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(8)-[descriptionLbl(30)]", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
        inviteDetailsBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(5)-[descriptionLbl]-(5)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
        
        let postDic = ["driver_id":"\(Extensions.userLoginInfos().objectForKey("userid")!)"]
        
        APIDownlaod.downloadDataFromServer("\(k_BaseURL)\(apiKey)/?lang=\(Extensions.getSelectedLanguage())&type=driver_invite_with_referral", bodyData: postDic, method: "POST", key: "Invite") { (resultDic) in
            
          //  print("Result-->\(resultDic)")
            
            if resultDic.objectForKey("status") as! Int == 1 {
                let profileImageURL:AnyObject! = "\(resultDic.valueForKeyPath("detail.profile_image")!)"
                
                if profileImageURL != nil {
                    // Checking image exist in the cache or not
                    if ImageCache.isImageExistOnCache(profileImageURL) {
                        // Exist
                        self.profileImgView.image = ImageCache.getImage(profileImageURL)
                        indicator.hidden = true
                    } else {
                        // Not Exist
                        let queue:dispatch_queue_t = dispatch_get_global_queue(DISPATCH_QUEUE_PRIORITY_DEFAULT,0)
                        
                        dispatch_async(queue, { () -> Void in
                            
                            let encodedUrl : String! = profileImageURL.stringByAddingPercentEncodingWithAllowedCharacters(NSCharacterSet.URLQueryAllowedCharacterSet())
                            
                            let imageData:NSData! = NSData.init(contentsOfURL:NSURL.init(string:encodedUrl)!)
                            
                            dispatch_async(dispatch_get_main_queue(), { () -> Void in
                                
                                if imageData != nil {
                                    if UIImage(data:imageData) != nil {
                                        //Storing the image in the cache
                                        ImageCache.storeImage(UIImage(data:imageData)!, url: profileImageURL)
                                        
                                        self.profileImgView.image = UIImage(data: imageData)
                                        
                                        indicator.hidden = true
                                    }
                                }
                            })
                        })
                    }
                }
                
                //SeparatorView
                
                let separatorView = UIView.init()
                separatorView.translatesAutoresizingMaskIntoConstraints = false
                inviteDetailsBgView.addSubview(separatorView)
                separatorView.backgroundColor = UIColor.textFieldUnderLineColor()
                layoutDic["separatorView"] = separatorView
                
                inviteDetailsBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[descriptionLbl]-(12)-[separatorView]-(10)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
                inviteDetailsBgView.addConstraint(NSLayoutConstraint.init(item: separatorView, attribute: .CenterX, relatedBy: .Equal, toItem:inviteDetailsBgView , attribute: .CenterX, multiplier: 1.0, constant: 0))
                separatorView.addConstraint(NSLayoutConstraint.init(item: separatorView, attribute: .Width, relatedBy: .Equal, toItem:nil , attribute: .NotAnAttribute, multiplier: 1.0, constant: 1))
                
                self.walletAmountLbl.textColor = UIColor.blackTextColor()
                self.walletAmountLbl.textAlignment = NSTextAlignment.Center
                self.walletAmountLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(38) : UIFont.setAppFont(24)
                self.walletAmountLbl.text = Extensions.appendCurrencyWithStringWithSpace("\(resultDic.valueForKeyPath("detail.referral_amount")!)")
                inviteDetailsBgView.addSubview(self.walletAmountLbl)
                layoutDic["walletAmountLbl"] = self.walletAmountLbl
                self.walletAmountLbl.translatesAutoresizingMaskIntoConstraints = false
                
                let youEarnWidth = self.rectForText("you Earn".localized() , font: UIFont.setAppFont(15), maxSize: CGSizeMake(150,25))
                
                var width = self.rectForText(self.walletAmountLbl.text!, font: self.walletAmountLbl.font, maxSize: CGSizeMake(150,25))
                
                if youEarnWidth > width {
                    width = youEarnWidth
                }
                
                layoutDic["WalletHeight"] = Extensions.isIpadDevice() ? 45 : 25
                layoutDic["WalletYPosition"] = Extensions.isIpadDevice() ? 20 : 15
                inviteDetailsBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[descriptionLbl]-(WalletYPosition)-[walletAmountLbl(WalletHeight)]", options: NSLayoutFormatOptions(rawValue:0), metrics: layoutDic, views: layoutDic))
                inviteDetailsBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[walletAmountLbl(width)]-(25)-[separatorView]", options: NSLayoutFormatOptions(rawValue:0), metrics: ["width":width], views: layoutDic))
                
                self.earnLbl.textColor = UIColor.placeHolderColor()
                self.earnLbl.textAlignment = NSTextAlignment.Left
                self.earnLbl.font = UIFont.setAppFont(15)
                self.earnLbl.text = "you Earn".localized()
                
                inviteDetailsBgView.addSubview(self.earnLbl)
                layoutDic["earnLbl"] = self.earnLbl
                self.earnLbl.translatesAutoresizingMaskIntoConstraints = false
                inviteDetailsBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[walletAmountLbl]-(-5)-[earnLbl(30)]", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
                inviteDetailsBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[earnLbl(width)]-(25)-[separatorView]", options: NSLayoutFormatOptions(rawValue:0), metrics: ["width":width], views: layoutDic))
                
                self.promoCodeLbl.textAlignment = NSTextAlignment.Left
                self.promoCodeLbl.textColor = UIColor.getTextFieldTextColor()
                self.promoCodeLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(26) : UIFont.setAppFont(16)
                inviteDetailsBgView.addSubview(self.promoCodeLbl)
                layoutDic["promoCodeLbl"] = self.promoCodeLbl
                self.promoCodeLbl.translatesAutoresizingMaskIntoConstraints = false
                layoutDic["PromoHeight"] = Extensions.isIpadDevice() ? 45 : 25
                layoutDic["PromoYPosition"] = Extensions.isIpadDevice() ? 20 : 15
                inviteDetailsBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[descriptionLbl]-(PromoYPosition)-[promoCodeLbl(PromoHeight)]", options: NSLayoutFormatOptions(rawValue:0), metrics: layoutDic, views: layoutDic))
                inviteDetailsBgView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[separatorView]-(30)-[promoCodeLbl]-(5)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
                self.promoCodeLbl.text = "\(resultDic.valueForKeyPath("detail.referral_code")!)"
                
                Extensions.stopIndicator()
                
                //HistoryBtn
                let historyBtn = UIButton.init()
                historyBtn.translatesAutoresizingMaskIntoConstraints = false
                self.view.addSubview(historyBtn)
                //                historyBtn.backgroundColor = UIColor.getApplicationSubmitColor()
                historyBtn.setBackgroundImage(UIImage(named: "AcceptButtonbg"), forState: .Normal)
                layoutDic["historyBtn"] = historyBtn
                self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[historyBtn(historyBtnBtnSize)]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: ["historyBtnBtnSize":Extensions.isIpadDevice() ? 60 : 40], views: layoutDic))
                self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[historyBtn(historyBtnWidth)]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: ["historyBtnWidth":UIScreen.mainScreen().bounds.size.width], views: layoutDic))
                historyBtn.setTitleColor(UIColor.whiteTextColor(), forState: UIControlState.Normal)
                historyBtn.setTitle("Wallet History".localized(), forState: UIControlState.Normal)
                historyBtn.titleLabel?.font = Extensions.isIpadDevice() ? UIFont.setButtonFont(20) : UIFont.setButtonFont(16)
                historyBtn.addTarget(self, action: #selector(InviteFriendViewController.viewHistoryBtnTapped), forControlEvents: UIControlEvents.TouchUpInside)
                
                //Share Table
                self.shareTbl = UITableView.init()
                self.shareTbl.translatesAutoresizingMaskIntoConstraints = false;
                self.view.addSubview(self.shareTbl)
                layoutDic["shareTbl"] = self.shareTbl
                self.shareTbl.separatorStyle = UITableViewCellSeparatorStyle.None
                self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[bgImageView]-(shareTblYPosition)-[shareTbl]-[historyBtn]", options: NSLayoutFormatOptions(rawValue:0), metrics: ["shareTblYPosition":Extensions.isIpadDevice() ? 30 : 20], views: layoutDic))
                self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[shareTbl]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: layoutDic))
                self.shareTbl.delegate = self
                self.shareTbl.dataSource = self
                let referralCodeString = "\(resultDic.valueForKeyPath("detail.referral_code")!)"
                let amountString = "\(resultDic.valueForKeyPath("detail.referral_amount")!)"
                
                self.shareString = "Excuse my brevity,Sign up with the referral code \(referralCodeString) and earn \(amountString).http://www.tqubetaxi.com";
                
                self.fbShareString = "Excuse my brevity,Sign up with the referral code \(referralCodeString) and earn \(amountString).";
            } else {
                Extensions.showAlert("APP TITLE".localized(), messageString: "\(resultDic.objectForKey("message")!)")
                indicator.hidden = true
            }
        }
    }
  
    func goBackFromInvite()->Void {
        self.navigationController?.popViewControllerAnimated(true)
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
    
    func tableView(tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        return 5
    }
   
    func tableView(tableView: UITableView, cellForRowAtIndexPath indexPath: NSIndexPath) -> UITableViewCell {
        var cell = tableView.dequeueReusableCellWithIdentifier("share")
        
        if cell == nil {
            cell = UITableViewCell.init(style: UITableViewCellStyle.Default, reuseIdentifier: "share")
        }
        
        //        for views in cell!.subviews
        //        {
        //            views.removeFromSuperview()
        //        }
        
        let ImageView:UIImageView = UIImageView.init()
        ImageView.translatesAutoresizingMaskIntoConstraints = false
        layoutDic["ImageView"] = ImageView
        cell?.addSubview(ImageView)
        
        cell?.addConstraint(NSLayoutConstraint.init(item: ImageView, attribute: .CenterY, relatedBy: .Equal, toItem: cell, attribute: .CenterY, multiplier: 1.0, constant: 0))
        ImageView.addConstraint(NSLayoutConstraint.init(item: ImageView, attribute: .Height, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: Extensions.isIpadDevice() ? 54 : 33))
        
        let titleLbl = UILabel.init()
        cell?.addSubview(titleLbl)
        titleLbl.translatesAutoresizingMaskIntoConstraints = false
        titleLbl.textAlignment = Extensions.getSelectedLanguage() == "ar" ? NSTextAlignment.Right : NSTextAlignment.Left
        layoutDic["titleLbl"] = titleLbl
        cell?.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[titleLbl]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics:nil, views: layoutDic))
        
        if Extensions.getSelectedLanguage() == "ar" {
            cell?.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[ImageView(imageViewSize)]-(15)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: ["imageViewSize":33], views: layoutDic))
            cell?.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(10)-[titleLbl]-(15)-[ImageView]", options: NSLayoutFormatOptions(rawValue:0), metrics:nil, views: layoutDic))
        } else {
            cell?.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(15)-[ImageView(imageViewSize)]", options: NSLayoutFormatOptions(rawValue:0), metrics: ["imageViewSize":Extensions.isIpadDevice() ? 53 : 33], views: layoutDic))
            cell?.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[ImageView]-(15)-[titleLbl]-(10)-|", options: NSLayoutFormatOptions(rawValue:0),metrics:nil, views: layoutDic))
        }
        
        
        
        titleLbl.textColor = UIColor.getTextFieldTextColor()
        titleLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(18) : UIFont.setAppFont(14)
        
        switch indexPath.row {
        case 0:
            ImageView.image = Extensions.isIpadDevice() ? UIImage(named: "shareFb_iPad") : UIImage(named: "shareFb")
            titleLbl.text = "Facebook".localized()
            break
        case 1:
            ImageView.image = Extensions.isIpadDevice() ? UIImage(named: "shareTwitter_iPad") : UIImage(named: "shareTwitter")
            titleLbl.text = "Twitter".localized()
            break
        case 2:
            ImageView.image = Extensions.isIpadDevice() ? UIImage(named: "shareEmail_iPad") : UIImage(named: "shareEmail")
            titleLbl.text = "Email".localized()
            break
        case 3:
            ImageView.image = Extensions.isIpadDevice() ? UIImage(named: "shareWht_iPad") : UIImage(named: "shareWht")
            titleLbl.text = "Whats App".localized()
            break
            
        case 4:
            ImageView.image = Extensions.isIpadDevice() ? UIImage(named: "ShareMsg_iPad") : UIImage(named: "shareMsg")
            titleLbl.text = "SMS".localized()
            break
            
        default:
            break
        }
        
        let separatorView = UIView.init()
        separatorView.translatesAutoresizingMaskIntoConstraints = false
        separatorView.backgroundColor = UIColor.textFieldUnderLineColor()
        cell?.addSubview(separatorView)
        cell?.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[separatorView(1)]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: ["separatorView":separatorView]))
        cell?.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[separatorView]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: ["separatorView":separatorView]))
        
        return cell!
    }
   
    func numberOfSectionsInTableView(tableView: UITableView) -> Int {
        return 1
    }
    
    func tableView(tableView: UITableView, heightForRowAtIndexPath indexPath: NSIndexPath) -> CGFloat {
        return Extensions.isIpadDevice() ? 70 : 50
    }
    
    func tableView(tableView: UITableView, heightForHeaderInSection section: Int) -> CGFloat {
        return Extensions.isIpadDevice() ? 60 : 40
    }
   
    func tableView(tableView: UITableView, viewForHeaderInSection section: Int) -> UIView? {
        let headerView = UIView.init(frame: CGRectMake(0, 0, UIScreen.mainScreen().bounds.size.width,Extensions.isIpadDevice() ? 60 : 40))
        headerView.backgroundColor = UIColor.applicationSubmitColor()
        
        let shareLbl = UILabel.init(frame: CGRectMake(15, 0, UIScreen.mainScreen().bounds.size.width - 30,headerView.frame.size.height ))
        shareLbl.text = "Share Via".localized()
        shareLbl.textAlignment = Extensions.getSelectedLanguage() == "ar" ? NSTextAlignment.Right : NSTextAlignment.Left
        shareLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(19) : UIFont.setAppFont(15)
        shareLbl.textColor = UIColor.whiteTextColor()
        headerView.addSubview(shareLbl)
        
        return headerView
        
    }
  
    func tableView(tableView: UITableView, didSelectRowAtIndexPath indexPath: NSIndexPath) {

        switch indexPath.row {
        case 0:
            self.fbShare()
            break
        case 1:
            self.twitterShare()
            break
        case 2:
            self.emailSgare()
            break
        case 3:
            self.whtsUpShare()
            break
        case 4:
            self.smsShare()
            break
        default:
            break;
        }
        
    }
    
    func fbShare()->Void {
        let contents = FBSDKShareLinkContent.init()
        contents.contentTitle = "APP NAME".localized()
        contents.contentDescription = fbShareString
        contents.contentURL = NSURL.init(string: "\(k_iTunesURL)")
        FBSDKShareDialog.showFromViewController(self, withContent: contents, delegate: nil)
    }
    
    func twitterShare()->Void {
        let twitter = SLComposeViewController.init(forServiceType: SLServiceTypeTwitter)
        twitter.setInitialText(fbShareString)
        twitter.addURL(NSURL.init(string: "\(k_iTunesURL)"))
        self.presentViewController(twitter, animated: true, completion: nil)
    }
    
    func smsShare()->Void {
        if !MFMessageComposeViewController.canSendText() {
            Extensions.showAlert("Error".localized(), messageString: "Your device doesn't support SMS!".localized())
        } else {
            let message = shareString
            let msgController =  MFMessageComposeViewController.init()
            msgController.messageComposeDelegate = self
            msgController.body = message
            self.presentViewController(msgController, animated: true, completion: nil)
        }
    }
    
    func emailSgare()->Void {
        let mailController = MFMailComposeViewController.init()
        
        if MFMailComposeViewController.canSendMail() {
            let emailTitle = "Tqube taxi Driver - Invite a Friend".localized()
            let messageBody = shareString
            mailController.mailComposeDelegate = self
            mailController.setSubject(emailTitle)
            mailController.setMessageBody(messageBody, isHTML: false)
            self.presentViewController(mailController, animated: true, completion: nil)
        }
    }
    
    func whtsUpShare()->Void {
        fbShareString = fbShareString.stringByReplacingOccurrencesOfString("&", withString: "and")
        let urlString = "whatsapp://send?text=\(fbShareString)"
        let whatUrl = NSURL.init(string: urlString.stringByAddingPercentEncodingWithAllowedCharacters(NSCharacterSet.URLQueryAllowedCharacterSet())!)
        
        if UIApplication.sharedApplication().canOpenURL(whatUrl!) {
            UIApplication.sharedApplication().openURL(whatUrl!)
        } else {
            Extensions.showAlert("APP TITLE".localized(), messageString:"Your device has no WhatsApp installed.".localized() )
        }
    }
    
    func messageComposeViewController(controller: MFMessageComposeViewController, didFinishWithResult result: MessageComposeResult) {
        self.dismissViewControllerAnimated(true, completion: nil)
    }
    
    func mailComposeController(controller: MFMailComposeViewController, didFinishWithResult result: MFMailComposeResult, error: NSError?) {
        
        switch result {
        case MFMailComposeResultCancelled:
            break
        case MFMailComposeResultSaved:
            break
        case MFMailComposeResultSent:
            break
        case MFMailComposeResultFailed:
            break
        default:
            break
        }
        
        self.dismissViewControllerAnimated(true, completion: nil)
    }
    
    //MARK: ViewHistoryBtn Tapped
    func viewHistoryBtnTapped()->Void {
      //  print("History Btn Tapped")
        self.performSegueWithIdentifier("toWalletHistorySegue", sender: self)
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
