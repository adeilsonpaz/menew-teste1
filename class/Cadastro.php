<?php
class Cadastro extends Base
{
    private $nome;
    private $telefone;
    private $email;
    private $cidade;
    private $estado;
    private $categoria;
    public function setNome($nome){
        $this->nome=$nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setTelefone($telefone){
        $this->telefone=$telefone;
    }
    public function getTelefone(){
        return $this->setTelefone;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setCidade($cidade){
        $this->cidade=$cidade;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function setEstado($estado){
        $this->estado=$estado;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function setCategoria($categoria){
        $this->categoria=$categoria;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function exibir(){        
        $sql=self::bd()->prepare('SELECT id_cadastro, nome,telefone,email,cidade,estado,categoria FROM cadastro');
        if($sql->execute()){
            $query=$sql->fetchall();
            return $query; 
            exit();   
        }else {
            return false;
        }            
    }    
    public function delete($id){
        $sql=self::bd()->prepare('DELETE FROM cadastro WHERE id_cadastro=?');
        $sql->bindParam(1,$id);       
        if($sql->execute()){
            return true;
            exit();
        }else{
            return false;
            exit();
        }
    }
    public function inserir(){        
        $sql=self::bd()->prepare('INSERT INTO cadastro(nome,telefone,email,cidade,estado,categoria) VALUES(?,?,?,?,?,?)');       
        $sql->bindParam(1,$this->nome);
        $sql->bindParam(2,$this->telefone);
        $sql->bindParam(3,$this->email);
        $sql->bindParam(4,$this->cidade);
        $sql->bindParam(5,$this->estado);
        $sql->bindParam(6,$this->categoria);        
        if($sql->execute()){
            return true;
            exit();
        }else{
            return false;
            exit();
        }
    }
    public function alterar($id,$nome,$telefone,$email,$cidade,$estado,$categoria){
        $sql=self::bd()->prepare("UPDATE cadastro SET nome= '$nome',telefone='$telefone',email='$email',cidade='$cidade',estado='$estado',categoria='$categoria' WHERE id_cadastro = '$id'");                
        if($sql->execute()){
            return true;
            exit();
        }else{
            return false;
            exit();
        }
    }
}
