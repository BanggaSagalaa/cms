<div class="sidebar">
	<div class="logo text-white text-center">
		<a href="/dashboard" class="text-decoration-none text-white">
		<img src="{{ asset('asset/images/logo.png') }}" width="30px"> <strong class="logo-text">Administrator</strong>
		</a>
	</div>
	<nav>
		<ul class="m-0 p-0">
			@if(session()->has('user_id'))
			    <li class="list-group-item">
					<a href="/dashboard" class="text-decoration-none {{ request()->is('dashboard') ? 'active' : '' }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
				</li>
				@if(session('type') === 'Admin')
					<li class="list-group-item {{ request()->is('form') ? 'boxshadow' : '' }}">
						<a href="/account" class="text-decoration-none {{ request()->is('account') ? 'active' : '' }}"><i class="fas fa-users"></i> <span>account</span></a>
					</li>
					<li class="list-group-item {{ request()->is('profile') ? 'boxshadow' : '' }}">
						<a href="/profile" class="text-decoration-none {{ request()->is('profile') ? 'active' : '' }}"><i class="fas fa-user"></i> <span>Profile</span></a>
					</li>
				@endif
				@if(session('type') === 'Members' OR session('type') === 'Auditor' OR session('type') === 'Treasurer')
					<li class="list-group-item">
						<a href="/financial" class="text-decoration-none {{ request()->is('financial') ? 'active' : (request()->is('map/*') ? 'active' : '') }}">
						    <i class="fas fa-tachometer-alt"></i> <span>Financial</span>
						</a>

					</li>
				@endif
			@endif
		</ul>
	</nav>
	<nav class="signout">
		<ul class="m-0 p-0">
			<li class="list-group-item">
				<form method="POST" action="/logout">
                      @csrf
                      <a href="#" class="text-decoration-none"><i class="fas fa-sign-out"></i> <span><input type="submit" value="Logout" class="bg-transparent border-0 text-white"></span>
                </form></a>
			</li>
		</ul>
	</nav>
</div>