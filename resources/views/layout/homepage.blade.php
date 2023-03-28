@extends('layout.app')

@section('main')
<div class="jumbotron">

</div>
<main>
    <div class="container list">
        <div class="row row-cols-6 pt-5">
            @foreach ($comics as $comic)
            <div class="my-card">
                <div class="card-details my-3">
                    <img src="https://picsum.photos/700/700" class="img-fluid" alt="">
                    <p class="text-white">{{ $comic['series'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <button class="btn btn-primary mt-3">LOAD MORE</button>
    </div>
    <div class="icons">
        <div class="container">
            <div class="row row-cols-5 text-white">
                <div class="icon-details d-flex align-items-center my-5 ">
                    <img src="{{ Vite::asset("resources/img/buy-comics-digital-comics.png") }}" alt="">
                    <p class="ms-3">DIGITAL COMICS</p>
                </div>

                <div class="icon-details d-flex align-items-center my-5 ">
                    <img src="{{ Vite::asset("resources/img/buy-comics-merchandise.png") }}" alt="">
                    <p class="ms-3">DC MERCHANDISE</p>
                </div>

                <div class="icon-details d-flex align-items-center my-5 ">
                    <img src="{{ Vite::asset("resources/img/buy-comics-subscriptions.png") }}" alt="">
                    <p class="ms-3">SUBSCRIPTION</p>
                </div>

                <div class="icon-details d-flex align-items-center my-5 ">
                    <img src="{{ Vite::asset("resources/img/buy-comics-shop-locator.png") }}" alt="">
                    <p class="ms-3">COMIC SHOP LOCATOR</p>
                </div>

                <div class="icon-details d-flex align-items-center my-5 ">
                    <img src="{{ Vite::asset("resources/img/buy-dc-power-visa.svg") }}" alt="" class="img-fluid">
                    <p class="ms-3">DC POWER VISA</p>
                </div>
            </div>
        </div>
    </div>
    
</main>
@endsection


