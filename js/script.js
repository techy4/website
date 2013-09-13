// JavaScript Document

// order page tab

   /* $('#myTab a').click(function (e) {

    e.preventDefault();

    $(this).tab('show');

    })*/

	
//order togle


$(document).ready(function(){
//Set default open/close settings
$('.order_option_container').hide(); //Hide/close all containers
//$('.order_trigger:first').addClass('active').next().show(); //Add "active" class to first trigger, then show/open the immediate next container

//On Click

$('.order_trigger').click(function(){
	if( $(this).next().is(':hidden') ) { //If immediate next container is closed...
		$('.order_trigger').removeClass('active').next().slideUp(); //Remove all .order_trigger classes and slide up the immediate next container
		$(this).toggleClass('active').next().slideDown(); //Add .order_trigger class to clicked trigger and slide down the immediate next container
	}else{
            $(this).removeClass('active').next().slideUp();
        }
        $('html,body').animate({scrollTop: $('#dad_service_display').offset().top},'slow');
        
	return false; //Prevent the browser jump to the link anchor
});

});

//service togle

$(document).ready(function(){

//Set default open/close settings

$('.service_option_container').hide(); //Hide/close all containers
$('.service_trigger:first').addClass('active').next().show(); //Add "active" class to first trigger, then show/open the immediate next container

//On Click

$('.service_trigger').click(function(){
	if( $(this).next().is(':hidden') ) { //If immediate next container is closed...
		$('.service_trigger').removeClass('active').next().slideUp(); //Remove all .feature_trigger classes and slide up the immediate next container
		$(this).toggleClass('active').next().slideDown(); //Add .feature_trigger class to clicked trigger and slide down the immediate next container
	}
         $('html,body').animate({ scrollTop: $('#service_scroll').offset().top},'slow');
     return false; //Prevent the browser jump to the link anchor

});
});



$(document).ready(function(){
//Set default open/close settings
$('.faq_option_container').hide(); //Hide/close all containers
$('.faq_trigger:first').addClass('active').next().show(); //Add "active" class to first trigger, then show/open the immediate next container

//for faq page

$('.faq_trigger').click(function(){

	   if( $(this).next().is(':hidden') ) { //If immediate next container is closed...
		$('.faq_trigger').removeClass('active').next().slideUp(); //Remove all .feature_trigger classes and slide up the immediate next container
		$(this).toggleClass('active').next().slideDown(); //Add .feature_trigger class to clicked trigger and slide down the immediate next container
          }
	return false; //Prevent the browser jump to the link anchor

});
});

// work gallery

$(function() {
                $(' #da-thumbs > li ').each( function() { $(this).hoverdir({
                        hoverDelay : 75
                }); } );
	  });

// work gallery

$(function() {

				$(' #da-thumbs > li ').each( function() { $(this).hoverdir({
					hoverDelay : 75
				}); } );

			});

/// slide out

            $(function() {
                $('#navigation Div.slide-div').stop().animate({'marginLeft':'100px'},1000);

                $('#navigation > li').hover(
                    function () {
                        $('Div.slide-div',$(this)).stop().animate({'marginLeft':'-300px'},200);
                    },
                    function () {
                        $('Div.slide-div',$(this)).stop().animate({'marginLeft':'100px'},200);
                    }
                );
            });