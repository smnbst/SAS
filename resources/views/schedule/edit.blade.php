@extends('layouts.layout') @section('content')

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

													<div class="panel panel-default" id="screen">
														<div class="panel-heading">
															<h3 class="panel-title">@lang('text.edit') @lang('titles.schedule')</h3>
														</div>
                            <div class="panel-body">
                                <div class="example-box-wrapper" >
                                    <form class="form-horizontal bordered-row" method="POST" action="{{ route('schedules.update', $schedule->id) }}" role="form">
                                         <input name="_method" type="hidden" value="PATCH">

                                    <!--FIELDS-->

                                    <div class="form-group">
                                         <label class="col-sm-3 control-label">@lang('fields.days')</label>
                                         <div class="col-sm-6">
                                             <div class="row">
                                                 <div class="col-md-6">
                                                     <div class="checkbox checkbox-primary">
                                                         <label>
                                                             <input type="checkbox" id="monday" name="days" class="custom-checkbox" onclick="getCheck('monday')">@lang('labels.monday')</label>
                                                     </div>
                                                     <div class="checkbox checkbox-success">
                                                         <label>
                                                             <input type="checkbox" id="tuesday" name="days"  class="custom-checkbox" onclick="getCheck('tuesday')">@lang('labels.tuesday')</label>
                                                     </div>
                                                     <div class="checkbox checkbox-danger">
                                                         <label>
                                                             <input type="checkbox" id="wednesday" name="days"  class="custom-checkbox" onclick="getCheck('wednesday')">@lang('labels.wednesday')</label>
                                                     </div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <div class="checkbox checkbox-warning">
                                                         <label>
                                                             <input type="checkbox" id="thursday" name="days" class="custom-checkbox" onclick="getCheck('thursday')"> @lang('labels.thursday')</label>
                                                     </div>
                                                     <div class="checkbox checkbox-info">
                                                         <label>
                                                             <input type="checkbox" id="friday" name="days" class="custom-checkbox" onclick="getCheck('friday')"> @lang('labels.friday')</label>
                                                     </div>
                                                     <div class="checkbox checkbox-info">
                                                         <label>
                                                             <input type="checkbox" id="saturday" name="days" class="custom-checkbox" onclick="getCheck('saturday')"> @lang('labels.saturday')</label>
                                                     </div>
                                                     <div class="checkbox checkbox-info">
                                                         <label>
                                                             <input type="checkbox" id="sunday" name="days" class="custom-checkbox" onclick="getCheck('sunday')"> @lang('labels.sunday')</label>
                                                     </div>

                                                 </div>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="form-group">
                                         <label for="" class="col-sm-4 control-label">@lang('labels.time')</label>
                                          <div class="row">
                                             <div class="col-sm-2">
                                                 <div class="bootstrap-timepicker dropdown">
                                                     <input class="timepicker-example form-control" name="time" id="time1" type="text" value="{{$schedule->time}}">
                                                 </div>
                                             </div>
                                             <div class="col-sm-2">
                                                 <div class="bootstrap-timepicker dropdown">
                                                     <input class="timepicker-example form-control" name="time" id="time2" type="text" value="{{$schedule->time}}">
                                                 </div>
                                             </div>
                                       </div>
                                     </div>

                                    <!-- -->

                                        <div class="row">
                                            <div class="col-xs-2 col-sm-2 col-md-2">
                                                <input type="submit" value="@lang('buttons.save')" class="btn btn-success btn-block " onclick="updateSchedule({{$schedule->id}})">

                                            </div>
                                            <div class="col-xs-2 col-sm-2 col-md-2">
                                                <a href="{{ route('schedules.index') }}" class="btn btn-danger btn-block">@lang('buttons.cancel')</a>
                                            </div>
                                        </div>
                                        <input type="hidden" name="_token" id="_token" value="{{ Session::token() }}">
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

<script>


//EDIT

function getCheck(id){

  if($('#'+id).val() == 'on'){

     switch (id){
       case 'monday':
          $('#'+id).val('M');
       break;
       case 'tuesday':
          $('#'+id).val('T');
       break;
       case 'wednesday':
          $('#'+id).val('W');
       break;
       case 'thursday':
          $('#'+id).val('T');
       break;
       case 'friday':
          $('#'+id).val('F');
       break;
       case 'saturday':
          $('#'+id).val('S');
       break;
       case 'sunday':
          $('#'+id).val('S');
       break;
    }

  }else{
    $('#'+id).val('on');
  }

}


function updateSchedule(p_id){

  var url = "{{ route('schedules.update', ':p_id') }}";
      url = url.replace(':p_id', p_id);

  var token = $('#_token').val();
  var mon = $('#monday').val();
  var tue = $('#tuesday').val();
  var wed = $('#wednesday').val();
  var thu = $('#thursday').val();
  var fri = $('#friday').val();
  var sat = $('#saturday').val();
  var sun = $('#sunday').val();
  var time1 = $('#time1').val();
  var time2 = $('#time2').val();

  var time = time1+'-'+time2;

  var days = '';

  if(mon != 'on'){
    days = mon;
  }

  if(tue != 'on' && days != ''){
    days = days+'-'+tue;
  }else if(tue != 'on'){
     days = tue;
  }

  if(wed != 'on' && days != ''){
     days = days+'-'+wed;
  }else if(wed != 'on'){
     days = wed;
  }

  if(thu != 'on' && days != ''){
     days = days+'-'+thu;
  }else if(thu != 'on'){
     days = thu;
  }
  if(fri != 'on' && days != ''){
     days = days+'-'+fri;
  }else if(fri != 'on'){
     days = fri;
  }

  if(sat != 'on' && days != ''){
     days = days+'-'+sat;

  }else if(sat != 'on'){
     days = sat;
  }

  if(sun != 'on' && days != ''){
     days = days+'-'+sun;
  }else if(sun != 'on'){
     days = sun;
  }

/*
//Esto funciona
        $.ajax({
            url: url,
            data: {
                    days: days,
                    time: time,
                    _method: 'PATCH'

                  },
            type: 'POST',
            headers: {'X-CSRF-TOKEN': token},
            dataType : 'html',
            success: function (data) {
              console.log(data);
            var result = $('<div />').append(data).find('#panel').html();
            $('#panel').html(result);

            }
        });
*/
	}

</script>
@endsection
