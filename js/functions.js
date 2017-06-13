// Responsive Navigation
var navigation = responsiveNav("responsive-navigation", {customToggle: ".nav-toggle"});

var navBtn = $('#navBtn');

navBtn.click(function(){
	if($('.responsive-navigation').hasClass('opened')){
		navBtn.addClass('opened');
	} else {
		navBtn.removeClass('opened');
	}
});

// Returning Client Datepickers
$('#Drop_Date').datepicker();
$('#Pick_Date').datepicker();
$('#Playcare_Date').datepicker();

// var bookingType = $("input[name='Booking_Type']");

// $(bookingType).change(function() {
// 	var chosenType = $(this).val();
// 	var fields = $('input[type="text"], select');
// 	var radio = $('input[type="radio"]').not('[name="Booking_Type"]');
// 	if(chosenType == 'Dog') {
// 		$('.animal-type').text('Dog');
// 		$('.playcare-request').css('display','block');
// 		$('.boarding-section').slideUp();
// 		$('.playcare-section').slideUp();
// 		fields.val('');
// 		radio.attr('checked',false);
// 		$('.cat-option').css('display','none');
// 	} else {
// 		$('.animal-type').text('Cat');
// 		$('.playcare-request').css('display','none');
// 		$('.boarding-section').slideUp();
// 		$('.playcare-section').slideUp();
// 		fields.val('');
// 		radio.attr('checked',false);
// 		$('.cat-option').css('display','block');
// 	}
// });

// Gallery Slider
$('#outer-slider').flexslider({
	animation: "slide",
	directionNav: true,
	controlNav: false,
	animationLoop: false,
	slideshow: false,
	startAt: 0,
	touch: false,
	prevText: "",
	nextText: "",
	smoothHeight: true
});

$('#gallery-slider').flexslider({
    animation: "slide",
    startAt: 0,
    controlsContainer: ".thumbnail-container",
    controlNav: true,
    manualControls: ".thumbnail-container ul li a img",
    animationLoop: false,
    directionNav: true,
    slideshow: false,
    touch: false,
    prevText: "",
    nextText: "",
    smoothHeight: true
});

// About Sub Nav Hover
$('.about').mouseover(function(){
	$('.sub-about').addClass('hovered');
});
$('.sub-about').mouseover(function(){
	$('.sub-about').addClass('hovered');
	$('.about').addClass('selected');
});

$('.about').mouseout(function(){
	$('.sub-about').removeClass('hovered');
});
$('.sub-about').mouseout(function(){
	$('.sub-about').removeClass('hovered');
	$('.about').removeClass('selected');
});

// Services Sub Nav Hover
$('.services').mouseout(function(){
	$('.sub-services').removeClass('hovered');
});
$('.sub-services').mouseover(function(){
	$('.sub-services').addClass('hovered');
	$('.services').addClass('selected');
});

$('.services').mouseover(function(){
	$('.sub-services').addClass('hovered');
});
$('.sub-services').mouseout(function(){
	$('.sub-services').removeClass('hovered');
	$('.services').removeClass('selected');
});

// Reserve Sub Nav Hover
$('.reserve').mouseout(function(){
	$('.sub-reserve').removeClass('hovered');
});
$('.sub-reserve').mouseover(function(){
	$('.sub-reserve').addClass('hovered');
	$('.reserve').addClass('selected');
});

$('.reserve').mouseover(function(){
	$('.sub-reserve').addClass('hovered');
});
$('.sub-reserve').mouseout(function(){
	$('.sub-reserve').removeClass('hovered');
	$('.reserve').removeClass('selected');
});