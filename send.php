<?php

	require_once('API/TwitterAPIExchange.php');

	$tweet = $_POST['text-tweet'];

	$settings = array(
	    'oauth_access_token' => "1915307030-DncieQIK9L8GUZ0AP9pffEIG7xFC6qNv1hZCQNS",
	    'oauth_access_token_secret' => "wl3kJ54fGWLMtC9J4vQkXiuqSbmJDNKs3YoLJZ71VE",
	    'consumer_key' => "CDNEQm5QxPBjBrkBUSrPQw",
	    'consumer_secret' => "AOkh0qk3dUkRi1guk3MKwGEo7yp4M4wUmSfS21MIk"
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