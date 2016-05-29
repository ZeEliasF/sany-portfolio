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
            require_once("../phpmailer/class.phpmailer.php");
            $mail = new PHPMailer();

            //Define os dados de conexão no Servidor -> GMAIL

            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->SMTPSecure = "tls";
            $mail->SMTPAuth = true;
            $mail->Host = "smtp.gmail.com"; //Host do GMAIL
            $mail->Port = "587"; //Porta do GMAIL
            $mail->Username = "saanyrock@gmail.com"; //E-mail da Sany
            $mail->Password = "ironman1963"; //Põe a senha do e-mail da Sany


            //Define o remetente
            $mail->From = 'saanyrock@gmail.com';
            $mail->Sender = 'saanyrock@gmail.com';
            $mail->FromName = 'Sany Fernandes';
            //Define os destinatários
            $mail->AddAddress('saanyrock@gmail.com', 'Sany Fernandes'); //E-mail da Sany
            
            //Define os Dados Técnicos da Mensagem
            $mail->IsHTML(true);
            $mail->CharSet = 'UTF-8';
            //Define a mensagem
            $mail->Subject = "Nova mensagem de contato recebida!";
            $mail->Body = "Olá Sany, tem uma nova mensagem pra você:<br>
                           De: ".$this->contato->nome."<br>
                           Assunto: ".$this->contato->assunto."<br>
                           E-mail: ".$this->contato->email."<br>
                           Mensagem: ".$this->contato->mensagem."";

            //Envia o E-mail
            $enviado = $mail->Send();

            //Limpa toda a bagaça depois de enviar
            $mail->ClearAllRecipients();
            $mail->ClearAttachments();

            //Veficação se foi enviado mesmo
            if($enviado){
                echo "<script type='text/javascript'>
                       alert('Sua mensagem foi enviada!');
                       window.location = '../index.php?pagina=contato';
                      </script>";
            }
            else{
                echo "<script type='text/javascript'>
                       alert('Erro ao enviar a mensagem!');
                       window.location = '../index.php?pagina=contato';
                      </script>";
            }
        }
    }
}

?>
