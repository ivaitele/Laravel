@extends('layouts.admin.main')

@section('title', 'Pavadinimas')

@section('content')
    @include('persons.form_fields', $person)

    <x-forms.buttons.action :model="$person" mainRoute="persons" />
@endsection
