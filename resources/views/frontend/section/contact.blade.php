@extends('frontend.frontend_master')

@section('main_content')
            
            <!--================Contact Area =================-->
            <section class="contact_area p_120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="contact_info">
                                <div class="info_item">
                                    <i class="lnr lnr-home"></i>
                                    <h6>Kulon Progo, DI Yogyakarta</h6>
                                    <p>Wates, 55651</p>
                                </div>
                                <div class="info_item">
                                    <i class="lnr lnr-phone-handset"></i>
                                    <h6><a href="https://wa.me/6283101487741"><i class="lnr lnr-phone-handset"></i> 083101487741</a></h6>
                                    <p>Whatsapp Me</p>
                                </div>
                                <div class="info_item">
                                    <i class="lnr lnr-envelope"></i>
                                    <h6><a href="mailto:nandaiqbalhanafii@gmail.com"><i class="lnr lnr-envelope"></i> nandaiqbalhanafii@gmail.com</a></h6>
                                    <p>Send us your query anytime!</p>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-9">
                            <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 text-right">
                                    <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                                </div>
                            </form>
                        </div> --}}
                    </div>
                </div>
            </section>
            <!--================Contact Area =================-->
@endsection