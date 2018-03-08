<?php
require_once('functions.php');

error_reporting(0);
$name = $_GET['Key'];

?>

<!DOCTYPE html>

<html>

<head>
    <title>DeinPlugin • Suchen</title>
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
            <li class="active"><a href="meinchatlog.php">Mein Chatlog</a></li>
        </ul>
    </div>
</nav>

<section id="breadcrumb">
    <div class="col-md-14">
        <ol class="breadcrumb">
            <a><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> / Dashboard / Suchen</a>
        </ol>
    </div>
</section>

<section id="main">
    <div class="container">
            <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a class="list-group-item active"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Teammitglieder</a>

                    <?php

                    getRegisteredTeam();
                    ?>

                </div>
            </div>

            <div class="col-md-9">
                <div class="panel panel-default">
                    <a class="list-group-item active"><span class="	glyphicon glyphicon-tag" aria-hidden="true"></span> Chatlog Suchen</a>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">


                            <table class="table table-striped table-hover">

                                <th>
                                    <?php
                                    if(isset($_GET['Key'])){
                                        echo "<h3><b>Chatlog</b></h3><br>";
                                        echo "Ersteller: ";
                                        Creator();
                                        echo "Gemeldeter: ";
                                        Reported();

                                    }
                                    ?>
                                </th>


                            </div>
                            </table>


                            <table class="table table-striped table-hover">

                                <th>
                                    <?php
                                    if(isset($_GET['Key'])){

                                        echo "<br>";
                                        Message();

                                    }
                                    ?>
                                </th>
                            </table>
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
