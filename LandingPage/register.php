<?php
    $str =$_POST ;
    file_put_contents('../../data-rw/registration/'.uniqid().'.txt',$str);
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Letterbox</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <nav class="nav navbar-nav-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavBar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Enzevalos</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavBar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">Letterbox</a></li>
                    <li><a href="study.html">Teilnahmen</a></li>
                    <li><a href="details.html">Studiendetails</a></li>
                    <li><a href="privacy.html">Datenschutz</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="study" class="dark motivation section-container">
        <h1>Erfolgreiche Anmeldung</h1>
        <p>
           Sie haben sich erfolgreich angemeldet. Wir werden uns bei Ihnen per E-Mail melden. Bitte haben Sie noch etwas Geduld.<p>
        <p> Sie können auch Freunde, Bekannte oder Kollegen zum Mitmachen einladen und mit Ihnen künftig sicher zu kommunizieren. </p>
        <p>Vielen Dank für Ihre Anmeldung.</p>
      
     </div>
    <nav class="nav navbar-nav-bottom" >
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavBar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavBar">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="https://www.inf.fu-berlin.de/groups/ag-si/">AG Sichere Identität</a></li>
                    <li><a href="http://www.fu-berlin.de/">Freie Universität Berlin</a></li>
                    <li><a href="#process">Datenschutz</a></li>
                    <li><a href="http://www.fu-berlin.de/redaktion/impressum/">Impressum</a></li>
                    <li> <a href="mailto:letterbox@zedat.fu-berlin.de?Subject=Kontakt">Kontaktieren</a></li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>