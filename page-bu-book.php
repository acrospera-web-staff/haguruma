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
            <h3>発行書籍</h3>
            <table class="type01 book">
              <tr><th>書籍名</th><th>価格（会員価格）</th></tr>
              <tr><td>歯車規格集</td><td>7,000円　（5,000円）</td></tr>
              <tr><td>新歯車便覧</td><td>7,000円　（5,000円）</td></tr>
              <tr><td>歯車技術の半世紀</td><td>4,000円　（2,800円）</td></tr>
              <tr><td>ホブによるドライカット</td><td>7,000円　（5,000円）</td></tr>
              <tr><td>ドライカット</td><td>7,000円　（5,000円）</td></tr>
            </table>
            <p><a class="hd"  href="<?php echo home_url(); ?>/standard">その他の規格</a></p>
          </div>
          <h2>ご購入にあたり</h2>
          <div>
            <h3>ご注文方法</h3>
            <p>E-Mail：jgmaquestion@jgma.org もしくはFAX：03-3431-1872 にて以下の内容を当会へご連絡ください。</p>
            <p>１）希望規格名　２）冊数　３）送付先住所　４）電話番号　５）ご担当者名<br />
              ６）請求書有無　7）領収書有無　８）お支払予定日</p>
            <p><a class="hd"  href="<?php echo home_url().'/book/store' ?>">ご注文フォーマット</a></p>
          </div>
          <div>
            <h3>お支払に関して</h3>
            <ul>
              <li>１）前払い（銀行振込み）でお願いしております。</li>
              <li>２）別途『送料』が必要です。</li>
              <li>３）ご注文の際にお知らせいただいたご担当者様あて、送料をご連絡いたします。</li>
              <li>４）振込手数料はご購入者様にてご負担をお願いいたします。</li>
            </ul>
          </div>
          <div>
            <h3>発送</h3>
            <ul>
              <li>１）在庫がある場合、概ね1 週間以内に規格をお送りいたします。</li>
              <li>２）在庫がない場合、別途当会からご案内申し上げます。</li>
            </ul>
          </div>
        </div>        
        
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  <!-- end .mainContent --></div>
  </section>
<?php get_footer(); ?>

