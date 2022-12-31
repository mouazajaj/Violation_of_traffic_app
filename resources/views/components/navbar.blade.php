<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

        <div class="logo">
            <h1 class="text-light"><a href="index.html"><span>Traffic Police</span></a></h1>

        </div>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="active " href="{{ url('/') }}">Home</a></li>
                <li><a href="{{route('services')}}">Services</a></li>
                <li><a href="{{route('contact_us')}}">Contact Us</a></li>
                @if (Route::has('login'))
                @auth
                @role('Admin')

                <li><a href="{{route('cars.index')}}">Cars</a></li>
                <li><a href="{{route('violations.index')}}">Violations</a></li>
                <div class="ml-3 relative">

                    <x-jet-dropdown>
                        <x-slot name="trigger">
                            <button type="button" class="px-3 py-2 text-light">
                                Users

                            </button>
                        </x-slot>

                        <x-slot name="content">

                            <x-jet-dropdown-link href="{{ route('users.index') }}">
                                {{ __('Clients') }}
                            </x-jet-dropdown-link>
                            <x-jet-dropdown-link href="{{ route('employees.index') }}">
                                {{ __('Employees') }}
                            </x-jet-dropdown-link>

                        </x-slot>
                    </x-jet-dropdown>
                </div>
                @endrole
                @role('Employee')
                <li><a href="{{route('cars.index')}}">Cars</a></li>
                <li><a href="{{route('violations.index')}}">Violations</a></li>

                @endrole
                <div class="ml-3 relative">

                    <x-jet-dropdown>
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition ">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->Full_name }}" />
                            </button>
                            @else

                            <button type="button" class="px-3 py-2 text-light">
                                {{ Auth::user()->Full_name}}

                            </button>

                            @endif
                        </x-slot>

                        <x-slot name="content">

                            <x-jet-dropdown-link href="{{ route('myviolations') }}">
                                {{ __('My Violations') }}
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

                                <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>


                @else
                <a href="{{ route('login') }}">Login</a>

                @endauth

                @endif

            </ul>


            <i class="bi bi-list mobile-nav-toggle"></i>

        </nav><!-- .navbar -->
    </div>
</header>