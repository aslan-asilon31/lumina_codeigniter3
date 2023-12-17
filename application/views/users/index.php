<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
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
                                    <img src="<?= base_url($user->image) ?>" alt="User Image" style="width:70px;height:70px;">
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
          </div>

