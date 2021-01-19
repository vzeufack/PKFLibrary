<?php

/* :pkflibrary/user:adminUserDisableList.html.twig */
class __TwigTemplate_db444d80f6d660ba743ea3b1dfecdb6d99f5b22b818e217cac7f5048e29578a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("pkflibrary/base.html.twig ", ":pkflibrary/user:adminUserDisableList.html.twig", 1);
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
        $__internal_f7db20d93b7adb022b474c7363f00ec0cadbed868b01e54189e3682071fe534b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7db20d93b7adb022b474c7363f00ec0cadbed868b01e54189e3682071fe534b->enter($__internal_f7db20d93b7adb022b474c7363f00ec0cadbed868b01e54189e3682071fe534b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/user:adminUserDisableList.html.twig"));

        $__internal_a9b83fd518f41a5075ac5858894e959bd4dfdbb900bf05cbd82c20f3af2837e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b83fd518f41a5075ac5858894e959bd4dfdbb900bf05cbd82c20f3af2837e1->enter($__internal_a9b83fd518f41a5075ac5858894e959bd4dfdbb900bf05cbd82c20f3af2837e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pkflibrary/user:adminUserDisableList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7db20d93b7adb022b474c7363f00ec0cadbed868b01e54189e3682071fe534b->leave($__internal_f7db20d93b7adb022b474c7363f00ec0cadbed868b01e54189e3682071fe534b_prof);

        
        $__internal_a9b83fd518f41a5075ac5858894e959bd4dfdbb900bf05cbd82c20f3af2837e1->leave($__internal_a9b83fd518f41a5075ac5858894e959bd4dfdbb900bf05cbd82c20f3af2837e1_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0499f112315d114eb659f3ba75ae03d6bff0121367188c45a77a6791dedd3688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0499f112315d114eb659f3ba75ae03d6bff0121367188c45a77a6791dedd3688->enter($__internal_0499f112315d114eb659f3ba75ae03d6bff0121367188c45a77a6791dedd3688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_774852dd9b63b97f0f30ca848ac315b9a2f4e7cb2ce0fac293608b5c91bd8c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_774852dd9b63b97f0f30ca848ac315b9a2f4e7cb2ce0fac293608b5c91bd8c69->enter($__internal_774852dd9b63b97f0f30ca848ac315b9a2f4e7cb2ce0fac293608b5c91bd8c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_774852dd9b63b97f0f30ca848ac315b9a2f4e7cb2ce0fac293608b5c91bd8c69->leave($__internal_774852dd9b63b97f0f30ca848ac315b9a2f4e7cb2ce0fac293608b5c91bd8c69_prof);

        
        $__internal_0499f112315d114eb659f3ba75ae03d6bff0121367188c45a77a6791dedd3688->leave($__internal_0499f112315d114eb659f3ba75ae03d6bff0121367188c45a77a6791dedd3688_prof);

    }

    // line 53
    public function block_status($context, array $blocks = array())
    {
        $__internal_212fa27779eb9b08e23e38a51f581f7d7df6ea528eb20c601b582eb390497f36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_212fa27779eb9b08e23e38a51f581f7d7df6ea528eb20c601b582eb390497f36->enter($__internal_212fa27779eb9b08e23e38a51f581f7d7df6ea528eb20c601b582eb390497f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        $__internal_9d0ab221a19d42dc5ec698033c6afd9a4a90a4dea7f8df2cb6f47fdd46fc38a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0ab221a19d42dc5ec698033c6afd9a4a90a4dea7f8df2cb6f47fdd46fc38a0->enter($__internal_9d0ab221a19d42dc5ec698033c6afd9a4a90a4dea7f8df2cb6f47fdd46fc38a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

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
        
        $__internal_9d0ab221a19d42dc5ec698033c6afd9a4a90a4dea7f8df2cb6f47fdd46fc38a0->leave($__internal_9d0ab221a19d42dc5ec698033c6afd9a4a90a4dea7f8df2cb6f47fdd46fc38a0_prof);

        
        $__internal_212fa27779eb9b08e23e38a51f581f7d7df6ea528eb20c601b582eb390497f36->leave($__internal_212fa27779eb9b08e23e38a51f581f7d7df6ea528eb20c601b582eb390497f36_prof);

    }

    // line 61
    public function block_left_menu($context, array $blocks = array())
    {
        $__internal_927c63c8d7c9c447e2c4b677b951574e4db336e6f301a8874a5e56affd63ae9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_927c63c8d7c9c447e2c4b677b951574e4db336e6f301a8874a5e56affd63ae9e->enter($__internal_927c63c8d7c9c447e2c4b677b951574e4db336e6f301a8874a5e56affd63ae9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_menu"));

        $__internal_a719aec48d798642a983de13f6619f46e24dd29d5a9bb2c7b946071f708a6b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a719aec48d798642a983de13f6619f46e24dd29d5a9bb2c7b946071f708a6b96->enter($__internal_a719aec48d798642a983de13f6619f46e24dd29d5a9bb2c7b946071f708a6b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_menu"));

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
        
        $__internal_a719aec48d798642a983de13f6619f46e24dd29d5a9bb2c7b946071f708a6b96->leave($__internal_a719aec48d798642a983de13f6619f46e24dd29d5a9bb2c7b946071f708a6b96_prof);

        
        $__internal_927c63c8d7c9c447e2c4b677b951574e4db336e6f301a8874a5e56affd63ae9e->leave($__internal_927c63c8d7c9c447e2c4b677b951574e4db336e6f301a8874a5e56affd63ae9e_prof);

    }

    // line 89
    public function block_searchAdd($context, array $blocks = array())
    {
        $__internal_9b4c8744b6e9ffa58d0658224e56230c28845d764dfbf6ee0c305c1e6327d73d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b4c8744b6e9ffa58d0658224e56230c28845d764dfbf6ee0c305c1e6327d73d->enter($__internal_9b4c8744b6e9ffa58d0658224e56230c28845d764dfbf6ee0c305c1e6327d73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchAdd"));

        $__internal_99a281cf7357a4557b2787b90f98541f3f8cd3d85f426d3405d979e88988d120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a281cf7357a4557b2787b90f98541f3f8cd3d85f426d3405d979e88988d120->enter($__internal_99a281cf7357a4557b2787b90f98541f3f8cd3d85f426d3405d979e88988d120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchAdd"));

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
        
        $__internal_99a281cf7357a4557b2787b90f98541f3f8cd3d85f426d3405d979e88988d120->leave($__internal_99a281cf7357a4557b2787b90f98541f3f8cd3d85f426d3405d979e88988d120_prof);

        
        $__internal_9b4c8744b6e9ffa58d0658224e56230c28845d764dfbf6ee0c305c1e6327d73d->leave($__internal_9b4c8744b6e9ffa58d0658224e56230c28845d764dfbf6ee0c305c1e6327d73d_prof);

    }

    // line 105
    public function block_content($context, array $blocks = array())
    {
        $__internal_fe6c9dfbca7d93e882e115636ed9ac4f9078cfda4a1e83257b1727dddce9ebfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe6c9dfbca7d93e882e115636ed9ac4f9078cfda4a1e83257b1727dddce9ebfd->enter($__internal_fe6c9dfbca7d93e882e115636ed9ac4f9078cfda4a1e83257b1727dddce9ebfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_444afafbb776cf0ac4fe4711982a5b7630163c937c7ab1272b0c167753b0fb31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444afafbb776cf0ac4fe4711982a5b7630163c937c7ab1272b0c167753b0fb31->enter($__internal_444afafbb776cf0ac4fe4711982a5b7630163c937c7ab1272b0c167753b0fb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_444afafbb776cf0ac4fe4711982a5b7630163c937c7ab1272b0c167753b0fb31->leave($__internal_444afafbb776cf0ac4fe4711982a5b7630163c937c7ab1272b0c167753b0fb31_prof);

        
        $__internal_fe6c9dfbca7d93e882e115636ed9ac4f9078cfda4a1e83257b1727dddce9ebfd->leave($__internal_fe6c9dfbca7d93e882e115636ed9ac4f9078cfda4a1e83257b1727dddce9ebfd_prof);

    }

    // line 177
    public function block_pagination($context, array $blocks = array())
    {
        $__internal_08ea3086af334f891535b0bc56859a075946b4ebc7c4473de8700134c5dcd13b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08ea3086af334f891535b0bc56859a075946b4ebc7c4473de8700134c5dcd13b->enter($__internal_08ea3086af334f891535b0bc56859a075946b4ebc7c4473de8700134c5dcd13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        $__internal_9e9812906f08ed1da8f13bfd5adfd68fc562e800d294cf815da6e3b58607637c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e9812906f08ed1da8f13bfd5adfd68fc562e800d294cf815da6e3b58607637c->enter($__internal_9e9812906f08ed1da8f13bfd5adfd68fc562e800d294cf815da6e3b58607637c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

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
        
        $__internal_9e9812906f08ed1da8f13bfd5adfd68fc562e800d294cf815da6e3b58607637c->leave($__internal_9e9812906f08ed1da8f13bfd5adfd68fc562e800d294cf815da6e3b58607637c_prof);

        
        $__internal_08ea3086af334f891535b0bc56859a075946b4ebc7c4473de8700134c5dcd13b->leave($__internal_08ea3086af334f891535b0bc56859a075946b4ebc7c4473de8700134c5dcd13b_prof);

    }

    // line 187
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5e1e6396cc6940b120d121ec03edb4634888414372f4a6afd4eab8dfbfc672ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e1e6396cc6940b120d121ec03edb4634888414372f4a6afd4eab8dfbfc672ca->enter($__internal_5e1e6396cc6940b120d121ec03edb4634888414372f4a6afd4eab8dfbfc672ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_e10772f3f0ee8df71b7f0933f7bc29b2249d2e87e477c8801ab73ca5a6475d0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e10772f3f0ee8df71b7f0933f7bc29b2249d2e87e477c8801ab73ca5a6475d0b->enter($__internal_e10772f3f0ee8df71b7f0933f7bc29b2249d2e87e477c8801ab73ca5a6475d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_e10772f3f0ee8df71b7f0933f7bc29b2249d2e87e477c8801ab73ca5a6475d0b->leave($__internal_e10772f3f0ee8df71b7f0933f7bc29b2249d2e87e477c8801ab73ca5a6475d0b_prof);

        
        $__internal_5e1e6396cc6940b120d121ec03edb4634888414372f4a6afd4eab8dfbfc672ca->leave($__internal_5e1e6396cc6940b120d121ec03edb4634888414372f4a6afd4eab8dfbfc672ca_prof);

    }

    public function getTemplateName()
    {
        return ":pkflibrary/user:adminUserDisableList.html.twig";
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

", ":pkflibrary/user:adminUserDisableList.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app/Resources\\views/pkflibrary/user/adminUserDisableList.html.twig");
    }
}
