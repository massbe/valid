<?php
include_once ('vendor/autoload.php');

use Components\User;
//use Components\ValidatorModels;

$user = new User("Vadimkasa", 20);

if ($user->isValid()) {
    echo 'all data is valid';
}




