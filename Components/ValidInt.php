<?php


namespace Components;


class ValidInt implements Validator
{
    public function isValid($data)
    {
        if (!is_int($data)) {
            return false;
        } else {
            return true;
        }
    }
}