<?php
//Include Facebook SDK
require_once 'inc/facebook.php';

/*
 * Configuration and setup FB API
 */
$appId = '1926110437624088'; //Facebook App ID
$appSecret = '3192a47fccc333e5444903ee93770b20'; // Facebook App Secret
$fbredirectURL = 'http://localhost/v/Apache/fb.php'; // Callback URL
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret
));
$fbUser = $facebook->getUser();
?>