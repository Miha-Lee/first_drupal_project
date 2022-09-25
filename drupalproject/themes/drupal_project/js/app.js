$(".nav-link").on("click", function (event) {
  event.preventDefault();
  id = $(this).attr("href");
  scrollVertical = $(id).offset().top;

  $("body, html").animate({ scrollTop: scrollVertical });
});
