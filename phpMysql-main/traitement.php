<?php

include_once('database.php');
// include('index.php');


// si le message est envoyé correctement
    // récupérer les données dans des variables
    // si les valeurs récupéré sont vides
        //se redériger ver la page index avec le message d'erreur sauvgarde dans un query string
    // si non afficher préparer la requête d'insertion
    // vérifier qu'elle s'execute correctement
    // s'il y a une erreur afficher le message puis arrêter le programme avec la "die"
    // si non se redériger à la page index qui devera insérer le message nouvellement inséré



if ((isset($_POST['envoyer']))) {
    $query = "INSERT INTO messages(utilisateur, contenu_message)
        VALUES('$user' , '$msg')";



    $result = mysqli_query($link, $query);

    
}





if (isset($_POST['signUp'])) {
    $user = $_POST['user'];
    $pass = $_POST['password'];
    $mail = $_POST['email'];
    $query = "INSERT INTO `users`( `username`, `password`, `email`) VALUES ('$user', '$pass', '$mail')";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    
                    if ($pass != $_POST['passrepeat']) {
                        header("location: signup.php?error=password dont match");
                    }
                    

    

    
}
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];
   $query = "SELECT * FROM 'users' WHERE $username =`username` AND $pass =`password`";
   $result = mysqli_query($link,$query);
   if (mysqli_num_rows($result) > 0) {
       echo "login success";
        // header("location: index.php");
   }else{
       echo "zid t9wd";
    // header("location: login.php?empty='password or user wrong'");
   }
}













    

    
?>

