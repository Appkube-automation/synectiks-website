$(document).ready(function(){
			$('.customer-logos').slick({
				slidesToShow: 3,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 1000,
				centerMode: true,
				// centerPadding: '1em',
				arrows: true,
				dots: false,
					pauseOnHover: true,
                nextArrow: '<i class="fa fa-chevron-circle-left  fa-2x "></i>',
                prevArrow: '<i class="fa fa-chevron-circle-right fa-2x"></i>',
				responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 3
					}
				}, {
					breakpoint: 520,
					settings: {
						slidesToShow: 2
					}
				}]
			});
		});