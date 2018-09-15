<script type="text/javascript" src="{{asset('assets/widgets/datatable/table.js') }}"></script>
<h3 class="title-hero">@lang('titles.institutions')</h3>
<div class="example-box-wrapper">
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

                <td><a class="btn btn-info btn-xs" href="#" onclick="edit({{ $institution->id }})"><i class="glyph-icon icon-pencil-square-o" aria-hidden="true"></i></a></td>
                <td>
                    <!--<form action="{{action('InstitutionController@destroy', $institution->id)}}" method="post">-->
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger btn-xs" type="submit" id="mybtn" onclick="getConfirmation({{$institution->id}})"><i class="glyph-icon icon-trash-o"></i></button>
                    <input type="hidden" name="_token" id="_token" value="{{ Session::token() }}">
                    <!--</form> -->
                </td>
            </tr>
            @endforeach @else
            <tr>
                <td colspan="8">No hay registro !!</td>
            </tr>
            @endif

        </tbody>
    </table>
</div>


<script>

//DELETE
function getConfirmation(p_id){

  var token = $('#_token').val();
  var url = "{{ route('institutions.destroy', ':p_id') }}";
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
