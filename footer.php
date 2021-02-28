<footer>
    <div class="footer_top">
        <ul class="footer_nav">
            <li><a class="footer_topic" href="index.php">Home</a></li>
            <li><a class="footer_topic" href="map.php">Gym Finder</a></li>
            <li><a class="footer_topic" href="community.php">Community</a></li>
            <li><a class="footer_topic" href="about.php">About us</a></li>
            <li><a class="footer_topic" href="events.php">Events</a></li>
        </ul>
        <?php
        if(isset($_SESSION["id"]))
        {
            echo '<div class="footer_login">
                    <button class="login_btn btn_log" type="button">Login</button>
                    <button class="login_btn btn_register" type="button">Register</button>
                  </div>';
        }

        ?>
    </div>
    <div class="footer_bottom">
                    <p class="copyright_text">Trademarked by WeClimb GmbH</p>
                    <ul class="footer_social">
                        <a  href="https://twitter.com/"><img src="images/icons/twitter.svg"></a>
                        <a  href="https://github.com/"> <img src="images/icons/github.svg"></a>
                        <a  href="https://aboutme.google.com/"> <img src="images/icons/gplus.svg"></a>
                        <a  href="https://dribbble.com/"><img src="images/icons/dribble.svg"></a>
                        <a  href="https://de-de.facebook.com/"><img src="images/icons/facebook.svg"></a>
                    </ul>
               </div>

</footer>