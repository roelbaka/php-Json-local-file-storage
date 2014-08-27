<?php
//////////////////////////
//Config
/////////////////////////

define("RESOURCEPATH", "Saves/");

//include autoload
require("vendor/autoload.php");

//include config
require('config.php');

$subreddit = 'strife';

//Change Reddit url if necessary
$redditApiUrl = "http://www.reddit.com/r/$subreddit/new.json?sort=new";
////////////////////////////////////

//start App
use srsbsns\Components\FeedReader\FeedToArray;
use srsbsns\Components\MergeStreams;
use srsbsns\Components\StreamRepository;

$arrayFeed = new FeedToArray();

//Get Data for all streamers in streamers Array and merge them to 1 array
$redditFeed = $arrayFeed->create($redditApiUrl);

if($redditFeed->error == "404") {
    die("wrong stream url or twitch down");
}

//save data to Json File
$streamRepository = new StreamRepository();
$streamRepository->save('RedditFeed', $redditFeed);
