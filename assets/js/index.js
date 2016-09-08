if ($(document).height() - $(window).height() < 30) {
	$('.footer').css("bottom", "0");
}

$('#splash-content a')
  .mouseover(function() {
  	$('body').css("background-color","#000");
	$('body').css("transition","background-color 0.5s ease");
  	$('a').css("color","#000");
  	$('a').css("transition","color 0.5s ease");
  	$(this).css("color","#fff");
  	$(this).css("transition","color 0.5s ease");
  	$(this).text($(this).text() + ' →');
  })
  .mouseout(function() {
    $('body').css("background-color","#fff");
    $('a').css("color","#6F7F8D");
    $(this).text($(this).text().slice(0, -1));
  });
