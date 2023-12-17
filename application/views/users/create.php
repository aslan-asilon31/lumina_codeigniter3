<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah User</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              Tambah User
            </div>
            <div class="card-body">
              <form action="<?php echo base_url() ?>index.php/user/simpan" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" placeholder="Masukkan Name" class="form-control">
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" placeholder="Masukkan Email" class="form-control">
                </div>

                <div class="form-group">
                  <label>Image</label>
                  <b>Upload File :</b>
        <input  class="form-control"  type="file" name="image" accept="image/*">
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>