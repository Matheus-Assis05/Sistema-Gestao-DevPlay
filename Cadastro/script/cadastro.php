<?php
//Receber valores do Form
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senhaConf = $_POST['confSenha'];

//Cadastro no Banco
if ($senha == $senhaConf) {
    $conn = new mysqli('localhost', 'root', '', 'bancoSgf'); //atribui uma conexao mysql (servidor, nome, senha, bd)
    if ($conn->connect_error) {
        die('Connection Falied: ' . $conn->connect_error); //mensagem de erro de conexao
    } else {
        $stmt = $conn->prepare("insert into usuario(nome, email, senha) values(?, ?, ?)"); //CRUD que insere os dados na tabela
        $stmt->bind_param("sss", $nome, $email, $senha);
        $stmt->execute();

        echo "<h1>REGISTRADO</h1>";
    }
} else {
    echo "<h1><a href='../index.html'>ERRO!, A SENHA DEVE SER IGUAL A CONFIRMAÇÃO, CLIQUE AQUI PARA VOLTAR</a></h1>";
}