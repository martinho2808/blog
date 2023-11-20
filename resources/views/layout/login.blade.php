<div class="header-top">
    <div class="container">
        @if (Route::has('login'))
            <div class="row">
                
                <div class="col-md-6 col-sm-6 text-left fh5co-link">
                </div>
                    @auth
                       

                        <div class="col-md-6 col-sm-6 text-right fh5co-social">
                            <div>{{ Auth::user()->name }}</div>
                            <a href="{{route('profile.edit')}}">
                                {{ __('Profile') }}
                            </a>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </div>          
                    @else
                        <div class="col-md-6 col-sm-6 text-right fh5co-social">
                            <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register') }}">Registration</a>
                        </div>            
                    @endauth
                
            </div>
        @endif
    </div>
</div>



            
