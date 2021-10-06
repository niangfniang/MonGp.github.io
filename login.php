<?php
session_start();

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $pass = $_POST['pass'];


    $db = new PDO('mysql:host=localhost;dbname=loginsystem', 'root', '');

    $sql = "SELECT * FROM user where email = '$email' and password = '$pass' ";
    $result = $db->prepare($sql);
    $result->execute();

    if ($result->rowCount() > 0) {
        echo "Nous sommes ravis de vous revoir Mr/Mmme $nom $prenom !!!!";
    } else {
        echo "Verifiez votre indentifiant et votre mot de pass!!!";
    }
}
