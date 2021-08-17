@extends('Layouts._Layout')

@section('title', "File Details")

@section('content')
    <div class="container">
        <div class="file-image" style="text-align:center">
            <p>
                <h1>DOWNLOAD THE FILE</h1>
            </p>
            <img src="{{ Storage::url($file->associatedImagePath) }}" alt="">
            <a href="{{ route('file.download', $file->id) }}">
                <button class="btn-success">Download</button>
            </a>
        </div>
    </div>

@endsection
