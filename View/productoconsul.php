<div>
  <!-- INICIO TITULO DE LA PAGINA -->
  <div class="row">
    <div class="col-lg-12">
      <div class="page-title titulo_pagina">
       <h1>Productos 
         <small>Consultar productos</small></h1>
         <ol class="breadcrumb">
           <li class="active"><a href="" >Consultar productos</a></li>
           <li class="active"><a href="../Controller/ctrproducto.php" >Ingresar productos</a> </li>
         </ol>
       </div>
     </div><!-- FIN /.col-lg-12 -->
   </div><!-- FIN /.row -->
   <!-- FIN TITULO DE LA PAGINA -->

   <!-- INICIO DASHBOARD CIRCLE TILES -->

   <!--CUADRO GRANDE DE COLOR DONDE VA A IR EL CONTENIDO-->
   <div id="registro" class="row">
    <div class="col-lg-12">
      <div class="portlet portlet-blue">
        <div class="portlet-heading">
          <div class="portlet-title">
            <h4><i class="fa fa-exchange fa-fw"></i>Consultar productos</h4>
          </div>
          <div class="portlet-widgets">
            <a data-toggle="collapse" data-parent="#accordion" href="#transactionsPortlet"><i class="fa fa-chevron-down"></i></a>
          </div>
          <div class="clearfix"></div>
        </div>
        <div id="transactionsPortlet" class="panel-collapse collapse in">
          <div class="portlet-body">

            <!--CONTENIDO DEL INTERIOR DEL CUADRO DE COLOR-->
            <div class="tab-content">
                        <!--AQUI ES EN DONDE SE VA A TRABAJAR TODO EL CODIGO
                        AQUI DEBEN DE PONER TODO EL CONTENIDO QUE VALLAN A EDITAR-->
                        <!-- INICIO TABLA CONSULTAR CLIENTE -->
                        <div class="row margin-top-3">
                          <div class="col-md-12">
                            <table id="productos_consultar" class="table table-cart table-responsive tabla">
                              <thead>
                                <tr>
                                  <th>Producto</th>
                                  <th>Descripcion</th>
                                  <th>Precio</th>
                                  <th>Cantidad</th>
                                  <th>Marca</th>
                                  <th>Opciones</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php echo $tabla; ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- FIN INICIO TABLA CONSULTAR CLIENTE-->
                      </div><!--fin DEL tab QUE DEBE SER EDITADO -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--FIN CUADRO GRANDE DE COLOR DONDE VA A IR EL CONTENIDO-->
          </div>