<?php
if(!isset($_SESSION) )
	header('Location: Login.php');
?>


<?php
//Include FB config file && User class
include "fb.php";
?>
<?php
//Include GP config file && User class
include "google.php";
?>

<?php

if(isset($_POST['signout'])){
	if(isset($_SESSION['token']) && isset($_SESSION['userData'])){
		include "logout.php";
	}
	if(isset($_SESSION['fbuserData'])){
		include "fblogout.php";
	}
	if(isset($_SESSION['email'])){
		include "signout.php";
	}
}
?>
<style>
	.nav-tabs.nav-justified{width:100%;border-bottom:0}.nav-tabs.nav-justified>li{float:none}.nav-tabs.nav-justified>li>a{margin-bottom:5px;text-align:center}.nav-tabs.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media (min-width:768px){.nav-tabs.nav-justified>li{display:table-cell;width:1%}.nav-tabs.nav-justified>li>a{margin-bottom:0}}.nav-tabs.nav-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover{border:1px solid #ddd}@media (min-width:768px){.nav-tabs.nav-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover{border-bottom-color:#fff}}.nav-pills>li{float:left}.nav-pills>li>a{border-radius:4px}.nav-pills>li+li{margin-left:2px}.nav-pills>li.active>a,.nav-pills>li.active>a:focus,.nav-pills>li.active>a:hover{color:#fff;background-color:#337ab7}.nav-stacked>li{float:none}.nav-stacked>li+li{margin-top:2px;margin-left:0}.nav-justified{width:100%}.nav-justified>li{float:none}.nav-justified>li>a{margin-bottom:5px;text-align:center}.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media (min-width:768px){.nav-justified>li{display:table-cell;width:1%}.nav-justified>li>a{margin-bottom:0}}
	</style>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	
	<form method="POST">
	<input type="submit" name="signout" value="Logout" class="btn btn-info pull-right" >
	</form>
	<br>
	<br>
	<div class="bs-example bs-example-tabs " data-example-id="togglable-tabs" > 
    <ul class="nav nav-tabs nav-justified" id="myTabs" style="float: none;" role="tablist"> 
        <li role="presentation" class="active">
            <a href="#Rules" id="Rules-tab" role="tab" data-toggle="tab" aria-controls="Rules" aria-expanded="true" style="font-size:25px;font-family:Economica;font-variant:small-caps">
			Rules
			</a>
        </li> 
        <li role="presentation" class="">
            <a href="#Play" role="tab" id="Play-tab" data-toggle="tab" aria-controls="Play" aria-expanded="false" style="font-size:25px;font-family:Economica;font-variant:small-caps">Play!</a></li>
        <li role="presentation" class=""> 
            <a href="#Leaderboard" role="tab" id="Leaderboard-tab" data-toggle="tab" aria-controls="Leaderboard" aria-expanded="false" style="font-size:25px;font-family:Economica;font-variant:small-caps">Leaderboard</a> 
            </li> 
    </ul> 
    <div class="tab-content" id="myTabContent" stlye="float:left;"> 
        <div class="tab-pane fade active in" role="tabpanel" id="Rules" aria-labelledby="Rules-tab"> 
			Rules<!-- #endregion Jssor Slider End -->
		</div> 
        <div class="tab-pane fade" role="tabpanel" id="Play" aria-labelledby="Play-tab">
			Question<!-- #endregion Jssor Slider End -->    
		</div> 
    
    <div class="tab-pane fade" role="tabpanel" id="Leaderboard" aria-labelledby="Leaderboard-tab"> 
Rank<!-- #endregion Jssor Slider End -->
		</div>
    
         <!-- END of content -->
       
    <!-- END of content -->
    
	<!--end: Gallery Code-->
			
    
    </div>
    </div>
	<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script defer="defer" src="js/custom.js"></script>
<script src="gs/js/jquery-1.2.6.min.js" type="text/javascript"></script>
<script src="gs/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="gs/js/jquery.kwicks-1.5.1.pack.js" type="text/javascript"></script>


<script type="text/javascript" src="gs/js/jquery-1-4-2.min.js"></script> 
<script type="text/JavaScript" src="gs/js/slimbox2.js"></script> 