
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>HALAMAN MAHASISWA</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="card card-info card-outline">
          <div class="card-header">
              
              <div class="card-tools">
                  <a href="{{route('create-mahasiswa')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
              </div>
          </div>
          <div class="card-body">
              <table class="table table-bordered">
                  <tr>
                      <th>No</th>
                      <th>NIM</th>
                      <th>NAMA LENGKAP</th>
                      <th>MATA KULIAH</th>
                      <th>NAMA PROGRAM STUDI</th>
                      <th>prodi</th>
                      <th>action</th>
                  </tr>
                  @foreach ($dtmahasiswa as $item)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->NIM}}</td>
                    <td><a href="">{{$item->NamaLengkap}}</a></td>
                    <td>{{$item->MataKuliah}}</td>
                    <td>{{$item->NamaProdi}}</td>
                    <td>{{$item->prodi->prodi}}</td>
                    <td>
                      <a href="{{route('edit-mahasiswa', $item->id)}}"><button>edit</button></a> | 
                      <a href="{{route('delete-mahasiswa', $item->id)}}"><button>delete</button></a>
                    </td>
                </tr>
                  @endforeach
                  
              </table>
              
          </div>
      </div>
      <!-- /.content -->
    </div>
  </div>
  
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    @include('Template.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('Template.script')
@include('sweetalert::alert')
</body>
</html>
