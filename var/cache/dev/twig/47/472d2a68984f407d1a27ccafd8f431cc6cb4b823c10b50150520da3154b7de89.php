<?php

/* :pkflibrary:layout.html.twig */
class __TwigTemplate_3301a6436ea01a91accc350102af316a74ffc7b5a09cd5e76caf4906623f759b extends Twig_Template
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
        $__internal_2f999e132a20a0fe2950a6fc0c97907317d8683c5758e815860fe70950bd42cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f999e132a20a0fe2950a6fc0c97907317d8683c5758e815860fe70950bd42cd->enter($__internal_2f999e132a20a0fe2950a6fc0c97907317d8683c5758e815860fe70950bd42cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary:layout.html.twig"));

        $__internal_70cf2814dd9b6199a1fcb0061c5b4b06f0eb0263e8d53f033e54e318fafaab7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70cf2814dd9b6199a1fcb0061c5b4b06f0eb0263e8d53f033e54e318fafaab7e->enter($__internal_70cf2814dd9b6199a1fcb0061c5b4b06f0eb0263e8d53f033e54e318fafaab7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary:layout.html.twig"));

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
        
        $__internal_2f999e132a20a0fe2950a6fc0c97907317d8683c5758e815860fe70950bd42cd->leave($__internal_2f999e132a20a0fe2950a6fc0c97907317d8683c5758e815860fe70950bd42cd_prof);

        
        $__internal_70cf2814dd9b6199a1fcb0061c5b4b06f0eb0263e8d53f033e54e318fafaab7e->leave($__internal_70cf2814dd9b6199a1fcb0061c5b4b06f0eb0263e8d53f033e54e318fafaab7e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fececa657e002a099bc0d8ef8df3ec66c3d09855456127e5e942bb59c2344d0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fececa657e002a099bc0d8ef8df3ec66c3d09855456127e5e942bb59c2344d0f->enter($__internal_fececa657e002a099bc0d8ef8df3ec66c3d09855456127e5e942bb59c2344d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e0466da227823bca072095216073a96c0bd7ade9bf986babec8878870f844b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0466da227823bca072095216073a96c0bd7ade9bf986babec8878870f844b07->enter($__internal_e0466da227823bca072095216073a96c0bd7ade9bf986babec8878870f844b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e0466da227823bca072095216073a96c0bd7ade9bf986babec8878870f844b07->leave($__internal_e0466da227823bca072095216073a96c0bd7ade9bf986babec8878870f844b07_prof);

        
        $__internal_fececa657e002a099bc0d8ef8df3ec66c3d09855456127e5e942bb59c2344d0f->leave($__internal_fececa657e002a099bc0d8ef8df3ec66c3d09855456127e5e942bb59c2344d0f_prof);

    }

    // line 61
    public function block_header($context, array $blocks = array())
    {
        $__internal_c7f56af02cdd1a7aec169873cf3b8ace0fba39396be0128252919374fe715803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7f56af02cdd1a7aec169873cf3b8ace0fba39396be0128252919374fe715803->enter($__internal_c7f56af02cdd1a7aec169873cf3b8ace0fba39396be0128252919374fe715803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_f5fc3f855e59b98eb53bd537b24094dc3669a1295eca5bc87e61079e0feb05cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5fc3f855e59b98eb53bd537b24094dc3669a1295eca5bc87e61079e0feb05cc->enter($__internal_f5fc3f855e59b98eb53bd537b24094dc3669a1295eca5bc87e61079e0feb05cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 62
        echo "                        <!-- <h1 class=\"page-header\"> Registration </h1> -->
                    ";
        
        $__internal_f5fc3f855e59b98eb53bd537b24094dc3669a1295eca5bc87e61079e0feb05cc->leave($__internal_f5fc3f855e59b98eb53bd537b24094dc3669a1295eca5bc87e61079e0feb05cc_prof);

        
        $__internal_c7f56af02cdd1a7aec169873cf3b8ace0fba39396be0128252919374fe715803->leave($__internal_c7f56af02cdd1a7aec169873cf3b8ace0fba39396be0128252919374fe715803_prof);

    }

    // line 82
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce5cbb2310ad592db2a28dc5a10ea6763f12fdde08c358c3192bdec210b0694f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce5cbb2310ad592db2a28dc5a10ea6763f12fdde08c358c3192bdec210b0694f->enter($__internal_ce5cbb2310ad592db2a28dc5a10ea6763f12fdde08c358c3192bdec210b0694f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f71a5af91b260b524d7ad9290236dfa7c60991804da94c6519bbc90dd966e7be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f71a5af91b260b524d7ad9290236dfa7c60991804da94c6519bbc90dd966e7be->enter($__internal_f71a5af91b260b524d7ad9290236dfa7c60991804da94c6519bbc90dd966e7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 83
        echo "            ";
        
        $__internal_f71a5af91b260b524d7ad9290236dfa7c60991804da94c6519bbc90dd966e7be->leave($__internal_f71a5af91b260b524d7ad9290236dfa7c60991804da94c6519bbc90dd966e7be_prof);

        
        $__internal_ce5cbb2310ad592db2a28dc5a10ea6763f12fdde08c358c3192bdec210b0694f->leave($__internal_ce5cbb2310ad592db2a28dc5a10ea6763f12fdde08c358c3192bdec210b0694f_prof);

    }

    // line 88
    public function block_footer($context, array $blocks = array())
    {
        $__internal_20778dc6aecf898381ec9b377c670d834648a0f0b83590cb1c417f9ed195fb94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20778dc6aecf898381ec9b377c670d834648a0f0b83590cb1c417f9ed195fb94->enter($__internal_20778dc6aecf898381ec9b377c670d834648a0f0b83590cb1c417f9ed195fb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_62a11fb5294a1c9264c1e56feb7d8a08dd648ed6c8b20d207dff74ca514c0e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62a11fb5294a1c9264c1e56feb7d8a08dd648ed6c8b20d207dff74ca514c0e1e->enter($__internal_62a11fb5294a1c9264c1e56feb7d8a08dd648ed6c8b20d207dff74ca514c0e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 89
        echo "        <div class=\"row\" style=\"position: fixed; bottom: 0; width:100%;margin-top:20px;\">
           <!-- Footer -->
             <center>
                <p style=\"font-weight:bold;color:white;background-color: black;margin:0; margin-right:-20%; height:20px;\">Copyright &copy; PKFokam Institute Of Excellence</p>
            </center>
           </div>
       ";
        
        $__internal_62a11fb5294a1c9264c1e56feb7d8a08dd648ed6c8b20d207dff74ca514c0e1e->leave($__internal_62a11fb5294a1c9264c1e56feb7d8a08dd648ed6c8b20d207dff74ca514c0e1e_prof);

        
        $__internal_20778dc6aecf898381ec9b377c670d834648a0f0b83590cb1c417f9ed195fb94->leave($__internal_20778dc6aecf898381ec9b377c670d834648a0f0b83590cb1c417f9ed195fb94_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bd1385f2688dbb6c4998a5f2c78c2cd5384e8946f0021c67dd5ea521206f4e28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd1385f2688dbb6c4998a5f2c78c2cd5384e8946f0021c67dd5ea521206f4e28->enter($__internal_bd1385f2688dbb6c4998a5f2c78c2cd5384e8946f0021c67dd5ea521206f4e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7096428b8ab0aadd5b9339123bc508c5d169d1ceb0b1fb2b9b90f3e17e5af409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7096428b8ab0aadd5b9339123bc508c5d169d1ceb0b1fb2b9b90f3e17e5af409->enter($__internal_7096428b8ab0aadd5b9339123bc508c5d169d1ceb0b1fb2b9b90f3e17e5af409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7096428b8ab0aadd5b9339123bc508c5d169d1ceb0b1fb2b9b90f3e17e5af409->leave($__internal_7096428b8ab0aadd5b9339123bc508c5d169d1ceb0b1fb2b9b90f3e17e5af409_prof);

        
        $__internal_bd1385f2688dbb6c4998a5f2c78c2cd5384e8946f0021c67dd5ea521206f4e28->leave($__internal_bd1385f2688dbb6c4998a5f2c78c2cd5384e8946f0021c67dd5ea521206f4e28_prof);

    }

    public function getTemplateName()
    {
        return ":pkflibrary:layout.html.twig";
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
", ":pkflibrary:layout.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app/Resources\\views/pkflibrary/layout.html.twig");
    }
}
