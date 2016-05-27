<?php

require_once("consultaClass.php");

class Contato{
    public $id;
    public $nome;
    public $email;
    public $assunto;
    public $mensagem;

    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getAssunto(){
        return $this->assunto;
    }

    public function getMensagem(){
        return $this->mensagem;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setAssunto($assunto){
        $this->assunto = $assunto;
    }

    public function setMensagem($mensagem){
        $this->mensagem = $mensagem;
    }

    public function cadastraContato(){
        $c = new consultaSany("INSERT INTO contato (id, nome, email, assunto, mensagem)
                           VALUES ('".$this->getId()."',
                                   '".$this->getNome()."',
                                   '".$this->getEmail()."',
                                   '".$this->getAssunto()."',
                                   '".$this->getMensagem()."')");
        if($c->executaConsulta()){
            return true;

        }
        else{
            return false;
        }
    }
}
?>