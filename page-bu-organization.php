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
          <h3 id="c1">組織図</h3>
          <p class="center">
            <a href="<?php echo get_template_directory_uri(); ?>/img/content/org-2014soshiki-zu.jpg" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/content/org-2014soshiki-zu.jpg" alt="org-2014soshiki-zu" width="596" height="843" /></a>
          </p>
          <h3 id="c2">役員名簿</h3>
          <h4>一般社団法人日本歯車工業会役員名簿</h4>
          <p>（任期平成26年度）<br />―専務理事以外非常勤―<br />平成26年5月23日 開催  第2回理事会にて承認</p>
<table class="type01 width925px">
<tr><th></th><th>役　職</th><th>氏　名</th><th>所 属 先 企 業 名</th><th>役　職
</th></tr>
<tr><td>1</td><td>会　長</td><td>吉　岡　功　二</td><td>大阪精密機械株式会社</td><td>代表取締役
</td></tr>
<tr><td>2</td><td>副会長</td><td>猪　村　美　之</td><td>株式会社ナゴヤギア</td><td>取締役社長
</td></tr>
<tr><td>3</td><td>〃</td><td>小　原　敏　治</td><td>小原歯車工業株式会社</td><td>代表取締役社長
</td></tr>
<tr><td>4</td><td>〃</td><td>浅　川　泰　秀</td><td>株式会社セイサ</td><td>顧問
</td></tr>
<tr><td>5</td><td>専務理事</td><td></td><td></td><td>
</td></tr>
<tr><td>6</td><td>常務理事</td><td>遠　藤　光　男</td><td>株式会社ユニテックギア</td><td>相談役
</td></tr>
<tr><td>7</td><td>〃</td><td>永　田　和　久</td><td>協育歯車工業株式会社</td><td>取締役相談役
</td></tr>
<tr><td>8</td><td>〃</td><td>城　所　武　男</td><td>大久保歯車工業株式会社</td><td>取締役副社長
</td></tr>
<tr><td>9</td><td>〃</td><td>勝　村　　　哲</td><td>日本ギア工業株式会社</td><td>代表取締役社長
</td></tr>
<tr><td>10</td><td>〃</td><td>今　中　敏　夫</td><td>株式会社神崎高級工機製作所</td><td>取締役
</td></tr>
<tr><td>11</td><td>〃</td><td>大　石　洋　一</td><td>株式会社中西製作所</td><td>取締役会長
</td></tr>
<tr><td>12</td><td>〃</td><td>松　波　俊　宣</td><td>岐阜ギヤー工業株式会社</td><td>代表取締役社長
</td></tr>
<tr><td>13</td><td>〃</td><td>澤　田　　　豊</td><td>豊精密工業株式会社</td><td>代表取締役社長
</td></tr>
<tr><td>14</td><td>理事</td><td>萩　原　伸　宜</td><td>株式会社共和歯車製作所</td><td>代表取締役社長
</td></tr>
<tr><td>15</td><td>〃</td><td>栄　野　　　隆</td><td>株式会社日立ニコトランスミッション</td><td>取締役社長
</td></tr>
<tr><td>16</td><td>〃</td><td>片　桐　昭　夫</td><td>岡本工機株式会社</td><td>代表取締役会長
</td></tr>
<tr><td>17</td><td>〃</td><td>髙　橋　丈　助</td><td>株式会社カワグチキカイ</td><td>代表取締役社長
</td></tr>
<tr><td>18</td><td>〃</td><td>山　崎　　　隆</td><td>株式会社長岡歯車製作所</td><td>代表取締役社長
</td></tr>
<tr><td>19</td><td>〃</td><td>菊  地  義  典</td><td>菊地歯車株式会社</td><td>代表取締役社長
</td></tr>
<tr><td>20</td><td>〃</td><td>寳　角　幸　彦</td><td>株式会社寳角ギヤー</td><td>代表取締役社長
</td></tr>
<tr><td>21</td><td>〃</td><td>田　中　文　彦</td><td>株式会社オ−ジック</td><td>代表取締役社長
</td></tr>
<tr><td>22</td><td>〃</td><td>清　川　敬　久</td><td>浜井産業株式会社</td><td>顧問
</td></tr>
<tr><td>23</td><td>〃</td><td>櫻  井　　　治</td><td>大和歯車製作株式会社</td><td>営業部長
</td></tr>
<tr><td>24</td><td>〃</td><td>島　　　三　郎</td><td>株式会社島製作所</td><td>代表取締役
</td></tr>
<tr><td>25</td><td>〃</td><td>阿　部　義　和</td><td>株式会社イワサテック</td><td>代表取締役社長
</td></tr>
<tr><td>26</td><td>〃</td><td>植  田　昌  克</td><td>株式会社植田鉄工所</td><td>代表取締役
</td></tr>
<tr><td colspan="5"></td></tr>
<tr><td>1</td><td>監  事</td><td>小　松　　　滋</td><td>株式会社浅野歯車工作所</td><td>顧問</td></tr>
<tr><td>2</td><td>〃</td><td>矢都木　　　力</td><td>株式会社都精機</td><td>代表取締役社長</td></tr>
</table>
          <div class="center"><a href="<?php echo get_template_directory_uri() ?>/pdf/member.pdf" target="_blank">一般社団法人日本歯車工業会役員名簿 PDFファイル <img src="<?php echo get_template_directory_uri(); ?>/img/content/icon_pdf.jpg" alt="icon_pdf" width="27" height="30" style="vertical-align: bottom;" /></a></div>
          <div>
            <h3 id="c3">工業会本部及び支部</h3>
            <dl>
              <dt>本部（事務局）</dt><dd>東京都港区芝公園3-5-8 機械振興会館２０８号 <a href="access">地図</a><br />TEL：03-3431-1871</dd>
              <dt>東日本支部</dt><dd>埼玉県川口市仲町13-17 　小原歯車工業㈱内<br />TEL：048-255-4871<br />支部長　小原敏治（<a href="">小原歯車工業株式会社</a>　社長）</dd>
              <dt>中日本支部</dt><dd>愛知県名古屋市南区滝春町9　㈱ナゴヤギア内<br />TEL：052-612-1230<br />支部長　猪村　美之（<a href="">株式会社ナゴヤギア</a>　社長）</dd>
              <dt>西日本支部</dt><dd>大阪府貝塚市脇浜4 丁目16 番1 号　㈱セイサ内<br />TEL：072-431-3021<br />支部長　浅川　泰秀（<a href="">株式会社セイサ</a>　顧問）</dd>
            </dl>
          </div>　
        </div>
        
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  <!-- end .mainContent --></div>
  </section>
<?php get_footer(); ?>

