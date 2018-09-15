@extends('layouts.layout')
@section('content')

    <div id="sb-site">
        @include('partials.chat_slider')
        @include('partials.stadistics_slidebar')

        <div id="loading">
            <div class="svg-icon-loader"><img src="{{asset('assets/images/svg-loaders/bars.svg') }}" width="40" alt=""></div>
        </div>

        <div id="page-wrapper">
            <div id="mobile-navigation">
                <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar"><span></span></button>
            </div>

            @include('partials.menu')

            <div id="page-content-wrapper">
                <div id="page-content">
                    <div id="page-header">

                        @include('partials.user_account')

                        <div id="header-nav-right">

                        @include('partials.search')
                        @include('partials.notifications')
                        @include('partials.progress')

                            <div class="dropdown" id="cloud-btn"><a href="#" data-placement="bottom" class="tooltip-button sb-toggle-right" title="Statistics Sidebar"><i class="glyph-icon icon-linecons-cloud"></i></a></div>
                        </div>
                    </div>

                           @include('partials.page_title')

                    <div class="row">
                        <div class="col-md-8">
                            @include('partials.shortcut')

<!-- PANELS-->

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">@lang('text.add') @lang('titles.currencies')</h3>
  </div>
  <div class="panel-body">
      <div class="example-box-wrapper">
									<form method="POST" class="form-horizontal bordered-row" action="{{ route('currencies.update', $currency->id) }}"  role="form">
									 	<input name="_method" type="hidden" value="PATCH">

													<div class="form-group">
                                <label class="col-sm-3 control-label">@lang('text.select')</label>
                                <div class="col-sm-6">
                                    <select class="form-control" id="currency" name="currency">
                                      <option selected>{{$currency->currency}}</option>
                                      @foreach($world_currencies as $cur)
                                        <option value="{{$cur->currency}}">{{$cur->currency}}</option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                 <label class="col-sm-3 control-label">@lang('labels.indicator')</label>
                                 <div class="col-sm-6">
                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="checkbox checkbox-primary">
                                                 <label>
                                                     <input type="checkbox" id="indicator" name="indicator" class="custom-checkbox"></label>
                                             </div>
                                           </div>

                                     </div>
                                 </div>
                             </div>


									<div class="row">
										<div class="col-xs-2 col-sm-2 col-md-2">
											<input type="submit" value="@lang('buttons.save')" class="btn btn-success btn-block ">

										</div>
										<div class="col-xs-2 col-sm-2 col-md-2">
											<a href="{{ route('currencies.index') }}" class="btn btn-danger btn-block" >@lang('buttons.cancel')</a>
										</div>
									</div>
												<input type="hidden" name="_token" value="{{ Session::token() }}">
				</form>

		</div>
	</div>
</div>


<div class="panel" id="panel">

</div>

<div class="panel mrg20T">
    <div class="panel-body">
        <h3 class="title-hero">Weekly Sales</h3>
        <div class="example-box-wrapper">
             <div id="data-example-1" class="mrg20B" style="width: 100%; height: 300px"></div>

        </div>
    </div>
</div>

<!-- PANELS-->

                        </div>
                        <div class="col-md-4">

                          @include('partials.students_stadistics')
                          @include('partials.registrations')
                          @include('partials.social_media')
                          @include('partials.activities')

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

		<script>

@endsection
