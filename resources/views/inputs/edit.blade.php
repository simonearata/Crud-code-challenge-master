@extends('layouts.main')

@section('content')

  <div class="container">
    <h1>Modifica</h1>
    <form action="{{ route('inputs.update', $input) }}" method="post">
      @csrf
      @method('PATCH')

      <div>
          <label for="title">Titolo</label>
          <input type="text" name='title' id="title" value="{{ $input->title }}"> 
        </div>

        <div>
         <label for="content">Contenuto</label>
          <textarea name="text" id="content" name="content" class="form-control" rows="6">{{ $input->content }}</textarea>
        </div>

        <div>
          <label for="url">Url</label>
          <input type="text" name='url' id="url" value="{{ $input->url }}"> 
        </div>

        <button type="submit" class="btn btn-success">Invia</button>
    </form>
  </div>

@endsection