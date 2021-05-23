<?php
class Login extends Base
{
    private $usuario;
    private $senha;
    public function setUsuario($usuario){
        $this->usuario=$usuario;
    }
    public function getUsuario(){
        return $this->usuario;
    }
    public function setSenha($senha){
        $this->senha=$senha;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function entrar(){
        $login=self::bd()->prepare("SELECT nome, pass FROM login");
        $login->execute();
        $result=$login->fetchall();
        foreach($result as $valor){       
            if($valor['nome'] == $this->getUsuario() && $valor['pass'] == $this->getSenha()){
                return true;
                exit();
                break;
            }else{
                return false;
                exit();
                break;
            }
        }
    }
}
