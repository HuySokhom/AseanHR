<div class="container">
        <!-----------content left------------------->
        <div class="left-content">
        	<h4><i class="fa fa-hand-o-right" aria-hidden="true"></i> Create a new job</h4>
            <form action="" method="post" enctype="multipart/form-data">
            	<div class="group-post-job">
                    <div class="job-post">
                        <label>Job Title</label>
                        <input type="text" name="job_title"/>
                    </div>
                    <div class="job-post">
                        <label>Job Experience</label>
                        <input type="text" name="job_experience"/>
                    </div>
                </div>
                <div class="group-post-job">
                    <div class="job-post">
                        <label>Number of Hire</label>
                        <input type="text" name="num_hire"/>
                    </div>
                    <div class="job-post">
                        <label>Company</label>
                        <select name="company">
                            <option value="">Parrot Studio</option>
                            <option value="">ABA Bank</option>
                            <option value="">Menu Life</option>
                        </select>
                    </div>
                </div>
                <div class="group-post-job">
                    <div class="job-post">
                        <label>Sex</label>
                        <select name="sex">
                            <option value="">Parrot Studio</option>
                            <option value="">ABA Bank</option>
                            <option value="">Menu Life</option>
                        </select>
                    </div>
                    <div class="job-post">
                        <label>Industry</label>
                        <select name="industry">
                            <option value="">Parrot Studio</option>
                            <option value="">ABA Bank</option>
                            <option value="">Menu Life</option>
                        </select>
                    </div>
                </div>
                <div class="group-post-job">
                    <div class="job-post">
                        <label>Age</label>
                        <input type="text" name="age"/>
                    </div>
                    <div class="job-post">
                        <label>Function</label>
                        <select name="function">
                            <option value="">Parrot Studio</option>
                            <option value="">ABA Bank</option>
                            <option value="">Menu Life</option>
                        </select>
                    </div>
                </div>
                <div class="group-post-job">
                    <div class="job-post">
                        <label>Qualification</label>
                        <input type="text" name="qualification"/>
                    </div>
                    <div class="job-post">
                        <label>Location</label>
                        <select name="location">
                            <option value="">Parrot Studio</option>
                            <option value="">ABA Bank</option>
                            <option value="">Menu Life</option>
                        </select>
                    </div>
                </div>
                <div class="group-post-job">
                    <div class="job-post">
                        <label>Language</label>
                        <input type="text" name="language"/>
                    </div>
                    <div class="job-post">
                        <label>Job Status</label>
                        <select name="job_status">
                            <option value="">Parrot Studio</option>
                            <option value="">ABA Bank</option>
                            <option value="">Menu Life</option>
                        </select>
                    </div>
                </div>
                <div class="group-post-job">
                    <div class="job-post">
                        <label>Closing Date</label>
                        <input type="text" name="closing_date"/>
                    </div>
                    <div class="job-post">
                        <label>Job Lavel</label>
                        <select name="job_lavel">
                            <option value="">Parrot Studio</option>
                            <option value="">ABA Bank</option>
                            <option value="">Menu Life</option>
                        </select>
                    </div>
                </div>
                <div class="group-post-job">
                    <div class="job-post">
                        <label>Publish Date</label>
                        <input type="text" name="pubish_date"/>
                    </div>
                    <div class="job-post">
                        <label>Salary Range</label>
                        <select name="salary_range">
                            <option value="">Parrot Studio</option>
                            <option value="">ABA Bank</option>
                            <option value="">Menu Life</option>
                        </select>
                    </div>
                </div>
                <div class="job-description">
                	<div style="width:97%;">
                        <label>Description</label>
                        <textarea id="editor1" name="description" role="20"></textarea>
                    </div>
                </div>
                <div class="job-description">
                	<div style="width:97%;">
                        <label>Requirement</label>
                        <textarea id="editor2" name="requirement" role="20"></textarea>
                    </div>
                </div>
                <div class="submit-job-post">
                    <input type="submit" name="age" class="create-job-post" value="Create Job"/>
                </div>
            </form>
      	</div>
        <!----------------End Content Left------------------>
        
        <!-------------Recruitment Right------------------->
        <div class="recruitment-employer">
        	<div class="employer">
            	<h3>Recruitment Employer</h3>
                <div class="damnel-employer">
                	<div class="list-employer">
                    	<img src="img/17051046532327565685.png" style="width:82px;"/>
                    </div>
                </div>
                <div class="damnel-employer">
                	<div class="list-employer">
                    	<img src="img/12274461076969749073.png"/>
                    </div>
                </div>
                <div class="damnel-employer">
                	<div class="list-employer">
                    	<img src="img/9632604572572886782.png"/>
                    </div>
                </div>
                <div class="damnel-employer">
                	<div class="list-employer">
                    	<img src="img/5820303448265550889.png"/>
                    </div>
                </div>
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
	</script>