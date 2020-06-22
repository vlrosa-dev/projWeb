
<?php

    function dadosPessoais(){

        $nome               = $_POST["name"];
        $email              = $_POST["email"];
        $cpf                = $_POST["cpf"];
        $sexo               = $_POST["sexo"];
        $telefone           = $_POST["telefone"];
        $celular            = $_POST["celular"];
        $nomeServico        = $_POST["nomeServico"];
        $tipoServico        = $_POST["tipoServico"];
        $experiencia        = $_POST["exp"];
        $categoria          = $_POST["categoria"];
        $disponibilidade    = $_POST["disponibilidade"];
        $descricao          = $_POST["descricao"];

        $db = new PDO("mysql:host=localhost;dbname=appservice;charset=utf8","root","");
        $db->query
            ("INSERT INTO cad_servicos 
            (nome, email, cpf, sexo, telefone, celular, nomeServico, tipoServico, expericencia, categoria, disponibiidade, descricao) 
            VALUES 
            ('$nome','$email','$cpf','$sexo','$telefone','$celular', '$nomeServico','$tipoServico','$experiencia','$categoria','$disponibilidade','$descricao')");

    }

    function endereco(){
        
        $cep            = $_POST["cep"];
        $numero         = $_POST["numero"];
        $estado         = $_POST["estado"];
        $cidade         = $_POST["cidade"];
        $endereco       = $_POST["endereco"];
        $complemento    = $_POST["complemento"];

        $db = new PDO("mysql:host=localhost;dbname=appservice;charset=utf8","root","");
        $db->query("INSERT INTO endereco (cep, numero, estado, cidade, endereco, complemento, id_pessoa) 
                    VALUES ('$cep','$numero','$estado','$cidade','$endereco','$complemento')");

    }

    function main(){

        dadosPessoais()
        endereco()
        print "cadastro realizado com sucesso!";
        //echo"<script>window.location='index.html';alert('sua mensagem foi enviada com sucesso! Estaremos retornando em breve');</script>";
    }

    main()
?>    
