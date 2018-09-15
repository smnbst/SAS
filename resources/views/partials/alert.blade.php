@if(session('success'))
    <div class="alert alert-success">
      <div class="bg-green alert-icon"><i class="glyph-icon icon-check"></i></div>
         <div class="alert-content">
             <h4 class="alert-title">@lang('text.information')</h4>
             <p>{{session('success')}}</p>
         </div>
     </div>
@endif
