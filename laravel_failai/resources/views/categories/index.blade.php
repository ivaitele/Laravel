@extends('layouts.admin.main')

@section('title', __('categories.category_list'))

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>{{__('categories.category_list')}}</h1>
            <a href="{{route('categories.create')}}" class="btn btn-primary">{{__('categories.add_new')}}</a>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>{{__('categories.name')}}</th>
                    <th>{{__('categories.slug')}}</th>
                    <th>{{__('categories.description')}}</th>
                    <th>{{__('categories.status')}}</th>
                    <th>{{__('general.actions')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td><h6><a href="{{route('categories.show', $category->id)}}">{{$category->name}}</a></h6></td>
                        <td>{{$category->slug}}</td>
                        <td>{{$category->description}}</td>
                        <td>{{$category->status->name}}</td>
                        <td>
                            <x-forms.buttons.action :model="$category" mainRoute="categories" />
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
