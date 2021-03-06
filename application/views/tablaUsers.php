<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejecutar</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!--   ICONO PAGINA    -->
        <link rel="icon" href="http://cellaron.com/media/wysiwyg/zte-mwc-2015-8-l-124x124.png">
        <!--   BOOTSTRAP    -->
        <link href="<?= URL::to('assets/css/bootstrap.css'); ?>" rel="stylesheet" />
        <link href="<?= URL::to('assets/plugins/datatables/dataTables.bootstrap.css'); ?>" rel="stylesheet">
        <link href="<?= URL::to('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <!--   HEADER CSS    -->
        <link href="<?= URL::to('assets/css/styleHeader.css'); ?>" rel="stylesheet" />


    </head>
    <body>
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
                            <li class="cam fz-18"><a href="#"><i class="glyphicon glyphicon-warning-sign"></i><span class="badge badge-mn"><?php print_r($this->Dao_service_model->cantFechasInconsistentes()->cant); ?></span></a></li>
                            <li class="cam"><a href="#home">Home</a>
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
                            </li>
                            <li class="cam"><a href="<?= URL::to('welcome/index'); ?>">Salir  <span class="glyphicon glyphicon glyphicon-off"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header><br><br><br><br>
        <!--      fin header         -->



        <div class="container">

            <table border="1" class="table table-striped" id="tabla_usuarios">
                <thead>
                    <tr>
                        <th>cedf</th>
                        <th>xxxxxxx</th>
                        <th>xxxxxxx</th>
                        <th>xxxxxxx</th>
                        <th>xxxxxxx</th>
                        <th>xxxxxxx</th>
                        <th>xxxxxxx</th>
                        <th>xxxxxxx</th>
                    </tr>
                    <?php
                    for ($i = 0; $i < count($usuarios); $i++) {

                        echo "<tr>";
                        echo "<th>" . $usuarios[$i]->K_IDUSER . "</th>";
                        echo "<th>" . $usuarios[$i]->K_IDROLE . "</th>";
                        echo "<th>" . $usuarios[$i]->N_NAME . "</th>";
                        echo "<th>" . $usuarios[$i]->K_IDUSER . "</th>";
                        echo "<th>" . $usuarios[$i]->K_IDUSER . "</th>";
                        echo "<th>" . $usuarios[$i]->K_IDUSER . "</th>";
                        echo "<th>" . $usuarios[$i]->K_IDUSER . "</th>";
                        echo "<th>" . $usuarios[$i]->K_IDUSER . "</th>";
                        echo "</tr>";
                    }
                    ?>

                    </div>

                </thead>


            </table>


            <script>
                $(function() {

                    $('#tabla_usuarios').DataTable({
                        "paging": true,
                        "lengthChange": false,
                        "searching": false,
                        "ordering": true,
                        "info": true,
                        "autoWidth": false
                    });
                });
            </script>







            <!--footer-->
            <div class="for-full-back " id="footer">
                Zolid By ZTE Colombia | All Right Reserved
            </div>
            <script src="<?= URL::to('assets/plugins/jQuery/jquery-2.2.3.min.js'); ?>"></script>
            <script src="<?= URL::to('assets/plugins/datatables/dataTables.bootstrap.min.js'); ?>"></script>


    </body>
</html>
