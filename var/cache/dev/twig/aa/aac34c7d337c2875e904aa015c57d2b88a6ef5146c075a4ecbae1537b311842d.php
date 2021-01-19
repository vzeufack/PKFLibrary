<?php

/* :default:home.html.twig */
class __TwigTemplate_3df41f87647c4524e504f2ee43bdf2044655745b7db37fbdbd4914a03f52764c extends Twig_Template
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
        $__internal_e3c0c1560bfa52e3a1bd9e2750b485ef4e7034dac01aca6544b531d8ef985b39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3c0c1560bfa52e3a1bd9e2750b485ef4e7034dac01aca6544b531d8ef985b39->enter($__internal_e3c0c1560bfa52e3a1bd9e2750b485ef4e7034dac01aca6544b531d8ef985b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:home.html.twig"));

        $__internal_8ad119b87dbf4baac1a9b3ebb0d36ce3f2f93c7dbf9b9acca1af039a89973446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad119b87dbf4baac1a9b3ebb0d36ce3f2f93c7dbf9b9acca1af039a89973446->enter($__internal_8ad119b87dbf4baac1a9b3ebb0d36ce3f2f93c7dbf9b9acca1af039a89973446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:home.html.twig"));

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
        
        $__internal_e3c0c1560bfa52e3a1bd9e2750b485ef4e7034dac01aca6544b531d8ef985b39->leave($__internal_e3c0c1560bfa52e3a1bd9e2750b485ef4e7034dac01aca6544b531d8ef985b39_prof);

        
        $__internal_8ad119b87dbf4baac1a9b3ebb0d36ce3f2f93c7dbf9b9acca1af039a89973446->leave($__internal_8ad119b87dbf4baac1a9b3ebb0d36ce3f2f93c7dbf9b9acca1af039a89973446_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d04a2af2d10bef2910b95d5d9e99089589e99b39e3945ecdee56dc81f047e9c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d04a2af2d10bef2910b95d5d9e99089589e99b39e3945ecdee56dc81f047e9c9->enter($__internal_d04a2af2d10bef2910b95d5d9e99089589e99b39e3945ecdee56dc81f047e9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_46169f1bda8f4c43c87c9450c6b4af5c4018d1d8cb526fdf411405a2dd2f46ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46169f1bda8f4c43c87c9450c6b4af5c4018d1d8cb526fdf411405a2dd2f46ad->enter($__internal_46169f1bda8f4c43c87c9450c6b4af5c4018d1d8cb526fdf411405a2dd2f46ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_46169f1bda8f4c43c87c9450c6b4af5c4018d1d8cb526fdf411405a2dd2f46ad->leave($__internal_46169f1bda8f4c43c87c9450c6b4af5c4018d1d8cb526fdf411405a2dd2f46ad_prof);

        
        $__internal_d04a2af2d10bef2910b95d5d9e99089589e99b39e3945ecdee56dc81f047e9c9->leave($__internal_d04a2af2d10bef2910b95d5d9e99089589e99b39e3945ecdee56dc81f047e9c9_prof);

    }

    // line 306
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d56956372570bff4cda1e0ac62b99a230f159ef66d1414009e2f1ce249cb884e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d56956372570bff4cda1e0ac62b99a230f159ef66d1414009e2f1ce249cb884e->enter($__internal_d56956372570bff4cda1e0ac62b99a230f159ef66d1414009e2f1ce249cb884e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7b16cbaa935756c928fa6f808ca612d59d26e8beb8cbc51699e92b9e030cc93f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b16cbaa935756c928fa6f808ca612d59d26e8beb8cbc51699e92b9e030cc93f->enter($__internal_7b16cbaa935756c928fa6f808ca612d59d26e8beb8cbc51699e92b9e030cc93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7b16cbaa935756c928fa6f808ca612d59d26e8beb8cbc51699e92b9e030cc93f->leave($__internal_7b16cbaa935756c928fa6f808ca612d59d26e8beb8cbc51699e92b9e030cc93f_prof);

        
        $__internal_d56956372570bff4cda1e0ac62b99a230f159ef66d1414009e2f1ce249cb884e->leave($__internal_d56956372570bff4cda1e0ac62b99a230f159ef66d1414009e2f1ce249cb884e_prof);

    }

    public function getTemplateName()
    {
        return ":default:home.html.twig";
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
", ":default:home.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app/Resources\\views/default/home.html.twig");
    }
}
