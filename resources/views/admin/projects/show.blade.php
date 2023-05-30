@extends('layouts.app')

@section('content')
@include('partials.sidebar')
<div class="container">
    <div class="row my-5">
        <div class="card bg-black text-white px-0" style="width: 18rem;">
            @if ($project->preview_image)
                <img class="card-img-top" src="{{ asset('storage/' . $project->preview_image)}}" alt="{{$project->title}}">
            @else
                <img class="card-img-top" src="{{ asset('storage/image_not_available.png')}}" alt="{{$project->title}}">
            @endif
            <div class="card-body">
              <p class="card-text"><span class="font-weight-bold"> Titolo:</span> <br>{{$project->title}}</p>
              <p class="card-text"><span class="font-weight-bold">Descrizione:</span> <br>{{$project->description}}</p>
              <p class="card-text"><span class="font-weight-bold">Link:</span> <br>{{$project->link}}</p>
              <p class="card-text"><span class="font-weight-bold">Tipologia:</span> <br>
                {{$project->type?$project->type->name:'Nessuna tipologia assegnata'}}
            </p>
            <p class="card-text"><span class="font-weight-bold">Tecnologie:</span> <br>
                @foreach ($project->technologies as $technology)
                    <span class="badge rounded-pill text-bg-info">{{$technology->name}}</span>
                @endforeach
            </p>
            </div>
          </div>
    </div>
</div>
@endsection
