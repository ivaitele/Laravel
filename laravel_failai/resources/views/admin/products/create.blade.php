@extends('layouts.admin.main')

@section('title', 'New Product')

@section('content')
    <h1>New product</h1>
    <form action="{{route('products.store')}}" method="post"
          enctype="multipart/form-data">
        @csrf

        <input type="text" name="name" placeholder="Name" value="{{old('name')}}"
               class="@error('name') is-invalid @enderror"><br>

        <input type="text" name="slug" placeholder="Slug" value="{{old('slug')}}"
               class="@error('slug') is-invalid @enderror"><br>
        <input type="text" name="description" placeholder="Description" value="{{old('description')}}"
               class="@error('description') is-invalid @enderror"><br>
        <input type="file" name="image" placeholder="Image" value="{{old('image')}}"><br>
        <input type="text" name="category_id" placeholder="Category ID" value="{{old('category_id')}}"
               class="@error('category_id') is-invalid @enderror"><br>
        <input type="text" name="color" placeholder="Color" value="{{old('color')}}"><br>
        <input type="text" name="size" placeholder="Size" value="{{old('size')}}"><br>
        <input type="text" name="price" placeholder="Price" value="{{old('price')}}"><br>
        <input type="text" name="status_id" placeholder="Status ID" value="{{old('status_id')}}"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Submit">
    </form>
@endsection
