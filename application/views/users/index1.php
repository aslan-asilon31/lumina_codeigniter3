<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
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
                        </tbody>

                    </table>
                    <!-- <table class="table table-bordered" id="myTable">
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
                                    <!-- <img src="<?= base_url($user->image) ?>" alt="User Image" style="width:70px;height:70px;">
                                </td>
                            <td><?= $user->email ?></td>
                            <td class="text-center">
                                <a href="<?= base_url() ?>index.php/user/edit/<?= $user->user_id ?>" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> </a>
                                <a href="<?= base_url() ?>index.php/user/hapus/<?= $user->user_id ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table> --> 
                  </div>
                </div>
              </div>
            </div>
          </div>

       

<script type="text/javascript">

$(document).ready(function() {

    $('#myTable').DataTable({

        "ajax": {

            url : "<?= site_url('/user/get_user_json') ?>",

            type : 'GET'

        },

    });

});

</script>

<!-- <script>
$(document).ready(function() {
// Initialize DataTable with AJAX
  let table = new DataTable('#myTable', {
    "ajax": {
        "url": "<?= site_url('/user/get_user_json') ?>",
        "type": "GET",
        "success": function(data) {
            alert(data);
            console.log("Data loaded successfully:", data);
        },
        "error": function(xhr, textStatus, errorThrown) {
            console.error("Error loading data:", textStatus, errorThrown);
        }
    },
    "columns": [
        { "data": "no" },
        { "data": "name" },
                { "data": "image" },
                { "data": "email" },
                { "data": "action" }
            ]
        });
    });
</script> -->
