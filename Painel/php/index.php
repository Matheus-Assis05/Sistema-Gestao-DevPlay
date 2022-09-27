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
        <!--=========== NAVBAR ===========-->
        <div class="collapse" id="navbarToggleExternalContent">
            <div class=" bg-dark p-4">
                <h5 class="text-white h4">SGF</h5>
                    <ul>
                        <li><a class="nav-link text-white h5" href="./index.php">Home</a></li>
                        <li><a class="nav-link text-white h5" href="./logout.php">LogOut</a></li>
                    </ul>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        
        <!--menus laterais serão feitos usando float-->
        
        <!--============= MENU ESQUERDA ==============-->
            <div class="menu-l"> 
                <ul>
                    <li><div class="perfil">
                        <i class="bi bi-person-circle"></i><?php echo $_SESSION['nome']?>
                    </div></li>
                    <br>
                    <li><div class="lanca">
                        <a role="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-plus-circle"></i>Adicionar Lançamento
                        </a>
                    </div></li>

                    <li><div class="graf">
                        <a href="">
                            <i class="bi bi-graph-up"></i>Gráfico Detalhado
                        </a>
                    </div></li>
                </ul>
            </div>   

        <!--===========TABELA DIREITA==============-->
            <div class="tabela-r">
                <table class="table table-light">
                    <thead>
                        <tr>
                            <th scope="col">MÊS</th>
                            <th scope="col">Renda</th>
                            <th scope="col">Despesa</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
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
