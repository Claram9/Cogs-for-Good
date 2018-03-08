<!DOCTYPE html>
<html lang="en" dir="ltr" 
  xmlns:content="http://purl.org/rss/1.0/modules/content/"
  xmlns:dc="http://purl.org/dc/terms/"
  xmlns:foaf="http://xmlns.com/foaf/0.1/"
  xmlns:og="http://ogp.me/ns#"
  xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#"
  xmlns:sioc="http://rdfs.org/sioc/ns#"
  xmlns:sioct="http://rdfs.org/sioc/types#"
  xmlns:skos="http://www.w3.org/2004/02/skos/core#"
  xmlns:xsd="http://www.w3.org/2001/XMLSchema#">
    
<head profile="http://www.w3.org/1999/xhtml/vocab">
    <link rel="shortcut icon" href="styles/icons/favicon.png" type="image/png" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Hackathon | Cogs for Good</title>
	<link type="text/css" rel="stylesheet" href="style.css" />
    <link type="text/css" rel="stylesheet" href="styles/base.css" />
    <link type="text/css" rel="stylesheet" href="styles/ckeditor.css" />
    <link type="text/css" rel="stylesheet" href="styles/menus.css" />
    <link type="text/css" rel="stylesheet" href="styles/theme.css" />
    <link type="text/css" rel="stylesheet" href="styles/messages.css" />
    <link type="text/css" rel="stylesheet" href="styles/fonts/lato-font.css" />
    <link type="text/css" rel="stylesheet" href="styles/fonts/ptserif-blockquote-font.css" />
    <link type="text/css" rel="stylesheet" href="styles/fonts/sourcecodepro-font.css" />
    <link type="text/css" rel="stylesheet" href="styles/modal.css" />
    <link type="text/css" rel="stylesheet" href="styles/form.css" />
    <!--<link type="text/css" rel="stylesheet" href="styles/comment.css" />
    <link type="text/css" rel="stylesheet" href="styles/field.css" />
    <link type="text/css" rel="stylesheet" href="styles/node.css" />
    <link type="text/css" rel="stylesheet" href="styles/search.css" />
    <link type="text/css" rel="stylesheet" href="styles/user.css" />-->
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" media="all" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://watson.usal.es/misc/jquery.js?v=1.4.4"></script>
    <script type="text/javascript" src="https://watson.usal.es/misc/jquery.once.js?v=1.2"></script>
    <script type="text/javascript" src="https://watson.usal.es/misc/drupal.js?p4ekh8"></script>
    <script type="text/javascript" src="sites/all/modules/admin_menu/admin_devel/admin_devel.js%3Fp4ekh8"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    <!--//--><![CDATA[//><!--
    jQuery(document).ready(function($) { 
            $(window).scroll(function() {
                if($(this).scrollTop() != 0) {
                    $("#toTop").addClass("show");	
                } else {
                    $("#toTop").removeClass("show");
                }
            });

            $("#toTop").click(function() {
                $("body,html").animate({scrollTop:0},800);
            });	
    });
    //--><!]]>
    </script>
    <script type="text/javascript" src="sites/all/themes/startupgrowth_lite/js/jquery.mobilemenu.js%3Fp4ekh8"></script>
    <script type="text/javascript">
    <!--//--><![CDATA[//><!--
    jQuery(document).ready(function($) { 

            $("#main-navigation ul.main-menu, #main-navigation .content>ul.menu").mobileMenu({
                prependTo: "#main-navigation",
                combine: false,
                nested: 1,
                switchWidth: 760,
                topOptionText: Drupal.settings.startupgrowth_lite['topoptiontext']
            });

            });
    //--><!]]>
    </script>
    <script type="text/javascript">
    <!--//--><![CDATA[//><!--
    jQuery(document).ready(function($) { 

            var map;
            var myLatlng;
            var myZoom;
            var marker;

            });
    //--><!]]>
    </script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script type="text/javascript">
    <!--//--><![CDATA[//><!--
    jQuery(document).ready(function($) { 

            if ($("#map-canvas").length) {

                myLatlng = new google.maps.LatLng(Drupal.settings.startupgrowth['google_map_latitude'], Drupal.settings.startupgrowth['google_map_longitude']);
                myZoom = 13;

                function initialize() {

                    var mapOptions = {
                    zoom: myZoom,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    center: myLatlng,
                    scrollwheel: false
                    };

                    map = new google.maps.Map(document.getElementById(Drupal.settings.startupgrowth['google_map_canvas']),mapOptions);

                    marker = new google.maps.Marker({
                    map:map,
                    draggable:true,
                    position: myLatlng,
                    url: "https://www.google.com/maps/dir//40.726576,-74.046822/@40.726576,-74.046822"
                    });

                    google.maps.event.addListener(marker, "click", function() {     
                    window.open(this.url, "_blank");
                    });

                    google.maps.event.addDomListener(window, "resize", function() {
                    map.setCenter(myLatlng);
                    });

                }

                google.maps.event.addDomListener(window, "load", initialize);

            }

            });
    //--><!]]>
    </script>
    <script type="text/javascript">
    <!--//--><![CDATA[//><!--
    jQuery(document).ready(function($) {

                $(window).load(function() {
                    $("#highlighted-bottom-transparent-bg").css("backgroundColor", "rgba(255,255,255,0.8)");
                });

            });
    //--><!]]>
    </script>
    <script type="text/javascript" src="sites/all/themes/startupgrowth_lite/js/jquery.browser.min.js%3Fp4ekh8"></script>
    <script type="text/javascript">
    <!--//--><![CDATA[//><!--
    jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"","ajaxPageState":{"theme":"startupgrowth_lite","theme_token":"VSqtxiqqVLfFHEak7sFY44lb_bQGdc1kE7mMi7e6nLU","js":{"misc\/jquery.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"sites\/all\/modules\/admin_menu\/admin_devel\/admin_devel.js":1,"\/\/maxcdn.bootstrapcdn.com\/bootstrap\/3.3.2\/js\/bootstrap.min.js":1,"0":1,"sites\/all\/themes\/startupgrowth_lite\/js\/jquery.mobilemenu.js":1,"1":1,"2":1,"https:\/\/maps.googleapis.com\/maps\/api\/js?v=3.exp\u0026sensor=false":1,"3":1,"4":1,"sites\/all\/themes\/startupgrowth_lite\/js\/jquery.browser.min.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"modules\/comment\/comment.css":1,"modules\/field\/theme\/field.css":1,"modules\/node\/node.css":1,"modules\/search\/search.css":1,"modules\/user\/user.css":1,"sites\/all\/modules\/ckeditor\/css\/ckeditor.css":1,"\/\/maxcdn.bootstrapcdn.com\/font-awesome\/4.2.0\/css\/font-awesome.min.css":1,"\/\/maxcdn.bootstrapcdn.com\/bootstrap\/3.3.2\/css\/bootstrap.min.css":1,"sites\/all\/themes\/startupgrowth_lite\/style.css":1,"sites\/all\/themes\/startupgrowth_lite\/fonts\/lato-font.css":1,"sites\/all\/themes\/startupgrowth_lite\/fonts\/sourcecodepro-font.css":1,"sites\/all\/themes\/startupgrowth_lite\/fonts\/ptserif-blockquote-font.css":1,"sites\/all\/themes\/startupgrowth_lite\/ie9.css":1,"sites\/all\/themes\/startupgrowth_lite\/local.css":1}},"startupgrowth_lite":{"topoptiontext":"Select a page","google_map_latitude":"40.726576","google_map_longitude":"-74.046822","google_map_canvas":"map-canvas"}});
    //--><!]]>
    </script>
    <!-- Modal -->
    <script type="text/javascript">
    <!--//--><![CDATA[//><!-- 
    $(document).ready(function() {
        $('.openPopupG').on('click', function() {
            var dataURL = $(this).attr('data-href');
            // Load from form_group.php only the form for view using target #sign-form
            $('.modal-body').load(dataURL + ' #group-form', function() {
                $('#myModal').modal({show: true});
            });
        });
    });

    // Rebind form submit interceptor after each ajax
    $(document).ajaxComplete(function() {
        $('#group-form').submit(function() {
            // Need to use $.post() instead $.load() becouse your php code manage only $_POST
            $.post('form_group.php', $(this).serialize() + '&' + $.param({'submit': true}), function(response) {
                // Load from form_group.php only the new form view based on erros
                $('.modal-body').html($(response).filter('#group-form'));
            });

            return false;
        });
    });
    $(document).ready(function() {
        $('.openPopupS').on('click', function() {
            var dataURL = $(this).attr('data-href');
            // Load from form_group.php only the form for view using target #sign-form
            $('.modal-body').load(dataURL + ' #solo-form', function() {
                $('#myModal').modal({show: true});
            });
        });
    });
    $(document).ajaxComplete(function() {
        $('#solo-form').submit(function() {
            // Need to use $.post() instead $.load() becouse your php code manage only $_POST
            $.post('form_ind.php', $(this).serialize() + '&' + $.param({'submit': true}), function(response) {
                // Load from form_group.php only the new form view based on erros
                $('.modal-body').html($(response).filter('#solo-form'));
            });

            return false;
        });
    });
    //--><!]]>
    </script>
    <!-- Smooth scroll-->
    
</head>
<body class="html front not-logged-in no-sidebars page-node parallax-active sff-7 slff-7 hff-7 pff-7 form-style-1 wide" >
  <div id="skip-link">
    <a href="index.php#main-content" class="element-invisible element-focusable">Skip to main content</a>
  </div>
    <!-- #page-container -->
<div id="page-container">

    <div id="toTop"><i class="fa fa-angle-up"></i></div>
    
    <!-- #header -->
    <header id="header"  role="banner" class="clearfix">
        <div class="container">

            <!-- #header-inside -->
            <div id="header-inside" class="clearfix">
                <div class="row">

                    <div class="col-md-3">
                        <!-- #header-inside-left -->
                        <div id="header-inside-left" class="clearfix">

                                                <div id="logo">
                        <a href="index.php" title="Home" rel="home"> <h2 style="margin-bottom:0px!important; color:white; text-align:right;" class="titulo">Cogs for</h2><br><h2 style="margin-top:-5px!important; font-weight:bold; color:white; text-align:right;"  class="titulo">Good</h2><!--<img src="styles/icons/logo.png" alt="Home" />--> </a>
                        </div>

                    </div>
                        <!-- EOF:#header-inside-left -->
                    </div>

                    <div class="col-md-9">
                        <!-- #header-inside-right -->
                        <div id="header-inside-right" class="clearfix">

                            
                            <!-- #main-navigation -->
                            <div id="main-navigation" class="clearfix ">
                                <nav role="navigation"> 
                                <div id="main-menu">
                                    <h2 class="element-invisible">Main menu</h2><ul class="main-menu menu">
                                    <li class="menu-319 first"><a class="smooth" href="#desafio">Desafío</a></li>
                                    <li class="menu-320"><a class="smooth" href="#curso-formativo">Curso formativo</a></li>
                                    <li class="menu-322"><a class="smooth" href="#premio">Premio</a></li>
                                    <li class="menu-323 last"><a class="smooth" href="#participa">Participa</a></li>
                                    <li class="menu-321"><a class="smooth" href="#sedes">Sedes</a></li>
                                    </ul>                                    
                                </div>
                                </nav>
                            </div>
                            <!-- EOF: #main-navigation -->

                        </div>
                        <!-- EOF:#header-inside-right -->                        
                    </div>                   

                </div>
            </div>
            <!-- EOF: #header-inside -->

        </div>
    </header>
    <!-- EOF: #header -->

        <!-- #banner -->
    <div id="banner" class="clearfix">

        <!-- #banner-inside -->
        <div id="banner-inside" class="clearfix">
            <div class="banner-area">
              <div class="region region-banner">
                <div id="block-block-1" class="block block-block clearfix">

                    <div class="content">
                    <div class="home-bg">
                        <video loop="" muted="" autoplay="" poster="https://statics.imghs.net/images/home/video_home_static.png" class="home-fullscreen-bg"><br/><source src="https://statics.imghs.net/images/home/video_home.mp4" type="video/mp4"><br/></source></video>
                        <div class="home-container">
                            <div class="info-content">
                                <div class="text">
                                    <h1>Hackathon</h1>
                                    <h2>Cogs for Good</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
        <!-- EOF: #banner-inside -->        

    </div>
    <!-- EOF:#banner -->
    
    
        

    <!-- #page -->
    <div id="page" class="clearfix">

        <!-- #messages-console -->
                <!-- EOF: #messages-console -->

                <!-- #top-content -->
        <div id="top-content" class="clearfix">
            <!-- #top-content-inside -->
            <div id="top-content-inside" class="clearfix">
            <div class="region region-top-content">
            <div id="block-block-2" class="block block-block desafio clearfix">

                <h2 id="desafio" class="title">Desafío</h2>
  
                <div class="content">
                <div class="container">
                    <p class="rtecenter col-md-8 col-md-offset-2">El proyecto Cogs for Good alienta a las universidades y a sus estudiantes a utilizar la experiencia técnica y los recursos para resolver los desafíos sociales: tener desarrollos y fabricación sostenibles, luchar contra la pobreza, mejorar la calidad de vida de las personas dependientes, etc. Estamos realmente convencidos de que la tecnología es un facilitador clave y un creador de soluciones innovadoras, replicables y escalables que pueden mitigar los problemas sociales y ayudar a las partes interesadas como organizaciones sin fines de lucro, entre otros. Nos complace y entusiasma proponer y lanzar una iniciativa que combina el conocimiento de universidades diferentes y multidisciplinarias y escuelas de negocios junto con la experiencia, el apoyo y el buen trabajo de la tecnología y una empresa como IBM.</p>
                </div>
                </div>
            </div>
            
            <div id="block-block-3" class="block block-block premio-div dark clearfix">

                            <h2 id="premio" class="title">Curso de captación para los asistentes al Hackathon</h2>
  
                              <div class="content">
                                <div class="col-md-12 sede">
                                <div class="col-md-4 curso">
                                    <h3>USAL
                                    <p></p>
                                    <p class="curso_text">Edificio Multiusos I+D+I Sala 11.1</p>
                                    <p class="curso_text">14 de marzo</p>
                                    <p class="curso_text">11:00-14:30 (alumnos)   16:00-17:00 (profesores)</p></h3>
                                    
                                </div>
                                <div class="col-md-4 curso">
                                    <h3>Madrid
                                    <p></p>
                                    <p class="curso_text">Próximamente</p></h3>
                                </div>
                                <div class="col-md-4 curso">
                                    <h3>UPV
                                    <p></p>
                                    <p class="curso_text">Próximamente</p></h3>
                                </div>
                                </div>
                             </div>
                        </div>
            <div id="block-block-4" class="block block-block premio-div dark clearfix">
                <h2 id="premio" class="title">Premio</h2>
  
                <div class="content">
                <div class="container dark">
	           <div class="col-md-12 premio">
		        <!--<div class="col-md-4 col-1 text-center">
			     <img src="styles/icons/icono-map.png" alt="Mapa">
			         <p>Tendrá lugar en Toledo durante los días <strong>20-22 de Junio de 2018</strong>
			         <br>
			         <a href="https://www.dcai-conference.net">www.dcai-conference.net</a>
			         </p>
		        </div>-->
		        <div class="col-md-6 col-1 text-center">
			     <img src="styles/icons/icono-premio.png" alt="Premio">
			         <p>A LOS PARTICIPANTES DEL HACKATON se le hará entrega de un diploma y podrán enviar un artículo a la 15th International Conference on Distributed Computing and Artificial Intelligence (DCAI)
			         </p>
		        </div>
		       <div class="col-md-6 col-2 text-center">
			         <img src="styles/icons/icono-hotel.png" alt="Hotel">
			         <p>A las 6 mejores propuestas se les <strong>pagará el alojamiento</strong> y recibirán una beca de viaje de <strong>100€</strong></p>
		       </div>
	          </div>
                </div>  
                </div>
            </div>
        
        <div id="block-block-5" class="block block-block gradient clearfix">

            <h2 id="participa" class="title">Participa</h2>
  
              <div class="content">
                <div class="container">
                <div class="col-md-12 participa">
                    <div class="col-md-4 col-1 text-center">
                        <a class="btn-primary btn" href="https://goo.gl/forms/XMzbs2zXKKGx4b413"><span>USAL</span></a>
                    </div>
                    <div class="col-md-4 col-2 text-center">
                        <a class="btn-primary btn"><span>NEXT</span></a>
                        <!--<a class="btn-primary btn openPopupG" data-href="form_group.php"><span>NEXT</span></a>-->
                    </div>
                    <div class="col-md-4 col-3 text-center">
                        <a class="btn-primary btn" ><span>UPV</span></a>
                    </div>
                    <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog" role="document">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>  
            </div>
        </div>
        </div>
         </div>
            <!-- EOF:#top-content-inside -->
    </div>
        <!-- EOF: #top-content -->
        
        
    <!-- #main-content -->
    <div id="main-content">
        <div class="container">
            <div class="row">
                <section class="col-md-12">
                    <!-- #main -->
                    <div id="main" class="clearfix">
                        <!-- #tabs -->
                        <div class="tabs">
                        </div>
                        <!-- EOF: #tabs -->
                        <!-- #action links -->
                        <!-- EOF: #action links -->
                        <div class="region region-content">
                        <div id="block-block-3" class="block block-block sede-div clearfix">

                            <h2 id="sedes" class="title">Sedes</h2>
  
                              <div class="content">
                                <div class="col-md-12 sede">
                                <div class="col-md-4 salamanca">
                                    <h3>Salamanca
                                    <p></p>
                                    <p class="sede_text">21/03/2018</p>
                                    <p class="sede_text">Edificio Multiusos I+D+I</p>
                                    <p class="sede_text">Calle Espejo s/n</p></h3>
                                    
                                </div>
                                <div class="col-md-4 madrid">
                                    <h3>Madrid
                                    <p></p>
                                    <p class="sede_text">Próximamente</p></h3>
                                </div>
                                <div class="col-md-4 valencia">
                                    <h3>Valencia
                                    <p></p>
                                    <p class="sede_text">Próximamente</p></h3>
                                </div>
                                </div>
                             </div>
                        </div>
                        </div>
                    </div>
                        <!-- EOF:#main -->
                </section>
            </div>
        </div>
    </div>
        <!-- EOF:#main-content -->

    </div>
    <!-- EOF: #page -->

    
        <!-- #bottom-content -->
    <div id="bottom-content" class="clearfix">
        <div class="container">

            <!-- #bottom-content-inside -->
            <div id="bottom-content-inside" class="clearfix">
                <div class="row">
                    <div class="col-md-12">
                      <div class="region region-bottom-content">
                            <div id="block-block-6" class="block block-block clearfix">
                              <div class="content">
                                <div class="col-md-12">
                                <div class="col-md-2 col-md-offset-1 ibm">
                                    <img src="styles/icons/IBM.png" alt="IBM">
                                </div>
                                <div class="col-md-2">
                                    <img src="styles/icons/next.png" alt="NEXT">
                                </div>
                                <div class="col-md-2 comillas">
                                    <img src="styles/icons/comillas.png" alt="Comillas">
                                </div>
                                <div class="col-md-2">
                                    <img src="styles/icons/politecnica.png" alt="Politécnica Valencia">
                                </div>
                                <div class="col-md-2">
                                    <img src="styles/icons/USAL-800.png" alt="USAL">
                                </div>
                                </div>  
                            </div>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
            <!-- EOF:#bottom-content-inside -->

        </div>
    </div>
    <!-- EOF: #bottom-content -->
    
        

    
</div>
 <!--EOF:#page-container -->  
</body>
</html>

