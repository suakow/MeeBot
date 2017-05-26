<?php
/**
 * Created by PhpStorm.
 * User: puri
 * Date: 5/26/2017 AD
 * Time: 16:01
 */

namespace Meebot\Core\MessagePack\Action;


abstract class Action {
    protected $type;
    public abstract function getType();
}