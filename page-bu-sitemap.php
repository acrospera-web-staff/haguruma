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
        <div class="post sitemap">
          <h2><?php the_title(); ?></h2>
          <div>
            <h3>日本語</h3>
            <ul>
              <li><a href="<?php echo home_url(); ?>">HOME</a></li>
              <li>団体概要
                <ul>
                  <li><a href="<?php echo home_url(); ?>/object">目的と設立経緯</a></li>
                  <li><a href="<?php echo home_url(); ?>/description">事業内容</a></li>
                  <li><a href="<?php echo home_url(); ?>/report">事業報告</a></li>
                </ul>
              </li>
              <li><a href="<?php echo home_url(); ?>/organization">組織</a></li>
              <li>会員名簿
                <ul>
                  <li><a href="<?php echo home_url(); ?>/members/list">会員一覧</a></li>
                  <li><a href="<?php echo home_url(); ?>/members/search">検索</a></li>
                </ul>
              </li>
              <li><a href="<?php echo home_url(); ?>/book">JGMA発行物</a></li>
              <li><a href="<?php echo home_url(); ?>/standard">歯車関連規格</a></li>
              <li><a href="<?php echo home_url(); ?>/access">アクセス</a></li>
              <li><a href="<?php echo home_url(); ?>/link">リンク</a></li>
              <li><a href="<?php echo home_url(); ?>/privacy">個人情報の取り扱い</a></li>
              <li><a href="<?php echo home_url(); ?>/contact">お問い合わせ</a></li>
              <li><a href="<?php echo home_url(); ?>/special">会員企業特集</a></li>
              <li><a href="<?php echo home_url(); ?>/login">会員ログイン</a></li>
              <li><a href="<?php echo home_url(); ?>/sitemap">サイトマップ</a></li>
            </ul>
            <h3>English</h3>
            <ul>
              <li><a href="<?php echo home_url(); ?>/e_index">HOME</a></li>
              <li><a href="<?php echo home_url(); ?>/e_profile">Profile</a></li>
              <li><a href="<?php echo home_url(); ?>/e_activities">Activities</a></li>
              <li>Members
                <ul>
                  <li><a href="<?php echo home_url(); ?>/e_members_list">Members List</a></li>
                  <li><a href="<?php echo home_url(); ?>/e_members_search">Search</a></li>
                </ul>
              </li>
              <li><a href="<?php echo home_url(); ?>/e_publications">Publications</a></li>
              <li><a href="<?php echo home_url(); ?>/e_standards">Standards</a></li>
              <li><a href="<?php echo home_url(); ?>/e_report">Report</a></li>
              <li><a href="<?php echo home_url(); ?>e_link">Link</a></li>
              <li><a href="<?php echo home_url(); ?>/e_contact">Contact us</a></li>
              <li><a href="<?php echo home_url(); ?>/sitemap">Sitemap</a></li>
            </ul>
          </div>
        </div>        
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  <!-- end .mainContent --></div>
  </section>
<?php get_footer(); ?>

