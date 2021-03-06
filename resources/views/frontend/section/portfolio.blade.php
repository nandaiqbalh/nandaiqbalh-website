@extends('frontend.frontend_master')

@section('main_content')

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
                    <div class="col-lg-4 col-md-4 col-sm-6 mobile">
                        <div class="h_gallery_item">
                            <div class="g_img_item">
                                <img class="img-fluid" src="{{asset('frontend/img/demo/android-curious-minds/demo.gif')}}" alt="">
                                <a class="light" href="{{asset('frontend/img/demo/android-curious-minds/demo.gif')}}"><img src="{{asset('frontend/img/demo/android-curious-minds/demo.gif')}}" alt=""></a>
                            </div>
                            <div class="g_item_text">
                                <h4>Curious Minds Book Store</h4>
                                <p><a href="https://github.com/nandaiqbalh/book-store-tugas-ppb">Visit Github Page</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mobile">
                        <div class="h_gallery_item">
                            <div class="g_img_item">
                                <img class="img-fluid" src="{{asset('frontend/img/demo/aksara-library-mobile/demo.gif')}}" alt="">
                                <a class="light" href="{{asset('frontend/img/demo/aksara-library-mobile/demo.gif')}}"><img src="{{asset('frontend/img/demo/aksara-library-mobile/demo.gif')}}" alt=""></a>
                            </div>
                            <div class="g_item_text">
                                <h4>Aksara Library</h4>
                                <p><a href="https://github.com/nandaiqbalh/aksara-library-app-dicoding-submission">Visit Github Page</a></p>
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
                    <div class="col-lg-4 col-md-4 col-sm-6 website">
                         <div class="h_gallery_item">
                             <div class="g_img_item">
                                 <img class="img-fluid" src="{{asset('frontend/img/demo/backend-aksara/backend-aksara.png')}}" alt="">
                                 <a class="light" href="{{asset('frontend/img/demo/backend-aksara/backend-aksara.png')}}"><img src="img/gallery/icon.png" alt=""></a>
                             </div>
                             <div class="g_item_text">
                                 <a href="https://github.com/nandaiqbalh/aksara-book-store"><h4>Backend Website</h4></a>
                                 <p>Learning Project | Still on development</p>
                                 <p><a href="https://github.com/nandaiqbalh/aksara-book-store">Visit Github Page</a></p>

                             </div>
                         </div>
                     </div>
                     <!-- <div class="col-lg-4 col-md-4 col-sm-6 uiux">
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
                     </div> -->
             </div>
</section>
<!--================End Home Gallery Area =================-->
@endsection
