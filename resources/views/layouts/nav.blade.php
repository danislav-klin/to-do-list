<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        @auth
        <a href="{{route('user.room')}}" class="d-inline-flex link-body-emphasis text-decoration-none">
          {{ config("app.name") }}
        </a>
        @endauth
        @guest
            <a href="{{route('main')}}" class="d-inline-flex link-body-emphasis text-decoration-none">
          {{ config("app.name") }}
        </a>
        @endguest
        
      </div>

      
      @guest
          <div class="col-md-3 text-end">
          <a href="{{ route('login') }}" type="button" class="btn btn-outline-primary me-2">Login</a>
          <a href="{{ route('register') }}" type="button" class="btn btn-primary">Sign-up</a>
        </div>
      @endguest

      @auth
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link">{{ Auth::user()->login }}</a>
        </li>
      </ul>
      <div class="col-md-3 text-end">
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit" class="btn btn-outline-primary me-2">Log out</button>
          <a href="{{ route('addTask', auth()->user()->id ) }}" type="button" class="btn btn-primary">add task</a>

        </form>
      </div>
      
      @endauth
      
    </header>
  </div>
