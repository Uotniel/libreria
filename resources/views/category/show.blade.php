@extends('dashboard.app')

@section('title', 'Categoria: ' . $category->name ?? 'Ver categoria')

@section('content_header')
    <h1>{{ $category->name ?? 'Ver categoria' }}</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver categoria</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('categories.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $category->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
