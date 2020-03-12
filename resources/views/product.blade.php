@extends('layouts.master')
@section('content')
  
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1 class="m-0 text-dark">PRODUCT CONFIGURATION</h1> --}}
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">MASTER CONFIGURATION</li>
              <li class="breadcrumb-item active">PRODUCT</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="card card-info" style="width: 100%; margin-left: 5%; margin-right:5%">
            <div class="card-header">
              <h3 class="card-title">PRODUCT CONFIGURATION</h3>
            </div>
            <form class="form-horizontal" action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Category Name</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="category_id" >
                      <option value="">Select Category</option>
                      @foreach($categorylist as $pCategory)
                        <option value="{{ $pCategory->id }}">{{ $pCategory->category_name }}</option>
                      @endforeach 
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Product Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="product_name" placeholder="Write Product Name">
                  </div>
                </div>
                <div class="col-sm-12" style="margin-left: 33%;">
                  <button type="submit" class="btn btn-info">OPEN</button>
                  <button type="submit" class="btn btn-success">SAVE</button>
                  <button type="submit" class="btn btn-warning">CLEAR</button>
                  <button type="submit" class="btn btn-info">NEW</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
</div>

@endsection

