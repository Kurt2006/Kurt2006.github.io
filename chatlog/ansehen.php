<?php
session_start();
require_once('functions.php');

if(!isset($_POST['benutzer']) && !isset($_POST['passwort'])) {
    if($_SESSION['logged_in'] == false){
        ?>
        <meta http-equiv="refresh" content="0; URL=index.php">
        <?php
    }
}

$name = $_SESSION['username'];
error_reporting(0);
$key = $_GET['Key'];
?>

<!DOCTYPE html>

<html>

<head>
    <title>DeinPlugin • DeinPlugin Chatlogsystem</title>
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
        <a class="navbar-brand">DeinPlugin • Chatlogsystem</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="chatloglist.php">Chatlog Liste</a></li>
            <li><a href="suchen.php">Chatlog Suchen</a></li>
            <li><a href="löschen.php">Chatlog Löschen</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user"></span> 
                    <strong><?php echo $name; ?></strong>
                    <span class="glyphicon glyphicon-chevron-down"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <div class="navbar-login">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class='text-center'><img src='https://minotar.net/helm/<?php echo $name; ?>/100.png'></p>
                                </div>
                                <div class="col-lg-8">
                                    <p class="text-left"><strong><?php echo $name; ?></strong></p>
                                    <p class="text-left big"><b>Teammitglied</b></p>
                                    <p class="text-left"><a href="adminlogin.php" class="btn btn-primary btn-block btn-sm">Verwaltung</a></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <div class="navbar-login navbar-login-session">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p><a href="logout.php" type="button" name="abmelden" class="btn btn-danger btn-block">Abmelden</a><p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<section id="breadcrumb">
    <div class="col-md-14">
        <ol class="breadcrumb">
            <a><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> / Dashboard / Ansehen</a>
        </ol>
    </div>
</section>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a class="list-group-item active"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Accounts</a>
                    <?php

                    getRegisteredTeam();
                    ?>
                </div>
            </div>

            <div class="col-md-9">
                <div class="panel panel-default">
                    <a class="list-group-item active"><span class="	glyphicon glyphicon-tag" aria-hidden="true"></span> Chatlog</a>
                    <div class="panel-body">
                        <div class="row">
                            <table class="table table-striped table-hover">

                                <thead>
                                <tr>
                                    <th>Key</th>
                                    <th>Creator</th>
                                    <th>Reporter</th>
                                    <th>Nachricht</th>
                                    <th>Zeit</th>
                                    <th>Datum</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>

                                    <?php
                                    if(isset($_GET['Key'])) {
                                        ?>
                                        <td><?php lookkey(); ?></td>
                                        <td><?php lookcreator(); ?></td>
                                        <td><?php lookreporter(); ?></td>
                                        <td><?php lookmessage(); ?></td>
                                        <td><?php looktime(); ?></td>
                                        <td><?php lookdate(); ?></td>

                                        <?php
                                    }
                                    ?>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<div class="footer-section" style="bottom: 0; font-size: 12px;">
    <div class="container">
        <p>&copy; 2017, ClayMC ACP - by EJDAR and WeLoveSpigotPlugins</p>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>
