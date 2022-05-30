@extends('frontend.frontend_master')

@section('main_content')

               <!--================Home Banner Area =================-->
               <section class="home_banner_area">
                <div class="container box_1620">
                    <div class="banner_inner d-flex align-items-center">
                     <div class="banner_content">
                         <div class="media">
                             <div class="d-flex">
                                 <img src="{{asset('frontend/img/personal3.png')}}" alt="">
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
                     <div class="col-lg-6">
                         <div class="tools_expert">
                             <div class="row progress-circle mb-5">
                                <div class="col-lg-4 mb-5">
                                    <div class="bg-white rounded-lg shadow p-4">
                                        <h2 class="h4 font-weight-bold text-center mb-4">Java</h2>
                                        <div class="bg-white rounded-lg shadow p-4">
                                            <center>
                                                <img src="https://i.ibb.co/XSWGL1n/logo-java.png" alt="Java icon" title="Java" class="vscode-icon h-[35px] lg:h-[45px]">
                                            </center>
                                        </div>    
                                    </div>
                                </div>
                    
                                <div class="col-lg-4 mb-5">
                                    <div class="bg-white rounded-lg shadow p-4">
                                        <h2 class="h4 font-weight-bold text-center mb-4">PHP</h2>
                                        <div class="bg-white rounded-lg shadow p-4">
                                            <center>
                                                <img src="https://i.ibb.co/rmpTcvb/logo-php.png" alt="PHP icon" title="PHP" class="vscode-icon h-[35px] lg:h-[45px]">
                                            </center>
                                        </div>    
                                    </div>
                                </div>
                    
                                <div class="col-lg-4 mb-5">
                                    <div class="bg-white rounded-lg shadow p-4">
                                        <h2 class="h4 font-weight-bold text-center mb-4">Laravel</h2>
                                        <div class="bg-white rounded-lg shadow p-4">
                                            <center>
                                                <img src="https://i.ibb.co/hY4L9bH/logo-laravel.png" alt="Laravel icon" title="Laravel" class="vscode-icon h-[35px] lg:h-[45px]">
                                            </center>
                                        </div>    
                                    </div>
                                </div>
                    
                                <div class="col-lg-4 mb-5">
                                    <div class="bg-white rounded-lg shadow p-4">
                                        <h2 class="h4 font-weight-bold text-center mb-4">MySQL</h2>
                                        <div class="bg-white rounded-lg shadow p-4">
                                            <center>
                                                <img src="https://i.ibb.co/vvYQyTr/logo-mysql.png" alt="MySql icon" title="MySQL" class="vscode-icon h-[35px] lg:h-[45px]">
                                            </center>
                                        </div>    
                                    </div>
                                </div>
                    
                                <div class="col-lg-4 mb-5">
                                    <div class="bg-white rounded-lg shadow p-4">
                                        <h2 class="h4 font-weight-bold text-center mb-4">Anstud</h2>
                                        <div class="bg-white rounded-lg shadow p-4">
                                            <center>
                                                <img src="https://i.ibb.co/PYCNLwR/logo-android-studio.png" alt="Android Studio Icon" title="Android Studio" class="vscode-icon h-[35px] lg:h-[45px]">
                                            </center>
                                        </div>    
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 mb-5">
                                    <div class="bg-white rounded-lg shadow p-4">
                                        <h2 class="h4 font-weight-bold text-center mb-4">VS Code</h2>
                                        <div class="bg-white rounded-lg shadow p-4">
                                            <center>
                                                <img src="https://i.ibb.co/dpqhjvR/logos-vscode.png" alt="VS code icon" title="Visual Studio Code" class="vscode-icon h-[35px] lg:h-[45px]">
                                            </center>
                                        </div>    
                                    </div>
                                </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!--================End Welcome Area =================-->
    
@endsection