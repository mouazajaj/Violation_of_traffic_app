
 <x-auth_layout>
<x-navbar></x-navbar>
<div class="container-xl" style="margin-top: 80px;" >
  <div class="table-responsive">
    <div class="table-wrapper ">
      <div class="table-title bg-gray-800 ">
        <div class="row">
          <div class="col-sm-6">
            <h2>Manage <b>Cars</b></h2>
          </div>
          <div class="col-sm-6">
            <a href="#addCarModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Car</span></a>
                      
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
           
            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
              <div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
            <div class="modal-content ">
            <form action="{{ route('cars.destroy',$car->Car_Number) }}" class="btn-danger" method="POST">
            <div class="modal-header">            
            <h4 class="modal-title">Delete Employee</h4>
            </div>
            <div class="modal-body ">          
            <p>Are you sure you want to delete these Records?</p>
            <p class="text-warning"><small>This action cannot be undone.</small></p>
        </div>
        <div class="modal-footer">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger ">Delete</button>
          <input type="reset" class="btn btn-success">
          </form>
          
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade " >
  <div class="modal-dialog ">
    <div class="modal-content ">
    <form action="{{ route('cars.update',$car->Car_Number)}}"  class="btn-danger" method="POST">
    @csrf
            @method('PUT')
        <div class="modal-header bg-dark" >            
          <h4 class="modal-title ">Edit Employee</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body  bg-secondary">          
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control"  required>
          </div>
        
      
        </div>
        <div class="modal-footer">
        <input type="submit" class="btn btn text-white" value="Save">
        <input type="reset" class="btn btn-success">
          
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
      <div class="clearfix">
        <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
        <ul class="pagination">
          <li class="page-item disabled"><a href="#">Previous</a></li>
          <li class="page-item active"><a href="#" class="page-link">1</a></li>
          <li class="page-item"><a href="#" class="page-link">2</a></li>
          <li class="page-item"><a href="#" class="page-link">3</a></li>
          <li class="page-item"><a href="#" class="page-link">4</a></li>
          <li class="page-item"><a href="#" class="page-link">5</a></li>
          <li class="page-item"><a href="#" class="page-link">Next</a></li>
        </ul>
      </div>
    </div>
  </div>        
</div>
<!-- add Employee HTML -->
<div id="addCarModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="modal-header">            
          <h4 class="modal-title">Add Car</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">          
          <div class="form-group">
            <label>Model</label>
            <input type="text" name="Model" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Car_Number</label>
            <input type="text" name="Car_Number" class="form-control" required>
          </div>
          <div class="form-group">
            <label>User_id</label>
            <input type="number" class="form-control" name="User_id" required></input>
          </div>
          <div class="form-group">
            <label>Financial_fees</label>
            <input type="date" name="Financial_fees" class="form-control" required>
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
