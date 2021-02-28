<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Über uns</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="main_wrapper about_wrapper">
        <?php include("navbar.php"); ?>
        <main>
            <div class="ourstory">
                <div class="title_ourstory">
                    <h1>Unsere Geschichte</h1>
                </div>
                <div class="content_ourstory">
                    <p> Wir sind drei sportbegeisterte Menschen aus NRW, die für den Klettersport brennen. Die Sportart
                        hat uns zusammengeschweißt und prägt unseren Lifestyle. Gerade im heutigen Zeitalter, welches von
                        Medien, Konsum und Globalisierung beeinflusst wird, suchen wir umso mehr nach der Identität
                        unseren Selbst. Dabei sind uns Werte wie Naturverbundenheit, Abenteuerlust und Nachhaltigkeit sehr wichtig.
                        Wir wollen Menschen zu einem gesunden Lebensstil motivieren, ihnen die Möglichkeit geben, sich auszutauschen,
                        miteinander zu kommunizieren und sich zu verbinden. Somit entstand die Plattform WeClimb, die lokale
                        Klettergemeinschaften zu einer modernen Community formt.</p> <wbs>
                </div>
            </div>
            <div class="communitytriangle">
                <div class="triangle_right_community parallax"></div>
                <div class="triangle_left_community parallax"></div>
            </div>
            <script src="js/about.js"></script>
            <div class="faq">
                <div class="faq_main_title">
                    <p class="">FAQ </p>
                </div>
                <div class="faq_text_block">
                    <div class="faq_title">
                        <p> Was ist WeClimb?</p> <wbs>
                    </div>
                    <div class="faq_text">
                       <p> WeClimb ist eine Social Media Plattform, die lokalen Kletter- und Bouldercommunities die
                           Möglichkeit bietet, sich über ihre Interessen auszutauschen und zu kommunizieren.</p> <wbs>
                    </div>
                </div>
                <div class="faq_text_block">
                    <div class="faq_title">
                        <p> Wie erstelle ich ein WeClimb Konto?</p> <wbs>
                    </div>
                    <div class="faq_text">
                        <p> Ganz einfach, mit deiner E-Mail Adresse und deinem gewünschten Passwort kannst du dich
                            in dem Formular direkt kostenlos bei uns anmelden.</p> <wbs>
                    </div>
                </div>
                <div class="faq_text_block">
                    <div class="faq_title">
                        <p>Wie suche ich nach der regionalen Community?</p> <wbs>
                    </div>
                    <div class="faq_text">
                        <p>  Unter Gym Finder gibst du entweder den Namen deiner Stadt ein oder die Postleitzahl.
                            Danach erscheinen alle Kletter-Hotspots aus deiner Nähe.</p> <wbs>
                    </div>
                </div>
                <div class="faq_text_block">
                    <div class="faq_title">
                        <p> Wie erstelle ich Beiträge zu einem Thema?</p> <wbs>
                    </div>
                    <div class="faq_text">
                        <p> Du loggst dich wie gewohnt ein, unter den Menüpunkt “Community” kannst du ein neues Thema,
                            welches dich gerade beschäftigt, hinzufügen.</p> <wbs>
                    </div>
                </div>
                <div class="faq_text_block">
                    <div class="faq_title">
                        <p> Wie bearbeite ich meinen Beitrag?</p> <wbs>
                    </div>
                    <div class="faq_text">
                        <p> Dazu musst du dich in deinem Account anmelden und auf deine Beiträge gehen,
                            den gewünschten Beitrag auswählen und auf bearbeiten klicken.</p> <wbs>
                    </div>
                </div>
                <div class="faq_text_block">
                    <div class="faq_title">
                        <p> Wie ändere ich mein Passwort?</p> <wbs>
                    </div>
                    <div class="faq_text">
                        <p> Über deine Kontoeinstellung kannst du jeder Zeit dein Passwort ändern.</p> <wbs>
                    </div>
                </div>
            </div>
            <div class="sponsoring">
              <div class="sponsoring_title">
                <h1 >Sponsoring</h1>
              </div>
                <div class="sponsoring_content">
                    <img class="logo_sponsoring_content" src="images/logos/Bergfreunde.png">
                    <img class="logo_sponsoring_content" src="images/logos/DAV_Logo.png">
                    <img class="logo_sponsoring_content" src="images/logos/Deuter_Logo_RGB.png">
                    <img class="logo_sponsoring_content" src="images/logos/Logo_petzl.png">
                    <img class="logo_sponsoring_content" src="images/logos/Bergfreunde.png">
                    <img class="logo_sponsoring_content" src="images/logos/DAV_Logo.png">
                    <img class="logo_sponsoring_content" src="images/logos/Deuter_Logo_RGB.png">
                    <img class="logo_sponsoring_content" src="images/logos/Logo_petzl.png">
                </div>
            </div>
            <div class="contactsub">
                <div class="wrapper_contact_left_text">
                    <h1 class="contact_title_sub"Contact Us</h1>
                    <p>Du hast ein Anliegen oder eine kreative Anregung? Teile es uns mit!
                        Wir freuen uns von dir zu hören.  </p> <wbs>
                </div>
                <form class="formabout" action="" get="POST">
                    <p class="form_title_about">Name</p>
                    <input type="text" name="name" class="input_form_about">
                    <p class="form_title_about">Email</p>
                    <input type="text" pattern="[a-zA-Z0-9.]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*" name="email" class="input_form_about">
                    <p class="form_title_about">Text</p>
                    <textarea cols="50" rows="5" class="input_form_about text_form_about"></textarea>
                    <button class="subbutton" type="submit" >Senden</button>
                </form>
            </div>
            <div class="impressum">
                <h1 class="impressum_title">Impressum</h1>
                <div class="impressum_text_wrapper">
                    <p class="impressum_text">Angaben gemäß § 5 TMG
<br>
                        Max Muster<br>
                        Musterweg<br>
                        59555 Lippstadt<br>
                        Vertreten durch:<br>
                        Max Muster<br>
                        Kontakt:<br>
                        Telefon: 01234-789456<br>
                        Fax: 1234-56789<br>
                        E-Mail: max@muster.de<br>

                        Registereintrag:<br>
                        Eintragung im Registergericht: Lippstadt<br>
                        Registernummer: 12345<br>

                        Umsatzsteuer-ID: 567583849200</p> <wbs>
                </div>
            </div>
        </main>
        <?php include("footer.php"); ?>
    </div>
</body>
</html>

