@extends('layouts.main-layout')
@section('content')
<div class="jumbotron">
</div>
<div class="container" id='list'>
  <ul>
    @foreach ($comics as $elem)
      <li>
        <div  class="cards" style="background-image: url({{ $elem['thumb']}}"></div>
        {{ $elem['title']}}
      </li>
    @endforeach 
  </ul>
</div>
@endsection
