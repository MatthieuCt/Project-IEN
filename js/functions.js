/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function confirm_action(label, module, action, id, return_module, return_action) {
        if(label!="") {
            if(confirm(label)) {
                go_link(module, action, id,return_module, return_action);
            }
        }else {
            go_link(module, action, id, return_module, return_action);
        }
}

function go_link(module, action, id, return_module, return_action) {
    var websiteaddress = $('#HTTP_ADDRESS').val();
    url = websiteaddress + "/"+module+"/"+action+"/index.html?id="+id;
    if(return_module!=null && return_action!=null) {
        url+="&return_module="+return_module+"&return_action="+return_action;
    }
    document.location=url;
}


