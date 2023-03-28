@extends('layout.app')

@section('main')
<div class="jumbotron">

</div>
<div class="container">
    <div class="row row-cols-6">
        @foreach ($comics as $comic)
        <div class="my-card">
            <div class="card-details p-5 my-3">
                <img src="{{ $comic['thumb'] }}" alt="">
                <p>{{ $comic['series'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection


