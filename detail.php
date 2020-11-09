<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Perpustakaan Online</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php include "include_css.php"; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">

        <?php include "include_sidebar.php"; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                <div class="button">
                <a class="float" href="index.php" role="button"><i class="fas fa-arrow-left"></i></a>
                <ul class="menuhead">
                    <li><a href="#" data-toggle="modal" data-target="#EditModal">Edit</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#deleteModal">Delete</a></li>
                </ul>
                </div>
                
                    <img class="big-preview" width="1600px" height="1200px">
                
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.modal -->
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabesl" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menghapus data ini?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">Aplikasi yang anda hapus tidak dapat dikembalikan</div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-danger" id="btn-delete" href="#" data-dismiss="modal"  data-toggle="modal" data-target="#BerhasilModal">Hapus</a>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="BerhasilModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabesl" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Data Anda Berhasil Dihapus</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body"><img class="check" src="assets/check.png"></div><p>Data sudah dihapus</p>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>                 
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="BerhasilModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabesl" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Data Anda Berhasil Disave</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body"><img class="check" src="assets/check.png"></div><p>Data sudah disave</p>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>                 
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabesl" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                <div class="row">
                    <div class="col-sm-2">                        
                        <p>Url Image</p>                        
                    </div>
                    <div class="col-sm-10">                        
                        <input type="text" id="url" name="url" class="form-control" placeholder="Book Url">                        
                    </div>
                </div>
                <hr class="divider">
                <div class="row">
                    <div class="col-sm-2">                        
                        <p>Title</p>                        
                    </div>
                    <div class="col-sm-10">                        
                        <input type="text" id="title" name="title" class="form-control" placeholder="Book Title">                        
                    </div>
                </div>
                    <hr class="divider">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="text">Description</div>
                        </div>
                        <div class="col-sm-10">
                            <textarea name="txtcomment" id="txtcomment" cols="50" rows="5" placeholder="Book Description"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>     
                  <a class="btn btn-warning" id="btn-delete" href="#" data-dismiss="modal"  data-toggle="modal" data-target="#BerhasilModal2">Save</a>            
                </div>
              </div>
            </div>
          </div>
            <!-- /.modal -->
            <!-- Main content -->
            <section class="content">
                <div class="category">
                    <p>Novel</p>
                </div>
                <div class="container-fluid">
                     <img class="small-preview" src="assets/background.png" >
                
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="titletext">Gunung</h1>
                        </div>
                        <div class="col-sm-6">
                            <h1 class="statustext">Available</h1>
                        </div>
                    </div>
                    <p class="date">10 November 2020</p>
                    <div class="row">
                        <div class=col-sm-8>
                            <p class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac diam eget est rutrum ultrices. Donec laoreet enim a massa dapibus, cursus egestas dui pulvinar. Proin sit amet accumsan lectus. Nullam auctor auctor consequat. Donec semper magna erat, sed fringilla lacus pretium eget. Cras porttitor, nibh sit amet interdum bibendum, nibh velit accumsan tellus, vel vehicula tellus leo vitae ipsum. Praesent sit amet libero sed orci ullamcorper efficitur. Pellentesque in euismod purus, sit amet ultrices tortor. Vestibulum ante dui, tempor at dui id, tincidunt euismod diam. Integer pellentesque massa nibh, ac eleifend odio malesuada sed. Phasellus orci sem, cursus nec orci ut, accumsan facilisis lacus. Nullam at elementum nibh, ac gravida felis. In sagittis rhoncus nisi tempus dignissim. Sed fringilla consequat ante vitae lobortis. Cras posuere ligula vel enim suscipit malesuada. Vivamus non nulla ut ante imperdiet euismod quis nec massa.
                            </p>
                        </div>
                    </div>
                    <div class="borrowbutton">                        
                        <a class="btn btn-warning" id="button_borrow" href="#">Borrow</a>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>


    </div>
    <!-- ./wrapper -->
    <?php include "include_js.php"; ?>
</body>

</html>