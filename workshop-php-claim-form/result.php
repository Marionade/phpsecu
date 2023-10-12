<?php
$errors = ['companyName', 'userName', 'email', 'contactMessage'
];

// TODO 3 - Get the data from the form and check for errors


if (!empty($errors)) {
    require 'error.php';
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récapitulatif - Réclamation</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <h1>Nous traitons votre retour.</h1>
        <img src="images/logo_dunder.png" alt="Logo Dunder Mifflin">
    </header>

    <main>
        <div class="summary">
            <!-- BONUS -->
            <p>
                <img src="images/placeholder.png" alt="">
                <span>Votre vendeur</span>
            </p>
            

            <!-- TODO 2 - Replace those placeholders by the values sent from the form -->
            <ul>
                <li>Votre entreprise : <span><?'companyName' ?></span></li>
                <li>Votre nom : <span><? 'userName' ?></span></li>
                <li>Votre email : <span><?'email'?></span></li>
                <li>Votre message :
                    <p><?'contactMessage'?>
                    </p>
                </li>
            </ul>
        </div>
    </main>
</body>

</html>