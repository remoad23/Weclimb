<?php
    function login()
    {   // existieren diese Bereiche und sind diese nicht leer...
        try {
            if (isset($_POST["username"]) && isset($_POST["logpassword"]) && !empty($_POST["username"]) && !empty($_POST["logpassword"])) {
                //Werte in den input html elementen
                $username = $_POST["username"];
                $passw = md5($_POST["logpassword"]);


                // PW: PNtzlhee1HzFX5UF nachher loeschen kk
                $connection = new PDO("mysql:host=localhost;dbname=climb", "userlog", "PNtzlhee1HzFX5UF");

                //uebereinstimmen der Mail und passwort mit Datenbankwerten
                $query = "SELECT * FROM user WHERE Username = '" . $username . "'AND Userpassword = '" . $passw . "' ";
                $sqlstatement = $connection->prepare($query);
                if ($sqlstatement->execute()) {
                    $result = $sqlstatement->fetchAll(PDO::FETCH_NUM);
                    if (count($result) > 0) // Wenn in DB vorhanden
                    {
                        //einloggen
                        session_start();
                        $_SESSION["time"] = time();
                        $_SESSION["username"] = $username;
                        $_SESSION["id"] = $result[0][0];
                        header("Location: ../community.php");
                    } else {
                        //ansonsten goodbye bro
                        header("Location: ../register.php");
                    }
                }
            }
        }Catch(Exception $e){}
    }

    // Hier nachher regestrieren einstellen
    function register()
    {
        try {


            if (ISSET($_POST["submit_register"])) {
                if (ISSET($_POST["usernameShort"]) && ISSET($_POST["nachname"]) && ISSET($_POST["vorname"]) && ISSET($_POST["registeremail"]) && ISSET($_POST["registerpassword"]) && ISSET($_POST["passwordverify"]) &&
                    ISSET($_POST["adresse"]) && ISSET($_POST["plz"]) && ISSET($_POST["stadt"])) {
                    if ($_POST["registerpassword"] === $_POST["passwordverify"] && filter_var($_POST["registeremail"], FILTER_VALIDATE_EMAIL)) {
                        $connection = new PDO("mysql:host=localhost;dbname=climb", "userlog", "PNtzlhee1HzFX5UF");

                        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        //uebereinstimmen der Mail und passwort mit Datenbankwerten
                        $pw = md5($_POST["registerpassword"]);
                        $query = "INSERT INTO user (Username,Userpassword,UserEmail,firstname,lastname,Adress,PLZ,Stadt) 
                                VALUES('{$_POST["usernameShort"]}','{$pw}','{$_POST["registeremail"]}','{$_POST["vorname"]}',
                                '{$_POST["nachname"]}','{$_POST["adresse"]}','{$_POST["plz"]}','{$_POST["stadt"]}') ";

                        $sqlstatement = $connection->prepare($query);
                        if ($sqlstatement->execute()) {
                            header("location: ../register.php");
                        }
                    }
                }
            }
        }Catch(Exception $e){}
    }

    function logout()
    {
        if(ISSET($_POST["subnavbtn"]))
        {
            session_start();
            session_unset();
            session_destroy();
            header("Location: ../index.php");
        }
    }

    //Ab hier der eigentliche prozedurale Ablauf

    if($_GET["id"] == 1)
    {
        login();
    }
    else if($_GET["id"] == 2)
    {
        register();
    }
    else if($_GET["id"] == 3)
    {
        logout();
    }

?>