@extends('layout')

@section('title','Lara PJAX | Home')

@section('nav')
    @include('nav',['active'=>'home'])
@stop

@section('content')
<div class="container">
    <div class="col-lg-12">
        <h3>Home</h3>
    </div>
    <div class="col-lg-12">
        Welcome To Lara PJAX's Home!
    </div>
</div>
@endsection