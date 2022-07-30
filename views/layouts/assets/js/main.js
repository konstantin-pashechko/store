/*
**Переход в админку (зажатый Ctrl + двойной клик)
*/
$(document).dblclick(function(e){
	if(event.ctrlKey == 1){
		let url = "http://sklad.pashechko.kh.ua/admin/";
		$(location).attr('href',url);
	}
});	
/*
** Включить режим редактирования
*/
$(document).dblclick(function(e){
	if(event.altKey == 1){
		session('edit');
	}
});	
//session(false);
function session(ses){
	let data = {
		ses: ses
	}
	$.ajax("/admin/session/",{
		method: "post",
		data: {data: data},
		fail: function(){alert("Все пропало!");},
		success: function(data){
				console.log(data);
				location.reload();
		}
	})  
}



/*
**Открыть меню по клику навбара 
*/
let path = $(location).attr('href');
if(path == 'http://sklad.pashechko.kh.ua/'){ $('.curtain').css({'display' : 'block'}); }
let flag = false
$('.navbar').click(function(e){
	if(this == e.target){
		if(!flag){
			$('.curtain').css({'display' : 'block'});
			if($('#led').css({'position':'static'}));
			flag = !flag
		} else {
			$('.curtain').css({'display' : 'none'});
			$('#led').css({'position':'absolute'})
			flag = !flag
		}
	}
});

/*
**Подсветка строки с курсором
*/
$('tr').hover(
	function() {
		$(this).children('td').css("background-color","#fff");
		$('.stop').css("background-color","");
	}, function(){
		$(this).children('td').css("background-color","")
	}
	);


