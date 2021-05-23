<!DOCTYPE HTML>
<html lang='pt-BR'>
    <head>
        <title>Login</title>
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
                <h1><span class="badge badge badge-warning"> Menew Register </span></h1>      
            </nav>
        </div>
        <div class="container ">
            <hr>
            <div class="row">
                <div class="col-md-6 ">
                    <h3>Login de Acesso</h3>
                    <form class="form-group" method="post" action="./controller/control_login.php">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Usuario: (menew)" name="nome" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Senha: (menew123) " name="senha" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn btn btn btn-primary" value="ENTRAR " />
                        </div>                                                
                    </form>
                    <?php 
                        if (isset($_GET['pag']) == 'err') {
                            print('<br><div class="alert alert-danger" role="alert"><strong>Erro de acesso!</strong> Verifique nome de usuario e senha!</div>');                    
                            header('refresh:5; ./index.php');
                        } 
                    ?>
                </div>
                <div class="col-md-6 ">
                    <img src="views/image/menew.png" class="img-fluid" alt="Imagem responsiva">
                </div>                
            </div>                
        </div>
        <div class="container"
            <div class="col-md-12">
                <footer class="text-center text-white" style="background-color: #f1f1f1;">
                    <div class="text-center text-dark p-3" style="background-color: rgba(50,205,50);">
                        <a class="text-dark">Menew Register</a> © 2021 Copyright. 
                    </div>
                </footer>
            </div> 
        </div> 
    </body>
</html>
