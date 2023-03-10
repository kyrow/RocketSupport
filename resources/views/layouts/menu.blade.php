<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home.index') }}" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            
            </div>
            <div class="info">
             <a href="{{route('home.index')}}" class="d-block">{{env('APP_NAME')}}</a>
            </div>
            </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('support.index') }}" class="nav-link">
                        {{-- <i class="nav-icon fas fa-th"></i> --}}
                        <i class="nav-icon fab fa-accessible-icon"></i>
                        <p>
                            Поддержка
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('sites.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-door-open"></i>
                        <p>
                            Доступы
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('status.index') }}" class="nav-link">
                        <span id="iconStatus"><i class="nav-icon far fa-smile"></i></span>
                        <p>
                            Статус работы
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('tariff.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-business-time"></i>
                        <p>
                            Тарифы
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('custom.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-plus"></i>
                        <p>
                            Добавить свою базу
                        </p>
                    </a>
                </li>

                @if($customs_global->count() > 0)
                    @foreach ($customs_global as $c)
                        <li class="nav-item">
                            <a href="{{ route('data.index', $c->id) }}" class="nav-link">
                                <i class="nav-icon fa fa-database"></i>
                                <p>
                                    {{$c->name}}
                                </p>
                            </a>
                        </li>
                    @endforeach
                @endif
            

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
