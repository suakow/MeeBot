<?php
/**
 * Created by PhpStorm.
 * User: puri
 * Date: 5/10/2017 AD
 * Time: 21:55
 */

namespace Meebot\Core\MessagePack;


class TextMessagePack extends MessagePack {

    protected $type = 'text';
    private $text;

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

    public function getType()
    {
        // TODO: Implement getType() method.
        return $this->type;
    }

    public function build(){
        $var['type'] = $this->type;
        $var['text'] = $this->text;

        return $var;
    }
}