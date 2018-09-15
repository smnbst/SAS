<script type="text/javascript" src="{{asset('assets/widgets/datatable/table.js') }}"></script>
<h3 class="title-hero">@lang('titles.currency')</h3>
<div class="example-box-wrapper">
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="datatable-example">
        <thead>
            <tr>
               <th>@lang('headers.id')</th>
               <th>@lang('headers.name')</th>
               <th>@lang('headers.indicator')</th>
               <th>@lang('headers.actions')</th>

            </tr>
        </thead>
        <tbody>

          @if($currencies->count())
              @foreach($currencies as $currency)
              <tr>
                <td>{{$currency->id}}</td>
                <td>{{$currency->currency}}</td>
                <td>{{$currency->indicator}}</td>

                <td>
                  <a class="btn btn-success btn-xs" href="{{action('CurrencyController@show', $currency->id)}}" ><i class="glyph-icon icon-eye" aria-hidden="true"></i></a>
                  <a class="btn btn-info btn-xs" href="{{action('CurrencyController@edit', $currency->id)}}" ><i class="glyph-icon icon-pencil-square-o" aria-hidden="true"></i></a>

                   <input name="_method" type="hidden" value="DELETE">
                   <button class="btn btn-danger btn-xs" type="submit" onClick="getConfirmation({{$currency->id}})"><i class="glyph-icon icon-trash-o"></i></button>
                   <input type="hidden" name="_token" id="_token" value="{{ Session::token() }}">
                 </form>
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
//getConfirmation(51);

function getConfirmation(p_id){

  var token = $('#_token').val();
  var url = "{{ route('currencies.destroy', ':p_id') }}";
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

        //Delete Currency
                    $.ajax({
                        url: url,
                        data: { id: p_id,
                                _method: 'DELETE'
                              },
                        type: "POST",
                        headers: {'X-CSRF-TOKEN': token},
                        dataType : 'html',
                        success: function (data) {
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
