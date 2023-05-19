@extends('layouts.superadmin')
@section('content')
    <div class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">

              <h3>Account</h3>

              <p>Admin</p>
            </div>
            <div class="icon">
              <i class="fa-fw fas fa-user"></i>
            </div>
            <a href="/superadmin/admin" class="small-box-footer">Details <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>Account</h3>

              <p>SuperAdmin</p>
            </div>
            <div class="icon">
              <i class="fa-fw fas fa-user"></i>
            </div>
            <a href="/superadmin/superadmin" class="small-box-footer">Details <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
</div>
@endsection