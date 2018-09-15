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
															<h3 class="panel-title">@lang('text.add') @lang('titles.companies')</h3>
														</div>
                            <div class="panel-body">
                                <div class="example-box-wrapper">
                                    <form class="form-horizontal bordered-row" method="POST" action="{{ route('companies.store') }}" role="form">

                                    <!--FIELDS-->

                                    <div class="form-group">
                                       <label class="col-sm-3 control-label">@lang('fields.name')</label>
                                       <div class="col-sm-6">
                                            <input type="text" name ="name" id="name" class="form-control popover-button-default" placeholder="@lang('fields.name')">
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label class="col-sm-3 control-label">@lang('fields.rnc')</label>
                                       <div class="col-sm-6">
                                           <input type="text" name ="rnc" id="rnc" class="form-control popover-button-default" placeholder="@lang('fields.rnc')">
                                       </div>
                                   </div>

                                   <div class="form-group">
                                       <label class="col-sm-3 control-label">@lang('fields.phone')</label>
                                       <div class="col-sm-6">
                                           <input type="text" name ="phone" id="phone" class="form-control popover-button-default" placeholder="@lang('fields.phone')">
                                       </div>
                                   </div>

                                   <div class="form-group">
                                       <label class="col-sm-3 control-label">@lang('fields.phone2')</label>
                                       <div class="col-sm-6">
                                           <input type="text" name ="phone2" id="phone2" class="form-control popover-button-default" placeholder="@lang('fields.phone2')">
                                       </div>
                                   </div>

                                   <div class="form-group">
                                       <label class="col-sm-3 control-label">@lang('fields.address')</label>
                                       <div class="col-sm-6">
                                          <input type="text" name ="address" id="address" class="form-control popover-button-default" placeholder="@lang('fields.address')">
                                       </div>
                                   </div>

                                   <div class="form-group">
                                       <label class="col-sm-3 control-label">@lang('fields.city')</label>
                                       <div class="col-sm-6">
                                           <input type="text" name ="city" id="city" class="form-control popover-button-default" placeholder="@lang('fields.city')">
                                       </div>
                                   </div>

                                   <div class="form-group">
                                       <label class="col-sm-3 control-label">@lang('fields.state')</label>
                                       <div class="col-sm-6">
                                           <input type="text" name ="state" id="state" class="form-control popover-button-default" placeholder="@lang('fields.state')">
                                       </div>
                                   </div>

                                   <div class="form-group">
                                       <label class="col-sm-3 control-label">@lang('fields.country')</label>
                                       <div class="col-sm-6">
                                           <input type="text" name ="country" id="country" class="form-control popover-button-default" placeholder="@lang('fields.country')">
                                       </div>
                                   </div>

                                   <div class="form-group">
                                       <label class="col-sm-3 control-label">@lang('fields.zipcode')</label>
                                       <div class="col-sm-6">
                                           <input type="text" name ="zipcode" id="zipcode" class="form-control popover-button-default" placeholder="@lang('fields.zipcode')">
                                       </div>
                                   </div>

                                   <div class="form-group">
                                       <label class="col-sm-3 control-label">@lang('fields.website')</label>
                                       <div class="col-sm-6">
                                           <input type="text" name ="website" id="website" class="form-control popover-button-default" placeholder="@lang('fields.website')">
                                       </div>
                                   </div>
                                    <!-- -->

                                        <div class="row">
                                            <div class="col-xs-2 col-sm-2 col-md-2">
                                                <input type="submit" value="@lang('buttons.save')" class="btn btn-success btn-block ">

                                            </div>
                                            <div class="col-xs-2 col-sm-2 col-md-2">
                                                <a href="{{ route('companies.index') }}" class="btn btn-danger btn-block">@lang('buttons.cancel')</a>
                                            </div>
                                        </div>
                                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="panel" id="panel">
                            <div class="panel-body">

																@include('company.table')

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
