<?php 
session_start();

include_once 'conn.php';
include_once 'dbconnect.php';
 ?>
	<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="description" content="Track / Trace  -"><meta name="viewport" content="width=1024">
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

	.table-dark{
		background-color: white;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
        box-shadow: 0px 1px 9px 2px rgba(0, 0, 0, 0.3686274509803922);

	}

	tr{
		    background-color: #ffffffd9;
	}
.table-dark th{
border-color: transparent;
}
.table thead tr th {
    vertical-align: bottom;
    border-bottom: 0px;
}
	.htt {
    color: #195e79;
    font-size: 22px;
    font-family: 'Saira Semi Condensed', sans-serif;
}
	.htto {
    color: #195e79;
    font-size: 15px;
    font-family: 'Saira Semi Condensed', sans-serif;
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
	.ht{
		text-transform: capitalize;
		font-weight: 700;
    font-family: 'Saira Semi Condensed', sans-serif;

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
  <link rel="stylesheet" type="text/css" href="server-side\css_pop
s-default.css">
  <link rel="stylesheet" type="text/css" href="server-side\css_pop
s-style-growl.css">
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
<style>
table th, table td {
    padding: 10px;
    text-align: center;
    border-style: solid;
    vertical-align: middle;
}
</style>
<link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.css" />
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
	<div id="owl-main-slider" class="owl-carousel enable-owl-carousel owl-theme" data-single-item="true" data-pagination="false" data-auto-play="true" data-main-slider="true" data-stop-on-hover="true" style="opacity: 1; display: block;">
				<div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 12664px; left: 0px; display: block;"><div class="owl-item" style="width: 1583px;"><div class="item" style="background-image:url(media/main-slider/slide4.jpg);">
					
					<div class="container-fluid">
						<div class="slider-content col-md-6 col-lg-6">
							<div style="display:table;">
								
								<div style="display:table-cell;">
									<h1>TRACKING / TRACE</h1>
								</div>
							</div>
							
						</div>
					</div>
				</div></div></div></div>
				
				
				
			</div>
             <br>
             <br>
             <br>
		
	<style type="text/css" media="screen">
		.column{
		float: unset;
		margin: 0;	
		}
	</style>

<div class="ui text container">
<div class="ui raised segment">

<div class="">
	
<p class="ui right aligned tiny header">
<a href="table.php" target="_blank">
<button class="ui button">
print Invoice</button></a>
  </p>	


  <br>
  <br>
</div>
<div id="hu">
	

	<div class="ui stackable two column grid">
  <div class="column">
  	<h2>Tracking No: <?php echo $_SESSION['user_trackid'] ?></h2>
  	<br>
  	<i class="massive barcode icon"></i>
  </div>
  <div class="column">
  	<img class="ui medium centered circular image" src="images/<?php echo $_SESSION["image"]; ?>">

  </div>
 
  <div class="column"></div>
</div><div class="ui stackable two column grid">
  <div class="column">
  	<div class="ui raised segment">
  		<h4>Shipper Address</h4>
  		<hr>
 
  	
  	<br>
  <?php echo $_SESSION['shipper'] ?>
  </div> 	</div>
 
  <div class="column">
  	<div class="ui raised segment">
  		<h4>Reciever Address</h4>
  		<hr>
 
  	
  	<br>
<?php echo $_SESSION['reciever'] ?>
  </div> 	</div>
  <div class="column"></div>
</div>	<div class="ui grid">
		 <div class="column">
		 	<div class="ui raised segment">
  	<table class="ui table">
  <thead>
    <tr>
      <th>Origin:</th>
      <th>Package:</th>
      <th>Status:</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $_SESSION['origin'] ?></td>
      <td><?php echo $_SESSION['package'] ?></td>
      <td><?php echo $_SESSION['status'] ?></td>
    </tr>

  </tbody>  <thead>
    <tr>
      <th>Destination:</th>
      <th>Carrier:</th>
      <th>Type of Shipment:</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $_SESSION['destination'] ?></td>
      <td><?php echo $_SESSION['carrier'] ?></td>
      <td><?php echo $_SESSION['type'] ?></td>
    </tr>

  </tbody> <thead>
    <tr>
      <th>Weight:</th>
      <th>Shipment Mode:</th>
      <th>Carrier Reference No.:</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $_SESSION['weight'] ?></td>
      <td><?php echo $_SESSION['mode'] ?></td>
      <td><?php echo $_SESSION['reference'] ?></td>
    </tr>

  </tbody> <thead>
    <tr>
      <th>Product:</th>
      <th>Qty:</th>
      <th>Payment Mode:</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $_SESSION['product'] ?></td>
      <td><?php echo $_SESSION['qty'] ?></td>
      <td><?php echo $_SESSION['pmtmode'] ?></td>
    </tr>

  </tbody> <thead>
    <tr>
      <th>Total Freight:</th>
      <th>Expected Delivery Date:</th>
      <th>Departure Time:</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $_SESSION['freight'] ?></td>
      <td><?php echo $_SESSION['delivery'] ?></td>
      <td><?php echo $_SESSION['depature'] ?></td>
    </tr>

  </tbody> <thead>
    <tr>
      <th>Pick-up Date:</th>
      <th>Pick-up Time:</th>
      <th></th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $_SESSION['pickupd'] ?></td>
      <td><?php echo $_SESSION['pickupt'] ?></td>
      <td></td>
     
    </tr>

  </tbody> <thead>
    <tr>
      <th>Comments:</th>
      <th></th>
      <th></th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $_SESSION['comments'] ?></td>
     
    </tr>

  </tbody>
</table>
</div>

  </div>

</div>
<div class="ui grid">
	<div class="column">
		

	<div class="ui raised segment">
		<h3>Shipment History</h3>
	<table class="ui red striped table">
  <thead>
    <tr>
      <th>Date</th>
      <th>TIME</th>
      <th>LOCATION</th>
      <th>STATUS</th>
      <th>REMARKS</th>
    </tr>
  </thead>
  <tbody>
  	<?php
		
				include('conn.php');
 
    $query = mysqli_query($conn, "SELECT * FROM info WHERE trackid = '" . $_SESSION['user_trackid']. "' ORDER BY id DESC");
				while($row=mysqli_fetch_array($query)){
					?>
				  <tr>
      <td><?php echo $row['date']; ?></td>
      <td><?php echo $row['time']; ?></td>
      <td><?php echo $row['location']; ?></td>
      <td><?php echo $row['status']; ?></td>
      <td><?php echo $row['remarks']; ?></td>
    </tr>
    <?php
				}
 
			?>
 
 
  </tbody>
</table>
	</div>
</div>

	
</div>
</div>
</div>	
</div>
<div class="container-fluid inner-offset">
				<div class="hgroup text-center wow zoomIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
					<h2>FOR ALL YOUR CARGO NEEDS</h2>
					<h1> TRANS CARGO LTD.   - THE RIGHT CHOICE</h1>
				</div>            
				<ul class="nav nav-tabs wow fadeIn" data-wow-delay="0.3s" id="myTab" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
					<li class="active"><a href="#tab1" data-toggle="tab">WHY CHOOSE US</a></li>
					<li><a href="#tab2" data-toggle="tab">THE MISSION</a></li>
					<li><a href="#tab3" data-toggle="tab">OUR STRATEGY</a></li>
				</ul>

				<div class="tab-content inner-offset wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
					<div class="tab-pane active" id="tab1">
						<div class="row">
							<div class="col-sm-5">
								<img class="full-width" src="media\images\1.jpg" alt="Img">
							</div>
							<div class="col-sm-7">
								<p><strong style="font-size:16px;"> Trans Cargo Ltd.   is highly experienced in its field, and is extremely flexible in its ability to adapt to customers’ requirements.</strong></p>
								<p>The company provides an extensive variety of services in air, sea and land shipping, projects, door to door transport, logistics, shipment packaging, handling and custom clearance of art object, distribution of bulk mail, personal items, land transport, import and export, handling imports, air, sea and custom clearance of food products, shipments of temperature-controlled drugs, passenger escort, time critical and more.</p>
								<u></u>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab2">
						<div class="row">
							<div class="col-sm-5">
								<img class="full-width" src="media\images\1.jpg" alt="Img">
							</div>
							<div class="col-sm-7 text-block">
								<p><strong>Be a global player in the courier industry, with excellence in products and services.</strong></p>
								<p> Trans Cargo Ltd.   ability is to identify and understand its clients needs, fulfill and maintain service levels and continuously adapt and develop systems to fulfill all requirements,
								To plan, develop and continuously improve our facilities and services. To be customer driven in everything we do. To provide an ideal working environment that boosts co-operation and teamwork.</p>
								<u></u>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab3">
						<div class="row">
							<div class="col-sm-5">
								<img class="full-width" src="media\images\1.jpg" alt="Img">
							</div>
							<div class="col-sm-7 text-block">
								<p><strong>CSL will work closely with you to devise customized solutions and route optimization that will help your business improve customer service and decrease operational costs.</strong></p>
								<p> Trans Cargo Ltd.   works with clients to develop and execute communication processes that optimize the flow of products and information within the supply chain and within each distribution center.</p>
								<u></u>
							</div>
						</div>
					</div>
				</div>

				<div class="row stats percent-blocks" data-waypoint-scroll="true">
					<div class="col-sm-6 col-md-4">
						<div class="chart" data-percent="185065">
							<span><i class="fa fa-folder-open"></i></span>
							<span class="percent">185065</span>Projects<br>Done
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="chart" data-percent="1000235">
							<span><i class="fa fa-users"></i></span>
							<span class="percent">1000235</span>Clients Worldwide
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="chart" data-percent="1238">
							<span><i class="fa fa-truck"></i></span>
							<span class="percent">1238</span>Owned<br>Vehicles
						</div>
					</div>
					<!--<div class="col-sm-6 col-md-4">
						<div class="chart" data-percent="1002">
							<span><i class="fa fa-male"></i></span>
							<span class="percent">1002</span>People In Team
						</div>-->
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
					<div class="copy text-right"><a id="to-top" href="#this-is-top"><i class="fa fa-chevron-up"></i></a>&copy; 2020 <a href="#"> Trans Cargo Ltd.   </a>- All rights reserved.</div>
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
<script src="server-side\js_pop
otificationFx.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.js"></script>
<script src="jQuery.print.min.js" type="text/javascript" charset="utf-8" async defer></script>
<script>
	$(".ui.button.bt").on("click", function(){
			$("#hu").print(/*options*/);

	})
</script>
	</body>
	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5df3394143be710e1d21e89d/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</html> 	





