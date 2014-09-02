<?php
/**
 *
 * Twitter integration demo
 *
 */

require('config.php');

//Change streamer url if necessary
$twitchApiUrl = "https://api.twitch.tv/kraken/streams/";

//streamers twitchTV usernames
$streamers = [
    'leeleethebunny',
    'ryzentv',
    'mfsplash',
    'mantequillasplay',
    'smallung',
    'srsbsnstv',
    'strifetalk',
    'rashaku',
    'jetbatsy'
];
////////////////////////////////////

//start App
use srsbsns\Components\FeedReader\FeedToArray;
use srsbsns\Components\Twitch\MergeStreams;
use srsbsns\Components\Twitter\Exception\TwitterException;

$mergeStreams = new MergeStreams(new FeedToArray());

//Get Data for all streamers in streamers Array and merge them to 1 array
$streamers = $mergeStreams->merge($twitchApiUrl, $streamers);

// Twitter part
use srsbsns\Components\Twitter\Authentication;
use srsbsns\Components\Twitter\Post;

$authentication = new Authentication($oauthAccessToken,$oauthAccessTokenSecret,$consumerKey,$consumerSecret);

foreach($streamers as $name=>$streamer) {

    try {
        if(isset($streamer->stream) && !empty($streamer->stream)) {
            $tweet = 'Twitch user '.$name. ' is online now!';
            $post = new Post($authentication,$tweet);
            $post->tweet();
        }

    } catch(TwitterException $e){
        print('Error code: '.$e->getCode().' - '.$e->getMessage().PHP_EOL);
    } catch(\Exception $e){
        print($e->getMessage().PHP_EOL);
    }

}

// finally save data to JSON
$jsonRepository = new JsonRepository();
$jsonRepository->save('TwitchStreamers', $streamers);