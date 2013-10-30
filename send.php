<?php

	require_once('API/TwitterAPIExchange.php');

	$tweet = $_POST['text-tweet'];

	$settings = array(
	    'oauth_access_token' => "Your oauth_access_token",
	    'oauth_access_token_secret' => "Your oauth_access_token_secret",
	    'consumer_key' => "Your consumer_key",
	    'consumer_secret' => "Your consumer_secret"
	);
	$url = 'https://api.twitter.com/1.1/statuses/update.json';
	$requestMethod = 'POST';
	$postfields = array('status' => $tweet);
	$twitter = new TwitterAPIExchange($settings);
	$response =  $twitter->buildOauth($url, $requestMethod)
                 ->setPostfields($postfields)
                 ->performRequest();

    echo '<script>clearform();</script>';
?>
