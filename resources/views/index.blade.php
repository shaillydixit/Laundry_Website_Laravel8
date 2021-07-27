@extends('master')
@section('content')
@include('main.slider')
<section class="flat-recent-market">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="wrap-recent-text">
                    <h2 class="title">ABOUT US</h2>
                    <div class="content-text">
                        <p>"We began ‘Torque Laundries’ to make an option in contrast to your regular laundry and cleaning background, which time after time includes befuddling evaluating, misty procedures or poor client benefit. An elective where conveyance happens at the tap of a catch and occurs around your calendar. Where individuals are cordial and proficient about the manner in which your garments are dealt with.</p>
                        <p>We are a practical, earth cognizant business, with a mission to keep garments clean while not disregarding your wellbeing, and that of our planet. Our areas are perfect vitality controlled, and our high-effectiveness washers spare a lot of water and power. "</p>
                        <a href="{{route('about')}}" class="read-more" title="">Read More</a>
                    </div>
                </div><!-- /.wrap-recent-text -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6">
                <div class="single-image center">
                    <img src=" {{asset('img/4.jpeg')}}" alt="">
                </div>
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-recent-market -->

<section class="flat-why-choose style1 bg-browse">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top-title center">
                    <h2>HOW IT WORKS</h2>
                    <h5>Laundry Solutions ready to deliver best laundry service in Lucknow to wash and clean your clothes in easy manner.</h5>
                </div>
            </div>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="iconbox style3 center">
                    <div class="icon">
                        <img src=" {{asset('img/pick.png')}}" style="width: 80px; height:74;" alt="">
                    </div>
                    <div class="iconbox-content">
                        <h4><a href="#" title="">PICK-UP</a></h4>
                    </div>
                </div><!-- /.iconbox style3 -->
            </div><!-- /.col-md-4 sol-sm-6 -->
            <div class="col-md-3 col-sm-6">
                <div class="iconbox style3 center">
                    <div class="icon">
                        <img src=" {{asset('img/washing-machine.png')}}" style="width: 80px; height:74;" style="width: 80px;" alt="">
                    </div>
                    <div class=" iconbox-content">
                        <h4><a href="#" title="">WASHING</a></h4>
                    </div>
                </div><!-- /.iconbox style3 -->
            </div><!-- /.col-md-4 sol-sm-6 -->
            <div class="col-md-3 col-sm-6">
                <div class="iconbox style3 center">
                    <div class="icon">
                        <img src=" {{asset('img/package.png')}}" style="width: 80px;" alt="">
                    </div>
                    <div class="iconbox-content">
                        <h4><a href="#" title="">PACKING</a></h4>
                    </div>
                </div><!-- /.iconbox style3 -->
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="iconbox style3 center">
                    <div class="icon">
                        <img src=" {{asset('img/delivery-van.png')}}" style="width: 80px;" alt="">
                    </div>
                    <div class="iconbox-content">
                        <h4><a href="#" title="">DELIVERY</a></h4>
                    </div>
                </div><!-- /.iconbox style3 -->
            </div><!-- /.col-md-4 sol-sm-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-why-choose style1 -->

<section class="flat-our-work">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top-title center">
                    <h2>WHY CHOOSE US</h2>
                    <p>
                    <h5>We aim to bring awareness about laundry services to people, with our quality washing and fast delivery services in Lucknow</h5>
                    </p>
                </div>
            </div>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-6">
                <div class="wrap-iconbox">
                    <div class="iconbox inline-left style4">
                        <div class="icon">
                            <img src=" {{asset('img/delivery-car.png')}}" alt="">
                        </div>
                        <div class="number">
                            1
                        </div>
                        <div class="iconbox-content">
                            <h4><a href="#" title="">Convenient and Free Pickup and Drop </a></h4>
                            <p>Free pick-up and delivery at your doorsteps so that you can enjoy hassle-free laundry services
                            </p>
                        </div>
                    </div><!-- /.iconbox style4 -->
                    <div class="iconbox inline-left style4">
                        <div class="icon">
                            <img src=" {{asset('img/staff.png')}}" alt="">
                        </div>
                        <div class="number">
                            2
                        </div>
                        <div class="iconbox-content">
                            <h4><a href="#" title="">Professionally Trained Garments Care Experts</a></h4>
                            <p>All experts at "TORQUE Laundries" practice professional world class process to take care your garments</p>
                        </div>
                    </div><!-- /.iconbox style4 -->
                    <div class="iconbox inline-left style4">
                        <div class="icon">
                            <img src=" {{asset('img/mobile-phone.png')}}" alt="">
                        </div>
                        <div class="number">
                            3
                        </div>
                        <div class="iconbox-content">
                            <h4><a href="#" title="">Easy to Use Mobile Application</a></h4>
                            <p>Mobile platform lets you keep track of everything in one place</p>
                        </div>
                    </div><!-- /.iconbox style4 -->

                </div><!-- /.wrap-iconbox -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6">
                <div class="single-image">
                    <img src=" {{asset('img/19.jpeg')}}" alt="">
                </div>
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
        <br><br>
        <div class="row">
            <div class="col-md-6">
                <div class="wrap-iconbox">
                    <div class="iconbox inline-left style4">
                        <div class="icon">
                            <img src=" {{asset('img/support.png')}}" alt="">
                        </div>
                        <div class="number">
                            4
                        </div>
                        <div class="iconbox-content">
                            <h4><a href="#" title="">Committed Service Support</a></h4>
                            <p>We are Committed to our customers and we draw strength from their faith onourability to help them better than others</p>
                        </div>
                    </div><!-- /.iconbox style4 -->
                    <div class="iconbox inline-left style4">
                        <div class="icon">
                            <img src=" {{asset('img/offer.png')}}" alt="">
                        </div>
                        <div class="number">
                            5
                        </div>
                        <div class="iconbox-content">
                            <h4><a href="#" title="">Affordable</a></h4>
                            <p>"TORQUE Laundries" is a quick, efficient and cost effective way to get your laundry done</p>
                        </div>
                    </div><!-- /.iconbox style4 -->
                    <div class="iconbox inline-left style4">
                        <div class="icon">
                            <img src=" {{asset('img/fast-processing.png')}}" alt="">
                        </div>
                        <div class="number">
                            6
                        </div>
                        <div class="iconbox-content">
                            <h4><a href="#" title="">Fast Processing</a></h4>
                            <p>We ensure that you get your garments laundered within committ edtime</p>
                        </div>
                    </div><!-- /.iconbox style4 -->

                </div><!-- /.wrap-iconbox -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6">
                <div class="single-image">
                    <img src=" {{asset('img/26.jpeg')}}" alt="">
                </div>
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-our-work -->
<section class="flat-why-choose bg-browse">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top-title center">
                    <h2>WHAT MAKES US THE BEST</h2>
                    <p>Our Unique 10 Stage Process For Unmatched Garments Care</p>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="wrap-choose">
                    <div class="box-left">
                        <div class="iconbox inline-right style2 right">
                            <div class="icon">
                                <img src="{{asset('img/clean.png')}}" alt="">
                            </div>
                            <div class="iconbox-content">
                                <h4>
                                    STEP-1
                                </h4>
                                <p>We Bag up all your soiled linen</p>
                            </div>
                        </div><!-- /.iconbox style2 -->
                        <div class="iconbox inline-right style2 right pdr-30">
                            <div class="icon">
                                <img src="{{asset('img/pick.png')}}" alt="">
                            </div>
                            <div class="iconbox-content">
                                <h4>STEP-2</h4>
                                <p>We pick up your linen to washhouse</p>
                            </div>
                        </div><!-- /.iconbox style2 -->
                        <div class="iconbox inline-right style2 right pdr-30">
                            <div class="icon">
                                <img src="{{asset('img/washing.png')}}" alt="">
                            </div>
                            <div class="iconbox-content">
                                <h4>STEP-3</h4>
                                <p>Sorting and care labelling linen</p>
                            </div>
                        </div><!-- /.iconbox style2 -->
                        <div class="iconbox inline-right style2 right pdr-30">
                            <div class="icon">
                                <img src="{{asset('img/inspection.png')}}" alt="">
                            </div>
                            <div class="iconbox-content">
                                <h4>STEP-4</h4>
                                <p>StainInspection</p>
                            </div>
                        </div><!-- /.iconbox style2 -->
                        <div class="iconbox inline-right style2 right">
                            <div class="icon">
                                <img src="{{asset('img/laundry-soap.png')}}" alt="">
                            </div>
                            <div class="iconbox-content">
                                <h4>STEP-5</h4>
                                <p>Stain Treatment</p>
                            </div>
                        </div><!-- /.iconbox style2 -->
                    </div><!-- /.box-left -->
                    <div class="box-center">
                        <div class="single-image">
                            <img src="{{asset('img/aa.png')}}" alt="">
                        </div>
                    </div><!-- /.box-center -->
                    <div class="box-right">
                        <div class="iconbox inline-left style2 left">
                            <div class="icon">
                                <img src="{{asset('img/laundry.png')}}" alt="">
                            </div>
                            <div class="iconbox-content">
                                <h4>STEP-6</h4>
                                <p>Processingand Disinfection</p>
                            </div>
                        </div><!-- /.iconbox style2 -->
                        <div class="iconbox inline-left style2 left pdl-30">
                            <div class="icon">
                                <img src="{{asset('img/ironing-board.png')}}" alt="">
                            </div>
                            <div class="iconbox-content">
                                <h4>STEP-7</h4>
                                <p>Finishing</p>
                            </div>
                        </div><!-- /.iconbox style2 -->
                        <div class="iconbox inline-left style2 left pdl-30">
                            <div class="icon">
                                <img src="{{asset('img/shield.png')}}" alt="">
                            </div>
                            <div class="iconbox-content">
                                <h4>STEP-8</h4>
                                <p>Quality Check</p>
                            </div>
                        </div><!-- /.iconbox style2 -->
                        <div class="iconbox inline-left style2 left pdl-30">
                            <div class="icon">
                                <img src="{{asset('img/packag.png')}}" alt="">
                            </div>
                            <div class="iconbox-content">
                                <h4>STEP-9</h4>
                                <p>Packaging</p>
                            </div>
                        </div><!-- /.iconbox style2 -->
                        <div class="iconbox inline-left style2 left">
                            <div class="icon">
                                <img src="{{asset('img/folded.png')}}" style="width: 65px; height: 55px;" alt="">
                            </div>
                            <div class="iconbox-content">
                                <h4>STEP-10</h4>
                                <p>We Deliver Back Clean Folded Linen</p>
                            </div>
                        </div><!-- /.iconbox style2 -->
                    </div><!-- /.box-right -->
                </div><!-- /.wrap-choose -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-why-choose -->
<section class="flat-team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top-title center">
                    <h2>OUR EXPERTISE</h2>
                    <p>
                    <h5>Torque Laundries is a simple approach to improve the cleanliness of your laundry</h5>
                    </p>
                </div>
            </div><!-- /.col-md-12 -->
            <div class="col-md-4">
                <div class="team-member center">
                    <div class="team-image">
                        <a href="{{route('our.service')}}" title=""><img src=" {{asset('img/9.jpeg')}}" alt=""></a>
                    </div><!-- /.team-image -->
                    <div class="team-info">
                        <div class="name">
                            <a href="{{route('our.service')}}" title="">WASH & FOLD SERVICE</a>
                        </div>
                        <div>
                            <a href="{{route('our.service')}}" class="read-more" title="">Read More</a>
                        </div>

                    </div><!-- /.team-info -->
                </div><!-- /.team-member -->
            </div><!-- /.col-md-12 -->
            <div class="col-md-4">
                <div class="team-member center">
                    <div class="team-image">
                        <a href="{{route('our.service')}}" title=""><img src=" {{asset('img/6.jpeg')}}" alt=""></a>
                    </div><!-- /.team-image -->
                    <div class="team-info">
                        <div class="name">
                            <a href="{{route('our.service')}}" title="">DRY-CLEANING SERVICE</a>
                        </div>
                        <div>
                            <a href="{{route('our.service')}}" class="read-more" title="">Read More</a>
                        </div>

                    </div><!-- /.team-info -->
                </div><!-- /.team-member -->
            </div><!-- /.col-md-12 -->
            <div class="col-md-4">
                <div class="team-member center">
                    <div class="team-image">
                        <a href="{{route('our.service')}}" title=""><img src=" {{asset('img/8.jpeg')}}" alt=""></a>
                    </div><!-- /.team-image -->
                    <div class="team-info">
                        <div class="name">
                            <a href="{{route('our.service')}}" title="">IRONING SERVICE</a>
                        </div>
                        <div>
                            <a href="{{route('our.service')}}" class="read-more" title="">Read More</a>
                        </div>

                    </div><!-- /.team-info -->
                </div><!-- /.team-member -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-team -->


@endsection