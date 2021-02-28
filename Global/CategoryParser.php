<?php

function outputTopic($cat)
{
    $topic = 0;
    if($cat === "Event")
    {
        $topic = 1;
    }
    elseif($cat === "Workshop")
    {
        $topic = 2;
    }
    elseif($cat === "Bouldern")
    {
        $topic = 3;
    }
    elseif($cat === "Klettern")
    {
        $topic = 4;
    }
    elseif($cat === "Allgemein")
    {
        $topic = 5;
    }
    elseif($cat === "Outdoor")
    {
        $topic = 6;
    }
    else
    {
        die("Leider konnte die Seite nicht gefunden werden :(");
    }
    try {
        $connection = new PDO("mysql:host=localhost;dbname=climb", "userlog", "PNtzlhee1HzFX5UF");

        //die neusten Tabelleneinträge ausgeben
        $query = "SELECT * FROM topic WHERE CategoryID = '" . $topic . "' ORDER BY TopicID DESC ";
        $sqlstatement = $connection->prepare($query);
        if ($sqlstatement->execute()) {
            $result = $sqlstatement->fetchAll(PDO::FETCH_ASSOC);
            if (count($result) > 0) // Wenn in DB vorhanden
            {
                foreach ($result as $topic) {
                    $src = "images/topic/" . $topic["Name"] . "_" . $topic["TopicID"];
                    echo "
             <div class='community_center_topic'>
               <a href='topic.php?tp={$topic["TopicID"]}'>{$topic["Name"]}</a>";
                    if (file_exists($src . ".jpg")) {
                        $src .= ".jpg";
                        echo "<p>{$topic["Text"]}</p>
                              <div class='img_topic_wrapper'>
                              <img src='{$src}'>
                             </div>";
                    } elseif (file_exists($src . ".png")) {
                        $src .= ".png";
                        echo "<p>{$topic["Text"]}</p>
                              <div class='img_topic_wrapper'>
                              <img src='{$src}'>
                             </div>";
                    } else {
                        echo "<p  class='text_stretch'>{$topic["Text"]}</p>";
                    }
                    $tp = $topic["TopicID"];
                    echo "<div class='category_topic_interactions'>
                            <a href='topic.php?tp={$tp}' class='interactions'>
                                <img src='images/icons/comment.svg'>
                                <p>Kommentieren</p>
                            </a>
                            <div class='interactions'>
                                <img src='images/icons/share.svg'>
                                <p>Teilen</p>
                            </div>
                            <div class='interactions'>
                                <img src='images/icons/like.svg'>
                                <p>Gefällt mir</p>
                            </div>
                          </div>
            </div>";
                }
            } else {
                echo '<h1>Keine Ergebnisse gefunden</h1>';
            }
        }
    }
    catch(Exception $e){}
}

function outputSingleTopic($tp)
{
    try {


        $connection = new PDO("mysql:host=localhost;dbname=climb", "userlog", "PNtzlhee1HzFX5UF");

        //die neusten Tabelleneinträge ausgeben
        $query = "SELECT * FROM topic WHERE TopicID = '{$tp}' ";
        $sqlstatement = $connection->prepare($query);
        if ($sqlstatement->execute()) {
            $topic = $sqlstatement->fetch(PDO::FETCH_ASSOC);
            if ($topic["TopicID"] > 0) // Wenn in DB vorhanden
            {
                $src = "images/topic/" . $topic["Name"] . "_" . $topic["TopicID"];
                echo "
             <div class='community_center_topic'>
               <a href='topic.php?tp={$topic["TopicID"]}'>{$topic["Name"]}</a>";

                if (file_exists($src . ".jpg")) {
                    $src .= ".jpg";
                    echo "<p>{$topic["Text"]}</p>
                          <div class='img_topic_wrapper'>
                          <img class='topic_img_single' src='{$src}'>
                          </div>";
                } elseif (file_exists($src . ".png")) {
                    $src .= ".png";
                    echo "<p>{$topic["Text"]}</p>
                         <div class='img_topic_wrapper'>
                         <img class='topic_img_single' src='{$src}'>
                         </div>";
                } else {
                    echo "<p  class='text_stretch'>{$topic["Text"]}</p>";
                }
                echo "<div class='category_topic_interactions'>
                            <div class='interactions'>
                                <img src='images/icons/share.svg'>
                                <p>Teilen</p>
                            </div>
                            <div class='interactions'>
                                <img src='images/icons/like.svg'>
                                <p>Gefällt mir</p>
                            </div>
                          </div>
            </div>";
            } else {
                echo '<h1>Keine Ergebnisse gefunden</h1>';
            }
        }
    }
    Catch(Exception $e){}
}

// Laed und speichert ein Bild als JPG/PNG
function saveIMG($id,$title)
{
    try {
        $target_file = "../images/topic/" . basename($_FILES["image_category"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        /*  Uberpruefen ob Format erlaubt ist (JPG ODER PNG) */
        if ($imageFileType === "png") {
            $target_file = "../images/topic/{$title}_{$id}.png";
        } elseif ($imageFileType === "jpg") {
            $target_file = "../images/topic/{$title}_{$id}.jpg";
        } else {
            return;
        }
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["image_category"]["tmp_name"]);
        if ($check !== false) {
            move_uploaded_file($_FILES["image_category"]["tmp_name"], $target_file);
            $uploadOk = 1;
        } else {
            header("location: index.php");
            $uploadOk = 0;
        }
    }Catch(Exception $e){}
}

function insertTopic($name,$text,$categoryID,$userid)
{

    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=climb", "userlog", "PNtzlhee1HzFX5UF");

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /* Uberpruefen,falls ID nicht in DB vorhanden soll sofort die Funktion verlassen werden */
        $query = "SELECT CategoryID from category WHERE CategoryID = '{$categoryID}'";
        $sqlstatement = $connection->prepare($query);
        $sqlstatement->execute();
        $result = $sqlstatement->fetchAll(PDO::FETCH_ASSOC);
        if (count($result) === 0) {
            echo "kein Ergebnis in DB";
            return;
        }
        $d = date("Y/m/d");
        //die neusten Tabelleneinträge ausgeben
        $query = "INSERT INTO topic (Name,Text,CategoryID,UserID,Date) VALUES('{$name}','{$text}', '{$categoryID}','{$userid}', '{$d}')";
        $sqlstatement = $connection->prepare($query);
        $sqlstatement->execute();

        $query = "SELECT TopicID from topic WHERE Name = '{$name}' AND Text = '{$text}'  AND CategoryID = '$categoryID' ";
        $sqlstatement = $connection->prepare($query);
        if ($sqlstatement->execute()) {
            $result = $sqlstatement->fetchAll(PDO::FETCH_NUM);
            saveIMG($result[0][0], $name);
            header("location: ../topic.php?tp={$result[0][0]}");
        }
    }Catch(Exception $e){}
}

/* Gibt Kommenatre bei dem jeweiligen Topic aus*/
function getComments($tp)
{
    try {
        $connection = new PDO("mysql:host=localhost;dbname=climb", "userlog", "PNtzlhee1HzFX5UF");
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //die neusten Tabelleneinträge ausgeben
        $query = "SELECT * FROM comment WHERE TopicID = '{$tp}' ";
        $sqlstatement = $connection->prepare($query);
        if ($sqlstatement->execute()) {
            $result = $sqlstatement->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $comment) {
                $query2 = "SELECT Username FROM user WHERE UserID = '{$comment["UserID"]}' ";
                $sqlstatement2 = $connection->prepare($query2);
                $sqlstatement2->execute();
                $user = $sqlstatement2->fetch(PDO::FETCH_ASSOC);
                echo "<div class='comment_box'> 
                   <h1>{$user["Username"]}</h1>
                   <p>{$comment["Text"]}</p>
               </div> ";
            }
        }
    }Catch(Exception $e){}
}

if(ISSET($_GET["tp"]))
{
    outputSingleTopic($_GET["tp"]);
}

if(ISSET($_POST['post_category']) && ISSET($_POST["title_category"]) && ISSET($_POST["text_category"]) && ISSET($_POST["category"]) )
{
    session_start();
    if( ISSET($_SESSION["id"]))
    {
        insertTopic($_POST["title_category"],$_POST["text_category"],$_POST["category"],$_SESSION["id"]);
    }

}