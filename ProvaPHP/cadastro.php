<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar vaga');

use \App\Entity\User;

$newUser = new User;




//validacao do POST
if(isset($_POST['name'],$_POST['email'],$_POST['color'])){
    $newUser->name  = $_POST ['name'];
    $newUser->email = $_POST ['email'];
    $newUser->color = $_POST ['color'];
   
    $newUser->cadastrar();

 
    header('location: index.php?status=success');
    exit;
}



include __DIR__.("/includes/hearder.php");

include __DIR__.("/includes/formulario.php");

include __DIR__.("/includes/footer.php");


