@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-sm-4">

            <img src="{{ $llibre['poster'] }}" class="img-fluid" alt="">

        </div>
        <div class="col-sm-8">

            <h2>{{ $llibre['title'] }}</h2>
            <h5><b>Autor:</b> {{ $llibre['author'] }}</h5>
            <h5><b>ISBN:</b> {{ $llibre['ISBN'] }}</h5>

            <br>
            @if ($llibre['rented'] == true)
                <h5><b>Estat :</b> Llibre actualment en préstec</h5>
            @else
                <h6><b>Estat :</b> Llibre disponible</h6>
            @endif

            <br>
            @if ($llibre['rented'] == true)
                <a href="" class="btn btn-danger">Retornar llibre</a>
            @else
                <a href="" class="btn btn-primary">Agafar en préstec</a>
            @endif
            <a href="{{ route('catalog.edit', ['id' => $id]) }}" class="btn btn-warning">Editar llibre</a>
            <a href="{{ route('catalog.index') }}" class="btn btn-light">Tornar al llistat</a>
        </div>
    </div>

@endsection
