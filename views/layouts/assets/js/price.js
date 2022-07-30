$('.sku').attr( 'title', 'Посмотреть цену: двойной клик' ).css({'cursor':'pointer'});
let target ='';
function getprice(sku){

  let data = {
    getprice: true,
    sku: sku,
  };
  // console.log(data);return;

  $.ajax("/ajax/",{
    method: "post",
    data: {data: data},
  }).done(function(response){
   response = parseFloat(response).toFixed(2);
    target = $('#tg').text();
    $('#tg').text(response).css({'color':'black'});
  })

}

$('.sku').dblclick(function(){
  $('#tg').text(target).css({'color':'blue'});
  $('#tg').removeAttr('id');
  $(this).attr( 'id','tg' );
  getprice( $(this).text() );
})

$(document).click(function(){
  $('#tg').text(target).css({'color':'blue'});
  $('#tg').removeAttr('id');
})