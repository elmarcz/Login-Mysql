<?php
    require 'database.php';

    $message = '';

    if(!empty($_POST['user']) && !empty($_POST['password'])){
        $sql = "INSERT INTO users (user, password) VALUES (:user, :password)";
        $stmt = $conn->prepare($sql);
        $stmt -> bindParam(':user', $_POST['user']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt -> bindParam(':password', $password);
        
        if($stmt->execute()) {
            $message = 'Succesfully Created New User';
            console_log($message);
        }else{
            $message = 'Failed to Create your password!';
            console_log($message);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="icon" type="image/png" href="https://raw.githubusercontent.com/elmarcz/Login-With-Flexbox/master/img/favicon.ico" sizes="32x32"> <!--The favicon of this page-->


    <link rel="stylesheet" href="../css/login/header.css">
    <link rel="stylesheet" href="../css/login/login.css">
    <link rel="stylesheet" href="../css/login/styles.css">

    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing Up With PHP</title>
</head>
<body>
    <div class="container">
        <div class="menu">
            <div class="logo-container">
                <a href="../../index.php"><img src="../../img/Marc Medrano.png" class="logo"></a>
            </div>
            <div class="nav-container">
                <nav>
                    <ul>
                        <li><a href="../../index.php">Home</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="signup.php">Sing Up</a></li>
                        <li><a href="logout.php">Sing Out</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="container-login">
            <div class="login">
                <form action="signup.php" method="POST">
                    <?php if(!empty($message)): ?>
                        <p><?php $message ?></p>
                    <?php endif; ?>

                    <h1 class="h1-login">Sing Up</h1>
                    <input type="text" class="text" class="user" placeholder="Enter your Username" required>
                    <input type="password" class="password" placeholder="Enter your Password" required>
                    <input type="password" class="password" placeholder="Confirm your Password" required>

                    <input type="submit" class="boton dos">
                </form>
            </div>
        </div>
        <footer class="footer">
            Web made by
            <div class="Marc">
              <a href="https://elmarcz.github.io/portfolio">@Marc Medrano</a>
            </div>
            | ©
            <div class="Marc"><a href="">Login With PHP</a></div>
          </footer>
    </div>
</body>
</html>
