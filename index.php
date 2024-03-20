<?php
ob_start();
session_start();

  include 'files/ini.php';

?>
<style>
.mainn{

    width: 100%;
    display: flex;
justify-content: space-between;

align-items: center;
}
.ff{
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

.ss{
width: 40%;
background-color: rgb(180 145 100 / 70%);
    border-radius: 20px;
}
</style>


    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container" style="margin-bottom: 60px;">
                <div class="row">

                <div class="mainn">
                <div class="ff">
                    
                حجك اسهل هو موقع يتيح لك خيار التخطيط والحجز وعيش تجربة
الحج الخاصة بك.&nbsp; تتيح للحجاج تنظيم وتخطيط جميع تفاصيل الحج بسهولة مما يجعلها تجربة مميزة .

                </div>

                <div class="ss">
                        <div id="countdown-container">
        <h1>المتبقي على الحج</h1>
        <div id="countdown">
            <span id="days">00</span>
            <span id="hours">00</span>
            <span id="minutes">00</span>
            <span id="seconds">00</span>
        </div>
        <div id="countdown-labels">
            <span>ايام</span>
            <span>ساعات</span>
            <span>دقائق</span>
            <span>ثواني</span>
        </div>
                     </div>                     
                </div>
                </div>
                </div>

            </div>

        </div>


    </div>


    <div id="containerr" style="    background: #f2f2fe">
         <img id="bg-img" src="assets/images/download.png" alt="Background Image"/>
    <section class="section first padding-top-20 padding-bottom-20"  id="content"  >
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="assets/images/hotel.png" class="rounded img-fluid d-block mx-auto" alt="hotel">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 backg col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">الــسكــن</h2>
                    </div>
                    <div class="left-text">
                        <p>
                            نرتب في
                            <strong>
                                حجك اسهل
                            </strong>

                            سكن الحجاج بعناية ويخضع السكن لتقييم من ناحية المواصفات والطاقة الاستيعابية , ويتم توزيع السكن وفق التناسب والتقارب بين الحجاج ويمكن للحاج اختيار ما يناسبه من حملة.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
  </div>

<div id="containerr" style="    background: #f2f2fe" >
    <img id="bg-img2" src="assets/images/download2.png" alt="Background Image">
    <section class="section padding-top-20 padding-bottom-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 backg col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                    <div class="left-heading">
                        <h2 class="section-title">التـغـذيـة</h2>
                    </div>
                    <div class="left-text">
                        <p>
                            نهتم في
                            <strong>
                                حجك اسهل
                            </strong>
                             في غذاء الحاج الصحي وتتعاقد مع افضل المطاعم لتقديم افضل الأطعمة وتوفير المشروبات الباردة والحارة طوال فترة الحج وكذلك الفواكة والحلويات ويتم تناول وجبات الطعام في اماكن مخصصة للأكل
                       . </p>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="assets/images/food.png" class="rounded img-fluid d-block mx-auto" alt="food">
                </div>
            </div>
        </div>
    </section>
    </div>

    <div id="containerr" style="    background: #f2f2fe">
        <img id="bg-img" src="assets/images/download.png" alt="Background Image">
    <section class="section padding-top-20 padding-bottom-20" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-5  col-md-12 col-sm-12 align-self-center"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="assets/images/bus.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 backg col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">الــنــقــل</h2>
                    </div>
                    <div class="left-text">
                        <p>

                            نختار في
                            <strong>
                             حجك اسهل
                            </strong>
                              خدمات النقل بما يحقق اعلى درجات الجودة والرضا لدى الحجاج من اختيار الباصات في مكة ونختار سواقيين
                            ذوي خبرةومعرفة في مكة
                       . </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
  </div>

    <section class="counter">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong>1340</strong>
                            <span>حجاج</span>
                            <span>لكل موسم معنا</span>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="count-item decoration-top">
                            <strong>13350</strong>
                            <span>حجاج </span>
                            <span>في حجك اسهل </span>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong>11</strong>
                            <span>موسم الحج</span>
                            <span>مع حجك اسهل </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ***** Counter Parallax End ***** -->

    
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("June 14, 2024 00:00:00").getTime();

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
