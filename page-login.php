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
          <div>
            <div id="login">
<form method="post" action="<?php echo home_url().'/users'; ?>" >
              <label>ID</label><input type="text" name="id" >
              <label>Password</label><input type="password" name="password">
              <div class="center submit"><input type="submit" value="LOGIN"></div>
</form>
            </div>
          </div>
        </div>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  <!-- end .mainContent --></div>
  </section>
<?php get_footer(); ?>

