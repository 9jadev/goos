﻿<?php
session_start();

if(isset($_SESSION['user_trackid'])!="") {
    header("Location: tracking.php");
}

include_once 'dbconnect.php';

//check if form is submitted
if (isset($_POST['track'])) {

    $trackid = mysqli_real_escape_string($con, $_POST['trackid']);
    $result = mysqli_query($con, "SELECT * FROM client WHERE trackid = '" . $trackid. "'");

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['user_trackid'] = $row['trackid'];
        $_SESSION['user_date'] = $row['date'];
        $_SESSION['user_delivery'] = $row['delivery'];
        $_SESSION['user_type'] = $row['type'];

        header("Location: tracking.php");
    } else {
        $errormsg = "Invalid tracking id";
    }
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="description" content="Track / Trace  -">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Track / Trace  -  Trans Cargo Ltd.  </title>
		<style type="text/css">
		.chat-cmodule-header, .chat-cmodule-header, .chat-cmodule-widget-head{
	opacity: 0.7 !important;
	}
  .goog-te-combo, .goog-te-banner *, .goog-te-ftab *, .goog-te-menu *, .goog-te-menu2 *, .goog-te-balloon *{
      font-family: 'Montserrat', sans-serif !important ;
      text-decoration: none !important;
      font-size: 11pt !important;
      color: #666;
      display: none !important;
  }
  .goog-te-banner-frame{
      display: none !important;
  }
  .goog-te-gadget-simple {
      font-family: 'Montserrat', sans-serif !important ;
      font-size: 9pt !important;
      background-color: #333 !important;
      color: #626262 !important;
      -webkit-box-shadow: inset 0 0 2px 2px rgba(0,0,0,0.02) !important;
      box-shadow: inset 0 0 2px 2px rgba(0,0,0,0.02) !important;
      padding-top: 0px !important;
      padding-bottom: 0px !important;
      border-bottom: 0px !important;
      border-top: 0px !important;
      border-left: 0px !important;
      border-right: 0px !important;
  }
   .goog-te-gadget img{
       background-image: url("https://us.cornerstonelog.info/icons8-google-24.png") !important;
       background-position: 0px 0px !important;
       background-size: 19px !important;
       background-repeat: no-repeat !important;
   }
   .goog-te-gadget-simple .goog-te-menu-value{
       color: #f9f9f9 !important;
       font-size: 13px !important;
       font-weight: 700;
   }
   .goog-te-combo, .goog-te-banner *, .goog-te-ftab *, .goog-te-menu *, .goog-te-menu2 *, .goog-te-balloon *{
      font-family: 'Montserrat', sans-serif !important ;
      font-size: 10pt !important;
      text-decoration: none !important;
   }
   .goog-te-menu2{
      font-family: 'Montserrat', sans-serif !important ;
      font-size: 9pt !important;
      border: 1px solid #ffffff !important;
      background-color: #ff9600 !important;
      color: #fff !important;
   }
   .goog-te-menu-frame{
      -webkit-box-shadow: none !important;
      box-shadow: -1px 2px 20px 0px #4444447a !important;
   }
   .goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div {
      font-family: 'Montserrat', sans-serif !important ;
      border: 1px solid #ffffff !important;
      background-color: #ff9600 !important;
      color: #fff !important;
   }
   a:hover {
       text-decoration: none !important;
   }
   span[style] {
       color: #f9f9f9 !important;
   }
   body[style] {
       top: 0px !important;
   }
   iframe[style] {
      font-family: 'Montserrat', sans-serif !important ;
      border: 1px solid #ffffff !important;
      background-color: #ff9600 !important;
      color: #fff !important;
   }
   footer{
       border-bottom: 0px !important;
   }
  .ns-growl {
	top: 336px !important;
	left: 1000px !important;
	max-width: 330px;
	border-radius: 5px;
  }
  .ns-effect-genie {
	top: 336px !important;
	left: 1000px !important;
	background: #3c3c3c;
	opacity: 0.9;
    filter: alpha(opacity=30);
	box-shadow: 0 7px 6px rgba(0,0,0,0.1), 2px 4px 6px rgba(0,0,0,0.1);
   }
  .ns-effect-genie:hover {
	top: 336px !important;
	left: 1000px !important;
	background: #363636;
	opacity: 1;
    filter: alpha(opacity=40);
	box-shadow: 0 7px 6px rgba(0,0,0,0.1), 2px 4px 6px rgba(0,0,0,0.1);
  }
	.modalDialog:background {
		-webkit-filter: blur(2px);
    -moz-filter: blur(2px);
    -o-filter: blur(2px);
    -ms-filter: blur(2px);
    filter: blur(2px);
		
		-webkit-filter: blur(10px);     
    filter: blur(10px);
	} 
	
	button {
	border: none;
	padding: 0.6em 1.2em;
	background: #09397a;
	color: #fff;
	font-family: 'Lato', Calibri, Arial, sans-serif;
	font-size: 1em;
	letter-spacing: 1px;
	text-transform: uppercase;
	cursor: pointer;
	display: inline-block;
	margin: 3px 2px;
	border-radius: 2px;
    }

    button:hover {
	background: #849cbc;
   }

	.md-content {
	color: #333333;
	background: #fff;
	position: relative;
	border-radius: 0px;
	margin: 0 auto;
    }

    .md-content h3 {
	color: #fff;
	margin: 0;
	padding: 0.4em;
	text-align: center;
	font-size: 2.4em;
	font-weight: 300;
	opacity: 10;
	background: #ff9600;
	border-radius: 0px 0px 0px 0px;
    }

   .md-content > div {
	padding: 15px 40px 30px;
	margin: 0;
	font-weight: 300;
	font-size: 1.15em;
    }

   .md-content > div p {
	margin: 0;
	padding: 10px 0;
    }

   .md-content > div ul {
	margin: 0;
	padding: 0 0 30px 20px;
    }

   .md-content > div ul li {
	padding: 5px 0;
   }

   .md-content button {
	display: block;
	margin: 0 auto;
	font-size: 0.8em;
   }

	
	.modalDialog {
		position: fixed;
		font-family: Arial, Helvetica, sans-serif;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background: rgba(1,1,1,0.8) ;
		z-index: 99999;
		opacity:0;
		-webkit-transition: opacity 400ms ease-in;
		-moz-transition: opacity 400ms ease-in;
		transition: opacity 400ms ease-in;
		pointer-events: none;
		
		
	}
	.modalDialog:background {
		-webkit-filter: blur(10px);     
    filter: blur(10px);
		
		
	}
	
	
	<!--stopoper {
    -webkit-transform: translateY(0);
	-moz-transform: translateY(0);
	-ms-transform: translateY(0);
	transform: translateY(0);
	opacity: 1;
	-webkit-transition: all 0.5s 0.1s;
	-moz-transition: all 0.5s 0.1s;
	transition: all 0.5s 0.1s;
    }-->

	.modalDialog:target {
		opacity:20;
		pointer-events: auto;
	}

	.modalDialog > div {
		width: 600px;
		position: relative;
		margin: 10% auto;
		padding: 5px 20px 13px 20px;
		border-radius: 0px;
		
	}

	.close {
		-webkit-border-radius: 12px;
		-moz-border-radius: 12px;
		border-radius: 12px;
		-moz-box-shadow: 1px 1px 3px #000;
		-webkit-box-shadow: 1px 1px 3px #000;
		box-shadow: 1px 1px 3px #000;
	}

	.close:hover { background: #00d9ff; }
	</style>
  <link href="http://fonts.googleapis.com/css?family=Raleway:400,300,700" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="server-side\css_pop\ns-default.css">
  <link rel="stylesheet" type="text/css" href="server-side\css_pop\ns-style-growl.css">
  <script src="server-side\js_pop\modernizr.custom.js"></script>
		<link rel="shortcut icon" href="favicon.ico">

		<link href="css\master.css" rel="stylesheet">
		
		<link rel='stylesheet' id='style-css' href='css\style1.css' type='text/css' media='all'>
		<link rel='stylesheet' id='local-css' href='css\copywriter.css' type='text/css' media='all'>
		<link rel='stylesheet' id='custom-css' href='css/custom.css' type='text/css' media='all'>
		<script type="text/javascript" src="js\jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="js\jquery.leanModal.min.js"></script>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="css\style.css">

		<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets\switcher\css\color4.css" media="all">
		<link rel="alternate stylesheet" type="text/css" href="assets\switcher\css\color1.css" title="color1" media="all">
		<link rel="alternate stylesheet" type="text/css" href="assets\switcher\css\color2.css" title="color2" media="all">
		<link rel="alternate stylesheet" type="text/css" href="assets\switcher\css\color3.css" title="color3" media="all">
		<link rel="alternate stylesheet" type="text/css" href="assets\switcher\css\color4.css" title="color4" media="all">
		<link rel="alternate stylesheet" type="text/css" href="assets\switcher\css\color5.css" title="color5" media="all">
		<link rel="alternate stylesheet" type="text/css" href="assets\switcher\css\color6.css" title="color6" media="all">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body data-scrolling-animations="true" style="position: relative; min-height: 100%; top: 0px;">
		<div class="sp-body">
		    <!-- Loader Landing Page -->
			<div id="ip-container" class="ip-container">
				<div class="ip-header">
					<div class="ip-loader">
						<svg class="ip-inner" width="60px" height="60px" viewbox="0 0 80 80">
							<path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,39.3,10z"></path>
							<path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"></path>
						</svg> 
					</div>
				</div>
			</div>
			<!-- Loader end -->
			<!-- Start Switcher 
			<div class="switcher-wrapper">	
				<div class="demo_changer">
					<div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>
					<div class="form_holder">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="predefined_styles">
									<div class="skin-theme-switcher">
										<h4>Color</h4>
										<a href="#" data-switchcolor="color1" class="styleswitch" style="background-color:#a91605;"> </a>
										<a href="#" data-switchcolor="color2" class="styleswitch" style="background-color:#228dcb;"> </a>
										<a href="#" data-switchcolor="color3" class="styleswitch" style="background-color:#00bff3;"> </a>							
										<a href="#" data-switchcolor="color4" class="styleswitch" style="background-color:#ff9600;"> </a>
										<a href="#" data-switchcolor="color5" class="styleswitch" style="background-color:#2dcc70;"> </a>
										<a href="#" data-switchcolor="color6" class="styleswitch" style="background-color:#6054c2;"> </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<header id="this-is-top">
				<div class="container-fluid">
					<div class="topmenu row">
						<nav class="col-sm-offset-3 col-md-offset-4 col-lg-offset-4 col-sm-6 col-md-5 col-lg-5">
							WELCOME TO  TRANS CARGO LTD.  
						</nav>
						<nav class="text-right col-sm-3 col-md-3 col-lg-3">
						<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
							
						</nav>
					</div>
					<div class="row header">
						<div class="col-sm-3 col-md-3 col-lg-3">
							<a href="index.htm" id="logo"></a>
						</div>
						<div class="col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-sm-8 col-md-8 col-lg-8">
							<div class="text-right header-padding">
								<div class="h-block"><span>CALL US</span> +14242758608 </div>
								<div class="h-block"><span>EMAIL US</span> info@transcargo.info  </div>
								<div class="h-block"><span>WORKING HOURS</span>Mon - Sun  12.00 - 12.00</div>
								<a class="btn btn-success" href="contact.htm">GET A FREE QUOTE</a>
							</div>
						</div>
					</div>
					<div id="main-menu-bg"></div>  
					<a id="menu-open" href="#"><i class="fa fa-bars"></i></a> 
					<nav class="main-menu navbar-main-slide">
						<ul class="nav navbar-nav navbar-main">
						    <li><a href="index.htm">HOME</a></li>
							<li><a href="services.htm">OUR SERVICES</a></li>
							<li><a href="about.htm">ABOUT US</a></li>
						    <li><a href="blog.htm">BLOG</a></li>
							<li><a href="tracking_trace.htm">TRACKING / TRACE</a></li>
							<li><a href="contact.htm">CONTACT</a></li>
							<li><a class="btn_header_search" href="#"><i class="fa fa-search"></i></a></li>
						</ul>
						<div class="search-form-modal transition">
							<form class="navbar-form header_search_form">
								<i class="fa fa-times search-form_close"></i>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search">
								</div>
								<button type="submit" class="btn btn_search customBgColor">Search</button>
							</form>
						</div>
	                </nav>
					<a id="menu-close" href="#"><i class="fa fa-times"></i></a> 
				</div>
				
			</header> 
			<div class="bg-image page-title">
				<div class="container-fluid">
					<a href="#"><h1>Tracking</h1></a>
					<div class="pull-right">
						<a href="index.htm"><i class="fa fa-home fa-lg"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="blog.htm">Tracking / Trace</a>
					</div>
				</div>
			</div>
             <br>
             <br>
             <br>
			 <div class="section section-filters">
							<div class="section_wrapper clearfix">
									<div class="items_group clearfix">
										<div class="column one column_column ">
											<div class="column_attr align_center">
												<h4 style="margin: 0 6%;">If you are expecting to receive a delivery from  Trans Cargo Ltd.  , <br>then you can Track your Shipment below: </h4>
											</div>
										</div>
										
										<div class="screen-reader-response"></div>
													<center><form role="form" action="tracking_trace.php" method="post" align="center">
														<div class="column one" align="center">
														     <input align="center" type="text" name="trackid" value="" maxlength="10" size="10" required="required" aria-required="true" aria-invalid="false" placeholder="Enter Your Tracking Id" align="center">
	                                                    </div>
														<div class="column one">
															<div class="form-elem">
								<button type="submit" name="track" class="btn btn-success btn-default">TRACK</button>
							</div>
														</div><div class="wpcf7-response-output wpcf7-display-none"></div>
														
													</form></center>
												</div><br>
</div>
										<div class="column one-fourth column_placeholder">
											<div class="placeholder">&nbsp;											</div>
										</div>
										<div class="column one-second column_column ">
											<div class="column_attr align_center">
												<p>
													Our tracking system will tell you the current status <br>of your delivery and when you can expect your parcel to be delivered.<br><strong>Note!</strong> If the status of your Delivery is "On Hold" Please contact your contact personnel for more information. <br> - <strong>billing@transcargo.info</strong> 											</p>
											</div>
										</div>
									</div>
								</div>

			
			   <footer>
				<div class="color-part2"></div>
				<div class="color-part"></div>
				<div class="container-fluid">
					<div class="row block-content">
						<div class="col-xs-8 col-sm-4 wow zoomIn" data-wow-delay="0.3s">
							<a href="#" class="logo-footer"></a>
							<p> Trans Cargo Ltd.   is a wholly Turkish owned company incorporated in 2007 to provide seamless shipping & logistics services to esteemed customers with branches in accross the globe. This has remained the vision of CSL since incorporation but the dynamics of our<br> services has evolved over the years.</p>
							<div class="footer-icons">
								<a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
								<a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
								<a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
								<a href="#"><i class="fa fa-pinterest-square fa-2x"></i></a>
								<a href="#"><i class="fa fa-vimeo-square fa-2x"></i></a>
							</div>
							<a href="contact.htm" class="btn btn-lg btn-danger">GET A FREE QUOTE</a>
						</div>
						<div class="col-xs-4 col-sm-2 wow zoomIn" data-wow-delay="0.3s">
							<h4>OUR OFFERS</h4>
							<nav>
								<a href="services.htm">Sea Freight</a>
								<a href="services.htm">Land Logisticis</a>
								<a href="services.htm">Air Freight</a>
								<a href="services.htm">Packaging & Removal</a>
								<a href="services.htm">Warehousing</a>
							</nav>
						</div>
						<div class="col-xs-6 col-sm-2 wow zoomIn" data-wow-delay="0.3s">
							<h4>MAIN LINKS</h4>
							<nav>
								<a href="index.htm">Home</a>
	                            <a href="services.htm">Our Services</a>
	                            <a href="about.htm">About Us</a>
	                            <a href="blog.htm">Blog</a>
	                            <a href="tracking_trace.htm">Tracking / Trace</a>
	                            <a href="contact.htm">Contact</a>
							</nav>
						</div>
						<div class="col-xs-6 col-sm-4 wow zoomIn" data-wow-delay="0.3s">
							<h4>CONTACT INFO</h4>
							 This branch of Trans Cargo Ltd. is also located in Califonia							<div class="contact-info">
								<span><i class="fa fa-location-arrow"></i><strong> TRANS CARGO LTD.</strong><br>416 E Girard Ave apt c muscle shoals AL 35661 </span>
								<span><i class="fa fa-phone"></i> +14242758608 </span>
								<span><i class="fa fa-envelope"></i> info@transcargo.info    |    <br>billing@transcargo.info </span>
								<span><i class="fa fa-clock-o"></i>Mon - Sun  12.00 - 12.00</span>
							</div>
						</div>
					</div>
					<div class="copy text-right"><a id="to-top" href="#this-is-top"><i class="fa fa-chevron-up"></i></a>&copy; 2017 <a href="#"> Trans Cargo Ltd.   </a>- All rights reserved.</div>
				</div>
			</footer>
			<div ng-app="cmodule" ng-controller="BodyController">
    <div ng-view=""></div>
    <style ng-bind-html="custom_styles"></style>
</div>
<link href="livechat\assets\cmodule-chat\css\cmodule-chat.css" rel="stylesheet">
<link href="livechat\assets\angular-rangeslider-directive-master\angular-range-slider.css" rel="stylesheet">
<link href="livechat\assets\scrollbar-plugin\css\jquery.mCustomScrollbar.css" rel="stylesheet">
<script src="livechat\assets\cmodule-chat\js\jquery.min.js"></script>
<script>
    var site_url = 'http://transcargo.info/livechat/index.php/';
</script>
<script src="livechat\assets\scrollbar-plugin\js\jquery.mCustomScrollbar.concat.min.js"></script>
<script src="livechat\assets\cmodule-chat\js\angular.min.js"></script>
<script src="livechat\assets\cmodule-chat\js\sanitize.js"></script>
<script src="livechat\assets\cmodule-chat\js\angular-route.js"></script>
<script src="livechat\assets\angular-rangeslider-directive-master\angular-range-slider.min.js"></script>
<script src="livechat\assets\cmodule-chat\js\app.js"></script>
<!-- REQUIRED JS SCRIPTS -->
<script src="server-side\js_pop\classie.js"></script>
<script src="server-side\js_pop\notificationFx.js"></script>
<script>// create the notification
var notification = new NotificationFx({

	// element to which the notification will be appended
	// defaults to the document.body
	wrapper : document.body,

	// the message
	message :   ,

	// layout type: growl|attached|bar|other
	layout : 'growl',

	// effects for the specified layout:
	// for growl layout: scale|slide|genie|jelly
	// for attached layout: flip|bouncyflip
	// for other layout: boxspinner|cornerexpand|loadingcircle|thumbslider
	// ...
	effect : 'scale',

	// notice, warning, error, success
	// will add class ns-type-warning, ns-type-error or ns-type-success
	type : 'error',

	// if the user doesn´t close the notification then we remove it 
	// after the following time
	ttl : 6000,

	// callbacks
	onClose : function() { return false; },
	onOpen : function() { return false; }

});

// show the notification
notification.show();</script>

<script>// create the notification
var notification = new NotificationFx({

	// element to which the notification will be appended
	// defaults to the document.body

	// the message
	message :   ,

	// layout type: growl|attached|bar|other
	layout : 'growl',
							effect : 'genie',
							type : 'notice',

	// if the user doesn´t close the notification then we remove it 
	// after the following time
	ttl : 6000,

	// callbacks
	onClose : function() { return false; },
	onOpen : function() { return false; }

});

// show the notification
notification.show();</script>
		<!--Main-->   
		<script src="js\jquery-1.11.3.min.js"></script>
		<script src="js\jquery-ui.min.js"></script>
		<script src="js\bootstrap.min.js"></script>
		<script src="js\modernizr.custom.js"></script>
		<!-- Loader -->
		<script src="assets\loader\js\classie.js"></script>
		<script src="assets\loader\js\pathLoader.js"></script>
		<script src="assets\loader\js\main.js"></script>
		<script src="js\classie.js"></script>
		<!--Switcher-->
		<script src="assets\switcher\js\switcher.js"></script>
		<!--Owl Carousel-->
		<script src="assets\owl-carousel\owl.carousel.min.js"></script>
        <!-- SCRIPTS -->
	    <script type="text/javascript" src="assets\isotope\jquery.isotope.min.js"></script>
		<!--Theme-->
		<script src="js\jquery.smooth-scroll.js"></script>
		<script src="js\wow.min.js"></script>
		<script src="js\jquery.placeholder.min.js"></script>
		<script src="js\smoothscroll.min.js"></script>
		<script src="js\theme.js"></script>
	</body>
</html> 	