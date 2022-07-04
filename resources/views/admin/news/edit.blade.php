@extends('layout.admin.master')
@section('title', 'News | Edit News')
@section('news', 'active')
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
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Edit Berita</h4>

      <!-- Basic Layout -->
      <div class="row">
        <div class="col-xl">
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Edit Berita</h5>
            </div>
            <div class="card-body">
              <form action="{{route('update-news')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Judul</label>
                  <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-highlight"></i></span>
                    <input name="judul" type="text" value="{{$news->judul}}" class="form-control" placeholder="Inflasi yang terus tinggi dari tahun ke tahun" />
                    <input name="id" type="hidden" value="{{$news->id}}"/>
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label">Penerbit</label>
                  <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-face"></i></span>
                    <input name="penerbit" type="text" value="{{$news->penerbit}}" class="form-control" placeholder="Andrea Hirata" />
                    <input name="id" type="hidden" value="{{$news->id}}"/>
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label">Kategori</label>
                  <select name="category_id" id="category_id" class="form-select">
                      <option selected disabled>-- Pilih --</option>
                    @foreach($categories as $category)
                      <option value="{{ $category->id }}" >{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">Slug</label>
                  <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-detail"></i></span>
                    <input name="slug" value="{{$news->slug}}" type="text" class="form-control" placeholder="Slug" />
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label">Description</label>
                  <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-detail"></i></span>
                    <input name="description" type="text" value="{{$news->description}}" class="form-control" placeholder="Peristiwa kecelakaan terjadi pada dini hari..." />
                    <input name="id" type="hidden" value="{{$news->id}}"/>
                  </div>
                  <div class="form-text">You can use letters, numbers & periods</div>
                </div>  
                <div class="mb-3">
                  <label class="form-label">Gambar</label>
                  <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-images"></i></span>
                    <input name="image" type="file" class="form-control"/>
                  </div>
                  <img class="pt-3 rounded" src="{{asset($news->image)}}" style="width: 90px; height: auto;">
                </div>
                <button type="submit" name="btn" value="Update" class="mt-4 btn btn-primary">Send</button>
              </form>
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