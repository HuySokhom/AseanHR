
<!--editor-->
	<script src="<?php echo base_url();?>library/ckeditor/ckeditor.js"></script>
	<script src="<?php echo base_url();?>library/ckeditor/samples/sample.js"></script>
  <link href="<?php echo base_url();?>library/ckeditor/ckeditors/sample.css" rel="stylesheet" type="text/css" />
	
	<meta name="ckeditor-sample-required-plugins" content="sourcearea">
	<meta name="ckeditor-sample-name" content="Output HTML">
	<meta name="ckeditor-sample-group" content="Advanced Samples">
	<meta name="ckeditor-sample-description" content="Configuring CKEditor to produce legacy HTML 4 code.">	
	<!--editor-->

<script type="text/javascript">

$(document).ready(function(){

	$("#theSelect").change(function(){  

	$("#theSelect option:selected").click(function(){

	//document.write("good");

	//$("#submn").show();

	

            var value = $("#theSelect option:selected").val();

			//document.write(value);

            //var value = "Sub Menu";

			if(value=="Sub Menu"){

			$("#submn").show();	
			$("#submn_of_sub").hide();
						
			}else if(value=="Sub Menu of Sub Menu"){

			$("#submn_of_sub").show();
			$("#submn").hide();
				
			}else{

			$("#submn").hide();
			$("#submn_of_sub").hide();

			};

	});

});

});



</script>



	<div class="row">

		<div class="col-lg-12">

			<h1 class="page-header">Add Menu</h1>

		</div>

		<!-- /.col-lg-12 -->

	</div>

	<!-- /.row -->

        <div class="row">

            <div class="col-lg-12">

                <div class="panel panel-default">

                    <div class="panel-heading">

                            Add your Menu here

                    </div>

                        <div class="panel-body">

                            <div class="row">

                                <div class="col-lg-12">

                                

                                    <form action="padd_menu" name="frm_page" method="post" enctype="multipart/form-data" >
                                    	<div class="form-group">

                                            <label>Language</label>

                                            <select name="language" class="form-control" >
                                            <?php foreach($sl_alllanguage->result () as $val){?>

												<option value="<?php echo $val->ID_language;?>"><?php echo $val->language_name;?></option>
                                            <?php } ?>    

											</select>
                                          </div>  

                                        <div class="form-group">

                                            <label>Name of Menu</label>

                                            <input type="text" name="menu_name" class="form-control">

                                        </div>

										<div class="form-group">

                                            <label>Type of Menu</label>

                                            <select name="type" class="form-control" id="theSelect">

												<option value="Menu">Menu</option>
												<option value="Sub Menu">Sub Menu I</option>
                                                <option value="Sub Menu of Sub Menu">Sub Menu II</option>

											</select>
                                          </div>  

                                        </div class="form-group">

											<script>

												//var a="tha";

												//document.write(a);

											</script>

											

										<div>

											

										</div>

										

										<div class="form-group" style="display:none;" id="submn" >

                                            <label>Sub menu of Menu Name</label>

                                            <select name="idmn" class="form-control" id="theSelect">

												<?php foreach($sel_mn->result() as $valuesmn){?>

												<option value="<?php echo $valuesmn->id_menu;?>"><?php echo $valuesmn->menu_name;?></option>

												<?php } ?>

											</select>

                                        </div>
                                        
                                        <div class="form-group" style="display:none;" id="submn_of_sub" >

                                            <label>Sub menu of Sub Menu</label>

                                            <select name="idmn_ofsub" class="form-control" id="theSelect">

												<?php foreach($sel_mn_subofsub->result() as $valuesmn_sub){?>

												<option value="<?php echo $valuesmn_sub->id_menu;?>"><?php echo $valuesmn_sub->menu_name;?></option>

												<?php } ?>

											</select>

                                        </div>

										

										<div class="form-group">

                                            <label>Content</label>

                                            <textarea cols="100" id="editor1" name="content" rows="10"></textarea>

                                            <!--<textarea class="ckeditor" id="editor1" name="content" cols="100" rows="10"></textarea>-->

                                        </div>

                                        <input type="submit" name="add_menu"  value="Add" class="btn btn-default">

                                        <button type="reset" class="btn btn-default">Cancel</button>

                                    </form>

								</div>	

						</div>			

				</div>					

		</div>

 



<!--hide sub menu-->

<script>

$(document).ready(function(){

  $("#other").click(function(){

    $(".other").show();

	$("#projects").hide();

	$("#other").hide();

	

  });

});

</script>

 

<!--editor-->

<script>



				CKEDITOR.replace( 'editor1', {

					/*

					 * Ensure that htmlwriter plugin, which is required for this sample, is loaded.

					 */

					extraPlugins: 'htmlwriter',

					filebrowserBrowseUrl : '<?php echo base_url();?>library/ckeditor/core/elfinder.html', // eg. 'includes/elFinder/elfinder.html'

					uiColor : '#9AB8F3',



					/*

					 * Style sheet for the contents

					 */

					contentsCss: 'body {color:#000; background-color#:FFF;}',



					/*

					 * Simple HTML5 doctype

					 */

					docType: '<!DOCTYPE HTML>',



					/*

					 * Allowed content rules which beside limiting allowed HTML

					 * will also take care of transforming styles to attributes

					 * (currently only for img - see transformation rules defined below).

					 *

					 * Read more: http://docs.ckeditor.com/#!/guide/dev_advanced_content_filter

					 */

					allowedContent:

						'h1 h2 h3 p pre[align]; ' +

						'blockquote code kbd samp var del ins cite q b i u strike ul ol li hr table tbody tr td th caption; ' +

						'img[!src,alt,align,width,height]; font[!face]; font[!family]; font[!color]; font[!size]; font{!background-color}; a[!href]; a[!name]',



					/*

					 * Core styles.

					 */

					coreStyles_bold: { element: 'b' },

					coreStyles_italic: { element: 'i' },

					coreStyles_underline: { element: 'u' },

					coreStyles_strike: { element: 'strike' },



					/*

					 * Font face.

					 */



					// Define the way font elements will be applied to the document.

					// The "font" element will be used.

					font_style: {

						element: 'font',

						attributes: { 'face': '#(family)' }

					},



					/*

					 * Font sizes.

					 */

					fontSize_sizes: 'xx-small/1;x-small/2;small/3;medium/4;large/5;x-large/6;xx-large/7',

					fontSize_style: {

						element: 'font',

						attributes: { 'size': '#(size)' }

					},



					/*

					 * Font colors.

					 */



					colorButton_foreStyle: {

						element: 'font',

						attributes: { 'color': '#(color)' }

					},



					colorButton_backStyle: {

						element: 'font',

						styles: { 'background-color': '#(color)' }

					},



					/*

					 * Styles combo.

					 */

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



				/*

				 * Add missing content transformations.

				 */

				function configureTransformations( evt ) {

					var editor = evt.editor;



					editor.dataProcessor.htmlFilter.addRules( {

						attributes: {

							style: function( value, element ) {

								// Return #RGB for background and border colors

								return CKEDITOR.tools.convertRgbToHex( value );

							}

						}

					} );



					// Default automatic content transformations do not yet take care of

					// align attributes on blocks, so we need to add our own transformation rules.

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



				/*

				 * Adjust the behavior of htmlWriter to make it output HTML like FCKeditor.

				 */

				function configureHtmlWriter( evt ) {

					var editor = evt.editor,

						dataProcessor = editor.dataProcessor;



					// Out self closing tags the HTML4 way, like <br>.

					dataProcessor.writer.selfClosingEnd = '>';



					// Make output formatting behave similar to FCKeditor.

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