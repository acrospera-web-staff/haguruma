<?php
get_header();
?>
<!-- コンテンツ -->
  <section>
  <div id="mainContent" class="other">
    <div class="inner">
      <?php if(have_posts()): while(have_posts()):the_post(); ?>
        <ul class="hierarchy">
          <li><a href="<?php echo home_url(); ?>">TOP</a></li>
          <li><a href="<?php echo home_url(); ?>">TOPICS</a></li>
          <?php
          
          ?>
          <li><a href=<?php echo '"'.get_permalink().'">'.get_the_title(); ?></a></li>
        </ul>
        <div class="post">
          <h2>トピックス</h2>
          <h3><?php echo $title = get_the_title(); ?></h3>
            <div class="date"><?php echo $date = get_the_date('Y年n月j日'); ?></div>
            <?php the_content(); ?>
        </div>        
      <?php endwhile; endif; ?>
    </div>
  <!-- end .mainContent --></div>
  </section>
<?php get_footer(); ?>



<?php /* get_header(); ?>
<!-- コンテンツ -->
<div class="content" class="cf">
  <?php get_sidebar(); ?>
  <div id="mainContent">
    <section>
    <h2><?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->name; ?></h2>
    <?php if(have_posts()): while(have_posts()): 
    the_post(); ?>
      <div class="post">
      <h3><?php the_title(); ?></h3>
      <?php echo '<div style="text-align:right; margin:0 0 20px 0;"><span style="font-size:1em;">'; the_time('Y年n月j日'); echo '</span></div>'; ?>
      <?php the_content(); ?>
      <?php echo '<br class="clearfloat" />'; ?>
      </div>
    <?php endwhile; endif; ?>
    </section>
  </div>
</div>
<?php get_footer(); */ ?>