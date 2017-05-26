<?php
/**
 * Created by PhpStorm.
 * User: puri
 * Date: 5/10/2017 AD
 * Time: 21:52
 */

namespace Meebot\Core;


class MessageBuilder
{
    private $messagePackArray;
    private $replyToken;

    /**
     * @return mixed
     */
    public function getReplyToken()
    {
        return $this->replyToken;
    }

    /**
     * @param mixed $replyToken
     * @return $this
     */
    public function setReplyToken($replyToken)
    {
        $this->replyToken = $replyToken;
        return $this;
    }

    /**
     * MessageBuilder constructor.
     * @internal param $messagePackArray
     */
    public function __construct()
    {
        $this->messagePackArray = array();
    }

    public function addMessage($message){
        array_push($this->messagePackArray,$message);
        return $this;
    }

    public function buildPack(){
        if(isset($this->replyToken)){
            $var['replyToken'] = $this->replyToken;
        }
        $messagearray = array();
        foreach ($this->messagePackArray as $message){
            array_push($messagearray,$message->build());
        }
        $var['messages'] = $messagearray;
        return json_encode($var);
    }

}