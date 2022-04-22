<aside class="main-sidebar sidebar-dark-primary elevation-4">

		<!-- Sidebar -->
		<div class="sidebar">
			<!-- Sidebar user panel (optional) -->
			<div class="user-panel mt-3 pb-3 mb-3 d-flex">
				<div class="image">
					<img src="<?php echo base_url();?>template/admin/dist/img/avatar4.png" class="img-circle elevation-2" alt="User Image">
				</div>
				<div class="info">
					<a href="#" class="d-block">SISINDUK</a>
				</div>
			</div>

			<!-- SidebarSearch Form -->

			<!-- Sidebar Menu -->
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					<!-- Add icons to the links using the .nav-icon class
							 with font-awesome or any other icon font library -->
					<li class="nav-item">
						<a href="<?php echo base_url('Home');?>" class="nav-link">
							<i class="nav-icon fas fa-th"></i>
							<p>
								Dashboard
							</p>
						</a>
					</li>
					<li class="nav-item">
		            	<a href="#" class="nav-link">
		              		<i class="nav-icon fas fa-envelope"></i>
		              		<p>
		                	Admin
		                	<i class="fas fa-angle-left right"></i>
		              		</p>
		            	</a>
		            <ul class="nav nav-treeview">
		              <li class="nav-item">
		                <a href="Form" class="nav-link">
		                  <i class="far nav-icon"></i>
		                  <p>Tambah User</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="User" class="nav-link">
		                  <i class="far nav-icon"></i>
		                  <p>User</p>
		                </a>
		              </li>
		            </ul>
		          </li>					
				  <li class="nav-item">
		            <a href="#" class="nav-link">
		              <i class="nav-icon fas fa-book"></i>
		              <p>
		                Siswa
		                <i class="fas fa-angle-left right"></i>
		              </p>
		            </a>
		            <ul class="nav nav-treeview">
		              <li class="nav-item">
		                <a href="<?php echo base_url('Data');?>" class="nav-link">
		                  <i class="far nav-icon"></i>
		                  <p>Input Data Siswa</p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a href="<?php echo base_url('Siswa');?>" class="nav-link">
		                  <i class="far nav-icon"></i>
		                  <p>Data Siswa</p>
		                </a>
		              </li>
		            </ul>
		            </li>	
		           	<li class="nav-item">
						<a href="<?php echo base_url('');?>" class="nav-link">
							<i class="nav-icon fas fa-edit"></i>
							<p>
								Laporan
							</p>
						</a>
					</li>			
				</ul>
			</nav>
			<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	</aside>