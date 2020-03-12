@extends('layouts.master')
@section('content')
  
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <button type="button" class="btn btn-primary" ><a href="{{route('movcreate')}}"><h6 style="color: #ffff;">Create New</h6></a></button> --}}
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">ORIGINATOR</li>
              <li class="breadcrumb-item active">ORIGINATOR INFO</li>
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
                     <th>Snaction</th>
                     <th>Reference</th>
                     <th>Unit</th>
                     <th>Place</th>
                     <th>Purpose</th>
                     <th>Date of Move</th>
                     <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($movcreate as $move)                  
                  <tr>
                    <td>{{ $move->sanction_no }}</td>
                    <td>{{ $move->reference_no }}</td>
                    <td>{{ $move->unit }}</td>
                    <td>{{ $move->place }}</td>
                    <td>{{ $move->purpose }}</td>
                    <td>{{ $move->date_mov }}</td>
                    <td>
                      <div class="btn-group">
                        <a href="#returnModal_{{ $move->id }}" class="btn btn-primary" data-toggle="modal">Return</a>
                        <a href="{{ route('movcreate.edit',$move->id) }}" class="btn btn-warning" ><i class="material-icons">edit</i></a>
                        <a href="#deleteModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">delete</i></a>
                      </div> 
                    </td>
                  </tr>
<div class="modal fade" id="returnModal_{{ $move->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Move  Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{-- {{route('movcreate.update')}} --}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body mt-2">
           <div class="row">
             <div class="col-md-4">
                <label>Category Name</label>
             </div>
             <div class="col-md-4">
                <label>Product Name</label>
             </div>
             <div class="col-md-4">
                <label>Return Quantity</label>
             </div>
           </div> 

           @foreach ($moveDetails as $movedetls) 

           <div class="row">
            <div class="col-md-4">
              <div class="input-group">
                <div class="form-line">
                  <input type="text" class="form-control" name="" value="{{ $movedetls->category->category_name }}" readonly>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <div class="form-line">
                  <input type="text" class="form-control" name="" value="{{ $movedetls->product->product_name }}" readonly>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <div class="form-line">
                  <input type="number" class="form-control" name="" value="{{ $movedetls->quantity }}">
                </div>
              </div>
            </div>
          </div>

          @endforeach

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success waves-effect">Update</button>
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
</div>

@endsection

