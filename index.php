<!DOCTYPE html>
<html>
<head>
  <title>Leadger Leap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0,
  maximum-scale=1.0">
  <link href="style.css?v=2" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


  <style type="text/css">
  <?php
    for ($i=5; $i <= 200; $i+=5) { 
    echo '.pt'.(string)$i.'{padding-top:'.(string)$i.'px;}';
    echo '.pb'.(string)$i.'{padding-bottom:'.(string)$i.'px;}';
    echo '.p'.(string)$i.'{padding:'.(string)$i.'px;}';
  }
  ?>
  </style>

</head>
<body>
  <div id="pageWrap"> <!-- Page Wrap Begin !-->
    <div class="innerPage"> <!-- Inner Page Begin !-->
      <div class="page" id="page0">
        <div class="innerPage">
          <h2>Company</h2>
          <a class="goback" onclick="goBack()">Go Back</a>
          <div class="container-fluid">
            <div class="row pt50">
              <div class="col-md-6">
                <h1>TITLE KJAJHAJSDAS</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <div class="col-md-6 centered" style="background-color: orange; height: 100vh;">
                kjh laskjhlk ajs hlakjs hlkj
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page" id="page1">
        <div class="innerPage">
          <h2>Platform</h2>
          <a class="goback" onclick="goBack()">Go Back</a>
        </div>
      </div>
      <div class="page" id="page2">
        <div class="innerPage"> 
          <h2>Services</h2>
          <a class="goback" onclick="goBack()">Go Back</a>
        </div>
      </div>
      <div class="page" id="page3">
        <div class="innerPage">
          <h2>Clients</h2>
          <a class="goback" onclick="goBack()">Go Back</a>
        </div>
      </div>
      <div class="page" id="page4">
        <div class="innerPage">
          <h2>Ledger Leap</h2>
          <a class="goback" onclick="goBack()">Go Back</a>
        </div>
      </div>
      <div class="page" id="page5">
        <div class="innerPage">
          <h2>Post ICO Service</h2>
          <a class="goback" onclick="goBack()">Go Back</a>
        </div>
      </div>
    </div> <!-- Inner Page End !-->
  </div> <!-- Page Wrap End !-->

  <div id='container'>
    <div id="boxes"></div>
  </div> <!-- Container End !-->

  <script type="text/javascript" src="js/three.js"></script>
  <script src="js/OrbitControls.js"></script>
  <script type="text/javascript" src="js/Detector.js"></script>
  <script type="text/javascript" src="js/dat.gui.min.js"></script>
  <script id="template" type="notjs">
    <div class="scene"></div>
    <div class="description">$</div>
  </script>
<script type="text/javascript">
if ( ! Detector.webgl ) Detector.addGetWebGLMessage();
var container, canvas, camera, raycaster, controlsOrbit;
var renderer, scene;
var mouse = new THREE.Vector2();

var octa, octa_material, octa_geometry;
var objects = [];
var pages = [];
var labels = [];
var pageWrap = null;

var logo = null;
var logoLabel = null;

var speed = [0.01, 0.01, 0.01, 0.01, 0.01];
var selectedPageGeometry;

/*
window.onload = function() {
    var gui = new dat.GUI();
    //gui.add(guiParams, 'Ledger Leap');
    gui.addColor(text, 'color_0');
};

var guiParams = function() {
    this.colors:  '0xFFFFFF',
    SIZEX: 0,
    SIZEY: 0,
    SIZEZ: 0,
    POSITIONX: 0,
    POSITIONY: 0,
    POSITIONZ: 0,
    cameraCOLOR: '0xFFFFFF',
    cameraX: 0,
    cameraY: 0,
    cameraZ: 0,
    cameraLOOKAT: (0,0,0),
    pointLightCOLOR: '0xFFFFFF',
    pointLightX: 0,
    pointLightY: 0,
    pointLightZ: 0,
    pointLightLOOKAT: (0,0,0),
};
 */

init();
animate();

function rotateObjects(){
  for(var i in objects)
    objects[i].rotation.y += speed[i];
}

function init(){
  container = document.getElementById( 'boxes' );
  scene = new THREE.Scene();
  scene.background = new THREE.Color( 0x111111);

  renderer = new THREE.WebGLRenderer({antialias: true, alpha: true});
  renderer.setPixelRatio( window.devicePixelRatio );
  renderer.setSize( window.innerWidth, window.innerHeight );
  
  container.appendChild( renderer.domElement );
  
  //renderer.gammaInput = true;
  //renderer.gammaOutput = true;
  var ambientLight = new THREE.AmbientLight( 0xcccccc, 0.8);
  scene.add(ambientLight);
  var pointLight = new THREE.PointLight( 0xffffff, 1.3);
  pointLight.name = "pointLight";
  pointLight.position.y = 100;
  pointLight.lookAt( new THREE.Vector3(0,0,0));
  scene.add(pointLight);


  camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.01, 1000);
  camera.position.set(0, 0, 8);
  //camera.add(pointLight);
  scene.add(camera);
  
  controlsOrbit = new THREE.OrbitControls( camera, renderer.domElement );
  controlsOrbit.minDistance = 5;
  controlsOrbit.maxDistance = 12;
  controlsOrbit.minPolarAngle = Math.PI / 2;
  controlsOrbit.maxPolarAngle = Math.PI / 2;
  controlsOrbit.enableKeys = false;
  controlsOrbit.enablePan = false;
  controlsOrbit.enableRotate = true;

  raycaster = new THREE.Raycaster();

  /* Logo */
  var spriteMap = new THREE.TextureLoader().load("images/logo.png");
  var spriteMaterial = new THREE.SpriteMaterial({map: spriteMap, color: 0xcccccc});
  logo = new THREE.Sprite(spriteMaterial);
  scene.add(logo);

  spriteMap = new THREE.TextureLoader().load("images/logoLabel1.png");
  spriteMaterial = new THREE.SpriteMaterial({map: spriteMap, color: 0xcccccc});
  logoLabel = new THREE.Sprite(spriteMaterial);
  scene.add(logoLabel);

  var index = -1;

  pageWrap = document.getElementById('pageWrap');
  for(var i = 0; i < 6; i++){
    pages.push(document.getElementById('page'+i));

    if(index == -1)
      index = Math.floor(Math.random() * 5);
    else
      index = (index + 1) % 5;

    var geometry;
    //var material = new THREE.MeshBasicMaterial({color: 0xcccccc, wireframe: true, side: THREE.DoubleSide});
    var material = new THREE.MeshStandardMaterial({ metalness: 1, roughness: 0.7, color: 0xffffff });

    switch(index){
      case 0: // Box
        geometry = new THREE.BoxGeometry(1, 1, 1);
      break;
      case 1: // Sphere
        geometry = new THREE.SphereGeometry(0.5, 12, 8);
      break;
      case 2:
        geometry = new THREE.TetrahedronGeometry(0.5, 1);
      break;
      case 3:
        geometry = new THREE.IcosahedronGeometry(0.5, 0);
      break;
      case 4:
        geometry = new THREE.OctahedronGeometry(0.5, 0);
      break;
    }

    var labelMap = new THREE.TextureLoader().load("images/label"+i+".png");
    var labelMat = new THREE.SpriteMaterial({map: labelMap, color: 0xcccccc});
    var labelObject = new THREE.Sprite(labelMat);

    var object = new THREE.Mesh(geometry, material);
    object.name = i;

    scene.add(labelObject);
    scene.add(object);

    objects.push(object);
    labels.push(labelObject);
  }

  setPosition();
  renderer.domElement.addEventListener('mousemove', onDocumentMouseMove, false);
  renderer.domElement.addEventListener('mousedown', onDocumentMouseDown, false);
  renderer.domElement.addEventListener('mouseup', onDocumentMouseUp, false);

  renderer.domElement.addEventListener('touchstart', onTouchStart, false);
  renderer.domElement.addEventListener('touchend', onDocumentMouseUp, false);

  window.addEventListener( 'resize', onWindowResize, false );

  octa_material = new THREE.MeshStandardMaterial( { 
    wireframe: false, 
    metalness: 1, 
    roughness: 0.6, 
    color: 0xffffff,
    transparent: true,
    opacity: 0.7
  });

  var i;
  for (i=0; i <= 10; i++){
    octa_geometry = new THREE.OctahedronGeometry( 120, 0);
    octa = new THREE.Mesh(octa_geometry, octa_material);
    octa.position.set( getRandomIntInRange(-500, 500), getRandomIntInRange(-200, 200), getRandomIntInRange( 50, -1000) );
    octa.name = "octa" + i.toString() ;
    scene.add(octa);
  }

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

  if(width >= 1000)
    loadDesktopPosition();
  else if(width >= 600)
    loadTabletPosition();
  else
    loadMobilePosition();
}

function loadDesktopPosition(){
  logo.scale.set(2, 2, 1);
  logoLabel.scale.set(6.3, 0.4, 1);

  logo.position.set(0, 1.7, 0);
  logoLabel.position.set(0, 0, 0);

  var objectPositions = [
    {x: -4, y: -1.5, z: 0},
    {x: -2, y: -1.5, z: 0},
    {x: 0, y: -1.5, z: 0},
    {x: 2, y: -1.5, z: 0},
    {x: 4, y: -1.5, z: 0}
    // {x: 5, y: -1.5, z: 0}
  ];

  var labelPositions = [
    {x: -4, y: -2.3, z: 0},
    {x: -2, y: -2.3, z: 0},
    {x: 0, y: -2.3, z: 0},
    {x: 2, y: -2.3, z: 0},
    {x: 4, y: -2.3, z: 0}
    // {x: 5, y: -2.3, z: 0}
  ];

  for(var i = 0; i < 5; i++){
    objects[i].position.set(objectPositions[i].x, objectPositions[i].y, objectPositions[i].z);
    labels[i].position.set(labelPositions[i].x, labelPositions[i].y, labelPositions[i].z);

    if(i == 4)
      labels[i].scale.set(1.4, 0.15, 1);
    else if(i == 5)
      labels[i].scale.set(1.575, 0.15, 1);
    else
      labels[i].scale.set(0.95, 0.2, 1);
    
    objects[i].scale.set(1, 1, 1);
  }
}

function loadTabletPosition(){
  logo.scale.set(1, 1, 1);
  logoLabel.scale.set(3.15, 0.2, 1);

  logo.position.set(0, 2.5, 0);
  logoLabel.position.set(0, 1.5, 0);

  var objectPositions = [
    {x: -2, y: 0.2, z: 0},
    {x: 0, y: 0.2, z: 0},
    {x: 2, y: 0.2, z: 0},
    {x: -1, y: -1.5, z: 0},
    {x: 1, y: -1.5, z: 0}
    // {x: 2, y: -1.5, z: 0}
  ];

  var labelPositions = [
    {x: -2, y: -0.4, z: 0},
    {x: 0, y: -0.4, z: 0},
    {x: 2, y: -0.4, z: 0},
    {x: -1, y: -2.2, z: 0},
    {x: 1, y: -2.2, z: 0}
    // {x: 2, y: -2.2, z: 0}
  ];

  for(var i = 0; i < 5; i++){
    objects[i].position.set(objectPositions[i].x, objectPositions[i].y, objectPositions[i].z);
    labels[i].position.set(labelPositions[i].x, labelPositions[i].y, labelPositions[i].z);

    if(i == 4)
      labels[i].scale.set(1.4, 0.13, 1);
    else if(i == 5)
      labels[i].scale.set(1.26, 0.12, 1);
    else
      labels[i].scale.set(0.8, 0.16, 1);

    objects[i].scale.set(0.8, 0.8, 0.8);
  }
}

function loadMobilePosition(){
  logo.scale.set(0.8, 0.8, 0.8);
  logoLabel.scale.set(2.3625, 0.15, 1);

  logo.position.set(0, 2.6, 0);
  logoLabel.position.set(0, 1.8, 0);

  var objectPositions = [
    {x: -0.8, y: 1, z: 0},
    {x: 0.8, y: 1, z: 0},
    {x: -0.8, y: -0.5, z: 0},
    {x: 0.8, y: -0.5, z: 0},
    {x: 0, y: -2, z: 0}
    // {x: 0.8, y: -2, z: 0}
  ];

  var labelPositions = [
    {x: -0.8, y: 0.45, z: 0},
    {x: 0.8, y: 0.45, z: 0},
    {x: -0.8, y: -1.05, z: 0},
    {x: 0.8, y: -1.05, z: 0},
    {x: 0, y: -2.6, z: 0}
    // {x: 0.8, y: -2.6, z: 0}
  ];

  for(var i = 0; i < 5; i++){
    objects[i].position.set(objectPositions[i].x, objectPositions[i].y, objectPositions[i].z);
    labels[i].position.set(labelPositions[i].x, labelPositions[i].y, labelPositions[i].z);

    if(i == 4)
      labels[i].scale.set(1.2, 0.12, 1);
    else if(i == 5)
      labels[i].scale.set(1.26, 0.12, 1);
    else
      labels[i].scale.set(0.8, 0.16, 1);

    objects[i].scale.set(0.7, 0.7, 0.7);
  }
}

var selectedPage = -1;

function onDocumentMouseUp(event){
  event.preventDefault();

  for(var i in pages){
    if(i == selectedPage) {
      pages[i].style.display = 'block';
    } else {
      pages[i].style.display = 'none';
    }
  }

  if(selectedPage != -1)
    pageWrap.style.left = '0';
    makeNextScene();
}

function onTouchStart(event){
  event.preventDefault();

  mouse.x = (event.touches[0].clientX / window.innerWidth ) * 2 - 1;
  mouse.y = -(event.touches[0].clientY / window.innerHeight ) * 2 + 1;
  
  raycaster.setFromCamera( mouse, camera );

  var intersects = raycaster.intersectObjects(objects);
  
  if(intersects.length > 0){
    selectedPage = intersects[0].object.name;
  }
}

function onDocumentMouseDown(event){
  event.preventDefault();

  mouse.x = (event.clientX / renderer.domElement.clientWidth) * 2 - 1;
  mouse.y = -(event.clientY / renderer.domElement.clientHeight) * 2 + 1

  raycaster.setFromCamera( mouse, camera );

  var intersects = raycaster.intersectObjects(objects);
  
  if(intersects.length > 0){
    selectedPage = intersects[0].object.name;
    selectedPageGeometry = intersects[0].object.geometry.type;
    console.log("selectedPageGeometry:", selectedPageGeometry);

  }
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
      } else
        speed[i] = 0.05;
        document.getElementById('boxes').style.cursor = 'pointer';
    }
  }else{
    speed = [0.01, 0.01, 0.01, 0.01, 0.01];
  }
}

function goBack(){
  pageWrap.style.left = '100%';

  selectedPage = -1;
  //destroy all elements and dereference them
  doDispose(scene2);
}

function animate(){
  requestAnimationFrame(animate);
  controlsOrbit.update();
  rotateObjects();
  render();
}

function render(){

  if (scene.children[16].name === "octa0"){
    var j;
    for (j=16; j <= 26; j++){
      scene.children[j].position.y += Math.random() * 0.01;
      scene.children[j].rotation.y += Math.random() * 0.01;
    }
  
  }
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


renderer2 = new THREE.WebGLRenderer( { antialias: true });
renderer2.setPixelRatio( window.devicePixelRatio);
renderer2.setSize( window.innerWidth, window.innerHeight);

function makeNextScene() {


  var page0 = document.getElementById("page0");
  var page1 = document.getElementById("page1");
  var page2 = document.getElementById("page2");
  var page3 = document.getElementById("page3");
  var page4 = document.getElementById("page4");


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

function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
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

</script>
  </body>
</html>