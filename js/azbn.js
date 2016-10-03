$(function(){
	
	
	$(document.body).on('click.azbn', '.azbn-client-flt-btn', {}, function(event){
		event.preventDefault();
		
		var btn = $(this);
		btn.toggleClass('active');
		
	});
	
	
	$(document.body).on('click.azbn', '.azbn-client-flt-ok-btn', {}, function(event){
		event.preventDefault();
		
		var btn = $(this);
		var flt_btn_arr = $('.azbn-client-flt-btn.active');
		var items = $('.azbn-client-item');
		
		if(flt_btn_arr.length) {
			
			items.hide();
			
			flt_btn_arr.each(function(index){
				var section = $(this).attr('data-section-id') || 0;
				
				items.filter('[data-section-id="' + section + '"]').fadeIn('fast');
			});
			
		} else {
			
			items.fadeIn('fast');
			
		}
		
		
		
		//$('.azbn-modal-clients-close-btn').trigger('click');
		
		$('#modal-filter').modal('hide');
		
		$('.azbn-filter-tabs li[data-filter-type="all"]').removeClass('active');
		$('.azbn-filter-tabs li[data-filter-type="by_section"]').addClass('active');
		
	});
	
	
	$(document.body).on('click.azbn', '.azbn-client-flt-clear-btn', {}, function(event){
		event.preventDefault();
		
		var btn = $(this);
		
		var flt_btn_arr = $('.azbn-client-flt-btn.active');
		flt_btn_arr.removeClass('active');
		
		var items = $('.azbn-client-item');
		items.fadeIn('fast');
		
		//$('.azbn-modal-clients-close-btn').trigger('click');
		$('.azbn-filter-tabs li[data-filter-type="by_section"]').removeClass('active');
		$('.azbn-filter-tabs li[data-filter-type="all"]').addClass('active');
		
	});
	
	/*
	$(document.body).on('click.azbn', '.azbn-infrast-block', {}, function(event){
		event.preventDefault();
		
		var btn = $(this);
		var target = btn.closest('.tab-pane').attr('id') || '';
		
		$('.tabs-site').find('a[data-toggle="tab"][href="#' + target + '"]').eq(0).trigger('click');
		
	});
	*/
	
	$(document.body).on('submit.azbn', '.azbn-feedback-form', {}, function(event){
		event.preventDefault();
		
		var form = $(this);
		
		var name = form.find('input[name="f[name]"]').val();
		var email = form.find('input[name="f[email]"]').val();
		var comment = form.find('textarea[name="f[comment]"]').val();
		
		if(name != '' && email != '' && comment != '') {
			
			
			var form_srl = form.serialize();
			
			$.post('/contacts/azbn-feedback-form.php', form_srl, function(data){
				console.warn(data);
				
				form.find('.modal-btn-close').trigger('click');
				
				form.closest('.modal').modal('hide');
				
				$('#modal-reviews-form .modal-title').html('Сообщение принято');
				$('#modal-reviews-form .modal-main_info').html('Ваше сообщение принято. Наши менеджеры свяжутся с Вами в ближайшее время.');
				
				$('#modal-reviews-form').modal('show');
				
			});
			
			
		} else {
			
			if(comment == '') {
				form.find('textarea[name="f[comment]"]').attr('placeholder', 'Введите свое сообщение').focus();
			}
			if(email == '') {
				form.find('input[name="f[email]"]').attr('placeholder', 'Введите свой Email').focus();
			}
			if(name == '') {
				form.find('input[name="f[name]"]').attr('placeholder', 'Введите свое имя').focus();
			}
			
		}
		
	});
	
	
	$(document.body).on('click.azbn', '.azbn-modal-video-close-btn', {}, function(event){
		
		var btn = $(this);
		
		var src = $('#azbn-modal-video-iframe').attr('src')
		
		$('#azbn-modal-video-iframe').attr('src', '-' + src);
		$('#azbn-modal-video-iframe').attr('src', src);
		
	});
	
	
	
	
	
	
	/*
	Новая SVG схема
	*/
	
	$(document.body).on('azbn.setActive', 'svg#azbn-svg .theme-block', {}, function(event){
		event.preventDefault();
		
		$('svg#azbn-svg .theme-block').attr('data-hovered', 0);
		
		var block = $(this);
		var area = block.attr('data-area-id') || 0;
		block.attr('data-hovered', 1);
		
		$('.azbn-service-list ul li').removeClass('active');
		$('.azbn-service-list ul li a[data-area-id="' + area + '"]').closest('li').addClass('active');
		
	});
	
	
	$(document.body).on('click.azbn', 'svg#azbn-svg .theme-block .theme-block-btn', {}, function(event){
		event.preventDefault();
		
		var btn = $(this);
		btn.closest('.theme-block').trigger('azbn.setActive');
		
	});
	
	$(document.body).on('click.azbn', '.azbn-service-list ul li a', {}, function(event){
		event.preventDefault();
		
		var btn = $(this);
		var block = btn.closest('.azbn-service-list');
		var area = btn.attr('data-area-id') || 0;
		
		$('svg#azbn-svg .theme-block[data-area-id="' + area + '"]').trigger('azbn.setActive');
		
		block.find('li .desc').remove().empty();
		
		var li = btn.parent();
		$('svg#azbn-svg .theme-block[data-area-id="' + area + '"] .desc-cont .cont .desc').clone(true).appendTo(li);
		
		//block.find('li').removeClass('active');
		//btn.closest('li').addClass('active');
		
	});
	
	/*
	/Новая SVG схема
	*/
	
	
})