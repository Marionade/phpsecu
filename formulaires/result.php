
<?php
$errors = [];
$mail = filter_var($_POST['courriel'], FILTER_VALIDATE_EMAIL);

 
if($_SERVER['REQUEST_METHOD'] === 'POST') {


    // nettoyage et validation des données soumises via le formulaire 
    if(!isset($_POST['name']) || trim($_POST['name']) === '') 
        $errors[] = "Le prénom est obligatoire";

    if(!isset($_POST['courriel']) || trim($_POST['courriel']) === '')
        $errors[] = "Le mail est obligatoire";

    if(!isset($_POST['phone']) || trim($_POST['phone']) === '')
        $errors[] = "Le numéro de téléphone est obligatoire";

    if(!isset($_POST['sujet']) || trim($_POST['sujet']) === '')
        $errors[] = "Le sujet est obligatoire";
    
    if(!isset($_POST['message']) || trim($_POST['message']) === '') 
        $errors[] = "Le message est obligatoire";

    if (!filter_var($mail, FILTER_VALIDATE_EMAIL))
        $errors[] =  "L'adresse email n'est pas valide";

}

  if (!empty($errors)) {

    require 'error.php';
  } else {
    require 'thanks.php';
  }
  

  
  ?>