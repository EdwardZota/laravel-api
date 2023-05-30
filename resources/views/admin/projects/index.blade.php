@extends('layouts.app')

@section('content')
@include('partials.sidebar')
<div class="container">
    <div class="row my-5">
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <th scope="col">Progetto</th>
                <th scope="col">Titolo</th>
                <th scope="col">preview</th>
                <th scope="col">azioni</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th>{{$project->id}}</th>
                        <td>{{$project->title}}</td>
                        <td>
                            @if ($project->preview_image)
                            <div class="index_img">
                                <img class="card-img-top" src="{{ asset('storage/' . $project->preview_image)}}" alt="{{$project->title}}">
                            </div>
                            @else
                                <div class="index_img">
                                    <img class="card-img-top" src="{{ asset('storage/image_not_available.png')}}" alt="{{$project->title}}">
                                </div>
                            @endif
                        </td>
                        <td class="d-flex">
                            <div class="my-2">
                                <a href="{{route('admin.projects.show',$project->post_slug)}}" class="btn btn-primary ">Info</a>
                            </div>
                            <div class="mx-2 my-2">
                                <a href="{{route('admin.projects.edit',['project'=>$project->post_slug])}}" class="btn btn-warning ">Modifica</a>
                            </div>
                            <form  class="my-2" action="{{route('admin.projects.destroy',['project'=>$project->post_slug])}}" method="POST">
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
