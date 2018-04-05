//owl-carousel
$('.testimonials-slider').owlCarousel({
	slideSpeed : 300,
	paginationSpeed : 400,
	items:3,
	itemsScaleUp:true,
	lazyLoad : true,
	autoPlay : true,
	stopOnHover: true,
	navigation: false,
	pagination: true,
    loop:true,
    margin:20,
    nav: true,
});

$('.about-slider').owlCarousel({
	slideSpeed : 300,
	paginationSpeed : 400,
	items:3,
	itemsScaleUp:true,
	lazyLoad : true,
	autoPlay : true,
	stopOnHover: false,
	navigation: false,
	pagination: false,
    loop:true,
    margin:20,
    nav: false,
});