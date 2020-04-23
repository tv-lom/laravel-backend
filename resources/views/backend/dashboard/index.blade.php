@extends('backend.layouts.app')

@section('content')
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				@can('access service registration list')
					<div class="col-lg-3 col-6">
						<div class="small-box bg-info position-relative">
							<div class="inner">
								<h3>{{ $countServiceRegister }}</h3>
								<p>จองคิวติดฟิล์ม</p>
							</div>
							<div class="icon">
								<i class="far fa-file-alt"></i>
							</div>
							<a href="{{ route('backend.service-registration.index') }}" class="small-box-footer stretched-link">More info <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
				@endcan
				@can('access customer list')
					<div class="col-lg-3 col-6">
						<div class="small-box bg-success position-relative">
							<div class="inner">
								<h3>{{ $countCustomer }}</h3>
								<p>Customer List</p>
							</div>
							<div class="icon">
								<i class="fas fa-users"></i>
							</div>
							<a href="{{ route('backend.customer.index') }}" class="small-box-footer stretched-link">More info <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
				@endcan
				@can('access user list')
					<div class="col-lg-3 col-6">
						<div class="small-box bg-teal position-relative">
							<div class="inner">
								<h3>{{ $countUser }}</h3>
								<p>User List</p>
							</div>
							<div class="icon">
								<i class="fas fa-user"></i>
							</div>
							<a href="{{ route('backend.user.index') }}" class="small-box-footer stretched-link">More info <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
				@endcan
			</div>
		</div>
	</section>
@endsection