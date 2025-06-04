<!DOCTYPE HTML>
<html>
<head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-T7W8F80R4T"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-T7W8F80R4T');
</script>

<meta charset="<?php bloginfo ('charset'); ?>" />
<title><?php
 $slug = get_page_uri($post->slug);
 $addA = explode('?',$_SERVER["REQUEST_URI"]);
 $add = ( $addA[1] )? $addA[1] : '';
 $keyw = showKeywords($slug,$add);
 $dscr = showDescriptions($slug,$add);
 echo showHeader($slug,$add,is_home());
 /*bloginfo('name'); ?><?php wp_title();
 /**/
 ?></title>
<?php /*echo '<script type="text/javascript">var templatePath = "' . get_template_directory_uri() . '";</script>'."\n"; /**/ ?>
<script type="text/javascript" >
  var tempurl = "<?php bloginfo('template_url'); ?>";
  var selectedTab = "<?php
    $tt = get_the_title();
    $tt = str_replace('<span class="new">', '', $tt);
    if ( $tt == '概要（設立から現在の取組み）' || $tt == '会長挨拶' || $tt == '役員' || $tt == '組織図' || $tt == '事業報告、計画' || $tt == 'アクセス' || $tt == '定款') $tt = '日本歯車工業会とは';
    if ( $tt == '日本歯車工業会の3大事業' ) $tt = '活動内容';
    echo $tt;
  ?>";
  <?php //var_dump($post->post_name); ?>
</script>
<?php
echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/style.css?date=20201015" type="text/css" />'."\n";
	//wp_enqueue_style('common-css', get_bloginfo('template_url') . '/css/common.css')."\n";
	wp_enqueue_script('easing',get_template_directory_uri() . '/js/jquery.easing.1.3.js',array('jquery'))."\n";
	wp_enqueue_script('common_function',get_template_directory_uri() . '/js/common.js',array('jquery','easing'))."\n";
	if ( (is_page('search') || is_page('list')) && '8' == $post->post_parent ) wp_enqueue_script('members_js',get_template_directory_uri() . '/js/members.js',array('jquery','easing'))."\n";
	if ( (is_page('search') || is_page('list')) && '8' == $post->post_parent ) wp_enqueue_script('members_script_js',home_url() . '/search_js/script.js',array('jquery'))."\n";
	if ( (is_page('book') ) ) wp_enqueue_script('books_js',get_template_directory_uri() . '/js/books.js',array('jquery','easing'))."\n";
	if ( is_page('details') && '8' == $post->post_parent ) wp_enqueue_script('members_detals_js',get_template_directory_uri() . '/js/members_detals.js',array('jquery','easing'))."\n";
	if ( is_page('contact') || ( is_page('store') && '10' == $post->post_parent )) echo '<link rel="stylesheet" href="'.home_url().'/cgi-bin/acro_mfp/mfp.statics/mailformpro.css" type="text/css" />'."\n";
	if ( is_page('contact') || ( is_page('store-test') && '10' == $post->post_parent )) echo '<link rel="stylesheet" href="'.home_url().'/cgi-bin/acro_mfp/mfp.statics/mailformpro.css" type="text/css" />'."\n";
	if ( is_page('thanks') || is_page('book_order_thanks') ) wp_enqueue_script('thanks_js',home_url() . '/cgi-bin/acro_mfp/mfp.statics/thanks.js',array('jquery','easing'))."\n";
	if ( strpos($addA[0],'archives/special/' ) !== false ) wp_enqueue_script('thanks_js',get_template_directory_uri() . '/js/special.js',array('jquery','easing'))."\n";
//echo $slug;
?>
<meta name="keywords" content="<?php
echo $keyw;
?>
" />
<meta name="description" content="<?php
echo $dscr;
?>" />
<?php wp_head(); ?>
<?php /*
<style type="text/css">
<!--
-->
</style> */
?>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>
  <?php //if ( is_home() ) echo '<div class="renew">一般社団法人 日本歯車工業会<br />ただいまリニューアル作業中です。公開までしばらくおまちください。</div>'; ?>
  <header class="jp">
    <div class="inner">
      <h1><a href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/header_logo.png" alt="一般社団法人 日本歯車工業会" width="447" height="90"></a></h1>
      <ul class="header_btn">
        <li><a href="<?php echo home_url() ?>/login"><img src="<?php echo get_template_directory_uri(); ?>/img/common/header_btn1.png" alt="会員ログイン" class="alpha"></a></li>
        <li><a href="<?php echo home_url() ?>/admission"><img src="<?php echo get_template_directory_uri(); ?>/img/common/header_btn2.png" alt="入会案内" class="alpha"></a></li>
        <li><a href="<?php echo home_url() ?>/contact"><img src="<?php echo get_template_directory_uri(); ?>/img/common/header_btn3.png" alt="お問い合わせ" class="alpha"></a></li>
        <li><a href="<?php echo home_url() ?>/e_index"><img src="<?php echo get_template_directory_uri(); ?>/img/common/header_btn4.png" alt="英語サイト" class="alpha"></a></li>
      </ul>
    </div>
  </header>
  <nav class="globalMenu">
    <ul>
      <li><a href="<?php echo home_url() ?>">HOME</a></li>
      <li><a class="noneLink">日本歯車工業会とは</a>
        <ul>
          <li><a href="<?php echo home_url() ?>/outline">概要</a></li>
          <li><a href="<?php echo home_url() ?>/greeting">会長挨拶</a></li>
          <li><a href="<?php echo home_url() ?>/officer">役員</a></li>
          <li><a href="<?php echo home_url() ?>/organization_chart">組織図</a></li>
          <li><a href="<?php echo home_url() ?>/description">事業報告、計画</a></li>
          <li><a href="<?php echo home_url() ?>/access">アクセス</a></li>
          <li><a href="<?php echo home_url() ?>/object">定款</a></li>
        </ul>
      </li>
      <li><a class="noneLink">活動内容</a>
        <ul>
          <li><a href="<?php echo home_url() ?>/project">3大事業</a></li>
        </ul>
      </li>
      <li><a href="<?php echo home_url() ?>/standard">書籍購入</a></li>
      <li><a href="<?php echo home_url() ?>/gearcollege_h27">セミナー・イベント情報</a></li>
      <!--<li><a href="<?php echo home_url() ?>/jgma_news">機関誌JGMA News</a></li>-->
      <li><a href="<?php echo home_url() ?>/members/list">会員一覧</a></li>
    </ul>
  </nav>
