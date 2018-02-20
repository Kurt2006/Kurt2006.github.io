<?php

session_start();
require_once('functions.php');


if(isset($_POST['benutzer']) && isset($_POST['passwort'])){
    if(checkAdmin($_POST['benutzer'], $_POST['passwort'])){
        $_SESSION['admin'] = $_POST['benutzer'];
        $_SESSION['logged_in'] = true;
        ?>
        <meta http-equiv="refresh" content="0; URL=verwaltung.php">
        <?php

    }else{
        ?>
        <meta http-equiv="refresh" content="0; URL=dashboard.php">
        <?php
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>DeinPlugin • Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>

<body>
<nav class="navbar navbar-default">
    <div class="col-lg-14">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand">DeinPlugin • Login</a>
    </div>
</nav>

<section id="breadcrumb">
    <div class="col-md-14">
        <ol class="breadcrumb">
            <a><span class="glyphicon glyphicon-user" aria-hidden="true"></span> / Login</a>
        </ol>
    </div>
</section>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login</h3>
                    </div>
                    <div class="panel-body">
                        <form action="adminlogin.php" method="post" accept-charset="UTF-8" role="form">
                            <fieldset>
                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>


                                    <input id="benutzer" type="text" class="form-control" name="benutzer" value="" placeholder="Benutzername">


                                </div>
                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>


                                    <input id="passwort" type="password" class="form-control" name="passwort" placeholder="Passwort">


                                </div>
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Anmelden" >
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="footer-section" style="bottom: 0; font-size: 12px;">
    <div class="container">
        <p>&copy; 2017, DeinPlugin.net - by EJDAR and WeLoveSpigotPlugins</p>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>
