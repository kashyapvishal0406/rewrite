<style>
	.logo-iconss {
		width: 50px;
	}
</style>
<header>
	<div class="topbar d-flex align-items-center">
		<nav class="navbar navbar-expand gap-3">
			<div class="topbar-logo-header d-none d-lg-flex">
				<div class="">
					<img src="assets/images/plain.png" class="logo-iconss" alt="logo icon">
				</div>
				<div class="">
					<h4 class="logo-text text-warning fw-bold"><span class="text-primary">Techtions Solutions</span>
						Private Limited</h4>
				</div>
			</div>
			<div class="mobile-toggle-menu d-block d-lg-none" data-bs-toggle="offcanvas"
				data-bs-target="#offcanvasNavbar"><i class='bx bx-menu'></i></div>
			<div class="search-bar flex-grow-1">
				<div class="position-relative search-bar-box">
					<input type="text" class="form-control search-control" placeholder="Type to search..."
						value="Type to search..."> <span
						class="position-absolute top-50 search-show translate-middle-y"><i
							class='bx bx-search'></i></span>
					<span class="position-absolute top-50 search-close translate-middle-y"><i
							class='bx bx-x'></i></span>
				</div>
			</div>
			<div class="top-menu ms-auto">
				<ul class="navbar-nav align-items-center gap-1">
					<li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal"
						data-bs-target="#SearchModal">
						<a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
						</a>
					</li>

					<li class="nav-item dropdown dropdown-app">
						<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href=""><i
								class='bx bx-refresh'></i></a>
						<div class="dropdown-menu dropdown-menu-end p-0">
							<div class="app-container p-2 my-2">
							</div>
						</div>
					</li>

					<li class="nav-item dropdown dropdown-large">
						<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#"
							data-bs-toggle="dropdown"><span class="alert-count">0</span>
							<i class='bx bx-bell'></i>
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<a href="javascript:;">
								<div class="msg-header">
									<p class="msg-header-title">Notifications</p>
									<p class="msg-header-badge">0 New</p>
								</div>
							</a>
							<div class="header-notifications-list">
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">

										<div class="flex-grow-1">
											<h6 class="msg-name">Empty</h6>
										</div>
									</div>
								</a>
							</div>
							<a href="javascript:;">
								<div class="text-center msg-footer">
									<button class="btn btn-primary w-100">View All Notifications</button>
								</div>
							</a>
						</div>
					</li>
					<li class="nav-item dropdown dropdown-large">
						<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#"
							role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span
								class="alert-count">0</span>
							<i class='bx bx-shopping-bag'></i>
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<a href="javascript:;">
								<div class="msg-header">
									<p class="msg-header-title">My Cart</p>
									<p class="msg-header-badge">0 Items</p>
								</div>
							</a>
							<div class="header-message-list">
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center gap-3">
										<div class="flex-grow-1">
											<h6 class="cart-product-title mb-0">Empty</h6>

										</div>

									</div>
							</div>
							</a>

						</div>
					</li>
				</ul>
			</div>
			<?php
			if ($agent_details['profile_img'] == NULL) {
				$profilePicture_name = 'default.png';
			} else {
				$profilePicture_name = $agent_details['profile_img'];
			}
			?>
			<div class="user-box dropdown px-3">
				<a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#"
					role="button" data-bs-toggle="dropdown" aria-expanded="false">
					<img src="../../data/user_images/<?php echo $profilePicture_name; ?>" class="user-img"
						alt="user avatar">
					<div class="user-info">
						<p class="user-name mb-0">
							<?php echo $agent_details['name']; ?>
						</p>
						<p class="designattion mb-0">Branch ID :
							<?php echo $agent_id; ?>
						</p>
					</div>
				</a>
				<ul class="dropdown-menu dropdown-menu-end">
					<li><a class="dropdown-item d-flex align-items-center" href="profile.php"><i
								class="bx bx-user fs-5"></i><span>Profile</span></a>
					</li>
					<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
								class="bx bx-cog fs-5"></i><span>Settings</span></a>
					</li>
					<li>
						<div class="dropdown-divider mb-0"></div>
					</li>
					<li><a class="dropdown-item d-flex align-items-center" href="logout.php"><i
								class="bx bx-log-out-circle"></i><span>Logout</span></a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</header>