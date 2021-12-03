/* header menu toggle */
$(".toggler-open").click(function(e) {
    e.preventDefault();
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