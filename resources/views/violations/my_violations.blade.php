<x-app-layout>
    <x-navbar2></x-navbar2>
    <div class="container ">
        <div class="row">
            @foreach ($myviolations as $myviolation)

            <div class="col-3">
                <div class="card-box bg-red">
                    <div class="inner">
                        <h3> {{$myviolation->type}} </h3>
                        <p>
                            {{$myviolation->price}}
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-money" aria-hidden="true"></i>
                    </div>
                    <a href="#exampleModal" data-bs-toggle="modal" data-bs-target="#exampleModal" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade height: 100px;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body mx-4">
                            <div class="container">
                                <p class="my-5 mx-5 display-6">About Violation</p>
                                <div class="row p-2" style="font-size:20px;">
                                    <div class="col-xl-10">
                                        <p>
                                            {{__('Type')}}
                                        </p>
                                    </div>
                                    <div class="col-xl-2">

                                        <p class=" float-end">{{$myviolation->type}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row p-2" style="font-size:20px;">
                                    <div class="col-xl-10">
                                        <p>{{__('CarNumber')}}</p>
                                    </div>
                                    <div class="col-xl-2">
                                        <p class="float-end">{{$myviolation->Car_Number}}
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row p-2" style="font-size:20px;">
                                    <div class="col-xl-10">
                                        <p>{{__('Location')}}</p>
                                    </div>
                                    <div class="col-xl-2">
                                        <p class="float-end">{{$myviolation->location}}
                                        </p>
                                    </div>

                                    <hr>
                                </div>
                                <div class="row p-2" style="font-size:20px;">
                                    <div class="col-xl-2">
                                        <p>{{__('Create_at')}}</p>
                                    </div>
                                    <div class="col">
                                        <p class="float-end">{{$myviolation->created_at}}
                                        </p>
                                    </div>

                                    <hr style="border: 2px solid black;">
                                </div>
                                <div class="row text-black p-2" style="font-size:30px;">
                                    <div class="col-xl-12">
                                        <p class="float-end fw-bold text-danger">Price:{{$myviolation->price}}
                                        </p>
                                    </div>
                                    <hr style="border: 2px solid black;">
                                </div>


                            </div>
                        </div>
                        <div class="modal-footer text-black">
                            <a type="button" data-bs-dismiss="modal">Close</a>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>









    </x-guest-layout>