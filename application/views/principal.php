<!DOCTYPE html>
<html lang="en">
<head>
    <title>Zolid ZTE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--   ICONO PAGINA    -->
    <link rel="icon" href="http://cellaron.com/media/wysiwyg/zte-mwc-2015-8-l-124x124.png">
    <!--   BOOTSTRAP    -->
    <link rel="stylesheet" href="<?= URL::to('assets/css/bootstrap.css'); ?>"/>
    <link rel="stylesheet" href="<?= URL::to('assets/css/font-awesome.min.css'); ?>"/>
    <!--   CSS ESTILOS PRINCIPAL    -->
    <link rel="stylesheet" href="<?= URL::to('assets/css/stylePrincipal.css'); ?>"/>
    <link rel='stylesheet' type='text/css'  href='http://fonts.googleapis.com/css?family=Open+Sans'/>
</head>
<body>
    <!-- Navigation -->
    <div id="headNavigation">
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
        </header>
    </div>
    <!--End Navigation -->
    <!--Header section  -->
    <div id="home">
    <div class="container" >
        <div class="row ">
            <div class="col-md-9 col-sm-9">
              <div>
                <a><br>
                  <img class="logoz" id="logoz" src="<?= URL::to('assets/img/logoz.png'); ?>" />
                </a>
              </div>
              <h1 class="head-main">ZTE</h1>
              <span class="head-sub-main">Proyecto Datafill OT - Claro</span>
              <div class="head-last"><!--texto aca--> </div>
            </div>
        </div>
    </div>
          </div>
    <!--End Header section  -->
    <!--Services Section-->
    <section  id="services">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Proyecto Datafill OT - Claro</h2>
                </div>
            </div>
            <div class="row text-center space-pad">
                <div class="col-md-3 col-sm-3">
                    <div >
                        <i class="fa fa-camera fa-4x main-color"></i>
                        <h3>Ver Actividades</h3>
                        <p>Aquí se puede observar una lista de todas las actividades creadas.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div >
                        <i class="fa fa-briefcase fa-4x main-color"></i>
                        <h3>Asignar actvidades</h3>
                        <p>Herramienta para agendar y asignar actividades a los diferentes
                         ingenieros que hacen parte del proyecto.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div >
                        <i class="fa fa-desktop fa-4x main-color"></i>
                        <h3>Reportes</h3>
                        <p>Reportes y resúmenes gráficos para analizar información
                           relevante sobre el proyecto.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div>
                        <i class="fa fa-folder fa-4x main-color"></i>
                        <h3>Indicadores</h3>
                        <p>Indicadores de rendimiento de los miembros del equipo y del proyecto.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!--End Services Section-->
    <!--parallax one-->
      <section  id="Parallax-one">
    <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2 ">
                    
                </div>
            </div>
        </div>
          </section>
    <section  id="contact-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="social-icon">
                          <strong> Visita:</strong> ztemobilecolombia.com
                        <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                        <a href="#"><i class="fa fa-linkedin fa-2x"></i></a>
                        <a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
                        <a href="#"><i class="fa fa-pinterest fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section -->
    <!--footer Section -->
    <div class="for-full-back" id="footer">
        Zolid By ZTE Colombia | All Right Reserved
    </div>
    <!--End footer Section -->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="<?= URL::to('assets/plugins/jquery-1.10.2.js'); ?>"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="<?= URL::to('assets/plugins/bootstrap.js'); ?>"></script>
    <!-- PARALLAX SCRIPT   -->
    <script src="<?= URL::to('assets/plugins/4jquery.parallax-1.1.3.js'); ?>"></script>
    <!-- CUSTOM SCRIPT   -->
    <script src="<?= URL::to('assets/js/custom.js'); ?>"></script>
    <!-- <script src="<?= URL::to('assets/js/header.js'); ?>"></script>  -->
</body>
</html>
