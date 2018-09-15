<div class="panel mrg20T">
    <div class="panel-body">
        <h3 class="title-hero">Weekly Sales</h3>
        <div class="example-box-wrapper">
             <div id="data-example-1" class="mrg20B" style="width: 100%; height: 300px"></div>

        </div>
    </div>
</div>

<div class="panel-layout">
    <div class="panel-box col-xs-6">
        <div class="panel-content bg-white">

          <!-- SMN-->

          <form method="POST" action="{{ route('currencies.store') }}"  role="form">

            <div class="row">

            <div class="col-xs-8 col-sm-4 col-md-4">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Options</label>
                </div>


              </div>
            </div>

          <div class="col-xs-4 col-sm-4 col-md-4">
              <div class="input-group-prepend">
                <div class="input-group-text label-yellow">
                  <input type="checkbox" id="indicator" name="indicator"> @lang('labels.indicator')
                </div>
              </div>
          </div>

          </div>

          <div class="row">

          <div class="col-xs-2 col-sm-2 col-md-2">
            <input type="submit"  value="@lang('buttons.save')" class="btn btn-success btn-block">
          </div>
          <div class="col-xs-2 col-sm-2 col-md-2">
            <a href="{{ route('currencies.index') }}" class="btn btn-danger btn-block" >@lang('buttons.cancel')</a>
          </div>

          </div>
              <input type="hidden" name="_token" value="{{ Session::token() }}">
          </form>



          <!-- -->




        </div>
    </div>
</div>

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">Basic</h3>
        <div class="example-box-wrapper">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="datatable-example">
                <thead>
                    <tr>
                       <th>@lang('headers.id')</th>
                       <th>@lang('headers.name')</th>
                       <th>@lang('headers.indicator')</th>
                       <th>@lang('headers.edit')</th>
                       <th>@lang('headers.delete')</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">Alternate carousel</h3>
        <div class="example-box-wrapper">
            <div class="owl-carousel-4 slider-wrapper inverse arrows-outside carousel-wrapper">
                <div>
                    <div class="thumbnail-box-wrapper mrg5A">
                        <div class="thumbnail-box">
                            <a class="thumb-link" href="#" title=""></a>
                            <div class="thumb-content">
                                <div class="center-vertical">
                                    <div class="center-content"><i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-camera"></i></div>
                                </div>
                            </div>
                            <div class="thumb-overlay bg-black"></div><img src="{{asset('assets/image-resources/stock-images/img-17.jpg') }}" alt=""></div>
                        <div class="thumb-pane">
                            <h3 class="thumb-heading animated rollIn"><a href="#" title="">Working in the morning</a> <small>12 March 2015</small></h3></div>
                    </div>
                </div>
                <div>
                    <div class="thumbnail-box-wrapper mrg5A">
                        <div class="thumbnail-box">
                            <a class="thumb-link" href="#" title=""></a>
                            <div class="thumb-content">
                                <div class="center-vertical">
                                    <div class="center-content"><i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-camera"></i></div>
                                </div>
                            </div>
                            <div class="thumb-overlay bg-black"></div><img src="{{asset('assets/image-resources/stock-images/img-18.jpg') }}" alt=""></div>
                        <div class="thumb-pane">
                            <h3 class="thumb-heading animated rollIn"><a href="#" title="">Working in the morning</a> <small>12 March 2015</small></h3></div>
                    </div>
                </div>
                <div>
                    <div class="thumbnail-box-wrapper mrg5A">
                        <div class="thumbnail-box">
                            <a class="thumb-link" href="#" title=""></a>
                            <div class="thumb-content">
                                <div class="center-vertical">
                                    <div class="center-content"><i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-camera"></i></div>
                                </div>
                            </div>
                            <div class="thumb-overlay bg-black"></div><img src="{{asset('assets/image-resources/stock-images/img-19.jpg') }}" alt=""></div>
                        <div class="thumb-pane">
                            <h3 class="thumb-heading animated rollIn"><a href="#" title="">Working in the morning</a> <small>12 March 2015</small></h3></div>
                    </div>
                </div>
                <div>
                    <div class="thumbnail-box-wrapper mrg5A">
                        <div class="thumbnail-box">
                            <a class="thumb-link" href="#" title=""></a>
                            <div class="thumb-content">
                                <div class="center-vertical">
                                    <div class="center-content"><i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-camera"></i></div>
                                </div>
                            </div>
                            <div class="thumb-overlay bg-black"></div><img src="{{asset('assets/image-resources/stock-images/img-20.jpg') }}" alt=""></div>
                        <div class="thumb-pane">
                            <h3 class="thumb-heading animated rollIn"><a href="#" title="">Working in the morning</a> <small>12 March 2015</small></h3></div>
                    </div>
                </div>
                <div>
                    <div class="thumbnail-box-wrapper mrg5A">
                        <div class="thumbnail-box">
                            <a class="thumb-link" href="#" title=""></a>
                            <div class="thumb-content">
                                <div class="center-vertical">
                                    <div class="center-content"><i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-camera"></i></div>
                                </div>
                            </div>
                            <div class="thumb-overlay bg-black"></div><img src="{{asset('assets/image-resources/stock-images/img-23.jpg') }}" alt=""></div>
                        <div class="thumb-pane">
                            <h3 class="thumb-heading animated rollIn"><a href="#" title="">Working in the morning</a> <small>12 March 2015</small></h3></div>
                    </div>
                </div>
                <div>
                    <div class="thumbnail-box-wrapper mrg5A">
                        <div class="thumbnail-box">
                            <a class="thumb-link" href="#" title=""></a>
                            <div class="thumb-content">
                                <div class="center-vertical">
                                    <div class="center-content"><i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-camera"></i></div>
                                </div>
                            </div>
                            <div class="thumb-overlay bg-black"></div><img src="{{asset('assets/image-resources/stock-images/img-24.jpg') }}" alt=""></div>
                        <div class="thumb-pane">
                            <h3 class="thumb-heading animated rollIn"><a href="#" title="">Working in the morning</a> <small>12 March 2015</small></h3></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
