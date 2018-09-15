@extends('layouts.layout')
@extends('partials.menu')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>@lang('titles.branches')</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('branches.create') }}" class="btn btn-success" >@lang('buttons.add')</a>
            </div>
          </div>
          <div class="table-container">

            <table id="mytable" class="table table-bordred table-striped">
             <thead>

               <th>@lang('headers.rnc')</th>
               <th>@lang('headers.name')</th>
               <th>@lang('headers.address')</th>
               <th>@lang('headers.city')</th>
               <th>@lang('headers.state')</th>
               <th>@lang('headers.zipcode')</th>
               <th>@lang('headers.phone')</th>
               <th>@lang('headers.phone2')</th>

               <!--th>@lang('headers.edit')</th -->
                <th>Actions</th>


             </thead>
             <tbody>
              @if($branches->count())
              @foreach($branches as $branch)
              <tr>

                <td>{{$branch->rnc}}</td>
                <td>{{$branch->name}}</td>
                <td>{{$branch->address}}</td>
                <td>{{$branch->city}}</td>
                <td>{{$branch->state}}</td>
                <td>{{$branch->zipcode}}</td>
                <td>{{$branch->phone}}</td>
                <td>{{$branch->phone2}}</td>

              <form action="{{action('BranchController@destroy', $branch->id)}}" method="post">
                 {{csrf_field()}}
                <td><a class="btn btn-primary btn-xs" href="{{action('BranchController@edit', $branch->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a>
                   <input name="_method" type="hidden" value="DELETE">
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>

                </td>
              </form>


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
      {{ $branches->links() }}
    </div>
  </div>
</section>

@endsection
