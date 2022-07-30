document.ondblclick = (function(e){
	if(event.ctrlKey == 1){
		history.go(-2);
		//document.location.href = "http://www.sklad.pashechko.kh.ua";
	}
});	