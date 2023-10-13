@extends('layouts.layout')

@section('content')

    {{ Form::open(array('route' => 'products.store', 'method' => 'post')) }}
    <div class="form-group">
        {{ Form::label('productname', 'Nombre del producto') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
    {{ Form::label('description', 'description del producto') }}
    {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
        @error('description')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
    {{ Form::label('price', 'Precio del producto') }}
    {{ Form::text('price', null, ['class' => 'form-control']) }}
        @error('price')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
    {{ Form::label('stock', 'productos disponibles') }}
    {{ Form::text('stock', null, ['class' => 'form-control']) }}
        @error('stock')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
    {{  Form::submit('Guardar'); }}
    </div>
    {{ Form::close() }}
@endsection
