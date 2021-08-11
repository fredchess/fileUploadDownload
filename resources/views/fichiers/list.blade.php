@extends('Layouts._Layout')

@section('title', "All Files")

@section('content')
    <div class="container container-table">
        <h1>Latest Files</h1>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Publisher</th>
                <th scope="col">Date</th>
                <th scope="col">Downloads</th>
              </tr>
            </thead>
            <tbody>
                <?php $cnt = 1 ?>
                @foreach ($files as $file)
                <tr>
                    <th scope="row">{{ $cnt++ }}</th>
                    <td><a href="{{ route('files.details', $file->id) }}">{{ $file->name }}</a></td>
                    <td>{{ $file->type }}</td>
                    <td>{{ $file->uploader }}</td>
                    <td>{{ $file->created_at }}</td>
                    <td></td>
                  </tr>    
                @endforeach
            </tbody>
          </table>
    </div>
@endsection