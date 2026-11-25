<?php
session_start();
@$admin =$_SESSION['vue_admin'];
@$nom =htmlspecialchars($_POST['name']);
@$email=htmlspecialchars($_POST['email']);


if($_SERVER['REQUEST_METHOD'] == 'POST') {
     if(empty($nom) || empty($email)) {
        echo "tous les champs soint vide ";
     }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./dash.css">
</head>
<body>
  <div class="login">
<form action="user.php " method="POST" class="group-Form" id="Formulaire" >
   <div>
        <label for="">Nom:</label> <button class="bbtn" id="bbtn">🌑/☀️</button>
        <input type="text" name="name" id="name" placeholder="Entrer votre nom" required >
    </div>
    <div>
            <label for="">Email:</label>
            <input type="text" name="email" id="email" placeholder="Entrer votre email" required>
    </div>
        <input type="checkbox" name="box" id="box" class="box">
        <button type="submit" class="send">Envoyer</button>  
</form>
</div>
<script>
    const bbtn = document.getElementById('bbtn');
    bbtn.addEventListener('click',() => {
        document.body.classList.toggle('dark-mode');
    })
    if(bbtn ,'click',() => {
         alert('bienvenue');
    }) {
     
    }
</script>
</body>
</html>