$(window).scroll(function()
{
	var scroll	=	$(window).scrollTop();
	var height	=	$(window).height();

	/*** set sticky menu ***/
	if( scroll >= 150 )
	{
		if(!$('.navbar-custom').hasClass("navbar-fixed-top")){	
			$('.navbar').hide();
			$('.navbar').fadeIn("slow");
		}
		$('.navbar-custom').addClass("navbar-fixed-top");
		
	}
	else if ( scroll <= height )
	{
		$('.navbar-custom').removeClass("navbar-fixed-top");
	}
	else
	{
		$('.navbar-custom').removeClass("navbar-fixed-top");
	} // set sticky menu - end		
});
