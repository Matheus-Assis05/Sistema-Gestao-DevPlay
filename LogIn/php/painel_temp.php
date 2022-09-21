<?php
if (!isset($_SESSION)) {
    session_start();
} //se nao exsistir uma sessao, começe uma

/**
 * ADICIONAR SISTEMA DE PROTEÇÃO QUE VERIFICA SE HÁ UM ID ATIVO, SE NÃO, MOSTRAR ERRO
 * protecao.php[
 *  SE $_SESSION NAO EXISTIR (!isset()), COMECE UMA
 *   logo depois:
 *  SE $_SESSION['email'] NÂO EXISTIR, die("você deve estar logado para acessar a pagina")
 * ]
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Teste Temporario</title>
</head>

<body>
    <h1>Bem Vindo, <?php echo $_SESSION['nome']; ?></h1>

    <a href="#">LogOut</a> <!-- EM HREF ADICIONAR PHP QUE EXECUTA "session_destroy()" SE UMA SESSÂO ESTIVER ATIVA-->
</body>

</html>