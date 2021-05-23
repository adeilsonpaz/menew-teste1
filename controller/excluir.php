<?php
session_start();
include_once "../config.php";
$file=filter_input_array(INPUT_GET);
$cadastro=new Cadastro();
$result=$cadastro->delete($file['pag']);
if ($result === true) {
    header('location:..'.DIRECTORY_SEPARATOR.'index2.php?pag=message05');
    exit();
}
if($sql == false) {
    header('location:..'.DIRECTORY_SEPARATOR.'index2.php?pag=message06');
    exit();
}
