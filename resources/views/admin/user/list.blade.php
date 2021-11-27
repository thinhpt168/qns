@extends('admin.layout.index')
@section('tilte_site', 'Danh sách Người dùng')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Tên</th>
                  <th>Account</th>
                  <th>Phone</th>
                  <th>Status</th>
                  <th>Admin</th>
                  <th>Email</th>
                  <th>Sửa</th>
                  <th>Xoá</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  @foreach ($listUser as $item)
                 
                     

                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->account }}</td>
                    <td>{{ $item->phone }}</td>
                    @if($item->status == 1)
                        a
                    @else
                       b
                    @endif
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->id }}</td>
                   
                  @endforeach
                
                </tr>
               
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Tên</th>
                  <th>Account</th>
                  <th>Phone</th>
                  <th>Status</th>
                  <th>Admin</th>
                  <th>Email</th>
                  <th>Sửa</th>
                  <th>Xoá</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection