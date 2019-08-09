 <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url ('/user') }}" class="nav-link">|Home|</a> 
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('logout') }}" class="nav-link"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">|Logout|</a>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
      </li>
    </ul>
  </nav>

   