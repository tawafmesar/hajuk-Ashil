<?php
ob_start();
session_start();

include 'files/ini.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



if (isset($_SESSION['username'])) {

    $userid = $_SESSION['userid'];


    // $check_pro = $con->prepare("select * from reservation where userid='$userid'");

    $check_pro = $con->prepare("select * from users where userid='$userid'");

    $check_pro->execute();

    $check = $check_pro->fetch();





    $check_pro2 = $con->prepare("SELECT
                                 reservation.* ,
                                 hamalt.*  

                                 FROM reservation

                                 INNER JOIN
                                     hamalt
                                 ON
                                     hamalt.hamalid  = reservation.hamalid 
                                
                                 WHERE reservation.userid = :zid


                                             ");
    // execute the statement

    $check_pro2->execute(array('zid' => $userid));





    $check2 = $check_pro2->fetch();


    if (isset($_GET['delete'])) {
        
        $delete = $_GET['delete'];

        $userid = $_SESSION['userid'];


        $stmtd = $con->prepare("DELETE FROM reservation WHERE userid  = :zid");

                    $stmtd->execute(array('zid' => $userid));

                    $stmtd->execute();


        ?>
                         <script type="text/javascript">
                            Swal.fire({
                                icon: 'success',
                                title: 'تم   حذف الحجز بنجاح  ',
                                showConfirmButton: false,
                                timer: 1950,
                            })

                        </script>
                         <?php
                         header("refresh:2;url=index.php");



                 // WE CAN USE THIS QUERY BUT CHING :ZUSER ? $stmt->execute(array($userid));

                 

                        


    }








    ?>
<style>
    .mainn {

        width: 100%;
        display: flex;
        justify-content: space-between;

        align-items: center;
    }

    .ff {
        width: 55%;
        font-size: 1.2rem;
        font-weight: 600;
        color: #f2f2fe;
        line-height: 165%;
        font-style: normal;
        text-align: right;
        background-color: rgb(0 0 0 / 70%);
        border-radius: 20px;
        padding: 30px;
        font-style: normal;
    }

    .ss {
        width: 40%;
        background-color: rgb(180 145 100 / 70%);
        border-radius: 20px;
    }
    .profile h1{
            font-size: 3rem;
    font-weight: 900;
    text-align: center;
    line-height: 120%;
    margin:20px;
    color:#1f1f1f;

    }
    .profile h3{

    margin:19px;
    color:#474747;

    }
        .profile {

    justify-content: center;

    }

    
</style>



<!-- ***** Features Small Start ***** -->



<div id="containerr" style="    background: #f2f2fe">
    <img id="bg-img" src="assets/images/download.png" alt="Background Image" />
    <!-- ***** Features Big Item Start ***** -->
    <section class="section first padding-top-20 padding-bottom-20" id="content">
        <div class="container">
            <div class="row profile" >

                <div class="col-lg-9 backg col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2  class=" " >بيانات الحاج</h2>

                    </div>
                    <div class="left-text">

                       <h3>
                         <strong> 
                             الأسم الكامل : 
                        </strong>
                        <?php echo $check['fullname']; ?>
                    </h3>    

                     <h3>
                         <strong>
                              الرقم الهوية :
                        </strong>
                    <?php echo $check['idnumber']; ?>
                    </h3>    

                      <h3>
                         <strong>
                               رقم الهاتف :
                        </strong>
                    <?php echo $check['phone']; ?>

                    </h3>    

                    <h3>
                         <strong>
                                الأيميل :
                        </strong>
                    <?php echo $check['email']; ?>

                    </h3>    


                    </div>
                </div>
            </div>

        </div>
    </section>
</div>


<!-- ***** Features Big Item End ***** -->

<?php
    $userid = $_SESSION['userid'];


    $stmt3 = $con->prepare("SELECT  *   FROM reservation   WHERE  userid = :zuserid ");
    $stmt3->execute(
        array(
            'zuserid' => $userid

        )
    );

    $count = $stmt3->rowCount();

    if ($count > 0) {
        ?>

<!-- ***** Features Big Item Start ***** -->
<div id="containerr" style="    background: #f2f2fe">
    <img id="bg-img2" src="assets/images/download2.png" alt="Background Image">

    <section class="section padding-top-20 padding-bottom-20">
        <div class="container">
            <div class="row profile" >
                <div class="col-lg-7 backg col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                   <div class="left-heading">
                        <h2  class=" " >بيانات الحجز</h2>
                    </div>
                    <div class="left-text">

                       <h3>
                         <strong>
                              اسم الحملة :
                        </strong>

                            <?php echo $check2['name']; ?>
                    </h3>    

                     <h3>
                         <strong>
                               رقم الحملة :
                        </strong>
                            <?php echo $check2['number']; ?>

                    </h3>    

                      <h3>
                         <strong>
                               رقم الحجز :
                        </strong>
                                 
                         <?php echo $check2['reservationid']; ?>

                    </h3>    

                      <h3>
                         <strong>
                               نوع الدفع  :
                        </strong>
                                 
                        <?php  if( $check2['payment'] == 1) { echo "الدفع الألكتروني";}else{ echo "الدفع عند الحظور ";} ?>

                       </h3>


                        <h3>
                             <strong>
                                    رقم التواصل : 
                            </strong>

                        <?php echo $check2['phone']; ?>

                        </h3>    


                    </div>

                     <div class="pricing-footer" style="text-align: center; ">
                            <a href="?delete=1" class="main-button" style="color:#1f1f1f;"> حذف الحجز</a>
                        </div>     
                </div>
            </div>
        </section>
    </div>
<?php






    if (!isset($_SESSION['email_sent'])) {

        $mail = new PHPMailer(true);

try {
  
    // Enable verbose debug output
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'hajkashal@gmail.com';
    $mail->Password = 'mbrirxtwqrwzyayb';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

        $mail->setFrom('hajkashal@gmail.com');
        $mail->addAddress($check['email']);

$mail->isHTML(false);
            $mail->Subject = "Your Reservation Data";
            $mail->Body = '
        بيانات الحجز

(يرجى الأحتفاظ بهذه البيانات )
   
        اهلاً بك ' . $check['fullname'] . '

        اسم الحملة : ' . $check2['name'] . '
  
        رقم الحملة : ' . $check2['number'] . '

        رقم الحجز : ' . $check2['reservationid'] . '

        نوع الدفع : ' . ($check2['payment'] == 1 ? 'الدفع الألكتروني' : 'الدفع عند الحظور') . '
 
        رقم التواصل :' . $check2['phone'] ;

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    
    $mail->send();
        $_SESSION['email_sent'] = true;

        echo 'Email sent';

} catch (Exception $e) {
    echo 'Email could not be sent. Error: ', $mail->ErrorInfo;
}


  } else {
        echo 'Email has already been sent.';
    }

}


}





else{

    header('Location: login.php');

    exit();
}

?>
<!-- ***** Features Big Item End ***** -->






<script>
    // Set the date we're counting down to
    var countDownDate = new Date("June 26, 2023 00:00:00").getTime();

    // Update the countdown every 1 second
    var x = setInterval(function () {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the countdown date
        var distance = countDownDate - now;

        // Calculate the days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the countdown clock
        document.getElementById("days").innerHTML = formatTime(days);
        document.getElementById("hours").innerHTML = formatTime(hours);
        document.getElementById("minutes").innerHTML = formatTime(minutes);
        document.getElementById("seconds").innerHTML = formatTime(seconds);

        // If the countdown is over, display a message
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = "EXPIRED";
        }
    }, 1000);


    // Format a number to always have two digits (e.g. "02")
    function formatTime(time) {
        if (time < 10) {
            return "0" + time;
        } else {
            return time;
        }
    }
</script>



<?php
include 'files/footer.php';
ob_end_flush();
?>