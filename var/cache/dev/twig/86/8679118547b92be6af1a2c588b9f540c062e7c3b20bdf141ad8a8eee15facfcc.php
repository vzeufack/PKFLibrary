<?php

/* default/sidebar.html.twig */
class __TwigTemplate_643869df1b6e56f63fc639825ef6cb7c993e0faa2f143a8547a7605ea1e2e45b extends Twig_Template
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
        $__internal_b432263a0b2b38145fca3e1608a93836308e8e9e676f755836c7fdf04fe4890e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b432263a0b2b38145fca3e1608a93836308e8e9e676f755836c7fdf04fe4890e->enter($__internal_b432263a0b2b38145fca3e1608a93836308e8e9e676f755836c7fdf04fe4890e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/sidebar.html.twig"));

        $__internal_1535627e0886edd110af2eaa2e0c22f94e71ef890265f64505cd233576989845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1535627e0886edd110af2eaa2e0c22f94e71ef890265f64505cd233576989845->enter($__internal_1535627e0886edd110af2eaa2e0c22f94e71ef890265f64505cd233576989845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/sidebar.html.twig"));

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
        
        $__internal_b432263a0b2b38145fca3e1608a93836308e8e9e676f755836c7fdf04fe4890e->leave($__internal_b432263a0b2b38145fca3e1608a93836308e8e9e676f755836c7fdf04fe4890e_prof);

        
        $__internal_1535627e0886edd110af2eaa2e0c22f94e71ef890265f64505cd233576989845->leave($__internal_1535627e0886edd110af2eaa2e0c22f94e71ef890265f64505cd233576989845_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_61551aa919d545f46c5ec9fb42069c633e472494f50585179e00f5736a3e5e3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61551aa919d545f46c5ec9fb42069c633e472494f50585179e00f5736a3e5e3f->enter($__internal_61551aa919d545f46c5ec9fb42069c633e472494f50585179e00f5736a3e5e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a4a722a436c7940f220ec04aa0e317095e7459f6019c875e3c2a9d20ec6f3c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a722a436c7940f220ec04aa0e317095e7459f6019c875e3c2a9d20ec6f3c34->enter($__internal_a4a722a436c7940f220ec04aa0e317095e7459f6019c875e3c2a9d20ec6f3c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a4a722a436c7940f220ec04aa0e317095e7459f6019c875e3c2a9d20ec6f3c34->leave($__internal_a4a722a436c7940f220ec04aa0e317095e7459f6019c875e3c2a9d20ec6f3c34_prof);

        
        $__internal_61551aa919d545f46c5ec9fb42069c633e472494f50585179e00f5736a3e5e3f->leave($__internal_61551aa919d545f46c5ec9fb42069c633e472494f50585179e00f5736a3e5e3f_prof);

    }

    // line 98
    public function block_whereYouAre($context, array $blocks = array())
    {
        $__internal_d71877a608499897c8063195eea93d773bdd9ecb74493f6d6466da66c2b2811b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d71877a608499897c8063195eea93d773bdd9ecb74493f6d6466da66c2b2811b->enter($__internal_d71877a608499897c8063195eea93d773bdd9ecb74493f6d6466da66c2b2811b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "whereYouAre"));

        $__internal_b72a573327c84a2cb112049417a0d73c0ffbefd0538d5a4b196ba706831b13df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b72a573327c84a2cb112049417a0d73c0ffbefd0538d5a4b196ba706831b13df->enter($__internal_b72a573327c84a2cb112049417a0d73c0ffbefd0538d5a4b196ba706831b13df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "whereYouAre"));

        // line 99
        echo "                       <li><a class=\"active\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
        echo "\" style=\"color:black\">All</a>
                       </li>
                    ";
        
        $__internal_b72a573327c84a2cb112049417a0d73c0ffbefd0538d5a4b196ba706831b13df->leave($__internal_b72a573327c84a2cb112049417a0d73c0ffbefd0538d5a4b196ba706831b13df_prof);

        
        $__internal_d71877a608499897c8063195eea93d773bdd9ecb74493f6d6466da66c2b2811b->leave($__internal_d71877a608499897c8063195eea93d773bdd9ecb74493f6d6466da66c2b2811b_prof);

    }

    // line 112
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a53a3abecdc5e9f226069beedbde88780ffdda5098ee9620e0b03780fb7154a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a53a3abecdc5e9f226069beedbde88780ffdda5098ee9620e0b03780fb7154a8->enter($__internal_a53a3abecdc5e9f226069beedbde88780ffdda5098ee9620e0b03780fb7154a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_092f2fdc07378add1d2b723d211984dec8b5eb0cfa22199ce808e6c30cf09ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_092f2fdc07378add1d2b723d211984dec8b5eb0cfa22199ce808e6c30cf09ebb->enter($__internal_092f2fdc07378add1d2b723d211984dec8b5eb0cfa22199ce808e6c30cf09ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_092f2fdc07378add1d2b723d211984dec8b5eb0cfa22199ce808e6c30cf09ebb->leave($__internal_092f2fdc07378add1d2b723d211984dec8b5eb0cfa22199ce808e6c30cf09ebb_prof);

        
        $__internal_a53a3abecdc5e9f226069beedbde88780ffdda5098ee9620e0b03780fb7154a8->leave($__internal_a53a3abecdc5e9f226069beedbde88780ffdda5098ee9620e0b03780fb7154a8_prof);

    }

    // line 139
    public function block_adminAdd($context, array $blocks = array())
    {
        $__internal_cf3803506dac440681cdeb328960d8999d684a2ddfce5d6ddb195f32af71df50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf3803506dac440681cdeb328960d8999d684a2ddfce5d6ddb195f32af71df50->enter($__internal_cf3803506dac440681cdeb328960d8999d684a2ddfce5d6ddb195f32af71df50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminAdd"));

        $__internal_3294c2dfe4327434d44fb81a4c2fec62f55e9e6be35050dc62e55e9ceeb817ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3294c2dfe4327434d44fb81a4c2fec62f55e9e6be35050dc62e55e9ceeb817ed->enter($__internal_3294c2dfe4327434d44fb81a4c2fec62f55e9e6be35050dc62e55e9ceeb817ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminAdd"));

        // line 140
        echo "                      
                   ";
        
        $__internal_3294c2dfe4327434d44fb81a4c2fec62f55e9e6be35050dc62e55e9ceeb817ed->leave($__internal_3294c2dfe4327434d44fb81a4c2fec62f55e9e6be35050dc62e55e9ceeb817ed_prof);

        
        $__internal_cf3803506dac440681cdeb328960d8999d684a2ddfce5d6ddb195f32af71df50->leave($__internal_cf3803506dac440681cdeb328960d8999d684a2ddfce5d6ddb195f32af71df50_prof);

    }

    // line 146
    public function block_body($context, array $blocks = array())
    {
        $__internal_d055eaef60fbd0cc58271570d96b8ac1a9fd842c63c5346ee15ddd4bb5cb5f88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d055eaef60fbd0cc58271570d96b8ac1a9fd842c63c5346ee15ddd4bb5cb5f88->enter($__internal_d055eaef60fbd0cc58271570d96b8ac1a9fd842c63c5346ee15ddd4bb5cb5f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_400c7818d102b53719a48f84cb6703189f2c881f1deba06ce84bcf7b61de0cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400c7818d102b53719a48f84cb6703189f2c881f1deba06ce84bcf7b61de0cf1->enter($__internal_400c7818d102b53719a48f84cb6703189f2c881f1deba06ce84bcf7b61de0cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 147
        echo "            ";
        
        $__internal_400c7818d102b53719a48f84cb6703189f2c881f1deba06ce84bcf7b61de0cf1->leave($__internal_400c7818d102b53719a48f84cb6703189f2c881f1deba06ce84bcf7b61de0cf1_prof);

        
        $__internal_d055eaef60fbd0cc58271570d96b8ac1a9fd842c63c5346ee15ddd4bb5cb5f88->leave($__internal_d055eaef60fbd0cc58271570d96b8ac1a9fd842c63c5346ee15ddd4bb5cb5f88_prof);

    }

    // line 149
    public function block_pagination($context, array $blocks = array())
    {
        $__internal_22f6b1c4aa3716d9dee7d1d14af1e65b1db8cc22e8f84897a4be5192122f8d05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22f6b1c4aa3716d9dee7d1d14af1e65b1db8cc22e8f84897a4be5192122f8d05->enter($__internal_22f6b1c4aa3716d9dee7d1d14af1e65b1db8cc22e8f84897a4be5192122f8d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        $__internal_151cba840dbf0dc7c4bf0288790120717328d48e6503bfacebc7826d46b0773f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_151cba840dbf0dc7c4bf0288790120717328d48e6503bfacebc7826d46b0773f->enter($__internal_151cba840dbf0dc7c4bf0288790120717328d48e6503bfacebc7826d46b0773f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        // line 150
        echo "        ";
        
        $__internal_151cba840dbf0dc7c4bf0288790120717328d48e6503bfacebc7826d46b0773f->leave($__internal_151cba840dbf0dc7c4bf0288790120717328d48e6503bfacebc7826d46b0773f_prof);

        
        $__internal_22f6b1c4aa3716d9dee7d1d14af1e65b1db8cc22e8f84897a4be5192122f8d05->leave($__internal_22f6b1c4aa3716d9dee7d1d14af1e65b1db8cc22e8f84897a4be5192122f8d05_prof);

    }

    // line 170
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3c27337b693c6499fdd5f28a01adc8e7b1faab68277e52c38eb193ebe319857a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c27337b693c6499fdd5f28a01adc8e7b1faab68277e52c38eb193ebe319857a->enter($__internal_3c27337b693c6499fdd5f28a01adc8e7b1faab68277e52c38eb193ebe319857a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bae4a455b988488785d0f74bdb25d57139b7d698e9616af2a2cc9d0aa574a1c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae4a455b988488785d0f74bdb25d57139b7d698e9616af2a2cc9d0aa574a1c9->enter($__internal_bae4a455b988488785d0f74bdb25d57139b7d698e9616af2a2cc9d0aa574a1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_bae4a455b988488785d0f74bdb25d57139b7d698e9616af2a2cc9d0aa574a1c9->leave($__internal_bae4a455b988488785d0f74bdb25d57139b7d698e9616af2a2cc9d0aa574a1c9_prof);

        
        $__internal_3c27337b693c6499fdd5f28a01adc8e7b1faab68277e52c38eb193ebe319857a->leave($__internal_3c27337b693c6499fdd5f28a01adc8e7b1faab68277e52c38eb193ebe319857a_prof);

    }

    public function getTemplateName()
    {
        return "default/sidebar.html.twig";
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
", "default/sidebar.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\default\\sidebar.html.twig");
    }
}
