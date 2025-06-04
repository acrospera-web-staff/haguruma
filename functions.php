<?php
//if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
//$_SERVER['HTTPS'] = 1;

//update_option( 'siteurl', 'https://jgma-org.prm-ssl.jp/' );
//update_option( 'home', 'https://jgma-org.prm-ssl.jp/' );
update_option( 'siteurl', 'https://www.jgma.org/' );
update_option( 'home', 'https://www.jgma.org/' );

add_theme_support( 'menu' );

register_sidebar(array(
					'id' => 'cate',
					'name' => '',
					'before_widget' => '',
					'after_widget' => ''."\n",
					'before_title' => '<span class="cn">',
					'after_title' => '</span>'."\n"
					));
register_sidebar(array('id' => 'cale'));


//ヘッダーヘルプ
function disable_help_link() {
    echo '<style type="text/css">
            #contextual-help-link-wrap {display: none !important;}
          </style>';
}
/**/
// *php5.4のためWP5.1.3以上のバージョンアップはできない為、バージョン更新が出ない様にしてます
// バージョン更新を非表示にする
add_filter('pre_site_transient_update_core', '__return_zero');
// APIによるバージョンチェックの通信をさせない
remove_action('wp_version_check', 'wp_version_check');
remove_action('admin_init', '_maybe_update_core');
/**/
//サイト表示時の管理バー非表示
add_filter('show_admin_bar', '__return_false');


//ダッシュボード
function example_remove_dashboard_widgets() {
    global $wp_meta_boxes;
    //unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']); // 現在の状況
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']); // 最近のコメント
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']); // 被リンク
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']); // プラグイン
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']); // クイック投稿
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']); // 最近の下書き
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']); // WordPressブログ
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); // WordPressフォーラム
}

//投稿画面
function remove_post_metaboxes() {
	/**/
    remove_meta_box('postcustom', 'post', 'normal'); // カスタムフィールド
    remove_meta_box('postexcerpt', 'post', 'normal'); // 抜粋
    remove_meta_box('commentstatusdiv', 'post', 'normal'); // コメント設定
    remove_meta_box('trackbacksdiv', 'post', 'normal'); // トラックバック設定
    remove_meta_box('revisionsdiv', 'post', 'normal'); // リビジョン表示
    remove_meta_box('formatdiv', 'post', 'normal'); // フォーマット設定
    remove_meta_box('slugdiv', 'post', 'normal'); // スラッグ設定
    remove_meta_box('authordiv', 'post', 'normal'); // 投稿者
    remove_meta_box('categorydiv', 'post', 'normal'); // カテゴリー
    remove_meta_box('tagsdiv-post_tag', 'post', 'normal'); // タグ

}

//サイドバー
function remove_menu() {
    remove_menu_page('index.php'); // ダッシュボード
    //remove_menu_page('edit.php'); // 投稿
    //remove_menu_page('edit.php?post_type=special'); // 特集
    //remove_menu_page('upload.php'); // メディア
    remove_menu_page('link-manager.php'); // リンク
    //remove_menu_page('edit.php?post_type=page'); // 固定ページ
    remove_menu_page('edit-comments.php'); // コメント
    remove_menu_page('themes.php'); // 概観
    remove_menu_page('plugins.php'); // プラグイン
    remove_menu_page('users.php'); // ユーザー
    remove_menu_page('tools.php'); // ツール
    remove_menu_page('options-general.php'); // 設定
		remove_menu_page('profile.php'); // プロフィール
		remove_menu_page('trust-form-edit');//trust-form
}


//フッター
function custom_admin_footer() {
    echo '<a href="mainto:m@squareman.net">Squareman Pixel Works LLC.</a>';
}


// 管理バー
function remove_admin_bar_menu( $wp_admin_bar ) {
 $wp_admin_bar->remove_menu( 'wp-logo' ); // WordPressシンボルマーク
 $wp_admin_bar->remove_menu('my-account'); // マイアカウント
}
// 管理バーの項目非表示にする
function my_admin_head(){
 echo '<style type="text/css">#contextual-help-link-wrap{display:none;}</style>';//ヘルプ
 echo '<style type="text/css">#wp-admin-bar-comments{display:none;}</style>';//コメント
 echo '<style type="text/css">#wp-admin-bar-new-media{display:none;}</style>';//メディア
 //投稿リスト
 echo '<style type="text/css">.post-com-count-wrapper{display:none;}</style>';//コメント
 echo '<style type="text/css">.column-comments{display:none;}</style>';
 //編集
 //echo '<style type="text/css">#wp-content-media-buttons{display:none;}</style>';//　メディアを追加ボタン
 echo '<style type="text/css">#edit-slug-box{display:none;}</style>';//パーマリンク
 //echo '<style type="text/css">#content-tmce{display:none;}</style>';//ツール
 //echo '<style type="text/css">#qt_content_block,#qt_content_del,#qt_content_ins,#qt_content_img,#qt_content_ul,#qt_content_ol,#qt_content_li,#qt_content_code
 //,#qt_content_more,#qt_content_spell,#qt_content_close,#qt_content_fullscreen{display:none;}</style>';//エディットボタン
}
// 管理バーにログアウトを追加
function add_new_item_in_admin_bar() {
 global $wp_admin_bar;
 $wp_admin_bar->add_menu(array(
 'id' => 'new_item_in_admin_bar',
 'title' => __('ログアウト'),
 'href' => wp_logout_url()
 ));
}




if (!current_user_can('level_10')) { //level10以下のユーザーの場合メニューをunsetする

	/**/
	add_action('admin_head', 'disable_help_link');
	add_action('wp_dashboard_setup', 'example_remove_dashboard_widgets');
	add_action('admin_menu', 'remove_post_metaboxes');
	add_action('admin_menu', 'remove_menu');
	add_filter('admin_footer_text', 'custom_admin_footer');
	add_action( 'admin_bar_menu', 'remove_admin_bar_menu', 70 );
	add_action('admin_head', 'my_admin_head');
	add_action('wp_before_admin_bar_render', 'add_new_item_in_admin_bar');
	/**/
}


function showHeader($parent_slug,$add,$home){

if ( strpos($parent_slug,'search') !== false ) $parent_slug = $parent_slug.','.$add;
$multiTitle = '日本歯車工業会公式サイト';//
$tiltes = array (
									'object'=>'定款　｜　',
									'description'=>'事業報告、計画　｜　',
									'organization'=>'組織　|　',
									'report'=>'事業報告　|　',
									'members/search,product'=>'製品検索　|　',
									'members/search,member'=>'会員検索　|　',
									'members/list'=>'会員名簿一覧　|　',
									'book'=>'JGMA発行物　|　',
									'store'=>'発行書籍購入フォーム　|　',
									'standard'=>'書籍購入　|　',
									'access'=>'アクセス　|　',
									//'access'=>'会員企業紹介トップ　|　',
									'special'=>'会員企業紹介　|　',
									'link'=>'リンク　|　',
									'contact'=>'お問い合わせ　|　',
									'topics'=>'トピック一覧　|　',
									'sitemap'=>'サイトマップ　|　',
									'outline'=>'概要　|　',
									'greeting'=>'会長挨拶　|　',
									'officer'=>'役員　|　',
									'organization_chart'=>'組織図　|　',
									'project'=>'日本歯車工業会の3大事業　|　',
									'gearcollege_h27'=>'セミナー・イベント　|　',
									'jgma_news'=>'機関誌JGMA News　|　'
									);
$this_title = '';
if ( array_key_exists($parent_slug,$tiltes) ) $this_title = $tiltes[$parent_slug].'日本歯車工業会公式サイト';
if ( $home ) $this_title = 'TOPページ　｜　'.'日本歯車工業会公式サイト';
if (!$this_title) $this_title = $multiTitle.'';


return $this_title;

}

function showKeywords($parent_slug,$add){

if ( strpos($parent_slug,'search') !== false ) $parent_slug = $parent_slug.','.$add;
$multikey = '歯車,一般社団法人,日本歯車工業会,JGMA,発行書籍';
$keywords = array (
									'object'=>'歯車,一般社団法人,日本歯車工業会,団体概要,事業内容,目的と設立経緯,JGMA',
									'description'=>'歯車,一般社団法人,日本歯車工業会,団体概要,事業内容,JGMA',
									'organization'=>'歯車,一般社団法人,日本歯車工業会,組織,組織図,役員名簿,JGMA',
									'report'=>'歯車,一般社団法人,日本歯車工業会,事業計画,事業報告,JGMA',
									'members/search,product'=>'歯車,一般社団法人,日本歯車工業会,会員名簿,検索',
									'members/search,member'=>'歯車,一般社団法人,日本歯車工業会,会員名簿,検索',
									'members/list'=>'歯車,一般社団法人,日本歯車工業会,会員名簿,一覧',
									'book'=>'歯車,一般社団法人,日本歯車工業会,発行書籍,購入,支払,発送,注文,JGMA',
									'store'=>'歯車,一般社団法人,日本歯車工業会,発行書籍,購入,注文,フォーム,JGMA',
									'standard'=>'歯車,一般社団法人,日本歯車工業会,規格,JGMA,発行書籍,規格集,ISO',
									'access'=>'歯車,一般社団法人,日本歯車工業会,アクセス,交通機関',
									//'access'=>'歯車,一般社団法人,日本歯車工業会,会員企業,紹介',
									'special'=>'歯車,一般社団法人,日本歯車工業会,会員企業,紹介,特集',
									'link'=>'歯車,一般社団法人,日本歯車工業会,外部リンク',
									'contact'=>'歯車,一般社団法人,日本歯車工業会,お問い合わせ,購入書籍,入会',
									'topics'=>'歯車,一般社団法人,日本歯車工業会,トピックス,お知らせ',
									'sitemap'=>'歯車,一般社団法人,日本歯車工業会,サイトマップ',
									'privacy'=>'歯車,一般社団法人,日本歯車工業会,個人情報',

									'e_profile'=>'歯車,一般社団法人,日本歯車工業会,組織,組織図,役員名簿,JGMA',
									'e_activities'=>'歯車,一般社団法人,日本歯車工業会,団体概要,事業内容,JGMA',
									'report'=>'歯車,一般社団法人,日本歯車工業会,事業計画,事業報告,JGMA',
									'e_members_search,product'=>'歯車,一般社団法人,日本歯車工業会,会員名簿,検索',
									'e_members_search?member'=>'歯車,一般社団法人,日本歯車工業会,会員名簿,検索',
									'e_members_list'=>'歯車,一般社団法人,日本歯車工業会,会員名簿,一覧',
									'e_publications'=>'歯車,一般社団法人,日本歯車工業会,発行書籍,購入,支払,発送,注文,JGMA',
									'e_standards'=>'歯車,一般社団法人,日本歯車工業会,規格,JGMA,発行書籍,規格集,ISO',
									'e_link'=>'歯車,一般社団法人,日本歯車工業会,外部リンク',
									'e_contact'=>'歯車,一般社団法人,日本歯車工業会,お問い合わせ,購入書籍,入会'
									);
$this_key = '';

if ( array_key_exists($parent_slug,$keywords) ) $this_key = $keywords[$parent_slug];
if (!$this_key) $this_key = $multikey;

return $this_key;

}

function showDescriptions($parent_slug,$add){

if ( strpos($parent_slug,'search') !== false ) $parent_slug = $parent_slug.','.$add;
$multiDisc = '日本歯車工業会は、歯車装置工業の技術水準の向上・設備、経営の合理化を推進する一般社団法人です。';
$descriptions = array (
									'object'=>'歯車装置工業を推進する一般社団法人日本歯車工業会の定款ページです。',
									'description'=>'歯車装置工業を推進する一般社団法人日本歯車工業会の事業報告、計画ページです。',
									'organization'=>'歯車装置工業を推進する一般社団法人日本歯車工業会組織・役員名簿・本部・支部ページです。',
									'report'=>'歯車装置工業を推進する一般社団法人日本歯車工業会事業計画・事業報告ページです。',
									'members/search,product'=>'歯車装置工業を推進する一般社団法人日本歯車工業会の会員検索ページです。会員名簿の検索ができます。',
									'members/search,member'=>'歯車装置工業を推進する一般社団法人日本歯車工業会の会員検索ページです。会員名簿の検索ができます。',
									'members/list'=>'歯車装置工業を推進する一般社団法人日本歯車工業会の会員名簿一覧ページです。',
									'book'=>'歯車装置工業を推進する一般社団法人日本歯車工業会が発行する発行書籍ページです。発行書籍の購入ができます。',
									'store'=>'歯車装置工業を推進する一般社団法人日本歯車工業会が発行する発行書籍購入フォームです。',
									'standard'=>'歯車装置工業を推進する一般社団法人日本歯車工業会の書籍購入ページです。',
									'access'=>'歯車装置工業を推進する一般社団法人日本歯車工業会へのアクセスページです。',
									//'access'=>'歯車装置工業を推進する一般社団法人日本歯車工業会会員企業の紹介・tokusyuu ページです。',
									'special'=>'歯車装置工業を推進する一般社団法人日本歯車工業会の会員企業紹介・特集ページです。',
									'link'=>'歯車装置工業を推進する一般社団法人日本歯車工業会に関連する外部リンクページです。',
									'contact'=>'歯車装置工業を推進する一般社団法人日本歯車工業会への入会・購入書籍・転載許諾・その他お問い合わせができます。',
									'topics'=>'歯車装置工業を推進する一般社団法人日本歯車工業会のトピック（お知らせ）一覧ページです。',
									'sitemap'=>'歯車装置工業を推進する一般社団法人日本歯車工業会のサイトマップです。',
									'privacy'=>'歯車装置工業を推進する一般社団法人日本歯車工業会の個人情報取り扱いに関するページです。',


									'e_profile'=>'歯車装置工業を推進する一般社団法人日本歯車工業会組織・役員名簿・本部・支部ページです。',
									'e_activities'=>'歯車装置工業を推進する一般社団法人日本歯車工業会団体概要・事業内容ページです。',
									'report'=>'歯車装置工業を推進する一般社団法人日本歯車工業会事業計画・事業報告ページです。',
									'e_members_search,product'=>'歯車装置工業を推進する一般社団法人日本歯車工業会の会員検索ページです。会員名簿の検索ができます。',
									'e_members_search?member'=>'歯車装置工業を推進する一般社団法人日本歯車工業会の会員検索ページです。会員名簿の検索ができます。',
									'e_members_list'=>'歯車装置工業を推進する一般社団法人日本歯車工業会の会員名簿一覧ページです。',
									'e_publications'=>'歯車装置工業を推進する一般社団法人日本歯車工業会が発行する発行書籍ページです。発行書籍の購入ができます。',
									'e_standards'=>'一般社団法人日本歯車工業会の歯車装置関連規格ページです。',
									'e_link'=>'歯車装置工業を推進する一般社団法人日本歯車工業会に関連する外部リンクページです。',
									'e_contact'=>'歯車装置工業を推進する一般社団法人日本歯車工業会への入会・購入書籍・転載許諾・その他お問い合わせができます。',
									'outline'=>'歯車装置工業を推進する一般社団法人日本歯車工業会の概要ページです。',
									'greeting'=>'歯車装置工業を推進する一般社団法人日本歯車工業会の会長挨拶ページです。',
									'officer'=>'歯車装置工業を推進する一般社団法人日本歯車工業会の役員ページです。',
									'organization_chart'=>'歯車装置工業を推進する一般社団法人日本歯車工業会の組織図ページです。',
									'project'=>'歯車装置工業を推進する一般社団法人日本歯車工業会の3大事業ページです。',
									'gearcollege_h27'=>'歯車装置工業を推進する一般社団法人日本歯車工業会のセミナー・イベントページです。',
									'jgma_news'=>'歯車装置工業を推進する一般社団法人日本歯車工業会の機関誌JGMA Newsページです。',
									);
$this_Disc = '';

if ( array_key_exists($parent_slug,$descriptions) ) $this_Disc = $descriptions[$parent_slug];
if (!$this_Disc) $this_Disc = $multiDisc;

return $this_Disc;
}









//カスタム投稿タイプ
add_action('init', 'register_post_type_and_taxonomy');
function register_post_type_and_taxonomy() {

	// 会員ページ用項目
	register_post_type(
		'member',
		array(
			'labels' => array(
				'name' => '会員ページ用項目',
				'add_new_item' => '新規会員用項目を追加',
				'edit_item' => '会員ページ用項目の編集',
				),
			'public' => true,
			'hierarchical' => true,
			'supports' => array(
				'title',
				'editor',
				'excerpt',
				'custom-fields',
				'thumbnail',
				'page-attributes',
				),
			'rewrite' => array(
				'slug' => 'member'
				),
			)
		);
/*
	register_taxonomy(
		'event_category',
		'event',
		array(
			'labels' => array(
				'name' => '会員ページ用項目カテゴリ',
				'add_new_item' => '会員ページ用項目カテゴリを追加',
				'edit_item' => '会員ページ用項目カテゴリの編集',
				),
			'hierarchical' => true,
			'show_admin_column' => true,
			)
		);
*/
	// 特集ページ
	register_post_type(
		'special',
		array(
			'labels' => array(
				'name' => '特集ページ用項目',
				'add_new_item' => '特集項目を追加',
				'edit_item' => '特集ページ用項目の編集',
				),
			'public' => true,
			'hierarchical' => true,
			'supports' => array(
				'title',
				'editor',
				'excerpt',
				'custom-fields',
				'thumbnail',
				'page-attributes',
				),
			'rewrite' => array(
				'slug' => 'special'
				),
			)
		);
}





add_action('admin_menu','remove_default_post_screen_metaboxes');

function remove_default_post_screen_metaboxes() {
 if (true) { // !current_user_can('level_10') level10以下のユーザーの場合メニューをremoveする
 remove_meta_box( 'postcustom','member','normal' ); // カスタムフィールド
 remove_meta_box( 'postexcerpt','member','normal' ); // 抜粋
 remove_meta_box( 'commentstatusdiv','member','normal' ); // ディスカッション
 remove_meta_box( 'commentsdiv','member','normal' ); // コメント
 remove_meta_box( 'trackbacksdiv','member','normal' ); // トラックバック
 remove_meta_box( 'authordiv','member','normal' ); // 作成者
 remove_meta_box( 'slugdiv','member','normal' ); // スラッグ
 remove_meta_box( 'revisionsdiv','member','normal' ); // リビジョン
 remove_meta_box( 'postcustom','member','normal' ); // カスタムフィールド
 }
}
add_action( 'init' , 'my_remove_post_editor_support' );

function my_remove_post_editor_support() {
 remove_post_type_support( 'member', 'editor' );//ビジュアルエディタ
 remove_post_type_support( 'member', 'excerpt' );//抜粋
 //remove_post_type_support( 'member', 'postcustom' );//カスタムフィールド追加欄
}

/*投稿ページ等への投稿ページを追加するためのアクションフック*/
//add_action('admin_menu', 'add_custom_inputbox2');
/*追加した表示項目のデータ更新・保存のためのアクションフック*/
//add_action('save_post', 'save_custom_postdata');
/*入力項目がどの投稿タイプのページに表示されるのかの設定*/
function add_custom_inputbox2() {
    add_meta_box( 'myid','テスト入力欄', 'custom_area', 'member', 'normal' );
}

$furl1 = wp_get_attachment_image_src($post->file1);
$furl2 = wp_get_attachment_image_src($post->file2);
//if ($url) $pcap = get_post_meta($post->ID , 'report_outline_caption1' ,true);


/*実際、管理画面に表示される内容*/
function custom_area($post_id){
      //これがないと入力欄が更新されないよ！
       global $post;
       //var_dump(get_post_meta($post->ID,'$content2',false));
       //var_dump($custom_fields['content2']);
  var_dump($furl1);
	echo '<div class="block"><div class="cheader">PDFファイル</div><div><input type="file" name="file1" value="'.get_post_meta($post->ID,'file1',true).'"></div></div>';
	var_dump($furl2);
	echo '<div class="block"><div class="cheader">その他ファイル</div><div><input type="file" name="file2" value="'.get_post_meta($post->ID,'file1',true).'"></div></div>';
}



















function change_default_title( $title ) {
	$screen = get_current_screen();
	if ( $screen -> post_type == 'member' ) {
		$title = 'ここに配布資料名をご記入ください。';
	}
	return $title;
}
add_filter('enter_title_here', 'change_default_title');




//参考
//http://www.ctmFile.net/wpplugin29/

//表示用（今回は本文の先頭に表示するようにしています）
//add_filter('the_content','ctmFile_custom');
//投稿ページへ表示するカスタムボックスを定義する
add_action('admin_menu', 'add_custom_inputbox');
//入力したデータの更新処理
add_action('save_post', 'save_custom_postdata');

//#################################
//表示用
//#################################
function ctmFile_custom($contentData){
     if(is_single()){
    //IDを取得
    $id = get_the_ID();
    //カスタムフィールドの値取得
    $custom = get_post_meta($id, "ctmFileimage", true);
    //スタイルシート＋html
    $html=<<<EOS
    <style type="text/css">
    #ctmFileimages {
        float:left;overflow:hidden;
        height: 150px;
    }
        #ctmFileimages img
        {
            max-width: 140px;
            max-height: 140px;
            border: 1px solid #cccccc;
        }
    .ctmFileImageEnd{
        clear:left
    }
     </style>

     <h4>今日のナイスショット！</h4>
     <div id="ctmFileimages">
EOS;
    //出力処理
    foreach($custom as $img){
       $html.="<img src={$img} />";
    }
    $html.="</div><br class=ctmFileImageEnd>";
    return $html.$contentData;
     }
}

//#################################
//投稿ページ用
//#################################
//投稿ページに表示される"入力欄その１"の設定
function add_custom_inputbox() {
    add_meta_box('ctmFileid','資料添付','ctmFile_custom_field','member','normal' );
    add_action('admin_print_scripts', 'admin_scripts');
    //add_action('admin_enqueue_scripts', array($this, 'admin_scripts'));
}

//投稿ページに表示されるカスタムフィールド
function ctmFile_custom_field(){
       $id = get_the_ID();
       //カスタムフィールドの値を取得
       $ctmFileimageTemp = get_post_meta($id,'ctmFileimage',true);
       if ( !is_array($ctmFileimageTemp) ) $ctmFileimage[] = null;
       else $ctmFileimage = $ctmFileimageTemp;

       //var_dump($ctmFileimage);

       $wp_n = wp_nonce_field('ctmFileImg','cfimg_nonce');
       $imgHtml="";
      foreach($ctmFileimage as $akey => $img){
      if ( $img ) {
      $fi = null;
      if ( strpos($img,'.pdf') !== false ) $fi = '<img src="'.get_template_directory_uri().'/img/content/icon_pdf.jpg">';
      elseif ( strpos($img,'.xlsx') !== false || strpos($img,'.xls') !== false )  $fi = '<img src="'.get_template_directory_uri().'/img/content/icon_xls.jpg">';
      elseif ( strpos($img,'.png') !== false || strpos($img,'.jpg') !== false || strpos($img,'.jepg') !== false || strpos($img,'.gif') !== false )  $fi = '<img src="'.get_template_directory_uri().'/img/content/icon_img.jpg">';
      else $fi = '<img src="'.get_template_directory_uri().'/img/content/icon_file.jpg">';
      $imgHtml.=<<<EOS
       <li id="img_{$akey}">
        {$fi}
        <a href="#" class="ctmFileimage_remove">削除する</a>
EOS;
      if ( $img ) $imgHtml.= "<a href='{$img}' target='_blank'>ファイルを見る</a>";
      $imgHtml.=<<<EOS
        <input type='hidden' name='ctmFileimage[]' value='{$img}' />
      </li>
EOS;
       }}
       echo <<<EOS
        <style type="text/css">
        #ctmFileimages li{
        float:left;
        margin: 10px auto;
        width: 98%;
        text-align: left;
        height: auto;
        border-bottom: 1px solid #ccc;
        padding:1em;
        overflow:hidden;
        }
        #ctmFileimages img{
            padding:0 1em;
            display:inline-block;
        }
        #ctmFileimages a{
            padding:0 1em;
            display:inline-block;
        }
        .ctmFileImageEnd{
        clear:left
        }
        .note { color:#d3d; font-size:1em; }
        </style>

        <div class="wrap">
        <p class="note">「ファイルを追加」ボタンを押すとファイルを追加出来ます。<br />
        ※ファイルは2つまでアップロード可能です。</p>
        {$wp_n}
         <button id="ctmFilemedia" type="button">ファイルを追加</button>
         <ul id="ctmFileimages">{$imgHtml}</ul>
         <div class="ctmFileImageEnd"></div>
        </div>
EOS;
}

function admin_scripts(){
    wp_enqueue_media(); // メディアアップローダー用のスクリプトをロードする
    // カスタムメディアアップローダー用のJavaScript
    wp_enqueue_script(
        'my-media-uploader',
    //**javasctiptの指定
    //*プラグインにしたとき
        //plugins_url("ctmFile-uploader.js", __FILE__),
        //*function.phpに記入した場合
        get_bloginfo( 'stylesheet_directory' ) . '/js/members_media_upload.js',

        array('jquery'),
        filemtime(dirname(__FILE__).'/js/members_media_upload.js'),
        false
    );
}

//#################################
   //更新処理
   //#################################
   /*投稿ボタンを押した際のデータ更新と保存*/
   function save_custom_postdata($post_id){
   	//入力した値(postされた値)
      if(wp_verify_nonce($_POST[cfimg_nonce],'ctmFileImg')){
   	  $ctmFileimage = $_POST['ctmFileimage'] ? $_POST['ctmFileimage']: null;
   	  //DBに登録してあるデータ
   	  $ctmFileimage_ex = get_post_meta($post_id, 'ctmFileimage', true);

      if($ctmFileimage){
   	     update_post_meta($post_id, 'ctmFileimage',$ctmFileimage);
   	   }else{
   	    delete_post_meta($post_id, 'ctmFileimage',$ctmFileimage_ex);
   	   }
    }
   }


/*投稿ボタンを押した際のデータ更新と保存*/
function save_custom_postdata222($post_id){
		/*
		//kakaku
		if( isset($_POST['file1']) ){ $file1=$_POST['file1']; }else{ $file1=''; }
		//
		if( strcmp($file1,get_post_meta(file1, 'file1', true)) != 0 ){
			update_post_meta($post_id, 'file1',$file1);
		}elseif($file1 == ""){
			delete_post_meta($post_id, 'file1',get_post_meta($post_id,'file1',true));
		}
		//keijo
		if(isset( $_POST['file2']) ){ $file2=$_POST['file2']; }else{ $file2=''; };
		if( strcmp($file2,get_post_meta($post_id, 'file2', true)) != 0 ){
			update_post_meta($post_id, 'file2',$file2);
		}elseif($file2 == ""){
			delete_post_meta($post_id, 'file2',get_post_meta($post_id,'file2',true));
		}*/

		//入力した値(postされた値)
    $ctmFileimage=isset($_POST['file1']) ? $_POST['file1']: null;
    //DBに登録してあるデータ
    $ctmFileimage_ex = get_post_meta($post_id, 'file1', true);
    if($file1){
      update_post_meta($post_id, 'file1',$file1);
    }else{
      delete_post_meta($post_id, 'file1',$file1_ex);
    }
}






$tp = 0;
/**
 * @param string $form_key フォーム識別子
 */
function my_mwform_after_exec_shortcode( $form_key ) {

   //会合名の設定
  function my_mwform_post_content( $content, $Data ) {
      global $wp_query;
      $title = $wp_query->queried_object->post_title;
      $content = preg_replace('/\{form_title\}/', $title, $content);
      return $content;
  }
  add_filter( 'mwform_post_content_'.$form_key, 'my_mwform_post_content', 10, 2 );

}
add_action( 'mwform_after_exec_shortcode', 'my_mwform_after_exec_shortcode' );


/**
  mwform_after_exec_shortcodeでのIDをフレキシブルに変更する機能が使えず。
  利用保留

 * カラムを並び替える、削除する 2893
 *
 * @param  array $columns カラム名の配列
 * @return array
 *
function my_mwform_inquiry_data_columns( $columns ) {
    // お名前、電話番号、メールアドレス、本文というデータの場合で、
    // メールアドレス、お名前、本文という並びに変更し、
    // 電話番号は表示しないようにする場合

    //var_dump($columns);
    global $tp;

    $columns = array(
        'date_time' => '送信日時',
        '会合名' => '会合名',
        '団体名' => '団体名',
        '部署' => '部署',
        '役職' => '役職',
        '氏名' => '氏名',
    );
    return $columns;
}
add_filter( 'mwform_inquiry_data_columns-mwf_2893', 'my_mwform_inquiry_data_columns' );
*/

//MW WP Form 2024年度 第5回 理事会 バリテーション
function my_validation_rule( $Validation, $data ) {
	if ( $data['御意向'] === 'web出席' ) {
		$Validation->set_rule( 'メールアドレス', 'noEmpty', array(
			'message' => 'web出席の方は必ずご記入ください。'
		) );
	}
	return $Validation;
}
add_filter( 'mwform_validation_mw-wp-form-7795', 'my_validation_rule', 10, 3 );

//MW WP Form 技術・企画運営委員会「産学連携強化に向けた講演会」 バリテーション
function my_validation_rule2( $Validation, $data ) {
	if ( $data['ご請求方法'] === '郵送' ) {
		$Validation->set_rule( '送付先住所', 'noEmpty', array(
			'message' => 'ご請求方法が郵送の方は必ずご記入ください。'
		) );
	}
	return $Validation;
}
add_filter( 'mwform_validation_mw-wp-form-7948', 'my_validation_rule2', 10, 3 );

//MW WP Form 2024年度 第6回 理事会 バリテーション
function my_validation_rule3( $Validation, $data ) {
	if ( $data['ご請求方法'] === '郵送' ) {
		$Validation->set_rule( '送付先住所', 'noEmpty', array(
			'message' => 'ご請求方法が郵送の方は必ずご記入ください。'
		) );
	}
	return $Validation;
}
add_filter( 'mwform_validation_mw-wp-form-8008', 'my_validation_rule3', 10, 3 );

//MW WP Form ギヤカレッジ修了認定マーク バリテーション
function my_validation_rule4( $Validation, $data ) {
	if ( $data['選択'] === 'シール（2000円/A4シート5枚set）' ) {
		$Validation->set_rule( '送付先住所', 'noEmpty', array(
			'message' => 'シールを選択された場合は必ずご記入ください。'
		) );
	}
	return $Validation;
}
add_filter( 'mwform_validation_mw-wp-form-8128', 'my_validation_rule4', 10, 3 );

function my_validation_rule5( $Validation, $data ) {
	if ( $data['選択'] === 'シール（2000円/A4シート5枚set）' ) {
		$targets = array( 'マスターコースset数', 'プロフェッショナルコースset数' );
		$filled = false;
		foreach ( $targets as $field ) {
			if ( ! empty( $data[ $field ] ) ) {
				$filled = true;
				break;
			}
		}
		if ( ! $filled ) {
			$Validation->set_rule( 'プロフェッショナルコースset数', 'noEmpty', array(
				'message' => 'シールを選択された場合はいずれかのset数を必ずご記入ください。'
			) );
		}
	}
	return $Validation;
}
add_filter( 'mwform_validation_mw-wp-form-8128', 'my_validation_rule5', 10, 3 );

//MW WP Form ギヤカレッジ修了認定マーク_テスト バリテーション
function my_validation_rule6( $Validation, $data ) {
	if ( $data['選択'] === 'シール（2000円/A4シート5枚set）' ) {
		$Validation->set_rule( '送付先住所', 'noEmpty', array(
			'message' => 'シールを選択された場合は必ずご記入ください。'
		) );
	}
	return $Validation;
}
add_filter( 'mwform_validation_mw-wp-form-8199', 'my_validation_rule6', 10, 3 );

function my_validation_rule7( $Validation, $data ) {
	if ( $data['選択'] === 'シール（2000円/A4シート5枚set）' ) {
		$targets = array( 'マスターコースset数', 'プロフェッショナルコースset数' );
		$filled = false;
		foreach ( $targets as $field ) {
			if ( ! empty( $data[ $field ] ) ) {
				$filled = true;
				break;
			}
		}
		if ( ! $filled ) {
			$Validation->set_rule( 'プロフェッショナルコースset数', 'noEmpty', array(
				'message' => 'シールを選択された場合はいずれかのset数を必ずご記入ください。'
			) );
		}
	}
	return $Validation;
}
add_filter( 'mwform_validation_mw-wp-form-8199', 'my_validation_rule7', 10, 3 );

?>
