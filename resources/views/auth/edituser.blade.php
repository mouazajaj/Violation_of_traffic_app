<x-auth_Crud_layout>
    <x-navbar>
    </x-navbar>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <x-jet-validation-errors class="mb-4" />
                            <form action="{{ route('users.update',$user->id)}}" method="POST" enctype="multipart/form-data" name="autocomplete-textbox" id="autocomplete-textbox">
                                @csrf
                                @method('PUT')

                                <div>
                                    <x-jet-label for="Full_name" value="{{ __('Full_name') }}" />

                                    <x-jet-input name="Full_name" id="Full_name" class="block mt-1 w-full form-control" type="text" value="{{$user->Full_name}}" />
                                </div>
                                <div>
                                    <x-jet-label for="National_Number" value="{{ __('National_Number') }}" />

                                    <x-jet-input name="National_Number" id="National_Number" class="block mt-1 w-full form-control" type="text" value="{{$user->National_Number}}" autocomplete="National_Number" />
                                </div>
                                <div>
                                    <x-jet-label for="Phone_Number" value="{{ __('Phone_Number') }}" />

                                    <x-jet-input name="Phone_Number" id="Phone_Number" class="block mt-1 w-full form-control" type="text" value="{{$user->Phone_Number}}" autocomplete="Phone_Number" />
                                </div>
                                <div>
                                    <x-jet-label for="Date_of_birth" value="{{ __('Date_of_birth') }}" />
                                    <x-jet-input name="Date_of_birth" id="Date_of_birth" class="block mt-1 w-full form-control" type="date" data-date-format="DD MMMM YYYY" value="{{ date('Y-m-d', strtotime($user->Date_of_birth))}}" />
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