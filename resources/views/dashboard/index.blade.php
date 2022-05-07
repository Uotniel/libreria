@extends('dashboard.app')

@section('title', 'Panel')

@section('content_header')
<h1>Panel</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Panel') }}
                        </span>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>Categorias</th>
                                    <th>Libros</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $totalCategories }}</td>
                                    <td>{{ $totalBooks }}</td>
                                </tr>
                                <tr>
                                    <th><a class="btn btn-sm btn-primary " href="{{ route('categories.index') }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a></th>
                                    <th><a class="btn btn-sm btn-primary " href="{{ route('books.index') }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
