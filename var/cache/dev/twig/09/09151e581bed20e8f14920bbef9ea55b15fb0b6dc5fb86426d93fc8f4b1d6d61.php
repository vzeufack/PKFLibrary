<?php

/* pkflibrary/base.html.twig  */
class __TwigTemplate_6d6648c7bf02a209c1989010e55c62419236b2e298fcb63958d238871d0c2e82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'status' => array($this, 'block_status'),
            'body' => array($this, 'block_body'),
            'left_menu' => array($this, 'block_left_menu'),
            'searchAdd' => array($this, 'block_searchAdd'),
            'content' => array($this, 'block_content'),
            'pagination' => array($this, 'block_pagination'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ffd63b954d2ba58b45d8c47194271cae570f1b6013f7f6efe55bc09bb4ad850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ffd63b954d2ba58b45d8c47194271cae570f1b6013f7f6efe55bc09bb4ad850->enter($__internal_1ffd63b954d2ba58b45d8c47194271cae570f1b6013f7f6efe55bc09bb4ad850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/base.html.twig "));

        $__internal_8707c5732b818d7b847422c8cc036bfc7426af85c38f26c529be74aaccc0d978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8707c5732b818d7b847422c8cc036bfc7426af85c38f26c529be74aaccc0d978->enter($__internal_8707c5732b818d7b847422c8cc036bfc7426af85c38f26c529be74aaccc0d978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/base.html.twig "));

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
        echo "\" width=\"30px\" height=\"30px\" alt=\"\" style=\"float:left; margin-right:5px; margin-top:5px\">
                    <a class=\"navbar-brand\" style=\"color:white\">PKFokam Institute of Excellence Library</a>
                </div>

                ";
        // line 69
        $this->displayBlock('menu', $context, $blocks);
        // line 71
        echo "     </div>
     <!-- /.container -->
 </nav>


 <!-- Page Content -->
 <div class=\"container\">

    <!-- Page Heading/Breadcrumbs -->
    <div class=\"row\" style=\"margin-top:10px; font-family:calibri;\" >
        <div class=\"col-lg-12\">
            <ol class=\"breadcrumb\">
                <li>Home</li>";
        // line 83
        $this->displayBlock('status', $context, $blocks);
        // line 84
        echo "           </ol>
       </div>
    </div>
    <!-- /.row -->
   
   ";
        // line 89
        $this->displayBlock('body', $context, $blocks);
        // line 119
        echo "</div>
<!-- /.container -->
 ";
        // line 121
        $this->displayBlock('footer', $context, $blocks);
        // line 129
        echo "
";
        // line 130
        $this->displayBlock('javascripts', $context, $blocks);
        // line 151
        echo "
</body>

</html>
";
        
        $__internal_1ffd63b954d2ba58b45d8c47194271cae570f1b6013f7f6efe55bc09bb4ad850->leave($__internal_1ffd63b954d2ba58b45d8c47194271cae570f1b6013f7f6efe55bc09bb4ad850_prof);

        
        $__internal_8707c5732b818d7b847422c8cc036bfc7426af85c38f26c529be74aaccc0d978->leave($__internal_8707c5732b818d7b847422c8cc036bfc7426af85c38f26c529be74aaccc0d978_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f20a960f16c9fb0b93f68fe75a2d4410ceab227c44a0389b2ccd7a932e7fac87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f20a960f16c9fb0b93f68fe75a2d4410ceab227c44a0389b2ccd7a932e7fac87->enter($__internal_f20a960f16c9fb0b93f68fe75a2d4410ceab227c44a0389b2ccd7a932e7fac87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cbc458a8b222aa4020adaf02b60c74f484ff490491c75b200e80496da2856766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbc458a8b222aa4020adaf02b60c74f484ff490491c75b200e80496da2856766->enter($__internal_cbc458a8b222aa4020adaf02b60c74f484ff490491c75b200e80496da2856766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("logopkf.ico"), "html", null, true);
        echo "?v=2\"/>
        <!-- Bootstrap Core CSS -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- Custom CSS -->
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/modern-business.css")), "html", null, true);
        echo "\" rel=\"stylesheet\"/> 
        <!-- Custom Fonts -->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/font-awesome/css/font-awesome.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/> 
        <!-- TABLE STYLES-->
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/dataTables/dataTables.bootstrap.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        
    ";
        
        $__internal_cbc458a8b222aa4020adaf02b60c74f484ff490491c75b200e80496da2856766->leave($__internal_cbc458a8b222aa4020adaf02b60c74f484ff490491c75b200e80496da2856766_prof);

        
        $__internal_f20a960f16c9fb0b93f68fe75a2d4410ceab227c44a0389b2ccd7a932e7fac87->leave($__internal_f20a960f16c9fb0b93f68fe75a2d4410ceab227c44a0389b2ccd7a932e7fac87_prof);

    }

    // line 69
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bfb348a7e0f8384d300cea8987780f59234b124b78a0801587586e8bae6fff52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfb348a7e0f8384d300cea8987780f59234b124b78a0801587586e8bae6fff52->enter($__internal_bfb348a7e0f8384d300cea8987780f59234b124b78a0801587586e8bae6fff52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f45884f241e5b71c6844a11e6f1c135b42dace7f62ec7981eec272aa14965111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45884f241e5b71c6844a11e6f1c135b42dace7f62ec7981eec272aa14965111->enter($__internal_f45884f241e5b71c6844a11e6f1c135b42dace7f62ec7981eec272aa14965111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 70
        echo "                ";
        
        $__internal_f45884f241e5b71c6844a11e6f1c135b42dace7f62ec7981eec272aa14965111->leave($__internal_f45884f241e5b71c6844a11e6f1c135b42dace7f62ec7981eec272aa14965111_prof);

        
        $__internal_bfb348a7e0f8384d300cea8987780f59234b124b78a0801587586e8bae6fff52->leave($__internal_bfb348a7e0f8384d300cea8987780f59234b124b78a0801587586e8bae6fff52_prof);

    }

    // line 83
    public function block_status($context, array $blocks = array())
    {
        $__internal_43e99121d8e1edd8db76239c3cec3384468f55c6f446b77d512f09dab2081dbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43e99121d8e1edd8db76239c3cec3384468f55c6f446b77d512f09dab2081dbb->enter($__internal_43e99121d8e1edd8db76239c3cec3384468f55c6f446b77d512f09dab2081dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        $__internal_79da708fb8f3e52e45746a196d768e7a799d067e405e476aff6bcfbe1b3e125a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79da708fb8f3e52e45746a196d768e7a799d067e405e476aff6bcfbe1b3e125a->enter($__internal_79da708fb8f3e52e45746a196d768e7a799d067e405e476aff6bcfbe1b3e125a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        
        $__internal_79da708fb8f3e52e45746a196d768e7a799d067e405e476aff6bcfbe1b3e125a->leave($__internal_79da708fb8f3e52e45746a196d768e7a799d067e405e476aff6bcfbe1b3e125a_prof);

        
        $__internal_43e99121d8e1edd8db76239c3cec3384468f55c6f446b77d512f09dab2081dbb->leave($__internal_43e99121d8e1edd8db76239c3cec3384468f55c6f446b77d512f09dab2081dbb_prof);

    }

    // line 89
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce2b452d751d271c1f7d0ca84e5ce60b66a153b56f13d30d7aad95cf76ff4929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce2b452d751d271c1f7d0ca84e5ce60b66a153b56f13d30d7aad95cf76ff4929->enter($__internal_ce2b452d751d271c1f7d0ca84e5ce60b66a153b56f13d30d7aad95cf76ff4929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a3d426ad3833dfe172a0bd4d84d902dfcc8f252cda1c03e0ef58cbe661ecbf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a3d426ad3833dfe172a0bd4d84d902dfcc8f252cda1c03e0ef58cbe661ecbf0->enter($__internal_3a3d426ad3833dfe172a0bd4d84d902dfcc8f252cda1c03e0ef58cbe661ecbf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 90
        echo "   <!-- Content Row -->
   <div class=\"row\" >
       <!-- Sidebar Column -->
       <div class=\"col-md-3\">
           ";
        // line 94
        $this->displayBlock('left_menu', $context, $blocks);
        // line 96
        echo "       </div>
       <!-- Content Column -->
       <div class=\"col-md-9\" style=\" margin-bottom:2%\">
          ";
        // line 99
        $this->displayBlock('searchAdd', $context, $blocks);
        // line 101
        echo "       </div>

       <div class=\"col-md-9\"  >
         ";
        // line 104
        $this->displayBlock('content', $context, $blocks);
        // line 106
        echo "       </div>
       
   </div>
   <div class=\"row\"  >
          <div class=\"col-md-3\"  >
          </div>
           <div class=\"col-md-9\"  >
             ";
        // line 113
        $this->displayBlock('pagination', $context, $blocks);
        // line 115
        echo "           </div>
   </div>
   <!-- /.row -->
   ";
        
        $__internal_3a3d426ad3833dfe172a0bd4d84d902dfcc8f252cda1c03e0ef58cbe661ecbf0->leave($__internal_3a3d426ad3833dfe172a0bd4d84d902dfcc8f252cda1c03e0ef58cbe661ecbf0_prof);

        
        $__internal_ce2b452d751d271c1f7d0ca84e5ce60b66a153b56f13d30d7aad95cf76ff4929->leave($__internal_ce2b452d751d271c1f7d0ca84e5ce60b66a153b56f13d30d7aad95cf76ff4929_prof);

    }

    // line 94
    public function block_left_menu($context, array $blocks = array())
    {
        $__internal_ed359b7e8b911ad2b3f590b5380be7020b70848514c85c140c08014f9b1c26c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed359b7e8b911ad2b3f590b5380be7020b70848514c85c140c08014f9b1c26c7->enter($__internal_ed359b7e8b911ad2b3f590b5380be7020b70848514c85c140c08014f9b1c26c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_menu"));

        $__internal_74aef15e248bd510b352b2e6aa9ea6e11bc6ea657f3584df4d3e075cbb465e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74aef15e248bd510b352b2e6aa9ea6e11bc6ea657f3584df4d3e075cbb465e09->enter($__internal_74aef15e248bd510b352b2e6aa9ea6e11bc6ea657f3584df4d3e075cbb465e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_menu"));

        // line 95
        echo "           ";
        
        $__internal_74aef15e248bd510b352b2e6aa9ea6e11bc6ea657f3584df4d3e075cbb465e09->leave($__internal_74aef15e248bd510b352b2e6aa9ea6e11bc6ea657f3584df4d3e075cbb465e09_prof);

        
        $__internal_ed359b7e8b911ad2b3f590b5380be7020b70848514c85c140c08014f9b1c26c7->leave($__internal_ed359b7e8b911ad2b3f590b5380be7020b70848514c85c140c08014f9b1c26c7_prof);

    }

    // line 99
    public function block_searchAdd($context, array $blocks = array())
    {
        $__internal_90db58779fef9f60f04e9b0217a010be1fe81d992c4f855e48e8b19c21f54498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90db58779fef9f60f04e9b0217a010be1fe81d992c4f855e48e8b19c21f54498->enter($__internal_90db58779fef9f60f04e9b0217a010be1fe81d992c4f855e48e8b19c21f54498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchAdd"));

        $__internal_d6cd8dccf99c004e056e2df1c1dfe36f61993914bec258bff2dd17cb5ebb0280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6cd8dccf99c004e056e2df1c1dfe36f61993914bec258bff2dd17cb5ebb0280->enter($__internal_d6cd8dccf99c004e056e2df1c1dfe36f61993914bec258bff2dd17cb5ebb0280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchAdd"));

        // line 100
        echo "          ";
        
        $__internal_d6cd8dccf99c004e056e2df1c1dfe36f61993914bec258bff2dd17cb5ebb0280->leave($__internal_d6cd8dccf99c004e056e2df1c1dfe36f61993914bec258bff2dd17cb5ebb0280_prof);

        
        $__internal_90db58779fef9f60f04e9b0217a010be1fe81d992c4f855e48e8b19c21f54498->leave($__internal_90db58779fef9f60f04e9b0217a010be1fe81d992c4f855e48e8b19c21f54498_prof);

    }

    // line 104
    public function block_content($context, array $blocks = array())
    {
        $__internal_a9a19c31d562dba3d2c38c5862099c971040e9001f6b670bf54936e3ee2cdd74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9a19c31d562dba3d2c38c5862099c971040e9001f6b670bf54936e3ee2cdd74->enter($__internal_a9a19c31d562dba3d2c38c5862099c971040e9001f6b670bf54936e3ee2cdd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_87d3ccc22b825b2787cd032366d0b7e92d5bf08ca7e111fe908cd8143a263b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d3ccc22b825b2787cd032366d0b7e92d5bf08ca7e111fe908cd8143a263b87->enter($__internal_87d3ccc22b825b2787cd032366d0b7e92d5bf08ca7e111fe908cd8143a263b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 105
        echo "         ";
        
        $__internal_87d3ccc22b825b2787cd032366d0b7e92d5bf08ca7e111fe908cd8143a263b87->leave($__internal_87d3ccc22b825b2787cd032366d0b7e92d5bf08ca7e111fe908cd8143a263b87_prof);

        
        $__internal_a9a19c31d562dba3d2c38c5862099c971040e9001f6b670bf54936e3ee2cdd74->leave($__internal_a9a19c31d562dba3d2c38c5862099c971040e9001f6b670bf54936e3ee2cdd74_prof);

    }

    // line 113
    public function block_pagination($context, array $blocks = array())
    {
        $__internal_8600a167542ce90c9c84938e9446949079d72481dc7fc8eed1776dd62644df5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8600a167542ce90c9c84938e9446949079d72481dc7fc8eed1776dd62644df5b->enter($__internal_8600a167542ce90c9c84938e9446949079d72481dc7fc8eed1776dd62644df5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        $__internal_7b1ab682601627bbcf863023fd4578d0db501cc75a73b1274fc1b62b715be94b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b1ab682601627bbcf863023fd4578d0db501cc75a73b1274fc1b62b715be94b->enter($__internal_7b1ab682601627bbcf863023fd4578d0db501cc75a73b1274fc1b62b715be94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        // line 114
        echo "             ";
        
        $__internal_7b1ab682601627bbcf863023fd4578d0db501cc75a73b1274fc1b62b715be94b->leave($__internal_7b1ab682601627bbcf863023fd4578d0db501cc75a73b1274fc1b62b715be94b_prof);

        
        $__internal_8600a167542ce90c9c84938e9446949079d72481dc7fc8eed1776dd62644df5b->leave($__internal_8600a167542ce90c9c84938e9446949079d72481dc7fc8eed1776dd62644df5b_prof);

    }

    // line 121
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7ac2abbc5ab0bc7cce30d96770eb8c7480bc73a991ae71e86d4a500decf6e5be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac2abbc5ab0bc7cce30d96770eb8c7480bc73a991ae71e86d4a500decf6e5be->enter($__internal_7ac2abbc5ab0bc7cce30d96770eb8c7480bc73a991ae71e86d4a500decf6e5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_d51d444f3b1479bbafd98e141bb77a2c5e5d3e9296f7ef67ec47a3d8761bc444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d51d444f3b1479bbafd98e141bb77a2c5e5d3e9296f7ef67ec47a3d8761bc444->enter($__internal_d51d444f3b1479bbafd98e141bb77a2c5e5d3e9296f7ef67ec47a3d8761bc444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 122
        echo "  <div class=\"row\" style=\"margin-top:20px;position: absolute;botom: 0;width:100%\">
 <!-- Footer -->
   <center>
            <p style=\"font-weight:bold;color:white;background-color: black;margin:0; padding-top:20px;height:60px;margin-right:-10%;\">Copyright &copy; PKFokam Institute Of Excellence</p>
   </center>
 </div>
";
        
        $__internal_d51d444f3b1479bbafd98e141bb77a2c5e5d3e9296f7ef67ec47a3d8761bc444->leave($__internal_d51d444f3b1479bbafd98e141bb77a2c5e5d3e9296f7ef67ec47a3d8761bc444_prof);

        
        $__internal_7ac2abbc5ab0bc7cce30d96770eb8c7480bc73a991ae71e86d4a500decf6e5be->leave($__internal_7ac2abbc5ab0bc7cce30d96770eb8c7480bc73a991ae71e86d4a500decf6e5be_prof);

    }

    // line 130
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_02c642ca85948e5e80dcceb1fc948fd95e287e98338715af42ca22c706b251b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02c642ca85948e5e80dcceb1fc948fd95e287e98338715af42ca22c706b251b4->enter($__internal_02c642ca85948e5e80dcceb1fc948fd95e287e98338715af42ca22c706b251b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5fca1058834f69ff87c93ec22b199812195902968d68774110a7a379bac4a216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fca1058834f69ff87c93ec22b199812195902968d68774110a7a379bac4a216->enter($__internal_5fca1058834f69ff87c93ec22b199812195902968d68774110a7a379bac4a216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 131
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.js")), "html", null, true);
        echo "\"></script> 
    <script type=\"text/javascript\" src=\"";
        // line 133
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
        // line 141
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/dataTables/jquery.dataTables.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/dataTables/dataTables.bootstrap.js")), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            \$('#dataTables-example').dataTable();
        });
    </script>
    <!-- CUSTOM SCRIPTS -->

";
        
        $__internal_5fca1058834f69ff87c93ec22b199812195902968d68774110a7a379bac4a216->leave($__internal_5fca1058834f69ff87c93ec22b199812195902968d68774110a7a379bac4a216_prof);

        
        $__internal_02c642ca85948e5e80dcceb1fc948fd95e287e98338715af42ca22c706b251b4->leave($__internal_02c642ca85948e5e80dcceb1fc948fd95e287e98338715af42ca22c706b251b4_prof);

    }

    public function getTemplateName()
    {
        return "pkflibrary/base.html.twig ";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 142,  415 => 141,  404 => 133,  400 => 132,  397 => 131,  388 => 130,  372 => 122,  363 => 121,  353 => 114,  344 => 113,  334 => 105,  325 => 104,  315 => 100,  306 => 99,  296 => 95,  287 => 94,  274 => 115,  272 => 113,  263 => 106,  261 => 104,  256 => 101,  254 => 99,  249 => 96,  247 => 94,  241 => 90,  232 => 89,  215 => 83,  205 => 70,  196 => 69,  183 => 24,  178 => 22,  173 => 20,  168 => 18,  163 => 16,  160 => 15,  151 => 14,  137 => 151,  135 => 130,  132 => 129,  130 => 121,  126 => 119,  124 => 89,  117 => 84,  115 => 83,  101 => 71,  99 => 69,  92 => 65,  52 => 27,  50 => 14,  35 => 1,);
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

        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('logopkf.ico') }}?v=2\"/>
        <!-- Bootstrap Core CSS -->
        <link href=\"{{app.request.schemeAndHttpHost ~ asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" />
        <!-- Custom CSS -->
        <link href=\"{{app.request.schemeAndHttpHost ~ asset('assets/css/modern-business.css')}}\" rel=\"stylesheet\"/> 
        <!-- Custom Fonts -->
        <link href=\"{{app.request.schemeAndHttpHost ~ asset('assets/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\"/> 
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
                    <img class=\"img-responsive img-hover\" src=\"{{app.request.schemeAndHttpHost ~ asset('Library Images/logopkf.png') }}\" width=\"30px\" height=\"30px\" alt=\"\" style=\"float:left; margin-right:5px; margin-top:5px\">
                    <a class=\"navbar-brand\" style=\"color:white\">PKFokam Institute of Excellence Library</a>
                </div>

                {% block menu %}
                {% endblock %}
     </div>
     <!-- /.container -->
 </nav>


 <!-- Page Content -->
 <div class=\"container\">

    <!-- Page Heading/Breadcrumbs -->
    <div class=\"row\" style=\"margin-top:10px; font-family:calibri;\" >
        <div class=\"col-lg-12\">
            <ol class=\"breadcrumb\">
                <li>Home</li>{% block status %}{% endblock %}
           </ol>
       </div>
    </div>
    <!-- /.row -->
   
   {% block body %}
   <!-- Content Row -->
   <div class=\"row\" >
       <!-- Sidebar Column -->
       <div class=\"col-md-3\">
           {% block left_menu %}
           {% endblock %}
       </div>
       <!-- Content Column -->
       <div class=\"col-md-9\" style=\" margin-bottom:2%\">
          {% block searchAdd %}
          {% endblock %}
       </div>

       <div class=\"col-md-9\"  >
         {% block content %}
         {% endblock %}
       </div>
       
   </div>
   <div class=\"row\"  >
          <div class=\"col-md-3\"  >
          </div>
           <div class=\"col-md-9\"  >
             {% block pagination %}
             {% endblock %}
           </div>
   </div>
   <!-- /.row -->
   {% endblock %}
</div>
<!-- /.container -->
 {% block footer %}
  <div class=\"row\" style=\"margin-top:20px;position: absolute;botom: 0;width:100%\">
 <!-- Footer -->
   <center>
            <p style=\"font-weight:bold;color:white;background-color: black;margin:0; padding-top:20px;height:60px;margin-right:-10%;\">Copyright &copy; PKFokam Institute Of Excellence</p>
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
", "pkflibrary/base.html.twig ", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\pkflibrary\\base.html.twig");
    }
}
