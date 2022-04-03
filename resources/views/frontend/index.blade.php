@extends('frontend.frontend_master')

@section('main_content')
            <!--================Home Banner Area =================-->
            <section class="home_banner_area">
                <div class="container box_1620">
                    <div class="banner_inner d-flex align-items-center">
                     <div class="banner_content">
                         <div class="media">
                             <div class="d-flex">
                                 <img src="{{asset('frontend/img/personal.png')}}" alt="">
                             </div>
                             <div class="media-body">
                                 <div class="personal_text">
                                     <h6>Hello, i am</h6>
                                     <h3>Nanda Iqbal Hanafi</h3>
                                     <h4>Software Development Enthusiast</h4>
                                     <ul class="list basic_info">
                                         <li><a href="#"><i class="lnr lnr-calendar-full"></i> 31st December, 2001</a></li>
                                         <li><a href="https://wa.me/6283101487741"><i class="lnr lnr-phone-handset"></i> 083101487741</a></li>
                                         <li><a href="mailto:nandaiqbalhanafii@gmail.com"><i class="lnr lnr-envelope"></i> nandaiqbalhanafii@gmail.com</a></li>
                                         <li><a href="#"><i class="lnr lnr-home"></i> Kulon Progo, Indonesia</a></li>
                                     </ul>
                                     <ul class="list personal_social">
                                        <li><a href="https://github.com/nandaiqbalh"><i class="fa fa-github"></i></a></li>
                                        <li><a href="https://www.linkedin.com/in/nanda-iqbal-hanafi-b2a4031bb/"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="https://medium.com/@nandaiqbalh/"><i class="fa fa-medium"></i></a></li> 
                                        <li><a href="https://www.instagram.com/nandaiqbalh/"><i class="fa fa-instagram"></i></a></li>
                                        <li class="ftco-animate"><a href="mailto:nandaiqbalhanafii@gmail.com"><span class="fa fa-paper-plane"></span></a></li>
 
                                    </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!--================End Home Banner Area =================-->
         
         <!--================Welcome Area =================-->
         <section class="welcome_area p_120">
             <div class="container">
                 <div class="row welcome_inner">
                     <div class="col-lg-6">
                         <div class="welcome_text">
                             <h4>About Myself</h4>
                             <p>A Software Development Enthusiast who likes to explore things || Lifelong Learner ^^
                                 <br><br> I am 20 years old and a second-year student of Computer Engineering at Diponegoro University, Indonesia. I like to make beautiful things with lines of code. I'm currently learning many things, especially to make my dream come true, which is to become a Professional Mobile Developer.</p>
                             <div class="row">
                                 <div class="col-md-4">
                                     <div class="wel_item">
                                         <i class="lnr lnr-heart-pulse"></i>
                                         <h4>Sports</h4>
                                     </div>
                                 </div>
                                 <div class="col-md-4">
                                     <div class="wel_item">
                                         <i class="lnr lnr-book"></i>
                                         <h4>Books</h4>
                                     </div>
                                 </div>
                                 <div class="col-md-4">
                                     <div class="wel_item">
                                         <i class="lnr lnr-film-play"></i>
                                         <h4>Movies</h4>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!--================End Welcome Area =================-->
         
         <!--================My Tabs Area =================-->
         
         <!--================End My Tabs Area =================-->
         
         <!--================Feature Area =================-->
         {{-- <section class="feature_area p_120">
             <div class="container">
                 <div class="main_title">
                     <h2>offerings to my clients</h2>
                     <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
                 </div>
                 <div class="feature_inner row">
                     <div class="col-lg-4 col-md-6">
                         <div class="feature_item">
                             <i class="flaticon-city"></i>
                             <h4>Architecture</h4>
                             <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $17 each.</p>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                         <div class="feature_item">
                             <i class="flaticon-skyline"></i>
                             <h4>Interior Design</h4>
                             <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $17 each.</p>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                         <div class="feature_item">
                             <i class="flaticon-sketch"></i>
                             <h4>Concept Design</h4>
                             <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $17 each.</p>
                         </div>
                     </div>
                 </div>
             </div>
         </section> --}}
         <!--================End Feature Area =================-->
         
         <!--================Home Gallery Area =================-->
         <section class="home_gallery_area p_120">
             <div class="container">
                 <div class="main_title">
                     <h2>My Projects</h2>
                     <p>These are some of the projects I've worked on.</p>
                 </div>
                 <div class="isotope_fillter">
                     <ul class="gallery_filter list">
                         <li class="active" data-filter="*"><a href="#">All</a></li>
                         <li data-filter=".mobile"><a href="#">Mobile Apps</a></li>
                         <li data-filter=".website"><a href="#">Website</a></li>
                         <li data-filter=".uiux"><a href="#">UI/UX</a></li>
                     </ul>
                 </div>
             </div>
             <div class="container">
                 <div class="gallery_f_inner row imageGallery1">
                    <div class="col-lg-4 col-md-4 col-sm-6 mobile">
                        <div class="h_gallery_item">
                            <div class="g_img_item">
                                <img class="img-fluid" src="{{asset('frontend/img/dice_demo.gif')}}" alt="">
                                <a class="light" href="{{asset('frontend/img/dice_demo.gif')}}"><img src="{{asset('frontend/img/dice_demo.gif')}}" alt=""></a>
                            </div>
                            <div class="g_item_text">
                                <h4>Guess the Dice</h4>
                                <p><a href="https://github.com/nandaiqbalh/guess-the-dice">Visit Github Page</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mobile">
                        <div class="h_gallery_item">
                            <div class="g_img_item">
                                <img class="img-fluid" src="{{asset('frontend/img/demo/earthweather/earthweather_demo.gif')}}" alt="">
                                <a class="light" href="{{asset('frontend/img/demo/earthweather/earthweather_demo.gif')}}"><img src="{{asset('frontend/img/demo/earthweather/earthweather_demo.gif')}}" alt=""></a>
                            </div>
                            <div class="g_item_text">
                                <h4>EarthWeather</h4>
                                <p><a href="https://github.com/nandaiqbalh/earth-weather">Visit Github Page</a></p>
                            </div>
                        </div>
                    </div>  
                    <div class="col-lg-4 col-md-4 col-sm-6 uiux">
                        <div class="h_gallery_item">
                                <iframe width="360" height="640" src="https://xd.adobe.com/embed/a24f7956-7daa-480a-8dfe-b3405ee2241b-f71c/" frameborder="0" allowfullscreen></iframe>                            
                            <div class="g_item_text">
                                <h4><a href="https://xd.adobe.com/view/a24f7956-7daa-480a-8dfe-b3405ee2241b-f71c/">NontonMovie</a></h4>
                                <p>You can do this UI/UX Design simulation.</p>
                            </div>
                        </div>
                    </div>  
                     {{-- <div class="col-lg-4 col-md-4 col-sm-6 website">
                         <div class="h_gallery_item">
                             <div class="g_img_item">
                                 <img class="img-fluid" src="{{asset('frontend/img/gallery/project-2.jpg')}}" alt="">
                                 <a class="light" href="{{asset('frontend/img/gallery/project-2.jpg')}}"><img src="img/gallery/icon.png" alt=""></a>
                             </div>
                             <div class="g_item_text">
                                 <h4>2D Vinyl Design</h4>
                                 <p>Client Project</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-6 uiux">
                         <div class="h_gallery_item">
                             <div class="g_img_item">
                                 <img class="img-fluid" src="{{asset('frontend/img/gallery/project-3.jpg')}}" alt="">
                                 <a class="light" href="{{asset('frontend/img/gallery/project-3.jpg')}}"><img src="img/gallery/icon.png" alt=""></a>
                             </div>
                             <div class="g_item_text">
                                 <h4>Creative Poster Design</h4>
                                 <p>Client Project</p>
                             </div>
                         </div>
                     </div> --}}
             </div>
         </section>
         <!--================End Home Gallery Area =================-->
         
         <!--================Testimonials Area =================-->
         {{-- <section class="testimonials_area p_120">
             <div class="container">
                 <div class="main_title">
                     <h2>Testimonials</h2>
                     <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
                 </div>
                 <div class="testi_inner">
                     <div class="testi_slider owl-carousel">
                         <div class="item">
                             <div class="testi_item">
                                 <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face</p>
                                 <h4>Fanny Spencer</h4>
                                 <a href="#"><i class="fa fa-star"></i></a>
                                 <a href="#"><i class="fa fa-star"></i></a>
                                 <a href="#"><i class="fa fa-star"></i></a>
                                 <a href="#"><i class="fa fa-star"></i></a>
                                 <a href="#"><i class="fa fa-star-half-o"></i></a>
                             </div>
                         </div>
                         <div class="item">
                             <div class="testi_item">
                                 <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face</p>
                                 <h4>Fanny Spencer</h4>
                                 <a href="#"><i class="fa fa-star"></i></a>
                                 <a href="#"><i class="fa fa-star"></i></a>
                                 <a href="#"><i class="fa fa-star"></i></a>
                                 <a href="#"><i class="fa fa-star"></i></a>
                                 <a href="#"><i class="fa fa-star-half-o"></i></a>
                             </div>
                         </div>
                         <div class="item">
                             <div class="testi_item">
                                 <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face</p>
                                 <h4>Fanny Spencer</h4>
                                 <a href="#"><i class="fa fa-star"></i></a>
                                 <a href="#"><i class="fa fa-star"></i></a>
                                 <a href="#"><i class="fa fa-star"></i></a>
                                 <a href="#"><i class="fa fa-star"></i></a>
                                 <a href="#"><i class="fa fa-star-half-o"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section> --}}
         <!--================End Testimonials Area =================-->
@endsection