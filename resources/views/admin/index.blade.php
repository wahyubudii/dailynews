@extends('layout.admin.master')
@section('title', 'Dashboard')
@section('dashboard', 'active')
@section('content')
<div class="layout-page">
  <!-- Navbar -->

  <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
      <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
        <i class="bx bx-menu bx-sm"></i>
      </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
      <!-- Search -->
      <div class="navbar-nav align-items-center">
        <div class="nav-item d-flex align-items-center">
          <i class="bx bx-search fs-4 lh-0"></i>
          <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." />
        </div>
      </div>
      <!-- /Search -->

      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <span class="fw-semibold d-block" style="margin: auto 0;">John Doe</span>
        <!-- User -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              <img src="{{ asset('assets/images/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="#">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar avatar-online">
                      <img src="{{ asset('assets/images/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <span class="fw-semibold d-block">John Doe</span>
                    <small class="text-muted">Admin</small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <i class="bx bx-user me-2"></i>
                <span class="align-middle">My Profile</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <i class="bx bx-cog me-2"></i>
                <span class="align-middle">Settings</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <span class="d-flex align-items-center align-middle">
                  <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                  <span class="flex-grow-1 align-middle">Billing</span>
                  <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                </span>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item" href="auth-login-basic.html">
                <i class="bx bx-power-off me-2"></i>
                <span class="align-middle">Log Out</span>
              </a>
            </li>
          </ul>
        </li>
        <!--/ User -->
      </ul>
    </div>
  </nav>

  <!-- / Navbar -->

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <div class="row">
        <div class="col-lg-8 mb-4 order-0">
          <div class="card">
            <div class="d-flex align-items-end row">
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                  <p class="mb-4">
                    You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                    your profile.
                  </p>

                  <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                </div>
              </div>
              <div class="col-sm-5 text-center text-sm-left">
                <div class="card-body pb-0 px-0 px-md-4">
                  <img src="{{ asset('assets/images/illustrations/man-with-laptop-light.png') }}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 order-1">
          <div class="row">
            <div class="col-lg-6 col-md-12 col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="rounded d-flex align-items-center justify-content-center" style="height: 30px; width: 30px; background-color: #e7e7ff;">
                      <i class="bx bx-user rounded" style="color: #696cff;"></i>
                    </div>
                  </div>
                  <span class="fw-semibold d-block mb-1">User</span>
                  <h3 class="card-title mb-2">+1.429</h3>
                  <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="rounded d-flex align-items-center justify-content-center" style="height: 30px; width: 30px; background-color: #fff2d6;">
                      <i class="bx bx-user-circle rounded" style="color: #ffab00;"></i>
                    </div>
                  </div>
                  <span>Penulis</span>
                  <h3 class="card-title text-nowrap mb-1">+279</h3>
                  <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Website Traffic -->
        <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
          <div class="card">
            <div class="row row-bordered g-0">
              <div class="col-md-12">
                <h5 class="card-header m-0 me-2 pb-3">Website Traffic</h5>
                <div class="card-body">
                  <div class="text-center">
                    <div class="dropdown">
                      <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        2022
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                        <a class="dropdown-item" href="javascript:void(0);">2021</a>
                        <a class="dropdown-item" href="javascript:void(0);">2020</a>
                        <a class="dropdown-item" href="javascript:void(0);">2019</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="incomeChart"></div>
                <div class="col-md-4">
                  <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                    <div class="d-flex">
                      <div class="me-2">
                        <span class="badge bg-label-primary p-2"><i class="bx bx-user text-primary"></i></span>
                      </div>
                      <div class="d-flex flex-column">
                        <small>2022</small>
                        <h6 class="mb-0">+12.521</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Total Revenue -->
        <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
          <div class="row">
            <div class="col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="rounded d-flex align-items-center justify-content-center" style="height: 30px; width: 30px; background-color: #ffe0db;">
                      <i class="bx bx-pencil rounded" style="color: #ff3e1d;"></i>
                    </div>
                  </div>
                  <span class="d-block mb-1">Berita</span>
                  <h3 class="card-title text-nowrap mb-2">+8,446</h3>
                  <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +14.82%</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / Content -->

  </div>
  <!-- Content wrapper -->
</div>
@endsection