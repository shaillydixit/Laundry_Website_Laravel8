@extends('master')
@section('content')

<div class="theme-inner-banner" style="background: url('img/17.jpeg') center; background-size:cover;">
    <div class="overlay">
        <div class="container">
            <h2 class="title">About Us</h2>
        </div>
    </div> <!-- /.overlay -->
</div>
<section class="flat-recent-market">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="wrap-recent-text">
                    <h2 class="title">Who We Are</h2>
                    <div class="content-text">
                        <p>"We began ‘Torque Laundries’ to make an option in contrast to your regular laundry and cleaning background, which time after time includes befuddling evaluating, misty procedures or poor client benefit. An elective where conveyance happens at the tap of a catch and occurs around your calendar. Where individuals are cordial and proficient about the manner in which your garments are dealt with.</p>
                        <p>We are a practical, earth cognizant business, with a mission to keep garments clean while not disregarding your wellbeing, and that of our planet. Our areas are perfect vitality controlled, and our high-effectiveness washers spare a lot of water and power. "</p>
                        <a href="{{route('our.service')}}" class="read-more" title="">Read More</a>
                    </div>
                </div><!-- /.wrap-recent-text -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6">
                <div class="single-image center">
                    <img src=" {{asset('img/9.jpeg')}}" alt="">
                </div>
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="single-image center">
                    <img src=" {{asset('img/3.jpeg')}}" alt="">
                </div>
            </div><!-- /.col-md-6 -->
            <div class="col-md-6">
                <div class="wrap-recent-text">
                    <h2 class="title">What We Do</h2>
                    <div class="content-text">
                        <p>"With our expert personnel, we have our own laundry equipment for washing, ironing, and dry-cleaning the clothes. When we receive an order from a client, we immediately send the cloths to them and begin the process of washing the garments. We then conduct the operations as per your instructions and give the clothes back to your doorstep. </p>
                        <p>We're attempting to meet the needs of both individual customers and customers who are part of large social orders. We believe that by putting in continued effort in finding ways to help improve our business and meet our clients' needs, we will be able to achieve client loyalty."</p>
                        <a href="{{route('our.service')}}" class="read-more" title="">Read More</a>
                    </div>
                </div><!-- /.wrap-recent-text -->
            </div><!-- /.col-md-6 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-recent-market -->
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