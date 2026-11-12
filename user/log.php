<?php
    // json_encode($_POST['email']);
    $i = null;
    $age = date('Y');
    // $detail=trim($_POST['name'] && $_POST['email']);
    //         echo $detail;
    $nom =strtoupper('name');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title?>
    </title>
    <link rel="stylesheet" href="./style.css">    
</head>
<button id="btn" class="btn">changer de mode</button>
<header>
    <a id="accueil" href="#Accueil">Accueil</a>
    <a id="historique" href="#Historique">Historique</a>
    <a id ="contact" href="#Formulaire">Contact</a>
    <a id="mode" href="#btn">Change Mode</a>
</header>
<body>
    
        <strong><h1 id="Accueil" >Welcome in my web<span>Site</span> </h1></strong>
    <img src="./images/gateau.jpg" alt="" height=800 width =900>
    <p>Bienvenue sur mon site qui nous informe sur differents 
types de parfum que vous aimez <br id="Historique"> plus d'informations veuillez nous contactez sur notre site
<br>pour tout savoir sur notre programme d'ouverture
et de Fermeture veuillez consulter sur la barre suivante <br>
</p>

<form action="user.php " method="POST" class="group-Form" id="Formulaire" >
    <div>
        <label for="">Nom:</label>
        <input type="text" name="name" id="name" placeholder="Entrer votre nom" required>
    </div>
    <div>
            <label for="">Email:</label>
            <input type="text" name="email" id="email" placeholder="Entrer votre email" required>
    </div>
        <input type="checkbox" name="box" id="box" required class="box">
        <button type="submit">Envoyer</button>
</form>
<select name="ouvert" id="ouvert">
    <option value="1">
               <?php
        for($i=2026;$i >= 1990;$i--):?> 
    </option>
    <option value="2">
        <?= $i?>
    </option>
      <?php endfor?>
</select> 

<script>  
//     if (new Date().getHours() < 18) {
//   document.getElementById("demo").innerHTML = "Good day!";
// }  
const btn=document.getElementById('btn')
    btn.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
    })
</script>

<Footer>
   <?php require 'footer.php' ; ?>
</Footer>
<!-- <?php require './admin/footer.php'; ?> -->
