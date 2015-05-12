function getXhr(){
    var xhr = null; 
    if(window.XMLHttpRequest)
        xhr = new XMLHttpRequest(); 
    else if(window.ActiveXObject){
        try {
            xhr = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    else {
        alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
        xhr = false; 
    } 
    return xhr;
}


function load_parent_menu(){
    var xhr = getXhr();
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            leselect = xhr.responseText;
            document.getElementById('parent_menu_id').innerHTML = leselect;
        }
    }

    xhr.open("POST","/js/ajax_menu/ajax.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    sel = document.getElementById('lang_id');
    lang_id = sel.options[sel.selectedIndex].value;
    xhr.send("lang_id="+lang_id);
}