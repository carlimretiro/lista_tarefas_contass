<?php require_once("config/conexao.php");
    // Buscando todas as tarefas cadastradas
    $sql = "SELECT * FROM tarefas";
    $result_tarefas = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Tarefas</title>
    <!--Importar fontes e ícones do Google-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Adicionando fontes de icones-->
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css" />
    <!--Adicionando o embelezamento do projeto com o materialize-->
    <link rel="stylesheet" href="assets/materialize/css/materialize.min.css">
</head>
<body>
    <nav>
    <div class="nav-wrapper">
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <a href="#" class="brand-logo"> &nbsp; Lista de Tarefas</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="cadastrar_tarefa.php">Cadastrar Tarefa</a></li>
            <li><a href="index.php">Exibir Tarefas</a> </li>
        </ul>
        </div>
    </nav>
    <ul id="slide-out" class="sidenav">
        <li> <a href="cadastrar_tarefa.php"><i class="material-icons">add</i>Cadastrar Tarefa</a></li>
        <li><a href="index.php"><i class="material-icons">dehaze</i>Listar Tarefas</a> </li>
    </ul>
    