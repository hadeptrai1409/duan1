<?php  
  // $album = list_all_album();
  $categories = list_all_category();
  $service = list_all_service();
  // $datlich = list_all_datlich();
  $user = list_all_user();
  $nhanvien = list_all_nhanvien();
  $slider = list_all_slider();

  // $album = list_all_album();

  ?>  
    <!-- Begin Page Content -->
       <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->
<div class="row">

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Dịch Vụ</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=count($service)?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-calendar fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Danh mục</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=count($categories)?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Đặt Lịch</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=count($service)?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">User</div>
            <div class="row no-gutters align-items-center">
              <div class="col-auto">
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=count($user)?></div>
              </div>
              <div class="col">
                <div class="progress progress-sm mr-2">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pending Requests Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Nhân Viên</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=count($nhanvien)?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-comments fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-6 mb-4"> 
    <div class="card border-left-primary shadow h-100 py-2"> 
      <div class="card-body"> 
        <div class="row no-gutters align-items-center"> 
          <div class="col mr-2"> 
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Comment</div> 
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=count($service)?></div> 
          </div> 
          <div class="col-auto"> 
            <i class="fas fa-calendar fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-6 mb-4"> 
    <div class="card border-left-primary shadow h-100 py-2"> 
      <div class="card-body"> 
        <div class="row no-gutters align-items-center"> 
          <div class="col mr-2"> 
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Slider</div> 
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=count($slider)?></div> 
          </div> 
          <div class="col-auto"> 
            <i class="fas fa-calendar fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 
<div class="col-xl-3 col-md-6 mb-4"> 
    <div class="card border-left-primary shadow h-100 py-2"> 
      <div class="card-body"> 
        <div class="row no-gutters align-items-center"> 
          <div class="col mr-2"> 
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Album</div> 
            <div class="h5 mb-0 font-weight-bold text-gray-800">10</div> 
          </div> 
          <div class="col-auto"> 
            <i class="fas fa-calendar fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Content Row --> 
 
 
 
</div>
<!-- /.container-fluid -->