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
                    <div class="row">
                        <a class="logout btn btn-secondary" href="./logout.php">LogOut</a>
                    </div>
                </div>
            </div> 

        <!--===========TABELA DIREITA==============-->
            <div class="container tabela">
                <div class="table-responsive-lg">
                    <table class="table table-light">
                        <thead>
                            <tr>
                                <th scope="col">MÊS</th>
                                <th scope="col">RENDA</th>
                                <th scope="col">DESPESA</th>
                                <th scope="col">TOTAL</th>
                            </tr>
                        </thead>
                        <tbody id="tabela">
                            <tr class="mes">
                                <td scope="row">0.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                            </tr>
                            <tr class="renda">
                                <td scope="row">0.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                            </tr>
                            <tr class="despesa">
                                <td scope="row">0.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                            </tr>
                            <tr class="total">
                                <td scope="row">0.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

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
                                <span class="input-group-text" id="basic-addon1">EMAIL: </span>
                              <input type="email" class="form-control" id="Lmail" aria-describedby="emailHelpId" placeholder="example@mail.com">
                              <small id="emailHelpId" class="form-text text-muted">Confirme o seu email de cadastro</small>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">MES: </span>
                                <input type="text" class="form-control" placeholder="JANEIRO" aria-describedby="basic-addon1" id="mes">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">RENDA:</span>
                                <input type="number" class="form-control" placeholder="0.00" aria-describedby="basic-addon1" id="renda">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">DESPESA:</span>
                                <input type="number" class="form-control" placeholder="0.00" aria-describedby="basic-addon1" id="despesa">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">FECHAR</button>
                        <button type="submit" class="btn btn-primary" onclick="enviarBD()">ENVIAR</button>
                    </div>
                    </div>
                </div>
                </div>

<script src="../../assets-global/bootstrap5/js/bootstrap.bundle.min.js"></script>
<script src="../assets/lancamento.js" type="text/javascript"></script>
</body>
</html>
