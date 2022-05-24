<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
      integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>

<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"
        integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+"
        crossorigin="anonymous"></script>
<html>
<head>
    <title>Vaja 1</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">OGLASI</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <li><a class="nav-link" href="index.php">Domov</a></li>
                <?php
                session_start();
                if (isset($_SESSION["USER_ID"])){
                    
                ?>
                <ul class="navbar-nav ms-auto">
                    <li><a class="nav-link" href="index.php?controller=userPaketnik&action=dodajPaketnikView">Dodaj paketnik</a></li>
                </ul>
                </ul>
                <ul class="navbar-nav nav navbar-right">
                    <li><a class="nav-link" href="index.php?controller=user&action=profil">Profil</a></li>
                    <li><a class="nav-link" href="index.php?controller=user&action=odjava">Odjava</a></li>
                </ul>
            <?php
            } else {
                ?>
                </ul>
                <ul class="navbar-nav nav navbar-right">
                <!--naredi za prijavo-->
                    <li><a class="nav-link" href="index.php?controller=user&action=registracija">Registracija</a></li>
                    <li><a class="nav-link" href="index.php?controller=user&action=prijava">Prijava</a></li>
                </ul>
                <?php
            }
            ?>
    </div>
</nav>
<hr/>