<?php
@$nom =trim($_POST['name']);
@$email=trim($_POST['email']);


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($nom )) {
    echo "votre nom est remmplis";
    }
    else {
      
    }
    if (empty($email )) {
    echo "votre email est remmplis";
    }
    else {
        echo "veuillez remplir votre email";
    }
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
  <div class="carte-login">
<form action="user.php " method="POST" class="group-Form" id="Formulaire" <?php htmlspecialchars('group-Form');?>>
   <div>
        <label for="">Nom:</label> <button class="bbtn" id="bbtn">🌑/☀️</button>
        <input type="text" name="name" id="name" placeholder="Entrer votre nom" require <?php   echo "veuillez remplir votre nom";?>>
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
    // const btn=document.getElementById('btn')
    // btn.addEventListener('click',() => {
    //     document.body.classList.toggle('dark-mode');
    // })
</script>
</body>
</html>