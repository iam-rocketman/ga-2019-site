$(document).ready(function() {
  function t() {
    var e = $(".modal-body iframe").width(),
      o = Math.round((e / 16) * 9);
    $(".modal-body iframe").css("height", o + "px");
  }
  $("#screen_slider").owlCarousel({
    loop: !1,
    margin: 0,
    nav: !1,
    items: 1,
    startPosition: 0
  }),
    $(".screenshots .screenshot").click(function() {
      $("#screen_slider").trigger("to.owl.carousel", $(this).data("screen"));
    }),
    $("#screen_slider").on("changed.owl.carousel", function(e) {
      var o = e.item.index;
      $(".screenshots .screenshot").removeClass("active"),
        $(".screenshots .screenshot[data-screen=" + o + "]").addClass("active");
    }),
    $("#videoModal").on("show.bs.modal", function(e) {
      var o = $(e.relatedTarget).data("id");
      $("#videoModal .embed_video").html(
        '<iframe width="100%" height="450px" src="https://www.youtube.com/embed/' +
          o +
          '?autoplay=true&rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>'
      ),
        setTimeout(t, 1e3);
    }),
    $("#videoModal").on("hidden.bs.modal", function() {
      $("#videoModal .embed_video").empty();
    }),
    $(window).resize(function() {
      t();
    }),
    $("#screen_slider2").owlCarousel({
      loop: !1,
      margin: 0,
      nav: !1,
      items: 1,
      startPosition: 0
    }),
    $(".screenshots .screenshot").click(function() {
      $("#screen_slider2").trigger("to.owl.carousel", $(this).data("screen"));
    }),
    $("#screen_slider2").on("changed.owl.carousel", function(e) {
      var o = e.item.index;
      $(".screenshots .screenshot").removeClass("active"),
        $(".screenshots .screenshot[data-screen=" + o + "]").addClass("active");
    }),
    $("#screen_slider3").owlCarousel({
      loop: !1,
      margin: 0,
      nav: !1,
      items: 1,
      startPosition: 0
    }),
    $(".screenshots .screenshot").click(function() {
      $("#screen_slider3").trigger("to.owl.carousel", $(this).data("screen"));
    }),
    $("#screen_slider3").on("changed.owl.carousel", function(e) {
      var o = e.item.index;
      $(".screenshots .screenshot").removeClass("active"),
        $(".screenshots .screenshot[data-screen=" + o + "]").addClass("active");
    });
});
