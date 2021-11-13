function changeVisibility(elem){
    var element = document.getElementById(elem);
    if(element.style.visibility == "hidden"){
        element.style.visibility = "visible";
    }else{
        element.style.visibility = "hidden";
    }
}