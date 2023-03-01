@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('I tuoi Progetti') }}
    </h2>
    <div class="row justify-content-center">
        <div class="row">
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
            @if(session('message'))
            <div class="alert alert-success" >
                {{session('message')}}
            </div>
            @endif
        </div>
        <div class="col">
            <div class="card my-3">
                <div class="card-header">{{ __('User Projects') }}</div>
                <div class="card-body p-0">
                    <table class="table mb-0">
                        <thead>
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Contenuto</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Azioni</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                            <tr>
                              <th scope="row">{{$project['id']}}</th>
                              <td>{{$project['title']}}</td>
                              <td>{{$project['content']}}</td>
                              <td>{{$project['slug']}}</td>
                              <td>
                                {{-- <a href="{{route('admin.projects.show')}}" class="btn btn-square btn-sm btn-info m-1" title="Ispeziona"><i class="fa fa-eye" ></i></a>
                                <a href="" class="btn btn-square btn-sm btn-secondary m-1" title="Modifica"><i class="fa fa-edit"></i></a> --}}
                                <form class="d-inline-block" method="POST" action="{{route('admin.projects.destroy', ['project'=> $project['id']])}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-square btn-danger" data-title="{{$project->title}}"><i class="fas fa-trash" ></i></button>
                                </form>
                              </td>
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
