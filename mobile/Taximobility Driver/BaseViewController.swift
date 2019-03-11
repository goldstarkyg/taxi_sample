//
//  BaseViewController.swift
//  Taximobility Driver
//
//  Created by Gireesh on 2/19/16.
//  Copyright © 2016 Ndot. All rights reserved.
//

import UIKit

///Declaring the needed components to create a navigation view
class BaseViewController: UIViewController {
    var navigationView:UIView! = UIView()
    var backBtn:UIButton! = UIButton()
    var doneBtn:UIButton! = UIButton()
    var titleImageView:UIImageView! = UIImageView()
    var titleLbl:UILabel! = UILabel()
    var waitingTimeBtn:UIButton! = UIButton()
    var timerLbl:UILabel! = UILabel()
    var timerStageLbl:UILabel! = UILabel()
    var waitingTimer:NSTimer! = NSTimer()
    var titleHeightConstraint:NSLayoutConstraint! = NSLayoutConstraint()
    
    override func viewDidLayoutSubviews() {
        
    }
    
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
        self.navigationController?.navigationBarHidden = true
        //Creating needed components and setting frames using AutoLayout Visual format
        
        //Navigation View
        navigationView = UIView.init()
        self.view.addSubview(navigationView);
        navigationView.translatesAutoresizingMaskIntoConstraints = false
        navigationView.backgroundColor = UIColor.statusBarColor() //getApplicationSubmitColor() //.colorWithAlphaComponent(0.8)
        var visualFomatViewsDic = [String:AnyObject]()
        visualFomatViewsDic["view"] = self.view
        visualFomatViewsDic["navigationView"] = navigationView
        visualFomatViewsDic["topLayout"] = self.topLayoutGuide

        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(0)-[navigationView(64)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: visualFomatViewsDic))
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[navigationView]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: visualFomatViewsDic))

     //   let navigationBGImage:UIImage = UIImage(named: "Navigationbarbg")!
        let bgImageView = UIImageView()
        bgImageView.translatesAutoresizingMaskIntoConstraints = false
        bgImageView.image = UIImage(named: "Navigationbarbg")!
        navigationView.addSubview(bgImageView);
        visualFomatViewsDic["bgImageView"] = bgImageView

        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(20)-[bgImageView]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: visualFomatViewsDic))
        self.view.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[bgImageView]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: visualFomatViewsDic))

        // Navigation Title Label Created
        titleLbl = UILabel.init()
        navigationView.addSubview(titleLbl);
        visualFomatViewsDic["titleLbl"] = titleLbl
        titleLbl.translatesAutoresizingMaskIntoConstraints = false;
        titleLbl.font = Extensions.isIpadDevice() ? UIFont.setAppFont(22) : UIFont.setAppFontBold(17);
        titleLbl.textColor = UIColor.whiteTextColor()  //applicationHeaderTitleColor()
        titleLbl.textAlignment = NSTextAlignment.Center;
        
        navigationView.addConstraint(NSLayoutConstraint(item: titleLbl, attribute: .Top, relatedBy: .Equal, toItem: navigationView, attribute: .Top, multiplier: 1.0, constant: 20))
        titleHeightConstraint = NSLayoutConstraint(item: titleLbl, attribute: .Height, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: 44)
        titleLbl.addConstraint(titleHeightConstraint)
        navigationView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(50)-[titleLbl]-(50)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: visualFomatViewsDic))
        
        // Navigation Title Image Setting
        titleImageView  = UIImageView.init()
        navigationView.addSubview(titleImageView)
        titleImageView.translatesAutoresizingMaskIntoConstraints = false;
        visualFomatViewsDic["titleImageView"] = titleImageView
        visualFomatViewsDic["titleImageHeight"] = Extensions.isIpadDevice() ? 27 : 36
        visualFomatViewsDic["titleImageYPos"] = Extensions.isIpadDevice() ? 25 : 22
        navigationView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(titleImageYPos)-[titleImageView(titleImageHeight)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: visualFomatViewsDic, views: visualFomatViewsDic))
        navigationView.addConstraint(NSLayoutConstraint(item: titleImageView, attribute: .CenterX, relatedBy: .Equal, toItem: navigationView, attribute: .CenterX, multiplier: 1.0, constant: 0))
        titleImageView.addConstraint(NSLayoutConstraint(item: titleImageView, attribute: .Width, relatedBy: .Equal, toItem: nil, attribute: .NotAnAttribute, multiplier: 1.0, constant: Extensions.isIpadDevice() ? 217 : 80))
        
        //Separator For Navigation View
        let navigationViewUnderLine = UIView.init();
        navigationViewUnderLine.backgroundColor = UIColor.textFieldUnderLineColor();
        navigationViewUnderLine.translatesAutoresizingMaskIntoConstraints = false;
        navigationView.addSubview(navigationViewUnderLine);
        visualFomatViewsDic["navigationViewUnderLine"] = navigationViewUnderLine;
        navigationView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:[navigationViewUnderLine(0.8)]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: visualFomatViewsDic));
        navigationView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(0)-[navigationViewUnderLine]-(0)-|", options: NSLayoutFormatOptions(rawValue:0), metrics: nil, views: visualFomatViewsDic));
        
        // Navigation View Right side done button created
        doneBtn = UIButton.init(type: UIButtonType.Custom)
        navigationView.addSubview(doneBtn);
        doneBtn.translatesAutoresizingMaskIntoConstraints = false;
        doneBtn.setTitleColor(UIColor.applicationHeaderTitleColor(), forState: UIControlState.Normal)
        doneBtn.contentHorizontalAlignment = UIControlContentHorizontalAlignment.Center
        doneBtn.contentVerticalAlignment = UIControlContentVerticalAlignment.Center
        doneBtn.titleLabel?.font = UIFont.setAppFont(11)
        visualFomatViewsDic["doneBtn"] = doneBtn
        navigationView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(22)-[doneBtn(40)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: visualFomatViewsDic))
        navigationView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[doneBtn(50)]-(5)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: visualFomatViewsDic))
        
        // Navigation View Waiting Time Button Created
        waitingTimeBtn = UIButton.init(type: UIButtonType.Custom)
        navigationView.addSubview(waitingTimeBtn);
        waitingTimeBtn.translatesAutoresizingMaskIntoConstraints = false;
        waitingTimeBtn.setTitleColor(UIColor.applicationHeaderTitleColor(), forState: UIControlState.Normal)
        waitingTimeBtn.contentHorizontalAlignment = UIControlContentHorizontalAlignment.Center
        waitingTimeBtn.contentVerticalAlignment = UIControlContentVerticalAlignment.Center
        waitingTimeBtn.titleLabel?.font = UIFont.setAppFont(11)
        visualFomatViewsDic["waitingTimeBtn"] = waitingTimeBtn
        navigationView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(24)-[waitingTimeBtn(40)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: visualFomatViewsDic))
        navigationView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[waitingTimeBtn(50)]-(0)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: visualFomatViewsDic))
            
        // Navigation Timer value lable created
        timerStageLbl = UILabel.init()
        navigationView.addSubview(timerStageLbl)
        timerStageLbl.translatesAutoresizingMaskIntoConstraints = false
        timerStageLbl.font = UIFont.setAppFont(10)
        timerStageLbl.textColor = UIColor.applicationHeaderTitleColor()
        timerStageLbl.textAlignment = NSTextAlignment.Right

        // Navigation Timer value lable created
        timerLbl = UILabel.init()
        navigationView.addSubview(timerLbl)
        timerLbl.translatesAutoresizingMaskIntoConstraints = false
        timerLbl.font = UIFont.setAppFont(9)
        timerLbl.textColor = UIColor.applicationHeaderTitleColor()
        timerLbl.layer.cornerRadius = 5.0
        timerLbl.layer.borderWidth = 1.0
        timerLbl.layer.borderColor = UIColor.textFieldUnderLineColor().CGColor
        timerLbl.textAlignment = NSTextAlignment.Center
        timerLbl.hidden = true
        visualFomatViewsDic["timerLbl"] = timerLbl
        
        timerLbl.text = "00:00:00"
        
        navigationView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(38)-[timerLbl(20)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: visualFomatViewsDic))
        
        let stringsize:CGSize! = timerLbl.text!.sizeWithAttributes([NSFontAttributeName:(timerLbl.font)!])
        //or whatever font you're using
        
        let timerLblWidth = stringsize.width + 5
        
        timerLbl.frame = CGRectMake(0, 0, timerLblWidth,30)
        
        navigationView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[timerLbl(timerLblWidth)]-(12.5)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: ["timerLblWidth":timerLblWidth], views: visualFomatViewsDic))
                
        // Navigation Back button created
        backBtn = UIButton.init(type: UIButtonType.Custom)
        navigationView.addSubview(backBtn)
        backBtn.translatesAutoresizingMaskIntoConstraints = false
        backBtn.setTitleColor(UIColor.applicationHeaderTitleColor(), forState: UIControlState.Normal)
        backBtn.contentHorizontalAlignment = UIControlContentHorizontalAlignment.Left
        backBtn.titleLabel?.font = UIFont.setAppFont(11)
        visualFomatViewsDic["backBtn"] = backBtn
        navigationView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(22)-[backBtn(40)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: visualFomatViewsDic))
        navigationView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:|-(8)-[backBtn(40)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: visualFomatViewsDic))
        waitingTimeBtn.hidden = true;
        timerLbl.hidden = true;
        timerStageLbl.hidden = true;
        visualFomatViewsDic["timerStageLbl"] = timerStageLbl
        
        navigationView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("H:[timerStageLbl(85)]-(5)-|", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: visualFomatViewsDic))
       
        
        //Setting frame based on language
        if (Extensions .getSelectedLanguage() == "fr" ||
            Extensions .getSelectedLanguage() == "id" ||
            Extensions .getSelectedLanguage() == "ru" ||
            Extensions .getSelectedLanguage() == "tr" ||
            Extensions .getSelectedLanguage() == "ar") {
            navigationView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(5)-[timerStageLbl(40)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: visualFomatViewsDic))
            timerStageLbl.numberOfLines = 2;
            timerStageLbl.lineBreakMode = NSLineBreakMode.ByWordWrapping
            timerStageLbl.font = UIFont.setAppFont(10)
        } else {
            navigationView.addConstraints(NSLayoutConstraint.constraintsWithVisualFormat("V:|-(20)-[timerStageLbl(20)]", options: NSLayoutFormatOptions(rawValue: 0), metrics: nil, views: visualFomatViewsDic))
        }
        
        backBtn.exclusiveTouch = true
        waitingTimeBtn.exclusiveTouch = true
        doneBtn.exclusiveTouch = true
    }
    
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
  
}
