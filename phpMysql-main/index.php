<?php
session_start();
    include_once('database.php');

    //selectionner les message dans la base de donnée
    $query = "SELECT * FROM messages ";
    $results = mysqli_query($link, $query);
    $messages = mysqli_fetch_assoc($results);


 if(isset($_SESSION['username'])){
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat box</title>
    <link rel="stylesheet" href="./css/style.css">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="titleBar container">
            <h1>Welcome <?php echo $_SESSION['username'] ?></h1>
        </div>
        <div class="messages container">
            <ul>
                <?php foreach ($results as $row) : ?>

                <li class="message"><span> <?php echo $row["temps"];  ?> - </span><?php echo $row["utilisateur"];  ?> :
                    <?php echo $row["contenu_message"];  ?> </li>
                <?php endforeach ?>
            </ul>
        </div>
        <div class="row g-3">
            <form class="row g-3" action="traitement.php" method="post">
                
                <div class="col">
                <input type="text" name="message" class= "form-control"  placeholder="Saisir votre message">
                </div>
                
                <input type="submit" class="btn btn-outline-info" name="envoyer" value="Envoyer">
                <div class="col">
        <input type="submit" name="logout" class="btn btn-outline-info" value="logout">
        </div>
            </form>
        </div>

        
    </main>

    <!-- Bootstrap Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>


<?php  }else{
    header("location: login.php");
} ?>
