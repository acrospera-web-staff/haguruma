<?php/* get_header(); ?>
<!-- コンテンツ -->
  <section>
  <div id="mainContent" class="other members">
    <div class="inner">
      <?php if(have_posts()): while(have_posts()):the_post(); ?>
        <ul class="hierarchy">
          <li><a href="<?php echo home_url(); ?>">TOP</a></li>
          <?php
          
          ?>
          <li><a href=<?php echo '"'.get_permalink().'">'.get_the_title(); ?></a></li>
        </ul>
        <h2><?php the_title(); ?></h2>
        <div id="searchNote">
          <p>下記の検索項目の中から、検索したい製品項目にチェックし検索ボタンを押すと、取扱企業が表示されます。</p>
          <p>生産品目別：　単品歯車の大きさ（加工範囲）</p>
          <ul>
            <li>大：　モジュール12以上、またはピッチ円直径　1,250mm以上</li>
            <li>中：　モジュール12未満、またはピッチ円直径　100mm以上、1,250mm未満</li>
            <li>小：　モジュール 2未満、またはピッチ円直径    20mm以上、100mm未満</li>
            <li>極小：モジュール1未満、またはピッチ円直径    20mm未満</li>
          </ul>
        </div>
<form action="/find_json.php" method="post" id="aform" >
<!--
<input TYPE="submit" VALUE="検索"> 
-->
        <div id="search">
          <ul>
            <li id="sTab1">地方／都道府県</li>
            <li id="sTab2">歯車の種類</li>
            <li id="sTab3">製品名</li>
            <li id="sTab4">その他</li>
          </ul>
          <div id="sBox1">
            <ul>
              <li><label for="area1">東北・北海道地区 ： </label><input id="area1" name="area" type="checkbox" value="1" /></li>
              <li><label for="area2">関東地区　　　　 ： </label><input id="area2" name="area" type="checkbox" value="2" /></li>
              <li><label for="area3">東海・北陸地区　 ： </label><input id="area3" name="area" type="checkbox" value="3" /></li>
              <li><label for="area4">関西地区　　　　 ： </label><input id="area4" name="area" type="checkbox" value="4" /></li>
              <li><label for="area5">中国・四国地区　 ： </label><input id="area5" name="area" type="checkbox" value="5" /></li>
              <li><label for="area6">九州・沖縄地区　 ： </label><input id="area6" name="area" type="checkbox" value="6" /></li>
            </ul>
          </div>
          <div id="sBox2">
            <ul>
              <li>外歯車　 ：　
<label for="soto_dai">大 </label><input id="soto_dai" name="soto_dai" type="checkbox" value="ON"  />
<label for="soto_chu">中 </label><input id="soto_chu" name="soto_cyu" type="checkbox" value="ON"  />
<label for="soto_syo">小 </label><input id="soto_syo" name="soto_syo" type="checkbox" value="ON"  />
<label for="soto_goku">極小 </label><input id="soto_goku" name="soto_goku" type="checkbox" value="ON"  /></li>
              <li>内歯車　 ：　
<label for="uchi_dai">大 </label><input id="uchi_dai" name="uchi_dai" type="checkbox" value="ON" />
<label for="uchi_chu">中 </label><input id="uchi_chu" name="uchi_cyu" type="checkbox" value="ON" />
<label for="uchi_syo">小 </label><input id="uchi_syo" name="uchi_syo" type="checkbox" value="ON" />
<label for="uchi_goku">極小 </label><input id="uchi_goku" name="uchi_goku" type="checkbox" value="ON" /></li>
              <li>べベル　 ：　
<label for="bebe_dai">大 </label><input id="bebe_dai" name="bebe_dai" type="checkbox" value="ON" />
<label for="bebe_chu">中 </label><input id="bebe_chu" name="bebe_cyu" type="checkbox" value="ON" />
<label for="bebe_syo">小 </label><input id="bebe_syo" name="bebe_syo" type="checkbox" value="ON" />
<label for="bebe_goku">極小 </label><input id="bebe_goku" name="bebe_goku" type="checkbox" value="ON" /></li>
              <li>ウォーム ：　
<label for="worm_dai">大 </label><input id="worm_dai" name="worm_dai" type="checkbox" value="ON" />
<label for="worm_chu">中 </label><input id="worm_chu" name="worm_cyu" type="checkbox" value="ON" />
<label for="worm_syo">小 </label><input id="worm_syo" name="worm_syo" type="checkbox" value="ON" />
<label for="worm_goku">極小 </label><input id="worm_goku" name="worm_goku" type="checkbox" value="ON" /></li>
              <li>ラック　 ：　
<label for="rack_dai">大 </label><input id="rack_dai" name="rack_dai" type="checkbox" value="ON" />
<label for="rack_chu">中 </label><input id="rack_chu" name="rack_cyu" type="checkbox" value="ON" />
<label for="rack_syo">小 </label><input id="rack_syo" name="rack_syo" type="checkbox" value="ON" />
<label for="rack_goku">極小 </label><input id="rack_goku" name="rack_goku" type="checkbox" value="ON" /></li>
            </ul>
          </div>
          <div id="sBox3">
            <ul>
              <li><label for="gensoku">一般増・減速機 ： </label><input id="gensoku" name="gensoku" type="checkbox" value="ON" /></li>
              <li><label for="geared">ギヤードモータ ： </label><input id="geared" name="geared" type="checkbox" value="ON" /></li>
              <li><label for="wormgen">ウォーム減速機 ： </label><input id="wormgen" name="wormgen" type="checkbox" value="ON" /></li>
              <li><label for="yuuseizougen">遊星歯車増・減速機 ： </label><input id="yuuseizougen" name="yuuseizougen" type="checkbox" value="ON" /></li>
              <li><label for="sonotahaguruma">その他の歯車装置 ： </label><input id="sonotahaguruma" name="sonotahaguruma" type="checkbox" value="ON" /></li>
            </ul>
          </div>
          <div id="sBox4">
            <ul>
              <li><label for="kakou">歯車加工機 ： </label><input id="kakou" name="kakou" type="checkbox" value="ON" /></li>
              <li><label for="sokutei">歯車測定機 ： </label><input id="sokutei" name="sokutei" type="checkbox" value="ON" /></li>
              <li><label for="masuta">マスタギヤ ： </label><input id="masuta" name="masuta" type="checkbox" value="ON" /></li>
              <li><label for="kougu">歯切り工具 ： </label><input id="kougu" name="kougu" type="checkbox" value="ON" /></li>
              <li><label for="soft">ソフトウェア ： </label><input id="soft" name="soft" type="checkbox" value="ON" /></li>
              <li><label for="sonota">その他 ： </label><input id="sonota" name="sonota" type="checkbox" value="ON" /></li>
            </ul>
          </div>
          <div class="btn_container" id="btnSearch"><img src="<?php echo get_template_directory_uri(); ?>/img/content/member_btn_search.jpg" alt="検索" width="128" height="33" /></div>
        </div>
</form>
        <table id="searchResult" class="type01 width925px">
          <col width="7%"><col width="20%"><col width="28%"><col width="20%"><col width="13%"><col width="13%">
          <tr>
            <th></th>
            <th>会社名</th>
            <th>住　　所</th>
            <th>連絡先</th>
            <th>詳細</th>
            <th>HP</th>
          </tr>
          <tr>
            <td>ア</td>
            <td>（株）アサデン・ギヤー</td>
            <td>福岡県筑後市熊野101-12</td>
            <td>0942-52-7711</td>
            <td><a href="">詳細</a></td>
            <td><a href="">自社HP</a></td>
          </tr>

        </table>
        <div class="btn_container" id="btnBack"><img src="<?php echo get_template_directory_uri(); ?>/img/content/member_btn_back.jpg" alt="戻る" width="128" height="33" /></div>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  <!-- end .mainContent --></div>
  </section>
<?php get_footer(); */?>

