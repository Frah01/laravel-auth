@extends('layouts.admin')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="offset-3 col-6">
                <div class="container" >
                    <div class="row">
                        <div class="col">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <form class="p-3" action="{{route('admin.project.update', $project->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="control-label"><p>Titolo</p></label>
                        <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo" value="{{old('title') ?? $project->title}}">   
                    </div>
                        <label for="floatingTextarea2">Descrizione</label>
                        <textarea name="description" class="form-control" placeholder="Descrizione"  rows="10">
                            {{old('description') ?? $project->description}}
                        </textarea>
                    <div class="form-group my-3">
                        <button type="submit" class="btn btn-success" class="form-control" >Salva le Modifiche</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection