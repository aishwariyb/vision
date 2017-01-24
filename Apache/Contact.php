<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Contact Us</title><link rel="icon" type="image/png" href="img/favicon.png"> 
	<meta name="description" content="GotYa Free Bootstrap Theme"/>
	<meta name="keywords" content="Template, Theme, web, html5, css3, Bootstrap" />
	<meta name="author" content="?ukasz Holeczek from creativeLabs"/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
	
	<!--start: Header -->
	<header style="height:70px">
		
		<!--start: Container -->
		<div class="container">
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo span3">
						
<a class="brand" href="Home.php"><img src="img/logo.png" style="width: 170px;height: 70px;margin-top: 3px;"></a>
						
				</div>
				<!--end: Logo -->
					
				<!--start: Navigation -->
				<div class="span9">
						
					<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
			        		
			          			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            			<span class="icon-bar"></span>
			            			<span class="icon-bar"></span>
			            			<span class="icon-bar"></span>
			          			</a>
			          			<div class="nav-collapse collapse">
			            			<ul class="nav">
			              				<li><a href="Home.php">Home</a></li>
			              				<li><a href="About.php">About</a></li>
										<li><a href="Gallery.php">Gallery</a></li>
										<li><a href="Events.php">Events</a></li>
			              				<li class="active"><a href="Contact.php">Contact Us</a></li>
			              				<!--<li class="dropdown">
			                				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
			                				<ul class="dropdown-menu">
			                  					<li><a href="#">Action</a></li>
			                  					<li><a href="#">Another action</a></li>
			                  					<li><a href="#">Something else here</a></li>
			                  					<li class="divider"></li>
			                  					<li class="nav-header">Nav header</li>
			                  					<li><a href="#">Separated link</a></li>
			                  					<li><a href="#">One more separated link</a></li>
			                				</ul>
			              				</li> -->
			            			</ul>
			          			</div>
			        		
			      		</div>
			    	</div>
					
				</div>	
				<!--end: Navigation -->
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->
	<div class="baap">
	<!-- start: Map -->
		<!-- starts: Google Maps -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<div>
			<div class="row">
				<div id="googlemaps" class="google-map google-map-full col-md-8" style="height:650px;float:left"></div>
					<!--<div id="googlemaps-container-bottom"></div>-->
					<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvNN3sj9CrtNsU7N5-6wfVRfrl7DMdds0"></script>
					<script src="js/jquery.gmap.min.js"></script>
					<script type="text/javascript">
					$('#googlemaps').gMap({
						maptype: 'ROADMAP',
						scrollwheel: false,
					zoom: 17,
					markers: [
						{
							address: 'incubation centre, maulana azad national institute of technology, bhopal, madhya pradesh', // Your Adress Here
							html: '',
							popup: false,
						}

					],

				});
						</script>
						<!-- end: Google Maps -->
				<!-- end: Map -->	
				
				<!-- start: Wrapper -->	
				
				<div class="col-md-4">	

					<!-- start: Container -->	
						
						<!-- start: Row -->
						
							<!-- start: Contact Info -->
							<div class="span3">
								<div class="title" style="text-align:center;"><h3>Contact Info</h3></div>
							<p>								
								<b>Vision</b>
								
							</p>	
									Vision Cell, Incubation Centre, MANIT
								
						Bhopal, Madhya Pradesh, India
						
					<p>	
						Phone: +91 7587446229
                        
					</p>
					
					<p>
					<p>
						Email: vision.nitbhopal@gmail.com
					</p>
					<hr>
				</div>
				<!-- end: Contact Info -->		
				
				<!-- start: Contact Form -->
				<div class="span3">
					<div class="title" style="text-align:center;"><h3>Contact Form</h3></div>

					<!-- start: Contact Form -->
					<div id="contact-form">

						<form action="https://formspree.io/vision.nitbhopal@gmail.com"
							  method="POST" style="text-align:center;">
							<input type="text" name="name" placeholder="Name" class="form-control">
							<input type="email" name="_replyto" placeholder="Your Email" class="form-control">
							<textarea class="form-control" name="message" placeholder="Message" style="resize:vertical;"></textarea>
							<br>
							<input type="submit" class="btn btn-info" style="padding:15px;height:20px !important;" value="Send Query">
							<input type="hidden" name="_next" value="https://visionmanit.in/Home.php" />
						</form>
					</div>
					<!-- end: Contact Form -->
					<hr>
				</div>
				<!-- end: Contact Form -->

				<!-- start: Social Sites -->
				<div class="span3">
					<div class="title" style="text-align:center;"><h3>Follow US!</h3></div>
					<ul class="social-bookmarks">
						<li class="facebook"><a href="https://www.facebook.com/visionmanit/?fref=ts">facebook</a></li>
						<li class="twitter"><a href="https://twitter.com/VisionNITB">twitter</a></li>
						<li class="youtube"><a href="https://www.youtube.com/channel/UCM1dBAT20ulLHkofolWr3uA">youtube</a></li>
                        <li class="instagram"><a href="https://www.instagram.com/visionmanit/">instagram</a></li>
					</ul>
				</div>
				<!-- end: Social Sites -->
			
				<!-- end: Row -->

		
			<!-- end: Container -->
		</div>
	
				
  	</div>
    </div>
	<!-- end: Wrapper  -->		
    </div>
	
	<!-- start: Footer Menu -->
	<div class="footer-bottom" style="text-align:center;padding-bottom: 3rem;padding-top: 24px;padding-bottom: 10px;font-size: 16px ;font-family: raleway-medium,sans-serif;background: #14181E;">
    <div class="row" >
        <div > <span>© Copyright Vision.</span><br><span>Designed and Maintained by Vision CSE</span></div>
        <div id="go-top" style="display: block;"><a class="smoothscroll" title="Back to Top" href="#top"><i class="icon ion-android-arrow-up"></i></a></div>
      </div>
    </div>
    <!-- end: Footer Menu -->

	
<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script def src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>
