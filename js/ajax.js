// Standard JS, we can use JQuery too. Some parameters must be modified for our correct use of the function. Every ajax call needs the same function structure
// but different attribute passes.
function loadXMLDoc() {
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == XMLHttpRequest.DONE) {   // XMLHttpRequest.DONE == 4
           if (xmlhttp.status == 200) {
               document.getElementById("myDiv").innerHTML = xmlhttp.responseText; 
           }
           else if (xmlhttp.status == 400) {
              alert('There was an error 400'); 
           }
           else {
               alert('something else other than 200 was returned');
           }
        }
    };

    xmlhttp.open("GET", "ajax_info.txt", true); // That 'True' in the sentence makes asynchronous or not our call
    xmlhttp.send();//AJAX call gets finished && displayed.
}
