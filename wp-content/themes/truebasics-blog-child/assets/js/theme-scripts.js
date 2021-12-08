/* calculate container offset */
$(window).on('load resize', function () {
    $item = $(".container");
    $contWidth = $item.width();
    $FullWidth = $(".container-main").width();
    $cust_offset = ($FullWidth - $contWidth)/2;

    $(".latest-articles-single:nth-child(odd) .latest-articles-single-container").css("margin-left", $cust_offset);
    $(".latest-articles-single:nth-child(even) .latest-articles-single-container").css("margin-right", $cust_offset);
});

/* explore articles section */
/* $(".category-buttons-single").click(function(){
    var button = $(this);
    if(!button.hasClass('category-buttons-single-active')){
        $.ajax({ 
            url : ajax_params.url, 
            data: {
                'action' : 'fetch_category_articles',
                'category_id' : $(this).data('val'),
                'type' : $(this).data('type'),
            },
            type : 'POST',
            beforeSend : function ( xhr ) {
                $(".explore-articles-container-list").css('visibility', 'hidden');
                $(".explore-articles-loader").addClass("d-block").removeClass("d-none");
            },
            success : function( data ){
                $(".explore-articles-container").html('');
                $(".explore-articles-loader").addClass("d-none").removeClass("d-block");
                if( data ) { 
                    $(".explore-articles-container").html(data);
                    $(".category-buttons-single").removeClass("category-buttons-single-active");
                    button.addClass("category-buttons-single-active");
                }
            }
        });
    }
}) */

/* single component */
$(".article-single .article-single-image a").hover(function(){
    $(this).parents().eq(2).toggleClass("hovered");
});
$(".article-single .article-single-content .article-single-content-title .title a").hover(function(){
    $(this).parents().eq(4).toggleClass("hovered");
});