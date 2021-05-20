<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\User;

$user = User::getUsers();




include __DIR__.("/includes/hearder.php");
include __DIR__.("/includes/listagem.php");
include __DIR__.("/includes/footer.php");