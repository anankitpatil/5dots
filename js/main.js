$(document).ready(function() {

	// Init nav
	$('nav').after($('nav').clone().addClass('clone'));
	$('nav.clone .navbar-toggle').attr('data-target', '#5dots-navbar-2');
	$('nav.clone .navbar-collapse').attr('id', '5dots-navbar-2');

	// Nav smooth scroll
	$('nav li a:not(.mail), nav .navbar-header .early').click(function(e) {
		e.preventDefault();
		var href = this.getAttribute('href');
		if ($(this).hasClass('early')) {
			$('html,body').animate({scrollTop: 0}, 600, 'easeInOutCubic', function() {
				$('#subscriptionMail').focus();
			});
		} else {
			$('html,body').animate({scrollTop: $(this.getAttribute('href')).offset().top}, 600, 'easeInOutCubic', function() {
				window.location.hash = href;
			});
			$(this).parents('nav').find('.navbar-toggle').click();
		}
	});

	// Mail form
	$('#contact').validator().on('submit', function(e) {
	  	if (e.isDefaultPrevented()) {
		// handle the invalid form...
	  	} else {
			e.preventDefault();
			$.post('database.php', $(this).serialize(), function(result) {
				$('#contact').hide(300);
				$('.first .alert-success').css('display', 'block').html(result);
			}).fail(function() {
				$('#contact').hide(300);
				$('.first .alert-danger').css('display', 'block').html(result);
			});
			$.post('sendwelcome.php', $(this).serialize(), function(result) {
				 //alert(result);
			});
		}
	});

	// Feedback form
	$('.feedback').click(function(e) {
		if (e.target.className === 'feedback-pull') {
			if($(this).hasClass('active')) $(this).removeClass('active');
			else {
				$(this).addClass('active');
				$('.feedback-form #feedbackName').focus();
			}
		}
	});
	$('#feedback').validator().on('submit', function(e) {
	  	if (e.isDefaultPrevented()) {
		// handle the invalid form...
	  	} else {
			e.preventDefault();
			$.post('feedback.php', $(this).serialize(), function(result) {
				$('#feedback').hide(300);
				$('.feedback .alert-success').css('display', 'block').html(result);
			}).fail(function() {
				$('#feedback').hide(300);
				$('.feedback .alert-danger').css('display', 'block').html(result);
			});
			$.post('sendfeedback.php', $(this).serialize(), function(result) {
				//alert(result);
			});
		}
	});

	$(window).scroll(function() {
		//fix nav
		if($(window).scrollTop() >= $('.first').outerHeight() + 60) $('nav.clone').addClass('active');
		else $('nav.clone').removeClass('active');
		//top background slide
		$('.first').css('backgroundPosition', '100% ' + $(window).scrollTop()/5 + 'px');
		//third background slide
		$('.third').css('backgroundPosition', 'center ' + ($(window).scrollTop() - $('.third').offset().top + 	600)/5 + 'px');
		//Scroll top button
		if($(window).scrollTop() > 1200){
			if(!$('.scrollup').length){
				$('<i class="fa fa-chevron-up scrollup"></i>').hide().appendTo('body').fadeIn().click(function(){
					$('html,body').animate({scrollTop:0}, 600);
				});
			}
		} else {
			if($('.scrollup').length){
				$('.scrollup').fadeOut(function(){ $(this).remove() });
			}
		}
		//Pause carousel
		if($(window).scrollTop() >= ($('.fifth').offset().top + $('.fifth').outerHeight())) $('.carousel').carousel('pause');
		else $('.carousel').carousel('cycle');
	});

	// Init WOW script
	new WOW().init();

});
