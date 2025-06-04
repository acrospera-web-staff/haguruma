<?php get_header(); ?>
<!-- コンテンツ -->
  <section>
  <div id="mainContent" class="other users">
    <div class="inner">
      <?php if(have_posts()): while(have_posts()):the_post(); ?>
        <ul class="hierarchy">
          <li><a href="<?php echo home_url(); ?>">TOP</a></li>
          <?php
          
          ?>
          <li><a href=<?php echo '"'.get_permalink().'">'.get_the_title(); ?></a></li>
        </ul>
        
        <div class="post">
				<h2>
					<?php the_title(); ?>
				</h2>
				<div class="userRead">
					<p>こちらで会員の皆様へ配布資料などを公開いたします。</p>
					<a class="logout" href="http://jgma.org/php/logout.php"><img src="<?php echo get_template_directory_uri(); ?>/img/content/member_btn_logout.jpg" class="alpha" alt="member_btn_logout" width="125" height="33" /></a>
        </div>
				<!--<ul class="docList">
            <li><a href="/wp-content/uploads/2021/04/無料WEBセミナー.pdf" target="_blank">【無料WEBセミナー】 人材確保対策セミナー</a></li>
            <li><a href="/wp-content/uploads/2021/06/当会の対応.docx" target="_blank">新型コロナウイルス感染拡大防止に伴う当会の対応について</a></li>
          </ul>-->
        
        <div class="usersHdg">
          <h3>理事会資料</h3>
        </div>
				<div class="usersBox">
					<div class="box new">
						<table class="type01">
							<tr>
								<th colspan="6">2021年度</th>
							</tr>
							<tr>
                <td><a href="/list_20210930" target="_blank">第4回理事会資料</a></td>
                <td><a href="/list_20210719" target="_blank">第3回理事会資料</a></td>
                <td><a href="/list_20210709" target="_blank">第2回理事会資料</a></td>
								<td><a href="/list_20210421" target="_blank">第1回理事会資料</a></td>
								<td></td>
								<td></td>
							</tr>
              <tr>
								<td>　</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</table>
					</div>
					<div class="box">
						<table class="type01">
							<tr>
								<th colspan="6">2020年度</th>
							</tr>
							<tr>
								<td><a href="/list_20210325" target="_blank">第5回理事会資料</a></td>
								<td><a href="/list_20210304" target="_blank">第4回理事会資料</a></td>
								<td><a href="/list_20201124" target="_blank">第3回理事会資料</a></td>
								<td><a href="/list_20200807" target="_blank">第2回理事会資料</a></td>
								<td><a href="/list_20200604" target="_blank">第1回理事会資料</a></td>
								<td></td>
							</tr>
              <tr>
								<td>　</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</table>
					</div>
				</div>
        
        <div class="usersHdg">
          <h3>機関誌JGMA News</h3>
        </div>
        <div class="jgmaNews">
          <p style="margin-bottom: 2em;">・<a href="/wp-content/uploads/2021/09/JGMA-News2021年秋号-vol.58.pdf" target="_blank" rel="noopener noreferrer">2021年秋号vol.58</a><a href="/wp-content/uploads/2021/09/JGMA-News2021年秋号-vol.58.pdf" download="JGMA News2021年秋号 vol.58.pdf" style="margin-left: 20px;">ダウンロード</a></p>
          <p style="margin-bottom: 2em;">・<a href="/wp-content/uploads/2021/05/JGMA-News2021年春号-vol.57.pdf" target="_blank" rel="noopener noreferrer">2021年春号vol.57</a><a href="/wp-content/uploads/2021/05/JGMA-News2021年春号-vol.57.pdf" download="JGMA News2021年春号 vol.57.pdf" style="margin-left: 20px;">ダウンロード</a></p>
          <p style="margin-bottom: 2em;">・<a href="/wp-content/uploads/2020/12/JGMA-News2020年冬号-vol.56.pdf" target="_blank" rel="noopener noreferrer">2020年冬号vol.56</a><a href="/wp-content/uploads/2020/12/2020年冬号vol.56.pdf" download="JGMA-News2020年冬号-vol.56.pdf" style="margin-left: 20px;">ダウンロード</a></p>
          <p style="margin-bottom: 2em;">・<a href="/wp-content/uploads/2020/08/JGMA-News2020年夏号-vol.55.pdf" target="_blank" rel="noopener noreferrer">2020年夏号vol.55</a><a href="/wp-content/uploads/2020/08/JGMA-News2020年夏号-vol.55.pdf" download="JGMA-News2020年夏号-vol.55.pdf" style="margin-left: 20px;">ダウンロード</a></p>
          <p style="margin-bottom: 2em;">・<a href="/wp-content/uploads/2020/03/JGMA-News2020年春号-vol.54.pdf" target="_blank" rel="noopener noreferrer">2020年春号vol.54</a><a href="/wp-content/uploads/2020/03/JGMA-News2020年春号-vol.54.pdf" download="JGMA-News2020年春号-vol.54.pdf" style="margin-left: 20px;">ダウンロード</a></p>
          <p style="margin-bottom: 2em;">・<a href="/wp-content/uploads/2020/03/JGMA-News2019年秋号-vol.53.pdf" target="_blank" rel="noopener noreferrer">2019年秋号vol.53</a><a href="/wp-content/uploads/2020/03/JGMA-News2019年秋号-vol.53.pdf" download="JGMA-News2019年秋号-vol.53.pdf" style="margin-left: 20px;">ダウンロード</a></p>
          <p style="margin-bottom: 2em;">・<a href="/wp-content/uploads/2020/03/JGMA-News2019年春号-vol.52.pdf" target="_blank" rel="noopener noreferrer">2019年春号vol.52</a><a href="/wp-content/uploads/2020/03/JGMA-News2019年春号-vol.52.pdf" download="JGMA-News2019年春号-vol.52.pdf" style="margin-left: 20px;">ダウンロード</a></p>
          <p style="margin-bottom: 2em;">・<a href="/wp-content/uploads/2020/03/JGMA-News80周年記念号.pdf" target="_blank" rel="noopener noreferrer">80周年記念号</a><a href="/wp-content/uploads/2020/03/JGMA-News80周年記念号.pdf" download="JGMA-News80周年記念号.pdf" style="margin-left: 20px;">ダウンロード</a></p>
        </div>
        
        <div class="usersHdg">
          <h3>統計資料</h3>
        </div>
				<div class="usersBox">
          <div class="box new">
						<table class="type01">
							<tr>
								<th colspan="6">2021年度</th>
							</tr>
							<tr>
								<td><a href="/wp-content/uploads/2021/09/JGMA生産統計-2021_7月.pdf" target="_blank">7月分</a></td>
								<td><a href="/wp-content/uploads/2021/09/JGMA生産統計-2021_6月.pdf" target="_blank">6月分</a></td>
								<td><a href="/wp-content/uploads/2021/07/JGMA生産統計-2021_5月.pdf" target="_blank">5月分</a></td>
								<td><a href="/wp-content/uploads/2021/06/JGMA生産統計-2021_4月.pdf" target="_blank">4月分</a></td>
					           
								<td></td>
								<td></td>
							</tr>
              <tr>
								<td>　</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</table>
					</div>
					<div class="box" style="font-size: 0;">
						<table class="type01" style="font-size: 13px;">
							<tr>
								<th colspan="6">2020年度</th>
							</tr>
							<tr>
								<td><a href="/wp-content/uploads/2021/05/JGMA生産統計-2021_3月.pdf" target="_blank">3月分</a></td>
								<td><a href="/wp-content/uploads/2021/04/JGMA生産統計-2021_2月.pdf" target="_blank">2月分</a></td>
								<td><a href="/wp-content/uploads/2021/03/JGMA生産統計-2021_1月.pdf" target="_blank">1月分</a></td>
								<td><a href="/wp-content/uploads/2021/02/JGMA生産統計-2020.12月.pdf" target="_blank">12月分</a></td>
								<td><a href="/wp-content/uploads/2021/01/JGMA生産統計-2020.11月-1.pdf" target="_blank">11月分</a></td>
								<td><a href="/wp-content/uploads/2020/12/JGMA生産統計-2020.10月.pdf" target="_blank">10月分</a></td>
							</tr>
							<tr>
								<td><a href="/wp-content/uploads/2020/12/JGMA生産統計-2020.9月.pdf" target="_blank">9月分</a></td>
								<td><a href="/wp-content/uploads/2020/10/JGMA生産統計-2020.8月.pdf" target="_blank">8月分</a></td>
								<td><a href="/wp-content/uploads/2020/10/JGMA生産統計-2020.7月.pdf" target="_blank">7月分</a></td>　　
								<td><a href="/wp-content/uploads/2020/10/JGMA生産統計-2020.6月.pdf" target="_blank">6月分</a></td>
								<td><a href="/wp-content/uploads/2020/10/JGMA生産統計-2020.5月.pdf" target="_blank">5月分</a></td>
								<td><a href="/wp-content/uploads/2020/10/JGMA生産統計-2020.4月.pdf" target="_blank">4月分</a></td>
							</tr>
						</table>
					</div>
          <div class="linkList">
            <dl>
              <dt>◎経済産業省生産動態調査→『はん用・生産用・業務用機械』→『動力伝動装置』</dt>
              <dd><a href="https://www.meti.go.jp/statistics/tyo/seidou/result/ichiran/08_seidou.html#menu6" target="_blank">統計表一覧（経済産業省生産動態統計)｜経済産業省生産動態統計｜経済産業省 (meti.go.jp)</a></dd>
              
              <dt>◎財務省貿易統計→『16部　84-85類』</dt>
              <dd><a href="https://www.customs.go.jp/toukei/info/" target="_blank">財務省貿易統計 Trade Statistics of Japan (customs.go.jp)</a></dd>
              
              <dt>◎輸出</dt>
              <dd><a href="https://www.e-stat.go.jp/stat-search/files?page=1&layout=datalist&toukei=00350300&tstat=000001013141&cycle=1&tclass1=000001013180&tclass2=000001013181&tclass3val=0" target="_blank">普通貿易統計 貿易統計_全国分 品別国別表 輸出 | ファイル | 統計データを探す | 政府統計の総合窓口 (e-stat.go.jp)</a></dd>
              
              <dt>◎輸入</dt>
              <dd><a href="https://www.e-stat.go.jp/stat-search/files?page=1&layout=datalist&toukei=00350300&tstat=000001013141&cycle=1&tclass1=000001013180&tclass2=000001013182&tclass3val=0" target="_blank">普通貿易統計 貿易統計_全国分 品別国別表 輸入 | ファイル | 統計データを探す | 政府統計の総合窓口 (e-stat.go.jp)</a></dd>
            </dl>
          </div>
				</div>
				<!--
          <div>
            <div class="tTitle"><h3>お知らせ</h3><a href="<?php echo home_url() ?>/users_topics" class="lh01">一覧を見る</a></div>
          <div class="list wide">
          <ul>
<?php
        //echo '<article class="box">!!_'.$query_string.'_!!</article>';
/*
echo "test:\n";
if ($dir = opendir("./")) {
    while (($file = readdir($dir)) !== false) {
        if ($file != "." && $file != "..") {
            echo "$file\n";
        }
    }
    closedir($dir);
}*/

        $wpqa = array(
              'post_type' => 'post',
              'posts_per_page' => null,
              'paged'=>1,
              'category_name'=>'members',
              'orderby' =>'date',//
              'order' => 'DESC',
        );
              
        $loop = new WP_Query($wpqa);
        if ($loop->have_posts()): while ($loop->have_posts()) : $loop->the_post();
             $context = null;
             $title = get_the_title();
             $date = get_the_date('n月j日');
             $context = '<span class="date">'.$date.'</span>'.'<span class="text"><a href="'.get_permalink().'">'.$title.'</a><span>';
             echo '<li>'.$context.'</li>';
             /**/
        endwhile; else: endif;

        wp_reset_query();
?>
          </ul>
        </div>
        </div>
        <div>
            <h3>配布資料・申請書類</h3>
            <table class="type01 userPage">
              <col width="55%"><col width="15%"><col width="15%"><col width="15%">
              <tr>
                <th>配布資料</th>
                <th>更新日</th>
                <th>資料１</th>
                <th>資料２</th>
              </tr>
            </table>
            <div class="userPageScroll">
              <table class="type01 userPage">
                <col width="55%"><col width="15%"><col width="15%"><col width="15%">
              <?php
          $wpqa = array(
                'post_type' => 'member',
                'posts_per_page' => null,
                'paged'=>1,
                'orderby' =>'date',//modified
                'order' => 'DESC',
          );
                
          $loop = new WP_Query($wpqa);
          if ($loop->have_posts()): while ($loop->have_posts()) : $loop->the_post();
               $context = null;
               $title = get_the_title();
               $date = get_the_date('Y/n/j');
               $fileTEMP = get_post_meta($id,'ctmFileimage',true);
               $file = array();
               if ( !is_array($fileTEMP) ) $file[] = null;
               else $file = $fileTEMP;
               $fileimg = array();
               
               //var_dump($file);
               //echo '<br />';
               
               foreach ( $file as $img ) {
                 //
                 if ( $img ) {
                  if ( strpos($img,'.pdf') !== false ) $fi = '<img src="'.get_template_directory_uri().'/img/content/icon_pdf.jpg">';
                  elseif ( strpos($img,'.xlsx') !== false || strpos($img,'.xls') !== false )  $fi = '<img src="'.get_template_directory_uri().'/img/content/icon_xls.jpg">';
                  elseif ( strpos($img,'.png') !== false || strpos($img,'.jpg') !== false || strpos($img,'.jepg') !== false || strpos($img,'.gif') !== false )  $fi = '<img src="'.get_template_directory_uri().'/img/content/icon_img.jpg">';
                  else $fi = '<img src="'.get_template_directory_uri().'/img/content/icon_file.jpg">';
                  $fileimg[] = $fi;
                 }
               }
               $context = '<td>'.$title.'</td><td style="text-align: center;">'.$date.'</td>';
               $context .= '<td style="text-align: center;">'.($fileimg[0]? '<a href="'.$file[0].'" >'.$fileimg[0].'</a>':'-').'</td>';
               $context .= '<td style="text-align: center;">'.($fileimg[1]? '<a href="'.$file[1].'" ">'.$fileimg[1].'</a>':'-').'</td>';
               echo '<tr>'.$context.'</tr>';
               /**/
          endwhile; else: endif;
              ?>
              
              </table>
            </div>
          </div>
        --> 
			</div>
        
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  <!-- end .mainContent --></div>
  </section>
<?php get_footer(); ?>
<script src="/wp-content/themes/haguruma/js/jquery-3.4.0.min.js"></script>
<script src="/wp-content/themes/haguruma/js/users.js"></script>
