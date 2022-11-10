
 <x-auth_layout>
<x-navbar></x-navbar>
<div class="container-xl" style="margin-top: 80px;" >
  <div class="table-responsive">
    <div class="table-wrapper ">
      <div class="table-title bg-gray-800 ">
        <div class="row">
          <div class="col-sm-6">
            <h2>Manage <b>violations</b></h2>
          </div>
          <div class="col-sm-6">
            <a href="#addviolationModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New violation</span></a>
                      
          </div>
        </div>
      </div>
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>
            
            </th>
            <th>violation_Id</th>
            <th>Car_Number</th>
            <th>type</th>
            <th>price</th>
            <th>location</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th>Actions</th>
          </tr>
        </thead>
        @foreach ($violations as $violation)
        <tbody>
          <tr>
            <td>
            </td>
            <td>{{$violation->id}}</td>
            <td>{{$violation-> Car_Number}}</td>
            <td>{{$violation->type}}</td>
            <td>{{$violation->price}}</td>
            <td>{{$violation->location}}</td>
            <td>{{$violation->created_at}}</td>
            <td>{{$violation->updated_at}}</td>
            <td>
           
            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
              <div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
            <div class="modal-content">
            <form action="{{ route('violations.destroy',$violation->id) }}" class="btn-danger" method="POST">
            <div class="modal-header">            
            <h4 class="modal-title">Delete Employee</h4>
            </div>
            <div class="modal-body">          
            <p>Are you sure you want to delete these Records?</p>
            <p class="text-warning"><small>This action cannot be undone.</small></p>
        </div>
        <div class="modal-footer">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger ">Delete</button>
          <input type="button" class="btn text-white" data-dismiss="modal" value="Cancel">
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
    <form action="{{ route('violations.update',$violation->id)}}"  class="btn-danger" method="POST">
    @csrf
            @method('PUT')
            <div class="modal-header bg-dark" >            
          <h4 class="modal-title ">Edit Employee</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body  bg-secondary">    
   
            <label>Car_Number</label>
            <input type="text" name="Car_Number" class="form-control" value="{{$violation->Car_Number}}"  >
         
        <label>Type</label>
          <select id="type" name="type" class="form-control">
          @foreach ( $violation_types as $violation_type)
          <option value="{{$violation_type}}">{{$violation_type}}</option>
          @endforeach
          </select>
          <div class="form-group">
            <label>location</label>
            <input type="text" name="location" class="form-control" value="{{$violation->location}}">
          </div>
      
        </div>
        <div class="modal-footer">
        <input type="submit" class="btn btn text-white" value="Save" >
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

</div>
</x-guest-layout>
