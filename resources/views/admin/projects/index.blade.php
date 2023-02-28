@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('I tuoi Progetti') }}
    </h2>
    <div class="row justify-content-center">
        <div class="row">
            <div class="d-flex justify-content-between">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h2>Aggiungi nuovo progetto</h2>
                        </div>
                        <div>
                            <a href="{{route('admin.projects.create')}}" class="btn btn-small btn-primary">Aggiungi</a> 
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('User Projects') }}</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Contenuto</th>
                            <th scope="col">Nome</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                            <tr>
                              <th scope="row">{{$project['id']}}</th>
                              <td>{{$project['title']}}</td>
                              <td>{{$project['content']}}</td>
                              <td>{{$project['slug']}}</td>
                            </tr>    
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
