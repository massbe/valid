<?php
include_once ('vendor/autoload.php');

use Components\User;

$user = new User("aaafaaaaa", 21);

if ($user->isValid()) {
    echo 'all data is valid';
} else {
    echo 'some data not valid';
}




