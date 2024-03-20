
<?php
ob_start();
session_start();

  include 'files/ini.php';

  
if (isset($_SESSION['username'])) {
  header('Location: profile.php');

  exit();
}

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['login'])) {

      $user = $_POST['username'];
      $pass = $_POST['password'];

      $stmt = $con->prepare("SELECT
                                          userid     ,username, password
                                   FROM
                                          users
                                   WHERE
                                          username = :zuser
                                   AND
                                          password = :zpass
                                        ");
      $stmt->execute(
        array(
          'zuser' => $user,
          'zpass' => $pass
        )
      );

      $get = $stmt->fetch();
      $count = $stmt->rowCount();

      if ($count > 0) {
        $_SESSION['username'] = $get['username']; // register session name
        $_SESSION['userid'] = $get['userid']; // register user id in session

        ?>
                 <script type="text/javascript">
                 Swal.fire({
                  icon: 'success',
                   title: 'تم تسجيل الدخول بنجاح ',
                   showConfirmButton: false,
                   timer: 1950,
                 })

                 </script>
                 <?php
                 header("refresh:2;url=profile.php");



      } else {

        $formErrors[] = 'اسم المستخدم او كلمة المرور غير صحيحة';

        ?>       <script type="text/javascript">
                       Swal.fire({
                        icon: 'error',
                         title: 'اسم المستخدم او كلمة المرور غير صحيحة',
                         showConfirmButton: false,
                         timer: 1950,
                       })

                       </script><?php
      }
    }

    if (isset($_POST['signup'])) {

      $formErrors = array();

      $fullname = $_POST['fullname'];
      $user = $_POST['username'];
      $pass = $_POST['password'];
      $idnumber = $_POST['idnumber'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $city = $_POST['city'];




      if (empty($formErrors)) {


        $stmt = $con->prepare("SELECT
                                        userid
                                 FROM
                                        users
                                 WHERE
                                        username = :zuser
                          ");
        $stmt->execute(
          array(

            'zuser' => $user
          )
        );

        $get = $stmt->fetch();

        $count = $stmt->rowCount();


        if ($count == 1) {

          $formErrors[] = 'اسم المستخدم الذي ادخلته موجود مسبقاً ';

                  ?>       <script type="text/javascript">
                       Swal.fire({
                        icon: 'error',
                         title: 'اسم المستخدم الذي ادخلته موجود مسبقاً ',
                         showConfirmButton: false,
                         timer: 1950,
                       })

                       </script><?php

        } else {

          $stmt = $con->prepare("INSERT INTO
                                    users(fullname,username, password, idnumber , phone , city , email)
                                VALUES(:zfullname,:zuser, :zpassword , :zidnumber , :zphone, :zcity , :zemail)");
          $stmt->execute(
            array(

              'zfullname' => $fullname,
              'zuser' => $user,
              'zpassword' => $pass,
              'zidnumber' => $idnumber,
              'zphone' => $phone,
              'zcity' => $city ,
              'zemail' => $email


          )
          );
        ?>
            <script type="text/javascript">
              Swal.fire({
                title: 'تم انشاء الحساب بنجاح',
                icon: 'success',
                confirmButtonText: false,
                timer: 1950,

              })
            </script>

            <?php
                    header("refresh:2;url=login.php");



      }

      }


    }




  }




  if (!empty($formErrors)) {
    foreach ($formErrors as $error) {
      echo '<div class="msg" >' . $error . '</div>';
    }
    header("refresh:3;url=login.php");
  }

  ?>


<div class="cont_principal">

  <div class="cont_centrar">
  <div class="cont_login">
    <form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <div class="cont_tabs_login">
      <ul class='ul_tabs'>
        <li class="active"><a href="#" onclick="sign_in()">تسجيل دخول</a>
        <span class="linea_bajo_nom"></span>
        </li>
        <li><a href="#up" onclick="sign_up()">إنشاء حساب</a><span class="linea_bajo_nom"></span>
        </li>
      </ul>
      </div>
  <div class="cont_text_inputs">
      <input type="text" class="input_form_sign " placeholder="الأسم الكامل *" name="fullname" />
      <input type="text" class="input_form_sign d_block active_inp" placeholder="اسم المستخدم *" name="username"  autocomplete="off"/>
      <input type="password" class="input_form_sign d_block  active_inp" placeholder="الباسوورد *" name="password" />
      <input type="number" class="input_form_sign" placeholder="رقم الهوية *" name="idnumber" />
      <input type="text" class="input_form_sign" placeholder="رقم الهاتف *" name="phone" />
      <input type="email" class="input_form_sign" placeholder="الأيميل  *" name="email" />
      <select style="height:47px; margin: 0 5%;" class="nice-select input_form_sign  " name="city" id="city">
        <option value="">الجنسية</option>
        <option value="السعودية">السعودية</option>
        <option value="الكويت">الكويت</option>
        <option value="الأمارات">الأمارات</option>
        <option value="مصر">مصر</option>
        <option value="الجزائر">الجزائر</option>
        <option value="لبنان">لبنان</option>
        <option value="سوريا">سوريا</option>

      </select>


      </div>
      <div class="cont_btn">
        
     <button class="btn_sign" name="login">تسجيل دخول</button>
      </div>
    </form>
    </div>
  </div>

</div>

</div>
  <script  src="./script.js"></script>

<?php

  include 'files/footer.php';
  ob_end_flush();
  ?>
