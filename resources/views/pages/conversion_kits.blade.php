@extends('master')
@section('title','Conversion Kits')
@section('lpg_conversion','active_nav')
@section('conversion_kits','active_dropdown')
@section('content')
    <div class="container">
        <div class="row nav-space">
            <div class="col-md-6 mt-5">
                <span class="heading">
                    <div class="heading_right_design"></div>
                    LPG Auto Tank
                </span>
                <div class="specification">
                    <h4 class="mb-3">Specification</h4>
                    <ul style="list-style: square">
                        <li>Both of Cylindrical and toroidal types</li>
                        <li>Different sizes of 20L, 25L, 40L, 60L, 90L.</li>
                        <li>Imported from Turkey</li>
                        <li>5 years Warranty</li>
                    </ul>
                </div>

            </div>
            <div class="col-md-6 mt-5 mb-5">
                <img class="kits_img float-right" src="{{ asset('assets/images/random/lpg_auto_tank.png') }}" alt="">
            </div>

            <div class="col-md-6 mb-5">
                <img class="kits_img" src="{{ asset('assets/images/random/standard_tpe.jpg') }}" alt="">
            </div>
            <div class="col-md-6 even">
                <span class="heading">
                    <div class="heading_left_design"></div>
                    Standard Type
                </span>
                <div class="specification ">
                    <h4 class="mb-3">Specification</h4>
                    <ul style="list-style: square">
                        <li>Traditional/ventury system suitable for both of EFL and carburetor type car.</li>
                        <li>Different sizes of 20L, 25L, 40L, 60L, 90L.</li>
                        <li>Comparative cheaper package</li>
                        <li>Made in Italy/Turkey</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <span class="heading">
                    <div class="heading_right_design"></div>
                    3 Wheeler Type
                </span>
                <div class="specification">
                    <h4 class="mb-3">Specification</h4>
                    <ul style="list-style: square">
                        <li>Specially made for Auto Rickshaw</li>
                        <li>Easy to install</li>
                        <li>nominal cost</li>
                        <li>Made in Italy/Turkey</li>
                    </ul>
                </div>

            </div>
            <div class="col-md-6 mb-5">
                <img class="kits_img float-right" src="{{ asset('assets/images/random/3wheeler.jpg') }}" alt="">
            </div>

            <div class="col-md-6 mb-5">
                <img class="kits_img" src="{{ asset('assets/images/random/sequential_type.jpg') }}" alt="">
            </div>
            <div class="col-md-6 even">
                <span class="heading">
                    <div class="heading_left_design"></div>
                    Sequential Type
                </span>
                <div class="specification ">
                    <h4 class="mb-3">Specification</h4>
                    <ul style="list-style: square">
                        <li>Multipoint injection for individual cylinders</li>
                        <li>Extremely precise auto-calibration bu computer</li>
                        <li>most technologically advanced</li>
                        <li>The easiest and more user friendly</li>
                        <li>Maximum fuel efficiency</li>
                        <li>Made in Italy/Turkey</li>
                    </ul>
                </div>
            </div>

        </div>

        <h1 class="heading mt-5 mb-5 text-center">More Kits</h1>
        <div class="row more_kits">
            <div class="col-md-4 mb-3 text-center">
                <img src="{{ asset('assets/images/random/solenoide.jpg') }}" height="200" alt="">
                <span><b>LPG Solenoide</b></span>
            </div>
            <div class="col-md-4 mb-3  text-center">
                <img src="{{ asset('assets/images/random/filling_nozzle.jpg') }}" height="200" alt="">
                <span><b>LPG Filling Nozzle</b></span>
            </div>
            <div class="col-md-4 mb-3  text-center">
                <img src="{{ asset('assets/images/random/sibgle_point.jpg') }}" height="200" alt="">
                <span><b>LPG Sibgle Point Reducer</b></span>
            </div>
            <div class="col-md-4 mb-3  text-center">
                <img src="{{ asset('assets/images/random/multi_value.jpg') }}" height="200" alt="">
                <span><b>LPG Multi Valve</b></span>
            </div>
            <div class="col-md-4 mb-3  text-center">
                <img src="{{ asset('assets/images/random/emulator.jpg') }}" height="200" alt="">
                <span><b>LPG Emulator</b></span>
            </div>
            <div class="col-md-4 mb-3  text-center">
                <img src="{{ asset('assets/images/random/sequential_kit.jpg') }}" height="200" alt="">
                <span><b>LPG Sequential Kit</b></span>
            </div>
        </div>
    </div>
@endsection
