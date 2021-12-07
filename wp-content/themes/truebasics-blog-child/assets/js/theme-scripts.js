/* calculate container offset */
$(window).on('load resize', function () {
    $item = $(".container");
    $contWidth = $item.width();
    $FullWidth = $(".container-main").width();
    $cust_offset = ($FullWidth - $contWidth)/2;

    console.log($cust_offset);

    $(".latest-articles-single:nth-child(odd) .latest-articles-single-container").css("margin-left", $cust_offset);
    $(".latest-articles-single:nth-child(even) .latest-articles-single-container").css("margin-right", $cust_offset);
});