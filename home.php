<?php get_header(); ?>
  <section>
  <div id="mainContent" class="<?php if ( is_home() ) echo ' top jp'; ?>">
    <div class="topMenu">
      <div class="inner">
        <div id="mainImages">
          <img src="<?php echo get_template_directory_uri(); ?>/img/content/top_main_img_01_jp.jpg" alt="top_main_img" width="998" height="338" />
          <img src="<?php echo get_template_directory_uri(); ?>/img/content/top_main_img_02_jp.jpg" alt="top_main_img" width="998" height="338" />
          <img src="<?php echo get_template_directory_uri(); ?>/img/content/top_main_img_03_jp.jpg" alt="top_main_img" width="998" height="338" />
        </div>
        <img id="mainImageText" src="<?php echo get_template_directory_uri(); ?>/img/content/top_main_img_text_jp.png" alt="top_main_img_text" width="308" height="176" />
        <!-- <a href="/covid_19" target="_blank" class="top_btn"><img src="<?php echo get_template_directory_uri(); ?>/img/top/top_btn.png" class="alpha" alt=""></a> -->
        <!--<a href="/wp-content/uploads/2021/08/当会の対応.pdf" target="_blank" class="top_btn2"><img src="<?php echo get_template_directory_uri(); ?>/img/top/top_btn2.png" class="alpha" alt=""></a>-->
      </div>
    </div>
    <div class="inner">
      <div class="side">
        <ul>
          <li><a href="https://www.jka-cycle.jp/" target="_blank" onclick="ga('send','event','banner','click','keirin-autorace', 1);"><img src="https://www.jgma.org/wp-content/themes/haguruma/img/content/keirin_banner2.jpg" alt="KEIRIN" class="alpha" width="194" height=""></a></li>
          <li><a href="https://www.jgma.org/gearcollege_h27#iso" onclick="ga('send','event','banner','click','iso', 1);"><img src="https://www.jgma.org/wp-content/themes/haguruma/img/content/iso_banner.jpg" alt="2024年度ISO国際会議出席報告" class="alpha"></a></li>
          <li><a href="<?php echo home_url() ?>/business_report" onclick="ga('send','event','banner','click','business_report', 1);"><img src="https://www.jgma.org/wp-content/themes/haguruma/img/content/business_report_banner.jpg" alt="JGMATEプロジェクト事業報告" class="alpha" width="194" height="66"></a></li>
          <li><a href="<?php echo home_url() ?>/form_20250314" onclick="ga('send','event','banner','click','business_report', 1);"><img src="https://www.jgma.org/wp-content/themes/haguruma/img/content/gearcollege_banner.jpg" alt="修了認定マークのお申込み" class="alpha" width="194" height="100"></a></li>
        </ul>
      </div>
      <div class="topicks">
        <div class="title"><h2>トピックス <span>【Topics】</span></h2><a href="<?php echo home_url() ?>/topics" class="lh01">一覧を見る</a></div>
        <div class="list">
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
              'category_name'=>'open',
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
            <?php /* <li>東京都労働相談情報センター　八王子事務所にて労働セミナーが開催されます。</li>
            <li>7月2日水曜日　ワークライフバランスを経営の味方に！</li>
            <li>7月15日火曜日，23日水曜日　最新の労働法制改正の動向と企業の実務対応のポイント<br /><a href="">詳細はこちら</a>をご覧ください。</li>
            <li>東京都労働相談情報センター　八王子事務所にて労働セミナーが開催されます。</li>
            <li>7月2日水曜日　ワークライフバランスを経営の味方に！</li>
            <li>7月15日火曜日，23日水曜日　最新の労働法制改正の動向と企業の実務対応のポイント<br /><a href="">詳細はこちら</a>をご覧ください。</li>
            <li>東京都労働相談情報センター　八王子事務所にて労働セミナーが開催されます。</li>
            <li>7月2日水曜日　ワークライフバランスを経営の味方に！</li>
            <li>7月15日火曜日，23日水曜日　最新の労働法制改正の動向と企業の実務対応のポイント<br /><a href="">詳細はこちら</a>をご覧ください。</li>
            <li>東京都労働相談情報センター　八王子事務所にて労働セミナーが開催されます。</li>
            <li>7月2日水曜日　ワークライフバランスを経営の味方に！</li>
            <li>7月15日火曜日，23日水曜日　最新の労働法制改正の動向と企業の実務対応のポイント<br /><a href="">詳細はこちら</a>をご覧ください。</li> */ ?>
          </ul>
        </div>
      </div>
      <div class="side">
        <ul>
          <!-- <li><a href="https://www.jimtof.org/jp/index.html" target="_blank" onclick="ga('send','event','banner','click','jimtof', 1);"><img src="https://www.jgma.org/wp-content/themes/haguruma/img/content/jimtof2024.jpg" alt="JIMTOF2024" class="alpha" width="194"></a></li> -->
          <li><a href="http://www.amtecinc.co.jp/" target="_blank" onclick="ga('send','event','banner','click','amtecinc', 1);"><img src="https://www.jgma.org/wp-content/themes/haguruma/img/content/amtecinc_banner.gif" alt="アムテック有限会社" class="alpha"></a></li>
          <!--<li><a href="/wp-content/uploads/2022/12/歯車製造業　高齢者の活躍に向けたガイドライン.pdf" target="_blank" onclick="ga('send','event','banner','click','guideline_banner', 1);"><img src="https://www.jgma.org/wp-content/themes/haguruma/img/content/guideline_banner.jpg" alt="歯車製造業　高齢者の活躍に向けたガイドライン" class="alpha"></a></li>-->
          <!--<li><a href="http://www.jimtof.org/jp/" target="_blank" onclick="ga('send','event','banner','click','amtecinc', 1);"><img src="https://www.jgma.org/wp-content/themes/haguruma/img/content/jimtof2022_banner.jpg" alt="JIMTOF2022" class="alpha"></a></li>
          <li><a href="/wp-content/uploads/2020/10/issue.docx" onclick="ga('send','event','banner','click','issue', 1);" target="_blank"><img src="https://www.jgma.org/wp-content/themes/haguruma/img/content/issue_banner.jpg" alt="中小企業等経営強化法および生産性向上特別措置法に係る証明書の発行について" class="alpha" width="194" height="66"></a></li>-->
          <li><a href="https://www.jgma.org/certificate_issuance" onclick="ga('send','event','banner','click','certificate_issuance', 1);"><img src="https://www.jgma.org/wp-content/themes/haguruma/img/content/tyusyokigyo_banner.jpg" alt="中小企業等経営強化法の経営力向上設備等に係る生産性向上要件証明書(工業会証明書)の発行について" class="alpha"></a></li>
          <li><a href="https://www.meti.go.jp/main/zeisei/index.html" target="_blank" onclick="ga('send','event','banner','click','zeisei', 1);"><img src="https://www.jgma.org/wp-content/themes/haguruma/img/content/zeisei_banner.jpg" alt="経済産業税制総合Webページ" class="alpha"></a></li>
          <li><a href="https://www.jgma.org/kkj" onclick="ga('send','event','banner','click','kkj', 1);"><img src="https://www.jgma.org/wp-content/themes/haguruma/img/content/kkj_banner.jpg" alt="経済構造実態調査" class="alpha"></a></li>
        </ul>
      </div>
    </div>
    <!--<div class="calendar"><iframe src="https://calendar.google.com/calendar/embed?src=fumiko.i%40jgma.org&ctz=Asia%2FTokyo&showTitle=0&showTz=0" style="border: 0" width="100%" height="380" frameborder="0" scrolling="no"></iframe></div>-->
    <!-- end .mainContent -->
    </div>
  </section>
<?php get_footer(); ?>
