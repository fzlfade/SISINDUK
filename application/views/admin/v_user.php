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
              <li class="breadcrumb-item active">Simple Tables</li>
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
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th style="width: 500px">Username</th>
                      <th>Status</th>
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
                      <td><?php echo $No; ?> </td>
                      <td><?php echo $a->username;?> </td>
                      <td>
                          <div class="progress-bar progress-bar-danger"><?php echo $a->level;?></div>
                        </div>
                      </td>
                      <td><span class="badge bg-danger"><?php echo $a->last_login;?></span></td>
                      <td><span class="badge bg-danger"><?php echo $a->last_logout;?></span></td>
                      <td align="center">Edit|Hapus</td>
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