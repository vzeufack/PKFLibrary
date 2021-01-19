<?php

/* :default:sidebar.html.twig */
class __TwigTemplate_9969cfe561e808570b368a53ed94480677be1f49e25f993a606b52fc2e616462 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'whereYouAre' => array($this, 'block_whereYouAre'),
            'sidebar' => array($this, 'block_sidebar'),
            'adminAdd' => array($this, 'block_adminAdd'),
            'body' => array($this, 'block_body'),
            'pagination' => array($this, 'block_pagination'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b830ad8bde3bb35daf99e1b91412e460f999894ace3bf713d2b6d5cdae6ff198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b830ad8bde3bb35daf99e1b91412e460f999894ace3bf713d2b6d5cdae6ff198->enter($__internal_b830ad8bde3bb35daf99e1b91412e460f999894ace3bf713d2b6d5cdae6ff198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:sidebar.html.twig"));

        $__internal_400378b398d74ddd0f39bd07558b63945d862143094eb3bc8cda42d1b7e9d9d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400378b398d74ddd0f39bd07558b63945d862143094eb3bc8cda42d1b7e9d9d9->enter($__internal_400378b398d74ddd0f39bd07558b63945d862143094eb3bc8cda42d1b7e9d9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:sidebar.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
 
    <title>PKFLibrary</title>

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
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
                <img class=\"img-responsive img-hover\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Library Images/logopkf.png"), "html", null, true);
        echo "\" width=\"30px\" height=\"30px\" alt=\"\" style=\"float:left; margin-right:5px; margin-top:5px\">
                <a class=\"navbar-brand\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
        echo "\">PKFokam Institute of Excellence Library</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\" style=\"font-weight:bold\">
                    <li>
                        <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
        echo "\">Home</a>
                    </li>
                    <li>
                        <a href=\"#\">About</a>
                    </li>
                    ";
        // line 62
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 63
            echo "                       <li>
                          <a href=\"";
            // line 64
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bookList");
            echo "\">Administration</a>
                       </li>
                    ";
        }
        // line 67
        echo "                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> My Account <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\"  >
                            <li>
                                <a href=\"#\" style=\"font-weight:bold\" >My Profile</a>
                            </li>
                            <li>
                                <a href=\"#\" style=\"font-weight:bold\" >My Activities</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" style=\"font-weight:bold\">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class=\"container\">

        <!-- Page Heading/Breadcrumbs -->
        <div class=\"row\" style=\"margin-top:10px\">
            <div class=\"col-lg-12\">
                
                <ol class=\"breadcrumb\">
                    <li><a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
        echo "\">Home</a>
                    </li>
                    ";
        // line 98
        $this->displayBlock('whereYouAre', $context, $blocks);
        // line 102
        echo "                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class=\"row\">
        
            <!-- Sidebar Column -->
            <div class=\"col-md-3\">
            ";
        // line 112
        $this->displayBlock('sidebar', $context, $blocks);
        // line 124
        echo "            </div>
            <!-- Content Column -->
        
            
                <div class=\"col-md-9\" >
                   <div class=\"col-md-4\"> 

                    <div class=\"input-group\" style=\"margin-left:250px; margin-bottom:15px\">
                        <input type=\"text\" class=\"form-control\" style=\"width:300px\">
                        <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\"  type=\"button\" ><i class=\"fa fa-search\"></i></button>
                        </span>
                    <!-- /.input-group -->
                    </div>                    
                   </div>
                   ";
        // line 139
        $this->displayBlock('adminAdd', $context, $blocks);
        // line 142
        echo "               </div>

           
            <div class=\"col-md-9\" >
                ";
        // line 146
        $this->displayBlock('body', $context, $blocks);
        // line 148
        echo "            <!-- Pagination -->
        ";
        // line 149
        $this->displayBlock('pagination', $context, $blocks);
        // line 151
        echo "    </div>
            
</div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p style=\"font-weight:bold\">Copyright &copy; PKFokam Institute Of Excellence</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    ";
        // line 170
        $this->displayBlock('javascripts', $context, $blocks);
        // line 191
        echo "
</body>

</html>
";
        
        $__internal_b830ad8bde3bb35daf99e1b91412e460f999894ace3bf713d2b6d5cdae6ff198->leave($__internal_b830ad8bde3bb35daf99e1b91412e460f999894ace3bf713d2b6d5cdae6ff198_prof);

        
        $__internal_400378b398d74ddd0f39bd07558b63945d862143094eb3bc8cda42d1b7e9d9d9->leave($__internal_400378b398d74ddd0f39bd07558b63945d862143094eb3bc8cda42d1b7e9d9d9_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_628364163ba07fb00e1d79733765a2757a66afc75b2ed1f1b15925afc3b9c1e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_628364163ba07fb00e1d79733765a2757a66afc75b2ed1f1b15925afc3b9c1e9->enter($__internal_628364163ba07fb00e1d79733765a2757a66afc75b2ed1f1b15925afc3b9c1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_91e95bdfe5a9e16dcb56ac61b4abb8b22fe792a10da74e35f87a46711c3f1c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e95bdfe5a9e16dcb56ac61b4abb8b22fe792a10da74e35f87a46711c3f1c91->enter($__internal_91e95bdfe5a9e16dcb56ac61b4abb8b22fe792a10da74e35f87a46711c3f1c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"logopkf.ico\" />
        <!-- Bootstrap Core CSS -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- Custom CSS -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/modern-business.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/> 
        <!-- Custom Fonts -->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/> 
        <!-- TABLE STYLES-->
         <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/dataTables/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
       
    ";
        
        $__internal_91e95bdfe5a9e16dcb56ac61b4abb8b22fe792a10da74e35f87a46711c3f1c91->leave($__internal_91e95bdfe5a9e16dcb56ac61b4abb8b22fe792a10da74e35f87a46711c3f1c91_prof);

        
        $__internal_628364163ba07fb00e1d79733765a2757a66afc75b2ed1f1b15925afc3b9c1e9->leave($__internal_628364163ba07fb00e1d79733765a2757a66afc75b2ed1f1b15925afc3b9c1e9_prof);

    }

    // line 98
    public function block_whereYouAre($context, array $blocks = array())
    {
        $__internal_4dd7f73ac5771f36faf2b081c7c448fd72cd3dbeefaab624859cbdd906c12157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dd7f73ac5771f36faf2b081c7c448fd72cd3dbeefaab624859cbdd906c12157->enter($__internal_4dd7f73ac5771f36faf2b081c7c448fd72cd3dbeefaab624859cbdd906c12157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "whereYouAre"));

        $__internal_963ac7036f52ba573445492f4e702951ea3c8e96a67741d2bc86df949c89f7de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963ac7036f52ba573445492f4e702951ea3c8e96a67741d2bc86df949c89f7de->enter($__internal_963ac7036f52ba573445492f4e702951ea3c8e96a67741d2bc86df949c89f7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "whereYouAre"));

        // line 99
        echo "                       <li><a class=\"active\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
        echo "\" style=\"color:black\">All</a>
                       </li>
                    ";
        
        $__internal_963ac7036f52ba573445492f4e702951ea3c8e96a67741d2bc86df949c89f7de->leave($__internal_963ac7036f52ba573445492f4e702951ea3c8e96a67741d2bc86df949c89f7de_prof);

        
        $__internal_4dd7f73ac5771f36faf2b081c7c448fd72cd3dbeefaab624859cbdd906c12157->leave($__internal_4dd7f73ac5771f36faf2b081c7c448fd72cd3dbeefaab624859cbdd906c12157_prof);

    }

    // line 112
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_2185379c5b4ebcb68d0230dfc1b254db88bad545ec21b171cd78990280b50ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2185379c5b4ebcb68d0230dfc1b254db88bad545ec21b171cd78990280b50ad3->enter($__internal_2185379c5b4ebcb68d0230dfc1b254db88bad545ec21b171cd78990280b50ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_86489a5478733d546de010f2568896aa76940cd04afaed46378fa9142d1645a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86489a5478733d546de010f2568896aa76940cd04afaed46378fa9142d1645a3->enter($__internal_86489a5478733d546de010f2568896aa76940cd04afaed46378fa9142d1645a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 113
        echo "                <h4 style=\"text-align:center\">Categories</h4>
                <div class=\"list-group\">
                    
                    
                      ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            echo "                    
                         <a href=\" ";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showCategory", array("code" => $this->getAttribute($context["category"], "categoryCode", array()))), "html", null, true);
            echo "\" class=\"list-group-item\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryName", array()), "html", null, true);
            echo "</a>                                  
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                 
                                    
                </div>
            ";
        
        $__internal_86489a5478733d546de010f2568896aa76940cd04afaed46378fa9142d1645a3->leave($__internal_86489a5478733d546de010f2568896aa76940cd04afaed46378fa9142d1645a3_prof);

        
        $__internal_2185379c5b4ebcb68d0230dfc1b254db88bad545ec21b171cd78990280b50ad3->leave($__internal_2185379c5b4ebcb68d0230dfc1b254db88bad545ec21b171cd78990280b50ad3_prof);

    }

    // line 139
    public function block_adminAdd($context, array $blocks = array())
    {
        $__internal_519cc1f6374dedc33a9e09442aa80cd987a03f8001e7322f6535262933f6a558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_519cc1f6374dedc33a9e09442aa80cd987a03f8001e7322f6535262933f6a558->enter($__internal_519cc1f6374dedc33a9e09442aa80cd987a03f8001e7322f6535262933f6a558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminAdd"));

        $__internal_c1474a38f69e83cfad77518235c32be0fe4425c47d21abdf4138f1fa4766d4a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1474a38f69e83cfad77518235c32be0fe4425c47d21abdf4138f1fa4766d4a6->enter($__internal_c1474a38f69e83cfad77518235c32be0fe4425c47d21abdf4138f1fa4766d4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminAdd"));

        // line 140
        echo "                      
                   ";
        
        $__internal_c1474a38f69e83cfad77518235c32be0fe4425c47d21abdf4138f1fa4766d4a6->leave($__internal_c1474a38f69e83cfad77518235c32be0fe4425c47d21abdf4138f1fa4766d4a6_prof);

        
        $__internal_519cc1f6374dedc33a9e09442aa80cd987a03f8001e7322f6535262933f6a558->leave($__internal_519cc1f6374dedc33a9e09442aa80cd987a03f8001e7322f6535262933f6a558_prof);

    }

    // line 146
    public function block_body($context, array $blocks = array())
    {
        $__internal_201237e165395051724099751ed2259df3cf089f86d23ec7b475f8190236513a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_201237e165395051724099751ed2259df3cf089f86d23ec7b475f8190236513a->enter($__internal_201237e165395051724099751ed2259df3cf089f86d23ec7b475f8190236513a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_59882150d375cb4e4e5b0358c8e3effdd35dc66683d99a745c8fc9c7c575bc51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59882150d375cb4e4e5b0358c8e3effdd35dc66683d99a745c8fc9c7c575bc51->enter($__internal_59882150d375cb4e4e5b0358c8e3effdd35dc66683d99a745c8fc9c7c575bc51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 147
        echo "            ";
        
        $__internal_59882150d375cb4e4e5b0358c8e3effdd35dc66683d99a745c8fc9c7c575bc51->leave($__internal_59882150d375cb4e4e5b0358c8e3effdd35dc66683d99a745c8fc9c7c575bc51_prof);

        
        $__internal_201237e165395051724099751ed2259df3cf089f86d23ec7b475f8190236513a->leave($__internal_201237e165395051724099751ed2259df3cf089f86d23ec7b475f8190236513a_prof);

    }

    // line 149
    public function block_pagination($context, array $blocks = array())
    {
        $__internal_efb6caa5f30fd45603535051bf509cef9e643c3fac441ac201b7cd52413477c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efb6caa5f30fd45603535051bf509cef9e643c3fac441ac201b7cd52413477c6->enter($__internal_efb6caa5f30fd45603535051bf509cef9e643c3fac441ac201b7cd52413477c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        $__internal_77d13237389ec11ef63749133176278e1898f796138d798b147e2f2274367ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d13237389ec11ef63749133176278e1898f796138d798b147e2f2274367ae7->enter($__internal_77d13237389ec11ef63749133176278e1898f796138d798b147e2f2274367ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        // line 150
        echo "        ";
        
        $__internal_77d13237389ec11ef63749133176278e1898f796138d798b147e2f2274367ae7->leave($__internal_77d13237389ec11ef63749133176278e1898f796138d798b147e2f2274367ae7_prof);

        
        $__internal_efb6caa5f30fd45603535051bf509cef9e643c3fac441ac201b7cd52413477c6->leave($__internal_efb6caa5f30fd45603535051bf509cef9e643c3fac441ac201b7cd52413477c6_prof);

    }

    // line 170
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6205522b6735c73d069e0f1bafb0706cb0cb3ed4dd55f1ec685d58740b6b524b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6205522b6735c73d069e0f1bafb0706cb0cb3ed4dd55f1ec685d58740b6b524b->enter($__internal_6205522b6735c73d069e0f1bafb0706cb0cb3ed4dd55f1ec685d58740b6b524b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_82f383168d4cdf2ef3379506ef2c7e95d9f81c001670b72a58750545678e696b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f383168d4cdf2ef3379506ef2c7e95d9f81c001670b72a58750545678e696b->enter($__internal_82f383168d4cdf2ef3379506ef2c7e95d9f81c001670b72a58750545678e696b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 171
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script> 
    <script type=\"text/javascript\" src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 
    <!-- Script to Activate the Carousel -->
    <script>
    \$('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    <!-- DATA TABLE SCRIPTS -->
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/dataTables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/dataTables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$(document).ready(function () {
                \$('#dataTables-example').dataTable();
            });
    </script>
    <!-- CUSTOM SCRIPTS -->
            
    ";
        
        $__internal_82f383168d4cdf2ef3379506ef2c7e95d9f81c001670b72a58750545678e696b->leave($__internal_82f383168d4cdf2ef3379506ef2c7e95d9f81c001670b72a58750545678e696b_prof);

        
        $__internal_6205522b6735c73d069e0f1bafb0706cb0cb3ed4dd55f1ec685d58740b6b524b->leave($__internal_6205522b6735c73d069e0f1bafb0706cb0cb3ed4dd55f1ec685d58740b6b524b_prof);

    }

    public function getTemplateName()
    {
        return ":default:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 182,  424 => 181,  413 => 173,  409 => 172,  406 => 171,  397 => 170,  387 => 150,  378 => 149,  368 => 147,  359 => 146,  348 => 140,  339 => 139,  326 => 120,  316 => 118,  310 => 117,  304 => 113,  295 => 112,  281 => 99,  272 => 98,  259 => 23,  254 => 21,  249 => 19,  244 => 17,  240 => 15,  231 => 14,  217 => 191,  215 => 170,  194 => 151,  192 => 149,  189 => 148,  187 => 146,  181 => 142,  179 => 139,  162 => 124,  160 => 112,  148 => 102,  146 => 98,  141 => 96,  119 => 77,  107 => 67,  101 => 64,  98 => 63,  96 => 62,  88 => 57,  79 => 51,  75 => 50,  49 => 26,  47 => 14,  32 => 1,);
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
 
    <title>PKFLibrary</title>

    {% block stylesheets %}
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"logopkf.ico\" />
        <!-- Bootstrap Core CSS -->
        <link href=\"{{asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" />
        <!-- Custom CSS -->
        <link href=\"{{asset('assets/css/modern-business.css')}}\" rel=\"stylesheet\"/> 
        <!-- Custom Fonts -->
        <link href=\"{{asset('assets/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\"/> 
        <!-- TABLE STYLES-->
         <link href=\"{{ asset('assets/js/dataTables/dataTables.bootstrap.css' ) }}\" rel=\"stylesheet\" />
       
    {% endblock %}

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
                <img class=\"img-responsive img-hover\" src=\"{{ asset('Library Images/logopkf.png') }}\" width=\"30px\" height=\"30px\" alt=\"\" style=\"float:left; margin-right:5px; margin-top:5px\">
                <a class=\"navbar-brand\" href=\"{{ path('homepage',{'page': page}) }}\">PKFokam Institute of Excellence Library</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\" style=\"font-weight:bold\">
                    <li>
                        <a href=\"{{ path('homepage',{'page': page}) }}\">Home</a>
                    </li>
                    <li>
                        <a href=\"#\">About</a>
                    </li>
                    {% if is_granted(\"ROLE_ADMIN\") %}
                       <li>
                          <a href=\"{{ path('bookList') }}\">Administration</a>
                       </li>
                    {% endif %}
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> My Account <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\"  >
                            <li>
                                <a href=\"#\" style=\"font-weight:bold\" >My Profile</a>
                            </li>
                            <li>
                                <a href=\"#\" style=\"font-weight:bold\" >My Activities</a>
                            </li>
                            <li>
                                <a href=\"{{ path('fos_user_security_logout') }}\" style=\"font-weight:bold\">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class=\"container\">

        <!-- Page Heading/Breadcrumbs -->
        <div class=\"row\" style=\"margin-top:10px\">
            <div class=\"col-lg-12\">
                
                <ol class=\"breadcrumb\">
                    <li><a href=\"{{ path('homepage',{'page': page}) }}\">Home</a>
                    </li>
                    {% block whereYouAre %}
                       <li><a class=\"active\" href=\"{{ path('homepage',{'page': page}) }}\" style=\"color:black\">All</a>
                       </li>
                    {% endblock %}
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class=\"row\">
        
            <!-- Sidebar Column -->
            <div class=\"col-md-3\">
            {% block sidebar %}
                <h4 style=\"text-align:center\">Categories</h4>
                <div class=\"list-group\">
                    
                    
                      {% for category in categories %}                    
                         <a href=\" {{ path('showCategory',{'code': category.categoryCode}) }}\" class=\"list-group-item\">{{category.categoryName}}</a>                                  
                      {% endfor %}
                 
                                    
                </div>
            {% endblock %}
            </div>
            <!-- Content Column -->
        
            
                <div class=\"col-md-9\" >
                   <div class=\"col-md-4\"> 

                    <div class=\"input-group\" style=\"margin-left:250px; margin-bottom:15px\">
                        <input type=\"text\" class=\"form-control\" style=\"width:300px\">
                        <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\"  type=\"button\" ><i class=\"fa fa-search\"></i></button>
                        </span>
                    <!-- /.input-group -->
                    </div>                    
                   </div>
                   {% block adminAdd %}
                      
                   {% endblock %}
               </div>

           
            <div class=\"col-md-9\" >
                {% block body %}
            {% endblock %}
            <!-- Pagination -->
        {% block pagination %}
        {% endblock %}
    </div>
            
</div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p style=\"font-weight:bold\">Copyright &copy; PKFokam Institute Of Excellence</p>
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
    <!-- DATA TABLE SCRIPTS -->
    <script src=\"{{ asset('assets/js/dataTables/jquery.dataTables.js')}}\"></script>
    <script src=\"{{asset('assets/js/dataTables/dataTables.bootstrap.js')}}\"></script>
        <script>
            \$(document).ready(function () {
                \$('#dataTables-example').dataTable();
            });
    </script>
    <!-- CUSTOM SCRIPTS -->
            
    {% endblock %}

</body>

</html>
", ":default:sidebar.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app/Resources\\views/default/sidebar.html.twig");
    }
}
