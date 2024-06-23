@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-12 my-4">
            <div class="float-left">
                <h2>Show Product</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 my-4">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->name }}
            </div>

            <div class="form-group">
                <strong>Price:</strong>
                {{ $product->price }}
            </div>

            <div class="form-group">
                <strong>Detail:</strong>
                {{ $product->detail }}
            </div>
        </div>
    </div>
@endsection