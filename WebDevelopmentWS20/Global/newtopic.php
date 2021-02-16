<?php
/* Gibt Kommenatre bei dem jeweiligen Topic aus*/
function getNewTopics()
{
    try {

        $connection = new PDO("mysql:host=localhost;dbname=climb", "userlog", "PNtzlhee1HzFX5UF");

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //die 10 neusten Tabelleneintraege
        $query = "SELECT * FROM topic ORDER BY Date DESC LIMIT 6 ";
        $sqlstatement = $connection->prepare($query);
        if ($sqlstatement->execute()) {
            $result = $sqlstatement->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $topic) {
                $link = "topic.php?tp={$topic["TopicID"]}";
                echo "<a class='aside_list_a' href='{$link}'>
                    <img class='aside_icon' src='images/icons/Pin.svg'>
                    <p>{$topic["Name"]}</p>
                    </a>";
            }
        }
    }Catch(Exception $e){}

}

getNewTopics();