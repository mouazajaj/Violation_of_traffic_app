<x-auth_layout>
  <x-navbar></x-navbar>
  <div class="container-xl" style="margin-top: 80px;">
    <div class="table-responsive">
      <div class="table-wrapper ">
        <div class="table-title bg-gray-800 ">
          <div class="row">
            <div class="col-sm-6">
              <h2>Manage <b>Cars</b></h2>
            </div>
            <div class="col-sm-6">
              <a href="{{route('cars.create')}}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Car</span></a>

            </div>
          </div>
        </div>
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>

              </th>
              <th>Model</th>
              <th>Car_Number</th>
              <th>Financial_fees</th>
              <th>Action</th>
            </tr>
          </thead>
          @foreach ($cars as $car)
          <tbody>
            <tr>
              <td>

              </td>
              <td>{{$car->Model}}</td>
              <td>{{$car->Car_Number}}</td>
              <td>{{$car->Financial_fees}}</td>
              <td>

                <a href="{{ route('cars.edit',$car->Car_Number) }}" class="edit"><i class="material-icons" title="Edit">&#xE254;</i></a>
                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                <div id="deleteEmployeeModal" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content ">
                      <form action="{{ route('cars.destroy',$car->Car_Number) }}" method="POST">
                        <div class="modal-header">
                          <h4 class="modal-title">Delete Car</h4>
                        </div>
                        <div class="modal-body ">
                          <p>Are you sure you want to delete these Records?</p>
                          <p class="text-warning"><small>This action cannot be undone.</small></p>
                        </div>
                        <div class="modal-footer">
                          @csrf
                          @method('DELETE')
                          <input type="submit" class="btn btn-danger active" value="Delete">
                          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">

                      </form>

                    </div>
                    </form>
                  </div>
                </div>
      </div>

      @endforeach
      </table>
      {{ $cars->links('pagination::bootstrap-5') }}
    </div>
  </div>
  </x-guest-layout>