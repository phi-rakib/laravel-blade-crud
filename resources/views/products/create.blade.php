@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-8 my-4">
            <div class="float-left">
                <h2>Add New Product</h2>
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

    <form action="{{ route('products.store') }}" method="post" class="row">
        @csrf

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="Name" class="form-label">
                        <strong>Name:</strong>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="Price" class="form-label">
                        <strong>Price:</strong>
                    </label>
                    <input type="decimal" name="price" class="form-control" placeholder="Price">
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="Detail" class="form-label">
                        <strong>Detail:</strong>
                    </label>
                    <textarea name="detail" class="form-control" rows="4" placeholder="Detail"></textarea>
                </div>
            </div>

            <div class="col-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
