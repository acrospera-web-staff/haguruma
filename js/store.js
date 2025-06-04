(function($) {

$(document).ready(function(){

	$('#vol-form').submit(function(){
		
		var $form = $('#vol-form');
		var param = $form.serializeArray();
		var vol = 0;
		param.forEach(function( pv ) {
		 if ( pv.value ) vol++;
		});
		
		if ( vol < 1 ) {
			alert('書籍・ＪＧＭＡ規格を少なくとも１つ選んで数量を設定してください。');
			return false;
		}else if ( vol > 6 ) {
			alert('書籍・ＪＧＭＡ規格の選択が多すぎます。１度のご注文は6種まででお願いいたします。');
			return false;
		}
	  
	})


});

})(jQuery);