<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MonGP</title>
</head>

<body>
    <section class="page">
        <!--barre de navigation-->
        <nav>
            <div class="onglets">
                <a href="index.php">Accueil</a>
                <a href="envoyer.html">Envoyer</a>
                <a href="recuperer.html">Récuperer</a>
            </div>
            <div class="button">
                <a href="connexion.html"><button class="login"> J'ai déja un compte</button></a>
            </div>

        </nav>
        <!--fin de la barre de navigation-->

        <!--Header-->
        <h1> Inscription si vous n'avez jamais eu de compte !!!</h1>
        <form method="POST" action="register.php">
            <label>Nom : </label>
            <input type="text" name="nom" placeholder="votre nom"></br>
            <label>Prenom : </label>
            <input type="text" name="prenom" placeholder="votre prenom"></br>
            <label>E-mail : </label>
            <input type="text" name="email" placeholder="votre Email"></br>
            <label>Mot de pass : </label>
            <input type="password" name="pass" placeholder="votre mot de pass"></br>
            <label>Confirmez mot de pass : </label>
            <input type="password" name="confpass" placeholder="confirmez votre mot de pass"></br>
            <button name="submit">Confirmer</button>
        </form>
        <!--fin Header-->
    </section>



    <!--pied de page-->
    <footer>
        <h5>Des quations ? Appelez le 00-00-00-00-00</h5>
        <div class="colonnes">
            <div class="colonne">
                <p>Relatins clients</p>
                <p>Relation Collaborateur</p>
                <p> ode de lecture</p>
                <p>Mention légales</p>

            </div>
            <div class="colonne">
                <p>Centre d'aide</p>
                <p>Collaborateur plus régulier</p>
                <p>Chiffres d'affaires</p>

            </div>
            <div class="colonne">
                <p>FAQ</p>
                <p>Recrutement</p>
                <p>Conditions d'utilisation</p>
                <p>Nous contacter</p>

            </div>
            <div class="colonne">
                <p>compte</p>
                <p>S'inscrire </p>
                <p>se connecter</p>

            </div>

        </div>
        <p>NIANG fallou</p>
    </footer>
    <!--fin pied de page-->
</body>

</html>