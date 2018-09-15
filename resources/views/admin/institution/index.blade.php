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




    <div class="panel" id="panel">
        <div class="panel-body">
            <h3 class="title-hero">@lang('titles.institutions')</h3>

            <div class="example-box-wrapper">
              <div class="btn-group">
                <a href="{{ route('institutions.create') }}" class="btn btn-success" ><i class="glyph-icon icon-file"></i> @lang('buttons.add')</a>
              </div>
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="datatable-example">
                    <thead>
                      <tr>
                        <th>@lang('headers.id')</th>
                        <th>@lang('headers.name')</th>
                        <th>@lang('headers.edit')</th>
                        <th>@lang('headers.delete')</th>
                      </tr>
                    </thead>
                    <tbody>

                      @if($institutions->count())
                      @foreach($institutions as $institution)
                      <tr>
                        <td>{{$institution->id}}</td>
                        <td>{{$institution->name}}</td>

                        <td><a class="btn btn-info btn-xs" href="{{action('InstitutionController@edit', $institution->id)}}" ><i class="glyph-icon icon-pencil-square-o" aria-hidden="true"></i></a></td>

                        <td>
                          <!--<form action="{{action('InstitutionController@destroy', $institution->id)}}" method="post">-->

                           <input name="_method" type="hidden" value="DELETE">
                           <button class="btn btn-danger btn-xs" type="submit" onclick="getConfirmation({{$institution->id}})"><i class="glyph-icon icon-trash-o"></i></button>
                           <input type="hidden" name="_token" id="_token" value="{{ Session::token() }}">
                         <!--</form> -->
                         </td>
                       </tr>
                       @endforeach
                       @else
                       <tr>
                        <td colspan="8">No hay registro !!</td>
                      </tr>
                      @endif

                    </tbody>
                </table>
            </div>


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
