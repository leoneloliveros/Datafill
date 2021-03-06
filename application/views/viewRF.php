<!DOCTYPE html>
<html lang="en">
    <head>
        <title>RF</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- font awesone -->
        <link rel="stylesheet" href="<?= URL::to('assets/plugins/font-awesome/css/font-awesome.min.css') ?>"/>
        <!-- datatables -->
        <link rel="icon" href="http://cellaron.com/media/wysiwyg/zte-mwc-2015-8-l-124x124.png">
        <!--   BOOTSTRAP    -->
        <link href="<?= URL::to('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <!--   HEADER CSS    -->
        <link href="<?= URL::to('assets/css/styleHeader.css'); ?>" rel="stylesheet" />
        <!-- Modal Cami -->
        <link href="<?= URL::to('assets/css/styleModalCami.css'); ?>" rel="stylesheet" />
        <!-- estilo tablas camilo -->
        <link href="<?= URL::to('assets/css/styleTablesCami.css'); ?>" rel="stylesheet" />
        <!-- scrollbar -->
        <link href="<?= URL::to('assets/css/jquery.mCustomScrollbar.css'); ?>" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="<?= URL::to('assets/plugins/datatables/css/jquery.dataTables.min.css'); ?>">
        <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.css"> -->
        <link rel="stylesheet" type="text/css" href="<?= URL::to('assets/plugins/datatables/css/buttons.dataTables.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?= URL::to('assets/css/table_christian.css'); ?>">
        
        
        <script type="text/javascript" src="<?= URL::to('assets/plugins/jQuery/jquery-3.1.1.js'); ?>"></script>
        <script type="text/javascript" src="<?= URL::to('assets/plugins/bootstrap.js'); ?>"></script>



    </head>
    <body data-url="<?= URL::base(); ?>">
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
                            <li class="cam fz-18"><a href="<?= URL::base(); ?>/Service/fechasInconsistentes"><i class="glyphicon glyphicon-warning-sign"></i><span class="badge badge-mn"><?php print_r($this->Dao_service_model->cantFechasInconsistentes()->cant); ?></span></a></li>
                            </li>
                            <li class="cam"><a href="<?= URL::to('user/principalView'); ?>">Home</a>
                            </li>
                            <li class="cam"><a href="#services">Servicios</a>
                                <ul>
                                    <li><a href="<?= URL::to('Service/assignService'); ?>">Agendar Actividad</a></li>
                                    <li><a href="<?= URL::to('Service/listServices'); ?>">Ver Actividades</a></li>
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
                            <li class="cam"><a href="<?= URL::to('welcome/index'); ?>">Salir  <span class="glyphicon glyphicon glyphicon-off"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header><br><br><br><br>
        <!--      fin header         -->

        <h1 class="h1 fixh1rf">RF</h1><hr>

        <div class="container" align="center">
            <button type="button" class="btn btn-success" id="nuevos"><i class="fa fa-fw fa-plus"></i> Nuevos <span id="nuevosBadge" class="badge">...</span></button>
            <button type="button" class="btn btn-primary" id="cambios"><i class="fa fa-fw fa-refresh"></i> Cambios <span id="cambiosBadge" class="badge">...</span></button>
        </div>

        <div class="container">
            <!-- Modal tabla actividades rf nuevas-->
            <div class="modal fade" id="ModalEventosNuevos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg3" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img src="<?= URL::to('assets/img/close.ico'); ?>" alt="cerrar" class="modalImage" ></button>
                            <h4 class="modal-title" id="titleEvent">Modal tabla nuevas</h4>
                        </div>
                        <div class="modal-body" id="cuerpoModal">
                            <div class="container lg-cntr">
                                <h4>Tabla Nuevos</h4>
                                <table id="tableEventos" class='table_cr table  table-striped' width='100%'></table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <h4 class="foot">Zolid By ZTE Colombia | All Right Reserved</h4>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar  <i class="glyphicon glyphicon-chevron-up"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fin modal actividades nuevas -->

            <!-- Modal tabla actividades rf cambios-->
            <div class="modal fade" id="ModalEventosCambios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg3" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img src="<?= URL::to('assets/img/close.ico'); ?>" alt="cerrar" class="modalImage" ></button>
                            <h4 class="modal-title" id="titleEventChanges">Modal tabla Cambios</h4>
                        </div>
                        <div class="modal-body" id="cuerpoModal">

                            <div class="container">
                                <ul class="nav nav-tabs navCami">
                                    <li class="active"><a data-toggle="tab" href="#tab_cambios">Tabla Cambios</a></li>
                                    <li><a data-toggle="tab" href="#tab_log">Tabla Log</a></li>
                                </ul>

                                <div class="tab-content">

                                    <div id="tab_cambios" class="tab-pane fade in active  lg-cntr">
                                        <h4 align="center">TABLA CAMBIOS</h4>
                                        <table id="tableEventosChanges" class='table_cr table  table-striped' width='100%'>

                                        </table>
                                    </div>
                                    <div id="tab_log" class="tab-pane fade">
                                        <h4 align="center">TABLA LOG</h4>
                                        <table id="tableLog" class='table_cr table  table-striped tableCami' width='100%'></table>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <h4 class="foot">Zolid By ZTE Colombia | All Right Reserved</h4>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar  <i class="glyphicon glyphicon-chevron-up"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fin modal actividades rf cambios -->

            <!-- Modal tabla log por id rf nuevas-->
            <div class="modal fade" id="ModalHistorialLog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg2" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img src="<?= URL::to('assets/img/close.ico'); ?>" alt="cerrar" class="modalImage" ></button>
                            <h4 class="modal-title" id="titleEventHistory">Modal Historial</h4>
                        </div>
                        <div class="modal-body" id="cuerpoModal">
                            <div class="container lg-cntr">
                                <h3>Tabla Log</h3>
                                <table id="tableHistorialLog" class='table_cr table  table-striped tableCami' width='100%'></table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <h4 class="foot">Zolid By ZTE Colombia | All Right Reserved</h4>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar  <i class="glyphicon glyphicon-chevron-up"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fin modal log por id nuevas -->
        </div>

        <div class="container lg-cntr">
            <!-- tABLA RF -->
            <table id="tableRF" class='table_cr table  table-striped table-hover' ></table>
        </div>
        <br><br><br>
        <!-- FOOTER -->
        <div class="for-full-back " id="footer">Zolid By ZTE Colombia | All Right Reserved</div>
        <!-- DataTables -->
        <script src="<?= URL::to("assets/plugins/datatables/js/jquery.dataTables.min.js") ?>" type="text/javascript"></script>
        <script src="<?= URL::to("assets/plugins/datatables/js/dataTables.buttons.min.js") ?>" type="text/javascript"></script>
        <script src="<?= URL::to("assets/plugins/datatables/js/datatables.colvis.js") ?>" type="text/javascript"></script>
        <script type="text/javascript" src="<?= URL::to('assets/js/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
        <script type="text/javascript">var baseurl = "<?php echo URL::base(); ?>";</script>
        <script type="text/javascript" src="<?= URL::to('assets/js/services/rf.js'); ?>"></script>
    </body>
</html>
