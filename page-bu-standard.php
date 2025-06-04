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
            <ol class="disc">
              <li><a href="#standards-1">日本歯車工業会規格（ＪＧＭＡ）</a></li>
              <li><a href="#standards-2">日本工業規格（ＪＩＳ）</a></li>
              <li><a href="#standards-3">歯車関係ＩＳＯ規格</a></li>
            </ol>
            <p><a href="<?php echo get_template_directory_uri(); ?>/book">その他の発行書籍</a></p>
          </div>
<div id="standards-1">
  <h3>日本歯車工業会規格（ＪＧＭＡ）</h3>
  <h4>ＪＧＭＡ規格</h4>
  <p>
  （　　）内は会員価格
  </p>
  <p>
  頒布価格(税抜)<br />
  無印　4,000円（2,500円）　(*)印　1,200円（700円）　(**)印　4,500円（3,000円）
  </p>
  
  <table class="type01 width925px">
    <col width="250">
    <col width="525">
    <col width="150">
      <tr>
        <th>規格番号</th>
        <th>規格名</th>
        <th>制定年</th>
      </tr>
      <tr>
        <td>JGMA 151-01 (*)</td>
        <td>鋳造歯車および溶接構造歯車の寸法</td>
        <td>1973(S48)</td>
      </tr>
      <tr>
        <td>JGMA 114-02 (*)</td>
        <td>ISO規格に準拠　平歯車及びはすば歯車の軸の平行精度</td>
        <td>1983(S58)</td>
      </tr>
      <tr>
        <td>JGMA 114-02A (*)</td>
        <td>小モジュール平歯車及びはすば歯車の軸の平行精度</td>
        <td>1985(S60)</td>
      </tr>
      <tr>
        <td>JGMA 001-01 (*)</td>
        <td>歯車略号</td>
        <td>1986(S61)</td>
      </tr>
      <tr>
        <td>JGMA 511-01 (*)</td>
        <td>ISO規格に準拠　円筒歯車の購入仕様</td>
        <td>1986(S61)</td>
      </tr>
      <tr>
        <td>JGMA 521-01 (*)</td>
        <td>ISO規格に準拠　すぐばかさ歯車の購入仕様</td>
        <td>1986(S61)</td>
      </tr>
      <tr>
        <td>JGMA 405-01</td>
        <td>円筒ウォームギヤの強さ計算式</td>
        <td>1978(S53)</td>
      </tr>
      <tr>
        <td>JGMA 611-01</td>
        <td>ISO規格に準拠　円筒歯車の転位方式</td>
        <td>1987(S62)</td>
      </tr>
      <tr>
        <td>JGMA 6101-02</td>
        <td>平歯車及びはすば歯車の曲げ強さ計算式</td>
        <td>2007(H19)</td>
      </tr>
      <tr>
        <td>JGMA 6102-02</td>
        <td>平歯車及びはすば歯車の歯面強さ計算式</td>
        <td>2009(H21)</td>
      </tr>
      <tr>
        <td>JGMA 6201-01</td>
        <td>かさ歯車の曲げ強さ計算式</td>
        <td>2012(H24)</td>
      </tr>
      <tr>
        <td>JGMA 6202-01</td>
        <td>かさ歯車の歯面強さ計算式</td>
        <td>2013(H25)</td>
      </tr>
      <tr>
        <td>JGMA 8002-01</td>
        <td>ISO規格に準拠　歯車装置検査規定「歯車装置の機械振動測定方法」</td>
        <td>1991(H3)</td>
      </tr>
      <tr>
        <td>JGMA 2001-01</td>
        <td>運動制御用歯車装置の特性及び精度</td>
        <td>1993(H5)</td>
      </tr>
      <tr>
        <td>JGMA 4101-01</td>
        <td>円筒歯車の強さ試験方法</td>
        <td>1994(H6)</td>
      </tr>
      <tr>
        <td>JGMA 4102-01</td>
        <td>円筒歯車の強さ試験の判定と評価方法</td>
        <td>1995(H7)</td>
      </tr>
      <tr>
        <td>JGMA 3101-01</td>
        <td>円筒歯車の歯切り時間の概算</td>
        <td>1996(H8)</td>
      </tr>
      <tr>
        <td>JGMA 3102-01</td>
        <td>円筒歯車の歯面仕上げ時間の概算</td>
        <td>1997(H9)</td>
      </tr>
      <tr>
        <td>JGMA 3001-01</td>
        <td>バリ取り標準及び打痕防止</td>
        <td>1998(H10)</td>
      </tr>
      <tr>
        <td>JGMA 1001-01</td>
        <td>歯車の歯面粗さ標準及び測定方法</td>
        <td>1999(H11)</td>
      </tr>
      <tr>
        <td>JGMA 1101-01</td>
        <td>平歯車及びはすば歯車の中心距離の許容値</td>
        <td>2000(H12)</td>
      </tr>
      <tr>
        <td>JGMA 1102-01</td>
        <td>平歯車及びはすば歯車の軸の平行精度</td>
        <td>2000(H12)</td>
      </tr>
      <tr>
        <td>JGMA/TR0001</td>
        <td>新旧JIS歯車精度の規格値対比表</td>
        <td>2000(H12)</td>
      </tr>
      <tr>
        <td>JGMA/TR0003</td>
        <td>かさ歯車の強さ簡易計算式</td>
        <td>2001(H13)</td>
      </tr>
      <tr>
        <td>JGMA 1002-01</td>
        <td>歯車の歯当たり</td>
        <td>2003(H15)</td>
      </tr>
      <tr>
        <td>JGMA 1103-01（**）</td>
        <td>歯車精度－平歯車及びはすば歯車のバックラッシ並びに歯厚</td>
        <td>2003(H15)</td>
      </tr>
      <tr>
        <td>JGMA 1104-01</td>
        <td>検査用親円筒歯車規格</td>
        <td>2010(H2</td>
      </tr>
  </table>
  
  <h4>その他の発行書籍</h4>
  <table class="type02 width700px">
    <col width="350">
    <col width="350">
      <tr>
        <th>書籍名</th>
        <th>頒布価格(税抜） ( ) 内はJGMA会員価格</th>
      </tr>
      <tr>
        <td>新歯車便覧</td>
        <td>7,000円　（5,000円）</td>
      </tr>
      <tr>
        <td>★歯車規格集</td>
        <td>7,000円　（5,000円）</td>
      </tr>
      <tr>
        <td>歯車技術の半世紀</td>
        <td>4,000円　（2,800円）</td>
      </tr>
      <tr>
        <td>ホブによるドライカット</td>
        <td>7,000円　（5,000円）</td>
      </tr>
      <tr>
        <td>ドライカット</td>
        <td>7,000円　（5,000円）</td>
      </tr>
  </table>
  <h4>歯車規格集(以下17規格)</h4>
  <table class="type01 width925px">
    <col width="300">
    <col width="625">
      <tr>
        <td>旧BJIS 1702</td>
        <td>平歯車およびハスバ歯車の精度</td>
      </tr>
      <tr>
        <td>旧BJIS 1703</td>
        <td>平歯車およびはすば歯車のバックラッシ</td>
      </tr>
      <tr>
        <td>JGMA113-01</td>
        <td>平歯車およびハスバ歯車の中心距離の公差</td>
      </tr>
      <tr>
        <td>JGMA114-01</td>
        <td>平歯車およびハスバ歯車の軸の平行度</td>
      </tr>
      <tr>
        <td>JGMA115-01</td>
        <td>平歯車およびハスバ歯車の歯厚の寸法差</td>
      </tr>
      <tr>
        <td>JGMA117-02</td>
        <td>平歯車の寸法</td>
      </tr>
      <tr>
        <td>JGMA118-01</td>
        <td>ハスバ歯車の寸法</td>
      </tr>
      <tr>
        <td>JGMA1109-01</td>
        <td>一般用小モジュール平歯車の形状及び寸法</td>
      </tr>
      <tr>
        <td>JGMA121-02</td>
        <td>カサ歯車の精度</td>
      </tr>
      <tr>
        <td>JGMA122-01</td>
        <td>カサ歯車のバックラッシ</td>
      </tr>
      <tr>
        <td>JGMA131-02</td>
        <td>円筒ウォームの寸法</td>
      </tr>
      <tr>
        <td>JGMA132-01</td>
        <td>円筒ウォームギヤの寸法</td>
      </tr>
      <tr>
        <td>JGMA211-01</td>
        <td>１段円筒歯車減速機の寸法</td>
      </tr>
      <tr>
        <td>JGMA212-01</td>
        <td>２段および３段円筒歯車減速機の寸法</td>
      </tr>
      <tr>
        <td>JGMA221-01</td>
        <td>１段かさ歯車、２段かさ-円筒歯車および３段かさ-円筒歯車減速機の寸法</td>
      </tr>
      <tr>
        <td>JGMA231-01</td>
        <td>１段円筒ウォーム減速機の寸法</td>
      </tr>
      <tr>
        <td>JGMA301-01</td>
        <td>歯車の歯当たり基準</td>
      </tr>
  </table>
</div>
<div id="standards-2">
  <h3>日本工業規格（ＪＩＳ）</h3>
  <p>ご購入・お問い合わせ先：<a href="http://www.jsa.or.jp/top.asp" target="_blank">（一財）日本規格協会</a></p>
  <h4>ＪＩＳ一覧</h4>
  <table class="type01 width925px">
    <col width="300">
    <col width="625">
      <tr>
        <th>規格番号</th>
        <th>名　　称</th>
      </tr>
      <tr>
        <td>JIS B 0003:2012</td>
        <td>歯車製図</td>
      </tr>
      <tr>
        <td>JIS B 0102:1999</td>
        <td>歯車用語－幾何学的定義</td>
      </tr>
      <tr>
        <td>JIS B 0121:2012</td>
        <td>歯車記号－幾何学的データの記号</td>
      </tr>
      <tr>
        <td>JIS B 0160:1999</td>
        <td>歯車－歯車の摩耗及び損傷－用語</td>
      </tr>
      <tr>
        <td>JIS B 0174:1991</td>
        <td>歯切工具用語</td>
      </tr>
      <tr>
        <td>JIS B 1453:1988</td>
        <td>歯車形軸継手</td>
      </tr>
      <tr>
        <td>JIS B 1701-1:2012</td>
        <td>円筒歯車－インボリュート歯車歯形　第１部　標準基準ラック歯形</td>
      </tr>
      <tr>
        <td>JIS B 1701-2:1999</td>
        <td>円筒歯車－インボリュート歯車歯形　第２部　モジュール</td>
      </tr>
      <tr>
        <td>JIS B 1702-1:1998</td>
        <td>円筒歯車－精度等級　第１部：歯車の歯面に関する誤差の定義及び許容値</td>
      </tr>
      <tr>
        <td>JIS B 1702-2:1998</td>
        <td>円筒歯車－精度等級　第２部：両歯面かみ合い誤差及び歯溝の振れの定義並びに精度許容値</td>
      </tr>
      <tr>
        <td>JIS B 1704:2010</td>
        <td>かさ歯車の精度</td>
      </tr>
      <tr>
        <td>JIS B 1705:1973</td>
        <td>かさ歯車のバックラッシ</td>
      </tr>
      <tr>
        <td>JIS B 1706-1:1999</td>
        <td>すぐばかさ歯車－第１部：基準ラック</td>
      </tr>
      <tr>
        <td>JIS B 1706-2:1999</td>
        <td>すぐばかさ歯車－第２部：モジュール及びダイヤメトラルピッチ</td>
      </tr>
      <tr>
        <td>JIS B 1723:1977</td>
        <td>円筒ウオームギヤの寸法</td>
      </tr>
      <tr>
        <td>JIS B 1751:1976</td>
        <td>検査用親円筒歯車</td>
      </tr>
      <tr>
        <td>JIS B 1753:1999</td>
        <td>歯車装置の受入検査－歯車装置から放射される空気伝ぱ音のパワーレベルの決定</td>
      </tr>
      <tr>
        <td>JIS B 1754:1998</td>
        <td>歯車装置の受入検査－第２部：歯車装置の機械振動の測定方法及び振動等級の決定</td>
      </tr>
      <tr>
        <td>JIS B 1755:1999</td>
        <td>平歯車及びはすば歯車の負荷容量計算方法</td>
      </tr>
      <tr>
        <td>JIS B 1756:2008</td>
        <td>歯車-研削後の表面焼戻しエッチング検査法</td>
      </tr>
      <tr>
        <td>JIS B 1757-1: 2012</td>
        <td>歯車測定機の評価方法－第1部：歯車形の基準器を用いる方法</td>
      </tr>
      <tr>
        <td>JIS B 1757-2: 2010</td>
        <td>歯車測定機の評価方法－第２部：球基準器又は円筒基準器を用いた歯形測定</td>
      </tr>
      <tr>
        <td>JIS B 4350:1991</td>
        <td>歯切工具－歯形及び寸法</td>
      </tr>
      <tr>
        <td>JIS B 4351:1985</td>
        <td>すぐば傘歯車用Ｇ形刃物</td>
      </tr>
      <tr>
        <td>JIS B 4354:1998</td>
        <td>歯車用ホブ－第１部：むくホブの形状寸法</td>
      </tr>
      <tr>
        <td>JIS B 4355:1998</td>
        <td>歯車用ホブ－第２部：歯車用ホブの精度</td>
      </tr>
      <tr>
        <td>JIS B 4356:1996</td>
        <td>ピニオンカッタ</td>
      </tr>
      <tr>
        <td>JIS B 4357:1988</td>
        <td>丸形シェービングカッタ</td>
      </tr>
  </table>
  <div class="center"><a href="<?php echo get_template_directory_uri(); ?>/pdf/Standard_ISO.pdf" target="_blank">PDFファイル <img src="<?php echo get_template_directory_uri(); ?>/img/content/icon_pdf.jpg" alt="icon_pdf" width="27" height="30" style="vertical-align: bottom;" /></a></div>
</div>
<div id="standards-3">
  <h3>歯車関係ＩＳＯ規格</h3>
  <p>ご購入・お問い合わせ先：<a href="http://www.jsa.or.jp/top.asp" target="_blank">（一財）日本規格協会</a></p>
  <table class="type01 width925px">
    <col width="300">
    <col width="625">
      <tr>
        <th>規格No.</th>
        <th>名　　　称</th>
      </tr>
      <tr>
        <td>ISO 53:1998</td>
        <td>Cylindrical gears for general and heavy engineering - Standard basic rack tooth profile </td>
      </tr>
      <tr>
        <td>ISO 54:1996　</td>
        <td>Cylindrical gears for general engineering and for heavy engineering - Modules</td>
      </tr>
      <tr>
        <td>ISO 677:1976</td>
        <td>Straight bevel gears for general engineering and heavy engineering - Basic rack</td>
      </tr>
      <tr>
        <td>ISO 678:1976　</td>
        <td>Straight bevel gears for general engineering and heavy engineering - Modules and diametral pitches</td>
      </tr>
      <tr>
        <td>ISO 701:1998</td>
        <td>International gear notation - Symbols for geometrical data</td>
      </tr>
      <tr>
        <td>ISO 1122-1:1998</td>
        <td>Vocabulary of gear terms -　Part 1: Definitions related to geometry</td>
      </tr>
      <tr>
        <td colspan="2">ISO 1122-1:1998/Cor 1:1999</td>
      </tr>
      <tr>
        <td>ISO 1122-2:1999</td>
        <td>Vocabulary of gear terms -　Part 2: Definitions related to worm gear geometry</td>
      </tr>
      <tr>
        <td>ISO 1328-1:1995</td>
        <td>Cylindrical gears - ISO system of accuracy - Part 1: Definitions and allowable values of deviations　relevant to corresponding flanks of gear teeth</td>
      </tr>
      <tr>
        <td>ISO 1328-2:1997</td>
        <td>Cylindrical gears - ISO system of accuracy - Part 2:　Definitions and allowable values of deviations relevant to radial composite deviations and runout information </td>
      </tr>
      <tr>
        <td>ISO 1340:1976</td>
        <td>Cylindrical gears - Information to be given to the manufacture by the purchaser in order to obtain the gear required</td>
      </tr>
      <tr>
        <td>ISO 1341:1976</td>
        <td>Straight bevel gears - Information to be given to the manufacturer by the purchaser in order to obtain the gear required</td>
      </tr>
      <tr>
        <td>ISO 2490:2007　</td>
        <td>Single-start solid (monobloc) gear hobs with tenon drive or axial keyway,1 to 40 module - Nominal dimensions</td>
      </tr>
      <tr>
        <td>ISO 4468:2009</td>
        <td>Gear hobs -Single-start- Accuracy requirements</td>
      </tr>
      <tr>
        <td>ISO 6336-1:2006</td>
        <td>Calculation of load capacity of spur and helical gears -　 Part 1: Basic principles, Introduction and general　influence factors</td>
      </tr>
      <tr>
        <td colspan="2">ISO 6336-1:2006/Cor 1:2008</td>
      </tr>
      <tr>
        <td>ISO 6336-2:2006</td>
        <td>Calculation of load capacity of spur and helical gears -　 Part 2: Calculation of surface durability (pitting).</td>
      </tr>
      <tr>
        <td colspan="2">ISO 6336-2:2006/Cor 1:2008</td>
      </tr>
      <tr>
        <td>ISO 6336-3:2006　</td>
        <td>Calculation of load capacity of spur and helical gears -　 Part 3: Calculation of tooth bending strength</td>
      </tr>
      <tr>
        <td colspan="2">ISO 6336-3:2006/Cor 1:2008　</td>
      </tr>
      <tr>
        <td>ISO 6336-5:2003　</td>
        <td>Calculation of load capacity of spur and helical gears -　 Part 5: Strength and quality of materials</td>
      </tr>
      <tr>
        <td>ISO 6336-6:2006　</td>
        <td>Calculation of load capacity of spur and helical gears -　 Part 6: Calculation of service life under variable load</td>
      </tr>
      <tr>
        <td colspan="2">ISO 6336-6:2006/Cor 1:2007　</td>
      </tr>
      <tr>
        <td>ISO 8579-1:2002　 </td>
        <td>Acceptance code for gears - Part 1: Test code for airborne sound </td>
      </tr>
      <tr>
        <td>ISO 8579-2:1993　</td>
        <td>Acceptance code for gears -　Part 2: Determination of mechanical vibrations of gear units during acceptance testing</td>
      </tr>
      <tr>
        <td>ISO 9083:2001　</td>
        <td>Calculation of load capacity of spur and helical gears - Application to marine gears</td>
      </tr>
      <tr>
        <td>ISO 9085:2002　</td>
        <td>Calculation of load capacity of spur and helical gears - Application for industrial gears</td>
      </tr>
      <tr>
        <td>ISO/TR 10064-1:1992</td>
        <td>Code of inspection practice - Part 1: Inspection of corresponding flanks of gear teeth</td>
      </tr>
      <tr>
        <td colspan="2">ISO/TR 10064-1:1992/Cor 1:2006</td>
      </tr>
      <tr>
        <td>ISO/TR 10064-2:1996</td>
        <td>Code of inspection practice-Part 2: Inspection related to radial composite deviations,　runout, tooth　thickness and backlash</td>
      </tr>
      <tr>
        <td colspan="2">ISO/TR 10064-2:1996/Cor 1:2001</td>
      </tr>
      <tr>
        <td colspan="2">ISO/TR 10064-2:1996/Cor 2:2006</td>
      </tr>
      <tr>
        <td>ISO/TR 10064-3:1996</td>
        <td>Code of inspection practice-Part 3: Recommendations relative to gear blanks, shaft center distance and parallelism of axes</td>
      </tr>
      <tr>
        <td colspan="2">ISO/TR 10064-3:1996/Cor 1:2006</td>
      </tr>
      <tr>
        <td>ISO/TR 10064-4:1998</td>
        <td>Code of inspection practice - Part 4: Recommendations relative to surface texture and　tooth contact pattern checking</td>
      </tr>
      <tr>
        <td>ISO/TR 10064-5:2005</td>
        <td>Code of inspection practice - Part 5: Recommendations relative to evaluation of gear measuring instruments</td>
      </tr>
      <tr>
        <td colspan="2">ISO/TR 10064-5:2005/Cor 1:2006</td>
      </tr>
      <tr>
        <td>ISO/TR 10064-6:2009</td>
        <td>Code of inspection practice - Part 6: Bevel gear measurement methods</td>
      </tr>
      <tr>
        <td>ISO 10300-1:2001</td>
        <td>Calculation of load capacity of bevel gears - Part 1: Introduction and general influence factors</td>
      </tr>
      <tr>
        <td>ISO 10300-2:2001</td>
        <td>Calculation of load capacity of bevel gears - Part 2: Calculation of surface durability (pitting)</td>
      </tr>
      <tr>
        <td>ISO 10300-3:2001</td>
        <td>Calculation of load capacity of bevel gears - Part 3: Calculation of tooth root strength</td>
      </tr>
      <tr>
        <td>ISO 10825:1995</td>
        <td>Gears - Wear and damage to gear teeth - Terminology</td>
      </tr>
      <tr>
        <td>ISO/TR 10828:1997</td>
        <td>Worm gears - Geometry of worm profiles</td>
      </tr>
      <tr>
        <td colspan="2">ISO/TR 10828:1997/Cor 1:1998</td>
      </tr>
      <tr>
        <td>ISO/TR 13593:1999　　</td>
        <td>Enclosed gear drives for industrial applications</td>
      </tr>
      <tr>
        <td colspan="2">ISO/TR 13593:1999/Cor 1:2005　　</td>
      </tr>
      <tr>
        <td>ISO 13691:2001</td>
        <td>Petroleum and natural gas industries - High-speed special-purpose gear units</td>
      </tr>
      <tr>
        <td>ISO/TR 13989-1:2000</td>
        <td>Calculation of scuffing load capacity of cylindrical, bevel and hypoid gears - Part 1: Flash temperature method</td>
      </tr>
      <tr>
        <td>ISO/TR 13989-2:2000</td>
        <td>Calculation of scuffing load capacity of cylindrical, bevel　and hypoid gears - Part 2: Integral temperature method</td>
      </tr>
      <tr>
        <td>ISO 14104:1995</td>
        <td>Gears - Surface temper etch inspection after grinding</td>
      </tr>
      <tr>
        <td>ISO/TR 14179-1:2001</td>
        <td>Gears - Thermal capacity - Part 1: Rating gear drives with thermal equilibrium at 95℃ sump temperature</td>
      </tr>
      <tr>
        <td>ISO/TR 14179-2:2001</td>
        <td>Gears - Thermal capacity - Part 2: Thermal load-carrying capacity</td>
      </tr>
      <tr>
        <td>ISO 14635-1:2000</td>
        <td>Gears - FZG test procedures - Part 1: FZG test method A/8,3/90 for relative scuffing load-carrying capacity of oils</td>
      </tr>
      <tr>
        <td>ISO 14635-2:2004</td>
        <td>Gears - FZG test procedures - Part 2: FZG step load test A10/16,6R/120 for relative scuffing load-carrying capacity of high EP oils</td>
      </tr>
      <tr>
        <td>ISO 14635-3:2005</td>
        <td>Gears - FZG test procedures - Part 3: FZG test methods A/2, 8/50 for relative scuffing load-carrying capacity and wear characteristics of semifluid gear greases</td>
      </tr>
      <tr>
        <td>ISO 17485:2006</td>
        <td>Bevel gears - ISO system of accuracy</td>
      </tr>
      <tr>
        <td>ISO 18653:2003</td>
        <td>Gears - Evaluation of instruments for the measurement of gears</td>
      </tr>
      <tr>
        <td>ISO/TR 18792:2008</td>
        <td>Lubrication of industrial gear drives</td>
      </tr>
      <tr>
        <td>ISO 21771:2007</td>
        <td>Gears - Cylindrical involute gears and gear pairs - Concepts and geometry</td>
      </tr>
      <tr>
        <td>ISO 23509:2006</td>
        <td>Bevel and hypoid gear geometry</td>
      </tr>
      <tr>
        <td>ISO 81400-4:2005</td>
        <td>Wind turbines - Part4: Design and specification of gearboxes</td>
      </tr>
      <tr>
        <td colspan="2">ISO 81400-4:2005/Cor 1:2005</td>
      </tr>
  </table>
  <div class="center"><a href="<?php echo get_template_directory_uri(); ?>/pdf/Standard_ISO.pdf" target="_blank">PDFファイル <img src="<?php echo get_template_directory_uri(); ?>/img/content/icon_pdf.jpg" alt="icon_pdf" width="27" height="30" style="vertical-align: bottom;" /></a></div>
</div>
        </div>        
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  <!-- end .mainContent --></div>
  </section>
<?php get_footer(); ?>

