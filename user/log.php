<?php 
    $i = null;
    $age = date('Y');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./style.css">    
</head>
<header>
    <a href="#Accueil">Accueil</a>
    <a href="#Historique">Historique</a>
    <a href="#Formulaire">Contact</a>
</header>
<body>
    <h3 id="Accueil" >Welcome in my web<span>Site</span> </h3>
    <img src="./images/gateau.jpg" alt="" height=800 width =900>
    <p>Bienvenue sur mon site qui nous informe sur differents 
types de parfum que vous aimez <br id="Historique"> plus d'informations veuillez nous contactez sur notre site
<br>pour tout savoir sur notre programme d'ouverture
et de Fermeture veuillez consulter sur la barre suivante <br>
</p>
<form action="" method="POST" class="group-Form" id="Formulaire">
    <div>
        <label for="">Nom:</label>
        <input type="text" name="name" id="name" placeholder="Entrer votre nom">
    </div>
    <div>
            <label for="">Email:</label>
            <input type="text" name="email" id="email" placeholder="Entrer votre email">
    </div>
        <button type="submit">Envoyer</button>
</form>
<select name="ouvert" id="ouvert">
    <option value="">
               <?php
        for($i=2026;$i >= 1990;$i--):?> 
     </option>
         <?php echo $i ?> 
</select>  
        <?php endfor?>
<script src="./user/assets/script.js"></script>
