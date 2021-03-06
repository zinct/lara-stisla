
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Pembayaran SPP</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  
  <!-- CSS Libraries -->
  <link href="{{ url('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag==" crossorigin="anonymous" />

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/components.css') }}">
  
  <!-- Custom CSS -->
  @yield('css')
  
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="javascript:void(0)" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="javascript:void(0)" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                <div class="float-right">
                  <a href="javascript:void(0)">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="javascript:void(0)" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ url('assets/img/avatars/default.png') }}" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b>
                    <p>Hello, Bro!</p>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="javascript:void(0)" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ url('assets/img/avatars/default.png') }}" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Dedik Sugiharto</b>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="javascript:void(0)" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ url('assets/img/avatars/default.png') }}" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Agung Ardiansyah</b>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="javascript:void(0)" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ url('assets/img/avatars/default.png') }}" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="javascript:void(0)" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ url('assets/img/avatars/default.png') }}" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Alfa Zulkarnain</b>
                    <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="javascript:void(0)">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="javascript:void(0)" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="javascript:void(0)">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="javascript:void(0)" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
                <a href="javascript:void(0)" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="far fa-user"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="javascript:void(0)" class="dropdown-item">
                  <div class="dropdown-item-icon bg-success text-white">
                    <i class="fas fa-check"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="javascript:void(0)" class="dropdown-item">
                  <div class="dropdown-item-icon bg-danger text-white">
                    <i class="fas fa-exclamation-triangle"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Low disk space. Let's clean it!
                    <div class="time">17 Hours Ago</div>
                  </div>
                </a>
                <a href="javascript:void(0)" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Welcome to Stisla template!
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="javascript:void(0)">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="javascript:void(0)" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{ url('assets/img/avatars/' . Helper::nullreplace(auth()->user()->avatar, 'default.png')) }}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">{{ auth()->user()->nama }} ({{ auth()->user()->role->nama }})</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Menu</div>
              <a href="{{ route('admin.user-manager.profile.index') }}" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="javascript:void(0)" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Pembayaran SPP</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="javascript:void(0)">SP</a>
          </div>
          <ul class="sidebar-menu">
            <li>
              <a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
            </li>
            <li class="nav-item dropdown {{ (request()->segment(1) == 'admin' && request()->segment(2) == 'user-manager') ? 'active' : '' }}">
              <a href="javascript:void(0)" class="nav-link has-dropdown"><i class="fas fa-user"></i> <span>Manajemen User</span></a>
              <ul class="dropdown-menu">
                @can('user-manager.user')
                  <li><a class="nav-link {{ (request()->segment(1) == 'admin' && request()->segment(2) == 'user-manager' && request()->segment(3) == 'user') ? 'text-primary' : '' }}" href="{{ route('admin.user-manager.user.index') }}">Data User</a></li>
                @endcan
                @can('user-manager.role')
                  <li><a class="nav-link {{ (request()->segment(1) == 'admin' && request()->segment(2) == 'user-manager' && request()->segment(3) == 'role') ? 'text-primary' : '' }}" href="{{ route('admin.user-manager.role.index') }}">Role & Permission</a></li>
                @endcan
                @can('user-manager.permission')
                  <li><a class="nav-link {{ (request()->segment(1) == 'admin' && request()->segment(2) == 'user-manager' && request()->segment(3) == 'permission') ? 'text-primary' : '' }}" href="{{ route('admin.user-manager.permission.index') }}">Permission</a></li>
                @endcan
                <li><a class="nav-link {{ (request()->segment(1) == 'admin' && request()->segment(2) == 'user-manager' && request()->segment(3) == 'profile') ? 'text-primary' : '' }}" href="{{ route('admin.user-manager.profile.index') }}">Profile</a></li>
              </ul>
            </li>
          </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            @yield('header')
          </div>

          <div class="section-body">
            @yield('content')
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; PelajarKoding {{ date('Y') }}<div class="bullet"></div> Made By <a href="https://github.com/zinct">Indra Mahesa</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  @yield('modal')

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ url('assets/js/stisla.js') }}"></script>

  <!-- JS Libraies -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous"></script>
  <script src="{{ url('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ url('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
  <script>
    AutoNumeric.multiple('.numeric', { digitGroupSeparator: '.', decimalCharacter: ',', decimalPlaces: '0', unformatOnSubmit: true });
  </script>
  <script>
    $(document).ready( function () {
        $('.dataTable').DataTable();
    });
  </script>

  <!-- Template JS File -->
  <script src="{{ url('assets/js/scripts.js') }}"></script>
  <script src="{{ url('assets/js/custom.js') }}"></script>

  @yield('script')

</body>
</html>