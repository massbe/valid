<?php


namespace Components;


class ValidatorFactory
{
    public function create($data, $role, $length = null)
    {
        switch ($role) {
            case 'int': {
               $validator = new ValidInt();
            } break;
            case 'strlen': {
                $validator = new ValidStrlen($length);
            } break;
            case 'required': {
                $validator = new ValidRequired();
            } break;
            default: {
                return false;
            }
        }

        return $validator->isValid($data);
    }
}