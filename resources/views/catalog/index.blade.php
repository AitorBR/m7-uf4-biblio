@extends('layouts.master')

@section('content')

    <div class="row">

        @foreach ($llibres as $key => $llibre)
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">

                <a href="{{ url('/catalog/show/' . $key) }}">
                    <img src="{{ $llibre['poster'] }}" style="height:200px" />
                    <h4 style="min-height:45px;margin:5px 0 10px 0">
                        {{ $llibre['title'] }}
                    </h4>
                </a>

            </div>
        @endforeach

    </div>

@endsection
