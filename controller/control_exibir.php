<div class="table-responsive">
    <table class="table" style="text-align:center;">
        <tr>
            <td>CODIGO</td>
            <td>NOME</td>
            <td>EDITAR</td>
            <td>EXCLUIR</td>           
        <tr>  
        <form method="get" action="./views/edit_form.php">       
            <?php
                include 'config.php'; 
                $listar=new Cadastro();
                $result=$listar->exibir();
                foreach($result as $values)
                {                
                    $id=$values['id_cadastro'];
                    $nome=$values['nome'];       
                    echo '<tr><td>'.$id.'</td>';             
                    echo '<td>'.$nome.'</td>';                           
                    echo '<td><button type="submit" name="id" value="'.$id.'"class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></td>';
                    echo '<td><a link href="./controller/excluir.php?pag='.$id.'"><i class="bi bi-person-x-fill"></i></a></td></tr>';                                
                } 
            ?> 
        </form>                  
    </table>
</div>



