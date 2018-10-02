<?php

$pw = '';
$ar = ["Well aren't you smart","Take it easy there chief","Not today, homeslice","You're in! JK", "Keep trying..."];
$post = $correct = false;
if(isset($_POST['password'])) {
	$post = true;
	$pw = $_POST['password'];

	if($pw == 'LedgerLeap' || $pw == 'ledgerleap' || $pw == 'ledger' || $pw == 'ledgerleap123' || $pw == 'admin' || $pw == 'password' || $pw == 'user' || $pw == 'pw123') {
		$correct = true;
	}
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Ledger Leap - Blockchain Enterprise</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0,
maximum-scale=1.0">
<link rel="apple-touch-icon" sizes="180x180" href="web/icons/apple-touch-icon.png?v=2"/>
<link rel="icon" type="image/png" sizes="32x32" href="web/icons/favicon-32x32.png?v=2"/>
<link rel="icon" type="image/png" sizes="16x16" href="web/icons/favicon-16x16.png?v=2"/>
<link rel="manifest" href="web/icons/manifest.json"/>
<link rel="mask-icon" href="web/icons/safari-pinned-tab.svg?v=2" color="#e7803c"/>
<meta name="description" content="We build blockchain from concept to execution."/>
<meta name="keywords" content="ledgerleap, ledger, ledger leap, cryptocurrency, crypto, cryptocurrencies, ico, blockchain, technology, token, ethereum"/>

<meta property="og:title" content="Ledger Leap - Blockchain Enterprise">
<meta property="og:description" content="We build blockchain from concept to execution.">
<meta property="og:image" content="https://www.ledgerleap.com/web/images/og.jpg">
<meta property="og:site_name" content="Ledger Leap">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="">
<meta name="twitter:title" content="Ledger Leap - Blockchain Enterprise">
<meta name="twitter:description" content="We build blockchain from concept to execution.">
<meta name="twitter:image" content="https://www.ledgerleap.com/web/images/og.jpg">
<meta name="twitter:image:alt" content="Ledger Leap Inc.">
<link href="css/animate.css" rel="stylesheet">
<link href="css/style.css?v=10" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/base.css" rel="stylesheet">
<style type="text/css">

@charset "UTF-8";
<?php
for ($i=5; $i <= 200; $i+=5) {
    echo '.pt'.(string)$i.'{padding-top:'.(string)$i.'px;}';
    echo '.pb'.(string)$i.'{padding-bottom:'.(string)$i.'px;}';
    echo '.p'.(string)$i.'{padding:'.(string)$i.'px;}';
} ?>

#gb { cursor: pointer; position: absolute; top: 25px; right: 30px; color: #333; font-size: 26px; }

.algomain {
	width: 100%; height: 100px; position: absolute; top: calc(50% - 50px);
	left: 0; right: 0; margin: 0 auto; background: rgba(218, 131, 75, 0.5);
	padding-top: 20px; font-size: 45px; color: rgba(50,50,50,0.4);
	text-align: center;
}

@media all and (max-width: 600px) {
	.algomain { font-size: 35px; }
}

</style>
</head>
<body style="color: #333; width: 100%; height: 100vh; background-image: url('web/images/algo.png'); background-repeat: no-repeat; background-size: cover;">
	<?php /*
	<div id="algopageet">
		<div class="row pb60">
			<div class="col-xs-12">
				<h2 class="text-uppercase et-color-orange">Confidential</h2>
				<p>Enter your assigned password below.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div id="passlog">
					<form action="/algo-products" id="securelog" method="post" class="text-center">
						<input type="password" id="pass" class="mb20" placeholder="Enter Password">
						<input type="submit" value="LOGIN">
					</form>
				</div>
			</div>
		</div>
		<h4 id="gb">Go Back</h4>
	</div>
	*/ ?>
	<div id="gb">Go Back</div>
	<div class="algomain">
		<form action="/algo-products" id="securelog" method="post">
			<input style="border: none; text-align: center; background: transparent; max-width: 100%;" id=password name="password" type="password" placeholder="ENTER PASSWORD">
			<input type="submit" name="submit" style="border: none; width: 0; height: 0; display: none;">
		</form>
	</div>
<script type="text/javascript">


var c = function() { window.location.href = '/'; }
var x = document.getElementById('gb');
x.addEventListener('click', c, false);

<?php if($correct) { $post = false; ?>
document.getElementsByName('password')[0].placeholder = "<?php echo $ar[rand(0,4)]; ?>";
setTimeout(function() {
	document.getElementsByName('password')[0].placeholder = "ENTER PASSWORD";
},1000);
<?php } ?>

<?php if($post) { ?>
document.getElementsByName('password')[0].placeholder = "INCORRECT PASSWORD";
setTimeout(function() {
	document.getElementsByName('password')[0].placeholder = "ENTER PASSWORD";
},1000);
<?php } ?>

document.getElementById("password").focus();

</script>
</body>
