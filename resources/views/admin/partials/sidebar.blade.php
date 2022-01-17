<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.html"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="{{ route('admin.account.index') }}"><em class="fa fa-user-circle">&nbsp;</em> Account</a></li>
			<li><a href="{{ route('admin.productType.index') }}"><em class="fa fa-shopping-cart">&nbsp;</em> Manage ProductType</a></li>
			<li><a href="{{ route('admin.product.index') }}"><em class="fa fa-shopping-cart">&nbsp;</em> Manage Product</a></li>
			<li><a href="{{ route('admin.provider.index') }}"><em class="fa fa-clone">&nbsp;</em> Manage Provider</a></li>
			<li><a href="{{ route('admin.cart.index') }}"><em class="fa fa-cart-plus ">&nbsp;</em> Manage Cart</a></li>
			<li><a href="{{ route('admin.invoice.index') }}"><em class="fa fa-newspaper-o">&nbsp;</em> Manage Invoice</a></li>
			<li><a href="{{ route('admin.invoiceDetail.index') }}"><em class="fa fa-newspaper-o">&nbsp;</em> Manage InvoiceDetail</a></li>

			
			<li><a href="{{ route('admin.logout')}}"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div>
