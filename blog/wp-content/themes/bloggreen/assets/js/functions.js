$(document).ready(function() {
	$("#owl-demo").owlCarousel({
		autoPlay: 3000,
		items : 5,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,3]
	});
});



$(function(){
	$('.menuBox').click(function(){
		if (!$(this).hasClass('menuAtivo')) {
			$(this).addClass('menuAtivo');
			$('.searchBox').removeClass('menuAtivo');
			$('.searchCollapse').addClass('scrollCollapseNone');
			$('.menuCollapse').removeClass('scrollCollapseNone');
			$('.menuCollapse').addClass('scrollCollapse').slideDown();
		}
		else if ($(this).hasClass('menuAtivo')) {
			$(this).removeClass('menuAtivo');
			$('.searchBox').removeClass('menuAtivo');
			$('.searchCollapse').addClass('scrollCollapseNone');
			$('.menuCollapse').removeClass('scrollCollapse').slideDown();
			$('.menuCollapse').addClass('scrollCollapseNone');
		}
	});
});


$(function(){
	$('.searchBox').click(function(){
		if (!$(this).hasClass('menuAtivo')) {
			$(this).addClass('menuAtivo');
			$('.menuBox').removeClass('menuAtivo');
			$('.menuCollapse').addClass('scrollCollapseNone');
			$('.searchCollapse').removeClass('scrollCollapseNone');
			$('.searchCollapse').addClass('scrollCollapse');
		}
		else if ($(this).hasClass('menuAtivo')) {
			$(this).removeClass('menuAtivo');
			$('.menuBox').removeClass('menuAtivo');
			$('.menuCollapse').addClass('scrollCollapseNone');
			$('.searchCollapse').removeClass('scrollCollapse');
			$('.searchCollapse').addClass('scrollCollapseNone');
		}
	});
});


$(function(){
	$('.menuCollapse').on('mouseleave', function(){
		$('.menuBox').removeClass('menuAtivo');
    	$('.menuCollapse').addClass('scrollCollapseNone');
    	$('.menuCollapse').removeClass('scrollCollapse');
	});
});


$(function(){
	$('.searchCollapse').on('mouseleave', function(){
		$('.searchBox').removeClass('menuAtivo');
    	$('.searchCollapse').addClass('scrollCollapseNone');
    	$('.searchCollapse').removeClass('scrollCollapse');
	});
});


