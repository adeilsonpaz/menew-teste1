<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){
  unset($_SESSION['nome']);
  unset($_SESSION['senha']);
  header('location:index.php');
}
$login = $_SESSION['nome'];
include 'views'.DIRECTORY_SEPARATOR.'header.php';
    $file = filter_var(@$_GET['pag']);
    switch ($file) {         
        case 'cadastro':            
            include 'views/cadastrar_form.php';                                   
            break;            
        case 'message':
            include_once 'views'.DIRECTORY_SEPARATOR.'cadastrar_form.php';
              print('<div class="alert alert-success" role="alert"><strong>OK!</strong> Cadastro Realizado com Sucesso!</div>');                          
            break;
        case 'message02':
            include_once 'views'.DIRECTORY_SEPARATOR.'cadastrar_form.php';
                print('<div class="alert alert-danger" role="alert"><strong>Erro!</strong> Ocorreu um erro ao cadastrar!</div>');
            break;
        case 'message03':
            include_once 'views'.DIRECTORY_SEPARATOR.'cadastrar_form.php';
            print('<div class="alert alert-danger" role="alert"><strong>OK!</strong> Cadastro Editado com Sucesso!</div>');
            break;
        case 'message04':
            include_once 'views'.DIRECTORY_SEPARATOR.'cadastrar_form.php';
            print('<div class="alert alert-danger" role="alert"><strong>ERRO!</strong>Ocorreu um erro ao editar cadastro!</div>');
        break;
        case 'message05':
            include_once 'views'.DIRECTORY_SEPARATOR.'cadastrar_form.php';
            print('<div class="alert alert-danger" role="alert"><strong>OK!</strong>Deletado com sucesso!</div>');
        break; 
        case 'message06':
            include_once 'views'.DIRECTORY_SEPARATOR.'cadastrar_form.php';
            print('<div class="alert alert-danger" role="alert"><strong>ERRO!</strong>Ocorreu um erro ao deletar cadastro!</div>');
        break;
        case 'list':            
            include_once 'views'.DIRECTORY_SEPARATOR.'listar_form.php';
            break;
        case 'sair':            
            include_once 'out.php';
            break;
        default:
        print'<br><img src="views/image/menew.png" class="img-fluid" alt="Imagem responsiva">';        
        break;
    }
include_once 'views/footer.php';
