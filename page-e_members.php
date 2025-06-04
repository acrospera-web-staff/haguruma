<?php
/*
Template Name: english_members
*/
get_header('english'); ?>
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
          <p>Click square according to Products in which you are interested so you can find out Manufacturers. </p>
          <p>&lt; Product: Size of Gears &gt;</p>
          <ul>
            <li>L : Large	: Module is more than 12, or Pitch Circle diameter is more than 1,250mm.</li>
            <li>M	: Medium	: Module is less than 12, or Pitch circle diameter is more than 100mm and less than 1,250mm.</li>
            <li>S	: Small	: Module is less than 2, or pitch circle diameter is more than 20mm and less than 100mm.</li>
            <li>ES: Extremely Small	: Module is less than 1, or pitch circle diameter is less than 20mm</li>
          </ul>
        </div>
<form action="/find_json.php" method="post" id="aform" >
<input type="hidden" name="order" value="e" />
<!--
<input TYPE="submit" VALUE="検索"> 
-->
        <div id="search">
          <ul>
            <li id="sTab1">District</li>
            <li id="sTab2">Type of Gear</li>
            <li id="sTab3">Products</li>
            <li id="sTab4">Other products</li>
          </ul>
          <div id="sBox1">
            <ul>
              <li><label for="area1"><span>Tohoku / Hokkaido area</span></label><input id="area1" name="area" type="checkbox" value="1" /></li>
              <li><label for="area2"><span>Kanto area</span></label><input id="area2" name="area" type="checkbox" value="2" /></li>
              <li><label for="area3"><span>Tokai & Hokuriku area</span></label><input id="area3" name="area" type="checkbox" value="3" /></li>
              <li><label for="area4"><span>Kansai area</span></label><input id="area4" name="area" type="checkbox" value="4" /></li>
              <li><label for="area5"><span>Chugoku / shikoku area</span></label><input id="area5" name="area" type="checkbox" value="5" /></li>
              <li><label for="area6"><span>Kyushu / Okinawa area</span></label><input id="area6" name="area" type="checkbox" value="6" /></li>
            </ul>
          </div>
          <div id="sBox2">
            <ul>
              <li><span>External gear</span>
<label for="soto_dai">L </label><input id="soto_dai" name="soto_dai" type="checkbox" value="ON"  />
<label for="soto_chu">M </label><input id="soto_chu" name="soto_cyu" type="checkbox" value="ON"  />
<label for="soto_syo">S </label><input id="soto_syo" name="soto_syo" type="checkbox" value="ON"  />
<label for="soto_goku">ES </label><input id="soto_goku" name="soto_goku" type="checkbox" value="ON"  /></li>
              <li><span>Internal gear</span>
<label for="uchi_dai">L </label><input id="uchi_dai" name="uchi_dai" type="checkbox" value="ON" />
<label for="uchi_chu">M </label><input id="uchi_chu" name="uchi_cyu" type="checkbox" value="ON" />
<label for="uchi_syo">S </label><input id="uchi_syo" name="uchi_syo" type="checkbox" value="ON" />
<label for="uchi_goku">ES </label><input id="uchi_goku" name="uchi_goku" type="checkbox" value="ON" /></li>
              <li><span>Bevel gear</span>
<label for="bebe_dai">L </label><input id="bebe_dai" name="bebe_dai" type="checkbox" value="ON" />
<label for="bebe_chu">M </label><input id="bebe_chu" name="bebe_cyu" type="checkbox" value="ON" />
<label for="bebe_syo">S </label><input id="bebe_syo" name="bebe_syo" type="checkbox" value="ON" />
<label for="bebe_goku">ES </label><input id="bebe_goku" name="bebe_goku" type="checkbox" value="ON" /></li>
              <li><span>Worm</span>
<label for="worm_dai">L </label><input id="worm_dai" name="worm_dai" type="checkbox" value="ON" />
<label for="worm_chu">M </label><input id="worm_chu" name="worm_cyu" type="checkbox" value="ON" />
<label for="worm_syo">S </label><input id="worm_syo" name="worm_syo" type="checkbox" value="ON" />
<label for="worm_goku">ES </label><input id="worm_goku" name="worm_goku" type="checkbox" value="ON" /></li>
              <li><span>Rack</span>
<label for="rack_dai">L </label><input id="rack_dai" name="rack_dai" type="checkbox" value="ON" />
<label for="rack_chu">M </label><input id="rack_chu" name="rack_cyu" type="checkbox" value="ON" />
<label for="rack_syo">S </label><input id="rack_syo" name="rack_syo" type="checkbox" value="ON" />
<label for="rack_goku">ES </label><input id="rack_goku" name="rack_goku" type="checkbox" value="ON" /></li>
            </ul>
          </div>
          <div id="sBox3">
            <ul>
              <li><label for="gensoku">General use transmission ： </label><input id="gensoku" name="gensoku" type="checkbox" value="ON" /></li>
              <li><label for="geared">Geared motor ： </label><input id="geared" name="geared" type="checkbox" value="ON" /></li>
              <li><label for="wormgen">Worm  gear transmission ： </label><input id="wormgen" name="wormgen" type="checkbox" value="ON" /></li>
              <li><label for="yuuseizougen">Planetary transmission ： </label><input id="yuuseizougen" name="yuuseizougen" type="checkbox" value="ON" /></li>
              <li><label for="sonotahaguruma">The others ： </label><input id="sonotahaguruma" name="sonotahaguruma" type="checkbox" value="ON" /></li>
            </ul>
          </div>
          <div id="sBox4">
            <ul>
              <li><label for="kakou">Gear cutting machine ： </label><input id="kakou" name="kakou" type="checkbox" value="ON" /></li>
              <li><label for="sokutei">Gear measuring machine ： </label><input id="sokutei" name="sokutei" type="checkbox" value="ON" /></li>
              <li><label for="masuta">Master gear ： </label><input id="masuta" name="masuta" type="checkbox" value="ON" /></li>
              <li><label for="kougu">Gear cutting tools ： </label><input id="kougu" name="kougu" type="checkbox" value="ON" /></li>
              <li><label for="soft">Software ： </label><input id="soft" name="soft" type="checkbox" value="ON" /></li>
              <li><label for="sonota">The others ： </label><input id="sonota" name="sonota" type="checkbox" value="ON" /></li>
            </ul>
          </div>
          <div class="btn_container" id="btnSearch"><img src="<?php echo get_template_directory_uri(); ?>/img/content/member_btn_search_e.jpg" alt="検索" width="128" height="33" /></div>
        </div>
</form>
        <table id="searchResult" class="type01 width925px">
          <col width="3%"><col width="35%"><col width="34%"><col width="14%"><col width="14%">
          <tr>
            <th></th>
            <th>Company<!-- 会社名 --></th>
            <th>Address<!-- 住　　所 --></th>
            <th>TEL No.<!-- 連絡先 --></th>
            <th>Web Site<!-- HP --></th>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><a href="">Web Site</a></td>
          </tr>

        </table>
        <div class="btn_container" id="btnBack"><img src="<?php echo get_template_directory_uri(); ?>/img/content/member_btn_back_e.jpg" alt="戻る" width="128" height="33" /></div>
          
          

        
      <?php endwhile; endif; ?>
    </div>
  <!-- end .mainContent --></div>
  </section>
<?php get_footer('english'); ?>