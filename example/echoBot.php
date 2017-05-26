<?php

require __DIR__ . '/vendor/autoload.php';
//
use Meebot\Define;
use Meebot\Core\BotConnector;
use Meebot\Core\EventManager;
use Meebot\Core\MessageBuilder;

use Meebot\Core\MessagePack\TextMessagePack;

$botConnector = new BotConnector;
$eventManager = new EventManager;

$botConnector->setAccessToken(Define::$accessToken);

//Main Event
$content = file_get_contents('php://input');
$events = json_decode($content, true);

$eventInstant = $eventManager->getEvent($events);

if($eventManager->isAvialable()){
    $message = $eventInstant->getMessage();
    if($message->getType() == 'text'){
        $text = $message->getText();

        $replyMessage = new TextMessagePack;
        $replyMessage->setText($text);

        $replyMessage2 = new TextMessagePack;
        $replyMessage2->setText("Eieieieiei");

        $messageBuilder = new MessageBuilder;
        $messageBuilder->setReplyToken($eventInstant->getReplyToken())->addMessage($replyMessage)->addMessage($replyMessage2);

        $botConnector->replyMessage($messageBuilder->buildPack());
    }
}

