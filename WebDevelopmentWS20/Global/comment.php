<?php
function addComments($text,$topicid,$userid)
{
    try {


        $connection = new PDO("mysql:host=localhost;dbname=climb", "userlog", "PNtzlhee1HzFX5UF");

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //die neusten Tabelleneinträge ausgeben
        $query = "INSERT INTO comment (Text,UserID,TopicID) VALUES('{$text}','{$userid}', '{$topicid}' )";
        $sqlstatement = $connection->prepare($query);
        if ($sqlstatement->execute()) {
            echo "Artikel erfolgreich erstellt";
            header("location: ../topic.php?tp={$topicid}");
        }
    }
    Catch(Exception $e){}

}

session_start();
if(ISSET($_GET["tpc"]) && ISSET($_POST["comment_text"]) && ISSET($_POST["subcomment"]) && !empty($_POST["comment_text"]))
{
    addComments($_POST["comment_text"],$_GET["tpc"],$_SESSION["id"]);
}