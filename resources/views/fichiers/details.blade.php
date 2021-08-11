@extends('Layouts._Layout')

@section('title', "File Details")

@section('content')
    <div class="container">
        <h1>File Details Page</h1>
        <h2 style="background-color: green">{{ $file->name }}</h2>
    </div>

@endsection         
