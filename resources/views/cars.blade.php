@extends('layouts.main')

@section('content')
    <h1>Cars</h1>
    <table>
        <thead>
            <tr>
                <th>Naam</th>
                <th>Aantal banden</th>
                <th>Omschrijving</th>
                <th>Release datum</th>
                <th>Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td>{{ $car->name }}</td>
                    <td>{{ $car->amount_of_tires }}</td>
                    <td>{{ $car->description }}</td>
                    <td>{{ $car->release_date }}</td>
                    <td>
                        <a href="{{ route('edit-car', $car->id) }}">Edit</a>
                        <a href="{{ route('delete-car', $car->id) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
@endsection