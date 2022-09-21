<?php

/**
 * NAO ESTA SENDO FEITO DA FORMA MAIS SEGURA 
 * POIS ESTOU USANDO DE APRENDIZADO EM COMO A RELAÇÃO PHP-MYSQL FUNCIONA
 */

//Conexão com o banco
$usuario = 'root';
$senha = '';
$database = 'bancoSgf';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database); //cria a conexao

if ($mysqli->error) { //se caso houver um erro, funcão "die()" para terminar a conexão e mensagem de exceção
    die("Falha ao conectar ao banco de dados");
}

//Verificando se o form enviou informações e se são compativeis com as existentes no DB

if (isset($_POST['email']) || isset($_POST['senha'])) { //SE for enciado email e senha, executar login

    $email = $mysqli->real_escape_string($_POST['email']); //transforma em uma string limpa
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "select * from usuario where email = '$email' AND senha = '$senha'"; //procura o usuario no banco
    $sql_query = $mysqli->query($sql_code) or die("Falha no login" . $mysqli->error); //executa o código

    $quantidade = $sql_query->num_rows; //quantidade de linhas encontradas no select

    if ($quantidade == 1) { //se o select encontrar 1 registro que bate com o login

        $usuario = $sql_query->fetch_assoc(); //joga os dados da query dentro da variavel $usuario

        if (!isset($_SESSION)) { // se NAO(!) existir nenhuma sessao ativa, começa uma sessão
            session_start();
        }


        //Adidicona à sessão, o nome e o email do usuario logado
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['nome'] = $usuario['nome'];

        header('Location: ./painel_temp.php'); //envia um HTTP que REDIRECIONA PARA OUTRA PÁGINA

    } else {
        echo "Falha ao logar, email ou senha incorretos";
    }
}

