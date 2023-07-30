<?php 

// Getting array from menu.php where admin_panel is an array  menu -> admin_panel  
$menu_items = config('menu.admin_panel');

// dump & die 
// dd($menu_items);

?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
	<img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
	<span class="brand-text font-weight-light">AdminLTE 3</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
	<!-- Sidebar user panel (optional) -->
	<div class="user-panel mt-3 pb-3 mb-3 d-flex">
		<div class="image">
		<img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
		</div>
		<div class="info">
		<a href="#" class="d-block">Alexander Pierce</a>
		</div>
	</div>

	<!-- SidebarSearch Form -->
	<div class="form-inline">
		<div class="input-group" data-widget="sidebar-search">
		<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
		<div class="input-group-append">
			<button class="btn btn-sidebar">
			<i class="fas fa-search fa-fw"></i>
			</button>
		</div>
		</div>
	</div>

	<!-- Sidebar Menu -->
	@foreach ($menu_items as $item_key => $item_value)
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item">
					<a href="@if(!is_array($item_value)) {{ route($item_value) }} @else {{ '#' }} @endif" class="nav-link">
						<i class="nav-icon far fa-plus-square"></i>
						<p><i class="fas fa-angle-left right"></i>{{ $item_key }}</p>
					</a>
					@if(is_array($item_value))
						@foreach($item_value as $subitem_key => $subitem_value)
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="{{ route($item_key.'.'.$subitem_value) }}" class="nav-link">
										<i class="far fa-user nav-icon"></i>
										<p><i class="fas fa-angle-left right"></i>{{ $subitem_value }}</p>
									</a>
								</li>
							</ul>
						@endforeach
					@endif
				</li>
			</ul>
		</nav>
	@endforeach

	<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>