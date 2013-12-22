<!--//
/* Old browser fixes */
if ( ! window.console ) console = { log: function(){} };



/* global vars */
var win_height 	= 0;
var win_width   = 0;
var first_panel_heading = "5.0"; // the 'main header' for the first panel

var panels      = Array();
var panel_count = 0;



/* jQ logic */
//functions
/* Button actions */
$(".scroll").click(function() {
    console.log( ".scroll triggered" );

    var panel_elem = null;

    //what direction to scroll
    if ($( this ).hasClass( "up" )) {
        panel_elem = $( this ).parent().prev( "div" ).data( "title" );
        panel_count--;
    } else {
        panel_elem = $( this ).parent().data( "title" );
        panel_count++;
    }

    //Make sure the counter does not go out of bounds
    console.log( panel_count );

    if (panel_count < 0 ) {
        
        panel_count = 0;
    } else if (panel_count > panels.length) {

        panel_count = panels.length;
    }



	//get the next main_panel down
    console.log( "Next panel is: "+panels[panel_count] );

	//scroll to the next main_panel down
    $( "#"+panels[panel_count] ).ScrollTo();

    return true;
});



/* on ready actions */
$( document ).ready(function() {
    console.log( 'DOM ready()' );

    $( window ).trigger("resize");

    //Get the number of div.main_panel to use with the sroll feature
    $( "body div.main_panel").each(function(){
    	panels.push( $( this ).attr( "id" ) );
    });

    console.log( "panels: "+panels );
});

/* when the browser is resized, resize the main_panel areas */
$( window ).resize(function() {
	win_height = $( window ).height();
    win_width =  $( window ).width();

    console.log("window resized to height: "+win_height+" and width:"+win_width);

    if (win_width < 640 || win_height < 480 ) {
        bootbox.alert("Your window is to small, please resize to fully enjoy the site.<p>(Or you zoom setting is to high.</p>");
    }

    $( ".main_panel" ).height( win_height ).width( win_width );

    $( "h1.first_panel_heading").css({"padding-top": (win_height / first_panel_heading)+"px"});
});
-->