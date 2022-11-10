<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Traffic Police</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="{{ url('/') }}">Home</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="contact.html">Contact Us</a></li>
          @if (Route::has('login'))
                @auth
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                               
                                    <button type="button" class="px-3 py-2 " style="color:white">
                                        {{ Auth::user()->name }}
                                     
                                    </button>
                             
                            @endif
                        </x-slot>

                        <x-slot name="content">
                          

                            <x-jet-dropdown-link  href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
                    
                       
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" >Register</a>
                        @endif
                    @endauth
               
            @endif
       
</ul>

       
<i class="bi bi-list mobile-nav-toggle"></i>

      </nav><!-- .navbar -->
      </div>
  </header>
