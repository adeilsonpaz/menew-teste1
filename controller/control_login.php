<?php 
session_start();
include_once "../config.php";
$file=filter_input_array(INPUT_POST);
$login=new Login();
$login->setUsuario($file['nome']);
$login->setSenha($file['senha']);
$rest=$login->entrar();
print_r($rest);
if ($rest == true) {    
    echo "sessão criada";
    $_SESSION['nome'] = $file['nome'];
    $_SESSION['senha'] =$file['senha'];
    header('location:../index2.php?pag=');
}else{
    session_unset($rest);
    header('location:../index.php?pag=err');
}

