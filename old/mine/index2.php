<?php require('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo SITE_TITLE; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--number-based width or "device-width"-->
	<link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/apple-touch-icon.png"/>
	<link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon-32x32.png"/>
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicon-16x16.png"/>
	<link rel="manifest" href="/assets/icons/manifest.json"/>
	<link rel="mask-icon" href="/assets/icons/safari-pinned-tab.svg" color="#5bbad5"/>
	<meta name="theme-color" content="#ffffff"/>
	<meta name="description" content="Ledger Leap - Blockchain Enterprisedo"/>
	<meta name="keywords" content="Ledger leap,ledger,blockchain,ico,token,cryptocurrency"/>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<?php $library->load_style('bootstrap.min'); ?>
	<?php $library->load_style(array('font', 'custom'), true); ?>
</head>
<body>
	<?php $library->load_template('header'); ?>

	<!--
	<div style="z-index: 6005; position: fixed; top: 10px; right: 80px; width: 200px; height: 40px; background-color: transparent; text-align: right;" id="devY"></div>
	<div style="z-index: 6005; position: fixed; top: 25px; right: 80px; width: 200px; height: 40px; background-color: transparent; text-align: right;" id="devlabel"></div>
	-->

	<div class="sidemenu"></div>
	<div class="menu_trigger">=</div>
	<div class="menu_close">&times;</div>
	<div class="backtotop"></div>
	<div class="overlaygrey"></div>

	<?php $library->load_template('modals'); ?>

	<?php $library->load_template('home'); ?>
	<?php $library->load_template('foot'); ?>

	<?php //$library->load_script(array('jquery-1.11.0.min', 'bootstrap.min', 'TweenMax.min', 'ScrollToPlugin.min', 'modernizr.custom.min', 'iscroll', 'jquery.scrollmagic.min', 'jquery.scrollmagic.debug')); ?>
    <?php $library->load_script(array('TweenMax.min', 'ScrollToPlugin.min', 'jquery.min', 'modernizr.custom.min', 'iscroll-probe', 'ScrollMagic.min', 'animation.gsap.min')); ?>
    <?php $library->load_script('custom', true); ?>
</body>

<script>

var navbar = document.getElementById("navbar1");
var sticky = navbar.offsetTop;

var platform = document.getElementById("platform");
var pl = platform.offsetTop;

var projects = document.getElementById("projects");
var pro = projects.offsetTop;

var team = document.getElementById("teamid");
var tea = team.offsetTop;

var vph = $(window).height() / 2;

window.onscroll = function() {

	/*$("#devY").html(window.pageYOffset);
	$("#devlabel").html(vph);*/

	if(window.pageYOffset >= sticky) {
		$("#navbar1").css('position', 'fixed');
		$("#navbar1").css('top', '0');
		$("#navbar1").css('width', '100%');
		$("#navbuffer").show();
	} else {
		$("#navbar1").css('position', 'relative');
		$("#navbuffer").hide();
	}

	if(window.pageYOffset >= pl - vph) {
		$(".action11").animate({opacity: 1}, 300);
		setTimeout(function() {
			$(".action12").animate({opacity: 1}, 300);
		},300);
		setTimeout(function() {
			$(".action13").animate({opacity: 1}, 300);
		},600);
		setTimeout(function() {
			$(".action14").animate({opacity: 1}, 300);
		},900);
		setTimeout(function() {
			$(".action15").animate({opacity: 1}, 300);
		},1200);
		setTimeout(function() {
			$(".action16").animate({opacity: 1}, 300);
		},1500);
		setTimeout(function() {
			$("#fin1").animate({opacity: 1}, 500);
			setTimeout(function() {
				$("#fin2").animate({opacity: 1}, 500);
				$("#fin1b").animate({opacity: 1}, 300);
				$("#fin1c").animate({opacity: 1}, 300);
				setTimeout(function() {
					$("#fin1d").animate({opacity: 1}, 300);
				},300);
			},500);
		},1500);
	}

	if(window.pageYOffset >= pro - vph) {
		$(".action21").animate({opacity: 1}, 300);
		setTimeout(function() {
			$(".action22").animate({opacity: 1}, 300);
		},300);
		setTimeout(function() {
			$(".action23").animate({opacity: 1}, 300);
		},600);
		setTimeout(function() {
			$(".action24").animate({opacity: 1}, 300);
		},900);
		setTimeout(function() {
			$(".action25").animate({opacity: 1}, 300);
		},1200);
		setTimeout(function() {
			$(".action26").animate({opacity: 1}, 300);
		},1500);
		setTimeout(function() {
			$("#fin3").animate({opacity: 1}, 500);
			setTimeout(function() {
				$("#fin4").animate({opacity: 1}, 500);
			},500);
		},1500);
	}

	if(window.pageYOffset >= tea - vph) {
		$(".action31").animate({opacity: 1}, 500);
		setTimeout(function() {
			$(".action32").animate({opacity: 1}, 500);
		},500);
		setTimeout(function() {
			$("#fin5").animate({opacity: 1}, 500);
			setTimeout(function() {
				$("#fin6").animate({opacity: 1}, 500);
			},500);
		},700);
	}
}


$(".menu_trigger").click(function() {
	$(".sidemenu").fadeIn(100);
	$(".sidemenu").css('transform', 'scale(1,1)');
	$(".menu_close").fadeIn(300);
	$(".menu_trigger").fadeOut(300);
});

$(".menu_close").click(function() {
	$(".sidemenu").css('transform', 'scale(0.01,1)');
	$(".sidemenu").fadeOut(300);
	$(".menu_close").fadeOut(300);
	$(".menu_trigger").fadeIn(300);
});


$(".nav_overview").click(function() {
	$("html,body").animate({scrollTop: $("#overview").offset().top - 30},1000);
	$(".sidemenu").css('transform', 'scale(0.01,1)');
	$(".sidemenu").fadeOut(300);
	$(".menu_close").fadeOut(300);
	$(".menu_trigger").fadeIn(300);
});
$(".nav_consulting").click(function() {
	$("html,body").animate({scrollTop: $("#consulting").offset().top - 30},1000);
	$(".sidemenu").css('transform', 'scale(0.01,1)');
	$(".sidemenu").fadeOut(300);
	$(".menu_close").fadeOut(300);
	$(".menu_trigger").fadeIn(300);
});
$(".nav_platform").click(function() {
	$("html,body").animate({scrollTop: $("#platform").offset().top - 30},1000);
	$(".sidemenu").css('transform', 'scale(0.01,1)');
	$(".sidemenu").fadeOut(300);
	$(".menu_close").fadeOut(300);
	$(".menu_trigger").fadeIn(300);
});
$(".nav_projects").click(function() {
	$("html,body").animate({scrollTop: $("#projects").offset().top - 30},1000);
	$(".sidemenu").css('transform', 'scale(0.01,1)');
	$(".sidemenu").fadeOut(300);
	$(".menu_close").fadeOut(300);
	$(".menu_trigger").fadeIn(300);
});
$(".nav_team").click(function() {
	$("html,body").animate({scrollTop: $("#teamid").offset().top - 30},1000);
	$(".sidemenu").css('transform', 'scale(0.01,1)');
	$(".sidemenu").fadeOut(300);
	$(".menu_close").fadeOut(300);
	$(".menu_trigger").fadeIn(300);
});
$(".nav_contact").click(function() {
	$(".contact").fadeIn(500);
	$(".overlaygrey").fadeIn(300);
});


$("#closematt").click(function() {
	$(".biomatt").fadeOut(300);
	$(".overlaygrey").fadeOut(500);
});
$("#closecharles").click(function() {
	$(".biocharles").fadeOut(300);
	$(".overlaygrey").fadeOut(500);
});
$("#closethomas").click(function() {
	$(".biothomas").fadeOut(300);
	$(".overlaygrey").fadeOut(500);
});
$("#closephil").click(function() {
	$(".biophil").fadeOut(300);
	$(".overlaygrey").fadeOut(500);
});
$("#closecontact").click(function() {
	$(".contact").fadeOut(300);
	$(".overlaygrey").fadeOut(500);
});


$("#fin7").click(function() {
	$(".biomatt").fadeIn(500);
	$(".overlaygrey").fadeIn(300);
});

$("#fin8").click(function() {
	$(".biocharles").fadeIn(500);
	$(".overlaygrey").fadeIn(300);
});

$("#fin9").click(function() {
	$(".biothomas").fadeIn(500);
	$(".overlaygrey").fadeIn(300);
});

$("#fin10").click(function() {
	$(".biophil").fadeIn(500);
	$(".overlaygrey").fadeIn(300);
});

$("#fin11").click(function() {
	$(".biophil").fadeIn(500);
	$(".overlaygrey").fadeIn(300);
});

$(".overlaygrey").click(function() {
	$(".biomatt").fadeOut(500);
	$(".biocharles").fadeOut(500);
	$(".biothomas").fadeOut(500);
	$(".biophil").fadeOut(500);
	$(".contact").fadeOut(500);
	$(".overlaygrey").fadeOut(300);
	$(".flexpicwrap").fadeOut(300);
});


$(".flexpic").click(function(e) {
	$(".flexpicwrap").show();
	$(".overlaygrey").fadeIn(300);

	let y = $(this).attr("title");
	let x = $(this).attr("src");
	$("#pictitle").html(y);
	$("#PIC").attr("src", x);
});

$("#closeflexpic").click(function() {
	$(".flexpicwrap").hide();
	$(".overlaygrey").fadeOut(300);
});


</script>
</html>