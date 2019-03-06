 <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                {{-- <a class="navbar-brand" href="#">MobileAppResto</a> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor01">
                  <ul class="navbar-nav mr-auto">
                    {{-- <li class="{{ Request::is('salades') ? 'active' : '' }}">
                      <a class="nav-link" href="{{ route('salades.index') }}">MENU</a>
                    </li> --}}

                    <li class="{{ Request::is('dejeuner') ? 'active' : '' }}">
                      <a class="nav-link" href="{{ route('dejeuner.index') }}">DÉJEUNER</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">DESSERT</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">DINER</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">PIZZA</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">BOISSONS</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="#">ÉVÉNEMENTS</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="#">NOTIFICATIONS</a>
                    </li>

                  </ul>
                  <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
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