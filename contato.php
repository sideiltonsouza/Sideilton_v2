<!DOCTYPE html>
<html lang="pt-br" style="background: #fff;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrigado pelo contato</title>
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="styles/emailmobile.css">
    <link rel="stylesheet" media="screen and (min-width: 769px)" href="styles/emaildesktop.css">
    <link rel="stylesheet" href="styles/fonts.css">
</head>

<body>

<?php

    $to = "sideiltonsantos@hotmail.com"; // Email que vai receber as mensagens
    $cc = "sideiltonsouza@outlook.com"; // Email que recebe uma cópia, pode remover eassa linha caso não for usar

    //Dados recebidos do form
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    
    // Adiciona o arquivo class.phpmailer.php - você deve especificar corretamente o caminho da pasta com o este arquivo.


    include_once 'autenticar.php'; //arquivo com o usuario e senha
    include_once 'PHPMailer/src/PHPMailer.php';
    include_once 'PHPMailer/src/Exception.php';
    include_once 'PHPMailer/src/SMTP.php';
    include_once 'PHPMailer/src/OAuth.php';

    //Crie um arquivo com as credenciais do seu email
    //e armazene nas variaveis $senha e $username
    //ou adicione nesse mesmo as variaveis $senha e $username

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    if ($nome) {
        // Inicia a classe PHPMailer
        $mail = new PHPMailer();
        // DEFINIÇÃO DOS DADOS DE AUTENTICAÇÃO - Você deve alterar conforme o seu domínio!
        $mail->IsSMTP(); // Define que a mensagem será SMTP
        $mail->Host = "smtp.gmail.com"; // Seu endereço de host SMTP
        $mail->SMTPAuth = true; // Define que será utilizada a autenticação -  Mantenha o valor "true"
        $mail->Port = 587; // Porta de comunicação SMTP - Mantenha o valor "587"
        $mail->SMTPSecure = false; // Define se é utilizado SSL/TLS - Mantenha o valor "false"
        $mail->SMTPAutoTLS = true; // Define se, por padrão, será utilizado TLS - Mantenha o valor "false"
        $mail->Username = $user; // Conta de email existente e ativa em seu domínio
        $mail->Password = $senha; // Senha da sua conta de email
        // DADOS DO REMETENTE
        $mail->Sender = $to; // Conta de email existente e ativa em seu domínio
        $mail->From = $to; // Sua conta de email que será remetente da mensagem
        $mail->FromName = "Novo Feedback do site"; // Nome da conta de email
        // DADOS DO DESTINATÁRIO
        $mail->AddAddress($to); // Define qual conta de email receberá a mensagem

        // Definição de HTML/codificação
        $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
        $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)

        // DEFINIÇÃO DA MENSAGEM

        $mail->Subject  = "Nome: " . $nome; // Assunto da mensagem

        $mail->Body .= "<div style='width: 100%; height: 500px; background: #e9e9e9; text-align:center; padding-top:50px;'>
        <div style='font-family: Verdana, Geneva, Tahoma, sans-serif;'><h3 style='color: #145764; margin-bottom:0;'>Nome: </h3><h3 style='color: #4e4e4e; font-weight:400; margin-top:0;'>" . ucwords($nome) . "</h3></div>

        <div style='font-family: Verdana, Geneva, Tahoma, sans-serif;'>
        <h3 style='color: #145764; margin-bottom:0;'>Email: </h3>
        <h3 style='color: #4e4e4e; font-weight:400; margin-top:0;'>" . $email . "</h3>
        <h3 style='color: #145764; margin-bottom:0;'>Mensagem: </h3>
        <h3 style='color: #4e4e4e; font-weight:400; margin-top:0;'>" . $mensagem . "</h3></div>"; //Texto da mensagem


        
        // ENVIO DO EMAIL
        $enviado = $mail->Send();

        // Limpa os destinatários e os anexos
        $mail->ClearAllRecipients();


        // Exibe uma mensagem de resultado do envio (sucesso/erro)
        /*if ($enviado) {

            <span>Obrigado pelo feedback.</span>";

        }else{
            
            <span>Desculpa, houve um erro.</span>";

        }*/
    }
    ?>

    <!-- Aqui eu mostro uma mensagem de agradecimento independente de 
        ter tido sucesso ou não no envio do email, mas essa parte pode
        e deveria e aconselho a ser logo acima, e só mostrar se tiver enviado
        ou mostrar uma mensagem diferente caso não tenha sido enviado -->

    <div id="tanks">
        <span>Obrigado pelo contato!
            <h4 id="msg">Sua mensagem foi enviada e será respondida o mais rápido possivel. Para um retorno mais rápido considere contato via WhatsApp.</h4>
            <a href="index.php">Voltar</a>
        </span>
        <img src="contents/images/tanks.png" alt="" srcset="">
    </div>

</body>

</html>