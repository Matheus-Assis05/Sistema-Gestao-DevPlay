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
    <title>SGF - Perfil</title>
    <link rel="stylesheet" href="../assets/stylepainel.css">

    <!--BS5-->
    <link rel="stylesheet" href="../../assets-global/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets-global/bootstrap5/node_modules/bootstrap-icons/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a href="./logout.php" class="nav-link text-right">LogOut</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="perfil">
        <i class=""></i>
        <h2>Bem Vindo, <?php echo $_SESSION['nome']; ?></h2>
    </div>

<script src="../../assets-global/bootstrap5/js/bootstrap.bundle.min.js"></script>
</body>
</html>