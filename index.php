<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="login-form">
            <h2>Login</h2>
            <?php if(isset($_GET['err'])){ ?>
                <p style="color: red;"><?=$_GET['err']?></p>
           <?php } else{} 
                if(isset($_GET['succ'])){ ?>
                    <p style="color: green;"><?=$_GET['succ']?></p>
           <?php } else{

            } ?>
            <form action="php/login.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="uname" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="psw" required>

                <button type="submit">Log in</button>
            </form>
            <p class="signup-link">Don't have an account? <a href="sign_up/index.php">Sign up here</a>.</p>
        </div>
    </div>


</body>
</html>