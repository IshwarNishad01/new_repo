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
					<a href="<?= base_url('dashboard'); ?>" class="nav-link ">
						<i data-feather="airplay"></i>
						<span class="title">Dashboard</span>
					</a>

				</li>

				<li class="nav-item  open">
					<a href="#" class="nav-link nav-toggle"><i class="fa-brands fa-teamspeak"></i>
						<span class="title">Typing Paper</span> <span class="selected"></span>
						<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a href="<?= base_url('paper_info'); ?>" class="nav-link "> <span class="title">All Paper</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item  open">
					<a href="#" class="nav-link nav-toggle"> <i class="fa-solid fa-square-poll-vertical"></i>
						<span class="title">Result</span> <span class="selected"></span>
						<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a href="<?= base_url('list_result'); ?>" class="nav-link "> <span class="title">Result List</span>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item start ">
					<a href="<?= base_url('user-logout'); ?>" class="nav-link "><i class="fa-solid fa-right-from-bracket"></i>
						<span class="title">Log Out</span>
					</a>

				</li>


			</ul>
		</div>
	</div>
</div>
