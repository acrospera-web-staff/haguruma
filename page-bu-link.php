<?php get_header(); ?>
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
            <ol class="disc">
              <li><a href="http://www.meti.go.jp/" target="_blank">経済産業省</a></li>
              <li><a href="http://www.chusho.meti.go.jp/" target="_blank">中小企業庁</a></li>
              <li><a href="http://www.jsme.or.jp/" target="_blank">（一社）日本機械学会</a></li>
              <li><a href="http://www.jspe.or.jp/" target="_blank">公益社団法人　精密工学会</a></li>
              <li><a href="http://www.amtecinc.co.jp/pla/index.html" target="_blank">成形プラスチック歯車研究専門委員会</a></li>
              <li><a href="http://www.jsde.or.jp/" target="_blank">日本設計工学会</a></li>
            </ol>
          </div>
        </div>        
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  <!-- end .mainContent --></div>
  </section>
<?php get_footer(); ?>