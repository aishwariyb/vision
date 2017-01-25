<?php

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '79110953412-6enfjmidrim95grrjeqlbuut8coj7eok.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'usbP5Vc7DMvdHdJpKLatqbVf'; //Google client secret
$redirectURL = 'http://localhost/v/Apache/login.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>