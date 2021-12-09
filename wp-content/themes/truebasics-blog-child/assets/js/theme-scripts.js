/* calculate container offset */
$(window).on('load resize', function () {
    $item = $(".container");
    $contWidth = $item.width();
    $FullWidth = $(".container-main").width();
    $cust_offset = ($FullWidth - $contWidth)/2;

    $(".latest-articles-single:nth-child(odd) .latest-articles-single-container").css("margin-left", $cust_offset);
    $(".latest-articles-single:nth-child(even) .latest-articles-single-container").css("margin-right", $cust_offset);
    $(".more-articles-slider .wraper").css("margin-left", $cust_offset);
    $(".more-articles .slider-nav").css("padding-left", $cust_offset);
});

/* explore articles section */
$(".category-buttons-single").click(function(){
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
})

/* single component */
$(".article-single .article-single-image a").hover(function(){
    $(this).parents().eq(2).toggleClass("hovered");
});
$(".article-single .article-single-content .article-single-content-title .title a").hover(function(){
    $(this).parents().eq(4).toggleClass("hovered");
});

/* more articles slider */
$(function() {
    $(".more-articles-slider").slick({
        arrows:true,
        dots: true,
        speed: 300,
        infinite: false,
        cssEase: 'linear',
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        appendArrows: $('.more-articles-section .slider-nav .arrows'),
        appendDots: $('.more-articles-section .slider-nav .dots'),
        prevArrow: "<button class='arrows__prev'><svg xmlns='http://www.w3.org/2000/svg' width='31.117' height='31.117' viewBox='0 0 31.117 31.117'><g id='Icon_ionic-ios-arrow-dropright' data-name='Icon ionic-ios-arrow-dropright' transform='translate(-3.375 -3.375)' style='mix-blend-mode: normal;isolation: isolate'><path id='Path_15' data-name='Path 15' d='M14.84,10.4a1.449,1.449,0,0,1,2.042,0l7.136,7.158a1.442,1.442,0,0,1,.045,1.99l-7.031,7.054a1.441,1.441,0,1,1-2.042-2.035L20.967,18.5,14.84,12.438A1.427,1.427,0,0,1,14.84,10.4Z' transform='translate(0.705 0.422)'/><path id='Path_16' data-name='Path 16' d='M3.375,18.934A15.559,15.559,0,1,0,18.934,3.375,15.556,15.556,0,0,0,3.375,18.934Zm2.394,0a13.16,13.16,0,0,1,22.47-9.305,13.16,13.16,0,1,1-18.61,18.61A13.052,13.052,0,0,1,5.769,18.934Z'/></g></svg></button>",
        nextArrow: "<button class='arrows__next'><svg xmlns='http://www.w3.org/2000/svg' width='31.117' height='31.117' viewBox='0 0 31.117 31.117'><g id='Icon_ionic-ios-arrow-dropright' data-name='Icon ionic-ios-arrow-dropright' transform='translate(-3.375 -3.375)' style='mix-blend-mode: normal;isolation: isolate'><path id='Path_15' data-name='Path 15' d='M14.84,10.4a1.449,1.449,0,0,1,2.042,0l7.136,7.158a1.442,1.442,0,0,1,.045,1.99l-7.031,7.054a1.441,1.441,0,1,1-2.042-2.035L20.967,18.5,14.84,12.438A1.427,1.427,0,0,1,14.84,10.4Z' transform='translate(0.705 0.422)'/><path id='Path_16' data-name='Path 16' d='M3.375,18.934A15.559,15.559,0,1,0,18.934,3.375,15.556,15.556,0,0,0,3.375,18.934Zm2.394,0a13.16,13.16,0,0,1,22.47-9.305,13.16,13.16,0,1,1-18.61,18.61A13.052,13.052,0,0,1,5.769,18.934Z'/></g></svg></button>",
    
        responsive: [
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows:false,
                }
            }
        ]
    });
});