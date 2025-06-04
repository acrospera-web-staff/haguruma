// JavaScript Document

(function($) {

window.onload = function() {
  $('.no_en').each(function(){
    var txt = $(this).html();
    $(this).html(
      txt.replace(/\\/g,"")
    );
  });
}

$(function(){
  var vol = $('.globalMenu li').length;
  for ( var i=0; i<vol; i++ ){
    var sm = $('.globalMenu li a').eq(i);
    if ( sm.text() == selectedTab ) {
      sm.addClass('selected');
    } else {
      sm.removeClass('selected');
    }
  }

  //js_menu
  //if ( $('.post.report>div').length > 0 ) $('.post.report>div').hide();
  var jsmvol = $('.js_menu li').length;
  if ( jsmvol > 0 ) {
    $('.js_menu li').removeClass('selected');
    reportPage();
  }

  function reportPage(){
    $('.js_menu li').eq(0).addClass('selected');
    var ind = $('.js_menu li.selected').attr("id").slice(-3);

    $('.post.report>div#rp'+ind).show();
    //console.log('rp'+ind);
    //$('.post.report>div').show();
  }
  for ( var i=0; i<jsmvol; i++ ){
    $('.js_menu li').eq(i).bind('click',null,function(event){
      var num = event.target.id;
      num = num.slice(-3);
      $('.post.report>div').hide();
      $('.post.report>div#rp'+num).show();
      $('.js_menu li').removeClass('selected');
      $('.js_menu li#ts'+num).addClass('selected');
      console.log(num);
    });
  }
  //js_menu

  $('a[href*=#]').click(function() {
	var target = $(this.hash);
	//if (target.length) {
	if (target) {
		var targetOffset = target.offset().top;
		$('html,body').animate({scrollTop: targetOffset},400,"easeInOutQuart");
		return false;
		}
	});

	$('footer').append('<div id="gotop">PAGE TOP</div>');
	$('#gotop').click(function(){
  	$('html,body').animate({scrollTop: 0},400,"easeInOutQuart");
	});

  /*
$('a[href^=#]').click(function() {
      var speed = 400;
      var href= $(this).attr("href");
      var target = $((href == "#" || href == "")? 'html' : href);
      var position = target.offset().top;
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
*/
      if ( $('#mainImages').length > 0 ) {
  		var ifi = 100;
  		var config = {
				speed: 1000,	// ビジュアルを切り替えるのに要する時間  2200　1800
				wait: 3000		// 次の切り替わりまでの待ち時間  9000　6000
			};
			var timerId = 0;
			var ivol = $("#mainImages img").size();//ilの数
			var i = 0;//Math.floor(Math.random()*(ivol));
			var main = $("#mainImages").find("img");

			main.filter(function(index) { return index != i;}).fadeOut(0).end().eq(i).fadeTo(0,0.999, timeSet);
			}

			function viewStart() {
				main.filter(function(index) { return index != i;}).fadeOut(config.speed).end().eq(i).fadeTo(config.speed,0.999, timeSet);
			}
			function timeSet() {
				i++;
				//if ( i >= ivol ) {i = 0;}
					clearTimeout(timerId);
					timerId = setTimeout(function(){if ( i < 3 ) viewStart();}, config.wait);
		}



});

})(jQuery);

(function($) {

$(function(){
  //console.log('ss');
  $('.toggleBox').after('<span class="toggleBoxButton">OPEN</span>');
  $('.toggleBox').hide();

  $('.toggleBoxButton').click(function(){
    $(this).prev().slideToggle(500);
    var ttx = $(this).text();
    if ( ttx == 'OPEN' ) {
      $(this).text('CLOSE');
      $(this).addClass('mgn10');
    }else{
      $(this).text('OPEN');
      $(this).removeClass('mgn10');
    }
  });
  //tOb.parent().parent().find('.mo').slideToggle(300);
});

})(jQuery);


// フォーム_ラジオボタン選択肢によって項目を表示非表示
(function($) {
  $(function() {
    $('.mw_wp_form .toggle-radio input').change(function() {
      $('.mw_wp_form .toggle-area').hide();
      $('.mw_wp_form .toggle-area input').prop("disabled", true);
      if ($('.mw_wp_form .toggle-radio input.toggle-open').prop('checked')) {
        $('.mw_wp_form .toggle-area').show();
        $('.mw_wp_form .toggle-area input').prop("disabled", false);
      }
    }).trigger('change');
  });

  // 確認画面でtoggle-area内に入力があれば表示
  $(function(){
    var input = $('.mw_wp_form_confirm .toggle-area td:nth-of-type(2)').text();
    if ( input.replace(/\s+/g,'').length > 0 ) {
      $('.mw_wp_form .toggle-area').css('display', 'table-row');
      $('.mw_wp_form .toggle-area').addClass('show');
    }
  });
})(jQuery);

// 第44回経営研修会フォーム用 (.form_training44)
(function($) {
  $(function() {
    $('.form_training44 tr.mandatory input:not([type="radio"])').prop("disabled", true);
    $('.form_training44 td.name input').each(function() {
      if($(this).val()) {
        $(this).parents('tbody').find('tr.mandatory input').prop("disabled", false);
      }
    });
    $('.form_training44 td.name input').on('change', function() {
      if($(this).val() !== '') {
        $(this).parents('tbody').find('tr.mandatory input:not([type="radio"])').prop("disabled", false);
      } else {
        $(this).parents('tbody').find('tr.mandatory input:not([type="radio"])').prop("disabled", true);
      }
    })
  })
  // 確認画面
  $(function(){
    $('.mw_wp_form_confirm .form_training44 td.name').each(function() {
      var name = $(this).text();
      if ( name.replace(/\s+/g,'').length > 0 ) {
        $(this).parents('tbody').find('tr.mandatory').addClass('open');
        $(this).parents('tbody').find('tr.mandatory input:not([type="radio"])').prop("disabled", false);
      } else {
        $(this).parents('table').hide();
        $(this).parents('tbody').find('tr.mandatory input:not([type="radio"])').prop("disabled", true);
      }
    });
  });
})(jQuery);


// 第48回経営研修会お申込み
(function($) {
  $(function() {
    $('.mw_wp_form .toggle-radio input').change(function() {
      $('.mw_wp_form .toggle-area1').hide();
      $('.mw_wp_form .toggle-area1 input').prop("disabled", true);
      if ($('.mw_wp_form .toggle-radio input.toggle-open1').prop('checked')) {
        $('.mw_wp_form .toggle-area1').show();
        $('.mw_wp_form .toggle-area1 input').prop("disabled", false);
      }
    }).trigger('change');

    $('.mw_wp_form .toggle-radio input').change(function() {
      $('.mw_wp_form .toggle-area2').hide();
      $('.mw_wp_form .toggle-area2 input').prop("disabled", true);
      if ($('.mw_wp_form .toggle-radio input.toggle-open2').prop('checked')) {
        $('.mw_wp_form .toggle-area2').show();
        $('.mw_wp_form .toggle-area2 input').prop("disabled", false);
      }
    }).trigger('change');
  });

  var input = $('.mw_wp_form_confirm .toggle-area2 td.bango-form input').text();
  if ( input.length > 0 ) {
    $('.mw_wp_form .toggle-area2').show();
    $('.mw_wp_form .toggle-area2 input').prop("disabled", false);
  }
  var input = $('.mw_wp_form_confirm .toggle-area1 td.jyusyo-form input').text();
  if ( input.length > 0 ) {
    $('.mw_wp_form .toggle-area1').show();
    $('.mw_wp_form .toggle-area1 input').prop("disabled", false);
  }
})(jQuery);

// 2024年度 第5回 理事会
(function($) {
  $(function() {
    var check = "web出席";
    $('.mw_wp_form .radio_check input').change(function() {
      var val = $('.mw_wp_form .radio_check input:checked').val();
      if (!$('.mw_wp_form').hasClass("mw_wp_form_confirm")) {
        if (val == check) {
          $('.mw_wp_form .email_address input').prop("disabled", false);
        } else {
          $('.mw_wp_form .email_address input').prop("disabled", true);
        }
      }
    }).trigger('change');
  });
})(jQuery);

// ギヤカレッジ修了認定マーク
document.addEventListener("DOMContentLoaded", function() {
  var setCountInput = document.querySelector('input[name="set数"]');
  var totalPriceInput = document.querySelector('input[name="合計金額"]');
  var confirmButton = document.querySelector('.confirm'); // 確認ボタン
  var sealOption = document.querySelector('input[name="選択"][value="シール（2000円/A4シート5枚set）"]');

  if (setCountInput && totalPriceInput && confirmButton && sealOption) {
    confirmButton.addEventListener("click", function(event) {
      // シールが選択されているか確認
      if (sealOption.checked) {
        var setCount = parseInt(setCountInput.value, 10) || 0;
        var totalPrice = setCount * 2000;
        totalPriceInput.value = totalPrice.toLocaleString() + "円";
      } else {
        totalPriceInput.value = "";
        totalPriceInput.value = "0円";
      }
    });
  }
});

document.addEventListener("DOMContentLoaded", function() {
  var masterInput = document.querySelector('input[name="マスターコースset数"]');
  var proInput = document.querySelector('input[name="プロフェッショナルコースset数"]');
  var totalPriceInput = document.querySelector('input[name="合計金額"]');
  var confirmButton = document.querySelector('.confirm');
  var sealOption = document.querySelector('input[name="選択"][value="シール（2000円/A4シート5枚set）"]');

  if (masterInput && proInput && totalPriceInput && confirmButton && sealOption) {
    confirmButton.addEventListener("click", function() {
      if (sealOption.checked) {
        // if (masterInput.value.trim() === "") {
        //   masterInput.value = "0";
        // }
        // if (proInput.value.trim() === "") {
        //   proInput.value = "0";
        // }
        var masterCount = parseInt(masterInput.value, 10) || 0;
        var proCount = parseInt(proInput.value, 10) || 0;
        var totalSet = masterCount + proCount;
        var totalPrice = totalSet * 2000;
        totalPriceInput.value = totalPrice.toLocaleString() + "円";
      } else {
        totalPriceInput.value = "0円";
      }
    });
  }
});
