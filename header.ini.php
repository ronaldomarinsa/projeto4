<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <?php if (isset($titulo))
    echo "<title>$titulo</title>";
    else ?>
    <title> Curso PHP Code-Education </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery.js"></script>
</head>

<body>
<?php require_once "menu.php" ?>

<div class="container">
