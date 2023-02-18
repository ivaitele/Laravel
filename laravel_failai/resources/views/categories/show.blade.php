@extends('layouts.admin.main')

@section('title', 'Pavadinimas')

@section('content')
    <div class="row">
        <div class="col s12 m6 14">
            <div class="card">
                <div class="card-image">
                    <img src="https://picsum.photos/200">
                    <span class="card-title">{{ $category->name }}</span>
                </div>
                <div class="card-content">
                    <div>ID: {{$category->id}}</div>
                    <p>Name: {{ $category->name }}</p>
                    <p>Slug: {{ $category->slug }}</p>
                    <p>Description: {{ $category->description }}</p>
                    <p>Image: {{ $category->image }}</p>
                    <p>Status_id: {{ $category->status_id }}</p>
                    <p>Parent_id: {{ $category->parent_id }}</p>
                    <p>Sort_order: {{ $category->sort_order }}</p>
                    <p>Creation date: {{ $category->created_at }}</p>
                    <p>Last updated: {{ $category->updated_at }}</p>
                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$category" mainRoute="categories" />
                </div>
            </div>
        </div>
    </div>
@endsection
