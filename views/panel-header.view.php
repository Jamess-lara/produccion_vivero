<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav align-items-center">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <span class="vivero-status-badge">
                    <i class="fas fa-leaf"></i> Sistema Vivero Activo
                </span>
            </li>
        </ul>


        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->

            <a class="nav-link" title="Editar Perfil de Usuario" href="panel.php?modulo=perfilUsuario">
                <i class="far fa-user-circle fa-lg text-success"></i>
            </a>
            <a class="nav-link text-danger" href="panel.php?modulo=cerrar" title="Cerrar sesión">
                <i class="fas fa-power-off"></i>
            </a>

        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="panel.php" class="brand-link">
            <i class="fas fa-seedling brand-icon"></i>
            <span class="brand-text">Vivero de Plantas</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
                <div class="image">
                    <img src="dist/img/usuario.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="panel.php?modulo=perfilUsuario" class="d-block font-weight-bold text-light"><?php echo $_SESSION['nombre']; ?></a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                            <i class="fas fa-leaf nav-icon"></i>
                            <p>
                                Menú Vivero
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="panel.php?modulo=inicio" class="nav-link <?php echo ($modulo == "inicio" || $modulo == "") ? " active " : " "; ?>">
                                    <i class="fas fa-chart-line nav-icon"></i>
                                    <p>Inicio</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="panel.php?modulo=usuarios" class="nav-link <?php echo ($modulo == "usuarios") ? " active " : " "; ?>">
                                    <i class="fas fa-users nav-icon"></i>
                                    <p>Usuarios</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="panel.php?modulo=proveedores" class="nav-link <?php echo ($modulo == "proveedores") ? " active " : " "; ?>">
                                    <i class="fas fa-truck-loading nav-icon"></i>
                                    <p>Proveedores</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="panel.php?modulo=insumos" class="nav-link <?php echo ($modulo == "insumos") ? " active " : " "; ?>">
                                    <i class="fas fa-seedling nav-icon"></i>
                                    <p>Insumos</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="panel.php?modulo=compras" class="nav-link <?php echo ($modulo == "compras" || $modulo == "generar-compra") ? " active " : " "; ?>">
                                    <i class="fas fa-shopping-basket nav-icon"></i>
                                    <p>Compras</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
</div>