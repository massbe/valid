<?php


namespace Components;


class Model
{
    public function validate($data, $rules)
    {
        if (!$rules) {
            throw new \Exception('Нет правил для валидации');
        }  else {
                $determRules = explode("|", $rules);
                foreach ($determRules as $item) {
                    //$determDataRules = explode(":", $item);
                    if(stristr($item, ':', true)){
                        $rule = stristr($item, ':', true);
                        $length = substr(strstr($item, ':'), 1, strlen($item));

                        $validatorFactory = new ValidatorFactory();
                        return $validatorFactory->create($data, $rule, $length);
                    } else {
                        $validatorFactory = new ValidatorFactory();
                        return $validatorFactory->create($data, $item);
                    }
                }
        }
    }
}