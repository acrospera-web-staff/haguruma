<?php
$es = get_post($wp_query->post->ID)->post_name;
if ( strpos('e_', $es) === false) get_header(); else get_header('english');
?>
<!-- コンテンツ -->
  <section>
  <div id="mainContent" class="other">
    <div class="inner">
      <?php if(have_posts()): while(have_posts()):the_post(); ?>
        <ul class="hierarchy">
          <li><a href="<?php echo home_url(); ?>">TOP</a></li>
          <?php
          
          ?>
          <li><a href=<?php echo '"'.get_permalink().'">'.get_the_title(); ?></a></li>
        </ul>
        <div class="post">
          <h2><?php the_title(); ?></h2>
          <?php
          $content = apply_filters('the_content',get_the_content());
          $content = str_replace(array('-selfurl-','-selftempurl-'), array(home_url(),get_template_directory_uri()), $content);
          //apply_filters('the_content',get_the_content('続きを読む '.'<span class="meta-nav">→</span>',true));//get_the_content();
            echo $content;
          ?>
        </div>
      <?php endwhile; endif; ?>
    </div>
  <!-- end .mainContent --></div>
  </section>
<?php get_footer(); ?>

