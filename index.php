<!DOCTYPE html>
<html>
<head>
  <title>Leadger Leap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0,
  maximum-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css?v=2" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">


  <style type="text/css">
  <?php
    for ($i=5; $i <= 200; $i+=5) { 
    echo '.pt'.(string)$i.'{padding-top:'.(string)$i.'px;}';
    echo '.pb'.(string)$i.'{padding-bottom:'.(string)$i.'px;}';
    echo '.p'.(string)$i.'{padding:'.(string)$i.'px;}';
  }
  ?>
  </style>
<script type="text/javascript" src="js/wow.js"></script>
</head>
<body>
    <!-- AIGC Project Modal -->
  <div class="modal fade" id="tributeModal" tabindex="-1" role="dialog" aria-labelledby="tributeTitle">
    <div class="modal-dialog wide" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title text-center" id="tributeTitle">Project Details</h3>
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
              <h4 class="project-subtitle">RWD/PORTAL</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, veritatis placeat expedita velit debitis fugit aperiam voluptatem soluta sed ea porro dolore ab, itaque possimus tenetur? Temporibus ab, similique esse.</p>
              <p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita modi tempore, sit error adipisci, laudantium accusantium rem corporis quam. Beatae laboriosam quaerat fugiat, incidunt voluptatibus eos esse voluptas. Deserunt, quaerat.</p>
            </div>
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
              <p><strong>Technologies Used:</strong></p>
              <p class="mb-30">
                <span class="label tag">Bootstrap 3</span>
                <span class="label tag">Responsive Design</span>
                <span class="label tag">HTML5</span>
                <span class="label tag">CSS3</span>
                <span class="label tag">JavaScript</span>
                <span class="label tag">jQuery</span>
              </p>
              <a class="btn td-btn outline green mb-30" href="http://www.home.aigaming.com/" target="_blank" title="Link to Tribute Page"><span class="glyphicon glyphicon-link"></span> Visit Live Site</a>
             
            </div>
          </div><!-- /.row -->
          <div class="modal-footer center">
            <button type="button" class="btn td-btn outline small" data-dismiss="modal">Close Project</button>
          </div><!-- /.modal-footer -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <!-- Deedcoin Project Modal -->
  <div class="modal fade" id="tmsModal" tabindex="-1" role="dialog" aria-labelledby="tmsTitle">
    <div class="modal-dialog wide" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title text-center" id="tmsTitle">Project Details</h3>
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
              <h4 class="project-subtitle">RWD/PORTAL</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At aut mollitia sint temporibus nobis iusto nulla, similique beatae quisquam laboriosam debitis maxime minima adipisci quam, deserunt vero labore. Saepe, ratione.
              </p>
              <p class="mb-30">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur voluptatem dolores sequi eaque laudantium, sit possimus quisquam praesentium sunt dicta, esse, deleniti doloribus odio atque harum animi voluptate commodi fugit.
              </p>
            </div>
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
              <p><strong>Technologies Used:</strong></p>
              <p class="mb-30">
                <span class="label tag">Bootstrap 4</span>
                <span class="label tag">Responsive Design</span>
                <span class="label tag">HTML5</span>
                <span class="label tag">CSS3</span>
                <span class="label tag">jQuery</span>
                <span class="label tag">Gifffer.js</span>
              </p>
              <a class="btn td-btn outline green mb-30" href="http://www.deedcoinlaunch.com/" target="_blank" title="Link to Deedcoin"><span class="glyphicon glyphicon-link"></span> Visit Live Site</a>
              <a class="btn td-btn outline green mb-30" href="http://www.deedcoin.com/" target="_blank" title="Link to Deedcoin"><span class="glyphicon glyphicon-link"></span> Visit Second Site</a>
            </div>
          </div><!-- /.row -->
          <div class="modal-footer center">
            <button type="button" class="btn td-btn outline small" data-dismiss="modal">Close Project</button>
          </div><!-- /.modal-footer -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <!-- AIRSTAYZ&trade; Project Modal -->
  <div class="modal fade" id="rbModal" tabindex="-1" role="dialog" aria-labelledby="rbTitle">
    <div class="modal-dialog wide" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title text-center" id="rbTitle">Project Details</h3>
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
              <h4 class="project-subtitle">RWD/PORTAL</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores voluptatem, deleniti, eum rerum rem assumenda, ipsa odit architecto fuga tempore quam? Architecto totam quia accusamus, repellat aperiam praesentium beatae amet.</p>
              <p class="mb-30">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, temporibus! Eligendi sed harum neque voluptatem odit saepe, modi, recusandae dolore excepturi earum nostrum, iure minima eos natus! Quam perspiciatis, cumque!
              </p>
            </div>
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
              <p><strong>Technologies Used:</strong></p>
              <p class="mb-30">
                <span class="label tag">Responsive Design</span>
                <span class="label tag">HTML5</span>
                <span class="label tag">CSS3</span>
                <span class="label tag">PHP</span>
                <span class="label tag">PHPMailer</span>
                <span class="label tag">FitVids.js</span>
              </p>
              <a class="btn td-btn outline green mb-30" href="http://token.airstayz.com/" target="_blank" title="Link to ryanbechtel.com"><span class="glyphicon glyphicon-link"></span> Visit Live Site</a>
            </div>
          </div><!-- /.row -->
          <div class="modal-footer center">
            <button type="button" class="btn td-btn outline small" data-dismiss="modal">Close Project</button>
          </div><!-- /.modal-footer -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <div id="pageWrap"> <!-- Page Wrap Begin !-->
    <div class="innerPage"> <!-- Inner Page Begin !-->
      <div class="page" id="page0">
        <div class="innerPage">
          <a class="goback" onclick="goBack()" >Go Back</a>
          <div class="title">WHO</div> <!-- WHO (TEAM AND ABOUT) -->
            <section>
              <div class="container">
                <div class="row flex-center sm-no-flex">

                  <div class="pull-right sm-no-float col-md-8">
                    <ul class="team-members list-unstyled">
                      <!-- single member row starts -->
                      <li class="clearfix" id="founders">
                        <div class="member-details">
                          <div>
                            <img src="images/team/charles.png" alt="Co-Founder">
                            <div class="member-info">
                              <h3>Charles Wismer</h3>
                              <p>Co-Founder</p>
                            </div>
                          </div>
                        </div>
                        
                        <div class="member-details">
                          <div>
                            <img src="images/team/thomas.png" alt="Co-Founder">
                            <div class="member-info">
                              <h3>Thomas Spangler</h3>
                              <p>Co-Founder</p>
                            </div>
                          </div>
                        </div>
                        
                        <div class="member-details">
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
                        <div class="member-details">
                          <div>
                            <img src="images/team/emily.png" alt="Project Manager">
                            <div class="member-info" id="et-pic">
                              <h3>Emily Thacker</h3>
                              <p>Project Manager</p>
                            </div>
                          </div>
                        </div>

                        
                        <div class="member-details">
                          <div>
                            <img src="images/team/lawson.png" alt="Content Manager">
                            <div class="member-info">
                              <h3>Matt Lawson</h3>
                              <p>Content Manager</p>
                            </div>
                          </div>
                        </div>
                        
                        <div class="member-details">
                          <div>
                            <img src="images/team/sam.png" alt="Media Manager" id="sampic">
                            <div class="member-info">
                              <h3>Sam Mihal</h3>
                              <p>Media Manager</p>
                            </div>
                          </div>
                        </div>
                      </li><!-- /single member row ends -->

                      <!-- single member row starts -->
                      <li class="clearfix">
                        <div class="member-details">
                          <div>
                            <img src="images/team/tessa.png" alt="Public Relations">
                            <div class="member-info">
                              <h3>Tessa Reve</h3>
                              <p>Public Relations</p>
                            </div>
                          </div>
                        </div>
                        
                        <div class="member-details">
                          <div>
                            <img src="images/team/phil.png" alt="Media Outreach">
                            <div class="member-info">
                              <h3>Phil Mzrglocki</h3>
                              <p>Media Outreach</p>
                            </div>
                          </div>
                        </div>
                        
                        <!-- <div class="member-details">
                          <div>
                            <img src="http://gocheckers.com/images/roster/josh_wesley_headshot_1718.png" alt="UI Designer">
                            <div class="member-info">
                              <h3>John Doe</h3>
                              <p>UI Designer</p>
                            </div>
                          </div>
                        </div> -->
                      </li><!-- /single member row ends -->

                    </ul><!-- /end team-photos -->
                  </div><!-- /end col-md-8 -->
                  
                  <div class="pull-left col-md-4 sm-text-center">
                    <div class="team-overview">
                      <h2 class="orange">Who Are We?</h2>
                      
                      <p><div>Ledger Leap can support solutions from an atmospheric scope. Our team is comprised of Founder's of launch projects along with specialists in each specific element, all directed by leadership with real world industry experience.</div></p>
                    </div>
                  </div><!-- /end col-md-4 -->
                </div><!-- /end row -->
              </div><!-- /end container -->
            </section>
        </div>
      </div>
      <div class="page" id="page1">
        <div class="innerPage">
          <a class="goback" onclick="goBack()">Go Back</a>
          <div class="container-fluid">
            <div class="title">WHY</div> <!-- WHY WE'RE DIFFERENT/WHY CHOOSE US -->
            <div class="slidecontent">
              <ul>
                <li>Simple Sales Process</li>
                <li>
                  Administrator Ease
                  <ul>
                    <li> Multiple modes for different phases of the sale</li>
                    <li> Capability to accept Bitcoin, Ethereum, or Litecoin</li>
                    <li> Credit card sales (compliance determined in consultation)</li>
                    <li> On-demand adjustable security features</li>
                    <li> One-click referral link functionality for marketing</li>
                    <li> Automated email confirmations and countdown timers</li>
                    <li>ERC20, ERC223, ERC721, and ERC865 tokens supported</li>
                    <li class="pb10"> Simple, compliant accredited investor SAFT order system</li>
                  </ul>
                </li>
                <li>Compliance and Security</li>
              </ul>

              <a class="et-cta" href="mailto:team@ledgerleap.com">Schedule Live Demo</a>
            </div>
          </div>
        </div>
      </div>
      <div class="page" id="page2">
        <div class="innerPage"> 
          <a class="goback" onclick="goBack()">Go Back</a>
          <div class="title">WHAT</div> <!-- SERVICES -->
            <section class="intro">

              <div class="intro-block">
                <div class="centerfold-wrap">
                  <div class="hex-master-wrap">
                    <div class="grid-1">
                      <div class="hex-wrap backend" data-title="Pre-ICO" data-content="about-desc" data-color="#fdae22">
                          <div class="hex-init" id="consultingserv"></div>
                          <div class="hex-borders">
                            <div class="border-1"></div>
                            <!-- <div class="border-2"></div> -->
                            <!-- <div class="border-3"></div> -->
                          </div>
                        <div class="hexagon">
                          <div class="hex-inner-1">
                          </div>
                        </div>
                      </div>
                      <!-- <div class="hex-wrap frontend" data-title="Skills (Admin)" data-content="it-desc" data-color="#fdae22">
                          <div class="hex-init"></div>
                          <div class="hex-borders">
                            <div class="border-1"></div>
                            <div class="border-2"></div>
                            <div class="border-3"></div>
                          </div>

                        <div class="hexagon">
                          <div class="hex-inner-1">
                            <div class="hex-inner-2"></div>
                          </div>
                        </div>
                      </div> -->
                    </div>
                    <div class="grid-2">
                      <div class="hex-wrap html sm-hide" data-title="" data-content="" data-color="#fdae22">
                          <div class="hex-init"></div>
            <!--              <div class="hex-borders">
                            <div class="border-1"></div>
                            <div class="border-2"></div>
                            <div class="border-3"></div>
                          </div> -->
                    
                        <div class="hexagon">
                          <div class="hex-inner-1">
                            <div class="hex-inner-2"></div>
                          </div>
                        </div>
                      </div>
                      <div class="hex-wrap css" data-title="ICO Platform" data-content="frontend-desc" data-color="#fdae22">
                          <div class="hex-init" id="techserv"></div>
                          <div class="hex-borders">
                            <div class="border-1"></div>
                            <!-- <div class="border-2"></div>
                              <div class="border-3"></div> -->
                          </div>
                        
                        <div class="hexagon">
                          <div class="hex-inner-1">
                            <div class="hex-inner-2"></div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="grid-3">
                      <div class="hex-wrap gui" data-title="Post ICO" data-content="it-desc" data-color="#fdae22">
                          <div class="hex-init" id="servicesserv"></div>
                          <div class="hex-borders">
                            <div class="border-1"></div>
                            <!-- <div class="border-2"></div>
                            <div class="border-3"></div> -->
                          </div>

                        <div class="hexagon">
                          <div class="hex-inner-1">
                            <div class="hex-inner-2"></div>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>

                  <div class="code-display">
                    <div class="code-description">
                      <div class="about-desc">
                        <p class="code-title"></p>
                        <p>
                          <ul>
                            <li>Initial Consulting</li>
                            <li>Tokenomics Review</li>
                            <li>Launch Review</li>
                            <li>Whitepaper Writing</li>
                            <li>Whitepaper Review</li>
                            <li>Advisor Sourcing</li>

                          </ul>
                        </p>
                      </div>
                      <div class="frontend-desc">
                        <p class="code-title"></p>
                        <p><ul>
                          <li>Launch Coordination</li>
                          <li>Smart Contract</li>
                          <li>Landing Site</li>
                          <li>Contribution Platform (requires node below)</li>
                          <li>Secure Node Programming</li>
                          <li>Complaint Investor Prospectus Platform</li>
                          <li>B.A.A.S. (Blockchain as a Service)</li>
                        </ul></p>
                      </div>
                      <div class="it-desc">
                        <p class="code-title"></p>
                        <p><ul>                          
                          <li>30x ICO Listing Sites</li>
                          <li>Exchange Sourcing and Consulting</li>
                          <li>Press Releases</li>
                        </ul></p>
                      </div>
                      <!-- <div class="backend-desc">
                        <p class="code-title"></p>
                        <p><span>Project:</span>Ledger Leap</p>
                        <p><span>Languages:</span>HTML, CSS, Bootstrap 4, Javascript, jQuery, Three.js</p>
                        <p><a target="_blank" href="https://www.ledgerleap.com">Live Site</a></p>
                        <div class="code-icon"></div>
                      </div>
                      <div class="uxui-desc">
                        <p class="code-title"></p>
                        <p><span>Project:</span>AIRSTAYZ&trade;</p>
                        <p><span>Languages:</span>HTML, CSS, Bootstrap 4, Javascript, jQuery, three.js</p>
                        <p><a target="_blank" href="https://token.airstayz.com">Live Site</a></p>
                        <div class="code-icon"></div>
                      </div>
                      <div class="media-desc">
                        <p class="code-title"></p>
                        <p><span>Project:</span>Deedcoin</p>
                        <p><span>Languages:</span>PHP, HTML, CSS, Bootstrap 4</p>
                        <p><a target="_blank" href="https://www.deedcoinlaunch.com">Live Site</a></p>
                        <p><a target="_blank" href="https://www.deedcoin.com">Second Deedcoin Site</a></p>-
                        <div class="code-icon"></div>

                      </div>
                      <div class="edu-desc">
                        <p class="code-title"></p>
                        <p><span>Project:</span>ISS Conference</p>
                        <p><span>Languages:</span>PHP, CSS, Wordpress, HTML, Flipclock.js</p>
                        <p><a target="_blank" href="https://www.issconference.org">Live Site</a></p>
                        <div class="code-icon"></div>
                      </div> -->
                    </div>

                  </div>
                    <div class="hoverblock"></div>
                </div> <!-- End Centerfold-Wrap -->
              </div>

            </section>
        </div>
      </div>
      <div class="page" id="page3">
        <div class="innerPage">
          <a class="goback" onclick="goBack()">Go Back</a>
          <div class="title">WHERE</div> <!--WHERE WE ARE (LOCATION)/WHERE WE'VE BEEN (CLIENTS) -->
          <div class="slidecontent"><p class="mb20">
            The Ledger Leap team and development office is based in Melbourne, Florida, USA. We build all tech in-house. Many aspects of blockchain benefit from decentralization; however, staff and timetables do not.</p>
            <p class="mb20">The solutions we create are built of necessity. As unmet needs are discovered by our clients, we build robust solutions in real time and silo these answers for future customers. Ledger Leap has provided its services to a handful of clients already. Every client is treated with above and beyond mentality in delivering rock solid products.</p>
          </div>
          <section id="portfolio" class="row">
            <div class="row">
              <div id="projects" class="carousel slide col-xs-12" data-ride="carousel" data-interval="false">
                <div class="row">
                  <!-- Carousel Prev Button -->
                  <div class="col-xs-1">
                    <a class="left carousel-control" href="#projects" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </div>
                  <div class="col-xs-10">
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <div class="col-sm-7">
                          <img class="img-responsive center-block mb-30" src="images/projects/aigcscreen.png" alt="AIGC Project">
                        </div>
                        <div class="col-sm-5">
                          <div class="carousel-caption card">
                            <h3 class="project-title">AIGC</h3>
                            <h4 class="project-subtitle">RWD/PORTAL</h4>
                            <button class="btn td-btn small outline green" data-toggle="modal" data-target="#tributeModal">View Details</button>
                          </div>
                        </div>
                      </div><!-- /.item -->
                      <div class="item">
                        <div class="col-sm-7">
                          <img class="img-responsive center-block mb-30" src="images/projects/deedscreen.png" alt="Deedcoin Project">
                        </div>
                        <div class="col-sm-5">
                          <div class="carousel-caption card">
                            <h3 class="project-title">Deedcoin</h3>
                            <h4 class="project-subtitle">RWD/PORTAL</h4>
                            <button class="btn td-btn small outline green" data-toggle="modal" data-target="#tmsModal">View Details</button>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="col-sm-7">
                          <img class="img-responsive center-block mb-30" src="images/projects/airstayzscreen.png" alt="AIRSTAYZ&trade; Project">
                        </div>
                        <div class="col-sm-5">
                          <div class="carousel-caption card">
                            <h3 class="project-title">AIRSTAYZ&trade;</h3>
                            <h4 class="project-subtitle">RWD/PORTAL</h4>
                            <button class="btn td-btn small outline green" data-toggle="modal" data-target="#rbModal">View Details</button>
                          </div>
                        </div>
                      </div><!-- /.item -->
                    </div><!-- /.carousel-inner -->
                  </div>
                  <div class="col-xs-1">
                    <!-- Carousel Next Button -->
                    <a class="right carousel-control" href="#projects" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div><!-- / Next Btn -->
                  <div class="col-xs-12">
                    <!-- Indicators -->
                    <ol class="carousel-indicators mt-30">
                      <li data-target="#projects" data-slide-to="0" class="active"></li>
                      <li data-target="#projects" data-slide-to="1"></li>
                      <li data-target="#projects" data-slide-to="2"></li>
                    </ol>
                  </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /#projects -->
            </div><!-- /.row -->
          </section>
        </div>
      </div>
      <div class="page" id="page4">
        <div class="innerPage">
          <a class="goback" onclick="goBack()">Go Back</a>
          <div class="title">WHEN</div> <!-- TIMELINE/FLOWCHART? -->
            <div class="slidecontent">
              <p class="mt20 mb20">The Ledger Leap process is designed in "parallels" to leverage existing solutions to speed up launch times. Through this concept, the team can reduce a project's time-to-launch by months and let founders focus on their project.</p>
              <div>
                
              </div>
            </div>

        </div>
      </div>
      <div class="page" id="page5">
        <div class="innerPage">
          <h2>Post ICO Service</h2>
          <a class="goback" onclick="goBack()">Go Back</a>
        </div>
      </div>
      <div class="page" id="page6">
        <div class="innerPage">
          <a class="goback" onclick="goBack()">Go Back</a>
          <div class="container-fluid">
            <div class="title">HOW</div> <!-- HOW -->
            <div class="slidecontent">Ledger Leap launches blockchain solutions, not just projects. We only assist projects that make sense and drive the industry forward in a positive direction. Our platform is designed to bring real world support to beneficial projects, providing experience, connections, and software to harvest the benefits. Solid projects need solutions that can bring products to market faster and without prohibitive fiat costs that cripple development funds.</div>
          </div>
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
  var pointLight = new THREE.PointLight( 0xffffff, 0.4);
  pointLight.name = "pointLight";
  //pointLight.position.y = 100;
  //pointLight.lookAt( new THREE.Vector3(0,0,0));
  //scene.add(pointLight);


  camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.01, 1000);
  camera.position.set(0, 0, 8);
  camera.add(pointLight);
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
  var pointLight2 = new THREE.PointLight( 0xffffff, 0.4 );
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

  $(document).on('show.bs.modal', '.modal', centerModal);
  $(window).on('resize', function () {
    $('.modal:visible').each(centerModal);
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
</script>
  </body>
</html>
