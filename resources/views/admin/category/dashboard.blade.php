@extends('layout.admin.master')
@section('title', 'Admin | Kategori')
@section('kategori', 'active')
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
        <!-- Place this tag where you want the button to render. -->
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
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Category /</span> Dashboard</h4>


      <!-- Hoverable Table rows -->
      <div class="card">
        <div class="d-flex align-items-center justify-content-between">
          <h5 class="card-header">Data list</h5>
          <a href="{{route('add-category')}}" class="mx-4 btn btn-primary rounded rounded-pill d-flex align-items-center justify-content-center" style="height: 25px; font-size: 12px">Add Category &#43;</a>
        </div>
        <div class="table-responsive text-nowrap">
          <table class="table table-hover">
            <thead>
              <tr>
                <!-- <th>No</th> -->
                <th>Kategori</th>
                <th>Slug</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach($categories as $category)
              <tr style="font-size: 14px;">
                <!-- <td>{{$loop->iteration}}</td> -->
                <td><span class="badge bg-label-primary me-1">{{$category->name}}</span></td>
                <td>{{$category->slug}}</td>
                <td style="width: 30%;">
                  <div class="d-flex align-items-center" style="font-size: 12px;">
                    <a class="me-2 btn btn-warning d-flex align-items-center justify-content-center rounded-pill" style="height: 25px; font-size: 12px;" href="{{route('edit-category',['id'=>$category->id])}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                    <a class="btn btn-danger d-flex align-items-center justify-content-center rounded-pill" style="height: 25px; font-size: 12px;" href="{{route('delete-category',['id'=>$category->id])}}"><i class="bx bx-trash me-1"></i> Delete</a>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <!--/ Hoverable Table rows -->

    </div>
    <!-- / Content -->

    <div class="content-backdrop fade"></div>
  </div>
  <!-- Content wrapper -->
</div>
@endsection