@extends('admin.admin')

@section('title', 'Tous les biens')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>@yield('title')</h1>
    <a href="{{ route('admin.property.create') }}" class="btn btn-primary">Ajouter un bien</a>
</div>
<table class="table table-striped">
    <thread>
        <tr>
            <th>Titre</th>
            <th>Surface</th>
            <th>Prix</th>
            <th>Ville</th>
            <th class="text-end">Actions</th>
        </tr>
    </thread>
    <tbody>
        @foreach($properties as $property)
        <tr>
            <td>{{ $property->title }}</td>
            <td>{{ $property->surface }}m²</td>
            <td>{{ number_format($property->prix, thousands_separator: ' ') }}</td>
            <td>{{ $property->ville }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $properties->links() }}

@endsection