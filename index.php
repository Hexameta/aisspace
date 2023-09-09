<!DOCTYPE html>
<html lang="zxx">
<?php
include 'backend/admin/includes/conn.php';

$result = mysqli_query($conn, "SELECT * FROM main_page");
//create an array
$techarray = array();
while ($row = mysqli_fetch_assoc($result)) {
    $techarray[$row["title"]] = $row["content"];
}
?>

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="AIS Space" /> <!-- website name -->
    <meta property="og:site" content="http://www.aisspace.com/" /> <!-- website link -->
    <meta property="og:title" content="AIS Space" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="AIS SPACE is an incubation space of Al Ameen College, Edathala" />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" itemprop="image" content="assets/images/logo.jpg" />
    <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article"   />

    <!--====== Title ======-->
    <title>AIS SPACE</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!--====== Google Fonts ======-->
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700&amp;family=Oswald:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <!--====== Font Awesome ======-->
    <link rel="stylesheet" href="assets/css/font-awesome-5.9.0.css">
    <!--====== Bootstrap ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--====== Magnific Popup ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--====== Falticon ======-->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!--====== Animate ======-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--====== Slick ======-->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!--====== Main Style ======-->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div class="page-wrapper">

        <!-- main header -->
        <header class="main-header header-three text-white">


            <!--Header-Upper-->
            <div class="header-upper">
                <div class="container clearfix">

                    <div class="header-inner d-flex align-items-center">
                        <div class="logo-outer">
                            <div class="logo">
                                <a href="index.php"><img src="assets/images/logos/logo.png" width="500px" alt="Logo"
                                        title="Logo"></a>
                            </div>
                        </div>

                        <div class="nav-outer clearfix d-flex align-items-center">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <div class="mobile-logo py-15">
                                        <a href="index.php">
                                            <img src="assets/images/logos/logo.png" alt="Logo" title="Logo">
                                        </a>
                                    </div>

                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation onepage clearfix">
                                        <li><a href="#home">Home</a></li>
                                        <li><a href="#about">about</a></li>
                                        <li><a href="#companies">companies</a></li>
                                        <li><a href="#objectives">objectives</a></li>
                                        <li><a href="#news">news</a></li>
                                        <li><a href="#contact">contact</a></li>
                                    </ul>
                                </div>

                            </nav>
                        </div>
                    </div>
                </div>
                <!--End Header Upper-->
        </header>


        <!-- Hero Section Start -->
        <section class="hero-section-two overlay bgs-cover pt-40 rpt-80" id="home"
            style="background-image: url(assets/images/hero/hero-three.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 col-sm-11">
                        <div class="hero-content text-white py-220 rpy-120">
                            <h1 class="wow fadeInUp delay-0-4s mt-20">AIS SPACE</h1>
                            <span class="sub-title d-block wow fadeInUp delay-0-2s text-uppercase">Ameenian Incubation
                                and Startup Initiative Foundation</span>
                            <div class="hero-btns mt-35 wow fadeInUp delay-0-6s scroll-to-target"
                                data-target="#contact">
                                <a href="#contact" class="theme-btn mr-25">meet with us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- Hero Section End -->

        <!-- Events Section Start -->
        <?php
        $query = "SELECT * FROM newsfeed WHERE news_event = 2 and n_status=1 ORDER BY id DESC";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            ?>
            <div class="mb-2 mt-60 pt-2">
                <h2 class="text-center text-dark">Events</h2>
                <div class="logo-carousel-wrap py-20">
                    <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($result)) {
                        $img = $row['n_image'];
                        $i++;
                        ?>
                        <div role="button"
                            class="card cursor-pointer shadow-sm p-1 m-1 br-10 wow fadeInUp delay-0-<?php echo $i ?>s"
                            data-toggle="modal" style="width:300px"
                            onclick='setModalData("Event","assets/images/news/<?php echo $row["n_image"] ?>","<?php echo $row["n_title"] ?>","<?php echo $row["n_date"] ?>","<?php echo $row["n_desc"] ?>")'
                            data-target="#edit">
                            <img src="assets/images/news/<?php echo $row["n_image"] ?>" class="card-img-top" alt="..."
                                height="120px" width="300px" style="object-fit: cover;">
                            <div class="card-body text-left">
                                <span class=" badge rounded-pill bg-primary text-light mb-2 p-2">
                                    <i class="fas fa-calendar-alt text-light me-2" aria-hidden="true"></i>
                                    <?php echo date("d", strtotime($row["n_date"])) ?><sup>
                                        <?php echo dateSup(date("d", strtotime($row["n_date"]))) ?>
                                    </sup>
                                    <?php echo date("M", strtotime($row["n_date"])) ?>
                                    <?php echo date("Y", strtotime($row["n_date"])) ?>
                                </span>
                                <h4 class="card-title mb-0 text-nowrap">
                                    <?php echo $row["n_title"] ?>
                                </h4>
                                <p class="text-muted" style="font-size:14px">
                                    <?php echo substr($row["n_desc"], 0, 20) . "........."; ?>
                                </p>

                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    <!-- Events Section End -->



    <!-- About Start -->
    <section class="services-four pt-50 rpt-95 pb-110 rpb-150" id="about">
        <div class="container">
            <div class="row justify-content-between align-items-center mb-40">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s">
                    <div class="section-title mb-35">
                        <span class="sub-title">Al Ameen College, Edathala</span>
                        <h2>Fueling innovation and growth through expert incubation and startup support.</h2>
                        <p class="text-justify">Entrepreneurship is essential for economic growth and poverty reduction,
                            as it creates
                            jobs and improves products. Al Ameen College, Edathala, an accredited Arts and Science
                            College, has recognized the importance of entrepreneurship and innovation in today's
                            world. We established an Entrepreneurship Development Cell to enhance student
                            capabilities and align their goals with industry needs. The initiative aims to generate
                            entrepreneurial skills among students and help them become successful entrepreneurs. The
                            Entrepreneurship Development Cell serves to bridge the gap between industry and academia
                            and promote innovative advances in the global market.</p>
                    </div>
                </div>
                <div class="col-lg-5 wow fadeInRight delay-0-2s">
                    <p class="text-justify">AIS SPACE is an incubation space that fosters entrepreneurship and
                        facilitates the growth
                        of startups. Our mission is to provide end-to-end support for technology-based ventures,
                        from ideation to commercialization.</p>
                    <p class="text-justify">We are passionate about supporting bold and innovative entrepreneurs who are
                        developing
                        game-changing solutions. Our focus is on the early stages of a startup's journey, where
                        access to resources and guidance is limited, but the need for support is critical. Through a
                        comprehensive suite of incubation, acceleration, funding, and mentorship programs, we
                        provide ambitious entrepreneurs with everything they need to achieve exceptional results.
                    </p>
                    <p class="text-justify">
                        We associate with government agencies and other NGOs such as by DIC, KIED, Start-up Mission,
                        BIC MG University, YIP and IIM Kozhikode.
                    </p>
                </div>
            </div>


        </div>

    </section>

    <!-- About End -->


    <!-- Companies Start -->
    <section class="work-progress-three bg-blue text-white pb-85 rpb-65"
        style="background-image: url(assets/images/background/progress.png);">

        <div class="container" id="companies">
            <?php
            $query = "SELECT * FROM companies ";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                ?>
                <div class="text">
                    <h2>OUR MEMBERS</h2>
                </div>
                <div class="logo-carousel-wrap style-two bg-white py-30 px-25 br-30">
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <div class="logo-item" data-toggle="modal" data-target="#company" onclick='setModalCData("Company","assets/images/companies/<?php echo $row["comp_logo"] ?>","<?php echo $row["comp_name"] ?>","<?php echo $row["comp_website"] ?>","<?php echo $row["comp_details"] ?>")'>
                            <img src="assets/images/companies/<?php echo $row["comp_logo"] ?>" alt="Client Logo">
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <?php
            }
            ?>
            <div class="work-progress-inner-three">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="progress-item-two style-two wow fadeInUp delay-0-2s">
                            <span class="progress-step">01</span>
                            <div class="icon">
                                <i class="flaticon flaticon-speech-bubble"></i>
                            </div>
                            <h3>State-of-the-Art <br> Workspace</h3>
                            <p>Our incubation center provides a modern, fully-equipped workspace that includes
                                high-speed internet, printing and scanning services, and meeting rooms to help your
                                startup thrive</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="progress-item-two style-two wow fadeInUp delay-0-4s">
                            <span class="progress-step">02</span>
                            <div class="icon">
                                <i class="flaticon flaticon-vector"></i>
                            </div>
                            <h3>Tailored Business <br> Support</h3>
                            <p>We offer customized mentorship, training and workshops, legal and accounting
                                services, and networking opportunities to help your business grow and succeed. Our
                                support services are tailored to your unique needs and designed to help you achieve
                                your goals.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="progress-item-two style-two wow fadeInUp delay-0-6s no-border mb-0">
                            <span class="progress-step">03</span>
                            <div class="icon">
                                <i class="flaticon flaticon-like-1"></i>
                            </div>
                            <h3>Industry-Specific <br> Expertise</h3>
                            <p>Our team of experienced mentors and advisors have expertise across a range of
                                industries, including tech, healthcare, and social enterprise. With their guidance,
                                you can gain valuable insights into your market and develop strategies for success.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Companies End -->


    <!-- Objectives Start -->
    <section class="about-three py-120 rpy-100" id="objectives">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-three-image rmb-60 mr-10 rmr-0 wow fadeInLeft delay-0-2s">
                        <img src="assets/images/about/about-three-1.jpg" alt="About">
                        <img src="assets/images/about/about-three-2.jpg" alt="About">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content pl-70 rpl-0 wow fadeInRight delay-0-2s">
                        <div class="section-title mb-35">
                            <h2>Objectives</h2>
                        </div>
                        <p class="font-weight-bold">The objectives of the Incubation Centre are as follows:</p>
                        <ul class="list-style-three mt-15">
                            <li class="text-justify">To promote, encourage, and sustain activities and programmes
                                contributing to
                                innovation, incubation & entrepreneurship education and development.</li>
                            <li class="text-justify">To provide financial and technical support to aspiring both faculty
                                and students
                                innovators and entrepreneurs in the campus.</li>
                            <li class="text-justify">To facilitate in market augmentation for the products developed by
                                the start-ups
                                in the campus.</li>
                            <li class="text-justify">To ensure the successful surge of the incubated start-ups and
                                thereby to provide
                                employment opportunities to the other students in the campus.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Objectives End -->


    <!-- News Section Start -->
    <section class="about-tab-section bg-light-black pt-80 pb-120 rpb-100" id="news">
        <div class="container">
            <div class="fact-counter-inner px-55 pt-45 pb-0 text-white text-center br-25"
                style="background-image: url(assets/images/counter/counter-bg.jpg)">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="success-item wow fadeInUp delay-0-2s">
                            <span class="count-text" data-speed="5000"
                                data-stop="<?php echo $techarray["c1"] ?>">0</span>
                            <p>Startups Incubated</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="success-item wow fadeInUp delay-0-4s">
                            <span class="count-text plus" data-speed="5000"
                                data-stop="<?php echo $techarray["c2"] ?>">0</span>
                            <p>Startups that have successfully launched</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="success-item wow fadeInUp delay-0-6s">
                            <span class="count-text plus" data-speed="5000"
                                data-stop="<?php echo $techarray["c3"] ?>">0</span>
                            <p>Funds Generated</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="success-item wow fadeInUp delay-0-8s">
                            <span class="count-text plus" data-speed="5000"
                                data-stop="<?php echo $techarray["c4"] ?>">0</span>
                            <p>Jobs Created</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $query = "SELECT * FROM newsfeed WHERE news_event = 1 and n_status=1  ORDER BY id DESC limit 3";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {

                ?>
                <div class="section-title text-center mb-55 text-white">
                    <!-- <span class="sub-title">Recent Articles</span> -->
                    <h2>Latest News from Us</h2>
                </div>
                <div class="row justify-content-center">
                    <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($result)) {
                        $i = +2;
                        ?>
                        <div role="button" class="col-xl-4 col-md-6" data-toggle="modal"
                            onclick='setModalData("News","assets/images/news/<?php echo $row["n_image"] ?>","<?php echo $row["n_title"] ?>","<?php echo $row["n_date"] ?>","<?php echo $row["n_desc"] ?>")'
                            data-target="#edit">
                            <div class="news-item style-two wow fadeInUp delay-0-<?php echo $i ?>s">
                                <div class="image">
                                    <img src="assets/images/news/<?php echo $row["n_image"] ?>" alt="News" height="200px"
                                        style="object-fit: cover;">
                                </div>
                                <div class="news-content p ">
                                    <!-- <div class="news-author">
                                         <img src="assets/images/news/news-author-1.jpg" alt="Authro">
                                    </div> -->
                                    <ul class="post-meta-item m-0">
                                        <li class="pt-20 pb-0">
                                            <i class="fas fa-calendar-alt"></i>
                                            <a>
                                                <?php echo date("d", strtotime($row["n_date"])) ?>
                                                <sup>
                                                    <?php echo dateSup(date("d", strtotime($row["n_date"]))) ?>
                                                </sup>
                                                <?php echo date("M", strtotime($row["n_date"])) ?>
                                                <?php echo date("Y", strtotime($row["n_date"])) ?>
                                            </a>
                                            <!-- <b>By <a href="#">Admin</a></b> -->
                                        </li>
                                    </ul>
                                    <h4>
                                        <?php echo $row["n_title"] ?>
                                    </h4>
                                    <p>
                                        <?php echo substr($row["n_desc"], 0, 15) . "........" ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <a href="#">View all</a>
                </div>
                <?php
            }
            ?>
        </div>
    </section>
    <!-- News Section End -->



    <!-- Footer Area Start -->
    <footer class="main-footer footer-two bgs-cover text-white pt-0 rpt-0" id="contact"
        style="background-image: url(assets/images/footer/footer-bg-map.png);">
        <div class="container">
            <div class="footer-widget-area pt-105 pb-10">
                <div class="row w-100">
                    <div class="col-lg-4 col-sm-6 pl-40">
                        <div class="footer-widget about-widget">
                            <div class="footer-logo mb-15">
                                <a href="index.html"><img src="assets/images/logos/logo.png" alt="Logo"></a>
                            </div>
                            <!-- <div class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                </div> -->
                            <div class="footer-widget contact-widget mr-30 rmr-0 pl-40">
                                <ul class="list-style-two">
                                    <li><i class="fas fa-map-marker-alt"></i> AIS Space, Al-Ameen College, Edathala,
                                        Kochi, Kerala - 683 561</li>
                                    <li><i class="fas fa-phone-alt"></i> <a
                                            href="tel:+91<?php echo $techarray['ph1'] ?>">
                                            +91-<?php echo $techarray["ph1"] ?></a></li>
                                    <li><i class="fas fa-phone-alt"></i> <a
                                            href="tel:+91<?php echo $techarray['ph2'] ?>">
                                            +91-<?php echo $techarray['ph2'] ?></a></li>
                                    <li><i class="fas fa-envelope"></i> <a class="text-lowercase"
                                            href="mailto:<?php echo $techarray['email'] ?>"><?php echo $techarray['email'] ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-sm-6 col-md-6 pl-40">
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=10.069580, 76.368653&t=k&z=18&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                    href="https://2yu.co">2yu</a><br>
                                <style>
                                    .mapouter {
                                        position: relative;
                                        text-align: right;
                                        height: 100%;
                                        width: 100%;
                                    }
                                </style><a href="https://embedgooglemap.2yu.co/">html embed google map</a>
                                <style>
                                    .gmap_canvas {
                                        overflow: hidden;
                                        background: none !important;
                                        height: 100%;
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-inner pt-15">
                    <p class="align-content-center">Copyright 2023 <a href="http://www.hexameta.in"
                            target="_blank">HexaMeta Technologies</a> All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    </div>
    <!--End pagewrapper-->

    <!--Modal News Event-->
    <div class="modal fade" id="edit" tabdashboard="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <h4 class="modal-title" id="modal-heading"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <img class="card-img" id="modal-img" src="" alt="Vans">
                        <div class="card-body">
                            <h4 class="card-title" id="modal-title"></h4>
                            <div class="d-flex">
                                <i class="fas fa-calendar-alt text-dark me-4"></i>
                                <h6 class="px-2 text-muted" id="modal-date"></h6>
                            </div>
                            <p class="card-text text-justify" id="modal-desc"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Modal company-->

    <div class="modal fade" id="company" tabdashboard="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <h4 class="modal-title" id="modal-cheading">heading</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 align-items-center justify-content-center c-img-modal">
                            <a id="modal-cURL" href="https://hexameta.in" target="_blank">
                                <img class="card-img h-100" id="modal-cimg" src="" alt="Vans">
                                <p id="modal-cwebsite"></p>
                            </a>
                            </div>
                            <div class="card-body col-md-6 col-sm-12 ">
                                <h4 class="card-title" id="modal-ctitle"></h4>
                                <p class="card-text text-justify" id="modal-cdesc"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Top Button -->
    <button class="scroll-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></button>

    <script>
        function setModalData(heading, img, title, date, desc) {
            let objectDate = new Date(date);
            let day = objectDate.getDate();
            let month = objectDate.getMonth();
            let year = objectDate.getFullYear();
            day = day < 10 ? '0' + day : day;
            month = month < 10 ? '0' + (month + 1) : (month + 1);

            $("#modal-heading").html(heading);
            $("#modal-title").html(title);
            $("#modal-img").attr("src", img);
            $("#modal-date").html(day + "-" + (month) + "-" + year);
            $("#modal-desc").html(desc);
        }


        function setModalCData(heading, img, title, website, desc) {

            $("#modal-cheading").html(heading);
            $("#modal-ctitle").html(title);
            $("#modal-cURL").attr("href", website);
            $("#modal-cwebsite").html(website);
            $("#modal-cimg").attr("src", img);
            $("#modal-cdesc").html(desc);
        }
    </script>
    <!--====== Jquery ======-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!--====== Bootstrap ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--====== Appear Js ======-->
    <script src="assets/js/appear.min.js"></script>
    <!--====== Slick ======-->
    <script src="assets/js/slick.min.js"></script>
    <!--====== Magnific Popup ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--====== Isotope ======-->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!--  WOW Animation -->
    <script src="assets/js/wow.js"></script>
    <!-- Custom script -->
    <script src="assets/js/script.js"></script>
</body>

</html>