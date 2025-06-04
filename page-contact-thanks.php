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
            <p>ご購入書籍、ご連絡先を入力し、確認ボタンを押してください。<br />（※印の項目は必須）</p>
            <form id="mailformpro" action="<?php echo home_url(); ?>/cgi-bin/acro_mfp/mailformpro/mailformpro.cgi" method="POST">
            <table class="type01 form">
              <col width="26%"><col width="74%">
              <tr>
                <td>企業・団体名※</td>
                <td><input type="text" name="企業・団体名" id="ocmName" required="required" /></td>
              </tr>
              <tr>
                <td>ご担当者（氏名）※</td>
                <td><input type="text" name="ご担当者" id="name" required="required" /></td>
              </tr>
              <tr>
                <td>住所※</td>
                <td><input type="text" name="住所" id="address" required="required" /></td>
              </tr>
              <tr>
                <td>TEL※</td>
                <td><input type="text" name="TEL" id="tel" required="required" /></td>
              </tr>
              <tr>
                <td>FAX</td>
                <td><input type="text" name="FAX" id="fax" /></td>
              </tr>
              <tr>
                <td>メールアドレス※</td>
                <td><input type="text" name="メールアドレス" id="mail" required="required" /></td>
              </tr>
              <tr>
                <td>お問い合わせ項目※</td>
                <td>
                  <div class="cbx">
                    <input type="radio" name="お問い合わせ項目" id="type1" value="入会について" required="required" checked="" /><label for="type1">入会について</label>
                  </div>
                  <div class="cbx">
                    <input type="radio" name="お問い合わせ項目" id="type2" value="書籍購入について" /><label for="type2">書籍購入について</label>
                  </div>
                  <div class="cbx">
                    <input type="radio" name="お問い合わせ項目" id="type3" value="転載許諾について" /><label for="type3">転載許諾について</label>
                  </div>
                  <div class="cbx">
                    <input type="radio" name="お問い合わせ項目" id="type4" value="その他" /><label for="type4">その他</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>お問い合わせ内容※</td>
                <td><textarea name="お問い合わせ内容" id="content" cols="60" rows="10" required="required"></textarea></td>
              </tr>
            </table>
            <div class="btn_container" id="btnBlock">
              <!--button type="image" name="submit" value="submit" src="<?php echo get_template_directory_uri(); ?>/img/content/member_btn_confirm.jpg" alt="確認する" width="128" height="33" /-->
              <input type="submit" />
            </div>
            </form>
            <script type="text/javascript" id="mfpjs" src="<?php echo home_url(); ?>/cgi-bin/acro_mfp/mailformpro/mailformpro.cgi" charset="UTF-8"></script>
          </div>
        </div>     
        
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  <!-- end .mainContent --></div>
  </section>
<?php get_footer(); ?>

