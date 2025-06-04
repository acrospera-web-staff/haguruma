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
          <li><a href=<?php echo '"'.get_permalink().'">'.get_the_title(); ?></a></li>
        </ul>
        <div class="post">
          <h2><?php the_title(); ?></h2>
          <div class="inner form">
            <div>
              （テキストダミー）送信が完了しました。
            </div>
          </div>
            <?php
              //the_content();
              /*
              <p>ご購入書籍、ご連絡先を入力し、確認ボタンを押してください。<br>（※印の項目は必須）</p>
              <table class="type01 form">
                <colgroup><col width="26%"><col width="74%"></colgroup>
                  <tbody>
                    <tr>
                      <td>会合名<span class="require">＊</span></td>
                      <td>[mwform_text name="item" class="text" size="60" value="{post_title}"]</td>
                    </tr>
                    <tr>
                      <td>団体名<span class="require">＊</span></td>
                      <td><input type="text" name="団体名" size="30" maxlength="60" value="" /></td>
                    </tr>
                    <tr>
                      <td>部署<span class="require">＊</span></td>
                      <td><input type="text" name="部署" size="30" maxlength="60" value="" /></td>
                    </tr>
                    <tr>
                      <td>役職<span class="require">＊</span></td>
                      <td><input type="text" name="役職" size="30" maxlength="60" value="" /></td>
                    </tr>
                    <tr>
                      <td>氏名<span class="require">＊</span></td>
                      <td><input type="text" name="氏名" size="30" maxlength="60" value="" /></td>
                    </tr>
                </tbody>
              </table>
              */
            ?>
          <?php 
            /*
            <div class="btn_container" id="btnBlock">
              <input type="submit">
            </div>
            
            <div class="btn">
              <button type="submit" name="submitConfirm" value="confirm" class="pos">送信内容を確認</button>
            </div>
            */
          ?>
        </div>
      <?php endwhile; endif; ?>
    </div>
  <!-- end .mainContent --></div>
  </section>
<?php get_footer(); ?>

