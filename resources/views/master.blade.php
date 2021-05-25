<!DOCTYPE html>
<html lang="en">
<head>
<meta name="author" content="">
<meta name="description" content="">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portfolio</title>
<meta property="og:type" content="rv-tech portfolio" />
<meta property="og:title" content="Rindra Rasolonirina - Portfolio" />
<meta property="og:description" content="Développeur web et mobile freelance et créateur de site internet. Création ou refonte de site internet, intégration, référencement" />
<meta property="og:image" itemprop="image" content="partials/facebook_banner.html" />
<meta property="og:url" content="" />
<meta property="og:image:width" content="1024" />
<meta property="og:image:height" content="1024" />
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image" content="partials/facebook_banner.html">
<link rel="image_src" href="partials/share_banner.html">

<!-- Favicon -->
<link rel="shortcut icon" type="img/png" href="img/favicon.png">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900" rel="stylesheet">

<!-- Style CSS -->
<link type="text/css" media="all" href="{{ secure_asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link type="text/css" media="all" href="{{ secure_asset('css/jquery.animatedheadline.css') }}" rel="stylesheet">
<link type="text/css" media="all" href="{{ secure_asset('css/font-awesome.min.css') }}" rel="stylesheet">
<link type="text/css" media="all" href="{{ secure_asset('css/style.css') }}" rel="stylesheet">
<link type="text/css" media="all" href="{{ secure_asset('css/color/orange.css') }}" rel="stylesheet">
</head>

<body class="dark hero_bg_image_two">
<div class="page">
  <!-- Header Starts -->
  <header id="header">
    <div class="nav-container">
      <div>
        <!-- Mobile Navigation Starts -->
        <ul id="nav" class="navigation">
          <li class="active"><div><a id="link-home" href="#home" class="active"><i class="fa fa-home"></i><span>Home</span></a></div></li>
          <li><div><a id="link-about" href="#about"><i class="fa fa-user"></i><span>About</span></a></div></li>
          <li><div><a id="link-work" href="#work"><i class="fa fa-briefcase"></i><span>Portfolio</span></a></div></li>
          <li><div><a id="link-contact" href="#contact"><i class="fa fa-envelope-open"></i><span>Contact</span></a></div></li>
          {{-- <li><div><a id="link-blog" href="#blog"><i class="fa fa-comments"></i><span>Blog</span></a></div></li> --}}
        </ul>
        <!-- Mobile Navigation Ends -->
      </div>
    </div>

    <!-- Stretchy Navigation Starts -->
    <div class="vfx-navigation"> <a class="vfx-navigation-trigger" href="#"> <span aria-hidden="true"></span> </a>
      <ul class="stretchy-nav">
        <li class="active"><a href="#home"><span>Home</span></a></li>
        <li><a href="#about"><span>About</span></a></li>
        <li><a href="#works"><span>Portfolio</span></a></li>
        <li><a href="#contact"><span>Contact</span></a></li>
{{--         <li><a href="#blog"><span>Blog</span></a></li> --}}
      </ul>
      <span aria-hidden="true" class="vfx-navigation-bg-block"></span>
	</div>
    <!-- Stretchy Navigation Ends -->
  </header>
  <!-- Header Ends -->

  <!-- Main Content Starts -->
  <main id="main">
    <span class="vfx-back-mobile" id="vfx-back-mobile"><i class="fa fa-arrow-right"></i></span>
    <!-- Home Section Starts -->
    <section id="home" class="active">
      <div class="vfx-main-text-container">
        <div class="main-text" id="selector">
            <div class="portfolio-text">
                <h3>Hello, I’m Rindra Rasolonirina</h3>
                <h1 class="ah-headline">I'M <span class="ah-words-wrapper"><b class="is-visible">Freelancer.</b> <b>Web Developer.</b> <b>Mobile Developper.</b></span></h1>
                <p>I'M Working On a Freelance UI/UX Designer and Web Developer based in MADAGASCAR. I Strives to Build Beautiful Web Design and Mobile Application Development Design.</p>
                <div class="vfx-gat-actions-home">
                    <div class="text-left">
                        <a href="#about" class="btn btn-secondary link-portfolio-one"><span>About</span></a>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
    <!-- Home Section Ends -->

    <!-- About Section Starts -->
    <section id="about">
      <div class="container page-title text-center">
        <h2 class="text-center">About <span>Me</span></h2>
        <div class="animated-bar"></div>
        <p class="text-max-700"></p>
	  </div>
      <div class="container infos">
        <div class="row vfx-personal-about-info">
          <!-- Personal Infos Starts -->
          <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
            <div class="image-container"> <img class="img-fluid d-block" src="{{ secure_asset('img/user_about_1.jpg') }}"  alt="" /> </div>
            <p class="d-block d-md-none">I'm a Freelance UI/UX Designer and Developer based in London, England. I strives to build immersive and beautiful web applications through carefully crafted code and user-centric design.</p>
          </div>
          <div class="row col-xl-7 col-lg-7 col-md-12 about-info-item">
		    <div class="col-xl-12 col-lg-12 col-md-12 mb-3 about-dtl">
				<h2>Hello, I’m Rindra RASOLONIRINA Creative Web Designer Based in MADAGASCAR.</h2>
				<p>- It's My Pleasure to Introduce About Myself.</p>
			</div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 about-dtl">
              <ul class="list-1">
                <li>
                  <h6><span class="font-weight-600">Name:</span>RASOLONIRINA Rindra Victorien</h6>
                </li>
                <li>
                  <h6><span class="font-weight-600">Date of Birth:</span>20 February, 1997</h6>
                </li>
                <li>
                  <h6><span class="font-weight-600">Work Status:</span>Web / Mobile Developper</h6>
                </li>
                <li>
                  <h6><span class="font-weight-600">Nationality:</span>Malagasy</h6>
                </li>
                <li>
                  <h6><span class="font-weight-600">Freelance:</span>Available</h6>
                </li>
              </ul>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 about-dtl">
              <ul class="list-2">
                <li>
                  <h6><span class="font-weight-600">Email:</span><a href="#">rindravictorien1112@gmail.com</a></h6>
                </li>
                <li>
                  <h6><span class="font-weight-600">Study:</span>ISPM(Institut Supérieur Polytechnique de Madagascar) / CNTEMAD(Centre National du Télé-Enseignement)</h6>
                </li>
                <li>
                  <h6><span class="font-weight-600">Phone:</span><a href="#">(+261) 34 79 755 81 / 34 08 603 51</a></h6>
                </li>
                <li>
                  <h6><span class="font-weight-600">Address:</span>Lot IVK 156 Ankadifotsy</h6>
                </li>
                {{-- <li>
                  <h6><span class="font-weight-600">Website:</span><a href="#"></a></h6>
                </li> --}}
              </ul>
            </div>
			<!-- Social Media Sharing Starts -->
            <div class="social mb-0">
                <ul class="list-inline social vfx-social-intro text-center p-none">
                  <li class="facebook"><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="linkedin"><a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
				  <li class="twitter"><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
				  <li class="pinterest"><a title="Pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                  <li class="whatsapp"><a title="Whatsapp" href="#"><i class="fa fa-whatsapp"></i></a></li>
                </ul>
            </div>
            <!-- Social Media Sharing Ends -->
            <div class="col-12 vfx-resume-btn-container about-dtl">
				<a href="#" class="btn btn-secondary btn-resume"><span>Download Cv <i class="fa fa-download"></i></span></a>
				<a href="#" class="btn btn-secondary btn-resume"><span>Hire Me! <i class="fa fa-file"></i></span></a>
			</div>
          </div>
          <!-- Personal Infos Ends -->
        </div>
      </div>
      <!-- Download CV Starts -->
      <div class="container col-12 mx-auto text-center">
        <hr class="about-section" />
      </div>
      <!-- Download CV Ends -->

      <!-- Resume Starts -->
      <div class="vfx-resume-container">
        <div class="container">
          <div class="row">
            <!-- Education Starts -->
            <div class="col-xl-6 col-lg-6 col-md-6">
              <h2 class="font-weight-600 uppercase title-section">Education</h2>
              <div class="resume-items">
                <div class="item"> <span class="bullet"></span>
                  <div class="card">
                    <div class="card-header">
						<span class="year"><i class="fa fa-calendar"></i><i class="fa fa-caret-right"></i>2020 - 2021</span>
						<span class="d-block font-weight-400 uppercase">License In Computer Network <span class="separator"></span>
						<span class="font-weight-700">CNTEMAD</span></span>
					</div>
                    <div class="card-body">
                      <p></p>
                    </div>
                  </div>
                </div>
                <div class="item"> <span class="bullet"></span>
                  <div class="card">
                    <div class="card-header">
						<span class="year"><i class="fa fa-calendar"></i><i class="fa fa-caret-right"></i>2020 - 2021</span>
						<span class="d-block font-weight-400 uppercase">License In Computer Science <span class="separator"></span>
						<span class="font-weight-700">ISPM</span></span>
					</div>
                    <div class="card-body">
                      <p></p>
                    </div>
                  </div>
                </div>
                <div class="item"> <span class="bullet"></span>
                  <div class="card">
                    <div class="card-header">
						<span class="year"><i class="fa fa-calendar"></i><i class="fa fa-caret-right"></i>2016 - 2017</span>
						<span class="d-block font-weight-400 uppercase">Baccalauréat<span class="separator"></span>
						<span class="font-weight-700">Lycée Mixte Ambovombe Androy</span></span>
					</div>
                    <div class="card-body">
                      <p>Mention Assez Bien.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Education Ends -->

            <!-- Experience Starts -->
            <div class="col-xl-6 col-lg-6 col-md-6 vfx-skills-container">
              <h2 class="font-weight-600 uppercase title-section">Experience</h2>
              <div class="resume-items">
                <div class="item"> <span class="bullet"></span>
                  <div class="card">
                    <div class="card-header">
						<span class="year"><i class="fa fa-calendar"></i><i class="fa fa-caret-right"></i>2020 - 2021</span>
						<span class="d-block font-weight-400 uppercase">Web Application (Marketplace) <span class="separator"></span>
						<span class="font-weight-700">CodeIgniter</span></span>
					</div>
                    <div class="card-body">
                        <p>Technology:</p>
                        <p>Front End : HTML, CSS , JS, BOOTSTRAP</p>
                        <p>Back End :  CodeIgniter</p>
                        <p>Link : https://fit-troc.niouz.net</p>
                    </div>
                  </div>
                </div>
                <div class="item"> <span class="bullet"></span>
                  <div class="card">
                    <div class="card-header">
						<span class="year"><i class="fa fa-calendar"></i><i class="fa fa-caret-right"></i>2020 - 2021</span>
						<span class="d-block font-weight-400 uppercase">Site Vitrine (CMS) <span class="separator"></span>
						<span class="font-weight-700">Wordpress</span></span>
					</div>
                    <div class="card-body">
                      <p></p>
                    </div>
                  </div>
                </div>
                <div class="item"> <span class="bullet"></span>
                  <div class="card">
                    <div class="card-header">
						<span class="year"><i class="fa fa-calendar"></i><i class="fa fa-caret-right"></i>2019 - 2020</span>
						<span class="d-block font-weight-400 uppercase">Managmenent System(Web Application)<span class="separator"></span>
						<span class="font-weight-700">Laravel</span></span>
					</div>
                    <div class="card-body">
                      <p>Managment System for Station Service Essence (JOVENA)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Experience Ends -->
          </div>

		  <!-- Count Section Start -->
		  <div class="vfx-count-section vfx-single-section">
		    <div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
				  <h2 class="font-weight-600 uppercase title-section our_success">Our Success Award</h2>
				</div>
			</div>
		    <div class="row align-items-center">
			    <div class="col-12 col-lg-3 col-sm-6 col-xs-12 count-item">
					<div class="card">
						<div class="count-box text-center">
							<h1 class="count">520</h1>
							<h4>Working Hours</h4>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-3 col-sm-6 col-xs-12 count-item">
					<div class="card">
						<div class="count-box text-center">
							<h1 class="count">60</h1>
							<h4>Happy Clients</h4>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-3 col-sm-6 col-xs-12 count-item">
					<div class="card">
						<div class="count-box text-center">
							<h1 class="count">1</h1>
							<h4>Winning Awards</h4>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-3 col-sm-6 col-xs-12 count-item">
					<div class="card">
						<div class="count-box text-center">
							<h1 class="count">8</h1>
							<h4>Projects a Year</h4>
						</div>
					</div>
				</div>
            </div>
          </div>
		  <!-- Count Section Ends -->

			<!-- Skills Starts -->
			<div class="row">
				<div class="col-12">
					<h2 class="font-weight-600 uppercase title-section skills-title">My Skills</h2>
				</div>
				<!-- Skill Item Starts -->
				<div class="col-12 col-sm-6 col-md-4"> <span class="skill-text">HTML</span>
					<div class="chart-bar"> <span class="item-progress" data-percent="90" style="width: 90%;"></span> <span class="percent" style="right: calc(10% - 21px);">90%
						<div class="arrow"></div>
						</span>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4"> <span class="skill-text">CSS</span>
					<div class="chart-bar"> <span class="item-progress" data-percent="70" style="width: 70%;"></span> <span class="percent" style="right: calc(30% - 21px);">70%
						<div class="arrow"></div>
						</span>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4"> <span class="skill-text">Javascript</span>
					<div class="chart-bar"> <span class="item-progress" data-percent="85" style="width: 85%;"></span> <span class="percent" style="right: calc(15% - 21px);">65%
						<div class="arrow"></div>
						</span>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4"> <span class="skill-text">PHP</span>
					<div class="chart-bar"> <span class="item-progress" data-percent="75" style="width: 75%;"></span> <span class="percent" style="right: calc(25% - 21px);">60%
						<div class="arrow"></div>
						</span>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4"> <span class="skill-text">Wordpress</span>
					<div class="chart-bar"> <span class="item-progress" data-percent="85" style="width: 85%;"></span> <span class="percent" style="right: calc(15% - 21px);">80%
						<div class="arrow"></div>
						</span>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4"> <span class="skill-text">Laravel</span>
					<div class="chart-bar"> <span class="item-progress" data-percent="95" style="width: 95%;"></span> <span class="percent" style="right: calc(5% - 21px);">65%
						<div class="arrow"></div>
						</span>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4"> <span class="skill-text">CodeIgniter</span>
					<div class="chart-bar"> <span class="item-progress" data-percent="85" style="width: 85%;"></span> <span class="percent" style="right: calc(20% - 21px);">65%
						<div class="arrow"></div>
						</span>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4"> <span class="skill-text">Vue.JS</span>
					<div class="chart-bar"> <span class="item-progress" data-percent="85" style="width: 85%;"></span> <span class="percent" style="right: calc(20% - 21px);">40%
						<div class="arrow"></div>
						</span>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4"> <span class="skill-text">Adobe XD</span>
					<div class="chart-bar"> <span class="item-progress" data-percent="90" style="width: 90%;"></span> <span class="percent" style="right: calc(10% - 21px);">30%
						<div class="arrow"></div>
						</span>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4"> <span class="skill-text">Photoshop</span>
					<div class="chart-bar"> <span class="item-progress" data-percent="90" style="width: 90%;"></span> <span class="percent" style="right: calc(10% - 21px);">30%
						<div class="arrow"></div>
						</span>
					</div>
				</div>
			</div>
			<!-- Skills Item Starts Ends -->

		  <!-- Provide Services Start -->
		  <div class="vfx-services-section vfx-single-section">
            <div class="row">
			  <div class="col-12">
			    <h2 class="font-weight-600 uppercase title-section provide_service pt-3">What I Do Services</h2>
			  </div>
              <!-- Single service-->
              <div class="col-12 col-md-6 col-lg-4">
                <div class="utf-single-service"><i class="icon service-icon fa fa-magic"></i>
                  <h6 class="utf-service-title">Creative Designer</h6>
                  <p class="utf-service-description">Lorem ipsum dolor sit amet, consect adipisic elit, sed do eiusmod tempor incididunt ut labore et d magna aliqua Ut enim ad sed do sit...</p>
                </div>
              </div>
              <!-- Single service-->
              <div class="col-12 col-md-6 col-lg-4">
                <div class="utf-single-service"><i class="icon service-icon fa fa-users"></i>
                  <h6 class="utf-service-title">User Experience</h6>
                  <p class="utf-service-description">Lorem ipsum dolor sit amet, consect adipisic elit, sed do eiusmod tempor incididunt ut labore et d magna aliqua Ut enim ad sed do sit...</p>
                </div>
              </div>
              <!-- Single service-->
              <div class="col-12 col-md-6 col-lg-4">
                <div class="utf-single-service"><i class="icon service-icon fa fa-suitcase"></i>
                  <h6 class="utf-service-title">Branding Design</h6>
                  <p class="utf-service-description">Lorem ipsum dolor sit amet, consect adipisic elit, sed do eiusmod tempor incididunt ut labore et d magna aliqua Ut enim ad sed do sit...</p>
                </div>
              </div>
              <!-- Single service-->
              <div class="col-12 col-md-6 col-lg-4">
                <div class="utf-single-service rc-mb-0"><i class="icon service-icon fa fa-clipboard"></i>
                  <h6 class="utf-service-title">UI/UX Design</h6>
                  <p class="utf-service-description">Lorem ipsum dolor sit amet, consect adipisic elit, sed do eiusmod tempor incididunt ut labore et d magna aliqua Ut enim ad sed do sit...</p>
                </div>
              </div>
              <!-- Single service-->
              <div class="col-12 col-md-6 col-lg-4">
                <div class="utf-single-service rc-mb-0"><i class="icon service-icon fa fa-bug"></i>
                  <h6 class="utf-service-title">Software Engineers</h6>
                  <p class="utf-service-description">Lorem ipsum dolor sit amet, consect adipisic elit, sed do eiusmod tempor incididunt ut labore et d magna aliqua Ut enim ad sed do sit...</p>
                </div>
              </div>
              <!-- Single service-->
              <div class="col-12 col-md-6 col-lg-4">
                <div class="utf-single-service rc-mb-0"><i class="icon service-icon fa fa-user"></i>
                  <h6 class="utf-service-title">Media Marketing</h6>
                  <p class="utf-service-description">Lorem ipsum dolor sit amet, consect adipisic elit, sed do eiusmod tempor incididunt ut labore et d magna aliqua Ut enim ad sed do sit...</p>
                </div>
              </div>
            </div>
          </div>
		  <!-- Provide Services Ends -->
        </div>
        <!-- Resume Ends -->
      </div>
    </section>
    <!-- About Section Ends -->

    <!-- Portfolio Section Starts -->
    <section id="work">
      <div class="vfx-portfolio-container">
        <div class="container page-title text-center">
          <h2 class="text-center">My <span>Portfolio</span></h2>
          <div class="animated-bar"></div>
          <p class="text-max-700"></p>
		</div>
        <div class="vfx-portfolio-section">
          <div class="container vfx-pc-container">
            <div>
              <!-- Portfolio Items Starts -->
              <ul class="row" id="portfolio-items">
                <li class="col-12 col-md-6 col-lg-4">
				  <a href="#0" data-type="project-1">
				    <img src="{{ secure_asset('img/projects/project-1.jpg') }}" alt="Project" class="img-fluid">
					<div class="portfolio-title">Creative Web Developer</div>
                  </a>
				</li>
                <li class="col-12 col-md-6 col-lg-4">
				  <a href="#0" data-type="project-2">
				    <img src="{{ secure_asset('img/projects/project-2.jpg') }}" alt="Project" class="img-fluid">
					<div class="portfolio-title">Creative Web Developer</div>
                  </a>
				</li>
                <li class="col-12 col-md-6 col-lg-4">
				  <a href="#0" data-type="project-3">
				    <img src="{{ secure_asset('img/projects/project-3.jpg') }}" alt="Project" class="img-fluid">
					<div class="portfolio-title">Creative Web Developer</div>
                  </a>
				</li>
                <li class="col-12 col-md-6 col-lg-4">
				  <a href="#0" data-type="project-4">
				    <img src="{{ secure_asset('img/projects/project-6.jpg') }}" alt="Project" class="img-fluid">
					<div class="portfolio-title">Creative Web Designer</div>
                  </a>
				</li>
                <li class="col-12 col-md-6 col-lg-4">
				  <a href="#0" data-type="project-5">
				    <img src="{{ secure_asset('img/projects/project-5.jpg') }}" alt="Project" class="img-fluid">
					<div class="portfolio-title">Creative Services Developer</div>
                  </a>
				</li>
                <li class="col-12 col-md-6 col-lg-4">
				  <a href="#0" data-type="project-6">
				    <img src="{{ secure_asset('img/projects/project-4.jpg') }}" alt="Project" class="img-fluid">
					<div class="portfolio-title">Marketing Manager</div>
                  </a>
				</li>
              </ul>
              <!-- Portfolio Items Ends -->
            </div>
          </div>
        </div>
        <div class="portfolio-overlay"></div>
      </div>

      <!-- Portfolio Content Starts -->
      <div class="vfx-project-info project-1">
	    <a href="#" class="btn btn-secondary close-project"><span><i class="fa fa-close"></i></span></a>
        <div class="vfx-project-info-main-content"> <img src="{{ secure_asset('img/projects/project-1.jpg') }}" alt="Project Image"></div>
      </div>

      <div class="vfx-project-info project-2">
	    <a href="#" class="btn btn-secondary close-project"><span><i class="fa fa-close"></i></span></a>
        <div class="vfx-project-info-main-content">
          <div class="videocontainer">
            <iframe class="youtube-video" src="" allowfullscreen></iframe>
          </div>
        </div>
      </div>

      <div class="vfx-project-info project-3">
	    <a href="#" class="btn btn-secondary close-project"><span><i class="fa fa-close"></i></span></a>
        <div class="vfx-project-info-main-content">
          <div id="slider" class="carousel slide portfolio-slider" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active"><img src="{{ secure_asset('img/projects/project-1.jpg') }}" alt="slide"></div>
              <div class="carousel-item"><img src="{{ secure_asset('img/projects/project-2.jpg') }}" alt="slide"></div>
              <div class="carousel-item"><img src="{{ secure_asset('img/projects/project-3.jpg') }}" alt="slide"></div>
            </div>
            <a class="carousel-control-prev" href="#slider" data-slide="prev"> <span class="fa fa-chevron-left carousel-controls"></span> </a> <a class="carousel-control-next" href="#slider" data-slide="next"> <span class="fa fa-chevron-right carousel-controls"></span> </a>
		 </div>
        </div>
      </div>

      <div class="vfx-project-info project-4">
	    <a href="#" class="btn btn-secondary close-project"><span><i class="fa fa-close"></i></span></a>
        <div class="vfx-project-info-main-content">
          <video id="video" class="responsive-video" controls poster="{{ secure_asset('img/projects/project-6.jpg') }}">
            <source src="{{ secure_asset('img/projects/video.mp4') }}" type="video/mp4">
          </video>
        </div>
      </div>

      <div class="vfx-project-info project-5">
	    <a href="#" class="btn btn-secondary close-project"><span><i class="fa fa-close"></i></span></a>
        <div class="vfx-project-info-main-content"> <img src="{{ secure_asset('img/projects/project-5.jpg') }}" alt="Project Image"></div>
      </div>

      <div class="vfx-project-info project-6">
	    <a href="#" class="btn btn-secondary close-project"><span><i class="fa fa-close"></i></span></a>
        <div class="vfx-project-info-main-content"> <img src="{{ secure_asset('img/projects/project-4.jpg') }}" alt="Project Image"></div>
      </div>
      <!-- Portfolio Content Ends -->
      <span class="vfx-back-mobile close-project"><i class="fa fa-arrow-right"></i></span>
    </section>
    <!-- Portfolio Section Ends -->

    <!-- Contact Section Starts -->
    <section id="contact">
      <div class="contact-container">
        <!-- Main Heading Starts -->
        <div class="container page-title text-center">
          <h2 class="text-center">Get <span>In Touch</span></h2>
		  <div class="animated-bar"></div>
          <p class="text-max-700"></p>
		</div>
        <!-- Main Heading Ends -->
        <div class="container">
          <div class="row contact">
            <!-- Contact Infos Starts -->
            <div class="col-12 col-md-5 col-xl-5 leftside">
              <ul class="custom-list">
                <li>
                  <div class="media align-items-center">
				    <span class="info-icon"><i class="fa fa-map-marker"></i></span>
					<div class="media-body info-details">
						<h6 class="utf-info-type">Location</h6>
						<span class="utf-info-value">Lot IVK 156 Ankadifotsy , Madagascar</span>
					</div>
				  </div>
                </li>
				<li>
                  <div class="media align-items-center">
				    <span class="info-icon"><i class="fa fa-phone"></i></span>
					<div class="media-body info-details">
						<h6 class="utf-info-type">Phone Number</h6>
						<span class="utf-info-value"><a href="#">+261 34 79 755 81 / +261 34 08 603 51</a></span>
					</div>
				  </div>
                </li>
				<li>
                  <div class="media align-items-center">
				    <span class="info-icon"><i class="fa fa-envelope-o"></i></span>
					<div class="media-body info-details">
						<h6 class="utf-info-type">Email Address</h6>
						<span class="utf-info-value"><a href="#">rindravictorien1112@gmail.com</a></span>
					</div>
				  </div>
                </li>
				{{-- <li>
                  <div class="media align-items-center">
				    <span class="info-icon"><i class="fa fa-globe"></i></span>
					<div class="media-body info-details">
						<h6 class="utf-info-type">Website</h6>
						<span class="utf-info-value"><a href="#">www.mywebsite.com</a></span>
					</div>
				  </div>
                </li> --}}
              </ul>
              <!-- Social Media Sharing Starts -->
              <div class="social">
                <ul class="list-inline social vfx-social-intro text-center p-none">
                  <li class="facebook"><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="linkedin"><a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
				  <li class="twitter"><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
				  <li class="pinterest"><a title="Pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                  <li class="whatsapp"><a title="Whatsapp" href="#"><i class="fa fa-whatsapp"></i></a></li>
                </ul>
              </div>
              <!-- Social Media Sharing Ends -->
            </div>
            <!-- Contact Infos Ends -->

            <!-- Contact Form Starts -->
            <div class="col-12 col-md-7 col-xl-7 rightside form">
			  <div class="row success message" id="success_message">
				<div class="col-12 p-0">
					<i class="fa fa-check-circle"></i>
					<h3>Success Your Message</h3>
					<p>Your Message Has Been Sent Successfully.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac vulputate dolor Lorem ipsum dolor sit amet consectetur elit.</p>
					<a href="{{ route('index') }}" class="btn btn-secondary mt-2"><span>Refresh <i class="fa fa-refresh"></i></span></a>
				</div>
			  </div>
              <form class="contactform" name="contact-us" id="contact-us" method="post">
                <div class="row">
                  <div class="form-group col-xl-6">
                    <input id="name" type="text" name="name" class="form-control" placeholder="Name" required>
                  </div>
                  <div class="form-group col-xl-6">
                    <input id="email" type="text" name="email" class="form-control" placeholder="Email" required>
                  </div>
				  <div class="form-group col-xl-6">
                    <input id="phone" type="number" name="phone" class="form-control" placeholder="Phone Number" required>
                  </div>
				  <div class="form-group col-xl-6">
                    <input id="subject" type="text" name="subject" class="form-control" placeholder="Subject" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <textarea id="message" type="text" name="message" class="form-control" placeholder="Message..." required></textarea>
                  </div>
                </div>
                <div class="submit-form">
                  <button class="btn btn-secondary button-animated btn_submit" type="submit" name="send"><span>Submit <i class="fa fa-send"></i></span></button>
                </div>
              </form>
            </div>
            <!-- Contact Form Ends -->
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section Ends -->

    <!-- Blog Section Starts -->
    <section id="blog">
      <div class="container page-title text-center">
        <h2 class="text-center">Latest <span>Blog Post</span></h2>
        <div class="animated-bar"></div>
        <p class="text-max-700">Lorem ipsum dolor sit amet, consect adipisic elit, sed do eiusmod tempor incididunt ut labore et d magna aliqua enim sed do sit.</p>
	  </div>
      <div class="container">
        <div class="row">
          <!-- Article Starts -->
          <div class="col-12 col-lg-4 col-sm-6 col-xs-12">
            <article>
              <figure class="vfx-blog-figure">
			    <a href="partials/blog-post.html"><img class="img-fluid" src="{{ secure_asset('img/blog/blog-post-1.jpg') }}" alt=""></a>
                <div class="post-date">12 March, 2020</div>
              </figure>
			  <div class="card-body post-content">
				 <div class="blog-post-user">By, John Doe</div>
				 <div class="blog-post-tage">Web Designer</div>
				 <a href="partials/blog-post.html"><h4>The Most Popular Blog Post & Top Digital Eorld Places ...</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore porro rem quod illo qua eum alias id repellendus magni...</p>
			  </div>
            </article>
          </div>
          <!-- Article Ends -->

          <!-- Article Starts -->
          <div class="col-12 col-lg-4 col-sm-6 col-xs-12">
            <article>
              <figure class="vfx-blog-figure">
			    <a href="partials/blog-post.html"><img class="img-fluid" src="{{ secure_asset('img/blog/blog-post-2.jpg') }}" alt=""></a>
                <div class="post-date">12 March, 2020</div>
              </figure>
			  <div class="card-body post-content">
				 <div class="blog-post-user">By, John Doe</div>
				 <div class="blog-post-tage">Web Designer</div>
				 <a href="partials/blog-post.html"><h4>The Most Popular Blog Post & Top Digital Eorld Places ...</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore porro rem quod illo qua eum alias id repellendus magni...</p>
			  </div>
            </article>
          </div>
          <!-- Article Ends -->

          <!-- Article Starts -->
          <div class="col-12 col-lg-4 col-sm-6 col-xs-12">
            <article>
              <figure class="vfx-blog-figure">
			    <a href="partials/blog-post.html"><img class="img-fluid" src="{{ secure_asset('img/blog/blog-post-3.jpg') }}" alt=""></a>
                <div class="post-date">12 March, 2020</div>
              </figure>
			  <div class="card-body post-content">
				 <div class="blog-post-user">By, John Doe</div>
				 <div class="blog-post-tage">Web Designer</div>
				 <a href="partials/blog-post.html"><h4>The Most Popular Blog Post & Top Digital Eorld Places ...</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore porro rem quod illo qua eum alias id repellendus magni...</p>
			  </div>
            </article>
          </div>
          <!-- Article Ends -->

          <!-- Article Starts -->
          <div class="col-12 col-lg-4 col-sm-6 col-xs-12">
            <article>
              <figure class="vfx-blog-figure">
			    <a href="partials/blog-post.html"><img class="img-fluid" src="{{ secure_asset('img/blog/blog-post-4.jpg') }}" alt=""></a>
                <div class="post-date">12 March, 2020</div>
              </figure>
			  <div class="card-body post-content">
				 <div class="blog-post-user">By, John Doe</div>
				 <div class="blog-post-tage">Web Designer</div>
				 <a href="partials/blog-post.html"><h4>The Most Popular Blog Post & Top Digital Eorld Places ...</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore porro rem quod illo qua eum alias id repellendus magni...</p>
			  </div>
            </article>
          </div>
          <!-- Article Ends -->

		  <!-- Article Starts -->
          <div class="col-12 col-lg-4 col-sm-6 col-xs-12">
            <article>
              <figure class="vfx-blog-figure">
			    <a href="partials/blog-post.html"><img class="img-fluid" src="{{ secure_asset('img/blog/blog-post-5.jpg') }}" alt=""></a>
                <div class="post-date">12 March, 2020</div>
              </figure>
			  <div class="card-body post-content">
				 <div class="blog-post-user">By, John Doe</div>
				 <div class="blog-post-tage">Web Designer</div>
				 <a href="partials/blog-post.html"><h4>The Most Popular Blog Post & Top Digital Eorld Places ...</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore porro rem quod illo qua eum alias id repellendus magni...</p>
			  </div>
            </article>
          </div>
          <!-- Article Ends -->

		  <!-- Article Starts -->
          <div class="col-12 col-lg-4 col-sm-6 col-xs-12">
            <article>
              <figure class="vfx-blog-figure">
			    <a href="partials/blog-post.html"><img class="img-fluid" src="{{ secure_asset('img/blog/blog-post-6.jpg') }}" alt=""></a>
                <div class="post-date">12 March, 2020</div>
              </figure>
			  <div class="card-body post-content">
				 <div class="blog-post-user">By, John Doe</div>
				 <div class="blog-post-tage">Web Designer</div>
				 <a href="partials/blog-post.html"><h4>The Most Popular Blog Post & Top Digital Eorld Places ...</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore porro rem quod illo qua eum alias id repellendus magni...</p>
			  </div>
            </article>
          </div>
          <!-- Article Ends -->

          <!-- Link To Blog Starts -->
          <div class="col-12 col-md-12 allposts"> <a href="partials/blog.html" class="btn btn-secondary"><span>View All Blog Post</span></a> </div>
          <!-- Link To Blog Ends -->
        </div>
      </div>
    </section>
    <!-- Blog Section Ends -->
  </main>
</div>
<!-- Main Content Ends -->

<!-- Preloader Starts -->
<div class="preloader">
  <div class="preloader-container">
    <h1>Loading...</h1>
    <div id="vfx-progress-item-line">
      <div class="vfx-progress-line"></div>
    </div>
  </div>
</div>
<!-- Preloader Ends -->

<!-- Jquery -->
<script src="{{ secure_asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ secure_asset('js/jquery.animatedheadline.js') }}"></script>
<script src="{{ secure_asset('js/bootstrap.min.js') }}"></script>
<script src="{{ secure_asset('js/transition.js') }}"></script>
<script src="{{ secure_asset('js/modernizr.js') }}"></script>
<!-- Main JS -->
<script src="{{ secure_asset('js/custom_jquery.js') }}"></script>
</body>

</html>
