<?php
/*
Template Name: member_details
*/
 get_header();
 ?>
<?php
echo "<script src='".home_url()."/search_js/detail.js' ></script>";
?>
<!-- コンテンツ -->
  <section>
  <div id="mainContent" class="other">
    <div class="inner">
      <?php if(have_posts()): while(have_posts()):the_post(); ?>
        <ul class="hierarchy">
          <li><a href="<?php echo home_url(); ?>">TOP</a></li>
          <li><a>会員名簿</a></li>
          <li><a href=<?php echo '"'.get_permalink().'">'.get_the_title(); ?></a></li>
        </ul>
        
        <div class="post">
          <h2><?php the_title(); ?></h2>
          
          <div id="comHeader">
            <div>
              <div id="comName">
                <h3 aid="Company">Company Name</h3>
                <p><a id="company_url" class="hd" href="" target="_blank">WEB サイト</a></p>
              </div>
              <div id="comRead">
                <p id="comment1">Coming Soon</p>
              </div>
            </div>
            <div id="comPhoto">
              <img id="img1" src="<?php echo get_template_directory_uri() ?>/img/content/member_details_no_image1.jpg" alt="photo" class="memberImageLarge" />
            </div>
          </div>
          
          <div id="comDetailsTab">
            <ul>
　　　　　　　<li id="cTab1">会社概要</li>
              <li id="cTab2">事業紹介</li>    
            </ul>
            <div id="cBox1">
              <table class="type01">
                <col width="25%"><col width="25%"><col width="25%"><col width="25%">
                <tr>
                  <td rowspan="11">会社概要</td>
                  <td rowspan="2">会社名<br />（英文）</td>
                  <td colspan="2" aid="Company"></td>
                </tr>
                <tr>
                  <td colspan="2" aid="English"></td>
                </tr>
                <tr>
                  <td>会員代表者名</td>
                  <td>役職名：<span aid="Position" class="no_en"></span></td>
                  <td>氏名：<span aid="Name"></span></td>
                </tr>
                <tr>
                  <td rowspan="4">本社所在地</td>
                  <td colspan="2">〒<span aid="Zip"></span>　<span aid="Address"></span></td>
                </tr>
                <tr>
                  <td>TEL：<span aid="Tel"></span></td>
                  <td>FAX：<span aid="Fax"></span></td>
                </tr>
                <tr>
                  <td colspan="2">E-mail：<span aid="Email"></span></td>
                </tr>
                <tr>
                  <td colspan="2">ホームページ：<span aid="URL"></span></td>
                </tr>
                <tr>
                  <td rowspan="3">営業窓口</td>
                  <td colspan="2"><span aid="Reception_Address" class="no_en"></span></td>
                </tr>
                <tr>
                  <td>TEL:<span aid="Reception_Tel"></span></td>
                  <td>FAX:<span aid="Reception_Fax"></span></td>
                </tr>
                <tr>
                  <td colspan="2">E-mail：<span aid="Reception_E-mail"></span></td>
                </tr>
                <tr>
                  <td>資本金</td>
                  <td><span aid="Shihon"></span>(百万)</td>
                  <td>従業員総数：<span aid="Staff"></span></td>
                </tr>
                <tr>
                  <td rowspan="10">その他事業所</td>
                  <td rowspan="2"><span aid="Branch1"></span></td>
                  <td colspan="2"><span aid="Branch1_Address"></span></td>
                </tr>
                <tr>
                  <td>TEL:<span aid="Branch1_Tel"></span></td>
                  <td>FAX:<span aid="Branch1_Fax"></span></td>
                </tr>
                <tr>
                  <td rowspan="2"><span aid="Branch2"></span></td>
                  <td colspan="2"><span aid="Branch2_Address"></span></td>
                </tr>
                <tr>
                  <td>TEL:<span aid="Branch2_Tel"></span></td>
                  <td>FAX:<span aid="Branch2_Fax"></span></td>
                </tr>
                <tr>
                  <td rowspan="2"><span aid="Branch3"></span></td>
                  <td colspan="2"><span aid="Branch3_Address"></span></td>
                </tr>
                <tr>
                  <td>TEL:<span aid="Branch3_Tel"></span></td>
                  <td>FAX:<span aid="Branch3_Fax"></span></td>
                </tr>
                <tr>
                  <td rowspan="2"><span aid="Branch4"></span></td>
                  <td colspan="2"><span aid="Branch4_Address"></span></td>
                </tr>
                <tr>
                  <td>TEL:<span aid="Branch4_Tel"></span></td>
                  <td>FAX:<span aid="Branch4_Fax"></span></td>
                </tr>
                <tr>
                  <td rowspan="2"><span aid="Branch5"></span></td>
                  <td colspan="2"><span aid="Branch5_Address"></span></td>
                </tr>
                <tr>
                  <td>TEL:<span aid="Branch5_Tel"></span></td>
                  <td>FAX:<span aid="Branch5_Fax"></span></td>
                </tr>
                <tr>
                  <td rowspan="2" colspan="2">ISO9001　取得</td>
                  <td>有無：<span id="ISO9000"></span></td>
                  <td>取得年月日：<span id="ISO9000_Date"></span></td>
                </tr>
                <tr>
                  <td>取得事業所：<span id="ISO9000_Branch"></span></td>
                  <td>認証番号：<span id="ISO9000_No"></span></td>
                </tr>
                <tr>
                  <td rowspan="2" colspan="2">QS9000　取得</td>
                  <td>有無：<span id="QS9000"></span></td>
                  <td>取得年月日：<span id="QS9000_Date"></span></td>
                </tr>
                <tr>
                  <td>取得事業所：<span id="QS9000_Branch"></span></td>
                  <td>認証番号：<span id="QS9000_No"></span></td>
                </tr>
                <tr>
                  <td rowspan="2" colspan="2">ISO14001　取得</td>
                  <td>有無：<span id="ISO14000"></span></td>
                  <td>取得年月日：<span id="ISO14000_Date"></span></td>
                </tr>
                <tr>
                  <td>取得事業所：<span id="ISO14000_Branch"></span></td>
                  <td>認証番号：<span id="ISO14000_No"></span></td>
                </tr>
                <tr>
                  <td colspan="2">その他特記事項<br />（社是・特色など）</td>
                  <td colspan="2" aid="Policy"></td>
                </tr>
                <tr>
                  <td colspan="4"></td>
                </tr>
                <tr>
                  <td rowspan="6">歯車・歯車装置以外の<br />生産品目</td>
                  <td>歯車加工機</td>
                  <td colspan="2" aid="Processor"></td>
                </tr>
                <tr>
                  <td>歯車測定機</td>
                  <td colspan="2" aid="GearMeasuring"></td>
                </tr>
                <tr>
                  <td>マスタギヤ</td>
                  <td colspan="2" aid="GearMastergear"></td>
                </tr>
                <tr>
                  <td>歯切り工具</td>
                  <td colspan="2" aid="Cutting"></td>
                </tr>
                <tr>
                  <td>ソフトウエア</td>
                  <td colspan="2" aid="Softwear"></td>
                </tr>
                <tr>
                  <td>その他</td>
                  <td colspan="2" aid="Other"></td>
                </tr>
              </table>
            </div>
            <div id="cBox2">
              <h3>主要製品・加工内容</h3>
              <div>
                <img id="img2" src="<?php echo get_template_directory_uri() ?>/img/content/member_details_no_image2.jpg" alt="photo" class="memberImageSmall right" />
                <p id="comment2"></p>
              </div>
              <h3>技術的特長</h3>
              <div>
                <img id="img3" src="<?php echo get_template_directory_uri() ?>/img/content/member_details_no_image2.jpg" alt="photo" class="memberImageSmall right" />
                <p id="comment3"></p>
              </div>
              <div>
                <img id="img4" src="<?php echo get_template_directory_uri() ?>/img/content/member_details_no_image2.jpg" alt="photo" class="memberImageSmall right" />
                <p id="comment4"></p>
              </div>
            </div>
          </div>
          
        </div>     

        
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  <!-- end .mainContent --></div>
  </section>
<?php get_footer(); ?>


