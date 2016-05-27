<?php

require_once("conexaoClass.php");

class consultaSany {

    private $query;

    public function __construct($query) {

        $this->query = $query;
    }

    public function getQuery() {

        return $this->query;
    }

    public function setQuery($query) {

        $this->query = $query;
    }

    public function executaConsulta() {

        try {

            $c = new conexaoSany();

            $con = $c->openSany();

            $resultado = $con->query($this->query);

            $con = NULL;
            $c->close();

            return $resultado;
        }
        catch (PDOException $e) {

            echo "<h3>ERRO! " . $e->getMessage() . "</h3>";
        }
    }

}
?>