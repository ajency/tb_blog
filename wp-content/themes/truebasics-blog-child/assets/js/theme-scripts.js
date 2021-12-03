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