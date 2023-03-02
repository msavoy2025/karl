jQuery(document).ready(function($){
  //console.log("magic line")

  var $el, leftPos, newWidth;
  $mainNav2 = $("#example-two");

  /* Add Magic Line markup via JavaScript, because it ain't gonna work without */
  $("#menu-header-menu").append("<li id='magic-line'></li>");

  /* Cache it */
  var $magicLine = $("#magic-line");

  $magicLine
    .width($(".current_page_item").width())
    .css("left", $(".current_page_item a").position().left)
    .data("origLeft", $magicLine.position().left)
    .data("origWidth", $magicLine.width());

  $("#menu-header-menu li")
    .find("a")
    .hover(
      function() {
        $el = $(this);
        leftPos = $el.position().left;
        newWidth = $el.parent().width();

        $magicLine.stop().animate({
          left: leftPos,
          width: newWidth
        });
      },
      function() {
        $magicLine.stop().animate({
          left: $magicLine.data("origLeft"),
          width: $magicLine.data("origWidth")
        });
      }
    );


}); //document ready function close
