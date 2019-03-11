//
//  PaymentCompleteViewController.swift
//  Taximobility Driver
//
//  Created by Gireesh on 3/5/16.
//  Copyright © 2016 Ndot. All rights reserved.
//

import UIKit

class PaymentCompleteViewController: BaseViewController
{
    
    //MARK: Declaration Section
    var paymentCompleteDic:NSDictionary!

    @IBOutlet var backgroundImage: UIImageView!
    @IBOutlet var cashImage: UIImageView!
    @IBOutlet var backToHomeBtn: UIButton!
    @IBOutlet var tripAmountLbl: UILabel!
    @IBOutlet var jobReferenceLbl: UILabel!
    //MARK: View Did Load
    override func viewDidLoad()
    {
        
        super.viewDidLoad()
        
        //Setting Title
        self.titleLbl.text = "Trip Completed".localized().uppercaseString
        
        //Reset Trip based details
        Extensions.setAboveBelowSpeedTimerStatus(false)
        Extensions.setDriverCurrentStatus(k_DriverFree)
        Extensions.setOngoingTripId("")
        
        //Setting Images
        
        cashImage.image = Extensions.isIpadDevice() ? UIImage(named: "eReceiptCash_iPad") : UIImage(named: "eReceiptCash")
        backgroundImage.image = Extensions.isIpadDevice() ? UIImage(named: "ride_done_popup_iPad") : UIImage(named: "ride_done_popup")
        
        //Setting the E-Reciept element attributes
        
        tripAmountLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(58) : UIFont.setAppFont(32)
        tripAmountLbl.textColor = UIColor.blackTextColor()
        
        tripAmountLbl.text = Extensions.appendCurrencyWithStringWithSpace(String(format: "%0.2f",Float("\(paymentCompleteDic.objectForKey("fare")!)")!))
        
        jobReferenceLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(23) : UIFont.setAppFont(14)
        jobReferenceLbl.textColor = UIColor.getTextFieldTextColor()
        jobReferenceLbl.text = String(format: "Trip Id : %@".localized(),"\(paymentCompleteDic.objectForKey("trip_id")!)")
        //jobReferenceLbl.text = "Trip Id : 2018"
        
        // Back to home button
        backToHomeBtn.backgroundColor = UIColor.applicationSubmitColor()
        backToHomeBtn.setTitleColor(UIColor.whiteTextColor(), forState: UIControlState.Normal)
        backToHomeBtn.setTitle("Back To Home".localized(), forState: UIControlState.Normal)
        backToHomeBtn.addTarget(self, action: #selector(PaymentCompleteViewController.moveToHome), forControlEvents: UIControlEvents.TouchUpInside)
        backToHomeBtn.titleLabel?.font = Extensions.isIpadDevice() ? UIFont.setAppFont(20) : UIFont.setAppFont(16)
        
    }
    //MARK: Move Back
    func moveToHome()->Void {
        self.navigationController?.popToViewController(((self.navigationController?.viewControllers)! as NSArray).objectAtIndex(0) as! UIViewController, animated: true)
    }
}
