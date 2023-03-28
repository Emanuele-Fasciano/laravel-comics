<header>
  <div class="container d-flex align-items-center ">
    <img src="{{ Vite::asset("resources/img/dc-logo.png") }}" alt="" class="my-3">
    <ul class="d-flex">
        @foreach ($header_links as $link)
          <li class="m-2">{{$link["title"]}}</li>
        @endforeach
    </ul>
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
  </div>
</header>
