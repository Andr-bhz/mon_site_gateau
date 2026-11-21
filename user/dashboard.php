<?php
@$nom =($_POST['name']);
@$email=($_POST['email']);

if('REQUEST_METHOD' == 'POST') {
    echo $nom && $email;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./assets/dash.css">
</head>
<body>
<form action="user.php " method="POST" class="group-Form" id="Formulaire" >
    <div>
        <label for="">Nom:</label> <button class="bbtn" id="bbtn">🌑/☀️</button>
        <input type="text" name="name" id="name" placeholder="Entrer votre nom" required>
    </div>
    <div>
            <label for="">Email:</label>
            <input type="text" name="email" id="email" placeholder="Entrer votre email" required>
    </div>
        <input type="checkbox" name="box" id="box" class="box">
        <button type="submit" class="send">Envoyer</button>
</form>
<div id="loader-overlay">
    <div class="spinners"></div>
  </div>

  <!-- Contenu principal de ta page -->
  <main id="contenu-page">
    <h1>Bienvenue sur mon site</h1>
    <p>Le contenu s'affiche une fois le chargement terminé.</p>
  </main>
<script>
    const bbtn = document.getElementById('bbtn');
    bbtn.addEventListener('click',() => {
        document.body.classList.toggle('dark-mode');
    })
    // const btn=document.getElementById('btn')
    // btn.addEventListener('click',() => {
    //     document.body.classList.toggle('dark-mode');
    // })
    function cacherLoaders() {
  const loaders = document.getElementById("loader-overlay");
  if (loaders) {
    loaders.classList.add("hidden");
  }
}

// Se déclenche quand toute la page (HTML, CSS, images) est chargée
window.addEventListener("load", cacherLoader);

// Sécurité : si la page est restaurée depuis le cache du navigateur (bouton Précédent)
window.addEventListener("pageshow", (event) => {
  if (event.persisted) {
    cacherLoaders();
  }
});
</script>
</body>
</html>