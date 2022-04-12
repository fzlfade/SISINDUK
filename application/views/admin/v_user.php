  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->

              <div class="card-body" align="left">
                <a href="<?php echo base_url('user/user_tambah');?>" class='btn btn-sm btn-success pull-right'><i class="fa fa-plus"></i> User Baru</a>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th style="width: 200px">Username</th>
                      <th>Level</th>
                      <th style="width: 400px">Last Login</th>
                      <th style="width: 400px">Last Logout</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $No = 1;
                      foreach ($user as $a) {
                    ?>
                    <tr>
                      <td><?php echo $No++; ?> </td>
                      <td><?php echo $a->username;?> </td>
                      <td>
                        <div><?php echo $a->level;?></div>
                        </div>
                      </td>
                      <td><?php echo $a->last_login;?></span></td>
                      <td><?php echo $a->last_logout;?></span></td>

                      <td><a href="<?php echo base_url('User/v_user_edit');?>" class="btn btn-info  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Edit</a></td>
                      <td><a href="<?php echo base_url('User/user_hapus/'.$a->id_user); ?>" class="btn btn-info  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Hapus</a></td>

                    </tr>
                    <?php
                      }
                    ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>