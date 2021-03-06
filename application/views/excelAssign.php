<!DOCTYPE html>
<html lang="en">
<head>
    <title>Asignar</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!--   ICONO PAGINA    -->
        <!-- <link rel="icon" href="http://cellaron.com/media/wysiwyg/zte-mwc-2015-8-l-124x124.png"> -->
        <!--   BOOTSTRAP    -->
        <link href="<?= URL::to('assets/css/bootstrap.css" rel="stylesheet'); ?>" />
        <link href="<?= URL::to('assets/plugins/datatables/dataTables.bootstrap.css'); ?>" rel="stylesheet">
        <link href="<?= URL::to('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <!--   HEADER CSS    -->
        <link href="<?= URL::to('assets/css/styleHeader.css'); ?>" rel="stylesheet" />

        <script src="<?= URL::to('assets/js/jquery-2.1.1.min.js'); ?>"></script>
        <script src="<?= URL::to('assets/js/bootstrap.js'); ?>"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?= URL::to('assets/css/table_christian.css'); ?>">

<style>

  #content{

    position: relative;
    min-height: 50%;
    width: 80%;
    top: 20%;
    left: 10%;


  }
  #tabla{
    margin-bottom: 30px;
  }
  #botones{
    margin-bottom: 15px;
    display: inline-block;
  }

  .selected{
    cursor: pointer;
  }
  .selected:hover{
    background-color: rgba(0, 0, 0, 0.1);
    color: white;
  }
  .seleccionada{
    background-color: rgba(0, 0, 0, 0.1);
    color: white;
  }
  .stylesxx{
    background-color: #32bd54 !important;
    display: none;
    top: -55px;
    float: right;
    color: #fff !important;
    z-index: 2;
    animation: aparecer .5s ease;
    border: 2px solid #32bd54;
    transition: .3s;
    font-weight: bold;
  }
  .stylesxx:hover{
    background: #fff !important;
    color: #32bd54 !IMPORTANT;
  }
  @keyframes aparecer{
    from{transform: scale(0)};
    to{transform: scale(1)};
  }
  #bt_delall,#bt_add{
    border: 1px solid #ddd;
    transition: .3s;
    background: #eeeeee;
    color: #555555;
  }
  #bt_delall:hover,#bt_add:hover{
    /* border-color: black; */
    transition: .3s;
    /* color: white; */
    background: white;
    border-width: 1.6px;
  }
  #bt_delall:hover{
    border-color: #dc1c1c;
    color: #dc1c1c;
  }
  #bt_add:hover{
    border-color: #4dbd38;
    color: #4dbd38;
  }


</style>
    <script>
      var cont = 0;
      $(document).ready(function(){
        $('#bt_add').click(function(){
          agregar();
        });
        $('#bt_del').click(function(){
          eliminar(id_fila_selected);
        });
        $('#bt_delall').click(function(){
          eliminarTodasFilas();
        });
      });
      var id_fila_selected=[];
      var clase= "colorz";
      var boolClase= false;
      function agregar(){
        var user = '<?php echo json_encode($asignar['eng']); ?>';
        var users = JSON.parse(user);

        var tipojson = '<?= json_encode($asignar['tipo']['idTipo']); ?>' ;
        var tipo = JSON.parse(tipojson);

        var gdatos = 0;
        var trans = 0;

        for (var i = 0; i < tipo.length; i++) {
          if (tipo[i] == 0 || tipo[i] == 1 || tipo[i] == 2 || tipo[i] == 18 ) {
            gdatos = 1;
          } else if (tipo[i] == 9 || tipo[i] == 10 || tipo[i] == 11 || tipo[i] == 12 || tipo[i] == 15 || tipo[i] == 16 || tipo[i] == 17) {
            trans = 1;
          }
        }

        cont++;
        //PARA PINTAR LAS FILAS CON DISTINTO COLOR DE FONDO
        if (boolClase) {
          clase= "colorz";
          boolClase = false;
        }else {
          clase= "colorx";
          boolClase = true;
        };
        var fila='<tr class='+clase+' id="fila'+cont+'" >';
        fila = fila + '<td>'+cont+'</td>';
        fila = fila + '<td>';
        fila = fila + '<select name="inge'+cont+'" id="inge" class="form-control selectpicker" required>';
        fila = fila + '<option value=" " >Seleccione Ingeniero</option>';
        for(var i = 0; i<users.length; i++){
          if (trans == 1 && users[i].role.id == 1) {
            fila = fila + "<option value="+users[i].id+ ">"+users[i].name+" "+users[i].lastname+"</option>";
          }
          if (gdatos == 1 && users[i].role.id == 2) {
            fila = fila + "<option value="+users[i].id+ ">"+users[i].name+" "+users[i].lastname+"</option>";
          }
          if (users[i].role.id == 7) {
            fila = fila + "<option value="+users[i].id+ ">"+users[i].name+" "+users[i].lastname+"</option>";
          }
        }
        fila = fila + '</select>';
        fila = fila + '</td>';
        fila = fila + '<td>';
        fila = fila + '<input type="text"  disabled class="form-control selectpicker" name="porcen'+cont+'" id="porcen'+cont+'" value="" max="100">';
        fila = fila + '</td>';
        fila = fila + '<td>';
        if(cont>1){
          fila = fila + '<input type="text" class="form-control selectpicker" name="cantidad'+cont+'" id="cantidad'+cont+'" value = "0" onkeyup="validateValuesCant()">';
        } else {
          var cantidadExcel = '<?php echo count($asignar['actividades']) ?>'
          fila = fila + '<input type="text" class="form-control selectpicker" name="cantidad'+cont+'" id="cantidad'+cont+'" value ="'+0+'" onkeyup="validateValuesCant()">';
        }
        fila = fila + '</td>';
        fila = fila + '</tr>';
        $('#tabla').append(fila);
        reordenar();
      }
      function validateValuesCant(){
        var cantidadExcel = '<?php echo count($asignar['actividades'])?>'
        var sumados = 0;
        for(var i = 1; i<=cont; i++){
          var s = document.getElementById("cantidad"+i);
          sumados = sumados + parseInt(s.value);
    // sumados += s.value;
    var porc = document.getElementById("porcen"+i);
    porc.value = 100/cantidadExcel*parseInt(s.value);
    }
    if(sumados != cantidadExcel){
      var btform = document.getElementById("bt_form");
      btform.style.display = 'none';
    } else {
      var btform = document.getElementById("bt_form");
      btform.style.display = 'block';    }
    }
    function reordenar(){
      var num=1;
      $('#tabla tbody tr').each(function(){
        $(this).find('td').eq(0).text(num);
        num++;
      });
    }
    function eliminarTodasFilas(){
      $('#tabla tbody tr').each(function(){
        $(this).remove();
      });
      cont = 0;
    }
    </script>


</head>
<body>
  <?php
    // header('Content-Type: text/plain');
    // print_r($asignar['eng']);

   ?>
    <!-- Navigation -->
    <header>
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="logo"><img id="logo" src="<?= URL::to('assets/img/logo2.png'); ?>" /></a>
                    </div>
                    <!-- Collect the nav links for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="cam"><a >Bienvenid@ <b><?php echo($_SESSION['userName']) ?>  <span class="glyphicon glyphicon glyphicon-user"></span>  </b></a>
                            </li>
                            <li class="cam fz-18"><a href="<?= URL::base(); ?>/Service/fechasInconsistentes"><i class="glyphicon glyphicon-warning-sign"></i><span class="badge badge-mn"><?php print_r($this->Dao_service_model->cantFechasInconsistentes()->cant); ?></span></a></li>
                            <li class="cam"><a href="<?= URL::to('user/principalView'); ?>">Home</a>
                            </li>
                            <li class="cam"><a href="#services">Servicios</a>
                                <ul>
                                    <li><a href="<?= URL::to('Service/assignService'); ?>">Agendar Actividad</a></li>
                                    <li><a href="<?= URL::to('Service/listService'); ?>s">Ver Actividades</a></li>
                                    <li><a href="https://accounts.google.com/ServiceLogin/signinchooser?passive=1209600&continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&followup=https%3A%2F%2Faccounts.google.com%2FManageAccount&flowName=GlifWebSignIn&flowEntry=ServiceLogin" title="drive" target='_blank'>Drive</a></li>
                                </ul>
                            </li>
                            <li class="cam"><a href="#services">RF</a>
                                <ul>
                                    <li class="cam"><a href="<?= URL::to('Service/RF'); ?>">Actualizar RF</a></li>
                                    <li class="cam"><a href="<?= URL::to('SpecificService/viewRF'); ?>">Ver RF</a></li>
                                </ul>
                            </li>
                            <li class="cam"><a href="<?= URL::to('Grafics/getGrafics'); ?>">Gráficas</a>
                            </li>
                            <li class="cam"><a href="<?= URL::to('Modernizaciones/getModernizaciones'); ?>">Modernizaciones</a>
                            </li>
                            </li>
                            <li class="cam"><a href="<?= URL::to('welcome/index'); ?>">Salir  <span class="glyphicon glyphicon glyphicon-off"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header><br><br><br><br>
<!-- <?= URL::to('SpecificService/saveServicesExcel'); ?> -->
<form class="form-group container" action="<?= URL::to('SpecificService/saveServicesExcel'); ?>" method="post"  id="assignEng" name="assignEng"> 
  <div id="botones">
    <div class="btn-group" style="float:left;">
      <a id="bt_add" class="btn"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
      <a id="bt_delall" class="btn" style="border-top-right-radius: 4px; border-bottom-right-radius: 4px;"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
    </div>
    <div>
      <label class="control-label" style="float: left;padding: 0px 39px;position: relative;top: 6px;">Fecha de asignación ZTE:</label>
      <div class="selectContainer col-sm-3" style="padding:0px;">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar "></i></span>
          <input type='date' name="D_ASIG_Z" id="D_ASIG_Z" class="form-control" value="" required>
          <div class="input-group-btn">
            <button type="button" id="btnTodayDate" class="btn btn-primary" title="Fecha Actual"><i class="glyphicon  glyphicon-calendar"></i></button>
          </div>
        </div>
      </div>
    </div>
            <span class="advertencia" style="display: none;"><i class="glyphicon glyphicon-warning-sign"></i>&nbsp;&nbsp;  La fecha de asignación a ZTE no puede ser menor a la de creación &nbsp;&nbsp; <i class="glyphicon glyphicon-warning-sign"></i></span>
            <!-- <?php
              // echo var_dump($document);
              echo print_r($asignar['document']);
            ?> -->
<?php
        echo "<input type='hidden' name='OT' id='OT' value='".$asignar['ot']."'>";
        echo "<input type='hidden' name='prioridad' id='prioridad' value='".$asignar['prioridad']."'>";
        echo "<input type='hidden' name='solicitante' id='solicitante' value='".$asignar['solicitante']."'>";
        echo "<input type='hidden' name='fCreacion' id='fCreacion' value='".$asignar['fCreacion']."'>";
        echo "<input type='hidden' name='proyecto' id='proyecto' value='".$asignar['proyecto']."'>";
        echo "<input type='hidden' name='descripcion' id='descripcion' value='".$asignar['descripcion']."'>";
        echo "<input type='hidden' name='contador' id='contador' value='".count($asignar['actividades'])."'>";
        for ($r=0; $r < count($asignar['actividades']); $r++) {
          echo "<input type='hidden' name='actividades_".$r."' id='actividades_".$r."' value='".$asignar['actividades'][$r]."'>";
          echo "<input type='hidden' name='tipo_".$r."' id='tipo_".$r."' value='".$asignar['tipo']['idTipo'][$r]."'>";
          echo "<input type='hidden' name='regional_".$r."' id='regional_".$r."' value='".$asignar['regional'][$r]."'>";
          echo "<input type='hidden' name='cantidadActiv_".$r."' id='cantidadActiv_".$r."' value='".$asignar['cantidad'][$r]."'>";
          echo "<input type='hidden' name='descripcionActividad_".$r."' id='descripcionActividad_".$r."' value='".$asignar['descripcionActividad'][$r]."'>";
          echo "<input type='hidden' name='forecast_".$r."' id='forecast".$r."' value='".$asignar['forecast'][$r]."'>";
          echo "<input type='hidden' name='sitio_".$r."' id='sitio".$r."' value='".$asignar['sitio']['id'][$r]."'>";
          echo "<input type='hidden' placeholder='documentador#$r' name='id_documentador_".$r."' id='documentador_".$r."'>";
        }

 ?>
    </div>
      <input type="submit" name="bt_form" id="bt_form" value="Enviar Asignación " class="btn col-xs-5 stylesxx" onclick = "validar_selects_doc()">
        <table id="tabla" class="table_cr table">
        <thead>
          <tr>
            <td>Nº</td>
            <td>Asignación de ingeniero</td>
            <td>Porcentaje(%)</td>
            <td>Cantidad</td>
          </tr>
        </thead>
  </table>
  </div>
</form>
<!--      fin header         -->
<section class="content">
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1">
      <div class="box">
  <?php
  /*header('Content-Type: text/plain');
    print_r($asignar);*/
       echo "<div class='box-header infoExcelActivity'>";
         echo "<h5><b>OT : </b>".$asignar['ot']."</h5><h5><b>Solicitante : </b>".$asignar['solicitante']."</h5><h5><b>Fecha de creación : </b><span id='fecha_creacion'>".$asignar['fCreacion']."</span></h5>";
         echo "<h5><b>Proyecto : </b>".$asignar['proyecto']."</h5>";
         echo "<h5><b>Descripción : </b>".$asignar['descripcion']."</h5>";
         echo "<h5><b>Prioridad : </b><spam style='color:red'>".$asignar['prioridad']."</spam></h5>";
       echo "</div>";
       echo "<!-- /.box-header -->";
       echo "<div class='box-body'>";
         echo "<table id='example' class='table_cr table-hover table table-striped'>";
           echo "<thead>";
           echo "<tr>";
             echo "<th>ID Actividad</th>";
             echo "<th>Tipo Actividad</th>";
             echo "<th>Regional</th>";
             echo "<th>Cantidad</th>";
             echo "<th>Descripción</th>";
             echo "<th>Forecast</th>";
             echo "<th>Documentador</th>";
           echo "</tr>";
           echo "</thead>";
           echo "<tbody>";
           for ($i=0; $i < count($asignar['actividades']) ; $i++) {

           echo "<tr>";
             echo "<td>".$asignar['actividades'][$i]."</td>";//id actividad
             echo "<td>".$asignar['tipo']['name'][$i]."</td>";//tipo actividad
             echo "<td>".$asignar['regional'][$i]."</td>";//regional
             echo "<td>".$asignar['cantidad'][$i]."</td>";//cantidad
             echo "<td>".$asignar['descripcionActividad'][$i]."</td>";//descripcion actividad
             echo "<td>".$asignar['forecast'][$i]."</td>";//forecast
             echo "<td> <select name='documentador' class='select_doc form-control'>
                  <option value='0'>seleccione documentador</option>";
                  for ($j=0; $j < count($asignar['document']); $j++) {
                    echo "<option value='".$asignar['document'][$j]->K_IDUSER."'>".$asignar['document'][$j]->nombres."</option>";
                  }
             echo '</select></td>';// documentador
           echo "</tr>";
           }
           echo "<tfoot>";
           echo "<tr>";
             echo "<th>ID Actividad</th>";
             echo "<th>Tipo Actividad</th>";
             echo "<th>Regional</th>";
             echo "<th>Cantidad</th>";
             echo "<th>Descripción</th>";
             echo "<th>Forecast</th>";
             echo "<th>Documentador</th>";
           echo "</tr>";
           echo "</tfoot>";
         echo "</table>";
       echo "</div>";
  ?>   <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>

  <!--footer-->
  <div class="for-full-back " id="footer">
      Zolid By ZTE Colombia | All Right Reserved
  </div>
<script src="<?= URL::to('assets/plugins/jQuery/jquery-2.2.3.min.js'); ?>"></script>
<!-- DataTables -->
<script src="<?= URL::to('assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= URL::to('assets/plugins/datatables/dataTables.bootstrap.min.js'); ?>"></script>
<script src="<?= URL::to('assets/js/documentador.js'); ?>"></script>

<script>
  $(function () {
    $("#example").DataTable({
      "paging": false
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

<script type="text/javascript">
  // llenar el input tipo date
  $('#btnTodayDate').on('click', function(){
    var hoy = formatDate(new Date());
    var fecha =  $('#D_ASIG_Z');
    fecha.val(hoy);
  });

  // comparar fechas
  $('#D_ASIG_Z').on('change', function(){
    var fecha = new Date ($('#D_ASIG_Z').val());
    var creacion = new Date ($('#fecha_creacion').html());

    if ((fecha.getTime() +86400000.864) < creacion.getTime()) {
      $('#bt_form').attr('disabled', 'true');
      $('.advertencia').show(400);
    } else {
      $('#bt_form').removeAttr("disabled");
      $('.advertencia').hide(400);
    }


    // alert(fecha.getTime());
    // alert(creacion.getTime());
  });











function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [year, month, day].join('-');
}

</script>

</body>
</html>



