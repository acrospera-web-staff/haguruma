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
<title>JGMA<?php wp_title(); ?></title>
<?php /*echo '<script type="text/javascript">var templatePath = "' . get_template_directory_uri() . '";</script>'."\n"; /**/ 
 $slug = get_page_uri($post->slug);
 $addA = explode('?',$_SERVER["REQUEST_URI"]);
 $add = ( $addA[1] )? $addA[1] : '';
 $keyw = showKeywords($slug,$add);
 $dscr = showDescriptions($slug,$add);
?>
<script type="text/javascript" >
  var tempurl = "<?php bloginfo('template_url'); ?>";
  var selectedTab = "<?php the_title(); ?>";
</script>
<?php
echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/style.css" type="text/css" />'."\n";
	wp_enqueue_style('common-css', get_bloginfo('template_url') . '/css/english.css')."\n";
	wp_enqueue_script('easing',get_template_directory_uri() . '/js/jquery.easing.1.3.js',array('jquery'))."\n";
	wp_enqueue_script('common_function',get_template_directory_uri() . '/js/common.js',array('jquery','easing'))."\n";
	if ( is_page('e_members') || is_page('e_members_list') || is_page('e_members_search') ) wp_enqueue_script('members_js',get_template_directory_uri() . '/js/members.js',array('jquery','easing'))."\n";
	if ( is_page('e_members') || is_page('e_members_list') || is_page('e_members_search') ) wp_enqueue_script('members_script_js',home_url() . '/search_js/script.js',array('jquery'))."\n";
	if ( is_page('e_details') ) wp_enqueue_script('members_detals_js',get_template_directory_uri() . '/js/members_detals.js',array('jquery','easing'))."\n";
	if ( is_page('e_contact') ) echo '<link rel="stylesheet" href="'.home_url().'/cgi-bin/acro_mfp/mfp.statics/mailformpro.css" type="text/css" />'."\n";
	if ( is_page('e_thanks') ) wp_enqueue_script('thanks_js',home_url().'/cgi-bin/acro_mfp/mfp.statics/thanks.js',array('jquery','easing'))."\n";
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

<body class="en">
  <header>
    <div class="inner">
      <h1><a href="<?php echo home_url() ?>/e_index"><img src="<?php echo get_template_directory_uri(); ?>/img/common/header_logo_e.png" alt="Japan Gear Manufacturers Association" width="596" height="90"></a></h1>
      <ul class="header_btn">
        <!-- <li><a href="<?php echo home_url() ?>/e_admission"><img src="<?php echo get_template_directory_uri(); ?>/img/common/header_btn1_en.png" alt="Membership" class="alpha"></a></li> -->
        <!--<li><a href="<?php echo home_url() ?>/e_contact"><img src="<?php echo get_template_directory_uri(); ?>/img/common/header_btn2_en.png" alt="Contact us" class="alpha"></a></li>-->
        <li><a href="<?php echo home_url() ?>/"><img src="<?php echo get_template_directory_uri(); ?>/img/common/header_btn3_en.png" alt="Japanese" class="alpha"></a></li>
      </ul>
    </div>
  </header>
  <nav class="globalMenu">
    <ul>
      <li><a href="<?php echo home_url() ?>/e_index">Home</a></li>
      <li><a class="noneLink">About Us</a>
        <ul>
          <li><a href="<?php echo home_url() ?>/e_outline">Outline</a></li>
          <li><a href="<?php echo home_url() ?>/e_greeting">From Chairman</a></li>
          <li><a href="<?php echo home_url() ?>/e_officer">Board Member</a></li>
          <li><a href="<?php echo home_url() ?>/e_access">Access</a></li>
        </ul>
      </li>
      <li><a class="noneLink">Activity</a>
        <ul>
          <li><a href="<?php echo home_url() ?>/e_project">3 Activities</a></li>
        </ul>
      </li>
      <li><a href="<?php echo home_url() ?>/standard" class="adjustLiH">Publishing<br>(Japanese Only)</a></li>
      <li><a href="<?php echo home_url() ?>/e_members_list">Members List</a></li>
    </ul>
  </nav>