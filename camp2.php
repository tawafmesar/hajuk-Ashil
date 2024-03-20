<?php
ob_start();
session_start();

include 'files/ini.php';

if (isset($_SESSION['username'])) {

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  if (isset($_POST['reservation'])) {




      global $con;

      $userid = $_SESSION['userid'];

      $itemid = $_POST['add_reservation'];

      $itemid = 2;

      $payment = $_POST['payment'];


      $check_pro = $con->prepare("select * from reservation where userid='$userid' ");

      $check_pro->execute();

      $check = $check_pro->fetchall();

      if (!empty($check)) {

        ?>
        <script type="text/javascript">
          Swal.fire({
            icon: 'error',
            title: 'انت مسجل مسببقاً في احد الحملات',
            showConfirmButton: false,
            timer: 2950,
          })
        </script>
        <?php
        header("refresh:3;url=index.php");

      } else {

        $sql = "INSERT INTO reservation (userid,hamalid,payment)
                VALUES ('$userid','$itemid','$payment')";
        $con->query($sql);
        ?>
        <script type="text/javascript">
          Swal.fire({
            icon: 'success',
            title: '  تم الحجز في حملة منى رقم الحملة : 1002',
            text: '  رقم التواصل : 0561870660',
            showConfirmButton: false,
            timer: 4950,
          })

        </script>
        <?php
        header("refresh:5;url=index.php");


      }

    

  }
}

?>

<link rel="stylesheet" href="assets/css/class.css">
<!-- depertment_area_start  -->
<div class="depertment_area">
  <div class="container">
    <h1
      style="    text-align: center;  color: #b49164; margin-top: 100px; padding-top: 100px; margin: 15px;font-size: 45px;font-weight: bolder;">

      الحملات
    </h1>

    <?php

    $itemid = 2;

    $countt = $con->prepare("select COUNT(*) AS count from reservation where hamalid='$itemid' ");
    $countt->execute();
    $count = $countt->fetch();
    $res = $count['count'];

    $res; // عدد الحجوزات كاملة
    $albagy = 40 - $res; //  المتبقي من الحجوزات 
    if ($res <= 40) {


      ?>


      <h1 style="    text-align: center;  color: #b49164;  margin: 15px;font-size: 25px;font-weight: bolder;">
        المتبقى من الحجوزات :

        <?php echo $albagy; ?></h1>

      <div class="row" style="justify-content:center;">

        <a style="margin-left:1px; font-size:25px;" href="#" class="btn_sign" data-animation="fadeInLeft"
          data-delay="0.5s" style="margin-left:0;" id="get-started">احجز الأن <i class="ti-arrow-right"></i></a>

      <?php } else { ?>
        <div class="row" style="justify-content:center;">

          <h1 style="    text-align: center;  color: #b49164;  margin: 15px;font-size: 25px;font-weight: bolder;">
            عذرًا لقد اكتمل عدد الحجوزات في هذه الحملة
          <?php } ?>

      </div>
      <div class="row">


        <!-- conform payyy  -->


        <div class="col-12 text-center align-self-center py-5" id="popup-container">
          <div class="section pb-5 pt-5 pt-sm-2 text-center" id="popup-window">

            <label for="reg-log"></label>
            <div class="card-3d-wrap mx-auto" style=" border-radius: 8px;">

              <div class="card-3d-wrapper">
                <div class="card-front">
                  <div class="center-wrap">
                    <form class="section text-center  " action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                      <input type="hidden" name="add_reservation" value="2">

                      <h4 class="mb-4 pb-3 h2" style=" color:#ececec; font-size: 35px;"> بيانات الحجز</h4>
                      </h4>
                      <div class="paymentt"
                        style="width:100%;     display: flex;    justify-content: space-around; margin:8px;">
                        <div class="boxx" style="width:18%">
                          <img src="./assets/images/master.jpeg" width="100%" alt="">
                        </div>
                        <div class="boxx" style="width:27%">
                          <img src="./assets/images/mada.jpeg" width="100%" alt="">
                        </div>
                        <div class="boxx" style="width:20%">
                          <img src="./assets/images/visa.jpg" width="100%" alt="">
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="text" name="name" class="form-style" placeholder=" الأسم كما يظهر على البطاقة "
                          id="name" autocomplete="off" required>
                      </div>
                      <div class="form-group mt-2">
                        <input type="number" name="number" class="form-style" placeholder="رقم البطاقة " id="number"
                          autocomplete="off" required>
                      </div>
                      <div class="form-group mt-2">
                        <select name="type" id="" class="form-style" required>
                          <option value="">حدد نوع البطاقة</option>
                          <option value="Mastar">ماستر كارد</option>
                          <option value="Visa">Visa</option>
                          <option value="Amric">أمريكان إكسبريس</option>
                          <option value="JCB">JCB</option>
                          <option value="UnionPay">UnionPay</option>

                        </select>
                      </div>
                      <div class="form-group mt-2">
                        <input type="month" name="birthdate" class="form-style" style="width:59%; " id="number"
                          autocomplete="off" required>
                        <input type="number" name="number" class="form-style" style="width:39%;" placeholder="رمز CVC"
                          id="number" autocomplete="off" required>
                      </div>

                      <input type="hidden" name="payment" value="1">



                      <input type="submit" name="reservation" value="تأكيد الدفع" class="btn mt-4"
                        style="border: solid 1px #fff;">

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- conform payyy  -->



        <div class="col-lg-12">
          <div class="depart_ment_tab mb-30">
            <ul class="nav" id="fac" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                  aria-selected="true">

                  <i class="fa-solid fa-tent"></i>
                  <h4>المخيم </h4>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                  aria-controls="profile" aria-selected="true">
                  <i class="fa-solid fa-bus"></i>
                  <h4> النقل</h4>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="Astrology-tab" data-toggle="tab" href="#Astrology" role="tab"
                  aria-controls="contact" aria-selected="false">
                  <i class="fa-solid fa-user-nurse"></i>
                  <h4> خدمات صحية</h4>
                </a>
              </li>


            </ul>
          </div>
        </div>
      </div>

      <div class="dept_main_info white-bg">
        <div class="tab-content" id="myTabContent">



          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <!-- single_content  -->
            <div class="row align-items-center">


              <div class="row align-items-center" style="margin-top:15px;">
                <div class="col-lg-7">
                  <div class="dept_thumb">
                    <img src="imgs/gym.jpg" alt="">
                    <img src="assets/images/camp.jpeg" width="100%" alt="">

                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="dept_info txtr">
                    <h3 id="headTx">
                      VIP اسم المخيم : منى

                      <br>
                      <br>
                      مميزات المخيم





                    </h3>
                    <ul style="  margin:15px; margin-right:66px; font-size:22px;">
                      <li>   تكييف </li>

                    <li> وجود مساعدين للحجاج </li>

                      <li>الأفطار المجاني </li>
                      <li> ارفف خاصة للأمتعة و الأحذية </li>
                      <li> خدمة طبية </li>
                      <li> خدمة انترنت ( wi-fi) </li>
                      <li> خدمة النظافة </li>
                    </ul>
                    <h3 id="headTx">
                      شروط المخيم :

                    </h3>

                    <ul style="  margin:15px; margin-right:66px; font-size:22px;">
                      <li>إظهار حجز الحملة</li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- clss loction  -->

            </div>
          </div>

          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

            <!-- single_content  -->
            <div class="row align-items-center" style="margin-top:35px;">
              <div class="col-lg-5">
                <div class="dept_thumb">
                  <img src="assets/images/buss.jpeg" alt="">


                </div>
              </div>
              <div class="col-lg-7">
                <div class="dept_info txtr" style="margin-top:20px;">
                  <h3 id="headTx">
                    اسم الباص : منى
                    <br>
                    عدد الركاب : 40
                    <br>
                    مميزات النقل :


                  </h3>
                  <ul style="  margin:15px; margin-right:66px; font-size:22px;">
                    <li>  كراسي مساج </li>
                    <li>  كراسي لكبار السن </li>
                    <li> دورات مياة </li>
                    <li> اسره مريحة </li>
                    <li>اماكن خاصة لشحن الهاتف </li>
                  </ul>
                  <h3 id="headTx">
                    شروط النقل :

                  </h3>
                  <ul style="  margin:15px; list-style: auto;margin-right:66px; font-size:22px;">
                    <li>تصريح الحج </li>
                    <li> إحضار الهوية الوطنية</li>
                    <li> ان يكون عمر المتقدم 18 او اكثر</li>
                  </ul>
                  <h3 id="headTx">
                    <br>
                    <br>
                    نقطة التجمع :
                    <br>
                  </h3>
                  <div>

                    <iframe class="mapss"
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3629.082451223209!2d46.484457500000005!3d24.5518127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f22e4d1ca828d%3A0x3b09c56ebd7b9d3f!2sAlhejaz%20Gas%20Station!5e0!3m2!1sen!2ssa!4v1684272368057!5m2!1sen!2ssa"
                      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"></iframe>

                  </div>

                </div>
              </div>
            </div>
            <!-- single_content  -->
          </div>

          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <!-- single_content  -->
            <div class="row align-items-center" style="margin-top:15px;">

              <div class="col-lg-11">
                <div class="dept_info txtr">
                  <h3 id="headTx">
                    الخدمات الصحية
                  </h3>
                  <p id="pTx" style="margin-bottom:0px; margin-top: 10px; margin-right:25px;">
                  <ul style="margin-right:50px;">
                    <li> </li>
                  </ul>
                  </p>


                </div>
              </div>
            </div>

            <!-- single_content  -->
          </div>

          <div class="tab-pane fade" id="Astrology" role="tabpanel" aria-labelledby="Astrology-tab">
            <!-- single_content  -->
            <div class="row align-items-center" style="margin-top:55px;">

              <div class="col-lg-11">
                <div class="dept_info txtr">
                  <h3 id="headTx">
                    الخدمات الصحية :
                  </h3>
                  <p id="pTx" style="margin-bottom:0px; margin-top: 10px; margin-right:25px;">
                  <ul style="margin-right:50px;">
                    <li> المنشآت الصحية في المشاعر المقدسة تقدم كافة الخدمات الوقائية والعلاجية والاسعافية لضيوف الرحمن,
                      عبر تقنيات حديثة وتجهيز تطبية متقدمة. وتقدم المراكز خدمات الرعاية الصحية الأولية لحجاج بيت الله
                      الحرام , والعاملين في المشاعر المقدسة, بالإضافة الى تقديم الخدمات الإسعافية, والتدخل لإنقاذ
                      الحالات الطارئة والاسعافية.</li>
                  </ul>
                  </p>
                  <h3 id="headTx">
                    رقم المستشفى :

                  </h3>
                  <h3 id="headTx" style="margin-bottom:0px; margin-top: 10px; margin-right:25px;">
                    0567985205
                  </h3>
                  <h3 id="headTx">
                    مركز المستشفى :
                  </h3>
                  <div>


                    <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3627.8806767382703!2d46.547199899999995!3d24.593313900000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f18fad0c3a057%3A0x429b00b315c6fa45!2sAldrees!5e0!3m2!1sen!2ssa!4v1684282791632!5m2!1sen!2ssa"
                      width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <br><br>
                    <h3 id="headTx">
                      <strong> مستفى اخر </strong> <br>
                      رقم المستشفى :
                    </h3>
                    <h3 id="headTx" style="margin-bottom:0px; margin-top: 10px; margin-right:25px;">
                      0567985205
                    </h3>
                    <h3 id="headTx">
                      مركز المستشفى :
                    </h3>
                    <div>


                      <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3714.5678204091655!2d39.8906002!3d21.406915199999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c2041a585beb5d%3A0x92ba7a9353bf0afc!2sField%20National%20Guard%20Hospital!5e0!3m2!1sen!2ssa!4v1684871049812!5m2!1sen!2ssa"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>

                  </div>
                </div>
              </div>

              <!-- single_content  -->
            </div>



          </div>
        </div>

      </div>
    </div>
    <!-- depertment_area_end  -->
  </div>




  <!-- End Video -->

  <script src="assest/js/bootstrap.mi.js"></script>

  <?php

} else {

  ?>
        <script type="text/javascript">
          Swal.fire({
            icon: 'error',
            title: ' يجب عليك تسجيل الدخول اذا كان لديك حساب , مالم قم بإنشاء حساب ثم تسجيل الدخول ',
            showConfirmButton: false,
            timer: 3450,
          })

        </script>
        <?php
        header("refresh:3.5;url=login.php");
        exit();

}
  include 'files/footer.php';
  ob_end_flush();
  ?>

  <script src="js/min/vendor/modernizr-3.5.0.min.js"></script>
  <script src="js/min/vendor/jquery-1.12.4.min.js"></script>

  <script src="js/min/popper.min.js"></script>
  <script src="js/min/bootstrap.min.js"></script>

  <script src="js/min/mail-script.js"></script>

  <script src="js/main.js"></script>


  <script>
    $('.datepicker').datepicker({
      iconsLibrary: 'fontawesome',
      icons: {
        rightIcon: '<span class="fa fa-calendar"></span>'
      }
    });

    $('.timepicker').timepicker({
      iconsLibrary: 'fontawesome',
      icons: {
        rightIcon: '<span class="fa fa-clock-o"></span>'
      }
    });
    $(document).ready(function () {
      $('.js-example-basic-multiple').select2();
    });
  </script>