
var timeon = 50;
var timeout = 500;
var closetimer = 0;
var open_submenu = '';
var opentimer = 0;
var ddmenuitem = 0;

function menu_open()
{ 
  var _id =$(this).attr('id');
  menu_canceltimer();
  if( open_submenu != '#sub'+_id){
    menu_close();
  }

  //sprawdzenie czy istnie div z submenu jesli nie to ukrycie all submenu
  if(!document.getElementById( 'sub'+_id)){
    menu_close();
  }

  if( open_submenu != '#sub'+_id){
  
    opentimer = window.setTimeout( function(){
     $('#sub'+_id).slideDown(
        "normal", 
        function(){ 
            $('div.dropmenudiv').not('#sub'+_id).each(
                function(){
                    $(this).css('display', 'none');
                }
            ); 
        } 
     );
     open_submenu = '#sub'+_id;
    }
    , timeon);
    
  }
  
  
  var pos = $('#top-menu').position();
  var wid = 0;
  var find = false;
  $('ul.solidblockmenu li a').each(
    function(){
      var pid = $(this).parent().attr("id");
      if( pid == _id) find = true;
      if( ! find ){
        wid += $(this).outerWidth();
      
      }
    }
  );
  
  $('#sub'+_id).css('left', pos.left+wid);
  $('#sub'+_id).css('top', pos.top+40);
}


function menu_close()
{ 
  open_submenu = '';
  $('div.dropmenudiv').each(function(){
      $(this).css('display', 'none');
  });
}

function menu_timer()
{ 
  closetimer = window.setTimeout(menu_close, timeout);
}

function menu_canceltimer()
{ 
  if(closetimer)
  { 
    window.clearTimeout(closetimer);
    closetimer = null;
  }
  if(opentimer)
  { 
    window.clearTimeout(opentimer);
    opentimer = null;
  }
}

$(document).ready(function()
{ 
  $('ul.solidblockmenu > li').bind('mouseover', menu_open);
  $('ul.solidblockmenu > li').bind('mouseout', menu_timer);
  
  $('div.dropmenudiv').bind('mouseover', menu_canceltimer);
  $('div.dropmenudiv').bind('mouseout', menu_timer);
});