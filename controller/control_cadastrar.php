<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){
  unset($_SESSION['nome']);
  unset($_SESSION['senha']);
  header('location:index.php');
}
include_once "../config.php";
$file=filter_input_array(INPUT_POST);
$cadastro=new Cadastro();
$cadastro->setNome($file['nome']);
$cadastro->setTelefone($file['telefone']);
$cadastro->setEmail($file['email']);
$cadastro->setCidade($file['cidade']);
$cadastro->setEstado($file['estado']);
$cadastro->setCategoria($file['categoria']);
$result =$cadastro->inserir();
if ($result === true) {
  header('location:..'.DIRECTORY_SEPARATOR.'index2.php?pag=message');
  exit();
}
if($sql == false) {
  header('location:..'.DIRECTORY_SEPARATOR.'index2.php?pag=message02');
  exit();
}


