  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url ('/') }}" class="brand-link">
      <img src="{{url('images/parfumlogoo.jpg')}}" class="brand-image img-circle elevation-9"
           style="opacity: 10">
      <font class="brand-text font-weight-light">Smells Good</font>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('images/mimin.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="fa fa-circle-o nav-icon"></i>
              <p>
                Menu
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url ('/members') }}" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Members</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{ url ('/shop') }}" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Product</p>
                </a>
              </li>
            </ul>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>