import $ from "jquery";

$("[data-toggle-menu]").on("click", function () {
	$("[data-menu-mobile]").toggleClass("active");
});

$("[data-close-menu]").on("click", function () {
	$("[data-menu-mobile]").removeClass("active");
	$(".customHeader li").removeClass("active");
});

$(".customHeaderMobile li a").on("click", function () {
	$("[data-menu-mobile]").removeClass("active");
	$(".customHeader li").removeClass("active");
});

let $header = $("header");

$(window).scroll(function () {
	if ($(this).scrollTop() > 10) {
	  $header.addClass("is-scroll");
	} else {
	  $header.removeClass("is-scroll");
	}
});