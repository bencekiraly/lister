function showCounty(str) {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("data").innerHTML = xmlhttp.responseText;
        }
    };
    xmlhttp.open("GET","index.php?p=megye&f=show&id="+str,true);
    xmlhttp.send();
}

function showCity(str, citynum, countynum) {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById(str).innerHTML = xmlhttp.responseText;
        }
    };
    xmlhttp.open("GET","index.php?p=varos&f=show&id="+citynum+"&megye="+countynum,true);
    xmlhttp.send();
}

function addCity(countynum) { 
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("addcity").innerHTML = xmlhttp.responseText;
        }
    };
    xmlhttp.open("GET","index.php?p=varos&f=newd&megye="+countynum,true);
    xmlhttp.send();
    return false;
}

function newdCity(countynum,cityname){
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("addcity").innerHTML = xmlhttp.responseText;
        }
    };
    xmlhttp.open("GET","index.php?p=varos&f=create&megye="+countynum+"&varosnev="+cityname,false);
    xmlhttp.send();
    backLoad(countynum);
    return false;
}

function backLoad(countynum){
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("data").innerHTML = xmlhttp.responseText;
        }
    };
    xmlhttp.open("GET","index.php?p=megye&f=show&id="+countynum,true);
    xmlhttp.send();
}


function deleteCity(countynum, citynum){
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("addcity").innerHTML = xmlhttp.responseText;
        }
    };
    xmlhttp.open("GET","index.php?p=varos&f=delete&id="+citynum,false);
    xmlhttp.send();
    backLoad(countynum);
    return false;
}

function modifyCity(countynum, citynum, cityname){
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("addcity").innerHTML = xmlhttp.responseText;
        }
    };
    xmlhttp.open("GET","index.php?p=varos&f=update&megye="+countynum+"&varosnev="+cityname+"&id="+citynum,false);
    xmlhttp.send();
    backLoad(countynum);
    return false;
}