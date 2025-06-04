<?php
/*
Template Name: archive_users_topics
*/
 get_header(); ?>
  <section>
  <div id="mainContent" class="other users">
      <div class="inner">
  <?php //if(have_posts()): query_posts($query_string.'&posts_per_page=8&paged='.$paged); while(have_posts()): the_post(); //query_posts($query_string.'posts_per_page=2&paged='.$paged); ?>
    <div class="post">
    <h2><?php the_title(); ?></h2>
    <?php //endwhile; endif;
      $paged = get_query_var('paged');
      $articleVol = get_option('posts_per_page');
      $pagedata = '<div class="archive">'."\n".'<ul>'."\n";
      
              $wpqa = array(
              'post_type' => 'post',
              'posts_per_page' => $articleVol,
              'paged'=>$paged,
              'category_name'=>'members',
              'orderby' =>'date',//
              'order' => 'DESC',
        );
              
        if(have_posts()): query_posts($wpqa); while(have_posts()): the_post(); //query_posts($query_string.'posts_per_page=2&paged='.$paged);
             $title = get_the_title();
             $date = get_the_date('n月j日');
             $content = strip_tags(get_the_content());
             if ( mb_strlen($content)>50 ) $content = mb_substr($content, 0, 50, 'UTF-8').'・・・';
             $pagedata .= '<li><span class="date">'.$date.'</span>'.'<span class="text"><a href="'.get_permalink().'">'.$title.'</a><p>'.$content.'</p><span></li>';
             /**/
        endwhile; else: endif;
        
        $pagedata .= '</ul>'."\n".'</div>'."\n";//archive
      
      
    ?>
<?php
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
	$pagerNums = paginate_links(array(
		'base' => $paginate_base,
		'format' => $paginate_format,
		'total' => $wp_query->max_num_pages,
		'mid_size' => 4,
		'current' => ($paged ? $paged : 1),
		'prev_text' => '«',
		'next_text' => '»',
	));
	//$pagerdata .= '</div>';
	//PAGINATE
	if ( $pagerNums ) {
	  $pagedata .= $pagerdata.$pagerNums.'</div>';
	  //$pagedata =  $pagerdata.$pagedata.$pagerdata;
	}
	echo $pagedata;
	?>
        </div><?php //post ?>
      </div>  
    <!-- end .mainContent --></div>
  </section>

<?php get_footer(); ?>