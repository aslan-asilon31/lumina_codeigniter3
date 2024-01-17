  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title"><?= $title;  ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="user-table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </thead>
                  <tbody>

                              
                  <?php 
                    $no = 1;
                    foreach($data_user as $user){
                  ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $user->name ?></td>
                                <td>
                                    <img src="<?= base_url($user->image) ?>" alt="User Image" style="width:70px;height:70px;"> -->
                                </td>
                            <td><?= $user->email ?></td>
                            <td class="text-center">
                                <a href="<?= base_url() ?>index.php/user/edit/<?= $user->user_id ?>" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> </a>
                                <a href="<?= base_url() ?>index.php/user/hapus/<?= $user->user_id ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                  <?php } ?>
           
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
            Footer
            </div>
            <!-- /.card-footer-->
        </div>

    </section>
   </div>
    <!-- /.content -->

    
      <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>assets/backend/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url()?>assets/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>assets/backend/dist/css/adminlte.min.css">


  
<!-- jQuery -->
<script src="<?= base_url()?>assets/backend/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url()?>assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url()?>assets/backend/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>assets/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url()?>assets/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url()?>assets/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url()?>assets/backend/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url()?>assets/backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url()?>assets/backend/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url()?>assets/backend/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url()?>assets/backend/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url()?>assets/backend/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url()?>assets/backend/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url()?>assets/backend/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url()?>assets/backend/dist/js/adminlte.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#user-table").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>