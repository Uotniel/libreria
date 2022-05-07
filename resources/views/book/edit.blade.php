@extends('dashboard.app')

@section('title', 'Editar libro')

@section('content_header')
    <h1>Editar un libro</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Book</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('books.update', $book->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('book.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
