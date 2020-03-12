<!DOCTYPE html>
<html>
<head>
  <title></title>
  @include('../partials.styles')
  @include('../partials.scripts') 
</head>
<body>
  <div class="container" style="margin-top: 25px;">

  @if(isset($movcreate))

    <center><p>RESTRICTED</p></center>
    <div class="row">
      <div class="col-md-5" style="margin-top: 10%;">
        <p>{{ isset($movcreate->reference_no)?$movcreate->reference_no:'not set' }}</p>
        <h5><u>MOV SANC REQ</u></h5>
        <p>Ref(s):</p>
        <ol type="A">
          <li>{{ isset($movcreate->reference)?$movcreate->reference:'not set' }}</li>
        </ol>
        <ol>
          <li>{{ isset($movcreate->comment)?$movcreate->comment:'not set' }}</li>
        </ol>
      </div>
      <div class="col-md-2"></div>
      <div class="col-md-5" style="margin-top: 30px;">
        <p style="text-align: right;">Sender Address <br>
        Tel: {{ isset($movcreate->telephone)?$movcreate->telephone:'not set' }} ext: {{ isset($movcreate->extension)?$movcreate->extension:'not set' }} <br>
        Email: admin@gmail.com <br>
        {{ isset($movcreate->created_at)?$movcreate->created_at:'not set' }}</p>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12" style="margin-left: 85%;">
        <img src="" alt="sender signature">
        <p>Sender Name <br>
          Sender Rank <br>
          on behalf</p>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <p>Distr: <br>
          Extl: <br>
          Act: <br>
          Approver Display Name </p>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <p style="text-align: center;">RESTRICTED</p>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <p style="text-align: center;">RESTRICTED</p>
        <table width="100%" border="1">
          <tr>
            <td colspan="8">
      				<p style="margin-left: 80%;"><u>
                  Sender Address <br>
                  {{ isset($movcreate->reference_no)?$movcreate->reference_no:'not set' }} <br>
                  DT: {{ isset($movcreate->created_at)?$movcreate->created_at:'not set' }} <br>
                </u></p>
              <h5 style="text-align: center;"><u><b>PROFORMA FOR GP MOV SANC</b></u></h5>      			</td>
          </tr>
          <tr>
            <td>Ref No</td>
            <td colspan="7">{{ isset($movcreate->reference_no)?$movcreate->reference_no:'not set' }}</td>
          </tr>
          <tr>
            <td>Unit/Fmn/Cantt</td>
            <td>{{ isset($movcreate->unit)?$movcreate->unit:'not set' }}</td>
            <td>Tel:</td>
            <td>{{ isset($movcreate->telephone)?$movcreate->telephone:'not set' }}</td>
            <td>Ext:</td>
            <td colspan="3">{{ isset($movcreate->extension)?$movcreate->extension:'not set' }}</td>
          </tr>
          <tr>
            <td>Cantt</td>
            <td colspan="7">{{ isset($movcreate->cantt)?$movcreate->cantt:'not set' }}</td>
          </tr>
          <tr>
            <td>Bde</td>
            <td colspan="7">{{ isset($movcreate->brigadier)?$movcreate->brigadier:'not set' }}</td>
          </tr>
          <tr>
            <td>Div/Area</td>
            <td colspan="7">{{ isset($movcreate->division)?$movcreate->division:'not set' }}</td>
          </tr>
          <tr>
            <td>Place of Visit</td>
            <td colspan="7">{{ isset($movcreate->place)?$movcreate->place:'not set' }}</td>
          </tr>
          <tr>
            <td>Purpose of Mov</td>
            <td>{{ isset($movcreate->purpose)?$movcreate->purpose:'not set' }}</td>
            <td>Ref no</td>
            <td colspan="5">{{ isset($movcreate->reference)?$movcreate->reference:'not set' }}</td>
          </tr>
          <tr>
            <td>Dt of Mov</td>
            <td>{{ isset($movcreate->date_mov)?$movcreate->date_mov:'not set' }}</td>
            <td>Time of Mov</td>
            <td colspan="5">{{ isset($movcreate->time_mov)?$movcreate->time_mov:'not set' }}</td>
          </tr>
          <tr>
            <td>Mode of Journey</td>
            <td colspan="7">{{ isset($movcreate->made_journey)?$movcreate->made_journey:'not set' }}</td>
          </tr>
          <tr>
            <td>Route incl Ni Stay</td>
            <td colspan="7">{{ isset($movcreate->route_incl)?$movcreate->route_incl:'not set' }}</td>
          </tr>
          <tr>
            <td>Gp/Mov Comd</td>
            <td>{{ isset($movcreate->command)?$movcreate->command:'not set' }}</td>
            <td>Mob No</td>
            <td colspan="5">{{ isset($movcreate->command_no)?$movcreate->command_no:'not set' }}</td>
          </tr>
          @php
            $i = 0;
            $j = 0;
          @endphp
          @foreach($moveDetails as $movedetail)          
          <tr>
            <tr style="background-color: gray;">
              <td colspan="6">{{ $movedetail->category->category_name }}</td>              
            </tr>
            <table width="100%" border="1">
              <tr>
                @foreach ($multipleProduct[$i]['product'] as $movedetl)
                  <td colspan="2" style="text-align: center;">{{ $movedetl->product->product_name }}</td>
                @endforeach
              </tr>
              <tr>
                @foreach ($multipleProduct[$i]['product'] as $movedetl)
                  <td colspan="2" style="text-align: center;">{{ $movedetl->quantity }}</td>
                @endforeach
              </tr>
            </table>
          </tr>
          @php
            $i = $i+1;
            $j = $j+1;
          @endphp

          @endforeach
          
      </table>

      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <p style="text-align: center;">RESTRICTED</p>
      </div>
    </div>

    <br>
    <div class="row">
      <div class="col-md-12">
        <p style="text-align: center;">RESTRICTED</p>
        <table width="100%" border="1">
          <tr>
            <td>Any Other Eqpt</td>
            <td colspan="3">{{ isset($movcreate->other_equipment)?$movcreate->other_equipment:'not set' }}</td>
          </tr>
          <tr>
            <td>Any Other Info</td>
            <td colspan="3">{{ isset($movcreate->other_info)?$movcreate->other_info:'not set' }}</td>
          </tr>
          <tr>
            <td colspan="4">Details of Return Move</td>
          </tr>
          <tr>
            <td>Dt Return Journey</td>
            <td>{{ isset($movcreate->date_return)?$movcreate->date_return:'not set' }}</td>
            <td>Time of Return Journey</td>
            <td>{{ isset($movcreate->return_time)?$movcreate->return_time:'not set' }}</td>
          </tr>
          <tr>
            <td>Mode of Journey</td>
            <td colspan="3">{{ isset($movcreate->made_return_jurney)?$movcreate->made_return_jurney:'not set' }}</td>
          </tr>
          <tr>
            <td>Route incl Ni Stay</td>
            <td colspan="3">{{ isset($movcreate->route_return_incl)?$movcreate->route_return_incl:'not set' }}</td>
          </tr>
          <tr>
            <td>Gp/Mov Comd</td>
            <td>{{ isset($movcreate->return_command)?$movcreate->return_command:'not set' }}</td>
            <td>Mob No</td>
            <td>{{ isset($movcreate->return_command_no)?$movcreate->return_command_no:'not set' }}</td>
          </tr>
           @php
            $i = 0;
          @endphp
          @foreach($moveDetails_r as $movedetail)          
          <tr>
            <tr style="background-color: gray;">
              <td colspan="6">{{ $movedetail->category->category_name }}</td>              
            </tr>
            <table width="100%" border="1">
              <tr>
                @foreach ($multipleProduct_r[$i]['product'] as $movedetl)
                  <td colspan="2" style="text-align: center;">{{ $movedetl->product->product_name }}</td>
                @endforeach
              </tr>
              <tr>
                @foreach ($multipleProduct_r[$i]['product'] as $movedetl)
                  <td colspan="2" style="text-align: center;">{{ $movedetl->quantity }}</td>
                @endforeach
              </tr>
            </table>
          </tr>
          @php
            $i = $i+1;
          @endphp

          @endforeach
          <tr>
            <td>Any Other Info</td>
            <td colspan="3">&nbsp;</td>
          </tr>
          <tr>
            <td>Rmk</td>
            <td colspan="3">&nbsp;</td>
          </tr>
      </table>
    </div>
  </div>

<br>
<div class="row">
  <div class="col-md-12">
    <p style="text-align: center;">RESTRICTED</p>
  </div>
</div>
@endif

</div>
</body>
</html>