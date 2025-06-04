// JavaScript Document

(function($) {

$(function(){
  $('#comDetailsTab>ul').show();
  $('#cTab1').addClass('selected');
  $('#cBox2').hide();
  
  for ( var i=1; i<3; i++ ){
    $('#cTab'+i).bind('click',{num: i},function(event){
      var i = event.data.num;
      $('#comDetailsTab>div').hide();
      $('#comDetailsTab>div').eq(i-1).show();
      $('#comDetailsTab>ul>li').removeClass('selected');
      $('#cBox'+i).show();
      $('#cTab'+i).addClass('selected');
    });
  }
});

})(jQuery);