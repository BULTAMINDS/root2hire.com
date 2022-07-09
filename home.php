<?php
include_once 'sys/generalx.php';
include_once 'sys/security.php';

sec_session_start();
if(empty($_SESSION['user_id']) || $_SESSION['user_name'] == ''){
    header('location:../index.php');
    die();
}

$obj = new conn();
?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Bultaminds ATS,CRM & HRMS - Talent Acquisition Made Easy 
            </title>
        <link rel="shortcut icon" href="img/favicon.png?<?php echo filemtime("img/favicon.png"); ?>" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="css/app5.css?<?php echo filemtime("css/app5.css"); ?>" media="screen" />
        <link href="css/accordion.css?<?php echo filemtime('css/accordion.css'); ?>" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <!-- ======= Top Bar ======= -->
        <div id="" class="topnav  d-flex align-items-center ">
           
                <div class="me-auto align-items-center d-flex mx-2">
                   <a href="mailto:support@bultamindsdigital.com"> <i class="fa fa-envelope "></i> support@bultamindsdigital.com</a>
<!--                    <i class="bi bi-phone-fill phone-icon"></i> +91 760 905 0223-->
                </div>
                <div class="ms-auto d-flex top-right-section align-items-center">
                <span class="welcome-txt mx-3"> <?php echo $_SESSION['user_name']; ?>
</span>
                    <a href="./logout.php" class="logoutbtn" > <i class="fa fa-sign-out"></i> Log Out</a>
                </div>
           
        </div>
        <!-- ======= Header ======= -->
  

       
     
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2>Welcome to <span>Bultaminds HR</span></h2>
          <p>Please select your desired application below to proceed further.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

    </div>
  </section><!-- End Here -->
        <main id="">
            <!-- ======= Icon Boxes Section ======= -->
            <section id="icon-boxes" class="icon-boxes">
                <div class="container">

                    <div class="row">
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                    <?php // load the default page
                                    $query = "SELECT a.default_page FROM sys_roles a left join mst_users_roles  b on a.role_id = b.role_id where b.user_id =  '" . $_SESSION['user_id'] . "' limit 0,1";
                                    $default_page = $obj->get_execute_scalar($query, $error_message);
                                   // echo $query.' - '.$default_page;
                                    if ($default_page == "")$default_page = "listview.php?id=6";
                                    $_SESSION['dashboard_page'] = $default_page;
                                    ?>
                                <h4 class="title"><a href="<?php echo $default_page?>" >A T S</a></h4>
                                <p class="description">Applicant Tracking Software is one of the recruiting tools that help recruiters match qualified candidates by filtering, organizing & streamlining job applications.</p>
                            </div>
                        </div>
            
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-file"></i></div>
                                <h4 class="title"><a href="">C R M</a></h4>
                                <p class="description">Customer Relationship Management</p>
                            </div>
                        </div> 
                        
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-file"></i></div>
                                <h4 class="title"><a href="">H R M S</a></h4>
                                <p class="description">Human Resources Management System</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-tachometer"></i></div>
                                <h4 class="title"><a href="">L M S</a></h4>
                                <p class="description">Learning Management System</p>
                            </div>
                        </div>
                
                
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-layer"></i></div>
                                <h4 class="title"><a href="">I M S</a></h4>
                                <p class="description">Invoice Management System</p>
                            </div>
                        </div>






                </div>
            </section><!-- End Icon Boxes Section -->
        </main>
        <script type="text/javascript" src="../js/app5.js?<?php echo filemtime('js/app5.js'); ?>"></script>
    </body>
</html>
<?php unset($obj); ?>
