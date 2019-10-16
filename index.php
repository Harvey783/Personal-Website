<?php 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
    />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <title>Christopher Harvey</title>
    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto"
      rel="stylesheet"
    />
    <!-- Google Material Icon -->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <!-- Font Awesome Icon -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- IonIcons Icon -->
    <link href="css/ionicons.min.css" rel="stylesheet" />
    <!-- Animation -->
    <link href="css/animate.css" rel="stylesheet" />
    <!-- Animation On Scroll -->
    <link href="css/aos.min.css" rel="stylesheet" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- Materialize -->
    <link href="css/materialize.css" rel="stylesheet" />
    <!-- Swiper Slider -->
    <link href="css/swiper.css" rel="stylesheet" />
    <!-- Default Style same as style-blue-grey -->
    <link id="color-switcher" href="css/style.css" rel="stylesheet" />
  </head>
  <body>
    <!-- PAGE LOADER -->
    <div id="page-loader">
      <div class="animated bounceInDown">
        <div class="spinner"></div>
      </div>
      <div class="text-div text-center animated zoomIn">
        <p class="text-uppercase">INTRODUCING</p>
        <!-- Name Only -->
        <h6 class="text-uppercase">CHRISTOPHER HARVEY</h6>
      </div>
    </div>

    <!-- HEADER -->
    <div id="header" class="shadow">
      <!-- Navigation -->
      <nav>
        <div class="nav nav-wrapper navbar-fixed-top">
          <div class="container-fluid">
            <!-- Menu Option -->
            <ul class="nav-justified hide-on-med-and-down">
              <li><a href="#header">About</a></li>
              <li><a href="#experience">Education & Experience</a></li>
              <li><a href="#skills">Skills</a></li>
              <li><a href="#portfolios">Portfolio</a></li>
              <!-- <li><a href="#blog">Blog</a></li> -->
              <li><a href="#contact">Contact</a></li>
            </ul>

            <a
              href="#0"
              data-activates="nav-mobile"
              id="nav-btn"
              class="button-collapse nav-icon"
            >
              <i class="ion-navicon"></i
            ></a>

            <!-- Side Nav -->
            <div id="side-nav">
              <div id="nav-header">
                <div id="nav-profile" class="center-block">
                  <!-- Profile Picture [Square] -->
                  <img src="images/chris-pic.png" />
                </div>
                <h6 class="text-center text-capitalize">Christopher Harvey</h6>
              </div>

              <div id="nav-link-wrapper">
                <!-- Side Menu Option -->
                <ul>
                  <li><a class="nav-link" href="#header">About</a></li>
                  <li>
                    <a class="nav-link" href="#experience"
                      >Education & Experience</a
                    >
                  </li>
                  <li><a class="nav-link" href="#skills">Skills</a></li>
                  <li><a class="nav-link" href="#portfolios">Portfolio</a></li>
                  <!-- <li><a class="nav-link" href="#blog">Blog</a></li> -->
                  <li><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
              </div>
            </div>
            <!-- ./Side Nav -->
            <!-- Side Nav Mask -->
            <div id="side-nav-mask"></div>
          </div>
        </div>
      </nav>

      <!-- Name and Status -->
      <div id="intro" class="container">
        <h1 class="text-center text-capitalize">Christopher Harvey</h1>
        <h4 class="text-center text-capitalize">
          Front-end Developer
        </h4>
      </div>
    </div>

    <!-- ABOUT -->
    <section id="about" class="section">
      <div class="container">
        <div class="row">
          <div class="col col-md-12">
            <div id="profile" class="center-block">
              <img src="images/chris-pic.png" />
            </div>

            <!-- Social Links -->
            <div id="intro-div" class="card content-wrapper">
              <ul class="text-center list-inline">
                <li>
                  <a href="https://github.com/Harvey783" target="_blank"
                    ><i class="ion-social-github"></i
                  ></a>
                </li>
                <li>
                  <a
                    href="https://www.linkedin.com/in/christopher--harvey/"
                    target="_blank"
                    ><i class="ion-social-linkedin"></i
                  ></a>
                </li>
              </ul>
              <p class="text-center">
              Full-stack web developer skilled in creating applications with ReactJS front-ends' that utilize either a NodeJS or Ruby on Rails back-end framework.
              </p>
              <div class="row">
                <div class="col col-xs-12 col-sm-12 col-md-12 text-center">
                  <a
                    href="/images/Christopher-Harvey-Resume.pdf"
                    download="Christopher Harvey Resume"
                    class="btn waves-effect waves-light btn-primary custom-btn"
                    >Resume</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- EXPERIENCE & EDUCATION -->
    <section id="experience" class="section">
      <h4 class="text-uppercase text-center">Education & Experience</h4>
      <div class="container">
        <div class="row">
          <div class="col col-md-12 col-sm-12 col-xs-12">
            <!-- Timeline -->
            <div class="timeline center-block">
              <ul>
                <li class="education card" data-aos="fade-up">
                  <i class="title-icon fa fa-circle"></i>
                  <div class="timeline-content">
                    <!-- Heading -->
                    <div class="timeline-header-education">
                      <h3 class="education">
                        Fullstack Web Developer Program
                      </h3>
                    </div>

                    <!-- Organization and Period -->
                    <p class="sub-heading">
                      Flatiron School
                    </p>
                    <p class="sub-heading">2018 - 2019</p>
                  </div>
                  <p class="content-p"><br /></p>
                </li>

                <li class="card" data-aos="fade-up">
                  <i class="title-icon fa fa-circle"></i>
                  <div class="timeline-content">
                    <!-- Heading -->
                    <div class="timeline-header">
                      <h3 class="text-capitalize">Day Trader</h3>
                    </div>

                    <!-- Organization and Period -->
                    <p class="sub-heading">
                      Self-Employed
                    </p>
                    <p class="sub-heading">2014 - 2016</p>

                    <!-- Job Summary -->
                    <p class="content-p">
                    Leveraged knowledge gained researching complex trading strategies at previous employer to achieve a total return of approximately 400% trading equity futures and options.
                    </p>
                  </div>
                </li>

                <li class="work card" data-aos="fade-up">
                  <i class="title-icon fa fa-circle"></i>
                  <div class="timeline-content">
                    <!-- Heading -->
                    <div class="timeline-header">
                      <h3 class="text-capitalize">Marketing Manager</h3>
                    </div>

                    <!-- Organization and Period -->
                    <p class="sub-heading">
                      AlphaOne Capital Partners - Conshohocken, PA
                    </p>
                    <p class="sub-heading">2009 - 2014</p>

                    <!-- Job Summary -->
                    <p class="content-p">
                    Responsible primarily for the messaging of investment strategies as well as creating marketing and sales collateral.

                      <br /><br />
                      Designed mobile-ready, multimedia website easily
                      maintained by internal personnel.
                      <br /><br />

                      Wrote multiple product white-papers featured on
                      industry websites.
                      <br /><br />

                      Implemented customer relationship and sales management
                      software platforms.
                    </p>
                  </div>
                </li>

                <li class="work card" data-aos="fade-up">
                  <i class="title-icon fa fa-circle"></i>
                  <div class="timeline-content">
                    <!-- Heading -->
                    <div class="timeline-header">
                      <h3 class="text-capitalize">Value Engineer</h3>
                    </div>

                    <!-- Organization and Period -->
                    <p class="sub-heading">
                      SAP America - Newtown Square, PA
                    </p>
                    <p class="sub-heading">2006 - 2007</p>

                    <!-- Job Summary -->
                    <p class="content-p">
                      Responsible for the positioning and messaging of North
                      American software services and support.

                      <br /><br />
                      Developed executive-level business cases for prospective clients generating $24 million in revenue.
                      <br /><br />

                      Authored six globally distributed white-papers demonstrating and quantifying the value of software service and support offerings.
                      <br /><br />

                      Created a value-driven RFP adopted by 80% of North American account executives for its ability to better secure contracts.
                    </p>
                  </div>
                </li>
                <li class="education card" data-aos="fade-up">
                  <i class="title-icon fa fa-circle"></i>
                  <div class="timeline-content">
                    <!-- Heading -->
                    <div class="timeline-header-education">
                      <h3 class="education">
                        Bachelor of Science Degrees
                      </h3>
                    </div>
                    <!-- Organization and Period -->
                    <p class="sub-heading">
                      Syracuse University
                    </p>
                    <p class="sub-heading">2002 - 2006</p>
                    <!-- Job Summary -->
                    <p class="content-p">
                      B.S. Marketing
                      <br /><br />
                      B.S. Entrepreneurship & Emerging Enterprises
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SKILLS -->
    <section id="skills" class="section">
      <h4 class="text-uppercase text-center">Skills</h4>
      <div class="container">
        <div class="row">
          <!-- Professional Skills -->
          <div class="col col-md-4 col-sm-4 col-xs-12">
            <div class="card content-wrapper skill-wrapper">
              <h5 class="text-center skill-title">Professional</h5>

              <div class="skill-progress-div">
                <p>Creating Collateral<span>90%</span></p>
                <div class="progress skill-progress" data-percent="90%">
                  <div class="determinate skill-determinate">
                    <i
                      class="skill-determinate-circle fa fa-circle"
                      data-aos="zoom-in"
                      data-aos-delay="300"
                      data-aos-offset="0"
                    ></i>
                  </div>
                </div>
              </div>
              <div class="skill-progress-div">
                <p>Research<span>95%</span></p>
                <div class="progress skill-progress" data-percent="95%">
                  <div class="determinate skill-determinate">
                    <i
                      class="skill-determinate-circle fa fa-circle"
                      data-aos="zoom-in"
                      data-aos-delay="300"
                      data-aos-offset="0"
                    ></i>
                  </div>
                </div>
              </div>
              <div class="skill-progress-div">
                <p>Project Management<span>85%</span></p>
                <div class="progress skill-progress" data-percent="85%">
                  <div class="determinate skill-determinate">
                    <i
                      class="skill-determinate-circle fa fa-circle"
                      data-aos="zoom-in"
                      data-aos-delay="300"
                      data-aos-offset="0"
                    ></i>
                  </div>
                </div>
              </div>
              <div class="skill-progress-div">
                <p>Writing<span>90%</span></p>
                <div class="progress skill-progress" data-percent="90%">
                  <div class="determinate skill-determinate">
                    <i
                      class="skill-determinate-circle fa fa-circle"
                      data-aos="zoom-in"
                      data-aos-delay="300"
                      data-aos-offset="0"
                    ></i>
                  </div>
                </div>
              </div>
              <div class="skill-progress-div">
                <p>Microsoft Office<span>100%</span></p>
                <div class="progress skill-progress" data-percent="100%">
                  <div class="determinate skill-determinate">
                    <i
                      class="skill-determinate-circle fa fa-circle"
                      data-aos="zoom-in"
                      data-aos-delay="300"
                      data-aos-offset="0"
                    ></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Personal Skills -->
          <div class="col col-md-4 col-sm-4 col-xs-12">
            <div class="card content-wrapper skill-wrapper">
              <h5 class="text-center skill-title">Personal</h5>
              <div class="skill-progress-div">
                <p>Committed<span>100%</span></p>
                <div class="progress skill-progress" data-percent="100%">
                  <div class="determinate skill-determinate">
                    <i
                      class="skill-determinate-circle fa fa-circle"
                      data-aos="zoom-in"
                      data-aos-delay="300"
                      data-aos-offset="0"
                    ></i>
                  </div>
                </div>
              </div>
              <div class="skill-progress-div">
                <p>Detail-Oriented<span>90%</span></p>
                <div class="progress skill-progress" data-percent="90%">
                  <div class="determinate skill-determinate">
                    <i
                      class="skill-determinate-circle fa fa-circle"
                      data-aos="zoom-in"
                      data-aos-delay="300"
                      data-aos-offset="0"
                    ></i>
                  </div>
                </div>
              </div>
              <div class="skill-progress-div">
                <p>Time Management<span>90%</span></p>
                <div class="progress skill-progress" data-percent="90%">
                  <div class="determinate skill-determinate">
                    <i
                      class="skill-determinate-circle fa fa-circle"
                      data-aos="zoom-in"
                      data-aos-delay="300"
                      data-aos-offset="0"
                    ></i>
                  </div>
                </div>
              </div>
              <div class="skill-progress-div">
                <p>Punctual<span>100%</span></p>
                <div class="progress skill-progress" data-percent="100%">
                  <div class="determinate skill-determinate">
                    <i
                      class="skill-determinate-circle fa fa-circle"
                      data-aos="zoom-in"
                      data-aos-delay="300"
                      data-aos-offset="0"
                    ></i>
                  </div>
                </div>
              </div>
              <div class="skill-progress-div">
                <p>Analytical Skill<span>90%</span></p>
                <div class="progress skill-progress" data-percent="90%">
                  <div class="determinate skill-determinate">
                    <i
                      class="skill-determinate-circle fa fa-circle"
                      data-aos="zoom-in"
                      data-aos-delay="300"
                      data-aos-offset="0"
                    ></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Technical Skills -->
          <div class="col col-md-4 col-sm-4 col-xs-12">
            <div class="card content-wrapper skill-wrapper">
              <h5 class="text-center skill-title">Technical</h5>

              <div class="skill-progress-div">
                <p>JavaScript<span>80%</span></p>
                <div class="progress skill-progress" data-percent="80%">
                  <div class="determinate skill-determinate">
                    <i
                      class="skill-determinate-circle fa fa-circle"
                      data-aos="zoom-in"
                      data-aos-delay="300"
                      data-aos-offset="0"
                    ></i>
                  </div>
                </div>
              </div>
              <div class="skill-progress-div">
                <p>React<span>80%</span></p>
                <div class="progress skill-progress" data-percent="80%">
                  <div class="determinate skill-determinate">
                    <i
                      class="skill-determinate-circle fa fa-circle"
                      data-aos="zoom-in"
                      data-aos-delay="300"
                      data-aos-offset="0"
                    ></i>
                  </div>
                </div>
              </div>
              <div class="skill-progress-div">
                <p>Ruby on Rails<span>75%</span></p>
                <div class="progress skill-progress" data-percent="75%">
                  <div class="determinate skill-determinate">
                    <i
                      class="skill-determinate-circle fa fa-circle"
                      data-aos="zoom-in"
                      data-aos-delay="300"
                      data-aos-offset="0"
                    ></i>
                  </div>
                </div>
              </div>
              <div class="skill-progress-div">
                <p>Redux<span>75%</span></p>
                <div class="progress skill-progress" data-percent="75%">
                  <div class="determinate skill-determinate">
                    <i
                      class="skill-determinate-circle fa fa-circle"
                      data-aos="zoom-in"
                      data-aos-delay="300"
                      data-aos-offset="0"
                    ></i>
                  </div>
                </div>
              </div>
              <div class="skill-progress-div">
                <p>HTML & CSS<span>90%</span></p>
                <div class="progress skill-progress" data-percent="90%">
                  <div class="determinate skill-determinate">
                    <i
                      class="skill-determinate-circle fa fa-circle"
                      data-aos="zoom-in"
                      data-aos-delay="300"
                      data-aos-offset="0"
                    ></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- PORTFOLIO -->
    <section id="portfolios" class="section">
      <h4 class="text-uppercase text-center">Portfolio</h4>
      <div class="container">
        <div class="row">
          <div class="filtr-container center-block">
            <!-- 1st Portfolio, Filter Option -->
            <div class="col col-md-4 col-sm-12 col-xs-12">
              <div class="portfolio card">
                <figure class="hover-effect">
                  <!-- Portfolio Image -->
                  <img
                    class="img-responsive"
                    src="images/SaySomething.png"
                    alt=""
                  />
                  <!-- open-modal ID -->
                  <a data-toggle="modal" data-target="#modal1" href="#0">
                    <figcaption><span>View Details</span></figcaption>
                  </a>
                </figure>
                <!-- Portfolio Title -->
                <h6 class="text-capitalize text-center">
                  SaySomething
                </h6>
              </div>
            </div>
            <!-- ./Portfolio -->
            <!-- 1st MODAL -->
            <div id="modal1" class="modal" tabindex="-1" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content animated zoomIn">
                  <h3 class="text-capitalize text-left">
                    SaySomething
                  </h3>
                  <div class="row">
                    <!-- Modal Image -->
                    <img
                      class="img-responsive col-md-8 col-sm-12 col-xs-12"
                      src="images/SaySomething.png"
                      alt=""
                    />
                    <!-- Modal Content -->
                    <div class="content col-md-4 col-sm-12 col-xs-12">
                      <p>
                        <span>Code:&nbsp;</span>
                        <a href="https://github.com/Harvey783/EMNReact"
                          >GitHub</a
                        >
                      </p>
                      <p>
                        <span>Demo:&nbsp;</span>
                        <a
                          href="https://emnreact.herokuapp.com/"
                          >Heroku</a
                        >
                      </p>
                      <p class="text-left">
                        A Reddit-like app, which allows users to create posts, up and downvote, and comment on them as well.
                        <br /><br />
                        Utilized Oath with Google's API to afford a proven,
                        standardized authentication process with minimal setup.
                        <br /><br />
                        Implemented a React JS front-end framework for its
                        ability to create great looking UIs with a high-degree
                        of code-reusability.
                        <br /><br />
                        Added Redux to ensure predictable application state
                        management and updates.
                        <br /><br />
                        Created an API backend utilizing Mongoose, Express, and Node. 
                      </p>
                      <button
                        data-dismiss="modal"
                        class="btn right modal-btn close-btn waves-effect waves-light btn-primary custom-btn"
                      >
                        Close
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ./modal -->

            <!-- 2nd Portfolio, Filter Option -->
            <div class="col col-md-4 col-sm-12 col-xs-12">
              <div class="portfolio card">
                <figure class="hover-effect">
                  <!-- Portfolio Image -->
                  <img
                    class="img-responsive"
                    src="images/youtuber.png"
                    alt=""
                  />
                  <!-- open-modal ID -->
                  <a data-toggle="modal" data-target="#modal2" href="#0">
                    <figcaption><span>View Details</span></figcaption>
                  </a>
                </figure>
                <!-- Portfolio Title -->
                <h6 class="text-capitalize text-center">
                  YouTuber
                </h6>
              </div>
            </div>
            <!-- ./Portfolio -->
            <!-- 2nd MODAL -->
            <div id="modal2" class="modal" tabindex="-1" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content animated zoomIn">
                  <h3 class="text-capitalize text-left">
                    YouTuber
                  </h3>
                  <div class="row">
                    <!-- Modal Image -->
                    <img
                      class="img-responsive col-md-8 col-sm-12 col-xs-12"
                      src="images/youtuber.png"
                      alt=""
                    />
                    <!-- Modal Content -->
                    <div class="content col-md-4 col-sm-12 col-xs-12">
                      <p>
                        <span>Code:&nbsp;</span>
                        <a href="https://github.com/Harvey783/YouTuber"
                          >GitHub</a
                        >
                      </p>
                      <p>
                        <span>Demo:&nbsp;</span>
                        <a href="https://ch-youtuber.herokuapp.com/">Heroku</a>
                      </p>
                      <p class="text-left">
                        React application accessing Google's API and returning a
                        search query's results into a video player
                        <br /><br />
                        Installed Axios to leverage library's ability to
                        easily make HTTP requests to APIs.
                        <br /><br />
                        Efficiently managed application state internally with
                        React thereby forgoing unnecessary complex code from a
                        third-party library.
                      </p>
                      <button
                        data-dismiss="modal"
                        class="btn right modal-btn close-btn waves-effect waves-light btn-primary custom-btn"
                      >
                        Close
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ./modal -->

            <!-- 3rd Portfolio, Filter Option -->
            <div class="col col-md-4 col-sm-12 col-xs-12">
              <div class="portfolio card">
                <figure class="hover-effect">
                  <img
                    class="img-responsive"
                    src="images/gitgrabber.png"
                    alt=""
                  />
                  <a data-toggle="modal" data-target="#modal3" href="#0">
                    <figcaption><span>View Details</span></figcaption>
                  </a>
                </figure>
                <!-- Portfolio Title -->
                <h6 class="text-capitalize text-center">
                  GitGrabber
                </h6>
              </div>
            </div>
            <!-- ./Portfolio -->
            <!-- 3rd MODAL -->
            <div id="modal3" class="modal" tabindex="-1" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content animated zoomIn">
                  <h3 class="text-capitalize text-left">
                    GitGrabber
                  </h3>
                  <div class="row">
                    <!-- Modal Image -->
                    <img
                      class="img-responsive col-md-8 col-sm-12 col-xs-12"
                      src="images/gitgrabber.png"
                      alt=""
                    />
                    <!-- Modal Content -->
                    <div class="content col-md-4 col-sm-12 col-xs-12">
                      <p>
                        <span>Code:&nbsp;</span>
                        <a href="https://github.com/Harvey783/GitGrabber"
                          >GitHub</a
                        >
                      </p>
                      <p>
                        <span>Demo:&nbsp;</span>
                        <a href="https://ch-gitgrabber.herokuapp.com/"
                          >Heroku</a
                        >
                      </p>
                      <p class="text-left">
                        JavaScript application that communicates with GitHub's
                        API to return a queried user's profile and repositories
                        <br /><br />
                        Created exclusively with JavaScript to strengthen
                        competence with language.
                      </p>
                      <button
                        data-dismiss="modal"
                        class="btn right modal-btn close-btn waves-effect waves-light btn-primary custom-btn"
                      >
                        Close
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="section">
      <h4 class="text-uppercase text-center">Contact</h4>
      <div class="container">
        <div class="row">
          <!-- Contact Info -->
          <div class="col col-md-5 col-sm-6 col-xs-12">
            <div class="info card">
              <ul
                class="text-center center-block"
                data-aos="fade"
                data-aos-delay="200"
                data-aos-offset="0"
              >
                <li>
                  <i class="ion-android-call center-block"></i>
                  <span>610 - 613 - 8734</span>
                </li>
                <br />
                <li>
                  <i class="ion-email center-block"></i>
                  <span>cwaharvey@gmail.com</span>
                </li>
                <br />
                <li>
                  <i class="ion-ios-location center-block"></i>
                  <span
                    >1337 Pine St <br />
                    Philadelphia, PA 19107</span
                  >
                </li>
              </ul>
            </div>
          </div>
          <!-- ./Contact Info -->
          <!-- Contact Form -->
          <div class="col col-md-7 col-sm-6 col-xs-12">
            <div class="contact card">
              <form
                id="contact-form"
                name="contact-form"
                action=""
                method="post"
              >
                <div class="input-field">
                  <input
                    type="text"
                    name="name"
                    placeholder="Name"
                    id="name"
                    required
                  />
                </div>
                <div class="input-field">
                  <input
                    type="email"
                    name="email"
                    placeholder="Email"
                    id="email"
                    required
                  />
                </div>
                <div class="input-field">
                  <textarea
                    type="text"
                    name="message"
                    placeholder="Message"
                    id="message"
                    class="materialize-textarea"
                    required
                  ></textarea>
                </div>
                <div class="row">
                  <div
                    id="msg"
                    class="col col-md-12 col-sm-12 col-xs-12 text-center"
                  >
                    <button
                      id="submit"
                      type="submit"
                      name="submit"
                      value="Submit"
                      class="btn waves-effect waves-light btn-primary custom-btn"
                    >
                      <i class="ion-ios-paperplane"></i>Send
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer>
      <div class="container">
        <p class="text-center">
          © Christopher Harvey 2019
        </p>
      </div>
    </footer>
    <!-- Back To Top Button -->
    <a
      href="#header"
      id="btp"
      class="back-to-top btn-floating waves-effect waves-light btn-large custom-btn"
    >
      <i class="ion-ios-arrow-up"></i>
    </a>

    <!-- SCRIPTS -->
    <script src="javascript/jquery-2.1.3.min.js"></script>
    <script src="javascript/aos.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/materialize.min.js"></script>
    <script src="javascript/retina.min.js"></script>
    <script src="javascript/jquery.filterizr.min.js"></script>
    <script src="javascript/swiper.jquery.min.js"></script>
    <script src="javascript/custom-script.js"></script>
  </body>
</html>