<?php
/**
 * Created by PhpStorm.
 * User: puri
 * Date: 5/26/2017 AD
 * Time: 15:46
 */
require __DIR__ . '/vendor/autoload.php';

use Meebot\Define;
use Meebot\Core\BotConnector;
use Meebot\Core\EventManager;
use Meebot\Core\MessageBuilder;

use Meebot\Core\MessagePack\TextMessagePack;

$botConnector = new BotConnector;
$eventManager = new EventManager;

$botConnector->setAccessToken(Define::$accessToken);

$replyMessage2 = new TextMessagePack;
$replyMessage2->setText("Eieieieiei");

$messageBuilder = new MessageBuilder;
$messageBuilder->setReplyToken($eventInstant)->addMessage($replyMessage2);

$botConnector->pushMessage($messageBuilder->buildPack());