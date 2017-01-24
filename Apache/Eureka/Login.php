<?php 
session_start();
extract($_POST);
if(isset($_SESSION['email'])){
	header('Location: index.php');
}
else{
include ("database.php");
if(isset($login1) ){
	$result = $db->query("SELECT * from v_user where email='$email' and pass='$password' and active = 1");
	if($db->affected_rows){
		$_SESSION['email'] = $email;
		header("Location: index.php");
	}else{
		unset($_SESSION['email']);
		echo '<script>alert("Invalid Email or password.")</script>';
		
	}
}
if(isset($register1)){
	if($password===$confirm){
		// $sql = insert_into_table('p_user',array('name','email','pass'),array($username,$email,$password));
		$hash = md5(rand(1000,5000));
		$email = trim($email);
		$password = trim($password);
		$username = trim($username);
		$sql = "INSERT into v_user(`email`,`pass`,`name`,`hash`) VALUES('".$email."','".$password."','".$username."','".$hash."')";
		$regres = $db->query($sql);
		if(!$regres){
			echo '<script>alert("Duplicate Entry.")</script>';
			
		}
		else{
			include('mail.php');
			echo '<script>alert("Please confirm your email to activate your account.")</script>';
			echo "<script>setTimeout(\"location.href = 'index.php';\",0);</script>";
		}
	}
}

?>
<?php
//Include GP config file && User class
include_once 'gpConfig.php';
include_once 'User.php';

if(isset($_GET['code'])){
	$gClient->authenticate($_GET['code']);
	$_SESSION['token'] = $gClient->getAccessToken();
	header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
	$gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) {
	//Get user profile data from google
	$gpUserProfile = $google_oauthV2->userinfo->get();
	
	//Initialize User class
	$user = new User();
	
	//Insert or update user data to the database
    $gpUserData = array(
        'oauth_provider'=> 'google',
        'oauth_uid'     => $gpUserProfile['id'],
        'first_name'    => $gpUserProfile['given_name'],
        'last_name'     => $gpUserProfile['family_name'],
        'email'         => $gpUserProfile['email'],
        'gender'        => $gpUserProfile['gender'],
        'locale'        => $gpUserProfile['locale'],
        'picture'       => $gpUserProfile['picture'],
        'link'          => $gpUserProfile['link']
    );
    $userData = $user->checkUser($gpUserData);
	
	//Storing user data into session
	$_SESSION['userData'] = $userData;
	
	//Render facebook profile data
    if(!empty($userData)){
        $output = '<h1>Google+ Profile Details </h1>';
        $output .= '<img src="'.$userData['picture'].'" width="300" height="220">';
        $output .= '<br/>Google ID : ' . $userData['oauth_uid'];
        $output .= '<br/>Name : ' . $userData['first_name'].' '.$userData['last_name'];
        $output .= '<br/>Email : ' . $userData['email'];
        $output .= '<br/>Gender : ' . $userData['gender'];
        $output .= '<br/>Locale : ' . $userData['locale'];
        $output .= '<br/>Logged in with : Google';
        $output .= '<br/><a href="'.$userData['link'].'" target="_blank">Click to Visit Google+ Page</a>';
        $output .= '<br/>Logout from <a href="logout.php">Google</a>'; 
    }else{
        $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
    }
} else {
	$authUrl = $gClient->createAuthUrl();
	$output = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'"><img src="images/glogin.png" alt=""/></a>';
}
?>

<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Login</title><link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
	<meta name="description" content="GotYa Free Bootstrap Theme"/>
	<meta name="keywords" content="Template, Theme, web, html5, css3, Bootstrap" />
	<meta name="author" content="Łukasz Holeczek from creativeLabs"/>
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
   
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	 
    
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<style>
#body{
	padding-top: 50px;
}
body{
	background-image: url('images/background.jpg');
}
.panel-login {
	border-color: #ccc;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
	
	background-color: #fff;
	border-color: #fff;
	text-align:center;
}
.panel-login>.panel-heading a{
	text-decoration: none;
	color: #666;
	font-weight: bold;
	font-size: 15px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
	color: #029f5b;
	font-size: 18px;
}
.panel-login>.panel-heading hr{
	margin-top: 10px;
	margin-bottom: 0px;
	clear: both;
	border: 0;
	height: 1px;
	background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
	height: 45px;
	border: 1px solid #ddd;
	font-size: 16px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
	outline:none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: #ccc;
}
.btn-login {
	background-color: #59B2E0;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
	color: #fff;
	background-color: #53A3CD;
	border-color: #53A3CD;
}
.forgot-password {
	text-decoration: underline;
	color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
	text-decoration: underline;
	color: #666;
}

.btn-register {
	background-color: #1CB94E;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
	color: #fff;
	background-color: #1CA347;
	border-color: #1CA347;
}


</style>


</head>
<body>
	
	<div class="baap">
		<!-- start: Page Title -->
		<div id="page-title">
	<!--
			<div id="page-title-inner">

				<!-- start: Container -->
				<!--<div class="container">

					/*<h2><i class="ico-stats ico-white"></i>About Us</h2>*/

				</div>
				<!-- end: Container  -->
				
		<!--</div> -->
		</div>
		<!-- end: Page Title -->
		
		<!--start: Wrapper-->
		<div id="wrapper" style="margin-top:1%;margin-left:1%">
			<a href="index.php" class="btn btn-danger "><span class="glyphicon glyphicon-hand-left"></span> Back To Home</a>
			
			
			
					
			<!--start: Container -->
			<div class="container" style="margin-top:10%">
				
				<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" class="" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
					
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="Login.php" method="POST" role="form" style="display: block;">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input pattern="[a-zA-Z.0-9]+[@][a-zA-Z]+[.][a-zA-Z]+" type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" required>
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span><input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
									</div>
									<br>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login1" id="login1" tabindex="3" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="forgotPassword.php" tabindex="4" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
									<div><?php echo $output;?></div>
								</form>
								<form id="register-form" action="Login.php" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Full Name" required>
									</div>
									<div class="form-group">
										<input pattern="[a-zA-Z.0-9]+[@][a-zA-Z]+[.][a-zA-Z]+" type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" required>
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group">
										<input type="password" name="confirm" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register1" id="register1" tabindex="3" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
									<?php 
									if(isset($register1)){
									if($password != $confirm){
											echo '<span style= "color:#888; font-size:20px;"><b>* Password Mismatch.</b></span><br>';
									}
									}?>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		
				<!--start: Row -->
				
		
			</div>
			<!--end: Container-->
	
			<!--start: Container -->
	

		</div>
		<!-- end: Wrapper  -->			
	</div>
    <!-- start: Footer Menu -->

    
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
<script src="Login Form.js"></script>
<!-- end: Java Script -->
</body>

<?php
}
?>