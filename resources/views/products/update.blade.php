@extends('layouts.layout')
@section('content')

<div class="container">
    <h2> Update Producto </h2>

    {{ Form::open(['route' => 'products.update' ,'method' =>'POST']) }}
        <div class="form-group">
            {{ Form::label('name_product', 'nombre del producto') }}
            {{ Form::text('name',$pro->name,['class' => 'form-control']) }}
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            {{ Form::label('description_product', 'Descripción producto') }}
            {{ Form::textarea('description', $pro->description, ['class'=>'form-control','rows' => 6]) }}
            @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            {{ Form::label('price', 'Precio del producto') }}
            {{ Form::number('price', $pro->price, ['class' => 'form-control']) }}
            @error('price')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            {{ Form::label('stock', 'Productos disponibles') }}
            {{ Form::number('stock', $pro->stock, ['class' => 'form-control']) }}
            @error('stock')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            {{ Form::submit('Guardar',['class'=>'btn btn-primary']) }}
        </div>
    {{ Form::close()}}

</div>

@endsection
