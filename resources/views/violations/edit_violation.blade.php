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

                            <form action="{{route('violations.update',$violation->id) }}" method="POST" enctype="multipart/form-data" name="autocomplete-textbox" id="autocomplete-textbox">
                                @csrf
                                @method('PUT')
                                <div>
                                    <x-jet-label for="Car_Number" value="{{ __('Car_Number') }}" />

                                    <x-jet-input name="Car_Number" id="Car_Number" class="block mt-1 w-full form-control" type="text" value="{{$violation-> Car_Number}}" />
                                </div>
                                <div>
                                    <x-jet-label for="type" value="{{ __('type') }}" />
                                    <select id="type" name="type" class="block mt-1 w-full form-control">
                                        @foreach ( $violation_types as $violation_type)
                                        <option value="{{$violation_type}}" {{($violation_type=$violation->type) ?'selected':'' }}>{{$violation_type}}</option>
                                        @endforeach
                                    </select>
                                    <div>
                                        <x-jet-label for="location" value="{{ __('location') }}" />
                                        <x-jet-input name="location" id="location" class="block mt-1 w-full form-control" type="text" value="{{$violation-> location}}" />
                                    </div>

                                    <div>
                                        <x-jet-label for="Created_at" value="{{ __('Created_at') }}" />
                                        <x-jet-input name="created_at" id="created_at" class="block mt-1 w-full form-control" type="date" data-date-format="DD MMMM YYYY" value="{{ date('Y-m-d', strtotime($violation-> created_at))}}" />
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