$(document).ready(function( ){
	$('.ca').on("click",function() {
		$('.df').slideToggle();
		$('.hide').slideToggle();
	}); 

            $('#cart').click(function( ){ $('.cartbox').fadeToggle( ); });
            $('#login').click(function( ){ $('.loginbox').fadeToggle( ); });

	$('#checkout').on("click",function() {
		$('.spa').slideToggle( );
		$('.spb').slideToggle( );
	});

            $('#user').click( function( ) {
                        $('.userpanel').fadeToggle( );
             });
	$('#continue').on("click",function() {
    	$current = $('#tab-contents').children(':visible').attr('id');
    	switch($current){
        		case "signin":
        			$('#signin').fadeToggle( );
        			$('#one').removeClass('activetab');
        			$('#two').removeClass('unactivetab');
        			$('#two').addClass('activetab');
        			$('#shipping').fadeToggle( );
        			$('#tx').html("Shipping");
        			break;
        		case "shipping":
        			$('#shipping').fadeToggle( );
        			$('#two').removeClass('activetab');
        			$('#three').removeClass('unactivetab');
        			$('#three').addClass('activetab');
        			$('#confirmorder').fadeToggle( );
        			$('#tx').html("Confirm Order");
        			break;
        		case "confirmorder":
        			$('#confirmorder').fadeToggle( );
        			$('#three').removeClass('activetab');
        			$('#four').removeClass('unactivetab');
        			$('#four').addClass('activetab');
        			$('#payment').fadeToggle( );
        			$('#tx').html("Payment");
        			break;
      		  case "payment":
        			alert("Processing Payment");
        			break;
    		};
});
})