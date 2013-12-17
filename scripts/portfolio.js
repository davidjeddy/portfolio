<!--//
var win_height 	= 600;
var panels		= Array();
var panel_count = 0;



/* jQ logic */
/* Button actions */
$(".scroll").click(function() {

    //Where does the cloests main_panel occure in the panels array
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
    if (panel_count < 0 ) {
        
        panel_count = 0;
    } else if (panel_count > panels.length) {

        panel_count = panels.length;
    }

    console.log( "counter is: "+panel_count);


	//get the next main_panel down
    console.log( "Next panel is: "+panels[panel_count] );
    console.log( panels[panel_count] );

	//scroll to the next main_panel down
    $( "#"+panels[panel_count] ).ScrollTo();

    return true;
});

/* on ready actions */
$( document ).ready(function() {
    console.log( "ready!" );

    //Get the number of main_panel divs to use with the sroll feature
    $( "body > div").each(function(){
    	panels.push( $( this ).attr( "id" ) );
    });

    console.log( panels );

    $( ".main_panel" ).height( $( window ).height() );
});

/* when the browser is resized, resize the main_panel areas */
$( window ).resize(function() {
	$( ".main_panel" ).height( $( window ).height() );
});
-->-