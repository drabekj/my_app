@extends('master')

@section('content')
  <h1>Card Detail:</h1>

  <p>{{ $card->title }}<p>

    @foreach ($card->notes as $note)
      <li>{{ $note->body }}</li>
    @endforeach

@stop
