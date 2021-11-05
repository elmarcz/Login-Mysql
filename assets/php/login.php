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
    <title>Login With PHP</title>
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
                <form action="login.php" method="POST">
                    <h1 class="h1-login">Log In</h1>
                    <input type="text" class="text" placeholder="Enter your Username" required>
                    <input type="password" class="password" placeholder="Enter your Password" required>

                    <input type="submit" class="boton dos" placeholder="">
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
