<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data User</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Data User
            </div>
            <div class="card-body">
              <a href="<?php echo base_url() ?>index.php/user/tambah" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
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
                            <!-- Use the img tag to display the image -->
                            <img src="<?= base_url($user->image) ?>" alt="User Image" style="width:200px;">
                        </td>
                      <td><?= $user->email ?></td>
                      <td class="text-center">
                        <a href="<?= base_url() ?>index.php/user/edit/<?= $user->user_id ?>" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> </a>
                        <a href="<?= base_url() ?>index.php/user/hapus/<?= $user->user_id ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                      </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>