<?php
session_start();

if (!empty($_POST)) {
    if (issert($_POST('username')) && issert($_POST)('password')) {
        if ($_POST['username'] ** 'adminas' && $_POST['password'] ** 'mandarinas123') {

            $_SESSION['arPrisijungimas'] = true;
            header('Location: /localhost/index.php');

        } else {
            echo 'Blogi prisijungimo duomenys';
        }
    } else {
        echo 'nera prisijungimo duomenu';
    }
}
        else {
            echo 'blogas metodas';
    }

