<?php get_header(); ?>

<?php get_sidebar(); ?>

<!-- コンテンツ -->
<div class="content">
  <div class="section">
  <h2><?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->name; ?></h2>
  
  <?php if(have_posts()): query_posts($query_string.'&posts_per_page=8&paged='.$paged); while(have_posts()): the_post(); //query_posts($query_string.'posts_per_page=2&paged='.$paged); ?>
    <div class="post">
    <h3><span class="headerPt"><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></span></h3>
    <?php echo '<div style="text-align:right; margin:0 10px 20px 0;"><span style="font-size:1em;">'; the_time('Y年n月j日'); echo '</span></div>'; ?>
    <?php the_content(); ?>
    <?php echo '<br class="clearfloat" />'; ?>
    </div>
  <?php endwhile; endif; ?>
  </div>
<?php //echo $paged.'___'.$query_string; ?>
<?php //if (function_exists("pagination")) {pagination($additional_loop->max_num_pages);} ?>

<div class="pager">
	<?php global $wp_rewrite;
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
	echo paginate_links(array(
		'base' => $paginate_base,
		'format' => $paginate_format,
		'total' => $wp_query->max_num_pages,
		'mid_size' => 4,
		'current' => ($paged ? $paged : 1),
		'prev_text' => '«',
		'next_text' => '»',
	)); ?>
</div>

</div>

<?php get_footer(); ?>