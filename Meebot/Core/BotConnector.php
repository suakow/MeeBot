<?php
/**
 * Created by PhpStorm.
 * User: puri
 * Date: 5/10/2017 AD
 * Time: 21:40
 */

namespace Meebot\Core;


class BotConnector {

    private $accessToken;

    /**
     * @return mixed
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param mixed $accessToken
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
    }

//    public function getEventFromRequest(){
//        $content = file_get_contents('php://input');
//        $events = json_decode($content, true);
//
//        return $events;
//    }

    public function replyMessage($messagePack){
        $url = 'https://api.line.me/v2/bot/message/reply';
        $post = $messagePack;
        $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $this->accessToken);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $result = curl_exec($ch);
        curl_close($ch);
    }

    public function pushMessage($messagePack){
        $url = 'https://api.line.me/v2/bot/message/multicast';
        $post = $messagePack;
        $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $this->accessToken);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $result = curl_exec($ch);
        curl_close($ch);
    }

}