//menu toggle
(function ($) {
  $(".nav-toggle").click(function (e) {
    e.preventDefault();
    console.log("click");
    $(".nav-toggle").toggleClass("active");
    $(".nav-menu-ul").toggleClass("active");
  });
})(jQuery);
