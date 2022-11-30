@extends('layouts.main')

@section('content')
    <h1>Home</h1>
    <a href="{{ route('cars') }}">Cars</a>
    <a href="{{ route('add-car') }}">Add Car</a>
@endsection