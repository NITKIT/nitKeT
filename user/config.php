<?php
session_start();
include_once("src/Google_Client.php");
include_once("src/contrib/Google_Oauth2Service.php");
######### edit details ##########
$clientId = '950797206528-kbkelt1b2mq3pobm8d0ddsqvv8updpn0.apps.googleusercontent.com'; //Google CLIENT ID
$clientSecret = 'O2IpwyPVAingIqkNME-X4LeT'; //Google CLIENT SECRET
$redirectUrl = 'https://nitket.000webhostapp.com/user';  //return url (url to script)
$homeUrl = 'https://nitket.000webhostapp.com/user';  //return to home

##################################

$gClient = new Google_Client();
$gClient->setApplicationName('Login to NIT-KET');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUrl);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>