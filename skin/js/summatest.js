$("document").ready(function() {
  $(".list").slick({
    autoplay: true,
    autoplaySpeed: 2000
  });
  $.ajax({
    url: "resources/data.php",
    data: { getBoxes: "what-we-do" },
    dataType: "json",
    success: function(data) {
      $.each(data, function(i, item) {
        $(".box-list").append(
          "<div style='border-top: 5px solid " +
            item.color +
            "' class='element'><h3>" +
            item.title +
            "</h3><p>" +
            item.content +
            "</p></div>"
        );
      });
    }
  });

  $(".inactive").hide();
  $(".menu li").click(function() {
    $(this)
      .children("ul")
      .stop(true, true)
      .slideToggle("fast"),
      $(this).toggleClass("active");
  });
});
