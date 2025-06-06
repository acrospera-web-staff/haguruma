jQuery(document).ready(function($){
    var custom_uploader;
    /*##############################*/
    /* 画像選択ボタンがクリックされた場合の処理。*/
    /*##############################*/
    if ( $('#ctmFileimages li').length > 1 ) $('#ctmFilemedia').hide();
    
    $('#ctmFilemedia').click(function(e) {
        e.preventDefault();
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
        custom_uploader = wp.media({
            title: 'ファイルを選んでください',
            // 以下のコメントアウトを解除すると画像のみに限定される。
 
            library: {
                //type: 'image'
            },
 
            button: {
                text: '選択する'
            },
            multiple: false // falseにすると画像を1つしか選択できなくなる
        });
        custom_uploader.on('select', function() {
            var images = custom_uploader.state().get('selection');
            var date = new Date().getTime();
            if ( $('#ctmFileimages li').length < 2 ) {
            images.each(function(file){
                img_id = file.toJSON().id+"_"+date;
                $('#ctmFileimages').append('<li id=img_'+ img_id +'></li>')
                .find('li:last').append('<img src="/wp-content/themes/haguruma/img/content/icon_file.jpg"><a href="#" class="ctmFileimage_remove">削除する</a>'
                     +'<input type="hidden" name="ctmFileimage[]" value="'+file.toJSON().url+'" />'
                     //+'<img src="'+file.toJSON().url+'" />'); //<br />
                     +'<a href="'+file.toJSON().url+'" target="_blank">新規追加ファイル</a>');
            });
            }
            if ( $('#ctmFileimages li').length > 1 ) $('#ctmFilemedia').hide();
        });
        custom_uploader.open();
    });
    /*##############################*/
    /* 削除がクリックされた場合の処理。*/
    /*##############################*/
    $( ".ctmFileimage_remove" ).live( 'click', function( e ) {
 
        e.preventDefault();
        e.stopPropagation();
 
        img_obj = $(this).parent();
        if(img_obj.length >0){
            img_obj.remove();
            if ( $('#ctmFileimages li').length < 2 ) $('#ctmFilemedia').show();
        }
    });
});