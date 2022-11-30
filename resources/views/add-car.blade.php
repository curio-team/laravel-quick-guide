@extends('layouts.main')

@section('content')
    <h1>Add Car</h1>
    <form action="{{ route('process-add-car') }}" method="POST">
        @csrf
        <label for="name">Naam</label>
        <input type="text" name="name" id="name">
        <label for="founded">Aantal banden</label>
        <input type="number" name="tires" id="tires">
        <label for="description">Omschrijving</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
        <label for="release_date">Release datum</label>
        <input type="date" name="release_date" id="release_date">
        <button type="submit">Submit</button>
    </form>
@endsection