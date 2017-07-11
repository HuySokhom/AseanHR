<script src="<?php echo base_url();?>ad_library/ckeditor/ckeditor.js"></script>

<script>
	$(document).ready(function() {
		$('#btnSubmit').click(function(e) {
			var isValid = true;
			$('input.required').each(function() {
				if ($.trim($(this).val()) == '') {
					isValid = false;
					$(this).css({
						"border": "1px solid red",
						"background": "#FFCECE"
					});
				}
				else {
					$(this).css({
						"border": "",
						"background": ""
					});
				}
			});
			$('select.required').each(function() {
				if ($.trim($(this).val()) == '') {
					isValid = false;
					$(this).css({
						"border": "1px solid red",
						"background": "#FFCECE"
					});
				}
				else {
					$(this).css({
						"border": "",
						"background": ""
					});
				}
			});
			if (isValid == false) 
				e.preventDefault();
		});
	});
</script>     
    
    
	
	
		<div id="contain">
        	<div class="re_header">
            	Register New Employer Account
            </div>
            <div class="re_message">
				<?php
                    if($this->session->flashdata("error-form")){
                        echo $this->session->flashdata("error-form");
                    }elseif($this->session->flashdata("success-register")){
                        echo $this->session->flashdata("success-register");
                    }
                ?> 
            </div>

        	<div>
            	<form role="form" method="post" action="<?=site_url("login_controller/act_register_employer");?>" enctype="multipart/form-data">
                	<div class="group-post-job">
                        <div class="job-post">
                            <label>Name</label>
                            <input name="name" type="text"  required />
                        </div>
                        <div class="job-post">
                            <label>Employee Number</label>
                            <input name="com_employee_num" type="text" required />
                        </div>
                    </div>
                    <div class="group-post-job">
                        <div class="job-post">
                            <label>Contact Person</label>
                            <input name="com_contact_person" type="text" required />
                        </div>
                        <div class="job-post">
                            <label>Phone</label>
                            <input name="com_phone" type="text" required />
                        </div>
                    </div>
                    <div class="group-post-job">
                        <div class="job-post">
                            <label>Fax (Optional)</label>
                            <input name="com_fax" type="text"  />
                        </div>
                        <div class="job-post">
                            <label>Email</label>
                            <input name="com_email" type="text" required />
                        </div>
                    </div>
                    <div class="group-post-job">
                        <div class="job-post">
                            <label>New Password</label>
                            <input name="com_password" type="text" required />
                        </div>
                        <div class="job-post">
                            <label>Industry</label>
                            <select name="indu_id">
                                <?php
                                    foreach($show_industry as $ind):
                                    echo '<option value="'.$ind->ind_id.'">'.$ind->ind_name.'</option>';	
                                    endforeach;
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="group-post-job">
                        <div class="job-post">
                            <label>Type:</label>
                            <select name="type_id">
                                <?php
                                    foreach($show_type as $type):
                                    echo '<option value="'.$type->typ_id.'">'.$type->typ_name.'</option>';	
                                    endforeach;
                                ?>
                            </select>
                        </div>
                        <div class="job-post">
                            <label>Location:</label>
                            <select name="loca_id">
                                <?php
                                    foreach($show_location as $loc):
                                    echo '<option value="'.$loc->loc_id.'">'.$loc->loc_name.'</option>';	
                                    endforeach;
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="group-post-job">
                        <div class="job-post">
                            <label>Website (Optional)</label>
                            <input name="com_website" type="text"  />
                        </div>
                        <div class="job-post">
                            <label>Address</label>
                            <input name="com_address" type="text" required />
                        </div>
                    </div>
                    <div class="group-post-job">
                        <div class="job-post" style="width:96% !important;">
                            <label>Map (Optional)</label>
                            <input style="width:99% !important;" type="text" name="com_map"/>
                        </div>
                    </div>
                    <div class="job-description">
                        <div style="width:97%">
                            <label>Description (Optional)</label>
                            <textarea id="editor7" name="editor1" role="20"></textarea>
                        </div>
                    </div>
                    <div class="submit-job-post">
                        <input type="submit" id="btnSubmit" class="create-job-post" value="Add Company" name="add"/>
                    </div>  
            </form>

            </div>
		</div><!--contain-->


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

	</script>