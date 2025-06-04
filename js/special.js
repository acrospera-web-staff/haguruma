// JavaScript Document

(function($) {

$(function(){
  
  var url = location.href;
  //console.log(url);
  var sprt = url.indexOf( '#' );
  var res = new Array(0,0);
  
  if ( sprt > 0 ) {
    res = url.split('#');
  }
  var ck = ( $('#'+res[1]).length )? res[1] : 'p01';
    $('div.contentPanel').hide();
    $('#'+ck).show();
    $('#t_'+ck).addClass('selected');
    //$('#cTab1').addClass('selected');  
  
  
  for ( var i=1; i<4; i++ ){
    $('#t_p0'+i).bind('click',{num: i},function(event){
      var i = event.data.num;
      $('div.contentPanel').hide();
      $('div.contentPanel').eq(i-1).show();
      
      $('div.sc_header ul.menu li').removeClass('selected');
      $('#t_p0'+i).addClass('selected');
    });
  }
});

})(jQuery);