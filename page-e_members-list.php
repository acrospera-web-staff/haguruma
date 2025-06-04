<?php
/*
Template Name: english_member_list
*/
get_header('english'); ?>
<!-- コンテンツ -->
  <section>
  <div id="mainContent" class="other members">
    <div class="inner">
      <?php if(have_posts()): while(have_posts()):the_post(); ?>
        <ul class="hierarchy">
          <li><a href="<?php echo home_url(); ?>">TOP</a></li>
          <li><a>Members</a></li>
          <li><a href=<?php echo '"'.get_permalink().'">'.get_the_title(); ?></a></li>
        </ul>
        <h2><?php the_title(); ?></h2>
<form action="/php/find_json.php" method="post" id="aform" >
<input type="hidden" name="order" value="e" />
<input type="hidden" id="allmembers" name="area" value="all" />
</form>        
      
        <table id="searchResult" class="type01 width925px">
          <col width="3%"><col width="30%"><col width="15%"><col width="37%"><col width="15%">
          <tr>
            <th></th>
            <th>Company</th>
            <th>Post Code</th>
            <th>Address</th>
            <th>TEL No.</th>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>

        </table>
 
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  <!-- end .mainContent --></div>
  </section>
<?php get_footer('english'); ?>