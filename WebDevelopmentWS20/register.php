
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Registrierung</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"><meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>
<div class="main_wrapper">

    <?php include("navbar.php"); ?>

    <main class="register_main">
        <form class="login_form" action="Global/Validation.php?id=1" method="POST">
            <h1 class="register_title">Einloggen</h1>
            <p class="form_text_email_login">Username</p>
            <input class="form_element" type="text" name="username" required>
            <p class="form_text_nachname_login">Passwort</p>
            <input class="form_element" type="password" name="logpassword" required> <br>
            <button class="form_button" type="submit">Anmelden</button>

            <a class="passwordforget" href="www.google.com">Passwort vergessen?</a>
        </form>


        <form class="register_form" action="Global/Validation.php?id=2" method="POST">
        <h1 class="register_title">Registrieren</h1>
            <p class="form_text_nachname">Nachname</p><p class="form_text_vorname">Vorname</p>
        <input class="form_element"  pattern="[A-Za-z]{0,20}" type="text" name="nachname" required>
        <input class="form_element" pattern="[A-Za-z]{0,20}" type="text" name="vorname" required>
            <p class="form_text_username">Username</p>
        <input class="form_element"  pattern="[A-Za-z]{0,20}" type="text" name="usernameShort" required>
            <p class="form_text_email">Email</p>
        <input class="form_element" pattern="[a-zA-Z0-9.]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*"  type="text" name="registeremail" required>
            <p class="form_text_passwort">Passwort</p><p class="form_text_passwort_verify">Passwort bestätigen</p>
        <input class="form_element" pattern=".{0,50}" type="password" name="registerpassword" required>
        <input class="form_element" pattern=".{0,50}" type="password" name="passwordverify" required>
            <p class="form_text_adresse">Adresse</p><p class="form_text_plz">PLZ</p><p class="form_text_stadt">Stadt</p>
        <input class="form_element" pattern="[A-Za-z]{0,50}" type="text" name="adresse" required>
        <input class="form_element" pattern="[0-9]{5}" type="text" name="plz" required>
        <input class="form_element" pattern="[A-Za-z]{0,20}" type="text" name="stadt" required> <br>
        <button name="submit_register" class="form_button"  type="submit">Registrieren</button>
        </form>
    </main>
    <script src="js/register.js"></script>

    <?php  include("footer.php"); ?>

</div>
</body>

</html>