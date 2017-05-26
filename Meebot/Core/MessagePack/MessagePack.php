<?php
/**
 * Created by PhpStorm.
 * User: puri
 * Date: 5/10/2017 AD
 * Time: 21:57
 */

namespace Meebot\Core\MessagePack;


abstract class MessagePack {

    abstract protected function getType();
    protected $type;
}