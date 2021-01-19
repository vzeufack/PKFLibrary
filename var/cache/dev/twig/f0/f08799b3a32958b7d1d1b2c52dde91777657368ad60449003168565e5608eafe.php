<?php

/* default/home.html.twig */
class __TwigTemplate_976a70f1841b7ec712d74084ab9149cafc0af4e1d94c6906a6e6a689372eb2b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eae4057ed01b5d61f60858247d74a659c31780af00ca341a8af55055b76b6245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eae4057ed01b5d61f60858247d74a659c31780af00ca341a8af55055b76b6245->enter($__internal_eae4057ed01b5d61f60858247d74a659c31780af00ca341a8af55055b76b6245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/home.html.twig"));

        $__internal_d33d5b7e7be7a8a61915af5295192353c766c5d5c043f8cad69a9818f545b781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d33d5b7e7be7a8a61915af5295192353c766c5d5c043f8cad69a9818f545b781->enter($__internal_d33d5b7e7be7a8a61915af5295192353c766c5d5c043f8cad69a9818f545b781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
    <title>Modern Business - Start Bootstrap Template</title>

    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>
 
<body>

    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"about.html\">About</a>
                    </li>
                    <li>
                        <a href=\"services.html\">Services</a>
                    </li>
                    <li>
                        <a href=\"contact.html\">Contact</a>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Portfolio <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"portfolio-1-col.html\">1 Column Portfolio</a>
                            </li>
                            <li>
                                <a href=\"portfolio-2-col.html\">2 Column Portfolio</a>
                            </li>
                            <li>
                                <a href=\"portfolio-3-col.html\">3 Column Portfolio</a>
                            </li>
                            <li>
                                <a href=\"portfolio-4-col.html\">4 Column Portfolio</a>
                            </li>
                            <li>
                                <a href=\"portfolio-item.html\">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Blog <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"blog-home-1.html\">Blog Home 1</a>
                            </li>
                            <li>
                                <a href=\"blog-home-2.html\">Blog Home 2</a>
                            </li>
                            <li>
                                <a href=\"blog-post.html\">Blog Post</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Other Pages <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"full-width.html\">Full Width Page</a>
                            </li>
                            <li>
                                <a href=\"sidebar.html\">Sidebar Page</a>
                            </li>
                            <li>
                                <a href=\"faq.html\">FAQ</a>
                            </li>
                            <li>
                                <a href=\"404.html\">404</a>
                            </li>
                            <li>
                                <a href=\"pricing.html\">Pricing Table</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                       <a href=\"";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\"> <button class=\"btn btn-primary\" style=\"margin-top:-5px\">Login</button> </a>
                                                
                    </li>
                    <li>
                        <a href=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" > <button class=\"btn btn-default\" style=\"margin-top:-5px\"  >Create Account</button> </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id=\"myCarousel\" class=\"carousel slide\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <div class=\"fill\" style=\"background-image:url('http://placehold.it/1900x1080&text=Slide One');\"></div>
                <div class=\"carousel-caption\">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"fill\" style=\"background-image:url('http://placehold.it/1900x1080&text=Slide Two');\"></div>
                <div class=\"carousel-caption\">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"fill\" style=\"background-image:url('http://placehold.it/1900x1080&text=Slide Three');\"></div>
                <div class=\"carousel-caption\">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
            <span class=\"icon-prev\"></span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
            <span class=\"icon-next\"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class=\"container\">

        <!-- Marketing Icons Section -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">
                    Welcome to Modern Business
                </h1>
            </div>
            <div class=\"col-md-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h4><i class=\"fa fa-fw fa-check\"></i> Bootstrap v3.3.7</h4>
                    </div>
                    <div class=\"panel-body\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href=\"#\" class=\"btn btn-default\">Learn More</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h4><i class=\"fa fa-fw fa-gift\"></i> Free &amp; Open Source</h4>
                    </div>
                    <div class=\"panel-body\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href=\"#\" class=\"btn btn-default\">Learn More</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h4><i class=\"fa fa-fw fa-compass\"></i> Easy to Use</h4>
                    </div>
                    <div class=\"panel-body\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href=\"#\" class=\"btn btn-default\">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2 class=\"page-header\">Portfolio Heading</h2>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-portfolio img-hover\" src=\"http://placehold.it/700x450\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-portfolio img-hover\" src=\"http://placehold.it/700x450\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-portfolio img-hover\" src=\"http://placehold.it/700x450\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-portfolio img-hover\" src=\"http://placehold.it/700x450\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-portfolio img-hover\" src=\"http://placehold.it/700x450\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-portfolio img-hover\" src=\"http://placehold.it/700x450\" alt=\"\">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2 class=\"page-header\">Modern Business Features</h2>
            </div>
            <div class=\"col-md-6\">
                <p>The Modern Business template by Start Bootstrap includes:</p>
                <ul>
                    <li><strong>Bootstrap v3.3.7</strong>
                    </li>
                    <li>jQuery v1.11.1</li>
                    <li>Font Awesome v4.2.0</li>
                    <li>Working PHP contact form with validation</li>
                    <li>Unstyled page elements for easy customization</li>
                    <li>17 HTML pages</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            </div>
            <div class=\"col-md-6\">
                <img class=\"img-responsive\" src=\"http://placehold.it/700x450\" alt=\"\">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class=\"well\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class=\"col-md-4\">
                    <a class=\"btn btn-lg btn-default btn-block\" href=\"#\">Call to Action</a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    ";
        // line 306
        $this->displayBlock('javascripts', $context, $blocks);
        // line 318
        echo "
    

</body>

</html>
";
        
        $__internal_eae4057ed01b5d61f60858247d74a659c31780af00ca341a8af55055b76b6245->leave($__internal_eae4057ed01b5d61f60858247d74a659c31780af00ca341a8af55055b76b6245_prof);

        
        $__internal_d33d5b7e7be7a8a61915af5295192353c766c5d5c043f8cad69a9818f545b781->leave($__internal_d33d5b7e7be7a8a61915af5295192353c766c5d5c043f8cad69a9818f545b781_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ee9fee3b4dc82a93fc5fe1287323885d45f27dadcccd38f240898d4909ebaeb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee9fee3b4dc82a93fc5fe1287323885d45f27dadcccd38f240898d4909ebaeb4->enter($__internal_ee9fee3b4dc82a93fc5fe1287323885d45f27dadcccd38f240898d4909ebaeb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5fcd8fd2cb408d7e8e3f891ebeb5921cd1d981ee536a63cdedd96c8f50d5c287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fcd8fd2cb408d7e8e3f891ebeb5921cd1d981ee536a63cdedd96c8f50d5c287->enter($__internal_5fcd8fd2cb408d7e8e3f891ebeb5921cd1d981ee536a63cdedd96c8f50d5c287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"logopkf.ico\" />
        <!-- Bootstrap Core CSS -->
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- Custom CSS -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/modern-business.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
        <!-- Custom Fonts -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"> 
    ";
        
        $__internal_5fcd8fd2cb408d7e8e3f891ebeb5921cd1d981ee536a63cdedd96c8f50d5c287->leave($__internal_5fcd8fd2cb408d7e8e3f891ebeb5921cd1d981ee536a63cdedd96c8f50d5c287_prof);

        
        $__internal_ee9fee3b4dc82a93fc5fe1287323885d45f27dadcccd38f240898d4909ebaeb4->leave($__internal_ee9fee3b4dc82a93fc5fe1287323885d45f27dadcccd38f240898d4909ebaeb4_prof);

    }

    // line 306
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_43efca8f12cccd3abeda56b7b6b09537a1857ca5aef206b52325ef906c0f4b68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43efca8f12cccd3abeda56b7b6b09537a1857ca5aef206b52325ef906c0f4b68->enter($__internal_43efca8f12cccd3abeda56b7b6b09537a1857ca5aef206b52325ef906c0f4b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_439926023ed90cef78262094403f350e0470c0999114adc335ebfc8e47b1fbdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439926023ed90cef78262094403f350e0470c0999114adc335ebfc8e47b1fbdc->enter($__internal_439926023ed90cef78262094403f350e0470c0999114adc335ebfc8e47b1fbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 307
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script> 
    <script type=\"text/javascript\" src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 
    <!-- Script to Activate the Carousel -->
    <script>
    \$('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
            
    ";
        
        $__internal_439926023ed90cef78262094403f350e0470c0999114adc335ebfc8e47b1fbdc->leave($__internal_439926023ed90cef78262094403f350e0470c0999114adc335ebfc8e47b1fbdc_prof);

        
        $__internal_43efca8f12cccd3abeda56b7b6b09537a1857ca5aef206b52325ef906c0f4b68->leave($__internal_43efca8f12cccd3abeda56b7b6b09537a1857ca5aef206b52325ef906c0f4b68_prof);

    }

    public function getTemplateName()
    {
        return "default/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 309,  400 => 308,  397 => 307,  388 => 306,  376 => 19,  371 => 17,  366 => 15,  362 => 13,  353 => 12,  337 => 318,  335 => 306,  147 => 121,  140 => 117,  42 => 21,  40 => 12,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    {% block stylesheets %}
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"logopkf.ico\" />
        <!-- Bootstrap Core CSS -->
        <link href=\"{{asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" />
        <!-- Custom CSS -->
        <link href=\"{{asset('assets/css/modern-business.css')}}\" rel=\"stylesheet\"> 
        <!-- Custom Fonts -->
        <link href=\"{{asset('assets/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\"> 
    {% endblock %}

    <title>Modern Business - Start Bootstrap Template</title>

    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>
 
<body>

    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"about.html\">About</a>
                    </li>
                    <li>
                        <a href=\"services.html\">Services</a>
                    </li>
                    <li>
                        <a href=\"contact.html\">Contact</a>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Portfolio <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"portfolio-1-col.html\">1 Column Portfolio</a>
                            </li>
                            <li>
                                <a href=\"portfolio-2-col.html\">2 Column Portfolio</a>
                            </li>
                            <li>
                                <a href=\"portfolio-3-col.html\">3 Column Portfolio</a>
                            </li>
                            <li>
                                <a href=\"portfolio-4-col.html\">4 Column Portfolio</a>
                            </li>
                            <li>
                                <a href=\"portfolio-item.html\">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Blog <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"blog-home-1.html\">Blog Home 1</a>
                            </li>
                            <li>
                                <a href=\"blog-home-2.html\">Blog Home 2</a>
                            </li>
                            <li>
                                <a href=\"blog-post.html\">Blog Post</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Other Pages <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"full-width.html\">Full Width Page</a>
                            </li>
                            <li>
                                <a href=\"sidebar.html\">Sidebar Page</a>
                            </li>
                            <li>
                                <a href=\"faq.html\">FAQ</a>
                            </li>
                            <li>
                                <a href=\"404.html\">404</a>
                            </li>
                            <li>
                                <a href=\"pricing.html\">Pricing Table</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                       <a href=\"{{ path('fos_user_security_login') }}\"> <button class=\"btn btn-primary\" style=\"margin-top:-5px\">Login</button> </a>
                                                
                    </li>
                    <li>
                        <a href=\"{{ path('fos_user_registration_register') }}\" > <button class=\"btn btn-default\" style=\"margin-top:-5px\"  >Create Account</button> </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id=\"myCarousel\" class=\"carousel slide\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <div class=\"fill\" style=\"background-image:url('http://placehold.it/1900x1080&text=Slide One');\"></div>
                <div class=\"carousel-caption\">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"fill\" style=\"background-image:url('http://placehold.it/1900x1080&text=Slide Two');\"></div>
                <div class=\"carousel-caption\">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"fill\" style=\"background-image:url('http://placehold.it/1900x1080&text=Slide Three');\"></div>
                <div class=\"carousel-caption\">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
            <span class=\"icon-prev\"></span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
            <span class=\"icon-next\"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class=\"container\">

        <!-- Marketing Icons Section -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">
                    Welcome to Modern Business
                </h1>
            </div>
            <div class=\"col-md-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h4><i class=\"fa fa-fw fa-check\"></i> Bootstrap v3.3.7</h4>
                    </div>
                    <div class=\"panel-body\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href=\"#\" class=\"btn btn-default\">Learn More</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h4><i class=\"fa fa-fw fa-gift\"></i> Free &amp; Open Source</h4>
                    </div>
                    <div class=\"panel-body\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href=\"#\" class=\"btn btn-default\">Learn More</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h4><i class=\"fa fa-fw fa-compass\"></i> Easy to Use</h4>
                    </div>
                    <div class=\"panel-body\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href=\"#\" class=\"btn btn-default\">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2 class=\"page-header\">Portfolio Heading</h2>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-portfolio img-hover\" src=\"http://placehold.it/700x450\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-portfolio img-hover\" src=\"http://placehold.it/700x450\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-portfolio img-hover\" src=\"http://placehold.it/700x450\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-portfolio img-hover\" src=\"http://placehold.it/700x450\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-portfolio img-hover\" src=\"http://placehold.it/700x450\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-portfolio img-hover\" src=\"http://placehold.it/700x450\" alt=\"\">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2 class=\"page-header\">Modern Business Features</h2>
            </div>
            <div class=\"col-md-6\">
                <p>The Modern Business template by Start Bootstrap includes:</p>
                <ul>
                    <li><strong>Bootstrap v3.3.7</strong>
                    </li>
                    <li>jQuery v1.11.1</li>
                    <li>Font Awesome v4.2.0</li>
                    <li>Working PHP contact form with validation</li>
                    <li>Unstyled page elements for easy customization</li>
                    <li>17 HTML pages</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            </div>
            <div class=\"col-md-6\">
                <img class=\"img-responsive\" src=\"http://placehold.it/700x450\" alt=\"\">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class=\"well\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class=\"col-md-4\">
                    <a class=\"btn btn-lg btn-default btn-block\" href=\"#\">Call to Action</a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    {% block javascripts %}

    <script type=\"text/javascript\" src=\"{{asset('assets/js/jquery.js')}}\"></script> 
    <script type=\"text/javascript\" src=\"{{asset('assets/js/bootstrap.min.js')}}\"></script> 
    <!-- Script to Activate the Carousel -->
    <script>
    \$('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
            
    {% endblock %}

    

</body>

</html>
", "default/home.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\default\\home.html.twig");
    }
}
