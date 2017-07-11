
<style>
.table th { background:#2980B9; color:#FFF; padding:15px 5px !important; text-align:left !important; border:1px solid #2980B9 !important;}
.table td { padding-top:12px !important; padding-bottom:12px !important; border:0px solid #2980B9 !important; }

div.dataTables_filter label {
    font-weight: bold;
    white-space: nowrap;
    text-align: left;
	margin-bottom:10px;
}
</style>
 	<!--Data Table-->
	<script src="<?php echo base_url();?>ad_library/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>ad_library/js/dataTables.bootstrap.min.js"></script>
    <!--End Data Table-->
  
  
<div style="background-color:#FFFFFF; width:100%; margin-bottom:20px; padding: 20px 0;">
	<div class="container">
        <div class="row">
        <?php foreach($show_company as $com){ ?>
        	<div class="col-lg-9 my-job-detail">
            
            		<div width="100%" style="max-width:256px;margin:0 auto;" class="text-center">
                    
         
            	<img src="<?php echo base_url();?>image/image_company/<?php echo $com->com_image; ?>" width="200px" height="150px"/>
          
                    
                    </div>
            
            
            	<div class="col-lg-12">
                	<div class="text-center">
						<h1 class="title_job_detaill"><b><?php echo $com->com_name; ?></b></h1>
					</div>
                </div><!--end col-lg-12  -->
         
                <div class="col-lg-12">
                	<div class="col-lg-3">
                    	<label>Type </label>
                    </div>
                    <div class="col-lg-9">
                    	<?php foreach($show_type as $typ){ 
								if($typ->typ_id == $com->type_id){
						?>
                    	<p><?php echo $typ->typ_name; ?></p>
                        <?php } }?>
                    </div>
                </div><!--end col-lg-12  -->
                <div class="col-lg-12">
                	<div class="col-lg-3">
                    	<label>Industry </label>
                    </div>
                    <div class="col-lg-9">
                    	<?php foreach($show_industry as $ind){ 
								if($ind->ind_id == $com->industry_id){
						?>
                    	<p><?php echo $ind->ind_name; ?></p>
                        <?php } }?>
                    </div>
                </div><!--end col-lg-12  -->
                <div class="col-lg-12">
                	<div class="col-lg-3">
                    	<label>Employees </label>
                    </div>
                    <div class="col-lg-9">
                    	
                    	<p><?php echo $com->com_employee_num; ?></p>
                       
                    </div>
                </div><!--end col-lg-12  -->
                <div class="col-lg-12">
                	<div class="col-lg-3">
                    	<label>Location </label>
                    </div>
                    <div class="col-lg-9">
                    	<?php foreach($show_location as $loc){ 
								if($loc->loc_id == $com->loca_id){
						?>
                    	<p><?php echo $loc->loc_name; ?></p>
                        <?php } }?>
                    </div>
                </div><!--end col-lg-12  -->
                
                <div class="col-lg-12" style="background:#CCC; margin-bottom:15px; padding:5px;border-radius: 5px;">
                   	<div class="text-left">
						<h1 class="title_job_detaill_break">Company Description</h1>
					</div> 
                </div>
              
                    
                <div class="col-lg-12">
						<?php echo $com->com_description; ?>
                </div><!--end col-lg-12  -->
                
        	<?php if($show_job_list_num_row->num_rows()==true){ ?>
            
				<div class="col-lg-12 table-responsive">
					<table id="example1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Job Title</th>
                                  <th>Company</th>
                                  <th>Location</th>
                                 <th>Closing Date</th>
                            
                             
                                </tr>
                              </thead>
                              <tbody>
                              <?php
                                    $n = 1;
                                     foreach($show_job_list as $ecv): ?>
                                <tr>
                                <?php  
                                       
                                        echo '<td>'.$n.'</td>';

                                  ?>
                                  <td>
                                  <a target="_blank" href="<?=site_url("Pages/job/".$ecv->job_id);?>"><?php echo $ecv->job_name; ?></a>
                                  </td>
                      
                                 
                                  
                                  <td>
                               
                                    <?php foreach($show_company as $com){ 
                                     if($com->com_id == $ecv->comp_id){
                                  
                                          echo $com->com_name;
                                  
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
                                  
                               	 <?php echo $ecv->job_closing_date;?>
                                  </td>      
                   
                                        
                                     <?php
                                      
                                        
                                        $n++;
                                    endforeach;
                                  ?>
                                  
                                  </tr>
                              </tbody>
                            </table>
                 	 </div>


                    
                    
                 <?php } ?>


             
                
             
                <?php  }?>
            </div>
            
         