<?php
    // gibt ein Array mit den in der User-Datenbank gefundenen Stadtnamen zurueck
    function getUserCityData(){
        $cityArray = [];
        $connection = new PDO("mysql:host=localhost;dbname=climb", "userlog", "PNtzlhee1HzFX5UF");
        $query = "SELECT Stadt FROM user Order BY Stadt";
        $sqlstatement = $connection->prepare($query);
        if($sqlstatement->execute()) {
            $result = $sqlstatement->fetchAll(PDO::FETCH_NUM);
            if (count($result) > 0) {
                for ($i = 0; $i < count($result); $i++) {
                    $cityArray[$i] = $result[$i][0];
                }
            }
        }
        return $cityArray;
    }

?>

<script type="text/javascript">
    var userCityTable = <?php try{
        echo json_encode(getUserCityData());
    }
    catch (Exception $e){
        echo 0;
    }?>;
</script>

<!-- Einbindung der Leaflet-Weltkarte nach dem "Leaflet Quick Start Guide"-Tutorial von Leaflet. Abgerufen von https://leafletjs.com/examples/quick-start/ -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
      integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
      crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
        integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
        crossorigin="">
</script>

<div id="gallery_modal">
    <img id="gallery_close" class="hoverable" src="images/icons/x_icon.svg" width="40px" height="auto" onclick="closeModal()"/>
    <img id="gallery_prev" class="gallery_button hoverable" src="images/icons/chevron_left.svg" onclick="prevImage()"/>
    <img id="modal_img" src="images/kletterhallen_bilder/gravidrom_lippstadt_1.jpg"/>
    <img id="gallery_next" class="gallery_button hoverable" src="images/icons/chevron_right.svg" onclick="nextImage()"/>
</div>
<div id="map_section" class="section">
    <div class="searchInput_wrapper">
        <img class="searchIcon" src="images/icons/search.svg"/>
        <img class="search_x_icon" src="images/icons/x_icon.svg"/>
        <input id="searchInput" type="text" placeholder="Postleitzahl oder deinen gewünschten Ort" list="locationList" autocomplete="off"/>
    </div>
    <div class="map_wrapper">
        <div class="loc_wrap_wrapper">
            <div class="location_wrapper"></div>
        </div>
        <div class="map_gallery_wrapper">
            <div id="map" class="map"></div>
        </div>
    </div>
    <datalist id="locationList">
        <option value="Lippstadt">
        <option value="Dortmund">
        <option value="Münster">
        <option value="Hamm">
        <option value="Paderborn">
        <option value="Ahlen">
        <option value="Bochum">
        <option value="Essen">
        <option value="Düsseldorf">
    </datalist>
    <script src="js/maps.js"></script>
</div>
-
