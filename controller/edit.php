<?php
session_start();
include_once "../config.php";
$cadastro=new Cadastro();
$result =$cadastro->alterar($file['id'],$file['nome'],$file['telefone'],$file['email'],$file['cidade'],$file['estado'],$file['categoria']);
if ($result === true) {
    header('location:..'.DIRECTORY_SEPARATOR.'index2.php?pag=message03');
    exit();
}
if($sql == false) {
    header('location:..'.DIRECTORY_SEPARATOR.'index2.php?pag=message04');
    exit();
}

