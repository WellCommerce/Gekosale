$(document).ready(function() {

	$.datepicker.regional['pl'] = GFormDate.Language;
	$.datepicker.setDefaults($.datepicker.regional['pl']);
	$('.block').GBlock();
	$('.box').GBox();
	$('select').GSelect();
//	$('#search').GSearch(); 
	$('#message-bar').GMessageBar();
	$('.simple-stats .tabs').tabs({fx: {opacity: 'toggle',duration: 75}});

	$('.scrollable-tabs').GScrollableTabs();
	GCore.Init();	
	$('.order-notes').tabs();
	$('.sticky-progress').GSticky();
	$('#navigation > li > ul > li > ul > li.active').parent().parent().parent().parent().addClass('active');
	$('#navigation > li > ul > li.active').parent().parent().addClass('active');
	$('#navigation > li > ul > li.active').parent().addClass('active');
});
