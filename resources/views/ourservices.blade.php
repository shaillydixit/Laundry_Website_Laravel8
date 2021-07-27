@extends('master')
@section('content')


<div class="theme-inner-banner" style="background: url('img/17.jpeg') no-repeat center; background-size:cover;">
    <div class="overlay">
        <div class="container">
            <h2 class="title">Our Services</h2>
        </div>
    </div> <!-- /.overlay -->
</div>
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
                            <img src=" {{asset('img/check.png')}}" alt="">
                        </div>
                        <div class="number">
                            1
                        </div>
                        <div class="iconbox-content">
                            <h4><a href="#" title="">WE OFFER QUALITY WORK</a></h4>
                            <p>Our well-trained staff will provide you with high-quality services.</p>
                        </div>
                    </div><!-- /.iconbox style4 -->
                    <div class="iconbox inline-left style4">
                        <div class="icon">
                            <img src=" {{asset('img/offer.png')}}" alt="">
                        </div>
                        <div class="number">
                            2
                        </div>
                        <div class="iconbox-content">
                            <h4><a href="#" title="">OUR PRICES ARE AFFORDABLE</a></h4>
                            <p>Simply select a service and request a price; you'll be delighted!</p>
                        </div>
                    </div><!-- /.iconbox style4 -->
                    <div class="iconbox inline-left style4">
                        <div class="icon">
                            <img src=" {{asset('img/staff.png')}}" alt="">
                        </div>
                        <div class="number">
                            3
                        </div>
                        <div class="iconbox-content">
                            <h4><a href="#" title="">WE HAVE TRAINED STAFF</a></h4>
                            <p>We offer excellent laundry services in Lucknow!</p>
                        </div>
                    </div><!-- /.iconbox style4 -->
                </div><!-- /.wrap-iconbox -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6">
                <div class="single-image">
                    <img src=" {{asset('img/7.jpeg')}}" alt="">
                </div>
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-our-work -->

<section class="flat-recent-market">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top-title center">
                    <h2>OUR MAIN SERVICES</h2>
                    <p></p>
                </div>
            </div>
        </div><!-- /.row -->


        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="wrap-recent-text">
                        <h2 class="title">COMMERCIAL
                        </h2>

                        <div class="content-text">
                            <h5>Let us do the laundry for your business</h5>
                            <p>Resources cost money—this isn’t a new phenomenon. TORQUE Laundries is finding new ways to reduce the number of resources needed per load of laundry, specifically those that can be detrimental to both the linens and the environment, like the chemicals in detergent.</p>
                            <p>Lastly, since our machines are more efficient in the way they clean laundry, the need for launderers to rewash garments will be reduced, which will also save time. Like its said, time is money, and all of these time savings will add up to you having more money to grow your business.</p>
                            <a href="#" class="read-more" title="">READ MORE</a>
                        </div>
                    </div><!-- /.wrap-recent-text -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="single-image center">
                        <img src="{{asset('img/10.jpeg')}}" alt="">
                    </div>
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="single-image center">
                        <img src="{{asset('img/12.jpeg')}}" alt="">
                    </div>
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="wrap-recent-text">
                        <h2 class="title">PICK UP & DROP SERVICES </h2>

                        <div class="content-text">
                            <h5>You Order > We Collect > We Clean > We Deliver</h5>
                            <p>Why waste your precious time doing laundry when you can spend it with your loved ones and still get your laundry done?</p>
                            <p>Our delivery professional will pick up your dirty clothes and deliver clean, fresh, and neatly-folded laundry right back to your door in the shortest time possible.</p>
                            <a href="#" class="read-more" title="">READ MORE</a>
                        </div>
                    </div><!-- /.wrap-recent-text -->
                </div><!-- /.col-md-6 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="wrap-recent-text">
                        <h2 class="title">DROP-OFF SERVICES
                        </h2>

                        <div class="content-text">
                            <h5>Drop your laundry off in our Shop, and let us do it all for you.</h5>
                            <p>If you need clean laundry but don't want to do it yourself, then fluff and fold is the service for you. We professionally clean your clothes and linens, and all you do is drop off and pick up from our laundromat .
                            </p>
                            <a href="#" class="read-more" title="">READ MORE</a>
                        </div>
                    </div><!-- /.wrap-recent-text -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="single-image center">
                        <img src="{{asset('img/13.jpeg')}}" alt="">
                    </div>
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    </div><!-- /.iconbox style1 -->
    </div><!-- /.col-md-4 -->
    </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-work -->

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
                        <a href="#" title=""><img src=" {{asset('img/9.jpeg')}}" alt=""></a>
                    </div><!-- /.team-image -->
                    <div class="team-info">
                        <div class="name">
                            <a href="#" title="">WASH & FOLD SERVICE</a>
                        </div>
                        <div>
                            <a href="#" class="read-more" title="">Read More</a>
                        </div>

                    </div><!-- /.team-info -->
                </div><!-- /.team-member -->
            </div><!-- /.col-md-12 -->
            <div class="col-md-4">
                <div class="team-member center">
                    <div class="team-image">
                        <a href="#" title=""><img src=" {{asset('img/6.jpeg')}}" alt=""></a>
                    </div><!-- /.team-image -->
                    <div class="team-info">
                        <div class="name">
                            <a href="#" title="">DRY-CLEANING SERVICE</a>
                        </div>
                        <div>
                            <a href="#" class="read-more" title="">Read More</a>
                        </div>

                    </div><!-- /.team-info -->
                </div><!-- /.team-member -->
            </div><!-- /.col-md-12 -->
            <div class="col-md-4">
                <div class="team-member center">
                    <div class="team-image">
                        <a href="#" title=""><img src=" {{asset('img/8.jpeg')}}" alt=""></a>
                    </div><!-- /.team-image -->
                    <div class="team-info">
                        <div class="name">
                            <a href="#" title="">IRONING SERVICE</a>
                        </div>
                        <div>
                            <a href="#" class="read-more" title="">Read More</a>
                        </div>

                    </div><!-- /.team-info -->
                </div><!-- /.team-member -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-team -->
<section class="flat-call-back">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wrap-call-back">
                    <div class="title">
                        <h2>DO YOU NEED A CONSULTANT?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce accumsan tristique lorem, nec vehicula sem aliquam ut. Duis at dictum eros. sodales mauris in ante tempus</p>
                    </div>
                    <div class="btn-call-back">
                        <a href="#" title="">Click to Consultant</a>
                    </div>
                </div><!-- /.wrap-call-back -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-call-back -->
@endsection