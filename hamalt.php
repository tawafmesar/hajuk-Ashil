<?php
ob_start();
session_start();

  include 'files/ini.php';

?>









    <!-- ***** Home Parallax End ***** -->


    <!-- ***** Pricing Plans Start ***** -->
    <section class="section colored" id="pricing-plans">
        <div class="container">
            <h1 style="    text-align: center;  color: #b49164; margin-top: 100px; padding-top: 100px; margin: 15px;font-size: 45px;font-weight: bolder;">

                        الحملات
                </h1>

            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h3 class="pricing-title">الباقة الأولى</h3>
                            <h3 class="pricing-title"> حملة الأحسان</h3>

                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="currency">SAR</span>
                                <span class="price">3,984</span>
                               <span class="period">فئة اقتصادية</span>

                            </div>
                            <ul class="list" style="list-style: none;">
                                <li class="active"><STrong> لمعرفة التفاصيل قم بالحجز</STrong></li>


                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="camp.php" class="main-button">احجز الأن</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->


                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h3 class="pricing-title">الباقة الثانية</h3>
                            <h3 class="pricing-title"> حملة مكه</h3>

                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="currency">SAR</span>
                                <span class="price">8,241</span>
                                <span class="period">فئة متوسطة</span>
                            </div>
                            <ul class="list" style="list-style: none;">
                                <li class="active"><STrong> لمعرفة التفاصيل قم بالحجز</STrong></li>

                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="camp3.php" class="main-button">احجز الأن</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->

                
                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="pricing-item active">
                        <div class="pricing-header">
                            <h3 class="pricing-title">الباقة الثالثة</h3>
                            <h3 class="pricing-title"> حملة منى</h3>

                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="currency">SAR</span>
                                <span class="price">11,841</span>
                                <span class="period">فئة كبار الشخصيات</span>
                            </div>
                            <ul class="list" style="list-style: none;">
                                <li class="active"><STrong> لمعرفة التفاصيل قم بالحجز</STrong></li>


                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="camp2.php" class="main-button">احجز الأن</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Pricing Plans End ***** -->
<?php
include 'files/footer.php';
ob_end_flush();
?>
