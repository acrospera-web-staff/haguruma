<?php
/*
Template Name: special_introduction
*/
 get_header(); ?>
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
        
        <div class="sp_post">
          <h2><?php the_title(); ?></h2>
          
          <div>
            <div>
              <h3>Vol.1　株式会社池田歯車製作所</h3>
              <img src="<?php echo get_template_directory_uri(); ?>/img/special/v1_main.jpg" alt="v1_main" width="910" height="300" />
              <p class="catch01">ダミーコピー。伝導装置（減速機・等速機・増速機など）、高精度の各種歯車、<br />一般産業機械の設計・製造から組立までの生産を一貫して行っております。</p>
              <p>伝導装置（減速機・等速機・増速機など）、高精度の各種歯車、一般産業機械の設計・製造から組立までの生産を一貫して行っております。<br />完全受注生産で、道内のこの業界で一貫生産を行っているのは当社のみであり、100台以上の各種工作機械等の充実した設備と、<br />高加工能力且つ高精度の高い技術力を保有しております。製品は、国内はもとより、広く海外にも輸出されております。</p>
            </div>
            <div>
              <h4>歯車再制作サービス</h4>
              <p>歯車再製作サービスは、壊れて使えなくなった歯車を元に 残された部分から原型を計算し、その計算を元に、再製作するものです。 左側の写真は、専用機の歯車部品で長年の使用による劣化から破損したものを右の写真のように再製作したものです。 メーカーの部品供給期間を過ぎていたり、会社が無くなり新しいものを 購入出来なかったので依頼がありました。皆さんも、歯車が壊れただけで使わなくなった物はないですか?ぜひ、再製作してもう一度現役で機械を使ってあげましょう!と言う、キャッチフレーズにて現在新サービスとして展開中。この他に、現状歯車の減速比を変更する為の再製作も承ります。</p>
              <div class="center">
                <img src="<?php echo get_template_directory_uri(); ?>/img/special/v1_c2_photo.jpg" alt="v1_c2_photo" width="648" height="230" />
              </div>
            </div>
              <h4>加工事例</h4>
            <div class="halfDivs">
              <p>歯車再製作サービスは、壊れて使えなくなった歯車を元に 残された部分から原型を計算し、その計算を元に、再製作するものです。 左側の写真は、専用機の歯車部品で長年の使用による劣化から破損したものを右の写真のように再製作したものです。 メーカーの部品供給期間を過ぎていたり、会社が無くなり新しいものを 購入出来なかったので依頼がありました。皆さんも、歯車が壊れただけで使わなくなった物はないですか?ぜひ、再製作してもう一度現役で機械を使ってあげましょう!と言う、キャッチフレーズにて現在新サービスとして展開中。この他に、現状歯車の減速比を変更する為の再製作も承ります。</p>
              <div><img src="<?php echo get_template_directory_uri(); ?>/img/special/v1_c3_photo01.jpg" alt="v1_c3_photo01" width="185" height="125" /><p>電動工具の減速部分の歯車です。小型で高速、高い減速比、耐久性を要求される歯車です。 SCM415浸炭焼入れ品とSCM435焼入れ焼戻し品との組み合わせが主です。</p></div>
              <div><img src="<?php echo get_template_directory_uri(); ?>/img/special/v1_c3_photo02.jpg" alt="v1_c3_photo02" width="185" height="125" /><p>電動工具の減速部分の歯車です。小型で高速、高い減速比、耐久性を要求される歯車です。SCM415浸炭焼入れ品で直交噛み合わせのため 傘歯車(ベベルギャ)を使用します (傘歯車は当社では外注扱いになります)</p></div>
              <div><img src="<?php echo get_template_directory_uri(); ?>/img/special/v1_c3_photo03.jpg" alt="v1_c3_photo03" width="185" height="125" /><p>軸つきピニオンギャです。 軸にある、キー溝と歯溝との関係位置が厳密に決められているためとても精密な部品となっております。 軸部分はすべて研磨仕上げになっております。 この部品は同じ形でS45CとSUS303の材種違いがあります。</p></div>
              <div><img src="<?php echo get_template_directory_uri(); ?>/img/special/v1_c3_photo04.jpg" alt="v1_c3_photo04" width="185" height="125" /><p>半導体装置の部品です。 外径の大きい物の例で、M1.0Z310外径φ312 SUS304にて製作しています。(歯切りのみ対応商品です)</p></div>
              <div><img src="<?php echo get_template_directory_uri(); ?>/img/special/v1_c3_photo05.jpg" alt="v1_c3_photo05" width="185" height="125" /><p>ラック、ピニオン歯車の組み合わせで、 自動車のステアリングの様な回転を並行移動に代える構造歯車です。 比較的構造が単純ですが使用用途は多岐にわたります。 写真の商品は圧入機のスライド部でSUS304にて製作しています。</p></div>
              <div><img src="<?php echo get_template_directory_uri(); ?>/img/special/v1_c3_photo11.jpg" alt="v1_c3_photo11" width="370" height="125" /><p class="long">ラック、ピニオン歯車の組み合わせで、 自動車のステアリングの様な回転を並行移動に代える構造歯車です。 比較的構造が単純ですが使用用途は多岐にわたります。 写真の商品は圧入機のスライド部でSUS304にて製作しています。</p></div>
              <div><img src="<?php echo get_template_directory_uri(); ?>/img/special/v1_c3_photo12.jpg" alt="v1_c3_photo12" width="370" height="125" /><p class="long">ラック、ピニオン歯車の組み合わせで、 自動車のステアリングの様な回転を並行移動に代える構造歯車です。 比較的構造が単純ですが使用用途は多岐にわたります。 写真の商品は圧入機のスライド部でSUS304にて製作しています。</p></div>
            </div>
          </div>
        </div>
        
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  <!-- end .mainContent --></div>
  </section>
<?php get_footer(); ?>

