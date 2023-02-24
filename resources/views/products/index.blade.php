@extends('products.layout')

@section('content')

    <div class="row my-4">
        <div class="col-12">
            <div class="float-left">
                <h2>Products</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('products.create') }}" class="btn btn-success"> Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="auto">Action</th> 
        </tr>

        @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->detail }}</td>
                <td>
                    <form action="{{ route('products.destroy', $product->id) }}" method="post">
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Show</a>

                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>  
        @endforeach
    </table>

    {{ $products->links() }}

@endsection