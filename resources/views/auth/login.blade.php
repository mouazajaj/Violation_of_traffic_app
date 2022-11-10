 <link rel="stylesheet" href="{{asset('css/bootstrap-login-form.min.css')}}" />
 <x-auth_layout>
<x-navbar></x-navbar>
<section class="vh-100" >
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <h3 class="mb-5">Sign in</h3>

              @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                  {{ session('status') }}
                </div>
               
              @endif
              <x-jet-validation-errors class="mb-4" />
              <form method="POST" action="{{ route('login') }}">
              @csrf
              <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>
  
           

            <div class="flex items-center justify-center  mt-4">
            <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
            <div class="flex items-center justify-center  mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 ml-10" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-auth_layout>

