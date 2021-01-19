<?php

/* pkflibrary/user/adminUserDisableList.html.twig */
class __TwigTemplate_56ab9f2b22fd0b75001e4ec6e014ebf191d1c5de184f29793771ca04629057bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("pkflibrary/base.html.twig ", "pkflibrary/user/adminUserDisableList.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'status' => array($this, 'block_status'),
            'left_menu' => array($this, 'block_left_menu'),
            'searchAdd' => array($this, 'block_searchAdd'),
            'content' => array($this, 'block_content'),
            'pagination' => array($this, 'block_pagination'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "pkflibrary/base.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17d03b4184c09884338e2763e24b91b5a069c5c135a1d4ecf4ed1ff371ff36d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d03b4184c09884338e2763e24b91b5a069c5c135a1d4ecf4ed1ff371ff36d5->enter($__internal_17d03b4184c09884338e2763e24b91b5a069c5c135a1d4ecf4ed1ff371ff36d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/user/adminUserDisableList.html.twig"));

        $__internal_1a1b23eee9b473446c57fc9c1d2d495d23d754d58e7ef879e3c1e4d9baace031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a1b23eee9b473446c57fc9c1d2d495d23d754d58e7ef879e3c1e4d9baace031->enter($__internal_1a1b23eee9b473446c57fc9c1d2d495d23d754d58e7ef879e3c1e4d9baace031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/user/adminUserDisableList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17d03b4184c09884338e2763e24b91b5a069c5c135a1d4ecf4ed1ff371ff36d5->leave($__internal_17d03b4184c09884338e2763e24b91b5a069c5c135a1d4ecf4ed1ff371ff36d5_prof);

        
        $__internal_1a1b23eee9b473446c57fc9c1d2d495d23d754d58e7ef879e3c1e4d9baace031->leave($__internal_1a1b23eee9b473446c57fc9c1d2d495d23d754d58e7ef879e3c1e4d9baace031_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8bd4fe253bb92d6d0e4c7bbab27125ad0730b8b2d09e58099bba3167c5a2522d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bd4fe253bb92d6d0e4c7bbab27125ad0730b8b2d09e58099bba3167c5a2522d->enter($__internal_8bd4fe253bb92d6d0e4c7bbab27125ad0730b8b2d09e58099bba3167c5a2522d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4bfe6276415ae71196c63e0068e067b7fe5e65f934524ec0e28cdef4cbe6ffeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bfe6276415ae71196c63e0068e067b7fe5e65f934524ec0e28cdef4cbe6ffeb->enter($__internal_4bfe6276415ae71196c63e0068e067b7fe5e65f934524ec0e28cdef4cbe6ffeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav navbar-right\" style=\"font-weight:bold;background-color:black;\">
            <li>
                <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", array("page" => 1));
        echo "\"><i class=\"fa fa-home\"></i> Home</a>
            </li>
            ";
        // line 11
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "                <li class=\"dropdown active\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> Management <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\"  >
                        <li class=\"active\">
                           <a href=\"";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserEnableList", array("page" => 1));
            echo "\" style=\"font-family:calibri\"> <i class=\"fa fa-user\"></i>User Management</a>
                       </li>
                       <li>
                        <a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manageBorrows");
            echo "\"style=\"font-family:calibri\" > <i class=\"fa fa-book\"></i>  Borrow Management</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categoryList");
            echo "\" style=\"font-family:calibri\" > <i class=\"fa fa-navicon\"></i>  Category Management</a>
                    </li>
                </ul>
            </li>
        ";
        }
        // line 27
        echo "        <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> My Account <b class=\"caret\"></b></a>
            <ul class=\"dropdown-menu\"  >
                <li>
                    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrow", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "bookId" =>  -1)), "html", null, true);
        echo "\" style=\"font-family:calibri\"> <i class=\"fa fa-book\"></i> Borrow Reports </a>
                </li>
                <li>
                    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("UserDetail", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "Id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
        echo "\" style=\"font-family:calibri\"><i class=\"fa fa-user\"></i> My Personal data</a>
                </li>

             </ul>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\">About</a>
        </li>
        <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("help");
        echo "\">Help</a>
        </li>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out\"></i> Logout</a>
        </li>
 </ul>
</div>
<!-- /.navbar-collapse -->
";
        
        $__internal_4bfe6276415ae71196c63e0068e067b7fe5e65f934524ec0e28cdef4cbe6ffeb->leave($__internal_4bfe6276415ae71196c63e0068e067b7fe5e65f934524ec0e28cdef4cbe6ffeb_prof);

        
        $__internal_8bd4fe253bb92d6d0e4c7bbab27125ad0730b8b2d09e58099bba3167c5a2522d->leave($__internal_8bd4fe253bb92d6d0e4c7bbab27125ad0730b8b2d09e58099bba3167c5a2522d_prof);

    }

    // line 53
    public function block_status($context, array $blocks = array())
    {
        $__internal_d207fc3a518e28fab775ce597328e74e588c644802e1f75792423f2576a639f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d207fc3a518e28fab775ce597328e74e588c644802e1f75792423f2576a639f5->enter($__internal_d207fc3a518e28fab775ce597328e74e588c644802e1f75792423f2576a639f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        $__internal_778e810274cecbfcfa0678e0e1cbc629051b745c29a2c1e2881458c8cb8ae1a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778e810274cecbfcfa0678e0e1cbc629051b745c29a2c1e2881458c8cb8ae1a4->enter($__internal_778e810274cecbfcfa0678e0e1cbc629051b745c29a2c1e2881458c8cb8ae1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        // line 54
        echo "    ";
        if (((isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")) == "")) {
            // line 55
            echo "       <li><a class=\"active\" href=\"#\" style=\"color:black\">Management / User Management / Users Disabled / ";
            echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "html", null, true);
            echo " </a></li>
    ";
        } else {
            // line 57
            echo "        <li><a class=\"active\" href=\"#\" style=\"color:black\">Management / User Management / Search results for \"";
            echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")), "html", null, true);
            echo "\" </a></li>
    ";
        }
        
        $__internal_778e810274cecbfcfa0678e0e1cbc629051b745c29a2c1e2881458c8cb8ae1a4->leave($__internal_778e810274cecbfcfa0678e0e1cbc629051b745c29a2c1e2881458c8cb8ae1a4_prof);

        
        $__internal_d207fc3a518e28fab775ce597328e74e588c644802e1f75792423f2576a639f5->leave($__internal_d207fc3a518e28fab775ce597328e74e588c644802e1f75792423f2576a639f5_prof);

    }

    // line 61
    public function block_left_menu($context, array $blocks = array())
    {
        $__internal_1203dcaf73d75a90f5918cf6f49703e3982e912ced1452099514bf6340340a29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1203dcaf73d75a90f5918cf6f49703e3982e912ced1452099514bf6340340a29->enter($__internal_1203dcaf73d75a90f5918cf6f49703e3982e912ced1452099514bf6340340a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_menu"));

        $__internal_7bcfb7d7f38fe50c7a19a3d264737a9602d2d324103fc2f88d4b785532f5b06d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bcfb7d7f38fe50c7a19a3d264737a9602d2d324103fc2f88d4b785532f5b06d->enter($__internal_7bcfb7d7f38fe50c7a19a3d264737a9602d2d324103fc2f88d4b785532f5b06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_menu"));

        // line 62
        echo "
<h4 style=\"text-align:center\">User Categories</h4>
  <nav>
  <ul class=\"nav list-group-item\" style=\"font-family:calibri; font-size:16px\">  
    <li>
        <a class=\"\" href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserDisableList", array("page" => 1));
        echo "\"  style=\"width:90%\"><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> All Users</a>
    </li>               
    <li>
        <a class=\"\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserListSearch", array("page" => 1, "categorie" => "Undergraduate", "enabled" => "false")), "html", null, true);
        echo "\" style=\"width:90%\" ><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> Undergraduate</a>
    </li>
    <li>
        <a class=\"\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserListSearch", array("page" => 1, "categorie" => "BEA", "enabled" => "false")), "html", null, true);
        echo "\"  style=\"width:90%\" ><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> BEA</a>
    </li>
    <li>
        <a class=\"\" href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserListSearch", array("page" => 1, "categorie" => "MBA", "enabled" => "false")), "html", null, true);
        echo "\"  style=\"width:90%\" ><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> MBA</a>
    </li>
    <li>
        <a class=\"\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserListSearch", array("page" => 1, "categorie" => "Lecturer", "enabled" => "false")), "html", null, true);
        echo "\"  style=\"width:90%\"><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> Lecturer</a>
    </li>
    <li>
        <a class=\"\" href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserListSearch", array("page" => 1, "categorie" => "Master", "enabled" => "false")), "html", null, true);
        echo "\"  style=\"width:90%\"><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> Master</a>
    </li>
  </ul>
</nav>

";
        
        $__internal_7bcfb7d7f38fe50c7a19a3d264737a9602d2d324103fc2f88d4b785532f5b06d->leave($__internal_7bcfb7d7f38fe50c7a19a3d264737a9602d2d324103fc2f88d4b785532f5b06d_prof);

        
        $__internal_1203dcaf73d75a90f5918cf6f49703e3982e912ced1452099514bf6340340a29->leave($__internal_1203dcaf73d75a90f5918cf6f49703e3982e912ced1452099514bf6340340a29_prof);

    }

    // line 89
    public function block_searchAdd($context, array $blocks = array())
    {
        $__internal_c01a1f306093a43df5aadec6a27131af28eabb2ad9536626bbb13abb18859852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c01a1f306093a43df5aadec6a27131af28eabb2ad9536626bbb13abb18859852->enter($__internal_c01a1f306093a43df5aadec6a27131af28eabb2ad9536626bbb13abb18859852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchAdd"));

        $__internal_e6dda93083f3c3255593842303a6e0df23d61f9b80ff1aa5c895cfccbce08e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6dda93083f3c3255593842303a6e0df23d61f9b80ff1aa5c895cfccbce08e6a->enter($__internal_e6dda93083f3c3255593842303a6e0df23d61f9b80ff1aa5c895cfccbce08e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchAdd"));

        // line 90
        echo "    ";
        if (((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")) != null)) {
            // line 91
            echo "    <div class=\"col-md-4\"> 
    <table width=\"150%\" style=\"border-spacing:0px 0px; border-collapse:separate; margin-left:95%\"> 
        <tr>
          ";
            // line 94
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
          <td>";
            // line 95
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "keyword", array()), 'widget');
            echo "</td>
          <td>";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
            echo "</td>
          ";
            // line 97
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
        </tr>
    </table>
    </div>
    ";
        }
        // line 102
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addUser");
        echo "\" class=\"btn btn-primary\" style=\"float:right; margin-bottom:10px; font-style:calibri; font-weight:bold\"><i class=\" fa fa-plus \"></i> Add User </a>                      
";
        
        $__internal_e6dda93083f3c3255593842303a6e0df23d61f9b80ff1aa5c895cfccbce08e6a->leave($__internal_e6dda93083f3c3255593842303a6e0df23d61f9b80ff1aa5c895cfccbce08e6a_prof);

        
        $__internal_c01a1f306093a43df5aadec6a27131af28eabb2ad9536626bbb13abb18859852->leave($__internal_c01a1f306093a43df5aadec6a27131af28eabb2ad9536626bbb13abb18859852_prof);

    }

    // line 105
    public function block_content($context, array $blocks = array())
    {
        $__internal_ee083f7268892241802a39fdaa58f250dbb311d70b396db143568e48aaa539cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee083f7268892241802a39fdaa58f250dbb311d70b396db143568e48aaa539cf->enter($__internal_ee083f7268892241802a39fdaa58f250dbb311d70b396db143568e48aaa539cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ceb968617919e7ab0ce7bf31f751ac8f3cee3e559858c1c5f37c78b48fb72b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb968617919e7ab0ce7bf31f751ac8f3cee3e559858c1c5f37c78b48fb72b0a->enter($__internal_ceb968617919e7ab0ce7bf31f751ac8f3cee3e559858c1c5f37c78b48fb72b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 106
        echo "
    <!-- Service Tabs -->
    <div class=\"row\">

        <div class=\"col-lg-12\">

            <ul  class=\"nav nav-tabs nav-justified\">
                <li class=\"\"><a style=\"color:black; font-family:calibri; font-weight:bold; font-size:18px\" href=\"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserEnableList", array("page" => 1));
        echo "\"><i class=\"fa fa-check\"></i> Authorized Users </a>
                </li>

                <li class=\"active\"><a style=\"color:red; font-family:calibri; font-weight:bold; font-size:18px\" href=\"";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserDisableList", array("page" => 1));
        echo "\"  ><i class=\"fa fa-ban\"></i> Unauthorized Users </a>
                </li>
                
            </ul>

            <div id=\"myTabContent\" class=\"tab-content\">
                <div class=\"tab-pane fade active in\" id=\"service-two\">
                    <h4></h4>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- Advanced Tables -->
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <div class=\"count\">
                                        ";
        // line 130
        if (((isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")) == "")) {
            // line 131
            echo "                                     <P style=\"font-family:calibri\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
            echo " unauthorized users </P>
                                    ";
        } else {
            // line 133
            echo "                                      <P style=\"font-family:calibri\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
            echo " unauthorized users found </P>
                                    ";
        }
        // line 135
        echo "                                    </div>
                                </div>
                                <center>
                                    <div class=\"row\" style=\" margin-left:5% ; margin-right: -5%; margin-top:1% \">


                                        ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 142
            echo "                                         <div class=\"col-md-2 img-portfolio\" style=\" width:18% ; height:260px;border:solid;margin-left:1px ; margin-right: 1px ; background-color: #f5f5f5; border-radius: 10px; \" >
                                            <div style=\" position: relative; width:100% ; height:25%; display: block; bottom:0 \">
                                                <a href=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserDetail", array("id" => $this->getAttribute($context["user"], "Id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
            echo "\" title=\"more details\">
                                                    <p style=\"text-align:center; foreground-color:black; font-family:calibri; margin-bottom:0px ; \"> ";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "familyName", array()), "html", null, true);
            echo "</p> 
                                                    <p style=\"text-align:center; color:black; font-family:calibri\">";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "phoneNumber", array()), "html", null, true);
            echo " </p>

                                                </a>
                                            </div>
                                            <a href=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserDetail", array("id" => $this->getAttribute($context["user"], "Id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
            echo "\">                       ";
            if (($this->getAttribute($context["user"], "image", array()) != null)) {
                echo " 
                                                <img class=\"img-responsive img-hover\"  width=\"100%\" height=\"75%\" src=\"";
                // line 151
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((($this->getAttribute($this->getAttribute($context["user"], "image", array()), "uploadDir", array()) . "/") . $this->getAttribute($this->getAttribute($context["user"], "image", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute($context["user"], "image", array()), "url", array()))), "html", null, true);
                echo "\" 
                                                alt=\"";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "image", array()), "alt", array()), "html", null, true);
                echo "\" style=\"margin-bottom:5px;\"
                                                />

                                            ";
            }
            // line 156
            echo "                                        </a>
                                    </div>
                                    ";
            // line 158
            if ((($this->getAttribute($context["loop"], "index", array()) % 5) == 0)) {
                // line 159
                echo "                                    </div>
                                    <div class=\"row\" style=\" margin-left:5% ; margin-right: -5% \">
                                    ";
            }
            // line 161
            echo " 
                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo " 
                            </div>

                        <!--End Advanced Tables -->
                    </div>
                </div>
            </div>
            <!-- /. ROW  -->
        </div>
    </div> 
</div>
</div>

";
        
        $__internal_ceb968617919e7ab0ce7bf31f751ac8f3cee3e559858c1c5f37c78b48fb72b0a->leave($__internal_ceb968617919e7ab0ce7bf31f751ac8f3cee3e559858c1c5f37c78b48fb72b0a_prof);

        
        $__internal_ee083f7268892241802a39fdaa58f250dbb311d70b396db143568e48aaa539cf->leave($__internal_ee083f7268892241802a39fdaa58f250dbb311d70b396db143568e48aaa539cf_prof);

    }

    // line 177
    public function block_pagination($context, array $blocks = array())
    {
        $__internal_1a19964f31a74a979e15bb3517a05b10ee4598e44a4abac76e5bb76ce5b9cbed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a19964f31a74a979e15bb3517a05b10ee4598e44a4abac76e5bb76ce5b9cbed->enter($__internal_1a19964f31a74a979e15bb3517a05b10ee4598e44a4abac76e5bb76ce5b9cbed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        $__internal_ec8e4863578238d8633d1b5ce5a908aa26a6adf6d6daa14f3cba788107ae84ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec8e4863578238d8633d1b5ce5a908aa26a6adf6d6daa14f3cba788107ae84ae->enter($__internal_ec8e4863578238d8633d1b5ce5a908aa26a6adf6d6daa14f3cba788107ae84ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        // line 178
        echo "
 <div class=\"row text-center\">
     <div class=\"col-lg-12\">
      ";
        // line 181
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
   </div>
</div>
<!-- /.row -->
";
        
        $__internal_ec8e4863578238d8633d1b5ce5a908aa26a6adf6d6daa14f3cba788107ae84ae->leave($__internal_ec8e4863578238d8633d1b5ce5a908aa26a6adf6d6daa14f3cba788107ae84ae_prof);

        
        $__internal_1a19964f31a74a979e15bb3517a05b10ee4598e44a4abac76e5bb76ce5b9cbed->leave($__internal_1a19964f31a74a979e15bb3517a05b10ee4598e44a4abac76e5bb76ce5b9cbed_prof);

    }

    // line 187
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2b3688474ed84abc24e026bb85cc518121506e29b86409d4f13a8a08cc1572a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3688474ed84abc24e026bb85cc518121506e29b86409d4f13a8a08cc1572a2->enter($__internal_2b3688474ed84abc24e026bb85cc518121506e29b86409d4f13a8a08cc1572a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_39f1fbe64ce4745af1d4c1bb9f56478aec8ec70ee9a4b677ebb145f7cda0f6cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f1fbe64ce4745af1d4c1bb9f56478aec8ec70ee9a4b677ebb145f7cda0f6cf->enter($__internal_39f1fbe64ce4745af1d4c1bb9f56478aec8ec70ee9a4b677ebb145f7cda0f6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 188
        echo "<!-- Footer -->
";
        // line 189
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()) == 0)) {
            // line 190
            echo "  <div class=\"row\" style=\"position: fixed; bottom: 0; width:100%;margin-top:20px;\">
     <center>
        <p style=\"font-weight:bold;color:white;background-color: black;margin:0; margin-right:-10%;height:70px;padding-top: 30px;\">Copyright &copy; PKFokam Institute Of Excellence</p>
    </center>
</div>
";
        } else {
            // line 196
            echo "  <div class=\"row\" style=\"margin-top:20px;position: absolute;botom: 0;width:100%\">
   <center>
            <p style=\"font-weight:bold;color:white;background-color: black;margin:0; padding-top:20px;height:70px;margin-right:-10%;\">Copyright &copy; PKFokam Institute Of Excellence</p>
   </center>
 </div>
";
        }
        
        $__internal_39f1fbe64ce4745af1d4c1bb9f56478aec8ec70ee9a4b677ebb145f7cda0f6cf->leave($__internal_39f1fbe64ce4745af1d4c1bb9f56478aec8ec70ee9a4b677ebb145f7cda0f6cf_prof);

        
        $__internal_2b3688474ed84abc24e026bb85cc518121506e29b86409d4f13a8a08cc1572a2->leave($__internal_2b3688474ed84abc24e026bb85cc518121506e29b86409d4f13a8a08cc1572a2_prof);

    }

    public function getTemplateName()
    {
        return "pkflibrary/user/adminUserDisableList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  506 => 196,  498 => 190,  496 => 189,  493 => 188,  484 => 187,  469 => 181,  464 => 178,  455 => 177,  432 => 162,  417 => 161,  412 => 159,  410 => 158,  406 => 156,  399 => 152,  395 => 151,  389 => 150,  382 => 146,  376 => 145,  372 => 144,  368 => 142,  351 => 141,  343 => 135,  337 => 133,  331 => 131,  329 => 130,  312 => 116,  306 => 113,  297 => 106,  288 => 105,  275 => 102,  267 => 97,  263 => 96,  259 => 95,  255 => 94,  250 => 91,  247 => 90,  238 => 89,  222 => 82,  216 => 79,  210 => 76,  204 => 73,  198 => 70,  192 => 67,  185 => 62,  176 => 61,  162 => 57,  156 => 55,  153 => 54,  144 => 53,  128 => 46,  122 => 43,  116 => 40,  107 => 34,  101 => 31,  95 => 27,  87 => 22,  81 => 19,  75 => 16,  69 => 12,  67 => 11,  62 => 9,  55 => 4,  46 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'pkflibrary/base.html.twig '%}

{% block menu %}

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav navbar-right\" style=\"font-weight:bold;background-color:black;\">
            <li>
                <a href=\"{{ path('homepage',{'page': 1}) }}\"><i class=\"fa fa-home\"></i> Home</a>
            </li>
            {% if is_granted(\"ROLE_ADMIN\") %}
                <li class=\"dropdown active\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> Management <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\"  >
                        <li class=\"active\">
                           <a href=\"{{ path('AdminUserEnableList',{'page': 1}) }}\" style=\"font-family:calibri\"> <i class=\"fa fa-user\"></i>User Management</a>
                       </li>
                       <li>
                        <a href=\"{{ path('manageBorrows') }}\"style=\"font-family:calibri\" > <i class=\"fa fa-book\"></i>  Borrow Management</a>
                    </li>
                    <li>
                        <a href=\"{{ path('categoryList') }}\" style=\"font-family:calibri\" > <i class=\"fa fa-navicon\"></i>  Category Management</a>
                    </li>
                </ul>
            </li>
        {% endif %}
        <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> My Account <b class=\"caret\"></b></a>
            <ul class=\"dropdown-menu\"  >
                <li>
                    <a href=\"{{ path('borrow', {'userId': app.user.id, 'bookId':-1}) }}\" style=\"font-family:calibri\"> <i class=\"fa fa-book\"></i> Borrow Reports </a>
                </li>
                <li>
                    <a href=\"{{ path('UserDetail',{'id': app.user.Id ,'page': page}) }}\" style=\"font-family:calibri\"><i class=\"fa fa-user\"></i> My Personal data</a>
                </li>

             </ul>
        </li>
        <li>
            <a href=\"{{ path('about') }}\">About</a>
        </li>
        <li>
            <a href=\"{{ path('help') }}\">Help</a>
        </li>
        <li>
            <a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"fa fa-sign-out\"></i> Logout</a>
        </li>
 </ul>
</div>
<!-- /.navbar-collapse -->
{% endblock %}

{% block status %}
    {% if keyword == \"\" %}
       <li><a class=\"active\" href=\"#\" style=\"color:black\">Management / User Management / Users Disabled / {{category}} </a></li>
    {% else %}
        <li><a class=\"active\" href=\"#\" style=\"color:black\">Management / User Management / Search results for \"{{keyword}}\" </a></li>
    {% endif %}
{% endblock %}

{% block left_menu %}

<h4 style=\"text-align:center\">User Categories</h4>
  <nav>
  <ul class=\"nav list-group-item\" style=\"font-family:calibri; font-size:16px\">  
    <li>
        <a class=\"\" href=\"{{ path('AdminUserDisableList',{'page': 1}) }}\"  style=\"width:90%\"><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> All Users</a>
    </li>               
    <li>
        <a class=\"\" href=\"{{ path('AdminUserListSearch',{'page': 1,'categorie':'Undergraduate','enabled':'false'}) }}\" style=\"width:90%\" ><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> Undergraduate</a>
    </li>
    <li>
        <a class=\"\" href=\"{{ path('AdminUserListSearch',{'page': 1,'categorie':'BEA','enabled':'false'}) }}\"  style=\"width:90%\" ><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> BEA</a>
    </li>
    <li>
        <a class=\"\" href=\"{{ path('AdminUserListSearch',{'page': 1,'categorie':'MBA','enabled':'false'}) }}\"  style=\"width:90%\" ><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> MBA</a>
    </li>
    <li>
        <a class=\"\" href=\"{{ path('AdminUserListSearch',{'page': 1,'categorie':'Lecturer','enabled':'false'}) }}\"  style=\"width:90%\"><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> Lecturer</a>
    </li>
    <li>
        <a class=\"\" href=\"{{ path('AdminUserListSearch',{'page': 1,'categorie':'Master','enabled':'false'}) }}\"  style=\"width:90%\"><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> Master</a>
    </li>
  </ul>
</nav>

{% endblock %}

{% block searchAdd %}
    {% if form != null %}
    <div class=\"col-md-4\"> 
    <table width=\"150%\" style=\"border-spacing:0px 0px; border-collapse:separate; margin-left:95%\"> 
        <tr>
          {{form_start(form)}}
          <td>{{ form_widget(form.keyword) }}</td>
          <td>{{ form_widget(form.submit) }}</td>
          {{form_end(form)}}
        </tr>
    </table>
    </div>
    {% endif %}
    <a href=\"{{ path('addUser') }}\" class=\"btn btn-primary\" style=\"float:right; margin-bottom:10px; font-style:calibri; font-weight:bold\"><i class=\" fa fa-plus \"></i> Add User </a>                      
{% endblock %}

{% block content %}

    <!-- Service Tabs -->
    <div class=\"row\">

        <div class=\"col-lg-12\">

            <ul  class=\"nav nav-tabs nav-justified\">
                <li class=\"\"><a style=\"color:black; font-family:calibri; font-weight:bold; font-size:18px\" href=\"{{ path('AdminUserEnableList',{'page': 1}) }}\"><i class=\"fa fa-check\"></i> Authorized Users </a>
                </li>

                <li class=\"active\"><a style=\"color:red; font-family:calibri; font-weight:bold; font-size:18px\" href=\"{{ path('AdminUserDisableList',{'page': 1}) }}\"  ><i class=\"fa fa-ban\"></i> Unauthorized Users </a>
                </li>
                
            </ul>

            <div id=\"myTabContent\" class=\"tab-content\">
                <div class=\"tab-pane fade active in\" id=\"service-two\">
                    <h4></h4>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- Advanced Tables -->
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <div class=\"count\">
                                        {% if keyword == \"\" %}
                                     <P style=\"font-family:calibri\"> {{ pagination.getTotalItemCount }} unauthorized users </P>
                                    {% else %}
                                      <P style=\"font-family:calibri\"> {{ pagination.getTotalItemCount }} unauthorized users found </P>
                                    {% endif %}
                                    </div>
                                </div>
                                <center>
                                    <div class=\"row\" style=\" margin-left:5% ; margin-right: -5%; margin-top:1% \">


                                        {% for user in pagination %}
                                         <div class=\"col-md-2 img-portfolio\" style=\" width:18% ; height:260px;border:solid;margin-left:1px ; margin-right: 1px ; background-color: #f5f5f5; border-radius: 10px; \" >
                                            <div style=\" position: relative; width:100% ; height:25%; display: block; bottom:0 \">
                                                <a href=\"{{ path('AdminUserDetail',{'id': user.Id ,'page': page}) }}\" title=\"more details\">
                                                    <p style=\"text-align:center; foreground-color:black; font-family:calibri; margin-bottom:0px ; \"> {{user.firstName}}  {{user.familyName}}</p> 
                                                    <p style=\"text-align:center; color:black; font-family:calibri\">{{user.phoneNumber}} </p>

                                                </a>
                                            </div>
                                            <a href=\"{{ path('AdminUserDetail',{'id': user.Id ,'page': page}) }}\">                       {% if user.image != null%} 
                                                <img class=\"img-responsive img-hover\"  width=\"100%\" height=\"75%\" src=\"{{ asset(user.image.uploadDir ~ '/' ~ user.image.id ~ '.' ~ user.image.url) }}\" 
                                                alt=\"{{ user.image.alt }}\" style=\"margin-bottom:5px;\"
                                                />

                                            {% endif %}
                                        </a>
                                    </div>
                                    {% if loop.index % 5 == 0 %}
                                    </div>
                                    <div class=\"row\" style=\" margin-left:5% ; margin-right: -5% \">
                                    {% endif %} 
                                {% endfor %} 
                            </div>

                        <!--End Advanced Tables -->
                    </div>
                </div>
            </div>
            <!-- /. ROW  -->
        </div>
    </div> 
</div>
</div>

{% endblock %}

{% block pagination %}

 <div class=\"row text-center\">
     <div class=\"col-lg-12\">
      {{ knp_pagination_render(pagination) }}
   </div>
</div>
<!-- /.row -->
{% endblock %}

{% block footer %}
<!-- Footer -->
{% if pagination.getTotalItemCount == 0 %}
  <div class=\"row\" style=\"position: fixed; bottom: 0; width:100%;margin-top:20px;\">
     <center>
        <p style=\"font-weight:bold;color:white;background-color: black;margin:0; margin-right:-10%;height:70px;padding-top: 30px;\">Copyright &copy; PKFokam Institute Of Excellence</p>
    </center>
</div>
{% else %}
  <div class=\"row\" style=\"margin-top:20px;position: absolute;botom: 0;width:100%\">
   <center>
            <p style=\"font-weight:bold;color:white;background-color: black;margin:0; padding-top:20px;height:70px;margin-right:-10%;\">Copyright &copy; PKFokam Institute Of Excellence</p>
   </center>
 </div>
{% endif %}
{% endblock %}

", "pkflibrary/user/adminUserDisableList.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\pkflibrary\\user\\adminUserDisableList.html.twig");
    }
}
