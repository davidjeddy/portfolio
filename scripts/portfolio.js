<!--//
var win_height 	= 600;
var panels		= Array();



/* jQ logic */
/* Button actions */
$(".scoll-up").click(function() {
    $('html, body').animate({
        scrollTop: $("#elementtoScrollToID").offset().top
    }, 2000);
});

$(".scroll-down").click(function() {
    console.log( ".scroll-down heard" );
	//get the current closest 'main_panel'
    var closest_panel = $( this ).parent().data( "title" );
    console.log( closest_panel );

    //Where does the cloests main_panel occure in the panels array
    var count = 0;

    count = jQuery.inArray( closest_panel, panels ) + 1;
	//get the next main_panel down
    console.log( panels[count] );

	//scroll to the next main_panel down

    $('html, body').animate({
        scrollTop: $( panels[count] ).offset().top
    }, 2000);


    return true;
});

/* on ready actions */
$( document ).ready(function() {
    console.log( "ready!" );

    //Get the number of main_panel divs to use with the sroll feature
    $( "body > div").each(function(){
    	panels.push( $( this ).data( "title" ) );
    });

    console.log( panels );

    //win_height = $( window ).height();
    //$( ".main_panel" ).height( win_height );
    //$().resize( );
    $( ".main_panel" ).height( $( window ).height() );
});

/* when the browser is resized, resize the main_panel areas */
$( window ).resize(function() {
	$( ".main_panel" ).height( $( window ).height() );
});
-->-