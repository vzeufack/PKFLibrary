<?php

/* pkflibrary/layout.html.twig */
class __TwigTemplate_1f58887c627263967361aae62cc2018241e20a201158030a47ee367913891630 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ea7765355f86edbff25bff57061cf912c19363f2b1258e81b0652ba48d8d8c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ea7765355f86edbff25bff57061cf912c19363f2b1258e81b0652ba48d8d8c4->enter($__internal_2ea7765355f86edbff25bff57061cf912c19363f2b1258e81b0652ba48d8d8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/layout.html.twig"));

        $__internal_f5df24592a7d06e4c33a747ce113a6dacc3b58e62cf7a8800cab5e97126f4d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5df24592a7d06e4c33a747ce113a6dacc3b58e62cf7a8800cab5e97126f4d1d->enter($__internal_f5df24592a7d06e4c33a747ce113a6dacc3b58e62cf7a8800cab5e97126f4d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title> PKFLibrary </title>
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
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
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\" style=\"height:5%;\">
            <div class=\"container\" >
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Library Images/logopkf.png"), "html", null, true);
        echo "\" width=\"8%\" height=\"100%\" alt=\"\" style=\"float:left; margin-right:5px; margin-top:5px\">
                    <a class=\"navbar-brand\" style=\"color:white\">PKFokam Institute Of Excellence Library</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- Page Content -->
        <div class=\"container\">

            <!-- Page Heading/Breadcrumbs -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    ";
        // line 61
        $this->displayBlock('header', $context, $blocks);
        // line 63
        echo "                
                </div>
            </div>
            <!-- /.row -->

            <!-- Content Row -->
            <div class=\"row\">        
            </div>
            <!-- /.row -->

            <!-- Contact Form -->
            <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
            <div class=\"row\">


            </div>
            <!-- /.row -->

            <hr>
            ";
        // line 82
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "        </div>
        <!-- /.container -->


     ";
        // line 88
        $this->displayBlock('footer', $context, $blocks);
        // line 96
        echo "
        ";
        // line 97
        $this->displayBlock('javascripts', $context, $blocks);
        // line 112
        echo "
    </body>

    </html>
";
        
        $__internal_2ea7765355f86edbff25bff57061cf912c19363f2b1258e81b0652ba48d8d8c4->leave($__internal_2ea7765355f86edbff25bff57061cf912c19363f2b1258e81b0652ba48d8d8c4_prof);

        
        $__internal_f5df24592a7d06e4c33a747ce113a6dacc3b58e62cf7a8800cab5e97126f4d1d->leave($__internal_f5df24592a7d06e4c33a747ce113a6dacc3b58e62cf7a8800cab5e97126f4d1d_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_46581bee094d35ec2aa4f84f1686ad29105b600030157222d8e9d891831d4da0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46581bee094d35ec2aa4f84f1686ad29105b600030157222d8e9d891831d4da0->enter($__internal_46581bee094d35ec2aa4f84f1686ad29105b600030157222d8e9d891831d4da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4db72196d8666c5e1665e156bcbf74a433e3260db4847e04f1c0e9e6c2daf802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db72196d8666c5e1665e156bcbf74a433e3260db4847e04f1c0e9e6c2daf802->enter($__internal_4db72196d8666c5e1665e156bcbf74a433e3260db4847e04f1c0e9e6c2daf802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"logopkf.ico\" />
        <!-- Bootstrap Core CSS -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- Custom CSS -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/modern-business.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
        <!-- Custom Fonts -->
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"> 
    ";
        
        $__internal_4db72196d8666c5e1665e156bcbf74a433e3260db4847e04f1c0e9e6c2daf802->leave($__internal_4db72196d8666c5e1665e156bcbf74a433e3260db4847e04f1c0e9e6c2daf802_prof);

        
        $__internal_46581bee094d35ec2aa4f84f1686ad29105b600030157222d8e9d891831d4da0->leave($__internal_46581bee094d35ec2aa4f84f1686ad29105b600030157222d8e9d891831d4da0_prof);

    }

    // line 61
    public function block_header($context, array $blocks = array())
    {
        $__internal_88266453441e7048d2d60562d2aa9427aece2c79fbd8da03d3932ccda5dc587a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88266453441e7048d2d60562d2aa9427aece2c79fbd8da03d3932ccda5dc587a->enter($__internal_88266453441e7048d2d60562d2aa9427aece2c79fbd8da03d3932ccda5dc587a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_da84b0ef75f08caf789c5dbdd4b04552084ead88125c400d6c389aa4913fd68b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da84b0ef75f08caf789c5dbdd4b04552084ead88125c400d6c389aa4913fd68b->enter($__internal_da84b0ef75f08caf789c5dbdd4b04552084ead88125c400d6c389aa4913fd68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 62
        echo "                        <!-- <h1 class=\"page-header\"> Registration </h1> -->
                    ";
        
        $__internal_da84b0ef75f08caf789c5dbdd4b04552084ead88125c400d6c389aa4913fd68b->leave($__internal_da84b0ef75f08caf789c5dbdd4b04552084ead88125c400d6c389aa4913fd68b_prof);

        
        $__internal_88266453441e7048d2d60562d2aa9427aece2c79fbd8da03d3932ccda5dc587a->leave($__internal_88266453441e7048d2d60562d2aa9427aece2c79fbd8da03d3932ccda5dc587a_prof);

    }

    // line 82
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bc065ad2df57fd5b52e5d3862d036d7c1341ec35bed5d7cf445776ef99b4835 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bc065ad2df57fd5b52e5d3862d036d7c1341ec35bed5d7cf445776ef99b4835->enter($__internal_1bc065ad2df57fd5b52e5d3862d036d7c1341ec35bed5d7cf445776ef99b4835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0fbf533f326556dde6cd95644676262d9a87600f2cd6e6437608b5249244c7a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fbf533f326556dde6cd95644676262d9a87600f2cd6e6437608b5249244c7a5->enter($__internal_0fbf533f326556dde6cd95644676262d9a87600f2cd6e6437608b5249244c7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 83
        echo "            ";
        
        $__internal_0fbf533f326556dde6cd95644676262d9a87600f2cd6e6437608b5249244c7a5->leave($__internal_0fbf533f326556dde6cd95644676262d9a87600f2cd6e6437608b5249244c7a5_prof);

        
        $__internal_1bc065ad2df57fd5b52e5d3862d036d7c1341ec35bed5d7cf445776ef99b4835->leave($__internal_1bc065ad2df57fd5b52e5d3862d036d7c1341ec35bed5d7cf445776ef99b4835_prof);

    }

    // line 88
    public function block_footer($context, array $blocks = array())
    {
        $__internal_fb128d4c677576e6045f79379857f7389aae96032acee54146f88b7fc8fb8ff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb128d4c677576e6045f79379857f7389aae96032acee54146f88b7fc8fb8ff8->enter($__internal_fb128d4c677576e6045f79379857f7389aae96032acee54146f88b7fc8fb8ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_1def4b22cc39440f11d902b98ed43995ecaac5c05f9b44ba2174933aba57ac64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1def4b22cc39440f11d902b98ed43995ecaac5c05f9b44ba2174933aba57ac64->enter($__internal_1def4b22cc39440f11d902b98ed43995ecaac5c05f9b44ba2174933aba57ac64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 89
        echo "        <div class=\"row\" style=\"position: fixed; bottom: 0; width:100%;margin-top:20px;\">
           <!-- Footer -->
             <center>
                <p style=\"font-weight:bold;color:white;background-color: black;margin:0; margin-right:-20%; height:20px;\">Copyright &copy; PKFokam Institute Of Excellence</p>
            </center>
           </div>
       ";
        
        $__internal_1def4b22cc39440f11d902b98ed43995ecaac5c05f9b44ba2174933aba57ac64->leave($__internal_1def4b22cc39440f11d902b98ed43995ecaac5c05f9b44ba2174933aba57ac64_prof);

        
        $__internal_fb128d4c677576e6045f79379857f7389aae96032acee54146f88b7fc8fb8ff8->leave($__internal_fb128d4c677576e6045f79379857f7389aae96032acee54146f88b7fc8fb8ff8_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5080d2e9e9fb9aafacd08ac51dd49c4647b0b9e7c965d8a80f01858bfb223c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5080d2e9e9fb9aafacd08ac51dd49c4647b0b9e7c965d8a80f01858bfb223c0->enter($__internal_e5080d2e9e9fb9aafacd08ac51dd49c4647b0b9e7c965d8a80f01858bfb223c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ae1898b494216c1fab4feafe253b3d6cb816d51a38b97d88d523084e947a5a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae1898b494216c1fab4feafe253b3d6cb816d51a38b97d88d523084e947a5a5b->enter($__internal_ae1898b494216c1fab4feafe253b3d6cb816d51a38b97d88d523084e947a5a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo "
            <script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script> 
            <script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 
            <!-- Contact Form JavaScript -->
            <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
            <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jqBootstrapValidation.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/contact_me.js"), "html", null, true);
        echo "\"></script>
            <!-- Script to Activate the Carousel -->
            <script>
                \$('.carousel').carousel({
                   interval: 5000 //changes the speed
                 })
            </script>            
        ";
        
        $__internal_ae1898b494216c1fab4feafe253b3d6cb816d51a38b97d88d523084e947a5a5b->leave($__internal_ae1898b494216c1fab4feafe253b3d6cb816d51a38b97d88d523084e947a5a5b_prof);

        
        $__internal_e5080d2e9e9fb9aafacd08ac51dd49c4647b0b9e7c965d8a80f01858bfb223c0->leave($__internal_e5080d2e9e9fb9aafacd08ac51dd49c4647b0b9e7c965d8a80f01858bfb223c0_prof);

    }

    public function getTemplateName()
    {
        return "pkflibrary/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 104,  263 => 103,  257 => 100,  253 => 99,  250 => 98,  241 => 97,  225 => 89,  216 => 88,  206 => 83,  197 => 82,  186 => 62,  177 => 61,  165 => 20,  160 => 18,  155 => 16,  151 => 14,  142 => 13,  128 => 112,  126 => 97,  123 => 96,  121 => 88,  115 => 84,  113 => 82,  92 => 63,  90 => 61,  71 => 45,  46 => 22,  44 => 13,  30 => 1,);
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

    <title> PKFLibrary </title>
    {% block stylesheets %}
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"logopkf.ico\" />
        <!-- Bootstrap Core CSS -->
        <link href=\"{{asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" />
        <!-- Custom CSS -->
        <link href=\"{{asset('assets/css/modern-business.css')}}\" rel=\"stylesheet\"> 
        <!-- Custom Fonts -->
        <link href=\"{{asset('assets/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\"> 
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
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\" style=\"height:5%;\">
            <div class=\"container\" >
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <img src=\"{{ asset('Library Images/logopkf.png') }}\" width=\"8%\" height=\"100%\" alt=\"\" style=\"float:left; margin-right:5px; margin-top:5px\">
                    <a class=\"navbar-brand\" style=\"color:white\">PKFokam Institute Of Excellence Library</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- Page Content -->
        <div class=\"container\">

            <!-- Page Heading/Breadcrumbs -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    {% block header %}
                        <!-- <h1 class=\"page-header\"> Registration </h1> -->
                    {% endblock %}                
                </div>
            </div>
            <!-- /.row -->

            <!-- Content Row -->
            <div class=\"row\">        
            </div>
            <!-- /.row -->

            <!-- Contact Form -->
            <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
            <div class=\"row\">


            </div>
            <!-- /.row -->

            <hr>
            {% block body %}
            {% endblock %}
        </div>
        <!-- /.container -->


     {% block footer %}
        <div class=\"row\" style=\"position: fixed; bottom: 0; width:100%;margin-top:20px;\">
           <!-- Footer -->
             <center>
                <p style=\"font-weight:bold;color:white;background-color: black;margin:0; margin-right:-20%; height:20px;\">Copyright &copy; PKFokam Institute Of Excellence</p>
            </center>
           </div>
       {% endblock %}

        {% block javascripts %}

            <script type=\"text/javascript\" src=\"{{asset('assets/js/jquery.js')}}\"></script> 
            <script type=\"text/javascript\" src=\"{{asset('assets/js/bootstrap.min.js')}}\"></script> 
            <!-- Contact Form JavaScript -->
            <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
            <script src=\"{{asset('assets/js/jqBootstrapValidation.js')}}\"></script>
            <script src=\"{{asset('assets/js/contact_me.js')}}\"></script>
            <!-- Script to Activate the Carousel -->
            <script>
                \$('.carousel').carousel({
                   interval: 5000 //changes the speed
                 })
            </script>            
        {% endblock %}

    </body>

    </html>
", "pkflibrary/layout.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\pkflibrary\\layout.html.twig");
    }
}
