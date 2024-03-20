<?php
ob_start();
session_start();

  include 'files/ini.php';



?>


<link rel="stylesheet" href="assets/css/class.css">



<div class="depertment_area" style="padding-top: 80px;"  id="floor">
    <div class="container">
<h1 style="    text-align: center;  color: #b49164; margin-top: 100px; padding-top: 100px; margin: 15px;font-size: 45px;font-weight: bolder;">


رحلة الحج
</h1>
<div class="row">
            <div class="col-lg-12">
                <div class="depart_ment_tab mb-30">
                    <ul class="nav" id="test"  id="myTab" role="tablist">
<!-- ONE ROW HEADER single_content  -->

                        <li class="nav-item ">
                            <a class="nav-link active lab" id="S55-tab1" style="padding:5px;" data-toggle="tab" href="#S55" role="tab" aria-controls="contact" aria-selected="true">
                                <h4>
                                    مطار بلد الحج
                                </h4>
                                <div class="board" >
                                <img  class="boaard" src="assets\images\air.png" width="70%" alt="">
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link lab" id="S50-tab2" style="padding:5px;" data-toggle="tab" href="#S50" role="tab" aria-controls="contact" aria-selected="false">
                                <h4>
                                الوصول الى مكه
                                </h4>
                                <div class="board" >
                                <img  class="boaard" src="assets\images\maka.png" width="35%" alt="">
                                </div>
                                </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link small" id="S35-tab3" style="padding:5px;" data-toggle="tab" href="#S35" role="tab" aria-controls="contact" aria-selected="false">
                                <h4>
                                منى 
                                (يوم التروية)
                                </h4>
                                <div class="board" >
                                <img  class="boaard" src="assets\images\ca.png" width="49%" alt="">
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link small" id="S30-tab1" style="padding:5px;" data-toggle="tab" href="#S30" role="tab" aria-controls="contact" aria-selected="false">
                                <h4>
                                 عرفات
                                ( الحج الأكبر)
                                </h4>
                                <div class="board" >
                                <img  class="boaard" src="assets\images\ara.png" width="61%" alt="">

                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link small" id="S14-tab2" style="padding:5px;" data-toggle="tab" href="#S14" role="tab" aria-controls="contact" aria-selected="false">
                                <h4>
                                مزدلفة
                                </h4>
                                <div class="board" >
                                      <img  class="boaard" src="assets\images\hand.png" width="51%" alt="">

                                </div>
                                </a>
                        </li>

                        <li class="nav-item small">
                            <a class="nav-link small" id="S09-tab3" style="padding:5px;" data-toggle="tab" href="#S09" role="tab" aria-controls="contact" aria-selected="false">
                                <h4>
                                    منى 
                                    (جمرة العقبة)
                                </h4>
                                <div class="board" >
                                      <img  class="boaard" src="assets\images\aq.jpg" width="48%" alt="">

                                </div>
                            </a>
                        </li>
        <!-- ONE ROW HEADER single_content  -->

                        <li class="nav-item">
                            <a class="nav-link lab" id="S60-tab3" style="padding:5px;" data-toggle="tab" href="#S60" role="tab" aria-controls="contact" aria-selected="false">
                                <h4>
                                    الأضحية
                                </h4>
                                <div class="board" >
                                    <img  class="boaard" src="assets\images\sha.png" width="43%" alt="">

                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link lab" id="S45-tab3" style="padding:5px;" data-toggle="tab" href="#S45" role="tab" aria-controls="contact" aria-selected="false">
                                <h4>
                                    طواف الأفاضة
                                </h4>
                                <div class="board" >
                                <img  class="boaard" src="assets\images\maka.png" width="35%" alt="">

                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link small" id="S40-tab3" style="padding:5px;" data-toggle="tab" href="#S40" role="tab" aria-controls="contact" aria-selected="false">
                                <h4>
                                    المبيت بمنى
                                </h4>
                                <div class="board" >
                                <img  class="boaard" src="assets\images\ca.png" width="49%" alt="">

                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link small" id="S25-tab3" style="padding:5px;" data-toggle="tab" href="#S25" role="tab" aria-controls="contact" aria-selected="false">
                                <h4>
                                    11 
                                    ذي الحجة
                                    بمنى
                                </h4>
                                <div class="board" >
                                <img  class="boaard" src="assets\images\11.png" width="37%" alt="">

                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link small" id="S19-tab3" style="padding:5px;" data-toggle="tab" href="#S19" role="tab" aria-controls="contact" aria-selected="false">
                                <h4>
                                  12 
                                    ذي الحجة
                                    بمنى
                                </h4>
                                <div class="board" >
                                <img  class="boaard" src="assets\images\12.png" width="37%" alt="">

                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link lab" id="S04-tab3" style="padding:5px;" data-toggle="tab" href="#S04" role="tab" aria-controls="contact" aria-selected="false">
                                <h4>
                                     13
                                    ذي الحجة
                                    بمنى
                                </h4>
                                <div class="board" >
                                <img  class="boaard" src="assets\images\13.png" width="37%" alt="">

                                </div>
                            </a>
                        </li>

<!-- ONE ROW HEADER single_content  -->


<!-- ONE ROW HEADER single_content  -->

                    <li class="nav-item ">
                        <a class="nav-link" id="S61-tab1" style="padding:5px;" data-toggle="tab" href="#S61" role="tab" aria-controls="contact" aria-selected="false">
                            <h4>
                                طوف الوداع
                            </h4>
                            <div class="board" >
                                <img  class="boaard" src="assets\images\maka.png" width="35%" alt="">

                            </div>
                        </a>
                    </li>



        <!-- ONE ROW HEADER single_content  -->


                    </ul>
                </div>
            </div>
        </div>

        <div class="dept_main_info white-bg">
            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="S55" role="tabpanel" aria-labelledby="S55-tab1">
                    <!-- single_content  -->
                    <div class="row align-items-center" style="margin-top:15px;">

                        <div class="col-lg-11">
                            <div class="dept_info txtr">
                            <h3 id="headTx">
                                    الإحرام
                            </h3>
                            <p id="pTx"  style="margin-bottom:0px; margin-top: 10px; margin-right:25px;">
                             <ul style="margin-right:50px;">
                                <li> لبس الإحرام للرجل، وتحرم المرأة في ملابسها العادية.</li>
                                <li>في الطائرة سيمر الحاج بالميقات جوًا، عليه أن يعقد نية الإحرام.</li>
                                <li>الدخول في النسك عند محاذاة الميقات والتلبية قائلًا: لبيّك اللهم لبيّك لبيّك لاشريك لك لبيّك، إن الحمد والنعمة لك والملك لاشريك لك ويستمر في التلبية حتى يصل إلى المشاعر المقدسة.</li>
                                <li>إذا احرم الحاج عليه ان يجتنب جميع محظورات الإحرام.</li>

                            </ul>
                            </p>

                            <h3 id="headTx">
                                    يختار الحاج أحد نسك الحج التالية
                            </h3>
                            <p id="pTx"  style="margin-bottom:0px; margin-top: 10px; margin-right:25px;">
                             <ul style="margin-right:50px;">
                                <li>التمتع: ويكون بالإحرام بالعمرة وحدها فيقول: اللهم لبيك عمرة، ويتمها ثم يتحلل ،</li>
                                <li>فإذا حان وقت الحج يحرم للحج من مكة ويلزمه هدي المتمتع، وهذا الأيسر.</li>
                                <li>الإفراد: ويكون بالإحرام بالحج وحده فيقول : اللهم لبيك حجًا، وليس عليه هدي.</li>
                                <li>القران: ويكون بالإحرام بالحج والعمرة، فيقول: اللهم لبيك حجا وعمرة، والقارن يعمل أعمال الحج فقط ، وأعماله نفس اعمال المفرد لكن يلزمه الهدي.</li>
                            </ul>
                            </p>

                         <h3 id="headTx">
                                تنبيهات
                        </h3>
                            <p id="pTx"  style="margin-bottom:0px; margin-top: 10px; margin-right:25px;">
                             <ul style="margin-right:50px;">
                                <li>يصح إحرام المرأة الحائض، وينبغي لمن أراد الإحرام أن يشترط لنفسه، كأن ينوي قائلاً: نويت الحج والعمرة وأحرمت بهما لله تعالى، لبيك اللهم حجاً وعمرة، اللهم إن حبسني حابس فمحِلِّي حيث حبستني ، وفائدة الاشتراط أنه إن طرأ على الحاج طارئ كمرض يتعذر إكمال الحج معه فله أن يتحلل، وهذا من رحمة الله تعالى وتيسيره.</li>
                                <li>يجوز خلع لبس الإحرام ولبس إحرام آخر إذا احتاج.</li>
                                <li>الحج لا يفسد ولا يبطل بشيء من المحظورات إلا الجماع، وما عدا ذلك يصح الحج مع ارتكابه، مع وجوب الفدية.</li>

                            </ul>
                            </p>
                            </div>
                        </div>
                    </div>
                    <!-- single_content  -->
                </div>



                <div class="tab-pane fade" id="S50" role="tabpanel" aria-labelledby="S50-tab2">
                    <!-- single_content  -->
                    <div class="row align-items-center" style="margin-top:15px;">

                        <div class="col-lg-11">
                        <div class="dept_info txtr"> 
                            <h3 id="headTx">
                                    الطواف
                            </h3>
                            <p id="pTx"  style="margin-bottom:0px; margin-top: 10px; margin-right:25px;">
                             <ul style="margin-right:50px;">
                                    <li>طواف القدوم سبعة أشواط للمفرد والقارن، ثم يصلي ركعتي الطواف خلف مقام إبراهيم إن تيسر، ويجوز لهما تقديم سعي الحج بعد هذا الطواف، فلا يكون عليهما سعي بعد ذلك. ولا يحلقان شيئاً من الشعر بل يبقيان على الإحرام حتى يحين الذهاب للمشاعر.</li>
                                     <li>المتمتع يطوف ويسعى ويقصر من شعره ويتحلل، فإذا حان وقت الذهاب للمشاعر ليلة الثامن يحرم بالحج من مكة.</li>
                            </ul>
                            </p>


                        </div>
                        </div>
                    </div>
                    <!-- single_content  -->
                </div>

                <div class="tab-pane fade" id="S35" role="tabpanel" aria-labelledby="S35-tab3">
                    <!-- single_content  -->
                    <div class="row align-items-center" style="margin-top:15px;">

                        <div class="col-lg-11">
                        <div class="dept_info txtr"> 
                            <h3 id="headTx">
                            منى (يوم التروية)
                            </h3>
                            <p id="pTx"  style="margin-bottom:0px; margin-top: 10px; margin-right:25px;">
                             <ul style="margin-right:50px;">
                                <li>التوجه إلى منى فجر اليوم الثامن من ذي الحجة، ويظلون بها إلى فجر اليوم التاسع.</li>     
                                 <Li>التوجه إلى منى فجر اليوم الثامن من ذي الحجة، ويظلون بها إلى فجر اليوم التاسع.</Li>
                             </ul>
                            </p>

                            <h3 id="headTx">
                                تنبيهات
                            </h3>
                            <p id="pTx"  style="margin-bottom:0px; margin-top: 10px; margin-right:25px;">
                             <ul style="margin-right:50px;">
                                    <li>لبس الإحرام للرجل، وتحرم المرأة في ملابسها العادية. في الطائرة سيمر الحاج بالميقات جوًا، عليه أن يعقد نية الإحرام. الدخول في النسك عند محاذاة الميقات</li>     
                            </ul>
                            </p>

                        </div>
                        </div>
                    </div>
                    <!-- single_content  -->
                </div>



                <div class="tab-pane fade " id="S30" role="tabpanel" aria-labelledby="S30-tab1">
                    <!-- single_content  -->
                    <div class="row align-items-center" style="margin-top:15px;">

                        <div class="col-lg-11">
                        <div class="dept_info txtr"> 
                            <h3 id="headTx">
                        اداب الوقف بعرفات
                            </h3>
                            <p id="pTx"  style="margin-bottom:0px; margin-top: 10px; margin-right:25px;">
                             <ul style="margin-right:50px;">
                                    <li>التوجه إلى عرفات يوم التاسع من ذي الحجة.</li>
                                    <li>يصلى بها الحجاج الظهر ويجمع معها العصر تقديمًا.</li>
                                    <li>يبقى الحجاج في عرفات إلى غروب الشمس.</li>
                                    <li>ينبغي على الحاج أن يتفرغ لربه في هذا اليوم حتى غروب الشمس، وليكثر من الدعاء لنفسه وأهله والمسلمين بخيري الدنيا والآخرة، ويحرص على الأدعية النبوية الجامعة، قال النبي- صلى الله عليه وسلم-: (خَيْرُ الدُّعَاءِ دُعَاءُ يَوْمِ عَرَفَةَ، وَخَيْرُ مَا قُلْتُ أَنَا وَالنَّبِيُّونَ مِنْ قَبْلِي: لَا إِلَهَ إِلَّا اللَّهُ وَحْدَهُ لَا شَرِيكَ لَهُ، لَهُ المُلْكُ وَلَهُ الحَمْدُ وَهُوَ عَلَى كُلِّ شَيْءٍ قَدِيرٌ)</li>

                                </ul>
                            </p>

                        </div>
                        </div>
                    </div>
                    <!-- single_content  -->
                </div>

                <div class="tab-pane fade" id="S14" role="tabpanel" aria-labelledby="S14-tab2">
                    <!-- single_content  -->
                    <div class="row align-items-center" style="margin-top:15px;">

                        <div class="col-lg-11">
                        <div class="dept_info txtr"> 
                            <h3 id="headTx">
                            المبيت في مزدلفة
                            </h3>
                            <p id="pTx"  style="margin-bottom:0px; margin-top: 10px; margin-right:25px;">
                             <ul style="margin-right:50px;">
                             <Li>إذا غربت الشمس نفر الحجيج إلى مزدلفة وعليهم السكينة والوقار.</Li>
                            <Li>فإذا وصلوا صلوا المغرب والعشاء جمعًا.</Li>
                            <Li>ويجمعون حصى الجمار سبع حصيات لرمي جمرة العقبة.</Li>
                            <Li>النبي بات بمزدلفة للفجر.</Li>
                            <Li>مقدار الحصاة بقدر حجم أنملة الأصبع.</Li>
                            <Li>التقاط الحصى من مزدلفة مندوب ليس بواجب، فلو التقط حصى الجمرات من أي مكان صح.</Li>
                        </ul>
                            </p>

                            <h3 id="headTx">
                                تنبيهات
                            </h3>
                            <p id="pTx"  style="margin-bottom:0px; margin-top: 10px; margin-right:25px;">
                             <ul style="margin-right:50px;">
                            <Li> لبس الإحرام للرجل</Li>
                            <Li>وتحرم المرأة في ملابسها العادية. في الطائرة سيمر الحاج بالميقات جوًا، عليه أن يعقد نية الإحرام. الدخول في النسك عند محاذاة الميقات</Li>

                            </ul>
                            </p>

                        </div>
                        </div>
                    </div>
                    <!-- single_content  -->
                </div>

                <div class="tab-pane fade" id="S09" role="tabpanel" aria-labelledby="S09-tab3">
                    <!-- single_content  -->
                    <div class="row align-items-center" style="margin-top:15px;">

                        <div class="col-lg-11">
                        <div class="dept_info txtr"> 
                            <h3 id="headTx">
                        منى (جمرة العقبة)

                        </h3>
                            <p id="pTx"  style="margin-bottom:0px; margin-top: 10px; margin-right:25px;">
                             <ul style="margin-right:50px;">
                                        <li>يتوجه الحجاج إلى منى يوم العيد، ويرمون جمرة العقبة بسبع حصيات تقع في حوض المرمى.</li>
                                        <li>مع بداية الرمي تنقطع التلبية ويبدأ التكبير.</li>
                                        <li>فإذا رمى يحلق الرجل رأسه وتقصر المرأة، وعندئذٍ يحصل التحلل الأول فيجوز كل شيء من محظورات الإحرام عدا النساء.</li>
                                        <li>وبعد الرمي والحلق يسن الاغتسال والتنظف والتطيب ولبس الثياب كما فعل النبي - صلى الله عليه وسلم.</li>
                        
                                </ul>
                            </p>

                        </div>
                        </div>
                    </div>
                    <!-- single_content  -->
                </div>

                <div class="tab-pane fade" id="S60" role="tabpanel" aria-labelledby="S60-tab3">
                    <!-- single_content  -->
                    <div class="row align-items-center" style="margin-top:15px;">

                        <div class="col-lg-11">
                            <div class="dept_info txtr">
                            <h3 id="headTx">
                                    الأضحية
                            </h3>
                            <p id="pTx"  style="margin-bottom:0px; margin-top: 10px; margin-right:25px;">
                             <ul style="margin-right:50px;">
                                    <li>الأضحية:
يتقرب بها الحاج إلى الله، وقد شرعت إحياءً لسنة إبراهيم -عليه الصلاة والسلام-، وتتم في يومٍ من أفضل الأيام عند الله، وهي أفضل ما تقرب به العبد عند الله. ويمكن الاستعانة بموقع أضاحي وهو مشروع المملكة العربية السعودية للإفادة من الهدي والأضاحي بإدارة البنك الإسلامي للتنمية.</li>   
                          
                            </ul>
                            </p>

                            <h3 id="headTx">
                                    يختار الحاج أحد نسك الحج التالية
                            </h3>
                            <p id="pTx"  style="margin-bottom:0px; margin-top: 10px; margin-right:25px;">
                             <ul style="margin-right:50px;">
                                 <li>سنة مشروعة للحاج وغير الحاج، لمن كان في مكة وخارجها، فهي سنة لا تتعلق بأعمال الحج، ووقتها من بعد صلاة العيد يوم 10 إلى غروب شمس يوم 13 من ذي الحجة.</li>   
                            </ul>
                            </p>

                         <h3 id="headTx">
                                تنبيهات
                        </h3>
                            <p id="pTx"  style="margin-bottom:0px; margin-top: 10px; margin-right:25px;">
                             <ul style="margin-right:50px;">
                                    <li>يصح إحرام المرأة الحائض، وينبغي لمن أراد الإحرام أن يشترط لنفسه، كأن ينوي قائلاً: نويت الحج والعمرة وأحرمت بهما لله تعالى، لبيك اللهم حجاً وعمرة، اللهم إن حبسني حابس فمحِلِّي حيث حبستني ، وفائدة الاشتراط أنه إن طرأ على الحاج طارئ كمرض يتعذر إكمال الحج معه فله أن يتحلل، وهذا من رحمة الله تعالى وتيسيره.</li>   
                                    <li>يجوز خلع لبس الإحرام ولبس إحرام آخر إذا احتاج.</li>   
                                    <li>الحج لا يفسد ولا يبطل بشيء من المحظورات إلا الجماع، وما عدا ذلك يصح الحج مع ارتكابه، مع وجوب الفدية.</li>   

                                </ul>
                            </p>
                            </div>
                        </div>
                    </div>
                    <!-- single_content  -->
                </div>

                <div class="tab-pane fade" id="S45" role="tabpanel" aria-labelledby="S45-tab3">
                    <!-- single_content  -->
                    <div class="row align-items-center" style="margin-top:15px;">

                        <div class="col-lg-11">
                        <div class="dept_info txtr"> 
                            <h3 id="headTx">
                                    طواف الإفاضة
                            </h3>
                            <p id="pTx"  style="margin-bottom:0px; margin-top: 10px; margin-right:25px;">
                             <ul style="margin-right:50px;">
                            <li>يتوجه الحجاج إلى الحرم ليطوفوا طواف الإفاضة.</li> 
                            <li>يصلون ركعتي الطواف. </li> 
                            <li>السعي إن لم يكن قد سعى، فإن كان قد قدّم السعي مع طواف القدوم فلا يعيده.</li> 
                        </ul>
                            </p>

                            <h3 id="headTx">
                                تنبيهات
                            </h3>
                            <p id="pTx"  style="margin-bottom:0px; margin-top: 10px; margin-right:25px;">
                             <ul style="margin-right:50px;">
                                <li>الطهارة وستر العورة في الطواف شرط</li>
                                <Li>الطهارة في السعي سنة لا شرط، فلو سعى بغير وضوء صح.</Li>
                                <li>الحائض تنتظر حتى تطهر ثم تطوف طواف الإفاضة، فإن لم يتيسر لها أبدًا الانتظار حتى الطهر بسبب ارتباطها بمواعيد سفر لا يمكن تعديلها فلها أن تأخذ بقول الحنفية أنها تطوف، وعليها بدنة توزّع لفقراء الحرم.</li>
                                <li>يصح سعي المرأة الحائض.</li>
                            </ul>
                            </p>

                        </div>
                        </div>
                    </div>
                    <!-- single_content  -->
                </div>


                <div class="tab-pane fade" id="S40" role="tabpanel" aria-labelledby="S40-tab3">
                    <!-- single_content  -->
                    <div class="row align-items-center" style="margin-top:15px;">

                        <div class="col-lg-11">
                        <div class="dept_info txtr"> 
                            <h3 id="headTx">
                المبيت بمنى مساء العاشر من ذي الحجة (ليلة التشريق الأولى)

                        </h3>
                            <p id="pTx"  style="margin-bottom:0px; margin-top: 10px; margin-right:25px;">
                             <ul style="margin-right:50px;">
                                    <li>يرجع الحاج إلى منى ليبيت بها ليالي التشريق، ويرمي الجمرات.</li>
                                    <li>المبيت بمنى ليالي التشريق يبدأ من مساء يوم 10 (ليلة 11) إلى مساء يوم 12 (ليلة 13) من شهر ذي الحجة.</li>
                                    <li>السنة في أيام التشريق الإكثار من التكبير مطلقًا، وخصوصًا عقب الصلوات.</li>
                                </ul>
                            </p>

                        </div>
                        </div>
                    </div>
                    <!-- single_content  -->
                </div>

                <div class="tab-pane fade" id="S25" role="tabpanel" aria-labelledby="S25-tab3">
                    <!-- single_content  -->
                    <div class="row align-items-center" style="margin-top:15px;">

                        <div class="col-lg-11">
                        <div class="dept_info txtr"> 
                            <h3 id="headTx">
                            يوم 11 من ذي الحجة بمنى
                            </h3>                            
                            <h3 id="headTx">
                                رمي الجمرات
                            </h3>
                            <p id="pTx"  style="margin-bottom:0px; margin-top: 10px; margin-right:25px;">
                            <ul style="margin-right:50px;">
                                       <li>رمي الجمرات الثلاث يبدأ بعد الزوال، ويمتد إلى غروب يوم 13 من شهر ذي الحجة، ويرمي الجمرة الصغرى بسبع حصيات ثم يقف ويدعو طويلًا جدا كما فعل النبي ، ثم يرمي الجمرة الوسطى سبعًا، ثم يقف بعدها ويدعو طويلًا كما فعل النبي، ثم يرمي الكبرى (جمرة العقبة) سبعًا وينصرف.</li>
                        </ul>
                            </p>

                            <h3 id="headTx">
                                تنبيهات
                            </h3>
                            <p id="pTx"  style="margin-bottom:0px; margin-top: 10px; margin-right:25px;">
                            <ul style="margin-right:50px;">
                                <li>من كان عاجزًا عن الرمي فله أن يوكل غيره ليرمي عنه.
                                    </li>   
                        </ul>
                            </p>

                        </div>
                        </div>
                    </div>
                    <!-- single_content  -->
                </div>

                <div class="tab-pane fade" id="S19" role="tabpanel" aria-labelledby="S19-tab3">
                    <div class="row align-items-center" style="margin-top:15px;">

                        <div class="col-lg-11">

                        <div class="dept_info txtr"> 
                            <h3 id="headTx">
                            يوم 12 من ذي الحجة بمنى
                            </h3>                            
                            <h3 id="headTx">
                                رمي الجمرات
                            </h3>
                            <p id="pTx"  style="margin-bottom:0px; margin-top: 10px; margin-right:25px;">
                                 <ul style="margin-right:50px;">
                                    <li>رمي الجمرات الثلاث بعد الزوال.</li>
                                    <li>من أراد التعجل والمغادرة فلابد أن يغادر منى قبل الغروب، فإن غربت الشمس ولم يغادر منى وجب المبيت.
*( يجوز الرمي قبل الزوال في هذا اليوم على قول عطاء وطاووس ومحمد الباقر ورواية عن أبي حنيفة وقول ابن الجوزي وابن عقيل الحنبلي، يمكن الأخذ بهذه الأقوال إذا كان هناك زحام شديد في الرمي هذا اليوم)</li>
                        </ul>
                            </p>

                            <h3 id="headTx">
                                تنبيهات
                            </h3>
                            <p id="pTx"  style="margin-bottom:0px; margin-top: 10px; margin-right:25px;">
                            <ul style="margin-right:50px;">
                                <li>من كان عاجزًا عن الرمي فله أن يوكل غيره ليرمي عنه.
                                    </li>   
                        </ul>
                            </p>

                        </div>
                        </div>
                    </div>
                    <!-- single_content  -->
                </div>
                <div class="tab-pane fade" id="S04" role="tabpanel" aria-labelledby="S04-tab3">
                    <!-- single_content  -->
                    <div class="row align-items-center" style="margin-top:15px;">

                        <div class="col-lg-11">
                        <div class="dept_info txtr"> 
                            <h3 id="headTx">
                            يوم 13 من ذي الحجة بمنى
                            </h3>                            
                            <h3 id="headTx">
                                رمي الجمرات
                            </h3>
                            <p id="pTx"  style="margin-bottom:0px; margin-top: 10px; margin-right:25px;">
                            <ul style="margin-right:50px;">
                                <li>رمي الجمرات الثلاث بعد الزوال وينتهي بالغروب.</li>

                        </ul>
                            </p>


                        </div>
                        </div>
                    </div>
                    <!-- single_content  -->
                </div>


                <div class="tab-pane fade " id="S61" role="tabpanel" aria-labelledby="S61-tab1">
                    <!-- single_content  -->
                 <div class="row align-items-center" style="margin-top:15px;">

                        <div class="col-lg-11">
                        <div class="dept_info txtr"> 
                     
                            <h3 id="headTx">
                                رمي الجمرات
                            </h3>
                            <p id="pTx"  style="margin-bottom:0px; margin-top: 10px; margin-right:25px;">
                            <ul style="margin-right:50px;">
                                <li>هو المحطة الأخيرة من رحلة الحج.</li>
                                <li>يطوف الحاج طواف الوداع ثم يسافر مباشرة.</li>
                                <li>أداء طواف الوداع واجب، فمن تركه فعليه دم.</li>
                                <li>إذا حاضت المرأة سقط عنها طواف الوداع.</li>

                        </ul>
                            </p>


                        </div>
                        </div>
                    </div>
                    <!-- single_content  -->
                </div>


    



            </div>
        </div>

    </div>
</div>




  <!-- End Video -->

      <script src="assest/js/bootstrap.mi.js"></script>

<?php
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
      $(document).ready(function() {
      $('.js-example-basic-multiple').select2();
  });
      </script>
