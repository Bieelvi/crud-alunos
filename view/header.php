<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../assets/css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Processo Seletivo MM</title>
</head>
<body>

<header>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-text fs-3 estilo"> 
                <a href="../index.php">
                    Teste Processo Seletivo 
                </a>
            </span>
        </div>
    </nav>
</header>

<section class="container mt-3">
    <?php if (isset($_SESSION['msg'])): ?>
        <div class="alert alert-<?= $_SESSION['tipo_msg']; ?>">
            <?= $_SESSION['msg']; ?>
        </div>
    <?php 
            unset($_SESSION['msg']);
            unset($_SESSION['tipo_msg']);
        endif; 
    ?>
</section>