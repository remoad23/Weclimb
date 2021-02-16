<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Startseite</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"><meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>
<div class="main_wrapper">

   <?php include("navbar.php"); ?>

    <main>
        <!--Einführungsfeld mit Klettererhintergrund-->
       <div id="introduction" class="section">
        <div class=introduction_block>
            <h1 class="introduction_title">Abenteuerlustig. Kommunikativ. WeClimb.</h1>
            <p>WeClimb hilft dir dabei die Kletter- und Boulderspots in deiner Nähe zu finden und
                verbindet dich mit Menschen, die auch deine Leidenschaft teilen.</p>
        </div>
           <div class="nav_btn_wrap">
               <button class="nav_btn_signup" onclick="window.location.href = 'register.php';"> Registrieren</button>
               <button class="nav_btn" onclick="window.location.href = 'register.php';">Anmelden</button>
           </div>
       </div>
        <div id="users" class="section">
            <div class="section_user_userreview review1">
                <div class="home_review_textblock review1_block_home">
                    <h1 class="user_review_title1">Hallo, ich bin Clara.</h1>
                    <p>
                        Mit WeClimb habe ich coole Leute  aus meiner Umgebung gefunden, mit denen ich regelmäßig klettern gehe.
                    </p><wbr>
                </div>
            </div>
            <div class="section_user_userreview review2">
                <div class="home_review_textblock review2_block_home">
                    <h1 class="user_review_title2">Hallo, ich bin Jan.</h1>
                    <p>
                        Dank der WeClimb Community habe ich unheimlich viele Tipps zu Themen wie Vorstieg
                        oder Kletterausrüstungen bekommen.

                    </p><wbr>
                </div>
            </div>
            <!--der Text in der Mitte Userreview-->
            <div class="section_user_text">
                <p class="section_user_text_desc">Tausche dich mit anderen aus. Stelle Fragen zu Themen,
                    die dich interessieren. Diskutiere mit. Schreibe deine eigenen Beiträge und helfe anderen dabei,
                    in diesen Sport einzusteigen. Lerne neue Leute durch Events und Workshops kennen. Verabredet euch
                    zum gemeinsamen Treffen oder organisiert euch den gemeinsamen Kletterurlaub. Alles auf einer Plattform.
                    Worauf wartest du noch?</p><wbr>
            </div>
            <!--der Textblock der von Userreviews zu Google Maps führt-->
            <div class="section_user_intro_gmap">
                <p class="section_user_gmap_intro_text">Finde die Kletterspots <br>in deiner Nähe</p>
                <div id="triangle"></div>
            </div>
        </div>
        <!--Google Maps-->
        <?php include("gmaps.php"); ?>
    </main>

    <?php  include("footer.php"); ?>

</div>
</body>

</html>
