<?php

include('include.php');
include('config.php');

use srsbsns\Components\FeedReader\FeedToArray;
use srsbsns\Components\MergeStreams;
use srsbsns\Components\StreamRepository;

$mergeStreams = new MergeStreams(new FeedToArray());

//merge data to 1 array
$streamers = $mergeStreams->merge($twitchApiUrl, $streamers);

//save data
$streamRepository = new StreamRepository();
$streamRepository->save($streamers);
