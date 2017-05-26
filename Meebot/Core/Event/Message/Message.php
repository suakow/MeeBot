<?php
/**
 * Created by PhpStorm.
 * User: puri
 * Date: 5/10/2017 AD
 * Time: 22:31
 */

namespace Meebot\Core\Event\Message;


abstract class Message {
    protected $type;

    abstract public function getType();
}