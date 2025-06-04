<?php  get_header(); ?>
  <div id="content" class="cf">
    <?php get_sidebar(); ?>
    <div id="mainContent">
    <section>
     <h2>NEWS</h2>   
<?php
$paged = get_query_var('paged');
$pagedata = '';
$articleVol = 2;
if(true): query_posts('posts_per_page='.$articleVol.'&paged='.$paged.'&order=desc'); while(have_posts()): the_post(); //have_posts()
    $pagedata .= '<div class="post">';
    $pagedata .= '<h3><span class="headerPt"><a href="'.get_permalink($post->ID).'">'.get_the_title().'</a></span></h3>';
		$pagedata .= '<div style="text-align:right; margin:0 10px 20px 0;"><span style="font-size:1em;">'.get_the_time('Y年n月j日').'</span></div>';
    $pagedata .= '<div class="article">'.nl2br(get_the_content());
    $pagedata .= '</div></div>'."\n";
endwhile; endif;

	//PAGINATE
	$pagerdata = '';
	$pagerdata .= '<div class="pager">';
	global $wp_rewrite;
	$paginate_base = get_pagenum_link(1);
	if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
		$paginate_format = '';
		$paginate_base = add_query_arg('paged','%#%');
	}
	else{
		$paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
		user_trailingslashit('page/%#%/','paged');;
		$paginate_base .= '%_%';
	}
	$pagerdata .= paginate_links(array(
		'base' => $paginate_base,
		'format' => $paginate_format,
		'total' => $wp_query->max_num_pages,
		'mid_size' => 4,
		'current' => ($paged ? $paged : 1),
		'prev_text' => '«',
		'next_text' => '»',
	));
	$pagerdata .= '</div>';
	//PAGINATE
	
	echo $pagerdata.$pagedata.$pagerdata;
	?>

    
    </section>
    <!-- end .mainContent --></div>
    <!-- end .content --></div>

<?php get_footer(); /**/ ?>