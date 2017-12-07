<?php


namespace Components;

class User
{
    private $name;
    private $age;


    private $rules = [
        'age' => 'int',
        'name' => 'strlen:8|required'
    ];

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function isValid(){
        $result = [];
        
        foreach ($this->rules as $key => $item) {
           $valid = new Model();
           $result[] = $valid->validate($this->$key, $item);
        }

        if (in_array("", $result)){
            return false;
        } else {
            return true;
        }
     }
}