<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit User</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT USER
            </div>
            <div class="card-body">
              <form action="<?php echo base_url() ?>index.php/user/update" method="POST">


                <div class="form-group">
                  <label>Name</label>
                  <input type="hidden" name="user_id" value="<?php echo $data_user->user_id ?>" placeholder="Insert Name" class="form-control">
                  <input type="text" name="name" value="<?php echo $data_user->name ?>" placeholder="Insert Name" class="form-control">
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <textarea class="form-control" name="email" placeholder="Insert Email" rows="4"><?php echo $data_user->email ?></textarea>
                </div>

                <div class="form-group">
                  <label>Image</label>
                  <b>Upload File :</b>
                  <input  class="form-control"  type="file" name="image" accept="image/*">
                  
                </div>

                <div class="form-group col-lg-10" style="background-color:#D3D3D3;text-align:center;">
                  <img style="margin:4px;" src="<?= base_url($data_user->image) ?>" alt="User Image" style="width:70px;height:70px;">                  
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
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