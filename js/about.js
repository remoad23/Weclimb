function parallaxLayers(){
    let aboutImgs = document.getElementsByClassName("parallax");

    if(window.innerWidth <= 375){ //mobile 375x667
        if(window.pageYOffset  < 306) {
            let scrollMovement = -(window.pageYOffset * 1.4);
            let translate = "translate(0," + scrollMovement + "px)";
            aboutImgs[1].style.transform = translate;
        }
        else{
            aboutImgs[1].style.transform = "translate(0,"+-306*1.4+"px)";

        }
    }
    else if(window.innerWidth <= 600){ // 600x1080
        if(window.pageYOffset  < 405) {
            let scrollMovement = -(window.pageYOffset * 1.4);
            let translate = "translate(0," + scrollMovement + "px)";
            aboutImgs[1].style.transform = translate;
        }
        else{
            aboutImgs[1].style.transform = "translate(0,"+-405*1.4+"px)";

        }
    }
    else if(window.innerWidth <= 1280){ // 1280x720
        if(window.pageYOffset  < 770) {
            let scrollMovement = -(window.pageYOffset * 1.4);
            let translate = "translate(0," + scrollMovement + "px)";
            aboutImgs[1].style.transform = translate;
        }
        else{
            aboutImgs[1].style.transform = "translate(0,"+-770*1.4+"px)";

        }
    }
    else { // 1920x1080
        if (window.pageYOffset  < 1160) {
            let scrollMovement = -(window.pageYOffset * 1.4);
            let translate = "translate(0," + scrollMovement + "px)";
            aboutImgs[1].style.transform = translate;
        } else {
            aboutImgs[1].style.transform = "translate(0," + -1160 * 1.4 + "px)";

        }
    }

}

window.onscroll = function(){
    parallaxLayers();
};

