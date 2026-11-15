<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title="MON_SITE";
                  echo $title;
    ?></title>
    <?php
    if(!isset($title)){
        echo $title;
        }
        ?>
</head>

<body>
    <div>
        <input type="week" name="week" id="week" placeholder="Entrer le week">
    </div>
    
</body>
</html>