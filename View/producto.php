<div>
  <!-- INICIO TITULO DE LA PAGINA -->
  <div class="row">
    <div class="col-lg-12">
      <div class="page-title titulo_pagina">
       <h1>Productos 
         <small>Ingresar productos</small></h1>
         <ol class="breadcrumb">
          <li class="active"><a href="#registro">Ingresar productos</a> </li>
          <li><a href="ctrproductoconsul.php">Consultar productos</a></li>
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
            <h4><i class="fa fa-exchange fa-fw"></i>Ingresar productos</h4>
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
                        <div class="row">                           
                          <form role="form" method="post" data-parsley-validate>
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                              <div class="form-group">
                                <label for="producto">Nombre del  producto</label>
                                <input type="text" class="form-control" id="producto" name="txtproducto" placeholder="Papitas" required>
                              </div>
                              <button name="btn_agre" type="submit" class="btn btn-success ancho10">Aceptar</button>
                              <hr>
                            </div>
                            <div class="col-md-2"></div>
                          </form>
                        </div>
                        <div class="row">
                          <form enctype="multipart/form-data" name="form1" id="form1" role="form" method="post" data-parsley-validate>
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                              <div class="alert alert-warning" role="alert">
                                <p><strong>Atencion:</strong>
                                  para registrar la descripcion del producto primero debes registrar el nombre del producto</p>
                                </div>
                                <div class="form-group margin-bottom">
                                 <label for="producto" class="label-producto">
                                  Seleccionar producto
                                </label>
                                <select name="prod" id="producto_consultar" style="margin-bottom: 10px;background: #fcfcfc;border: 1px solid #ccc;width: 100%; border-radius: 0px;text-align: center;" required>
                                  <option>Seleccione producto</option>
                                  <?php echo $nom; ?>
                                </select>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="producto">Descripcion del producto</label>
                                    <input name="des" type="text" class="form-control" id="producto" placeholder="500 gr" required>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="precio">Precio</label>
                                    <input name="precio" type="text" class="form-control" id="precio" placeholder="1000" required>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group group">
                                <label for="marca">Marca</label>
                                <select name="marca" id="marca_consultar" style="margin-bottom: 10px;background: #fcfcfc;border: 1px solid #ccc;width: 100%; border-radius: 0px;text-align: center;" required>
                                  <option>Seleccione una opcion</option>
                                  <?php echo $mar; ?>
                                </select>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group group">
                                    <label for="categoria">Categoria</label>
                                    <select name="catego" onchange="myFunction(this.value)" id="categoria_consultar" style="margin-bottom: 10px;background: #fcfcfc;border: 1px solid #ccc;width: 100%; border-radius: 0px;text-align: center;" required>
                                      <option>Seleccione una opcion</option>
                                      <?php echo $cat; ?>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group group">
                                    <label for="subcategoria">Subcategoria</label>
                                    <select name="subcatego" id="subcategoria_consultar" style="margin-bottom: 10px;background: #fcfcfc;border: 1px solid #ccc;width: 100%; border-radius: 0px;text-align: center;" required>
                                      <option>Seleccione una opcion</option>
                                      <?php echo $subcat; ?>                                        
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div>    
                                <input type="file" id="files" name="files">           
                                <output id="list">
                                </output>                    
                              </div>
                              <br>
                              <button name="btn_deta" type="submit" class="btn btn-success ancho10">Aceptar</button>
                              <button type="button" class="btn btn-default ancho10">Cancelar</button>
                            </div>
                            <div class="col-md-2"></div>
                          </form>
                        </div>
                      </div><!--fin DEL tab QUE DEBE SER EDITADO -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--FIN CUADRO GRANDE DE COLOR DONDE VA A IR EL CONTENIDO-->
          </div>
          <script>
            function myFunction(str)
            {
              loadDoc("q="+str,"../Controller/ctrsubcategorias.php",function()
              {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                  document.getElementById("subcategoria_consultar").innerHTML=xmlhttp.responseText;
                }
              });
            }
          </script>
          <script>
            function handleFileSelect(evt) {
              var files = evt.target.files; 
              for (var i = 0, f; f = files[i]; i++) {
                if (!f.type.match('image.*')) {
                  continue;
                }
                var reader = new FileReader();
                reader.onload = (function(theFile) {
                  return function(e) {
                    var span = document.createElement('div');
                    $(".thumb").remove();
                    span.innerHTML = ['<img class="thumb" src="', e.target.result,
                    '" title="', escape(theFile.name), '"/>'].join('');
                    document.getElementById('list').insertBefore(span, null);
                  };
                })(f);
                reader.readAsDataURL(f);
              }
            }
            document.getElementById('files').addEventListener('change', handleFileSelect, false);
          </script>