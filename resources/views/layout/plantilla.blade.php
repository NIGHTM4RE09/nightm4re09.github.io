<!DOCTYPE html>
<html lang="en">
@include('layout.head')
<body class="hold-transition skin-black dark-sidebar sidebar-mini">
    <div class="wrapper">
        @include('layout.encabezado')
        @include('layout.menu')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    @yield('h1')
                    <small>@yield('small')</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">@yield('li1')</a></li>
                    <li class="breadcrumb-item active">@yield('li2')</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                @yield('contenido')
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapp-->

        <!--Pie de página-->
        <footer class="main-footer">
            &copy; 2021 <a href="http://ecocel.mx/index.html">Ecocel Tu mejor compañero</a>. Todos los derechos
            reservados.
        </footer>
    </div>
    <!-- ./wrapper -->
    @include('layout.script')
</body>

</html>
