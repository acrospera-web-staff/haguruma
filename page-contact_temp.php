<?php get_header(); ?>
<!-- コンテンツ -->
<div div="content" class="cf">
  <?php get_sidebar(); ?>
    <div id="mainContent">
     
     <section>

<div class="post">
<h2>お問い合わせ（mailformpro用）</h2>
  <div class="contact-form contact-form-input" >
    <form id="mailformpro" action="<?php bloginfo('template_url'); ?>/mfp/mailformpro/mailformpro.cgi" method="POST">
    <div><p>＊＊＊＊＊＊＊へのお問い合わせなどございましたら、こちらからよろしくお願いします。</p><p>（<span class="require">＊</span>）必須入力項目</p></div>
      <table>
        <tbody>
          <tr>
            <th scope="row"><div class="subject"><span class="content">会社名・団体名<br>（任意）</span></div></th>
            <td><div>
            		
                <input type="text" name="団体名" size="30" maxlength="60" class="cName" value="" />
              </div></td>
          </tr>
          <tr>
            <th scope="row"><div class="subject"><span class="content">氏名</span><span class="require">＊</span></div></th>
            <td><div>
            		
                <input type="text" name="氏名" size="30" maxlength="60" class="cName" value=""  required="required" />
              </div></td>
          </tr>
          <tr>
            <th scope="row"><div class="subject"><span class="content">メールアドレス</span><span class="require">＊</span></div></th>
            <td><div>
              <input type="email" data-type="email" data-parent="mailfield" name="email" size="33" required="required" style="margin-bottom:6px;" /><br />
              <input type="email" data-type="email" data-parent="mailfield" name="confirm_email" size="33" required="required" /><span class="note1">※確認のためもう一度</span>
              </div></td>
          </tr>
          <tr>
            <th scope="row"><div class="subject"><span class="content">お問い合わせ内容</span><span class="require">＊</span></div></th>
            <td><div>
                <textarea name="お問い合わせ内容" rows="8" cols="55" class="cText" style="height:auto !important; width:auto !important;" required="required" ></textarea>
              </div></td>
          </tr>
          
        </tbody>
      </table>
      <div class="mfp_buttons">
							<button type="reset">リセット</button>&nbsp;&nbsp;<button type="submit">送信する</button>
						</div>
    </form>
    <script type="text/javascript" id="mfpjs" src="<?php bloginfo('template_url'); ?>/mfp/mailformpro/mailformpro.cgi" charset="UTF-8"></script>
  </div>
</div>


      </section>
     
     
    </div>
</div>
<?php get_footer(); ?>
