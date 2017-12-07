<?php


namespace Components;


class ValidStrlen implements Validator
{
    public $length;

    public function __construct($length)
    {
        $this->length = $length;
    }

    public function isValid($data)
    {
        if (!(strlen($data) == $this->length)) {
            return false;
        } else {
            return true;
        }
    }
}