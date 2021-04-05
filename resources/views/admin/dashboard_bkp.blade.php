@extends('admin.layouts.master')

@section('title')
Dashboard
@endsection

@section('content')

<br><br>
<div class="main-section container-fluid">
	<div class="dashbord">
		<div class="icon-section">
			<i class="fa fa-users" aria-hidden="true"></i><br>
			<small>Users</small>
			<p>256</p>
		</div>
		<div class="detail-section">
			<a href="#">More Info </a>
		</div>
	</div>
	<div class="dashbord dashbord-green">
		<div class="icon-section">
			<i class="fa fa-money" aria-hidden="true"></i><br>
			<small>Account</small>
			<p>$ 256</p>
		</div>
		<div class="detail-section">
			<a href="#">More Info </a>
		</div>
	</div>
	<div class="dashbord dashbord-orange">
		<div class="icon-section">
			<i class="fa fa-bell" aria-hidden="true"></i><br>
			<small>Alert</small>
			<p>9 New</p>
		</div>
		<div class="detail-section">
			<a href="#">More Info </a>
		</div>
	</div>
	<div class="dashbord dashbord-blue">
		<div class="icon-section">
			<i class="fa fa-tasks" aria-hidden="true"></i><br>
			<small>Task</small>
			<p>8</p>
		</div>
		<div class="detail-section">
			<a href="#">More Info </a>
		</div>
	</div>
	<div class="dashbord dashbord-red">
		<div class="icon-section">
			<i class="fa fa-shopping-cart" aria-hidden="true"></i><br>
			<small>Cart</small>
			<p>$ 24</p>
		</div>
		<div class="detail-section">
			<a href="#">More Info </a>
		</div>
	</div>
	<div class="dashbord dashbord-skyblue">
		<div class="icon-section">
			<i class="fa fa-comments" aria-hidden="true"></i><br>
			<small>Mentions</small>
			<p>96</p>
		</div>
		<div class="detail-section">
			<a href="#">More Info </a>
		</div>
	</div>
</div>

@endsection




@section('scripts')
@endsection
