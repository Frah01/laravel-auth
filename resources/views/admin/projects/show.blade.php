@extends('layouts.admin')
@section('content')
<div class="container back-grey">
    <div class="row">
        <div class="col">
            <div class="d-flex justify-content-start p-3">
                <a class="btn btn-primary" href="{{route('admin.projects.index')}}">Torna A Tutti I Progetti</a>
            </div>
        </div>
    </div>
    <div class="row" >
        <div class="col-8">
            <div class="d-flex justify-content-center align-items-center">  
                <div class="mt-3 mx-2">
                    <h2 class="p-2 text-uppercase">{{$project['title']}}</h2>
                    <div class="price-bar d-flex justify-content-between align-items-center p-2 border">
                    </div>
                    <p class="p-2 fw-semibold">{{$project['content']}}</p>
                </div>
            </div> 
        </div>
        <div class="col-4">
            <div class="mt-5">
        
            </div>
        </div>
    </div>
</div>
@endsection