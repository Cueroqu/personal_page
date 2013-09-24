var xmlhttp;
function loadXMLDoc(url, cfunc) {
    if (window.XMLHttpRequest) {    // for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE6
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = cfunc;
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}

if (!String.prototype.format) {
    String.prototype.format = function() {
        var args = arguments;
        return this.replace(/{(\d+)}/g, function(match, number) {
            return typeof args[number] != 'undefined' ? args[number] : match;
        });
    };
}

function sublink(url, name) {
    loadXMLDoc(url, function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
  //          alert(xmlhttp.responseText);
            document.getElementById("contentBlock").innerHTML = xmlhttp.responseText;
            $("ul :not(.fr)").removeClass('active');
            $("ul [name='" + name +"']").addClass('active');
        }
    });
}
