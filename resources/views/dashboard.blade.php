@extends('layouts.master')
@section('content')
  
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1 class="m-0 text-dark">Dashboard</h1> --}}
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

{{-- =======Move Sanc Request List Bde ( Act )=========================== --}}
    @php
     $fetch_emp = App\Originator::where('email', Auth::user()->email)->get();
    @endphp
    @foreach ($fetch_emp as $emptype)
      {{ $typevar =  $emptype->user_type }}
      {{ $apprtypevar =  $emptype->approval_type }}
    @endforeach
      @if ($apprtypevar != 'UNIT') 
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header" style="background-color: #E0E8EA;">
                <a href="#"><u>Move Sanc Request List Bde ( Act )</u></a>
              </div>
              <div class="card-body">
                <div style="background-color: #f8f9fa; padding: 3px; ">
                  <form action="" method="">
                    @csrf
                    <div class="row">
                        <div class="col-md-2">
                          <label>Search Filter</label>
                        </div>
                        <div class="col-md-2">
                          <input type="date" name="" class="form-control">
                        </div> 
                        <div class="col-md-1">
                          <label>To</label>
                        </div>
                        <div class="col-md-2">
                          <input type="date" name="" class="form-control">
                        </div>   
                        <div class="col-md-1">
                          <label>Status</label>
                        </div>
                        <div class="col-md-2">
                          <select name="" class="form-control">
                            <option value=""></option>
                            <option value=""></option>
                          </select>
                        </div>
                        <div class="col-md-2">
                          <button class="btn btn-primary">Search</button>
                        </div>                      
                    </div>
                  </form>
                  <br>
                  <div class="row">
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Ref(s)</th>
                          <th>Dt and time of Mov</th>
                          <th>Move Type</th>
                          <th>Purpose</th>
                          <th>Sender</th>
                          <th>Create Time</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endif
{{-- ==========Move Sanc Request List AHQ ( Act )=============================== --}}

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header" style="background-color: #E0E8EA;">
                <a href="#"><u> Move Sanc Request List AHQ ( Act )</u></a>
              </div>
              <div class="card-body">
                <div style="background-color: #f8f9fa; padding: 3px; ">
                  <form action="" method="">
                    @csrf
                    <div class="row">
                        <div class="col-md-2">
                          <label>Search Filter</label>
                        </div>
                        <div class="col-md-2">
                          <input type="date" name="" class="form-control">
                        </div> 
                        <div class="col-md-1">
                          <label>To</label>
                        </div>
                        <div class="col-md-2">
                          <input type="date" name="" class="form-control">
                        </div>   
                        <div class="col-md-1">
                          <label>Status</label>
                        </div>
                        <div class="col-md-2">
                          <select name="" class="form-control">
                            <option value=""></option>
                            <option value=""></option>
                          </select>
                        </div>
                        <div class="col-md-2">
                          <button class="btn btn-primary">Search</button>
                        </div>                      
                    </div>
                  </form>
                  <br>
                  <div class="row">
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Ref(s)</th>
                          <th>Dt and time of Mov</th>
                          <th>Move Type</th>
                          <th>Purpose</th>
                          <th>Sender</th>
                          <th>Create Time</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

{{-- =============Move Sanc Request List Div ( Act )========================== --}}
      @if ($apprtypevar != 'UNIT')
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header" style="background-color: #E0E8EA;">
                <a href="#"><u>Move Sanc Request List Div ( Act )</u></a>
              </div>
              <div class="card-body">
                <div style="background-color: #f8f9fa; padding: 3px; ">
                  <form action="" method="">
                    @csrf
                    <div class="row">
                        <div class="col-md-2">
                          <label>Search Filter</label>
                        </div>
                        <div class="col-md-2">
                          <input type="date" name="" class="form-control">
                        </div> 
                        <div class="col-md-1">
                          <label>To</label>
                        </div>
                        <div class="col-md-2">
                          <input type="date" name="" class="form-control">
                        </div>   
                        <div class="col-md-1">
                          <label>Status</label>
                        </div>
                        <div class="col-md-2">
                          <select name="" class="form-control">
                            <option value=""></option>
                            <option value=""></option>
                          </select>
                        </div>
                        <div class="col-md-2">
                          <button class="btn btn-primary">Search</button>
                        </div>                      
                    </div>
                  </form>
                  <br>
                  <div class="row">
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Ref(s)</th>
                          <th>Dt and time of Mov</th>
                          <th>Move Type</th>
                          <th>Purpose</th>
                          <th>Sender</th>
                          <th>Create Time</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endif

{{-- ==============MT MOV SANC INFO ( In Box )==================================== --}}

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header" style="background-color: #E0E8EA;">
                <a href="#"><u>MT MOV SANC INFO ( In Box )</u></a>
              </div>
              <div class="card-body">
                <div style="background-color: #f8f9fa; padding: 3px; ">
                  <form action="" method="">
                    @csrf
                    <div class="row">
                        <div class="col-md-2">
                          <label>Search Filter</label>
                        </div>
                        <div class="col-md-2">
                          <input type="date" name="" class="form-control">
                        </div> 
                        <div class="col-md-1">
                          <label>To</label>
                        </div>
                        <div class="col-md-2">
                          <input type="date" name="" class="form-control">
                        </div>   
                        <div class="col-md-1">
                          <label>Status</label>
                        </div>
                        <div class="col-md-2">
                          <select name="" class="form-control">
                            <option value=""></option>
                            <option value=""></option>
                          </select>
                        </div>
                        <div class="col-md-2">
                          <button class="btn btn-primary">Search</button>
                        </div>                      
                    </div>
                  </form>
                  <br>
                  <div class="row">
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Ref(s)</th>
                          <th>Dt and time of Mov</th>
                          <th>Move Type</th>
                          <th>Purpose</th>
                          <th>Sender</th>
                          <th>Create Time</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

{{-- ==============MT MOV SANC STATUS ( Sent Item )================================ --}}

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header" style="background-color: #E0E8EA;">
                <a href="#"><u>MT MOV SANC STATUS ( Sent Item )</u></a>
              </div>
              <div class="card-body">
                <div style="background-color: #f8f9fa; padding: 3px; ">
                  <form action="" method="">
                    @csrf
                    <div class="row">
                        <div class="col-md-2">
                          <label>Search Filter</label>
                        </div>
                        <div class="col-md-2">
                          <input type="date" name="" class="form-control">
                        </div> 
                        <div class="col-md-1">
                          <label>To</label>
                        </div>
                        <div class="col-md-2">
                          <input type="date" name="" class="form-control">
                        </div>   
                        <div class="col-md-1">
                          <label>Status</label>
                        </div>
                        <div class="col-md-2">
                          <select name="" class="form-control">
                            <option value=""></option>
                            <option value=""></option>
                          </select>
                        </div>
                        <div class="col-md-2">
                          <button class="btn btn-primary">Search</button>
                        </div>                      
                    </div>
                  </form>
                  <br>
                  <div class="row">
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Ref(s)</th>
                          <th>From</th>
                          <th>Purpose</th>
                          <th>Date and time of Mov</th>
                          <th>Move Type</th>
                          <th>Create Time</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($movcreate as $move)
                      @php
                        {{ $i = 1; }}
                      @endphp
                        <tr>
                          <td></td>
                          <td>{{ $move->reference_no }}</td>
                          <td>{{ $move->sender_id }}</td>
                          <td>{{ $move->purpose }}</td>
                          <td>{{ $move->date_mov }}</td>
                          <td>{{ $move->made_journey }}</td>
                          <td>{{ $move->created_at }}</td>
                          <td>
                            @if ($move->status == 1)     
                              <span class="btn-warning">Pending</span>
                            @elseif($move->status == 2)  
                              <span class="btn-success">Approved</span>
                            @else
                              <span class="btn-danger">Rejected</span>
                            @endif
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
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

