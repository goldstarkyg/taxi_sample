//
//  Header.swift
//  Taximobility Driver
//
//  Created by Gireesh on 2/19/16.
//  Copyright © 2016 Ndot. All rights reserved.
//

import Foundation

//MARK: Common variables
//Pointing Manu system

// live
public let k_BaseURL  = "https://www.taxitaxi.co.in/mobileapi117/index/"

public let apiKey = "bnRheGlfdGF4aXRheGkyMDE2"
public let k_DriverInfo = "kDRIVERLOGININFO"
public let k_DidDriverLogin = "kDIDDRIVERLOGIN"
public let k_TripDetails = "kTRIPDETAILS"

public let applicationID = "1160833476"
public let applicationName = "TaxiTaxi-Driver"

//Language keys and names
public let k_Tamil = "தமிழ்"
public let k_TamilKey = "ta"

public let k_English = "English"
public let k_EnglishKey = "en"

//Driver Status
public let k_DriverFree = "F"
public let k_DriverActive = "A"
public let k_DriverBusy = "B"

//Driver Shift status
public let k_DriverShiftIn = "IN"
public let k_DriverShiftOut = "OUT"

public let k_URLTimeOut:NSTimeInterval = 120

public let k_iTunesURL = "https://itunes.apple.com/us/app/driver-taximobility/id1029923263?mt=8"

/*
 Driver Location History API Status
 
 locationUpdatedSuccessFully = 1,
 newTripRequestReceived = 5,
 tripCancelledByPassenger = 7,
 tripCancelledByDispatcher = 10,
 gettingSmsFromPassenger = 11,
 driverBlockedOrLogOuted = 15,
 tripCompletedByDispatcher = 18
 */

/*
 travel_status
 0 - Not Completed,
 1- Completed,
 2 - In progress,
 3 - Start To Pickup,
 4 - Cancel by Passenger,
 5 - Waiting for Payment,
 6 - Missed,
 7 - Dispatched,
 8 - Cancelled,
 9 - Confirmed,
 10 - Reassign
 */


    