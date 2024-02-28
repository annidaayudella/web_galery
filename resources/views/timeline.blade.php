<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Timmeline</title>
  
  <!--Google Font: Source sans pro-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!--Font Awasome-->
  <link rel="stylesheet" href="{{ asset ('AdminLTE/plugins/fontawasome-free/css/all.min.css') }}">
  <!--AdminLTE css-->
  <link rel="stylesheet" href="{{ asset ('AdminLTE/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
  <!--Site wrapper-->
  <div class="wrapper">
    <!--navbar-->
    <nav class="navbar navbar-expand navbar-white navbar-light">
      <!--Left navbar links-->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="..//..//index3.html" class="nav-link">WebGALERI</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a data-toggle="modal" data-target="#uploadModal" href="#" class="nav-link btn btn-secondary">Upload Foto<i class="fa fa-upload"></i></a>
        </li>
      </ul>
      
      <!--Right navbar links-->
      <ul class="navbar-nav ml-auto">
        <!--Navbar Search-->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
        <!--Messages Dropdown Menu-->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge"></span>
          </a>
          <div href="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!--Message Start-->
              <div classs="media"
              <img src="../../dist/img/user1-128×128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                 <div class="media-body">
                   <h3 class="dropdown-item-title">
                     Brad Diesel
                     <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted”><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
         </div>
         <!--Message End-->
       </a>
    <div class="dropdown-divider"></div>
    <a href="#" class="dropdown-item">
      <!--Message Start-->
      <div class="media">
        <img src="../../dist/img/user8-128×128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
        <div class="media-body">
                   <h3 class="dropdown-item-title">
                     John pierce
                     <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted”><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
         </div>
         <!--Message End-->
       </a>
    <div class="dropdown-divider"></div>
    <a href="#" class="dropdown-item">
      <!--Message Start-->
      <div class="media">
        <img src="../../dist/img/user3-128×128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
            </div>
         </div>
         <!--Message End-->
       </a>
    <div class="dropdown-divider"></div>
    <a href="#" class="dropdown-item">
      <!--Message Start-->
      <div class="media">
        <img src="../../dist/img/user8-128×128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
         <div class="media-body">
                   <h3 class="dropdown-item-title">
                     Nora Silvester
                     <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted”><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
         </div>
         <!--Message End-->
       </a>
    <div class="dropdown-divider"></div>
    <a href="#" class="dropdown-item dropdown footer">See All Messages</a>
  </div>
  </li>
<!--Notifications Dropdown Menu-->
<li class="nav-item dropdown"></li>
  <a class="nav-link" data-togle="dropdown" href="#">
    <i class="far fa-bell"></i>
    <span class="badge badge-warning navbar-badge">15</span>
  </a>
  <div class="dropdown-item dropdown-menu-lg dropdown-menu-right">
    <span class="dropdown-item dropdown-header">15 Notification</span>
    <div class="dropdown-divider"></div>
    <a href="#" class="dropdown-item">
      <i class="fas fa-envelope mr-2"></i> 4 new messages
      <span class="float-right text-muted next-sm">3 mins</span>
    </a>
    <div class="dropdown-divider"></div>
    <a href="#" class="dropdown-item">
      <i class="fas fa-users mr-2"></i> 8 friend
      <span class="float-right text-muted text-sm">12 hours</span>
    </a>
    <div class="dropdown-divider"></div>
    <a href="#" class="dropdown-item">
      <i class="fas fa-file mr-2"></i> 3 new reports
      <span class="float-right text-muted text-sm">2 days</span>
    </a>
    <div class="dropdown-divider"></div>
    <a href="#" class="dropdown-item dropdown-footer">See All Notofications</a>
  </div>
</li>
<li class="nav-item">
  <a class="nav-link" data-widget="fullscreen" href="#" role="button">
    <i class="fas fa-expand-arrows-alt></i>
  </a>
</li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <i class="nav-item">
        <a href="{{ url('logout') }}" class="nav-link" role="button">
        <i class="fas fa-sign-out-alt fa-sm fa-fw</i>
  </a>
  </i>
</ul>
</nav>
<!--/.navbar-->

<!--Main Slidebar Container-->

<!--Content Wrapper. Contains page content-->
<div class="">
  <!--Content Header (page header)-->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Galeri</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Timeline</li>
          </ol>
        </div>
      </div><!-- /.container-fluid-->
    </section>
    
    <!--Main content-->
    <section class="content">
      <div class="container-fluid">
        
        <!--Timeline example-->
        <div class="row">
          @foreach ($galeris as $galeri)
          <div class="col-md-12">
            <!--The time line-->
            <div class="timeline">
              <!--timeline time label-->
              <div class="time-label">
                <span class="bg-gradient-scondary" name="tanggal">{{ $galeri->tanggal }}</span>
              </div>
              <!-- /.timeline-label-->
              <!--timeline item-->
            </div>
               <i class="fas fa-envelope bg-blue"></i>
               <div class="timeline-item">
                 <span class="time"><i class="fas fa-clock"></i> 12:15</span>
                 <h3 class="timeline-header">{{ $galeri->judul }}</h3>
                 
                 <div class="timeline-body">
                   <img class="img-fluid" width="400" src="{{ asset('img/'.$galeri->foto) }}" alt="foto">
                     <br>
                     {{ $galeri->deskripsi }}
                 </div>
                   <div class="timeline-footer">
                     <a href="#" data-toggle="modal" data-target="#modaledit{{ $galeri->id }}" class="btn btn-primary btn-sm">Edit</a>
                     <a href="galeri/{{ $galeri->id }}" onclick="return confirm('Apakah anda yakin untuk menghapus??')" class="btn btn-danger btn-sm">Delete</a>
                   </div>
               </div>
          </div>
            <!--END timeline item-->
            <!--timeline item-->
            
            <!--END timeline item-->
            <!--timeline item-->
            
            <!--END timeline item-->
            <!--timeline item label-->
            
            <!--/. timeline- label-->
            <!--timeline item-->
            
            <!--END timeline item-->
            <!--timeline item-->
        </div>
          <i class="fas falock bg-gray"></i>
      </div>
        <!--END timeline item-->
      </div>
      <i class="fas fa-clock bg-blue"></i>
    </div>
  </div>
  <div class="modal fade" id="modaledit{{ $galeri->id }}" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Edit</h3>
        </div>
        <form action="{{ route('galeri.update',$galeri->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="modal-body">
            <div class="form-group">
              <label for="judul">Judul</label>
              <input type="text" value="{{ $galeri->judul }}" name="judul" class="form-control">
            </div>  
              <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" value="{{ $galeri->deskripsi }}" name="deskripsi" class="form-control">
              </div>
                <div class="for-group">
                  <label for="foto">Foto</label>
                  <input type="file" name="foto" class="form-control">
                  <img src="{{ asset ('img/'$galeri->foto) }}" width="150" alt="">
                </div>
          </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" type="submit">Submit</button>
                  <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
        </form>
      </div>
            <div>
              <i class="fas fa-clock bg-gray"></i>
            </div>
            <div>
              {{--<div class="modal fade" id="modalHapus{{ $galeri->id }}" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title">Hapus Foto</h3>
                    </div>
                    <div class="modal-body">
                      <p>Yakin Ingin Menghapus Foto</p>
                    </div>
                    <div class="model-footer">
                      <a href="{{ url('galeri/'.$galeri->id) }}" class="btn btn-primary">Hapus</a>
                      <button class="btn btn-secondary" data-dismiss="model">Delete</button>
                    </div>
                  </div>
                </div>
            </div>--}}
       </div>
    </div>
  </div>
</div> 
      @endforeach
      <!--/.col-->
    </div>
  </div>
  <!--/.timeline-->
  
</section>
<!--/.content-->
</div>
<!--/.content-wrapper-->
<!--modal-upload-->
<div class="modal fade" id="uploadModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-titlr">Upload Foto</h3>
      </div>
      <form action="{{ url('galeri') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" class="form-control">
          </div>
          <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" name="deskripsi" class="form-control">
          </div>
          <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" name="foto" class="form-control">
          </div>
          <div class="model-footer">
            <button class="btn btn-primary" type="submit">Upload</button>
            <button class="btn btn-secondary"  data-dismiss="modal">Close</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b>version</b> 3.2.0
  </div>
  <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.oi">AdminLTE.oi</a>.</strong>All right reserved.
</footer>
      
<!-- Control sidebar-->
<aside class="control sidebar control-sidebar-dark">
  <!--Control sidebar content goes here-->
</aside>
<!--/.control-sibedar-->
</div>
<!--/.wrapper-->

<!--jQuery-->
<script src="{{ asset(AdminLTE/plugins/jQuery.min.js') }}"></script>
<!--Bootstrap 4-->
<script src="{{ asset(AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!--AdmunLTE App-->
<script src="{{ asset(AdminLTE/plugins/js/adminlte.min.js') }}"></script>
<!--AdminLTE for demo purpose-->
<script src="{{ asset('AdminLTE/dist/js/demo.js') }}"></script>
</body>
  </html>