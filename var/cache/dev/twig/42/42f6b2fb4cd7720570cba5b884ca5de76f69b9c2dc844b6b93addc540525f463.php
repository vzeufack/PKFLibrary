<?php

/* :pkflibrary:base.html.twig */
class __TwigTemplate_752adb3badea49c61388c70cd92d70b9af1ef16197218c604bf91fc231dbe74f extends Twig_Template
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
        $__internal_495df54f42604e7dd866a2628bb9e1920a143cc880669a203ebaa54c072a55af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_495df54f42604e7dd866a2628bb9e1920a143cc880669a203ebaa54c072a55af->enter($__internal_495df54f42604e7dd866a2628bb9e1920a143cc880669a203ebaa54c072a55af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary:base.html.twig"));

        $__internal_57a3170e1a1b1622275882086687e93a49fd9897e9d60fcca191a813b3534111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a3170e1a1b1622275882086687e93a49fd9897e9d60fcca191a813b3534111->enter($__internal_57a3170e1a1b1622275882086687e93a49fd9897e9d60fcca191a813b3534111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary:base.html.twig"));

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
        
        $__internal_495df54f42604e7dd866a2628bb9e1920a143cc880669a203ebaa54c072a55af->leave($__internal_495df54f42604e7dd866a2628bb9e1920a143cc880669a203ebaa54c072a55af_prof);

        
        $__internal_57a3170e1a1b1622275882086687e93a49fd9897e9d60fcca191a813b3534111->leave($__internal_57a3170e1a1b1622275882086687e93a49fd9897e9d60fcca191a813b3534111_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8fd8650c6bb92a14b91192b31e1786e57bf52d7153074851f2ec4356c8258aa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fd8650c6bb92a14b91192b31e1786e57bf52d7153074851f2ec4356c8258aa2->enter($__internal_8fd8650c6bb92a14b91192b31e1786e57bf52d7153074851f2ec4356c8258aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1c44884903b2debcf6e4611cc46552b7703b4dc4180ea8af9cd3489b999ee77a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c44884903b2debcf6e4611cc46552b7703b4dc4180ea8af9cd3489b999ee77a->enter($__internal_1c44884903b2debcf6e4611cc46552b7703b4dc4180ea8af9cd3489b999ee77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1c44884903b2debcf6e4611cc46552b7703b4dc4180ea8af9cd3489b999ee77a->leave($__internal_1c44884903b2debcf6e4611cc46552b7703b4dc4180ea8af9cd3489b999ee77a_prof);

        
        $__internal_8fd8650c6bb92a14b91192b31e1786e57bf52d7153074851f2ec4356c8258aa2->leave($__internal_8fd8650c6bb92a14b91192b31e1786e57bf52d7153074851f2ec4356c8258aa2_prof);

    }

    // line 69
    public function block_menu($context, array $blocks = array())
    {
        $__internal_af80cdf0d5fc53475cf181383ab5a6237d8ed3ea009411804b5ad78354b273f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af80cdf0d5fc53475cf181383ab5a6237d8ed3ea009411804b5ad78354b273f8->enter($__internal_af80cdf0d5fc53475cf181383ab5a6237d8ed3ea009411804b5ad78354b273f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ae05a1f25719fd987c4d96a4997130abfc05104897b8052f32e340b5e9694e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae05a1f25719fd987c4d96a4997130abfc05104897b8052f32e340b5e9694e6d->enter($__internal_ae05a1f25719fd987c4d96a4997130abfc05104897b8052f32e340b5e9694e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 70
        echo "                ";
        
        $__internal_ae05a1f25719fd987c4d96a4997130abfc05104897b8052f32e340b5e9694e6d->leave($__internal_ae05a1f25719fd987c4d96a4997130abfc05104897b8052f32e340b5e9694e6d_prof);

        
        $__internal_af80cdf0d5fc53475cf181383ab5a6237d8ed3ea009411804b5ad78354b273f8->leave($__internal_af80cdf0d5fc53475cf181383ab5a6237d8ed3ea009411804b5ad78354b273f8_prof);

    }

    // line 83
    public function block_status($context, array $blocks = array())
    {
        $__internal_776a2ab41ccdd9bd02d2ca03b31920d8b528fa6fc1de87bb8cdae958d686f3ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_776a2ab41ccdd9bd02d2ca03b31920d8b528fa6fc1de87bb8cdae958d686f3ed->enter($__internal_776a2ab41ccdd9bd02d2ca03b31920d8b528fa6fc1de87bb8cdae958d686f3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        $__internal_36d0e427ba91028d3fb03b25dfffccc1735acdeb53d343b08d0ebb35e142faf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d0e427ba91028d3fb03b25dfffccc1735acdeb53d343b08d0ebb35e142faf1->enter($__internal_36d0e427ba91028d3fb03b25dfffccc1735acdeb53d343b08d0ebb35e142faf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        
        $__internal_36d0e427ba91028d3fb03b25dfffccc1735acdeb53d343b08d0ebb35e142faf1->leave($__internal_36d0e427ba91028d3fb03b25dfffccc1735acdeb53d343b08d0ebb35e142faf1_prof);

        
        $__internal_776a2ab41ccdd9bd02d2ca03b31920d8b528fa6fc1de87bb8cdae958d686f3ed->leave($__internal_776a2ab41ccdd9bd02d2ca03b31920d8b528fa6fc1de87bb8cdae958d686f3ed_prof);

    }

    // line 89
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4c1472f46be2162a1d0c06303a634dc67efaaa8e1d1d26ecdff3b2d213454b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4c1472f46be2162a1d0c06303a634dc67efaaa8e1d1d26ecdff3b2d213454b4->enter($__internal_a4c1472f46be2162a1d0c06303a634dc67efaaa8e1d1d26ecdff3b2d213454b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d9a928ab6154e4eecb3344da71217b97f86294ec262f391b17f0a90d3379da25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9a928ab6154e4eecb3344da71217b97f86294ec262f391b17f0a90d3379da25->enter($__internal_d9a928ab6154e4eecb3344da71217b97f86294ec262f391b17f0a90d3379da25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d9a928ab6154e4eecb3344da71217b97f86294ec262f391b17f0a90d3379da25->leave($__internal_d9a928ab6154e4eecb3344da71217b97f86294ec262f391b17f0a90d3379da25_prof);

        
        $__internal_a4c1472f46be2162a1d0c06303a634dc67efaaa8e1d1d26ecdff3b2d213454b4->leave($__internal_a4c1472f46be2162a1d0c06303a634dc67efaaa8e1d1d26ecdff3b2d213454b4_prof);

    }

    // line 94
    public function block_left_menu($context, array $blocks = array())
    {
        $__internal_e4ea3ed4e4468754f9488125ac39d4fec58cf4fbd9c96f1212eb90c691fd5490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4ea3ed4e4468754f9488125ac39d4fec58cf4fbd9c96f1212eb90c691fd5490->enter($__internal_e4ea3ed4e4468754f9488125ac39d4fec58cf4fbd9c96f1212eb90c691fd5490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_menu"));

        $__internal_e1c38b842845893eb36d727910bf183a9e3cd16a6f9640682d86f63137d4029a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c38b842845893eb36d727910bf183a9e3cd16a6f9640682d86f63137d4029a->enter($__internal_e1c38b842845893eb36d727910bf183a9e3cd16a6f9640682d86f63137d4029a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_menu"));

        // line 95
        echo "           ";
        
        $__internal_e1c38b842845893eb36d727910bf183a9e3cd16a6f9640682d86f63137d4029a->leave($__internal_e1c38b842845893eb36d727910bf183a9e3cd16a6f9640682d86f63137d4029a_prof);

        
        $__internal_e4ea3ed4e4468754f9488125ac39d4fec58cf4fbd9c96f1212eb90c691fd5490->leave($__internal_e4ea3ed4e4468754f9488125ac39d4fec58cf4fbd9c96f1212eb90c691fd5490_prof);

    }

    // line 99
    public function block_searchAdd($context, array $blocks = array())
    {
        $__internal_c754c1edd19fee9cdb16866b8fb991b2a852c060a185d6a1c14427f8feedbf50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c754c1edd19fee9cdb16866b8fb991b2a852c060a185d6a1c14427f8feedbf50->enter($__internal_c754c1edd19fee9cdb16866b8fb991b2a852c060a185d6a1c14427f8feedbf50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchAdd"));

        $__internal_31a99ce59f21fa5c6884faf43879dd17688542b64e41c1872b09c204437047f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a99ce59f21fa5c6884faf43879dd17688542b64e41c1872b09c204437047f1->enter($__internal_31a99ce59f21fa5c6884faf43879dd17688542b64e41c1872b09c204437047f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchAdd"));

        // line 100
        echo "          ";
        
        $__internal_31a99ce59f21fa5c6884faf43879dd17688542b64e41c1872b09c204437047f1->leave($__internal_31a99ce59f21fa5c6884faf43879dd17688542b64e41c1872b09c204437047f1_prof);

        
        $__internal_c754c1edd19fee9cdb16866b8fb991b2a852c060a185d6a1c14427f8feedbf50->leave($__internal_c754c1edd19fee9cdb16866b8fb991b2a852c060a185d6a1c14427f8feedbf50_prof);

    }

    // line 104
    public function block_content($context, array $blocks = array())
    {
        $__internal_426993b3298e90277db40e7d0a2051f20a0a341aa454db94b52a909597b28a7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_426993b3298e90277db40e7d0a2051f20a0a341aa454db94b52a909597b28a7d->enter($__internal_426993b3298e90277db40e7d0a2051f20a0a341aa454db94b52a909597b28a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bbf02b72f061af73cd9f6d82ff63677cbbec960186e7185146ab06de84e82ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf02b72f061af73cd9f6d82ff63677cbbec960186e7185146ab06de84e82ae4->enter($__internal_bbf02b72f061af73cd9f6d82ff63677cbbec960186e7185146ab06de84e82ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 105
        echo "         ";
        
        $__internal_bbf02b72f061af73cd9f6d82ff63677cbbec960186e7185146ab06de84e82ae4->leave($__internal_bbf02b72f061af73cd9f6d82ff63677cbbec960186e7185146ab06de84e82ae4_prof);

        
        $__internal_426993b3298e90277db40e7d0a2051f20a0a341aa454db94b52a909597b28a7d->leave($__internal_426993b3298e90277db40e7d0a2051f20a0a341aa454db94b52a909597b28a7d_prof);

    }

    // line 113
    public function block_pagination($context, array $blocks = array())
    {
        $__internal_8c076ec6ffd2b2ca04cd6f430140223333193622e433a934fabf6e6984efbca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c076ec6ffd2b2ca04cd6f430140223333193622e433a934fabf6e6984efbca2->enter($__internal_8c076ec6ffd2b2ca04cd6f430140223333193622e433a934fabf6e6984efbca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        $__internal_8d594d0cabc3168aefa714c765bbe96ad42c501bcae675f1007e33af233bf0c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d594d0cabc3168aefa714c765bbe96ad42c501bcae675f1007e33af233bf0c5->enter($__internal_8d594d0cabc3168aefa714c765bbe96ad42c501bcae675f1007e33af233bf0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        // line 114
        echo "             ";
        
        $__internal_8d594d0cabc3168aefa714c765bbe96ad42c501bcae675f1007e33af233bf0c5->leave($__internal_8d594d0cabc3168aefa714c765bbe96ad42c501bcae675f1007e33af233bf0c5_prof);

        
        $__internal_8c076ec6ffd2b2ca04cd6f430140223333193622e433a934fabf6e6984efbca2->leave($__internal_8c076ec6ffd2b2ca04cd6f430140223333193622e433a934fabf6e6984efbca2_prof);

    }

    // line 121
    public function block_footer($context, array $blocks = array())
    {
        $__internal_30bd9e3b5209366bb997591533a5c68c51cea45ffd4426ffa3031e7b3f73dfa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30bd9e3b5209366bb997591533a5c68c51cea45ffd4426ffa3031e7b3f73dfa0->enter($__internal_30bd9e3b5209366bb997591533a5c68c51cea45ffd4426ffa3031e7b3f73dfa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_1ee65c8231f7bf0c61bddd660613e615f3c5bedb7a7b632c786db04b042f671a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ee65c8231f7bf0c61bddd660613e615f3c5bedb7a7b632c786db04b042f671a->enter($__internal_1ee65c8231f7bf0c61bddd660613e615f3c5bedb7a7b632c786db04b042f671a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 122
        echo "  <div class=\"row\" style=\"margin-top:20px;position: absolute;botom: 0;width:100%\">
 <!-- Footer -->
   <center>
            <p style=\"font-weight:bold;color:white;background-color: black;margin:0; padding-top:20px;height:60px;margin-right:-10%;\">Copyright &copy; PKFokam Institute Of Excellence</p>
   </center>
 </div>
";
        
        $__internal_1ee65c8231f7bf0c61bddd660613e615f3c5bedb7a7b632c786db04b042f671a->leave($__internal_1ee65c8231f7bf0c61bddd660613e615f3c5bedb7a7b632c786db04b042f671a_prof);

        
        $__internal_30bd9e3b5209366bb997591533a5c68c51cea45ffd4426ffa3031e7b3f73dfa0->leave($__internal_30bd9e3b5209366bb997591533a5c68c51cea45ffd4426ffa3031e7b3f73dfa0_prof);

    }

    // line 130
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f6c258daab4267c06226f2ea3d108084f512a95773e11ef5d470798e5b41379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f6c258daab4267c06226f2ea3d108084f512a95773e11ef5d470798e5b41379->enter($__internal_3f6c258daab4267c06226f2ea3d108084f512a95773e11ef5d470798e5b41379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_98ec5cba8a60206cac9886da4bc973650f02fbbea8493aa83d8a6441ef3d0ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ec5cba8a60206cac9886da4bc973650f02fbbea8493aa83d8a6441ef3d0ef1->enter($__internal_98ec5cba8a60206cac9886da4bc973650f02fbbea8493aa83d8a6441ef3d0ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_98ec5cba8a60206cac9886da4bc973650f02fbbea8493aa83d8a6441ef3d0ef1->leave($__internal_98ec5cba8a60206cac9886da4bc973650f02fbbea8493aa83d8a6441ef3d0ef1_prof);

        
        $__internal_3f6c258daab4267c06226f2ea3d108084f512a95773e11ef5d470798e5b41379->leave($__internal_3f6c258daab4267c06226f2ea3d108084f512a95773e11ef5d470798e5b41379_prof);

    }

    public function getTemplateName()
    {
        return ":pkflibrary:base.html.twig";
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
", ":pkflibrary:base.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app/Resources\\views/pkflibrary/base.html.twig");
    }
}
