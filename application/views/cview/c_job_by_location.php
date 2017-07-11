

<script>

   $(document).ready(function(e) {

    	$("#job_name").autocomplete({

			source: "<?php echo base_url();?>index.php/Pages/get_search_item"

		});

 

	

	});

</script>    

    <!------------Container-------------------------->

    <div class="container">

        <!-----------content left------------------->

        <div class="left-content">

           <div class="function-search">

           	   <div class="img-search">

           	   	   <img src="<?php echo base_url();?>library/img/25dab9fa748ea0ef8fcbdc3c6b05eda7.jpg"/>

                   <?php /*?><div class="post-and-apply">

                        <ul>

                            <li><a href="<?php echo base_url(); ?>index.php/Pages/login_employee">Apply Job</a></li>

                            <li><a href="<?php echo base_url(); ?>index.php/Companys/login_employer">Post Job</a></li>

                        </ul>

                   </div><?php */?>

                   <div class="search-job">

                       <form action="<?=site_url('Pages/search_by');?>" method="post" id="searchForm" enctype="multipart/form-data">

                            <div class="job">

                                <input type="text" name="search" id="job_name"  placeholder="I'm looking for.. (Job Title, Company name, Location…  )" value=""/>

                            </div>

                            <div class="job-submit">

                            	<button type="submit">Find Job <i class="fa fa-search"></i></button>

                            </div>

                        </form>

               		</div>

                    <?php /*?><div class="searchall-and-candidate">

                        <ul>

                            <li><a style="background: #e6062b;border: 1px solid #998D8D;border-radius: 5px;font-weight: bold;" href="<?=site_url('Pages/job_list_all');?>">Search All Jobs</a></li>

                            <li><a href="<?=site_url('Pages/candidate_cv');?>">Candidates' CV</a></li>

                            

                            <li><a style="background: #FFA22D;border-radius: 5px;margin-left: 55px;padding: 10px 43px;" href="<?php echo base_url(); ?>index.php/Pages/login_employee">login</a></li>

                            <li><a  style="background: #e6062b;border: 1px solid #998D8D;border-radius: 5px;font-weight: bold;" href="<?php echo site_url('Pages/register'); ?>">Register</a></li>

                        </ul>

                   </div><?php */?>

               </div>  

           </div>

           <div class="function_row">

               <ul>

                  <a href="<?=site_url('Pages/job_list_all');?>"><li>Search ALL Jobs</li></a>

                  <a href="<?=site_url('Pages/candidate_cv');?>"><li>Search CVs</li></a>

                  <a href="<?php echo base_url(); ?>index.php/Pages/login_employee"><li>Apply Job</li></a>

                  <a href="<?php echo base_url(); ?>index.php/Companys/login_employer"><li>Post Job</li></a>

                  <!--<a href="<?php echo base_url(); ?>index.php/Pages/login_employee">--><li id="myBtn" style="cursor:pointer; color:#E6062B; font-weight:bold;">Login</li><!--</a>-->
                  <!--<a href="<?php echo site_url('Pages/register'); ?>">--><li style="border:none; padding:14px 46px; cursor:pointer; color:#E6062B; font-weight:bold;" id="myBtnOne">Register</li><!--</a>-->

               </ul>

           </div>

            

     <h3>Candidates' CV By Location</h3>

     <div class="list-table-job">

        <table id="example1" class="table table-striped table-bordered" cellspacing="0" width="100%">

                              <thead>

                                <tr>

                                  <th>No</th>

                                  <th>Job Title</th>

                                  <th>Expected Salary</th>

                                  <th>Location</th>

                                 <th>Status</th>

                            

                             

                                </tr>

                              </thead>

                              <tbody>

                              <?php

                                    $n = 1;

                                     foreach($c_job_by_location as $ecv): ?>

                                <tr>

                                <?php  

                                       

                                        echo '<td>'.$n.'</td>';



                                  ?>

                                  <td>

                                  <a target="_blank" href="<?=site_url("Pages/cv/".$ecv->cv_id);?>"><?php echo $ecv->apply_for; ?></a>

                                  </td>

                      

                                 

                                  

                                   <td>

                                  <?php foreach($show_salary as $sal){ 

											if($sal->sal_id == $ecv->sala_id){

											 echo $sal->sal_name;

				

											}		

										 }

									?>

                                  

                                  </td>

                                  

                                   <td> 

                                    <?php foreach($show_location as $loc){ 

											if($loc->loc_id == $ecv->loca_id){

												echo $loc->loc_name;

											} 

											}

									 ?>      

                                  	

                                  </td>

                                 

                                  

                                  <td>

                                  

                               	 <?php echo "Avialable"?>

                                  </td>      

                   

                                        

                                     <?php

                                      

                                        

                                        $n++;

                                    endforeach;

                                  ?>

                                  

                                  </tr>

                              </tbody>

                            </table>

      </div> <!--end class row-->

  </div>

  <!-------------Recruitment Right------------------->

  <div class="recruitment-employer">

      <div class="employer">

          <h3>Recruitment Employer</h3>

          

          <?php  foreach($show_company_logo as $values){ ?>

          <div class="damnel-employer">

              <div class="list-employer">

              

               <a href="<?=site_url("Pages/company/".$values->com_id);?>"  title="<?php echo $values->com_name; ?>"><img src="<?php echo base_url(); ?>/image/image_company/<?php echo $values->com_image;?>"  style="width:82px; height:70px;" /></a>

              

              </div>

          </div>

          <?php } ?>

          

          

          

         

      </div>

  </div>

  <!-------------End Recruitment Right------------------->

  <!-------------Recruitment Right------------------->

  <div class="recruitment-employer">

      <div class="employer">

          <h3>Advertising</h3>

          	<?php  foreach($show_advertising as $values){ 

				 		if($values->adv_status == 2 ){

				 ?>

                

                <div class="advertising">

                	

                    	<a href="<?php echo $values->adv_url;?>"><img src="<?php echo base_url();?>image/image_advertising/<?php echo $values->adv_image;?>"/></a>

                    

                </div>

                 <?php 

						}

				 } ?>

      </div>

  </div>

  <!-------------End Recruitment Right------------------->

</div>

<script>

  $(function () {

	$("#example1").DataTable();

	$('#example2').DataTable({

	  "paging": true,

	  "lengthChange": false,

	  "searching": false,

	  "ordering": true,

	  "info": true,

	  "autoWidth": false

	});

  });

</script>

<script>
	$(document).ready(function(e) {
        $("#abc").click(function(){
			modal.style.display = "none";
		});
		$("#des").click(function(){
			modals.style.display = "none";
		});
    });
	// Get the modal
	var modal = document.getElementById('myModal');
	var modals = document.getElementById('myModals');
	
	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");
	
	// Get the button that opens the modal
	var btnOne = document.getElementById("myBtnOne");
	
	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];
	
	// When the user clicks the button, open the modal 
	btn.onclick = function() {
		modal.style.display = "block";
	}
	
	// When the user clicks the button, open the modal 
	btnOne.onclick = function() {
		modals.style.display = "block";
	}
	
	$("#turn_off").click(function(){
		modal.style.display = "none";
	});
	
	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
		modal.style.display = "none";
	}
</script>
