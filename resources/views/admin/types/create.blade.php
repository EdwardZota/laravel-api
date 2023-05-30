@extends('layouts.app')

@section('content')
@include('partials.sidebar')

        <div class="container">
            <div class="row mt-4">
                <h2>Crea nuovo Tipo di progetto:</h2>
                <form method="POST" action="{{route('admin.types.store')}}">

                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome tipologia:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}">
                        @if ($errors->has('name'))
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        @elseif ($errors->any() && old('name'))
                            <p class="text-success">Campo inserito correttamente!</p>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary my-4">Salva nuovo Tipo</button>

            </form>

        </div>
    </div>

@endsection
