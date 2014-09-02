<?php
/**
 * Created by PhpStorm.
 * User: rory
 * Date: 31-08-14
 * Time: 17:02
 */

namespace srsbsns\Components\Twitter;


class Authentication {

    protected $oauthAccessToken;
    protected $oauthAccessTokenSecret;
    protected $consumerKey;
    protected $consumerSecret;

    public function __construct($oauthAccessToken,$oauthAccessTokenSecret,$consumerKey,$consumerSecret) {
        $this->oauthAccessToken = $oauthAccessToken;
        $this->oauthAccessTokenSecret = $oauthAccessTokenSecret;
        $this->consumerKey = $consumerKey;
        $this->consumerSecret = $consumerSecret;
    }

    /**
     * @param mixed $consumerKey
     */
    public function setConsumerKey($consumerKey)
    {
        $this->consumerKey = $consumerKey;
    }

    /**
     * @return mixed
     */
    public function getConsumerKey()
    {
        return $this->consumerKey;
    }

    /**
     * @param mixed $consumerSecret
     */
    public function setConsumerSecret($consumerSecret)
    {
        $this->consumerSecret = $consumerSecret;
    }

    /**
     * @return mixed
     */
    public function getConsumerSecret()
    {
        return $this->consumerSecret;
    }

    /**
     * @param mixed $oauthAccessToken
     */
    public function setOauthAccessToken($oauthAccessToken)
    {
        $this->oauthAccessToken = $oauthAccessToken;
    }

    /**
     * @return mixed
     */
    public function getOauthAccessToken()
    {
        return $this->oauthAccessToken;
    }

    /**
     * @param mixed $oauthAccessTokenSecret
     */
    public function setOauthAccessTokenSecret($oauthAccessTokenSecret)
    {
        $this->oauthAccessTokenSecret = $oauthAccessTokenSecret;
    }

    /**
     * @return mixed
     */
    public function getOauthAccessTokenSecret()
    {
        return $this->oauthAccessTokenSecret;
    }
}