<?php require("Global/Sessioning.php"); ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Topic</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/community.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"><meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
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

        <div class="community_center community_center_topicsec">
                <?php require("Global/CategoryParser.php");  ?>
            <form class="form_element comment_form" action="Global/comment.php?tpc=<?php echo $_GET["tp"]?>" method="POST">
                <textarea name="comment_text" placeholder="Schreibe hier eine Nachricht.." row="10"  cols="30" class="textarea_comment"></textarea>
                <button name="subcomment" class="form_button topic_button_send" type="submit">Senden</button>
            </form>
            <div class="comment_section">
                <?php getComments($_GET["tp"]); ?>
            </div>
        </div>
    </main>

    <?php  include("footer.php"); ?>

</div>
</body>

</html>
