@extends('components.layout')
@section('title',$pagename)

@section('content')
@include('components.navbar')
<div class="row">
    <div class="col container d-flex justify-content-center align-items-center">
        <h4 class="d-flex justify-content-center p-1 rounded-3"  style="background-color: #4F709C">My Name Kafabih</h4>
    </div>
    <div class="col-xl-4 ">
        <div class="circular-image mx-auto d-flex justify-content-center align-items-center">
            <img src="{{asset("images/gw.png")}}" alt="photo_saya" class="d-flex justify-content-center">
        </div>
    </div>
</div>
@endsection

