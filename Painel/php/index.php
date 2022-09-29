<?php
if (!isset($_SESSION)) {
    session_start();
} //se nao exsistir uma sessao, começe uma

include('./protection.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGF - Início</title>
    <!--BS5-->
    <link rel="stylesheet" href="../../assets-global/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets-global/bootstrap5/node_modules/bootstrap-icons/font/bootstrap-icons.css">

    <!--CSS-->
    <?php
    echo '<link rel="stylesheet" href="../assets/./stylepainel.css">';
    echo '<style>';
    include('../assets/stylepainel.css');
    echo '</style>';
    ?>
</head>

<body>
        <!--============= MENU LATERAL ESQUERDA ==============-->
            <div class="container text-left bg-dark menu-l"> <!--Usnado o grid do bootstrap farei um dashboard formado por 1 coluna com diversas linhas-->
                <div class="col bg-dark coluna1">
                    <div class="row">
                        <strong>SGF - Painel</strong>
                    </div>
                    <div class="row">
                        <strong><i class="bi bi-person-circle"></i>
                        <?php echo $_SESSION['nome'];?></strong>
                        <div class="dropdown-divider"></div>
                    </div>
                    <div class="row">
                        <a role="button" class="btn btn-primary">
                            <p><i class="bi bi-graph-up"></i>
                            Gráfico Detalhado</p>
                        </a>
                    </div>
                    <div class="row">
                        <a role="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <p><i class="bi bi-plus-circle"></i>
                            Adicionar Lançamento</p>
                        </a>
                    </div>
                </div>
            </div> 

        <!--===========TABELA DIREITA==============-->
            

        <!--======MODAL DE ADICIONAR LANÇAMENTO=======-->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">PREENCHA</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--====FORM DO MODAL===-->
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">MES: </span>
                                <input type="text" class="form-control" placeholder="JANEIRO" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">RENDA:</span>
                                <input type="number" class="form-control" placeholder="0.00" aria-describedby="basic-addon1" name="renda">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">DESPESA:</span>
                                <input type="number" class="form-control" placeholder="0.00" aria-describedby="basic-addon1" name="despesa">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">FECHAR</button>
                        <button type="button" class="btn btn-primary">ENVIAR</button>
                    </div>
                    </div>
                </div>
                </div>

<script src="../../assets-global/bootstrap5/js/bootstrap.bundle.min.js"></script>
</body>
</html>
