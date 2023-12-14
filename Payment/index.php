
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payments</title>
    <link rel="icon" type="image/png" href="https://dummy-tickets.com/images/DTFicon.png"/>
    <link href="https://dummy-tickets.com/images/DTFicon.png" rel="apple-touch-icon"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="payment.css?v=00.4">
    <link rel="stylesheet" href="styleRespons.css">
    <script src="../jquery.js?v=00.1"></script>
</head>

<body>
    

    <div class="container">
        <div class="header">
            <div class="header_logo">
                <a href="https://dummy-tickets.com/">
                <img src="Image/Logo.svg" alt="Logo">
                </a>
            </div>
        </div>
        <div class="section">
            <div class="otherinfo source">
                                <a class="reviewBox"  target="_blank">
                    <div class="RBHead">
                        <img src="Image/stars-5.svg" class="RBImage">
                        <span class="RBDate">Aug 25,2022</span>
                    </div>
                    <div class="RBBody">
                        <span class="RBText">
                            “Very easy, efficient and cheap! This will be my go to site and I highly recommend it.”
                        </span>
                    </div>
                    <div class="RBFooter">
                        <span class="RBName">By Sarah Mendoza</span>
                        <span class="RBLocation">MV</span>
                    </div>
                </a>                <a class="reviewBox"  target="_blank">
                    <div class="RBHead">
                        <img src="Image/stars-5.svg" class="RBImage">
                        <span class="RBDate">Aug 24,2022</span>
                    </div>
                    <div class="RBBody">
                        <span class="RBText">
                            “Great collaboration and fast”
                        </span>
                    </div>
                    <div class="RBFooter">
                        <span class="RBName">By Kamal El Mallakh</span>
                        <span class="RBLocation">EG</span>
                    </div>
                </a>                <a class="reviewBox"  target="_blank">
                    <div class="RBHead">
                        <img src="Image/stars-5.svg" class="RBImage">
                        <span class="RBDate">Aug 24,2022</span>
                    </div>
                    <div class="RBBody">
                        <span class="RBText">
                            “Very good service i book tickets from last 6month very good service thankew brdr for good service ❤️😘”
                        </span>
                    </div>
                    <div class="RBFooter">
                        <span class="RBName">By Harman singh</span>
                        <span class="RBLocation">IN</span>
                    </div>
                </a>                <a class="reviewBox"  target="_blank">
                    <div class="RBHead">
                        <img src="Image/stars-5.svg" class="RBImage">
                        <span class="RBDate">Aug 24,2022</span>
                    </div>
                    <div class="RBBody">
                        <span class="RBText">
                            “Always they are doing amazing work, i really appreciate it and recommend for dummy ticket and Tour packages...”
                        </span>
                    </div>
                    <div class="RBFooter">
                        <span class="RBName">By SANDEEP JANGID</span>
                        <span class="RBLocation">IN</span>
                    </div>
                </a>                <a class="reviewBox allreview"
                    target='_blank'>
                    Cheack All Reviews
                </a>
            </div>
            <div class="sourcesBox">
                <div class="allSource">
                    <div class="active_sourceType" data-scroll="0">
                        <div class="img_icon icon_twentytwo"></div>Indian</div>
                    <div data-scroll="1">
                        <div class="img_icon icon_twentythree"></div>Non-Indian</div>
                    <div data-scroll="2">
                        <div class="img_icon icon_twentyfour"></div>Bank</div>
                    <div class="source-indicator"></div>
                </div>
                                <div class="paymentSources noScrollBars">
                    <div class="source upibox">
                        <div class="qrCode">
                         <form action="index.php" method="POST">
                             <input type="hidden" name="txn_id" value="QH15Q" />
                             <input type="hidden" name="amount" value="295" />
                             <input type="hidden" name="firstname" value="ankit_196006@saitm.org" />
                             <input type="hidden" name="email" value="ankit_196006@saitm.org" />
                             <input type="hidden" name="phone" value="08228996072" />
                             <input type="hidden" name="name" value="Ankit kumar" />
                             <!--<button type="submit" class="button" name="onlinepayment"> Pay Online </button>-->
                         </form>
						 	
                            <!--<img src="QR_Images/upi657a04bbd8fa6.png" alt="UPI QR-Code" title="Scan QR-Code For UPI Payment">
                            <p>Scan QR-Code For UPI Payment</p>
                            <div class="inputBox">
                                <a href="upi://pay?pa=merchant1147108.augp@aubank&pn=CraftMyTourPackage&am=295&cu=INR&tn=QH15Q" class="button">PAY NOW</a>
                            </div>-->
							<div class="inputBox">
												
								<form action="https://securepay.sabpaisa.in/SabPaisa/sabPaisaInit?v=1"method="post">
									<input type="hidden" name="encData" value="V8QCJ43/uB4ZFUdj6aMrBOOwttB4yMeeQQb9+lraw2phNDSyljYwNSUluCnljGRQjQpyALrCpqOueoZM6TwIU8fqh2xFOOfdtG0jsYT0qZcPSgqtyVVaPQoxKPMA0iKZFiI55gnYePi/9Wa0ZSzBU+xspiLHGWhYw7cCOLEVr+3Pn2LtcdkLn1ihFe9FVafnaUf3i1R3IXD9/9xQvYU33zr9VanOKU1w2eMjv9Flz+wpu2lNwM3biGdgA2WFgucyp06iU41OJALsNEO5/7RA53odFhifC2eRKljdxNPJbQutapawux3BoalBd4JDQNhD0HiUuSlPaCj0mH/kc4JZM+Lorfo+9Hmv3sGJW3zSDY64RlqwNkz7TlUTr0OoNvjVAepwPcEgTqn7sTVJKbbSmeRfKTW3n9KC22cBWuHgG9URMKSRLqH4/8TAUxW9dQXmWtkqhT6A/VsImwY4WxFDPw==:UURJRTltN2QyMmk0NlB1MA==" id="frm1">
									<input type="hidden" name="clientCode" value ="CFMTP" id="frm2">
									<input type="submit" id="submitButton" class="button" value="PAY ONLINE"  name="submit">
								</form>
							</div>
                            <!--<div class="inputBox">-->
                            <!--    <a href="#" class="button confirm" data-confirmWith="UPI">Confirm Payment</a>-->
                            <!--</div>-->

                        </div>
                    </div>
                    <div class="source paypalbox">
                        <div class="qrCode">
							<!--<img src="QR_Images/arabic657a04bbd8fa9.png" alt="QR-Code"
                                title="Scan QR-Code For Payment">
                            <img src="QR_Images/paypal657a04bbd8fa8.png" alt="Paypal QR-Code"
                                title="Scan QR-Code For Paypal Payment">
                            <p>Scan QR-Code For Payment</p>-->
                            <div class="inputBox">
                                <div style="margin: 10px; text-align: center;"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=arsaifi.ak@gmail.com&item_name=Ankitkumar&item_number=QH15Q&amount=3.540&currency_code=USD" target="_blank" class="button">PAY USING PAYPAL</a></div>
							</div>
							<!--<div class="inputBox">
                                <div style="margin: 10px; text-align: center;">or</div>
                            </div>
							<div class="inputBox">
                            	<div style="margin: 10px; text-align: center;"><a href="https://dummy-tickets.com/payments/arabic/index.php?UniqCode=QH15Q&AmountInUSD=3.54" target="_blank" class="button">PAY NOW</a></div>
                            </div>-->
                            <!--<div class="inputBox">
                                <a href="#" class="button confirm" data-confirmWith="Paypal">Confirm Payment</a>
                            </div>-->

                        </div>
                    </div>
                    <div class="source bankbox">
                        <div class="bankDetals">
                            <span>Bank Name :</span>
                            <span>Yes Bank Limited</span>
                           <span>A/C Holder <br>Name :</span>
                            <span>Craft My Tour Package</span>
                            <span>Current A/C No.:</span>
                            <span>059763300001959</span>
                            <span>IFSC :</span>
                            <span>YESB0000597</span>
                            <span>Branch :</span>
                           <span>Cannaught Place, New Delhi-110001</span>
                           <span>Order ID :</span>
                            <span id="uniqCode">QH15Q</span>
                        </div>
                        <small class="smallText">Please put the order id <b>"QH15Q"</b> in Remarks or Message field while making the payment.</small>
                        <div class="inputBox">
                                <a class="button confirm" data-confirmWith="Bank">Confirm Payment</a>
                        </div>
                    </div>
                </div>
                <div class="confirmBox">
                    <div class="confirmMainBox">
                        <h1 style="margin-bottom:20px;">Confirm Your Payment!</h1>
                        <p>Click Confirm, only <b>after amount deducted</b> from your accont. We will manually verify your transaction. Are you sure?</p>
                        <a class='button confirmMail' data-confirmWith='' style="margin-top:20px;">Confirm Payment</a>
                        <a class='button cancel'>X</a>
                    </div>
                </div>
            </div>
            <div class="info source">
                <div class="infoBox">
                    <div class="currency" title="Switch Currency" data-currentCurrency="inr">₹ &#8644;&nbsp; $</div>
                    <span>Your Booking</span>
                    <div class="recivingDate"></div>

                    <div class="flightDetails">
                                            </div>
                    <span>Hotels</span>                    <div class="hotelDetails">
                        <span>Hazaribag - Fri 22,12,23 - Mon 25,12,23</span>                    </div>
                    <span>Passengers</span>
                    <div class="passangersDetails">
                        <span class="firstPassenger">1. Ankit kumar</span>
                                            </div>
                    <div class="email_number">ankit_196006@saitm.org | 08228996072</div>

                    <div class="totalDetails">
                        <span class="totalHeading">Fare Summary</span>

                        <span>Fare</span>
                        <span>
                            <div data-currency="inr">
                                <small>₹</small> <span>250.00</span>
                            </div>
                            <div data-currency="usd" style="display: none;">
                                <small>$</small> <span>3.00</span>
                            </div>
                        </span>

                        <span>GST</span>
                        <span>
                            <div data-currency="inr">
                                <small>₹</small> <span>45.00</span>
                            </div>
                            <div data-currency="usd" style="display: none;">
                                <small>$</small><span>0.54</span>
                            </div>
                        </span>

                        <span class="lastRaw"><strong>Total Due</strong></span>
                        <span class="lastRaw">
                            <strong>
                                <div data-currency="inr">
                                    <small>₹</small> <span>295.00</span>
                                </div>
                                <div data-currency="usd" style="display: none;">
                                    <small>$</small> <span>3.54</span>
                                </div>
                            </strong>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js?v=01.0"></script>
</body>

</html>