@php
 $fetch_emp = App\Originator::where('email', Auth::user()->email)->get();
@endphp

@foreach ($fetch_emp as $emptype)
  {{ $typevar =  $emptype->user_type }}
  {{ $apprtypevar =  $emptype->approval_type }}
@endforeach

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
     <a href="" class="brand-link"><img src="{{asset('public/image/logo_large_company.png')}}" alt="Logo" width="70" height="26" class="brand-image elevation-3" style=" margin-left:16px;margin-top:5px;opacity:0.8;">
      <span class="brand-text font-weight-light" style="font-size:15px; white-space:normal; margin">
        MOVE SANCTION
      </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <div class="nav-item has-treeview">
        <div style=" font-size:14px; color:#CCCCCC;" class="nav-item has-treeview">
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <p style=" padding:8px;white-space:normal; cursor:pointer;">MO DTE</p>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                   MASTER CONFIGURATION
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('category')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Category</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('product')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Product</p>
                    </a>
                  </li>
                </ul>
              </li>
              <br>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    MT MOVE SANCTION
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  @if ($apprtypevar == 'UNIT' || $typevar == 'Admin')
                  <li class="nav-item">
                    <a href="{{route('movcreate')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>GROUP MOV</p>
                    </a>
                  </li>
                  @endif
                  <li class="nav-item">
                    <a href="{{route('movsearch')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>MOVE SANCTION SEARCH</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                   ORIGINATOR
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                   @if ($typevar == 'Admin')
                  <li class="nav-item">
                    <a href="{{route('originatorcreate')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>CREATE ORIGINATOR</p>
                    </a>
                  </li>
                  @endif
                  <li class="nav-item">
                    <a href="{{route('originatorinfo')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>ORIGINATOR INFO</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </aside>

  {{-- <li class="nav-item has-treeview">
    <a href="#" class="nav-link active">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
       ORIGINATOR
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{route('originatorcreate')}}" class="nav-link active">
          <i class="far fa-circle nav-icon"></i>
          <p>CREATE ORIGINATOR</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route('originatorinfo')}}" class="nav-link active">
          <i class="far fa-circle nav-icon"></i>
          <p>ORIGINATOR INFO</p>
        </a>
      </li>
    </ul>
  </li> --}}