<?php

/* pkflibrary/user/editUser.html.twig */
class __TwigTemplate_b0fbfa34674ce70566e29d778afae9ebfe3abaf7b2d41cd9bba9e115cf5c28e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("pkflibrary/base.html.twig", "pkflibrary/user/editUser.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'status' => array($this, 'block_status'),
            'body' => array($this, 'block_body'),
            'left_menu' => array($this, 'block_left_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "pkflibrary/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d434048d957f45dcc1785a558d9a4dd3ffd69fdca4bba0a83df2ff56ee87bb47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d434048d957f45dcc1785a558d9a4dd3ffd69fdca4bba0a83df2ff56ee87bb47->enter($__internal_d434048d957f45dcc1785a558d9a4dd3ffd69fdca4bba0a83df2ff56ee87bb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/user/editUser.html.twig"));

        $__internal_38a79f6139529887cd300c01826406e8c2afa83e669cf6a5c1905e88252cd1a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a79f6139529887cd300c01826406e8c2afa83e669cf6a5c1905e88252cd1a9->enter($__internal_38a79f6139529887cd300c01826406e8c2afa83e669cf6a5c1905e88252cd1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/user/editUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d434048d957f45dcc1785a558d9a4dd3ffd69fdca4bba0a83df2ff56ee87bb47->leave($__internal_d434048d957f45dcc1785a558d9a4dd3ffd69fdca4bba0a83df2ff56ee87bb47_prof);

        
        $__internal_38a79f6139529887cd300c01826406e8c2afa83e669cf6a5c1905e88252cd1a9->leave($__internal_38a79f6139529887cd300c01826406e8c2afa83e669cf6a5c1905e88252cd1a9_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6effb56c6c1420da164c21f71d84c4fa8b293b85f91765e01f896a484107b926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6effb56c6c1420da164c21f71d84c4fa8b293b85f91765e01f896a484107b926->enter($__internal_6effb56c6c1420da164c21f71d84c4fa8b293b85f91765e01f896a484107b926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_575c7a5aa13ba51379b16827c65a6993da46ca011a2f8ab43267b974e3aa13d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575c7a5aa13ba51379b16827c65a6993da46ca011a2f8ab43267b974e3aa13d9->enter($__internal_575c7a5aa13ba51379b16827c65a6993da46ca011a2f8ab43267b974e3aa13d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "
\t<!-- Collect the nav links, forms, and other content for toggling -->
\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t<ul class=\"nav navbar-nav navbar-right\" style=\"font-weight:bold\">
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
        echo "\"><i class=\"fa fa-home\"></i> Home</a>
\t\t\t</li>
\t\t\t";
        // line 11
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "\t\t\t\t<li class=\"dropdown active\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> Management <b class=\"caret\"></b></a>
\t\t\t\t\t<ul class=\"dropdown-menu\"  >
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t<a href=\"";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserEnableList", array("page" => 1));
            echo "\" style=\"font-family:calibri\"> <i class=\"fa fa-user\"></i> User Management</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manageBorrows");
            echo "\" style=\"font-family:calibri\" > <i class=\"fa fa-book\"></i>  Borrow Management</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" style=\"font-family:calibri\" > <i class=\"fa fa-navicon\"></i>  Category Management</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t";
        }
        // line 27
        echo "\t\t\t<li class=\"dropdown\">
\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> My Account <b class=\"caret\"></b></a>
\t\t\t\t<ul class=\"dropdown-menu\"  >
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manageBorrows");
        echo "\" style=\"font-family:calibri\"> <i class=\"fa fa-book\"></i> Borrow Reports </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("UserDetail", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "Id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
        echo "\" style=\"font-family:calibri\"><i class=\"fa fa-user\"></i>My Personal data</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\">About</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("help");
        echo "\">Help</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out\"></i> Logout</a>
\t\t\t</li>
\t\t</ul>
\t</div>
\t<!-- /.navbar-collapse -->
";
        
        $__internal_575c7a5aa13ba51379b16827c65a6993da46ca011a2f8ab43267b974e3aa13d9->leave($__internal_575c7a5aa13ba51379b16827c65a6993da46ca011a2f8ab43267b974e3aa13d9_prof);

        
        $__internal_6effb56c6c1420da164c21f71d84c4fa8b293b85f91765e01f896a484107b926->leave($__internal_6effb56c6c1420da164c21f71d84c4fa8b293b85f91765e01f896a484107b926_prof);

    }

    // line 52
    public function block_status($context, array $blocks = array())
    {
        $__internal_b9af47aa107233c7481bf67908f3c24b5646db6a140b0f22b435d23079ca37c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9af47aa107233c7481bf67908f3c24b5646db6a140b0f22b435d23079ca37c0->enter($__internal_b9af47aa107233c7481bf67908f3c24b5646db6a140b0f22b435d23079ca37c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        $__internal_d3e094b37aa97e3907fb3908e74b0eafd2d6c94ce8c005bc3d2d810187f3d280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e094b37aa97e3907fb3908e74b0eafd2d6c94ce8c005bc3d2d810187f3d280->enter($__internal_d3e094b37aa97e3907fb3908e74b0eafd2d6c94ce8c005bc3d2d810187f3d280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        // line 53
        echo "\t";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 54
            echo "\t\t<li><a class=\"active\" href=\"#\" style=\"color:black\">Management / User Management / Edit user </a>
\t\t</li>
\t";
        } else {
            // line 57
            echo "\t\t<li><a class=\"active\" href=\"#\" style=\"color:black\">User - Account - Personnal data - Edit user</a>

\t\t</li>
\t";
        }
        // line 61
        echo "
";
        
        $__internal_d3e094b37aa97e3907fb3908e74b0eafd2d6c94ce8c005bc3d2d810187f3d280->leave($__internal_d3e094b37aa97e3907fb3908e74b0eafd2d6c94ce8c005bc3d2d810187f3d280_prof);

        
        $__internal_b9af47aa107233c7481bf67908f3c24b5646db6a140b0f22b435d23079ca37c0->leave($__internal_b9af47aa107233c7481bf67908f3c24b5646db6a140b0f22b435d23079ca37c0_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_44e198d50ab0d6fa8df5b5c4741c6d1909ad77c0c996fe196be517512d5d0b74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44e198d50ab0d6fa8df5b5c4741c6d1909ad77c0c996fe196be517512d5d0b74->enter($__internal_44e198d50ab0d6fa8df5b5c4741c6d1909ad77c0c996fe196be517512d5d0b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28a01c3366a308db49ccecc160a017a5dc3585ca600d2df304b2758021fc7b43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a01c3366a308db49ccecc160a017a5dc3585ca600d2df304b2758021fc7b43->enter($__internal_28a01c3366a308db49ccecc160a017a5dc3585ca600d2df304b2758021fc7b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 65
        echo "
\t<div class=\"row\">
\t\t";
        // line 67
        $this->displayBlock('left_menu', $context, $blocks);
        // line 75
        echo "  

\t\t<div class=\"panel panel-default col-md-9\" style=\"margin:auto; width:60%;\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 style=\"text-align:center\">Modify Account</h3>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
        // line 82
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

\t\t\t\t<p style=\"margin-left:2.2%; margin-top:10px; font-family:calibri; color:blue; font-style:italic\"> Note: All fields label ending with * are compulsory! </p>
\t\t\t\t
\t\t\t\t<table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
\t\t\t\t\t<th>";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'label');
        echo "</th>
\t\t\t\t\t<th> ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "familyName", array()), 'label');
        echo " * </th>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'widget');
        echo "</td>
\t\t\t\t\t\t<td>";
        // line 91
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "familyName", array()), 'widget');
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<td class=\"error_right\">";
        // line 95
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "familyName", array()), 'errors')), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t\t<th>";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "studentID", array()), 'label');
        echo "</th>
\t\t\t\t\t<th> ";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo " * </th>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 101
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "studentID", array()), 'widget');
        echo "</td>
\t\t\t\t\t\t<td>";
        // line 102
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"error_left\">";
        // line 105
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "studentID", array()), 'errors')), "html", null, true);
        echo "</td>
\t\t\t\t\t\t<td class=\"error_right\">";
        // line 106
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors')), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t\t<th><i class=\"fa fa-key fa-fw\"></i></span>";
        // line 109
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label');
        echo " *</th>
\t\t\t\t\t<th> ";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label');
        echo " * </th>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 112
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "</td>
\t\t\t\t\t\t<td>";
        // line 113
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"error_left\">";
        // line 116
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors')), "html", null, true);
        echo "</td>
\t\t\t\t\t\t<td class=\"error-right\">";
        // line 117
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors')), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<th><i class=\"fa fa-envelope-o fa-fw\"></i> ";
        // line 120
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo " *</th>
\t\t\t\t\t<th> <i class=\"fa fa-phone\"></i> ";
        // line 121
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phoneNumber", array()), 'label');
        echo " * </th>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 123
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</td>
\t\t\t\t\t\t<td>";
        // line 124
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phoneNumber", array()), 'widget');
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"error_left\">";
        // line 127
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors')), "html", null, true);
        echo " </td>
\t\t\t\t\t\t<td class=\"error_right\">
\t\t\t\t\t\t\t<ul style=\"list-style:none\">
\t\t\t\t\t\t\t\t";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phoneNumber", array()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 131
            echo "\t\t\t\t\t\t\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<th> ";
        // line 137
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'label');
        echo " *</th>
\t\t\t\t\t<th> <i class=\"fa fa-user fa-fw\"></i>";
        // line 138
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'label', array("label" => "Profile Picture"));
        echo " * </th>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 140
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget');
        echo "</td>
\t\t\t\t\t\t<td>";
        // line 141
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), "file", array()), 'widget');
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"error_left\">";
        // line 144
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'errors')), "html", null, true);
        echo "</td>
\t\t\t\t\t\t<td class=\"error_right\">";
        // line 145
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), "file", array()), 'errors')), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>       
\t\t\t\t
\t\t\t\t<table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
\t\t\t\t\t<th>";
        // line 150
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userCategory", array()), 'label');
        echo " *</th>
\t\t\t\t\t<th> ";
        // line 151
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "batch", array()), 'label');
        echo " </th>
\t\t\t\t\t<th> ";
        // line 152
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "specialty", array()), 'label');
        echo " </th>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 154
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userCategory", array()), 'widget');
        echo "</td>
\t\t\t\t\t\t<td>";
        // line 155
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "batch", array()), 'widget');
        echo "</td>
\t\t\t\t\t\t<td>";
        // line 156
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "specialty", array()), 'widget');
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>  

\t\t\t\t<table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate; margin-top:15px\"> 
\t\t\t\t\t<tr>
\t\t\t\t\t\t";
        // line 162
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 163
            echo "\t\t\t\t\t\t   <td><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserEnableList", array("page" => 1));
            echo "\" class=\"btn btn-default\" style=\"width:100%; margin-bottom:20px \"> cancel </a></td>
\t\t\t\t\t    ";
        } else {
            // line 165
            echo "\t\t\t\t\t    \t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("UserDetail", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "Id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
            echo "\" class=\"btn btn-default\" style=\"width:100%; margin-bottom:20px \"> cancel </a></td>
\t\t\t\t\t    ";
        }
        // line 167
        echo "\t\t\t\t\t\t<td><input class=\"form-control\" style=\"font-weight:bold; width:100%; color:white; background-color:#20B2AA; margin-bottom:20px\" type=\"submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Submit"), "html", null, true);
        echo "\" /></td>
\t\t\t\t\t</tr>
\t\t\t\t</table> 
\t\t\t\t<div class=\"input-group\" style=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\t\$(document).ready(function(event) {
\t\t\t\t\t\$('#app_user_registration_userCategory').change(function(e){

\t\t\t\t\t\tif ( ! (\$('#app_user_registration_userCategory').val() === \"Undergraduate\" )){
\t\t\t\t\t\t\tdocument.getElementById(\"app_user_registration_studentID\").required = false;
\t\t\t\t\t\t\tdocument.getElementById(\"app_user_registration_batch\").required = false;
\t\t\t\t\t\t}
\t\t\t\t\t\telse{
\t\t\t\t\t\t\tdocument.getElementById(\"app_user_registration_studentID\").required = true;
\t\t\t\t\t\t\tdocument.getElementById(\"app_user_registration_batch\").required = true;
\t\t\t\t\t\t}
\t\t\t\t\t}).change();
\t\t\t\t});
\t\t\t</script>
\t\t\t";
        // line 189
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
\t</div>
</div>
";
        
        $__internal_28a01c3366a308db49ccecc160a017a5dc3585ca600d2df304b2758021fc7b43->leave($__internal_28a01c3366a308db49ccecc160a017a5dc3585ca600d2df304b2758021fc7b43_prof);

        
        $__internal_44e198d50ab0d6fa8df5b5c4741c6d1909ad77c0c996fe196be517512d5d0b74->leave($__internal_44e198d50ab0d6fa8df5b5c4741c6d1909ad77c0c996fe196be517512d5d0b74_prof);

    }

    // line 67
    public function block_left_menu($context, array $blocks = array())
    {
        $__internal_e191adb2c5c1e36ab210ef9754a026d48d81b02a687685e9e02d0662c2cd24bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e191adb2c5c1e36ab210ef9754a026d48d81b02a687685e9e02d0662c2cd24bb->enter($__internal_e191adb2c5c1e36ab210ef9754a026d48d81b02a687685e9e02d0662c2cd24bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_menu"));

        $__internal_f4bb2441187b68f6b6b3771fc43164a6623d01ad6481bd5585e1a133885648b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4bb2441187b68f6b6b3771fc43164a6623d01ad6481bd5585e1a133885648b7->enter($__internal_f4bb2441187b68f6b6b3771fc43164a6623d01ad6481bd5585e1a133885648b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_menu"));

        // line 68
        echo "\t\t\t
\t\t\t<div class=\"col-md-3 img-portfolio\" >
\t\t\t\t";
        // line 70
        echo "\t\t                  
\t\t\t\t<img class=\"img-responsive img-hover\"   src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "uploadDir", array()) . "/") . $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "url", array()))), "html", null, true);
        echo "\" 
\t\t\t\talt=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "alt", array()), "html", null, true);
        echo "\" style=\"margin-bottom:5px;\"
\t\t\t\t/>
\t\t\t</div> 
\t\t";
        
        $__internal_f4bb2441187b68f6b6b3771fc43164a6623d01ad6481bd5585e1a133885648b7->leave($__internal_f4bb2441187b68f6b6b3771fc43164a6623d01ad6481bd5585e1a133885648b7_prof);

        
        $__internal_e191adb2c5c1e36ab210ef9754a026d48d81b02a687685e9e02d0662c2cd24bb->leave($__internal_e191adb2c5c1e36ab210ef9754a026d48d81b02a687685e9e02d0662c2cd24bb_prof);

    }

    public function getTemplateName()
    {
        return "pkflibrary/user/editUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  470 => 72,  466 => 71,  463 => 70,  459 => 68,  450 => 67,  435 => 189,  416 => 173,  406 => 167,  400 => 165,  394 => 163,  392 => 162,  383 => 156,  379 => 155,  375 => 154,  370 => 152,  366 => 151,  362 => 150,  354 => 145,  350 => 144,  344 => 141,  340 => 140,  335 => 138,  331 => 137,  325 => 133,  316 => 131,  312 => 130,  306 => 127,  300 => 124,  296 => 123,  291 => 121,  287 => 120,  281 => 117,  277 => 116,  271 => 113,  267 => 112,  262 => 110,  258 => 109,  252 => 106,  248 => 105,  242 => 102,  238 => 101,  233 => 99,  229 => 98,  223 => 95,  216 => 91,  212 => 90,  207 => 88,  203 => 87,  195 => 82,  186 => 75,  184 => 67,  180 => 65,  171 => 64,  160 => 61,  154 => 57,  149 => 54,  146 => 53,  137 => 52,  121 => 45,  115 => 42,  109 => 39,  101 => 34,  95 => 31,  89 => 27,  78 => 19,  72 => 16,  66 => 12,  64 => 11,  59 => 9,  52 => 4,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'pkflibrary/base.html.twig' %}

{% block menu %}

\t<!-- Collect the nav links, forms, and other content for toggling -->
\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t<ul class=\"nav navbar-nav navbar-right\" style=\"font-weight:bold\">
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('homepage',{'page': page}) }}\"><i class=\"fa fa-home\"></i> Home</a>
\t\t\t</li>
\t\t\t{% if is_granted(\"ROLE_ADMIN\") %}
\t\t\t\t<li class=\"dropdown active\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> Management <b class=\"caret\"></b></a>
\t\t\t\t\t<ul class=\"dropdown-menu\"  >
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t<a href=\"{{ path('AdminUserEnableList',{'page': 1}) }}\" style=\"font-family:calibri\"> <i class=\"fa fa-user\"></i> User Management</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ path('manageBorrows') }}\" style=\"font-family:calibri\" > <i class=\"fa fa-book\"></i>  Borrow Management</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" style=\"font-family:calibri\" > <i class=\"fa fa-navicon\"></i>  Category Management</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t\t<li class=\"dropdown\">
\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> My Account <b class=\"caret\"></b></a>
\t\t\t\t<ul class=\"dropdown-menu\"  >
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('manageBorrows') }}\" style=\"font-family:calibri\"> <i class=\"fa fa-book\"></i> Borrow Reports </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('UserDetail',{'id': app.user.Id ,'page': page}) }}\" style=\"font-family:calibri\"><i class=\"fa fa-user\"></i>My Personal data</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('about') }}\">About</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('help') }}\">Help</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"fa fa-sign-out\"></i> Logout</a>
\t\t\t</li>
\t\t</ul>
\t</div>
\t<!-- /.navbar-collapse -->
{% endblock %}

{% block status %}
\t{% if is_granted(\"ROLE_ADMIN\") %}
\t\t<li><a class=\"active\" href=\"#\" style=\"color:black\">Management / User Management / Edit user </a>
\t\t</li>
\t{% else %}
\t\t<li><a class=\"active\" href=\"#\" style=\"color:black\">User - Account - Personnal data - Edit user</a>

\t\t</li>
\t{% endif %}

{% endblock %}

{% block body %}

\t<div class=\"row\">
\t\t{% block left_menu %}
\t\t\t
\t\t\t<div class=\"col-md-3 img-portfolio\" >
\t\t\t\t{#<a href=\" {{ path('adminUserList',{'page': page}) }}\">#}\t\t                  
\t\t\t\t<img class=\"img-responsive img-hover\"   src=\"{{ asset(user.image.uploadDir ~ '/' ~ user.image.id ~ '.' ~ user.image.url) }}\" 
\t\t\t\talt=\"{{ user.image.alt }}\" style=\"margin-bottom:5px;\"
\t\t\t\t/>
\t\t\t</div> 
\t\t{% endblock %}  

\t\t<div class=\"panel panel-default col-md-9\" style=\"margin:auto; width:60%;\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 style=\"text-align:center\">Modify Account</h3>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}

\t\t\t\t<p style=\"margin-left:2.2%; margin-top:10px; font-family:calibri; color:blue; font-style:italic\"> Note: All fields label ending with * are compulsory! </p>
\t\t\t\t
\t\t\t\t<table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
\t\t\t\t\t<th>{{ form_label(form.firstName) }}</th>
\t\t\t\t\t<th> {{ form_label(form.familyName) }} * </th>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ form_widget(form.firstName) }}</td>
\t\t\t\t\t\t<td>{{ form_widget(form.familyName) }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<td class=\"error_right\">{{ form_errors(form.familyName) | striptags }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t\t<th>{{ form_label(form.studentID) }}</th>
\t\t\t\t\t<th> {{ form_label(form.username) }} * </th>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ form_widget(form.studentID) }}</td>
\t\t\t\t\t\t<td>{{ form_widget(form.username) }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"error_left\">{{ form_errors(form.studentID) | striptags }}</td>
\t\t\t\t\t\t<td class=\"error_right\">{{ form_errors(form.username) | striptags }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t\t<th><i class=\"fa fa-key fa-fw\"></i></span>{{ form_label(form.plainPassword.first) }} *</th>
\t\t\t\t\t<th> {{ form_label(form.plainPassword.second) }} * </th>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ form_widget(form.plainPassword.first) }}</td>
\t\t\t\t\t\t<td>{{ form_widget(form.plainPassword.second) }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"error_left\">{{ form_errors(form.plainPassword.first) | striptags }}</td>
\t\t\t\t\t\t<td class=\"error-right\">{{ form_errors(form.plainPassword.second) | striptags }}</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<th><i class=\"fa fa-envelope-o fa-fw\"></i> {{ form_label(form.email) }} *</th>
\t\t\t\t\t<th> <i class=\"fa fa-phone\"></i> {{ form_label(form.phoneNumber) }} * </th>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ form_widget(form.email) }}</td>
\t\t\t\t\t\t<td>{{ form_widget(form.phoneNumber) }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"error_left\">{{ form_errors(form.email) | striptags }} </td>
\t\t\t\t\t\t<td class=\"error_right\">
\t\t\t\t\t\t\t<ul style=\"list-style:none\">
\t\t\t\t\t\t\t\t{% for error in form.phoneNumber.vars.errors %}
\t\t\t\t\t\t\t\t\t<li>{{ error.message }}</li>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<th> {{ form_label(form.address) }} *</th>
\t\t\t\t\t<th> <i class=\"fa fa-user fa-fw\"></i>{{ form_label(form.image, 'Profile Picture') }} * </th>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ form_widget(form.address) }}</td>
\t\t\t\t\t\t<td>{{ form_widget(form.image.file) }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"error_left\">{{ form_errors(form.address) | striptags }}</td>
\t\t\t\t\t\t<td class=\"error_right\">{{ form_errors(form.image.file) | striptags }}</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>       
\t\t\t\t
\t\t\t\t<table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
\t\t\t\t\t<th>{{ form_label(form.userCategory) }} *</th>
\t\t\t\t\t<th> {{ form_label(form.batch) }} </th>
\t\t\t\t\t<th> {{ form_label(form.specialty) }} </th>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ form_widget(form.userCategory) }}</td>
\t\t\t\t\t\t<td>{{form_widget(form.batch)}}</td>
\t\t\t\t\t\t<td>{{form_widget(form.specialty)}}</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>  

\t\t\t\t<table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate; margin-top:15px\"> 
\t\t\t\t\t<tr>
\t\t\t\t\t\t{% if is_granted(\"ROLE_ADMIN\") %}
\t\t\t\t\t\t   <td><a href=\"{{ path('AdminUserEnableList', {'page':1}) }}\" class=\"btn btn-default\" style=\"width:100%; margin-bottom:20px \"> cancel </a></td>
\t\t\t\t\t    {% else %}
\t\t\t\t\t    \t<td><a href=\"{{ path('UserDetail',{'id': app.user.Id ,'page': page}) }}\" class=\"btn btn-default\" style=\"width:100%; margin-bottom:20px \"> cancel </a></td>
\t\t\t\t\t    {% endif %}
\t\t\t\t\t\t<td><input class=\"form-control\" style=\"font-weight:bold; width:100%; color:white; background-color:#20B2AA; margin-bottom:20px\" type=\"submit\" value=\"{{ 'Submit'|trans }}\" /></td>
\t\t\t\t\t</tr>
\t\t\t\t</table> 
\t\t\t\t<div class=\"input-group\" style=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<script type=\"text/javascript\" src=\"{{asset('assets/js/jquery.js')}}\"></script>
\t\t\t<script>
\t\t\t\t\$(document).ready(function(event) {
\t\t\t\t\t\$('#app_user_registration_userCategory').change(function(e){

\t\t\t\t\t\tif ( ! (\$('#app_user_registration_userCategory').val() === \"Undergraduate\" )){
\t\t\t\t\t\t\tdocument.getElementById(\"app_user_registration_studentID\").required = false;
\t\t\t\t\t\t\tdocument.getElementById(\"app_user_registration_batch\").required = false;
\t\t\t\t\t\t}
\t\t\t\t\t\telse{
\t\t\t\t\t\t\tdocument.getElementById(\"app_user_registration_studentID\").required = true;
\t\t\t\t\t\t\tdocument.getElementById(\"app_user_registration_batch\").required = true;
\t\t\t\t\t\t}
\t\t\t\t\t}).change();
\t\t\t\t});
\t\t\t</script>
\t\t\t{{ form_end(form) }}
\t\t</div>
\t</div>
</div>
{% endblock %}", "pkflibrary/user/editUser.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\pkflibrary\\user\\editUser.html.twig");
    }
}
