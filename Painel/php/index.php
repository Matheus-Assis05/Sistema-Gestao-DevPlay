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
                <div class="perfil">
                    <i class=""></i>
                    <h2>Bem Vindo, <?php echo $_SESSION['nome']; ?></h2>
                </div>
            </div>   

<script src="../../assets-global/bootstrap5/js/bootstrap.bundle.min.js"></script>
</body>
</html>