<?php

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '214138419107-nc5bsvnb7kospp6urg56bc17mh22olkj.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'TVjRmesBlfAyeO6cqyoTpTH8'; //Google client secret
$redirectURL = 'http://visionmanit.in/Eureka/eureka.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>