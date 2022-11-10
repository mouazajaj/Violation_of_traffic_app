
<x-guest-layout>

<section class="vh-100" style="background-color: #1c3745;width:100%;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
          
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
          
            <div class="card-body p-5 text-center">
  
            <div class="mb-4 text-sm text-gray-600">
                 {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>
            
            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif

              <form method="POST" action="{{route('password.email')}}">
              @csrf
              <div class="form-outline mb-4">
                <input type="email" name="email"  id="email" class="form-control form-control-lg" :value="old('email')" required autofocus  />
                <label class="form-label" for="typeEmailX-2">Email</label>
              </div>
  
           
  
        
             
              <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
  
            
  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-guest-layout>

