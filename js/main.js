var oishiUI = {
	options: {
		galleriestoload: 2
	},

	init: function() {
		var that = this;

		// this.UI.loadersprite();

		// mitoUI.loader(function() {
		// 	that.UI.init();
		// });
		
		var atContactPage = $('.oishi-contact-page').length;
		if(atContactPage) {
			// alert('contact page loaded');
			// alert($('option:first-child').length);
			$('select').css('color','#888');
			$('option:first-child').attr('selected','true').attr('disabled','true').css('color','#aaa');
			$('select').bind('change',function(){
				// alert('!');
				$('select').css('color','black');
			})
		}

		 var navMain = $("#main-nav");
		 // console.log('mainNav = ', navMain)

	     navMain.on("click", "a", function () {
	         navMain.collapse('hide');
	         $(".navbar-toggle").addClass("collapsed");
	     });



	},

	UI: {
		galleries: {

		},

		init: function() {               
            var that = this;

            window.setTimeout(function() {
	            that.initGallery({
	            	name: "2015",
	            	gallery: ".pagesection-popup-gallery#year-2015 .popup-gallery",
	            	button: ".pagesection-popup-gallery#year-2015 .btn-loadmore"
	            });
            }, 2000);

            // this.initGallery({
            // 	name: "2014",
            // 	gallery: ".pagesection-popup-gallery#year-2014 .popup-gallery",
            // 	button: ".pagesection-popup-gallery#year-2014 .btn-loadmore"
            // });

			/*var popupgallery_2015 = mitoUI.UI.masonry('.pagesection-popup-gallery#year-2015 .popup-gallery');

			var popupgallery_2015_loadmore = mitoUI.UI.masonryloadmorejson(
				{
					buttonselector: '.pagesection-popup-gallery#year-2015 .btn-loadmore',
					packeryinstance: popupgallery_2015,
					ajaxurl: MitoGallery.ajax_url,
					payload: {
						action: MitoGallery.gallery_action,
						nonce_name: MitoGallery.nonce_name,
						nonce_value: MitoGallery.nonce_value
					}
					
				}
			);

			var popupgallery_2014 = mitoUI.UI.masonry('.pagesection-popup-gallery#year-2014 .popup-gallery');

			var popupgallery_2014_loadmore = mitoUI.UI.masonryloadmorejson(
				{
					buttonselector: '.pagesection-popup-gallery#year-2014 .btn-loadmore',
					packeryinstance: popupgallery_2014,
					ajaxurl: MitoGallery.ajax_url,
					payload: {
						action: MitoGallery.gallery_action,
						nonce_name: MitoGallery.nonce_name,
						nonce_value: MitoGallery.nonce_value
					}
					
				}
			);*/
			
			$(".btn-loadmore-galleries").click(function() {
				that.loadgallery();
				return false;
			});
		},

		initGallery: function(options) {
			var that = this;
			this.galleries[options.name] = {};
			this.galleries[options.name]["gallery"] = mitoUI.UI.masonry(options.gallery);

			this.galleries[options.name]["loadmore"] = mitoUI.UI.masonryloadmorejson(
				{
					buttonselector: options.button,
					packeryinstance: that.galleries[options.name].gallery,
					ajaxurl: MitoGallery.ajax_url,
					payload: {
						action: MitoGallery.gallery_action,
						nonce_name: MitoGallery.nonce_name,
						nonce_value: MitoGallery.nonce_value
					}
					
				}
			);
		},

		loadersprite: function() {
			var element = document.querySelector('.sprite');
			var sprite = new Motio(element, {
			    fps: 25,
			    frames: 18
			});
			sprite.play(); // start animation
		},

		loadgallery: function(options) {
			var that = this;

			// Check for galleries that are already loaded
			var loadedgalleries = '';
			var i = 0;
			$(".pagesection-popup-gallery").each(function() {
				if (i>0) loadedgalleries += ',';
				loadedgalleries += $(this).attr("id");
				i++;
			});

			// Send ajax request
			$.get( MitoGallery.ajax_url, {
				action: MitoGallery.gallery_action,
				nonce_name: MitoGallery.nonce_name,
				nonce_value: MitoGallery.nonce_value,
				year_not_in: loadedgalleries,
				getview: '1'
			})
			.done(function( data ) {
				// Iterate through every gallery
				var i = 0;
				//var output = '';

				var moregalleries = false;

				$.each( data.result, function( key, value ) {
					var theyear = key;
					var thehtml = value.view;

					if (i<oishiUI.options.galleriestoload) {
						//output += thehtml;
						$(".gallery-container").append(thehtml);
						console.log(key);
						that.initGallery({
			            	name: key,
			            	gallery: ".pagesection-popup-gallery#" + key + " .popup-gallery",
			            	button: ".pagesection-popup-gallery#" + key + " .btn-loadmore"
			            });

			            $(".pagesection-popup-gallery#" + key + " .popup-gallery").magnificPopup({
							delegate: 'a',
							type: 'image',
							tLoading: 'Loading image #%curr%...',
							mainClass: 'mfp-img-mobile',
							gallery: {
								enabled: true,
								preload: [0,1], // Will preload 0 - before current, and 1 after the current image
								tCounter: '%curr% / %total%' // Markup for "1 of 7" counter
							},
							image: {
								tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
							}
						});
					} else {
						moregalleries = true;
					}

					i++;
				});

				if (!moregalleries) {
					var thebutton = $(".btn-loadmore-galleries");
					thebutton.transition({ opacity: 0 }, function() {
						thebutton.slideUp(300, function() {
							thebutton.remove();
						});
					});
				}

			});
		}
	}
};

$(document).ready(function() {
	oishiUI.init();

    $('ul.nav li').removeClass('active');
    var path = location.href.split("/");
    if(path.pop()=='#gallery') $('li#galleries').addClass('active');
    else if(path[path.length-1]=='products' || path[path.length-2]=='products') $('li#products').addClass('active');
    else if(path[path.length-1]=='contact') $('li#contact').addClass('active');
    else $('li#home').addClass('active');
});

