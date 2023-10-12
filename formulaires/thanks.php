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
       
    </header>

    <main>
  
    

   
               <p>
                Merci <?= $_POST['name'] ?> de nous avoir contacté à propos de <?= $_POST['sujet'] ?>.
Un de nos conseillers vous contactera soit à l’adresse <?= $_POST['courriel'] ?>
 ou par téléphone au <?= $_POST['phone'] ?>
 dans les plus brefs délais pour traiter votre demande : <?= $_POST['message'] ?>.

            </p>

    </main>
</body>

</html>




