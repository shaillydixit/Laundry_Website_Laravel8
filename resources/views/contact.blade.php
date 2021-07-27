@extends('master')
@section('content')


<div class="theme-inner-banner" style="background: url('img/17.jpeg') no-repeat center; background-size:cover;">
    <div class="overlay">
        <div class="container">
            <h2 class="title">Contact Us</h2>
        </div>
    </div> <!-- /.overlay -->
</div>


<section class="flat-address-box">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="address-box center">
                    <div class="box-header">
                        <div class="icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-content">
                        <h2>Address</h2>
                        <p>30 Balaji Enclave, Muttakkipur, IIM Road, Lucknow - 226020</p>
                    </div><!-- /.box-content -->
                </div><!-- /.address-box -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4">
                <div class="address-box center">
                    <div class="box-header">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-content">
                        <h2>Phone number</h2>
                        <p>+91-9792923535</p>
                    </div><!-- /.box-content -->
                </div><!-- /.address-box -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4">
                <div class="address-box center">
                    <div class="box-header">
                        <div class="icon">
                            <i class="fa fa-envelope-open"></i>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-content">
                        <h2>Email:</h2>
                        <p>infodeercreative@gmail.com</p>
                    </div><!-- /.box-content -->
                </div><!-- /.address-box -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-address-box -->
<section class="flat-map">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <section class="pdmap" id="flat-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4440.335089358006!2d80.92130969017427!3d26.86472251081894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfdfa45aa4e27%3A0x40b4db26e9cefc7c!2sTorque%20Laundries!5e0!3m2!1sen!2sin!4v1627426543311!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </section><!-- /#flat-map -->
            </div><!-- /.col-md-12 -->
            <div class="col-md-6">
                <section>
                    <div class="top-title center">
                        <h2>CONTACT WITH US</h2>
                        <p>We'll help you resolve your issues quickly and easily.</p>
                    </div>
                    <div class="form-contact-form">
                        <form accept-charset="utf-8">
                            <div id="subscribe-content-1">
                                <div class="field-row">
                                    <div class="contact-form-name contact-form">
                                        <input type="text" name="name" id="name" placeholder="Your Name" required="" />
                                    </div>
                                    <div class="contact-form-email contact-form">
                                        <input type="text" name="email" id="email" placeholder="Your Email" required="" />
                                    </div>
                                </div>
                                <div class="contact-form-comment contact-form">
                                    <textarea name="message" id="message" placeholder="Your Message" required=""></textarea>
                                </div>
                                <div class="btn-contact-form mb-5 center">
                                    <button type="submit" class="btn btn-info">SEND MESSAGE</button>
                                </div>
                            </div>
                        </form><!-- /form -->
                    </div><!-- /.form-contact-form -->
                </section>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-map -->


@endsection