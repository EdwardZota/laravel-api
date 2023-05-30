@extends('layouts.app')

@section('content')
@include('partials.sidebar')
<div class="container">
    <div class="row my-5">
        <table class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Slug</th>
                <th scope="col">Nome Progetti</th>
                <th scope="col">azioni</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($technologies as $technology)
                    <tr>
                        <th>{{$technology->id}}</th>
                        <td>{{$technology->name}}</td>
                        <td>{{$technology->slug}}</td>
                        <td>
                            @forelse ($technology->projects as $project)
                                <span>{{$project->title}}</span>
                            @empty
                                <span>nessun Progetto</span>
                            @endforelse
                        </td>
                        <td class="d-flex">
                            <div class="me-2 my-2">
                                <a href="{{route('admin.technologies.edit',['technology'=>$technology->slug])}}" class="btn btn-warning">Modifica</a>
                            </div>
                            <form  class="my-2" action="{{route('admin.technologies.destroy',['technology'=>$technology->slug])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>
@endsection
