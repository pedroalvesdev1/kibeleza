<?php


require_once("vendor/phpmailer/PHPMailer.php");

require_once("vendor/phpmailer/SMTP.php");

require_once("vendor/phpmailer/Exception.php");

$ok = 0 ;
try {
    require_once("../config/config.php");
    if (isset($_POST["email"])) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $fone = $_POST["telefone"];
        $mensagem = $_POST["mensagem"];
        $assunto = "CONTATO VIA SITE";
        
        // echo $nome . $email . $fone .  $mensagem . $assunto;
        
        
        /******************************/
        /* SALVAR NO BANCO DE DADOS */
        /******************************/
        try {
            // Configuração do banco de dados
            $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Comando INSERT
            $sql = "INSERT INTO tbl_contato (nome_contato, email_contato, telefone_contato, mensagem_contato, created_date_contato, update_date_contato) 
            VALUES (:nome, :email, :telefone, :mensagem, NOW(), NOW())";
            
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":telefone", $fone);
            $stmt->bindParam(":mensagem", $mensagem);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro ao salvar no banco: " . $e->getMessage();
        }
        //instanciando a classe PHPMailer
        $phpmail = new PHPMailer\PHPMailer\PHPMailer();
        
        //Enviar o mail via SMTP
        
        $phpmail -> isSMTP();
        $phpmail-> SMTPDebug = 0;
        $phpmail -> Debugoutput = 'html';
        $phpmail -> Host = "smtp.gmail.com";
        $phpmail -> Port = 465;
        $phpmail -> SMTPSecure = 'ssl';//certificação de segurança
        $phpmail -> SMTPAuth = true;//autentifiaçãodo servidor
        $phpmail -> Username = 'pedroalves5846@gmail.com'; // email do usuario
        $phpmail -> Password = "nvlf stmm kwcv npon "; // senha para realizar o envio
        $phpmail -> isHTML(true);
        //Sistema envia atraves do email interno
        $phpmail -> setFrom("pedroalves5846@gmail.com", $nome);
        // o form do site esta enviado para quem?
        $phpmail -> addAddress("pedroalves5846@gmail.com", $assunto);
        
        $phpmail-> Subject = $assunto; // assunto email
        $phpmail-> msgHTML (
            "Nome: $nome <br>
             Email: $email <br>
             Telefone: $fone <br>
             Mensagem: $mensagem"
        );
        //Corpo email outros serbers
        $phpmail -> AltBody = "
            Nome: $nome \n
            Email: $email \n
            Telefone: $fone \n
            Mensagem: $mensagem
        ";
        
        if($phpmail->send()){
            $ok = 1;
            //echo "Sua mensagem foi enviada com sucesso";
            require_once("index.php");
        }
        else{
            $ok = 2;
            echo "Não foi possivel enviar a mensagem! ERRO:" .$phpmail->ErrorInfo;
        }
        $phpmailResposta->send();
        
        /************************************************/
        /************  email resposta          **********/
        /************************************************/
        
        //instanciando a classe PHPMailer
        $phpmailResposta = new PHPMailer\PHPMailer\PHPMailer();
        
        //Enviar o mail via SMTP
        
        $phpmailResposta -> isSMTP();
        $phpmailResposta-> SMTPDebug = 0;
        $phpmailResposta -> Debugoutput = 'html';
        $phpmailResposta -> Host = "smtp.gmail.com";
        $phpmailResposta -> Port = 465;
        $phpmailResposta -> SMTPSecure = 'ssl';//certificação de segurança
        $phpmailResposta -> SMTPAuth = true;//autentifiaçãodo servidor
        $phpmailResposta -> Username = 'pedroalves5846@gmail.com'; // email do usuario
        $phpmailResposta -> Password = "nvlf stmm kwcv npon"; // senha para realizar o envio
        $phpmailResposta -> isHTML(true);
        //Sistema envia atraves do email interno
        $phpmailResposta -> setFrom("pedroalves5846@gmail.com", "KIBELEZA - ESTETICA");
        // o form do site esta enviado para quem?
        $phpmailResposta -> addAddress($email, $assunto);
        
        $phpmailResposta-> Subject = $assunto; // assunto email
        $phpmailResposta-> msgHTML (
            "Olá $nome, em breve retornaremos o contato"
        );
        //Corpo email outros serbers
        $phpmailResposta -> AltBody = "
            Olá $nome, em breve retornaremos o contato
        ";
        
        $phpmailResposta->send();
        
    }
} 

catch (Exception $erro) {
    echo "Erro:" . $erro;
}
