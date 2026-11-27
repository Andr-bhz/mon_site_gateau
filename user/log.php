<?php
    // json_encode($_POST['email']);
    $i = null;
    $age = date('Y');
session_start();

$_SESSION['admin'] = [
    'user' => 'john',
    'password' => '****'
] ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "mon_site_gateau"?>
    </title>

    <link rel="stylesheet" href="./style.css">    
</head>
             <div>
                <a href="./dashboard.php" id=""><button  class="dash" id="dash">Sign_In</button></a>
             </div>
<header>
    <a id="accueil" href="#Accueil">Accueil</a>
    <a id="historique" href="#Historique">Historique</a>
    <a id ="contact" href="#dash">Contact</a>
    <button id="btn" class="btn">🌙/☀️</button>
</header>
<body>
    <button 
    id="btn-togggle"
    class="btn-toggle"
    type="button"
  >☰ </button>
    <div id="zoneDonnees" class="donnees-box">
    </div>
        <strong><h1 id="Accueil" >Welcome in my web<span>Site</span> </h1></strong>
    <img src="./images/gateau.jpg" alt="Description de l'image" height=800 width =900 id="mon-image" class="fade-in-image">
    <p>Bienvenue sur mon site qui nous informe sur differents 
types de parfum que vous aimez <br id="Historique"> plus d'informations veuillez nous contactez sur notre site
<br>pour tout savoir sur notre programme d'ouverture
et de Fermeture veuillez consulter sur la barre suivante <br>
</p>
<div id="loader-overlay">
    <div class="spinner"></div>
  </div>

  <!-- Contenu principal de ta page -->
  <main id="contenu-page">
    <h1>Bienvenue sur mon site</h1>
    <p>Le contenu s'affiche une fois le chargement terminé.</p>
  </main>
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
    btn.addEventListener('click',() => {
        document.body.classList.toggle('dark-mode');
    })
// const btn-toggle= document.getElementById("btn-toggle");
// const zoneDonnees = document.getElementById("zoneDonnees");

// btnToggle.addEventListener("click",() => {
//     const estMaintenantCache = zoneDonnees.classList.toggle("est-cache");
//     btnToggle.classList.toggle("is-active");
//     btnToggle.setAttribute("aria-expanded", String(!estMaintenantCache));
//     });

function cacherLoader() {
  const loader = document.getElementById("loader-overlay");
  if (loader) {
    loader.classList.add("hidden");
  }
}

// Se déclenche quand toute la page (HTML, CSS, images) est chargée
window.addEventListener("load", cacherLoader);

// Sécurité : si la page est restaurée depuis le cache du navigateur (bouton Précédent)
window.addEventListener("pageshow", (event) => {
  if (event.persisted) {
    cacherLoader();
  }
});
</script>

<Footer>
   <?php require 'footer.php' ; ?>
</Footer>
<!-- <?php require './admin/footer.php'; ?> -->
