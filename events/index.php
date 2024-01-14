<!DOCTYPE html>
<html lang="en">
<?php
include '../backend/admin/includes/conn.php';

?>

<head>
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
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    /> -->
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700&amp;family=Oswald:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />

    <!--====== Font Awesome ======-->
    <link rel="stylesheet" href="../assets/css/font-awesome-5.9.0.css" />
    <!--====== Bootstrap ======-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <!--====== Magnific Popup ======-->
    <link rel="stylesheet" href="../assets/css/magnific-popup.css" />
    <!--====== Falticon ======-->
    <link rel="stylesheet" href="../assets/css/flaticon.css" />
    <!--====== Animate ======-->
    <link rel="stylesheet" href="../assets/css/animate.css" />
    <!--====== Slick ======-->
    <link rel="stylesheet" href="../assets/css/slick.css" />
    <!--====== Main Style ======-->
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="./styles.css" />
    <title>Events</title>
</head>

<body>
    <!-- Main Menu -->

    <header class="main-header header-three text-white">
        <div class="header-upper">
            <div class="container clearfix">
                <div class="header-inner d-flex align-items-center">
                    <div class="logo-outer">
                        <div class="logo">
                            <a href="index.php"><img src="../assets/images/logos/logo.png" width="500px" alt="Logo"
                                    title="Logo" /></a>
                        </div>
                    </div>

                    <div class="nav-outer clearfix d-flex align-items-center">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-lg">
                            <div class="navbar-header">
                                <div class="mobile-logo py-15">
                                    <a href="../">
                                        <img src="../assets/images/logos/logo.png" alt="Logo" title="Logo" />
                                    </a>
                                </div>
                                <button class="btn" type="button" onclick="window.location='../'">
                                    Home
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation onepage clearfix">
                                    <li>
                                        <button class="btn" type="button" onclick="window.location='../'">
                                            Home
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="hero-section-two overlay bgs-cover pt-40 rpt-80" id="home" style="background-color: #252f57">
        <div class="container">
            <div class="col-lg-8 col-md-10 col-sm-11">
                <div class="hero-content text-white py-50 rpy-120">
                    <h1 class="wow fadeInUp delay-0-4s mt-60">Events</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="" id="events">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filters">
                        <ul>
                            <?php
                            $query = "SELECT distinct YEAR(n_date) as yr FROM newsfeed where news_event = 2 and n_status = 1 ORDER BY yr DESC";
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_assoc($result)) {

                                ?>
                                <li data-filter=".<?php echo $row['yr'] ?>">
                                    <?php echo $row['yr'] ?>
                                </li>
                                <?php
                            }

                            ?>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="rows grid">
                        <?php
                        $query2 = "SELECT * FROM newsfeed WHERE news_event = 2 and n_status = 1 ORDER BY n_date DESC";
                        $result2 = mysqli_query($conn, $query2);
                        while ($row = mysqli_fetch_assoc($result2)) {
                            $year1 = substr($row['n_date'], 0, 4);
                            ?>
                            <div class="col-md-4 grid-item <?php echo $year1 ?>">
                                <?php
                                $img = json_encode("../assets/images/news/" . $row["n_image"]);
                                $title = json_encode($row["n_title"]);
                                $date = json_encode($row["n_date"]);
                                $desc = json_encode($row["n_desc"]);
                                $reports = json_encode($row["n_reports"]);
                                ?>
                                <div role="button" class="card cursor-pointer shadow-sm p-1 m-1 br-10 rounded-top"
                                    data-toggle="modal" style="width:300px"
                                    onclick='setModalData("Event", <?php echo htmlspecialchars($img, ENT_QUOTES, 'UTF-8'); ?>, <?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>, <?php echo htmlspecialchars($date, ENT_QUOTES, 'UTF-8'); ?>, <?php echo htmlspecialchars($desc, ENT_QUOTES, 'UTF-8'); ?>, <?php echo htmlspecialchars($reports, ENT_QUOTES, 'UTF-8'); ?>)'
                                    data-target="#edit">
                                    
                                        <img src="../assets/images/news/<?php echo $row["n_image"] ?>" class="card-img-top"
                                            alt="..." height="120px" width="300px" style="object-fit: cover;">
                                        <div class="card-body mb-0 text-left">
                                            <span class=" badge rounded-pill bg-primary text-light mb-2 p-2">
                                                <i class="fas fa-calendar-alt text-light me-2" aria-hidden="true"></i>
                                                <?php echo date("d", strtotime($row["n_date"])) ?><sup>
                                                    <?php echo dateSup(date("d", strtotime($row["n_date"]))) ?>
                                                </sup>
                                                <?php echo date("M", strtotime($row["n_date"])) ?>
                                                <?php echo date("Y", strtotime($row["n_date"])) ?>
                                            </span>
                                            <h4 class="card-title mb-0 text-nowrap">
                                                <?php echo substr($row["n_title"], 0, 20) . "..."; ?>
                                            </h4>
                                            <p class="text-muted" style="font-size:14px">
                                                <?php echo substr($row["n_desc"], 0, 35) . "..."; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                        }
                        ?>
                        </div>
                    </div>

                </div>
            </div>
    </section>
    <footer class="main-footer footer-two bgs-cover text-white pt-0 rpt-0" id="contact"
        style="background-image: url(../assets/images/footer/footer-bg-map.png)">
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-inner pt-15">
                    <p class="align-content-center">
                        &copy;
                        <a href="http://www.hexameta.in" target="_blank">HexaMeta Technologies</a>
                        2023 &nbsp; All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal -->
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
                        <div class="pb-3 text-center">
                            <a href="" id="modal-report" target="_blank">
                                <button class="btn btn-sm rounded-pill px-3 py-2"
                                    style="background-color: #1f5099; color: white;">View Report</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        function setModalData(heading, img, title, date, desc, report) {
            let objectDate = new Date(date);
            let day = objectDate.getDate();
            let month = objectDate.getMonth();
            let year = objectDate.getFullYear();
            day = day < 10 ? '0' + day : day;
            month = month < 10 ? '0' + (month + 1) : (month + 1);
            // console.log(report);

            $("#modal-heading").html(heading);
            $("#modal-title").html(title);
            $("#modal-img").attr("src", img);
            $("#modal-date").html(day + "-" + (month) + "-" + year);
            $("#modal-desc").html(desc);
            $("#modal-report").attr("href", "../assets/reports/" + report);
            // console.log(heading + img + title + date + desc + report);
        }
    </script>
    <!--====== Jquery ======-->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <!--====== Bootstrap ======-->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!--====== Appear Js ======-->
    <script src="../assets/js/appear.min.js"></script>
    <!--====== Slick ======-->
    <script src="../assets/js/slick.min.js"></script>
    <!--====== Magnific Popup ======-->
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <!--====== Isotope ======-->
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <!--  WOW Animation -->
    <script src="../assets/js/wow.js"></script>
    <!-- Custom script -->
    <script src="../assets/js/script.js"></script>
    <script src="./scripts.js"></script>
</body>

</html>