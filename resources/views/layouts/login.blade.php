<div class="header-top">
    <div class="container">
        @if (Route::has('login'))
            <div class="row">
                
                <div class="col-md-6 col-sm-6 text-left fh5co-link" style="color:white;">
                @auth
                Hello! {{ Auth::user()->name }}
                @endauth
                </div>
                    @auth
                        
                    
                        <div class="col-md-6 col-sm-6 text-right fh5co-social login-nav">                       
                            <!-- Authentication -->
                           
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                
                                <a href="{{route('profile.edit')}}">{{ __('Profile') }}</a>
                                @if(Auth::user()->Role =='Admin' )
                                <a href="{{route('db_display')}}">
                                    {{ __('Management') }}
                                </a>
                                @endif
                                <a :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                               
                            </form>
                            </ul>
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



            
