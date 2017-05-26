<?php
/**
 * Created by PhpStorm.
 * User: puri
 * Date: 5/10/2017 AD
 * Time: 22:24
 */

namespace Meebot\Core;

use Meebot\Core\Event\Event;
use Meebot\Core\Event\Message\TextMessage;
use Meebot\Core\Event\Source;


class EventManager {

    private $isAvialable;

    /**
     * @return mixed
     */
    public function isAvialable()
    {
        return $this->isAvialable;
    }

    public function getEvent($eventMessage){
        $eventInstant = new Event();

        $event = $eventMessage['events'][0];

//        var_dump($event);
        if(isset($event)){
            $this->isAvialable = true;

            $eventInstant->setReplyToken($event['replyToken']);
            $eventInstant->setType($event['type']);
            $eventInstant->setTimestamp($event['timestamp']);

            $eventInstant->setSource(new Source($event['source']['type'],$event['source']['userId']));

            if($event['message']['type'] == 'text'){
                $eventInstant->setMessage(new TextMessage($event['message']['id'],$event['message']['text']));
            }
        }

        return $eventInstant;
    }
}