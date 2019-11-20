@extends('master')
@section('title','LPG Station')
@section('products','active_nav')
@section('content')
    <div class="container nav-space">

        <div class="row mt-5">
            <div class="col-md-6 mb-3">
                <img src="{{ asset('assets/images/random/LPG-autogas-storage-tank.jpg') }}" height="350" alt="">
            </div>
            <div class="col-md-6 mb-3">
                <span class="heading">
                    LPG Auto Gas Storage Tank
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

            <div class="col-md-6">
                <span class="heading">
                    LPG Dispenser
                </span>
                <div class="specification">
                    <h4 class="mb-3">Features</h4>
                    <ul style="list-style: square">
                        <li>Both of Cylindrical and toroidal types</li>
                        <li>Different sizes of 20L, 25L, 40L, 60L, 90L.</li>
                        <li>Imported from Turkey</li>
                        <li>5 years Warranty</li>
                        <li>Both of Cylindrical and toroidal types</li>
                        <li>Different sizes of 20L, 25L, 40L, 60L, 90L.</li>
                        <li>Imported from Turkey</li>
                        <li>5 years Warranty</li>
                        <li>Both of Cylindrical and toroidal types</li>
                        <li>Different sizes of 20L, 25L, 40L, 60L, 90L.</li>
                        <li>Imported from Turkey</li>
                        <li>5 years Warranty</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('assets/images/random/auto_gas_dispanser.jpg') }}" height="350" alt="">
                <b>LPG Dispenser</b>
            </div>
        </div>
        <h1 class="heading mt-3 mb-5 text-center">LPG Pump</h1>

        <div class="row mt-3">
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/images/random/lpg_pump.png') }}" height="180" alt="">
                <b>LPG Pump</b>
            </div>
            <div class="col-md-4">
                <ul style="list-style: square">
                    <li>Both of Cylindrical and toroidal types</li>
                    <li>Different sizes of 20L, 25L, 40L, 60L, 90L.</li>
                    <li>Imported from Turkey</li>
                    <li>5 years Warranty</li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('assets/images/random/flow_meter.png') }}" height="180" alt="">
                        <b>LPG Mashflow Meter</b>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('assets/images/random/lpg_compresssor.png') }}" height="180" alt="">
                        <b>LPG Compressor</b>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6 mb-3">
                <span class="heading">
                    LPG Loading Unloading Pump
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
            <div class="col-md-6 text-center mb-3">
                <img src="{{ asset('assets/images/random/Lpg-loading-unloading-pump.jpg') }}" height="350" alt="">
                <b>LPG Loading Unloading Pump</b>
            </div>
        </div>

        <h1 class="heading mt-3 mb-5 text-center">LP Gas Bank System of Dream LPG BD. </h1>
        <div class="row mt-3">
            <div class="col-md-6 mb-3">
                <div class="specification">
                    <h4 class="mb-3">Contents</h4>
                    <ul style="list-style: square">
                        <li>What is Gas Bank System ?</li>
                        <li>Why Gas Bank System ?</li>
                        <li>Safety Features</li>
                        <li>Benefits of the system</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 text-center mb-3">
                <img src="{{ asset('assets/images/random/lpg_bank.png') }}" height="250" alt="">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                {{--        /**************** accordion use in career at japan start *******************  */ --}}
                <div id="accordion" class="">

                    <div class="card border-0 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="card-header p-0 border-0" id="heading-240">
                            <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-240" aria-expanded="false" aria-controls="#collapse-240"><i class="fas fa-minus text-center d-flex align-items-center justify-content-center h-100"></i>What is Gas Bank System ?</button>
                        </div>
                        <div id="collapse-240" class="collapse " aria-labelledby="heading-240" data-parent="#accordion">
                            <div class="card-body accordion-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p>It is a long established fact that a reader will be distracted by the readable content
                                            of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution</p>
                                        <ul style="list-style: square">
                                            <li>Both of Cylindrical and toroidal types</li>
                                            <li>Different sizes of 20L, 25L, 40L, 60L, 90L.</li>
                                            <li>Imported from Turkey</li>
                                            <li>5 years Warranty</li>
                                        </ul>
                                        <img src="{{ asset('assets/images/random/gallery4.jpg') }}" height="200" alt="">
                                        <b class="text-center">Cylinder Gas bank system</b>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('assets/images/random/gallery6.jpg') }}" height="150" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="card-header p-0 border-0" id="heading-241">
                            <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-241" aria-expanded="false" aria-controls="#collapse-241"><i class="fas fa-minus text-center d-flex align-items-center justify-content-center h-100"></i>Why Gas Bank System ?</button>
                        </div>
                        <div id="collapse-241" class="collapse " aria-labelledby="heading-241" data-parent="#accordion">
                            <div class="card-body accordion-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <ul style="list-style: square">
                                            <li>Both of Cylindrical and toroidal types</li>
                                            <li>Different sizes of 20L, 25L, 40L, 60L, 90L.</li>
                                            <li>Imported from Turkey</li>
                                            <li>It is a long established fact that a reader will be distracted by the readable content
                                                of a page when looking at its layout. The point of using Lorem </li>
                                            <li>5 years Warranty</li>
                                            <li>It is a long established fact that a reader will be distracted by the readable content
                                                of a page when looking at its layout. The point of using Lorem </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('assets/images/random/refilling_machine.jpg') }}" alt="">
                                    </div>

                                    <div class="col-md-12">
                                        <p><b>Cylinder Gas Bank</b></p>
                                        <ul style="list-style: square">
                                            <li>Both of Cylindrical and toroidal types</li>
                                            <li>Different sizes of 20L, 25L, 40L, 60L, 90L.</li>
                                            <li>Imported from Turkey</li>
                                            <li>It is a long established fact that a reader will be distracted by the readable content
                                                of a page when looking at its layout. The point of using Lorem </li>
                                            <li>5 years Warranty</li>
                                            <li>It is a long established fact that a reader will be distracted by the readable content
                                                of a page when looking at its layout. The point of using Lorem </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-8">
                                        <p><b>Bulk Tank</b></p>
                                        <ul style="list-style: square">
                                            <li>Both of Cylindrical and toroidal types</li>
                                            <li>Different sizes of 20L, 25L, 40L, 60L, 90L.</li>
                                            <li>Imported from Turkey</li>
                                            <li>It is a long established fact that a reader will be distracted by the readable content
                                                of a page when looking at its layout. The point of using Lorem </li>
                                            <li>5 years Warranty</li>
                                            <li>It is a long established fact that a reader will be distracted by the readable content
                                                of a page when looking at its layout. The point of using Lorem </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('assets/images/random/LPG-autogas-storage-tank.jpg') }}" height="200" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="card-header p-0 border-0" id="heading-242">
                            <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-242" aria-expanded="false" aria-controls="#collapse-242"><i class="fas fa-minus text-center d-flex align-items-center justify-content-center h-100"></i>Safety Features</button>
                        </div>
                        <div id="collapse-242" class="collapse " aria-labelledby="heading-242" data-parent="#accordion">
                            <div class="card-body accordion-body">
                                <ul style="list-style: square">
                                        <li>Both of Cylindrical and toroidal types</li>
                                        <li>Different sizes of 20L, 25L, 40L, 60L, 90L.</li>
                                        <li>Imported from Turkey</li>
                                        <li>It is a long established fact that a reader will be distracted by the readable content
                                            of a page when looking at its layout. The point of using Lorem </li>
                                        <li>5 years Warranty</li>
                                        <li>It is a long established fact that a reader will be distracted by the readable content
                                            of a page when looking at its layout. The point of using Lorem </li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="card-header p-0 border-0" id="heading-243">
                            <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-243" aria-expanded="false" aria-controls="#collapse-243"><i class="fas fa-minus text-center d-flex align-items-center justify-content-center h-100"></i>Benefits of the system</button>
                        </div>
                        <div id="collapse-243" class="collapse " aria-labelledby="heading-243" data-parent="#accordion">
                            <div class="card-body accordion-body">
                                <ul style="list-style: square">
                                    <li>Both of Cylindrical and toroidal types</li>
                                    <li>Different sizes of 20L, 25L, 40L, 60L, 90L.</li>
                                    <li>Imported from Turkey</li>
                                    <li>It is a long established fact that a reader will be distracted by the readable content
                                        of a page when looking at its layout. The point of using Lorem </li>
                                    <li>5 years Warranty</li>
                                    <li>It is a long established fact that a reader will be distracted by the readable content
                                        of a page when looking at its layout. The point of using Lorem </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                {{--        /**************** accordion use in career at japan end *******************  */ --}}
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/images/random/Fuel-tanker.png') }}" height="332" alt="">
                <b>LPG Bulk carrier</b>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/images/random/lpg_mother_plant.jpg') }}" height="332" alt="">
                <b>LPG Mother Plant(proposed),Batia Ghata Khulna</b>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/images/random/3Wheel.png') }}" height="332" alt="">
                <b>Three Wheeler</b>
            </div>
        </div>

    </div>
@endsection
