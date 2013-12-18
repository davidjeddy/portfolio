<!--//
/* Old browser fixes */
if ( ! window.console ) console = { log: function(){} };



/* global vars */
var win_height 	= 600;
var panels		= Array();
var panel_count = 0;



/* jQ logic */
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

    //Get the number of main_panel divs to use with the sroll feature
    $( "body > div").each(function(){
    	panels.push( $( this ).attr( "id" ) );
    });

    console.log( "panels: "+panels );

    $( ".main_panel" ).height( $( window ).height() );
});

/* when the browser is resized, resize the main_panel areas */
$( window ).resize(function() {
	$( ".main_panel" ).height( $( window ).height() );
});
-->-