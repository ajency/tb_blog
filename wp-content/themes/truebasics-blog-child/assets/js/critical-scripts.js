/* header menu toggle */
$(".hamburger").click(function(e) {
    e.preventDefault();
	$(this).toggleClass("toggle-close");
    $("header .mobile-menu-container").toggleClass("show");
    $("body").toggleClass("pushed-menu");
});
/*search toggle */
$(".search-toogle").click(function(e){
    $(".search-form").toggleClass("show");
    return false;
});
// Clicking outside the search form closes it
$(document).click(function(event) {
			var target = $(event.target);
      
			if (!target.is('.search-toogle')) {
				$('.search-form').removeClass('show');
			}
});
/* hero-banner */
$(document).ready(function(){
	$(".hero-banner .single-slide:first-child").addClass("show");
	$(".hero-banner .single-slide").hover(function(){
		$(".hero-banner .single-slide").removeClass("show");
		$(this).addClass("show");
	});
	$(window).on("load resize",function(e){
		$item = $(".hero-banner .banner-container");
		$smallSlideWidth = $item.outerWidth()/5;
		$largeSlideWidth = $smallSlideWidth + $smallSlideWidth;
	
		// add calculated width
		$(".hero-banner .banner-container .single-slide .single-slide__content1").css("width", $largeSlideWidth);
		$(".hero-banner .banner-container .single-slide .single-slide__content2").css("width", $smallSlideWidth);
	});
}); 