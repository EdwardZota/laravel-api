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
                @foreach ($types as $type)
                    <tr>
                        <th>{{$type->id}}</th>
                        <td>{{$type->name}}</td>
                        <td>{{$type->slug}}</td>
                        <td>
                            @foreach ($projects as $project)
                                @if ($project->type_id == $type->id)
                                    <span>{{$project->title}}</span>
                                @endif
                            @endforeach
                        </td>
                        <td class="d-flex">
                            <div class="me-2 my-2">
                                <a href="{{route('admin.types.edit',['type'=>$type->slug])}}" class="btn btn-warning">Modifica</a>
                            </div>
                            <form  class="my-2" action="{{route('admin.types.destroy',['type'=>$type->slug])}}" method="POST">
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
