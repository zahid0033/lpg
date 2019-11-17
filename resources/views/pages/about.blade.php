@extends('master')
@section('title','About Us')
@section('about','active_nav')
@section('content')
    <div class="container mt-3">
        <div class="row nav-space">
            <div class="col-md-6">
                <img src="{{ asset('assets/images/random/footer.jpg') }}" alt="">
            </div>
            <div class="col-md-6">
                {{--        /**************** accordion use in career at japan start *******************  */ --}}
                <div id="accordion" class="">

                    <div class="card border-0 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="card-header p-0 border-0" id="heading-240">
                            <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-240" aria-expanded="false" aria-controls="#collapse-240"><i class="fas fa-minus text-center d-flex align-items-center justify-content-center h-100"></i>Our Objective</button>
                        </div>
                        <div id="collapse-240" class="collapse " aria-labelledby="heading-240" data-parent="#accordion">
                            <div class="card-body accordion-body">
                                <div class="row">
                                    <p>It is a long established fact that a reader will be distracted by the readable content
                                        of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card border-0 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="card-header p-0 border-0" id="heading-241">
                            <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-241" aria-expanded="false" aria-controls="#collapse-241"><i class="fas fa-minus text-center d-flex align-items-center justify-content-center h-100"></i>Our Goal</button>
                        </div>
                        <div id="collapse-241" class="collapse " aria-labelledby="heading-241" data-parent="#accordion">
                            <div class="card-body accordion-body">
                                <div class="row">
                                    <p>It is a long established fact that a reader will be distracted by the readable content
                                        of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card border-0 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="card-header p-0 border-0" id="heading-242">
                            <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-242" aria-expanded="false" aria-controls="#collapse-242"><i class="fas fa-minus text-center d-flex align-items-center justify-content-center h-100"></i>Mission Statement</button>
                        </div>
                        <div id="collapse-242" class="collapse " aria-labelledby="heading-242" data-parent="#accordion">
                            <div class="card-body accordion-body">
                                <div class="row">
                                    <p>It is a long established fact that a reader will be distracted by the readable content
                                        of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card border-0 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="card-header p-0 border-0" id="heading-243">
                            <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-243" aria-expanded="false" aria-controls="#collapse-243"><i class="fas fa-minus text-center d-flex align-items-center justify-content-center h-100"></i>Vision Statement</button>
                        </div>
                        <div id="collapse-243" class="collapse " aria-labelledby="heading-243" data-parent="#accordion">
                            <div class="card-body accordion-body">
                               <p>It is a long established fact that a reader will be distracted by the readable content
                                   of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="card-header p-0 border-0" id="heading-244">
                            <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-244" aria-expanded="false" aria-controls="#collapse-244"><i class="fas fa-minus text-center d-flex align-items-center justify-content-center h-100"></i>Our Achievements</button>
                        </div>
                        <div id="collapse-244" class="collapse " aria-labelledby="heading-244" data-parent="#accordion">
                            <div class="card-body accordion-body">
                                <p>The principles and standards of Dream LPG BD. has made the company one of the most reputed trading organization in Bangladesh and we are
                                able to satisfy all our clients need.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="card-header p-0 border-0" id="heading-245">
                            <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-245" aria-expanded="false" aria-controls="#collapse-245"><i class="fas fa-minus text-center d-flex align-items-center justify-content-center h-100"></i>Management Words</button>
                        </div>
                        <div id="collapse-245" class="collapse " aria-labelledby="heading-245" data-parent="#accordion">
                            <div class="card-body accordion-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="{{ asset('assets/images/random/client.jpg') }}" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <p>The principles and standards of Dream LPG BD. has made the company one of the most reputed trading organization in Bangladesh and we are
                                            able to satisfy all our clients need.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="card-header p-0 border-0" id="heading-246">
                            <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-246" aria-expanded="false" aria-controls="#collapse-246"><i class="fas fa-minus text-center d-flex align-items-center justify-content-center h-100"></i>Advisor Words</button>
                        </div>
                        <div id="collapse-246" class="collapse " aria-labelledby="heading-246" data-parent="#accordion">
                            <div class="card-body accordion-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="{{ asset('assets/images/random/client.jpg') }}" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <p>The principles and standards of Dream LPG BD. has made the company one of the most reputed trading organization in Bangladesh and we are
                                            able to satisfy all our clients need. RIFAT Zahid</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                {{--        /**************** accordion use in career at japan end *******************  */ --}}
            </div>
        </div>
    </div>
@endsection
