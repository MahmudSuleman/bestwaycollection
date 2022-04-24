@extends('layouts.admin')
@section('page-title', 'Products')
@section('content')
<x-card title="Products List">
    <x-add-button href="{{route('product.create')}}">
        Add Product
    </x-add-button>
    <table id="d-table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>price</th>
                <th>Description</th>
                <th></th>
            </tr>

        </thead>

        <tbody>
            @foreach($products as $product)
            <tr>
                <td> <img style="width:70px; height: 70px;" src="{{asset('img/images/'. $product->image_url)}}"
                        alt="product image"></td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td>
                    <a href="{{route('product.show', $product)}}" class="btn btn-secondary">Show</a>
                    <a href="{{route('product.edit', $product)}}" class="btn btn-primary">Edit</a>
                    <form action="{{route('product.destroy', $product->id)}}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</x-card>

@endsection

@section('scripts')

<script>
$("#d-table").DataTable({
    "responsive": true,
    "autoWidth": false,
});
</script>

@endsection