<!DOCTYPE html>
<html>
<head>
<title>Leadger Leap - Blockchain Enterprise</title>
<meta charset="utf-8">
<meta name="google" content="notranslate">
<meta http-equiv="Content-Language" content="en-US">
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

div#content {
    /* position: relative; */
    overflow-x: hidden;
    top: 0;
    left: 0;
    color: #555;
    background-color: #fafafa;
    width: 100vw;
    /* height: 100vh; */
    box-sizing: border-box;
    margin: 0em;
    overflow: hidden;
}


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




div#content * { direction:ltr;}

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

.topleftlogo,.toplefttext {
  padding-top: 1.2em;
  margin-left: 1em;
}


.img-responsive { max-width: 300px; }


@media all and (max-width: 767px) {
  .sidearrows { display: none; }
  .downarrow { display: block; }
  .topleftlogo,.toplefttext { padding-top: 18px; margin-left: 18px; }
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
<!-- AIGC Project Modal -->
  <div class="modal fade" id="AIGamingModal" tabindex="-1" role="dialog" aria-labelledby="tributeTitle">
    <div class="modal-dialog wide" role="document">
      <div class="modal-content" style="height: auto;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title text-center c333" id="tributeTitle">Client Details</h3>
        </div><!-- /.modal-header -->
        <div class="modal-body">
          <div class="row">
            <div class="col-xs-12 bg-star-g">
              <img class="img-responsive center-block hero" src="images/projects/AIGC.png" alt="AIGC Project">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2 class="project-title">AIGC</h2>
              <h4 class="project-subtitle c333">Client</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
              <p class="c333">Ledger Leap provided tech solutions to AIGC.</p>
              <p class="mb-30 c333">
              		Businesses that have real-world problems that may be solved by AI can submit these problems on the platform, for users to solve. If you choose to participate in a crowdsourcing challenge, you’ll be rewarded in token. The crowdsourcing customer makes micropayments to each developer that helps to solve the problem.</p>
            </div>
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
              <a class="btn td-btn outline green mb-30" href="http://home.aigaming.com/" target="_blank" title="Link to aigmaing.com"><span class="glyphicon glyphicon-link"></span> Visit Live Site</a>
            </div>
          </div><!-- /.row -->
          <div class="modal-footer center">
            <button type="button" class="btn td-btn outline small c333" data-dismiss="modal">Close Project</button>
          </div><!-- /.modal-footer -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<!-- Deedcoin Project Modal -->
  <div class="modal fade" id="DeedcoinModal" tabindex="-1" role="dialog" aria-labelledby="tmsTitle">
    <div class="modal-dialog wide" role="document">
      <div class="modal-content" style="height: auto;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title text-center c333" id="tmsTitle">Client Details</h3>
        </div><!-- /.modal-header -->
        <div class="modal-body">
          <div class="row">
            <div class="col-xs-12 bg-star-g">
              <img class="img-responsive center-block hero" src="images/projects/deedcoin.png" alt="Deedcoin Hero Image">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2 class="project-title">Deedcoin</h2>
              <h4 class="project-subtitle c333">Client</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
              <p class="c333">
              	Ledger Leap provided full scope services to Deedcoin.
              </p>
              <p class="mb-30 c333">
              	Deedcoin customers use DEED to decide what to pay in commission costs when purchasing or selling a home, lowering the traditional 6% fee to 1%.
                By simplifying the transaction process and streamlining real estate to run on 1%, DEED users are able to decide their future commission costs based on the free market price of DEED.
              </p>
            </div>
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
<!--          <p class="c333"><strong>Technologies Used:</strong></p>
                <p class="mb-30">
                <span class="label tag">Bootstrap 4</span>
                <span class="label tag">Responsive Design</span>
                <span class="label tag">HTML5</span>
                <span class="label tag">CSS3</span>
                <span class="label tag">jQuery</span>
                <span class="label tag">THREE.JS</span>
              </p>
-->
              <a class="btn td-btn outline green mb-30" href="http://www.deedcoinlaunch.com/" target="_blank" title="Link to Deedcoin"><span class="glyphicon glyphicon-link"></span> Visit Live Site</a>
              <a class="btn td-btn outline green mb-30" href="http://www.deedcoin.com/" target="_blank" title="Link to Deedcoin"><span class="glyphicon glyphicon-link"></span> Visit Second Site</a>
            </div>
          </div><!-- /.row -->
          <div class="modal-footer center">
            <button type="button" class="btn td-btn outline small c333" data-dismiss="modal">Close Project</button>
          </div><!-- /.modal-footer -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<!-- AIRSTAYZ&trade; Project Modal -->
  <div class="modal fade" id="AirstayzModal" tabindex="-1" role="dialog" aria-labelledby="rbTitle">
    <div class="modal-dialog wide" role="document">
      <div class="modal-content" style="height: auto;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title text-center c333" id="rbTitle">Client Details</h3>
        </div><!-- /.modal-header -->
        <div class="modal-body">
          <div class="row">
            <div class="col-xs-12 bg-star-g">
              <img class="img-responsive center-block hero" src="images/projects/airstayz.png" alt="AIRSTAYZ&trade; Hero Image">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2 class="project-title">AIRSTAYZ&trade;</h2>
              <h4 class="project-subtitle c333">Client</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
              <p class="c333">Ledger Leap provided full scope services to AIRSTAYZ&trade;</p>
              <p class="mb-30 c333">
              	AIRSTAYZ&trade; is the next generation of booking that pays you to STAY with a blockchain currently useful for travelers and hotels
                STAY allows travelers to be automatically rewarded with a currency that has actual industry demand. STAY is given to the travelers as rewards, and they can choose to redeem the token for a multitude of offered goods and services.
              </p>
            </div>
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
              <a class="btn td-btn outline green mb-30" href="http://token.airstayz.com/" target="_blank" title="Link to token.airstayz.com"><span class="glyphicon glyphicon-link"></span> Visit Live Site</a>
            </div>
          </div><!-- /.row -->
          <div class="modal-footer center">
            <button type="button" class="btn td-btn outline small c333" data-dismiss="modal">Close Project</button>
          </div><!-- /.modal-footer -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<!--VindexPartner; Project Modal -->
  <div class="modal fade" id="VindexModal" tabindex="-1" role="dialog" aria-labelledby="rbTitle">
    <div class="modal-dialog wide" role="document">
      <div class="modal-content" style="height: auto;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title text-center c333" id="rbTitle">Partner Details</h3>
        </div><!-- /.modal-header -->
        <div class="modal-body">
          <div class="row">
            <div class="col-xs-12 bg-star-g">
              <img class="img-responsive center-block hero" src="images/projects/vindex.png" alt="Vindex&trade; Hero Image">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2 class="project-title">The Vindex Group</h2>
              <h4 class="project-subtitle c333">Partner</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
              <p class="c333">Ledger Leap is partnered with The Vindex Group.</p>
              <p class="mb-30 c333">
              	"Vindex is an agile physical and cyber security consulting company that delivers innovative solutions, services, and systems designed to mitigate risk from the convergence of physical and cyber threat. Comprehensive full spectrum capabilities in the areas of close protection, integrated security, and mission support."
              </p>
            </div>
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
              <a class="btn td-btn outline green mb-30" href="https://thevindexgroup.com/" target="_blank" title="Link to thevindexgroup.com"><span class="glyphicon glyphicon-link"></span> Visit Live Site</a>
            </div>
          </div><!-- /.row -->
          <div class="modal-footer center">
            <button type="button" class="btn td-btn outline small c333" data-dismiss="modal">Close Project</button>
          </div><!-- /.modal-footer -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<!--RubiixPartner; Project Modal -->
  <div class="modal fade" id="RubiixModal" tabindex="-1" role="dialog" aria-labelledby="rbTitle">
    <div class="modal-dialog wide" role="document">
      <div class="modal-content" style="height: auto;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title text-center c333" id="rbTitle">Client Details</h3>
        </div><!-- /.modal-header -->
        <div class="modal-body">
          <div class="row">
            <div class="col-xs-12 bg-star-g">
              <img class="img-responsive center-block hero" src="images/projects/RubiixShowcase.png" alt="Rubiix&trade; Hero Image">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2 class="project-title">Rubiix</h2>
              <h4 class="project-subtitle c333">Project</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
              <p class="c333">Ledger Leap provided full scope services to Rubiix. </p>
              <p class="mb-30 c333">
                "Rubiix is the social spending app that distributes advertising revenue among our community. Connect with brands, share about your purchases, and claim your share of ad revenue."
              </p>
            </div>
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
              <a class="btn td-btn outline green mb-30" href="http://rubiix.co/" target="_blank" title="Link to Rubiix.co website"><span class="glyphicon glyphicon-link"></span> Visit Live Site</a>
            </div>
          </div><!-- /.row -->
          <div class="modal-footer center">
            <button type="button" class="btn td-btn outline small c333" data-dismiss="modal">Close Project</button>
          </div><!-- /.modal-footer -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<!--Verma MediaPartner; Project Modal -->
  <div class="modal fade" id="VermaModal" tabindex="-1" role="dialog" aria-labelledby="rbTitle">
    <div class="modal-dialog wide" role="document">
      <div class="modal-content" style="height: auto;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title text-center c333" id="rbTitle">Partner Details</h3>
        </div><!-- /.modal-header -->
        <div class="modal-body">
          <div class="row">
            <div class="col-xs-12 bg-star-g">
              <img class="img-responsive center-block hero" src="images/projects/verma.jpg" alt="Verma Media&trade; Hero Image">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2 class="project-title">Verma Media</h2>
              <h4 class="project-subtitle c333">Partner</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
              <p class="c333">Ledger Leap is partnered with Verma Media.</p>
              <p class="mb-30 c333">
                 "We are a team of writers, creators and marketing experts from all over the globe. Tell us your story and we will tell the world."
              </p>
            </div>
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
              <a class="btn td-btn outline green mb-30" href="https://vermamedia.com/" target="_blank" title="Link to vermamedia.com"><span class="glyphicon glyphicon-link"></span> Visit Live Site</a>
            </div>
          </div><!-- /.row -->
          <div class="modal-footer center">
            <button type="button" class="btn td-btn outline small c333" data-dismiss="modal">Close Project</button>
          </div><!-- /.modal-footer -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<!--HardforkPartner; Project Modal -->
  <div class="modal fade" id="HardforkModal" tabindex="-1" role="dialog" aria-labelledby="rbTitle">
    <div class="modal-dialog wide" role="document">
      <div class="modal-content" style="height: auto;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title text-center c333" id="rbTitle">Client Details</h3>
        </div><!-- /.modal-header -->
        <div class="modal-body">
          <div class="row">
            <div class="col-xs-12 bg-star-g">
              <img class="img-responsive center-block hero" src="images/projects/hardfork.png" alt="Hardfork Marketing Hero Image">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2 class="project-title">HardFork Marketing</h2>
              <h4 class="project-subtitle c333">Client</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
              <p class="c333">Ledger Leap provided HardFork Marketing with </p>
              <p class="mb-30 c333">
                 Our mission is to help blockchain startups, companies, enterprises, and their stakeholders build communities, enhance their brand, and share their stories with the world. Our team has a growing network of connections with premier content producers and influencers, as well as relationships with experienced entrepreneurs. Our diverse portfolio of clients enables us to adapt marketing content and community management to different industry markets and companies of varying sizes. We build customized outreach strategy for each company to build exposure and generate customer engagement.
              </p>
            </div>
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
              <a class="btn td-btn outline green mb-30" href="http://hardforkmarketing.com/" target="_blank" title="Link to hardforkmarketing.com"><span class="glyphicon glyphicon-link"></span> Visit Live Site</a>
            </div>
          </div><!-- /.row -->
          <div class="modal-footer center">
            <button type="button" class="btn td-btn outline small c333" data-dismiss="modal">Close Project</button>
          </div><!-- /.modal-footer -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<!--FilmioPartner; Project Modal -->
  <div class="modal fade" id="FilmioModal" tabindex="-1" role="dialog" aria-labelledby="rbTitle">
    <div class="modal-dialog wide" role="document">
      <div class="modal-content" style="height: auto;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title text-center c333" id="rbTitle">Client Details</h3>
        </div><!-- /.modal-header -->
        <div class="modal-body">
          <div class="row">
            <div class="col-xs-12 bg-star-g">
              <img class="img-responsive center-block hero" src="images/projects/filmio.png" alt="Filmio&trade; Hero Image">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2 class="project-title">Filmio</h2>
              <h4 class="project-subtitle c333">Client</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
              <p class="c333">Ledger Leap provided advisory services to Filmio.</p>
              <p class="mb-30 c333">
                We are an inclusive, decentralized and transparent
				entertainment ecosystem designed to democratize the
				filmmaking industry. Filmio uses a blockchain-based platform and
				protocols, to facilitate global transactions between creators, fans, makers,
				advertisers, studios, networks and film investors. Within the Filmio ecosystem,
				market validation, creation, audience-building, social promotion, funding, and
				licensing are facilitated, with no intermediaries.
              </p>
            </div>
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
              <a class="btn td-btn outline green mb-30" href="https://filmio.com" target="_blank" title="Link to filmio.com"><span class="glyphicon glyphicon-link"></span> Visit Live Site</a>
            </div>
          </div><!-- /.row -->
          <div class="modal-footer center">
            <button type="button" class="btn td-btn outline small c333" data-dismiss="modal">Close Project</button>
          </div><!-- /.modal-footer -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<!--ICO Hot ListPartner; Project Modal -->
  <div class="modal fade" id="IcoHotListModal" tabindex="-1" role="dialog" aria-labelledby="rbTitle">
    <div class="modal-dialog wide" role="document">
      <div class="modal-content" style="height: auto;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title text-center c333" id="rbTitle">Partner Details</h3>
        </div><!-- /.modal-header -->
        <div class="modal-body">
          <div class="row">
            <div class="col-xs-12 bg-star-g">
              <img class="img-responsive center-block hero" src="images/projects/icohotlist.png" alt="ICO Hot List&trade; Hero Image">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2 class="project-title">ICO Hot List</h2>
              <h4 class="project-subtitle c333">Partner</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
              <p class="c333">Ledger Leap is partnered with ICO Hot List</p>
              <p class="mb-30 c333">
              	ICO Hot List is an independently curated catalog of the most primising active and upcoming Initial Coin Offerings.
                ICO Hot List reviews submitted ICO's and offers a curated catalog of the most promising ICOs.
              </p>
            </div>
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
              <a class="btn td-btn outline green mb-30" href="https://www.icohotlist.com/" target="_blank" title="Link to icohotlist.com"><span class="glyphicon glyphicon-link"></span> Visit Live Site</a>
            </div>
          </div><!-- /.row -->
          <div class="modal-footer center">
            <button type="button" class="btn td-btn outline small c333" data-dismiss="modal">Close Project</button>
          </div><!-- /.modal-footer -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<!--BWCPartner; Project Modal -->
  <div class="modal fade" id="BWCModal" tabindex="-1" role="dialog" aria-labelledby="rbTitle">
    <div class="modal-dialog wide" role="document">
      <div class="modal-content" style="height: auto;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title text-center c333" id="rbTitle">Client Details</h3>
        </div><!-- /.modal-header -->
        <div class="modal-body">
          <div class="row">
            <div class="col-xs-12 bg-star-g">
              <img class="img-responsive center-block hero" src="images/projects/bwcShowcase.png" alt="BWC&trade; Hero Image">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2 class="project-title">BWC</h2>
              <h4 class="project-subtitle c333">Client</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
              <p class="c333">Ledger Leap provided tech solutions to BWC.</p>
              <p class="mb-30 c333">
              	BWC is the largest crypto conference in North America.
                Offering three days of blockchain seminars, networking, education, and more, the conference pushes the boundaries. It boasts 50,000 sq. feet of exhibit space, 120+ exhibitors, dozens of speakers, and a live stream to more than 25,000 people. 
              </p>
            </div>
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
              <a class="btn td-btn outline green mb-30" href="https://bwcevent.com/" target="_blank" title="Link to bwcevent.com"><span class="glyphicon glyphicon-link"></span> Visit Live Site</a>
            </div>
          </div><!-- /.row -->
          <div class="modal-footer center">
            <button type="button" class="btn td-btn outline small c333" data-dismiss="modal">Close Project</button>
          </div><!-- /.modal-footer -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<!--ForestingPartner; Project Modal -->
  <div class="modal fade" id="ForestingModal" tabindex="-1" role="dialog" aria-labelledby="rbTitle">
    <div class="modal-dialog wide" role="document">
      <div class="modal-content" style="height: auto;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title text-center c333" id="rbTitle">Client Details</h3>
        </div><!-- /.modal-header -->
        <div class="modal-body">
          <div class="row">
            <div class="col-xs-12 bg-star-g">
              <img class="img-responsive center-block hero" src="images/projects/foresting.jpg" alt="Foresting&trade; Hero Image">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2 class="project-title">Foresting</h2>
              <h4 class="project-subtitle c333">Client</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
              <p class="c333">Ledger Leap provided advisory services to Foresting</p>
              <p class="mb-30 c333">
                Introducing the brand new mobile social media service based on blockchain technology. Next generation of social media based on blockchain. Foresting will provide an intuitive blockchain-based social media platform with top class UX/UI and the technology to support a wide range of content, including images and videos.
              </p>
            </div>
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
              <a class="btn td-btn outline green mb-30" href="https://foresting.io" target="_blank" title="Link to foresting.io"><span class="glyphicon glyphicon-link"></span> Visit Live Site</a>
            </div>
          </div><!-- /.row -->
          <div class="modal-footer center">
            <button type="button" class="btn td-btn outline small c333" data-dismiss="modal">Close Project</button>
          </div><!-- /.modal-footer -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<!--Top ICO ListPartner; Project Modal -->
	<div class="modal fade" id="TOPICOListModal" tabindex="-1" role="dialog" aria-labelledby="rbTitle">
	  <div class="modal-dialog wide" role="document">
	    <div class="modal-content" style="height: auto;">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h3 class="modal-title text-center c333" id="rbTitle">Partner Details</h3>
	      </div><!-- /.modal-header -->
	      <div class="modal-body">
	        <div class="row">
	          <div class="col-xs-12 bg-star-g">
	            <img class="img-responsive center-block hero" src="images/projects/topicolist.png" alt="Top ICO List&trade; Hero Image">
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-sm-12 text-center">
	            <h2 class="project-title">Top ICO List</h2>
	            <h4 class="project-subtitle c333">Partner</h4>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
	            <p class="c333">Ledger Leap is partnered with Top ICO List</p>
	            <p class="mb-30 c333">
	            	Top ICO List is an ICO directory that's curated by their internal full-time ICO analysts.
	              Top ICO List's aim is to identify the best potential ICO's for cryptocurrency investors and list them in their respective categories.
	            </p>
	          </div>
	          <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
	            <a class="btn td-btn outline green mb-30" href="https://topicolist.com/" target="_blank" title="Link to topicolist.com"><span class="glyphicon glyphicon-link"></span> Visit Live Site</a>
	          </div>
	        </div><!-- /.row -->
	        <div class="modal-footer center">
	          <button type="button" class="btn td-btn outline small c333" data-dismiss="modal">Close Project</button>
	        </div><!-- /.modal-footer -->
	      </div><!-- /.modal-body -->
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
<!--TrustrootPartner; Project Modal -->
	<div class="modal fade" id="TrustrootModal" tabindex="-1" role="dialog" aria-labelledby="rbTitle">
	  <div class="modal-dialog wide" role="document">
	    <div class="modal-content" style="height: auto;">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h3 class="modal-title text-center c333" id="rbTitle">Client Details</h3>
	      </div><!-- /.modal-header -->
	      <div class="modal-body">
	        <div class="row">
	          <div class="col-xs-12 bg-star-g">
	            <img class="img-responsive center-block hero" src="images/projects/trustroot.jpg" alt="Trustroot&trade; Hero Image">
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-sm-12 text-center">
	            <h2 class="project-title">Trustroot</h2>
	            <h4 class="project-subtitle c333">Client</h4>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
	            <p class="c333">Ledger Leap provides advisory services to Trustroot</p>
	            <p class="mb-30 c333">
	              Trustroot is a blockchain protocol that verifies the reputation and trustworthiness of the blockchain business that you are transacting with.
	              Trustroot helps you avoid malicious attacks and ensure that the party that you are sending money to is who they claim to be.
	            </p>
	          </div>
	          <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
	            <a class="btn td-btn outline green mb-30" href="https://trustroot.io/" target="_blank" title="Link to trustroot.io"><span class="glyphicon glyphicon-link"></span> Visit Live Site</a>
	          </div>
	        </div><!-- /.row -->
	        <div class="modal-footer center">
	          <button type="button" class="btn td-btn outline small c333" data-dismiss="modal">Close Project</button>
	        </div><!-- /.modal-footer -->
	      </div><!-- /.modal-body -->
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
<!--NomidmanPartner; Project Modal -->
	<div class="modal fade" id="NoMidManModal" tabindex="-1" role="dialog" aria-labelledby="rbTitle">
	  <div class="modal-dialog wide" role="document">
	    <div class="modal-content" style="height: auto;">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h3 class="modal-title text-center c333" id="rbTitle">Client Details</h3>
	      </div><!-- /.modal-header -->
	      <div class="modal-body">
	        <div class="row">
	          <div class="col-xs-12 bg-star-g">
	            <img class="img-responsive center-block hero" src="images/projects/nomidman.png" alt="Nomidman&trade; Hero Image">
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-sm-12 text-center">
	            <h2 class="project-title">Nomidman</h2>
	            <h4 class="project-subtitle c333">Client</h4>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
	            <p class="c333">Ledger Leap provided consulting services to Nomidman.</p>
	            <p class="mb-30 c333">
	            	Nomidman will be a fully decentralised P2P trading platform which connects buyers and sellers who wish to trade their assets, both digital and physical, online.
	                This project is envisioned to be built on a public blockchain ecosystem to create a secure adn transparent environment for everyone to trade their assets locally and globally, with the future opportunities to join NOMIDMAN army for spreadign and promoting a fair economy in which everyone would benefit from.
	            </p>
	          </div>
	          <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
	            <a class="btn td-btn outline green mb-30" href="https://nomidman.io/" target="_blank" title="Link to nomidman.io"><span class="glyphicon glyphicon-link"></span> Visit Live Site</a>
	          </div>
	        </div><!-- /.row -->
	        <div class="modal-footer center">
	          <button type="button" class="btn td-btn outline small c333" data-dismiss="modal">Close Project</button>
	        </div><!-- /.modal-footer -->
	      </div><!-- /.modal-body -->
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
<!--MonetizrPartner; Project Modal -->
	<div class="modal fade" id="MonitizerModal" tabindex="-1" role="dialog" aria-labelledby="rbTitle">
	  <div class="modal-dialog wide" role="document">
	    <div class="modal-content" style="height: auto;">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h3 class="modal-title text-center c333" id="rbTitle">Client Details</h3>
	      </div><!-- /.modal-header -->
	      <div class="modal-body">
	        <div class="row">
	          <div class="col-xs-12 bg-star-g">
	            <img class="img-responsive center-block hero" src="images/projects/monetizr.png" alt="Monitizer&trade; Hero Image">
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-sm-12 text-center">
	            <h2 class="project-title">Monetizr</h2>
	            <h4 class="project-subtitle c333">Client/Partner</h4>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
	            <p class="c333">Ledger Leap provided advisory services to Monitizr</p>
	            <p class="mb-30 c333">
	            	Monetizr is the go-to platform for in-game economies.
	              The Monetizr game reward engine integrates directly with games and rewards gamers with MTZ tokens for their time and skill. The Monetizr rewards increase play time and engagement, therefore increasing game developer in-app purchase and advertising revenue. Games use MTZ tokens in any participating game to purchase in-game items or physical game-related merchandise.
	            </p>
	          </div>
	          <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
	            <a class="btn td-btn outline green mb-30" href="https://www.monetizr.io/" target="_blank" title="Link to monetizr.io"><span class="glyphicon glyphicon-link"></span> Visit Live Site</a>
	          </div>
	        </div><!-- /.row -->
	        <div class="modal-footer center">
	          <button type="button" class="btn td-btn outline small c333" data-dismiss="modal">Close Project</button>
	        </div><!-- /.modal-footer -->
	      </div><!-- /.modal-body -->
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
<!--BitgoPartner; Project Modal -->
	<div class="modal fade" id="BitgoModal" tabindex="-1" role="dialog" aria-labelledby="rbTitle">
	  <div class="modal-dialog wide" role="document">
	    <div class="modal-content" style="height: auto;">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h3 class="modal-title text-center c333" id="rbTitle">Partner Details</h3>
	      </div><!-- /.modal-header -->
	      <div class="modal-body">
	        <div class="row">
	          <div class="col-xs-12 bg-star-g">
	            <img class="img-responsive center-block hero" src="images/projects/bitgo.png" alt="Bitgo&trade; Hero Image">
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-sm-12 text-center">
	            <h2 class="project-title">BitGo</h2>
	            <h4 class="project-subtitle c333">Partner</h4>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
	            <p class="c333"> Ledger Leap is partnered with BitGo.</p>
	            <p class="mb-30 c333">
	              BitGo is a blockchain software company that secures digital currency for institutional investors. Its technology solves the most difficult security, compliance and custodial problems associated with blockchain-based currencies, enabling the integration of digital currency into the global financial system. BitGo's customers, which include the world's largest cryptocurrency exchanges and financial institutions, conduct more than $10 billion in transactions monthly.
	            </p>
	          </div>
	          <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
	            <a class="btn td-btn outline green mb-30" href="https://www.bitgo.com/info/" target="_blank" title="Link to bitgo.com"><span class="glyphicon glyphicon-link"></span> Visit Live Site</a>
	          </div>
	        </div><!-- /.row -->
	        <div class="modal-footer center">
	          <button type="button" class="btn td-btn outline small c333" data-dismiss="modal">Close Project</button>
	        </div><!-- /.modal-footer -->
	      </div><!-- /.modal-body -->
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->


<!-- <div class="backbutton" style="z-index: 13;">Go Back</div> -->
<div id="content">
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
	<!-- <div class="buffer"></div> -->
	<div id="three_canvas"></div>
</div>

<script src="js/three.js"></script>
<script src="js/dat.gui.min.js"></script>
<script src="js/stats.min.js"></script>
<script src="js/Detector.js"></script>
<script src="js/draco/DRACOLoader.js"></script>
<script src="js/GLTFLoader.js"></script>
<script src="js/OrbitControls.js" type="text/javascript"></script>
<script src="js/wow.js"></script>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/CopyShader.js"></script>
<script src="js/FXAAShader.js"></script>
<script src="js/EffectComposer.js"></script>
<script src="js/RenderPass.js"></script>
<script src="js/ShaderPass.js"></script>
<script src="js/OutlinePass.js"></script>

<script>

new WOW().init();

var DEBUG = false;
var POSTPROCESSING = true;
var UNLOCKCAMERA = false;

if ( ! Detector.webgl ) Detector.addGetWebGLMessage();
var camera, scene, stats, renderer, controls, fogColor, cubemap, hdcubemap, intersects, raycaster;
var orange_light, lastCubeMovedOver, composer, effectFXAA, outlinePass;
var angle = 0;
var mouse = new THREE.Vector2();
var objects = [];
var meshPieces = [];
var params = {
  edgeStrength: 10.0,
  edgeGlow: 1.0,
  edgeThickness: 4.0,
  pulsePeriod: 3,
  rotate: false,
  usePatternTexture: true,
  //visibleEdgeColor: new THREE.Color(  0xE77F3C ),
  visibleEdgeColor: "#E77f3c",
  //hiddenEdgeColor: new THREE.Color(  0xff3f00 ),
  hiddenEdgeColor: "ff3f00" 
};


// Init gui
if (DEBUG == true){

  var gui = new dat.GUI( { width: 300 } );
  gui.add( params, 'edgeStrength', 0.01, 10).onChange( 
    function ( value) { outlinePass.edgeStrength = Number( value ); });
  gui.add( params, 'edgeGlow', 0.0, 1 ).onChange( 
      function ( value ) { outlinePass.edgeGlow = Number( value ); });
  gui.add( params, 'edgeThickness', 1, 4 ).onChange( 
      function ( value ) { outlinePass.edgeThickness = Number( value ); });
  gui.add( params, 'pulsePeriod', 0.0, 5 ).onChange( 
      function ( value ) { outlinePass.pulsePeriod = Number( value ); });
  gui.add( params, 'rotate' );
  gui.add( params, 'usePatternTexture' ).onChange( 
      function ( value ) { outlinePass.usePatternTexture = value; });
  var Configuration = function () {
    this.visibleEdgeColor = '#ffffff';
    this.hiddenEdgeColor = '#190a05';
  };
  var conf = new Configuration();
  var controllerVisible = gui.addColor( conf, 'visibleEdgeColor' ).onChange( 
      function ( value ) { outlinePass.visibleEdgeColor.set( value ); });
  var controllerHidden = gui.addColor( conf, 'hiddenEdgeColor' ).onChange( 
      function ( value ) { outlinePass.hiddenEdgeColor.set( value ); });
}
 
init();
animate();

function init() {
	renderer = new THREE.WebGLRenderer( { antialias: true });
	renderer.setPixelRatio( window.devicePixelRatio);
	renderer.setSize( window.innerWidth, window.innerHeight);
	document.getElementById("three_canvas").appendChild( renderer.domElement );
    raycaster = new THREE.Raycaster();
	scene = new THREE.Scene();
	fogColor = new THREE.Color(0xfafafa);
	scene.background = fogColor;
	//scene.fog = new THREE.Fog(fogColor, 0.0025, 400);

	camera = new THREE.PerspectiveCamera( 45, window.innerWidth / window.innerHeight, 1, 20000 );
	controls = new THREE.OrbitControls( camera, renderer.domElement );
    if (UNLOCKCAMERA == false){
        controls.minAzimuthAngle = Math.PI/-8;
        controls.maxAzimuthAngle = Math.PI/8;
        controls.maxPolarAngle = Math.PI/2.5;
        controls.minPolarAngle = Math.PI/3;
        controls.minDistance = 110;
        controls.maxDistance = 160;
        controls.rotateSpeed = 0.05;
    }
        //puting this in the switch breaks tablet view. Not sure why. moving on... 
	camera.position.set(0, 40, 100);
    switch (true){
        case renderer.domElement.clientWidth > 768: 
            break;
        //tablet view
        case renderer.domElement.clientWidth <= 768 && renderer.domElement.clientWidth > 425:
            camera.position.x = -17;
            break;
        //mobile view
        case renderer.domElement.clientWidth <= 425: 
            camera.position.set(-18.86, 57.28, 141.95);
            camera.rotation.set(-0.38, -0.12, -0.05);
            break;
    }

	//camera.up = new THREE.Vector3(0,0,0);
	//camera.lookAt(-10,10,0);
	camera.name = "camera"
    controls.update();
    //var helper = new THREE.CameraHelper( camera );
    //scene.add( helper );
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

	var hdurls = [
		'images/neg-x.png',
		'images/neg-y.png',
		'images/neg-z.png',
		'images/pos-x.png',
		'images/pos-y.png',
		'images/pos-z.png'
	];

	var urls = [
		'images/metal.jpg',
		'images/metal.jpg',
		'images/metal.jpg',
		'images/metal.jpg',
		'images/metal.jpg',
		'images/metal.jpg'
	];
	// wrap it up into the object that we need
	cubemap = THREE.ImageUtils.loadTextureCube(urls);
	hdcubemap = THREE.ImageUtils.loadTextureCube(hdurls);

	// set the format, likely RGB unless you've gone crazy
	cubemap.format = THREE.RGBFormat;
	var custom_model_material = new THREE.MeshStandardMaterial({
		metalness: 1,
		roughness: 0.3,
		color: 0xffcb63,
		envMap: cubemap,
        side: THREE.DoubleSide,
	});

	var model_geo = new THREE.GLTFLoader();
	THREE.DRACOLoader.setDecoderPath('/js/draco/');
	model_geo.setDRACOLoader(new THREE.DRACOLoader());
	model_geo.load('objects/trophy.glb', function(gltf) {
		for(var i =0; i < gltf.scene.children[0].children.length; i++) {
			gltf.scene.children[0].children[i].material = custom_model_material;
		}
        gltf.scene.position.set( 20, 8.84, 43);
		//gltf.scene.rotation.set( 0, -16.34, 0.12);
		gltf.scene.scale.set(100,100,100);
		gltf.scene.name = "Trophy";
		scene.add(gltf.scene);
	}, function(xhr) {
		console.log("Loading model: " + (xhr.loaded / xhr.total * 100) + "%");
	}, function(err) {
		console.log('Error: ' + err);
	});


    switch (true){
    case renderer.domElement.clientWidth > 768: 
        var allblocks = new THREE.GLTFLoader();
        allblocks.setDRACOLoader(new THREE.DRACOLoader());
        allblocks.load('objects/desktop.glb', function(gltf) {
            scene.add(gltf.scene);
            gltf.scene.position.set(-0.64, -0.34, 52.74);
            gltf.scene.rotation.set( 0, -0.90, 0);
            gltf.scene.scale.set(200, 200, 200);
            gltf.scene.name = "all cubes";
            //add all meshes to MeshPieces array so intersectedObjects will work later
            var cubesAndTextAndLogos = scene.children[5].children[0].children[6].children;
            //change metalness of all cubes by changing one property on the shader
            scene.children[5].getObjectByName("icohotlistpCube1").material.metalness = 0.7
            for(var i =0; i < cubesAndTextAndLogos.length; i++){
                objects.push(cubesAndTextAndLogos[i]);
            }

            for(var i =0; i < objects.length; i++){
                for(var j=0; j < objects[i].children.length; j++){
                    objects[i].children[j].material.envMap = cubemap;
                    meshPieces.push(objects[i].children[j]);
                }
            }
        }, function(xhr) {
            console.log("Loading model: " + (xhr.loaded / xhr.total * 100) + "%");
        }, function(err) {
            console.log('Error: ' + err);
        });

        break;
        //tablet view
    case renderer.domElement.clientWidth <= 768 && renderer.domElement.clientWidth > 425:
        camera.position.x = -17;
        var allblocks = new THREE.GLTFLoader();
        allblocks.setDRACOLoader(new THREE.DRACOLoader());
        allblocks.load('objects/desktop.glb', function(gltf) {
            scene.add(gltf.scene);
            gltf.scene.position.set(-0.64, -0.34, 52.74);
            gltf.scene.rotation.set( 0, -0.90, 0);
            gltf.scene.scale.set(200, 200, 200);
            gltf.scene.name = "all cubes";

            //change metalness of all cubes by changing one property on the shader
            scene.children[5].getObjectByName("icohotlistpCube1").material.metalness = 0.7
            //add all meshes to MeshPieces array so intersectedObjects will work later
            var cubesAndTextAndLogos = scene.children[5].children[0].children[6].children;
            for(var i =0; i < cubesAndTextAndLogos.length; i++){
                objects.push(cubesAndTextAndLogos[i]);
            }

            for(var i =0; i < objects.length; i++){
                for(var j=0; j < objects[i].children.length; j++){
                    objects[i].children[j].material.envMap = cubemap;
                    meshPieces.push(objects[i].children[j]);
                }
            }
        }, function(xhr) {
            console.log("Loading model: " + (xhr.loaded / xhr.total * 100) + "%");
        }, function(err) {
            console.log('Error: ' + err);
        });
        break;
    //mobile view
    case renderer.domElement.clientWidth <= 425: 
        camera.position.set(-18.86, 57.28, 141.95);
        camera.rotation.set(-0.38, -0.12, -0.05);
        var allblocks = new THREE.GLTFLoader();
        allblocks.setDRACOLoader(new THREE.DRACOLoader());
        allblocks.load('objects/mobile02.glb', function(gltf) {
            scene.add(gltf.scene);
            gltf.scene.position.set(-5.3, -0.34, 52.74);
            gltf.scene.rotation.set( 0, -0.90, 0);
            gltf.scene.scale.set(200, 200, 200);
            //change metalness of all cubes by changing one property on the shader
            scene.children[5].getObjectByName("icohotlistpCube1").material.metalness = 0.7
            //reposition Trophy
            scene.children[4].position.set(4.96, 39.64, 56.24);
            gltf.scene.name = "all cubes";
            //add all meshes to MeshPieces array so intersectedObjects will work later
            var cubesAndTextAndLogos = scene.children[5].children[0].children[0].children;
            for(var i =0; i < cubesAndTextAndLogos.length; i++){
                objects.push(cubesAndTextAndLogos[i]);
            }

            for(var i =0; i < objects.length; i++){
                for(var j=0; j < objects[i].children.length; j++){
                    objects[i].children[j].material.envMap = cubemap;
                    meshPieces.push(objects[i].children[j]);
                }
            }
            //position Trophy
            scene.children[3].position.set(5.0, 39.58, 55.0);
            scene.children[3].rotation.y = 0.14;
        }, function(xhr) {
            console.log("Loading model: " + (xhr.loaded / xhr.total * 100) + "%");
        }, function(err) {
            console.log('Error: ' + err);
        });
        break;
    }

  if(DEBUG == true){
    stats = new Stats();
    //container.appendChild( stats.dom);
	document.getElementById("three_canvas").appendChild( stats.dom );
  }
  // postprocessing
  if(POSTPROCESSING == true) {
    composer = new THREE.EffectComposer( renderer);

    var renderPass = new THREE.RenderPass( scene, camera);
    composer.addPass( renderPass);

    outlinePass = new THREE.OutlinePass( 
        new THREE.Vector2( window.innerWidth, window.innerHeight), scene, camera);

    composer.addPass( outlinePass);

    var onLoad = function ( texture) {
        outlinePass.edgeStrength = 10.0;
        outlinePass.edgeGlow = 1.0;
        outlinePass.edgeThickness = 4.0;
        outlinePass.pulsePeriod = params.pulsePeriod;
        outlinePass.rotate = false;
        outlinePass.usePatternTexture = true;
        outlinePass.visibleEdgeColor = new THREE.Color( 0xE77f3c );
        outlinePass.hiddenEdgeColor = new THREE.Color( 0xff3f00 );
        outlinePass.patternTexture = texture;
        texture.wrapS = THREE.RepeatWrapping;
        texture.wrapT = THREE.RepeatWrapping;
    };

    var loader = new THREE.TextureLoader();

    loader.load( 'images/tri_pattern.jpg', onLoad);

    effectFXAA = new THREE.ShaderPass( THREE.FXAAShader);
    effectFXAA.uniforms[ 'resolution' ].value.set( 1 / window.innerWidth, 1 / window.innerHeight);
    effectFXAA.renderToScreen = true; 
    composer.addPass( effectFXAA);
  }

  orange_light = new THREE.DirectionalLight(0xff6c00, 0.5 );
  orange_light.name = "orange light";
  scene.add(orange_light);
  orange_light.position.set(-16, -11, 7);
  orange_light.scale.set(200, 200, 200);


  renderer.domElement.addEventListener( 'mousedown', onTouchStart);
  renderer.domElement.addEventListener( 'touchstart', onTouchStart);
  renderer.domElement.addEventListener( 'mousemove', onTouchMove);
  renderer.domElement.addEventListener( 'touchmove', onTouchMove);
  renderer.domElement.addEventListener('mouseup', onDocumentMouseUp, false);
  renderer.domElement.addEventListener('touchend', onDocumentMouseUp, false);
  window.addEventListener( 'resize', onWindowResize, false);
}//end init()

function getRandomInt(max) {
	return Math.floor(Math.random() * Math.floor(max));
}

function getRandomIntInRange( min, max ) {
	return Math.random() * ( max - min ) + min;
}

function onTouchStart( event){
    event.preventDefault();
    var x, y;
    if ( event.changedTouches) {
      x = event.changedTouches[ 0 ].pageX;
      y = event.changedTouches[ 0 ].pageY;
    } else {
      x = event.clientX; 
      y = event.clientY;
    }
    mouse.x = ( x / window.innerWidth) * 2 - 1;
    raycaster.setFromCamera( mouse, camera );
    intersects = raycaster.intersectObjects( meshPieces );
    lastCubeMovedOver = intersects[0].object.parent.name; 
}


function onTouchMove( event) {
    var x, y;
    if ( event.changedTouches) {
      x = event.changedTouches[ 0 ].pageX;
      y = event.changedTouches[ 0 ].pageY;
    } else {
      x = event.clientX; 
      y = event.clientY;
    }
    mouse.x = ( x / window.innerWidth) * 2 - 1;
    mouse.y = - ( y / window.innerHeight) * 2 + 1;
    checkIntersection();
  }

function addSelectedObject( object) {
    selectedObjects = [];
    selectedObjects.push( object);
}

  function checkIntersection() {
    raycaster.setFromCamera( mouse, camera);
    var intersects = raycaster.intersectObjects( meshPieces );
    if ( intersects.length > 0) {
      var selectedObject = intersects[ 0 ].object.parent;
      addSelectedObject( selectedObject);
      if(POSTPROCESSING == true) {
        outlinePass.selectedObjects = selectedObjects;
        //console.log( selectedObjects[0].name )
      }

    } else {
      // outlinePass.selectedObjects = [];
    }

  }

function onDocumentMouseUp(event){
    event.preventDefault();
    var x, y;
    if ( event.changedTouches) {
      x = event.changedTouches[ 0 ].clientX;
      y = event.changedTouches[ 0 ].clientY;
    } else {
      x = event.clientX; 
      y = event.clientY;
    }
    mouse.x = ( x / window.innerWidth) * 2 - 1;
    mouse.y = - ( y / window.innerHeight) * 2 + 1;
    raycaster.setFromCamera( mouse, camera );
    intersects = raycaster.intersectObjects( meshPieces );

    selectedCubeGroup = intersects[0].object.parent.name;
    if(selectedCubeGroup != lastCubeMovedOver) {
        intersects.length = 0;
    }    
    outlinePass.selectedObjects = intersects[0].object.parent.children;
    if(intersects.length > 0){

        switch(selectedCubeGroup ){
            case "AIGaming": 
                $('#AIGamingModal').modal('toggle');
                break;
            case "Rubix":
                $('#RubiixModal').modal('toggle');
                break;
            case "Vindex":
                 $('#VindexModal').modal('toggle');
                break;
            case "Airstayz1":
                $('#AirstayzModal').modal('toggle');
                break;
            case "Hardfork":
                $('#HardforkModal').modal('toggle');
                break;
            case "Filmio":
                $('#FilmioModal').modal('toggle');
                break;
            case "IcoHotList":
                $('#IcoHotListModal').modal('toggle');
                break;
            case "BWC1":
                $('#BWCModal').modal('toggle');
                break;
            case "Foresting":
                $('#ForestingModal').modal('toggle');
                break;
            case "AIGaming":
                $('#AIGamingModal').modal('toggle');
                break;
            case "TOPICOList":
                $('#TOPICOListModal').modal('toggle');
                break;
            case "Trustroot":
                  $('#TrustrootModal').modal('toggle');
                break;
            case "BitGo":
                $('#BitgoModal').modal('toggle');
                break;
            case "Deedcoin":
                $('#DeedcoinModal').modal('toggle');
                break;
            case "Monitizer":
                $('#MonitizerModal').modal('toggle');
                break;
            case "NoMidMan":
	            $('#NoMidManModal').modal('toggle');
                break;
            case "Verma":
	            $('#VermaModal').modal('toggle');
                break;
        } 
    }
}

function onWindowResize() {
	camera.aspect = window.innerWidth / window.innerHeight;
	camera.updateProjectionMatrix();
    renderer.setSize( window.innerWidth, window.innerHeight );
    renderer.setSize( width, height );
    composer.setSize( width, height );
    effectFXAA.uniforms[ 'resolution' ].value.set( 1 / window.innerWidth, 1 / window.innerHeight );
}
function animate() {
    requestAnimationFrame( animate );
    if(DEBUG == true) stats.begin()
        var timer = performance.now();

    if ( params.rotate ) {
        group.rotation.y = timer * 0.0001;
    }
    controls.update();

    //use the post processing renderer now instead of normal renderer.render(scene, camera)
    if( POSTPROCESSING == true ) {
        angle -= 0.03;
        orange_light.position.x = 10+10*Math.sin(angle);
        orange_light.position.y = 10+10*Math.cos(angle);
        composer.render(); 
    }

    if(DEBUG == true) stats.end();
    controls.update();
    //render();
}
function render() {
    var timer = Date.now() * 0.000001;

    //camera.position.x = Math.cos( timer ) * 800;
    //camera.position.z = Math.sin( timer ) * 800;
    //camera.lookAt( scene.position );
    /*
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
     */
    renderer.render( scene, camera );
}
</script>


<script type="text/javascript">

setTimeout(function() {
    $(".toplefttext").addClass('compressed');
    setTimeout(function() {
        $("#jtext").html("Clients &amp; Partners");
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
