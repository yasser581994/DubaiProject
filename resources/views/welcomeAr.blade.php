
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Smoth One Page Multi Purpose Template">
    <meta name="keywords" content="onepageboss, new, html, one page, bootstrap, Business, new, Corporate, Agency html template, design, creative, onepage, clean, modern">
    <meta name="author" content="Tanvir Rahman Hridoy">
    <!-- PAGE TITLE -->
    <title>معرض دبي العقاري</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/bootstrap/css/bootstrap.min.css')}}">
    <!-- ALL GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/fonts/font-awesome.css')}}">
    <!-- OWL CAROSEL CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/owlcarousel/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/owlcarousel/css/owl.theme.css')}}">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}">
    <!-- MAIN STYLE CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/main_ar.css')}}">
    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
    <!-- COLOR SWITCHER JS -->
    <link href="{{asset('frontend/assets/switcher/switcher.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/switcher/style1.css')}}" rel="stylesheet" id="colors">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/accordion.css')}}">
    <link rel="icon" href="{{asset('frontend/assets/images/gallery/logo.png')}}" type="image/gif" sizes="16x16">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="{{asset('frontend/assets/css/gallery_main.css')}}">
    <![endif]-->

</head>

<body>
<!-- START PRELOADER AREA-->
<div class="preloader-area">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>
<!-- END PRELOADER AREA -->

<!-- START HOMEPAGE DESIGN AREA -->
<header id="home" class="welcome-area">
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <!-- START LOGO DESIGN AREA -->
                    <div class="logo">
                        <a href="{{route('welcome.index')}}">
                            <img src="{{ url('frontend/assets/images/logo.png') }}" >
                        </a>
                    </div>
                    <!-- END LOGO DESIGN AREA -->
                </div>
                <div class="col-sm-9" id="top_icons">
                    <div class="tour-info">
                        <ul>
                            <li><i class="fa fa-phone"></i>
                                <a href="https://api.whatsapp.com/send?phone={{\App\Models\Setting::where('setting_name','phone')->first()->setting_value}}" target="_blank">
                                    {{\App\Models\Setting::where('setting_name','phone')->first()->setting_value}}</a></li>
                            <li><i class="fa fa-phone"></i>
                                <a href="mailto:{{\App\Models\Setting::where('setting_name','email')->first()->setting_value}}" target="_blank">
                                    {{\App\Models\Setting::where('setting_name','email')->first()->setting_value}}</a></li>
                            <li><a href="{{Route('welcome.index',['lang'=>'en'])}}" id="Lang" >English</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="welcome-image-area" data-stellar-background-ratio="0.6">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="header-text text-center">
                                <h2>مرحبا بك  في    <br>معرض دبي العقاري</h2>
                                <p>20 و 21 نوفمبر 2020</p>
                                <p>بفندق الدوسيت بالتجمع الخامس</p>
                                {{--                                <a class="slide-btn smoth-scroll" href="#contact">book a tour</a>--}}
                                {{--                                <a class="slide-btn smoth-scroll" href="#place">awesome places</a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- / END HOMEPAGE DESIGN AREA -->


<!-- START TOUR PLACE DESIGN AREA -->
@include('backend.partials.toaster')



<div class="col-lg-6">
    <section id="contact" class="contact-area section-padding" data-stellar-background-ratio="0.6">


        <div class="col-lg-12">
            <div class="section-title">
                <h2>سجل الآن</h2>
            </div>
        </div>

        <div class="row col-lg-12">
            <div class="col-lg-6">
                <div class="single-contact wow fadeInUp" data-wow-delay=".4s">
                    <div class="contact-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <h2>الهاتف:</h2>
                    <p>{{\App\Models\Setting::where('setting_name','phone')->first()->setting_value}}</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-contact wow fadeInUp" data-wow-delay=".6s">
                    <div class="contact-icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <h2>البريد الالكتروني:</h2>
                    <p>{{\App\Models\Setting::where('setting_name','email')->first()->setting_value}}</p>
                </div>
            </div>
        </div>
        <div class="row contact-form-design-area">
            <div class="col-lg-12">
                <!-- START CONTACT FORM DESIGN AREA -->
                <div class="contact-form">
                    <form id="contact-form" method="post" action="{{Route('messages.store')}}">
                        @csrf()
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <input type="text" name="name" class="form-control" id="first-name" placeholder="الاسم" required="required">
                            </div>
                            <div class="form-group col-lg-4">
                                <input type="email" name="email" class="form-control" id="email" placeholder="البريد الالكتروني" required="required">
                            </div>
                            <div class="form-group col-lg-4">
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="الهاتف ">
                            </div>

                            <div class="form-group col-lg-12">
                                <textarea rows="6" name="message" class="form-control" id="description" placeholder="اترك رسالتك" required="required"></textarea>
                            </div>
                            <input type="hidden" name="utm_source" value="{{Request()->utm_source}}">
                            <input type="hidden" name="utm_medium" value="{{Request()->utm_medium}}">

                            <div class="col-lg-12 text-center">
                                <div class="actions wow fadeInUp" data-wow-delay=".4s">
                                    <input type="submit" value="ارسال" name="submit" id="submitButton" class="" title="Submit Your Message!">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- / END CONTACT FORM DESIGN AREA -->
            </div>
        </div>

    </section>
</div>

<div class="col-lg-6">
    <div id="About">
        <h2>نبذة عن المعرض</h2>
        <p id="AboutInner">

            يسعدنا تقديم معرض دبي العقاري في حدث ضخم لمدة يومين في 20 و 21 نوفمبر 2020 ، بفندق الدوسيت بالتجمع الخامس من 10:00 صباحًا إلى 10:00 مساءً ، حيث تتاح لك الفرصة لاختيار منزل أحلامك من بين مجموعة متنوعة من المشاريع من مطوري العقارات المحليين والدوليين الرائدين لدينا في دبي واحصل على فرصة لمقابلة خبرائنا شخصيًا لمناقشة الفرص الاستثمارية التي تناسبك.

        </p>
        <h2>     أسباب حضور معرض دبي العقاري:</h2>
        <ul>
            <li style="list-style-type: disc">•	اختبر عرضًا فريدًا لعقارات دبي والإمارات العربية المتحدة.</li>
            <li style="list-style-type: disc">•	هذا هو المكان المثالي لتجد عقارك  المتميز ومناقشة خطط الاستثمار المستقبلية مع كبار الخبراء والوكلاء.</li>
            <li style="list-style-type: disc;margin-bottom: 20px">•	هذا هو المكان المثالي لتجد عقارك  المتميز ومناقشة خطط الاستثمار المستقبلية مع كبار الخبراء والوكلاء.</li>

        </ul>

        <ul>
            <li><i class="fa fa-location-arrow"></i><b>•	المكان:</b> فندق الدوسيت بالتجمع الخامس – القاهرة الجديدة</li>
            <li><i class="fa fa-calendar"></i><b>•	التاريخ:</b> 20 و 21 نوفمبر 2020</li>
            <li><i class="fa fa-history"></i><b>•	الوقت:</b> من ال10 ص و حتى ال10 م</li>
            <li><i class="fa fa-money"></i><b>الدخول:</b> مجاني</li>
        </ul>









    </div>
</div>




<section id="place" class="tour-places section-padding hidden ">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2>tour places</h2>
                </div>
            </div>
        </div>
        <div class="tour-list">
            <!-- START SINGLE TOUR PLACE DESIGN AREA -->
            <div class="single-place">
                <img src="{{asset('frontend/assets/images/place/place1.jpg')}}" alt="">
                <div class="tour-des">
                    <h2>cox's bazar sea beach</h2>
                    <h3>chitagong, bangladesh</h3>
                    <h4>$2200<span>$3200</span></h4>
                </div>
            </div>
            <!-- / END SINGLE TOUR PLACE DESIGN AREA -->
            <!-- START SINGLE TOUR PLACE DESIGN AREA -->
            <div class="single-place">
                <img src="{{asset('frontend/assets/images/place/place2.jpg')}}" alt="">
                <div class="tour-des">
                    <h2>Nice building</h2>
                    <h3>dhaka,bangladesh</h3>
                    <h4>$2344<span>$3200</span></h4>
                </div>
            </div>
            <!-- / END SINGLE TOUR PLACE DESIGN AREA -->
            <!-- START SINGLE TOUR PLACE DESIGN AREA -->
            <div class="single-place">
                <img src="{{asset('frontend/assets/images/place/place3.jpg')}}" alt="">
                <div class="tour-des">
                    <h2>sundorban bromon</h2>
                    <h3>australia</h3>
                    <h4>$1290<span>$3200</span></h4>
                </div>
            </div>
            <!-- / END SINGLE TOUR PLACE DESIGN AREA -->
            <!-- START SINGLE TOUR PLACE DESIGN AREA -->
            <div class="single-place">
                <img src="{{asset('frontend/assets/images/place/place4.jpg')}}" alt="">
                <div class="tour-des">
                    <h2>norjahan hall</h2>
                    <h3>kashmir,india</h3>
                    <h4>$2000 <span>$3200</span></h4>
                </div>
            </div>
            <!-- / END SINGLE TOUR PLACE DESIGN AREA -->
            <!-- START SINGLE TOUR PLACE DESIGN AREA -->
            <div class="single-place">
                <img src="{{asset('frontend/assets/images/place/place1.jpg')}}" alt="">
                <div class="tour-des">
                    <h2>cox's bazar sea beach</h2>
                    <h3>chitagong, bangladesh</h3>
                    <h4>$2200<span>$3200</span></h4>
                </div>
            </div>
            <!-- / END SINGLE TOUR PLACE DESIGN AREA -->
        </div>
    </div>
</section>
<!-- / END  TOUR PLACE DESIGN AREA -->





















<div class="clearfix"></div>
<section id="download" class="call-to-area " data-stellar-background-ratio="0.6">
    <div class="container">
        <div class="col-md-12">
            <div class="call-to-area-text text-center wow fadeInUp" data-wow-delay=".4s">
                <h2>استمتع بعروضنا الخاصة عند الحجز المبدئي</h2>
            </div>
        </div>
        <div class="row">
            <!-- START SINGLE SERVICE DESIGN AREA -->
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".2s">
                <div class="single-service">
                    <div class="service-icon"><i class="fa fa-bus" aria-hidden="true"></i>
                    </div>
                    <h4></h4>
                    <p>•	ستحصل على رحلة لمدة 3 أيام إلى دبي متضمنة: تذكرة طيران + إقامة فندقية مجانية </p>
                </div>
            </div>
            <!-- / END SINGLE SERVICE DESIGN AREA -->
            <!-- START SINGLE SERVICE DESIGN AREA -->
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".4s">
                <div class="single-service">
                    <div class="service-icon"><i class="fa fa-calendar" aria-hidden="true"></i>
                    </div>
                    <h4></h4>
                    <p>	تأشيرة إقامة لمدة عامين على أي وحدة يزيد سعرها عن 4 ملايين جنيه مصري	</p>
                </div>
            </div>
            <!-- / END SINGLE SERVICE DESIGN AREA -->
            <!-- START SINGLE SERVICE DESIGN AREA -->
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".6s">
                <div class="single-service">
                    <div class="service-icon"><i class="fa fa-money" aria-hidden="true"></i>
                    </div>
                    <h4></h4>
                    <p>أسعار الوحدات تبدأ من 2 مليون جنيه مصري</p>
                </div>
            </div>
            <!-- / END SINGLE SERVICE DESIGN AREA -->
        </div>




        {{--            <div class="col-md-12">--}}
        {{--                <div class="call-to-area-text text-center wow fadeInUp" data-wow-delay=".4s">--}}
        {{--                    <h2>Reasons To Attend The Dubai Property Show</h2>--}}
        {{--                    <ul id="Reason">--}}
        {{--                        <li>Experience a unique showcase of Dubai and UAE properties. Our aim is to bring you the finest not-to-miss real estate opportunities as well as network with property experts in one place.--}}
        {{--                        </li>--}}
        {{--                        <li>This is the perfect place to find fantastic property and discuss future investment plans with leading experts and agents.</li>--}}
        {{--                        <li>Learn more about living in Dubai and what it has to offer you both personally and professionally, find the right financial consultant for your needs and discover what property would suit you best; from budget apartments to luxurious villas to beach and commercial properties and more--}}
        {{--                        </li>--}}
        {{--                        <li>You’d get a 3-days trip to Dubai including: Air ticket + Free hotel accommodation upon initial reservation and a 2 years Resident Visa on any unit above 4M EGP--}}
        {{--                        </li>--}}
        {{--                        <li>Redeem our special offers and prices that are applied during event days only--}}
        {{--                        </li>--}}
        {{--                    </ul>--}}
        {{--                </div>--}}
        {{--            </div>--}}
    </div>
    </div>
</section>






<!-- START TESTIMONIAL DESIGN AREA -->

<!-- / END TESTIMONIAL DESIGN AREA -->
<!-- START CALL TO ACTION DESIGN AREA -->

<section id="service" class="service-area section-padding">
    <div class="container">

        <div class="row">



            <div class="col-sm-12">
                <div class="section-title">
                    <h2>لماذا تستثمر في دبي؟</h2>
                </div>
            </div>


            <div class="col-md-8">
                <button class="accordion active">موقع استراتيجي</button>
                <div class="panel" style="max-height:none;">
                    <p>
                        تمتاز دبي بموقع استراتيجي يربط بين قارات العالم: أوروبا، آسيا وأفريقيا.                    </p>
                </div>

                <button class="accordion">سوق عقارية عالية السيولة </button>
                <div class="panel">
                    <p>
                        يعد الاستثمار في عقارات دبي سهلا ، ويسيرا ً ، وغير مكلف نسبيا، وثمة عوامل كثيرة تساهم في تعزيز هذا القطاع، ومنها
                        <br>
                        •
                        العوائد الإيجارية وفق أعلى المعدلات العالمية
                        <br>
                        • الزيادة المستمرة في أسعار العقارات
                        <br>
                        • وفرة خيارات التمويل
                        <br>
                        • الإعفاء الضريبي

                    </p>
                </div>

                <button class="accordion">سهولة تأسيس الشركات  </button>
                <div class="panel">
                    <p>
                        تُقدم المناطق الحرة ميزة التملك الأجنبي %100 ، ً فضلا عن إعفاء من الرسوم الجمركية، وحرية التصرف برأس المال والأرباح %100،
                        <br>
                        إلى جانب الإعفاء من ضرائب الشركات
                    </p>
                </div>

                <button class="accordion">الحياة الآمنة</button>
                <div class="panel">
                    <p>
                        تتبوأ الإمارات العربية المتحدة المركز الثاني في قائمة الدول الأكثر أمانا في العالم
                    </p>                    </div>
                <button class="accordion">نظام السوق الحر المفتوح </button>
                <div class="panel">
                    <p>
                        لعبت سياسات السوق المفتوح، جنبا إلى جنب مع محدودية التدخل الحكومي والقوانين الناظمة للقطاع الخاص، دورا ً جوهريا في اجتذاب االاستثمارات الأجنبية المباشرة

                    </p>                </div>
                <button class="accordion">بنية تحتية بمعايير عالمية   </button>
                <div class="panel">
                    <p>
                        عملت دبي على الاستثمار بقوة في تعزيز بنيتها التحتية الخاصة بأنظمة النقل، والاتصالات، والصناعات، الأمر الذي ساهم في جعلها  وجهة فريدة تجتذب الشركات العالمية

                    </p>
                </div>
                <button class="accordion">استقرار العملة  </button>
                <div class="panel">
                    <p>
                        يرتبط الدرهم الإماراتي مباشرة بالدولار الأمريكي الذي ينعم بالاستقرار و الإقبال العالمي منذ عقود طويلة، ما يضمن للدرهم الإماراتي استقرار السعر وتحقيق النمو، ناهيك عن تعزيز قطاع الاستيراد والتصدير                    </p>

                </div>






            </div>


            <div class="col-md-4" >
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VySuvT6uG1w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="video"></iframe>
            </div>

        </div>


    </div>
</section>

<!-- / END CALL TO ACTION DESIGN AREA -->



<!-- gallery -->
<div class="service-area section-padding Gallery">

    <div class="col-sm-12">
        <div class="section-title">
            <h2>مشاريعنا المميزة
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
               data-image="{{asset('frontend/assets/images/gallery/img1.jpg')}}"
               data-target="#image-gallery">
                <img class="img-thumbnail"
                     src="{{asset('frontend/assets/images/gallery/img1.jpg')}}"
                     alt="Another alt text">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
               data-image="{{asset('frontend/assets/images/gallery/img2.jpg')}}"
               data-target="#image-gallery">
                <img class="img-thumbnail"
                     src="{{asset('frontend/assets/images/gallery/img2.jpg')}}"
                     alt="Another alt text">
            </a>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
               data-image="{{asset('frontend/assets/images/gallery/img3.jpg')}}"
               data-target="#image-gallery">
                <img class="img-thumbnail"
                     src="{{asset('frontend/assets/images/gallery/img3.jpg')}}"
                     alt="Another alt text">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
               data-image="{{asset('frontend/assets/images/gallery/img4.jpg')}}"
               data-target="#image-gallery">
                <img class="img-thumbnail"
                     src="{{asset('frontend/assets/images/gallery/img4.jpg')}}"
                     alt="Another alt text">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
               data-image="{{asset('frontend/assets/images/gallery/img5.jpg')}}"
               data-target="#image-gallery">
                <img class="img-thumbnail"
                     src="{{asset('frontend/assets/images/gallery/img5.jpg')}}"
                     alt="Another alt text">
            </a>
        </div>



        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
               data-image="{{asset('frontend/assets/images/gallery/img6.jpg')}}"
               data-target="#image-gallery">
                <img class="img-thumbnail"
                     src="{{asset('frontend/assets/images/gallery/img6.jpg')}}"
                     alt="Another alt text">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
               data-image="{{asset('frontend/assets/images/gallery/img7.jpg')}}"
               data-target="#image-gallery">
                <img class="img-thumbnail"
                     src="{{asset('frontend/assets/images/gallery/img7.jpg')}}"
                     alt="Another alt text">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
               data-image="{{asset('frontend/assets/images/gallery/img8.jpg')}}"
               data-target="#image-gallery">
                <img class="img-thumbnail"
                     src="{{asset('frontend/assets/images/gallery/img8.jpg')}}"
                     alt="Another alt text">
            </a>
        </div>



        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
               data-image="{{asset('frontend/assets/images/gallery/img9.jpg')}}"
               data-target="#image-gallery">
                <img class="img-thumbnail"
                     src="{{asset('frontend/assets/images/gallery/img9.jpg')}}"
                     alt="Another alt text">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
               data-image="{{asset('frontend/assets/images/gallery/img10.jpg')}}"
               data-target="#image-gallery">
                <img class="img-thumbnail"
                     src="{{asset('frontend/assets/images/gallery/img10.jpg')}}"
                     alt="Another alt text">
            </a>
        </div>



        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--End Gallery -->
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13817.576062441589!2d31.4552812!3d30.025552!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdd32554012caf391!2sDusit%20Thani%20Lakeview%20Cairo!5e0!3m2!1sen!2seg!4v1605103799122!5m2!1sen!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" id="map"></iframe>

<!-- START CALL TO ACTION DESIGN AREA -->
<section id="download" class="call-to-area" data-stellar-background-ratio="0.6">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-area-text text-center">
                    <h2>احصل على عروضنا الخاصة و أسعارنا المميزة خلال أيام المعرض فقط</h2>
                    <a class="smoth-scroll" href="#contact">سجل الآن</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / END CALL TO ACTION DESIGN AREA -->



<!-- START FOOTER DESIGN AREA -->
<footer class="footer-area section-padding ">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">

                <div class="footer-text">
                    <h6>
                        جميع الحقوق محفوظة لدي جولد فاليو
                    </h6>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- / END CONTACT DETAILS DESIGN AREA -->

<!-- START SCROOL UP DESIGN AREA -->
<div class="scroll-to-up">
    <div class="scrollup">
        <i class="fa fa-angle-up"></i>
    </div>
</div>
<!-- / END SCROOL UP DESIGN AREA -->



<!-- SWITCHER DESIGN AREA -->
<div id="style-switcher" class="hidden">
    <h2>Choose Color<a href="#"><i class="fa fa-cog fa-spin"></i></a></h2>
    <div>
        <ul class="colors" id="color1">
            <li>
                <a href="#" class="style1"></a>
            </li>
            <li>
                <a href="#" class="style2"></a>
            </li>
            <li>
                <a href="#" class="style3"></a>
            </li>
            <li>
                <a href="#" class="style4"></a>
            </li>

        </ul>



    </div>
</div>
<!-- / END SWITCHER DESIGN AREA -->

<!-- LATEST JQUERY -->
<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
<!-- BOOTSTRAP JS -->
<script src="{{asset('frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- OWL CAROUSEL JS  -->
<script src="{{asset('frontend/assets/owlcarousel/js/owl.carousel.min.js')}}"></script>
<!-- STEALLER JS -->
<script src="{{asset('frontend/assets/js/jquery.stellar.min.js')}}"></script>
<!-- YOUTUBE JS -->
<script src="{{asset('frontend/assets/js/jquery.mb.YTPlayer.min.js')}}"></script>
<script type="text/javascript">
    $('.player').mb_YTPlayer();
</script>
<!-- WOW JS -->
<script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
<!-- GOOGLE MAP JS -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA"></script>
<script src="{{asset('frontend/assets/js/gmap3.min.js')}}"></script>
<!-- WOW JS -->
{{--<script src="{{asset('frontend/assets/js/form-contact.js')}}"></script>--}}
<!-- COLOR SWITCHER -->
<script src="{{asset('frontend/assets/switcher/switcher.js')}}"></script>
<!-- scripts js -->
<script src="{{asset('frontend/assets/js/scripts.js')}}"></script>

<!-- Gallery -->
<script>
    let modalId = $('#image-gallery');

    $(document)
        .ready(function () {

            loadGallery(true, 'a.thumbnail');

            //This function disables buttons when needed
            function disableButtons(counter_max, counter_current) {
                $('#show-previous-image, #show-next-image')
                    .show();
                if (counter_max === counter_current) {
                    $('#show-next-image')
                        .hide();
                } else if (counter_current === 1) {
                    $('#show-previous-image')
                        .hide();
                }
            }

            /**
             *
             * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
             * @param setClickAttr  Sets the attribute for the click handler.
             */

            function loadGallery(setIDs, setClickAttr) {
                let current_image,
                    selector,
                    counter = 0;

                $('#show-next-image, #show-previous-image')
                    .click(function () {
                        if ($(this)
                            .attr('id') === 'show-previous-image') {
                            current_image--;
                        } else {
                            current_image++;
                        }

                        selector = $('[data-image-id="' + current_image + '"]');
                        updateGallery(selector);
                    });

                function updateGallery(selector) {
                    let $sel = selector;
                    current_image = $sel.data('image-id');
                    $('#image-gallery-title')
                        .text($sel.data('title'));
                    $('#image-gallery-image')
                        .attr('src', $sel.data('image'));
                    disableButtons(counter, $sel.data('image-id'));
                }

                if (setIDs == true) {
                    $('[data-image-id]')
                        .each(function () {
                            counter++;
                            $(this)
                                .attr('data-image-id', counter);
                        });
                }
                $(setClickAttr)
                    .on('click', function () {
                        updateGallery($(this));
                    });
            }
        });

    // build key actions
    $(document)
        .keydown(function (e) {
            switch (e.which) {
                case 37: // left
                    if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
                        $('#show-previous-image')
                            .click();
                    }
                    break;

                case 39: // right
                    if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
                        $('#show-next-image')
                            .click();
                    }
                    break;

                default:
                    return; // exit this handler for other keys
            }
            e.preventDefault(); // prevent the default action (scroll / move caret)
        });


</script>
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>

</body>

</html>
