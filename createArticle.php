<?php require("Global/Sessioning.php");
?>
<!DOCTYPE html>
<?php $log = true;  // temporäre variante bis sessions da sind..?>

<head>
    <meta charset="UTF-8">
    <title>Neuer Beitrag</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/community.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"><meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/createArticle.js"></script>
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
            <form  enctype="multipart/form-data" action="Global/CategoryParser.php" method="POST" class="community_center_topic createTopicArea">
                <h1 class="title_newarticle" >Neuer Post erstellen</h1>
                <input pattern=".{0,40}" name="title_category" class="title_createarticle" placeholder="Titel" type="text" onfocusout="saveTitle()">
                <textarea pattern=".{10,3000}" name="text_category" cols="50" row="20" class="title_createarticleContent" placeholder="Schreibe hier deinen Text" onfocusout="saveText()"></textarea>
                <div class="configuration_bar">
                    <select name="category" class="selectCategoryDropDown" onfocusout="saveCategory()">
                        <option value="">Kategorie wählen</option>
                        <option value="1">Event</option>
                        <option value="2">Workshop</option>
                        <option value="3">Bouldern</option>
                        <option value="4">Klettern</option>
                    </select>
                    <input type="file" id="imgfile" name="image_category" src="images/icons/add_image.svg">
                    <label class="icon_createArticle icon1" for="imgfile"><p>Bild einfügen</p></label>
                </div>
                <button class="btn_submit_article" type="submit" name="post_category" onclick="clearStorage()">Posten</button>
            </form>

        </div>
    </main>

    <?php  include("footer.php"); ?>

</div>
</body>

</html>
