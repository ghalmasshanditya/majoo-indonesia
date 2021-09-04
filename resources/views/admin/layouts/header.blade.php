<header id="page-topbar">
	<div class="navbar-header">
		<div class="d-flex">
			<!-- LOGO -->
			<div class="navbar-brand-box">
				<a href="index.html" class="logo logo-dark mt-2">
					<span class="logo-sm">
						<img src="{{ asset("assets/icons/majoo_landscape.png")}}" alt="" height="22">
					</span>
					<span class="logo-lg">
						<img src="{{ asset("assets/icons/majoo_landscape.png")}}" alt="" height="17">
					</span>
				</a>

				<a href="/" class="logo logo-light mt-3">
					<span class="logo-sm">
						<img src="{{asset('assets/icons')}}/majoo_landscape.png" alt="" height="22">
					</span>
					<span class="logo-lg">
						<img src="{{asset('assets/icons')}}/majoo_landscape.png" alt="" height="50">
					</span>
				</a>
			</div>
			<button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
				<i class="mdi mdi-menu"></i>
			</button>
		</div>

		<div class="d-flex">
			<div class="dropdown d-none d-lg-inline-block">
				<button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
					<i class="mdi mdi-fullscreen"></i>
				</button>
			</div>
			<div class="text-right  mt-3">
                <span class="text-black"><strong>{{ Auth::user()->name }}</strong></span><br>
                <small class="fs-10 mb-0">Admin</small>
            </div>
			<div class="dropdown d-inline-block">
				<button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
					data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<img class="rounded-circle header-profile-user" src="{{asset('admin/images')}}/user.png">
				</button>

				<div class="dropdown-menu dropdown-menu-right">
					<a class="dropdown-item text-danger" href="{{ route('logout') }}"><i class="bx bx-power-off font-size-17 align-middle mr-1 text-danger"></i> Logout</a>
				</div>
			</div>
		</div>
	</div>
</header>
