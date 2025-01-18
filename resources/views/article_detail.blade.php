@extends('layout.master')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="fw-bold text-center" style="color: rgb(28, 29, 32); margin-top: 80px;">{{$article->title}}</h1>
            <p class="fw-bold text-center" style="color: rgb(71, 80, 43);">{{$article->category}}</p>
            <br> 
        </div>
    </div>

    <div class="row">
        <div class="col-md-9 mx-auto bg-dark text-white p-4 rounded" style="background-color: rgba(0, 0, 0, 0.8);">
            <div>{!! $article->content !!}</div>
        </div>
    </div>

</div>
@endsection

