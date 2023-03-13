<?php
session_start();
if($_SESSION['usuario'] == false) {
    header('Location: index.php');
    exit();
}