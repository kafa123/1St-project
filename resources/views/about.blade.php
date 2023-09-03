@extends('components.layout')
@section('title',$pagename)

@section('content')
@include('components.navbar')
    <h1 class="d-flex justify-content-center">About me</h1>
    <h4 class="d-flex justify-content-center"><?= $name; ?></h4>
    <h4 class="d-flex justify-content-center"><?= $email; ?></h4>

@endsection
