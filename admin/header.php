<?php
session_star();
$title = null;
$titre = "mon site";
$error = 403;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php aFFicher(null,'mon site',403);?></title>
<?php require 'index.php'; ?>
