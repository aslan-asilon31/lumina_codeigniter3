  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title"><?= $title;  ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div style="max-height: 300px; overflow: auto;">
                  <table id="order-table" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Transaction ID</th>
                      <th>User</th>
                      <th>Status</th>
                      <th>Category</th>
                      <th>Price</th>
                      <th>Brand</th>
                      <th>Shipping</th>
                      <th>Product</th>
                      <th>Payment Method</th>
                      <th>Invoice Code</th>
                    </tr>
                    </thead>
                    <tbody>

                                
                    <?php 
                      $no = 1;
                      foreach($data_order as $order){
                    ?>
                          <tr>
                              <td><?= $no++ ?></td>
                              <td><?= $order->transaction_id ?></td>
                              <td><?= $order->user_id ?></td>
                              <td><?= $order->status_id ?></td>
                              <td><?= $order->category_id ?></td>
                              <td><?= $order->price_id ?></td>
                              <td><?= $order->brand_id ?></td>
                              <td><?= $order->shipping_id ?></td>
                              <td><?= $order->product_id ?></td>
                              <td><?= $order->payment_method ?></td>
                              <td><?= $order->invoice_code ?></td>
                              <td class="text-center">
                                  <a href="<?= base_url() ?>index.php/order/edit/<?= $order->id ?>" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> </a>
                                  <a href="<?= base_url() ?>index.php/order/hapus/<?= $order->id ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                              </td>
                          </tr>
                    <?php } ?>
            
                    </tfoot>
                  </table>
                </div>
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
    $("#order-table").DataTable({
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