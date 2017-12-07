<?php


namespace Components;


class ValidRequired implements Validator
{
    public function isValid($data)
    {
        if (empty($data)) {
            return false;
        } else {
            return true;
        }
    }
}