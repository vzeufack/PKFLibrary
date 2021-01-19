<?php

/* pkflibrary/miscellanous.html.twig  */
class __TwigTemplate_41b6b2ebb7c4d5abe11afa115aab416c7c505eab5a4a626ed558e2c8ede5b37d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a75bde55d5571effe95bf056862588b59bcf5c5ae387b94a11e61d064f3fd4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a75bde55d5571effe95bf056862588b59bcf5c5ae387b94a11e61d064f3fd4c->enter($__internal_6a75bde55d5571effe95bf056862588b59bcf5c5ae387b94a11e61d064f3fd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/miscellanous.html.twig "));

        $__internal_e813711d08fd2484d12191b8048653771493881f33b12cb9bdc06d3c49fc5a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e813711d08fd2484d12191b8048653771493881f33b12cb9bdc06d3c49fc5a48->enter($__internal_e813711d08fd2484d12191b8048653771493881f33b12cb9bdc06d3c49fc5a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/miscellanous.html.twig "));

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
        // line 27
        echo "
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
            <style>
              .dariusDiv{
                background-color: #f5f5f5;
                border-radius: 4px;
                padding: 8px 15px;
              }
              .dariusSpan{
                font-family : 'calibri';
                font-size : '18px';
                font-weight : bold ;
                font-style: italic;
              }
          </style>

    </head>


    <body>


        <!-- Navigation -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\" style=\"height:5%;\">
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
        // line 65
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Library Images/logopkf.png")), "html", null, true);
        echo "\" width=\"30px\" height=\"35px\" alt=\"\" style=\"float:left; margin-right:5px; margin-top:5px\">
                    <a class=\"navbar-brand\" style=\"color:white;\">PKFokam Institute of Excellence Library</a>
                </div>

                ";
        // line 69
        $this->displayBlock('menu', $context, $blocks);
        // line 120
        echo "
     </div>
     <!-- /.container -->
 </nav>

 ";
        // line 125
        $this->displayBlock('body', $context, $blocks);
        // line 146
        echo "<!-- /.container -->
";
        // line 147
        $this->displayBlock('footer', $context, $blocks);
        // line 155
        echo "


";
        // line 158
        $this->displayBlock('javascripts', $context, $blocks);
        // line 179
        echo "
</body>

</html>
";
        
        $__internal_6a75bde55d5571effe95bf056862588b59bcf5c5ae387b94a11e61d064f3fd4c->leave($__internal_6a75bde55d5571effe95bf056862588b59bcf5c5ae387b94a11e61d064f3fd4c_prof);

        
        $__internal_e813711d08fd2484d12191b8048653771493881f33b12cb9bdc06d3c49fc5a48->leave($__internal_e813711d08fd2484d12191b8048653771493881f33b12cb9bdc06d3c49fc5a48_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8189d588a5ce7b360887052617ed5807766c01ad99a6b9564f8e99849ce1f22d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8189d588a5ce7b360887052617ed5807766c01ad99a6b9564f8e99849ce1f22d->enter($__internal_8189d588a5ce7b360887052617ed5807766c01ad99a6b9564f8e99849ce1f22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e8f651c8874e2b9a2863dfbe05e9213c4ae3b1cc559362cde1a4a5bbd3dc6dd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f651c8874e2b9a2863dfbe05e9213c4ae3b1cc559362cde1a4a5bbd3dc6dd3->enter($__internal_e8f651c8874e2b9a2863dfbe05e9213c4ae3b1cc559362cde1a4a5bbd3dc6dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"logopkf.ico\" />
        <!-- Bootstrap Core CSS -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- Custom CSS -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/modern-business.css")), "html", null, true);
        echo "\" rel=\"stylesheet\"/> 
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/misc.css")), "html", null, true);
        echo "\" rel=\"stylesheet\"/> 
        <!-- Custom Fonts -->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/font-awesome/css/font-awesome.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\"/> 
        <!-- TABLE STYLES-->
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/dataTables/dataTables.bootstrap.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        
    ";
        
        $__internal_e8f651c8874e2b9a2863dfbe05e9213c4ae3b1cc559362cde1a4a5bbd3dc6dd3->leave($__internal_e8f651c8874e2b9a2863dfbe05e9213c4ae3b1cc559362cde1a4a5bbd3dc6dd3_prof);

        
        $__internal_8189d588a5ce7b360887052617ed5807766c01ad99a6b9564f8e99849ce1f22d->leave($__internal_8189d588a5ce7b360887052617ed5807766c01ad99a6b9564f8e99849ce1f22d_prof);

    }

    // line 69
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a69d6766efa963c6650eb9ecbc723c8a791e5ec0b44b175c593acbd026f050eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a69d6766efa963c6650eb9ecbc723c8a791e5ec0b44b175c593acbd026f050eb->enter($__internal_a69d6766efa963c6650eb9ecbc723c8a791e5ec0b44b175c593acbd026f050eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_806a1ffd04b6169ab88e1c9f3af6e1effbd10d9767ef12e15b4e0d3584e387d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806a1ffd04b6169ab88e1c9f3af6e1effbd10d9767ef12e15b4e0d3584e387d9->enter($__internal_806a1ffd04b6169ab88e1c9f3af6e1effbd10d9767ef12e15b4e0d3584e387d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 70
        echo "
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav navbar-right\" style=\"font-weight:bold;background-color:black;\">
                            <li>
                                <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", array("page" => 1))), "html", null, true);
        echo "\"><i class=\"fa fa-home\"></i> Home</a>
                            </li>
                            ";
        // line 77
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 78
            echo "                                <li class=\"dropdown active\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> Management <b class=\"caret\"></b></a>
                                    <ul class=\"dropdown-menu\"  >
                                        <li class=\"active\">
                                           <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserEnableList", array("page" => 1))), "html", null, true);
            echo "\" style=\"font-family:calibri\"> <i class=\"fa fa-user\"></i> User Management</a>
                                       </li>
                                       <li>
                                        <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manageBorrows")), "html", null, true);
            echo "\" style=\"font-family:calibri\" > <i class=\"fa fa-book\"></i>  Borrow Management</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categoryList")), "html", null, true);
            echo "\" style=\"font-family:calibri\" > <i class=\"fa fa-navicon\"></i>  Category Management</a>
                                    </li>
                                </ul>
                            </li>
                        ";
        }
        // line 93
        echo "                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> My Account <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\"  >
                                <li>
                                    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrow", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "bookId" =>  -1))), "html", null, true);
        echo "\" style=\"font-family:calibri\"> <i class=\"fa fa-book\"></i> Borrow Reports </a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 100
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("UserDetail", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "Id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))))), "html", null, true);
        echo "\" style=\"font-family:calibri\"><i class=\"fa fa-user\"></i>My Personal data</a>
                                </li>

                         </ul>
                     </li>
                    <li>
                          <a href=\"";
        // line 106
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about")), "html", null, true);
        echo "\">About</a>
                    </li>
                    <li>
                          <a href=\"";
        // line 109
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("help")), "html", null, true);
        echo "\">Help</a>
                    </li>

                    <li>
                         <a href=\"";
        // line 113
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout")), "html", null, true);
        echo "\" style=\"font-family:calibri\"><i class=\"fa fa-sign-out\"></i> Logout</a>
                    </li>

                 </ul>
                </div>

              ";
        
        $__internal_806a1ffd04b6169ab88e1c9f3af6e1effbd10d9767ef12e15b4e0d3584e387d9->leave($__internal_806a1ffd04b6169ab88e1c9f3af6e1effbd10d9767ef12e15b4e0d3584e387d9_prof);

        
        $__internal_a69d6766efa963c6650eb9ecbc723c8a791e5ec0b44b175c593acbd026f050eb->leave($__internal_a69d6766efa963c6650eb9ecbc723c8a791e5ec0b44b175c593acbd026f050eb_prof);

    }

    // line 125
    public function block_body($context, array $blocks = array())
    {
        $__internal_df7ba7e82e91baa8552b2d9113961d3a9c2709b67b355f5a461ee42c68ca1e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df7ba7e82e91baa8552b2d9113961d3a9c2709b67b355f5a461ee42c68ca1e37->enter($__internal_df7ba7e82e91baa8552b2d9113961d3a9c2709b67b355f5a461ee42c68ca1e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f6a84da4f58b68b110b120742ca28f73a6c0cdb9f47bf90a0b7d5f68db7d213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6a84da4f58b68b110b120742ca28f73a6c0cdb9f47bf90a0b7d5f68db7d213->enter($__internal_7f6a84da4f58b68b110b120742ca28f73a6c0cdb9f47bf90a0b7d5f68db7d213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 126
        echo " <!-- Page Content -->
 <div class=\"container\">
 
  
   <!-- Content Row -->
   <div class=\"row\" >
       
      <div class=\"col-md-3\"  >
         
       </div>
       <div class=\"col-md-9\"  >
         ";
        // line 137
        $this->displayBlock('content', $context, $blocks);
        // line 139
        echo "       </div>
  
   </div>
   <!-- /.row -->
   
</div>
";
        
        $__internal_7f6a84da4f58b68b110b120742ca28f73a6c0cdb9f47bf90a0b7d5f68db7d213->leave($__internal_7f6a84da4f58b68b110b120742ca28f73a6c0cdb9f47bf90a0b7d5f68db7d213_prof);

        
        $__internal_df7ba7e82e91baa8552b2d9113961d3a9c2709b67b355f5a461ee42c68ca1e37->leave($__internal_df7ba7e82e91baa8552b2d9113961d3a9c2709b67b355f5a461ee42c68ca1e37_prof);

    }

    // line 137
    public function block_content($context, array $blocks = array())
    {
        $__internal_b06b4f727a94e165c3ad50b14f711ee3b971c1b11759d6708eb841ec8cd9704c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b06b4f727a94e165c3ad50b14f711ee3b971c1b11759d6708eb841ec8cd9704c->enter($__internal_b06b4f727a94e165c3ad50b14f711ee3b971c1b11759d6708eb841ec8cd9704c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f5c23305a8c874c25139eedb0eae51783606d3bc4024bc18c26ca3ab71249bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c23305a8c874c25139eedb0eae51783606d3bc4024bc18c26ca3ab71249bc9->enter($__internal_f5c23305a8c874c25139eedb0eae51783606d3bc4024bc18c26ca3ab71249bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 138
        echo "         ";
        
        $__internal_f5c23305a8c874c25139eedb0eae51783606d3bc4024bc18c26ca3ab71249bc9->leave($__internal_f5c23305a8c874c25139eedb0eae51783606d3bc4024bc18c26ca3ab71249bc9_prof);

        
        $__internal_b06b4f727a94e165c3ad50b14f711ee3b971c1b11759d6708eb841ec8cd9704c->leave($__internal_b06b4f727a94e165c3ad50b14f711ee3b971c1b11759d6708eb841ec8cd9704c_prof);

    }

    // line 147
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d2b1854feea7c8f1f01ccd25e4ac27161bb93a5c3ddb47c6639116e36c8f8e3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b1854feea7c8f1f01ccd25e4ac27161bb93a5c3ddb47c6639116e36c8f8e3f->enter($__internal_d2b1854feea7c8f1f01ccd25e4ac27161bb93a5c3ddb47c6639116e36c8f8e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_022a3c0dbaf18c003a14bb717ddd3711f51996c058f2e0ca42db0149fc44ec37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_022a3c0dbaf18c003a14bb717ddd3711f51996c058f2e0ca42db0149fc44ec37->enter($__internal_022a3c0dbaf18c003a14bb717ddd3711f51996c058f2e0ca42db0149fc44ec37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 148
        echo "        <div class=\"row\" style=\"position: fixed; bottom: 0; width:100%;margin-top:20px;\">
           <!-- Footer -->
             <center>
                <p style=\"font-weight:bold;color:white;background-color: black;margin:0; height:20px;\">Copyright &copy; PKFokam Institute Of Excellence</p>
            </center>
        </div>
";
        
        $__internal_022a3c0dbaf18c003a14bb717ddd3711f51996c058f2e0ca42db0149fc44ec37->leave($__internal_022a3c0dbaf18c003a14bb717ddd3711f51996c058f2e0ca42db0149fc44ec37_prof);

        
        $__internal_d2b1854feea7c8f1f01ccd25e4ac27161bb93a5c3ddb47c6639116e36c8f8e3f->leave($__internal_d2b1854feea7c8f1f01ccd25e4ac27161bb93a5c3ddb47c6639116e36c8f8e3f_prof);

    }

    // line 158
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_19ae346f39119b1db7050d0612b513606edb54e60b52ba92fbc888c5e63b62d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ae346f39119b1db7050d0612b513606edb54e60b52ba92fbc888c5e63b62d2->enter($__internal_19ae346f39119b1db7050d0612b513606edb54e60b52ba92fbc888c5e63b62d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0179e16e80cca2e63137803446360dab6a0fbe48b5462de7edbebe107dab87cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0179e16e80cca2e63137803446360dab6a0fbe48b5462de7edbebe107dab87cf->enter($__internal_0179e16e80cca2e63137803446360dab6a0fbe48b5462de7edbebe107dab87cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 159
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 160
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.js")), "html", null, true);
        echo "\"></script> 
    <script type=\"text/javascript\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js")), "html", null, true);
        echo "\"></script> 
    <!-- Script to Activate the Carousel -->
    <script>
        \$('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    <!-- DATA TABLE SCRIPTS -->
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/dataTables/jquery.dataTables.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/dataTables/dataTables.bootstrap.js")), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            \$('#dataTables-example').dataTable();
        });
    </script>
    <!-- CUSTOM SCRIPTS -->

";
        
        $__internal_0179e16e80cca2e63137803446360dab6a0fbe48b5462de7edbebe107dab87cf->leave($__internal_0179e16e80cca2e63137803446360dab6a0fbe48b5462de7edbebe107dab87cf_prof);

        
        $__internal_19ae346f39119b1db7050d0612b513606edb54e60b52ba92fbc888c5e63b62d2->leave($__internal_19ae346f39119b1db7050d0612b513606edb54e60b52ba92fbc888c5e63b62d2_prof);

    }

    public function getTemplateName()
    {
        return "pkflibrary/miscellanous.html.twig ";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 170,  388 => 169,  377 => 161,  373 => 160,  370 => 159,  361 => 158,  345 => 148,  336 => 147,  326 => 138,  317 => 137,  301 => 139,  299 => 137,  286 => 126,  277 => 125,  260 => 113,  253 => 109,  247 => 106,  238 => 100,  232 => 97,  226 => 93,  218 => 88,  212 => 85,  206 => 82,  200 => 78,  198 => 77,  193 => 75,  186 => 70,  177 => 69,  164 => 24,  159 => 22,  154 => 20,  150 => 19,  145 => 17,  141 => 15,  132 => 14,  118 => 179,  116 => 158,  111 => 155,  109 => 147,  106 => 146,  104 => 125,  97 => 120,  95 => 69,  88 => 65,  48 => 27,  46 => 14,  31 => 1,);
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
        <link href=\"{{app.request.schemeAndHttpHost ~ asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" />
        <!-- Custom CSS -->
        <link href=\"{{app.request.schemeAndHttpHost ~ asset('assets/css/modern-business.css')}}\" rel=\"stylesheet\"/> 
        <link href=\"{{app.request.schemeAndHttpHost ~ asset('assets/css/misc.css')}}\" rel=\"stylesheet\"/> 
        <!-- Custom Fonts -->
        <link href=\"{{app.request.schemeAndHttpHost ~ asset('assets/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\"/> 
        <!-- TABLE STYLES-->
        <link href=\"{{app.request.schemeAndHttpHost ~ asset('assets/js/dataTables/dataTables.bootstrap.css' ) }}\" rel=\"stylesheet\" />
        
    {% endblock %}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
            <style>
              .dariusDiv{
                background-color: #f5f5f5;
                border-radius: 4px;
                padding: 8px 15px;
              }
              .dariusSpan{
                font-family : 'calibri';
                font-size : '18px';
                font-weight : bold ;
                font-style: italic;
              }
          </style>

    </head>


    <body>


        <!-- Navigation -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\" style=\"height:5%;\">
            <div class=\"container\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <img class=\"img-responsive img-hover\" src=\"{{app.request.schemeAndHttpHost ~ asset('Library Images/logopkf.png') }}\" width=\"30px\" height=\"35px\" alt=\"\" style=\"float:left; margin-right:5px; margin-top:5px\">
                    <a class=\"navbar-brand\" style=\"color:white;\">PKFokam Institute of Excellence Library</a>
                </div>

                {% block menu %}

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav navbar-right\" style=\"font-weight:bold;background-color:black;\">
                            <li>
                                <a href=\"{{app.request.schemeAndHttpHost ~ path('homepage',{'page': 1}) }}\"><i class=\"fa fa-home\"></i> Home</a>
                            </li>
                            {% if is_granted(\"ROLE_ADMIN\") %}
                                <li class=\"dropdown active\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> Management <b class=\"caret\"></b></a>
                                    <ul class=\"dropdown-menu\"  >
                                        <li class=\"active\">
                                           <a href=\"{{app.request.schemeAndHttpHost ~ path('AdminUserEnableList',{'page': 1}) }}\" style=\"font-family:calibri\"> <i class=\"fa fa-user\"></i> User Management</a>
                                       </li>
                                       <li>
                                        <a href=\"{{app.request.schemeAndHttpHost ~ path('manageBorrows') }}\" style=\"font-family:calibri\" > <i class=\"fa fa-book\"></i>  Borrow Management</a>
                                    </li>
                                    <li>
                                        <a href=\"{{app.request.schemeAndHttpHost ~ path('categoryList') }}\" style=\"font-family:calibri\" > <i class=\"fa fa-navicon\"></i>  Category Management</a>
                                    </li>
                                </ul>
                            </li>
                        {% endif %}
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> My Account <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\"  >
                                <li>
                                    <a href=\"{{app.request.schemeAndHttpHost ~ path('borrow', {'userId': app.user.id, 'bookId':-1}) }}\" style=\"font-family:calibri\"> <i class=\"fa fa-book\"></i> Borrow Reports </a>
                                </li>
                                <li>
                                    <a href=\"{{app.request.schemeAndHttpHost ~ path('UserDetail',{'id': app.user.Id ,'page': page}) }}\" style=\"font-family:calibri\"><i class=\"fa fa-user\"></i>My Personal data</a>
                                </li>

                         </ul>
                     </li>
                    <li>
                          <a href=\"{{app.request.schemeAndHttpHost ~ path('about') }}\">About</a>
                    </li>
                    <li>
                          <a href=\"{{app.request.schemeAndHttpHost ~ path('help') }}\">Help</a>
                    </li>

                    <li>
                         <a href=\"{{app.request.schemeAndHttpHost ~ path('fos_user_security_logout') }}\" style=\"font-family:calibri\"><i class=\"fa fa-sign-out\"></i> Logout</a>
                    </li>

                 </ul>
                </div>

              {% endblock %}

     </div>
     <!-- /.container -->
 </nav>

 {% block body %}
 <!-- Page Content -->
 <div class=\"container\">
 
  
   <!-- Content Row -->
   <div class=\"row\" >
       
      <div class=\"col-md-3\"  >
         
       </div>
       <div class=\"col-md-9\"  >
         {% block content %}
         {% endblock %}
       </div>
  
   </div>
   <!-- /.row -->
   
</div>
{% endblock %}
<!-- /.container -->
{% block footer %}
        <div class=\"row\" style=\"position: fixed; bottom: 0; width:100%;margin-top:20px;\">
           <!-- Footer -->
             <center>
                <p style=\"font-weight:bold;color:white;background-color: black;margin:0; height:20px;\">Copyright &copy; PKFokam Institute Of Excellence</p>
            </center>
        </div>
{% endblock %}



{% block javascripts %}

    <script type=\"text/javascript\" src=\"{{app.request.schemeAndHttpHost ~ asset('assets/js/jquery.js')}}\"></script> 
    <script type=\"text/javascript\" src=\"{{app.request.schemeAndHttpHost ~ asset('assets/js/bootstrap.min.js')}}\"></script> 
    <!-- Script to Activate the Carousel -->
    <script>
        \$('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    <!-- DATA TABLE SCRIPTS -->
    <script src=\"{{app.request.schemeAndHttpHost ~ asset('assets/js/dataTables/jquery.dataTables.js')}}\"></script>
    <script src=\"{{app.request.schemeAndHttpHost ~ asset('assets/js/dataTables/dataTables.bootstrap.js')}}\"></script>
    <script>
        \$(document).ready(function () {
            \$('#dataTables-example').dataTable();
        });
    </script>
    <!-- CUSTOM SCRIPTS -->

{% endblock %}

</body>

</html>
", "pkflibrary/miscellanous.html.twig ", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\pkflibrary\\miscellanous.html.twig");
    }
}
