<div class="sidebar">
        <div class="logo text-center" style="background: #c19cdd" >

          <img class="navbar-brand" src="{{ asset('images/logo.png') }}">
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper" style="background: #662d91">
          <ul class="nav">
            <li>
              <a href="{{ url('/admin/dashboard') }}">
                <i class="now-ui-icons design_app"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li>
              <a href="{{ url('subscribe') }}">
                <i class="fa fa-home"></i>
                <p>Subscribe</p>
              </a>
            </li>
            <li>
              <a href="{{ url('brochure') }}">
                <i class="fa fa-file-pdf-o"></i>
                <p>Brochure</p>
              </a>
            </li>
            <li>
              <a href="{{ url('products') }}">
                <i class="fa fa-laptop"></i>
                <p>Product</p>
              </a>
            </li>
            <ul >
              <li>
                <a href="{{ url('techspecs') }}">
                  <i class="fa fa-laptop"></i>
                  <p>Tech Spec</p>
                </a>
              </li></ul>
              <li>
                <a href="{{ url('banners') }}">
                  <i class="fa fa-picture-o"></i>
                  <p>Banner</p>
                </a>
              </li>
              <li>
                <a href="{{ url('whatnew') }}">
                  <i class="now-ui-icons ui-1_bell-53"></i>
                  <p>What's New</p>
                </a>
              </li>
              <li>
                <a href="{{ url('retailpartner') }}">
                  <i class="fas fa-store"></i>
                  <p>Retail Partner Store</p>
                </a>
              </li>
              <li>
                <a href="{{ url('exclusivebrand') }}">
                  <i class="fas fa-store"></i>
                  <p>Exclusive Brand Store</p>
                </a>
              </li>
              <li>
                <a href="{{ url('service_center') }}">
                  <i class="fas fa-tools"></i>
                  <p>Service Center</p>
                </a>
              </li>
              <li class=" ">
                <a href="{{ url('blog') }}">
                  <i class="fa fa-rss"></i>
                  <p>Blog</p>
                </a>
              </li>


            </ul>
          </div>
        </div>



        <div class="main-panel" id="main-panel">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
            <div class="container-fluid">
              <div class="navbar-wrapper">
                <div class="navbar-toggle">
                  <button type="button" class="navbar-toggler">
                  <span class="navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                  </button>
                </div>
                <a class="navbar-brand" href="#pablo"></a>
              </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navigation">

                <ul class="navbar-nav">

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="now-ui-icons location_world"></i>
                      <p>
                        <span class="d-lg-none d-md-block"></span>
                      </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>

                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="">
                      <i class="now-ui-icons users_single-02"></i>
                      <p>

                      </p>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- End Navbar -->
          <div class="panel-header panel-header-sm" style="background: #662d91">

          </div>


          <div class="content">

            @yield('content')

          </div>

        </div>
      </div>
