function image_Control(str) {
    var el = document.getElementById("class_image");
    el.style.backgroundRepeat = "no-repeat";
    if(str == "102호"){
        el.style.backgroundImage = "url(images/102호.jpg)";
        el.style.backgroundSize = "100%";
    }
    else if(str=="104호"){
        el.style.backgroundImage = "url(images/104호.jpg)";
        el.style.backgroundSize = "100%";
    }
    else if(str=="108호"){
        el.style.backgroundImage = "url(images/108호.jpg)";
        el.style.backgroundSize = "100%";
    }
    else if(str=="106호"){
        el.style.backgroundImage = "url(images/106호.jpg)";
        el.style.backgroundSize = "100%";
    }
    else if(str=="105호"){
        el.style.backgroundImage = "url(images/105호.jpg)";
        el.style.backgroundSize = "100%";
    }
    else {
        el.style.backgroundImage = "url(images/121호.jpg)";
        el.style.backgroundSize = "100%";
    }

}