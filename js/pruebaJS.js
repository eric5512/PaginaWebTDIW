function changeVisibility(elem){
//    var elements = document.getElementsByClassName("nestedDivs");
//    for(var i = 0; i<elements.length;i++){
//        elements[i].style.display="auto";
//    }

    var element = document.getElementById(elem);
    if(element.style.visibility == "hidden"){
        element.style.visibility = "visible";
    }else{
        element.style.visibility = "hidden";
    }
}