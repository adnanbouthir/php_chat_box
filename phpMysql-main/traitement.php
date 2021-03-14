<?php

include_once('database.php');

session_start();

// si le message est envoyé correctement
    // récupérer les données dans des variables
    // si les valeurs récupéré sont vides
        //se redériger ver la page index avec le message d'erreur sauvgarde dans un query string
    // si non afficher préparer la requête d'insertion
    // vérifier qu'elle s'execute correctement
    // s'il y a une erreur afficher le message puis arrêter le programme avec la "die"
    // si non se redériger à la page index qui devera insérer le message nouvellement inséré



if ((isset($_POST['envoyer']))) {
    $user = $_SESSION['username'];
    $msg =  $_POST['message'];
    $query = "INSERT INTO messages(utilisateur, contenu_message)
        VALUES('$user' , '$msg')";
    $result = mysqli_query($link, $query);
    header("location: index.php");

    
}






if (isset($_POST['signUp'])) {
    
    $user = $_POST['user'];
    $pass = $_POST['password'];
    $mail = $_POST['email'];
    
    if (strlen($user) < 3 || strlen($user) > 20) {
        header("location: signup.php?error=username cant be less than 3 or more than 20");
    }elseif (strlen($pass) < 6 || strlen($pass) > 20) {
        header("location: signup.php?error=password cant be less than 6 or more than 20");
    }elseif ($pass != $_POST['passrepeat']) {
        header("location: signup.php?error=password dont match");
    }else{
        $query = "INSERT INTO `users`( `username`, `password`, `email`) VALUES ('$user', '$pass', '$mail')";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        header("location: login.php");
    }
  
}
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $query = "SELECT `username`, `password` FROM `users` WHERE `username`='$username' AND `password`='$pass'";
//    $query = "SELECT * FROM 'users' WHERE username ='".$username."` AND password =`".$pass."`";
   $result = mysqli_query($link,$query);

   if (mysqli_num_rows($result) > 0) {
        echo "login success";
        header("Location: index.php");
        $_SESSION['username'] = $username;
    } else {
        header("location: login.php?empty='username or password incorrect'");
    }
}
   
if (isset($_POST['logout'])) {
    session_unset();
    header("location: index.php");
}













    

    
?>

