  /*
  ** 
  */

  function update(field,value,id){

    let data = {
      update: true,
      value: value,
      id: id,
      field: field
    };
  // console.log(data);return;
  $.ajax("/ajax/",{
    method: "post",
    data: {data: data},
    fail: function(){alert("Все пропало!");},
    success: function(){location.reload();}
  })
}

function del(id){
  let data = {
    del: true,
    id: id
  };
  //console.log(data);return;
  $.ajax("/ajax/",{
    method: "post",
    data: {data: data},
    fail: function(){alert("Все пропало!");},
    success: function(data){
      if(data){
        location.reload()};
      }
    })
}

function add(table){
  let data = {
    add: true,
    table: table
  }
  // console.log(data);return;
  $.ajax("/ajax/",{
    method: "post",
    data: {data: data},
    fail: function(){alert("Все пропало!");},
    success: function(data){location.reload()}
  })  
}

  /*
  ** Изменение ячеек
  */
  $('[field]').dblclick(function(e){

    var id = $(this).closest('[id]').attr('id');
    var field = $(this).attr('field');
    //var table = $('table').attr('id');
    var content = $(this).text();
    if($(this).children('val').length > 0) {content = $(this).children('val').text();}


    var value = prompt('Изменить?', content);
    if((value !== content)&&(value !== null)){
      update(field, value, id);
    }

//Добавить проверку CONFIRM
    // var value = prompt('Изменить?', content); 
    // if((value !== content)&&(value !== null)){
    //   if(confirm(value)){update(field, value, id);}
    // }



    // $('<input class="input" type="text" value="'+content+'" onchange="if(confirm(this.value)){upload(`'+table+'`,`'+field+'`,this.value,'+id+');}">')
    // .css({'position':'absolute', 'top':e.target.offsetTop+70+'px', 'left':e.target.offsetLeft+100+'px'}).appendTo(body);
    // $('<input class="button" type="button" value="Изменить">')
    // .css({'position':'absolute', 'top':e.target.offsetTop+70+'px', 'left':e.target.offsetLeft+245+'px'}).appendTo(body);
    
  });
    /*
    ** Удаление / Добавление строк
    */

    $('tbody > tr').contextmenu(function(e) {
      if(confirm('Удалить строку?')){
    //id = $(this).parent(['id']).attr('id');
    id = $(this).attr('id');
    del(id);      
    return false;
  } else {
    return false;
  }
});

    $('.del').click(function(){
      if(confirm('Это действие нельзя будет отменить!')){
        id = $(this).parent(['id']).attr('id');
    //table = $('table').attr('id');
    del(id);      
  }
})

    $('thead').contextmenu(function(e){
      if(confirm('Создать строку?')){
        table = $(this).parent().attr('id');
        add(table); 
        return false;     
      } else {
        return false;
      }
    })


