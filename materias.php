<?php 
    session_start();

    if (isset($_SESSION['usuario'])) {
        require 'frontend/materias-vista.php';
    }
    else{
        header('location: login.php');
    }
?>