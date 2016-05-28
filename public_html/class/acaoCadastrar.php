<?php
if (isset($_POST['nome'])) {
    include_once("../class/contatoController.php");
    $cc = new contatoController();
    $cc->cadastroContato();
}
?>
