<!-- HEADER -->
<div class="header header-fixed ">
  <div class="container-fluid">
    <div class="d-flex">
      <a id="horizontal-navtoggle" class="animated-arrow hor-toggle"><span></span></a>
      <a class="header-brand d-md-none" href="{{ route('home.index') }}">
        <img src="{!! url('theme/images/brand/logo.png') !!}" class="header-brand-img desktop-logo" alt="Arox logo">
        <img src="{!! url('theme/images/brand/favicon2.png') !!}" class="header-brand-img mobile-view-logo" alt="Arox logo">
      </a>
      <!-- LOGO -->
      <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
      <div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">
        
        <form action="{{ route('setlocale') }}" method="GET" style="margin: 10px">
          <select class="form-control select2 w-100" name="locale" onchange="this.form.submit()">
              <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
              {{-- <option value="es" {{ app()->getLocale() == 'es' ? 'selected' : '' }}>Spanish</option> --}}
              <!-- Add more language options as needed -->
          </select>
        </form>
        <div class="dropdown text-center selector profile-1 d-sm-flex d-none">
          <a href="#" data-toggle="dropdown" class="nav-link leading-none d-flex">
            <span><img src="{!! url('theme/images/faces/female/16.jpg') !!}" alt="profile-user" class="avatar brround cover-image mb-1 ml-0"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
            <div class="text-center bg-image p-4">
              <a href="#" class="dropdown-item text-center font-weight-sembold user pt-0" data-toggle="dropdown">{{auth()->user()->username}}</a>
            </div>
            <a class="dropdown-item" href="{{ route('profile.index') }}">
              <i class="dropdown-icon mdi mdi-account-outline"></i>{{ __('global.my_profile') }}
            </a>
            <a class="dropdown-item" href="{{ route('session.index') }}">
              <i class="dropdown-icon mdi icon-list"></i>{{ __('global.active_sessions') }}
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout.perform') }}">
              <i class="dropdown-icon mdi  mdi-logout-variant"></i> {{ __('global.logout') }}
            </a>
          </div>
        </div><!-- PROFILE -->
        
      </div>
      <a href="#" class="header-toggler d-lg-none ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
        <span class="header-toggler-icon"></span>
      </a>
    </div>
  </div>
</div>
<!-- HEADER END -->