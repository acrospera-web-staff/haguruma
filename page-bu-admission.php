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
            <p>当工業会に入会をご希望される法人・団体・個人におかれては、当会会員に紹介を依頼されるか、または直接歯車工業会へご照会下さい。<br />事務局より入会申込書など必要書類をお送りいたしますので、必要事項ご記入のうえ歯車工業会宛てにご提出下さい。理事会にて審議の上、入会の承認がされます。</p>
            <div>
            <h3>1.　会員</h3>
            <p>本会の会員は、正会員及び賛助会員で構成されており、正会員をもって民法上の社員とされております。理事会にて審議の上、入会の承認がされます。</p>
            <ol>
              <li>正会員：歯車及び歯車装置の製造事業を営む法人及び個人並びにこれらの者を構成員とする団体。</li>
              <li>本会の目的に賛同し、その事業に協力しようとするものとする。</li>
            </ol>
            </div>
            
            <div>
            <h3>2.　会費</h3>
            <h4>(1)入会金</h4>
            <p>本会の会員は、正会員及び賛助会員で構成されており、正会員をもって民法上の社員とされております。理事会にて審議の上、入会の承認がされます。</p>
            <ol>
              <li>正会員　　	：　100,000円</li>
              <li>賛助会員　	：　上場会社　  100,000円</li>
              <li>　　　　　	：　非上場会社　50,000円</li>
            </ol>
            <h4>(2)年会費</h4>
            <ol>
              <li>正会員	：　従業員数割り及び均等割り制
                <h5 style="margin-top:1em;">例</h5>
                <table class="type01">
                  <tr>
                    <th>従業員数（人）</th><th>年会費（円）</th><th>均等割（円）</th><th>合計（円）</th>
                  </tr>
                  <tr>
                    <td>１～　　１０</td><td>５５,０００</td><td rowspan="4">７５,０００</td><td>１３０,０００</td>
                  </tr>
                  <tr>
                    <td>２１～　　３０</td><td>８５,０００</td><td>１６０,０００</td>
                  </tr>
                  <tr>
                    <td>５１～　１００</td><td>２２１,０００</td><td>２９６,０００</td>
                  </tr>
                  <tr>
                    <td>１５１～　２００</td><td>４６０,０００</td><td>５３５,０００</td>
                  </tr>
                  <tr>
                    <td colspan="4">上記以外の従業員割については工業会事務局へお問い合わせ下さい。</td>
                  </tr>
                </table>
              </li>
              <li>賛助会員	：　上場会社　　 500,000円</li>
              <li>　　　　　：　非上場会社　190,000円</li>
            </ol>
            </div>
            
            <div>
            <h3>3.　問い合わせ先</h3>
            <p>「<a href="http://www.jgma.org/contact">お問い合わせフォーム</a>」からお問い合わせ下さい。</p>
            <div class="left" style="margin:4em 0 0 1em;"><a href="<?php echo get_template_directory_uri(); ?>/pdf/information.pdf" target="_blank">入会案内 PDFファイル <img src="<?php echo get_template_directory_uri(); ?>/img/content/icon_pdf.jpg" alt="icon_pdf" width="27" height="30" style="vertical-align: bottom;" /></a>　<a href="<?php echo get_template_directory_uri(); ?>/pdf/regist.pdf" target="_blank">入会申込書 PDFファイル <img src="<?php echo get_template_directory_uri(); ?>/img/content/icon_pdf.jpg" alt="icon_pdf" width="27" height="30" style="vertical-align: bottom;" /></a></div>
            </div>
            
            
            
            
          
          </div>
　
        </div>
        
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  <!-- end .mainContent --></div>
  </section>
<?php get_footer(); ?>

