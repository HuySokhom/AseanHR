<div class="container">
        <!-----------content left------------------->
        <div class="left-content">
        <?php foreach($show_edit_employee_cv as $edeit): ?>
        	<!--------Cover Letter------------------->
        	<?php /*?><h4><i class="fa fa-hand-o-right" aria-hidden="true"></i> Cover Letter</h4><?php */?>
            <h4 style="text-align:center; color:#000;"><?=$edeit->emp_name;?></h4>
            <form action="<?php echo site_url('Pages/set_cv_register/'.$edeit->cv_id); ?>" method="post" enctype="multipart/form-data">
            	<div class="cv_register">
                    <label>Present address :</label>
                    <input type="text" readonly value="<?=$edeit->emp_address;?>" name="pre_address" placeholder="Write your present address here……"/>
                </div>
                <div class="cv_register" style="padding-left:5px;">
                    <label>Phone Number :</label>
                    <input type="text" name="num_phone" readonly value="<?=$edeit->emp_phone;?>" placeholder="Write your phone numbers here……"/>
                </div>
                <div class="cv_register" style="padding-left:64px;">
                    <label>Email :</label>
                    <input type="text" name="email" readonly value="<?=$edeit->emp_email;?>" placeholder="Write your e-mail here……"/>
                </div>
                <hr/>
                <div class="body_cv_register">
                    <label>Date <span style="padding-left:85px;">:</span></label>
                    <input type="text" name="date" value="<?=$edeit->date;?>" placeholder="Write present date here……"/>
                </div>
                
                <div class="body_cv_register">
                    <label>Apply for  <span style="padding-left:58px;">:</span></label>
                    <input type="text" name="apply_for" value="<?=$edeit->apply_for;?>" placeholder="Write position apply for ……"/>
                </div>

                <div class="body_cv_register">
                    <label>Function <span style="padding-left:60px;">:</span></label>
                    <select name="func_id" class="form-control" required>
                        <option value="">-- Select Function --</option>
                        <?php
                            foreach($show_function as $func):
							   if($func->fun_id == $edeit->func_id):
                            	  echo '<option selected value="'.$func->fun_id.'">'.$func->fun_name.'</option>';
							   else:
							   	  echo '<option value="'.$func->fun_id.'">'.$func->fun_name.'</option>';
							   endif;	
                            endforeach;
                        ?>
                    </select>
                </div>
                <div class="body_cv_register">
                    <label>Industry <span style="padding-left:65px;">:</span></label>
                    <select name="indu_id" class="form-control" required>
                        <option value="">-- Select Industry --</option>
                        <?php
                            foreach($show_industry as $industry):
							   if($industry->ind_id == $edeit->indu_id):
                            	   echo '<option selected value="'.$industry->ind_id.'">'.$industry->ind_name.'</option>';
							   else:
							       echo '<option value="'.$industry->ind_id.'">'.$industry->ind_name.'</option>';
							   endif;	
                            endforeach;
                        ?>
                    </select>
                </div>
                <div class="body_cv_register">
                    <label>Location <span style="padding-left:60px;">:</span></label>
                    <select name="loca_id" class="form-control" required>
                        <option value="">-- Select Location --</option>
                        <?php
                            foreach($show_location as $location):
							    if($location->loc_id == $edeit->loca_id):
                            	    echo '<option selected value="'.$location->loc_id.'">'.$location->loc_name.'</option>';
							    else:
									echo '<option value="'.$location->loc_id.'">'.$location->loc_name.'</option>';
								endif;	
                            endforeach;
                        ?>
                    </select>
                </div>
                <div class="body_cv_register">
                    <label>Salary Expected <span style="padding-left:11px;">:</span></label>
                    <select name="sala_id" class="form-control" required>
                        <option value="">-- Select Salary Rank --</option>
                        <?php
                            foreach($show_salary as $sala):
							    if($sala->sal_id == $edeit->sala_id):
                                     echo '<option selected value="'.$sala->sal_id.'">'.$sala->sal_name.'</option>';
							    else:
								    echo '<option value="'.$sala->sal_id.'">'.$sala->sal_name.'</option>';
								endif;	
                            endforeach;
                        ?>
                    </select>
                </div>
                <div class="job-description">
                	<div style="width:97%">
                        <label>Your detail cover letter write here</label>
                        <textarea id="editor7" name="detail_cover" role="20"><?=$edeit->detail_cover?></textarea>
                    </div>
                </div>
                <!--------End Cover Letter------------------->
                 
                <!--------Curriculum Vitae (CV)----------------->
                <h4 style="text-align:center;"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Curriculum Vitae (CV)</h4>
           
                <div class="group-post-job">
                	<div class="infor_register">
                    	<input type="hidden" value="<?=$edeit->emp_id;?>" name="empl_id"/>
                    
                        <label>Full Name <span style="padding-left:15px;">:</span></label>
                        <input type="text" value="<?=$edeit->emp_name;?>" name="num_hire"/>
                        <label>Sex <span style="padding-left:55px;">:</span></label>
						<?php if($edeit->emp_sex == 0){
							  echo "<input disabled type='text' value='Male'>";
							}elseif($edeit->emp_sex == 1){
							   echo "<input disabled type='text' value='Female'>";
							}else{
							   echo "<input disabled type='text' value='Both'>";
							} ?>
                        <label>Date of Birth :</label>
                        <input type="text"  name="date_of_birth" value="<?=$edeit->date_of_birth;?>"/>
                        <label>Age <span style="padding-left:55px;">:</span></label>
                        <input type="text" name="age" value="<?=$edeit->age;?>"/>
                        <label>Nationality <span style="padding-left:12px;">:</span></label>
                        <input type="text" name="nationality" value="<?=$edeit->nationality;?>"/>
                        <label>Religion <span style="padding-left:27px;">:</span></label>
                        <input type="text" name="religion" value="<?=$edeit->religion;?>"/>
                        <label>Health <span style="padding-left:39px;">:</span></label>
                        <input type="text" name="health" value="<?=$edeit->health;?>"/>
                    </div>
                    <div class="infor_register_img">
                       
                    	 <?php if($edeit->emp_image == "user.png" ){ ?>
                            <img src="<?php echo base_url();?>image/image_employee/user.png" style="width:150px; height:190px; margin-left:100px; margin-top:20px;"/>
                            <?php }else{ ?>
                             <img src="<?php echo base_url();?>image/img_profile/<?php echo $edeit->emp_image; ?>" style="width:150px; height:190px; margin-left:100px; margin-top:20px;"/>     
                         <?php } ?>
                    
                    </div>
                </div>
                <div class="reference_regis">
                    <label>Marital Status <span style="padding-left:8px;">:</span></label>
                    <input type="text" name="marital_status" value="<?=$edeit->marital_status;?>"/>
                </div>
                <div class="reference_regis">
                    <label>Phone Number :</label>
                    <input type="text" value="<?=$edeit->emp_phone;?>" readonly />
                </div>
                <div class="reference_regis">
                    <label>E-mail <span style="padding-left:55px;">:</span></label>
                    <input type="text" value="<?=$edeit->emp_email;?>" readonly />
                </div>
             
                <div class="reference_regis">
                    <label>Perminant Address :</label>
                    <input style="width:625px;" value="<?=$edeit->emp_address;?>" readonly type="text" />
                </div>
             
                <div class="job-description">
                	<div style="width:97%">
                        <label>Personal Profile & Qualification</label>
                        <textarea id="editor1" name="qualification" role="20"><?=$edeit->qualification;?></textarea>
                    </div>
                </div>
                <div class="job-description">
                	<div style="width:97%">
                        <label>Employment History</label>
                        <textarea id="editor2" name="history" role="20"><?=$edeit->history;?></textarea>
                    </div>
                </div>
                <div class="job-description">
                	<div style="width:97%">
                        <label>Ecducation Background</label>
                        <textarea  id="editor8" name="education" role="20"><?=$edeit->education;?></textarea>
                    </div>
                </div>
                
                <div class="job-description">
                	<div style="width:97%">
                        <label>Training Skills and Course</label>
                        <textarea id="editor3" name="training_skill" role="20"><?=$edeit->training_skill;?></textarea>
                    </div>
                </div>
                <div class="job-description">
                	<div style="width:97%">
                        <label>COMPUTER SKILL</label>
                        <textarea id="editor4" name="computer_skill" role="20"><?=$edeit->computer_skill;?></textarea>
                    </div>
                </div>
                <div class="job-description">
                	<div style="width:97%">
                        <label>Language</label>
                        <textarea id="editor5" name="language" role="20"><?=$edeit->language;?></textarea>
                    </div>
                </div>
                <div class="job-description">
                	<div style="width:97%">
                        <label>Hobbies</label>
                        <textarea id="editor6" name="hobby" role="20"><?=$edeit->hobby;?></textarea>
                    </div>
                </div>
                <h3 style="color:#E6062B">Reference One</h3>
                <div class="reference_regis">
                    <label>Full Name <span style="padding-left:30px;">:</span></label>
                    <input type="text" name="name1" value="<?=$edeit->name1?>"/>
                </div>
                <div class="reference_regis">
                    <label>Position <span style="padding-left:44px;">:</span></label>
                    <input type="text" name="position1" value="<?=$edeit->position1?>"/>
                </div>
                <div class="reference_regis">
                    <label>Phone Number :</label>
                    <input type="text" name="phone1" value="<?=$edeit->phone1?>"/>
                </div>
                <div class="reference_regis">
                    <label>E-mail <span style="padding-left:55px;">:</span></label>
                    <input type="text" name="email1" value="<?=$edeit->email1?>"/>
                </div>
                <h3 style="color:#E6062B">Reference Two</h3>
                <div class="reference_regis">
                    <label>Full Name <span style="padding-left:30px;">:</span></label>
                    <input type="text" name="name2" value="<?=$edeit->name2?>"/>
                </div>
                <div class="reference_regis">
                    <label>Position <span style="padding-left:44px;">:</span></label>
                    <input type="text" name="position2" value="<?=$edeit->position2?>"/>
                </div>
                <div class="reference_regis">
                    <label>Phone Number :</label>
                    <input type="text" name="phone2" value="<?=$edeit->phone2?>"/>
                </div>
                <div class="reference_regis">
                    <label>E-mail <span style="padding-left:55px;">:</span></label>
                    <input type="text" name="email2" value="<?=$edeit->email2?>"/>
                </div>
                <h3 style="color:#E6062B">Reference Three</h3>
                <div class="reference_regis">
                    <label>Full Name <span style="padding-left:30px;">:</span></label>
                    <input type="text" name="name3" value="<?=$edeit->name3?>"/>
                </div>
                <div class="reference_regis">
                    <label>Position <span style="padding-left:44px;">:</span></label>
                    <input type="text" name="position3" value="<?=$edeit->position3?>"/>
                </div>
                <div class="reference_regis">
                    <label>Phone Number :</label>
                    <input type="text" name="phone3" value="<?=$edeit->phone3?>"/>
                </div>
                <div class="reference_regis">
                    <label>E-mail <span style="padding-left:55px;">:</span></label>
                    <input type="text" name="email3" value="<?=$edeit->email3?>"/>
                </div>
                <div class="submit-job-post">
                    <input type="submit" class="create-job-post" value="Create CV"/>
                </div>
                <!--------End Curriculum Vitae (CV)----------------->
            </form>
            <?php endforeach; ?>
      	</div>
        
        <!----------------End Content Left------------------>
        
        <!-------------Recruitment Right------------------->
        <div class="recruitment-employer">
        	<div class="employer">
            	<h3>Recruitment Employer</h3>
             	 <?php  foreach($show_company_all as $values){ ?>
                <div class="damnel-employer">
                	<div class="list-employer">
                    
                     <a href="<?=site_url("Pages/company/".$values->com_id);?>"  title="<?php echo $values->com_name; ?>"><img src="<?php echo base_url(); ?>/image/image_company/<?php echo $values->com_image;?>"  style="width:82px; height:70px;" /></a>
                    
                 	</div>
                </div>
                <?php } ?>
            </div>
        </div>
        <!-------------End Recruitment Right------------------->
    </div>
    
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
				CKEDITOR.replace( 'editor4', {
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
				CKEDITOR.replace( 'editor5', {
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
				CKEDITOR.replace( 'editor6', {
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
				CKEDITOR.replace( 'editor7', {
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
					CKEDITOR.replace( 'editor8', {
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