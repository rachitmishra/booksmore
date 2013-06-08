$(window).resize(function( ){
	var margin1 = $(window).width()/2-390;
	$('.ajaxcontainer').css('margin-left',margin1);
	
	$(function( ) { $('.sidebar').jScrollPane( ); }); 
});

$(document).ready(function( ){
	$margin2=$(window).width( )/2-390;
	$('.ajaxcontainer').css('margin-left',$margin2);

	$h3=$(document).height();$('.ajaxshadow').css('height',$h3);

	$('#cart').click(function( ){ $('.cartbox').fadeToggle( ); });
	$('#login').click(function( ){ $('.loginbox').fadeToggle( ); });
	$count=1;/*$time = setInterval(slide,5000);*/ 

	$('.close').click(function( ) {
		$( '.ajaxshadow' ).hide( );
		$( '.ajaxcontainer' ).hide( );
	});

	$('.ajaxshadow').click( function( ) {
		$( '.ajaxshadow' ).hide( );
		$( '.ajaxcontainer' ).hide( );
	});

	$('.categories').click( function( ){
		var action=$(this).attr('ajaxify');
		var value = $(this).text();
		$.post("actions.php",{action:action,data:value},function(data){
		$('.ajaxshadow').fadeToggle( );$('.ajaxcontainer').html(data);$('.ajaxcontainer').fadeToggle( );});});
	
	$('.title').click(function( ){
		var action = $(this).attr('ajaxify');
		var value = $(this).text( );
		showdetail(action, value);
	});
	
	$(function( ) { 
        	$('.sidebar').jScrollPane( ); });

	$('#lib').on('click',function( ) {
		$('#sto').removeClass('act');
		$(this).addClass('act');
	});

	$('#sto').on('click',function( ) {
		$('#lib').removeClass('act');
		$(this).addClass('act');
	});

	$('.more').click(function( ) {
		var action = $(this).attr('ajaxify');
		var value = $('.panel_r .title').text( );
		showdetail(action, value);
	});

	$('#user').click( function( ) {
		$('.userpanel').fadeToggle( ); });

	function showdetail(action, value) {
		$.post("actions.php",{action:action,data:value},function(data){
		$('.ajaxshadow').fadeToggle();$('.ajaxcontainer').html(data);
		$('.ajaxcontainer').fadeToggle();}); 
	}

	function slide( ){
		if($count==6){
			$count=1; }
		$imagepath="url(\"images/slides/slides"+$count+".png\") no-repeat center center,#fafafa";
		$('.panel_l').css('background',$imagepath);$count++; }
});

