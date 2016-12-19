<?php

//requisita a classe Contato.
require_once("../Model/Contato.php");


//verifica se recebeu por GET o parâmetro op.
if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}


// para cada valor recebido em 'op', será realizada uma ação.
switch ($op) {
    case 'novo':// requisição par a cadastrar novo contato
        include('../View/novo.php');
        break;

    case 'cadastra':// requisição que recebe os parametros do contato e salva na sessão
        //verifica se o formulário foi recebido via POST
        if (isset($_POST['submit'])) {
            //recebe os parâmetros
            $nome = $_POST['nome'];
            $email = $_POST['email'];

            try {
                //se algum campo não for preenchido, lança exceção
                if ($nome == "" || $email == "")
                    throw new Exception('Erro');

                // se a exceção não foi lançada acima, instancia um 
                // objeto da classe contato
                $contato = new Contato($nome, $email);

                //inicia sessão
                session_start('EmailContato');

                //verifica se a sessão já foi inicializada
                if (!isset($_SESSION['agenda'])) {
                    //inicia o vetor 'agenda' na sessão
                    $_SESSION['agenda'] = array();
                }

                //coloca o novo contato no final do vetor
                array_push($_SESSION['agenda'], $contato);
                
                $sucesso = true;

                //prepara as mensagens para o mostra.php
                if ($sucesso) {
                    $msg = "O contato " . $nome . " (" . $email . ") foi cadastrado com sucesso!";
                } else {
                    $msg = "O contato n&atilde;o foi adicionado. Tente novamente mais tarde!";
                }
                //limpa as variáveis
                unset($nome);
                unset($email);

                //inclui o mostra.php
                include('../View/mensagem.php');
            } catch (Exception $e) {//caso tenha lançado execeção
                if ($nome == "") {
                    $msg = "O campo <strong>Nome</strong> deve ser preenchido!";
                } else if ($email == "") {
                    $msg = "O campo <strong>E-mail</strong> deve ser preenchido!";
                }
                include('../View/mensagem.php');
            }
        }

        break;

    case 'lista'://requisição para listar os contatos cadastrados
        //inicia a sessão
        session_start('EmailContato');


        if (isset($_SESSION['agenda'])) {
            $result = $_SESSION['agenda'];
        }

        include('../View/lista.php');

        break;
    case 'sair'://requisição para destruir a sessão
        session_start('EmailContato');
        session_destroy();
        include('../View/index.php');

        break;

    default:
        include('../View/index.php');
        break;
}
?>
