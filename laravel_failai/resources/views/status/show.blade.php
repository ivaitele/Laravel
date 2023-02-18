@extends('layouts.admin.main')

@section('title', 'Pavadinimas')

@section('content')
    <div class="row">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <img src="https://picsum.photos/200">
                    <span class="card-title">{{ $status->name }}</span>
                </div>
                <div class="card-content">
                    <div>ID: {{$status->id}}</div>
                    <p>Name: {{ $status->name }}</p>
                    <p>Type: {{ $status->type }}</p>
                    <p>Creation date: {{ $status->created_at }}</p>
                    <p>Last updated: {{ $status->updated_at }}</p>
                </div>
                <div class="card-action">
                    <a href="{{ route('statuses.edit', $status->id) }}"
                       data-tooltip="Redaguoti"
                       class="tooltipped waves-effect waves-light green btn-small">
                        <i class="tiny material-icons">edit</i>
                    </a>
                    <form action="{{ route('statuses.destroy', $status->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"data-tooltip="Šalinti"
                                class="tooltipped waves-effect waves-light red btn-small">
                            <i class="tiny material-icons">delete</i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
