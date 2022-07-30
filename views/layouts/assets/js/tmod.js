/*
** Удаляет border и содержимое повторяющихся ячеек, в отдельном столбце
*/
const borders = [];
function tmod (field){
	var text = '';
	$("[field="+field+"]").each(function(index, value){
		if( ($(value).text() !== text) || ($.inArray(index,borders) !== -1)){
			$(value).css({'border-bottom':'none'});
			text = $(value).text();
			borders.push(index);
		} else {
			if($.inArray(index,borders) == -1)
				$(value).text('').css({'border-bottom':'none','border-top':'none'});
		}
	});
}

/*
** Удаляет пустые строки в режиме просмотра 
*/
// (function(){
	$('tbody tr').each(function() {        
		let cell = $.trim($(this).find('td').text());
		if ((cell === '0')||(cell === '')){
			$(this).addClass('invisible');
		}                   
	});
// })();