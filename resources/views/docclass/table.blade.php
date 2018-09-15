@include('partials.alert')
<script type="text/javascript" src="{{asset('assets/widgets/datatable/table.js') }}"></script>
<h3 class="title-hero">@lang('titles.docclass')</h3>
<div class="example-box-wrapper">
  <div class="btn-group">
    <a href="{{ route('docclasses.create') }}" class="btn btn-success" ><i class="glyph-icon icon-file"></i> @lang('buttons.add')</a>
  </div>
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="datatable-example">
        <thead>
          <tr>
            <th>@lang('headers.id')</th>
            <th>@lang('headers.docclass')</th>
            <th>@lang('headers.description')</th>
            <th>@lang('headers.actions')</th>
          </tr>
        </thead>
        <tbody>

          @if($docclasses->count())
          @foreach($docclasses as $docclass)
          <tr>
            <td>{{$docclass->id}}</td>
            <td>{{$docclass->docclass}}</td>
            <td>{{$docclass->description}}</td>

            <td>
                <a class="btn btn-success btn-xs" href="{{action('DocClassController@show', $docclass->id)}}"><i class="glyph-icon icon-eye" aria-hidden="true"></i> @lang('buttons.view')</a>
                <a class="btn btn-info btn-xs" href="{{action('DocClassController@edit', $docclass->id)}}" ><i class="glyph-icon icon-pencil-square-o" aria-hidden="true"></i> @lang('buttons.edit')</a>
               <input name="_method" type="hidden" value="DELETE">
               <button class="btn btn-danger btn-xs" type="submit" onclick="getConfirmation({{$docclass->id}})"><i class="glyph-icon icon-trash-o"></i> @lang('buttons.delete')</button>
               <input type="hidden" name="_token" id="_token" value="{{ Session::token() }}">

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

<script>

//DELETE
function getConfirmation(p_id){

  var token = $('#_token').val();
  var url = "{{ route('docclasses.destroy', ':p_id') }}";
      url = url.replace(':p_id', p_id);

      swal({
          title: "@lang('text.confirmation')",
          text: "@lang('text.question1')",
          icon: "warning",
          buttons: [
             "@lang('buttons.no')",
             "@lang('buttons.yes')",
          ],
          dangerMode: true,
        }).then(function(isConfirm) {
          if (isConfirm) {
            swal({
              title: "@lang('text.confirmation2')",
              text: "@lang('text.cancel_info2')",
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
          swal("@lang('text.title')", "@lang('text.cancel_info')", "error");
      }
    });
	}

</script>
