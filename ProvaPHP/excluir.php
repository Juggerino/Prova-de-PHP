<?php

require __DIR__.'/vendor/autoload.php';


use \App\Entity\User;

//validacao do ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
}

//consulta o usuario
$newUser = User::getUser($_GET['id']);


//validacao da vaga
if(!$newUser instanceof User){
    header('location: index.php?status=error');
    exit;
}


//validacao do POST
if(isset($_POST['excluir'])){
    
    $newUser->excluir();
    
    header('location: index.php?status=success');
    exit;
}


include __DIR__.("/includes/hearder.php");

include __DIR__.("/includes/confirmar-exclusao.php");

include __DIR__.("/includes/footer.php");


