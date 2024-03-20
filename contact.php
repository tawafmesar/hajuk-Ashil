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






    <!-- ***** Features Big Item End ***** -->
    <!-- ***** Home Parallax Start ***** -->
    <section class="mini" id="work-process">
        <!-- <div class="mini-content">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        <div class="info">
                            <h1>الــنــقــل</h1>
                            <p>

                                نختار في حجك اسهل خدمات النقل بما يحقق اعلى درجات الجودة والرضا لدى الحجاج من اختيار الباصات في مكة ونختار سواقيين ذوي خبرةومعرفة في مكة
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div> -->

            <div class="container content-container">
                <h1 class="sc-2cb50690-0 gUhawJ">حول حجك اسهل</h1>
                <h4 class="sc-2cb50690-3 gEsWcx"> هي منصة شاملة للرحلة</h4>
                <p class="sc-2cb50690-6 igFMsV">
حجك اسهل هي موقع تتيح لك خيار التخطيط والحجز وعيش تجربة
الحج الخاصة بك.&nbsp;نُسُك تتيح للحجاج تنظيم وتخطيط جميع تفاصيل زيارتهم بسهولة

إلى حجز الفنادق والرحلات الجوية. مستقبلًا، سيمكنك نُسُك من جدولة
الزيارات للمواقع المهمة، والعثور على وسائل النقل، وتنظيم مسارات الرحلات، والوصول إلى الخدمات على أرض الواقع
مثل تعقب الطواف وغيره الكثير.


                </p>
            </div>
    </section>
    <!-- ***** Home Parallax End ***** -->








    <!-- ***** Contact Us Start ***** -->
    <section class="section colored" id="contact-us">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title" style="color: #1e1e1e;">تواصل معنا</h2>
                    </div>
                </div>

            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Contact Text Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h5 class="margin-bottom-30">تواصل معنا</h5>
                    <div class="contact-text">
                        <p style="color: #1e1e1e;">للأستفسار عن الحملات او الخدمات التي نقدمها
                        <br>يمكنكم في اي وقت ارسال الرسالة</p>
                        <p style="color: #1e1e1e;">وسيتم الرد عليكم في اقرب وقت ممكن من قبل خدمة العملاء</p>
                    </div>
                </div>
                <!-- ***** Contact Text End ***** -->

                <!-- ***** Contact Form Start ***** -->
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="get">
                          <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" class="form-control" id="name" placeholder="اسمك الكامل" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="email" type="email" class="form-control" id="email" placeholder=" رقم الجوال" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" class="form-control" id="message" placeholder="رسالتك" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">إرسال</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section>

    



<?php
include 'files/footer.php';
ob_end_flush();
?>
