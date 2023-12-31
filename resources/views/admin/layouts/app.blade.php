<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Media</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand" style="background: rgb(128, 93, 66)">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <aside class="main-sidebar  elevation-4" style="background: rgb(236,224,209)">
    <a href="#" class="brand-link">

      <h3 class="brand-text font-weight-bold" style="color: rgb(93, 66, 46)">My Media </h3>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link text-dark fw-bold">
              <i class="fas fa-user-circle"></i>
              <p>
                My Profile
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin#category') }}" class="nav-link text-dark fw-bold">
              <i class="fas fa-list"></i>
              <p>
                Category
              </p>
            </a>
          </li>

         <li class="nav-item">
            <a href="{{ route('admin#list') }}" class="nav-link text-dark fw-bold">
            <i class="fas fa-users"></i>
              <p>
                Admin List
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin#post') }}" class="nav-link text-dark fw-bold">
              <i class="fas fa-list"></i>
              <p>
                Post
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin#trendPost') }}" class="nav-link text-dark fw-bold">
              <i class="fas fa-chart-line"></i>

              <p>
                Trend Post
              </p>
            </a>
          </li>
          <li class="nav-item">
                <a href="{{ route('admin#changePasswordPage') }}" class="nav-link text-dark fw-bold">

                    <button class="btn w-100 text-white mt-2" style="background: rgb(128, 93, 66)">
                        <i class="	fas fa-lock"></i>
                        Change Password
                    </button>
                  </a>
          </li>
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <a href="" class="nav-link text-dark fw-bold">

                    <button class="btn w-100 text-white mt-2" style="background: rgb(128, 93, 66)">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </button>
                  </a>
            </form>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row mt-4">

                @yield('content')

          </div>
        </div>
      </div>
    </section>
  </div>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('dist/js/demo.js') }}"></script>
</body>
</html>

{{-- (236,224,209)
(128, 93, 66) --}}

{{-- <div class="col-md-9">
    <div class="card">
      <div class="card-header p-2">
        <legend class="text-center">User Profile</legend>
      </div>
      <div class="card-body">
        <div class="tab-content">
          <div class="active tab-pane" id="activity">
            <form class="form-horizontal">
              <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputName" placeholder="Name">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
              </div>

              <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                  <a href="">Change Password</a>
                </div>
              </div>
              <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                  <button type="submit" class="btn bg-dark text-white">Submit</button>
                </div>
              </div>
            </form>

          </div>
          </div>
        </div>
      </div>
    </div> --}}
