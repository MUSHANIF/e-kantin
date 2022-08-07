<header class="header">
  <nav class="navbar">
    <a href="" class="text-white justify-content-center align-self-center" style="text-decoration: none"><img src="/assets/images/logo1.png" alt="Logo e-Canteen" style="width: 30px"><b class="ps-2">e-Canteen</b></a>
      <ul class="nav-menu" align="center">
        @can('superadmin')
       
                
             
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              Selamat Datang,{{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item {{ ($title === "product") ? 'active' : '' }}" href="superadmin/product">Super Admin</a>
            <div class="dropdown-divider"></div>
            {{-- <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register Akun orang') }}</a> --}}
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
         
          @elsecan('admin')
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                Selamat Datang,{{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <a class="dropdown-item {{ ($title === "admin") ? 'active' : '' }}" href="{{ url('admin/product/'.Auth::user()->StoreID) }}">Admin</a>
              <div class="dropdown-divider"></div>
              {{-- <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register Akun orang') }}</a> --}}
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @elsecan('manager')
                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      Selamat Datang,{{ Auth::user()->name }}
                  </a>
                  @foreach($datas as $key)
 
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item {{ ($title === "admin") ? 'active' : '' }}" href="{{ url('manager/store/'.Auth::user()->StoreID) }}">Manager</a>
                    <div class="dropdown-divider"></div>
                    {{-- <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register Akun orang') }}</a> --}}
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>
                      @endforeach
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                
          @else
          <li class="nav-item ms-auto">
            <a class="nav-link text-white {{ ($title === "login") ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-left"></i> Login</a>
          </li>
        
          @endcan
         
      </ul>
      <div class="hamburger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
      </div>
  </nav>
</header>