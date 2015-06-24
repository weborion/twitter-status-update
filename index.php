<?php

//PHP Script to post nowplaying tweets using PHP

require_once 'twitter.class.mini.php';

//Get Oauth keys from http://dev.twitter.com/apps 
$consumerKey = "";
$consumerSecret = "";
$accessToken = "";
$accessTokenSecret = "";


$status = "http://weborion.in";
//
try
{
	$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
	$status = $twitter->send($status);
	echo $status ? 'Twitter Status Updated Successfully' : 'ERROR';
} catch (Exception $e) {
		echo 'Exception:Here ',  $e->getMessage(), "\n";//
}

?>