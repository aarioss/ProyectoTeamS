$(window).load(function(){
			$(".flexslider").flexslider();
		});
/*Funcion para ejecutar el flexsiler*/
$(document).ready(function(){
	$("a[rel=trabajos]").fancybox({
		"transitionIn":"fade",
		"transitionOut":"elastic",
		"titlePosition":"over",
		"titleFormat":function(title, currentArray, currentIndex, currentOpts){
			return '<span id="fancybox-title-over"> Trabajo '+(currentIndex+1)+' / '+ currentArray.length +(title.length?' &nbsp; '+title:'')+'</span>';
		}
	});
});

