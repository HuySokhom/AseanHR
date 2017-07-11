	$(function(){
		$('#splay').click(function() {$('#slider').cycle('resume'); return false;});
		$('#spause').click(function() {$('#slider').cycle('pause'); return false;});


	$('#slider').cycle({
	
		fx:		'scrollHorz',
		next:		'#snext',
		prev:		'#sprev',
		pager:		'#spager',
                pause:         1,
		timeout:	3000,
		speed:		900
	
	});
	});
        
        $(function(){
	$('.food-slide-container').cycle({
	
		//fx:			'scrollHorz',blindX, blindY,blindZ,cover scrollUp scrollDown scrollVert
                fx:'scrollHorz',
		pause: 1,
                next:		'.food-slide-next',
		prev:		'.food-slide-pre',
                pager: '.pg-food-slide',
		timeout:	0,
		speed:		900
	
	});
	});
        
        $(function(){
	$('#slider1').cycle({
	
		//fx:			'scrollHorz',blindX, blindY,blindZ,cover scrollUp scrollDown scrollVert
                fx:'scrollDown',
		pause: 1,
		timeout:	5000,
		speed:		1000
	
	});
	});
        
        $(function(){
	$('#slide2').cycle({
	
		//fx:			'scrollHorz',blindX, blindY,blindZ,cover scrollUp scrollDown scrollVert
                fx:'fade',
		pause: 1,
		timeout:	7000,
		speed:		900
	
	});
	});



