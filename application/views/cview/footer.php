
    <!-----------Footer--------------------------->
    <div class="footer">
        <div class="block-footer">
        	<div class="footer-contact">
            	<h1>About Us</h1>
                <ul class="my_ul">
                       <?php
						foreach($show_category as $cate){
							if($cate->main_id == 1){
					 
							 echo '<li><a href="'.site_url("Pages/page/".$cate->cat_id.'/'.$cate->main_id).'" >'.$cate->cat_name.'</a></li>';
							 
							}
						}
						  
					   ?> 
                 </ul>
            </div>
        </div>
        <div class="block-footer">
        	<div class="footer-contact">
            	<h1>Our Services</h1>
                <ul class="my_ul">
                       	  <?php
						foreach($show_category as $cate){
							if($cate->main_id == 2){
					 
							 echo '<li><a href="'.site_url("Pages/page/".$cate->cat_id.'/'.$cate->main_id).'" >'.$cate->cat_name.'</a></li>';
							 
							}
						}
						  
					   ?> 
                 </ul>
            </div>
        </div>
        <div class="block-footer">
        	<div class="footer-contact">
                <h1>Contact Us</h1>
                <p><img src="http://ttibiz.com/Icon svg/location.png" width="15px"> Address: #11, Sangkat Boueng Prolit, Khan 7 Makara, Phnom Penh, Cambodia. </p>
                <p><img src="http://ttibiz.com/Icon svg/phone.png" width="15px"> Tel: 095 666 716/ 093 22 09 78</p>
                <p><img src="http://ttibiz.com/Icon svg/sms.png" width="20px" height="17px"> Email: jobs@aseanhr.com</p>
                
                <a href="<?=site_url('Pages/login');?>"><p style="margin-top:16px; width:45px; float:left;">Admin</p></a>
                <?php
					$total = 0;
                	foreach($show_job_all as $rows){
						$total += count($rows->job_id);
					}
				?>
                <p style="margin-top:15px;​ width:45px; float:left;​">Jobs : <?=$total;?></p>
                <?php
					$total_cv = 0;
                	foreach($show_candidate_cv_all as $all_cv){
						if($all_cv->status == 0 && $all_cv->status_admin_cv == 1){
							$total_cv += count($all_cv->cv_id);
						}
					}
				?>
                <p style="margin-top:15px;​ width:45px; float:left;​">CVs : <?=$total_cv;?></p>
            </div>
        </div>
    </div>
</body>

<!--Data Table-->
<script src="<?php echo base_url();?>ad_library/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url();?>ad_library/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>ad_library/js/dataTables.bootstrap.min.js"></script>
    <!--End Data Table-->

<!--==========Tab but this tab need jquery'menu=================--->
<script>
	$(document).ready(function(){
		$('ul.tabs li').click(function(){
			var tab_id = $(this).attr('data-tab');
	
			$('ul.tabs li').removeClass('current');
			$('.tab-content').removeClass('current');
	
			$(this).addClass('current');
			$("#"+tab_id).addClass('current');
		})
	})
</script>
</html>
