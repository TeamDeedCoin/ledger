<!DOCTYPE html>
<html>
<head>
<title>Ledger Leap - Blockchain Enterprise</title>
<meta charset="utf-8">
<meta name="google" content="notranslate">
<meta http-equiv="Content-Language" content="en">
<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0,
maximum-scale=1.0">
<link rel="apple-touch-icon" sizes="180x180" href="web/icons/apple-touch-icon.png?v=2"/>
<link rel="icon" type="image/png" sizes="32x32" href="web/icons/favicon-32x32.png?v=2"/>
<link rel="icon" type="image/png" sizes="16x16" href="web/icons/favicon-16x16.png?v=2"/>
<link rel="manifest" href="web/icons/manifest.json"/>
<link rel="mask-icon" href="web/icons/safari-pinned-tab.svg?v=2" color="#e7803c"/>
<meta name="description" content="We build blockchain from concept to execution."/>
<meta name="keywords" content="ledgerleap, ledger, ledger leap, cryptocurrency, crypto, cryptocurrencies, ico, blockchain, technology, token, ethereum, ico development, web development"/>
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
<link href="css/style.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<style type="text/css">

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
    padding: 0 0 0 0;
    margin: 1em;
    background: none;
    color: #E77F3C;
    cursor: pointer;
}
.contact-modal {
    z-index: 9999;
}
i .fas, .fa-mobile-alt, .fa-envelope, .fa-calendar-alt {
    color: #e77f3c;
    font-size: 3em;
    padding: 0.3em 0.6em;
}
::-webkit-scrollbar {
    width: 10px;
}

::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey;
    border-radius: 10px;
    background: rgba(100,100,100,.3)
}

::-webkit-scrollbar-thumb {
    background: rgba(231,128,60,.5);
    border-radius: 10px;
}

::-webkit-scrollbar-thumb:hover {
    background: rgba(231,128,60,.7);
}

hr { border-color:#333; }

.menuitem { transition: .3s ease; }

.menuitem:hover {
    margin-left: -20px; cursor: pointer;
    color: #ff7700; font-size: 23px; transition: .3s ease;
}
#new_menu_items {
    font-size: 20px; color: white; position: absolute; right: 25px; z-index: 18; width: 250px;
    padding-top: 60px;
    top: 2em;
}
div#newPageWrap {
    position: absolute;
    top: 0;
    z-index: 1001;
    margin: 0;
    padding: 0;
    width: 100%;
    opacity: 0;
    transition: 1s opacity;
}

/* LOADING SCREEN */

#loadingScreen {
    position: absolute;
    z-index: 2;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #000000;
    opacity: 1;
    transition: .5s opacity;
}

#loadingScreen.fade-out {
    opacity: 0;
}

#loader {
    display: block;
    position: relative;
    left: 50%;
    top: 50%;
    width: 150px;
    height: 150px;
    margin: -75px 0 0 -75px;
    border-radius: 50%;
    border: 3px solid transparent;
    border-top-color: #999999;
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
}

#loader:before {
    content: "";
    position: absolute;
    top: 5px;
    left: 5px;
    right: 5px;
    bottom: 5px;
    border-radius: 50%;
    border: 3px solid transparent;
    border-top-color: #ff7700;
    -webkit-animation: spin 3s linear infinite;
    animation: spin 3s linear infinite;
}

#loader:after {
    content: "";
    position: absolute;
    top: 15px;
    left: 15px;
    right: 15px;
    bottom: 15px;
    border-radius: 50%;
    border: 3px solid transparent;
    border-top-color: #999999;
    -webkit-animation: spin 1.5s linear infinite;
    animation: spin 1.5s linear infinite;
}

@-webkit-keyframes spin {
    0%   {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
@keyframes spin {
    0%   {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

/* LOADING SCREEN END */

#mobile_menu {
    color: white; position: absolute; z-index: 18;
    display: none; bottom: 25px; cursor: pointer; top: calc(100vh - 190px);
    width: 100%; text-align: center; font-size: 17px; line-height: 17px;
}

#mobile_item1 {
    position: absolute; height: 50px; left: 0; width: 27.55%; border: 1px solid #392510;
    margin-top: 50px; transition: 1s ease; background: black;
    padding-top: 12px;
}
#mobile_item2 {
    position: absolute; height: 50px; left: 27.55%; width: 27.55%; border: 1px solid #392510;
    margin-top: 50px; transition: 1s ease; background: black;
    padding-top: 12px;
}
#mobile_item3 {
    position: absolute; height: 50px; left: 55.10%; width: 27.55%; border: 1px solid #392510;
    margin-top: 50px; transition: 1s ease; background: black;
    padding-top: 12px;
}

#mobile_item4 {
    position: absolute; height: 50px; left: 16.67%; width: 27.55%; border: 1px solid #392510;
    padding-top: 12px; transition: 1s ease; background: black;
}
#mobile_item5 {
    position: absolute; height: 50px; left: 44.22%; width: 27.55%; border: 1px solid #392510;
    padding-top: 12px; transition: 1s ease; background: black;
}
#mobile_item6 {
    position: absolute; height: 50px; left: 71.77%; width: 27.55%; border: 1px solid #392510;
    padding-top: 12px; transition: 1s ease; background: black;
}


#topleft_logo { position: absolute; top: 0; left: 0; margin-left: 20px; font-size: 70px; color: white; padding-top: 14px; }
#logo_img { height: 75px; width: auto; }

.inner_logo { font-size: 70px; color: black; margin-top: -6px; }
.inner_logo_img { height: 75px; width: auto; }


/* SOCIAL FRONT PAGE */
/*
#social_banner {
    position: fixed; 
    display: block;
    bottom: 0; 
    right: 0;
    height: 70px; width: 70px;
    background: rgba(255,153,0,0.5);
    clip-path: polygon(0 0, 45% 0, 100% 55%, 100% 100%);
    -webkit-clip-path: polygon(0 0, 45% 0, 100% 55%, 100% 100%);
    -moz-clip-path: polygon(0 0, 45% 0, 100% 55%, 100% 100%);
    -ms-clip-path: polygon(0 0, 45% 0, 100% 55%, 100% 100%);
    transition: .7s ease;
    text-align: center; color: #ccc; font-size: 14px;
    padding-top: 15px; cursor: pointer;
}
*/
#social_banner {
    position: fixed;
    display: block;
    bottom: 0px;
    right: 0px;
    height: 70px;
    width: 70px;
    background: rgba(255,153,0,0.5);
    clip-path: polygon(100% 0, 100% 40%, 40% 100%, 0% 100%);
    -webkit-clip-path: polygon(100% 0, 100% 40%, 40% 100%, 0% 100%);
    -moz-clip-path: polygon(100% 0, 100% 40%, 40% 100%, 0% 100%);
    -ms-clip-path: polygon(100% 0, 100% 40%, 40% 100%, 0% 100%);
    transition: .7s ease;
    text-align: center;
    color: #ccc;
    font-size: 14px;
    padding-top: 15px;
    cursor: pointer;
}



#social_banner:after {
 /*   content: '\002605';*/
    padding-left: 0;
}

#social_banner:hover {
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    -moz-clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    -ms-clip-path: polygon(0 0, 45% 0, 100% 55%, 100% 100%);
    transition: .5s ease; padding-top: 17px; padding-left: 0;
    width: 140px; background: transparent; font-size: 17px;
    border-bottom: 1px solid rgba(255,153,0,0.4);
}

#social_banner:hover:after {
    content: 'Click';
}

#footer { color: #444; font-size: 16px; position: absolute; bottom: 12px; left: 20px; }

#social_hidden {
    opacity: 0; display: block; position: fixed;
    width: 130px; height: 50px; background: transparent;
    bottom: 0; right: 0; padding-top: 21px; text-align: center;
    transform: scale(0.01,1); transform-origin: right;
    -webkit-transform: scale(0.01,1); -webkit-transform-origin: right;
    -moz-transform: scale(0.01,1); -moz-transform-origin: right;
    -ms-transform: scale(0.01,1); -ms-transform-origin: right;
    transition: .4s ease;
}

.unscale {
    transform: scale(1,1) !important;
    -webkit-transform: scale(1,1) !important;
    -moz-transform: scale(1,1) !important;
    -ms-transform: scale(1,1) !important;
}


.ml70 { margin-left: 70px; }
.page1ul { list-style-type: "- "; }
.mobile_br { display: none; }


@media all and (max-width: 991px) {
    #topleft_logo { font-size: 45px; }
    #logo_img { height: 50px; }

    /* inner pages */
    .inner_logo { font-size: 45px; }
    .inner_logo_img { height: 50px; }
}

@media all and (max-width: 1150px) {
    #new_menu_items { display: none; }
    #mobile_menu { display: block; }
}

@media all and (max-width: 767px) {
    #topleft_logo { font-size: 30px; }
    #logo_img { height: 35px; }
    #mobile_menu { font-size: 14px; }
    .mobile_br { display: block; }

    /* inner pages */
    .inner_logo { font-size: 30px; }
    .inner_logo_img { height: 35px; }
    h2#companyh2 { font-size: 26px; }
    h2#platformh2 { font-size: 26px; }
    h2#servicesh2 { font-size: 26px; }
    h2#clientsh2 { font-size: 26px; }
    h2#postlaunchservicesh2 { font-size: 26px; }
    h2#contacth2 { font-size: 26px; }

    #mobile_item1,#mobile_item2,#mobile_item3,#mobile_item4,#mobile_item5,#mobile_item6 { padding-top: 7px; }
   
    .calendly-badge-content {
        background: none;
        position: fixed;
        top: 12px;
        right: -1em;
        margin: 1em;
        color: rgb(231, 127, 60);
    }
}

@media all and (max-width: 425px) {
    .calendly-badge-content {
        background: none;
        position: fixed;
        top: 12px;
        right: -40px;
        margin: 1em;
        color: rgb(231, 127, 60);
    }
}

@media all and (min-width: 1150px) {
    .calendly-badge-content { right: -1em; }
}
#container {
    direction: ltr;
}
img#phoneicon {
    position: relative;
    width: 1em;
}

.calendly-badge-content span {
    float: left;
    padding-right: 1em;
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
</style>
</head>
<body>
<div id='container'>
    <div id="loadingScreen">
        <div id="loader"></div>
    </div>
    <div id="boxes"></div>
    <div id="footer">&copy;&ensp;Copyright 2018. Ledger Leap Inc.</div>
</div> <!-- Container End !-->
<div id="newPageWrap">
    <div id="topleft_logo">
      &ensp;Ledger Leap <img src="images/ll90.png" id="logo_img">
    </div>
    <div id="letstalk-div"> 
        <span id="letstalk" data-toggle="modal" data-target=".bd-example-modal-lg">LET'S TALK</span>
    </div>
        <div id="new_menu_items">
        <div class="menuitem" id="_company">Consulting & Advising</div><hr>
        <div class="menuitem" id="_platform">Technology Development</div><hr>
        <div class="menuitem" id="_services">Community Management & PR</div><hr>
        <div class="menuitem" id="_clients">Token Sale Management</div><hr>
        <div class="menuitem" id="_postlaunch">Clients & Partners</div><hr>
        <div class="menuitem" id="_letstalk">Team</div>
    </div>
    <div id="mobile_menu">
        <div id="mobile_item1">Consulting & <br class="mobile_br">Advising</div>
        <div id="mobile_item2">Technology <br class="mobile_br">Development</div>
        <div id="mobile_item3">Community <br class="mobile_br">Management, PR</div>
        <div id="mobile_item4">Token Sale <br class="mobile_br">Management</div>
        <div id="mobile_item5">Clients & <br class="mobile_br">Partners</div>
        <div id="mobile_item6">Team</div>
    </div>
    <div id="social_banner"></div>
    <div id="social_hidden">
        <a href="https://www.facebook.com/Ledger-Leap-2104950239762462/" target="_blank">
            <img src="web/images/facebook.png" class="socialicon" style="width: 25px; height: 25px;">
        </a>
        <a href="https://instagram.com/ledgerleap/" target="_blank">
            <img src="web/images/instagram.png" class="socialicon" style="width: 25px; height: 25px;">
        </a>
        <a href="https://www.linkedin.com/company/ledgerleap/" target="_blank">
            <img src="web/images/linkedin.png" class="socialicon" style="width: 25px; height: 25px;">
        </a>
        <a href="mailto:team@ledgerleap.com">
            <img src="web/images/mail.png" class="socialicon" style="width: 25px; height: 25px;">
        </a>
    </div>
</div>

<script src="js/three.js"></script>
<script src="js/OrbitControls.js"></script>
<script src="js/Detector.js"></script>
<script src="js/dat.gui.min.js"></script>
<script src="js/ParticleEngine.js"></script>
<script src="js/GLTFLoader.js"></script>
<script src="js/draco/DRACOLoader.js"></script>

<script id="template" type="notjs">
<div class="scene"></div>
<div class="description">$</div>
</script>

<script type="text/javascript">
if ( ! Detector.webgl ) Detector.addGetWebGLMessage();
var container, canvas, camera, raycaster, controlsOrbit, OLDINTERSECTED;
var renderer, scene;
var mouse = new THREE.Vector2();

var octa, octa_material, octa_geometry;
var object = new THREE.GLTFLoader();
var objects = [];
var pages = [];
var pageWrap = null;
var speed = [0.01, 0.01, 0.01, 0.01, 0.01, 0.01];
var selectedPageGeometry;
var group = new THREE.Group();
var sprite;
var fogColor;
var screensize = 1; // 1 = desktop, 2 = tablet, 3 = mobile

var cube_opacity = 0.9;
var cubeMetalness = 0.9;
var cubeMetalnessHover = 1;

var fontSizeBold = "23px";
var fontSizeReg = "20px";

init();
animate();

function rotateObjects(){
    for(var i in objects) {
        objects[i].rotation.y += speed[i];
        objects[i].rotation.x += speed[i] / 2;
    }
    group.rotation.z += 0.004;
}

function init(){
    container = document.getElementById( 'boxes' );
    scene = new THREE.Scene();
    //scene.background = new THREE.Color( 0x0a0a0a);

    fogColor = new THREE.Color(0x030303);
     
    scene.background = fogColor;
    scene.fog = new THREE.Fog(fogColor, 0.0025, 400);

    renderer = new THREE.WebGLRenderer({antialias: true, alpha: true});
    renderer.setPixelRatio( window.devicePixelRatio );
    renderer.setSize( window.innerWidth, window.innerHeight );
    //renderer.setClearColor(0x000000, 0);

    container.appendChild( renderer.domElement );

    var pointLight = new THREE.PointLight( 0xffffff, 0.6);
    var orangeLightLeft = new THREE.DirectionalLight( 0xffb6b6, 3.2 );
    orangeLightLeft.position.set( -1.26, 1.0, 0,0  );
    orangeLightLeft.name = "orangeLightLeft";
    scene.add( orangeLightLeft );

    var orangeLightRight= new THREE.DirectionalLight( 0xff7700, 0.5 );
    orangeLightRight.position.set( 3.0, 1.94, -3.72 );
    orangeLightRight.name = "orangeLightRight";
    scene.add( orangeLightRight );


    camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.01, 1000);
    camera.position.set(0, 0, 11);
    camera.add(pointLight);
    scene.add(camera);

    controlsOrbit = new THREE.OrbitControls( camera, renderer.domElement );
    controlsOrbit.minDistance = 8;
    controlsOrbit.maxDistance = 12;
    // controlsOrbit.minPolarAngle = Math.PI / 2;
    // controlsOrbit.maxPolarAngle = Math.PI / 2;
    controlsOrbit.enableKeys = false;
    controlsOrbit.enablePan = false;
    controlsOrbit.enableRotate = true;

    raycaster = new THREE.Raycaster();

    var index = -1;

    pageWrap = document.getElementById('pageWrap');

    // SPRITE GLOW
    var spriteMaterial = new THREE.SpriteMaterial({
    map: new THREE.ImageUtils.loadTexture('images/glow.png'),
        useScreenCoordinates: false,
        color: 0x333333, 
        transparent: true, 
        blending: THREE.AdditiveBlending
    });
    sprite = new THREE.Sprite( spriteMaterial );
    sprite.scale.set(0.038, 0.038, 0.038);
    // urls of the images, one per half axis


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
    // ROUNDED CUBES
    var rounded_cube_material = new THREE.MeshStandardMaterial({
            metalness: cubeMetalness,
            roughness: 0.3,
            color: 0xfbfbfb,
            //envMap: cubemap,
            transparent: true,
            opacity: cube_opacity
        });

    THREE.DRACOLoader.setDecoderPath('/js/draco/');
    object.setDRACOLoader(new THREE.DRACOLoader());
    object.load('objects/cube.glb', function(gltf) {
        var cube = gltf.scene.children[0].children[0];
        cube.material = rounded_cube_material;
        cube.scale.set(100,100,100);
        cube.add(sprite);
        for(var i =0; i < 6; i++) {
            cube.name = i;
            var clone = cube.clone()
            objects.push( clone );
            group.add( clone );
        }
        scene.add(group);
        setPosition();
    }, function(xhr) {
        console.log("Loading cubes: " + (xhr.loaded / xhr.total * 100) + "%");
    }, function(err) {
        console.log('Error: ' + err);
    });

    for(var i = 0; i < 6; i++){
        pages.push(document.getElementById('page'+i));

        if(index == -1)
            index = Math.floor(Math.random() * 6);
        else
            index = (index + 1) % 6;
    }


    renderer.domElement.addEventListener('mousemove', onDocumentMouseMove, false);
    renderer.domElement.addEventListener('mousedown', onDocumentMouseDown, false);
    renderer.domElement.addEventListener('mouseup', onDocumentMouseUp, false);

    renderer.domElement.addEventListener('touchstart', onTouchStart, false);
    renderer.domElement.addEventListener('touchend', onDocumentMouseUp, false);

    window.addEventListener( 'resize', onWindowResize, false );


    // PARTICLES
    var particleCount = 1800;
    var particles = new THREE.Geometry();
    var pMaterial = new THREE.PointsMaterial({
        color: 0xffffff,
        size: 0.6,
        map: THREE.ImageUtils.loadTexture("images/star.png"),
        blending: THREE.AdditiveBlending,
        transparent: true
    });

    for(var p = 0; p < particleCount; p++) {
        var pX = Math.random() * 500 - 250;
        var pY = Math.random() * 250;
        var pZ = Math.random() * 500 - 250;
        particle = new THREE.Vector3(pX, pY, pZ);

        particles.vertices.push(particle);
    }

    var particleSystem = new THREE.Points(particles, pMaterial);
    particleSystem.position.y = -1;
    particleSystem.position.x = 0;
    particleSystem.position.z = 10;
    scene.add(particleSystem);


    var size = 125;
    var divisions = 30;

    var gridHelper = new THREE.GridHelper( size, divisions );
    scene.add( gridHelper );
    gridHelper.position.set(0, -18.5, 0);
    gridHelper.scale.set(6,6,6);

}//end init()


function getRandomIntInRange( min, max ) {
    return Math.random() * ( max - min ) + min;
}

function getRandomInt(max) {
    return Math.floor(Math.random() * Math.floor(max));
}

function onWindowResize(event){
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize( window.innerWidth, window.innerHeight );

    setPosition();
}

function setPosition(){
    var width = window.innerWidth;

    if(width >= 1100)
        loadDesktopPosition();
    else if(width >= 600)
        loadTabletPosition();
    else
        loadMobilePosition();
}

function loadDesktopPosition(){

    screensize = 1;

    var objectPositions = [
    {x: -1, y: 1.7, z: 0},
    {x: -2, y: 0, z: 0},
    {x: -1, y: -1.7, z: 0},
    {x: 1, y: -1.7, z: 0},
    {x: 2, y: 0, z: 0},
    {x: 1, y: 1.7, z: 0}
    ];

    group.scale.set(1,1,1);
    group.position.set(0,0,0);

    for(var i = 0; i < 6; i++){
        objects[i].position.set(objectPositions[i].x, objectPositions[i].y, objectPositions[i].z);
    }

}

function loadTabletPosition(){

    screensize = 2;

    var objectPositions = [
    {x: -1, y: 1.7, z: 0},
    {x: -2, y: 0, z: 0},
    {x: -1, y: -1.7, z: 0},
    {x: 1, y: -1.7, z: 0},
    {x: 2, y: 0, z: 0},
    {x: 1, y: 1.7, z: 0}
    ];

    group.scale.set(0.9,0.9,0.9);
    group.position.set(0,0.3,0);

    for(var i = 0; i < 6; i++){
        objects[i].position.set(objectPositions[i].x, objectPositions[i].y, objectPositions[i].z);
    }
}

function loadMobilePosition(){

    screensize = 3;

    var objectPositions = [
    {x: -1, y: 1.7, z: 0},
    {x: -2, y: 0, z: 0},
    {x: -1, y: -1.7, z: 0},
    {x: 1, y: -1.7, z: 0},
    {x: 2, y: 0, z: 0},
    {x: 1, y: 1.7, z: 0}
    ];

    group.scale.set(0.75,0.75,0.75);
    group.position.set(0,0.5,0);

    for(var i = 0; i < 6; i++){
        objects[i].position.set(objectPositions[i].x, objectPositions[i].y, objectPositions[i].z);
    }
}

var selectedPage = -1;


function onDocumentMouseUp(event){
    event.preventDefault();

    mouse.x = (event.clientX / renderer.domElement.clientWidth) * 2 - 1;
    mouse.y = -(event.clientY / renderer.domElement.clientHeight) * 2 + 1

    raycaster.setFromCamera( mouse, camera );

    var intersects = raycaster.intersectObjects(objects);

    if(intersects.length > 0){
        selectedPage = intersects[0].object.name;
        selectedPageGeometry = intersects[0].object.geometry.type;
        console.log("selectedPageGeometry:", selectedPageGeometry);
        switch (selectedPage){
            case 0:
                document.getElementById("_company").style.color = "#ff7700";
                break;
            case 1:
                document.getElementById("_platform").style.color = "#ff7700";
                break;
            case 2:
                document.getElementById("_services").style.color = "#ff7700";
                break;
            case 3:
                document.getElementById("_clients").style.color = "#ff7700";
                break;
            case 4:
                document.getElementById("_postlaunch").style.color = "#ff7700";
                break;
            case 5:
                document.getElementById("_letstalk").style.color = "#ff7700";
                break;
        }
    }

    // MOBILE FANCY CLICK
    if(screensize == 3) {
        if(selectedPage == 0) {
            window.mobile_item1.style.borderColor = '#ff7700';
            window.mobile_item1.style.background = 'rgba(255,153,0,.2)';
        } else
        if(selectedPage == 1) {
            window.mobile_item2.style.borderColor = '#ff7700';
            window.mobile_item2.style.background = 'rgba(255,153,0,.2)';
        } else
        if(selectedPage == 2) {
            window.mobile_item3.style.borderColor = '#ff7700';
            window.mobile_item3.style.background = 'rgba(255,153,0,.2)';
        } else
        if(selectedPage == 3) {
            window.mobile_item4.style.borderColor = '#ff7700';
            window.mobile_item4.style.background = 'rgba(255,153,0,.2)';
        } else
        if(selectedPage == 4) {
            window.mobile_item5.style.borderColor = '#ff7700';
            window.mobile_item5.style.background = 'rgba(255,153,0,.2)';
        } else
        if(selectedPage == 5) {
            window.mobile_item6.style.borderColor = '#ff7700';
            window.mobile_item6.style.background = 'rgba(255,153,0,.2)';
        }

        setTimeout(function() {/*
            for(var i in pages){
                if(i == selectedPage) {
                    pages[i].style.display = 'block';
                } else {
                    pages[i].style.display = 'none';
                }
            }

            if(selectedPage != -1){
                //pageWrap.style.left = '0';
                pageWrap.style.display = 'block';
                setTimeout(function() {
                    pageWrap.style.opacity = '1';
                },100);
            }
            makeNextScene();*/

            switch(selectedPage) {
                case 0:
                    selectedPage = -1;
                    window.location.href = "/consulting-and-advising";
                    break;
                case 1:
                    selectedPage = -1;
                    window.location.href = "/technology-development";
                    break;
                case 2:
                    selectedPage = -1;
                    window.location.href = "/community-management";
                    break;
                case 3:
                    selectedPage = -1;
                    window.location.href = "/token-sale-management";
                    break;
                case 4:
                    selectedPage = -1;
                    window.location.href = "/clients-partners";
                    break;
                case 5:
                    selectedPage = -1;
                    window.location.href = "/team";
                    break;
            }
        },500);

    } else {

        setTimeout(function() {/*
            for(var i in pages){
                if(i == selectedPage) {
                    pages[i].style.display = 'block';
                } else {
                    pages[i].style.display = 'none';
                }
            }

            if(selectedPage != -1){
                //pageWrap.style.left = '0';
                pageWrap.style.display = 'block';
                setTimeout(function() {
                    pageWrap.style.opacity = '1';
                },100);
            }
            makeNextScene();*/

            switch(selectedPage) {
                case 0:
                    selectedPage = -1;
                    window.location.href = "/consulting-and-advising";
                    break;
                case 1:
                    selectedPage = -1;
                    window.location.href = "/technology-development";
                    break;
                case 2:
                    selectedPage = -1;
                    window.location.href = "/community-management";
                    break;
                case 3:
                    selectedPage = -1;
                    window.location.href = "/token-sale-management";
                    break;
                case 4:
                    selectedPage = -1;
                    window.location.href = "/clients-partners";
                    break;
                case 5:
                    selectedPage = -1;
                    window.location.href = "/team";
                    break;
            }
        },500);
    }
}

function onTouchStart(event){
    event.preventDefault();

    mouse.x = (event.touches[0].clientX / window.innerWidth ) * 2 - 1;
    mouse.y = -(event.touches[0].clientY / window.innerHeight ) * 2 + 1;

    raycaster.setFromCamera( mouse, camera );

    var intersects = raycaster.intersectObjects(objects);

    if(intersects.length > 0){
        selectedPage = intersects[0].object.name;
        selectedPageGeometry = intersects[0].object.geometry.type;
        var orange_material = new THREE.MeshStandardMaterial({metalness:cubeMetalnessHover,roughness:0.3,color:0xfb9b4b,transparent:true,opacity:cube_opacity})

        switch (selectedPage){
            case 0:
                document.getElementById("_company").style.color = "#ff7700";
                group.children[0].material = orange_material;
                //group.children[0].geometry = new THREE.BoxGeometry(1.2, 1.2, 1.2);
                group.children[0].scale.set(120, 120, 120);
                speed[0] = 0.05;
                break;
            case 1:
                document.getElementById("_platform").style.color = "#ff7700";
                group.children[1].material = orange_material;
                //group.children[1].geometry = new THREE.BoxGeometry(1.2, 1.2, 1.2);
                group.children[1].scale.set(120, 120, 120);
                speed[1] = 0.05;
                break;
            case 2:
                document.getElementById("_services").style.color = "#ff7700";
                group.children[2].material = orange_material;
                //group.children[2].geometry = new THREE.BoxGeometry(1.2, 1.2, 1.2);
                group.children[2].scale.set(120, 120, 120);
                speed[2] = 0.05;
                break;
            case 3:
                document.getElementById("_clients").style.color = "#ff7700";
                group.children[3].material = orange_material;
                //group.children[3].geometry = new THREE.BoxGeometry(1.2, 1.2, 1.2);
                group.children[3].scale.set(120, 120, 120);
                speed[3] = 0.05;
                break;
            case 4:
                document.getElementById("_postlaunch").style.color = "#ff7700";
                group.children[4].material = orange_material;
                //group.children[4].geometry = new THREE.BoxGeometry(1.2, 1.2, 1.2);
                group.children[4].scale.set(120, 120, 120);
                speed[4] = 0.05;
                break;
            case 5:
                document.getElementById("_letstalk").style.color = "#ff7700";
                group.children[5].material = orange_material;
                //group.children[5].geometry = new THREE.BoxGeometry(1.2, 1.2, 1.2);
                group.children[5].scale.set(120, 120, 120);
                speed[5] = 0.05;
                break;
        }
    }
}

function onDocumentMouseDown(event){
    event.preventDefault();
/*
    mouse.x = (event.clientX / renderer.domElement.clientWidth) * 2 - 1;
    mouse.y = -(event.clientY / renderer.domElement.clientHeight) * 2 + 1

    raycaster.setFromCamera( mouse, camera );

    var intersects = raycaster.intersectObjects(objects);

    if(intersects.length > 0){
        selectedPage = intersects[0].object.name;
        selectedPageGeometry = intersects[0].object.geometry.type;
        console.log("selectedPageGeometry:", selectedPageGeometry);
        switch (selectedPage){
            case 0:
                document.getElementById("_company").style.color = "#ff7700";
                break;
            case 1:
                document.getElementById("_platform").style.color = "#ff7700";
                break;
            case 2:
                document.getElementById("_services").style.color = "#ff7700";
                break;
            case 3:
                document.getElementById("_clients").style.color = "#ff7700";
                break;
            case 4:
                document.getElementById("_postlaunch").style.color = "#ff7700";
                break;
            case 5:
                document.getElementById("_letstalk").style.color = "#ff7700";
                break;
        }
    }*/
}

function onDocumentMouseMove(event){
    event.preventDefault();

    mouse.x = (event.clientX / renderer.domElement.clientWidth) * 2 - 1;
    mouse.y = -(event.clientY / renderer.domElement.clientHeight) * 2 + 1

        raycaster.setFromCamera( mouse, camera );

    var intersects = raycaster.intersectObjects(objects);

    document.getElementById('boxes').style.cursor = 'inherit';

    if(intersects.length > 0){
        var selectedIndex = intersects[0].object.name;
        for(var i in speed){
            if(i != selectedIndex) {
                speed[i] = 0.01;
                if(i == 5) { Object.assign(document.getElementById("_letstalk").style, {"color": "#fbfbfb","transition": ".4s ease", "marginLeft": "0", "fontSize": fontSizeReg }); }
                if(i == 4) { Object.assign(document.getElementById("_postlaunch").style, {"color": "#fbfbfb","transition": ".4s ease", "marginLeft": "0", "fontSize": fontSizeReg }); }
                if(i == 3) { Object.assign(document.getElementById("_clients").style, {"color": "#fbfbfb","transition": ".4s ease", "marginLeft": "0", "fontSize": fontSizeReg }); }
                if(i == 2) { Object.assign(document.getElementById("_services").style, {"color": "#fbfbfb","transition": ".4s ease", "marginLeft": "0", "fontSize": fontSizeReg }); }
                if(i == 1) { Object.assign(document.getElementById("_platform").style, {"color": "#fbfbfb","transition": ".4s ease", "marginLeft": "0", "fontSize": fontSizeReg }); }
                if(i == 0) { Object.assign(document.getElementById("_company").style, {"color": "#fbfbfb","transition": ".4s ease", "marginLeft": "0", "fontSize": fontSizeReg }); }
                group.children[i].material = new THREE.MeshStandardMaterial({metalness:cubeMetalness,roughness:0.3,color:0xfbfbfb,transparent:true,opacity:cube_opacity});
                //group.children[i].geometry = new THREE.BoxGeometry(1, 1, 1);
                group.children[i].scale.set(100, 100, 100);
            } else {
                speed[i] = 0.05;
                if(i == 5) { Object.assign(document.getElementById("_letstalk").style, {"color": "#fb9b4b", "fontSize": fontSizeBold, "transition": ".4s ease", "marginLeft":"-20px", "cursor": "pointer"}); }
                if(i == 4) { Object.assign(document.getElementById("_postlaunch").style, {"color": "#fb9b4b", "fontSize": fontSizeBold, "transition": ".4s ease", "marginLeft":"-20px", "cursor": "pointer"}); }
                if(i == 3) { Object.assign(document.getElementById("_clients").style, {"color": "#fb9b4b", "fontSize": fontSizeBold, "transition": ".4s ease", "marginLeft":"-20px", "cursor": "pointer"}); }
                if(i == 2) { Object.assign(document.getElementById("_services").style, {"color": "#fb9b4b", "fontSize": fontSizeBold, "transition": ".4s ease", "marginLeft":"-20px", "cursor": "pointer"}); }
                if(i == 1) { Object.assign(document.getElementById("_platform").style, {"color": "#fb9b4b", "fontSize": fontSizeBold, "transition": ".4s ease", "marginLeft":"-20px", "cursor": "pointer"}); }
                if(i == 0) { Object.assign(document.getElementById("_company").style, {"color": "#fb9b4b", "fontSize": fontSizeBold, "transition": ".4s ease", "marginLeft":"-20px", "cursor": "pointer"}); }

                group.children[i].material = new THREE.MeshStandardMaterial({metalness:cubeMetalnessHover,roughness:0.3,color:0xfb9b4b,transparent:true, opacity:cube_opacity});
                //group.children[i].geometry = new THREE.BoxGeometry(1.2, 1.2, 1.2);
                group.children[i].scale.set(120, 120, 120);
            }
            document.getElementById('boxes').style.cursor = 'pointer';
        }
    }else{
        speed = [0.01, 0.01, 0.01, 0.01, 0.01, 0.01];
        var grey_material = new THREE.MeshStandardMaterial({metalness:cubeMetalness,roughness:0.3,color:0xfbfbfb,transparent:true,opacity:cube_opacity});
        group.children[0].material = grey_material;
        group.children[1].material = grey_material;
        group.children[2].material = grey_material;
        group.children[3].material = grey_material;
        group.children[4].material = grey_material;
        group.children[5].material = grey_material;

        group.children[0].scale.set(100,100,100);
        group.children[1].scale.set(100,100,100);
        group.children[2].scale.set(100,100,100);
        group.children[3].scale.set(100,100,100);
        group.children[4].scale.set(100,100,100);
        group.children[5].scale.set(100,100,100);
        Object.assign(document.getElementById("_letstalk").style, {"color": "#fbfbfb","transition": ".4s ease", "marginLeft": "0", "fontSize": fontSizeReg });
        Object.assign(document.getElementById("_postlaunch").style, {"color": "#fbfbfb","transition": ".4s ease", "marginLeft": "0", "fontSize": fontSizeReg });
        Object.assign(document.getElementById("_clients").style, {"color": "#fbfbfb","transition": ".4s ease", "marginLeft": "0", "fontSize": fontSizeReg });
        Object.assign(document.getElementById("_services").style, {"color": "#fbfbfb","transition": ".4s ease", "marginLeft": "0", "fontSize": fontSizeReg });
        Object.assign(document.getElementById("_platform").style, {"color": "#fbfbfb","transition": ".4s ease", "marginLeft": "0", "fontSize": fontSizeReg });
        Object.assign(document.getElementById("_company").style, {"color": "#fbfbfb","transition": ".4s ease", "marginLeft": "0", "fontSize": fontSizeReg });
    }
}
/*
function update(){
    ray = new THREE.Raycaster();
    ray.setFromCamera( mouse, camera );

    var intersectedRay = raycaster.intersectObjects(objects);

    document.getElementById('boxes').style.cursor = 'inherit';
    var hoverMaterial = new THREE.MeshStandardMaterial({ metalness: 0, roughness: 0, color: 0xfb9b4b});
    var regularMaterial = new THREE.MeshStandardMaterial({ metalness: 0, roughness: 0, color: 0xfbfbfb});
    var hoverGeometry = new THREE.BoxGeometry(1.2, 1.2, 1.2);
    var regularGeometry = new THREE.BoxGeometry(1, 1, 1);

    if(intersectedRay.length > 0){

        //restore previous object to original color and size
        if(intersectedRay[0].object != OLDINTERSECTED){
           if( OLDINTERSECTED) {
                OLDINTERSECTED.material = regularMaterial;
                OLDINTERSECTED.geometry = regularGeometry;
            }
            //define intersected object
            OLDINTERSECTED = intersectedRay[0].object;

            OLDINTERSECTED.material = hoverMaterial;
            OLDINTERSECTED.geometry = hoverGeometry;
        //there are no intersections restore to original
        } else if( intersectedRay[0].object == OLDINTERSECTED ){
            //OLDINTERSECTED.material = regularMaterial;
            //OLDINTERSECTED.geometry= regularGeometry;
            console.log("old one set");
        }
    } else if( intersectedRay.length == 0 ){
        OLDINTERSECTED = null;

    }
}
*/
function goBack(){
    window.mobile_item1.style.borderColor = '#392510';
    window.mobile_item2.style.borderColor = '#392510';
    window.mobile_item3.style.borderColor = '#392510';
    window.mobile_item4.style.borderColor = '#392510';
    window.mobile_item5.style.borderColor = '#392510';
    window.mobile_item6.style.borderColor = '#392510';
    window.mobile_item1.style.background = 'black';
    window.mobile_item2.style.background = 'black';
    window.mobile_item3.style.background = 'black';
    window.mobile_item4.style.background = 'black';
    window.mobile_item5.style.background = 'black';
    window.mobile_item6.style.background = 'black';
    var grey_material = new THREE.MeshStandardMaterial({metalness:cubeMetalness,roughness:0.3,color:0xfbfbfb,transparent:true,opacity:cube_opacity})
    group.children[0].material = grey_material;
    //group.children[0].geometry = new THREE.BoxGeometry(1, 1, 1);
    group.children[0].scale.set(100, 100, 100);
    speed[0] = 0.01;
    group.children[1].material = grey_material;
    group.children[100].scale.set(100, 100, 100);
    speed[1] = 0.01;
    group.children[2].material = grey_material;
    group.children[2].scale.set(100, 100, 100);
    speed[2] = 0.01;
    group.children[3].material = grey_material;
    group.children[3].scale.set(100, 100, 100);
    speed[3] = 0.01;
    group.children[4].material = grey_material;
    group.children[4].scale.set(100, 100, 100);
    speed[4] = 0.01;
    group.children[5].material = grey_material;
    group.children[5].scale.set(100, 100, 100);
    speed[5] = 0.01;
    //pageWrap.style.left = '100%';
    pageWrap.style.opacity = '0';
    setTimeout(function() {
      pageWrap.style.display = 'none';
    },500);

    selectedPage = -1;
    //destroy all elements and dereference them
    doDispose(scene2);
}
function animate(){
    requestAnimationFrame(animate);
    controlsOrbit.update();
    rotateObjects();
    render();
    //update();
}

function render(){
    renderer.render(scene, camera);
}

function doDispose(obj){
    if (obj !== null){
        for (var i = 0; i < obj.children.length; i++){
            doDispose(obj.children[i]);
        }
        if (obj.geometry){
            obj.geometry.dispose();
            obj.geometry = undefined;
        }
        if (obj.material){
            if (obj.material.map){
                obj.material.map.dispose();
                obj.material.map = undefined;
            }
            obj.material.dispose();
            obj.material = undefined;
        }
    }
    obj = undefined;
}

///////////////SCENE 2, ACTION!!!///////////
var camera2, scene2, renderer2;
/*

renderer2 = new THREE.WebGLRenderer( { antialias: true });
renderer2.setPixelRatio( window.devicePixelRatio);
renderer2.setSize( window.innerWidth, window.innerHeight);

function makeNextScene() {

    var page0 = document.getElementById("page0");
    var page1 = document.getElementById("page1");
    var page2 = document.getElementById("page2");
    var page3 = document.getElementById("page3");
    var page4 = document.getElementById("page4");
    var page5 = document.getElementById("page5");


    if(selectedPage != -1) {
        switch(selectedPage) {
        case 0:
            page0.appendChild( renderer2.domElement);
            document.getElementById('page0').children[1].id = "canvas0";
            init2();
            animate2();
            break;

        case 1:
            page1.appendChild( renderer2.domElement);
            document.getElementById('page1').children[1].id = "canvas1";
            init2();
            animate2();
            break;

        case 2:
            page2.appendChild( renderer2.domElement);
            document.getElementById('page2').children[1].id = "canvas2";
            init2();
            animate2();
            break;

        case 3:
            page3.appendChild( renderer2.domElement);
            document.getElementById('page3').children[1].id = "canvas3";
            init2();
            animate2();
            break;

        case 4:
            page4.appendChild( renderer2.domElement);
            document.getElementById('page4').children[1].id = "canvas4";
            init2();
            animate2();
            break;
        case 5:
            page5.appendChild( renderer2.domElement);
            document.getElementById('page5').children[1].id = "canvas5";
            init2();
            animate2();
            break;
        }
    }
}

function init2() {
    camera2 = new THREE.PerspectiveCamera( 45, window.innerWidth / window.innerHeight, 1, 20000 );
    //camera.position.y = 400;
    camera2.position.z = 2000;
    camera2.position.x = 1000;
    camera2.position.y = 1000;

    scene2 = new THREE.Scene();
    scene2.background = new THREE.Color( 0xfafafa );
    var light2, object2;
    var ambientLight2 = new THREE.AmbientLight( 0xcccccc, 0.4 );
    scene2.add( ambientLight2 );
    var pointLight2 = new THREE.PointLight( 0xffffff, 0.8 );
    camera2.add( pointLight2);
    scene2.add( camera2 );
    //var material = new THREE.MeshBasicMaterial( { wireframe: true, wireframeLinewidth: 0,side: THREE.DoubleSide, color: 0x555555 });
    var material2 = new THREE.MeshStandardMaterial( { metalness: 0, roughness: 0, color: 0xffffff, emissive: 0x666666 });
    if(selectedPageGeometry === undefined){
        selectedPageGeometry = "BoxGeometry";
    }

    switch(selectedPageGeometry){
    case "BoxGeometry":
        var i;
        for (i=0; i <=20; i++){
            var boxSize = getRandomInt(200);
            geometry = new THREE.BoxGeometry( boxSize, boxSize, boxSize );
            object = new THREE.Mesh(geometry, material2);
            object.position.set( getRandomInt(1800), getRandomInt(1800), getRandomInt(1800));
            scene2.add(object);
        }
        break;

    case "SphereGeometry":
        var i;
        for (i=0; i <=20; i++){
            geometry = new THREE.SphereGeometry( getRandomInt(200), 12, 12 );
            object = new THREE.Mesh(geometry, material2);
            object.position.set( getRandomInt(1800), getRandomInt(1800), getRandomInt(1800));
            scene2.add(object);
        }
        break;

    case "TetrahedronGeometry":
        var i;
        for (i=0; i <=20; i++){
            geometry = new THREE.TetrahedronGeometry( getRandomInt(200), 1 );
            object = new THREE.Mesh(geometry, material2);
            object.position.set( getRandomInt(1800), getRandomInt(1800), getRandomInt(1800));
            scene2.add(object);
        }
        break;

    case "IcosahedronGeometry":
        var i;
        for (i=0; i <=20; i++){
            geometry = new THREE.IcosahedronGeometry( getRandomInt(200), 0);
            object = new THREE.Mesh(geometry, material2);
            object.position.set( getRandomInt(1800), getRandomInt(1800), getRandomInt(1800));
            scene2.add(object);
        }
        break;

    case "OctahedronGeometry":
        var i;
        for (i=0; i <= 15; i++){
            geometry = new THREE.OctahedronGeometry( getRandomInt(200), 0);
            object = new THREE.Mesh(geometry, material2);
            object.position.set( getRandomInt(1800), getRandomInt(1800), getRandomInt(1800));
            scene2.add(object);
        }
        break;
    }
}

function animate2() {
    requestAnimationFrame( animate2 );
    render2();
}

function render2() {

    var timer = Date.now() * 0.0001;
    //camera.position.x = Math.cos( timer ) * 800;
    //camera.position.z = Math.sin( timer ) * 800;
    //camera.lookAt( scene.position );

    if (scene2.type === "Scene" && scene2.children[3].geometry !== undefined){
        scene2.traverse( function( object ) {
            if ( object.isMesh === true ) {
                //object.rotation.x = timer * 5;
                object.rotation.y = timer * 1.5;
                object.position.y += 0.01;
                object.position.x += 0.01;
                object.position.z += 0.01;
            }
        } );
        renderer2.render( scene2, camera2 );
    }
}
*/

</script>
<!--ET -->
<script src="js/jquery-3.3.1.js"></script>
<script src="js/jquery.color-2.1.2.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.ui.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
</script>

<script type="text/javascript">
    $( "#ledger_contact_form" ).submit( function( event ){
        event.preventDefault();
        $.post("submit.php", $( "#ledger_contact_form").serialize() )
            .done(function( data) {
                $( "#post_results" ).html("<span>" + data + "</span>")
                    .hide()
                    .fadeIn( "slow" );
            })
            .fail(function( data ){
            });
    });
</script>

<script type="text/javascript">
$(document).ready(function () {
  var $body = $('body');
  var $modalBackdropDiv = $('<div class="modal-backdrop fade in"></div>');

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
  $(window).on('resize', function () {
    $('.modal:visible').each(centerModal);
  });
});

$(document).ready(function () {
  function hex_initial_animation() {
    $(".hex-wrap,.hover-notify").velocity("transition.expandIn", { stagger: 150 });
    $(".hex-wrap").velocity("callout.pulse");
    $(".hoverblock").velocity("fadeOut", { delay: 3000, duration: 0 });
    }
  hex_initial_animation();

var hoverdetect = setInterval(function(){ hovernotify() }, 3000);
function hovernotify() {
    $(".hover-notify").velocity("callout.tada");
}
function myStopFunction() {
$(".hover-notify").velocity('stop', true).velocity("fadeOut");
    clearInterval(hoverdetect);
}
    $(".hex-init").mouseenter(function () {

      myStopFunction();

      var title_color =  $(this).parent().attr("data-color");
      var title_name = $(this).parent().attr("data-title");
      var desc_name = $(this).parent().attr("data-content");

        function hex_description() {
          $('.code-description').velocity('stop', true).velocity("transition.slideRightBigIn");
          $('.' + desc_name).siblings().removeClass('desc-active');
            setTimeout(function() {
              $('.' + desc_name).addClass('desc-active');
              $('.code-descriptopn > div, .desc-active').children().velocity('stop', true).velocity("transition.slideRightBigIn", { stagger: 300 });
              $('.code-title, .desc-active span').velocity({color: title_color}, { queue: false });
              $('.code-title').text(title_name)
            }, 0);
          }
          hex_description();

        $(this).parent().addClass('hexactive');
        $('.hexactive').velocity({scaleX:"1.1",scaleY:"1.1"}, { duration: 200 });

      }).mouseleave(function () {
         $('.hexactive').velocity('stop', true).velocity('reverse').removeClass('hexactive');
      });
});

function displayOnlyThisPage(page){
    var pagesToHide = ['#page0', '#page1', '#page2', '#page3', '#page4', '#page5' ];
    for (var i in pagesToHide){
        if(pagesToHide[i] != page){
            $(pagesToHide[i]).css({"display": "none"});
        }
    }
}
var orange_material = new THREE.MeshStandardMaterial({
    metalness:cubeMetalness,
    roughness:0.3,
    color:0xfb9b4b,
    transparent:true,
    opacity:cube_opacity 
});

var grey_material = new THREE.MeshStandardMaterial({
    metalness:cubeMetalness,
    roughness:0.3,
    color:0xfbfbfb,
    transparent:false,
    opacity:cube_opacity
})

$("#_company").hover(function() {
  var cube1 = group.children[0];
  cube1.material = orange_material;
  cube1.scale.set(120, 120, 120);
  $(this).css( {"margin-left": "-20px", "cursor": "pointer", "color": "#ff7700", "font-size": fontSizeBold, "transition": ".4s ease"});
  speed[0] = 0.05;
}).mouseleave(function() {
  var cube1 = group.children[0];
  cube1.material = grey_material;
  cube1.scale.set(100, 100, 100);
  $(this).css( { "margin-left": "0", "color": "#fbfbfb", "font-size": fontSizeReg, "transition": ".4s ease" });
  speed[0] = 0.01;
}).click(function(){
    /*displayOnlyThisPage('#page0');
    $('#page0').css({"display": "block"}); 
    pageWrap.style.display = 'block';
    setTimeout(function() {
        pageWrap.style.opacity = '1';
    },100);
    page0.appendChild( renderer2.domElement);
    document.getElementById('page0').children[1].id = "canvas0";
    init2();
    animate2();*/

    selectedPage = -1;
    window.location.href = "/consulting-and-advising";
});

$("#_platform").hover(function() {
  var cube2 = group.children[1];
  cube2.material = orange_material; 
  cube2.scale.set(120, 120, 120);
  $(this).css( { "margin-left":"-20px", "cursor": "pointer", "color": "#ff7700", "font-size": fontSizeBold, "transition": ".4s ease" });
  speed[1] = 0.05;
}).mouseleave(function() {
  var cube2 = group.children[1];
  cube2.material = grey_material; 
  cube2.scale.set(100, 100, 100);
  $(this).css( { "margin-left": "0", "color": "#fbfbfb", "font-size": fontSizeReg, "transition": ".4s ease" });
  speed[1] = 0.01;
}).click(function(){
    /*displayOnlyThisPage('#page1');
    $('#page1').css({"display": "block"}); 
    pageWrap.style.display = 'block';
    setTimeout(function() {
        pageWrap.style.opacity = '1';
    },100);
    page1.appendChild( renderer2.domElement);
    document.getElementById('page1').children[1].id = "canvas1";
    init2();
    animate2();*/

    selectedPage = -1;
    window.location.href = "/technology-development";
});

$("#_services").hover(function() {
  var cube3 = group.children[2];
  cube3.material = orange_material; 
  cube3.scale.set(120, 120, 120);
  $(this).css( { "margin-left": "-20px", "cursor": "pointer", "color": "#ff7700", "font-size": fontSizeBold, "transition": ".4s ease" });
  speed[2] = 0.05;
}).mouseleave(function() {
  var cube3 = group.children[2];
  cube3.material = grey_material; 
  cube3.scale.set(100, 100, 100);
  $(this).css( { "margin-left": "0", "color": "#fbfbfb", "font-size": fontSizeReg, "transition": ".4s ease" });
  speed[2] = 0.01;
}).click(function(){
    /*displayOnlyThisPage('#page2');
    $('#page2').css({"display": "block"}); 
    pageWrap.style.display = 'block';
    setTimeout(function() {
        pageWrap.style.opacity = '1';
    },100);
    page2.appendChild( renderer2.domElement);
    document.getElementById('page2').children[1].id = "canvas2";
    init2();
    animate2();*/

    selectedPage = -1;
    window.location.href = "/community-management";
});

$("#_clients").hover(function() {
    var cube4 = group.children[3];
    cube4.material = orange_material; 
    cube4.scale.set(120, 120, 120);
    $(this).css( { "margin-left": "-20px", "cursor": "pointer", "color": "#ff7700", "font-size": fontSizeBold, "transition": ".4s ease" });
    speed[3] = 0.05;
}).mouseleave(function() {
    var cube4 = group.children[3];
    cube4.material = grey_material; 
    cube4.scale.set(100, 100, 100);
    $(this).css( { "margin-left": "0", "color": "#fbfbfb", "font-size": fontSizeReg, "transition": ".4s ease" });
    speed[3] = 0.01;
}).click(function(){
    /*displayOnlyThisPage('#page3');
    $('#page3').css({"display": "block"}); 
    pageWrap.style.display = 'block';
    setTimeout(function() {
        pageWrap.style.opacity = '1';
    },100);
    page3.appendChild( renderer2.domElement);
    document.getElementById('page3').children[1].id = "canvas3";
    init2();
    animate2();*/

    selectedPage = -1;
    window.location.href = "/token-sale-management";
});

$("#_postlaunch").hover(function() {
    var cube5 = group.children[4];
    cube5.material = orange_material; 
    cube5.scale.set(120, 120, 120);
    $(this).css( { "margin-left": "-20px", "cursor": "pointer", "color": "#ff7700", "font-size": fontSizeBold, "transition": ".4s ease" });
    speed[4] = 0.05;
}).mouseleave(function() {
    var cube5 = group.children[4];
    cube5.material = grey_material; 
    cube5.scale.set(100, 100, 100);
    $(this).css( { "margin-left": "0", "color": "#fbfbfb", "font-size": fontSizeReg, "transition": ".4s ease" });
  speed[4] = 0.01;
}).click(function(){
    /*displayOnlyThisPage('#page4');
    $('#page4').css({"display": "block"}); 
    pageWrap.style.display = 'block';
    setTimeout(function() {
        pageWrap.style.opacity = '1';
    },100);
    page4.appendChild( renderer2.domElement);
    document.getElementById('page4').children[1].id = "canvas4";
    init2();
    animate2();*/

    selectedPage = -1;
    window.location.href = "/clients-partners";
});

$("#_letstalk").hover(function() {
    var cube6 = group.children[5];
    cube6.material = orange_material; 
    cube6.scale.set(120, 120, 120);
    $(this).css( { "margin-left": "-20px", "cursor": "pointer", "color": "#ff7700", "font-size": fontSizeBold, "transition": ".4s ease" });
    speed[5] = 0.05;
}).mouseleave(function() {
    var cube6 = group.children[5];
    cube6.material = grey_material;
    cube6.scale.set(100, 100, 100);
    $(this).css( { "margin-left": "0", "color": "#fbfbfb", "font-size": fontSizeReg, "transition": ".4s ease" });
    speed[5] = 0.01;
}).click(function(){
    /*displayOnlyThisPage('#page5');
    $('#page5').css({"display": "block"});
    pageWrap.style.display = 'block';
    setTimeout(function() {
        pageWrap.style.opacity = '1';
    },100);
    page5.appendChild( renderer2.domElement);
    document.getElementById('page5').children[1].id = "canvas5";
    init2();
    animate2();*/

    selectedPage = -1;
    window.location.href = "/team";
});


//////////// MOBILE CLICKS /////////////

$("#mobile_item1").click(function() {
    var cube1 = group.children[0];
    cube1.material = orange_material;
    cube1.scale.set(120, 120, 120);
    window.mobile_item1.style.borderColor = '#ff7700';
    window.mobile_item1.style.background = 'rgba(255,153,0,.2)';
    speed[0] = 0.05;
/*
    setTimeout(function() {
        displayOnlyThisPage('#page0');
        $('#page0').css({"display": "block"});
        pageWrap.style.display = 'block';
        setTimeout(function() {
            pageWrap.style.opacity = '1';
        },100);
        page0.appendChild( renderer2.domElement);
        document.getElementById('page0').children[1].id = "canvas0";
        init2();
        animate2();
    },1000);*/

    selectedPage = -1;
    window.location.href = "/consulting-and-advising";
});

$("#mobile_item2").click(function() {
    var cube2 = group.children[1];
    cube2.material = orange_material; 
    cube2.scale.set(120, 120, 120);
    window.mobile_item2.style.borderColor = '#ff7700';
    window.mobile_item2.style.background = 'rgba(255,153,0,.2)';
    speed[1] = 0.05;
/*
    setTimeout(function() {
        displayOnlyThisPage('#page1');
        $('#page1').css({"display": "block"});
        pageWrap.style.display = 'block';
        setTimeout(function() {
            pageWrap.style.opacity = '1';
        },100);
        page1.appendChild( renderer2.domElement);
        document.getElementById('page1').children[1].id = "canvas1";
        init2();
        animate2();
    },1000);*/

    selectedPage = -1;
    window.location.href = "/technology-development";
});

$("#mobile_item3").click(function() {
    var cube3 = group.children[2];
    cube3.material = orange_material; 
    cube3.scale.set(120, 120, 120);
    window.mobile_item3.style.borderColor = '#ff7700';
    window.mobile_item3.style.background = 'rgba(255,153,0,.2)';
    speed[2] = 0.05;
/*
    setTimeout(function() {
        displayOnlyThisPage('#page2');
        $('#page2').css({"display": "block"});
        pageWrap.style.display = 'block';
        setTimeout(function() {
            pageWrap.style.opacity = '1';
        },100);
        page2.appendChild( renderer2.domElement);
        document.getElementById('page2').children[1].id = "canvas2";
        init2();
        animate2();
    },1000);*/

    selectedPage = -1;
    window.location.href = "/community-management";
});

$("#mobile_item4").click(function() {
    var cube4 = group.children[3];
    cube4.material = orange_material; 
    cube4.scale.set(120, 120, 120);
    window.mobile_item4.style.borderColor = '#ff7700';
    window.mobile_item4.style.background = 'rgba(255,153,0,.2)';
    speed[3] = 0.05;
/*
    setTimeout(function() {
        displayOnlyThisPage('#page3');
        $('#page3').css({"display": "block"});
        pageWrap.style.display = 'block';
        setTimeout(function() {
            pageWrap.style.opacity = '1';
        },100);
        page3.appendChild( renderer2.domElement);
        document.getElementById('page3').children[1].id = "canvas3";
        init2();
        animate2();
    },1000);*/

    selectedPage = -1;
    window.location.href = "/token-sale-management";
});

$("#mobile_item5").click(function() {
    var cube5 = group.children[4];
    cube5.material = orange_material; 
    cube5.scale.set(120, 120, 120);
    window.mobile_item5.style.borderColor = '#ff7700';
    window.mobile_item5.style.background = 'rgba(255,153,0,.2)';
    speed[4] = 0.05;
/*
    setTimeout(function() {
        displayOnlyThisPage('#page4');
        $('#page4').css({"display": "block"});
        pageWrap.style.display = 'block';
        setTimeout(function() {
            pageWrap.style.opacity = '1';
        },100);
        page4.appendChild( renderer2.domElement);
        document.getElementById('page4').children[1].id = "canvas4";
        init2();
        animate2();
    },1000);*/

    selectedPage = -1;
    window.location.href = "/clients-partners";
});

$("#mobile_item6").click(function() {
    var cube6 = group.children[5];
    cube6.material = orange_material; 
    cube6.scale.set(120, 120, 120);
    window.mobile_item6.style.borderColor = '#ff7700';
    window.mobile_item6.style.background = 'rgba(255,153,0,.2)';
    speed[5] = 0.05;
/*
    setTimeout(function() {
        displayOnlyThisPage('#page5');
        $('#page5').css({"display": "block"});
        pageWrap.style.display = 'block';
        setTimeout(function() {
            pageWrap.style.opacity = '1';
        },100);
        page5.appendChild( renderer2.domElement);
        document.getElementById('page5').children[1].id = "canvas5";
        init2();
        animate2();
    },1000);*/

    selectedPage = -1;
    window.location.href = "/team";
});


setTimeout(function() {
    window.boxes.style.opacity = 1;
    window.loadingScreen.style.opacity = 0;
    window.newPageWrap.style.opacity = 1;
    setTimeout(function() {
    window.loadingScreen.style.display = "none";
    },500);
},1400);

$("#social_banner").click(function() {
    $("#social_hidden").addClass('unscale');
    window.social_hidden.style.opacity = 1;
    window.social_banner.style.opacity = 0;
});



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
                    321-313-3900
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

<script type="text/javascript">

$("#cal-btn").click(function() {
    Calendly.showPopupWidget('https://calendly.com/ledger-leap',"PopupWidget");
});

</script>

</body>
</html>
