
                  
                  
                  



<!--///////////////////////////////////////////////////////////////////////////////////-->

<div class="container">
        <!-----------content left------------------->
        <div class="left-company-profile">
        	<div class="company-profile">
            	<ul class="form">
                     <li class="selected"><a class="profile" href="<?=site_url("Companys/employer_center/");?>"><i class="fa fa-briefcase"></i>Job posted</a></li>
                        <li><a class="messages" href="<?=site_url("Companys/employee_apply_job/");?>"><i class="fa fa-list"></i>List of Applicant</a></li>
                        <li><a class="messages" href="<?=site_url("Companys/browse_employee_cv/");?>"><i class="fa fa-search-plus"></i>Browse Applicant CV</a></li>
                        <li><a class="settings" href="<?=site_url("Companys/account_setting/");?>"><i class="icon-cog"></i>Account Settings</a></li>
                        <li><a class="logout" href="<?php echo base_url(); ?>index.php/login_controller/logout"><i class="icon-signout"></i>Logout</a></li>
                </ul>
            </div>
        </div>
        <!----------------End Content Left------------------>
        
        <!-------------Recruitment Right------------------->
        <div class="left-company-profile-content">
            <div class="job-description-view" style="margin-top:15px;">
                <h4>Company Information</h4>
            </div>
            <div class="review-company">
                <div class="list-com-main" style="padding-left:10px;">
                    <p>Company</p>
                    <p>Type</p>
                    <p>Industry</p>
                    <p>Employees</p>
                    <p>Location</p>
                </div>
                <div class="list-com-detail">
                <?php
				foreach($select_profile as $profile):
				 foreach($show_company as $company){ 
                                    if($company->com_id == $profile->com_id){
                            ?>
                            
                    <p><?php echo $profile->com_name; ?></p>
                    <p><?php foreach($show_type as $typ){ 
                                if($typ->typ_id == $profile->type_id){
                            ?>
                            <?php echo $typ->typ_name; ?>
                            <?php } }?>
                    </p>
                    <p><?php foreach($show_industry as $ind){ 
                                    if($ind->ind_id == $profile->industry_id){
                            ?>
                            <?php echo $ind->ind_name; ?>
                            <?php } }?>
                    </p>
                    <p><?php echo $profile->com_employee_num; ?></p>
                    
               
                    <p><?php foreach($show_location as $loc){ 
                                            if($loc->loc_id == $profile->loca_id){
                                            ?>
                                            <?php echo $loc->loc_name; ?>
                                            <?php } }?>
                    </p>
                    <?php } } 
					endforeach;
					?>
                </div>
                <div class="list-com-logo">
                    <?php foreach($show_company as $com){
                        if($com->com_id == $profile->com_id){	
                    ?>
                    <a href="<?=site_url("Pages/company/".$com->com_id);?>" title="<?php echo $com->com_name; ?>">
                    <img src="<?php echo base_url();?>image/image_company/<?php echo $com->com_image; ?>"/>
                    <?php } } ?></a>
                </div>
            </div>
        	<div class="job-description-view" style="margin-top:15px;">
                <h4>Create a new job</h4>
            </div>
            <?php foreach($show_edit_job as $edeit){?>
            <form action="<?php echo site_url('Companys/insert_job/'.$edeit->job_id); ?>" method="post" enctype="multipart/form-data">
            	<div class="group-post-job">
                
                <?php $row_num = $this->Admin_model->show_reference_number();
                				foreach($row_num as $row){
							   ?>
                              <input type="hidden"  class="form-control" value="JOB-<?=$row->job_id + 1;?>" name="job_reference" required />
                              
                     <?php } ?>
                     
                      <input name="job_expire_day" type="hidden" class="form-control" value="30"   />
                      
                    <div class="job-post-create">
                        <label><span style="margin-right:40px;">Job Title</span></label>
                        <input type="text"  name="job_name"/>
                    </div>
                    <div class="job-post-create">
                        <label>Job Experience</label>
                        <input type="text" value="<?=$edeit->job_experience;?>" name="job_experience"/>
                    </div>
                </div>
                <div class="group-post-job">
                    <div class="job-post-create">
                        <label>Number of Hire</label>
                        <input type="text" value="<?=$edeit->job_hire;?>" name="job_hire"/>
                    </div>
                    <div class="job-post-create">
                        <label><span style="margin-right:38px;">Company</span></label>
                         <select name="comp_id" readonly>
						  <?php
                              foreach($select_profile as $com):
                              echo '<option value="'.$com->com_id.'">'.$com->com_name.'</option>';	
                              endforeach;
                          ?>
                          </select>
                    </div>
                </div>
                <div class="group-post-job">
                    <div class="job-post-create">
                         <label><span style="margin-right:70px;">Sex</span></label>
                          <select name="sex_id" >
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
                    <div class="job-post-create">
                        <label><span style="padding-right:48px;">Industry</span></label>
                          <select name="indu_id"  readonly>
                                    <?php
                                        foreach($select_profile as $com):
											foreach($show_industry as $ind){
												if($com->industry_id == $ind->ind_id){
                                        echo '<option value="'.$ind->ind_id.'">'.$ind->ind_name.'</option>';
												}
											}
                                        endforeach;
                                    ?>
                                    </select>
                    </div>
                </div>
                <div class="group-post-job">
                    <div class="job-post-create">
                        <label><span style="padding-right:70px;">Age</span></label>
                        <input type="text" value="<?=$edeit->job_age;?>" name="job_age"/>
                    </div>
                    <div class="job-post-create">
                        <label><span style="padding-right:43px;">Function</span></label>
                        <select name="func_id">
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
                </div>
                <div class="group-post-job">
                    <div class="job-post-create">
                        <label><span style="padding-right:13px;">Qualification</span></label>
                        <input type="text"  value="<?=$edeit->job_qualification;?>" name="job_qualification"/>
                    </div>
                    <div class="job-post-create">
                        <label><span style="padding-right:43px;">Location</span></label>
                        <select name="loca_id">
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
                </div>
                <div class="group-post-job">
                    <div class="job-post-create">
                        <label><span style="padding-right:30px;">Language</span></label>
                        <input type="text" value="<?=$edeit->job_language;?>" name="job_language"/>
                    </div>
                    <div class="job-post-create">
                        <label><span style="padding-right:33px;">Job Status</span></label>
                        <select name="term_id">
						
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
                </div>
                <div class="group-post-job">
                    <div class="job-post-create">
                        <label><span style="padding-right:13px;">Closing Date</span></label>
                        <input type="text" value="<?=$edeit->job_closing_date;?>" name="job_closing_date" class="datepicker"/>
                    </div>
                    <div class="job-post-create">
                        <label><span style="padding-right:38px;">Job Lavel</span></label>
                        <select name="leve_id">
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
                </div>
                <div class="group-post-job">
                    <div class="job-post-create">
                        <label><span style="padding-right:15px;">Publish Date</span></label>
                        <input type="text" readonly name="job_posted_date"  value="<?php date_default_timezone_set('Asia/Phnom_Penh'); echo date("Y-m-d H:i:s");?>"/>
                    </div>
                    <div class="job-post-create">
                        <label><span style="padding-right:15px;">Salary Range</span></label>
                        <select name="sala_id">
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
                </div>
                
                <div class="group-post-job">
                    <div class="job-post-create">
                        <label><span style="margin-right:8px;">Company Type</span></label>
                          <select name="type_id" required>
                          <option value="">-- Select Type --</option>
                          <?php
                              foreach($show_type as $type):
							  if($type->typ_id==$edeit->type_id){
                              echo '<option selected value="'.$type->typ_id.'">'.$type->typ_name.'</option>';	
							  }
							  else
							  {
								echo '<option value="'.$type->typ_id.'">'.$type->typ_name.'</option>'; 
							 }
                              endforeach;
                          ?>
                          </select>
                    </div>
                    <?php /*?><div class="job-post-create">
                        <label><span style="margin-right:8px;">Image Urgent/New</span></label>
                        <input type="file" name="userfile[]" style="border:none; width:228px;"/>
                    </div><?php */?>
                    
                    <div class="job-post-create">
                            <label><span style="padding-right:15px;">Basic/Urgent</span></label>
                            <select name="job_new_urgent">
                             
                                <option <?php if($edeit->job_new_urgent == 1) { echo 'selected'; } ?> value="1">Basic</option>
                                <option <?php if($edeit->job_new_urgent == 2) { echo 'selected'; } ?> value="2">Urgent</option>
                              
                            </select>
                    </div>
                    
                    
                </div>
                
                
                
                
                
                
                <div class="job-description">
                	<div style="width:97%;">
                        <label>Description</label>
                        <textarea id="editor1" name="editor1" role="20">
                        <?=$edeit->job_description;?>
                        </textarea>
                    </div>
                </div>
                <div class="job-description">
                	<div style="width:97%;">
                        <label>Requirement</label>
                        <textarea id="editor2" name="editor2" role="20">
                        <?=$edeit->job_requirement;?>
                        </textarea>
                    </div>
                </div>
                
                <div class="job-description">
                	<div style="width:97%;">
                        <label>Other</label>
                        <textarea id="editor3" name="editor3" role="20">
                        <?=$edeit->job_other;?>
                        </textarea>
                    </div>
                </div>
                
                <div class="job-description-view">
                    <h4>Contact information</h4>
                    <div class="group-post-job">
                    	<label>Contact Person</label>
                        <input style="margin-top:10px; margin-bottom:5px; width:500px; padding:5px 5px;" name="job_contact_person" value="<?=$edeit->job_contact_person;?>" type="text" required /><br/>
                        <label><span style="margin-right:53px;">Phone</span></label>
                        <input style="margin-bottom:5px; width:500px; padding:5px 5px;" name="job_contact_phone" 
                        value="<?=$edeit->job_contact_phone;?>" type="text" required /><br/>
                        <label><span style="margin-right:57px;">Email</span></label>
                        <input style="margin-bottom:10px; width:500px; padding:5px 5px" name="job_contact_email" 
                        value="<?=$edeit->job_contact_email;?>" type="email" required />
                    </div>
                </div>
                
                
                
                
                  
                  <?php /*?>  <div class="col-lg-12">
                        <div class="form-group">
                         <label>Mark as Active/Disable Job</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php
                                if($edeit->job_role==0)
								{
                                  echo'<td align="center">'.anchor("Companys/set_job_disable/".$edeit->job_id.'/1',img("library/images/enable.jpg"),'title="Click to Disable Job"').'</td>';
                                } 
                                elseif($edeit->job_role==1)
								{
									echo'<td align="center">'.anchor("Companys/set_job_disable/".$edeit->job_id.'/0',img("library/images/disable.jpg"),'title="Click to Active Job"').'</td>';
                                }
                                            
                            ?>
                            
                          </div>
                      </div><?php */?>
                
                <?php } ?>
                <?php
                     	foreach($select_status_admin as $rows){
							echo '<input type="hidden" name="admin_status" value="'.$rows->status.'">';
						}
					 ?>
                <div class="submit-job-post">
                    <input type="submit" name="add" class="create-job-post" value="Copy Job"/>
                </div>
            </form>
      	</div>
        <!-------------End Recruitment Right------------------->
    </div>











		
<script src="<?php echo base_url();?>ad_library/ckeditor/ckeditor.js"></script>
<script>
				CKEDITOR.replace( 'editor1', {
					extraPlugins: 'htmlwriter',
					filebrowserBrowseUrl : '<?php echo base_url();?>ad_library/ckeditor/core/elfinder.html',
					uiColor : '#9AB8F3',
					contentsCss: 'body {color:#000; background-color#:FFF;}',
					docType: '<!DOCTYPE HTML>',
					allowedContent:
						'h1 h2 h3 p pre[align]; ' +
						'blockquote code kbd samp var del ins cite q b i u strike ul ol li hr table tbody tr td th caption; ' +
						'img[!src,alt,align,width,height]; font[!face]; font[!family]; font[!color]; font[!size]; font{!background-color}; a[!href]; a[!name]',
					coreStyles_bold: { element: 'b' },
					coreStyles_italic: { element: 'i' },
					coreStyles_underline: { element: 'u' },
					coreStyles_strike: { element: 'strike' },
					font_style: {
						element: 'font',
						attributes: { 'face': '#(family)' }
					},
					fontSize_sizes: 'xx-small/1;x-small/2;small/3;medium/4;large/5;x-large/6;xx-large/7',
					fontSize_style: {
						element: 'font',
						attributes: { 'size': '#(size)' }
					},
					colorButton_foreStyle: {
						element: 'font',
						attributes: { 'color': '#(color)' }
					},
					colorButton_backStyle: {
						element: 'font',
						styles: { 'background-color': '#(color)' }
					},
					stylesSet: [
						{ name: 'Computer Code', element: 'code' },
						{ name: 'Keyboard Phrase', element: 'kbd' },
						{ name: 'Sample Text', element: 'samp' },
						{ name: 'Variable', element: 'var' },
						{ name: 'Deleted Text', element: 'del' },
						{ name: 'Inserted Text', element: 'ins' },
						{ name: 'Cited Work', element: 'cite' },
						{ name: 'Inline Quotation', element: 'q' }
					],
					on: {
						pluginsLoaded: configureTransformations,
						loaded: configureHtmlWriter
					}
				});
				function configureTransformations( evt ) {
					var editor = evt.editor;
					editor.dataProcessor.htmlFilter.addRules( {

						attributes: {
							style: function( value, element ) {
								return CKEDITOR.tools.convertRgbToHex( value );
							}
						}
					} );
					function alignToAttribute( element ) {
						if ( element.styles[ 'text-align' ] ) {
							element.attributes.align = element.styles[ 'text-align' ];
							delete element.styles[ 'text-align' ];
						}
					}
					editor.filter.addTransformations( [
						[ { element: 'p',	right: alignToAttribute } ],
						[ { element: 'h1',	right: alignToAttribute } ],
						[ { element: 'h2',	right: alignToAttribute } ],
						[ { element: 'h3',	right: alignToAttribute } ],
						[ { element: 'pre',	right: alignToAttribute } ]
					] );
				}
				function configureHtmlWriter( evt ) {
					var editor = evt.editor,
						dataProcessor = editor.dataProcessor;
					dataProcessor.writer.selfClosingEnd = '>';
					var dtd = CKEDITOR.dtd;
					for ( var e in CKEDITOR.tools.extend( {}, dtd.$nonBodyContent, dtd.$block, dtd.$listItem, dtd.$tableContent ) ) {
						dataProcessor.writer.setRules( e, {
							indent: true,
							breakBeforeOpen: true,
							breakAfterOpen: false,
							breakBeforeClose: !dtd[ e ][ '#' ],
							breakAfterClose: true
						});
					}
				}
				CKEDITOR.replace( 'editor2', {
					extraPlugins: 'htmlwriter',
					filebrowserBrowseUrl : '<?php echo base_url();?>ad_library/ckeditor/core/elfinder.html',
					uiColor : '#9AB8F3',
					contentsCss: 'body {color:#000; background-color#:FFF;}',
					docType: '<!DOCTYPE HTML>',
					allowedContent:
						'h1 h2 h3 p pre[align]; ' +
						'blockquote code kbd samp var del ins cite q b i u strike ul ol li hr table tbody tr td th caption; ' +
						'img[!src,alt,align,width,height]; font[!face]; font[!family]; font[!color]; font[!size]; font{!background-color}; a[!href]; a[!name]',
					coreStyles_bold: { element: 'b' },
					coreStyles_italic: { element: 'i' },
					coreStyles_underline: { element: 'u' },
					coreStyles_strike: { element: 'strike' },
					font_style: {
						element: 'font',
						attributes: { 'face': '#(family)' }
					},
					fontSize_sizes: 'xx-small/1;x-small/2;small/3;medium/4;large/5;x-large/6;xx-large/7',
					fontSize_style: {
						element: 'font',
						attributes: { 'size': '#(size)' }
					},
					colorButton_foreStyle: {
						element: 'font',
						attributes: { 'color': '#(color)' }
					},
					colorButton_backStyle: {
						element: 'font',
						styles: { 'background-color': '#(color)' }
					},
					stylesSet: [
						{ name: 'Computer Code', element: 'code' },
						{ name: 'Keyboard Phrase', element: 'kbd' },
						{ name: 'Sample Text', element: 'samp' },
						{ name: 'Variable', element: 'var' },
						{ name: 'Deleted Text', element: 'del' },
						{ name: 'Inserted Text', element: 'ins' },
						{ name: 'Cited Work', element: 'cite' },
						{ name: 'Inline Quotation', element: 'q' }
					],
					on: {
						pluginsLoaded: configureTransformations,
						loaded: configureHtmlWriter
					}
				});
				function configureTransformations( evt ) {
					var editor = evt.editor;
					editor.dataProcessor.htmlFilter.addRules( {

						attributes: {
							style: function( value, element ) {
								return CKEDITOR.tools.convertRgbToHex( value );
							}
						}
					} );
					function alignToAttribute( element ) {
						if ( element.styles[ 'text-align' ] ) {
							element.attributes.align = element.styles[ 'text-align' ];
							delete element.styles[ 'text-align' ];
						}
					}
					editor.filter.addTransformations( [
						[ { element: 'p',	right: alignToAttribute } ],
						[ { element: 'h1',	right: alignToAttribute } ],
						[ { element: 'h2',	right: alignToAttribute } ],
						[ { element: 'h3',	right: alignToAttribute } ],
						[ { element: 'pre',	right: alignToAttribute } ]
					] );
				}
				function configureHtmlWriter( evt ) {
					var editor = evt.editor,
						dataProcessor = editor.dataProcessor;
					dataProcessor.writer.selfClosingEnd = '>';
					var dtd = CKEDITOR.dtd;
					for ( var e in CKEDITOR.tools.extend( {}, dtd.$nonBodyContent, dtd.$block, dtd.$listItem, dtd.$tableContent ) ) {
						dataProcessor.writer.setRules( e, {
							indent: true,
							breakBeforeOpen: true,
							breakAfterOpen: false,
							breakBeforeClose: !dtd[ e ][ '#' ],
							breakAfterClose: true
						});
					}
				}
							CKEDITOR.replace( 'editor3', {
					extraPlugins: 'htmlwriter',
					filebrowserBrowseUrl : '<?php echo base_url();?>ad_library/ckeditor/core/elfinder.html',
					uiColor : '#9AB8F3',
					contentsCss: 'body {color:#000; background-color#:FFF;}',
					docType: '<!DOCTYPE HTML>',
					allowedContent:
						'h1 h2 h3 p pre[align]; ' +
						'blockquote code kbd samp var del ins cite q b i u strike ul ol li hr table tbody tr td th caption; ' +
						'img[!src,alt,align,width,height]; font[!face]; font[!family]; font[!color]; font[!size]; font{!background-color}; a[!href]; a[!name]',
					coreStyles_bold: { element: 'b' },
					coreStyles_italic: { element: 'i' },
					coreStyles_underline: { element: 'u' },
					coreStyles_strike: { element: 'strike' },
					font_style: {
						element: 'font',
						attributes: { 'face': '#(family)' }
					},
					fontSize_sizes: 'xx-small/1;x-small/2;small/3;medium/4;large/5;x-large/6;xx-large/7',
					fontSize_style: {
						element: 'font',
						attributes: { 'size': '#(size)' }
					},
					colorButton_foreStyle: {
						element: 'font',
						attributes: { 'color': '#(color)' }
					},
					colorButton_backStyle: {
						element: 'font',
						styles: { 'background-color': '#(color)' }
					},
					stylesSet: [
						{ name: 'Computer Code', element: 'code' },
						{ name: 'Keyboard Phrase', element: 'kbd' },
						{ name: 'Sample Text', element: 'samp' },
						{ name: 'Variable', element: 'var' },
						{ name: 'Deleted Text', element: 'del' },
						{ name: 'Inserted Text', element: 'ins' },
						{ name: 'Cited Work', element: 'cite' },
						{ name: 'Inline Quotation', element: 'q' }
					],
					on: {
						pluginsLoaded: configureTransformations,
						loaded: configureHtmlWriter
					}
				});
				function configureTransformations( evt ) {
					var editor = evt.editor;
					editor.dataProcessor.htmlFilter.addRules( {

						attributes: {
							style: function( value, element ) {
								return CKEDITOR.tools.convertRgbToHex( value );
							}
						}
					} );
					function alignToAttribute( element ) {
						if ( element.styles[ 'text-align' ] ) {
							element.attributes.align = element.styles[ 'text-align' ];
							delete element.styles[ 'text-align' ];
						}
					}
					editor.filter.addTransformations( [
						[ { element: 'p',	right: alignToAttribute } ],
						[ { element: 'h1',	right: alignToAttribute } ],
						[ { element: 'h2',	right: alignToAttribute } ],
						[ { element: 'h3',	right: alignToAttribute } ],
						[ { element: 'pre',	right: alignToAttribute } ]
					] );
				}
				function configureHtmlWriter( evt ) {
					var editor = evt.editor,
						dataProcessor = editor.dataProcessor;
					dataProcessor.writer.selfClosingEnd = '>';
					var dtd = CKEDITOR.dtd;
					for ( var e in CKEDITOR.tools.extend( {}, dtd.$nonBodyContent, dtd.$block, dtd.$listItem, dtd.$tableContent ) ) {
						dataProcessor.writer.setRules( e, {
							indent: true,
							breakBeforeOpen: true,
							breakAfterOpen: false,
							breakBeforeClose: !dtd[ e ][ '#' ],
							breakAfterClose: true
						});
					}
				}
</script>
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

