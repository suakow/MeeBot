<?php
/**
 * Created by PhpStorm.
 * User: puri
 * Date: 5/26/2017 AD
 * Time: 16:02
 */

namespace Meebot\Core\MessagePack\Action;


class MessageAction extends Action {

    protected $type = 'message';
    private $label;
    private $message;

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function getType()
    {
        // TODO: Implement getType() method.
        return $this->type;
    }
}