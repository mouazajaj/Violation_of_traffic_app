<x-auth_Crud_layout>
    <x-navbar></x-navbar>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                            @endif
                            <x-jet-validation-errors class="mb-4" />

                            <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data" name="autocomplete-textbox" id="autocomplete-textbox">
                                @csrf
                                <div>
                                    <x-jet-label for="Model" value="{{ __('Model') }}" />

                                    <x-jet-input name="Model" id="Model" class="block mt-1 w-full form-control" type="text" autofocus autocomplete="Model" />
                                </div>
                                <div>
                                    <x-jet-label for="Car_Number" value="{{ __('Car_Number') }}" />

                                    <x-jet-input name="Car_Number" id="Car_Number" class="block mt-1 w-full form-control" type="text" required />
                                </div>
                                <div>
                                    <x-jet-label for="National_Number" value="{{ __('National_Number') }}" />

                                    <x-jet-input name="National_Number" id="National_Number" class="block mt-1 w-full form-control" type="text" required autocomplete="National_Number" />
                                </div>
                                <div>
                                    <x-jet-label for="Financial_fees" value="{{ __('Financial_fees') }}" />
                                    <x-jet-input name="Financial_fees" id="Financial_fees" class="block mt-1 w-full form-control" type="date" required max="{{ date('Y-m-d') }}" />
                                </div>




                                <div class="flex items-center justify-center mt-4">
                                    <x-jet-button type="submit" class="btn btn-success ml-4 " value="Add">
                                        Add
                                    </x-jet-button>
                                    <x-jet-button type="reset" class="btn btn-success ml-4">
                                        Reset
                                    </x-jet-button>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-auth_Crud_layout>