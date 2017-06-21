console.log('ok');
$('#btnTest').on('click', function(){

	$(this).next('ul').toggle();

	// $('#popup').css('opacity', 1); //non animé
	// $('#popup').css('width', 200); //non animé

	$('#popup').animate({
		opacity: 1,
		width: 200,
		height: 200,
		left: 200
	},1000, 'ease-out');


})