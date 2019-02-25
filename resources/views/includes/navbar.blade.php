<nav class="navbar navbar-expand-lg navbar-light bg-light px-5 fixed-top">
  <a class="navbar-brand" href=" {{ route('frameworks.index') }}">
    Laravel-CRUD
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample05">
    <ul class="navbar-nav ml-auto">
      @foreach (config('navbarLinks') as $navLink => $routeName)
      <li class="nav-item mr-4">
        @php
          $linkClassesIfActivePage = Request::route()->getName() == $routeName ? 'bg-info active' : '';
        @endphp
        <a class="nav-link {{ $linkClassesIfActivePage }} text-uppercase" href="{{ route($routeName) }}">{{ $navLink }}</a>
      </li>
    @endforeach
    </ul>
    @php
      $routeEntity = explode('.', Request::route()->getName())[0];
    @endphp
    <a class="btn btn-primary text-capitalize" href="{{ route("$routeEntity.create") }}">Crea nuovo</a>
  </div>
</nav>
