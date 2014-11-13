<div>
  <!-- INICIO TITULO DE LA PAGINA -->
  <div class="row">
    <div class="col-lg-12">
      <div class="page-title titulo_pagina">
       <h1>Proveedores
         <small>Ingresar proveedor</small></h1>
         <ol class="breadcrumb">
          <li class="active"><a href="">Registrar proveedor</a> </li>
          <li><a href="../Controller/ctrproveedorconsul.php">Consultar proveedores</a></li>
        </ol>
      </div>
    </div><!-- FIN /.col-lg-12 -->
  </div><!-- FIN /.row -->
  <!-- FIN TITULO DE LA PAGINA -->

  <!-- INICIO DASHBOARD CIRCLE TILES -->

  <!--CUADRO GRANDE DE COLOR DONDE VA A IR EL CONTENIDO-->
  <div id="registro" class="row">
    <div class="col-lg-12">
      <div class="portlet portlet-purple" >
        <div class="portlet-heading">
          <div class="portlet-title">
            <h4><i class="fa fa-exchange fa-fw"></i>Registrar proveedores</h4>
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
                        <!--CONTENIDO REGISTRAR PROVEEDOR-->
                        <div class="alert alert-info alert-dismissible centrar_texto" role="alert">
                          <p>Para registrar un proveedor, selecciona los cuadros de texto y escribe sobre ellos la informacion solicitada, luego selecciona el boton <strong>Registrar </strong>para finalizar el proceso.</p>
                        </div>
                        <div class="tab-pane active" id="cliente">
                          <div class="container ancho11">
                            <div class="row">
                              <form role="form" method="post" data-parsley-validate>
                                <div class="col-md-6">                                            
                                  <div class="form-group">
                                    <label for="Nombre">Nombres y Apellidos</label>
                                    <input value="<?php echo $nom; ?>" name="txtnom" type="text" class="form-control" placeholder="Felipe Duran" required data-parsley-minlength="6">
                                  </div>
                                  <div class="form-group">
                                    <label for="Celular">Celular</label>
                                    <input value="<?php echo "$cel"; ?>" name="txtcel" type="text" class="form-control"  placeholder="3111234567" required data-parsley-minlength="10" data-parsley-maxlength="10">
                                  </div>
                                  <div class="form-group">
                                    <label for="nit">Identificacion</label>
                                    <input value="<?php echo "$nit"; ?>" name="txtidenti" type="text" class="form-control" placeholder="1234567890" required data-parsley-type="number" data-parsley-minlength="7" data-parsley-maxlength="11">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="correo">Correo</label>
                                    <input value="<?php echo "$correo"; ?>" name="txtmail" type="email" class="form-control" placeholder="ejemplo@mail.com" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="Telefono">Telefono</label>
                                    <input value="<?php echo "$tel"; ?>" name="txttel" type="text" class="form-control" placeholder="1234567" required data-parsley-minlength="7" data-parsley-maxlength="7">
                                  </div>
                                  <div class="form-group" style="margin-bottom: 15px;">
                                   <label for="producto" style="display: inline-block;margin-bottom: 5px;font-weight: 700;">
                                    Empresa
                                  </label>
                                  <select name="txtrazon" id="marca_consultar" style="margin-bottom: 10px;background: #fcfcfc;border: 1px solid #ccc;width: 100%; border-radius: 0px;text-align: center;" required>
                                    <option>Seleccione Empresa</option> 
                                    <?php echo $mar; ?>
                                  </select>
                                </div>                                      
                              </div>
                              <button type="submit" name="btn_registro" class="btn btn-success" style="margin-left: 15px;">Registrar</button>
                              <button type="submit" name="btn_actu" class="btn btn-primary" style="margin-left: 15px;">Actualizar</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--fin tbody--></div>
                  </div>
                </div>
              </div>
            </div>
            <!--FIN CONTENIDO REGISTRAR PROVEEDOR-->
            <!--FIN CUADRO GRANDE DE COLOR DONDE VA A IR EL CONTENIDO-->
          </div>
          <script>
            function campos (marca) {
              $("#marca_consultar").val(marca);
            }
          </script>
          <?php echo $campos; ?>