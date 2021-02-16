<?php
function verifyTime()
{
    try {


        session_start();

        $connection = new PDO("mysql:host=localhost;dbname=climb", "userlog", "PNtzlhee1HzFX5UF");
        //Abfragen ob Sessionwerte da sind...
        if (ISSET($_SESSION["username"]) && ISSET($_SESSION["time"]) && !empty($_SESSION["time"]) && !empty($_SESSION["username"])) {
            $username = $_SESSION["username"];
            $query = "SELECT * FROM user WHERE Username = '{$username}' ";
            $sqlstatement = $connection->prepare($query);
            // Wenn User in DB da ist und Zeit nicht uberschritten,dann neue Zeit einstellen
            if ($sqlstatement->execute()) {
                $result = $sqlstatement->fetchAll(PDO::FETCH_ASSOC);
                if (count($result) > 0) {
                    $connection = null;
                } else {
                    session_unset();
                    session_destroy();
                    $connection = null;
                    header("Location: register.php");
                }
            }
        } // Falls Zeit ueberschritten der Session oder Username nicht in DB existiert
        elseif ((time() - $_SESSION["time"]) > 1800 || !ISSET($_SESSION["username"])) {
            session_unset();
            session_destroy();
            header("Location: register.php");
        }
    }
    Catch(Exception $e){}

}


verifyTime();