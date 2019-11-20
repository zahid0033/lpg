@extends('master')
@section('title','Home')
@section('home','active_nav')
@section('content')

{{--    banner  --}}
<div class="nav-space">
    <div class="banner">
        <div class="owl-carousel owl-theme " id="carousel02">
            <div class="item">
                <div class="uni_logo">
                    <img src="{{asset('assets/images/random/banner-1.jpg')}}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="uni_logo">
                    <img src="{{asset('assets/images/random/banner-2.jpg')}}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="uni_logo">
                    <img src="{{asset('assets/images/random/banner-3.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-5" style="padding-left: 0">
    <div class="row">
        <div class="col-md-5">
            <img src="{{ asset('assets/images/random/footer.jpg') }}" alt="">
        </div>
        <div class="col-md-7 content_padding">
            <h1 class="heading mb-5">
                <div class="heading_left_design"></div>
                Earn Trust With Business
            </h1>
            <h5>Dream LPG BD. has been providing machinery & equipment's, supports and service to all major LPG filling station, contractors
                and traders in the region.</h5>
        </div>
    </div>
</div>

<div class="counter mt-5">

    <h1 class="heading mb-2 text-center">LPG Stations </h1>

    <div id="projectFacts" class="sectionClass">
        <div class="fullWidth eight columns">
            <div class="projectFactsWrap ">
                <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
                    <i class="fa fa-briefcase"></i>
                    <p id="number1" class="number">12</p>
                    <span></span>
                    <h3>Running</h3>
                </div>
                <div class="item wow fadeInUpBig animated animated" data-number="55" style="visibility: visible;">
                    <i class="fas fa-hourglass-start"></i>
                    <p id="number2" class="number">55</p>
                    <span></span>
                    <h3>On Going</h3>
                </div>
                <div class="item wow fadeInUpBig animated animated" data-number="359" style="visibility: visible;">
                    <i class="fas fa-meteor"></i>
                    <p id="number3" class="number">359</p>
                    <span></span>
                    <h3>Upcoming</h3>
                </div>
                <div class="item wow fadeInUpBig animated animated" data-number="246" style="visibility: visible;">
                    <i class="fas fa-gas-pump"></i>
                    <p id="number4" class="number">246</p>
                    <span></span>
                    <h3>Stations</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="brands_banner mt-5">
    <div class="brands_banner_content_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="heading mt-5 text-center">
                        Brands We Offer
                    </h1>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="banner">
        <div class="owl-carousel owl-theme " id="carousel01">
            <div class="item">
                <div class="uni_logo">
                    <img src="{{asset('assets/images/logo/setcolbd.png')}}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="uni_logo">
                    <img src="{{asset('assets/images/logo/logo.png')}}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="uni_logo">
                    <img src="{{asset('assets/images/logo/setcolbd.png')}}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="uni_logo">
                    <img src="{{asset('assets/images/logo/logo.png')}}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="uni_logo">
                    <img src="{{asset('assets/images/logo/setcolbd.png')}}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="uni_logo">
                    <img src="{{asset('assets/images/logo/logo.png')}}" alt="">
                </div>
            </div>

        </div>
    </div>
</div>

<div class="range_cover mt-5">
    <div class="container">
        <h1 class="heading mt-5 text-center mb-3">
            Range We Cover
        </h1>
        <div class="row">
            <div class="col-md-6">
                <div class="p-3">
                    <h3 style="margin-top: 3em">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution</h3>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{asset('assets/images/random/loader.gif')}}" alt="">
            </div>
        </div>
    </div>
</div>

<div class="working_level mt-5">
    <div class="working_level_content_bg">
        <div class="container">
            <h1 class="heading mt-5 mb-5 text-center">
                Our Working Level
            </h1>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-3">

                        <ul>
                            <li>
                                <span><i class="fas fa-angle-double-right"></i></span>
                                <span class="working_list_text">LPG Filling Station Package</span>
                            </li>
                            <li>
                                <span><i class="fas fa-angle-double-right"></i></span>
                                <span class="working_list_text">LPG Conversion Kits</span>
                            </li>
                            <li>
                                <span><i class="fas fa-angle-double-right"></i></span>
                                <span class="working_list_text">Dispensers(LPG,Petrol,Octane & Diesel)</span>
                            </li>
                            <li>
                                <span><i class="fas fa-angle-double-right"></i></span>
                                <span class="working_list_text">LPG Accessories</span>
                            </li>
                            <li>
                                <span><i class="fas fa-angle-double-right"></i></span>
                                <span class="working_list_text">Dispenser Controller ( Display , Motherboard Etc.)</span>
                            </li>
                            <li>
                                <span><i class="fas fa-angle-double-right"></i></span>
                                <span class="working_list_text">Filling Station Management System</span>
                            </li>
                            <li>
                                <span><i class="fas fa-angle-double-right"></i></span>
                                <span class="working_list_text">LPG Bottling Plant</span>
                            </li>
                            <li>
                                <span><i class="fas fa-angle-double-right"></i></span>
                                <span class="working_list_text">Operation and Maintenance of LGP Station</span>
                            </li>
                            <li>
                                <span><i class="fas fa-angle-double-right"></i></span>
                                <span class="working_list_text">LNG Relate Service</span>
                            </li>
                        </ul>

                </div>
                <div class="col-md-2"></div>
                <div class="col-md-3">
                    <ul>
                        <li>
                            <span><i class="fas fa-angle-double-right"></i></span>
                            <span class="working_list_text">LPG Mother Plant</span>
                        </li>
                        <li>
                            <span><i class="fas fa-angle-double-right"></i></span>
                            <span class="working_list_text">LPG Veporizer</span>
                        </li>
                        <li>
                            <span><i class="fas fa-angle-double-right"></i></span>
                            <span class="working_list_text">Residential LPG Supply Solution</span>
                        </li>
                        <li>
                            <span><i class="fas fa-angle-double-right"></i></span>
                            <span class="working_list_text">LPG Bulk Carrier</span>
                        </li>
                        <li>
                            <span><i class="fas fa-angle-double-right"></i></span>
                            <span class="working_list_text">SNG/LPG Air Mixing Unit</span>
                        </li>
                        <li>
                            <span><i class="fas fa-angle-double-right"></i></span>
                            <span class="working_list_text">All Engineering Consultancy</span>
                        </li>
                        <li>
                            <span><i class="fas fa-angle-double-right"></i></span>
                            <span class="working_list_text">Equipment Supply for LPG Station and Installation Service</span>
                        </li>
                        <li>
                            <span><i class="fas fa-angle-double-right"></i></span>
                            <span class="working_list_text">Industrial LPG Solution</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <a href="#" class="btn " style="color: #ffffff;background: #00d0ff;border: 1px solid #00d0ff;">Download PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="comments">
    <div class="container">
        <h1 class="heading mt-5 mb-5 text-center">
            What Our Client Says
        </h1>
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/images/random/client.jpg') }}" alt="">
                <h4 class="mt-3">Md. Zahid Hossain</h4>
            </div>
            <div class="col-md-8">
                <blockquote>
                    <p>WARC is the go-to resource for the latest knowledge and trends in marketing and brand communication. The WARC archive is a veritable treasure trove of case studies which offers great learning and insights to marketing professionals. Best of all is the team at WARC Plus, who provide bespoke dossiers filled with the most relevant articles and case studies in response to our unique and specific questions and problems.</p>
                </blockquote>
            </div>
        </div>

    </div>
</div>




<script>
    $('#carousel01').owlCarousel({
        rtl:false,
        loop:true,
        autoplay: true,
        dots: false,
        autoPlay:100,
        margin:10,
        nav:false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        navText: [
            "<i class='fa fa-caret-left'></i>",
            "<i class='fa fa-caret-right'></i>"
        ],
        responsive:{
            0:{
                items:2
            },
            600:{
                items:4
            },
            1000:{
                items:4
            }
        }
    });
    $('#carousel02').owlCarousel({
        rtl:false,
        loop:true,
        autoplay: true,
        dots: true,
        autoPlay:1000,
        margin:10,
        nav:false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        navText: [
            "<i class='fa fa-caret-left'></i>",
            "<i class='fa fa-caret-right'></i>"
        ],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
</script>
<script>
    $.fn.jQuerySimpleCounter = function( options ) {
        var settings = $.extend({
            start:  0,
            end:    100,
            easing: 'swing',
            duration: 400,
            complete: ''
        }, options );

        var thisElement = $(this);

        $({count: settings.start}).animate({count: settings.end}, {
            duration: settings.duration,
            easing: settings.easing,
            step: function() {
                var mathCount = Math.ceil(this.count);
                thisElement.text(mathCount);
            },
            complete: settings.complete
        });
    };


    $('#number1').jQuerySimpleCounter({end: 12,duration: 3000});
    $('#number2').jQuerySimpleCounter({end: 55,duration: 3000});
    $('#number3').jQuerySimpleCounter({end: 359,duration: 2000});
    $('#number4').jQuerySimpleCounter({end: 246,duration: 2500});



    /* AUTHOR LINK */
    $('.about-me-img').hover(function(){
        $('.authorWindowWrapper').stop().fadeIn('fast').find('p').addClass('trans');
    }, function(){
        $('.authorWindowWrapper').stop().fadeOut('fast').find('p').removeClass('trans');
    });

</script>
@endsection
