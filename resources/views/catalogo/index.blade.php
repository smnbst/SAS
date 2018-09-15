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

<script>

//DELETE
function getConfirmation(p_id){

  var token = $('#_token').val();
  var url = "{{ route('companies.destroy', ':p_id') }}";
      url = url.replace(':p_id', p_id);

  swal({
      title: "@lang('text.confirm')",
      text: "@lang('text.delete')",
      icon: "warning",
      buttons: [
        "@lang('text.no')",
         "@lang('text.yes')",
      ],
      dangerMode: true,
    }).then(function(isConfirm) {
      if (isConfirm) {
        swal({
          title: "@lang('text.confirm')",
          text: "@lang('text.delete_s')",
          icon: 'success'
        }).then(function() {

                    $.ajax({
                        url: url,
                        data: { id: p_id,
                                _method: 'DELETE'
                              },
                        type: "POST",
                        headers: {'X-CSRF-TOKEN': token},
                        dataType : 'html',
                        //success: function (data) {
                        success: function (data) {
                          console.log(data);
                        var result = $('<div />').append(data).find('#panel').html();
                        $('#panel').html(result);

                        }
                    });


         });
      } else {
        swal("@lang('text.cancel')", "@lang('text.cancel_o')", "error");
      }
    });
	}


</script>
@endsection
