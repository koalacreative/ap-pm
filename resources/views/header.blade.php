  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index.html" class="navbar-brand"><img width="200" src="{{ asset("assets/img/logo.png")}}"></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="#">Home <span class="sr-only">(current)</span></a></li>
            <li class="{{ Request::segment(1) === 'test' ? 'active' : null }}">
              <a href="{{ url('test') }}">Wilayah</a>
            </li>
            <!-- <li>
              <a href="#">Pengaturan</a>
              
            </li> -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Master Data
              </a>
              <ul class="dropdown-menu">
                <!-- <li class="header">You have 10 notifications</li> -->
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <i class="fa fa-map-marker text-red"></i>Data Wilayah
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i>Data User
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- <li class="footer"><a href="#">View all</a></li> -->
              </ul>
            </li>

          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            
            <!-- Tasks Menu -->
           
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="{{ asset("assets/img/user2-160x160.jpg")}}" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">Fulan | Project Management</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="{{ asset("assets/img/user2-160x160.jpg")}}" class="img-circle" alt="User Image">

                  <p>
                    Fulan - Project Management
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
