<?php 
/*
Template Name: English Contact
*/
get_header('english'); ?>
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
          <h2>Contact Us</h2>
          <div>
            <p>* Required Item</p>
            <form id="mailformpro" action="<?php echo home_url(); ?>/cgi-bin/acro_mfp/mailformpro/mailformpro.cgi?type=e_contact" method="POST">
            <table class="type01 form">
              <col width="20%"><col width="30%"><col width="20%"><col width="30%">
              <tr>
                <td>E-mail Address *</td>
                <td colspan="3"><input type="text" name="email" id="email" required="required" /></td>
              </tr>
              <tr>
                <td>Family Name *</td>
                <td><input type="text" name="Family name" id="Family Name" required="required" /></td>
                <td>First Name</td>
                <td><input type="text" name="First Name" id="First Name" /></td>
              </tr>
              <tr>
                <td>Company Name *</td>
                <td colspan="3"><input type="text" name="Company Name" id="ocmName" required="required" /></td>
              </tr>
              <tr>
                <td>Department *</td>
                <td colspan="3"><input type="text" name="Department" id="Department" required="required" /></td>
              </tr>
              <tr>
                <td>Title *</td>
                <td colspan="3"><input type="text" name="Title" id="Title" required="required" /></td>
              </tr>
              <tr>
                <td>Zip Code</td>
                <td colspan="3"><input type="text" name="Zip" id="Zip" /></td>
              </tr>
              <tr>
                <td>Postal Address *</td>
                <td colspan="3"><input type="text" name="Postal Address" id="PostalAddress" required="required" /></td>
              </tr>
              <tr>
                <td>Country *</td>
                <td colspan="3">
<select name="country"><option value="USA">USA</option><option value="Argentina">Argentina</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Belgium">Belgium</option><option value="Bolivia">Bolivia</option><option value="Brazil">Brazil</option><option value="Canada">Canada</option><option value="Chile">Chile</option><option value="China">China</option><option value="Czech">Czech</option><option value="Denmark">Denmark</option><option value="Ecuador">Ecuador</option><option value="Finland">Finland</option><option value="France">France</option><option value="Germany">Germany</option><option value="Greece">Greece</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Korea">Korea</option><option value="Malaysia">Malaysia</option><option value="Mexico">Mexico</option><option value="Netherlands">Netherlands</option><option value="New Zealand">New Zealand</option><option value="Norway">Norway</option><option value="Pakistan">Pakistan</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Singapore">Singapore</option><option value="South Africa">South Africa</option><option value="Spain">Spain</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Taiwan">Taiwan</option><option value="Thailand">Thailand</option><option value="Turkey">Turkey</option><option value="UAE">UAE</option><option value="UK">UK</option><option value="Uruguay">Uruguay</option><option value="Venezuela">Venezuela</option><option value="Viet Nam">Viet Nam</option><option value="Other">Other</option></select>
                </td>
              </tr>
              <tr>
                <td>Tel  *</td>
                <td colspan="3"><input type="text" name="Tel" id="tel" required="required" /></td>
              </tr>
              <tr>
                <td>Fax</td>
                <td colspan="3"><input type="text" name="Fax" id="fax" /></td>
              </tr>
              <tr>
                <td>Message</td>
                <td colspan="3"><textarea name="Message" id="Message" cols="30" rows="10" required="required"></textarea></td>
              </tr>
            </table>
            <div class="btn_container en" id="btnBlock"> <input type="submit" /></div>
            </form>
            <script type="text/javascript" id="mfpjs" src="<?php echo home_url(); ?>/cgi-bin/acro_mfp/mailformpro/mailformpro.cgi?type=e_contact" charset="UTF-8"></script>
          </div>
        </div>     
        
        <?php the_content('english'); ?>
      <?php endwhile; endif; ?>
    </div>
  <!-- end .mainContent --></div>
  </section>
<?php get_footer('english'); ?>

