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
    const occasionType = modal.find("select#occasion_type");
    const productIdInput = modal.find(".modal-body input#product_id");
    const productUrlInput = modal.find(".modal-body input#product_url");
    const productNameInput = modal.find(".modal-body input#product_name");
    const productAddressTextarea = modal.find(
        ".modal-body textarea#product_address"
    );

    occasionType.val(event);
    productIdInput.val(productId);
    productUrlInput.val(productUrl);
    productNameInput.val(productName);
    productAddressTextarea.val(productAddress);

    // Set today date for event
    document.getElementById("occasion_date").valueAsDate = new Date();

    // Hide if product name and address is not given by user
    if (productNameInput.val() == "") {
        productIdInput.val("Not Found");
        productUrlInput.val("#");
        productNameInput.val("Venue Name Not Given By User");
        productNameInput.parent().parent().hide();
    } else {
        productNameInput.parent().parent().show();
    }

    if (productAddressTextarea.val() == "") {
        productAddressTextarea.val("Venue Address Not Given By User");
        productAddressTextarea.parent().parent().hide();
    } else {
        productAddressTextarea.parent().parent().show();
    }
});

// Setting cookie in javascript - for inquiry modal
function setCookie(name, value, secs) {
    var expires = "";
    if (secs) {
        var date = new Date();
        date.setTime(date.getTime() + secs * 1000);
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(";");
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == " ") c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function eraseCookie(name) {
    document.cookie =
        name + "=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;";
}
