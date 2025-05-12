<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php");
    exit; // Detiene la ejecución después de redireccionar
}
?>


<!doctype html>
<html lang="en">
    <head>
        <title>Header</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"/>
    </head>

    <body>
    <nav class="navbar navbar-expand navbar-light bg-light">
                <div class="nav navbar-nav">
                    <a class="nav-item nav-link active" href="index.php" aria-current="page">Inicio</a>
                    <a class="nav-item nav-link" href="vista_alumnos.php">Alumnos</a>
                    <a class="nav-item nav-link" href="vista_cursos.php">Cursos</a>
                    <a class="nav-item nav-link" href="cerrar.php">Cerrar sesión</a>
                </div>
            </nav>
        <div class="container">

