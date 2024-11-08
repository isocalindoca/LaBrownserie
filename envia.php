<?php
    /**Envia e-mail */
    
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $celular = addslashes($_POST['celular']);
    $mensagem = addslashes($_POST['mensagem']);

    $para = "wellingtonbat@gmail.com";
    $assunto = "Formulario de contato";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Celular: ".$celular"\n"."Mensagem: ".$mensagem;

    $cabecalho = "From: wellingtonbat@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabecalho))
    {
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Erro ao enviar e-mail");
    }    

    /**Envia Whats */
    /*
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupere os dados do formulário
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $celular = $_POST["celular"];
        $mensagem = $_POST["mensagem"];
    
        // Mensagem que será enviada para o WhatsApp
        $texto = "Nova mensagem de contato:\nNome: $nome\nEmail: $email\nCelular: $celular\nMensagem: $mensagem";
    
        // Envie a mensagem para o WhatsApp usando a API do WhatsApp
        $whatsapp_numero = "5511959364212"; // Seu número do WhatsApp
        $api_url = "https://api.whatsapp.com/send?phone=$whatsapp_numero&text=" . urlencode($texto);
        
        // Redirecione o usuário para o link do WhatsApp
        header("Location: $api_url");
        exit;
    }
    */
?>