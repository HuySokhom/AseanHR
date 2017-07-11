<script src="<?php echo base_url();?>ad_library/ckeditor/ckeditor.js"></script>

    
<div class="container">
        <!-----------content left------------------->
        <div style="width:800px; margin:0 auto;">
        	<h4 style="margin-top:15px; margin-bottom:0px; font-size:18px; color:#E6062B;"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Edit your Account </h4>
            <?php foreach($select_profile as $edit){ ?>
            <form action="<?=site_url("Companys/update_profile/");?>" method="post" enctype="multipart/form-data">
            	<div class="group-post-job">
                    <div class="job-post">
                        <label>Name</label>
                        <input type="text" name="name" value="<?=$edit->com_name;?>"/>
                    </div>
                    <div class="job-post">
                        <label>Password</label>
                        <input   name="com_password" type="password"/>
                    </div>
                </div>
                <div class="group-post-job">
                    <div class="job-post">
                        <label>Employee Number</label>
                        <input type="text" name="com_employee_num" value="<?=$edit->com_employee_num;?>"/>
                    </div>
                    <div class="job-post">
                        <label>Industry</label>
                        <select name="indu_id" class="form-control">
								<?php
                                    foreach($show_industry as $ind):
									if($ind->ind_id == $edit->industry_id){
                                    echo '<option selected value="'.$ind->ind_id.'">'.$ind->ind_name.'</option>';
									}
									else
									{
									echo '<option value="'.$ind->ind_id.'">'.$ind->ind_name.'</option>';
									}
                                    endforeach;
	
                                ?>  
                         </select>
                    </div>
                </div>
                <div class="group-post-job">
                    <div class="job-post">
                        <label>Contact Person</label>
                        <input type="text"	name="com_contact_person" value="<?=$edit->com_contact_person;?>"/>
                    </div>
                    <div class="job-post">
                        <label>Type</label>
                        <select name="type_id" class="form-control">
								<?php
                                    foreach($show_type as $type):
									if($type->typ_id == $edit->type_id){
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
                </div>
                <div class="group-post-job">
                    <div class="job-post">
                        <label>Phone</label>
                        <input type="text" name="com_phone" value="<?=$edit->com_phone;?>"/>
                    </div>
                    <div class="job-post">
                        <label>Location</label>
                          <select name="loca_id" class="form-control">
								<?php
                                    foreach($show_location as $loc):
									if($loc->loc_id == $edit->loca_id){
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
                    <div class="job-post">
                        <label>Fax</label>
                        <input type="text" name="com_fax" value="<?=$edit->com_fax;?>" />
                    </div>
                    <div class="job-post">
                        <label>Website</label>
                        <input type="text" name="com_website" value="<?=$edit->com_website;?>"  />
                    </div>
                </div>
                <div class="group-post-job">
                    <div class="job-post">
                        <label>Email</label>
                        <input type="email" name="com_email" value="<?=$edit->com_email;?>" />
                    </div>
                    <div class="job-post">
                        <label>Address</label>
                        <input type="text" name="com_address" value="<?=$edit->com_address;?>" />
                    </div>
                </div>
                <div class="group-post-job">
                    <div class="job-post" style="width:97.5%;">
                        <label>Map</label>
                        <input type="text"  name="com_map" value="<?=$edit->com_map;?>" style="width:97.5%;"/>
                    </div>
                </div>
                
                <div class="job-description">
                	<div style="width:97%;">
                        <label>Description</label>
                        
                        <textarea id="editor1"  class="form-control" name="editor1"  role="20">
                                    <?=$edit->com_description;?>
                        </textarea>
                    </div>
                </div>
                <div class="submit-job-post">
                    <input type="submit" name="age" class="create-job-post" value="Update Company"/>
                </div>
            </form>
            <?php } ?>
      	</div>
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

	</script>