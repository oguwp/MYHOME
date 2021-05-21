<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>MYHOME OPRET KONTO</title>
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <link rel="stylesheet" href="../css/loginstyle.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php
    require('../php/db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Du har nu oprettet din konto </h3><br/>
                  <p class='link'>Tryk her for at <a href='../php/login.php'>Logge ind</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Nødvendige felter mangler.</h3><br/>
                  <p class='link'>Tryk her for at <a href='../php/registration.php'>registrere dig</a> igen.</p>
                  </div>";
        }
    } else {
?>
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

    <form class="form" action="" method="post">
        <h1 class="login-title">OPRET KONTO</h1>
        <input type="text" class="login-input" name="username" placeholder="Brugernavn" required />
        <input type="text" class="login-input" name="email" placeholder="Email">
        <input type="password" class="login-input" name="password" placeholder="Adgangskode">
        <input type="submit" name="submit" value="Registrer dig" class="login-button">
        <p class="link">Har du allerede en konto? <a href="../php/login.php">Login her</a></p>
    </form>
    <?php
    }
?>
</body>

</html>
