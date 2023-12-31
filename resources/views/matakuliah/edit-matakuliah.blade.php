
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
          <center><h3>EDIT DATA MAHASISWA</h3></center>
        </div>
          <div class="card-body">
              <form action="{{ route('update-matakuliah',$mahasiswa->id) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                  <input type="text" id="MataKuliah" name="MataKuliah" class="form-control" placeholder="Mata Kuliah" value="{{$mahasiswa->MataKuliah}}">
                </div>
                          
                <div class="form-group">
                  <select name="prodi_id" id="prodi_id" class="form-control select2">
                    <option disabled value>Pilih Prodi</option>
                    <option value="{{$mahasiswa->prodi_id}}">{{$mahasiswa->prodi->prodi}}</option>
                    @foreach ($prodi as $item)
                      <option value="{{$item->id}}">{{$item->prodi}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Ubah Data</button>
                </div>
              </form>
          </div>
      </div>
  </div>
    <!-- /.content -->
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
</body>
</html>
