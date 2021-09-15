@extends('layouts.main')

@section('content')

  <div class="container">
    <h1>I nostri inputs</h1>

    <section class="container">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Url</th>
            <th colspan="3">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($inputs as $input)
            <tr>
              <td>{{ $input->id }}</td>
              <td>{{ $input->title }}</td>
              <td>{{ $input->content }}</td>
              <td>{{ $input->url }}</td>
              <td><a href="{{ route('inputs.show', $input) }}" class="btn btn-success">SHOW</a></td>
              <td><a href="{{ route('inputs.edit', $input) }}" class="btn btn-success">EDIT</a></td>
              <td>
                <form action="{{ route('inputs.destroy', $input) }}" method="POST" >
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </section>

  </div>

@endsection