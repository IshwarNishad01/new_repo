<div class="sidebar-container">
	<div class="sidemenu-container navbar-collapse collapse fixed-menu">
		<div id="remove-scroll" class="left-sidemenu">
			<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
				<li class="sidebar-toggler-wrapper hide">
					<div class="sidebar-toggler">
						<span></span>
					</div>
				</li>

				<li class="nav-item start ">
					<a href="<?= base_url('admin/dashboard') ?>" class="nav-link ">
						<i data-feather="airplay"></i>
						<span class="title">Dashboard</span>
					</a>

				</li>

				<li class="nav-item  open">
					<a href="#" class="nav-link nav-toggle"> <i class="fa-brands fa-teamspeak"></i>
						<span class="title">Online Exam</span> <span class="selected"></span>
						<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a href="#" class="nav-link "> <span class="title">Typing Test Result</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item  open">
					<a href="#" class="nav-link nav-toggle"> <i class="fa-solid fa-upload"></i>
						<span class="title">paper Upload</span> <span class="selected"></span>
						<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a href="<?= base_url('admin/add_paper'); ?>" class="nav-link "> <span class="title">Add Paper</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/paper_list'); ?>" class="nav-link "> <span class="title">All Paper</span>
							</a>
						</li>

					</ul>
				</li>
				<li class="nav-item  open">
					<a href="#" class="nav-link nav-toggle"> <i class="fa-solid fa-video"></i>
						<span class="title">Video Upload </span> <span class="selected"></span>
						<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a href="<?= base_url('admin/add_video'); ?>" class="nav-link "> <span class="title">Add videos</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/all_video'); ?>" class="nav-link "> <span class="title">All
									videos</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item  open">
					<a href="#" class="nav-link nav-toggle"> <i class="fa-solid fa-list"></i>
						<span class="title">Enquiry </span> <span class="selected"></span>
						<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a href="<?= base_url('admin/enquiry_list'); ?>" class="nav-link "> <span class="title">Enquiry List</span>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item  open">
					<a href="#" class="nav-link nav-toggle"> <i class="fa-solid fa-list"></i>
						<span class="title">Contact List </span> <span class="selected"></span>
						<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a href="<?= base_url('admin/contact_list'); ?>" class="nav-link "> <span class="title">Contact </span>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item  open">
					<a href="#" class="nav-link nav-toggle"> <i class="fa-solid fa-registered"></i>
						<span class="title">Registration </span> <span class="selected"></span>
						<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">

						<li class="nav-item">
							<a href="<?= base_url('admin/student_registration'); ?>" class="nav-link "> <span class="title">Registration List</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item  open">
					<a href="#" class="nav-link nav-toggle"> <i class="fa-solid fa-house"></i>
						<span class="title">Notification Update </span> <span class="selected"></span>
						<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a href="<?= base_url('admin/add-notification'); ?>" class="nav-link "> <span class="title">Add Notification</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/notification_list'); ?>" class="nav-link "> <span class="title">Notification List</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item  open">
					<a href="#" class="nav-link nav-toggle"> <i class="fa-solid fa-user"></i>
						<span class="title"> User Management </span> <span class="selected"></span>
						<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a href="<?= base_url('admin/student-list'); ?>" class="nav-link "> <span class="title">Student List</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/manage-student'); ?>" class="nav-link "> <span class="title">Manage Students</span>
							</a>
						</li>

					</ul>
				</li>


				<li class="nav-item  open">
					<a href="<?= base_url('admin/logout') ?>" class="nav-link nav-toggle"> <i class="fa-solid fa-user"></i>
						<span class="title"> Logout </span> <span class="selected"></span>
					</a>
				</li>

			</ul>
			<div class="slimScrollBar" style="background: rgb(158, 165, 171); width: 5px; position: absolute; top: 3px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 236.337px;"></div>
			<div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
		</div>
	</div>
</div>
