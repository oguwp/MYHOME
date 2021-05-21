<?php
    require('../php/db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: ../php/dashboard.php");
        } else {
            echo 
                "<div class='form'>
                  <h3>Forkert Brugernavn/Adgangskode.</h3><br/>
                  <p class='link'>Tryk her for at <a href='../php/login.php'>Logge ind</a> igen.</p>
                  </div>";
        }
    } else {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>KUNDEPORTAL</title>
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <link rel="stylesheet" href="../css/loginstyle.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div id="myhome-wrapper">
        <div id="myhome-page">
            <header id="myhome-header-section" class="sticky-banner">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-myhome-nav-toggle myhome-nav-toggle dark"><i></i></a>
                        <h1 id="myhome-logo">
                            <a href="../index.html"><img src="../images/logo.png" width="115" alt="Logo Myhome" /></a>
                        </h1>
                    </div>
                </div>
            </header>
        </div>
    </div>
            
    <form class="form" method="post" name="login">
        <h1 class="login-title">KUNDEPORTAL</h1>
        <input type="text" class="login-input" name="username" placeholder="Brugernavn" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Adgangskode"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link">Har du ikke en konto? <a href="../php/registration.php">Opret dig nu</a></p>
  </form>
<?php
    }
?>
</body>
</html>
