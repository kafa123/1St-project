@extends('components.layout')
@section('title',$pagename)

@section('content')
@include('components.navbar')
<div class="container p-3 rounded-4" style="background-color: #4F709C;">
    <h1 class="d-flex justify-content-center">About me</h1>
    <h4 class="d-flex justify-content-center"><?= $name; ?></h4>
    <h4 class="d-flex justify-content-center"><?= $email; ?></h4></div>

@endsection
