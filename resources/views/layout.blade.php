<!DOCTYPE html>
<html>

<head>
    <title>Piyush</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="_base_url" content="{{ url('/') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/css.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Montserrat:wght@800&display=swap"
        rel="stylesheet">
    <script src="sweetalert2.min.js"></script>
    <script src="jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="/css/css.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="/js/typed.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    {{-- HOME --}}
    <section class="bgimg" data-index="1" id="home">
        <nav class="navbar fixed-top navbar-expand-lg nav-area">
            <a class="navbar-brand" href="#"><img class="logo" style="height: 60px; border-radius:50px;"
                    src="/img/Capture.PNG" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="flex-r">
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item active ">
                            <a class="nav-link" data-nav-section="home" href="#home">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-nav-section="about" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-nav-section="education" href="#education">EDUCATION</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-nav-section="work" href="#work">WORK</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-nav-section="project" href="#project"> PROJECT </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-nav-section="certification" href="#certification"> CERTIFICATION
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-nav-section="contact" href="#contact"> CONTACT </a>
                        </li>

                    </ul>
                </div>
            </div>

        </nav>

        <br>
        <br><br><br>
        <br>
        <br>
        <br>

        <div id="home" data-aos="fade-up" data-aos-duration="1500" data-aos-easing="ease-in-out"
            data-aos-anchor-placement="center-center" class="container text-center">
            <div class="row">
                <div class="col-md-6 col-12 com-sm-12">
                    <div class="banner-area">
                        <h3>Piyush Kanadje</h3>
                        <h2>I am a <span class="typed2"></span></h2>
                        <div data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-duration="1800">
                            <p class=" mt-5 "
                                style="font-size:25px; line-height:32px;font-weigh:400; color:#ddd; text-align:center;">
                                Hey Myself, PIYUSH PRABHAKAR KANADJE, a Final Year student in GH Raisoni College Of
                                Engineering And Management, Pune. I am an enthusiastic, hardworking, non-complacent,
                                self-motivated, and ambitious student.
                            </p>
                        </div>

                        <div class="button" data-aos="fade-down" data-aos-easing="ease-in-out" data-aos-duration="2000">
                            <button type="button" style="width: 150px; border-radius:50px; padding:10px;"
                                class="btn btn-outline-success">Success</button>
                            <button type="button" style="width: 150px; border-radius:50px; padding:10px;"
                                class="btn btn-outline-danger">Danger</button>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12">

                </div>

            </div>
        </div>
        <br>
        <br>
        <br><br><br>
    </section>
{{-- ABOUT ME --}}
    <section data-section="2" id="about" style="background: black;">
        <div class="container">
            <div class="text-center" data-aos="zoom-in-up" data-aos-duration="800" data-aos-easing="ease-in-out">
                <br>
                <br>

                <h2 style="font-weight:900; font-size:55px;" class="white">ABOUT <span class="or">ME</span></h2>

                <p style="width:50%; margin:auto; font-size:20px;" class="mt-3 white">
                    "U never get a second chance to create the first impression."</p>
            </div>
            <div class="row mt-5" data-aos="fade-right" data-aos-duration="1000">
                <div class="col-md-6 com-sm-12 col-12">
                    <img src="/img/p.PNG" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 col-sm-12 col-12 p-5">
                    <div data-aos="fade-left" data-aos-duration="1000">
                        <h2 class="white">A Little About Myself</h2>
                        <p class="text-left white">
                            Hey, As you read above, I am Piyush PRABHAKAR KANADJE, a Final Year student at GH Raisoni
                            College Of Engineering And Management, Pune. I am an enthusiastic, hardworking,
                            non-complacent, self-motivated, and ambitious student.
                        </p>
                        <p class="text-left white">
                            In the last 4 years of college, I have been in many positions. From the 2nd year, I am
                            working as a Class Representative, from the 3rd year, I have been working as President of
                            E&TC. I have organized many events in the college fest and given excellent performance. With
                            all of this, my academic score is also good. In the last semester(6th), I have got 9.96SGPA.
                        </p>
                        <p class="text-left white">
                            Also Now I am working as a web development intern at Aasa Technologies. I have been
                            programming dynamic websites in this ongoing internship. Its always been a passion of mine
                            to develop userfriendly websites. In this Ongoing Internship, I have built dynamic websites
                            from Scratch.
                        </p>
                        <br>
                        <a class="cv-btn mt-5 " href="/pdf/resume.pdf"><i class="fa fa-download"
                                style="margin:10px"></i>Download CV</a>
                    </div>
                </div>

            </div>
            <br>
            <br>
            <br><br>
        </div>
        <div class="container">
            <div class="text-center" data-aos="zoom-in-up" data-aos-duration="800" data-aos-easing="ease-in-out">
                <br>
                <br>
                <h2 style="font-weight:900; font-size:55px;" class="white">MY <span class="or">SKILLS</span></h2>
                <p style="width:50%; margin:auto; font-size:20px;" class="mt-3 white">
                    "Talent you have naturally. Skill is only developed by hours and hours and hours of beating on your
                    craft."

                </p>
            </div>
            <h2 class="text-uppercase white mt-4">Languages</h2>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12 " data-aos="fade-up-right" data-aos-duration="800">

                    <div class="skill-bars" style="color: white; background:black;">

                        <div class="bar">
                            <div class="info">
                                <span>C</span>
                            </div>
                            <div class="progress-line c">
                                <span></span>
                            </div>
                        </div>
                        <div class="bar">
                            <div class="info">
                                <span>HTML</span>
                            </div>
                            <div class="progress-line del html">
                                <span></span>
                            </div>
                        </div>
                        <div class="bar">
                            <div class="info">
                                <span>jQuery</span>
                            </div>
                            <div class="progress-line  jquery">
                                <span></span>
                            </div>
                        </div>
                        <div class="bar">
                            <div class="info">
                                <span>JS</span>
                            </div>
                            <div class="progress-line del js">
                                <span></span>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-6 col-sm-12 col-12" data-aos="fade-up-left" data-aos-duration="800">

                    <div class="skill-bars" style="color: white; background:black;">
                        <div class="bar">
                            <div class="info">
                                <span>C++</span>
                            </div>
                            <div class="progress-line  css">
                                <span></span>
                            </div>
                        </div>
                        <div class="bar">
                            <div class="info">
                                <span>CSS</span>
                            </div>
                            <div class="progress-line del css">
                                <span></span>
                            </div>
                        </div>

                        <div class="bar">
                            <div class="info">
                                <span>PHP</span>
                            </div>
                            <div class="progress-line  php">
                                <span></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="fade-up-right" data-aos-duration="800">
                    <h2 class="white">TECHNOLOGY & FRAMEWORK</h2>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="skill-bars" style="color: white; background:black; width:100%;">
                                <div class="bar">
                                    <div class="info">
                                        <span>Bootstrap</span>
                                    </div>
                                    <div class="progress-line css">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="bar">
                                    <div class="info">
                                        <span>LARAVEL</span>
                                    </div>
                                    <div class="progress-line del c">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up-left" data-aos-duration="800">
                    <h2 class="white">DATABASE</h2>
                    <div class="row">
                        <div class="col-md-12 col-sm-6 col-12">
                            <div class="skill-bars" style="color: white; background:black;">
                                <div class="bar">
                                    <div class="info">
                                        <span>MySql</span>
                                    </div>
                                    <div class="progress-line c">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <h2 class="white">TOOLS</h2>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12" data-aos="fade-up-right" data-aos-duration="800">
                    <div class="skill-bars bars" style="color: white; background:black;">
                        <div class="bar">
                            <div class="info">
                                <span>GIT</span>
                            </div>
                            <div class="progress-line html">
                                <span></span>
                            </div>
                        </div>
                        <div class="bar">
                            <div class="info">
                                <span>WORD PRESS</span>
                            </div>
                            <div class="progress-line del c">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12" data-aos="fade-up-left" data-aos-duration="800">
                    <div class="skill-bars" style="color: white; background:black;">
                        <div class="bar">
                            <div class="info">
                                <span class="bg-2">GITLAB</span>
                            </div>
                            <div class="progress-line bootstrap">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>

        </div>
    </section>
    {{-- EDUCATION --}}
    <section data-section="3" id="education" style="background:black;">
        <div class="container" data-aos="zoom-in-up" data-aos-duration="800" data-aos-easing="ease-in-out">
            <div class="text-center" data-aos="zoom-in-up" data-aos-duration="800" data-aos-easing="ease-in-out">
                <br>
                <br>
                <h2 style="font-weight:900; font-size:55px;" class="white">MY <span class="or">EDUCATION</span></h2>
                <p style="width:50%; margin:auto; font-size: 20px;" class="mt-3 white">
                    " The pen is mightier than the sword." </p>
            </div>

        </div>

        <div class="container white">

            <!--first section-->
            <div class="row align-items-center how-it-works d-flex mt-5 " data-aos="fade-up-left"
                data-aos-duration="1500">
                <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
                    <div class="circle font-weight-bold">1</div>
                </div>
                <div class="col-6">
                    <h5 class="or">Bharat Vidyalaya, Buldana</h5>
                    <p style="font-size:20px;">Completed Secondary Education with First class Distinction(90.00%).
                        The School is located at my hometown and it is affiliated to Mahashtra State Board.</p>
                </div>
            </div>
            <!--path between 1-2-->
            <div class="row timeline">
                <div class="col-2">
                    <div class="corner top-right"></div>
                </div>
                <div class="col-8">
                    <hr />
                </div>
                <div class="col-2">
                    <div class="corner left-bottom"></div>
                </div>
            </div>
            <!--second section-->
            <div class="row align-items-center justify-content-end how-it-works d-flex" data-aos="fade-up-right"
                data-aos-duration="1500">
                <div class="col-6 text-right">
                    <h5 class="or ">Rajarshi Shahu College,Mahsala</h5>
                    <p style="font-size:20px;">Completed Higher Secondary Education with First class
                        Distinction(75.35%). The School is located at my hometown and it is affiliated to Mahashtra
                        State Board.</p>
                </div>
                <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
                    <div class="circle font-weight-bold">2</div>
                </div>
            </div>
            <!--path between 2-3-->
            <div class="row timeline">
                <div class="col-2">
                    <div class="corner right-bottom"></div>
                </div>
                <div class="col-8">
                    <hr />
                </div>
                <div class="col-2">
                    <div class="corner top-left"></div>
                </div>
            </div>
            <!--third section-->
            <div class="row align-items-center how-it-works d-flex" data-aos="fade-up-left" data-aos-duration="1500">
                <div class="col-2 text-center top d-inline-flex justify-content-center align-items-center">
                    <div class="circle font-weight-bold">3</div>
                </div>
                <div class="col-6">
                    <h5 class="or ">G.H. Raisoni College Of Engineering And Management,Pune</h5>
                    <p style="font-size:20px;">Currently Studying in Final Year of Undergraduate degree, completed
                        third year with First Class Distinction(9.96 SGPA). The college is affiliated to
                        SPPU(Savitribai Phule Pune University).</p>
                </div>
            </div>
            <br>
            <br>

        </div>
    </section>
    {{-- WORK --}}
    <section data-section="4" id="work" style="background:black;">
        <div class="container">
            <div class="text-center" data-aos="zoom-in-up" data-aos-duration="800" data-aos-easing="ease-in-out">
                <br>
                <br>
                <h2 style="font-weight:900; font-size:55px;" class="white">MY <span class="or">WORK</span></h2>
                <p style="width:50%; margin:auto; font-size:20px;" class="mt-3 white">
                    "Concentrate all your thoughts upon the work in hand. The sun's rays do not burn until brought to a
                    focus."
                </p>
            </div>
        </div>

        <div class="container mt-4" data-aos="zoom-in-up" data-aos-duration="800" data-aos-easing="ease-in-out">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline">
                        <div class="timeline" data-aos="fade-up-right" data-aos-duration="1500">
                            <a href="#" class="timeline-content">
                                <span class="timeline-year">2021</span>
                                <h3 class="title">Web Development Intern(October-Till Today)</h3>
                                <p class="description">
                                    I am working as a web development intern at Aasa Technologies. I have implemented a
                                    full-stack website and also have made changes in live websites.
                                </p>
                            </a>
                        </div>
                        <div class="timeline" data-aos="fade-up-left" data-aos-duration="1500">
                            <a href="#" class="timeline-content">
                                <span class="timeline-year">2019</span>
                                <h3 class="title">President OF Electronics and Telecommunication Branch (2019-2021)</h3>
                                <p class="description">
                                    I am working as President of E&TC branch in which I have organized various event in
                                    the college fest and delivered an excellent performance.
                                </p>
                            </a>
                        </div>
                        <div class="timeline" data-aos="fade-up-right" data-aos-duration="1500">
                            <a href="#" class="timeline-content">
                                <span class="timeline-year">2018</span>
                                <h3 class="title">Social Internship</h3>
                                <p class="description">
                                    I have worked as a social intern at Grampanchayat Tandulwadi for two weeks. In this
                                    period, I have work in the school as a teaching assistant.
                                </p>
                            </a>
                        </div>
                        <div class="timeline" data-aos="fade-up-left" data-aos-duration="1500">
                            <a href="#" class="timeline-content">
                                <span class="timeline-year">2018</span>
                                <h3 class="title">Class Representative</h3>
                                <p class="description">
                                    I am currently holding a position as a Class Representative. I am holding this
                                    position for the past 3years.
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>


    </section>

{{-- PROJECT --}}
    <section data-section="5" id="project" style="background:black;">
        <div class="container">
            <div class="text-center" data-aos="zoom-in-up" data-aos-duration="800" data-aos-easing="ease-in-out">
                <br>
                <br>
                <h2 style="font-weight:900; font-size:55px;" class="white">MY <span class="or">PROJECT</span></h2>
                <p style="width:50%; margin:auto; font-size:20px;" class="mt-3 white">
                    "It's a bad plan that admits of no modification."
                </p>
            </div>
            <div class="row mt-5" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-out">
                <div class="col-md-6 com-sm-12 col-12" data-aos="fade-right" data-aos-duration="1500"
                    data-aos-easing="ease-in-out">
                    <img src="/img/heart.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 col-sm-12 col-12 p-5       " data-aos="fade-left" data-aos-duration="1500"
                    data-aos-easing="ease-in-out">
                    <h2 class="white">Heart Attack Detection Using Machine Learning</h2>
                    <p class="text-left white">
                        Our team is developing machine learning algorithms in which we can predict the possibility of a heart attack.
                    </p>
                </div>
            </div>
            <div class="row mt-5" data-aos="zoom-in-down" data-aos-duration="800" data-aos-easing="ease-in-out">

                <div class="col-md-6 col-sm-12 col-12 p-5       " data-aos="fade-right" data-aos-duration="1500"
                    data-aos-easing="ease-in-out">
                    <h2 class="white">A Little About Myself</h2>
                    <p class="text-left white">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, ad unde eaque. Rem
                        numquam
                        cumque, voluptate, dolor iure, repudiandae officiis voluptates aspernatur sapiente quisquam
                        fugit!
                    </p>

                    <a class="cv-btn mt-5 " href="/pdf/resume.pdf">
                        SHOW RESUME</a>
                </div>
                <div class="col-md-6 com-sm-12 col-12" data-aos="fade-left" data-aos-duration="1500"
                    data-aos-easing="ease-in-out">
                    <img src="/img/pro.PNG" class="img-fluid" alt="">
                </div>
            </div>
            <div class="row mt-5" data-aos="zoom-in-up" data-aos-duration="800" data-aos-easing="ease-in-out">
                <div class="col-md-6 com-sm-12 col-12" data-aos="fade-right" data-aos-duration="1500"
                    data-aos-easing="ease-in-out">
                    <img src="/img/pro.PNG" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 col-sm-12 col-12 p-5       " data-aos="fade-left" data-aos-duration="1500"
                    data-aos-easing="ease-in-out">
                    <h2 class="white">A Little About Myself</h2>
                    <p class="text-left white">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, ad unde eaque. Rem
                        numquam
                        cumque, voluptate, dolor iure, repudiandae officiis voluptates aspernatur sapiente quisquam
                        fugit!
                    </p>
                    <a class="cv-btn mt-5 " href="#" download=""><i class="fa fa-download"
                            style="margin:10px"></i>Download CV</a>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>

    </section>
    {{-- CERTIFICATION --}}
    <section data-section="6" id="certification" style="background:black;">

        <div class="container">
            <div class="text-center" data-aos="zoom-in-up" data-aos-duration="800" data-aos-easing="ease-in-out">
                <br>
                <br>
                <h2 style="font-weight:900; font-size:55px;" class="white">MY <span class="or">CERTIFICATION</span></h2>
                <p style="width:50%; margin:auto; font-size:20px;" class="mt-3 white">
                    "CERTIFICATES"

                </p>
            </div>
        </div>
        <div class="container mt-5" data-aos="zoom-in" data-aos-duration="800" data-aos-easing="ease-in-out">
            <div class="row pb-5 mb-4">
                <div class="col-lg-4 col-md-4 mb-4 mb-lg-0 " style="overflow: hidden; " data-aos="fade-up-right"
                    data-aos-duration="2500">
                    <!-- Card-->
                    <div class="card shadow-sm border-0 rounded">
                        <div class="card-body img-hover-zoom  p-0"><img src="/img/coursera.png" alt=""
                                class="card-img-top">
                            <div class="p-4">
                                <h5 class="mb-0">Managing Big Data with <br> MySQL</h5>


                                <a class="btn btn-primary mt-3" href="#" role="button">View Certificate</a>
                            </div>
                        </div>




                    </div>

                </div>

                <div class="col-lg-4 col-md-4 mb-4 mb-lg-0" data-aos="zoom-in-up" data-aos-duration="2500">
                    <!-- Card-->
                    <div class="card shadow-sm border-0 rounded">
                        <div class="card-body img-hover-zoom p-0"><img src="/img/google.png" alt=""
                                class=" card-img-top">
                            <div class="p-4">
                                <h5 class="mb-0">The Fundamentals Of Digital Marketing</h5>
                                {{-- <p class="small text-muted">CEO - Consultant</p> --}}
                                <a class="btn btn-primary mt-3" href="#" role="button">View Certificate</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 mb-4 mb-lg-0" data-aos="fade-up-left" data-aos-duration="2500">
                    <!-- Card-->
                    <div class="card shadow-sm border-0 rounded">
                        <div class="card-body img-hover-zoom p-0"><img src="/img/aws.jpg" alt=""
                                class="w-100 card-img-top">
                            <div class="p-4">
                                <h5 class="mb-0">AWS Badges</h5>
                                <br>

                                <a class="btn btn-primary mt-3" href="#" role="button">View Certificate</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div id="more">
                <div class="row">
                    <div class="col-lg-4 col-md-4 mb-4 mb-lg-0" data-aos="fade-up-right" data-aos-duration="2500">
                        <!-- Card-->
                        <div class="card shadow-sm border-0 rounded">
                            <div class="card-body img-hover-zoom p-0"><img src="/img/udemy.png" alt=""
                                    class="w-100 card-img-top">
                                <div class="p-4">
                                    <h5 class="mb-0">Web Development</h5>
                                    <br>
                                    <a class="btn btn-primary mt-3" href="#" role="button">View Certificate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 mb-4 mb-lg-0" data-aos="zoom-in-up" data-aos-duration="2500">
                        <!-- Card-->
                        <div class="card shadow-sm border-0 rounded">
                            <div class="card-body img-hover-zoom p-0"><img src="/img/udemy.png" alt=""
                                    class="w-100 card-img-top">
                                <div class="p-4">
                                    <h5 class="mb-0">C++ <br> Tutorials</h5>

                                    <a class="btn btn-primary mt-3" href="#" role="button">View Certificate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 mb-4 mb-lg-0" data-aos="fade-up-left" data-aos-duration="2500">
                        <!-- Card-->
                        <div class="card shadow-sm border-0 rounded">
                            <div class="card-body img-hover-zoom p-0"><img src="/img/coursera.png" alt=""
                                    class="w-100 card-img-top">
                                <div class="p-4">
                                    <h5 class="mb-0">Tutorials AWS Fundamentals: Going Cloud-Native</h5>

                                    <a class="btn btn-primary mt-3" href="#" role="button">View Certificate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-4 mb-4 mb-lg-0 mt-5" data-aos="fade-up-right" data-aos-duration="2500">
                        <!-- Card-->
                        <div class="card shadow-sm border-0 rounded">
                            <div class="card-body img-hover-zoom img-hover-zoom--quick-zoom  p-0"><img
                                    src="/img/ion.gif" alt="" class="w-100 card-img-top">
                                <div class="p-4">
                                    <h5 class="mb-0">Career Edge - Knockdown the Lockdown</h5>

                                    <a class="btn btn-primary mt-3" href="#" role="button">View Certificate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 mb-4 mb-lg-0 mt-5" data-aos="zoom-in-up" data-aos-duration="2500">
                        <!-- Card-->
                        <div class="card shadow-sm border-0 rounded">
                            <div class="card-body img-hover-zoom p-0"><a href="#"><img src="/img/udacity.png" alt=""
                                        class="w-100 card-img-top"></a>
                                <div class="p-4">
                                    <h5 class="mb-0">Version Control <br> with Git</h5>

                                    <a class="btn btn-primary mt-3" href="#" role="button">View Course</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-12 col-sm-12 col-12 justify-content-center">
                <p class="text-center details-view my-5">
                    <button class="button white" onclick="myFunction()" style="background:#ef4f4f;"
                        data-hover="click me!">
                        <div id="myBtn">View More!</div>

                </p>
            </div>
        </div>
        <br>


    </section>
{{-- CONTACT ME --}}
    <section data-section="7" id="contact" style="background: black;">


        <div class="container">
            <div class="text-center" data-aos="zoom-in-up" data-aos-duration="800" data-aos-easing="ease-in-out">
                <br>
                <br>
                <h2 style="font-weight:900; font-size:55px;" class="white"> <span class="or">CONTACT ME</span></h2>
                <p style="width:50%; margin:auto;" class="mt-3 white">
                    GET IN TOUCH</p>
            </div>
        </div>

        <div class="container mt-5 mb">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-12 white " data-aos="fade-up-right" data-aos-duration="2000">
                    <div class="row grey" style=" padding:7px 0px;">
                        <div class="col-md-2 col-sm-2">
                            <i style="background:orange; padding:25px;" class="fas fa-envelope-open-text white"></i>
                        </div>
                        <div class="col-md-10 col-sm-10">
                            <p class="mt-3" style="color:black;">
                                <a style="color:black;" class=""
                                    href="mailto:piyushkanadje@gmail.com">piyushkanadje@gmail.com</a>
                            </p>
                        </div>
                    </div>
                    <div class="row mt-5 grey" style=" padding:7px 0px;">
                        <div class="col-md-2 col-sm-2">
                            <i style="background:orange; padding:25px;" class="fas fa-map-marker-alt white"></i>
                        </div>
                        <div class="col-md-10 col-sm-10">
                            <p class="mt-3 " style="color:black;">
                                Dwarka Nagar Near Palana Ghar,<br>
                                Buldana.
                            </p>
                        </div>
                    </div>
                    <div class="row mt-5 grey" style=" padding:7px 0px;">
                        <div class="col-md-2 col-sm-2">
                            <i style="background:orange; padding:25px;" class="fas fa-phone-alt white"></i>
                        </div>
                        <div class="col-md-10 col-sm-10">
                            <p class="mt-3" style="color:black;">
                                <a style="color:black;" class="" href="tel:7767897918">7767897918</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 col-sm-12 col-12">

                </div>
                <div class="col-md-6 col-sm-12 col-12 grey  " style="" data-aos="fade-up-left" data-aos-duration="2000">

                    <form action="" method="post">
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="form-group mt-4">

                                {{-- <input type="text" name="mobileno"  value="{{Auth::user()->mobile }}"  class="form-control input inputbg" id="" aria-describedby=""
                                    placeholder="Enter Mobile"> --}}
                                <input type="text" name="name" class="form-control input inputbg" id=""
                                    aria-describedby="" placeholder="NAME">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="form-group ">
                                {{-- <input type="text" name="mobileno"  value="{{Auth::user()->mobile }}"  class="form-control input inputbg" id="" aria-describedby=""
                                    placeholder="Enter Mobile"> --}}
                                <input type="email" name="email" class="form-control input inputbg w-100" id=""
                                    aria-describedby="" placeholder="EMAIL">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="form-group">

                                {{-- <input type="text" name="mobileno"  value="{{Auth::user()->mobile }}"  class="form-control input inputbg" id="" aria-describedby=""
                                    placeholder="Enter Mobile"> --}}
                                <input type="text" name="subject" class="form-control input inputbg w-100" id=""
                                    aria-describedby="" placeholder="SUBJECT">
                                @error('subject')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="form-group">

                                <textarea name="message" style="width:100%; height:60px; resize:none;" id=""
                                    class="input-text inputbg" placeholder="Message"></textarea>
                                @error('message')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="justify-content-center col-md-12 col-sm-12">

                            <p class="text-center">
                                <button class="btn btn-danger">SEND MESSAGE</button>
                            </p>

                        </div>

                    </form>

                </div>
            </div>
            <br>

            <br>
            <br>
            <br>

    </section>



    <script>
        AOS.init();

    </script>
    <script>
        var navActive = function(section) {

            var $el = $('#navbar > ul');
            $el.find('li').removeClass('active');
            $el.each(function() {
                $(this).find('a[data-nav-section="' + section + '"]').closest('li').addClass('active');
            });

        };

        var navigationSection = function() {

            var $section = $('section[data-section]');

            $section.waypoint(function(direction) {

                if (direction === 'down') {
                    navActive($(this.element).data('section'));
                }
            }, {
                offset: '150px'
            });

            $section.waypoint(function(direction) {
                if (direction === 'up') {
                    navActive($(this.element).data('section'));
                }
            }, {
                offset: function() {
                    return -$(this.element).height() + 155;
                }
            });

        };

    </script>
    {{-- <script>
        const section = document.querySelectorAll('section');
        const bubble = document.querySelector('.bubble');
        const gradients = [
            "  linear-gradient(to right, #ec6f66, #f3a183)"
        ];

        const options = {
            threshold: 0.7

        }



        let observer = new IntersectionObserver(navCheck, options);

        function navCheck(entries) {

            entries.forEach(entry => {
                const className = entry.target.className;
                console.log(className);
                const activeAnchor = document.querySelector('[data-page=${className}]');
                const gradientIndex = entry.target.getAttribute('data-index');
                const coords activeAnchor.getBoundingClientRect();
                const directions = {
                    height: coords.height,
                    width: coords.width,
                    top: coords.top,
                    left: coords.left
                };
                if (entry.isIntersectnig) {
                    bubble.style.setProperty('height', '${directions.height}px');
                    bubble.style.setProperty('top', '${directions.top}px');
                    bubble.style.setProperty('width', '${directions.width}px');
                    bubble.style.setProperty('left', '${directions.left}px');

                }

            });
        }

        section.forEach(section => {

            observer.observe(section);

        })

    </script> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).on('click', ' ul li ', function() {
            console.log('hi');
            $(this).addClass('active').siblings().removeClass('active');
        })


        function myFunction() {
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (moreText.style.display === "none") {
                btnText.innerHTML = "View Less!";
                moreText.style.display = "block";
                console.log('greater');

            } else {
                btnText.innerHTML = "View More!";
                moreText.style.display = "none";
                console.log('style none');
            }
        }

    </script>
    <script>
        var typed = new Typed('.typed2', {
            strings: [
                "Developer.",
                "Student.",
                "Designer."
            ],
            typeSpeed: 50,
            backSpeed: 50,
            loop: true


        });

    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="/js/app.js"></script>
</body>

</html>
