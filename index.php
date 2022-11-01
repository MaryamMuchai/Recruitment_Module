<?php include 'head.php'; ?>

<body onload="info_noti()">
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="assets/images/favicon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Inuka Africa</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Application</div>
					</a>
					<ul>
						<li> <a href="emailbox.php"><i class="bx bx-right-arrow-alt"></i>Email</a>
						</li>
						<li> <a href="task.php"><i class="bx bx-right-arrow-alt"></i>Todo List</a>
						</li>
						<li> <a href="interview_calender.php"><i class="bx bx-right-arrow-alt"></i>Calendar</a>
						</li>
						<li> <a href="component-progress-bars.html"><i class="bx bx-right-arrow-alt"></i>Progress</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">UI Elements</li>
				<li>
					<a href="email.php">
						<div class="parent-icon"><i class='bx bx-cookie'></i>
						</div>
						<div class="menu-title">Emails</div>
					</a>
				</li>
				<li>
					<a href="task.php">
						<div class="parent-icon"><i class='bx bx-cookie'></i>
						</div>
						<div class="menu-title">Tasks</div>
					</a>
				</li>
				<li>
					<a href="interview_calender.php">
						<div class="parent-icon"><i class='bx bx-cookie'></i>
						</div>
						<div class="menu-title">Calendar</div>
					</a>
				</li>
				<li>
					<a href="interview_progress.php">
						<div class="parent-icon"><i class='bx bx-cookie'></i>
						</div>
						<div class="menu-title">Progress</div>
					</a>
				</li>
				<li>
					<a href="interview_progress.php">
						<div class="parent-icon"><i class='bx bx-cookie'></i>
						</div>
						<div class="menu-title">Job Status</div>
					</a>
				</li>
		
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
							<input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
							<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
						</div>
					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center">
							<li class="nav-item mobile-search-icon">
								<a class="nav-link" href="#">	<i class='bx bx-search'></i>
								</a>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">	<i class='bx bx-category'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<div class="row row-cols-3 g-3 p-3">
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-cosmic text-white"><i class='bx bx-group'></i>
											</div>
											<div class="app-title">Teams</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-burning text-white"><i class='bx bx-atom'></i>
											</div>
											<div class="app-title">Projects</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-lush text-white"><i class='bx bx-shield'></i>
											</div>
											<div class="app-title">Tasks</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-kyoto text-dark"><i class='bx bx-notification'></i>
											</div>
											<div class="app-title">Feeds</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-blues text-dark"><i class='bx bx-file'></i>
											</div>
											<div class="app-title">Files</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-moonlit text-white"><i class='bx bx-filter-alt'></i>
											</div>
											<div class="app-title">Alerts</div>
										</div>
									</div>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<i class='bx bx-bell'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Notifications</p>
											<p class="msg-header-clear ms-auto">Marks all as read</p>
										</div>
									</a>
									<div class="header-notifications-list">
										
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">View All Notifications</div>
									</a>
								</div>
							</li>

						</ul>
					</div>
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="assets/images/avatars/avatar2.png" class="user-img" alt="user avatar">
							<div class="user-info ps-3">
								<p class="user-name mb-0">Pauline Seitz</p>
								<p class="designattion mb-0">Web Designer</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Settings</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-home-circle'></i><span>Dashboard</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-2 row-cols-xxl-4">
                   <div class="col">
					 <div class="card radius-10 bg-gradient-cosmic">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div class="me-auto">
									<p class="mb-0 text-white">Total Orders</p>
									<h4 class="my-1 text-white">4805</h4>
									<p class="mb-0 font-13 text-white">+2.5% from last week</p>
								</div>
								<div id="chart1"></div>
							</div>
						</div>
					 </div>
				   </div>
				   <div class="col">
					<div class="card radius-10 bg-gradient-ibiza">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div class="me-auto">
								   <p class="mb-0 text-white">Total Revenue</p>
								   <h4 class="my-1 text-white">$84,245</h4>
								   <p class="mb-0 font-13 text-white">+5.4% from last week</p>
							   </div>
							   <div id="chart2"></div>
						   </div>
					   </div>
					</div>
				  </div>
				  <div class="col">
					<div class="card radius-10 bg-gradient-ohhappiness">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div class="me-auto">
								   <p class="mb-0 text-white">Bounce Rate</p>
								   <h4 class="my-1 text-white">34.6%</h4>
								   <p class="mb-0 font-13 text-white">-4.5% from last week</p>
							   </div>
							   <div id="chart3"></div>
						   </div>
					   </div>
					</div>
				  </div>
				  <div class="col">
					<div class="card radius-10 bg-gradient-kyoto">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div class="me-auto">
								   <p class="mb-0 text-dark">Total Customers</p>
								   <h4 class="my-1 text-dark">8.4K</h4>
								   <p class="mb-0 font-13 text-dark">+8.4% from last week</p>
							   </div>
							   <div id="chart4"></div>
						   </div>
					   </div>
					</div>
				  </div> 
				</div><!--end row-->

				 <div class="card radius-10">
                         <div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Recent Orders</h6>
								</div>
								<div class="dropdown ms-auto">
									<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
									</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="javascript:;">Action</a>
										</li>
										<li><a class="dropdown-item" href="javascript:;">Another action</a>
										</li>
										<li>
											<hr class="dropdown-divider">
										</li>
										<li><a class="dropdown-item" href="javascript:;">Something else here</a>
										</li>
									</ul>
								</div>
							</div>
						 <div class="table-responsive">
						   <table class="table align-middle mb-0">
							<thead class="table-light">
							 <tr>
							   <th>Product</th>
							  
							   <th>Product ID</th>
							   <th>Status</th>
							   <th>Amount</th>
							   <th>Date</th>
							   <th>Shipping</th>
							 </tr>
							 </thead>
							 <tbody><tr>
							  <td>Iphone 5</td>
							 
							  <td>#9405822</td>
							  <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100">Paid</span></td>
							  <td>$1250.00</td>
							  <td>03 Feb 2020</td>
							  <td><div class="progress" style="height: 5px;">
									<div class="progress-bar bg-gradient-quepal" role="progressbar" style="width: 100%"></div>
								  </div></td>
							 </tr>
		  
							 <tr>
							  <td>Earphone GL</td>
							
							  <td>#8304620</td>
							  <td><span class="badge bg-gradient-blooker text-white shadow-sm w-100">Pending</span></td>
							  <td>$1500.00</td>
							  <td>05 Feb 2020</td>
							  <td><div class="progress" style="height: 5px;">
									<div class="progress-bar bg-gradient-blooker" role="progressbar" style="width: 60%"></div>
								  </div></td>
							 </tr>
		  
							 <tr>
							  <td>HD Hand Camera</td>
							 
							  <td>#4736890</td>
							  <td><span class="badge bg-gradient-bloody text-white shadow-sm w-100">Failed</span></td>
							  <td>$1400.00</td>
							  <td>06 Feb 2020</td>
							  <td><div class="progress" style="height: 5px;">
									<div class="progress-bar bg-gradient-bloody" role="progressbar" style="width: 70%"></div>
								  </div></td>
							 </tr>
		  
							 <tr>
							  <td>Clasic Shoes</td>
							 
							  <td>#8543765</td>
							  <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100">Paid</span></td>
							  <td>$1200.00</td>
							  <td>14 Feb 2020</td>
							  <td><div class="progress" style="height: 5px;">
									<div class="progress-bar bg-gradient-quepal" role="progressbar" style="width: 100%"></div>
								  </div></td>
							 </tr>
							 <tr>
							  <td>Sitting Chair</td>
							  
							  <td>#9629240</td>
							  <td><span class="badge bg-gradient-blooker text-white shadow-sm w-100">Pending</span></td>
							  <td>$1500.00</td>
							  <td>18 Feb 2020</td>
							  <td><div class="progress" style="height: 5px;">
									<div class="progress-bar bg-gradient-blooker" role="progressbar" style="width: 60%"></div>
								  </div></td>
							 </tr>
							 <tr>
							  <td>Hand Watch</td>
							 
							  <td>#8506790</td>
							  <td><span class="badge bg-gradient-bloody text-white shadow-sm w-100">Failed</span></td>
							  <td>$1800.00</td>
							  <td>21 Feb 2020</td>
							  <td><div class="progress" style="height: 5px;">
									<div class="progress-bar bg-gradient-bloody" role="progressbar" style="width: 40%"></div>
								  </div></td>
							 </tr>
						    </tbody>
						  </table>
						  </div>
						 </div>
					</div>	
			</div>
		</div>
<?php include 'footer.php' ?>