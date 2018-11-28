$(document).ready(function(){
	if($('.table .row.sid').length)
	{
		$('.table .row.sid').each(function(){
			// $(this).find('.item:visible .image').sliceHeight({lineheight: -3});
			$(this).find('.item:visible .properties').sliceHeight({fixWidth: 2});
			$(this).find('.item:visible .text').sliceHeight({fixWidth: 2});
			$(this).find('.item:visible .title').sliceHeight();
			$(this).find('.item:visible .previewtext').sliceHeight();
			$(this).find('.item:visible').sliceHeight();
		})
	}
	if($('.table.item-views .tabs a').length)
	{
		$('.table.item-views .tabs a').first().addClass('heightsliced');
		$('.table.item-views .tabs a').on('click', function() {
			if(!$(this).hasClass('heightsliced')){
				$('.table.item-views .tab-pane.active').find('.item .image').sliceHeight({lineheight: -3});
				$('.table.item-views .tab-pane.active').find('.item .properties').sliceHeight();
				$('.table.item-views .tab-pane.active').find('.item .text').sliceHeight();
				$('.table.item-views .tab-pane.active').find('.item .text').sliceHeight();
				$(this).addClass('heightsliced');
			}
		});
	}
})