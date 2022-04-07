<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->
		<a href="index3.html" class="brand-link">
			<img src="<?php echo base_url();?>template/admin/dist/img/downloadin.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
			<span class="brand-text font-weight-light">SISINDUK</span>
		</a>

		<!-- Sidebar -->
		<div class="sidebar">
			<!-- Sidebar user panel (optional) -->
			<div class="user-panel mt-3 pb-3 mb-3 d-flex">
				<div class="image">
					<img src="<?php echo base_url();?>template/admin/dist/img/george.png" class="img-circle elevation-2" alt="User Image">
				</div>
				<div class="info">
					<a href="#" class="d-block">Faizal Pria Mahal</a>
				</div>
			</div>

			<!-- SidebarSearch Form -->

			<!-- Sidebar Menu -->
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					<!-- Add icons to the links using the .nav-icon class
							 with font-awesome or any other icon font library -->
					<li class="nav-item menu-open">
						<a href="#" class="nav-link active">
							<i class="nav-icon fas fa-tachometer-alt"></i>
							<p>
								Dashboard
							</p>
						</a>
					</li>
				 
					
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-edit"></i>
							<p>
								Forms
								<i class="fas fa-angle-left right"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="<?php echo base_url();?>template/admin/pages/forms/general.html" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>General Elements</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo base_url();?>template/admin/pages/forms/advanced.html" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Advanced Elements</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo base_url();?>template/admin/pages/forms/editors.html" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Editors</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo base_url();?>template/admin/pages/forms/validation.html" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Validation</p>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-table"></i>
							<p>
								Tables
								<i class="fas fa-angle-left right"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="<?php echo base_url();?>template/admin/pages/tables/simple.html" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Simple Tables</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo base_url();?>template/admin/pages/tables/data.html" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>DataTables</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo base_url();?>template/admin/pages/tables/jsgrid.html" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>jsGrid</p>
								</a>
							</li>
						</ul>
					</li>

					
				</ul>
			</nav>
			<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	</aside>