<?php
//Include FB config file && User class
require_once 'fbConfig.php';
require_once 'FUser.php';

if(!$fbUser){
    $fbUser = NULL;
    $fbloginURL = $facebook->getLoginUrl(array('redirect_uri'=>$fbredirectURL,'scope'=>$fbPermissions));
    $fboutput = '<a href="'.$fbloginURL.'"><img src="images/fbloginbtn.png"></a>';     
}else{
    //Get user profile data from facebook
    $fbUserProfile = $facebook->api('/me?fields=id,first_name,last_name,email');
    
    //Initialize User class
    $fbuser = new FbUser();
    
    //Insert or update user data to the database
    $fbUserData = array(
        'oauth_provider'=> 'facebook',
        'oauth_uid'     => $fbUserProfile['id'],
        'first_name'     => $fbUserProfile['first_name'],
        'last_name'     => $fbUserProfile['last_name'],
        'email'         => $fbUserProfile['email'],
    );
	
    $fbuserData = $fbuser->checkUser($fbUserData);
    
    //Put user data into session
    $_SESSION['fbuserData'] = $fbuserData;
    
    //Render facebook profile data
    if(!empty($fbuserData)){
        // $fboutput = '<h1>Facebook Profile Details </h1>';
        // $output .= '<img src="'.$userData['picture'].'">';
        // $fboutput .= '<br/>Facebook ID : ' . $fbuserData['oauth_uid'];
        // $fboutput .= '<br/>Name : ' . $fbuserData['first_name'].' '.$fbuserData['last_name'];
        // $fboutput .= '<br/>Email : ' . $fbuserData['email'];
        $fboutput = ''; 
    }else{
        $fboutput = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
    }
}
?>