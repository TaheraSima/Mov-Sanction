@extends('layouts.master')
@section('content')
  
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal"><h6 style="color: #ffff;">Create New</h6></button>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">ORIGINATOR</li>
              <li class="breadcrumb-item active">CREATE</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="card" style="width: 100%;">
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                     <th>Reference No</th>
                     <th>BA No</th>
                     <th>Approval Type</th>
                     <th>Name</th>
                     <th>Rank</th>
                     <th>On Behalf</th>
                     <th>User Type</th>
                     <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($originatorcreate as $orignate)
                  <tr>
                    <td>{{ $orignate->reference_no }}</td>
                    <td>{{ $orignate->ba_no }}</td>
                    <td>{{ $orignate->approval_type }}</td>
                    <td>{{ $orignate->name }}</td>
                    <td>{{ $orignate->rank }}</td>
                    <td>{{ $orignate->on_behalf }}</td>
                    <td>{{ $orignate->user_type }}</td>
                    <td>
                      <div class="btn-group">
                        <a href="#viewModal}" class="btn btn-primary" data-toggle="modal">View</a>
                        <a href="edit_modal_{{ $orignate->id }}" class="btn btn-warning" data-toggle="modal"><i class="material-icons">edit</i></a>
                        <a href="#deleteModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">delete</i></a>
                      </div> 
                    </td>
                  </tr>
                    <div class="modal fade" id="edit_modal_{{ $orignate->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                      <div class="modal-dialog modal-scrollable modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">ORIGINATOR UPDATE</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="{{ route('originatorcreate.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body mt-2">
                              <div class="form-group row">
                                <label for="div" class="col-sm-2 col-form-label">Reference No</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" value="{{ $orignate->reference_no }}" name="reference_no" id="reference_no" placeholder="Reference No">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="div" class="col-sm-2 col-form-label">BA No</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" value="{{ $orignate->ba_no }}" name="ba_no" id="ba_no" placeholder="BA No">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="div" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-4">
                                  <input type="text" class="form-control" value="{{ $orignate->email }}" name="email" id="email" placeholder="Email">
                                </div>
                                <label for="div" class="col-sm-2 col-form-label">Approval Type</label>
                                <div class="col-sm-4">
                                  <select name="approval_type" class="form-control">
                                    <option value="">Select Type</option>
                                    <option value="AHQ">AHQ</option>
                                    <option value="BDE">BDE</option>
                                    <option value="DIV">DIV</option>
                                    <option value="MO">MO</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="div" class="col-sm-2 col-form-label">Originators Address</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" value="" name="address" id="address" placeholder="Div/Area">
                                </div>
                              </div>
                              <div class="form-group row">
                                 <label for="tel" class="col-sm-2 col-form-label">Tel</label>
                                  <div class="col-sm-4">
                                    <div class="input-group my-colorpicker2">
                                      <input type="text" class="form-control" value="" name="telephone" placeholder="Tel"> 
                                    </div>
                                  </div>
                                  <label for="ext" class="col-sm-2 col-form-label">Ext</label>
                                  <div class="col-sm-4">
                                    <div class="input-group my-colorpicker2">
                                      <input type="text" class="form-control" value="" name="extension" placeholder="Ext"> 
                                    </div>
                                  </div>
                              </div>
                              <div class="form-group row">
                                 <label for="tel" class="col-sm-2 col-form-label">Name</label>
                                  <div class="col-sm-4">
                                    <div class="input-group my-colorpicker2">
                                      <input type="text" class="form-control" value="" name="name" placeholder="Name">
                                    </div>
                                  </div>
                                  <label for="ext" class="col-sm-2 col-form-label">Signature</label>
                                  <div class="col-sm-4">
                                    <div class="input-group my-colorpicker2">
                                      <input type="file"  name="signature">
                                    </div>
                                  </div>
                              </div>
                              <div class="form-group row">
                                 <label for="tel" class="col-sm-2 col-form-label">Rank</label>
                                  <div class="col-sm-10">
                                    <div class="input-group my-colorpicker2">
                                      <input type="text" class="form-control" value="" name="rank" placeholder="Rank">
                                    </div>
                                  </div>
                              </div>
                              <div class="form-group row">
                                 <label for="tel" class="col-sm-2 col-form-label">On Behalf</label>
                                  <div class="col-sm-10">
                                    <div class="input-group my-colorpicker2">
                                      <input type="text" class="form-control" value="" name="on_behalf" placeholder="Rank">
                                    </div>
                                  </div>
                              </div>
                              <div class="form-group row">
                                 <label for="tel" class="col-sm-2 col-form-label">Display Name</label>
                                  <div class="col-sm-4">
                                    <div class="input-group my-colorpicker2">
                                      <input type="text" class="form-control" value="" name="display_name" placeholder="Name">
                                    </div>
                                  </div>
                                  <label for="ext" class="col-sm-2 col-form-label">User Type</label>
                                  <div class="col-sm-4">
                                    <select name="user_type" class="form-control">
                                      <option>Select User</option>
                                      <option value="Ext">Ext</option>
                                      <option value="Int">Int</option>
                                      <option value="MO">MO</option>
                                    </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                 <label for="tel" class="col-sm-2 col-form-label">Status</label>
                                  <div class="col-sm-10">
                                    <div class="input-group my-colorpicker2">
                                      <select name="status">
                                        <option>Active</option>
                                        <option>InActive</option>
                                      </select>
                                    </div>
                                  </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-success waves-effect">Save</button>
                              <button type="reset" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-scrollable modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">ORIGINATOR CREATION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('originatorcreate.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body mt-2">
          <div class="form-group row">
            <label for="div" class="col-sm-2 col-form-label">Reference No</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="" name="reference_no" id="reference_no" placeholder="Reference No">
            </div>
          </div>
          <div class="form-group row">
            <label for="div" class="col-sm-2 col-form-label">BA No</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="" name="ba_no" id="ba_no" placeholder="BA No">
            </div>
          </div>
          <div class="form-group row">
            <label for="div" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" value="" name="email" id="email" placeholder="Email">
            </div>
            <label for="div" class="col-sm-2 col-form-label">Approval Type</label>
            <div class="col-sm-4">
              <select name="approval_type" class="form-control">
                <option value="">Select Type</option>
                <option value="AHQ">AHQ</option>
                <option value="BDE">BDE</option>
                <option value="DIV">DIV</option>
                <option value="MO">MO</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="div" class="col-sm-2 col-form-label">Originators Address</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="" name="address" id="address" placeholder="Div/Area">
            </div>
          </div>
          <div class="form-group row">
             <label for="tel" class="col-sm-2 col-form-label">Tel</label>
              <div class="col-sm-4">
                <div class="input-group my-colorpicker2">
                  <input type="text" class="form-control" value="" name="telephone" placeholder="Tel"> 
                </div>
              </div>
              <label for="ext" class="col-sm-2 col-form-label">Ext</label>
              <div class="col-sm-4">
                <div class="input-group my-colorpicker2">
                  <input type="text" class="form-control" value="" name="extension" placeholder="Ext"> 
                </div>
              </div>
          </div>
          <div class="form-group row">
             <label for="tel" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-4">
                <div class="input-group my-colorpicker2">
                  <input type="text" class="form-control" value="" name="name" placeholder="Name">
                </div>
              </div>
              <label for="ext" class="col-sm-2 col-form-label">Signature</label>
              <div class="col-sm-4">
                <div class="input-group my-colorpicker2">
                  <input type="file"  name="signature">
                </div>
              </div>
          </div>
          <div class="form-group row">
             <label for="tel" class="col-sm-2 col-form-label">Rank</label>
              <div class="col-sm-10">
                <div class="input-group my-colorpicker2">
                  <input type="text" class="form-control" value="" name="rank" placeholder="Rank">
                </div>
              </div>
          </div>
          <div class="form-group row">
             <label for="tel" class="col-sm-2 col-form-label">On Behalf</label>
              <div class="col-sm-10">
                <div class="input-group my-colorpicker2">
                  <input type="text" class="form-control" value="" name="on_behalf" placeholder="Rank">
                </div>
              </div>
          </div>
          <div class="form-group row">
             <label for="tel" class="col-sm-2 col-form-label">Display Name</label>
              <div class="col-sm-4">
                <div class="input-group my-colorpicker2">
                  <input type="text" class="form-control" value="" name="display_name" placeholder="Name">
                </div>
              </div>
              <label for="ext" class="col-sm-2 col-form-label">User Type</label>
              <div class="col-sm-4">
                <select name="user_type" class="form-control">
                  <option>Select User</option>
                  <option value="Ext">Ext</option>
                  <option value="Int">Int</option>
                  <option value="MO">MO</option>
                </select>
              </div>
          </div>
          <div class="form-group row">
             <label for="tel" class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-10">
                <div class="input-group my-colorpicker2">
                  <select name="status">
                    <option>Active</option>
                    <option>InActive</option>
                  </select>
                </div>
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success waves-effect">Save</button>
          <button type="reset" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
</div>

@endsection

