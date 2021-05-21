<?php
//include auth_session.php file on all user panel pages
include("../php/auth_session.php");
?>
<!DOCTYPE html>
<html lang="da" class="no-js">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>MYHOME KUNDEPORTAL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Køb eller sælg din ejendom hos MyHome i dag!" />
    <meta name="keywords" content="MyHome, Home, salg, køb, hus, ejendomme, boliger, villa, fritidshus, lejligheder, mægler" />
    <meta name="author" content="MyHome" />
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300" rel="stylesheet" type="text/css" />
    <!-- Animate.css -->
    <link rel="stylesheet" href="../css/animate.css" />
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="../css/icomoon.css" />
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <!-- CS Select -->
    <link rel="stylesheet" href="../css/cs-select.css" />
    <link rel="stylesheet" href="../css/cs-skin-border.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <!-- Modernizr JS -->
    <script src="../js/modernizr-2.6.2.min.js"></script>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous" />
</head>

<body>
    <div id="myhome-wrapper">
        <div id="myhome-page">
            <header id="myhome-header-section" class="sticky-banner">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-myhome-nav-toggle myhome-nav-toggle dark"><i></i></a>
                        <h1 id="myhome-logo">
                            <a href="../index.html" onclick="return confirm('Er du sikker på du vil logge ud?')"><img src="../images/logo.png" width="115" alt="Logo Myhome" /></a>
                        </h1>
                        <!-- START #myhome-menu-wrap -->
                        <nav id="myhome-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="myhome-primary-menu">
                                <li class="menu-btnn">
                                    <a href="../php/logout.php"><i class="fas fa-lock-open"></i> LOG UD</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
        </div>
    </div>
    <!-- end:header-top -->

    <div id="myhome-about" class="myhome-agent" style="margin-top: -5%;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 heading-section animate-box">
                    <h3>UPLOAD DIT EGET GALLERI</h3>
                    <p></p>
                    <input type="file" name="image" id="files">
                    <p id="state"></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center animate-box" data-animate-effect="fadeIn">
                    <div id="list">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12" style="margin-top: -3%; margin-left: 40%;">
        <a href="#" class="btn btn-primary" id="deleteImgs">SLET DINE BILLEDER</a>
    </div>

    <div class="myhome-section-gray" style="padding-top: 2%; padding-bottom: 2%;">
        <div class="container">
            <div class="row">
                <form method="post" action="formsave.php">
                    <h2>INDTAST DIN BOLIGS OPLYSNINGER</h2>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Navn" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Email" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="telefon" class="form-control" placeholder="Telefon" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="adresse" class="form-control" placeholder="Adresse" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="type" class="form-control" placeholder="Type" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="areal" class="form-control" placeholder="Boligareal" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="rooms" class="form-control" placeholder="Værelser" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="plan" class="form-control" placeholder="Antal Plan" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="alder" class="form-control" placeholder="Bygget Årstal" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="pris" class="form-control" placeholder="Forventet Salgspris" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="besked" placeholder=" Din Besked" rows="2" cols="66"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="submit" name="submit" value="Gem Oplysninger" class="btn btn-primary" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="myhome-contact" class="myhome-contact" style="margin-top: 2%;">
        <div class="half-contact">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-center heading-section animate-box">
                        <h3>KLAR TIL AT SÆLGE?</h3>
                        <p>
                            Få en salgsvurdering af din bolig og kom ét skridt tættere
                            på at kunne realisere dine drømme om et ny hjem.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 animate-box">
                        <div class="row">
                            <form onsubmit="SendMailFunction()">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Navn" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Telefon" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class='autocomplete-container' class="form-control" id="adresse" placeholder="Adresse" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Forventet Salgspris" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Besked" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" name="submit" value="Send Besked" class="btn btn-primary" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="half-bg" style="background-image: url(../images/cover_bg_2.jpg)"></div>
    </div>

    <footer>
        <div id="footer">
            <div class="container">
                <div class="row row-bottom-padded-md">
                    <div class="col-md-4">
                        <h3 class="section-title">Kundeservice</h3>
                        <p>
                            <a href="tel:20722506"><i class="fas fa-phone"></i> 20 72 25 06</a>
                        </p>
                        <p>
                            <a href="mailto:info@myhome.dk"><i class="fas fa-envelope"></i> info@myhome.dk</a>
                        </p>
                        <p>
                            <i class="fas fa-calendar"></i> Mandag - fredag 9 - 16
                        </p>
                    </div>

                    <div class="col-md-4 col-md-push-1">
                        <h3 class="section-title">Links</h3>
                        <ul>
                            <li style="margin-bottom: 5px"><a href="../sale.html">Sælg ejendom</a></li>
                            <li style="margin-bottom: 5px"><a href="../buy.html">Køb ejendom</a></li>
                            <a href="../php/login.php" style="color: rgba(255, 255, 255, 0.8);"><i class="fas fa-lock"></i> MYHOME</a>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h3 class="section-title">Guides</h3>
                        <ul>
                            <li style="margin-bottom: 5px"><a href="../guides/guide1.html">Boligfinansering for begyndere</a></li>
                            <li style="margin-bottom: 5px"><a href="../guides/guide2.html">Boligfinansering for sælgere</a></li>
                            <li style="margin-bottom: 5px"><a href="../guides/guide3.html">Boligfinansering for købere</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="../js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="../js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="../js/jquery.waypoints.min.js"></script>
    <script src="../js/sticky.js"></script>
    <!-- Superfish -->
    <script src="../js/hoverIntent.js"></script>
    <script src="../js/superfish.js"></script>
    <!-- Flexslider -->
    <script src="../js/jquery.flexslider-min.js"></script>
    <!-- Date Picker -->
    <script src="../js/bootstrap-datepicker.min.js"></script>
    <!-- CS Select -->
    <script src="../js/classie.js"></script>
    <script src="../js/selectFx.js"></script>
    <!-- Main JS -->
    <script src="../js/main.js"></script>
    <script src="../js/localstorage.js"></script>
    <!-- DAWA JS -->
    <script src="../https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.min.js"></script>
    <script src="../https://cdnjs.cloudflare.com/ajax/libs/fetch/2.0.3/fetch.min.js"></script>
    <script src="../node_modules/dawa-autocomplete2/dist/js/dawa-autocomplete2.min.js"></script>
    <script src="../js/dawa.js"></script>
</body>

</html>
