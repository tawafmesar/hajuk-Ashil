<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Cairo:100,300,400,500,700,900" rel="stylesheet">

    <title>حجك اسهل</title>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


          <link rel="stylesheet" href="assets/css/onclick-form-popup.css">

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="assets/js/onclick-form-popup.js"></script>

                    <link rel="stylesheet" href="assets/css/login.css">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <!-- Font Awesome -->

        <link rel="stylesheet" href="assets/css/all.css" />
        
    <link rel="stylesheet" href="assets/css/style.css">

    </head>

    <body>


<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="index.php" class="logo">
                        <img class="imgg" src="assets/images/logo.png"  alt="Softy Pinko"/>
                    </a>

                    <ul class="nav">
                        <li><a href="index.php" class="active">الرئيسية</a></li>
                        <li><a href="hamalt.php">الحملات</a></li>
                        <li><a href="trip.php"> رحلة الحج</a></li>
                        <li><a href="contact.php"> تواصل معنا</a></li>
                            <li> 

                      <?php if (isset($_SESSION['username'])) {



                              ?>
                               <li>  <a href="profile.php" >
                                     ملف 
                                <i class="fa-solid fa-id-card"></i></a> </li>     
                            <?php
                            

                             } ?>


                      <?php if (!isset($_SESSION['username'])) { ?>
                        <a href="login.php" >
                             دخول
                        <i class="fa fa-sign-in" aria-hidden="true"></i></a> 
                             
                    <?php } else { ?>
                         <li><a href="logout.php" > خروج   <i class="fa fa-sign-out" aria-hidden="true"></i> |
                            <?php echo $_SESSION['username']; ?> <i class="fa-solid fa-user " id="ii"></i>
                        </a>  </li>
                    <?php } ?>

                        </li>     

                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
                </div>
    </div>
        </header>
