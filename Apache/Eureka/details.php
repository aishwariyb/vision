<?php
if (isset($_SESSION))
{
	if($_SESSION['fbfirstlogin']==1)
	$_SESSION['fbfirstlogin']=0;
}

?>



<head><meta http-equiv="Content-Type" content="text/html; charset=shift_jis">

	<!-- start: Meta -->
	
	<title>Details</title><link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
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
    <script>
        function checkUser(){
            //alert("haha Bitch Please");
    var name=document.getElementById( "uname" ).value;	
    if(name){
        $.ajax({
        type: 'POST',
        url: 'check.php',
        data: {
        uname:name,
        },
        success: function (response){
           // alert(response);
            if(response=="OK")	
            {
                document.getElementById('#name_status').innerHTML="<b style='color:#8bc34a'>Available</b>";
                return true;	
            }
            else
            {
                document.getElementById('#name_status').innerHTML="<b style='color:red'> Not Available</b>";
                $( '#name_status' ).html(response);
                return false;	
                
            }
            
        },
            error: function (exception){alert('Exeption:'+exception);}
    });
 }
 else
 {
    $( '#name_status' ).html("");
    return false;
 }
}

    </script>


</head>
<body>
	
			<!-- start: Page Title -->
		<!-- end: Page Title -->
        
        <div class="container">
  <br>
  <br>
  <br>
  <br>
            <div style="width:90%;margin:0 auto">
            
  <form class="form-horizontal" role="form" onsubmit="return formValidate()" action="senddata.php" method="post" >
 
	   <div class="form-group">
      <label class="control-label col-sm-4" for="Name" style="color:white">Username:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="uname" id="uname" placeholder="Choose a Username (Case-Sensitive)" onkeyup="checkUser();" min="3" required>
      </div>
           
           <div class="col-sm-3" id="#name_status"></div>
    </div>
	    
	
	   <div class="form-group">
      <label class="control-label col-sm-4" for="Name" style="color:white">College</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="college"   placeholder="Enter College" required>
      </div>
    </div>
	    <div class="form-group">
      <label class="control-label col-sm-4" for="Name" style="color:white">Year</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="year" placeholder="Enter Year" maxlength=1 required>
      </div>
    </div>
	 
	    <div class="form-group">
      <label class="control-label col-sm-4" for="Name" style="color:white">Semester</label>
      <div class="col-sm-4">
        <input type="number" min="1" max="8" class="form-control" name="semester" placeholder="Enter Semester" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
 maxlength=1>
      </div>
    </div>
	    <div class="form-group">
      <label class="control-label col-sm-4" for="Name" style="color:white">Contact No:</label>
      <div class="col-sm-4">
        <input type="text" onkeyup="this.value=this.value.replace(/[^\d+]/,'')" class="form-control" name="contact" placeholder="Enter Contact Number" maxlength=10>
      </div>
    </div>
	    

 <br>
      <br>
      <br>
    <div class="form-group">        
      <div class="col-sm-offset-5 col-sm-8">
        <button type="submit" class="btn btn-info">Submit</button>
      </div>
    </div>
	<div class="form-group">
		<label class="control-label col-sm-6" for="pwd"></label>
	<div class="col-sm-3">          
        <p id="formval" ></p>
      </div>
	    </div>
  </form>
</div>
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
<!-- end: Java Script -->
</body>

