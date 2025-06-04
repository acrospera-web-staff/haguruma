<?php
/*
Template Name: store
*/
 get_header();

/*

<select name="規格名1" id="order1_name" class="order_name" required>
JGMA規格全集
歯車製造便覧
歯車規格集
新歯車便覧
歯車技術の半世紀
ホブによるドライカット　環境対応型歯車加工技術の開発研究に関する調査研究
ドライカット　環境対応型歯車加工技術の開発研究に関する調査研究
JGMA 001-01	歯車略号
JGMA 111-03A	ISO規格に準拠　平歯車およびはすば歯車の穴、軸の直径の公差および円筒度並びに歯先円筒の直径の公差
JGMA 113-02A	ISO規格に準拠　小モジュール平歯車及びはすば歯車の中心距離の許容値
JGMA 114-02	ISO規格に準拠　平歯車及びはすば歯車の軸の平行精度
JGMA 114-02A	小モジュール平歯車及びはすば歯車の軸の平行精度
JGMA 151-01	鋳造歯車および溶接構造歯車の寸法
JGMA 405-01	円筒ウォームギヤの強さ計算式
JGMA 511-01	ISO規格に準拠　円筒歯車の購入仕様
JGMA 521-01	ISO規格に準拠　すぐばかさ歯車の購入仕様
JGMA 611-01	ISO規格に準拠　円筒歯車の転位方式
JGMA 1001-01	歯車の歯面粗さ標準及び測定方法
JGMA 1002-01	歯車の歯当たり
JGMA 1101-01	平歯車及びはすば歯車の中心距離の許容値
JGMA 1102-01	平歯車及びはすば歯車の軸の平行精度
JGMA 1103-01	歯車精度－平歯車及びはすば歯車のバックラッシ並びに歯厚
JGMA 1104-01	検査用親円筒歯車規格
JGMA 2001-01	運動制御用歯車装置の特性及び精度
JGMA 3001-01	バリ取り標準及び打痕防止
JGMA 3101-01	円筒歯車の歯切り時間の概算
JGMA 3102-01	円筒歯車の歯面仕上げ時間の概算
JGMA 4101-01	円筒歯車の強さ試験方法
JGMA 4102-01	円筒歯車の強さ試験の判定と評価方法
JGMA 4301-01	円筒ウォームギヤの強さ計算式
JGMA 6101-02	平歯車及びはすば歯車の曲げ強さ計算式
JGMA 6102-02	平歯車及びはすば歯車の歯面強さ計算式
JGMA 6201-01	かさ歯車の曲げ強さ計算式
JGMA 6202-01	かさ歯車の歯面強さ計算式
JGMA 8002-01	ISO規格に準拠　歯車装置検査規定「歯車装置の機械振動測定方法」
JGMA/TR0001	新旧JIS歯車精度の規格値対比表
JGMA/TR0002	ISO規格に準拠　平歯車及びはすば歯車の強さ簡易計算式
JGMA/TR0003	かさ歯車の強さ簡易計算式
</select>
*/
//echo 'test';
//var_dump($_POST);
function selectSet() {

	$items = array(
		"s301" => "JGMA規格全集",
		"s106" => "歯車製造便覧",
		"s101" => "歯車規格集",
		"s102" => "新歯車便覧",
		"s103" => "歯車技術の半世紀",
		"s104" => "ホブによるドライカット　環境対応型歯車加工技術の開発研究に関する調査研究",
		"s105" => "ドライカット　環境対応型歯車加工技術の開発研究に関する調査研究",
		"s201" => "JGMA 001-01	歯車略号",
		"s202" => "JGMA 111-03A	ISO規格に準拠　平歯車およびはすば歯車の穴、軸の直径の公差および円筒度並びに歯先円筒の直径の公差",
		"s203" => "JGMA 113-02A	ISO規格に準拠　小モジュール平歯車及びはすば歯車の中心距離の許容値",
		"s204" => "JGMA 114-02	ISO規格に準拠　平歯車及びはすば歯車の軸の平行精度",
		"s205" => "JGMA 114-02A	小モジュール平歯車及びはすば歯車の軸の平行精度",
		"s206" => "JGMA 151-01	鋳造歯車および溶接構造歯車の寸法",
		"s208" => "JGMA 511-01	ISO規格に準拠　円筒歯車の購入仕様",
		"s209" => "JGMA 521-01	ISO規格に準拠　すぐばかさ歯車の購入仕様",
		"s210" => "JGMA 611-01	ISO規格に準拠　円筒歯車の転位方式",
		"s211" => "JGMA 1001-01	歯車の歯面粗さ標準及び測定方法",
		"s212" => "JGMA 1002-01	歯車の歯当たり",
		"s213" => "JGMA 1101-01	平歯車及びはすば歯車の中心距離の許容値",
		"s214" => "JGMA 1102-01	平歯車及びはすば歯車の軸の平行精度",
		"s215" => "JGMA 1103-01	歯車精度－平歯車及びはすば歯車のバックラッシ並びに歯厚",
		"s216" => "JGMA 1104-01	検査用親円筒歯車規格",
		"s217" => "JGMA 2001-01	運動制御用歯車装置の特性及び精度",//
		"s218" => "JGMA 3001-01	バリ取り標準及び打痕防止",
		"s219" => "JGMA 3101-01	円筒歯車の歯切り時間の概算",
		"s220" => "JGMA 3102-01	円筒歯車の歯面仕上げ時間の概算",
		"s221" => "JGMA 4101-01	円筒歯車の強さ試験方法",
		"s222" => "JGMA 4102-01	円筒歯車の強さ試験の判定と評価方法",
		"s223" => "JGMA 4301-01	円筒ウォームギヤの強さ計算式",
		"s224" => "JGMA 6101-02	平歯車及びはすば歯車の曲げ強さ計算式",
		"s225" => "JGMA 6102-02	平歯車及びはすば歯車の歯面強さ計算式",
		"s226" => "JGMA 6201-01	かさ歯車の曲げ強さ計算式",
		"s227" => "JGMA 6202-01	かさ歯車の歯面強さ計算式",
		"s228" => "JGMA 8002-01	ISO規格に準拠　歯車装置検査規定「歯車装置の機械振動測定方法」",
		"s232" => "JGMA 9901-01	歯車用鋼材のマイクロビッカース硬さ分布の多点測定法とその評価",
		"s229" => "JGMA/TR0001	新旧JIS歯車精度の規格値対比表",
		"s230" => "JGMA/TR0002	ISO規格に準拠　平歯車及びはすば歯車の強さ簡易計算式",
		"s231" => "JGMA/TR0003	かさ歯車の強さ簡易計算式"
	);

	//$_POST
	$set = array();
	foreach ( $_POST as $key => $cc ) {
		if ( $cc && $cc > 0 ) $set[] = array($key,$cc);
	}

	//var_dump($set);
	$setVal = array();
	for ( $s = 1; $s < 7; $s++ ) {

	  echo '<tr>'."\n";
	  echo '<td>'.$s.'.'."\n";
		echo '<select name="規格名'.$s.'" id="order'.$s.'_name" class="order_name"'.(( $s == 1 )? ' required':'').'>'."\n";
		echo '<option value="">-</option>';

		if ( isset($set) ) $setVal = array_shift($set);
		foreach ( $items as $key => $cc ) {
			echo '<option'.((isset($setVal[0]) && $setVal[0] == $key)? ' selected' : '').'>'.$cc.'</option>';
		}
		echo '</select>'."\n";
    echo '</td>'."\n";
    echo '<td>'."\n";
    echo '<select name="数量'.$s.'" id="vol'.$s.'"'.(( $s == 1 )? ' required':'').'>'."\n";
    echo '<option value="">-</option>'."\n";
			for ( $ss = 1; $ss < 10; $ss++ ) {
		    echo '<option value="'.$ss.'"'.((isset($setVal[1]) && $ss == $setVal[1])? ' selected' : '').'>'.$ss.'</option>'."\n";

			}
	  echo '</select>'."\n";
	  echo '</td>'."\n";
	  echo '</tr>'."\n";

	}


}
 ?>
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
            <form id="mailformpro" action="<?php echo home_url(); ?>/cgi-bin/acro_mfp/mailformpro/mailformpro.cgi?type=book" method="POST">
            <table class="type01 form combi">
              <col width="26%"><col width="74%">
              <tr>
                <td>企業・団体名※</td>
                <td><input type="text" name="企業・団体名" id="ocmName" required="required" />
                  <div class="cbx cbx_mg"><input type="radio" name="所属" id="registed1" value="会員" checked="" required="required" /><label for="type1">会員</label></div>
                  <div class="cbx cbx_mg"><input type="radio" name="所属" id="registed2" value="非会員" /><label for="type2">非会員</label></div>
                </td>
              </tr>
              <tr><td>部署・ご担当者（氏名）※</td><td><input type="text" name="ご担当者" id="name" required="required" /></td></tr>
              <tr><td>住所※</td><td>〒<input type="text" name="郵便番号" id="zip0" class="ml06" required="required" /> 住所<input type="text" name="住所" id="address0" class="ml06" required="required" /></td></tr>
              <tr><td>TEL※</td><td><input type="text" name="TEL" id="tel" required="required" /></td></tr>
              <tr><td>FAX</td><td><input type="text" name="FAX" id="fax" /></td></tr>
              <tr>
								<td>メールアドレス※</td>
								<td>
									<input type="text" name="email" id="email" required="required" />
									<p class="red">ドメインがGmail、yahoo、outlook、hotmailの場合、まれにご注文が反映されない事象が起こっておりますので、上記以外のドメインからご注文いただけますと幸いでございます。</p>
								</td>
							</tr>

              <!--<tr><td>領収書有無※</td><td>
                <div class="cbx"><label for="receipt_no">無し</label><input type="radio" name="領収書有無" id="receipt_no" value="無" /></div>
                <div class="cbx"><label for="receipt_yes">有り</label><input type="radio" name="領収書有無" id="receipt_yes" value="有" /></div>
              </td></tr>-->
              <tr><td>お支払予定日※</td><td><input type="date1" name="お支払予定日（月）" id="date1" style="width:10%;" required="required" />月 <input type="date2" name="お支払予定日（日）" id="date2" style="width:10%;" required="required" />日　＊ご注文日より1ヶ月以内にお願いいたします。</td></tr>
              <tr><td>備考</td><td><textarea name="備考"></textarea></td></tr>
            </table>
            <table class="type01 form">
              <col width="91%">
              <col width="9%">
              <tr>
                <th>規格番号　規格名（書籍名）</th>
                <th>数量</th>
              </tr>
              <?php selectSet(); ?>
            </table>
            <div class="btn_container" id="btnBlock"><input type="submit" /></div>
            </form>
            <script type="text/javascript" id="mfpjs" src="<?php echo home_url(); ?>/cgi-bin/acro_mfp/mailformpro/mailformpro.cgi?type=book" charset="UTF-8"></script>
          </div>
        </div>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  <!-- end .mainContent --></div>
  </section>
<?php get_footer(); ?>
