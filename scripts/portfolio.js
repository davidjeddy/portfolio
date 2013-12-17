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

$(".scoll-down").click(function() {
	//get the current closest 'main_panel'

	//get the next main_panel down

	//scroll to the next main_panel down
    $('html, body').animate({
        scrollTop: $("#elementtoScrollToID").offset().top
    }, 2000);
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
-->