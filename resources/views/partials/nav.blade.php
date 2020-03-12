@php
 $fetch_emp = App\Originator::where('email', Auth::user()->email)->get();
@endphp

@foreach ($fetch_emp as $empname)
  {{ $namevar =  $empname->name }}
@endforeach

<header class="main-header"> 
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
          HOME
        </a>        
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
          <img src="{{asset('public/image/user2-160x160.jpg')}}" style="height:30px; width:30px; margin-right:5px; padding:1px;" class="img-circle elevation-2" alt="User Image">{{ $namevar }}
        </a>
        <ul class="dropdown-menu">
              <li class="user-header">
                <img src="{{asset('public/image/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat"  onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Sign out</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </div>
              </li>
            </ul>
        
      </li>
    </ul>
  </nav>
</header>