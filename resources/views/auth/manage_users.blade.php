<x-auth_Crud_layout>
  <x-navbar></x-navbar>
  <div class="container-xl" style="margin-top: 80px;">
    <div class="table-responsive">
      <div class="table-wrapper ">
        <div class="table-title bg-gray-800 ">
          <div class="row">
            <div class="col-sm-6">
              <h2>Manage <b>Employees</b></h2>
            </div>
            <div class="col-sm-6">
              <a href="{{route('users.create')}}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>

            </div>
          </div>
        </div>
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>

              </th>
              <th>Id</th>
              <th>Full Name</th>
              <th>National_Number</th>
              <th>Phone_Number</th>
              <th>Date_of_birth</th>
              <th>Action</th>

            </tr>
          </thead>
          @foreach ($users as $user)
          <tbody>
            <tr>
              <td>

              </td>
              <td>{{$user->id}}</td>
              <td>{{$user->Full_name}}</td>
              <td>{{$user->National_Number}}</td>
              <td>{{$user->Phone_Number}}</td>
              <td>{{$user->Date_of_birth}}</td>
              <td>

                <a href="{{route('users.edit',$user->id)}}" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                <div id="deleteEmployeeModal" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <form action="{{ url("users/$user->id")}}" method="POST">
                        <div class="modal-header">
                          <h4 class="modal-title">Delete User</h4>
                        </div>
                        <div class="modal-body">
                          <p>Are you sure you want to delete these Records?</p>
                          <p class="text-warning"><small>This action cannot be undone.</small></p>
                        </div>
                        <div class="modal-footer">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger active">Delete</button>
                          <input type="button" class="btn text-white" data-dismiss="modal" value="Cancel">
                      </form>

                    </div>
                    </form>
                  </div>
                </div>
      </div>
      </td>
      </tr>
      </tbody>
      @endforeach
      </table>


      {{ $users->links('pagination::bootstrap-5') }}



    </div>
  </div>

  </div>

  <!-- add Employee HTML -->
  <div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h4 class="modal-title">Add Employee</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Address</label>
              <textarea class="form-control" required></textarea>
            </div>
            <div class="form-group">
              <label>Phone</label>
              <input type="text" class="form-control" required>
            </div>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-success" value="Add">
            <input type="reset" class="btn btn-success">

          </div>
        </form>
      </div>
    </div>
  </div>



  </x-guest-layout>