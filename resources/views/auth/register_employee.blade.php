<x-auth_layout>
    <x-navbar></x-navbar>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-5">Sign up</h3>
                            @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                            @endif
                            <x-jet-validation-errors class="mb-4" />
                            <form method="POST" action="{{ route('employees.store') }}">
                                @csrf
                                <div>
                                    <x-jet-label for="Full_name" value="{{ __('Full_name') }}" />
                                    <x-jet-input id="Full_name" class="block mt-1 w-full" type="text" name="Full_name" :value="old('Full_name')" required />
                                </div>

                                <div class="mt-4">
                                    <x-jet-label for="National_Number" value="{{ __('National_Number') }}" />
                                    <x-jet-input id="National_Number" class="block mt-1 w-full" type="text" name="National_Number" :value="old('National_Number')" required />
                                </div>

                                <div class="mt-4">
                                    <x-jet-label for="Phone_Number" value="{{ __('Phone_Number') }}" />
                                    <x-jet-input id="Phone_Number" class="block mt-1 w-full" type="text" name="Phone_Number" :value="old('Phone_Number')" required />
                                </div>

                                <div class="mt-4">
                                    <x-jet-label for="Date_of_birth" value="{{ __('Date_of_birth') }}" />
                                    <x-jet-input id="Date_of_birth" class="block mt-1 w-full" type="date" name="Date_of_birth" :value="old('Date_of_birth')" max="{{ date('Y-m-d') }}" required />
                                </div>

                                <div class="mt-4">
                                    <x-jet-label for="password" value="{{ __('Password') }}" />
                                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                </div>


                                <div class="mt-4">
                                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                                </div>

                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-jet-label for="terms">
                                        <div class="flex items-center">
                                            <x-jet-checkbox name="terms" id="terms" />

                                            <div class="ml-2">
                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </x-jet-label>
                                </div>
                                @endif

                                <div class="flex items-center justify-center mt-4">
                                    <x-jet-button class="ml-4">
                                        {{ __('Register') }}
                                    </x-jet-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-auth_layout>