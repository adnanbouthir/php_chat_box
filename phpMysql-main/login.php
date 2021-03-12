<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>account login</title>
    <link rel="stylesheet" href="css/stylelogin.css">
</head>

<body>
    <div class="center">
        <h1>login</h1>
        <?php
        if (@$_GET['empty'] == true) {
            
        
        ?>
        <h2><?php echo $_GET['empty']; ?></h2> <?php } ?>
        <form action="traiement.php" method="post">
            <div class="txt_field">
                <input type="text" name="username" id="" required>
                <span></span>
                <label>username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="pass" id="" required>
                <span></span>
                <label>password</label>
            </div>
            
            <input type="submit" name="login">
            <div class="signup_link">
                not a member ? <a href="signup.php">Sign up</a>
            </div>

    </div>
    </form>
    </div>
</body>

</html>