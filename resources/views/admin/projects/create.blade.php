@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
            <div class="col-12">
                <h2>Aggiungi nuovo progetto</h2>
            </div>
            <div class="col-12">
                <form action="{{route('admin.projects.store')}}" method="POST">
                @csrf  
                <div class="form-group" >
                    <label for="">Titolo</label>
                    <input type="text" class="form-control" placeholder="Titolo" id="title" name="title">
                </div>
                <div class="form-group" >
                    <label for="">Contenuto</label>
                    <textarea type="text" class="form-control" placeholder="Titolo" id="content" name="content"></textarea>
                </div>
                <div class="form-group my-3" >
                    <button type="submit" class="btn btn-sm btn-success" >Aggiungi Progetto</button>
                </div>
            </form>
            </div>
    </div>
</div>
@endsection