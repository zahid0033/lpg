@extends('master')
@section('title','LPG')
@section('products','active_nav')
@section('content')
    <div class="container mt-5 mb-5 text-center">
        <embed src="{{asset('assets/pdf/Gas_bank_system_new.pdf#toolbar=0')}}" width="1066px" height="2100px" frameborder="0" />
    </div>

@endsection
