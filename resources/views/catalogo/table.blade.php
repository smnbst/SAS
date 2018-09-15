<h3 class="title-hero">@lang('titles.companies')</h3>

<div class="example-box-wrapper">
  <div class="btn-group">
    <a href="{{ route('companies.create') }}" class="btn btn-success" ><i class="glyph-icon icon-file"></i> @lang('buttons.add')</a>
  </div>
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="datatable-example">
        <thead>
          <tr>
            <th>@lang('headers.id')</th>
            <th>@lang('headers.name')</th>
            <th>@lang('headers.rnc')</th>
            <th>@lang('headers.phone')</th>
          <!--
            <th>@lang('headers.phone2')</th>
            <th>@lang('headers.address')</th>
            <th>@lang('headers.city')</th>
            <th>@lang('headers.state')</th>
            <th>@lang('headers.country')</th>
            <th>@lang('headers.zipcode')</th>
            <th>@lang('headers.website')</th> -->


            <th>@lang('headers.actions')</th>
          </tr>
        </thead>
        <tbody>

          @if($companies->count())
          @foreach($companies as $company)
          <tr>
            <td>{{$company->id}}</td>
            <td>{{$company->name}}</td>
            <td>{{$company->rnc}}</td>
            <td>{{$company->phone}}</td>

          <!--  <td>{{$company->phone2}}</td>
            <td>{{$company->address}}</td>
            <td>{{$company->state}}</td>
            <td>{{$company->country}}</td>
            <td>{{$company->zipcode}}</td>
            <td>{{$company->website}}</td> -->

            <td>
                <a class="btn btn-success btn-xs" href="{{action('CompanyController@show', $company->id)}}"><i class="glyph-icon icon-eye" aria-hidden="true"></i></a>
                <a class="btn btn-info btn-xs" href="{{action('CompanyController@edit', $company->id)}}" ><i class="glyph-icon icon-pencil-square-o" aria-hidden="true"></i></a>
               <input name="_method" type="hidden" value="DELETE">
               <button class="btn btn-danger btn-xs" type="submit" onclick="getConfirmation({{$company->id}})"><i class="glyph-icon icon-trash-o"></i></button>
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
