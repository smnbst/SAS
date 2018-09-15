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
                    @include('partials.panels')

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
