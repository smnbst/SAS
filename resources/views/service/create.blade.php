@extends('layouts.layout')
@extends('partials.menu')
@section('content')
<div class="container">
	<section class="content">
		<div class="col-md-12 col-md-offset-3 ">
    @include('partials.alerts')
			<div class="card">
				<div class="card-header bg-warning">
					<h3 class="card-title">@lang('text.add') @lang('titles.rooms')</h3>
				</div>
				<div class="card-body">
					<div class="table-container">

						<form method="POST" action="{{ route('rooms.store') }}"  role="form">

              <div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="description" id="description" class="form-control input-sm" placeholder="@lang('fields.description')" required>
									</div>
								</div>
              </div>

              <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4">
                  <div class="form-group">
                    <input type="text" name="dimension" id="dimension" class="form-control input-sm" placeholder="@lang('fields.dimension')">
                  </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                  <div class="form-group">
                    <input type="text" name="location" id="location" class="form-control input-sm" placeholder="@lang('fields.location')">
                  </div>
                </div>
              </div>

				<div class="row">
          <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="checkbox" id="air" name="air"> @lang('labels.air')
                  </div>
                </div>
          </div>
				</div>

	 <div class="row">
          <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="checkbox" id="camara" name="camara"> @lang('labels.camara')
                  </div>
                </div>
          </div>
</div>
	<div class="row">
          <div class="col-xs-1 col-sm-1 col-md-1">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="checkbox" id="projector" name="projector"> @lang('labels.projector')
                  </div>
                </div>
          </div>
</div>
<div class="row">
          <div class="col-xs-10 col-sm-10 col-md-10">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="checkbox" id="internet" name="internet"> @lang('labels.internet')
                  </div>
                </div>
          </div>
</div>
<div class="row">
	           <div class="col-xs-12 col-sm-12 col-md-12">
	                 <div class="input-group-prepend">
	                   <div class="input-group-text">
	                     <input type="checkbox" id="computer" name="computer"> @lang('labels.computer')
	                   </div>
	                 </div>
	           </div>
	         </div>
<br>
          <div class="row">

            <div class="col-xs-2 col-sm-2 col-md-2">
              <input type="submit"  value="@lang('buttons.save')" class="btn btn-success btn-block">
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
              <a href="{{ route('rooms.index') }}" class="btn btn-danger btn-block" >@lang('buttons.cancel')</a>
            </div>

          </div>

								<input type="hidden" name="_token" value="{{ Session::token() }}">
						</form>

				</div>

			</div>
		</div>
	</section>
	@endsection
