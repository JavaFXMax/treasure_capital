<div class="main_wrapper">
@include('includes.head')
@include('includes.navt')
@include('includes.nav_teller')

<div id="page-wrapper">
            <div class="row" style="margin-top: -8%;">
                <div class="col-lg-12">
                    @yield('content')
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
@include('includes.footer')
</div>