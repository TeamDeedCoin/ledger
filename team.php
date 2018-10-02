<!DOCTYPE html>
<html>
<head>
<title>Leadger Leap - Blockchain Enterprise</title>
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

<meta property="og:title" content="Leadger Leap - Blockchain Enterprise">
<meta property="og:description" content="We build blockchain from concept to execution.">
<meta property="og:image" content="https://www.ledgerleap.com/web/images/og.jpg">
<meta property="og:site_name" content="Ledger Leap">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="">
<meta name="twitter:title" content="Leadger Leap - Blockchain Enterprise">
<meta name="twitter:description" content="We build blockchain from concept to execution.">
<meta name="twitter:image" content="https://www.ledgerleap.com/web/images/og.jpg">
<meta name="twitter:image:alt" content="Ledger Leap Inc.">
<link href="css/animate.css" rel="stylesheet">
<link href="css/style.css?v=10" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/base.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<style type="text/css">
<?php
for ($i=5; $i <= 200; $i+=5) {
	echo '.pt'.(string)$i.'{padding-top:'.(string)$i.'px;}';
	echo '.pb'.(string)$i.'{padding-bottom:'.(string)$i.'px;}';
	echo '.p'.(string)$i.'{padding:'.(string)$i.'px;}';
} ?>


.calendly-badge-content{
background: none;
    position: relative;
    top: -23em;
    margin: 0em;
    color: rgb(231, 127, 60);
    display: inline-block;
    right: 38em;
    box-shadow: none;
}

.calendly-badge-widget .calendly-badge-content {
    display: table-cell;
    width: auto;
    height: 45px;
    padding: 0 30px;
    border-radius: 25px;
    /* box-shadow: rgba(0,0,0,0.25) 0 2px 5px; */
    /* font-family: serif; */
    text-align: center;
    vertical-align: middle;
    font-weight: bold;
    font-size: 1em;
    color: #fff;
    cursor: pointer;
    /* font-size: 1em; */
}

#letstalk {
    position: fixed;
    top: 0;
    right: 0;
    padding: 0;
    margin: 1em;
    background: none;
    color: #E77F3C;
    cursor: pointer;
}
#letstalk h4, span { color: black; }

.contact-modal {
    z-index: 9999;
}
i .fas, .fa-mobile-alt, .fa-envelope, .fa-calendar-alt {
    color: #e77f3c;
    font-size: 3em;
    padding: 0.3em 0.6em;
}

.modal-content {
    width: 33em;
    height: 18em;
}

span >.fa-mobile-alt {
    position: relative;
    float: left;
}
span >.fa-envelope {
    position: relative;
    float: left;
    right: 2em;
}

span.contact-label h2 {
    width: 18em;
    position: relative;
    right: 3em;
}

span >.fa-calendar-alt {
    position: relative;
    right: 4em;
    float: left;
}

h2#phone-h2 {
    right: 0em;
}

h2#email-h2 {
    right: 3em;
    position: relative;
}
h2#calendar-h2 {
    position: relative;
    right: 6em;
    width: 100%;
    white-space: nowrap;
}

div#content * { direction: ltr;}
/*CUSTOM STYLES GO HERE*/
@charset "UTF-8";

/********************************************************************************************************************************
											Hexagon Intro Blocks
********************************************************************************************************************************/
.intro-block {
position: relative;
display: flex;
align-items: center;
height: 65vh;
}

.hex-bg-big-text {
position: absolute;
z-index: -1;
height: 100%;
width: 100%;
}

.centerfold-wrap {
position: relative;
display: flex;
justify-content: center;
align-items: center;
flex: 1;
}

.hoverblock {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
}

.code-display {
position: relative;
color: #dfdfdf;
width: 600px;
height: 260px;
}


.code-display h1 {
color: #dfdfdf;
}

.code-description {
width: 100%;
height: 100%;
color: #dfdfdf;
}

.code-description * {
display: none;
}

.code-description > div {
padding: 0px 40px;
font-size: 26px;
border-left: 2px solid #DDDDDD;
}

.desc-active {
display: block;
/*height: 100%;*/
position: relative;
}

.desc-active > p, .desc-active * {
display: block;
margin: 0;
font-size: 22px;
color: #555;
}

.desc-active > p > span {
display: inline-block;
/* font-weight: bold; */
width: 125px;
}

p.code-title {
position: relative;
font-size: 4rem;
}

.desc-active::after {
position: absolute;
height: 100%;
width: 100%;
top: 0;
left: 0;
content: "";
opacity: .2;
z-index: -1;
}

.hex-master-wrap {
position: relative;
/* width: 50%; */
height: auto;
}

.border-1,
.border-2,
.border-3 {
position: absolute;
width: 100%;
height: 88px;
top: 46px;
left: 0;
border-left: 3px solid;
border-right: 3px solid;
border-radius: 8px;
z-index: 2;
border-color: #555;
-webkit-backface-visibility: hidden;
backface-visibility: hidden;
}

.border-2 {
transform: rotate(60deg);
}

.border-3 {
transform: rotate(120deg);
}

.border-3::before {
display: none;
position: absolute;
content: "";
bottom: 10%;
left: 42px;
width: 50%;
height: 83%;
background-color: rgba(255, 255, 255, 0);
border-top: 1px solid;
border-bottom: 1px solid;
border-color: white;
border-radius: 50%;
visibility: visible;
z-index: -1;
/* transform: rotate(60deg); */
}
.intro-block .grid-1,
.intro-block .grid-2,
.intro-block .grid-3 {
display: flex;
align-items: center;
justify-content: center;
width: 75%;
margin: 0 auto;
margin-bottom: -50px;
}

.intro-block .grid-3 {
margin-bottom: -50px;
}

.intro-block .grid-2,
.intro-block .grid-3 {
margin-top: -50px;
}

.hex-wrap {
position: relative;
width: 200px;
height: 190px;
margin: 0 1em 0 0;
border-top-left-radius: 100%;
border-top-right-radius: 100%;
border-bottom-left-radius: 100%;
border-bottom-right-radius: 100%;
border: 0px solid;
transform: scale(1.1);
}

.hex-wrap .label {
position: absolute;
top: 0;
left: 0;
right: 0;
bottom: 0;
margin: auto;
width: 100%;
height: 58px;
color: #f6f6f6;
display: flex;
justify-content: center;
align-items: center;
z-index: 3;
}

.hex-wrap .label svg, .hex-wrap .label img {
height: 50px;
width: 50px;
-webkit-backface-visibility: hidden;
backface-visibility: hidden;
}

.hexagon {
width: 300px;
height: 150px;
margin: 15px 0 0 -75px;
overflow: hidden;
visibility: hidden;
-webkit-transform: rotate(120deg);
-moz-transform: rotate(120deg);
-ms-transform: rotate(120deg);
-o-transform: rotate(120deg);
transform: rotate(90deg);
cursor: pointer;
-webkit-backface-visibility: hidden;
backface-visibility: hidden;
}

.hex-inner-1 {
overflow: hidden;
width: 100%;
height: 100%;
-webkit-backface-visibility: hidden;
backface-visibility: hidden;
-webkit-transform: rotate(-60deg);
-moz-transform: rotate(-60deg);
-ms-transform: rotate(-60deg);
-o-transform: rotate(-60deg);
transform: rotate(-60deg);
}

.hex-inner-2 {
position: relative;
width: 100%;
height: 100%;
background-repeat: no-repeat;
background-position: 50%;
visibility: visible;
-webkit-backface-visibility: hidden;
backface-visibility: hidden;
-webkit-transform: rotate(-60deg);
-moz-transform: rotate(-60deg);
-ms-transform: rotate(-60deg);
-o-transform: rotate(-60deg);
transform: rotate(-60deg);
overflow: hidden;
}
.hex-inner-2::before, .hex-inner-2::after {
position: absolute;
background-repeat: no-repeat;
background-position: 50%;
background-size: contain;
top: 0;
left: 0;
height: 110%;
width: 110%;
content: "";
-webkit-transform: rotate(30deg);
transform: rotate(30deg);
}

/**********************************************************************************
								Hex Hover Area
**********************************************************************************/
.hex-init {
position: absolute;
top: 46px;
left: 0px;
height: 46%;
width: 100%;
z-index: 9;
transform: rotate(-60deg);
cursor: pointer;
}

.hex-init::after {
width: 100%;
height: 100%;
display: block;
position: absolute;
top: 0;
bottom: 0;
left: 0;
right: 0;
margin: auto;
content: "";
transform: rotate(-60deg);
}

.hex-init::before {
font-family: abel;
width: 100%;
height: 100%;
display: block;
position: absolute;
top: 0;
bottom: 0;
left: 0;
right: 0;
color: rgba(231,128,60,.7);
font-kerning: 1px;
font-weight: 900;
margin: auto;
content: "";
text-align: center;
padding: 10%;
font-size: 36px;
transform: rotate(60deg);
}

.hex-init#consultingserv::before {
  content: "Pre-Sale";
}
.hex-init#techserv::before {
  content: "SALE";
}
.hex-init#servicesserv::before {
  content: "Post-Sale";
}

.hex-master-wrap {
  width: 50%;
}
@media(max-width: 1000px){
  .hex-wrap {
	width: auto;
	margin-bottom: 5%;
	height: 100px;
  }

  .code-display {
	display: block;
  }

  .content {
	height: auto;
  }
  .hex-master-wrap {
	width: 100vw;
  }

  .centerfold-wrap {
	display: inline-block;
  }

  .intro-block {
	height: auto;
  }

  .code-display {
	width: 100vw;
	margin-bottom: 10%;
	margin-top: 20%;

  }

  p.code-title {
	font-size: 2em;
  }

  .grid-1, .grid-2, .grid-3 {
	display: inline-block !important;
	/*width: 30% !important;*/
	width: 30% !important;
	margin: 0 !important;
	padding: 0 3%;
	text-align: center;
  }
  .sm-hide {
	display: none !important;
  }

}

@media(max-width: 550px){
  .grid-1,.grid-2, .grid-3 {
	width: 95% !important;
	margin: auto 2% !important;
	padding: 0 8%;
  }
  .whytable { margin-left: -50px; }
}

@media(min-width: 1440px){
  .hex-master-wrap {
	width: 665px;
  }
}

#page1 .slidecontent{
  text-align: left;
	width: 80%;
	font-size: 24px;
	padding-top:  2vh;
	margin-right: auto;
	margin-left: auto;
	line-height: 1.3;
}

#et-pic {
  transform : rotate(45deg) translate(-20px, 12px)
}

#sampic {
  transform: rotate(45deg) translate(-25px, 12px) scale(1.2);
}

.mb20 {
  margin-bottom: 20px;
}



.flowchart-heading {
  border: 1px solid gray;
  border-radius: 4px;
  padding: 4px;
  background: #f1f1f1;
}

.c333 { color: #333; }

.downarrow {
  display: none;
  border-left: 4px solid rgba(231,128,60,.7);
  border-image-source: linear-gradient(rgba(231,128,60,.7), rgba(31,228,60,.7));
  border-image-slice: 4;
  height: 620px;
  margin-top: 10px;
}


@media all and (max-width: 767px) {
  .sidearrows { display: none; }
  .downarrow { display: block; }
}

@media (max-width: 450px) {
  .flowchart-heading { font-size: 16px; }
}


.card button {
	background-color: rgba(231,128,60,.7);
	border: outset transparent 3px;
	border-radius: 4px;
	box-shadow: 5px 5px 10px #aaa;
	color: white;
	}

body {
	background-image: -moz-linear-gradient(
		45deg, rgba(0, 0, 0, 0.25) 25%, 
		transparent 25%, 
		transparent 75%, 
		rgba(0, 0, 0, 0.25) 75%, 
		rgba(0, 0, 0, 0.25)), 
	-moz-linear-gradient(
		45deg, 
		rgba(0, 0, 0, 0.25) 25%, 
		transparent 25%, 
		transparent 75%, rgba(0, 0, 0, 0.25) 75%, 
		rgba(0, 0, 0, 0.25));
background-image: -webkit-linear-gradient(45deg, rgba(0, 0, 0, .25) 25%, transparent 25%, transparent 75%, rgba(0, 0, 0, .25) 75%, rgba(0, 0, 0, .25)), -webkit-linear-gradient(45deg, rgba(0, 0, 0, .25) 25%, transparent 25%, transparent 75%, rgba(0, 0, 0, .25) 75%, rgba(0, 0, 0, .25));

background-position: 0 0pt, 2px 2px;background-size: 4px 4px;background-color: #202125;background-image: -webkit-linear-gradient(45deg, rgba(0, 0, 0, .25) 25%, transparent 25%, transparent 75%, rgba(0, 0, 0, .25) 75%, rgba(0, 0, 0, .25)), -webkit-linear-gradient(45deg, rgba(0, 0, 0, .25) 25%, transparent 25%, transparent 75%, rgba(0, 0, 0, .25) 75%, rgba(0, 0, 0, .25));background-position: 0 0pt, 2px 2px;background-size: 4px 4px;background-color: #000 !important;height:50px;
}
</style>
</head>
<body>
<!-- <div class="backbutton">Go Back</div> -->
<div id="content" style="overflow-x: hidden;">
	<div class="topleftlogo">
		<a href="/">
			<img src="web/images/favicon.png">
		</a>
	</div>
	<div class="toplefttext">
		<h1 id="jtext">Ledger Leap</h1>
	</div> 
    <div id="letstalk-div"> 
        <span  id="letstalk" data-toggle="modal" data-target=".bd-example-modal-lg" >LET'S TALK</span>
    </div>
	<h2 class="orange pt100 wow fadeIn" data-wow-delay="1s" style="padding-left: 20px;">Who Are We?</h2>
	<p class="pt10 pb60 wow fadeIn" data-wow-delay="1s" style="padding-left: 20px;">Ledger Leap can support solutions from an atmospheric scope. Our team is comprised of founders of launch projects along with specialists in each specific element, all directed by leadership with real world industry experience.</p>
	<div class="row flex-center sm-no-flex wow fadeIn" data-wow-delay="1s">
		<div id="teamhexes" class="sm-no-float col-md-11" style="max-width: 700px;">
			<ul class="team-members list-unstyled" style="pointer-events: none;">
				<!-- single member row starts -->
				<li class="clearfix" id="founders">
					<div class="member-details" id="member-01">
						<div>
							<img src="images/team/charles.png" alt="Co-Founder">
							<div class="member-info">
								<h3>Charles Wismer</h3>
								<p>Co-Founder</p>
							</div>
						</div>
					</div>
					<div class="member-details" id="member-02">
						<div>
							<img src="images/team/thomas.png" alt="Co-Founder">
						 	<div class="member-info">
								<h3>Thomas Spangler</h3>
								<p>Co-Founder</p>
							</div>
						</div>
					</div>
					<div class="member-details" id="member-03">
						<div>
							<img src="images/team/matt.png" alt="Co-Founder">
							<div class="member-info">
								<h3>Matthew Herrick</h3>
								<p>Co-Founder</p>
							</div>
						</div>
					</div>
				</li><!-- /single member row ends -->
				<!-- single member row starts -->
				<li class="clearfix">
					<div class="member-details" id="member-04">
						<div>
							<img src="images/team/joeldalmas.png" alt="Full Stack Developer">
							<div class="member-info" id="et-pic">
								<h3>Joel Dalmas</h3>
								<p>Senior Full Stack Developer</p>
							</div>
						</div>
					</div>
					<div class="member-details" id="member-05">
						<div>
							<img src="images/team/joeSan.png" alt="Advisor">
							<div class="member-info">
								<h3>Joe Santaniello </h3>
								<p>Advisor</p>
							</div>
						</div>
					</div>
					<div class="member-details" id="member-06">
						<div>
							<img src="images/team/sam.png" alt="Media Manager">
							<div class="member-info">
								<h3>Sam Mihal</h3>
								<p>Media Manager</p>
							</div>
						</div>
					</div>
				</li><!-- /single member row ends -->
				<!-- single member row starts -->
				<li class="clearfix">
					<div class="member-details" id="member-07">
						<div>
							<img src="images/team/tessa.png" alt="Public Relations">
							<div class="member-info">
								<h3>Tessa Reve</h3>
								<p>Public Relations</p>
							</div>
						</div>
					</div>
					<div class="member-details" id="member-08">
						<div>
							<img src="images/team/joe.png" alt="Community Manager">
							<div class="member-info">
								<h3>Joe Davies</h3>
								<p>Community Manager</p>
							</div>
						</div>
					</div>
				</li><!-- /single member row ends -->
			</ul><!-- /end team-photos -->
		</div>
	</div>
	<div style="bottom: 100px; left: 0; right: 0; margin: 0 auto; width: 300px; height: 60px; text-align: center; padding-top: 50px; padding-bottom: 60px;">
		<a href="https://www.facebook.com/Ledger-Leap-2104950239762462/" target="_blank">
			<img src="web/images/facebook.png" class="socialicon">
		</a>
		<a href="https://instagram.com/ledgerleap/" target="_blank">
			<img src="web/images/instagram.png" class="socialicon">
		</a>
		<a href="https://www.linkedin.com/company/ledgerleap/" target="_blank">
			<img src="web/images/linkedin.png" class="socialicon">
		</a>
		<a href="mailto:team@ledgerleap.com">
			<img src="web/images/mail.png" class="socialicon">
		</a>
	</div>

	<div class="buffer"></div>
</div>
<script src="js/three.js"></script>
<script src="js/Detector.js"></script>
<script src="js/draco/DRACOLoader.js"></script>
<script src="js/GLTFLoader.js"></script>
<script src="js/OrbitControls.js" type="text/javascript"></script>
<script src="js/wow.js"></script>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>

new WOW().init();


if ( ! Detector.webgl ) Detector.addGetWebGLMessage();
var camera, scene, renderer, controls, fogColor;

init();
animate();

function init() {
	camera = new THREE.PerspectiveCamera( 45, window.innerWidth / window.innerHeight, 1, 20000 );
	//camera.position.y = 400;
	camera.position.set(-20, 20, 60);
	//camera.up = new THREE.Vector3(0,0,0);
	//camera.lookAt(0,0,0);
	camera.name = "camera"
	renderer = new THREE.WebGLRenderer( { antialias: true });
	renderer.setPixelRatio( window.devicePixelRatio);
	renderer.setSize( window.innerWidth, window.innerHeight);
	document.body.appendChild( renderer.domElement);

	//controls = new THREE.OrbitControls( camera, renderer.domElement );

	scene = new THREE.Scene();
 
	fogColor = new THREE.Color(0xfafafa);
	 
	scene.background = fogColor;
	scene.fog = new THREE.Fog(fogColor, 0.0025, 400);

   //scene.background = new THREE.Color( 0xfafafa );
	var light, object;
	var ambientLight = new THREE.AmbientLight( 0xcccccc, 0.4 );
	scene.add( ambientLight );
	var pointLight = new THREE.PointLight( 0xffffff, 0.8 );
	camera.add( pointLight);
	scene.add( camera );

	var ground_grid = new THREE.GridHelper( 1000, 20, 0xcccccc, 0xcccccc );
	//var material = new THREE.MeshBasicMaterial( {color: 0xffff00, side: THREE.DoubleSide} );
	//var plane = new THREE.Mesh( plane_geom, material );
	ground_grid.name = "ground";
	//ground_grid.rotation.set(1.57, 0, 0);
	scene.add( ground_grid );
/*
	var urls = [
		'images/neg-x.jpg',
		'images/neg-y.jpg',
		'images/neg-z.jpg',
		'images/pos-x.jpg',
		'images/pos-y.jpg',
		'images/pos-z.jpg'
	];
 */
	var urls = [
		'images/metal.jpg',
		'images/metal.jpg',
		'images/metal.jpg',
		'images/metal.jpg',
		'images/metal.jpg',
		'images/metal.jpg'
	];
	// wrap it up into the object that we need
	var cubemap = THREE.ImageUtils.loadTextureCube(urls);

	// set the format, likely RGB unless you've gone crazy
	cubemap.format = THREE.RGBFormat;
	var custom_model_material = new THREE.MeshStandardMaterial({
		metalness: 1,
		roughness: 0.3,
		color: 0xffcb93,
		envMap: cubemap,
	});

	var model_geo = new THREE.GLTFLoader();
	THREE.DRACOLoader.setDecoderPath('/js/draco/');
	model_geo.setDRACOLoader(new THREE.DRACOLoader());
	model_geo.load('objects/trophy.glb', function(gltf) {
		
		for(var i =0; i < gltf.scene.children[0].children.length; i++) {
			gltf.scene.children[0].children[i].material = custom_model_material;
		}
		//gltf.scene.position.set( 0.64, 0.38, 40);
		//gltf.scene.rotation.set( -0.14, 0.24, 0.12);
		gltf.scene.scale.set(200, 200, 200);
		scene.add(gltf.scene);
	}, function(xhr) {
		console.log("Loading model: " + (xhr.loaded / xhr.total * 100) + "%");
	}, function(err) {
		console.log('Error: ' + err);
	});
	var material = new THREE.MeshStandardMaterial( { metalness: 0, roughness: 0, color: 0xfbfbfb, emissive: 0x666666 });
	//
	var shapes = ["Box", "Sphere", "Tetra", "Ico", "Octa"];
	var selected = shapes[0];

	switch(selected){
	case "Box":
		for (var i=0; i <= 10; i++){
			var boxSize = getRandomInt(20);
			geometry = new THREE.BoxGeometry(boxSize, boxSize, boxSize);
			object = new THREE.Mesh(geometry, material);
			object.name = "background_geometry";
			object.position.set( getRandomIntInRange(-50, 50), getRandomIntInRange(20, 40), getRandomIntInRange(-10,-50) );
			scene.add(object);
		}
		//geometry = new THREE.BoxGeometry( 1, 1, 1 );
		break;

	case "Sphere":
		geometry = new THREE.SphereGeometry( 0.5, 12, 8 );
		break;

	case "Tetra":
		geometry = new THREE.TetrahedronGeometry( 0.5, 1 );
		break;

	case "Ico":
		geometry = new THREE.IcosahedronGeometry( 0.5, 0);
		break;

	case "Octa":
		for (var i=0; i <= 10; i++){
			geometry = new THREE.OctahedronGeometry( getRandomInt(20), 0);
			object = new THREE.Mesh(geometry, material);
			object.position.set( getRandomInt(18), getRandomInt(18), getRandomInt(18) );
			scene.add(object);
		}
		break;
	} 

	window.addEventListener( 'resize', onWindowResize, false);
	//controls.update();
}

function getRandomInt(max) {
	return Math.floor(Math.random() * Math.floor(max));
}

function getRandomIntInRange( min, max ) {
	return Math.random() * ( max - min ) + min;
}



function onWindowResize() {
	camera.aspect = window.innerWidth / window.innerHeight;
	camera.updateProjectionMatrix();
	renderer.setSize( window.innerWidth, window.innerHeight );
}
//
function animate() {
	requestAnimationFrame( animate );
	//controls.update();

	render();
}
function render() {

	var timer = Date.now() * 0.000001;
	//camera.position.x = Math.cos( timer ) * 800;
	//camera.position.z = Math.sin( timer ) * 800;
	//camera.lookAt( scene.position );
  scene.traverse( function( object ) {
	 if ( object.isMesh === true && object.name == "background_geometry") {
	  //object.rotation.x = timer * 5;
	  object.rotation.y += 0.0001;
	  object.position.y += 0.001;
	  object.position.x += 0.002;
	  object.position.z += 0.003;
	 } else if(object.name == "Root Scene"){
		 object.rotation.y -= 0.001;
	 
	 }
  } );
  
	renderer.render( scene, camera );
}
</script>

<script type="text/javascript">

setTimeout(function() {
    $(".toplefttext").addClass('compressed');
    setTimeout(function() {
        $("#jtext").html("Team &amp; Clients");
        $(".toplefttext").removeClass('compressed');
    },500);
},650);

$(".backbutton").click(function() {
    window.location.href = '/';
});

 // Center modals vertically
  function centerModal() {
    $(this).css('display', 'block');
    var $dialog = $(this).find('.modal-dialog');
    var $offset = ($(window).height() - $dialog.height()) / 2;
    var $bottomMargin = parseInt($dialog.css('margin-bottom'), 10);

    // If modal is taller than screen height, top margin = bottom margin
    if ($offset < $bottomMargin) {
      $offset = $bottomMargin;
    }
    $dialog.css('margin-top', $offset);
  }

  $(document).on('show.bs.modal', '.modal', centerModal);

window.addEventListener("DOMContentLoaded", function() {
    $(".calendly-badge-widget").hide();
}, false);

</script>
<!--THE BEST PLACE TO PLACE BOOTSTRAP MODALS IS OUTSIDE OF ANY PARENT DIV OR THE BOTTOM OF YOUR DOCUMENT-->
<div class="modal bd-example-modal-lg" id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="max-width: 100%;">
    <div class="modal-dialog modal-sm" style="max-width: 100%;">
        <div class="modal-content" style="max-width: 100%;">
            <div class="modal-header">
                <span style="font-size: 24px;">Let's Talk</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding: 25px; max-width: 100%;">
                <h4 style="position: relative;">
                    <img src="images/telephone.png" style="width: 25px; height: 25px;">&emsp;
                    <span>321-313-3900</span>
                </h4>
                <h4>
                    <img src="images/mail.png" style="width: 25px; height: 25px;">&emsp;
                    <a href="mailto:team@ledgerleap.com" style="color: #444;">team@ledgerleap.com</a>
                </h4>
                <h4 style="padding-top: 5px;">
                    <img src="images/consoltation.png" style="width: 25px; height: 25px;">&emsp;
                    <span id="cal-btn" style="cursor: pointer;"><u>Schedule a Consultation</u></span>
                    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
                    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
                    <script type="text/javascript"> Calendly.initBadgeWidget({url: 'https://calendly.com/ledger-leap', text: "", color: '#e77f3c', branding: true}); </script>
                </h4>
          </div>
        </div>
    </div>
</div>

<style type="text/css">
body { overflow: hidden; }
</style>

<script type="text/javascript">

$("#cal-btn").click(function() {
    Calendly.showPopupWidget('https://calendly.com/ledger-leap',"PopupWidget");
});

</script>
</body>
</html>
