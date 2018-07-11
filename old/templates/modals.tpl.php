<?php
$antibot = bin2hex(random_bytes(16));
?>

<div class="sidemenu" style="transform: scale(.01, 1);">
	<div class="sidebar_row">&emsp;</div>
	<div class="sidebar_row">&emsp;<a href="/" class="newnav">Home</a></div>
	<div class="sidebar_row">&emsp;<a class="nav_overview newnav">Overview</a></div>
	<div class="sidebar_row">&emsp;<a class="nav_consulting newnav">Consulting</a></div>
	<div class="sidebar_row">&emsp;<a class="nav_platform newnav">Platform</a></div>
	<div class="sidebar_row">&emsp;<a class="nav_projects newnav">Projects</a></div>
	<div class="sidebar_row">&emsp;<a class="nav_team newnav">Team</a></div>
	<!-- <div class="sidebar_row">&emsp;<a class="nav_contact newnav">Contact</a></div> -->
	<div class="nav_contact calltoaction_m">Request Consultation</div>
</div>

<div class="contact"> 
	<div id="closecontact">&times;</div>
	<h1 class="centered pb20">Speak With Us</h1>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<form action="/" method="post" name="quickcontact" class="contactinput">
					<input type="hidden" name="antibot" value="<?php echo $antibot; ?>">
					<input type="text" name="name" placeholder="Your Name..." required><br>
					<input type="email" name="email" placeholder="Your Email..." required><br>
					<select name="subject" required><br>
						<option selected disabled>Choose Subject...</option>
						<option value="portals">Portals</option>
						<option value="smartcontracts">Smart Contracts</option>
						<option value="advisory">Advisory</option>
						<option value="getquote">Get Quote</option>
					</select><br>
					<textarea name="message" placeholder="Your Message..."></textarea><br>
					<input type="submit" name="submit" value="Submit" class="contactsubmit">
					<?php 
					$whitelist = array('127.0.0.1','::1');
					if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)) { ?>
						<div class="g-recaptcha pt10" data-sitekey="6LfYyVgUAAAAAO7Zv5R6j7mYq8LUqXEhCe5OLfuD"></div>
					<?php } ?>
				</form>

				<!-- <h6>&#9642;&emsp;<a href="mailto:team@ledgerleap.com">team@ledgerleap.com</a></h2>
				<h6>&#9642;&emsp;<a href="tel:3213133900">(321) 313-3900</h2></a> -->

			</div>
		</div>
	</div>
</div>

<style type="text/css">
	.sidebar_row { padding:5%; font-size: 19px; }
	.sidebar_row > a {
		color:black;
		font-family: "Dejavu", "Arial", sans-serif;
		text-shadow: 3px 3px 8px rgba(231,128,60,0.6);
		-webkit-font-smoothing: antialiased;
	}
</style>

<div class="biothomas" style="overflow-y: scroll;">
	<div id="closethomas" style="cursor: pointer; position: absolute; top: 0; right: 0; width: 45px; height: 45px; font-size: 45px;">&times;</div>
	<img class="biopic" src="assets/images/thomas.jpg">
	<h3 class="biotitle">Thomas Spangler<br><small>Director of Technology</small></h3>
	<p class="biodesc">Thomas is a blockchain and crypto enthusiast. Designer and architect of the world's first ICO sales platform that integrates credit card merchant processing and real SAFT token air-drop for investors. Thomas is a fullstack programmer and developer with deep knowledge of system integration, web content, and platform security.</p>
</div>

<div class="biocharles" style="overflow-y: scroll;">
	<div id="closecharles" style="cursor: pointer; position: absolute; top: 0; right: 0; width: 45px; height: 45px; font-size: 45px;">&times;</div>
	<img class="biopic" src="assets/images/charles.jpg">
	<h3 class="biotitle">Charles Wismer<br><small>Director of Operations</small></h3>
	<p class="biodesc">Charles is a Co-Founder at Deedcoin and designed the token dynamics capable of revolutionizing the real estate industry. Before Deedcoin, he has flipped over 30 distressed properties, provided real estate consulting services to investors as an in-house specialist, and founded and sold a successful telecom sales firm by updating outdated business models with technology.</p>
</div>

<div class="biomatt" style="overflow-y: scroll;">
	<div id="closematt" style="cursor: pointer; position: absolute; top: 0; right: 0; width: 45px; height: 45px; font-size: 45px;">&times;</div>
	<img class="biopic" src="assets/images/matt.jpg">
	<h3 class="biotitle">Matthew Herrick<br><small>Director of Product</small></h3>
	<p class="biodesc">Matthew is one of the Co-Founders of Deedcoin. Establishing a 50 State network of real estate brokers, Matt was key in the creation of a nationwide blockchain customer solution for the cost of real estate services. Before Deedcoin, Matthew was the team lead for sales in resort properties for a major firm and founder of Momentum Realty, an investment real estate brokerage bringing investment real estate options to the public.</p>
</div>

<div class="biophil" style="overflow-y: scroll;">
	<div id="closephil" style="cursor: pointer; position: absolute; top: 0; right: 0; width: 45px; height: 45px; font-size: 45px;">&times;</div>
	<img class="biopic" src="assets/images/phil.png">
	<h3 class="biotitle">Phil Mrzyglocki<br><small>Media Outreach</small></h3>
	<p class="biodesc">Phillip is a media and outreach specialist, and a blockchain enthusiast. He has been a real estate investor for a decade, and previously served in the US Navy. He has worked as an industrial integrity management consultant, a technical writer, insurance sales and consultant, and real estate sales prior to Deedcoin.</p>
	<!-- Waiting on Phil bio -->
</div>

<div class="biotessa" style="overflow-y: scroll;">
	<div id="closetessa" style="cursor: pointer; position: absolute; top: 0; right: 0; width: 45px; height: 45px; font-size: 45px;">&times;</div>
	<img class="biopic" src="assets/images/tessa.jpg">
	<h3 class="biotitle">Tessa Reve<br><small>Public Relations</small></h3>
	<p class="biodesc">Tessa has assisted with the graphical design and buildout of the Ledger Leap platform. She has a background in founding and growing small businesses. Her primary roles in prior businesses have been customer outreach. Tessa manages the day to day communications and enterprise account management of Ledger.</p>
</div>

<div class="biolawson" style="overflow-y: scroll;">
	<div id="closelawson" style="cursor: pointer; position: absolute; top: 0; right: 0; width: 45px; height: 45px; font-size: 45px;">&times;</div>
	<img class="biopic" src="assets/images/lawson.png">
	<h3 class="biotitle">Matt Lawson<br><small>Content Manager</small></h3>
	<p class="biodesc">Matt has over 25 years of sales and marketing experience. He has worked for UniFirst, a Fortune 500 Company, and JD Powers award winner Service Corporation International. He graduated from the University of Idaho with a degree in journalism.</p>
</div>

<div class="bioemily" style="overflow-y: scroll;">
	<div id="closeemily" style="cursor: pointer; position: absolute; top: 0; right: 0; width: 45px; height: 45px; font-size: 45px;">&times;</div>
	<img class="biopic" src="assets/images/emily.png">
	<h3 class="biotitle">Emily Thacker<br><small>Development Manager</small></h3>
	<p class="biodesc">Emily was one of the core developers for the Center for the Advancement of Science In Space (CASIS). There she was responsible for the conference system for the International Space Station (ISS) U.S. National Laboratory, the launch platform framework for NASA and SpaceX.
</p>
</div>
<div class="biosam" style="overflow-y: scroll;">
	<div id="closesam" style="cursor: pointer; position: absolute; top: 0; right: 0; width: 45px; height: 45px; font-size: 45px;">&times;</div>
	<img class="biopic" src="assets/images/sam.png">
	<h3 class="biotitle">Sam Mihal<br><small>Media Manager</small></h3>
	<p class="biodesc">
	Highly experienced in the creative use of Adobe After Effects, Adobe Photoshop, and Final Cut ProX for logo and graphics design, 3D animation effects, as well as advanced video media editing. In addition, he manages the Deedcoin Youtube chanel and its content, as well as weekly live streams and video press releases.
</p>
</div>

<div class="et-modal" id="aig" style="overflow-y: scroll;">
	<div id="closeaig" style="cursor: pointer; position: absolute; top: 0; right: 0; width: 45px; height: 45px; font-size: 45px;">&times;</div>
	<img class="biopic" src="assets/images/aig.png">
	<h3 class="biotitle">AIG<br><small></small></h3>
	<p class="biodesc">AIGaming is an existing educational platform and community for AI enthusiasts.  Users learn AI and test their skills in competitive games. Customers crowdsource solutions to problems and hire AI experts. It’s also a place where businesses can leverage our pool of AI experts to solve their real-world problems.
	</p>
</div>
<div class="et-modal" id="air" style="overflow-y: scroll;">
	<div id="closeair" style="cursor: pointer; position: absolute; top: 0; right: 0; width: 45px; height: 45px; font-size: 45px;">&times;</div>
	<img class="biopic" src="assets/images/air.png">
	<h3 class="biotitle">AIRSTAYZ&trade;<br><small></small></h3>
	<p class="biodesc"> Hotels, foreign economies, and local businesses all benefit from joining the AIRSTAYZ™ platform by gaining the ability to win customers instead of paying for marketing. Heavily reduced customer acquisition costs and access to modernization modules allows properties to surpass their competition, and gives guests a better experience. The AIRSTAYZ™ platform allows business growth through incentivizing customers. As hotels better utilize the tools of the platform to win customers, they can access revenue not available in the current marketplace.
 
	</p>
</div>
<div class="et-modal" id="deed" style="overflow-y: scroll;">
	<div id="closedeed" style="cursor: pointer; position: absolute; top: 0; right: 0; width: 45px; height: 45px; font-size: 45px;">&times;</div>
	<img class="biopic" src="assets/images/deed.png">
	<h3 class="biotitle">Deedcoin<br><small></small></h3>
	<p class="biodesc">Deedcoin's platform simply replaces the way you find your next real estate agent. Instead of finding their next agent on google for 6% commission, customers access our platform, input their property information, and link up with their local Deedcoin agent for a 1% commission. Deedcoin customers use DEED to decide the commission or rebate before linking with the Deedcoin agent.
	</p>
</div>

<div class="graph">
	<h1 class="centered pt20 pb40">Modal</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>


<div class="flexpicwrap centered">
	<div id="closeflexpic">&times;</div>
	<h1 id="pictitle" class="centered pb20"></h1>
	<p id="pictext" class="centered pb20" style="padding: 10px; border-bottom: 2px solid #e7803c;"></p>
	<img id="PIC" src="" style="max-width: 100%; max-height: 100%; height: auto; width: auto; padding-top: 7px; overflow: auto;">
	
</div>


