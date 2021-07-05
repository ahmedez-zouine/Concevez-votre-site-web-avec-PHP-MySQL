<?php

$getData = $_GET;

if (!isset($getData['email']) || !isset($getData['message']))
{
	echo('Il faut un email et un message pour soumettre le formulaire.');
    return;
}	

$email = $getData['email'];
$message = $getData['message'];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We love food - Contact reçu</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body>
    <div class="container">

    <?php include_once('header.php'); ?>
        <h1>Message bien reçu !</h1>
        
        <div class="card">
            
            <div class="card-body">
                <h5 class="card-title">Rappel de vos informations</h5>
                <p class="card-text"><b>Email</b> : <?php echo($email); ?></p>
                <p class="card-text"><b>Message</b> : <?php echo($message); ?></p>
            </div>
        </div>