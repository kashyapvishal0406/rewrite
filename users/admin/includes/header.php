<header>
	<div class="topbar d-flex align-items-center">
		<nav class="navbar navbar-expand gap-3">
			<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
			</div>
			<div class="search-bar flex-grow-1">
				<div class="position-relative search-bar-box">
					<input type="text" class="form-control search-control" placeholder="Type to search..."> <span
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
								
							</div>
							<a href="javascript:;">
								<div class="text-center msg-footer">
									<button class="btn btn-light w-100">View All Notifications</button>
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
								
							</div>
							
						</div>
					</li>
				</ul>
			</div>
			<div class="user-box dropdown px-3">
				<a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#"
					role="button" data-bs-toggle="dropdown" aria-expanded="false">
					<img src="assets/images/admin_pic.svg" class="user-img" alt="user avatar">
					<div class="user-info">
						<p class="user-name mb-0">Admin</p>
						<!-- <p class="designattion mb-0">Web Designer</p> -->
					</div>
				</a>
				<ul class="dropdown-menu dropdown-menu-end">
					
					
					<li><a class="dropdown-item d-flex align-items-center" href="logout.php"><i
								class="bx bx-log-out-circle"></i><span>Logout</span></a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</header>