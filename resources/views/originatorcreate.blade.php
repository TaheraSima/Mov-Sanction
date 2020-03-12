@extends('layouts.master')
@section('content')

  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="card card-info" style="width: 100%; margin-left: 5%; margin-right:5%; margin-top: 3%;">
            <div class="card-header">
              <h3 class="card-title" style="text-align: center;">ORIGINATOR CREATION</h3>
            </div>
            <form action="@if(isset($originator)) {{ route('originatorcreate.update', $originator->id) }} @else {{ route('originatorcreate.store') }} @endif" method="post" enctype="multipart/form-data">
              @csrf
              <div class="modal-body mt-2">
                <div class="form-group row">
                  <label for="div" class="col-sm-2 col-form-label">Reference No</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="@php if(isset($originator) && isset($originator->reference_no)){ echo $originator->reference_no;}@endphp" name="reference_no" id="reference_no" placeholder="Reference No">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="div" class="col-sm-2 col-form-label">BA No</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="@php if(isset($originator) && isset($originator->ba_no)){ echo $originator->ba_no;}@endphp" name="ba_no" id="ba_no" placeholder="BA No">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="div" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" value="@php if(isset($originator) && isset($originator->email)){ echo $originator->email;}@endphp" name="email" id="email" placeholder="Email">
                  </div>
                  <label for="div" class="col-sm-2 col-form-label">Approval Type</label>
                  <div class="col-sm-4">
                    <select name="approval_type" class="form-control">
                      <option value="@php if(isset($originator) && isset($originator->approval_type)){ echo $originator->approval_type;}else{echo '';}@endphp">
                          @php 
                          if(isset($originator) && isset($originator->approval_type))
                            { 
                              echo $originator->approval_type;
                            }
                          else{
                            echo "Select Type";
                          }
                          @endphp</option>
                      <option value="AHQ">AHQ</option>
                      <option value="MO">MO</option>
                      <option value="DIV">DIV</option>
                      <option value="BDE">BDE</option>
                      <option value="UNIT">UNIT</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="div" class="col-sm-2 col-form-label">Originators Address</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="@php if(isset($originator) && isset($originator->address)){ echo $originator->address;}@endphp" name="address" id="address" placeholder="Div/Area">
                  </div>
                </div>
                <div class="form-group row">
                   <label for="tel" class="col-sm-2 col-form-label">Tel</label>
                    <div class="col-sm-4">
                      <div class="input-group my-colorpicker2">
                        <input type="text" class="form-control" value="@php if(isset($originator) && isset($originator->telephone)){ echo $originator->telephone;}@endphp" name="telephone" placeholder="Tel"> 
                      </div>
                    </div>
                    <label for="ext" class="col-sm-2 col-form-label">Ext</label>
                    <div class="col-sm-4">
                      <div class="input-group my-colorpicker2">
                        <input type="text" class="form-control" value="@php if(isset($originator) && isset($originator->extension)){ echo $originator->extension;}@endphp" name="extension" placeholder="Ext"> 
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                   <label for="tel" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-4">
                      <div class="input-group my-colorpicker2">
                        <input type="text" class="form-control" value="@php if(isset($originator) && isset($originator->name)){ echo $originator->name;}@endphp" name="name" placeholder="Name">
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
                        <input type="text" class="form-control" value="@php if(isset($originator) && isset($originator->rank)){ echo $originator->rank;}@endphp" name="rank" placeholder="Rank">
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                   <label for="tel" class="col-sm-2 col-form-label">On Behalf</label>
                    <div class="col-sm-10">
                      <div class="input-group my-colorpicker2">
                        <input type="text" class="form-control" value="@php if(isset($originator) && isset($originator->on_behalf)){ echo $originator->on_behalf;}@endphp" name="on_behalf" placeholder="Rank">
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                   <label for="tel" class="col-sm-2 col-form-label">Display Name</label>
                    <div class="col-sm-4">
                      <div class="input-group my-colorpicker2">
                        <input type="text" class="form-control" value="@php if(isset($originator) && isset($originator->display_name)){ echo $originator->display_name;}@endphp" name="display_name" placeholder="Name">
                      </div>
                    </div>
                    <label for="ext" class="col-sm-2 col-form-label">User Type</label>
                    <div class="col-sm-4">
                      <select name="user_type" class="form-control">
                        <option value="@php if(isset($originator) && isset($originator->user_type)){ echo $originator->user_type;}else{echo '';}@endphp">
                          @php 
                          if(isset($originator) && isset($originator->user_type))
                            { 
                              echo $originator->user_type;
                            }
                          else{
                            echo "Select user Type";
                          }
                          @endphp</option>
                        <option value="Ext">Admin</option>
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
              <div class="col-sm-12" style="margin-left: 40%; margin-bottom: 15px;">
                @if(isset($originator))
                  <button type="submit" class="btn btn-success">Update</button>
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#detailsModal"><h6 style="color: #ffff;">Open</h6></button>
                  {{-- <button class="btn btn-warning">Send</button> --}}
                @else
                  {{-- <button class="btn btn-success"><a href="{{ route('moveDetails') }}" style="color: #ffff;">Open</a></button> --}}
                  <button type="submit" class="btn btn-success waves-effect">Save</button>
                  <button type="reset" class="btn btn-warning">CLEAR</button>
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#detailsModal"><h6 style="color: #ffff;">Open</h6></button>
                @endif 

              </div>
            </form>
          </div>            
        </div>
      </div>
    </section>
  </div>
</div>



<div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-scrollable modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">ORIGINATOR CREATION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
               <th>Reference No</th>
               <th>BA No</th>
               <th>Approval Type</th>
               <th>Name</th>
               <th>Email</th>
               <th>Rank</th>
               <th>On Behalf</th>
               <th>User Type</th>
               <th>Action</th>
            </tr>
          </thead>
          <tbody>
          @if (isset($originatorcreate))
            @foreach ($originatorcreate as $orignate)
              <tr>
                <td>{{ $orignate->reference_no }}</td>
                <td>{{ $orignate->ba_no }}</td>
                <td>{{ $orignate->approval_type }}</td>
                <td>{{ $orignate->name }}</td>
                <td>{{ $orignate->email }}</td>
                <td>{{ $orignate->rank }}</td>
                <td>{{ $orignate->on_behalf }}</td>
                <td>{{ $orignate->user_type }}</td>
                <td>
                  <div class="btn-group">
                    {{-- <a href="#viewModal" class="btn btn-primary" data-toggle="modal">View</a> --}}
                    <a href="{{ route('originatorcreate.edit',$orignate->id) }}" class="btn btn-warning" ><i class="material-icons">edit</i></a>
                    <a href="#deleteModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">delete</i></a>
                  </div> 
                </td>
              </tr>
            @endforeach
          @else
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn-warning" ><i class="material-icons">edit</i></a>
                    <a href="#deleteModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">delete</i></a>
                  </div> 
                </td>
              </tr>
          @endif
          
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection

