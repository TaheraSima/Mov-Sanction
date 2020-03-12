@extends('layouts.master')
@section('content')

  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="card card-info" style="width: 100%; margin-left: 5%; margin-right:5%; margin-top: 3%;">
            <div class="card-header">
              <h3 class="card-title" style="text-align: center;">MT GROUP MOVE</h3>
              {{-- @php
              if (isset($movcreate)) {
                $mId = $movcreate->id;
              }
              else{
                $mId = 0;
              }
              @endphp --}}
              <h6 style="text-align: right;"><a href="@if(isset($moveDetails)){{ route('movprintpreview', $movcreate->id) }} @else {{ route('movcreate') }} @endif" target="blank">Print Preview</a></h6>
            </div>
            <form class="form-horizontal" action="@if(isset($moveDetails)) {{ route('movcreate.update', $movcreate->id) }} @else {{ route('movcreate.store') }} @endif " method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="group_mov_id" value="@php if(isset($movcreate) && isset($movcreate->id)){ echo $movcreate->id;}@endphp" />
              <div class="card-body">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Sanc No</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="sanction_no" value="@php if(isset($movcreate) && isset($movcreate->sanction_no)){ echo $movcreate->sanction_no;}@endphp" id="sanction_no" placeholder="Sanc No">
                    <input type="hidden" name="id" value="@php if(isset($movcreate) && isset($movcreate->id)){ echo $movcreate->id;}@endphp">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Ref No</label>
                  <div class="col-sm-10">
                    <div class="input-group my-colorpicker2">
                      <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->reference_no)){ echo $movcreate->reference_no;}@endphp" name="reference_no" placeholder="reference no">
                      <div class="input-group-append">
                        <a href="#" class="badge badge-light" style="margin-top: 10px;">Clear</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="unit" class="col-sm-2 col-form-label">Unit</label>
                  <div class="col-sm-2">
                    <div class="input-group my-colorpicker2">
                      <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->unit)){ echo $movcreate->unit;}@endphp" name="unit" placeholder="Unit">
                      <div class="input-group-append">
                        <a href="#" class="badge badge-light" style="margin-top: 10px;">Clear</a>
                      </div>
                    </div>
                  </div>
                  <label for="tel" class="col-sm-1 col-form-label">Tel</label>
                  <div class="col-sm-3">
                    <div class="input-group my-colorpicker2">
                      <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->telephone)){ echo $movcreate->telephone;}@endphp" name="telephone" placeholder="Tel">
                      <div class="input-group-append">
                        <a href="#" class="badge badge-light" style="margin-top: 10px;">Clear</a>
                      </div>
                    </div>
                  </div>
                  <label for="ext" class="col-sm-1 col-form-label">Ext</label>
                  <div class="col-sm-3">
                    <div class="input-group my-colorpicker2">
                      <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->telephone)){ echo $movcreate->telephone;}@endphp" name="extension" placeholder="Ext">
                      <div class="input-group-append">
                        <a href="#" class="badge badge-light" style="margin-top: 10px;">Clear</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="cantt" class="col-sm-2 col-form-label">Cantt</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->cantt)){ echo $movcreate->cantt;}@endphp" name="cantt" id="inputEmail3" placeholder="Cantt">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="bde" class="col-sm-2 col-form-label">Brigadier</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->brigadier)){ echo $movcreate->brigadier;}@endphp" name="brigadier" id="brigadier" placeholder="Brigadier">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="div" class="col-sm-2 col-form-label">Div/Area</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->division)){ echo $movcreate->division;}@endphp" name="division" id="division" placeholder="Div/Area">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="visit" class="col-sm-2 col-form-label">Place of Visit</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->place)){ echo $movcreate->place;}@endphp" name="place" id="place" placeholder="Place of Visit">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="purpose-mov" class="col-sm-2 col-form-label">Purpose of Mov</label>
                  <div class="col-sm-4">
                    <div class="input-group my-colorpicker2">
                      <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->purpose)){ echo $movcreate->purpose;}@endphp" name="purpose" placeholder="Purpose of Mov">
                      <div class="input-group-append">
                        <a href="#" class="badge badge-light" style="margin-top: 10px;">Clear</a>
                      </div>
                    </div>
                  </div>
                  <label for="reference-no" class="col-sm-2 col-form-label">Reference No</label>
                  <div class="col-sm-4">
                    <div class="input-group my-colorpicker2">
                      <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->reference)){ echo $movcreate->reference;}@endphp" name="reference" placeholder="Tel">
                      <div class="input-group-append">
                        <a href="#" class="badge badge-light" style="margin-top: 10px;">Clear</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="visit" class="col-sm-2 col-form-label">Additional Comments</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->comment)){ echo $movcreate->comment;}@endphp" name="comment" id="comment" placeholder="Additional Comments">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="purpose-mov" class="col-sm-2 col-form-label">Date of Mov</label>
                  <div class="col-sm-4">
                    <div class="input-group my-colorpicker2">
                      <input type="date" value="@php if(isset($movcreate) && isset($movcreate->date_mov)){ echo $movcreate->date_mov;}@endphp" name="date_mov" class="form-control">
                      <div class="input-group-append">
                        <a href="#" class="badge badge-light" style="margin-top: 10px;">Clear</a>
                      </div>
                    </div>
                  </div>
                  <label for="reference-no" class="col-sm-2 col-form-label">Time of Mov</label>
                  <div class="col-sm-4">
                    <div class="input-group">
                      <input type="text" id="input_starttime1" value="@php if(isset($movcreate) && isset($movcreate->time_mov)){ echo $movcreate->time_mov;}@endphp" name="time_mov" class="form-control timepicker" placeholder="Selected time">
                      <div class="input-group-append">
                        <a href="#" class="badge badge-light" style="margin-top: 10px;">Clear</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="visit" class="col-sm-2 col-form-label">Made of Journey</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->made_journey)){ echo $movcreate->made_journey;}@endphp" name="made_journey" id="made_journey" placeholder="Made of Journey">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="visit" class="col-sm-2 col-form-label">Route incl Ni Stay</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->route_incl)){ echo $movcreate->route_incl;}@endphp" name="route_incl" id="route_incl" placeholder="Route incl Ni Stay">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="purpose-mov" class="col-sm-2 col-form-label">Gp Comd</label>
                  <div class="col-sm-4">
                    <div class="input-group my-colorpicker2">
                      <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->command)){ echo $movcreate->command;}@endphp" name="command" placeholder="Gp Comd">
                      <div class="input-group-append">
                        <a href="#" class="badge badge-light" style="margin-top: 10px;">Clear</a>
                      </div>
                    </div>
                  </div>
                  <label for="reference-no" class="col-sm-2 col-form-label">Mob no of Gp Comd</label>
                  <div class="col-sm-4">
                    <div class="input-group my-colorpicker2">
                      <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->command_no)){ echo $movcreate->command_no;}@endphp" name="command_no" placeholder="Mob no of Gp Comd">
                      <div class="input-group-append">
                        <a href="#" class="badge badge-light" style="margin-top: 10px;">Clear</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group row" style="background-color: #E0EFF3;">
                  <label for="reference-no" style="text-align: center;" class="col-sm-12 col-form-label">ITEM DETAILS</label>
                  <div class="col-md-2"></div>
                  <div class="col-md-6">
                    <button type="button" class="btn btn-success stock-add">+ Add</button>          
                  </div><br>
                    <table class="table table-sm table-responsive" style="margin-left: 17%;"> 
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Category</th>
                          <th scope="col">Product</th>
                          <th scope="col">Quantity</th>
                        </tr>
                      </thead>
                      <tbody class="stocks"></tbody>
                    </table>
                </div><br>
                <div class="form-group row" style="background-color: #E0EFF3;">
                  <label for="reference-no" style="text-align: center;" class="col-sm-12 col-form-label"> MT GROUP MOVE (RETURN)</label>
                    <label for="visit" class="col-sm-3 col-form-label">Date of Return Journey</label>
                    <div class="col-sm-3">
                      <input type="date" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->date_return)){ echo $movcreate->date_return;}@endphp" name="date_return">
                    </div>
                    <label for="visit" class="col-sm-3 col-form-label">Time of Return Journey</label>
                    <div class="col-sm-3">
                      <input type="text" id="input_starttime" value="@php if(isset($movcreate) && isset($movcreate->return_time)){ echo $movcreate->return_time;}@endphp" name="return_time" class="form-control timepicker" placeholder="Select time">
                    </div><br><br>
                    <label for="visit" class="col-sm-3 col-form-label">Mode of Journey</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->made_return_jurney)){ echo $movcreate->made_return_jurney;}@endphp" name="made_return_jurney" placeholder="Made of Return Journey">
                    </div><br><br>
                    <label for="visit" class="col-sm-3 col-form-label">Route incl Ni Stay</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->route_return_incl)){ echo $movcreate->route_return_incl;}@endphp" name="route_return_incl" placeholder="Return Route incl Ni Stay">
                    </div><br><br>
                    <label for="visit" class="col-sm-3 col-form-label">Gp Comd</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->return_command)){ echo $movcreate->return_command;}@endphp" name="return_command">
                    </div>
                    <label for="visit" class="col-sm-3 col-form-label">Mob no of Gp Comd</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->return_command_no)){ echo $movcreate->return_command_no;}@endphp" name="return_command_no" placeholder="Mob no of Gp Comd">
                    </div><br><br>
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <button type="button" class="btn btn-success stock-add_r">+ Add</button>          
                  </div><br>
                    <table class="table table-sm table-responsive" style="margin-left: 26%;"> 
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Category</th>
                          <th scope="col">Product</th>
                          <th scope="col">Quantity</th>
                        </tr>
                      </thead>
                      <tbody class="stocks_r"></tbody>
                    </table>
                </div>
                <div class="form-group row">
                  <label for="visit" class="col-sm-2 col-form-label">Any Other Eqpt</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->other_equipment)){ echo $movcreate->other_equipment;}@endphp" name="other_equipment" placeholder="Other Equipment">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="visit" class="col-sm-2 col-form-label">Any Other Info</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->other_info)){ echo $movcreate->other_info;}@endphp" name="other_info" placeholder="Other Info">
                  </div>
                </div>


                <div class="form-group row" style="background-color: #E0EFF3;">
                  <label for="reference-no" style="text-align: center;" class="col-sm-12 col-form-label">ACTION / INFORMATION</label>
                  <label for="reference-no" class="col-sm-12 col-form-label">Extl</label>
                  <div class="col-sm-1"></div>
                  <label for="purpose-mov" class="col-sm-2 col-form-label">Extl Act</label>
                  <div class="col-sm-3">
                    <div class="input-group my-colorpicker2">
                      <textarea readonly="readonly" name="extarnal_act" id="txtName" cols="25" rows="2" style="margin: 0px 3px 0px 0px; height: 35px; width: 160px;">@php if(isset($movcreate) && isset($movcreate->extarnal_act)){ echo $movcreate->extarnal_act;}@endphp </textarea>
                      {{-- <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->extarnal_act)){ echo $movcreate->extarnal_act;}@endphp" name="extarnal_act" placeholder="Extl Act"> --}}
                      <div class="input-group-append">
                        <a href="#" class="badge badge-light" style="padding-top: 10px;">Clear</a>
                      </div>
                    </div>
                  </div>
                  <label for="reference-no" class="col-sm-2 col-form-label">Extl Action</label>
                  <div class="col-sm-4">
                    <div class="input-group my-colorpicker2">
                      <select multiple="" class="form-control" name="extarnal_action" id="extarnal_action">
                        <option value=""></option>
                        @foreach($originatorlist as $userslist)
                          <option value="{{ $userslist->email }}">{{ $userslist->email }}</option>
                        @endforeach 
                      </select>
                      {{-- <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->extarnal_action)){ echo $movcreate->extarnal_action;}@endphp" name="extarnal_action" placeholder="Extl Action"> --}}
                      <div class="input-group-append">
                        <input type="button" class="form-control" style="padding-top: 10px;" onclick="SetName()" value="Add">
                      </div>
                    </div>
                  </div><br><br>
                  <div class="col-sm-1"></div>
                  <label for="purpose-mov" class="col-sm-2 col-form-label">Extl Info</label>
                  <div class="col-sm-3">
                    <div class="input-group my-colorpicker2">
                      <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->extl_info)){ echo $movcreate->extl_info;}@endphp" name="extl_info" placeholder="Extl Inf">
                      <div class="input-group-append">
                        <a href="#" class="badge badge-light" style="padding-top: 10px;">Clear</a>
                      </div>
                    </div>
                  </div>
                  <label for="extl-email" class="col-sm-2 col-form-label">Extl Email</label>
                  <div class="col-sm-4">
                    <div class="input-group my-colorpicker2">
                      <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->extl_email)){ echo $movcreate->extl_email;}@endphp" name="extl_email" placeholder="Extl Email">
                      <input type="hidden" class="form-control" value="{{ Auth::user()->email }}" name="sender_id" placeholder="sender_id">
                      <div class="input-group-append">
                        <a href="#" class="badge badge-light" style="padding-top: 10px;">Clear</a>
                      </div>
                    </div>
                  </div>

                  <label for="reference-no" class="col-sm-12 col-form-label">Internal</label>
                  <div class="col-sm-1"></div>
                  <label for="purpose-mov" class="col-sm-2 col-form-label">Internal Act</label>
                  <div class="col-sm-3">
                    <div class="input-group my-colorpicker2">
                      <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->internal_act)){ echo $movcreate->internal_act;}@endphp" name="internal_act" placeholder="Internal Act">
                      <div class="input-group-append">
                        <a href="#" class="badge badge-light" style="padding-top: 10px;">Clear</a>
                      </div>
                    </div>
                  </div>
                  <label for="reference-no" class="col-sm-2 col-form-label">Intl Action</label>
                  <div class="col-sm-4">
                    <div class="input-group my-colorpicker2">
                      <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->internal_action)){ echo $movcreate->internal_action;}@endphp" name="internal_action" placeholder="Intl Action">
                      <div class="input-group-append">
                        <a href="#" class="badge badge-light" style="padding-top: 10px;">Clear</a>
                      </div>
                    </div>
                  </div><br><br>
                  <div class="col-sm-1"></div>
                  <label for="purpose-mov" class="col-sm-2 col-form-label">Internal Info</label>
                  <div class="col-sm-3">
                    <div class="input-group my-colorpicker2">
                      <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->intl_info)){ echo $movcreate->intl_info;}@endphp" name="intl_info" placeholder="Internal Info">
                      <div class="input-group-append">
                        <a href="#" class="badge badge-light" style="padding-top: 10px;">Clear</a>
                      </div>
                    </div>
                  </div>
                  <label for="extl-email" class="col-sm-2 col-form-label">Internal Email</label>
                  <div class="col-sm-4">
                    <div class="input-group my-colorpicker2">
                      <input type="text" class="form-control" value="@php if(isset($movcreate) && isset($movcreate->intl_email)){ echo $movcreate->intl_email;}@endphp" name="intl_email" placeholder="Internal Email">
                      <div class="input-group-append">
                        <a href="#" class="badge badge-light" style="padding-top: 10px;">Clear</a>
                      </div>
                    </div>
                  </div>
                  <br><br><br>
                  <div class="col-sm-12" style="margin-left: 33%;">
                  </div>
              </div>

              </div>
              <div class="col-sm-12" style="margin-left: 40%; margin-bottom: 15px;">
                @if(isset($moveDetails))
                  <button type="submit" class="btn btn-success">Update</button>
                  <button class="btn btn-info"><a href="{{ route('moveDetails') }}" style="color: #ffff;">Open</a></button>

                @else
                  {{-- <button class="btn btn-success"><a href="{{ route('moveDetails') }}" style="color: #ffff;">Open</a></button> --}}
                  <button type="submit" class="btn btn-success">Save</button>
                  <button type="reset" class="btn btn-warning">CLEAR</button>
                  <button class="btn btn-info"><a href="{{ route('moveDetails') }}" style="color: #ffff;">Open</a></button>
                @endif                
                
              </div>
            </form>
            <div class="col-sm-12" style="margin-left: 44%; margin-bottom: 15px;">
              @if(isset($moveDetails))
                <form action="{{ route('movcreate.sendupdate', $movcreate->id) }}" method="post">
                    @csrf
                    <input type="submit" name="submit" value="Send" class="btn btn-warning">
                </form>
              @endif
            </div>
          </div>            
        </div>
      </div>
    </section>
  </div>
</div>
<script>
   $(document).ready(function() {
        row_stock(); 
        row_stock_r();   
        var i = 0;   
        function row_stock(){
            var _html = `
            @if (isset($moveDetails))
              @foreach ($moveDetails as $movedetls)
                <tr class="item">
                <td>
                    <button type="button" class="btn btn-sm btn-danger stock-remove">-</button>
                </td>
                <td>
                  <input type="hidden" name="detl_id" value="{{ $movedetls->id }}">
                  <select class="form-control" name="category_id[{{ $movedetls->id }}]" style="width: 100%;">
                    <option value="{{ $movedetls->category_id }}">{{ $movedetls->category->category_name }}</option>
                    @foreach($categorylist as $category)
                      <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach                                        
                  </select>
                </td>
                <td>
                  <select class="form-control" name="product_id[{{ $movedetls->id }}]" style="width: 100%;">
                    <option value="{{ $movedetls->product_id }}">{{ $movedetls->product->product_name }}</option>
                    @foreach($productlist as $products)
                      <option value="{{ $products->id }}">{{ $products->product_name }}</option>
                    @endforeach                                       
                  </select>
                </td>
                <td>
                  <input type="number" name="expected_qty[{{ $movedetls->id }}]" value="{{ $movedetls->quantity }}" class="form-control" />
                </td>
            </tr>
              @endforeach
              @else
              <tr class="item">
                <td>
                    <button type="button" class="btn btn-sm btn-danger stock-remove">-</button>
                </td>
                <td>
                  <select class="form-control" name="category_id[]" style="width: 100%;">
                    <option 
                    value=" @php if(isset($catId)){ echo $catId;}else{ echo "";} @endphp ">
                    @php 
                    if(isset($category))
                      {
                        echo $category->category_name;
                      }else{
                        echo "Select Category";
                      }@endphp
                    </option>
                    @foreach($categorylist as $category)
                      <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach                                        
                  </select>
                </td>
                <td>
                  <select class="form-control" name="product_id[]" style="width: 100%;">
                    <option 
                    value=" @php if(isset($prcId)){ echo $prcId;}else{ echo "";} @endphp ">
                     @php 
                    if(isset($product))
                      { 
                        echo $product->product_name;
                      }else{
                        echo "Select Product";
                      }@endphp 
                    </option>
                    @foreach($productlist as $products)
                      <option value="{{ $products->id }}">{{ $products->product_name }}</option>
                    @endforeach                                       
                  </select>
                </td>
                <td>
                  <input type="number" name="expected_qty[]" value="0" class="form-control" />
                </td>
            </tr>
            @endif
            <script>
               
            <\/script>
            `;
            $('.stocks').append(_html);
            i++;
        }  
        function row_stock_r(){
            var _html = `
            @if (isset($moveDetails_r))
              @foreach ($moveDetails_r as $movedetls_r)
                <tr class="item">
                <td>
                    <button type="button" class="btn btn-sm btn-danger stock-remove">-</button>
                </td>
                <td>
                 <input type="hidden" name="detl_id_r" value="{{ $movedetls_r->id }}">
                  <select class="form-control" name="category_id_r[{{ $movedetls_r->id }}]" style="width: 100%;">
                    <option value="{{ $movedetls_r->category_id }}">{{ $movedetls_r->category->category_name }}</option>
                    @foreach($categorylist as $category)
                      <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach                                        
                  </select>
                </td>
                <td>
                  <select class="form-control" name="product_id_r[{{ $movedetls_r->id }}]" style="width: 100%;">
                    <option value="{{ $movedetls_r->product_id }}">{{ $movedetls_r->product->product_name }}</option>
                    @foreach($productlist as $products)
                      <option value="{{ $products->id }}">{{ $products->product_name }}</option>
                    @endforeach                                       
                  </select>
                </td>
                <td>
                  <input type="number" name="expected_qty_r[{{ $movedetls_r->id }}]" value="{{ $movedetls_r->quantity }}" class="form-control" />
                </td>
            </tr>
              @endforeach
              @else
              <tr class="item">
                <td>
                    <button type="button" class="btn btn-sm btn-danger stock-remove">-</button>
                </td>
                <td>
                  <select class="form-control" name="category_id_r[]" style="width: 100%;">
                    <option value="">Select Category </option>
                    @foreach($categorylist as $category)
                      <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach                                        
                  </select>
                </td>
                <td>
                  <select class="form-control" name="product_id_r[]" style="width: 100%;">
                    <option value="">Select Product </option>
                    @foreach($productlist as $products)
                      <option value="{{ $products->id }}">{{ $products->product_name }}</option>
                    @endforeach                                       
                  </select>
                </td>
                <td>
                  <input type="number" name="expected_qty_r[]" value="0" class="form-control" />
                </td>
            </tr>
            @endif
            <script>
               
            <\/script>
            `;
            $('.stocks_r').append(_html);
            i++;
        }


        $('.stock-add').click(function() {
            row_stock();
        });

        $('.stock-add_r').click(function() {
            row_stock_r();
        });

        $(document).on('click', '.stock-remove', function() {
          $(this).parent().parent().remove();
        });

        $('#input_starttime').timepicker({});
        $('#input_starttime1').timepicker({});
      });
</script>
  <script>

    function SetName() {
      var txtName = document.getElementById("txtName");
      var selected = document.querySelectorAll("#extarnal_action option:checked");
      txtName.value = Array.prototype.map.call(selected, el => el.value).join(',');
      return false;
    }
  </script>
@endsection

