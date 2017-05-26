<?php
/**
 * Created by PhpStorm.
 * User: puri
 * Date: 5/10/2017 AD
 * Time: 22:32
 */

namespace Meebot\Core\Event\Message;


class TextMessage {

    protected $type = 'text';
    private $id;
    private $text;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * TextMessage constructor.
     * @param $id
     * @param $text
     */
    public function __construct($id, $text)
    {
        $this->id = $id;
        $this->text = $text;
    }

    public function getType()
    {
        // TODO: Implement getType() method.
        return $this->type;
    }
}