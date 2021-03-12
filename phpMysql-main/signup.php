

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylesignup.css">
    <title>Sign Up</title>
</head>

<body>
    <div class="center">
        <h1>Sign Up</h1>
        <form action="traitement.php" method="post">
            <div class="txt_field">
                <input type="text" name="user" id="" required>
                <span></span>
                <label>username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" id="" required>
                <span></span>
                <label>password</label>
            </div>
            <div class="txt_field">
                <input type="password" name="passrepeat" id="" required>
                <span></span>
                <?php 
                if(isset($_GET['error'])){
                   echo $_GET['error'];

                }
                
                
                ?>
                <label>repeat password</label>
                
            </div>
            <div class="txt_field">
                <input type="email" name="email" id="" required>
                <span></span>
                <label>email</label>
            </div>

            <input type="submit" name="signUp" value="Sign Up">
            <div class="signup_link">
                already a member ? <a href="login.php">login</a>
            </div>

    </div>
    </form>
    </div>
</body>

</html>