@extends('dashboard.app')

@section('title', 'Libros')

@section('content_header')
<h1>Libros</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Libros') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('books.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Crear nuevo') }}
                            </a>
                        </div>
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
                                    <th>No</th>

                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Categoria</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $book->name }}</td>
                                    <td>{{ $book->price }}</td>
                                    <td>{{ $book->category->name }}</td>

                                    <td>
                                        <form action="{{ route('books.destroy',$book->id) }}" method="POST" class="form-delete">
                                            <a class="btn btn-sm btn-primary " href="{{ route('books.show',$book->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('books.edit',$book->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a> @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="pagination-block card-footer">
                    {{ $books->appends(request()->input())->links('dashboard.paginationlinks') }}
                </div>
            </div>
        </div>
    </div>
</div>
@stop
