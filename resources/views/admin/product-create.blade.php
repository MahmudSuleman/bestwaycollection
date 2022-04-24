@extends('layouts.admin')
@section('page-title', 'Add Product')
@section('content')
<x-card title="Product Details">
    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
        @csrf()
        <div class="row">
            <div class="col-md-6">
                <label for="name">Name</label>
                <input value="{{@old('name')}}" type="text" class="form-control" name="name" id="name">
                @error('name') <span class="text-red">{{$message}}</span> @enderror

            </div>
            <div class="col-md-6">
                <x-input type="number" min="0" step="0.01" class="form-control" name="price" id="price"
                    value="{{@old('price')}}">
                    Price
                </x-input>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description"
                    rows="5">{{@old('description')}}</textarea>
                @error('description') <span class="text-red">{{$message}}</span> @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                <label for="tags">Tags</label>

                <select class="form-control tags" name="tag" id="tags">
                    @foreach(App\Models\Tag::all() as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                </select>

                @error('tags') <span class="text-red">{{$message}}</span> @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                <label for="image_url">Image</label>

                <input class="form-control" name="image_url" id="image_url" type="file">

                @error('image_url') <span class="text-red">{{$message}}</span> @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary mt-5">
                    <i class="fas fa-save"></i>
                    Submit
                </button>
            </div>
        </div>

    </form>
</x-card>

@endsection


@section('scripts')
<script>
$(document).ready(function() {
    $('.tags').select2();
});
</script>
@endsection