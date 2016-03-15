$(document).ready(function() {
	$("#pageHome").show();
	$("#navRightLogin").show();
	$("#pageProducts").hide();
	$("#pageAbout").hide();
	$("#pageContact").hide();
	$("#pageAdmin").hide();
	$("#navRightLogged").hide();
	$("#pageLogin").hide();

	$("#navHome").click(function() {
		$("#pageHome").show();
		$("#pageProducts").hide();
		$("#pageAbout").hide();
		$("#pageContact").hide();
		$("#pageLogin").hide();
		$("#pageAdmin").hide();
	});
	// $(".navProducts").click(function() {
	// 	$("#pageProducts").show();	
	// 	$("#pageAbout").hide();
	// 	$("#pageContact").hide();
	// 	$("#pageHome").hide();
	// 	$("#pageLogin").hide();
	// 	$("#pageAdmin").hide();
	// });
	$(".navAbout").click(function() {
		$("#pageAbout").show();	
		$("#pageProducts").hide();
		$("#pageContact").hide();
		$("#pageHome").hide();
		$("#pageLogin").hide();
		$("#pageAdmin").hide();
	});
	$(".navContact").click(function() {
		$("#pageContact").show();
		$("#pageProducts").hide();
		$("#pageAbout").hide();
		$("#pageHome").hide();
		$("#pageLogin").hide();
		$("#pageAdmin").hide();
	});
	$(".navLogin").click(function() {
		$("#pageLogin").show();
		$("#pageContact").hide();
		$("#pageProducts").hide();
		$("#pageAbout").hide();
		$("#pageHome").hide();
	});

	$("#navProduct1").click(function() {
		$("#pageProducts").show();
		$("#product1").show();
		$("#product2").hide();
		$("#product3").hide();	
		$("#pageAbout").hide();
		$("#pageContact").hide();
		$("#pageHome").hide();
		$("#pageLogin").hide();
		$("#pageAdmin").hide();
	});
	$("#navProduct2").click(function() {
		$("#pageProducts").show();
		$("#product1").hide();
		$("#product2").show();
		$("#product3").hide();	
		$("#pageAbout").hide();
		$("#pageContact").hide();
		$("#pageHome").hide();
		$("#pageLogin").hide();
		$("#pageAdmin").hide();
	});
	$("#navProduct3").click(function() {
		$("#pageProducts").show();
		$("#product1").hide();
		$("#product2").hide();
		$("#product3").show();	
		$("#pageAbout").hide();
		$("#pageContact").hide();
		$("#pageHome").hide();
		$("#pageLogin").hide();
		$("#pageAdmin").hide();
	});




	$('nav li ul').hide().removeClass('fallback');
	$('nav li').hover(
		function () {
    		$('ul', this).stop().slideDown(100);
  		},
  		function () {
    		$('ul', this).stop().slideUp(100);
  	});
});
