@extends('layouts.layout')
@section('content')
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
		@include('partials.alerts')
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">@lang('titles.branches')</h3>
				</div>
				<div class="panel-body">
					<div class="table-container">
						<form method="POST" action="{{ route('branches.update',$branch->id) }}"  role="form">
							<input name="_method" type="hidden" value="PATCH">

							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4">
									<div class="form-group">
										<input type="text" name="rnc" id="rnc" class="form-control input-sm" value="{{$branch->rnc}}">
									</div>
								</div>

								<div class="col-xs-8 col-sm-8 col-md-8">
									<div class="form-group">
										<input type="text" name="name" id="name" class="form-control input-sm" value="{{$branch->name}}">
									</div>
								</div>
				      </div>

						 <div class="row">

								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<input type="text" name="address" id="address" class="form-control input-sm" value="{{$branch->address}}">
									</div>
								</div>
							</div>

							 <div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4">
									<div class="form-group">
										<input type="text" name="city" id="city" class="form-control input-sm" value="{{$branch->city}}">
									</div>
								</div>

								<div class="col-xs-4 col-sm-4 col-md-4">
									<div class="form-group">
										<input type="text" name="state" id="state" class="form-control input-sm" value="{{$branch->state}}">
									</div>
								</div>
							</div>

						 <div class="row">

								<div class="col-xs-4 col-sm-4 col-md-4">
									<div class="form-group">
										<input type="text" name="country" id="country" class="form-control input-sm" value="{{$branch->country}}">
									</div>
								</div>

								<div class="col-xs-4 col-sm-4 col-md-4">
									<div class="form-group">
										<input type="text" name="zipcode" id="zipcode" class="form-control input-sm" value="{{$branch->zipcode}}">
									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4">
									<div class="form-group">
										<input type="text" name="phone" id="phone" class="form-control input-sm" value="{{$branch->phone}}">
									</div>
								</div>

								<div class="col-xs-4 col-sm-4 col-md-4">
									<div class="form-group">
										<input type="text" name="phone2" id="phone2" class="form-control input-sm" value="{{$branch->phone2}}">
									</div>
								</div>
							</div>


							<div class="row">

								<div class="col-xs-2 col-sm-2 col-md-2">
									<input type="submit"  value="@lang('buttons.save')" class="btn btn-success btn-block">
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2">
									<a href="{{ route('branches.index') }}" class="btn btn-danger btn-block" >@lang('buttons.cancel')</a>
								</div>

							</div>
								<input type="hidden" name="_token" value="{{ Session::token() }}">

						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
	@endsection
