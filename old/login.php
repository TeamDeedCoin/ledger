<?php

session_start();

if(isset($_SESSION['hash'])) {
	header('location: /dashboard.php');
}

// REPLACE THIS ARRAY WITH MYSQL DATABASE.
// USES MD5 HASHING. 
// FORMAT: <username>-<password>-$TCSiv
// example hashes below

$TCShashesArray = array(
	'62f42fa1e982b733b1c0e647a79cce0f', // tspa-pw123-MDA2NDI0NzcwZmQ3
	'2b3a9d08716d04e3823aabc7ae6d3a3a', // thomas-root-MDA2NDI0NzcwZmQ3
	'6fc8694e9e251befcb40ca81b4b2c4e0', // charles-wireless-MDA2NDI0NzcwZmQ3
	'a24587ac69125256b0e9caceadd9aabd'  // charles-Wireless4455-MDA2NDI0NzcwZmQ3
);
$TCSiv = 'MDA2NDI0NzcwZmQ3';

//////////////////////////////////////

$localhost = array('127.0.0.1','::1');

if(in_array($_SERVER['REMOTE_ADDR'], $localhost)){
	define('TCS_USER_TABLE', 'users');
	define('TCS_DB_HOST', '127.0.0.1');
	define('TCS_DB_USER', 'root');
	define('TCS_DB_PASS', 'root');
	define('TCS_DB_NAME', 'loginform');
} else {
	define('TCS_USER_TABLE', 'users');
	define('TCS_DB_HOST', 'localhost');
	define('TCS_DB_USER', 'LL');
	define('TCS_DB_PASS', 'ledgerleap');
	define('TCS_DB_NAME', 'ledgerleap');
}


class TCSDB{
	public $connect = null;
	function __construct() {
		$this->connect = new mysqli(TCS_DB_HOST, TCS_DB_USER, TCS_DB_PASS, TCS_DB_NAME);
		if ($this->connect->connect_error) {
			$this->connect = null;
		}
	}

	function __destruct(){
		$this->connect->close();
	}

	public function do_select($query) {
		$return = null;
		if($this->connect){
			$result = $this->connect->query($query);
			if($result != null && $result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$return[] = $row;
				}
			}
		}
		return $return;
	}

	public function do_query($query) {
		$flag = false;
		if($this->connect) {
			$flag = $this->connect->query($query);
		}
		return $flag;
	}
}

$TCSdb = new TCSDB();

$TCSquery = "select hash from ".TCS_USER_TABLE;
$TCShashesDB = $TCSdb->do_select($TCSquery);


$TCStext1 = $TCStext2 = '';

if(isset($_REQUEST['TCSt1']) && isset($_REQUEST['TCSt2'])) {
	$TCStext1 = $_REQUEST['TCSt1'];
	$TCStext2 = $_REQUEST['TCSt2'];
	$TCSx = md5($TCStext1.'-'.$TCStext2.'-'.$TCSiv);

	foreach($TCShashesDB as $TCShash) {  // <-- use these lines after DB setup
		$TCShash = $TCShash['hash']; // <-------- 

	//foreach($TCShashesArray as $TCShash) { // <-- use this for hardcoded array

		//file_put_contents('php://stderr', print_r($TCShash, true)); // debugging
		if(hash_equals($TCShash, $TCSx)) {
			$_SESSION['hash'] = $TCSx;
			exit('success');
			exit('- Login successful -<br>'.$TCSx);
		}
	}
	exit('wrong');
}

?>

<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Questrial">
<meta name="viewport" content="initial-scale=1, maximum-scale=1"/>

<style>
html, body {
	background-color: #fff1f1; color: #555; overflow: hidden;
	margin: 0 auto; height: 100%; width: 100%;
	font-family: 'Questrial', sans-serif;
}
.TCS-div {
	text-align: center; background-color: white; border: 2px solid #e7803c;
	padding: 25px; top: 0; bottom: 0; left: 0; right: 0; position: absolute;
	width: 325px; height: 400px; border-radius: 15px; margin: 0 auto;
	margin-top: 150px;
}

.TCS-h3 { margin-left: 26px; }

.TCS-con1 { position: absolute; }
.TCS-con2 { position: absolute; display: none; }

.TCS-input {
	width: 250px; height: 30px; padding: 5px; transition: .3s ease;
	background: white; border: 2px solid #aaa; padding-left: 15px;
	margin-left: 26px;
}

.TCS-input:focus { transition: .3s ease; border: 2px solid #e7803c; }

.TCS-btn1 {
	width: 260px; height: 25px; padding: 5px; transition: .3s ease;
	background: white; border: 2px solid #aaa; margin-top: 15px;
	margin-left: 26px; padding-top: 10px;
}

.TCS-btn2 {
	width: 260px; height: 25px; padding: 5px; transition: .3s ease;
	background: white; border: 2px solid #aaa; margin-top: 15px;
	margin-left: 26px; padding-top: 10px;
}

.TCS-btn1:hover, .TCS-btn2:hover { transition: .3s ease; background-color: #e7803c; color: white; cursor: pointer; }

.TCS-labelwrap {
	position: absolute; bottom: 25px; text-align: center;
	left: 0; right: 0; margin: 0 auto;
}

.pb50 { padding-bottom: 50px; }

@media all and (max-width: 1200px) {
	.TCS-div { margin-top: 70px; }
}
@media all and (max-width: 380px) {
	.TCS-div {
		margin-top: 0 !important; width: 90% !important;
		height: 94% !important; padding: 10px !important;
		text-align: center;
	}
	.TCS-con1, .TCS-con2 { position: relative !important; }
	.TCS-btn1, .TCS-btn2 {
		margin-left: auto !important; margin-right: auto; 
		max-width: calc(100% - 40px);
	}
	.TCS-input { margin-left: 0 !important; max-width: calc(100% - 50px); }
	.TCS-h3 { margin-left: 0 !important; }
}

</style>
</head>
<body>
<a style="padding: 10px; font-size: 20px;" href="/">Home</a>
<div class="TCS-div">
	<h1 class="pb50">Login</h1>
	<div class="TCS-con1">
		<h3 class="TCS-h3">Username</h3>
		<input class="TCS-input" type="text" id="TCS-text1">
		<div class="TCS-btn1">Next</div>
	</div>
	<div class="TCS-con2">
		<h3 class="TCS-h3">Password</h3>
		<input class="TCS-input" type="password" id="TCS-text2">
		<div class="TCS-btn2">Submit</div>
	</div>
	<div class="TCS-labelwrap">
		<h5 id='TCS-label'>Save time by hitting enter.</h5>
	</div>
</div>

</body>
<script>

var TCSstep = '1'; 

setTimeout(function() {
	$("#TCS-text1").focus();
},100);


function TCSfn1() {
	$(".TCS-con1").fadeOut(300);
	setTimeout(function() {
		$(".TCS-con2").fadeIn(300);
	},300);
	setTimeout(function() {
		$("#TCS-text2").focus();
		TCSstep = '2';
	},400);
}


function TCSfn2() {
	$(".TCS-con2").animate({marginLeft: ['-3000px', 'swing']},300, function(){
		$(".TCS-con1").css('margin-left', '3000px');
		$(".TCS-con1").show();
		$(".TCS-con1").animate({marginLeft: ['0px', 'swing']},300);
		$(".TCS-con2").hide();
		$(".TCS-con2").css('margin-left', '0px');
	});

	var TCStext1 = $("#TCS-text1").val().toLowerCase();
	var TCStext2 = $("#TCS-text2").val();
	if(TCStext1 == '' || TCStext2 == '') {
		$("#TCS-label").html('Error - Please enter username / password');
		$("#TCS-text1").val('');
		$("#TCS-text2").val('');
	} else {
		$("#TCS-text1").val('');
		$("#TCS-text2").val('');

		var TCSfile = '/login.php'; // <-- right here
		var TCSdata = {TCSt1:TCStext1, TCSt2:TCStext2};

		TCSwait();
		$.ajax({
			method: 'POST',
			url: TCSfile,
			data: TCSdata,
			timeout: 5000,
			error: function(e) {
				console.log(e);
				TCSdone();
				$("#TCS-label").html("Error - Cannot connect to database.<br>Please contact system administrator.");
				// you done fuckt up
			}
		})
		.done(function(res){
			TCSdone();
			console.log(res);
			if(res == 'wrong'){
				$("#TCS-label").html('Incorrect username / password');
			}
			if(res == 'success') { // REDIRECT AFTER SESSION ARRAY IS SET
				window.location.replace('dashboard.php');
			}
		});
	}
	setTimeout(function() {
		$("#TCS-text1").focus();
		TCSstep = '1';
	},500);
}


$(".TCS-btn1").click(function() { TCSfn1(); });
$(".TCS-btn2").click(function() { TCSfn2(); });

$(document).keyup(function(e) {
	if(e.keyCode == 13) {
		if(TCSstep == '1') {
			TCSstep = '0';
			TCSfn1();
		} else if(TCSstep == '2') {
			TCSstep = '0';
			TCSfn2();
		}
		TCSstep = '0';
		// quit mashing the enter button
	}
});


function TCSwait() {
	$("body,html").css('cursor', 'wait');
}

function TCSdone() {
	$("body,html").css('cursor', 'default');
}

$('body').click(function() {
	$("#TCS-text1").focus();
});

</script>
</html>
