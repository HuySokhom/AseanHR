<?php /*?><?php
if($this->session->userdata("userID")&&$this->session->userdata("role")==0):
?><?php */?>
<br />
<div class="col-md-12 box-1">
    <!-- general form elements disabled -->
    <div class="box box-warning">
        <div class="box-header">
            <h3 class="box-title">Copy Job</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
        <?php foreach($show_edit_job as $edeit){
				
		?>
				<?php echo form_open("admin_controller/insert_job");?>
                
      				 <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                            
                            <?php $row_num = $this->Admin_model->show_reference_number();
                				foreach($row_num as $row){
							   ?>
                              <input type="hidden"  class="form-control" value="JOB-<?=$row->job_id + 1;?>" name="job_reference" required />
                              
                               <?php } ?>
                            
                                <div class="form-group">
                                    <label>Job Title</label>
                                    <input name="job_name" type="text" class="form-control"  required />
                                </div>
                                <div class="form-group">
                                    <label>Number Of Hire</label>
                                    <input name="job_hire" value="<?=$edeit->job_hire;?>" type="text" class="form-control"   />
                                </div>
                                <div class="form-group">
                                    <label>Sex</label>
                                    <select name="sex_id" class="form-control">
                                     
                                    <?php
                        	
									if($edeit->job_sex_id == 0){
										echo '<option selected value="0">'.Male. '</option>';
										echo '<option value="1">'.Female.'</option>';
										echo '<option value="2">'.Both.'</option>';
				
									}
									elseif ($edeit->job_sex_id == 1)
									{
											
										echo '<option selected value="1">'.Female.'</option>';	
										echo '<option value="0">'.Male.'</option>';
										echo '<option  value="2">'.Both. '</option>';
									}
									else
									{
										echo '<option selected value="2">'.Both. '</option>';
										echo '<option value="0">'.Male.'</option>';
										echo '<option value="1">'.Female.'</option>';
									}
										
									?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Age </label>
                                    <input name="job_age" value="<?=$edeit->job_age;?>" type="text" class="form-control"   />
                                </div>
                                <div class="form-group">
                                    <label>Qualification</label>
                                    <input name="job_qualification" value="<?=$edeit->job_qualification;?>" type="text" class="form-control"   />
                                </div>
                                 <div class="form-group">
                                    <label>Language</label>
                                    <input name="job_language" value="<?=$edeit->job_language;?>" type="text" class="form-control"   />
                                </div>
                                
                                 <div class="form-group">
                                    <label>Closing Date</label>
                                    <input name="job_closing_date" value="<?=$edeit->job_closing_date;?>" type="text" class="form-control" id="datepicker"   required />
                                </div>
                                <input type="hidden" name="job_posted_date" value="<?php date_default_timezone_set('Asia/Phnom_Penh'); echo date("Y-m-d H:i:s");?>"/>
                                
                                 <input name="job_expire_day" type="hidden" class="form-control" value="30"   />
                                 
                                <div class="form-group">
                                    <label>Company Type</label>
                                    <select name="type_id" class="form-control"  required>
                                    <option value="">-- Select Type --</option>
                                    <?php
                                        foreach($show_type as $type):
										if($type->typ_id==$edeit->type_id){
                                        echo '<option selected value="'.$type->typ_id.'">'.$type->typ_name.'</option>';	
										}else{
										echo '<option value="'.$type->typ_id.'">'.$type->typ_name.'</option>';	
										}
                                        endforeach;
                                    ?>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                        <label>Basic/Urgent</label>
                                        <select name="job_new_urgent" class="form-control">
                                         
                                            <option <?php if($edeit->job_new_urgent == 1) { echo 'selected'; } ?> value="1">Basic</option>
                                            <option <?php if($edeit->job_new_urgent == 2) { echo 'selected'; } ?> value="2">Urgent</option>
                                          
                                        </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Contact Person</label>
                                    <input name="job_contact_person" value="<?=$edeit->job_contact_person;?>" type="text" class="form-control"  required />
                                </div>
                                
                                
                                
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="job_contact_email" value="<?=$edeit->job_contact_email;?>" type="email" class="form-control"  required />
                                </div>
                         <?php /*?>       <div class="form-group">
                                    <label>Top Up Job</label>
                                    <select name="job_status" class="form-control">
                                     
                                    <?php
                        	
									if($edeit->job_status == 0){
										echo '<option selected value="0">'.Basic. '</option>';
										echo '<option value="1">'.Premium.'</option>';
										echo '<option value="2">'.Top.'</option>';
				
									}
									elseif ($edeit->job_status == 1)
									{
										echo '<option value="0">'.Basic.'</option>';	
										echo '<option selected value="1">'.Premium.'</option>';	
										echo '<option  value="2">'.Top. '</option>';
									}
									else
									{
										
										echo '<option value="0">'.Basic.'</option>';
										echo '<option value="1">'.Premium.'</option>';
										echo '<option selected value="2">'.Top. '</option>';
									}
										
									?>
                                    </select>
                                </div><?php */?>
                         
                        
                                
                                
                            </div>
                            <div class="col-lg-6">
                            	<div class="form-group">
                                    <label>Job Experience</label>
                                    <input name="job_experience"  value="<?=$edeit->job_experience;?>" type="text" class="form-control"   />
                                </div>
 <!--for select option-->        
       
  <link rel="stylesheet" href="<?php echo base_url();?>library/css/chosen.css">     
  
<!--end for select option-->                               
                                <div class="form-group">
                                    <label>Company:</label><br />
                                   
                                       <select name="comp_id" required  class="chosen-select" style="width:100%;" tabindex="2"  >
                                       
                                        <?php
                                      foreach($show_company as $values):
                                            if($values->com_id==$edeit->comp_id){
                                        echo '<option selected value="'.$values->com_id.'">'.$values->com_name.'</option>';	
                                            }
                                            else{
                                            
                                        echo '<option value="'.$values->com_id.'">'.$values->com_name.'</option>';	
                                            }
                                      endforeach;
                                    ?>
                                  		</select>
                                  
                                </div>
                               <div class="form-group">
                                <label>Industry</label>
                                     <select name="indu_id" required class="form-control">
                              
                                      <?php
                                      foreach($show_industry as $values):
                                            if($values->ind_id==$edeit->indu_id){
                                        echo '<option selected value="'.$values->ind_id.'">'.$values->ind_name.'</option>';	
                                            }
                                            else{
                                            
                                        echo '<option value="'.$values->ind_id.'">'.$values->ind_name.'</option>';	
                                            }
                                      endforeach;
                                    ?>
                                </select>
                                </div>
                                <div class="form-group">
                                    <label>Function:</label>
                                    <select name="func_id" class="form-control">
                                    <?php
                                      foreach($show_function as $func):
										if($func->fun_id==$edeit->func_id){
                                        echo '<option selected value="'.$func->fun_id.'">'.$func->fun_name.'</option>';	
										 }
                                        else
										{  
                                        echo '<option value="'.$func->fun_id.'">'.$func->fun_name.'</option>';		
                                         }
                                      endforeach;
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Location:</label>
                                    <select name="loca_id" class="form-control">
                                    <?php
                                      foreach($show_location as $loc):
										if($loc->loc_id==$edeit->loca_id){
                                        echo '<option selected value="'.$loc->loc_id.'">'.$loc->loc_name.'</option>';
										}
										else
										{
										echo '<option value="'.$loc->loc_id.'">'.$loc->loc_name.'</option>';	
										}
                                      endforeach;
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Job Status:</label>
                                    <select name="term_id" class="form-control">
                                    <?php
                                      foreach($show_term as $term):
									  if($term->ter_id==$edeit->term_id){
                                        echo '<option selected value="'.$term->ter_id.'">'.$term->ter_name.'</option>';	
									  }
									  else
									  {
										echo '<option value="'.$term->ter_id.'">'.$term->ter_name.'</option>';	  
									  }
                                      endforeach;
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Job Level:</label>
                                    <select name="leve_id" class="form-control">
                                    <?php
                                      foreach($show_level as $lev):
										if($lev->lev_id==$edeit->leve_id){
                                        echo '<option selected value="'.$lev->lev_id.'">'.$lev->lev_name.'</option>';
										}
										else
										{
										echo '<option value="'.$lev->lev_id.'">'.$lev->lev_name.'</option>';	
										}
                                      endforeach;
                                    ?>
                                    </select>
                                 </div>
                              	 <div class="form-group">
                                    <label>Salary Range:</label>
                                    <select name="sala_id" class="form-control">
                                    <?php
                                      foreach($show_salary as $sala):
										if($sala->sal_id==$edeit->sala_id){
                                        echo '<option selected value="'.$sala->sal_id.'">'.$sala->sal_name.'</option>';	
										}
										else
										{
										echo '<option value="'.$sala->sal_id.'">'.$sala->sal_name.'</option>';	
										}
                                      endforeach;
                                    ?>
                                    </select>
                                  </div>
                                   <div class="form-group">
                                    <label>Phone</label>
                                    <input name="job_contact_phone" value="<?=$edeit->job_contact_phone;?>" type="text" class="form-control"  required />
                                   </div>
                                   <div class="form-group">
                                    <label>Job Extended</label>
                                    <select name="job_period" class="form-control">
                                     
                                    <?php
                        	
										echo '<option value="0">'."Default". '</option>';
										echo '<option value="30">'."1 Month". '</option>';
										echo '<option value="60">'."2 Months".'</option>';
										echo '<option value="90">'."3 Months".'</option>';
				
									
										
									?>
                                    </select>
                                </div>
                                
                            </div> <!--end col-6-->
                        </div><!--end col-12-->
                     </div>
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                    <label for="editor1">Description</label>
                                    <textarea id="editor1" class="form-control" name="editor1" rows="10" cols="80">
                                        <?=$edeit->job_description;?>
                                    </textarea>
                            </div>
                        </div>
                     </div>
                     
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                    <label for="editor2">Requirement</label>
                                    <textarea id="editor2" class="form-control" name="editor2" rows="10" cols="80">
                                        <?=$edeit->job_requirement;?>
                                    </textarea>
                            </div>
                        </div>
                     </div>
                     
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                    <label for="editor3">Other</label>
                                    <textarea id="editor3" class="form-control" name="editor3" rows="10" cols="80">
                                        <?=$edeit->job_other;?>
                                    </textarea>
                            </div>
                        </div>
                     </div>
                     <?php
                     	foreach($select_status_admin as $rows){
							echo '<input type="hidden" name="admin_status" value="'.$rows->status.'">';
						}
					 ?>
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                            <input type="submit" value="Copy Job" name="add" class="btn btn-primary" />
                             </div>
                        </div>
                    </div> <!--end row-->
                    
                
				</form>
                
                   
                
                
                
           <?php } ?>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
    
</div>

<!--for select option-->
  
  <script src="<?php echo base_url();?>library/js/chosen.jquery.js" type="text/javascript"></script>

  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"50%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>  
<!--end for select option-->

<script>
	  $(function() {
		$( "#datepicker" ).datepicker({ format: 'yyyy/mm/dd' });
	  });
	  $(function() {
		$( "#datepicker2" ).datepicker({ format: 'yyyy/mm/dd' });
	  });
	   $(function() {
		$( "#datepicker3" ).datepicker({ format: 'yyyy/mm/dd' });
	  });
</script>  
     
<?php /*?><?php
else:
	redirect("view_controller/login");
endif;
?><?php */?>