@extends('admin.layout.index')
@section('tilte_site', 'Thêm người dùng')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm mới người dùng</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add user</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-12 col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Thêm mới</h3>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger mt-2 mb-2">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="POST" action="{{ route('addUser') }}">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">Tên</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên">
                    </div>
                    <div class="form-group">
                      <label for="account">Tên đăng nhập</label>
                      <input type="text" class="form-control" id="account" name="account" placeholder="Nhập tên đăng nhập">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu">
                    </div>
                    <div class="form-group">
                      <label for="phone">Số điện thoại</label>
                      <input type="text" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại">
                    </div>
                    <div class="form-group">
                        <label  for="status">Trạng thái</label> 
                        <select class="form-control select2bs4" name="status" style="width: 100%;">
                            <option selected="selected" value="1">Mở</option>
                            <option value="0">Khoá</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <label  for="admin" >Admin</label>
                        <div class="form-check">
                            <div class="icheck-primary d-inline">
                                <input type="radio" id="admin1" name="admin" value="1" checked>
                                <label for="admin1"> Có
                                </label>
                            </div>
                            <div class="icheck-primary d-inline">
                                <input type="radio" id="admin2" name="admin" value="0" >
                                <label for="admin2"> Không
                                </label>
                            </div>
                        </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                  </div>
                </form>
              </div>
            </div>
        </div>
    </div>

</div>


@endsection