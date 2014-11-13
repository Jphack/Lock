        <div>
            <!-- INICIO TITULO DE LA PAGINA -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title titulo_pagina">
                     <h1>Inicio
                         <small>Contenido</small>
                     </h1>
                     <ol class="breadcrumb">
                        <li class="active"><a href="#top">Inicio</a></li>
                        <li><a href="#transacciones">Pedidos</a></li>
                    </ol>
                </div>
            </div><!-- FIN /.col-lg-12 -->
        </div><!-- FIN /.row -->
        <!-- FIN TITULO DE LA PAGINA -->

        <!-- INICIO DASHBOARD CIRCLE TILES -->
        <div  id="top" class="row">
            <!-- INICIO PROVEEDORES -->
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="../Controller/ctrproveedor.php">
                        <div class="circle-tile-heading purple">
                            <div class="circle-tile-number text-faded margin-top-circulos">
                                <i class="fa fa-truck"></i>
                            </div>
                        </div>
                    </a>
                    <div class="circle-tile-content purple">
                        <div class="circle-tile-description text-faded">
                            Proveedores
                        </div>
                        <div class="circle-tile-number text-faded">
                            <?php echo $cant_prove; ?>
                        </div>
                        <a href="../Controller/ctrproveedor.php" class="circle-tile-footer">Mas informacion</a>
                    </div>
                </div>
            </div>
            <!-- FIN PROVEEDORES -->
            <!-- INICIO PRODUCTOS -->
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="../Controller/ctrproducto.php">
                        <div class="circle-tile-heading red">
                            <div class="circle-tile-number text-faded margin-top-circulos">
                                <i class="fa fa-file-text-o"></i>
                            </div>
                        </div>
                    </a>
                    <div class="circle-tile-content red">
                        <div class="circle-tile-description text-faded">
                            Productos
                        </div>
                        <div class="circle-tile-number text-faded">
                            <?php echo $cant_produ; ?>
                        </div>
                        <a href="../Controller/crtproducto.php" class="circle-tile-footer">Mas informacion</i></a>
                    </div>
                </div>
            </div>
            <!-- FIN PRODUCTOS -->
            <!-- INICIO COMPRAS -->
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="../Controller/ctrcompras.php">
                        <div class="circle-tile-heading blue">
                            <div class="circle-tile-number text-faded margin-top-circulos">
                                <i class="fa fa-money"></i>
                            </div>
                        </div>
                    </a>
                    <div class="circle-tile-content blue">
                        <div class="circle-tile-description text-faded">
                            Compras
                        </div>
                        <div class="circle-tile-number text-faded">
                            0
                        </div>
                        <a href="../Controller/ctrcompras.php" class="circle-tile-footer">Mas informacion</a>
                    </div>
                </div>
            </div>
            <!-- FIN COMPRAS -->
            <!-- INICIO CLIENTE -->
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="../Controller/ctrcliente.php">
                        <div class="circle-tile-heading dark-blue">
                            <div class="circle-tile-number text-faded margin-top-circulos">
                                <i class="fa fa-users"></i>
                            </div>
                        </div>
                    </a>
                    <div class="circle-tile-content dark-blue">
                        <div class="circle-tile-description text-faded">
                            Clientes
                        </div>
                        <div class="circle-tile-number text-faded">
                            <?php echo $cant_clien; ?>
                        </div>
                        <a href="../Controller/ctrcliente.php" class="circle-tile-footer">Mas informacion</a>
                    </div>
                </div>
            </div>
            <!-- FIN CLIENTE -->
            <!-- INICIO VENTAS -->
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="../Controller/ctrventas.php">
                        <div class="circle-tile-heading green">
                            <div class="circle-tile-number text-faded margin-top-circulos">
                                <i class="fa fa-usd"></i>
                            </div>
                        </div>
                    </a>
                    <div class="circle-tile-content green">
                        <div class="circle-tile-description text-faded">
                            Ventas
                        </div>
                        <div class="circle-tile-number text-faded">
                            $
                        </div>
                        <a href="../Controller/ctrventas.php" class="circle-tile-footer">Mas informacion</a>
                    </div>
                </div>
            </div>
            <!-- FIN VENTAS -->
            <!-- INICIO PEDIDOS -->
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="../Controller/ctrpedidos.php">
                        <div class="circle-tile-heading orange">
                            <div class="circle-tile-number text-faded margin-top-circulos">
                                <i class="fa fa-bell"></i>
                            </div>
                        </div>
                    </a>
                    <div class="circle-tile-content orange">
                        <div class="circle-tile-description text-faded">
                            Pedidos
                        </div>
                        <div class="circle-tile-number text-faded">
                            0
                        </div>
                        <a href="../Controller/ctrpedidos.php" class="circle-tile-footer">Mas informacion</a>
                    </div>
                </div>
            </div>
            <!-- FIN PEDIDOS -->
        </div>
        <!-- FIN DASHBOARD CIRCLE TILES -->

        <!--inicio conntenido pedidos-->
        <div id="chat" class="row">
            <div id="transacciones" class="col-lg-12">
                <div class="portlet portlet-green">
                    <div class="portlet-heading">
                        <div class="portlet-title">
                            <h4><i class="fa fa-exchange fa-fw"></i> Pedidos recientes</h4>
                        </div>
                        <div class="portlet-widgets">
                            <a data-toggle="collapse" data-parent="#accordion" href="#transactionsPortlet"><i class="fa fa-chevron-down"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="transactionsPortlet" class="panel-collapse collapse in">
                        <div class="portlet-body">
                            <div class="table-responsive dashboard-demo-table">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Fecha</th>
                                            <th>Hora</th>
                                            <th>Descripción del pedido</th>
                                            <th>Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1/31/14</td>
                                            <td>6:14 PM</td>
                                            <td><a href="pedido_descripcion.html">Descripción</a></td>
                                            <td><a class="btn btn-xs btn-orange disabled"><i class="fa fa-clock-o"></i> Pendiente</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1/31/14</td>
                                            <td>6:02 PM</td>
                                            <td><a href="pedido_descripcion.html">Descripción</a></td>
                                            <td><a class="btn btn-xs btn-orange disabled"><i class="fa fa-clock-o"></i> Pendiente</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1/31/14</td>
                                            <td>5:56 PM</td>
                                            <td><a href="pedido_descripcion.html">Descripción</a></td>
                                            <td><a class="btn btn-xs btn-green"><i class="fa fa-arrow-circle-right"></i> Realizado</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1/31/14</td>
                                            <td>5:12 PM</td>
                                            <td><a href="pedido_descripcion.html">Descripción</a></td>
                                            <td><a class="btn btn-xs btn-green"><i class="fa fa-arrow-circle-right"></i> Realizado</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1/31/14</td>
                                            <td>5:02 PM</td>
                                            <td><a href="pedido_descripcion.html">Descripción</a></td>
                                            <td><a class="btn btn-xs btn-green"><i class="fa fa-arrow-circle-right"></i> Realizado</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1/31/14</td>
                                            <td>4:47 PM</td>
                                            <td><a href="pedido_descripcion.html">Descripción</a></td>
                                            <td><a class="btn btn-xs btn-red"><i class="fa fa-warning"></i> Anulado</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1/31/14</td>
                                            <td>4:32 PM</td>
                                            <td><a href="pedido_descripcion.html">Descripción</a></td>
                                            <td><a class="btn btn-xs btn-default"><i class="fa fa-arrow-circle-right"></i> No hay existencias</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="pedido.html" class="btn btn-green">Ver todos los pedidos</a>
                        </div>
                    </div>
                </div>
            </div><!-- FIN/.col-lg-12 -->
        </div>
        <!--fin contenido pedidos-->
    </div>