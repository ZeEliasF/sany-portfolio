<?php

include_once("contatoClass.php");

class contatoController{
    private $contato;

    public function __construct(){
        $this->contato = new Contato();
    }

    public function cadastroContato(){
        $this->contato->nome = ($_POST["nome"]);
        $this->contato->email = ($_POST["email"]);
        $this->contato->assunto = ($_POST["assunto"]);
        $this->contato->mensagem = ($_POST["mensagem"]);

        if($this->contato->cadastraContato()){
            echo "<script type='text/javascript'>
                  alert('Sua mensagem foi enviada!');
                  window.location = '../paginas/contato.php';
                  </script>";
        }
        else{
            echo "<script type='text/javascript'>
                  alert('Erro ao enviar a mensagem!');
                  window.location = '../paginas/contato.php';
                  </script>";
        }

    }
}


?>