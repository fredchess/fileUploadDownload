@extends('Layouts._Layout')

@section('title', 'Add a File')

@section('content')
    <div class="container" style="margin-top: 40px">
        <h1>Add A File</h1>
        <form action="{{ route('files.store') }}" method="POST" enctype="multipart/form-data"  style="width: 70%">
            @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control" id="name" aria-describedby="namelHelp">
              <small id="nameHelp" class="form-text text-muted">Ceci est le titre du fichier que les gens verront.</small>
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select class="form-control" id="type" name="type">
                    <option value="">Which type of file is it?</option>
                    <option value="1">Image</option>
                    <option value="2">Music</option>
                    <option value="3">Video</option>
                    <option value="4">Book</option>
                  </select>
            </div>
            <div class="form-group">
                <label for="fileName">The File</label>
                <input type="file" class="form-control-file" id="fileName" name="fileName">
            </div>
            <div class="form-group">
                <label for="associatedImage">Image Associated</label>
                <input type="file" class="form-control-file" id="associatedImage" name="associatedImage">
                <small id="nameHelp" class="form-text text-muted">This image will be displayed to describe the file<small>
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
          </form>
    </div>
@endsection
