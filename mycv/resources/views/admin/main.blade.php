<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.elements.head')
</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                @include('admin.elements.sidebar_title')
                @include('admin.elements.sidebar_menu')
            </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
            @include('admin.elements.top_nav')
        </div>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
            @yield('content')
            <!--end-box-pagination-->
        </div>
        <!-- /page content -->
        <!-- footer -->
        <footer>
            <div class="pull-right">
                Học lập trình online tại <a href="https://colorlib.com/">ZendVN.com</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer -->
    </div>
</div>
    @include('admin.elements.script')
</body>
</html>