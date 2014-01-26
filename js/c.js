function clear() {
  sp.wScratchPad('clear');
  $("#try_again").show();
}
function reset_to() {
  $.get( "imageInfo.php", function( data ) {
	   console.log(data.key);
  $("#try_again").hide();
  sp.wScratchPad('image', './images/'+ data.bottomImg);
  sp.wScratchPad('image2', './images/'+ data.topImg);
  sp.wScratchPad('reset');
	}, "json" );
}
var sp = $("#wScratchPad").wScratchPad({
	width           : 209,             
	height          : 316, 
	image           : './images/bottom.png',
	image2           : './images/top.png',
	scratchMove: function(e, percent) {
		  if(percent > 40)
		   clear();
	}
});