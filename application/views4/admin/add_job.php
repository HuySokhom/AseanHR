<?php /*?><?php
if($this->session->userdata("userID")&&$this->session->userdata("role")==0):
?><?php */?>



<br />
<div class="col-md-12 box-1">
    <!-- general form elements disabled -->
    <div class="box box-warning">
        <div class="box-header">
            <h3 class="box-title">Add Job</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
				<?php echo form_open("admin_controller/insert_job");?>
					<!-- text input -->
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
                                    <input name="job_hire" type="text" class="form-control"   />
                                </div>
                                <div class="form-group">
                                    <label>Sex</label>
                                    <select name="sex_id" class="form-control">
                                        <option value="0">Male</option>
                                        <option value="1">Female</option>
                                        <option value="2">Both</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Age </label>
                                    <input name="job_age" type="text" class="form-control"   />
                                </div>
                                <div class="form-group">
                                    <label>Qualification</label>
                                    <input name="job_qualification" type="text" class="form-control"   />
                                </div>
                                 <div class="form-group">
                                    <label>Language</label>
                                    <input name="job_language" type="text" class="form-control"   />
                                </div>
                                
                                 <div class="form-group">
                                    <label>Closing Date</label>
                                    <input name="job_closing_date" type="text" class="form-control datepicker"  required />
                                </div>
                                
                                
                                
                                
                                
                                <input type="hidden" name="job_posted_date" value="<?php date_default_timezone_set('Asia/Phnom_Penh'); echo date("Y-m-d H:i:s");?>"/>
                                 <div class="form-group">
                                    <label>Company Type</label>
                                    <select name="type_id" class="form-control"  required>
                                    <option value="">-- Select Type --</option>
                                    <?php
                                        foreach($show_type as $type):
                                        echo '<option value="'.$type->typ_id.'">'.$type->typ_name.'</option>';	
                                        endforeach;
                                    ?>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                        <label>Basic/Urgent</label>
                                        <select name="job_new_urgent" class="form-control">
                                            <option value="1">Basic</option>
                                            <option value="2">Urgent</option>
                                          
                                        </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Contact Person</label>
                                    <input name="job_contact_person" type="text" class="form-control"  required />
                                </div>
                                
                                
                                
                                
                                
                                 <input name="job_expire_day" type="hidden" class="form-control" value="30"   />
                                 
                            </div>
                            <div class="col-lg-6">
                              	<div class="form-group">
                                    <label>Job Experience</label>
                                    <input name="job_experience" type="text" class="form-control"   />
                                </div>
                                
 <!--for select option-->        
       
  <link rel="stylesheet" href="<?php echo base_url();?>library/css/chosen.css">     
  
<!--end for select option-->                               
                                <div class="form-group">
                                    <label>Company:</label><br />
                                   
                                       <select name="comp_id" required  class="chosen-select" style="width:100%;" tabindex="2"  >
                                        <option value="">--ជ្រើសរើស--</option>
                                        <?php
                                            foreach($show_company as $com):
                                            echo '<option value="'.$com->com_id.'">'.$com->com_name.'</option>';	
                                            endforeach;
                                        ?>
                                  		</select>
                                  
                                </div>
                                <div class="form-group">
                                    <label>Industry:</label>
                                    <select name="indu_id" class="form-control" required>
                                    	<option value="">-- Select Industry --</option>
                                    <?php
                                        foreach($show_industry as $ind):
                                        echo '<option value="'.$ind->ind_id.'">'.$ind->ind_name.'</option>';	
                                        endforeach;
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Function:</label>
                                    <select name="func_id" class="form-control" required>
                                    	<option value="">-- Select Function --</option>
                                    <?php
                                        foreach($show_function as $func):
                                        echo '<option value="'.$func->fun_id.'">'.$func->fun_name.'</option>';	
                                        endforeach;
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Location:</label>
                                    <select name="loca_id" class="form-control" required>
                                    	<option value="">-- Select Location --</option>
                                    <?php
                                        foreach($show_location as $loc):
                                        echo '<option value="'.$loc->loc_id.'">'.$loc->loc_name.'</option>';	
                                        endforeach;
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Job Status:</label>
                                    <select name="term_id" class="form-control" required>
                                    	<option value="">-- Select Term --</option>
                                    <?php
                                        foreach($show_term as $term):
                                        echo '<option value="'.$term->ter_id.'">'.$term->ter_name.'</option>';	
                                        endforeach;
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Job Level:</label>
                                    <select name="leve_id" class="form-control" required>
                                    	<option value="">-- Select Level --</option>
                                    <?php
                                        foreach($show_level as $lev):
                                        echo '<option value="'.$lev->lev_id.'">'.$lev->lev_name.'</option>';	
                                        endforeach;
                                    ?>
                                    </select>
                                 </div>
                              	 <div class="form-group">
                                    <label>Salary Range:</label>
                                    <select name="sala_id" class="form-control" required>
                                    	<option value="">-- Select Salary Rank --</option>
                                    <?php
                                        foreach($show_salary as $sala):
                                        echo '<option value="'.$sala->sal_id.'">'.$sala->sal_name.'</option>';	
                                        endforeach;
                                    ?>
                                    </select>
                                  </div>
                                  
                                  <div class="form-group">
                                    <label>Phone</label>
                                    <input name="job_contact_phone" type="text" class="form-control"  required />
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="job_contact_email" type="email" class="form-control"  required />
                                </div>
                                
                            </div> <!--end col-6-->
                        </div><!--end col-12-->
                     </div>
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                    <label for="editor1">Description</label>
                                    <textarea id="editor1" class="form-control" name="editor1" rows="10" cols="80">
                                        
                                    </textarea>
                            </div>
                        </div>
                     </div>
                     
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                    <label for="editor2">Requirement</label>
                                    <textarea id="editor2" class="form-control" name="editor2" rows="10" cols="80">
                                        
                                    </textarea>
                            </div>
                        </div>
                     </div>
                     
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                    <label for="editor3">Other</label>
                                    <textarea id="editor3" class="form-control" name="editor3" rows="10" cols="80">
                                        
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
                            <input type="submit" value="Publish Job" name="add" class="btn btn-primary" />
                             </div>
                        </div>
                    </div> <!--end row-->
      
                
				</form>
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
		$( ".datepicker" ).datepicker({ format: 'yyyy/mm/dd' });
	  });
</script>  
     
<?php /*?><?php
else:
	redirect("view_controller/login");
endif;
?><?php */?>