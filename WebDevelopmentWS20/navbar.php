<header>
    <script src="js/nav.js"> </script>
    <div class="logo">
        <a href="index.php"><img src="images/logo.svg" class="img_logo"></a>
    </div>
    <ul class="nav_main">
        <li><a class="nav_topic" href="index.php">Home</a></li>
        <li><a class="nav_topic" href="map.php">Gym Finder</a></li>
        <li><a class="nav_topic" href="community.php">Community</a></li>
        <li><a class="nav_topic" href="about.php">About us</a></li>
    </ul>
    <?php
    if(ISSET($_SESSION["id"]))
    {
    echo '<form class="form_element header_form" action="Global/Validation.php?id=3" method="POST">
        <button name="subnavbtn" class="form_button logout_btn" type="submit">Ausloggen</button>
    </form>';
    echo '<div class="profile_img">
        <img src="images/icons/user_avatar.svg">
        <p>'.$_SESSION["username"].'</p>
    </div>';
    }

    ?>
    <label onclick="openNav()" id="burger_menu" class="burger_menu" for="burger_menu">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
    </label>


    <div class="mobile_nav" id="mobile_nav">
            <li><a class="nav_topic" href="index.php">Home</a></li>
            <li><a class="nav_topic" href="map.php">Gym Finder</a></li>
            <li><a class="nav_topic" href="community.php">Community</a></li>
            <li><a class="nav_topic" href="about.php">About us</a></li>

</header>