<!--//
/* Old browser fixes */
if ( ! window.console ) console = { log: function(){} };



/* global vars */
var win_height 	= 0;
var win_width   = 0;
var panels          = Array();
var viewed_panels   = Array();
var panel_count     = 0;



/* jQ logic */
//functions
//animation gauges populating
function gauge(container, refresh) {
    console.log( "Starting function gauge()." );

    //array to hold all the gauge elem data
    var gauge_array = Array();

    //The main container the gauges are part of
    if (typeof(container) == 'undefined') {

        console.log( "Container object elem must be specified." );

        return false;
    } else {
        //Find all the chold gauge elements and load them into an array
        console.log( "Container object elem is: ");console.log(container);

        gauge_array = container.find("div.gauge");

    }
    
    //if the refresh is not specifically called false, treat the function call as a refreash
    if (typeof(refresh) == 'undefined') { refresh = true; }



    //for each gauge element. animate
    if (refresh == true) {



        return true;
    } else if (refresh == false) {

        console.log(gauge_array);

        var gauge   = null;
        var jgObj   = null;
        var colors  = Array("ffffff", "00ff00");

        for (var i=0; i<gauge_array.length; i++) {

            gauge       = $(gauge_array[i])
            gauge_id    = gauge.attr("id");
            gauge_value = gauge.data("value");

            console.log(gauge_id);
            if (typeof(gauge_id) == "undefined") {
                console.log( "Gauge elem found w/ no ID." );
                return false;
            }

            //loop for each element that gets a gauge, slight delay each loop
            jgObj = new JustGage({
                id: ""+gauge_id+"",
                valueFontColor: "ffffff",
                gaugeColor: "000000",
                levelColors: colors,
                showInnerShadow: true,
                shadowOpacity: 0.75,
                shadowSize: 5,
                startAnimationTime: 2500,
                startAnimationType: "bounce",
                gaugeWidthScale: 0.75,
                value: ""+gauge_value+"",
                min: 0,
                max: 10,
                donut: true
            });

            //slight delay between loop execution
            setTimeout(function(){}, 250);
        }

        return true;
    } 

    return false;
}

//Is an element within the viewport?
function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}



/* Scrolling actions */
$(".scroll, div.quick_menu button.btn").click(function() {
    console.log( ".scroll or quick_menu triggered" );

    var panel_elem = null;

    //arrow navigation, get the next desired main panels title
    if ($( this ).hasClass( "up" )) {
        panel_elem = $( this ).parent().prev( "div" ).data( "title" );
        panel_count--;
    } else if ($( this ).hasClass( "down" )) {
        panel_elem = $( this ).parent().data( "title" );
        panel_count++;
    } else {
        panel_elem = $( this ).attr("id");
        panel_count = panels.indexOf(panel_elem);
    }

    //Make sure the counter does not go out of bounds
    console.log( 'Panel array key count: '+panel_count );
    console.log( "Next panel is: "+panels[panel_count] );



    //has the panel bee visible already? 
    //No, run animations
    //animate the gauges that are part of the panel being travelled to
    if (panels[panel_count] == "skills"
        || panels[panel_count] == "tools"
    ) {

        setTimeout(function(){
            gauge( $("div#"+panels[panel_count]), false)
        }, 666);
    };

	//scroll to the next main_panel down
    $( "div#"+panels[panel_count] ).ScrollTo();

    return true;
});



/* on ready actions */
$( document ).ready(function() {
    console.log( 'DOM ready()' );

    //Trigger the resize method on initial DOM ready
    $( window ).trigger("resize");

    // init the tool tips for scrollUp and scrollDown
    $('.scroll').tooltip();
    $( "div#welcome.main_panel div h1 a.scroll" ).tooltip('show');

    //Get the number of div.main_panel to use with the sroll feature
    $( "body div.main_panel").each(function(){
    	panels.push( $( this ).attr( "id" ) );

    });



    console.log(panels);
});



/**
 * when the browser is resized, resize the main_panel areas
 *
 *@todo needs some work
 */
$( window ).on("resize", function() {
	win_height = $( window ).height();
    win_width =  $( window ).width();

    console.log("window resized to height: "+win_height+" and width:"+win_width);

    // minimal safe small sizes, also check that the error is not already displaying
    if (
        ( win_width < 640 || win_height < 480 )
        && $( 'body.modal-open div.bootbox' ).css( 'visibility' ) != 'visible'
    ) {

        bootbox.alert("Your window is to small, please resize to fully enjoy the site.<p>(Or you zoom setting is to high.)</p>");
        return true;
    }
/*
    if ($( '#modal-container' ).css( 'visibility' ) == 'visible'
        && win_width > 640
        && win_height > 480
    ) {
        console.log( 'Dismiss model.' );
        $("#modal-container").modal('hide')
    }
*/

    // resize the main panels
    $( ".main_panel" ).height( win_height ).width( win_width );

    //
    $( "h1.first_panel_heading").css({"padding-top": (win_height / 10)+"px"});

});
-->