<?php require('config.php');

function filter($string){
	$string = addslashes($string);
	return htmlentities($string, ENT_COMPAT | ENT_HTML401, 'UTF-8');
}

$name = $email = $subject = $message = '';

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject'])) {
	$name = filter($_POST['name']);
	$email = filter($_POST['email']);
	$subject = filter($_POST['subject']);
	if(isset($_POST['message'])) {
		$message = filter($_POST['message']);
	}

	$to = 'team@ledgerleap.com';
	$emailsubject = 'Lead from Ledgerleap.com';
	$emailmessage = "Name: " . $name . "\r\nEmail: " . $email . "\r\nSubject:\r\n" . $subject . "\r\nMessage:\r\n" . $message;
	$headers = 'From: team@ledgerleap.com' . "\r\n" . 'Reply-To: team@ledgerleap.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

	if(2==2) {
		mail($to, $emailsubject, $emailmessage, $headers);
	}
}

?>
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
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<meta name="theme-color" content="#ffffff"/>
	<meta name="description" content="Ledger Leap - Blockchain Enterprise; Ledger Leap launches blockchain solutions, not just projects. We only assist projects that make sense and drive the industry forward positively.				Our platform is designed to bring real world support to beneficial projects, providing experience, connections, and software to harvest the benefits.
				Solid projects need solutions that can bring products to market faster and without prohibitive fiat costs that cripple development fund."/>
	<meta name="keywords" content="Ledger leap,ledger,blockchain,ico,token,cryptocurrency"/>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<?php $library->load_style('bootstrap.min'); ?>
	<?php $library->load_style('Treant.css'); ?>
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
	<?php $library->load_script(array('TweenMax.min', 'ScrollToPlugin.min', 'jquery.min', 'modernizr.custom.min', 'iscroll-probe', 'ScrollMagic.min', 'animation.gsap.min')); ?>
	<?php $library->load_script(array('vendor/treant/vendor/raphael','vendor/treant/Treant')); ?>
	<?php $library->load_template('modals'); ?>

	<?php $library->load_template('home'); ?>

	<?php //$library->load_script(array('jquery-1.11.0.min', 'bootstrap.min', 'TweenMax.min', 'ScrollToPlugin.min', 'modernizr.custom.min', 'iscroll', 'jquery.scrollmagic.min', 'jquery.scrollmagic.debug')); ?>
    
    <?php $library->load_script('custom', true); ?>
</body>

<script>

var navbar = document.getElementById("navbar1");
var sticky = navbar.offsetTop;

var consulting = document.getElementById("consulting");
var co = consulting.offsetTop;

var services = document.getElementById("services");
var se = services.offsetTop;

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

	if(window.pageYOffset >= co - vph) {
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
			$(".action17").animate({opacity: 1}, 300);
		},1800);
		setTimeout(function() {
			$(".action18").animate({opacity: 1}, 300);
		},2100);
		setTimeout(function() {
			$(".action19").animate({opacity: 1}, 300);
		},2400);
		setTimeout(function() {
			$(".action110").animate({opacity: 1}, 300);
		},2700);
		setTimeout(function() {
			$(".action111").animate({opacity: 1}, 300);
		},2700);
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

	if(window.pageYOffset >= se - vph) {
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
		//NEED TO SET UP PARAGRAPHS
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
	if(window.pageYOffset >= co - vph) {
		$(".action31").animate({opacity: 1}, 300);
		setTimeout(function() {
			$(".action32").animate({opacity: 1}, 300);
		},300);
		setTimeout(function() {
			$(".action33").animate({opacity: 1}, 300);
		},600);
		setTimeout(function() {
			$(".action34").animate({opacity: 1}, 300);
		},900);
		setTimeout(function() {
			$(".action35").animate({opacity: 1}, 300);
		},1200);
		setTimeout(function() {
			$(".action36").animate({opacity: 1}, 300);
		},1500);
		//NEED TO SET UP PARAGRAPHS
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
		$(".action41").animate({opacity: 1}, 300);
		setTimeout(function() {
			$(".action42").animate({opacity: 1}, 300);
		},300);
		setTimeout(function() {
			$(".action43").animate({opacity: 1}, 300);
		},600);
		setTimeout(function() {
			$(".action44").animate({opacity: 1}, 300);
		},900);
		setTimeout(function() {
			$(".action45").animate({opacity: 1}, 300);
		},1200);
		setTimeout(function() {
			$(".action46").animate({opacity: 1}, 300);
		},1500);
		setTimeout(function() {
			$("#fin3").animate({opacity: 1}, 500);
			setTimeout(function() {
				$("#fin4").animate({opacity: 1}, 500);
			},500);
		},1500);
	}

	if(window.pageYOffset >= tea - vph) {
		$(".action51").animate({opacity: 1}, 500);
		setTimeout(function() {
			$(".action52").animate({opacity: 1}, 500);
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
	if($(window).width() < 1058)
		$(".menu_trigger").fadeIn(300);
});
$(".nav_consulting").click(function() {
	$("html,body").animate({scrollTop: $("#consulting").offset().top - 30},1000);
	$(".sidemenu").css('transform', 'scale(0.01,1)');
	$(".sidemenu").fadeOut(300);
	$(".menu_close").fadeOut(300);
	if($(window).width() < 1058)
		$(".menu_trigger").fadeIn(300);
});
$(".nav_platform").click(function() {
	$("html,body").animate({scrollTop: $("#platform").offset().top - 30},1000);
	$(".sidemenu").css('transform', 'scale(0.01,1)');
	$(".sidemenu").fadeOut(300);
	$(".menu_close").fadeOut(300);
	if($(window).width() < 1058)
		$(".menu_trigger").fadeIn(300);
});
$(".nav_projects").click(function() {
	$("html,body").animate({scrollTop: $("#projects").offset().top - 30},1000);
	$(".sidemenu").css('transform', 'scale(0.01,1)');
	$(".sidemenu").fadeOut(300);
	$(".menu_close").fadeOut(300);
	if($(window).width() < 1058)
		$(".menu_trigger").fadeIn(300);
});
$(".nav_team").click(function() {
	$("html,body").animate({scrollTop: $("#teamid").offset().top - 30},1000);
	$(".sidemenu").css('transform', 'scale(0.01,1)');
	$(".sidemenu").fadeOut(300);
	$(".menu_close").fadeOut(300);
	if($(window).width() < 1058)
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
$("#closetessa").click(function() {
	$(".biotessa").fadeOut(300);
	$(".overlaygrey").fadeOut(500);
});
$("#closelawson").click(function() {
	$(".biolawson").fadeOut(300);
	$(".overlaygrey").fadeOut(500);
});
$("#closeemily").click(function() {
	$(".bioemily").fadeOut(300);
	$(".overlaygrey").fadeOut(500);
});
$("#closesam").click(function() {
	$(".biosam").fadeOut(300);
	$(".overlaygrey").fadeOut(500);
});
$("#closeaig").click(function() {
	$(".et-modal").fadeOut(300);
	$(".overlaygrey").fadeOut(500);
});
$("#closeair").click(function() {
	$(".et-modal").fadeOut(300);
	$(".overlaygrey").fadeOut(500);
});
$("#closedeed").click(function() {
	$(".et-modal").fadeOut(300);
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
	$(".biotessa").fadeIn(500);
	$(".overlaygrey").fadeIn(300);
});

$("#fin12").click(function() {
	$(".biolawson").fadeIn(500);
	$(".overlaygrey").fadeIn(300);
});

$("#fin13").click(function() {
	$(".bioemily").fadeIn(500);
	$(".overlaygrey").fadeIn(300);
});
$("#sambtn").click(function() {
	$(".biosam").fadeIn(500);
	$(".overlaygrey").fadeIn(300);
});
$("#p-deed").click(function() {
	$("#deed").fadeIn(500);
	$(".overlaygrey").fadeIn(300);
});
$("#p-air").click(function() {
	$("#air").fadeIn(500);
	$(".overlaygrey").fadeIn(300);
});
$("#p-aig").click(function() {
	$("#aig").fadeIn(500);
	$(".overlaygrey").fadeIn(300);
});

$(".overlaygrey").click(function() {
	$(".biomatt").fadeOut(500);
	$(".biocharles").fadeOut(500);
	$(".biothomas").fadeOut(500);
	$(".biophil").fadeOut(500);
	$(".biotessa").fadeOut(500);
	$(".biolawson").fadeOut(500);
	$(".bioemily").fadeOut(500);
	$(".biosam").fadeOut(500);
	$(".contact").fadeOut(500);
	$(".overlaygrey").fadeOut(300);
	$(".flexpicwrap").fadeOut(300);
	$("#deed").fadeOut(300);
	$("#air").fadeOut(300);
	$("#aig").fadeOut(300);
});


$(".flexpic").click(function(e) {
	$(".flexpicwrap").show();
	$(".overlaygrey").fadeIn(300);

	let y = $(this).attr("title");
	let x = $(this).attr("src");
	let i = $(this).attr("content");
	$("#pictitle").html(y);
	$("#pictext").html(i);
	$("#PIC").attr("src", x);

});

$("#closeflexpic").click(function() {
	$(".flexpicwrap").hide();
	$(".overlaygrey").fadeOut(300);
});

$(".pro_img").hover(function() {
	$("#team_names").html(this.title);
});




</script>
</html>