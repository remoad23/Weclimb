<?php require("Global/Sessioning.php"); ?>
<!DOCTYPE html>
<?php $log = true;  // temporäre variante bis sessions da sind..
?>
<head>
    <meta charset="UTF-8">
    <title>Community</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/community.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"><meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="body_bg_extend">
<div class="community_wrapper">

    <?php include("navbar.php"); ?>

    <main>
        <aside class="community_aside_left">
            <div class="community_categories_aside">
                <h1 class="aside_title">Forum Kategorien</h1>
                <ul class="aside_list">
                    <a class="aside_list_a" href="community.php?cat=Allgemein"><img class="aside_icon" src="images/icons/Pin.svg"><p>Allgemein</p></a>
                    <a class="aside_list_a" href="community.php?cat=Event"><img class="aside_icon" src="images/icons/Pin.svg"><p>Event</p></a>
                    <a class="aside_list_a" href="community.php?cat=Workshop"> <img class="aside_icon" src="images/icons/Pin.svg"><p>Workshop</p></a>
                    <a class="aside_list_a" href="community.php?cat=Bouldern"> <img class="aside_icon" src="images/icons/Pin.svg"><p>Bouldern</p></a>
                    <a class="aside_list_a" href="community.php?cat=Klettern"><img class="aside_icon" src="images/icons/Pin.svg"><p>Klettern</p></a>
                    <a class="aside_list_a" href="community.php?cat=Outdoor"><img class="aside_icon" src="images/icons/Pin.svg"><p>Outdoor</p></a>
                </ul>
            </div>
            <div class="community_topics_aside">
                <h1 class="aside_title">Neuste Themen</h1>
                <ul class="aside_list">
                   <?php include("Global/newtopic.php") ?>
                </ul>
            </div>
        </aside>
        <div class="community_center">
            <div class="newarticlebox">
                <button class="newarticleredirect" onclick="location.href = 'createArticle.php';">Beitrag erstellen</button>
            </div>
            <?php include("Global/CategoryParser.php");
            if(ISSET($_GET["cat"]))
            {
                outputTopic($_GET["cat"]);
            }
            else
            {
                try {
                    $connection = new PDO("mysql:host=localhost;dbname=climb", "userlog", "PNtzlhee1HzFX5UF");

                    //die neusten Tabelleneinträge ausgeben
                    $query = "SELECT * FROM topic ORDER BY Date DESC LIMIT 6 ";
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
                                echo "<div class='category_topic_interactions'>
                            <div class='interactions'>
                                <img src='images/icons/comment.svg'>
                                <p>Kommentieren</p>
                            </div>
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
                }Catch(Exception $e){}
            }
            ?>

        </div>
        <aside class="community_aside_right">
            <div class="aside_ad">
                <img src="images/kletterhallen_bilder/Karabiner.png">
                <h1>Schraubkarabiner Türkis PETZL</h1>
            </div> <!-- to do -->
            <div class="aside_ad">
                <img src="images/kletterhallen_bilder/Gurt.png">
                <h1>Klettergurt Edelrid</h1>
            </div> <!-- to do -->
            <div class="aside_ad">
                <img src="images/kletterhallen_bilder/chalkbag_bürste.png">
                <h1>La Sportiva Chalkbag mit Bürste</h1>
            </div> <!-- to do -->
        </aside>
    </main>

    <?php  include("footer.php"); ?>

</div>
</body>

</html>
