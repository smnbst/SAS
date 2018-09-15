@extends('layouts.layout') @section('content')

<div id="sb-site">
    @include('partials.chat_slider') @include('partials.stadistics_slidebar')

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
												@inculde('partials.progress')

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
															<h3 class="panel-title">@lang('text.add') @lang('titles.institutions')</h3>
														</div>
                            <div class="panel-body">
                                <div class="example-box-wrapper">
                                    <form class="form-horizontal bordered-row" method="POST" action="{{ route('institutions.update',$institution->id) }}"  role="form">
																		<input name="_method" type="hidden" value="PATCH">
                                        			<div class="form-group">
																									 		<label class="col-sm-3 control-label">Name</label>
																									 <div class="col-sm-6">
																											 <input type="text" name="name" id="name" class="form-control input-sm" value="{{$institution->name}}">
																									 </div>
																							 </div>


															<!--<div class="form-group">
																		<label class="col-sm-3 control-label">Disabled input</label>
																		<div class="col-sm-6">
																				<input type="text" class="form-control" id="" disabled="disabled" placeholder="Disabled input ...">
																		</div>
																</div>
																<div class="form-group">
																		<label class="col-sm-3 control-label">Popover input</label>
																		<div class="col-sm-6">
																				<input type="text" class="form-control popover-button-default" placeholder="Input focus trigger popover" data-content="Popover content from &lt;b&gt;data-content&lt;/b&gt; attribute 3" title="Top popover" data-trigger="focus" data-placement="top">
																		</div>
																</div>-->

                                        <div class="row">
																					<div class="col-xs-2 col-sm-2 col-md-2">
																							<input type="submit"  value="Actualizar" class="btn btn-success btn-block">
																							<!--<a href="{{ route('institutions.index') }}" class="btn btn-info btn-block" >Atrás</a> -->
																						</div>

																						<div class="col-xs-2 col-sm-2 col-md-2">
                                                <a href="{{ route('institutions.index') }}" class="btn btn-danger btn-block">@lang('buttons.cancel')</a>
                                            </div>
                                        </div>
                                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="panel" id="panel">
                            <div class="panel-body">



                            </div>
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

@endsection
