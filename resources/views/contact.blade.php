@extends('master')
@section('content')
<style>
    .map-responsive {
        overflow: hidden;
        padding-bottom: 50%;
        position: relative;
        height: 0;
    }

    .map-responsive iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
    }
</style>
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
                        <p>97-9292-3535</p>
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
                        <p>torquelaundries@gmail.com</p>
                    </div><!-- /.box-content -->
                </div><!-- /.address-box -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-address-box -->
<section class="flat-map">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container-fluid">
                    <div class="map-responsive">
                        <section class="pdmap" id="flat-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3561.3927351038537!2d80.89080001502919!3d26.79562078317823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfeaf3317cb73%3A0x2c04b7c86ca43adf!2sBalaji%20Enclave%2C%20Lal%20Hospital%20to%20Permila%20Bhawan%20Rd%2C%20Sector%20C%2C%20LDA%20Colony%2C%20Lucknow%2C%20Uttar%20Pradesh%20226005!5e0!3m2!1sen!2sin!4v1628087797543!5m2!1sen!2sin" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </section><!-- /#flat-map -->
                    </div>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-map -->


@endsection