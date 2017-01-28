<?php
//Include Facebook SDK
require_once 'inc/facebook.php';

/*
 * Configuration and setup FB API
 */
$appId = '653201224883129'; //Facebook App ID
$appSecret = '4f147d6de1e32fd41a91aa32e1bc14c5'; // Facebook App Secret
$fbredirectURL = 'http://visionmanit.in/Eureka/eureka.php'; // Callback URL
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret
));
$fbUser = $facebook->getUser();
?>