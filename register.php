

<?php
session_start();

if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $confpass  = $_POST['confpass'];

    $db = new PDO('mysql:host=localhost;dbname=loginsystem', 'root', '');

    $sql = "SELECT * FROM user where email = '$email' ";
    $result = $db->prepare($sql);
    $result->execute();

    if ($result->rowCount() > 0) {
        echo "Vous avez dèja un compte !!!!";
    }
    else {
        if($pass===$confpass){ 
            $pass = password_hash($pass, PASSWORD_DEFAULT);
            $sql = " INSERT INTO user (nom, prenom, email, password) VALUES ('$nom', '$prenom', '$email', '$pass')";
            $req = $db->prepare($sql);
            $req->execute();
            echo "Enregistrement éffectué !!!";
        }else{
            echo "Mot de pass n'est conforme!!!";
        }
    }
}
