<?php
session_start();
require_once('functions.php');

if(!isset($_POST['benutzer']) && !isset($_POST['passwort'])) {
    if($_SESSION['logged_in'] == false){
        ?>
        <meta http-equiv="refresh" content="0; URL=dashboard.php">
        <?php
    }
}

error_reporting(0);
$name = $_SESSION['admin'];

if(isset($_GET['action']) && isset($_GET['username'])) {
    if($_GET['action'] == "delete_interfaceuser") {
        $action = "delete_interfaceuser";
        $userToDelete = $_GET['username'];

        delete();
        ?>
        <meta http-equiv="refresh" content="0; URL=verwaltung.php">
        <?php
    }
}

if(isset($_GET['action']) && isset($_POST['cusername']) && isset($_POST['cpasswort'])) {
    if($_GET['action'] == "create_interfaceuser") {

            createuser($_POST['cusername'], $_POST['cpasswort']);

        echo "<meta http-equiv='refresh' content='0; URL=verwaltung.php'>";
    }
}

?>

<!DOCTYPE html>

<html>

<head>
    <title>DeinPlugin • Chatlogsystem</title>
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
                                    <p class="text-left"><a href="verwaltung.php" class="btn btn-primary btn-block btn-sm">Verwaltung</a></p>
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
            <a><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> / Dashboard / Verwaltung</a>
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
                    <a class="list-group-item active"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Server Statisiken</a>
                    <div class="panel-body">
                        <div class="col-md-4">
                            <div class="well dash-box">
                                <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Spieler:</h2>
                                <h4><?php Spieleronline(); ?></h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="well dash-box">
                    <h2><img src='https://minotar.net/helm/<?php echo $name; ?>/100.png'></h2>
                                <br>
                                <p><?php echo $name; ?></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="well dash-box">
                                <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Chatlogs: </h2>
                                <h4><?php echo(getChatlogID()); ?> Offen</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <a class="list-group-item active"><span class="	glyphicon glyphicon-tag" aria-hidden="true"></span> Account Verwaltung</a>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="Verwaltung.php?action=create_interfaceuser" method="post" accept-charset="UTF-8" role="form">
                                    <fieldset>
                                        <br>
                                        <h4><strong>Account Erstellen</strong></h4>
                                        <br>
                                        <div style="margin-bottom: 25px" class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input id="username" type="text" class="form-control" name="cusername" value="" placeholder="Benutzername">
                                        </div>

                                        <div style="margin-bottom: 25px" class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                            <input id="passwort" type="password" class="form-control" name="cpasswort" placeholder="Passwort">
                                        </div>
                                        <input class="btn btn-lg btn-success btn-block" name="create" type="submit" value="Hinzufügen" >
                                        <br>
                                        <div style="margin-bottom: 25px" class="input-group">
                                        </div>

                                        <br>
                                    </fieldset>
                                </form>


                                <form action="Verwaltung.php?action=delete_interfaceuser" method="post" accept-charset="UTF-8" role="form">
                                    <fieldset>
                                        <h4><strong>Account Löschen</strong></h4>
                                        <br>


                                        <div style="margin-bottom: 25px" class="input-group">
                                            <?php
                                            deleteuser();
                                            ?>
                                        </div>

                                        <br>
                                    </fieldset>
                                </form>


                            </div>
                        </div>
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