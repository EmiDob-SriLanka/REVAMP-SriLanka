@extends('site.index') @section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REVAMP SriLanka</title>
    <!-- uncomment after add header -->
    <link href="../images/favicon.png" rel="shortcut icon" type="image/png" />
    <!-- <link href="http://liin.lk/assets/css/style.css?v=2.0" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/header.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/ycodetech/horizontal-timeline-2.0@2/css/horizontal_timeline.2.0.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/gh/ycodetech/horizontal-timeline-2.0@2/JavaScript/horizontal_timeline.2.0.min.js"></script>
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <div class="container-fluid " style="height:100vh">
        <!-- animation -->
        <div class="area">
            <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <!-- end of animation -->

        <!-- top navigation pane -->
        <div class="container navigator fixed-top">
            <div class="navigation">
                <ul>
                    <li>
                        <a href="https://liin.lk/"> <img src="{{ asset('/images/linnLogo.png') }}" alt="Revamp LOGO" width="50%"></a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a class="nav-link page-scroll" href="#testimonials">Mentors</a>
                    </li>
                    <li>
                        <a class="nav-link page-scroll" href="#guidelines">Guideline</a>
                    </li>
                    <li>
                        <a class="nav-link page-scroll" href="#timeline">Timeline</a>
                    </li>
                    <li>
                        <a class="nav-link page-scroll" href="#prizes">Prizes</a>
                    </li>
                    <li>
                        <a class="nav-link page-scroll" href="#partners">Partners</a>
                    </li>
                    <li>
                        <a class="nav-link page-scroll" href="#contact">Contact Info</a>
                    </li>
                </ul>
            </div>
        </div><!-- end of top navigation -->

        <!-- body top -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="{{ asset('/images/Logo.png') }}" class="title-desktop " alt="" style="width: 100%; margin-top: 20%;">
                    <div class="title-mobile">
                        <img class="image-top" src="{{ asset('/images/Logo_mobile_top.png') }}" alt="">
                        <img class="image-bottom" src="{{ asset('/images/Logo_mobile_bottom.png') }}" alt="">
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of landing top -->

    <!-- Main Middle Content -->
    <div class="container-fluid middle" id="middle">
        <h2 class="middle-web">REVAMP SRI LANKA</h2>
        <div class="middle-mobile">
            <h2>REVAMP </h2>
            <h2>SRI LANKA</h2>
        </div>
        <div class="container">
            <div class="middle-content">
                <p>
                    Youth Startup Challenge 1.0 has been created to get outstanding business ideas
                    off
                    the ground by connecting the young entrepreneurs in universities with industry leaders, investors,
                    and
                    experienced mentors. Undoubtedly, the remarkable business ideas in the minds of the youngsters may
                    impact on the economic re-stabilization of the country. <br> <br>
                    In the contest, the whittled down entrepreneurs with top business ideas will get the opportunity to
                    pitch before a live panel and to win grand cash prizes. Nevertheless, the foremost opportunity for
                    the
                    entrepreneurs is to 'win' an investment from an industry giant. <br> <br>
                    Lanka Impact Investing Network, Eastern University of Sri Lanka, and World University Service of
                    Canada
                    (WUSC) have collaborated for this project and funded by the Government of Canada (GAC). <br>

                </p>
            </div>
        </div>
    </div>
    <!--end of Main Middle Content -->

    <!-- Testimonials -->
    <div class="container-fluid">
        <h2 class="testimonial-heading">Mentors</h2>
        <div class="slider-1" id="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <!-- Card Slider -->
                        <div class="slider-container">
                            <div class="swiper-container card-slider">
                                <div class="swiper-wrapper">

                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="{{ asset('/images/Suranjith-Swaris.jpeg') }}"
                                                alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-author">Mr. Suranjith Swaris</p>
                                                <p class="testimonial-text">Head of Sales & Marketing <br> Bluetown Sri
                                                    Lanka <br>
                                                    Former President - SLIM</p>
                                            </div>
                                        </div>
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->

                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="{{ asset('/images/Dr.-Nirmal-De-Silva.jpeg') }}"
                                                alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-author">Dr. Nirmal de Silva</p>
                                                <p class="testimonial-text">Co-Founder and CEO <br> Paramount Realty
                                                    <br>
                                                    Multi-award-winning Business Professional
                                                </p>
                                            </div>
                                        </div>
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->

                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="{{ asset('/images/Rizvi-Zaheed.jpeg') }}" alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-author">Mr. Rizvi Zaheed</p>
                                                <p class="testimonial-text">Director Vidullanka PLC <br>
                                                    Former Managing Director Hayleys Agriculture</p>
                                            </div>
                                        </div>
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->

                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="{{ asset('/images/Thivanka-Pathirana.jpg') }}"
                                                alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-author">Dr. Thivanka Pathirana</p>
                                                <p class="testimonial-text">Senior Lecturer for Sustainable Tourism
                                                    Management
                                                    <br> Edith Cowan University
                                                </p>
                                            </div>
                                        </div>
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->

                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="{{ asset('/images/Suresh-de-Mel.jpg') }}" alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-author">Mr. Suresh de Mel</p>
                                                <p class="testimonial-text">Chairman and Chief Executive <br> Sri Lanka
                                                    Export
                                                    Development Board</p>
                                            </div>
                                        </div>
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->

                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="{{ asset('/images/Mr.-Upul-Dharanagama.jpg') }}"
                                                alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-author">Mr. Upul Daranagama</p>
                                                <p class="testimonial-text">Chairman <br> Horizon Campus, Malabe</p>
                                            </div>
                                        </div>
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->
                                </div> <!-- end of swiper-wrapper -->

                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <!-- end of add arrows -->

                            </div> <!-- end of swiper-container -->
                        </div> <!-- end of slider-container -->
                        <!-- end of card slider -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of slider-1 -->
        <!-- end of testimonials -->
    </div>

    <!-- Guideline Content -->
    <div class="container-fluid guidelines" id="guidelines">
        <div class="guidelines-header ">
            <h2>Guidelines</h2>
        </div>
        <div class="container">
            <div class="guidelines-content">
                <ul>
                    <li>
                        <p>All participants should be undergraduates / HND followers who study or reside in Eastern &
                            Northern
                            Provinces.</p>
                    </li>
                    <li>
                        <p>
                            Participants can enter the contest individually or with a maximum of 5 member teams
                            representing the
                            same University or Higher Education Institute. However, the individuals will also be
                            considered and
                            treated as a team.
                        </p>
                    </li>
                    <li>
                        <p>
                            Each team needs to have a name and logo to represent them in the contest.
                        </p>
                    </li>
                    <li>
                        <p>
                            The business ideas must be unique and innovative.
                        </p>
                    </li>
                    <li>
                        <p>
                            The business ideas should be presented in a form of a ‘Concept Note’ that adheres to the
                            format and
                            guidelines providing in the upcoming introductory session.
                        </p>
                    </li>
                    <li>
                        <p>
                            After the concept note is submitted, the basic idea cannot be changed, however, the final
                            Business
                            Development Plan may include new advancements.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end of Guideline Content -->

    <!-- timeline Web View-->
    <div class="container-fluid">
        <div class="timeline-header">
            <h2>Timeline</h2>
        </div>
        <div class="container h-timeline" id="timeline">
            <div class="horizontal-timeline" id="example">
                <div class="events-content">
                    <ol>
                        <!-- section 01 -->
                        <li class="selected"
                            data-horizontal-timeline='{"date": "16/03/2015", "customDisplay": "Introductory Webinar"}'>
                            Fill out the team details on the registration form once registration is available. Only
                            the registered teams will be included to the introductory webinar. <br> <br>
                            <i class="fas fa-calendar"></i>
                            <strong>
                                Deadline: xx/xx/xxxx
                                <!-- deadline date will go here -->
                            </strong>
                            <br>
                            <a class="btn-solid-lg" href="#your-link">Register Now</a> <br>
                            <!-- register link will goes here -->
                            Introductory Webinar will be done by Mr. Suranjith Swaris. He is the Head of Sales &
                            Marketing of Bluetown Sri Lanka and Former President of Sri Lanka Institute of
                            Marketing (SLIM).
                            The webinar will cover an introduction to the Startup Challenge, specific areas of
                            focus and guidance for the expected Concept Note + Video Clip.
                            <br>
                            <br>
                            <i class="fas fa-calendar"></i> xx/xx/xxxx <br> <br>
                            <!-- date will go here -->
                            <i class="fa fa-laptop" aria-hidden="true"></i> <strong>Zoom Link</strong> <br>
                            <!-- zoom link will go here -->

                        </li>
                        <!-- section 02 -->
                        <li data-horizontal-timeline='{"date": "23/04/2016", "customDisplay": "Submit Concept Note"}'>
                            The interested contestants with maximum 5 member teams need to submit the
                            Concept Note + Video Clip for their startups / business ideas following the guidance.
                            Duly submitted Concept Notes and Videos will be screened by a professional panel. <br> <br>
                            <i class="fas fa-calendar"></i>
                            <strong>
                                Deadline: xx/xx/xxxx
                                <!-- deadline date will go here -->
                            </strong>
                            <br>
                            <a class="btn-solid-lg" href="#your-link">Submit Concept Note</a> <br>
                            <!-- submit link will goes here -->
                        </li>
                        <!-- section 03 -->
                        <li data-horizontal-timeline='{"date": "23/05/2015", "customDisplay": "Mentoring Sessions"}'>
                            All the whittled-down teams from the 'Concept Note Screening' will be included to
                            the mentoring sessions relevant to the area of focus. They will provide the necessary
                            direction to the entrepreneurs to set-up the startup / business idea to a feasible and
                            scalable level while also providing guidance on 'Business Development Plan’.
                            <br>
                            <br>
                            <i class="fas fa-calendar"></i> xx/xx/xxxx <br><br>
                            <!-- date will go here -->
                            <i class="fa fa-map-marker" aria-hidden="true"></i> <strong>Eastern University</strong>
                            <br><br>
                            <!-- location will go here -->
                            Common Session on Business Plan (Physical) - Mr. Suranjith Swaris
                            <br>
                            <br>
                            <i class="fas fa-calendar"></i> xx/xx/xxxx <br><br>
                            <!-- date will go here -->
                            <i class="fa fa-globe" aria-hidden="true"></i> <strong>Zoom Link</strong> <br><br>
                            <!-- location will go here -->
                            Energy (Online) - Rizvi Zaheed
                            <br>
                            <br>
                            <i class="fas fa-calendar"></i> xx/xx/xxxx <br><br>
                            <!-- date will go here -->
                            <i class="fa fa-globe" aria-hidden="true"></i> <strong>Zoom Link</strong> <br><br>
                            <!-- location will go here -->
                            Agriculture (Online) - Rizvi Zaheed
                            <br>
                            <br>
                            <i class="fas fa-calendar"></i> xx/xx/xxxx <br><br>
                            <!-- date will go here -->
                            <i class="fa fa-globe" aria-hidden="true"></i> <strong>Zoom Link</strong> <br><br>
                            <!-- location will go here -->
                            Tourism (Online) - Dr. Thivanka Pathirana
                            <br>
                            <br>
                            <i class="fas fa-calendar"></i> xx/xx/xxxx <br><br>
                            <!-- date will go here -->
                            <i class="fa fa-globe" aria-hidden="true"></i> <strong>Zoom Link</strong> <br><br>
                            <!-- location will go here -->
                            Export Oriented Manufacturing (Online) - Suresh de Mel
                            <br>
                            <br>
                            <i class="fas fa-calendar"></i> xx/xx/xxxx <br><br>
                            <!-- date will go here -->
                            <i class="fa fa-globe" aria-hidden="true"></i> <strong>Zoom Link</strong> <br><br>
                            <!-- location will go here -->
                            Promote Social Mobility (Online) - Mr. Upul Daranagama
                            <br>
                        </li>
                        <!-- section 04 -->
                        <li data-horizontal-timeline='{"date": "23/06/2017", "customDisplay": "Submit Business Plan"}'>
                            Each team needs to submit the Business Development Plan following the guidance
                            provided in ‘Common Session on Business Plan’. Those will be screened by a
                            professional panel. <br> <br>
                            <i class="fas fa-calendar"></i>
                            <strong>
                                Deadline: xx/xx/xxxx
                                <!-- deadline date will go here -->
                            </strong>
                            <br>

                            <a class="btn-solid-lg" href="#your-link">Submit Business Development Plan</a> <br>
                            <!-- submit link will goes here -->
                        </li>
                        <!-- section 05 -->
                        <li data-horizontal-timeline='{"date": "23/07/2018", "customDisplay": "Grand Finale"}'>
                            <div>
                                All the teams who submitted 'Business Development Plan' successfully will be
                                given the opportunity to enter the final platform of the <strong>REVAMP SRI
                                    LANKA.</strong>
                                <br> <br>
                                The contestants will be given 5-7 minutes to pitch their startup or business idea
                                before a panel of industry giants. <br> <br>
                                The audience consists of undergraduates will be given the opportunity to vote
                                real-time for the contestants. <br> <br>
                                At the end, the cash prizes will be there for winner, 1st runner-up, 2nd runner up
                                which were selected by the judge panel.
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- script to active timeline -->
    <script>
        $('#example').horizontalTimeline(
            {
                useScrollWheel: true,

            });
    </script>
    <!-- end of timeline Web View -->

    <!-- timeline mobile view -->
    <div class="tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="tabs-container">

                        <!-- Tabs Links -->
                        <ul class="nav nav-tabs" id="revoTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab"
                                    aria-controls="tab-1" aria-selected="true">Introductory Webinar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab"
                                    aria-controls="tab-2" aria-selected="false">Submit Concept Note</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab"
                                    aria-controls="tab-3" aria-selected="false">Mentoring Sessions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-4" role="tab"
                                    aria-controls="tab-3" aria-selected="false">Submit Business Plan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-5" role="tab"
                                    aria-controls="tab-3" aria-selected="false">Grand Finale</a>
                            </li>
                        </ul>
                        <!-- end of tabs links -->

                        <!-- Tabs Content -->
                        <div class="tab-content" id="revoTabsContent">

                            <!-- Tab -->
                            <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                                <h4>Introductory Webinar</h4>
                                <div class="container tab-content">
                                    Fill out the team details on the registration form once registration is available.
                                    Only
                                    the registered teams will be included to the introductory webinar. <br> <br>
                                    <i class="fas fa-calendar"></i>
                                    <strong>
                                        Deadline: xx/xx/xxxx
                                        <!-- deadline date will go here -->
                                    </strong>
                                    <br>
                                    <a class="btn-solid-lg" href="#your-link">Register Now</a> <br> <br>
                                    <!-- register link will goes here -->
                                    Introductory Webinar will be done by Mr. Suranjith Swaris. He is the Head of Sales &
                                    Marketing of Bluetown Sri Lanka and Former President of Sri Lanka Institute of
                                    Marketing (SLIM).
                                    The webinar will cover an introduction to the Startup Challenge, specific areas of
                                    focus and guidance for the expected Concept Note + Video Clip.
                                    <br> <br>
                                    <i class="fas fa-calendar"></i> xx/xx/xxxx <br>
                                    <!-- date will go here -->
                                    <i class="fa fa-laptop" aria-hidden="true"></i> <strong>Zoom Link</strong>
                                    <!-- zoom link will go here -->
                                </div>
                            </div> <!-- end of tab-pane -->
                            <!-- end of tab -->

                            <!-- Tab -->
                            <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                                <h4>Submit Concept Note</h4>
                                <div class="container tab-content">
                                    The interested contestants with maximum 5 member teams need to submit the
                                    Concept Note + Video Clip for their startups / business ideas following the
                                    guidance.
                                    Duly submitted Concept Notes and Videos will be screened by a professional panel.
                                    <br> <br>
                                    <i class="fas fa-calendar"></i>
                                    <strong>
                                        Deadline: xx/xx/xxxx
                                        <!-- deadline date will go here -->
                                    </strong>
                                    <br>
                                    <a class="btn-solid-lg" href="#your-link">Submit Concept Note</a> <br>
                                    <!-- submit link will goes here -->
                                </div>
                            </div> <!-- end of tab-pane -->
                            <!-- end of tab -->

                            <!-- Tab -->
                            <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                                <h4>Mentoring Sessions</h4>
                                <div class="container tab-content mentoring">
                                    All the whittled-down teams from the 'Concept Note Screening' will be included to
                                    the mentoring sessions relevant to the area of focus. They will provide the
                                    necessary
                                    direction to the entrepreneurs to set-up the startup / business idea to a feasible
                                    and
                                    scalable level while also providing guidance on 'Business Development Plan’.
                                    <br>
                                    <br>
                                    <i class="fas fa-calendar"></i> xx/xx/xxxx <br>
                                    <!-- date will go here -->
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> <strong>Eastern
                                        University</strong> <br>
                                    <!-- location will go here -->
                                    Common Session on Business Plan (Physical) - Mr. Suranjith Swaris
                                    <br>
                                    <br>
                                    <i class="fas fa-calendar"></i> xx/xx/xxxx <br>
                                    <!-- date will go here -->
                                    <i class="fa fa-globe" aria-hidden="true"></i> <strong>Zoom Link</strong> <br>
                                    <!-- location will go here -->
                                    Energy (Online) - Rizvi Zaheed
                                    <br>
                                    <br>
                                    <i class="fas fa-calendar"></i> xx/xx/xxxx <br>
                                    <!-- date will go here -->
                                    <i class="fa fa-globe" aria-hidden="true"></i> <strong>Zoom Link</strong> <br>
                                    <!-- location will go here -->
                                    Agriculture (Online) - Rizvi Zaheed
                                    <br>
                                    <br>
                                    <i class="fas fa-calendar"></i> xx/xx/xxxx <br>
                                    <!-- date will go here -->
                                    <i class="fa fa-globe" aria-hidden="true"></i> <strong>Zoom Link</strong> <br>
                                    <!-- location will go here -->
                                    Tourism (Online) - Dr. Thivanka Pathirana
                                    <br>
                                    <br>
                                    <i class="fas fa-calendar"></i> xx/xx/xxxx <br>
                                    <!-- date will go here -->
                                    <i class="fa fa-globe" aria-hidden="true"></i> <strong>Zoom Link</strong> <br>
                                    <!-- location will go here -->
                                    Export Oriented Manufacturing (Online) - Suresh de Mel
                                    <br>
                                    <br>
                                    <i class="fas fa-calendar"></i> xx/xx/xxxx <br>
                                    <!-- date will go here -->
                                    <i class="fa fa-globe" aria-hidden="true"></i> <strong>Zoom Link</strong> <br>
                                    <!-- location will go here -->
                                    Promote Social Mobility (Online) - Mr. Upul Daranagama
                                    <br>
                                </div>
                            </div> <!-- end of tab-pane -->
                            <!-- end of tab -->
                            <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab-4">
                                <h4>Submit Business Plan</h4>
                                <div class="container tab-content">
                                    Each team needs to submit the Business Development Plan following the guidance
                                    provided in ‘Common Session on Business Plan’. Those will be screened by a
                                    professional panel. <br> <br>
                                    <i class="fas fa-calendar"></i>
                                    <strong>
                                        Deadline: xx/xx/xxxx
                                        <!-- deadline date will go here -->
                                    </strong>
                                    <br>

                                    <a class="btn-solid-lg" href="#your-link">Submit Business Plan</a> <br>
                                    <!-- submit link will goes here -->
                                </div>
                            </div> <!-- end of tab-pane -->
                            <!-- end of tab -->
                            <div class="tab-pane fade" id="tab-5" role="tabpanel" aria-labelledby="tab-5">
                                <h4>Grand Finale</h4>
                                <div class="container tab-content">
                                    <ul>
                                        <li>
                                            All the teams who submitted 'Business Development Plan' successfully will be
                                            given the opportunity to enter the final platform of the <strong>REVAMP SRI
                                                LANKA.</strong>
                                        </li>
                                        <li>
                                            The contestants will be given 5-7 minutes to pitch their startup or business
                                            idea
                                            before a panel of industry giants.
                                        </li>
                                        <li>
                                            The audience consists of undergraduates will be given the opportunity to
                                            vote
                                            real-time for the contestants.
                                        </li>
                                        <li>
                                            At the end, the cash prizes will be there for winner, 1st runner-up, 2nd
                                            runner up
                                            which were selected by the judge panel.
                                        </li>
                                    </ul>
                                </div>
                            </div> <!-- end of tab-pane -->
                            <!-- end of tab -->

                        </div> <!-- end of tab-content -->
                        <!-- end of tabs content -->

                    </div> <!-- end of tabs-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of tabs -->
    <!-- end of timeline mobile view -->




    <!-- prizes -->
    <div id="prizes" class="cards-1 bg-dark-blue prizes" id="prizes">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Winners will get</h2>
                    <p class="p-heading">Win amazing cash prizes from <strong> REVAMP SriLanka</strong>!!!</p>
                </div> <!-- end of div -->
            </div> <!-- end of row -->
            <div class="row prizes-flex prizes-web">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card runners-up">
                        <div class="card-image">
                            <img src="{{ asset('/images/secondPlace.png') }}" alt="" width="70%">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">1st Runner Up</h5>
                            <p>LKR 125,000</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card winner">
                        <div class="card-image">
                            <img src="{{ asset('/images/firstPlace.png') }}" alt="" width="100%">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Winner</h5>
                            <p>LKR 175,000</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card runners-up">
                        <div class="card-image">
                            <img src="{{ asset('/images/thirdPlace.png') }}" alt="" width="70%">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">2nd Runner Up </h5>
                            <p>LKR 100,000</p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->

            <!-- prizes mobile view -->
            <div class="row prizes-flex-mobile">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card winner">
                        <div class="card-image">
                            <img src="{{ asset('/images/firstPlace.png') }}" alt="" width="100%">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Winner</h5>
                            <p>LKR 175,000</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card runners-up">
                        <div class="card-image">
                            <img src="{{ asset('/images/secondPlace.png') }}" alt="" width="70%">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">1st Runner Up</h5>
                            <p>LKR 125,000</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card runners-up">
                        <div class="card-image">
                            <img src="{{ asset('/images/thirdPlace.png') }}" alt="" width="70%">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">2nd Runner Up </h5>
                            <p>LKR 100,000</p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of features -->

    <!-- Sponsors Logos -->
    <div class="container-fluid" id="partners">
        <div class="container sponsors">
            <h2>Our Partners</h2>
            <hr style="width: 80%;">
            <div class="logos-flex partners">
                <div class="sponsors-card">
                    <div class="image-container">
                        <img src="{{ asset('/images/GAC_logo.png') }}" alt="World University Service of Canada">
                    </div>
                    <h3>Global Affairs Canada</h3> <!-- sponsor name -->
                </div>
                <div class="sponsors-card">
                    <div class="image-container">
                        <img src="{{ asset('/images/WUSC-Logo-Horizontal.png') }}" alt="World University Service of Canada">
                    </div>
                    <h3>World University Service of Canada</h3> <!-- sponsor name -->
                </div>
                <div class="sponsors-card">
                    <div class="image-container">
                        <img src="{{ asset('/images/EasternUniversity.png') }}" alt="Eastern University">
                    </div>
                    <h3>Eastern University, Sri Lanka</h3> <!-- sponsor name -->
                </div>
            </div>
        </div>
    </div><!-- end of sponsor logos -->

    <!-- Footer -->
    <div class="footer" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first">
                        <h6>Contact LINN</h6>
                        <p class="p-small">NO: 209/10-1/1, Dr. Colvin R. De Silva Mawatha, Colombo 02, 10350 Sri Lanka.
                            <br> 0777310500
                            <br> accounts@liin.lk
                        </p>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col second">
                        <h6>Contact Eastern University</h6>
                        <p class="p-small">Eastern University, Sri Lanka, Vantharumoolai, Chenkalady. <br> +94xxxxxxxxx
                            <br> xxxxxx@esn.ac.lk
                        </p>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col third">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <p class="p-small">We would love to hear from you <strong>Contact us Today</strong>
                            <!-- <a href="mailto:contact@website.com"><strong>contact@website.com</strong></a> -->
                        </p>
                    </div> <!-- end of footer-col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <hr>
                <div class="col-lg-12">
                    <p class="p-small">Copyright © <a href="https://liin.lk/">LIIN</a></p>
                </div> <!-- end of col -->
                <div class="col-lg-12">
                    <p class="p-small">Designed By <a href="" target="_blank">emiDob</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->

    <!-- Scripts -->
    <script src="../js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="../js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="../js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="../js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="../js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="../js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>