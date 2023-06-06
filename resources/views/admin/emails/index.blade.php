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
                <th scope="col">Cognome</th>
                <th scope="col">Email</th>
                <th scope="col">Messaggio</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($leads as $lead)
                    <tr>
                        <th>{{$lead->id}}</th>
                        <td>{{$lead->name}}</td>
                        <td>{{$lead->surname}}</td>
                        <td>{{$lead->email}}</td>
                        <td>{{$lead->message}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>
@endsection
