<footer>
  <div class="upper-footer">
    <div class="container d-flex">
      <div class="col-6 d-flex flex-wrap mt-5">
        <ul class="col-4 mb-0 pb-0">
          <h4>DC COMICS</h4>
            @foreach ($footer_links_dccomics as $link)
              <li> {{ $link["title"]}}</li>
            @endforeach
        </ul>
  
        <ul class="col-4">
          <h4>DC</h4>
            @foreach ($footer_links_dc as $link)
              <li> {{ $link["title"]}}</li>
            @endforeach
        </ul>
  
        <ul class="col-4">
          <h4>SITES</h4>
            @foreach ($footer_links_sites as $link)
              <li> {{ $link["title"]}}</li>
            @endforeach
        </ul>
  
        <ul class="col-4">
          <h4>SHOP</h4>
            @foreach ($footer_links_shop as $link)
              <li> {{ $link["title"]}}</li>
            @endforeach
        </ul>
        <div class="col-12">
          <p>All sites content TM and 2020 DC Entertainment, unless otherwhise <span class="text-primary">noted here</span>. All rights reserved. <br>
          <span class="text-primary">Cookies settings</span></p>
        </div>
      </div>
      <div class="col-6">
        <img src="{{ Vite::asset("resources/img/dc-logo-bg.png") }}" alt="">
      </div>
    </div>
  </div>
  <div class="sign-up d-flex justify-content-between align-items-center">
        <div class="container">
          <div class="row">
              <div class="col">
                <button class="btn btn-primary">SIGN-UP NOW</button>
              </div>
              <div class="col socials d-flex">
                <p class="text-primary me-4">FOLLOW US</p>
                <img src="{{ Vite::asset("resources/img/footer-facebook.png") }}" alt="" class="me-4">
                <img src="{{ Vite::asset("resources/img/footer-twitter.png") }}" alt="" class="me-4">
                <img src="{{ Vite::asset("resources/img/footer-youtube.png") }}" alt="" class="me-4">
                <img src="{{ Vite::asset("resources/img/footer-pinterest.png") }}" alt="" class="me-4">
                <img src="{{ Vite::asset("resources/img/footer-periscope.png") }}" alt="" class="me-4">
              </div>
          </div>
       </div>
  </div>
</footer>
