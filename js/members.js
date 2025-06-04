// JavaScript Document

(function($) {

$(function(){
  $('#search>ul').show();
  $('#sTab1').addClass('selected');
  $('#sBox2').hide();
  $('#sBox3').hide();
  $('#sBox4').hide();
  $('#searchNote').hide();
  $('#searchResult tr>td>a').parent().addClass('center');
  
  for ( var i=1; i<5; i++ ){
    $('#sTab'+i).bind('click',{num: i},function(event){
      var i = event.data.num;
      $('#search>div').hide();
      $('#search>div').eq(-1).show();
      $('#search>ul>li').removeClass('selected');
      $('#sBox'+i).show();
      $('#sTab'+i).addClass('selected');
      if ( i == 2 ) $('#searchNote').show(); else $('#searchNote').hide();
    });
  }
});

})(jQuery);