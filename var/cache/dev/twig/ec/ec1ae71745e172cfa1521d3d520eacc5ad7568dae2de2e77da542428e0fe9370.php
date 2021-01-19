<?php

/* pkflibrary/user/adminUserEnableList.html.twig  */
class __TwigTemplate_1c33e622d1d1c7a41d132d56c8f5f78dffe8cb6743f5651bf263699853bf83b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("pkflibrary/base.html.twig ", "pkflibrary/user/adminUserEnableList.html.twig ", 1);
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
        $__internal_327a3ee768dd57cd9ba1146eefc39da29f8dec3d7810c55fb6a5191788ea3927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_327a3ee768dd57cd9ba1146eefc39da29f8dec3d7810c55fb6a5191788ea3927->enter($__internal_327a3ee768dd57cd9ba1146eefc39da29f8dec3d7810c55fb6a5191788ea3927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/user/adminUserEnableList.html.twig "));

        $__internal_6ee2342b62b6ea24ae95957c8b785a9e1d67736876b4a7507614c844bd94f619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee2342b62b6ea24ae95957c8b785a9e1d67736876b4a7507614c844bd94f619->enter($__internal_6ee2342b62b6ea24ae95957c8b785a9e1d67736876b4a7507614c844bd94f619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/user/adminUserEnableList.html.twig "));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_327a3ee768dd57cd9ba1146eefc39da29f8dec3d7810c55fb6a5191788ea3927->leave($__internal_327a3ee768dd57cd9ba1146eefc39da29f8dec3d7810c55fb6a5191788ea3927_prof);

        
        $__internal_6ee2342b62b6ea24ae95957c8b785a9e1d67736876b4a7507614c844bd94f619->leave($__internal_6ee2342b62b6ea24ae95957c8b785a9e1d67736876b4a7507614c844bd94f619_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_069b2d8fe86b9b6a85a07e13a02974751419c28558de70b251ae1ff37a150f70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_069b2d8fe86b9b6a85a07e13a02974751419c28558de70b251ae1ff37a150f70->enter($__internal_069b2d8fe86b9b6a85a07e13a02974751419c28558de70b251ae1ff37a150f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7bc25daa2979c92bd8e4023877e981de625f74b1288f607c9660a66f0f74a063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bc25daa2979c92bd8e4023877e981de625f74b1288f607c9660a66f0f74a063->enter($__internal_7bc25daa2979c92bd8e4023877e981de625f74b1288f607c9660a66f0f74a063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
            echo "\" style=\"font-family:calibri\"> <i class=\"fa fa-user\"></i> User Management</a>
                       </li>
                       <li>
                        <a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manageBorrows");
            echo "\" style=\"font-family:calibri\" > <i class=\"fa fa-book\"></i>  Borrow Management</a>
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
        
        $__internal_7bc25daa2979c92bd8e4023877e981de625f74b1288f607c9660a66f0f74a063->leave($__internal_7bc25daa2979c92bd8e4023877e981de625f74b1288f607c9660a66f0f74a063_prof);

        
        $__internal_069b2d8fe86b9b6a85a07e13a02974751419c28558de70b251ae1ff37a150f70->leave($__internal_069b2d8fe86b9b6a85a07e13a02974751419c28558de70b251ae1ff37a150f70_prof);

    }

    // line 53
    public function block_status($context, array $blocks = array())
    {
        $__internal_a2d4ccda88f64d8d341434b43a7b9ad9b8acc614eb270a61bf7ac4a4b2fd82f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2d4ccda88f64d8d341434b43a7b9ad9b8acc614eb270a61bf7ac4a4b2fd82f7->enter($__internal_a2d4ccda88f64d8d341434b43a7b9ad9b8acc614eb270a61bf7ac4a4b2fd82f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        $__internal_e7b693932068db96bf9de6491b52eb5d56fa6a98883e80236c0322fac5864f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b693932068db96bf9de6491b52eb5d56fa6a98883e80236c0322fac5864f09->enter($__internal_e7b693932068db96bf9de6491b52eb5d56fa6a98883e80236c0322fac5864f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        // line 54
        echo "    ";
        if (((isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")) == "")) {
            // line 55
            echo "       <li><a class=\"active\" href=\"#\" style=\"color:black\">Management / User Management / Users Enabled / ";
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
        
        $__internal_e7b693932068db96bf9de6491b52eb5d56fa6a98883e80236c0322fac5864f09->leave($__internal_e7b693932068db96bf9de6491b52eb5d56fa6a98883e80236c0322fac5864f09_prof);

        
        $__internal_a2d4ccda88f64d8d341434b43a7b9ad9b8acc614eb270a61bf7ac4a4b2fd82f7->leave($__internal_a2d4ccda88f64d8d341434b43a7b9ad9b8acc614eb270a61bf7ac4a4b2fd82f7_prof);

    }

    // line 61
    public function block_left_menu($context, array $blocks = array())
    {
        $__internal_34feab47075d9100fa3b65d80c24c4d5cb84bea7d9ad2891bafc490268317e8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34feab47075d9100fa3b65d80c24c4d5cb84bea7d9ad2891bafc490268317e8e->enter($__internal_34feab47075d9100fa3b65d80c24c4d5cb84bea7d9ad2891bafc490268317e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_menu"));

        $__internal_976fe4594a140608d5923ed9fa398d93555e36463744ea73655af006d49949f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976fe4594a140608d5923ed9fa398d93555e36463744ea73655af006d49949f6->enter($__internal_976fe4594a140608d5923ed9fa398d93555e36463744ea73655af006d49949f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_menu"));

        // line 62
        echo "
<h4 style=\"text-align:center\">User Categories</h4>
  <nav>
  <ul class=\"nav list-group-item\" style=\"font-family:calibri; font-size:16px\">  
    <li>
        <a class=\"\" href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserEnableList", array("page" => 1));
        echo "\"  style=\"width:90%\"><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> All Users</a>
    </li>               
    <li>
        <a class=\"\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserListSearch", array("page" => 1, "categorie" => "Undergraduate", "enabled" => "true")), "html", null, true);
        echo "\" style=\"width:90%\" ><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> Undergraduate</a>
    </li>
    <li>
        <a class=\"\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserListSearch", array("page" => 1, "categorie" => "BEA", "enabled" => "true")), "html", null, true);
        echo "\"  style=\"width:90%\" ><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> BEA</a>
    </li>
    <li>
        <a class=\"\" href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserListSearch", array("page" => 1, "categorie" => "MBA", "enabled" => "true")), "html", null, true);
        echo "\"  style=\"width:90%\" ><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> MBA</a>
    </li>
    <li>
        <a class=\"\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserListSearch", array("page" => 1, "categorie" => "Lecturer", "enabled" => "true")), "html", null, true);
        echo "\"  style=\"width:90%\"><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> Lecturer</a>
    </li>
    <li>
        <a class=\"\" href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserListSearch", array("page" => 1, "categorie" => "Master", "enabled" => "true")), "html", null, true);
        echo "\"  style=\"width:90%\"><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> Master</a>
    </li>
  </ul>
</nav>

";
        
        $__internal_976fe4594a140608d5923ed9fa398d93555e36463744ea73655af006d49949f6->leave($__internal_976fe4594a140608d5923ed9fa398d93555e36463744ea73655af006d49949f6_prof);

        
        $__internal_34feab47075d9100fa3b65d80c24c4d5cb84bea7d9ad2891bafc490268317e8e->leave($__internal_34feab47075d9100fa3b65d80c24c4d5cb84bea7d9ad2891bafc490268317e8e_prof);

    }

    // line 89
    public function block_searchAdd($context, array $blocks = array())
    {
        $__internal_af111d47a34617e69a66925a6682ecb3a4358a9d15f5434aa4ec828b9a3d30b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af111d47a34617e69a66925a6682ecb3a4358a9d15f5434aa4ec828b9a3d30b4->enter($__internal_af111d47a34617e69a66925a6682ecb3a4358a9d15f5434aa4ec828b9a3d30b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchAdd"));

        $__internal_b89a485a3f682b07ba4c71792855003804811effb60944599c274d230927781f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b89a485a3f682b07ba4c71792855003804811effb60944599c274d230927781f->enter($__internal_b89a485a3f682b07ba4c71792855003804811effb60944599c274d230927781f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchAdd"));

        // line 90
        echo "  ";
        if (((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")) != null)) {
            // line 91
            echo "  <div class=\"col-md-4\"> 
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
        echo "   <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addUser");
        echo "\" class=\"btn btn-primary\" style=\"float:right; margin-bottom:10px; font-style:calibri; font-weight:bold\"><i class=\" fa fa-plus \"></i> Add User </a>                      
";
        
        $__internal_b89a485a3f682b07ba4c71792855003804811effb60944599c274d230927781f->leave($__internal_b89a485a3f682b07ba4c71792855003804811effb60944599c274d230927781f_prof);

        
        $__internal_af111d47a34617e69a66925a6682ecb3a4358a9d15f5434aa4ec828b9a3d30b4->leave($__internal_af111d47a34617e69a66925a6682ecb3a4358a9d15f5434aa4ec828b9a3d30b4_prof);

    }

    // line 105
    public function block_content($context, array $blocks = array())
    {
        $__internal_842434186f4f7b7f62551947973aac866d8586d7a07aa822b93779544f557eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_842434186f4f7b7f62551947973aac866d8586d7a07aa822b93779544f557eb1->enter($__internal_842434186f4f7b7f62551947973aac866d8586d7a07aa822b93779544f557eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8801f3ba023551e755a96eb28d8e1b4a928f76fafbc11e599684283c71ad2139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8801f3ba023551e755a96eb28d8e1b4a928f76fafbc11e599684283c71ad2139->enter($__internal_8801f3ba023551e755a96eb28d8e1b4a928f76fafbc11e599684283c71ad2139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 106
        echo "
    <!-- Service Tabs -->
    <div class=\"row\">

        <div class=\"col-lg-12\">

            <ul  class=\"nav nav-tabs nav-justified\">
                <li class=\"active\" ><a style=\"color:green; font-family:calibri; font-weight:bold; font-size:18px\" href=\"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserEnableList", array("page" => 1));
        echo "\" ><i class=\"fa fa-check\"></i> Authorized Users </a>
                </li>
                <li class=\"\" ><a style=\"color:black; font-family:calibri; font-weight:bold; font-size:18px\" href=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserDisableList", array("page" => 1));
        echo "\"  ><i class=\"fa fa-ban\"></i> Unauthorized Users </a>
                </li>
            </ul>

            <div id=\"myTabContent\" class=\"tab-content\">
                <div class=\"tab-pane fade active in\" id=\"service-one\">
                    <h4></h4>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- Advanced Tables -->
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <div class=\"count\">
                                    ";
        // line 128
        if (((isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")) == "")) {
            // line 129
            echo "                                     <P style=\"font-family:calibri\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
            echo " authorized users </P>
                                    ";
        } else {
            // line 131
            echo "                                      <P style=\"font-family:calibri\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
            echo " authorized users found </P>
                                    ";
        }
        // line 133
        echo "                                 </div>
                             </div>
                             ";
        // line 136
        echo "                                <div class=\"row\" style=\" margin-left:5% ; margin-right: -5%; margin-top:1%\">

                                    ";
        // line 138
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
            // line 139
            echo "                                     <div class=\"col-md-2 img-portfolio\" style=\" width:18% ; height:260px; border:solid; margin-left:1px ; margin-right: 1px ; background-color: #f5f5f5; border-radius: 10px; \" >
                                        <div style=\" position: relative; width:100% ; height:25%; display: block; bottom:0 \">
                                            <a href=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserDetail", array("id" => $this->getAttribute($context["user"], "Id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
            echo "\" title=\"more details\">
                                                <p style=\"text-align:center; foreground-color:black; font-family:calibri; margin-bottom:0px ; \"> ";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "familyName", array()), "html", null, true);
            echo "</p> 
                                                <p style=\"text-align:center; color:black; font-family:calibri\">";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "phoneNumber", array()), "html", null, true);
            echo " </p>
                                            </a>
                                        </div>
                                        <a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserDetail", array("id" => $this->getAttribute($context["user"], "Id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
            echo "\">                       ";
            if (($this->getAttribute($context["user"], "image", array()) != null)) {
                echo " 
                                            <img class=\"img-responsive img-hover\"  width=\"100%\" height=\"75%\" src=\"";
                // line 147
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((($this->getAttribute($this->getAttribute($context["user"], "image", array()), "uploadDir", array()) . "/") . $this->getAttribute($this->getAttribute($context["user"], "image", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute($context["user"], "image", array()), "url", array()))), "html", null, true);
                echo "\" 
                                            alt=\"";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "image", array()), "alt", array()), "html", null, true);
                echo "\" style=\"margin-bottom:5px;\"
                                            />

                                        ";
            }
            // line 152
            echo "                                    </a>
                                </div>
                                ";
            // line 154
            if ((($this->getAttribute($context["loop"], "index", array()) % 5) == 0)) {
                // line 155
                echo "                                </div>
                                <div class=\"row\" style=\" margin-left:5% ; margin-right: -5% \">
                                ";
            }
            // line 157
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
        // line 158
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
        
        $__internal_8801f3ba023551e755a96eb28d8e1b4a928f76fafbc11e599684283c71ad2139->leave($__internal_8801f3ba023551e755a96eb28d8e1b4a928f76fafbc11e599684283c71ad2139_prof);

        
        $__internal_842434186f4f7b7f62551947973aac866d8586d7a07aa822b93779544f557eb1->leave($__internal_842434186f4f7b7f62551947973aac866d8586d7a07aa822b93779544f557eb1_prof);

    }

    // line 172
    public function block_pagination($context, array $blocks = array())
    {
        $__internal_44a5f6dd2d867c8ee2517715563897ad9cf7d68a39998d49c13de17117cc1038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44a5f6dd2d867c8ee2517715563897ad9cf7d68a39998d49c13de17117cc1038->enter($__internal_44a5f6dd2d867c8ee2517715563897ad9cf7d68a39998d49c13de17117cc1038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        $__internal_3ae520c818c1ecb30747883124c8f35403e85726a1def388ec7d14a5b6fdd92c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ae520c818c1ecb30747883124c8f35403e85726a1def388ec7d14a5b6fdd92c->enter($__internal_3ae520c818c1ecb30747883124c8f35403e85726a1def388ec7d14a5b6fdd92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        // line 173
        echo "
 <div class=\"row text-center\">
     <div class=\"col-lg-12\">
      ";
        // line 176
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
   </div>
</div>
<!-- /.row -->
";
        
        $__internal_3ae520c818c1ecb30747883124c8f35403e85726a1def388ec7d14a5b6fdd92c->leave($__internal_3ae520c818c1ecb30747883124c8f35403e85726a1def388ec7d14a5b6fdd92c_prof);

        
        $__internal_44a5f6dd2d867c8ee2517715563897ad9cf7d68a39998d49c13de17117cc1038->leave($__internal_44a5f6dd2d867c8ee2517715563897ad9cf7d68a39998d49c13de17117cc1038_prof);

    }

    // line 181
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b011c542312c7f88c725a7e15f779ca98a9e2adeeb319476fbb3777cb69b22a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b011c542312c7f88c725a7e15f779ca98a9e2adeeb319476fbb3777cb69b22a2->enter($__internal_b011c542312c7f88c725a7e15f779ca98a9e2adeeb319476fbb3777cb69b22a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_d0448f680ffc0fe09bbcbc141e160aa29025ff7f27e9a920bd7d3d9918aad72b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0448f680ffc0fe09bbcbc141e160aa29025ff7f27e9a920bd7d3d9918aad72b->enter($__internal_d0448f680ffc0fe09bbcbc141e160aa29025ff7f27e9a920bd7d3d9918aad72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 182
        echo "<!-- Footer -->
";
        // line 183
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()) == 0)) {
            // line 184
            echo "  <div class=\"row\" style=\"position: fixed; bottom: 0; width:100%;margin-top:20px;\">
     <center>
        <p style=\"font-weight:bold;color:white;background-color: black;margin:0; margin-right:-10%;height:70px;padding-top: 30px;\">Copyright &copy; PKFokam Institute Of Excellence</p>
    </center>
</div>
";
        } else {
            // line 190
            echo "  <div class=\"row\" style=\"margin-top:20px;position: absolute;botom: 0;width:100%\">
   <center>
            <p style=\"font-weight:bold;color:white;background-color: black;margin:0; padding-top:20px;height:70px;margin-right:-10%;\">Copyright &copy; PKFokam Institute Of Excellence</p>
   </center>
 </div>
";
        }
        
        $__internal_d0448f680ffc0fe09bbcbc141e160aa29025ff7f27e9a920bd7d3d9918aad72b->leave($__internal_d0448f680ffc0fe09bbcbc141e160aa29025ff7f27e9a920bd7d3d9918aad72b_prof);

        
        $__internal_b011c542312c7f88c725a7e15f779ca98a9e2adeeb319476fbb3777cb69b22a2->leave($__internal_b011c542312c7f88c725a7e15f779ca98a9e2adeeb319476fbb3777cb69b22a2_prof);

    }

    public function getTemplateName()
    {
        return "pkflibrary/user/adminUserEnableList.html.twig ";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 190,  494 => 184,  492 => 183,  489 => 182,  480 => 181,  465 => 176,  460 => 173,  451 => 172,  429 => 158,  414 => 157,  409 => 155,  407 => 154,  403 => 152,  396 => 148,  392 => 147,  386 => 146,  380 => 143,  374 => 142,  370 => 141,  366 => 139,  349 => 138,  345 => 136,  341 => 133,  335 => 131,  329 => 129,  327 => 128,  311 => 115,  306 => 113,  297 => 106,  288 => 105,  275 => 102,  267 => 97,  263 => 96,  259 => 95,  255 => 94,  250 => 91,  247 => 90,  238 => 89,  222 => 82,  216 => 79,  210 => 76,  204 => 73,  198 => 70,  192 => 67,  185 => 62,  176 => 61,  162 => 57,  156 => 55,  153 => 54,  144 => 53,  128 => 46,  122 => 43,  116 => 40,  107 => 34,  101 => 31,  95 => 27,  87 => 22,  81 => 19,  75 => 16,  69 => 12,  67 => 11,  62 => 9,  55 => 4,  46 => 3,  11 => 1,);
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
                           <a href=\"{{ path('AdminUserEnableList',{'page': 1}) }}\" style=\"font-family:calibri\"> <i class=\"fa fa-user\"></i> User Management</a>
                       </li>
                       <li>
                        <a href=\"{{ path('manageBorrows') }}\" style=\"font-family:calibri\" > <i class=\"fa fa-book\"></i>  Borrow Management</a>
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
       <li><a class=\"active\" href=\"#\" style=\"color:black\">Management / User Management / Users Enabled / {{category}} </a></li>
    {% else %}
        <li><a class=\"active\" href=\"#\" style=\"color:black\">Management / User Management / Search results for \"{{keyword}}\" </a></li>
    {% endif %}
{% endblock %}

{% block left_menu %}

<h4 style=\"text-align:center\">User Categories</h4>
  <nav>
  <ul class=\"nav list-group-item\" style=\"font-family:calibri; font-size:16px\">  
    <li>
        <a class=\"\" href=\"{{ path('AdminUserEnableList',{'page': 1}) }}\"  style=\"width:90%\"><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> All Users</a>
    </li>               
    <li>
        <a class=\"\" href=\"{{ path('AdminUserListSearch',{'page': 1,'categorie':'Undergraduate','enabled':'true'}) }}\" style=\"width:90%\" ><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> Undergraduate</a>
    </li>
    <li>
        <a class=\"\" href=\"{{ path('AdminUserListSearch',{'page': 1,'categorie':'BEA','enabled':'true'}) }}\"  style=\"width:90%\" ><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> BEA</a>
    </li>
    <li>
        <a class=\"\" href=\"{{ path('AdminUserListSearch',{'page': 1,'categorie':'MBA','enabled':'true'}) }}\"  style=\"width:90%\" ><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> MBA</a>
    </li>
    <li>
        <a class=\"\" href=\"{{ path('AdminUserListSearch',{'page': 1,'categorie':'Lecturer','enabled':'true'}) }}\"  style=\"width:90%\"><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> Lecturer</a>
    </li>
    <li>
        <a class=\"\" href=\"{{ path('AdminUserListSearch',{'page': 1,'categorie':'Master','enabled':'true'}) }}\"  style=\"width:90%\"><span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span> Master</a>
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
                <li class=\"active\" ><a style=\"color:green; font-family:calibri; font-weight:bold; font-size:18px\" href=\"{{ path('AdminUserEnableList',{'page': 1}) }}\" ><i class=\"fa fa-check\"></i> Authorized Users </a>
                </li>
                <li class=\"\" ><a style=\"color:black; font-family:calibri; font-weight:bold; font-size:18px\" href=\"{{ path('AdminUserDisableList',{'page': 1}) }}\"  ><i class=\"fa fa-ban\"></i> Unauthorized Users </a>
                </li>
            </ul>

            <div id=\"myTabContent\" class=\"tab-content\">
                <div class=\"tab-pane fade active in\" id=\"service-one\">
                    <h4></h4>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- Advanced Tables -->
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <div class=\"count\">
                                    {% if keyword == \"\" %}
                                     <P style=\"font-family:calibri\"> {{ pagination.getTotalItemCount }} authorized users </P>
                                    {% else %}
                                      <P style=\"font-family:calibri\"> {{ pagination.getTotalItemCount }} authorized users found </P>
                                    {% endif %}
                                 </div>
                             </div>
                             {#<center>#}
                                <div class=\"row\" style=\" margin-left:5% ; margin-right: -5%; margin-top:1%\">

                                    {% for user in pagination %}
                                     <div class=\"col-md-2 img-portfolio\" style=\" width:18% ; height:260px; border:solid; margin-left:1px ; margin-right: 1px ; background-color: #f5f5f5; border-radius: 10px; \" >
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


", "pkflibrary/user/adminUserEnableList.html.twig ", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\pkflibrary\\user\\adminUserEnableList.html.twig");
    }
}
