<?php

//---------------------------------------
//Deine Mysql-Daten eintragen!!
$mysql_host = "";
$mysql_user = "";
$mysql_password = "";
$mysql_database = "";

//Deine Serverdaten angeben!!
$ip = "ClayMC.net";
$port = 25565;
//---------------------------------------

function loeschen(){
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database, $key, $id;
    $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    mysqli_select_db($con, $mysql_database) or die(mysqli_error());

    $sql = "DELETE FROM chatlog WHERE access='" . $key . "'";
    $query = mysqli_query($con, $sql) or die(mysqli_error());

    $sql = "DELETE FROM accesstable WHERE accesstype='" . $key . "'";
    $query = mysqli_query($con, $sql) or die(mysqli_error());
    $con->close();
}

function lookkey(){
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database, $key;
    $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    mysqli_select_db($con, $mysql_database) or die(mysqli_error());
    $sql = "SELECT * FROM chatlog WHERE access='" . $key . "'";
    $query = mysqli_query($con, $sql) or die(mysqli_error());
    $result = $con->query($sql);

    if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
            echo "<b>" . $row["access"] . "</b><br><br>";
        }
    }
}

function lookcreator(){
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database, $key;
    $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    mysqli_select_db($con, $mysql_database) or die(mysqli_error());
    $sql = "SELECT * FROM chatlog WHERE access='" . $key . "'";
    $query = mysqli_query($con, $sql) or die(mysqli_error());
    $result = $con->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<b>" . $row["creator"] . "</b><br><br>";
        }
    }
}

function lookreporter(){
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database, $key;
    $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    mysqli_select_db($con, $mysql_database) or die(mysqli_error());
    $sql = "SELECT * FROM chatlog WHERE access='" . $key . "'";
    $query = mysqli_query($con, $sql) or die(mysqli_error());
    $result = $con->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<b>" . $row["spielername"] . "</b><br><br>";
        }
    }
}

function lookmessage(){
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database, $key;
    $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    mysqli_select_db($con, $mysql_database) or die(mysqli_error());
    $sql = "SELECT * FROM chatlog WHERE access='" . $key . "'";
    $query = mysqli_query($con, $sql) or die(mysqli_error());
    $result = $con->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<b>" . $row["message"] . "</b><br><br>";
        }
    }
}

function looktime(){
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database, $key;
    $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    mysqli_select_db($con, $mysql_database) or die(mysqli_error());
    $sql = "SELECT * FROM chatlog WHERE access='" . $key . "'";
    $query = mysqli_query($con, $sql) or die(mysqli_error());
    $result = $con->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<b>" . $row["zeit"] . "</b><br><br>";
        }
    }
}

function lookdate(){
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database, $key;
    $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    mysqli_select_db($con, $mysql_database) or die(mysqli_error());
    $sql = "SELECT * FROM chatlog WHERE access='" . $key . "'";
    $query = mysqli_query($con, $sql) or die(mysqli_error());
    $result = $con->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<b>" . $row["datum"] . "</b><br><br>";
        }
    }
}

function getkey() {
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database;
    $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    mysqli_select_db($con, $mysql_database) or die(mysqli_error());
    $sql = "SELECT * FROM chatlog";
    $query = mysqli_query($con, $sql) or die(mysqli_error());
    $result = $con->query($sql);

    if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
            echo "<b>" . $row["access"] . "</b><br><br>";
        }
    }
}

function getcreator() {
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database;
    $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    mysqli_select_db($con, $mysql_database) or die(mysqli_error());
    $sql = "SELECT * FROM chatlog";
    $query = mysqli_query($con, $sql) or die(mysqli_error());
    $result = $con->query($sql);

    if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
            echo "<b>" . $row["creator"] . "</b><br><br>";
        }
    }
}

function getreporter() {
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database;
    $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    mysqli_select_db($con, $mysql_database) or die(mysqli_error());
    $sql = "SELECT * FROM chatlog";
    $query = mysqli_query($con, $sql) or die(mysqli_error());
    $result = $con->query($sql);

    if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
            echo "<b>" . $row["spielername"] . "</b><br><br>";
        }
    }
}

function getmessage() {
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database;
    $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    mysqli_select_db($con, $mysql_database) or die(mysqli_error());
    $sql = "SELECT * FROM chatlog";
    $query = mysqli_query($con, $sql) or die(mysqli_error());
    $result = $con->query($sql);

    if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
            echo "<b>" . $row["message"] . "</b><br><br>";
        }
    }
}

function gettime() {
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database;
    $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    mysqli_select_db($con, $mysql_database) or die(mysqli_error());
    $sql = "SELECT * FROM chatlog";
    $query = mysqli_query($con, $sql) or die(mysqli_error());
    $result = $con->query($sql);

    if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
            #echo "<b>" . $row["time"] . "</b><br><br>";
        }
    }
}

function datee() {
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database;
    $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    mysqli_select_db($con, $mysql_database) or die(mysqli_error());
    $sql = "SELECT * FROM chatlog";
    $query = mysqli_query($con, $sql) or die(mysqli_error());
    $result = $con->query($sql);

    if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
           # echo "<b>" . $row["date"] . "</b><br><br>";
        }
    }
}

function createuser($username, $password){
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database;
    $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    mysqli_select_db($con, $mysql_database) or die(mysqli_error());
    $sql = "INSERT INTO login (username, password) VALUES ('" . $username . "','" . $password . "');";
    $query = mysqli_query($con, $sql) or die(mysqli_error());
    $con->close();
}
function deleteuser(){
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database;
    $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    mysqli_select_db($con, $mysql_database) or die(mysqli_error());
    $sql = "SELECT * FROM login";
    $query = mysqli_query($con, $sql) or die(mysqli_error());

    $result = $con->query($sql);

    $user = array();

    while($row = $result->fetch_assoc()) {
        array_unshift($user, $row["username"]);
    }
    for($i = 0; $i < count($user); $i++) {
        echo("

                              <tr id='nick_skull'>
                                <td><img class='skin_icon' src='https://crafatar.com/renders/head/" . $user[$i] . "?scale=3&amp;default=MHF_Steve&amp;overlay' alt='" . $user[$i] . "'></td>
                                <td>" . $user[$i] . "</td>
                                <td><a href='Verwaltung.php?action=delete_interfaceuser&username=" . $user[$i] . "' class='btn btn-danger'>Löschen</a></td>
                              </tr>
                            ");

    }
}

function delete(){
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database, $userToDelete;
    $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
        mysqli_select_db($con, $mysql_database) or die(mysqli_error());
        $sql = "DELETE FROM login WHERE username='" . $userToDelete . "'";
        $query = mysqli_query($con, $sql) or die(mysqli_error());
        $con->close();
}

function checkUserExists($username){
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database;
    $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    mysqli_select_db($con, $mysql_database) or die(mysqli_error());
    $sql = "SELECT username FROM login";
    $result = mysqli_query($con, $sql) or die(mysqli_error());
    $value = false;

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            if($row['username'] == $username){
                $value = true;
            }
        }
    }
    $con->close();
    return $value;
}

function checkLogin($username, $password){
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database;
    $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    mysqli_select_db($con, $mysql_database) or die(mysqli_error());
    $sql = "SELECT username,password FROM login";
    $result = mysqli_query($con, $sql) or die(mysqli_error());
    $value = false;

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if($row['username'] == $username && $row['password'] == $password) {
                $value = true;
            }
        }
    }

    return $value;
}

function checkAdmin($username, $password){
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database;
    $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    mysqli_select_db($con, $mysql_database) or die(mysqli_error());
    $sql = "SELECT username,password FROM admin";
    $result = mysqli_query($con, $sql) or die(mysqli_error());
    $value = false;

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if($row['username'] == $username && $row['password'] == $password) {
                $value = true;
            }
        }
    }

    return $value;
}

function getRegisteredTeam() {

              global $mysql_host, $mysql_user, $mysql_password, $mysql_database;
              $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
                    mysqli_select_db($con, $mysql_database) or die(mysqli_error());
                    $sql = "SELECT * FROM login";
                    $query = mysqli_query($con, $sql) or die(mysqli_error());

              $result = $con->query($sql);

              $user = array();

              while($row = $result->fetch_assoc()) {
                  array_unshift($user, $row["username"]);
              }

              for($i = 0; $i < count($user); $i++) {
                  echo("
                          <a class='list-group-item'><span><img src='https://minotar.net/helm/" . $user[$i] . "/25.png'></span> <b>" . $user[$i] . "</b> </a>
                        ");

              }
}

function getchatlog(){
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database, $key;
    $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
        mysqli_select_db($con, $mysql_database) or die(mysqli_error());
        $sql = "SELECT * FROM chatlog WHERE access'" . $key . "'";
        $query = mysqli_query($con, $sql) or die();
        $result = $con->query($sql);
        return $result->num_rows;
}

function getChatlogID() {
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database;
    $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
        mysqli_select_db($con, $mysql_database) or die(mysqli_error());
        $sql = "SELECT id FROM chatlog";
        $query = mysqli_query($con, $sql) or die(mysqli_error());
        $result = $con->query($sql);
        return $result->num_rows;
}

function searchkey(){
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database;
    $con = mysqli_connect($mysql_host,$mysql_user, $mysql_password, $mysql_database);
    mysqli_select_db($con, $mysql_database) or die(mysqli_error());
    $suchbegriff = trim(htmlentities(stripslashes(mysqli_real_escape_string($con, $_GET['Key']))));
    $sql = "SELECT access,creator,spielername,zeit,datum FROM chatlog WHERE access LIKE '%".$suchbegriff."%' OR creator LIKE '%" . $suchbegriff . "%' OR spielername LIKE '%" .
        $suchbegriff . "%'";
    $query = mysqli_query($con, $sql);
    $result = $con->query($sql);

    $key = array();
    $creator = array();
    $reporter = array();
    $time = array();
    $date = array();

    while ($row = $result->fetch_assoc()) {
        array_unshift($key, $row["access"]);
        array_unshift($creator, $row["creator"]);
        array_unshift($reporter, $row["spielername"]);
        array_unshift($time, $row["zeit"]);
        array_unshift($date, $row["datum"]);

    }

    for($i = 0; $i < count($key); $i++){
        echo "<h4><b>Chatlog</b></h4><b>Ersteller: </b>" . $creator[$i] . "<b><br> Gemeldeter:</b> " . $reporter[$i] . " <b>|| Zeit: </b>" . $time[$i] . " <b>|| Datum: </b>" . $date[$i] . " <br><br><br>";
    }
}

function searchkey1(){
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database;
    $con = mysqli_connect($mysql_host,$mysql_user, $mysql_password, $mysql_database);
    mysqli_select_db($con, $mysql_database) or die(mysqli_error());
    $suchbegriff = trim(htmlentities(stripslashes(mysqli_real_escape_string($con, $_POST['Key']))));
    $sql = "SELECT access,creator,spielername,zeit,datum,message FROM chatlog WHERE access LIKE '%".$suchbegriff."%' OR creator LIKE '%" . $suchbegriff . "%' OR spielername LIKE '%" .
        $suchbegriff . "%'";
    $query = mysqli_query($con, $sql);
    $result = $con->query($sql);

    $key = array();
    $creator = array();
    $reporter = array();
    $time = array();
    $date = array();
    $message = array();

    while ($row = $result->fetch_assoc()) {
        array_unshift($key, $row["access"]);
        array_unshift($creator, $row["creator"]);
        array_unshift($reporter, $row["spielername"]);
        array_unshift($time, $row["zeit"]);
        array_unshift($date, $row["datum"]);
        array_unshift($message, $row['message']);

    }

    for($i = 0; $i < count($key); $i++){
        echo "<h4><b>Chatlog</b></h4><b>Ersteller: </b>" . $creator[$i] . "<b><br> Gemeldeter:</b> " . $reporter[$i] . " <b><br>Nachricht:</b> " . $message[$i] . " <b>|| Zeit: </b>" . $time[$i] . " <b>|| Datum: </b>" . $date[$i] . " <br><br><br>";
    }
}

function seekeys(){
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database;
    $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
        mysqli_select_db($con, $mysql_database) or die(mysqli_error());
        $sql = "SELECT * FROM accesstable";
        $query = mysqli_query($con, $sql) or die();
        $result = $con->query($sql);

        while ($row = $result->fetch_assoc()) {
            echo("<tr>");
                if(key_exists('accesstype', $row)) {
                    echo("<td>" . $row['accesstype'] . "</td>");
                    echo("
                        <td><a href='ansehen.php?Key=" . $row['accesstype'] . "' class='btn btn-info'>Bearbeiten</a></td>
                        <td><a href='?closed=" . $row['accesstype'] . "' class='btn btn-danger'>Löschen</a></td>
                    ");

                } else {
                    echo("<td></td>");
                }
            echo("</tr>");
        }

}

function Message(){
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database, $name;
    $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
        mysqli_select_db($con, $mysql_database) or die(mysqli_error());
        $sql = "SELECT message,zeit,datum FROM chatlog WHERE access='" . $name . "'";
        $query = mysqli_query($con, $sql) or die(mysqli_error());
        $result = $con->query($sql);


    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<b>" . $row["message"] . " (" . $row["zeit"] . " | " . $row["datum"] . ")</b><hr />";
        }
    }

}

function Creator(){
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database, $name;
    $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    mysqli_select_db($con, $mysql_database) or die(mysqli_error());
    $sql = "SELECT creator FROM chatlog WHERE access='" . $name . "'";
    $query = mysqli_query($con, $sql) or die(mysqli_error());
    $result = $con->query($sql);


    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
            echo "<b>" . $row["creator"] . "</b><br>";
        }

}

function Reported(){
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database, $name;
    $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    mysqli_select_db($con, $mysql_database) or die(mysqli_error());
    $sql = "SELECT spielername FROM chatlog WHERE access='" . $name . "'";
    $query = mysqli_query($con, $sql) or die(mysqli_error());
    $result = $con->query($sql);


    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        echo "<b>" . $row["spielername"] . "</b><br>";
    }

}

function Zeit(){
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database, $name;
    $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    mysqli_select_db($con, $mysql_database) or die(mysqli_error());
    $sql = "SELECT zeit FROM chatlog WHERE access='" . $name . "'";
    $query = mysqli_query($con, $sql) or die(mysqli_error());
    $result = $con->query($sql);


    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        echo "<b>" . $row["zeit"] . "</b><br>";
    }

}

function Datum(){
    global $mysql_host, $mysql_user, $mysql_password, $mysql_database, $name;
    $con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    mysqli_select_db($con, $mysql_database) or die(mysqli_error());
    $sql = "SELECT datum FROM chatlog WHERE access='" . $name . "'";
    $query = mysqli_query($con, $sql) or die(mysqli_error());
    $result = $con->query($sql);


    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        echo "<b>" . $row["datum"] . "</b><br>";
    }

}



//---------------------------------------------------------------------
//ANPASSEN!!
//---------------------------------------------------------------------
function Spieleronline() {
    //global $ip, $port;
    $ip = "ClayMC.net";
    $port = 25565;
    if(!@$fp = fsockopen($ip, $port, $errno, $errstr, 1)) {
        echo("Fehler");

    } else {
        $fp = fsockopen($ip, $port, $errno, $errstr, 4) or die();
        fwrite($fp, "\xFE");

        $answer = fread($fp, 256);
        //Aus MOTD abgelesen.. Die Zahl "105" muss für eure Spieleranzahl angepasst werden.
        $text = substr($answer, 100);
        $parts = explode("\xA7", $text);

        echo ($parts[0] . ' ' . $parts[1] . '/' . $parts[2] . ' Spieler');
    }
}

function MOTD()
{
    global $ip, $port;

    if (!@$fp = fsockopen($ip, $port, $errno, $errstr, 1)) {
        echo("Fehler");

    } else {
        $fp = fsockopen($ip, $port, $errno, $errstr, 4) or die();
        fwrite($fp, "\xFE");

        $answer = fread($fp, 256);
        //Aus MOTD abgelesen.. Die Zahl "5" & "75" muss für eure MOTD angepasst werden.
        //Sonderzeichen werden nicht übernommen!!
        $text = substr($answer, 5, 75);
        $text = mb_convert_encoding($text, 'auto', 'UTF-8');
        $parts = explode("\xA7", $text);

        echo(utf8_encode($parts[0]));
    }
}
//---------------------------------------------------------------------
//---------------------------------------------------------------------

?>
