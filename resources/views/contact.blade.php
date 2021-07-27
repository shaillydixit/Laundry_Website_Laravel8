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
                        <p>Riverbank colony , Lucknow</p>
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
                        <p>+91-9910341803</p>
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
            <div class="col-md-12">
                <section class="pdmap" id="flat-map">
                    <div class="flat-maps" data-address="383 Fourth Street, Old Town, ME 04468, Hoa Kỳ" data-height="500" data-image="images/icon/map.png" data-name="Themesflat Map"></div>
                    <div class="gm-map">
                        <div class="map box-shadow"></div>
                    </div>
                </section><!-- /#flat-map -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-map -->

<!-- <section class="flat-row flat-contact-form">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="top-title center">
							<h2>CONTACT WITH US</h2>
							<p>We'll help you resolve your issues quickly and easily.</p>
						</div>
						<div class="form-contact-form">
							<form id="contactform" action="./contact/contact-process.php" method="post" accept-charset="utf-8">
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
									<div class="btn-contact-form center">
										<button type="submit" class="flat-button-form border-radius-2">SEND MESSAGE</button>
									</div>
								</div>
							</form>
</div>
</div>
</div>
</div>
</section> -->
<!-- /.flat-contact-form -->
@endsection