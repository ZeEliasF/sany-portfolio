<?php

class conexaoSany {

    //Conexão SERVER
    private $host = "localhost";
    private $user = "u737233951_sany";
    private $password = "ironman1963";
    private $port = "3306";
    private $con = NULL;
    private $dbname = "u737233951_sany";

    //Conexão LOCALHOST
    //private $host = "localhost";
    //private $user = "root";
    //private $password = "";
    //private $port = "3306";
    //private $con = NULL;
    //private $dbname = "sany-portifolio";


    public function openSany() {

        $this->con = new PDO('mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbname . '', $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')); //� uma maneira de for�ar PDO usar O UTF-8 para fazer a conex�o com mysql
        return $this->con;
    }

    public function close() {

        $this->con = NULL;
    }

    public function checkStatus() {

        if (!$this->con) {

            echo "<h3> O sistema n�o est� conectado a [$this->dbname] em [$this->host]</h3>";
        } else {

            echo "<h3> O sistema est� conectado a [$this->dbname] em [$this->host]</h3>";
        }
    }

}
?>