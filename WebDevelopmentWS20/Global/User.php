<?php

public class User
{
    private $userName = "";
    private $realname = "";
    private $userMail = "";
    private $userpassword = "";

    public function __construct($sqlPath)
    {
        $sqlPath = ""; // Hier nachher SQL Abfrage
    }

    public function __destruct() // Hier spaeter nachher bei login eliminierung ,eventuell auch nicht benotiegt mal gucken
    {

    }

    private function loadUserData() // Hier nachher einmalige ausführung der sql-query
    {

    }
}

?>
