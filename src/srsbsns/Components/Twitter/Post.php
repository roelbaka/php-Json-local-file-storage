<?php
/**
 * Twitter library to post updates on own account
 *
 * Required: api keys with write permission
 *
 *
 */

namespace srsbsns\Components\Twitter;

use srsbsns\Components\Twitter\Exception\EmptyTweetException;
use srsbsns\Components\Twitter\Exception\TweetLengthException;
use srsbsns\Components\Twitter\Exception\TwitterException;


class Post {

    const POST_STATUS_UPDATE = 'https://api.twitter.com/1.1/statuses/update.json';

    protected $twitterApiExchange;
    protected $tweet = null;

    public function __construct(Authentication $auth, $tweet) {
        $settings = array(
            'oauth_access_token' => $auth->getOauthAccessToken(),
            'oauth_access_token_secret' => $auth->getOauthAccessTokenSecret(),
            'consumer_key' => $auth->getConsumerKey(),
            'consumer_secret' => $auth->getConsumerSecret()
        );

        $this->tweet = $tweet;

        $this->twitterApiExchange = new \TwitterAPIExchange($settings);
    }

    public function tweet() {
        $this->isValid();

        $response = $this->twitterApiExchange->buildOauth(self::POST_STATUS_UPDATE,'POST')
            ->setPostfields(array('status'=>$this->tweet))
            ->performRequest();

        $response = json_decode($response);

        // validate the response
        if(isset($response->errors) && is_array($response->errors)) {
            foreach ($response->errors as $error) {
                throw new TwitterException($error->message,$error->code);
            }
        }

        // also a possibility, normal exception, no code given
        if(isset($response->error) && !empty($response->error)) {
            throw new \Exception($response->error);
        }
    }

    public function isValid() {
        if(empty($this->tweet)) {
            throw new EmptyTweetException('Tweet is empty');
        }

        if(strlen($this->tweet) > 140) {
            throw new TweetLengthException('The given tweet is to long, a max of 140 characters is allowed');
        }
    }

} 