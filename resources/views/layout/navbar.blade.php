<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
    data-scroll="false">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
                @if (request()->is('/'))
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
                @elseif (request()->is('home'))
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
                @elseif (request()->is('tabel'))
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Absen</li>
                @elseif (request()->is('profil'))
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Profil</li>
                @elseif (request()->is('report'))
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Report</li>
                @endif
            </ol>
            @if (request()->is('/'))
                <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
            @elseif (request()->is('home'))
                <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
            @elseif (request()->is('tabel'))
                <h6 class="font-weight-bolder text-white mb-0">Absen</h6>
            @elseif (request()->is('profil'))
                <h6 class="font-weight-bolder text-white mb-0">Profil</h6>
            @elseif (request()->is('report'))
                <h6 class="font-weight-bolder text-white mb-0">Report</h6>
            @endif
            {{-- <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6> --}}
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            {{-- Search bar --}}
            @yield('searchBar')
            {{-- end Search bar --}}
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                        <i class="fa fa-user me-sm-1"></i>
                        <span class="d-sm-inline d-none">{{Auth::user()->name}}</span>
                    </a>
                </li>
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
              </div>
            </a>
          </li>
                <li class="nav-item px-3 d-flex align-items-center">
                    <a class="nav-link text-white p-0">
                        {{-- <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i> --}}
                        {{-- <span class="d-sm-inline d-none"></span> --}}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" href="#" class="dropdown-item">Log out</button>
                        </form>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
