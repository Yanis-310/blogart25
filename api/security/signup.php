<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $pseudo = trim($_POST['pseudo']);
    $email = $_POST['email'];
    $confemail = $_POST['confemail'];
    $password = $_POST['password'];
    $confpassword = $_POST['confpassword'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
}

foreach ($pseudo as $key => $value) {
    if ($pseudo == $value["pseudoMemb"]) {
        $pseudoOK = true;

    }
}

if ($email == $confemail) {
    $emailOK = true;
}

if ($password == $confpassword) {
    $passwordOK = true;
}

if ($pseudoOK == true && $emailOK == true && $passwordOK == true) {
    sql_insert("MEMBRE", "pseudoMemb", "eMailMemb", "passMemb", "numStat", "prenomMemb", "nomMemb");
    header('Location:../../../index.php');
    exit();
}

header('Location:../../../index.php/signup.php?error');