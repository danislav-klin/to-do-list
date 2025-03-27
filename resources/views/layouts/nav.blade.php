<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="{{route('main')}}" class="d-inline-flex link-body-emphasis text-decoration-none">
          {{ config("app.name") }}
        </a>
      </div>

      

      <div class="col-md-3 text-end">
        <a href="{{ route('login') }}" type="button" class="btn btn-outline-primary me-2">Login</a>
        <a href="{{ route('register') }}" type="button" class="btn btn-primary">Sign-up</a>
      </div>
    </header>
  </div>
