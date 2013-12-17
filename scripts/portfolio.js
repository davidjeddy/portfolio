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

/* on ready actions */
$( document ).ready(function() {
    console.log( "ready!" );

    //Get the number of main_panel divs to use with the sroll feature
    $( "body > div").each(function(){
    	panels.push( $( this ).data( "title" ) );
    });

    console.log( panels );

    //win_height = $( window ).height();
    //$( ".main_block" ).height( win_height );
    //$().resize( );
    $( ".main_block" ).height( $( window ).height() );
});

/* when the browser is resized, resize the main_block areas */
$( window ).resize(function() {
	$( ".main_block" ).height( $( window ).height() );
});
-->