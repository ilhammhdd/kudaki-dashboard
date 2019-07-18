@extends('layouts.master')

@section('title')
    Kudaki.id
@endsection

@section('navBar')
    @include('layouts.navbar')
@endsection

@section('afterNavBar')
    <!-- Hero Area Start -->
    <div id="hero-area" class="hero-area-bg">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="contents text-center">
                        <h2 class="head-title wow fadeInUp">Temukan Kebutuhan Mendakimu<br>di Kudaki!</h2>

                    </div>
                    <div class="img-thumb text-center wow fadeInUp" data-wow-delay="0.6s">
                        <img class="img-fluid" src="{{asset('/img/appmock.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
@endsection

@section('bodyContent')
    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">


        <!-- Hero Area Start -->
        <div id="hero-area" class="hero-area-bg">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="contents text-center">
                            <h2 class="head-title wow fadeInUp">Temukan Kebutuhan Mendakimu<br>di Kudaki!</h2>

                        </div>
                        <div class="img-thumb text-center wow fadeInUp" data-wow-delay="0.6s">
                            <img class="img-fluid" src="{{asset('/img/appmock.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- Feature Section Start -->
    <div id="feature">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="text-wrapper">
                        <div>
                            <h2 class="title-hl wow fadeInLeft" data-wow-delay="0.3s">Tentang Kudaki</h2>
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                    <div class="features-box wow fadeInLeft" data-wow-delay="0.3s">
                                        <div class="features-content">
                                            <h4>
                                                Kudaki adalah Aplikasi Mobile yang menyediakan informasi lengkap
                                                mengenai
                                                kebutuhan Pendaki Gunung.
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 padding-none">
                    <div class="feature-thumb wow fadeInRight" data-wow-delay="0.3s">
                        <img src="{{asset('/img/feature/hiker.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Section End -->

    <!-- Subscribe Section Start -->
    <section id="Subscribes" class="subscribes section-padding">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-10 col-lg-5">
                    <h4 class="wow fadeInUp" data-wow-delay="0.3s">Introduction</h4>
                    <p class="wow fadeInUp" data-wow-delay="0.6s">Tonton video perkenalan kami berikut ini.</p>
                    <iframe width="500" height="345" src="https://www.youtube.com/embed/oCLq2A-FMZ8">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscribe Section End -->


    <!-- Services Section Start -->
    <section id="services" class="section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Fitur</h2>
            </div>
            <div class="row">
                <!-- Services item -->
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
                        <div class="icon">
                            <i class="lni-search"></i>
                        </div>
                        <div class="services-content">
                            <h3><a href="#">Explore</a></h3>
                            <p>Dapat mencari destinasi-destinasi yang sesuai dengan keinginan pengguna</p>
                        </div>
                    </div>
                </div>
                <!-- Services item -->
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.9s">
                        <div class="icon">
                            <i class="lni-briefcase"></i>
                        </div>
                        <div class="services-content">
                            <h3><a href="#">Equipment</a></h3>
                            <p>Fitur ini dapat digunakan oleh user untuk melakukan penyewaan peralatan pendakian sesuai
                                dengan toko yang diinginkan</p>
                        </div>
                    </div>
                </div>
                <!-- Services item -->
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="1.2s">
                        <div class="icon">
                            <i class="lni-pencil-alt"></i>
                        </div>
                        <div class="services-content">
                            <h3><a href="#">Preparation</a></h3>
                            <p>Pada fitur ini sistem akan memberikan estimasi mengenai barang yang diperlukan untuk
                                pendakian</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->


    <!-- Contact Section Start -->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header text-center">
                        <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Contact</h2>
                    </div>
                </div>
            </div>
            <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="contact-block">
                        <h2>Contact Form</h2>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                               required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Email" id="email" class="form-control"
                                               name="email"
                                               required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Subject" id="msg_subject" class="form-control"
                                               required data-error="Please enter your subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Your Message" rows="5"
                                              data-error="Write your message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button">
                                        <button class="btn btn-common" id="form-submit" type="submit">Send Message
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="contact-right-area wow fadeIn">
                        <h2>Get In Touch</h2>
                        <div class="contact-right">
                            <div class="single-contact">
                                <div class="contact-icon">
                                    <i class="lni-map-marker"></i>
                                </div>
                                <p>Bandung, Indonesia</p>
                            </div>
                            <div class="single-contact">
                                <div class="contact-icon">
                                    <i class="lni-envelope"></i>
                                </div>
                                <p><a href="#">kudakiindonesia@gmail.com</a></p>
                            </div>
                            <div class="single-contact">
                                <div class="contact-icon">
                                    <i class="lni-phone-handset"></i>
                                </div>
                                <p><a href="#">+6287722278021</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->


    <!-- Form Event Section Start -->
    <section id="event" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header text-left">
                        <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Event Form</h2>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">Nama Event</label>
                <div class="col-6">
                    <input class="form-control" type="text" value="" id="nama-event">
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">Penyelenggara</label>
                <div class="col-6">
                    <input class="form-control" type="text" value="" id="penyelenggara">
                </div>
            </div>

            <div class="form-group row">
                <label for="example-tel-input" class="col-2 col-form-label">No. HP</label>
                <div class="col-6">
                    <input class="form-control" type="tel" value="" id="no-hp">
                </div>
            </div>

            <div class="form-group row">
                <label for="example-email-input" class="col-2 col-form-label">Email</label>
                <div class="col-6">
                    <input class="form-control" type="email" value="" id="email-input">
                </div>
            </div>

            <div class="form-group row">
                <label for="example-date-input" class="col-2 col-form-label">Start Date</label>
                <div class="col-6">
                    <input class="form-control" type="date" value="" id="start-date">
                </div>
            </div>

            <div class="form-group row">
                <label for="example-date-input" class="col-2 col-form-label">End Date</label>
                <div class="col-6">
                    <input class="form-control" type="date" value="" id="end-date">
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">Tempat</label>
                <div class="col-6">
                    <input class="form-control" type="text" value="" id="tempat-event">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Gambar Event</label>
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                <small id="fileHelp" class="form-text text-muted">Masukkan Gambar/Poster Event</small>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">Deskripsi</label>
                <div class="col-6">
                    <input class="form-control" type="text" value="" id="deskripsi-event">
                </div>
            </div>

            <div class="submit-button">
                <button class="btn btn-common" id="form-submit" type="submit">Submit</button>
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>

    <!-- Form Event Section End -->
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
