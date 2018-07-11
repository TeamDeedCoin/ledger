<?php require('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/apple-touch-icon.png"/>
	<link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon-32x32.png"/>
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicon-16x16.png"/>
	<link rel="manifest" href="/assets/icons/manifest.json"/>
	<link rel="mask-icon" href="/assets/icons/safari-pinned-tab.svg" color="#5bbad5"/>
	<meta name="theme-color" content="#ffffff"/>
	<meta name="description" content="Vanja Dance | Best in Orlando"/>
	<meta name="keywords" content="Vanja,Dance,Fire,Belly,Bollywood"/>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>

<?php $library->load_style('custom'); ?>
<?php $library->load_template('header'); ?>
<?php $library->load_template('hero'); ?>
<?php $library->load_template('foot'); ?>

</body>
<?php $library->load_script('jquery.min', true); ?>
<?php $library->load_script('bootstrap.min', true); ?>
<?php $library->load_script('scramble', true); ?>
<script>


var navbar = $('#hero2').height();
var sticky = navbar + 200;
var sstop = 0;

window.onscroll = function() {
	$('#hero1').fadeOut(700);
	setTimeout(function() {
		$('#hero2').fadeIn(700);
		$('#navbar').fadeIn(700);
		$('.wrapper').fadeIn(700);
		$('.foot').fadeIn(700);
	}, 700);

	if( $(this).scrollTop() > sticky) {
		$('#navbar').addClass('navbarfixed');
	} else {
		$('#navbar').removeClass('navbarfixed');
	}

	if( $(this).scrollTop() > navbar - 400) {
	if(sstop == 0) {
		sstop = 1;
		const phrases = [
			'Blockchain',
			'at it\'s finest',
			'Ledger Leap'
		]

		const el = document.querySelector('.scramble')
		const fx = new TextScramble(el)

		let counter = 0
		const next = () => {
			fx.setText(phrases[counter]).then(() => {
				setTimeout(next, 1200)
			})
			counter = (counter + 1)
		}
		next()
	}
	}
}


$('#contact').click(function() {
	$('html, body').animate({
		scrollTop: $("#contactdiv").offset().top
	}, 800);
});
$('#about').click(function() {
	$('html, body').animate({
		scrollTop: $("#aboutdiv").offset().top
	}, 800);
});
$('#projects').click(function() {
	$('html, body').animate({
		scrollTop: $("#projectsdiv").offset().top -100
	}, 800);
});


</script>
</html>

