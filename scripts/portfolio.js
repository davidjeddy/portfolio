<!--//
/* Old browser fixes */
if ( ! window.console ) console = { log: function(){} };



/* global vars */
var win_height 	= 600;
var panels		= Array();
var panel_count = 0;
var first_panel_heading = "3.3";



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

    $( "h1.first_panel_heading").css({"padding-top": (win_height / first_panel_heading)+"px"});

/*
$(function() {
  $("html body div#welcome.main_panel div h1 a.scroll").width("150%").height("150%");
});*/

    //Get the number of main_panel divs to use with the sroll feature
    $( "body > div").each(function(){
    	panels.push( $( this ).attr( "id" ) );
    });

    console.log( "panels: "+panels );

    $( ".main_panel" ).height( $( window ).height() );
});

/* when the browser is resized, resize the main_panel areas */
$( window ).resize(function() {
	win_height = $( window ).height();

    console.log("window resized: "+win_height);

    $( ".main_panel" ).height( win_height );

    $( "h1.first_panel_heading").css({"padding-top": (win_height / first_panel_heading)+"px"});
});
-->