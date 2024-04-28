<div class="sidebar">
	<div class="logo text-white text-center">
		<img src="<?php echo e(asset('asset/images/logo.png')); ?>" width="30px"> <strong class="logo-text">Administrator</strong>
	</div>
	<nav>
		<ul class="m-0 p-0">
			<li class="list-group-item">
				<a href="/dashboard" class="text-decoration-none <?php echo e(request()->is('dashboard') ? 'active' : ''); ?>"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
			</li>
			<li class="list-group-item <?php echo e(request()->is('form') ? 'boxshadow' : ''); ?>">
				<a href="/account" class="text-decoration-none <?php echo e(request()->is('account') ? 'active' : ''); ?>"><i class="fas fa-users"></i> <span>account</span></a>
			</li>
			<li class="list-group-item <?php echo e(request()->is('profile') ? 'boxshadow' : ''); ?>">
				<a href="/profile" class="text-decoration-none <?php echo e(request()->is('profile') ? 'active' : ''); ?>"><i class="fas fa-user"></i> <span>Profile</span></a>
			</li>
		</ul>
	</nav>
	<nav class="signout">
		<ul class="m-0 p-0">
			<li class="list-group-item">
				<form method="POST" action="/logout">
                      <?php echo csrf_field(); ?>
                      <a href="#" class="text-decoration-none"><i class="fas fa-sign-out"></i> <span><input type="submit" value="Logout" class="bg-transparent border-0 text-white"></span>
                </form></a>
			</li>
		</ul>
	</nav>
</div><?php /**PATH D:\laravel\churchmanagementsystem\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>