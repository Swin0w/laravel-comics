@extends('layouts.main-layout')
@section('content')
<div class="jumbotron">
</div>
<div class="container">
    <div id="desc-poster">
        <div id="desc">
            <p>{{ $elem['description'] }}</p>
            <div id="prezzo">
                <p>{{ $elem['price']}}</p>
            </div>
        </div>
        <div id="poster">
            <img src="{{ $elem['thumb'] }}" alt="">
        </div>
    </div>
</div>
@endsection