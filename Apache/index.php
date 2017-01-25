<!DOCTYPE html>
<html>
    <head>
        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- end: Mobile Specific -->
        <style>
        #video{ position: relative;}
        #a1{  position: absolute; right: 10%;
            color:blue;
            border: 5px solid #4db6ac; display: block; background: #FFF; 
            border-radius:30px;
            z-index: 2147483647;
        } 
        </style>
        <link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.css" rel="stylesheet">
		

    </head>
    
    <body style="margin-left:0px;padding:0px;">
        
        <div id="video" class="hidden-phone hidden-tablet" style="">
            <img style="padding-left:230px;padding-top:90px;transform:scale(2.24,1.5)"src="img/comp.gif">
            <a id="a1" href="home.php" ><button  style="color:#4db6ac;border:none;font-variant:small-caps;font-size:20px;padding:25px;background-color:RGBA(0,0,0,0)">Start Here!</button></a>
        </div>
        
        <div id="video" class="hidden-desktop" >
            <img src="img/mobile.gif">
            <div >
            <a href="home.php" style="border: 5px solid #4db6ac;  background: #FFF; 
            border-radius:30px;float:right;margin-right:27%;"><button  style="color:#4db6ac;border:none;font-variant:small-caps;font-size:20px;padding:25px;background-color:RGBA(0,0,0,0)">Start Here!</button></a>
            </div>
        </div>
        
        
        
         <script src="js/jquery-1.8.2.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/flexslider.js"></script>
        <script src="js/carousel.js"></script>
        <script src="js/jquery.cslider.js"></script>
        <script src="js/slider.js"></script>
        <script defer="defer" src="js/custom.js"></script>
    </body>
</html>