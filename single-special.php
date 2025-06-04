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
          <li>特集</li>
          <li>会員企業紹介</li>
          <li><a href=<?php echo '"'.get_permalink().'">'.($title = get_the_title()); ?></a></li>
        </ul>
        <h2>特集 会員企業紹介</h2>
        <div class="post special">
          <?php
            $cont = get_the_content();
            //echo $page;
            $title = 'vol.'.$page.' '.$title;
            if ( strpos($cont,'[title]') !== false ) $cont = str_replace('[title]', $title, $cont);
            if ( strpos($cont,'[temp_path]') !== false ) $cont = str_replace('[temp_path]', get_template_directory_uri(), $cont);
            echo $cont;
          ?>
          <?php /*
            <div class="sc_header">
              <h3><?php echo $title ?></h3>
              <ul class="menu">
                <li id="h_m01">企業情報</li>
                <li id="h_m02">製品・事業</li>
                <li id="h_m03">技術情報</li>
              </ul>
            </div>
            <div id="sp_p_01" class="contentPanel">
              <img src="<?php echo get_template_directory_uri(); ?>/img/special/01ikeda/c1_main_img.jpg" alt="c1_main_img" width="910" height="300" />
              <h4>企業情報</h4>
              <div class="articleBlock">
                <img class="right" src="<?php echo get_template_directory_uri(); ?>/img/special/01ikeda/c1_photo_01.jpg" alt="c1_photo_01" width="247" height="329" />
                <h5>ごあいさつ</h5>
                <div class="marginRight250">
                  <p>　当社は昭和13年の創業以来、歯車に特化した事業を展開し、お客様とともに発展してまいりました。<br />歯車の業界で一貫生産を行っているのは、東京以北では弊社のみであり、完全受注生産で、伝動装置（減速機・等速機・増速機など）、高精度の各種歯車、一般産業機械の設計・製造から組立までを行っております。</p>
                  <p>社内の生産体制は、30年前からコンピユータ化を導入しており「納期を守る」・「安価なものづくり」を目指しております。<br />100台以上の各種機械設備は高精度と高加工能力が維持され、高い技術力との相乗効果により理想的な形で製品化し、国内はもとより広く海外に供給しております。</p>
                  <p>お客様には今後とも高品質な各種歯車部品・製品を提供できるよう、常に品質の改善・向上に取り組むとともに、成長と発展をめざす所存です。今後ともより一層のご理解、ご支援を賜りますようお願い申し上げます。</p>
                  <p class="right">代表取締役　池田 鐵雄</p>
                </div>
              </div>
              <div class="articleBlock">
                <h5>会社方針</h5>
                <dl class="type01">
                    <dt>品質面</dt><dd>道内機械加工の精度・品質向上を目的に新技術の導入・設備の充実に努力して居ます。</dd>
                    <dt>納期面</dt><dd>工程管理の確立に努力し、顧客の要望に応える様に努力して居ます。</dd>
                    <dt>価格面</dt><dd>本州企業との競合により、対抗出来得る体質造りに努力して居ます。</dd>
                    <dt>その他</dt><dd>新情報の取得、技術の交流により、新分野の開拓に努力して居ますので、御協力をお願い致します。</dd>
                </dl>
              </div>
              <div class="articleBlock">
                <h5>会社概要</h5>
                <dl class="type02">
                  <dt>社名</dt><dd>株式会社 池田歯車製作所（Ikeda gear mill Co., Ltd.）</dd>
                  <dt>設立</dt><dd>1938年6月15日</dd>
                  <dt>資本金</dt><dd>2,000万円</dd>
                  <dt>会社敷地</dt><dd>13,070㎡</dd>
                  <dt>建屋面積</dt><dd>9,632㎡</dd>
                  <dt>本社所在地</dt><dd>〒063-0833 札幌市西区発寒13条12丁目4-45 アクセスMAP</dd>
                  <dt>電話</dt><dd>011-661-8171</dd>
                  <dt>代表者</dt>
                    <dd>
                      <ul>
                        <li>代表取締役　 池 田  鐵 雄</li>
                        <li>専務取締役　 池 田  宗 司</li>
                        <li>取　締　役　 池 田  尚 子</li>
                        <li>取　締　役　 井 上  孝 男</li>
                        <li>監　査　役　 池 田  恵 子</li>
                      </ul>
                    
                    </dd>
                  <dt>従業員数</dt><dd>48人（2014年3月31日現在）</dd>
                  <dt>主要製品</dt><dd>伝動装置、歯車、一般機械加工部品、熱処理、鍛造、農業機械、一般産業機械設計、製作</dd>
                  <dt>E-mail</dt><dd>kk.ikeha@h7.dion.ne.jp</dd>
                </dl>
              </div>
              <div class="articleBlock">
                <h5>本社・工場</h5>
                <div class="inner">
                  <h6>株式会社 池田歯車製作所</h6>
                  <p>〒063-0833 札幌市西区発寒13条12丁目4-45　TEL：011-661-8171　FAX：011-665-0631</p>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/special/01ikeda/c1_photo_02.jpg" alt="c1_photo_02" width="880" height="220" />
                </div>
              </div>
            </div>
            
            <div id="sp_p_02" class="contentPanel">
              <img src="<?php echo get_template_directory_uri(); ?>/img/special/01ikeda/c2_main_img.jpg" alt="c2_main_img" width="910" height="300" />
              <h4>製品・事業</h4>
              <div class="articleBlock">
                <h5>製品やサービスについて／独自の研鑽、研究や取り組み</h5>
                <p>株式会社池田歯車製作所は、昭和13年に歯車の製作工場として創業し、現在は関東地区の大手の輸出物件の伝動装置やその関連部品の製作が主力事業の企業です。<br />創業当時、北海道内には製紙・石炭・鉄・造船・製糖などの24時間稼働の工場が多く、これに対応するべく歯車から機械、そして各種装置設計・製造へと当社サービスの幅を広げてまいりました。<br />歯車や増速装置等の製造において、歯面の精度を上げる技術向上を第一にこだわり、あらゆる分野の各種機械に対応できる高品質な部品の製造に努めました。これが部品だけでなく、高性能な機械・装置の開発・製造に繋がったと自負しています。<br />当社のように、歯車にはじまる部品から装置製造まで一貫して手がける企業は少なく、全国の各製造工場様のみならず広く海外への輸出を行うまでに至りました。<br />近年では取引企業様の海外進出の拡大に伴い、輸出事業が伸びてきています。<br />輸出案件は、価格・納期・品質全てにおいて厳しい側面もありますが、お客様のご要望にこまめに対応することにより、さらなる受注増に繋がっています。<br />また近年、欧州（ドイツ、イタリアなど）では風力発電開発が盛んですが、使用されている歯車や関連装置の大半は欧州製です。この修繕には、高い技術力と多くのコストが必要となるなどメンテナンス面での負担が大きい実情があります。<br />このため、修理の請負いに始まり、部品を当社製の改善製品に置き換えていただくことによってお客様の大幅な負担軽減に貢献しており、この分野のビジネスは特に拡大傾向となっています。<span class="super">＊1</span></p>
              </div>
              <div class="articleBlock black">
                <p><span class="super">＊1</span> 欧州製の風力発電機械等の修理や代替品の開発・製造も行っています。<br />詳細な説明書がない場合がほとんどで手探りでの作業となりますが、当社の技術力を活かして対応しながら、更にノウハウを培っています。</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/special/01ikeda/c2_photo_01.jpg" alt="c2_photo_01" width="800" height="179" />
              </div>
              <div class="articleBlock inner">
                <img src="<?php echo get_template_directory_uri(); ?>/img/special/01ikeda/c2_photo_02.jpg" alt="c2_photo_02" width="880" height="293" />
              </div>
              <div class="articleBlock">
                <h5>強み</h5>
                <p>このように歯車製造から始まった会社ですが、現在では部品開発から組み込み、各種装置の設計、製造、アフターケアまで一貫した機械製造のノウハウを培ってきた実績が当社の優位な点であり、お客様からも高い評価を頂いています。</p><p>顧客の新規開拓に関して、口コミや紹介・評判によりお声がけいただくケースがとても多いです。<br />見積り・打合せ時はお客様と綿密にコミュニケーションを行い、ご満足いただける製品・サービスを提供できるよう努めています。受注時の価格や品質に関するトラブルはほとんどなく、お客様の信頼を得られているものと確信しています。<br />おかげさまで、北海道から全国へ、そして全国の顧客様から同・他業種に関わらず様々なクライアント様をご紹介いただきながら、当社のサービスを分野を越えて拡げることができました。<br />これも、当社の部品開発から設計〜製造、メンテナンスまで一貫して対応しうる体制が、お客様のご要望に臨機応変に対応できたからと言えます。また、他業種の多様な案件に挑戦することで、当社の新しいノウハウの構築や新技術の導入にも繋がり、お客様と共に当社も大きく成長をしてまいりました。<br />引き続き、特定の分野に限らず多種多様のニーズに応じながら、どの分野にも総合的に活かせる伝達装置技術を伸ばしていきたいと考えています。</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/special/01ikeda/c2_photo_03.jpg" alt="c2_photo_03" width="880" height="293" class="center" />
              </div>
              <div class="articleBlock">
                <h5>注目している分野・今後の展開</h5>
                <p>今後の展開として、特に各発電プラントやオイル・ガス等の燃料資源関連分野でより一層のシェア拡大を視野に入れています。<br />このために、お客様の要望を先取りできる体制の整備や、新しいテクノロジーの積極的な習得体制強化に取り組んでいこうと考えています。<br />また、大型の歯車や関連装置、機械の減少という世界的なトレンドへの対応や、専用機械から汎用的に使用できる装置への需要拡大に合わせた事業展開を模索しています。</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/special/01ikeda/c2_photo_04.jpg" alt="c2_photo_04" width="880" height="293" class="center" />
              </div>
            </div>
            
            <div id="sp_p_03" class="contentPanel">
              <img src="<?php echo get_template_directory_uri(); ?>/img/special/01ikeda/c3_main_img.jpg" alt="c3_main_img" width="910" height="300" />
              <h4>技術情報（技術的特徴）</h4>
              <div class="articleBlock">
                <h5>保有する機械設備</h5>
                <table class="type01 spv01">
                  <tr>
                    <th>加工法</th><th>機械設備名等</th><th>能力型式等</th><th>台数</th>
                  </tr>
                  <tr>
                    <td rowspan="14">切削</td><td>NC旋盤・汎用旋盤</td><td>φ300～910・φ5～1000</td><td>13</td>
                  </tr>
                  <tr>
                    <td>横中ぐり盤</td><td>テーブル1400・1000</td><td>1</td>
                  </tr>
                  <tr>
                    <td>立旋盤</td><td>φ950・φ4000</td><td>2</td>
                  </tr>
                  <tr>
                    <td>歯切り盤</td><td>φ4000迄各種</td><td>15</td>
                  </tr>
                  <tr>
                    <td>歯車研削盤</td><td>φ30～1800</td><td>8</td>
                  </tr>
                  <tr>
                    <td>歯車検査機</td><td>PNC200(φ30～2000）他</td><td>3</td>
                  </tr>
                  <tr>
                    <td>横マシニングセンターテーブル630角、800角</td><td>X2000 Y1050 Z1090</td><td>1</td>
                  </tr>
                  <tr>
                    <td>立マシニングセンター</td><td>2200×870　X1800 Y820 Z600</td><td>1</td>
                  </tr>
                  <tr>
                    <td>直歯傘歯車創成盤</td><td>φ25～1525</td><td>4</td>
                  </tr>
                  <tr>
                    <td>門型プレーナー</td><td>DP250W 幅2500　長6000　高2000</td><td>1</td>
                  </tr>
                  <tr>
                    <td>門型平面研削盤</td><td>門幅1000×門高850×SR3000</td><td>1</td>
                  </tr>
                  <tr>
                    <td>五面加工機MCR-BⅡ</td><td>X6500　Y4200　Z1000　W1700</td><td>1</td>
                  </tr>
                  <tr>
                    <td>門型NCターニングVTR-350A</td><td>φ3500×2000H×3850×Z1250×W1000</td><td>1</td>
                  </tr>
                  <tr>
                    <td>インテリジェント複合加工機</td><td>MULTUSB750　x3000W　φ1050×L3000</td><td>1</td>
                  </tr>
                </table>
                <div class="inner"><img src="<?php echo get_template_directory_uri(); ?>/img/special/01ikeda/c3_photo_01.jpg" alt="c3_photo_01" width="880" height="147" /></div>
              </div>
              <div class="images">
                <div class="inner"><img src="<?php echo get_template_directory_uri(); ?>/img/special/01ikeda/c3_photo_11.jpg" alt="c3_photo_11" width="880" height="550" /><span>MAAG HSS-30BC, 60/80BC, SD-62他</span></div>
                <div class="inner">
                  <div class="smallBlock"><img src="<?php echo get_template_directory_uri(); ?>/img/special/01ikeda/c3_photo_12.jpg" alt="c3_photo_12" width="205" height="139" /><span>MAAG HSS-90S（φ900）</span></div>
                  <div class="smallBlock"><img src="<?php echo get_template_directory_uri(); ?>/img/special/01ikeda/c3_photo_13.jpg" alt="c3_photo_13" width="205" height="139" /><span>MCR-BII 35X65</span></div>
                  <div class="smallBlock"><img src="<?php echo get_template_directory_uri(); ?>/img/special/01ikeda/c3_photo_14.jpg" alt="c3_photo_14" width="205" height="139" /><span>VTR-350A</span></div>
                  <div class="smallBlock"><img src="<?php echo get_template_directory_uri(); ?>/img/special/01ikeda/c3_photo_15.jpg" alt="c3_photo_15" width="205" height="139" /><span>クリンゲルンベルグ社製 PNC200</span></div>
                </div>
                <div class="inner">
                  <div class="smallBlock centering"><img src="<?php echo get_template_directory_uri(); ?>/img/special/01ikeda/c3_photo_16.jpg" alt="c3_photo_16" width="205" height="137" /><span>歯車減速機</span></div>
                  <div class="smallBlock"><img src="<?php echo get_template_directory_uri(); ?>/img/special/01ikeda/c3_photo_17.jpg" alt="c3_photo_17" width="205" height="137" /><span>歯車増速機</span></div>
                  <div class="smallBlock"><img src="<?php echo get_template_directory_uri(); ?>/img/special/01ikeda/c3_photo_18.jpg" alt="c3_photo_18" width="205" height="137" /><span>製紙機械（パルプ製造用）各種減速機</span></div>
                </div>
                <div class="inner"><img src="<?php echo get_template_directory_uri(); ?>/img/special/01ikeda/c3_photo_19.jpg" alt="c3_photo_19" width="880" height="344" /><span class="c3p19cap">インテリジェント複合加工機 MULTUSB750</span></div>
              </div>
            </div>
            */?>
            
            
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