class Location{
    constructor(name, latitude, longitude, type, city, description, website, images){
        this.name = name;
        this.latitude = latitude;
        this.longitude = longitude;
        this.type = type;
        this.city = city;
        this.description = description;
        this.website = website;
        this.images = images;
    }
    getLatLng(){
        return "LatLng("+this.latitude+", "+this.longitude+")";
    }
}

class City{
    constructor(name, plzMin, plzMax, latitude, longitude, userCount) {
        this.name = name;
        this.plzMin = plzMin;
        this.plzMax = plzMax;
        this.latitude = latitude;
        this.longitude = longitude;
        this.userCount = userCount; // wird durch User-Datenbank neu bestimmt
    }
    setUserCount(userCount){
        this.userCount = userCount;
    }
}

//suchbare Kletterhallen
var locArray = [new Location("Gravidrom<nobr> Lippstadt",51.650883, 8.343870, "Gym", "Lippstadt", "Mo-So: 14:00-22:00", "https://gravidrom.de/",["images/kletterhallen_bilder/gravidrom_lippstadt_1.jpg","images/kletterhallen_bilder/gravidrom_lippstadt_2.jpg","images/kletterhallen_bilder/gravidrom_lippstadt_3.jpg"]),
                new Location("aktivita<nobr> Fitnessstudio",51.681176, 7.803771, "Gym", "Hamm", "Mo-So: 10:00-21:00", "https://aktivita.com/",["images/kletterhallen_bilder/aktivita_hamm_1.jpg","images/kletterhallen_bilder/aktivita_hamm_2.jpg","images/kletterhallen_bilder/aktivita_hamm_3.jpg"]),
                new Location("Kletterpark<nobr> Hamm",51.663711, 7.817576, "Park", "Hamm", "Mo-So: 11:00-18:00", "http://kletterpark-hamm.de/",["images/kletterhallen_bilder/kletterpark_hamm_1.jpg","images/kletterhallen_bilder/kletterpark_hamm_2.jpg","images/kletterhallen_bilder/kletterpark_hamm_3.jpg"]),
                new Location("Rockvibes<nobr> GmbH",51.751198, 7.918375, "Gym", "Ahlen", "Di-So: 16:00-22:00", "https://rockvibes.de/",["images/kletterhallen_bilder/rockvibes_ahlen_1.jpg","images/kletterhallen_bilder/rockvibes_ahlen_2.jpg","images/kletterhallen_bilder/rockvibes_ahlen_3.jpg"]),
                new Location("Monolith<nobr> Boulderhalle",51.937803, 7.642766, "Gym", "Münster", "Mo-So: 12:00-23:00", "http://monolith-boulderhalle.de/",["images/kletterhallen_bilder/monolith_muenster_1.jpg","images/kletterhallen_bilder/monolith_muenster_2.jpg","images/kletterhallen_bilder/monolith_muenster_3.jpg"]),
                new Location("Big<nobr> Wall<nobr> Klettercentrum",51.909216, 7.474151, "Gym", "Münster", "Mo-So: 14:00-22:30", "https://www.bigwall.de/bigwall_muenster/deutsch/klettercentrum-senden.html",["images/kletterhallen_bilder/bigwall_muenster_1.jpg","images/kletterhallen_bilder/bigwall_muenster_2.jpg"]),
                new Location("PaderKletterPark",51.739745, 8.734671, "Park", "Paderborn", "Mo-So: 10:00-20:00", "https://www.paderkletterpark.de/startseite/",["images/kletterhallen_bilder/kletterpark_paderborn_1.jpg","images/kletterhallen_bilder/kletterpark_paderborn_2.jpg"]),
                new Location("BlocBuster<nobr> Kletterhalle",51.717208, 8.776977, "Gym", "Paderborn", "Mo-So: 10:00-22:00", "http://blocbuster.net/pb",["images/kletterhallen_bilder/blocbuster_paderborn_1.jpg","images/kletterhallen_bilder/blocbuster_paderborn_2.jpg"]),
                new Location("XI.<nobr> Grad<nobr> Kletterhalle",51.645332, 8.712717, "Gym", "Paderborn", "Mo-So: 16:00-22:00", "https://www.elftergrad.de/de/willkommen/",["images/kletterhallen_bilder/xigrad_paderborn_1.jpg","images/kletterhallen_bilder/xigrad_paderborn_2.jpg"]),
                new Location("Kletterhalle<nobr> Bergwerk",51.542733, 7.409597, "Gym", "Dortmund", "Mo-So: 10:00-23:00", "https://www.kletterhalle-bergwerk.de/",["images/kletterhallen_bilder/bergwerk_dortmund_1.jpg","images/kletterhallen_bilder/bergwerk_dortmund_2.jpg"]),
                new Location("Kletterwald<nobr> Freischütz",51.464827, 7.556872, "Park", "Dortmund", "Mo-So: 10:00-19:30", "https://kletterwaldfreischuetz.de/",["images/kletterhallen_bilder/freischuetz_dortmund_1.jpg","images/kletterhallen_bilder/freischuetz_dortmund_2.jpg"]),
                new Location("Neoliet<nobr> Bochum",51.517140, 7.219032, "Gym", "Bochum", "Mo-So: 12:00-22:30", "https://www.neoliet.de/neoliet-bochum/",["images/kletterhallen_bilder/neoliet_bochum_1.jpg","images/kletterhallen_bilder/neoliet_bochum_2.jpg"]),
                new Location("Neoliet<nobr> Easy-Climb",51.466703, 7.028706, "Gym", "Essen", "Di-So: 15:00-22:00", "https://www.neoliet.de/neoliet-easy-climb-essen/",["images/kletterhallen_bilder/neoliet_essen_1.jpg","images/kletterhallen_bilder/neoliet_essen_2.jpg"]),
                new Location("Citymonkey<nobr> Boulderhalle",51.418648, 6.959007, "Gym", "Essen", "Di-So: 10:00-22:00", "http://www.citymonkey.de/",["images/kletterhallen_bilder/citymonkey_essen_1.jpg","images/kletterhallen_bilder/citymonkey_essen_2.jpg"]),
                new Location("DAV-Essen<nobr> Kletterpütt",51.482323, 7.019271, "Gym", "Essen", "Mo-So: 10:00-23:00", "https://www.dav-essen.de/kletterpuett/",["images/kletterhallen_bilder/kletterpuett_essen_1.jpg"]),
                new Location("Superblock<nobr> Boulderhalle",51.214060, 6.812490, "Gym", "Düsseldorf", "Mo-So: 09:00-23:00", "https://www.superblock.nrw/",["images/kletterhallen_bilder/superblock_duesseldorf_1.jpg"]),
                new Location("MOVE<nobr> Kletterhalle",51.233493, 6.841763, "Gym", "Düsseldorf","Di-So: 18:00-23:00", "https://move-duesseldorf.de/",["images/kletterhallen_bilder/move_duesseldorf_1.jpg"]),
                new Location("Monkeyspot<nobr> Boulderhalle",51.239315, 6.723362, "Gym", "Düsseldorf", "Mo-So: 09:00-23:00", "https://www.monkeyspot.de/",["images/kletterhallen_bilder/monkeyspot_duesseldorf_1.jpg"])];

//suchbare Staedte
var cityArray = [new City("Ahlen",59227, 59229,51.760085, 7.897074,4),
    new City("Bochum",44787, 44894,51.481843, 7.216301,1),
    new City("Dortmund",44135, 44388,51.513646, 7.464671,2),
    new City("Düsseldorf",40210, 40721,51.227718, 6.773600,5),
    new City("Essen",45127, 45359,51.455706, 7.011625,2),
    new City("Hamm",59063,59077,51.675431, 7.815798,3),
    new City("Lippstadt",59555,59558,51.67369, 8.34482,9),
    new City("Münster",48143,48167,51.96236, 7.62571,5),
    new City("Paderborn",33098,33161,51.718868, 8.757491,1)];

var curIdx = 0;
if(userCityTable != 0){ // wenn die Datenbank gefunden wurde
    initCityCounts();
}

// Einbindung der Leaflet-Weltkarte mit Mapbox Tile Layer nach dem "Leaflet Quick Start Guide"-Tutorial abgerufen von https://leafletjs.com/examples/quick-start/
var gymmap = L.map("map", {zoomSnap: 0.25}).setView([cityArray[5].latitude, cityArray[5].longitude], 9);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    accessToken: 'pk.eyJ1IjoiZmx1bW1pIiwiYSI6ImNrNTJteG12cTE1cDEzbHA3aWkyOWY4MDkifQ.hryQPJMWw4lIWBRYgiBQ4g'
}).addTo(gymmap);

gymmap.on("zoomend",function(e){
    if(gymmap.getZoom() <= 9){
        cityBubbles.addTo(gymmap);
    }
    else{
        gymmap.removeLayer(cityBubbles);
    }
});

var userMax = 1;
for(let i = 0; i < cityArray.length; i++){
    cityArray[i].userCount;
    userMax = userMax + cityArray[i].userCount;
}

//Kreise auf der Map, welche die Anzahl der Nutzer in der jeweiligen Stadt repraesentieren
var cityBubbles = L.layerGroup();
for(i = 0; i < cityArray.length; i++){
    let bubble = L.circle([cityArray[i].latitude,cityArray[i].longitude], {
        color: "#0073FF",
        weight: 1,
        opacity: 0.4,
        fillColor: "#0073FF",
        fillOpacity: 0.1,
        radius: cityArray[i].userCount/userMax*100 *800}).addTo(cityBubbles);

}
cityBubbles.addTo(gymmap);

var clicked = false;
var gymMarker = [];
for(i = 0; i < locArray.length; i++){
    gymMarker.push(L.marker([locArray[i].latitude, locArray[i].longitude]).addTo(gymmap));
    let curMarker = gymMarker[gymMarker.length - 1];
    curMarker.bindPopup("<b>"+locArray[i].name+"</b><br>"+locArray[i].description + "<br><img src="+locArray[i].images[0]+" height='120' width='auto' ></div>", {maxWidth: "auto"}).openPopup();
    curMarker.on("mouseover", function(e){
        curMarker.openPopup();
    });
    curMarker.on("mouseout", function(e){ //Damit sich das Popup nicht schließt, wenn das Fenster durch den Zoom veraendert wird
        if(!clicked) {
            curMarker.closePopup();
        }
        else{
            clicked = false;
        }

    });
    curMarker.on("click", function(e){
        clicked = true;
        if(gymmap.getZoom() < 12) {
            gymmap.flyTo(curMarker.getLatLng(), 12);
        }
        for(j = 0; j < locArray.length;j++){
            console.log(curMarker.getLatLng() + " "+ locArray[j].getLatLng())
            if(curMarker.getLatLng() == locArray[j].getLatLng()){
                removeLocationInfo();
                createLocationInfo(locArray[j],true);
                curMarker.openPopup();
                break;
            }
        }
    })
}

function initCityCounts(){
    for(let i = 0; i < cityArray.length; i++){
        cityArray[i].setUserCount(setCityCounts(cityArray[i].name.toLowerCase()))
    }
}

// zaehlt die Anzahl der Nutzer in den einzelnen Staedten, anhand der User-Datenbank (siehe gmaps.php)
function setCityCounts(cityName){
    let counter = 0;
    let nameFound = false;
    for(let i = curIdx; i < userCityTable.length; i++){
        if(userCityTable[i].toLowerCase() === cityName){
            counter++;
            nameFound = true;
        }
        else if(nameFound){
            curIdx = i;
            break;
        }
    }
    return counter/userCityTable.length;
}

// erstellt alle Kletterhallen-Kaertchen
function createAllLocationInfo(){
    removeLocationInfo();
    for(i = 0; i< locArray.length; i++){
        createLocationInfo(locArray[i], false);
    }
}

// loescht alle Kletterhallen-Kaertchen
function removeLocationInfo(){
    let locWrapper = document.getElementsByClassName("location_wrapper")[0];
    while(locWrapper.lastChild){
        locWrapper.removeChild(locWrapper.lastChild);
    }
}

// erstellt ein Kletterhallen-Kaertchen fuer die jeweilige Kletterhalle
function createLocationInfo(location, singleLoc){
    let locWrapper = document.getElementsByClassName("location_wrapper")[0];
    let map = document.getElementById("map");
    let newDiv = document.createElement("div");
    newDiv.setAttribute("class", "location_spot");
    let img = document.createElement("img");
    img.setAttribute("class","spot_img");
    img.setAttribute("src", location.images[0]);
    let textWrapper = document.createElement("div");
    textWrapper.setAttribute("class","map_text_wrapper");
    let headline = document.createElement("h1");
    headline.setAttribute("class","location_Title");
    headline.innerHTML = location.name;
    headline.onclick = function(e){
        zoomOnLocation(location.name);
    };
    let times = document.createElement("div");
    times.setAttribute("class", "location_description");
    times.innerHTML = "Öffnungszeiten:<br>"+location.description;
    let website = document.createElement("a");
    website.setAttribute("class", "spot_web");
    website.setAttribute("href",location.website);
    let websiteSubStr = location.website.split("//")[1].split("/")[0]; // splittet die Website-Url auf das noetige Format
    if(websiteSubStr.substr(0,4) === "www."){
        websiteSubStr = websiteSubStr.substr(4,websiteSubStr.length);
    }
    website.innerHTML = websiteSubStr;
    textWrapper.appendChild(headline);
    textWrapper.appendChild(times);
    textWrapper.appendChild(website);
    newDiv.appendChild(img);
    newDiv.appendChild(textWrapper);

    locWrapper.appendChild(newDiv);
    if(singleLoc){
        createGalleryImgs(location);
    }
    else{
        let mapGalleryWrapper = document.getElementsByClassName("map_gallery_wrapper")[0];
        if(mapGalleryWrapper.childElementCount > 1){
            mapGalleryWrapper.removeChild(mapGalleryWrapper.lastChild);
            map.style.height = '100%';
        }
    }
}


// erstellt die Galerie zu den einzelnen Kletterhallen
function createGalleryImgs(location){
    let mapGalleryWrapper = document.getElementsByClassName("map_gallery_wrapper")[0];
    if(mapGalleryWrapper.childElementCount === 2){
        mapGalleryWrapper.removeChild(mapGalleryWrapper.lastChild);
    }
    let map = document.getElementById("map");
    map.style.height = '70%';
    let galleryWrapper = document.createElement("div");
    galleryWrapper.setAttribute("class","gallery_wrapper");
    for(let i = 0; i < location.images.length; i++){
        let galleryImg = document.createElement("img");
        galleryImg.setAttribute("class","gallery_img")
        galleryImg.setAttribute("src",location.images[i]);
        galleryImg.classList.add("hoverable");
        galleryImg.onclick = function(){
            openModal(location.images,i);
        };
        galleryWrapper.appendChild(galleryImg);
    }
    mapGalleryWrapper.appendChild(galleryWrapper);
}

// richtet die Karte auf die gesuchte Stadt aus
function zoomOnCity(cityName){
    let count = 0;
    for (i = 0; i < cityArray.length; i++) {
        if (cityArray[i].name.toLowerCase() === cityName || (parseInt(cityName) >= cityArray[i].plzMin && parseInt(cityName) <= cityArray[i].plzMax)) {
            gymmap.flyTo([cityArray[i].latitude, cityArray[i].longitude], 12);
            console.log(cityArray[i].name);
            removeLocationInfo();
            for (j = 0; j < locArray.length; j++) {
                if (locArray[j].city === cityArray[i].name) {
                    createLocationInfo(locArray[j],false);
                }
            }
            gymmap.removeLayer(cityBubbles);
            break;
        }
        count++;
    }
    if(count === cityArray.length) { // wenn Stadt nicht gefunden wurde, dann wird ein Fehler angezeigt
        searchCancel();
        searchInput.placeholder = "Ort konnte nicht gefunden werden!";
        searchInput.style.color = "#FF4C00";
        setTimeout(function () {
            searchInput.placeholder = "Postleitzahl oder deinen gewünschten Ort";
            searchInput.style.color = "rgba(196, 196, 196, 0.75)";
        }, 3000);
    }
}

// richtet die Karte auf jeweilige Kletterhalle
function zoomOnLocation(locName){
    for(let i = 0;i < locArray.length; i++){
        if(locName === locArray[i].name){
            removeLocationInfo();
            gymmap.flyTo([locArray[i].latitude,locArray[i].longitude],12.25);
            createLocationInfo(locArray[i],true);
            gymmap.removeLayer(cityBubbles);
            break;
        }
    }
}

// startet die Ort Suche
function searchStart(){
    if(searchInput.value != "") {
        searchIcon.style.display = "none";
        searchXIcon.style.display = "block";
        zoomOnCity(searchInput.value.toLowerCase());
    }
    else{
        gymmap.closePopup();
        if(window.innerWidth < 1500){
            gymmap.flyTo([cityArray[5].latitude, cityArray[5].longitude], 7.75);
        }
        else{
            gymmap.flyTo([cityArray[5].latitude, cityArray[5].longitude], 9);
        }
        createAllLocationInfo();
        searchInput.value = "";
        searchXIcon.style.display = "none";
        searchIcon.style.display = "block";
    }
}

// richtet die Karte wieder auf den Ursprung aus
function searchCancel(){
    gymmap.closePopup();
    if(window.innerWidth < 1500){
        gymmap.flyTo([cityArray[5].latitude, cityArray[5].longitude], 7.75);
    }
    else{
        gymmap.flyTo([cityArray[5].latitude, cityArray[5].longitude], 9);
    }
    createAllLocationInfo();
    searchInput.value = "";
    searchInput.style.fontStyle = "italic";
    searchXIcon.style.display = "none";
    searchIcon.style.display = "block";
}

// springt zum naechsten Bild in der Galerie, wenn dieses vorhanden ist. Sonst wird der Button transparent
function nextImage(){
    if(currentImageIdx < currentImages.length - 1){
        modalImage.src= currentImages[currentImageIdx+1];
        currentImageIdx = currentImageIdx + 1;
    }
    if(currentImageIdx === currentImages.length - 1){
        let nextButton = document.getElementById("gallery_next");
        nextButton.classList.remove("hoverable");
    }
    if(currentImageIdx > 0){
        let prevButton = document.getElementById("gallery_prev");
        prevButton.classList.add("hoverable");
    }
}

// springt zum voherigen Bild in der Galerie, wenn dieses vorhanden ist. Sonst wird der Button transparent
function prevImage(){
    if(currentImageIdx > 0){
        modalImage.src= currentImages[currentImageIdx-1];
        currentImageIdx = currentImageIdx - 1;
    }
    if(currentImageIdx === 0){
        let prevButton = document.getElementById("gallery_prev");
        prevButton.classList.remove("hoverable");
    }
    if(currentImageIdx < currentImages.length -1){
        let nextButton = document.getElementById("gallery_next");
        nextButton.classList.add("hoverable");
    }

}

var currentImages = [""];
var currentImageIdx = 0;
var galleryModal = document.getElementById("gallery_modal");
var modalImage = document.getElementById("modal_img");

// oeffnet das Modalfenster fuer die Galerie
function openModal(locationImages, imageIdx){
    currentImages = locationImages;
    galleryModal.style.display = "flex";
    modalImage.setAttribute("src",locationImages[imageIdx]);
    currentImageIdx = imageIdx;
    let prevButton = document.getElementById("gallery_prev");
    let nextButton = document.getElementById("gallery_next");
    if(imageIdx === 0){
        prevButton.classList.remove("hoverable");
    }
    else{
        prevButton.classList.add("hoverable");
    }
    if(imageIdx === locationImages.length - 1){
        nextButton.classList.remove("hoverable");
    }
    else{
        nextButton.classList.add("hoverable");
    }
}

// schließt das Modalfenster
function closeModal(){
    galleryModal.style.display = "none";
    let buttons = document.getElementsByClassName("gallery_button");
    for(let i = 0; i < buttons.length; i++){
        buttons[i].classList.add("hoverable");
    }
}

var searchInput = document.getElementById("searchInput");

searchInput.addEventListener("keyup",function(e){
    if(e.keyCode === 13){
        searchStart();
    }
});

var searchIcon = document.getElementsByClassName("searchIcon")[0];
var searchXIcon = document.getElementsByClassName("search_x_icon")[0];
searchInput.oninput = function(e){ //tauscht die Input-Buttons aus
    searchXIcon.style.display = "none";
    searchIcon.style.display = "block";
    if(searchInput.value != ""){
        searchInput.style.fontStyle = "normal";
    }
    else{
        searchInput.style.fontStyle = "italic";
    }
    if(searchInput.placeholder != "Postleitzahl oder deinen gewünschten Ort"){
        searchInput.placeholder = "Postleitzahl oder deinen gewünschten Ort";
        searchInput.style.color = "rgba(196, 196, 196, 0.75)";
    }
};


searchIcon.onclick = function(e){
    searchStart();
};

searchXIcon.onclick = function(e){
    searchCancel();
};



gymmap.closePopup();
if(window.innerWidth < 1500){ // setzt den Ursprung bei kleinerem Bildschirm anders
    gymmap.setView([cityArray[5].latitude, cityArray[5].longitude], 7.75);
}
else{
    gymmap.setView([cityArray[5].latitude, cityArray[5].longitude], 9);
}

createAllLocationInfo();
