<?php
// $q = $_REQUEST["q"];
$user_name = $_REQUEST['user_name'];
session_start();
require_once("twitteroauth/twitteroauth.php"); //Path to twitteroauth library
 
$twitteruser = "@UvK8IZkVLhFe8KW";
$notweets = 30;
$consumerkey = "oQESrBi0ZeGQjxIwQEnUHWM3R";
$consumersecret = "jDfczZlmEvZxthO9hepbrtJ53Ml1RNjti07t4ZMSJzZ2NpLMeG";
$accesstoken = "1439663080397541377-9RBNLMQv0YLsNu0i6Qqa5sYUt8KKYI";
$accesstokensecret = "cP4DQcL8CpBOMX5YYMdIdLi2AuXoNT1wEmiQZjMKGD1Ui";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
 
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
// $tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
 
// $tweets = $connection->get("https://api.twitter.com/1.1/followers/list.json?cursor=-1&screen_name=".$twitteruser."&skip_status=true&include_user_entities=false");
// $tweets = $connection->get("https://api.twitter.com/1.1/followers/list.json?cursor=-1&screen_name=twitterdev&skip_status=true&include_user_entities=false");
// $tweets = $connection->get("https://api.twitter.com/1.1/followers/list.json?cursor=-1&screen_name=see_3li&skip_status=true&include_user_entities=false");
// $tweets = $connection->get("https://api.twitter.com/1.1/followers/list.json?cursor=-1&screen_name=RubyMcrae&skip_status=true&include_user_entities=false");

$tweets = $connection->get("https://api.twitter.com/1.1/followers/list.json?cursor=-1&screen_name=$user_name&skip_status=true&include_user_entities=false");

echo json_encode($tweets);
// echo $q;
// echo $user_name;

?>

