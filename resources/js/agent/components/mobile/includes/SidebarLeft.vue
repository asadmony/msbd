<template>
<div>
	<i class="screen-overlay"></i>
    <aside class="offcanvas" id="sidebar_left">
	<div class="card-body bg-primary">
		<button class="btn-close close text-white">&times;</button>
		<img src="mobile/images/avatars/1.jpg" class="img-sm rounded-circle" alt="">
		<h6 class="text-white mt-3 mb-0">Welcome Agent!</h6>
	</div>
	<nav class="nav-sidebar">
		<slot></slot>
	</nav>
	<hr>
	<nav class="nav-sidebar">
		<a href="/agent"><i class="fa fa-arrow-left" aria-hidden="true"></i> Agent Dashboard</a>
	</nav>
	<hr>
	<nav class="nav-sidebar">
		<a href="#"> <i class="fa fa-phone"></i> +99812345678</a>
		<a href="#"> <i class="fa fa-envelope"></i> info@somename.uz</a>
		<a href="#"> <i class="fa fa-map-marker"></i> Tashkent city</a>
		<a href="">Logout</a>
	</nav>
</aside>
</div>
</template>