<?php
    if (isset($_GET['cad'])) {
        $pag=$_GET['cad'];
        if ($pag == 'cadastro') {
            header('location:../index2.php?pag=cadastro');
        exit();
        }
        if ($pag == 'lista') {
            header('location:../index2.php?pag=lista');
            exit();
        }        
    }    
?>
<!DOCTYPE HTML>
<html lang='pt-BR'>
    <head>
        <title>Registro Nemew</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>       
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>       
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body >
    <div class="container">
        <hr>
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="edit_form.php?cad=cadastro"><i class="bi bi-archive-fill"></i> CADASTRAR </></a>
                    </li>     
                    <li class="nav-item">                
                      <a class="nav-link" href="edit_form.php?cad=lista"><i class="bi bi-person-lines-fill"></i> LISTAR </a>                   
                    </li>
                </ul>
            </div>             
            <h2><span class="badge badge badge-warning"> Menew Register </span></h2>
            &nbsp;
            &nbsp; 
            <a class="text-warning" href="index2.php?pag=sair"> Sair <i class="bi bi-person-square"></i></a> 
        </nav>
    <!--container-->
</htm>
<?php
session_start();
include_once '../config.php';   
$id=filter_var($_GET['id']);
$listar=new Cadastro();
$result=$listar->exibir();
foreach($result as $values){
    if($id == $values['id_cadastro']){
        ?>
        <hr>      
        <form class="form" method="post" action="get_form.php">
            <h3 class="text-primary">EDIÇÃO DE CADASTRO</h3>
            <div class="row">              
                <div class="form-group col-md-8">
                    <input type="hidden" class="form-control"  name="id" value="<?php echo $values['id_cadastro']; ?>">        
                    <label for="nome">Nome:</label>
                    <input type="text" placeholder="Ex.: nome" class="form-control"  name="nome" value="<?php echo $values['nome']; ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="telefone">Telefone:</label>
                    <input type="text" class="form-control phone-ddd-mask" placeholder="Ex.: (00) 0000-0000"   name="telefone" value="<?php echo $values['telefone']; ?>">
                </div> 
            </div>
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="email">Email:</label>
                    <input type="text" placeholder="Ex.: adeilson@hotmail.com" class="form-control"  name="email" value="<?php echo $values['email']; ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="cidade">Cidade:</label>
                    <input type="text" placeholder="Ex.: Guarulhos" class="form-control"  name="cidade" value="<?php echo $values['cidade']; ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="estado">Estado</label>
                    <select  class="form-control"  name="estado" value="<?php echo $values['estado']; ?>">
                        <option><?php echo $values['estado']; ?></option>
                        <option>Amazonas</option>
                        <option>Bahia</option>
                        <option>Piauí</option>
                        <option>Rio de Janeiro</option>
                        <option>São Paulo</option>                                  
                    </select>   
                </div>
                    <div class="form-group col-md-3">            
                    <label for="categoria">Categoria</label>
                        <select  class="form-control" id="categoria" name="categoria" value="<?php echo $values['categoria']; ?>">
                        <option><?php echo $values['categoria']; ?></option>
                        <option>Funcionario</option>            
                        <option>Cliente</option>
                        <option>Fornecedor</option>                  
                    </select>             
                </div>
            </div>       
            <div class="row">    
                <div class="form-group col-md-12">                 
                    <button type="submit" class="btn btn-primary">Editar</button>
                    <a class="btn btn-warning " href="../index2.php?pag=edite">Cancelar</a>
                </div>
            </div>
        </form>
        <?php
    }
}      