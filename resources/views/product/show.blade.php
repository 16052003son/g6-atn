@extends('product.layout')

@section('content')
@include('layout.sidebar')

<div class="row">

<div class="col-lg-12 margin-tb">

<div class="pull-left">

<h2> Show Product</h2>

</div>

<div class="pull-right">

<a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>

</div>

</div>

</div>

<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

<strong>Name:</strong>

{{ $product->name }}

</div>

</div>
<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">
    
    <strong>Singer:</strong>
    
    {{ $product->singer }}
    
    </div>
    
    </div>

<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

<strong>Image:</strong>

<img src="{{ asset('image/product/'.$product->image) }}" alt="" border=3 height=150 width=200>

</div>

</div>
<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">
    
    <strong>Audio:</strong>
    
    <img src="{{ asset('audio/product/'.$product->audio) }}" alt="" border=3 height=150 width=200>
    
    </div>
    
    </div>

<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

<strong>Price:</strong>

{{ $product->price }}

</div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

<strong>Category:</strong>

{{ $product->category->name }}

</div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

<strong>Details:</strong>

{{ $product->description }}

</div>
</div>

</div>

@endsection