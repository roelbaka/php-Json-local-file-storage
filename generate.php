<?php
//////////////////////////
//Config
/////////////////////////

define("RESOURCEPATH", "Saves/");

//include autoload
require("vendor/autoload.php");

//Change streamer url if necessary
$twitchApiUrl = "https://api.twitch.tv/kraken/streams/";

//streamers twitchTV usernames
$streamers = [
                'splcast',
                'leeleethebunny',
                'ryzentv',
                'mfsplash',
                'mantequillas',
                'srsbsnstv',
                'SeriousDubs',
                'strifetalk',
            ];


////////////////////////////////////

//start App
use srsbsns\Components\FeedReader\FeedToArray;
use srsbsns\Components\MergeStreams;
use srsbsns\Components\StreamRepository;

$mergeStreams = new MergeStreams(new FeedToArray());

//Get Data for all streamers in streamers Array and merge them to 1 array
$streamers = $mergeStreams->merge($twitchApiUrl, $streamers);

//save data to Json File
$streamRepository = new StreamRepository();
$streamRepository->save($streamers);
