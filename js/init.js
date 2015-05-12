$(function() {
	$('a.info-tooltip ').tooltip({
		track: true,
		delay: 0,
		fixPNG: true, 
		showURL: false,
		showBody: " - ",
		top: -35,
		left: 5
	});
        
        // initialise plugins
        jQuery(function(){
            $("ul.sf-menu").superfish({ 
                pathClass:  'current' 
            });
        });
});