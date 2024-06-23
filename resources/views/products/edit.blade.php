@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-8 my-4">
            <div class="float-left">
                <h2>Edit Product</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <p>There are some problems in your input</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="post" class="row">
        @csrf
        @method("PUT")

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="Name" class="form-label">
                        <strong>Name:</strong>
                    </label>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control">
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="Price" class="form-label">
                        <strong>Price:</strong>
                    </label>
                    <input type="decimal" name="price" value="{{ $product->price }}" class="form-control">
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="Detail" class="form-label">
                        <strong>Detail:</strong>
                    </label>
                    <textarea name="detail" rows="4" class="form-control">
                        {{ $product->detail }}
                    </textarea>
                </div>
            </div>

            <div class="col-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection

