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
                        <a href="#" class="read-more" title="">Read More</a>
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
                        <a href="#" class="read-more" title="">Read More</a>
                    </div>
                </div><!-- /.wrap-recent-text -->
            </div><!-- /.col-md-6 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-recent-market -->

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

@endsection