@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Afegir llibre
                </div>
                <div class="card-body" style="padding:30px">

                    <form enctype="multipart/form-data" action="" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="title">Títol</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="author">Autor</label>
                            <input type="text" name="author" id="author" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="ISBN">ISBN</label>
                            <input type="text" name="ISBN" id="ISBN" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="poster">Portada</label>
                            <input type="file" name="poster" id="poster">
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Afegir llibre
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
