<form class="form" method="post" action="./controller/control_cadastrar.php">
    <h3 class="text-primary">CADASTRO DE DADOS</h3>
    <div class="row">
        <div class="form-group col-md-8">
            <label for="nome">Nome:</label>
            <input type="text" placeholder="Ex.: nome" class="form-control" id="nome" name="nome">
        </div> 
        <div class="form-group col-md-4">
            <label for="telefone">Telefone:</label>
            <input type="text" class="form-control phone-ddd-mask" placeholder="Ex.: (00) 0000-0000" id="telefone"  name="telefone">
        </div> 
    </div>
    <div class="row">
        <div class="form-group col-md-3">
            <label for="email">Email:</label>
            <input type="text" placeholder="Ex.: adeilson@hotmail.com" class="form-control" id="email" name="email">
        </div>
        <div class="form-group col-md-3">
            <label for="cidade">Cidade:</label>
            <input type="text" placeholder="Ex.: Guarulhos" class="form-control" id="cidade" name="cidade">
        </div>
        <div class="form-group col-md-3">
        <label for="estado">Estado</label>
            <select  class="form-control" id="estado" name="estado">
                <option>Escolher</option>
                <option>Amazonas</option>
                <option>Bahia</option>
                <option>Piauí</option>
                <option>Rio de Janeiro</option>
                <option>São Paulo</option>                                  
            </select>   
        </div>
        <div class="form-group col-md-3">            
           <label for="categoria">Categoria</label>
            <select  class="form-control" id="categoria" name="categoria">
                <option>Escolher</option>
                <option>Funcionario</option>            
                <option>Cliente</option>
                <option>Fornecedor</option>                  
            </select>             
        </div>
    </div>
    <div class="row">    
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a class="nav-link" class="btn btn-danger" href="index2.php?pag="> Cancelar </a>              
            <hr>        
        </div>
    </div>
</form>


