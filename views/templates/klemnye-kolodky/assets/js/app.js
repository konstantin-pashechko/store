$('.hov').on('mouseover', active);
$('.hov').on('mouseout', disactive);

function active(){
	$(this).parent().children('.hov').addClass('active');
};

function disactive(){
	$(this).parent().children('.hov').removeClass('active');
};

$('tr').each(function(){
	let clas = $(this).attr('class');
	$(this).find('td').addClass(clas);
})