<?php
/**
 * Created by PhpStorm.
 * User: puri
 * Date: 5/10/2017 AD
 * Time: 22:18
 */

namespace Meebot\Core\Event;


class Source
{
    private $type;
    private $userId;

    /**
     * Source constructor.
     * @param $type
     * @param $userId
     */
    public function __construct($type, $userId)
    {
        $this->type = $type;
        $this->userId = $userId;
    }
}