<aside class="main-sidebar">
            <!-- sidebar-->
            <section class="sidebar">

                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">
                    <li>
                        <a href="{{url('/')}}">
                            <i class="fa fa-institution"></i> <span>Inicio</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('usuarios.index')}}">
                            <i class="fa fa-user"></i>
                            <span>Usuarios</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('catalogo.index')}}">
                            <i class="fa fa-book"></i>
                            <span>Catálogos</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('marcas.index')}}">
                            <i class="fa fa-copyright"></i> <span>Marcas</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('etiquetas.index')}}">
                            <i class="fa fa-bookmark"></i>
                            <span>Etiquetas</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('idiomas.index')}}">
                            <i class="fa fa-language"></i>
                            <span>Idiomas</span>
                        </a>
                    </li>

                    <li class="nav-devider"></li>

                    <li>
                        <a href="{{route('usuarioschips.index')}}">
                            <i class="fa fa-id-card"></i>
                            <span>Usuarios Chips</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('chips.index')}}">
                            <i class="fa fa-credit-card"></i>
                            <span>Chips</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('ladas.index')}}">
                            <i class="fa fa-globe"></i>
                            <span>LADAS</span>
                        </a>
                    </li>
                </ul>
            </section>
        </aside>