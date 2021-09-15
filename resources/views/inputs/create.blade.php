@extends('layouts.main')

@section('content')
  <div class="container">
    <h1>Inserire nuovo input</h1>
    <div>
      <form action="{{ route('inputs.store') }}" method="post">
        @csrf
        @method('POST')

        <div>
          <label for="title">Titolo</label>
          <input type="text" name='title' id="title"> 
        </div>

        <div>
         <label for="content">Contenuto</label>
          <textarea name="content" id="content" name="content" class="form-control" rows="6"></textarea>
        </div>

        <div>
          <label for="url">Url</label>
          <input type="text" name='url' id="url"> 
        </div>

        <button type="submit" class="btn btn-success">Invia</button>
        <button type="reset" class="btn">Reset</button>
      </form>
    </div>
  </div>
@endsection