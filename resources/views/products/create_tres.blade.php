@extends('layouts.layout')

@section('content')

{{ Form::open(['route'=>'products.store','method'=>'POST'])  }}
<div class="form-group">
    {{ Form::label('productname', 'nombre del producto') }}
    {{ Form::text('nombre_product',null,['class'=>'form-control'])}}
    @error('nombre_product')
        <span class='text-danger'>{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    {{ Form::label('description','Description producto') }}
    {!! Form::textarea('description',null, ['class'=>'form-control'])  !!}
    @error('description')
        <span class='text-danger'>{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    {{Form::label('price','Precio del producto') }}
    {{Form::text('price',null,['class'=>'form-control'])}}
    @error('price')
        <span class='text-danger'>{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    {{ Form::label('stock','Productos existentes') }}
    {{ Form::text('stock',null,['class'=>'form-control']) }}
    @error('stock')
        <span class='text-danger'>{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    {{ Form::submit('Guardar') }}
</div>
{{ Form::close() }}



@endsection()
