function showHint(text) {
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("art_search").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", "custom_search.php?txt=" + text, true);
    xmlhttp.send();
}
function show_perpage(perpage) {
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("show_per_page_article").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","post_search.php?show_perpage=" + perpage, true);
    xmlhttp.send();
}
function search_post(search_hint){
    var xmlhttp;
    if(window.XMLHttpRequest){
        xmlhttp=new XMLHttpRequest();
    }else{
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("show_per_page_article").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","post_search.php?search_hint=" + search_hint, true);
    xmlhttp.send();
}