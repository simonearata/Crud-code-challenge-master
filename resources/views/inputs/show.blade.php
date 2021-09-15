@extends('layouts.main')

@section('content')

  <section class="container">

    <div>
      <h4><strong>Titolo:</strong> {{ $input->title }}</h4>
    </div>

    <div>
      <p><strong>Contenuto:</strong> {{ $input->content }}</p>
      <p><strong>Url:</strong> {{ $input->url }}</p>
    </div>

  </section>

@endsection