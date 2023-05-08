<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.Style')
    </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include('includes.sidebar')
        <!-- top navigation -->
        @include('includes.topnav')
        <!-- /top navigation -->

        <!-- page content -->
         @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    @include('includes.script')
  </body>
</html>
