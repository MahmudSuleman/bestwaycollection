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
                <th>Name</th>
                <th>Description</th>
            </tr>

            </thead>

            <tbody>
            <tr>
                <td>hello name</td>
                <td>hello description</td>
            </tr>
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

