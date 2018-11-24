@extends('layout')

@section('title','Lara PJAX | Home')

@section('nav')
    @include('nav',['active'=>'about'])
@endsection

@section('content')
<div class="container">
    <div class="col-lg-12">
        <h3>About Page</h3>
    </div>
    
    <div class="col-lg-12">
    <pre>
        Lara PJAX, Is Laravel with PJAX!
        Tutorial Made By <a href="https://github.com/arifnurdiansyah92/">AN Dev</a>
        Check Out The Repo For More Information <a href="https://github.com/arifnurdiansyah92/Lara-Pjax">Click This</a>
    </pre>
    </div>
</div>
@endsection