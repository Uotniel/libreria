<div class="box box-info padding-1">
    <div class="box-body">

      <div class="form-group">
          {{ Form::label('Categoria') }}
          {{ Form::select('category_id',$categories,$book->category_id, ['class' => 'form-control' . ($errors->has('category_id') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona la categoria']) }}
          {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
      </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $book->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Escribe el nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio') }}
            {{ Form::text('price', $book->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Escribe el precio']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
