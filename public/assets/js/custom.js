/*--------------*/
// Main/Product image slider for product page
$("#detail .main-img-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    arrows: true,
    fade: true,
    autoplay: true,
    autoplaySpeed: 4000,
    speed: 300,
    lazyLoad: "ondemand",
    asNavFor: ".thumb-nav",
    prevArrow:
        '<div class="slick-prev"><i class="i-prev"></i><span class="sr-only sr-only-focusable">Previous</span></div>',
    nextArrow:
        '<div class="slick-next"><i class="i-next"></i><span class="sr-only sr-only-focusable">Next</span></div>',
});
// Thumbnail/alternates slider for product page
$(".thumb-nav").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    infinite: true,
    centerPadding: "0px",
    asNavFor: ".main-img-slider",
    dots: false,
    centerMode: false,
    draggable: true,
    speed: 200,
    focusOnSelect: true,
    prevArrow:
        '<div class="slick-prev"><i class="i-prev"></i><span class="sr-only sr-only-focusable">Previous</span></div>',
    nextArrow:
        '<div class="slick-next"><i class="i-next"></i><span class="sr-only sr-only-focusable">Next</span></div>',
});

//keeps thumbnails active when changing main image, via mouse/touch drag/swipe
$(".main-img-slider").on(
    "afterChange",
    function (event, slick, currentSlide, nextSlide) {
        //remove all active class
        $(".thumb-nav .slick-slide").removeClass("slick-current");
        //set active class for current slide
        $(".thumb-nav .slick-slide:not(.slick-cloned)")
            .eq(currentSlide)
            .addClass("slick-current");
    }
);

// Auto fill Inquery Modal Event name and Event Title, Address
$("#inqueryModal").on("show.bs.modal", function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var event = button.data("event"); // Extract info from data-* attributes for event name
    var productId = button.data("productId"); // Extract info from data-* attributes for hotel name
    var productUrl = button.data("productUrl"); // Extract info from data-* attributes for hotel name
    var productName = button.data("productName"); // Extract info from data-* attributes for hotel name
    var productAddress = button.data("productAddress");
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this);
    modal.find("select#occasion_type").val(event);
    modal.find(".modal-body input#product_id").val(productId);
    modal.find(".modal-body input#product_url").val(productUrl);
    modal.find(".modal-body input#product_name").val(productName);
    modal.find(".modal-body textarea#product_address").val(productAddress);
    // Set today date for event
    document.getElementById("occasion_date").valueAsDate = new Date();
});
