{{-- <nav class="site-header sticky-top py-1"> --}}
      
      
<!-- comentariado el 03-11-19       -->
      <!-- <nav class="navbar navbar-expand-md bg-dark">
        <div class="container d-flex flex-column flex-md-row justify-content-start">
          <a class="py-2 nav-link text-light" href="\">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
          </a>
          <a class="nav-link text-light" href="\about">Acerca</a>
          <a class="nav-link text-light" href="\services">Servicios</a>
          <a class="nav-link text-light" href="\services">Precios</a>
          
        </div>
      </nav> -->





      {{-- <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="#">Features</a>
            <a class="p-2 text-dark" href="#">Enterprise</a>
            <a class="p-2 text-dark" href="#">Support</a>
            <a class="p-2 text-dark" href="#">Pricing</a>
          </nav> --}}
{{-- 

          <div class="navbar-nav-scroll">
                <ul class="navbar-nav bd-navbar-nav flex-row">
                  <li class="nav-item">
                    <a class="nav-link " href="/" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Bootstrap');">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="/docs/4.3/getting-started/introduction/" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Docs');">Documentation</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="/docs/4.3/examples/" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Examples');">Examples</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://themes.getbootstrap.com/" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Themes');" target="_blank" rel="noopener">Themes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://expo.getbootstrap.com/" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Expo');" target="_blank" rel="noopener">Expo</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://blog.getbootstrap.com/" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Blog');" target="_blank" rel="noopener">Blog</a>
                  </li>
                </ul>
              </div> --}}

{{-- 
              <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                      <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </li>
                  </ul> --}}


                  
                  {{-- <!-- navigation bar -->
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 offset-sm-3 col-md-6 offset-md-3">
        
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/todo/active">Active</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/todo/done">Done</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/todo/deleted">Deleted</a>
          </li>
        </ul>
        
      </div>
    </div>
  </div>
  <!-- navigation bar ends here --> --}}


<!-- -----------------------------  ---------------------------- -->
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <div class="nav navbar-nav">
                      <a class="py-2 nav-link" href="\">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
                      </a>
                      <a class="navbar-brand" href="{{ url('/') }}">
                          {{ config('app.name', 'Laravel') }}
                      </a>
                    
                      <a class="nav-link" href="\about">Acerca</a>
                      <a class="nav-link" href="\help">Ayuda</a>
                      {{-- <a class="nav-link" href="\services">Precios</a> --}}
                      
                    </div>  
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                {{-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> --}}
                                <li class="nav-item dropdown"  >
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        Login
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('login') }}">
                                            Estudiante
                                        </a>
                                        <a class="dropdown-item" href="{{ route('profesor.login') }}">
                                            Profesor
                                        </a>
                                    </div>
                                    
                              </li> 
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>   
                            @endif
                            
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


