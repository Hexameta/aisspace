<?php
include 'includes/conn.php';
include 'includes/sessionvalidate.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="../../assets/images/favicon.ico">
  <title>
    AISSPACE - Companies Admin
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
    id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#">
        <img src="../../assets/images/logos/square-logo-black .png"  class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">AISSPACE</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="../admin/companies.php">
            <div
              class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>office</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g id="office" transform="translate(153.000000, 2.000000)">
                        <path class="color-background opacity-6"
                          d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z">
                        </path>
                        <path class="color-background"
                          d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z">
                        </path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Companies</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../admin/news.php">
            <div
              class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>box-3d-50</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(603.000000, 0.000000)">
                        <path class="color-background"
                          d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                        </path>
                        <path class="color-background opacity-6"
                          d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z">
                        </path>
                        <path class="color-background opacity-6"
                          d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z">
                        </path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">News Feed</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="../admin/events.php">
            <div
              class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>document</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(154.000000, 300.000000)">
                        <path class="color-background opacity-6"
                          d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z">
                        </path>
                        <path class="color-background"
                          d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                        </path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Events Feed</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="../admin/main-page.php">
            <div
              class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>settings</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(304.000000, 151.000000)">
                        <polygon class="color-background opacity-6"
                          points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                        </polygon>
                        <path class="color-background opacity-6"
                          d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z">
                        </path>
                        <path class="color-background"
                          d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
                        </path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Main Page</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../admin/uploads.php">
            <div
              class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>credit-card</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(453.000000, 454.000000)">
                        <path class="color-background opacity-6"
                          d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z">
                        </path>
                        <path class="color-background"
                          d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                        </path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Uploads</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
      navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Admin</a>
            </li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Companies</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Companies</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">

          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a class="btn btn-outline-primary btn-sm mb-0 me-3" href="./includes/logout.php">Logout</a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="col-12 mt-4">
        <div class="card mb-4">
          <div class="d-flex bg-gradient-primary text justify-content-between border-radius-lg pt-3 p-3 ">
            <h6 class="text-white font-weight-bolder text-uppercase pt-2 ps-3">Companies</h6>
          </div>
          <div class="card-body bg-gray-300 p-3">
            <div class="row mb-xl-0 mb-4">
              <div class="card bg-gray-100 card-blog card-plain col-md-2 col-sm-12 ms-md-2 mb-2">
                <div class="card-body d-flex flex-column justify-content-center text-center">
                  <a type="button" title="Add a New Company" data-toggle="modal" data-target="#form">
                    <i class="fa fa-plus text-secondary mb-3"></i>
                    <h5 class=" text-secondary"> Add Company </h5>
                  </a>
                </div>
              </div>
              <?php
              $sql = "SELECT * FROM companies ORDER BY id DESC";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="card bg-gray-100 card-blog card-plain col-md-3 col-sm-12 ms-md-2 mb-2 p-md-2 p-1">
                  <div class="position-relative">
                    <a class="d-block border-radius-xl">
                      <img src="../../assets/images/companies/<?php echo $row["comp_logo"] ?>" alt="img-blur-shadow"
                        class="rounded mx-auto d-block border-radius-xl" height="150px" width="100%"
                        style="object-fit:contain">
                    </a>
                  </div>
                  <div class="card-body px-1 pb-0">
                    <div class="d-flex">
                      <i class="fas fa-link text-dark me-2" aria-hidden="true"></i>
                      <a class="text-gradient text-dark mb-2 text-sm font-weight-bold"
                        title="Go to <?php echo $row["comp_website"] ?>" href="<?php echo $row["comp_website"] ?>"
                        target="_blank"><?php echo $row["comp_website"] ?></a>
                    </div>
                    <h4 class="text-lg font-weight-bolder">
                      <?php echo $row["comp_name"] ?>
                    </h4>
                    <p class="text-sm mb-3">
                      <?php echo $row["comp_details"] ?>
                    </p>
                    <div class="d-flex align-items-center justify-content-between">
                      <a href="includes/delcomp.php?id=<?php echo $row["id"]; ?>&image=<?php echo $row["comp_logo"]; ?>">
                        <button type="button" title="Delete this Company"
                          class="btn btn-outline-primary btn-xs mb-0">Delete
                          Company</button>
                      </a>
                      <buttone type="button" title="Edit this Company" class="btn btn-primary btn-xs mb-0"
                        data-toggle="modal" onclick="getData(<?php echo $row['id']; ?>)" data-target="#edit">Edit
                        Company</button>
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
    </div>
    <footer class="footer pt-3  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              ©
              <script>
                document.write(new Date().getFullYear())
              </script>,
              made with <i class="fa fa-heart"></i> by
              <a href="https://www.hexameta.in" class="font-weight-bold" target="_blank">Hexameta
                Technologies</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </main>

  <!-- Add Company Modal -->

  <div class="modal fade" id="form" tabdashboard="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <h5 class="modal-title" id="exampleModalLabel">Add New Company</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="includes/addcomp.php" method="POST" enctype="multipart/form-data"
          onsubmit="return formValidate()">

          <div class="modal-body">
            <div id="errormsg">

            </div>

            <div class="form-group">
              <label for="text1">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label for="text2">Website</label>
              <input type="text" class="form-control" id="website" name="website" placeholder="Enter Website">
            </div>
            <div class="form-group">
              <label for="desc">Description</label>
              <textarea class="form-control px-1" placeholder="Enter Description" name="description" id="desc" cols="30"
                rows="5"></textarea>
            </div>
            <div class="form-group">
              <label for="file1">Add Company Logo</label>
              <input type="file" accept="image/png, image/jpeg," name="image" class="form-control" id="image">
            </div>
          </div>
          <div class=" modal-footer border-top-0 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>

      </div>
    </div>
  </div>

  <!-- Edit Company Modal -->

  <div class="modal fade" id="edit" tabdashboard="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <h5 class="modal-title" id="exampleModalLabel">Edit Company</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="includes/editcomp.php" method="POST" enctype="multipart/form-data"
          onsubmit="return editValidate()">

          <div class="modal-body">
            <div id="errormsg2">
            </div>
            <input type="hidden" name="id" id="cid">
            <input type="hidden" name="imageName" id="imageName">
            <div class="form-group">
              <label for="text1">Name</label>
              <input type="text" class="form-control px-2" id="ename" name="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label for="text2">Website</label>
              <input type="text" class="form-control px-2" id="ewebsite" name="website" placeholder="Enter Website">
            </div>
            <div class="form-group">
              <label for="desc">Description</label>
              <textarea class="form-control px-1" placeholder="Enter Description" name="description" id="edesc"
                cols="30" rows="5"></textarea>
            </div>
            <div class="form-group">
              <label for="file1">Add Company Logo</label>
              <input type="file" accept="image/png, image/jpeg," name="image" class="form-control" id="eimage">
            </div>
          </div>
          <div class="modal-footer border-top-0 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    function getData(id) {
      $.ajax({
        url: "includes/getcomp.php",
        type: "GET",
        data: {
          id: id
        },
        success: function (data) {
          var data = JSON.parse(data);
          $("#cid").val(data[0].id);
          $("#ename").val(data[0].comp_name);
          $("#ewebsite").val(data[0].comp_website);
          $("#edesc").val(data[0].comp_details);
          $("#imageName").val(data[0].comp_logo);
        }
      });
    }

    const fileInput = document.getElementById('image');

    const imgValidate = () => {
      {
        var filePath = fileInput.value;
        var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
        if (!allowedExtensions.exec(filePath)) {
          //alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
          fileInput.value = '';
          document.getElementById('errormsg').innerHTML = "<div class='alert alert-danger text-white' role='alert'><span class='text-sm'>It is not image file</span></div>"
          return false;
        }
        if (fileInput.files[0].size > 500000) {
          document.getElementById('errormsg').innerHTML = "<div class='alert alert-danger text-white' role='alert'><span class='text-sm'>File is too big!</span></div>"
          fileInput.value = '';
          return false;
        }
        document.getElementById('errormsg').innerHTML = ""
      }
    }
    fileInput.onchange = imgValidate;

    const editInput = document.getElementById('eimage');
    const editimgValidate = () => {
      {
        var filePath = editInput.value;
        var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
        if (!allowedExtensions.exec(filePath)) {
          //alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
          editInput.value = '';
          document.getElementById('errormsg2').innerHTML = "<div class='alert alert-danger text-white' role='alert'><span class='text-sm'>It is not image file</span></div>"
          return false;
        }
        if (editInput.files[0].size > 500000) {
          document.getElementById('errormsg2').innerHTML = "<div class='alert alert-danger text-white' role='alert'><span class='text-sm'>File is too big!</span></div>"
          editInput.value = '';
          return false;
        }
        document.getElementById('errormsg2').innerHTML = ""
        return true;

      }
    }
    editInput.onchange = editimgValidate;

    const formValidate = () => {
      var name = document.getElementById('name').value;
      var website = document.getElementById('website').value;
      var desc = document.getElementById('desc').value;
      var image = document.getElementById('image').value;
      if (name == "" || website == "" || desc == "") {
        document.getElementById('errormsg').innerHTML = "<div class='alert alert-danger text-white' role='alert'><span class='text-sm'>Please fill all the fields</span></div>"
        return false;
      }
      else if (website.indexOf("http://") == -1 && website.indexOf("https://") == -1) {
        document.getElementById('errormsg').innerHTML = "<div class='alert alert-danger text-white' role='alert'><span class='text-sm'>Please enter a valid website with http / https </span></div>"
        return false;
      }
      else if (image == "") {
        document.getElementById('errormsg').innerHTML = "<div class='alert alert-danger text-white' role='alert'><span class='text-sm'>Please upload an image</span></div>"
        return false;
      }
      else {
        return true;
      }
    }

    const editValidate = () => {
      var name = document.getElementById('ename').value;
      var website = document.getElementById('ewebsite').value;
      var desc = document.getElementById('edesc').value;
      var image = document.getElementById('eimage').value;
      if (name == "" || website == "" || desc == "") {
        document.getElementById('errormsg2').innerHTML = "<div class='alert alert-danger text-white' role='alert'><span class='text-sm'>Please fill all the fields</span></div>"
        return false;
      }
      else if (website.indexOf("http://") == -1 && website.indexOf("https://") == -1) {
        document.getElementById('errormsg2').innerHTML = "<div class='alert alert-danger text-white' role='alert'><span class='text-sm'>Please enter a valid website with http / https </span></div>"
        return false;
      }
      else {
        return true;
      }
    }

  </script>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
  <!--required -->
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js">
  </script>
  <!--modal-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js">
  </script>
</body>

</html>