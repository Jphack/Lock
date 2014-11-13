<?php 
session_start();
$_SESSION['username'];
if (!isset($_SESSION['username'])) 
{
  header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">

    <title>Timoti</title>
    <!--CSS BOOTSTRAP-->
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet">
    <!--CSS FONT-AWESOME-->
    <link href="../Assets/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--CSS DE LA PAGINA-->
    <link href="../Assets/css/style.css" rel="stylesheet">
    <link href="../Assets/css/demo.css" rel="stylesheet">
    <link href="../Assets/css/timoti.css" rel="stylesheet">
    <!--CSS DATATABLES-->
    <link href="../Assets/css/jquery.dataTables.css" rel="stylesheet">
    <!--CSS SELECT 2-->
    <link href="../Assets/css/select2.css" rel="stylesheet">
    <!-- css parsley -->
    <link href="../Assets/css/parsley.css" rel="stylesheet">
    <script src="../Assets/js/jquery.min.js"></script>
</head>
<!--BODY-->
<body class=" pace-done">
    <!-- INICIO WRAPPER ESTO ES PARA EL RESPONSIVE DE LA PAGINA-->
    <div id="wrapper">
        <!-- INICIO DEL NAV -->
        <nav class="navbar-top navbar-fixed-top"  role="navigation">
            <!-- INICIO CABECERA LOGO TIMOTI-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".sidebar-collapse">
                    <i class="fa fa-bars"></i> Menu
                </button>
                <div class="navbar-brand">
                    <div class="cabecera_logo_timoti">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a href="../Controller/ctringresoadmin.php" class="navbar-brand cabecera_logo_admin">
                                <img src="../Assets/img/pagina/loguito.jpg">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIN CABECERA LOGO TIMOTI -->

            <!-- INICIO NAV-TOP -->
            <div class="nav-top">
                <!-- INICIO NAV IZQUIERDO (ESTO ES MAS QUE TODO PARA QUE FINCIONE EL NAV IZQUIERDO) -->
                <ul class="nav navbar-left">
                    <li class="tooltip-sidebar-toggle">
                        <a href="#" id="sidebar-toggle" data-toggle="tooltip" data-placement="right" title="Menu Abrir/Cerrar">
                            <i class="fa fa-navicon"></i>
                        </a>
                    </li>
                </ul>
                <!-- FIN NAV IZQUIERDO -->

                <!-- INICIO MENSAJES/ALERTAS/INFORMES/USUARIO ACCIONES DROPDOWNS -->
                <ul class="nav navbar-right">
                    <!-- INCIO ALERTAS DROPDOWN -->
                    <li class="dropdown">
                        <a href="#" class="alerts-link dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell"></i>
                            <span class="number">9</span>
                        </a>
                        <ul class="dropdown-menu dropdown-scroll dropdown-alerts">
                            <li class="dropdown-header">
                                <i class="fa fa-bell"></i> Pedidos Recientes
                            </li>
                            <div>
                                <li>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="../Controller/ctrpedidos.php">
                                                Nuevos Pedidos
                                                <span class="badge orange pull-right">9</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </div>
                        </ul>
                    </li>
                    <!-- FIN ALERTAS DROPDOWN -->

                    <!-- INICIO USUARIO DROPDOWN -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <a href="../Controller/ctrperfil.php">
                                   <i class="fa fa-user"></i>
                                   Mis datos
                               </a>
                           </li>
                           <li>
                            <a class="logout_open" href="../Controller/ctrsalir.php" data-popup-ordinal="0" id="open_46040477">
                                <i class="fa fa-sign-out"></i>
                                Cerrar sessión                                
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- FIN USUARIO DROPDOWN -->
            </ul>
            <!-- FIN MENSAJES/ALERTAS/INFORMES/USUARIO ACTIONS DROPDOWNS -->
        </div>
        <!-- INICIO NAV-TOP -->
    </nav>
    <!-- FIN DEL NAV -->

    <!-- INICIO NAV NAVBAR-SIDE NAVIGATION -->
    <nav class="navbar-side" role="navigation">
        <div class="navbar-collapse sidebar-collapse collapse">
            <ul id="side" class="nav navbar-nav side-nav">
                <!-- INICIO -->
                <li>
                    <a href="../Controller/ctringresoadmin.php">
                        <i class="fa fa-home"></i> Inicio
                    </a>
                </li>
                <!-- FIN INICIO-->
                <!-- PROVEEDORES -->
                <li>
                    <a href="../Controller/ctrproveedor.php">
                        <i class="fa fa-truck"></i> Proveedor
                    </a>
                </li>
                <!-- FIN PROVEEDORES -->
                <!-- INICIO PRODUCTO -->
                <li>
                    <a href="../Controller/ctrproducto.php">
                        <i class="fa fa-file-text-o"></i> Producto
                    </a>
                </li>
                <!-- FIN PRODUCTO -->
                <!-- CLIENTE -->
                <li>
                    <a href="../Controller/ctrcliente.php">
                        <i class="fa fa-users"></i> Cliente
                    </a>
                </li>
                <!-- FIN CLIENTE -->
                <!-- PEDIDO -->
                <li>
                    <a href="../Controller/ctrpedido.php">
                        <i class="fa fa-bell"></i> Pedido
                    </a>
                </li>
                <!-- FIN PEDIDO -->
                <!-- MOVIMIENTO -->
                <li class="panel">
                    <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#ui-elements">
                        <i class="fa fa-folder"></i> Movimiento <i class="fa fa-caret-down"></i>
                        <ul class="collapse nav" id="ui-elements">
                            <!-- COMPRA -->
                            <li>
                                <a href="../Controller/ctrcompras.php">
                                    <i class="fa fa-angle-double-right"></i> Compra
                                </a>
                            </li>
                            <!-- FIN COMPRA -->
                            <!-- VENTA -->
                            <li>
                                <a href="../Controller/ctrventas.php">
                                    <i class="fa fa-angle-double-right"></i> Venta
                                </a>
                            </li>
                            <!-- FIN VENTA -->
                            <!-- DESCARTE -->
                            <li>
                                <a href="../Controller/ctrdescartes.php">
                                    <i class="fa fa-angle-double-right"></i> Descarte
                                </a>
                            </li>
                            <!-- FIN DESCARTE -->
                            <!-- CAMBIO -->
                            <li>
                                <a href="../Controller/ctrcambios.php">
                                    <i class="fa fa-angle-double-right"></i> Cambio
                                </a>
                            </li>
                            <!-- FIN CAMBIO -->
                        </ul>
                    </li>
                    <!-- FIN MOVIMIENTO -->
                    <!-- FIN PAGES DROPDOWN -->
                </ul>
            </div>
        </nav>
        <!-- FIN NAV NAVBAR-SIDE NAVIGATION -->

        <!-- INICIO DEL CONTENIDO EDITABLE DE LA PAGINA (PARTE BLANCA A USAR)-->
        <div id="page-wrapper">
            <!-- INICIO PAGE-CONTENT -->
            <div class="page-content page-content-ease-in contenido_color">
                <?php include URLCONTROLLER ?>
            </div>
            <!-- FIN PAGE-CONTENT -->
        </div>
        <!-- FIN DEL CONTENIDO EDITABLE DE LA PAGINA (PARTE BLANCA A USAR) -->
    </div>
    <!-- FIN WRAPPER ESTO ES PARA EL RESPONSIVE DE LA PAGINA -->
    <!-- JS BOOTSTRAP -->
    <script src="../Assets/js/bootstrap.min.js"></script>
    <!-- JS MENU ABRIR/CERRAR -->
    <script src="../Assets/js/flex.js"></script>
    <!-- JS DATATABLES -->
    <script src="../Assets/js/jquery-1.11.0.js"></script>
    <script src="../Assets/js/jquery.dataTables.js"></script>
    <!-- JS SELECT 2 -->
    <script src="../Assets/js/select2.js"></script>
    <!-- js parsley -->
    <script src="../Assets/js/parsley.js"></script>
    <script src="../Assets/js/ajax.js"></script>
    <style type="text/css">
        /* imagen de productos*/
        .thumb {
            height: 100px;
            border: 1px solid #000;
            margin: 10px 5px 0 0;
        }
    </style>
    <!-- JS DATATABLES CODIGO -->
    <script>
        $(document).ready( function () {
            $('#cambio_consultar').DataTable();
            $('#cliente_consultar').DataTable();
            $('#compra_consultar').DataTable();
            $('#ventas_consultar').DataTable();
            $('#pedido_consultar').DataTable();
            $('#productos_consultar').DataTable();
            $('#proveedor_consultar').DataTable();
            $('#ventas_consultar').DataTable();

        } );
    </script>
    <!-- JS SELECT 2 CODIGO -->
    <script>
       $(document).ready(function() {
        $("#estado_consultar").select2();
        $("#producto_consultar").select2();
        $("#categoria_consultar").select2();
        $("#compañia_consultar").select2();
        $("#marca_consultar").select2();
        $("#subcategoria_consultar").select2();        
        
    });
   </script>
</body>
</html>