<?php

/* pkflibrary/book/addBook.html.twig */
class __TwigTemplate_6074acde726f4055f3866380e8656b12281bac4e258147ead3ed561c45f77d54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("pkflibrary/base.html.twig ", "pkflibrary/book/addBook.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'status' => array($this, 'block_status'),
            'left_menu' => array($this, 'block_left_menu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "pkflibrary/base.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09495ef8ecf69a1a2298b8fb6e6f79873d7230367799af7c13facf8fd130ee24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09495ef8ecf69a1a2298b8fb6e6f79873d7230367799af7c13facf8fd130ee24->enter($__internal_09495ef8ecf69a1a2298b8fb6e6f79873d7230367799af7c13facf8fd130ee24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/book/addBook.html.twig"));

        $__internal_883da7700a1d5df7ab44f043dc9b85803f5cd9aea6c8c5741ff0fe375e46ab60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_883da7700a1d5df7ab44f043dc9b85803f5cd9aea6c8c5741ff0fe375e46ab60->enter($__internal_883da7700a1d5df7ab44f043dc9b85803f5cd9aea6c8c5741ff0fe375e46ab60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/book/addBook.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09495ef8ecf69a1a2298b8fb6e6f79873d7230367799af7c13facf8fd130ee24->leave($__internal_09495ef8ecf69a1a2298b8fb6e6f79873d7230367799af7c13facf8fd130ee24_prof);

        
        $__internal_883da7700a1d5df7ab44f043dc9b85803f5cd9aea6c8c5741ff0fe375e46ab60->leave($__internal_883da7700a1d5df7ab44f043dc9b85803f5cd9aea6c8c5741ff0fe375e46ab60_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fad1b68d548ea9803c1ad3f2b517bd65ad29edd2336d6b60a947a1eea388e13d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fad1b68d548ea9803c1ad3f2b517bd65ad29edd2336d6b60a947a1eea388e13d->enter($__internal_fad1b68d548ea9803c1ad3f2b517bd65ad29edd2336d6b60a947a1eea388e13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c87669089fb03c712c840d05a857985c5f7829ed1e8909c465a315dbebc45970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c87669089fb03c712c840d05a857985c5f7829ed1e8909c465a315dbebc45970->enter($__internal_c87669089fb03c712c840d05a857985c5f7829ed1e8909c465a315dbebc45970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
    .error_right{
        color:red;
        font-family:andalus;
        font-weight:;
        font-size:15px;
        float:right;
     }

     .error_left{
        color:red;
        font-family:andalus;
        font-weight:;
        font-size:15px;
     }
  </style>
";
        
        $__internal_c87669089fb03c712c840d05a857985c5f7829ed1e8909c465a315dbebc45970->leave($__internal_c87669089fb03c712c840d05a857985c5f7829ed1e8909c465a315dbebc45970_prof);

        
        $__internal_fad1b68d548ea9803c1ad3f2b517bd65ad29edd2336d6b60a947a1eea388e13d->leave($__internal_fad1b68d548ea9803c1ad3f2b517bd65ad29edd2336d6b60a947a1eea388e13d_prof);

    }

    // line 23
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6b535c18adfb9c55f2406eef5b58430dadfa8205e541a6abaa48a192677dce75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b535c18adfb9c55f2406eef5b58430dadfa8205e541a6abaa48a192677dce75->enter($__internal_6b535c18adfb9c55f2406eef5b58430dadfa8205e541a6abaa48a192677dce75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ddb4893fb7e28b6acf6f765080261bdfc9b1ee104ab6d027545eb3c8f9fe2891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb4893fb7e28b6acf6f765080261bdfc9b1ee104ab6d027545eb3c8f9fe2891->enter($__internal_ddb4893fb7e28b6acf6f765080261bdfc9b1ee104ab6d027545eb3c8f9fe2891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 24
        echo "
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav navbar-right\" style=\"font-weight:bold;background-color:black;\">
            <li>
                <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", array("page" => 1));
        echo "\"><i class=\"fa fa-home\"></i> Home</a>
            </li>
            ";
        // line 31
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 32
            echo "                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> Management <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\"  >
                        <li>
                         <a href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserEnableList", array("page" => 1));
            echo "\" style=\"font-family:calibri\"> <i class=\"fa fa-user\"></i>  User Management</a>
                     </li>
                     <li>
                        <a href=\"";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manageBorrows");
            echo "\" style=\"font-family:calibri\" > <i class=\"fa fa-book\"></i>  Borrow Management</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categoryList");
            echo "\" style=\"font-family:calibri\" > <i class=\"fa fa-navicon\"></i>  Category Management</a>
                    </li>

                </ul>
            </li>
        ";
        }
        // line 48
        echo "              <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> My Account <b class=\"caret\"></b></a>
            <ul class=\"dropdown-menu\"  >
                <li>
                    <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrow", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "bookId" =>  -1)), "html", null, true);
        echo "\" style=\"font-family:calibri\"> <i class=\"fa fa-book\"></i> Borrow Reports </a>
                </li>
                
               <li>
                    <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("UserDetail", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "Id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
        echo "\" style=\"font-family:calibri\"><i class=\"fa fa-user\"></i>My Personal data</a>
               </li>

           </ul>
       </li>
        <li>
            <a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\">About</a>
        </li>
        <li>
            <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("help");
        echo "\">Help</a>
        </li>
        <li>
           <a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out\"></i> Logout</a>
       </li>
   </ul>
</div>
<!-- /.navbar-collapse -->
";
        
        $__internal_ddb4893fb7e28b6acf6f765080261bdfc9b1ee104ab6d027545eb3c8f9fe2891->leave($__internal_ddb4893fb7e28b6acf6f765080261bdfc9b1ee104ab6d027545eb3c8f9fe2891_prof);

        
        $__internal_6b535c18adfb9c55f2406eef5b58430dadfa8205e541a6abaa48a192677dce75->leave($__internal_6b535c18adfb9c55f2406eef5b58430dadfa8205e541a6abaa48a192677dce75_prof);

    }

    // line 75
    public function block_status($context, array $blocks = array())
    {
        $__internal_01caf082ccc576b2bf5f8d9f792d8231281a73e3ce547b52518ababe8fcab68d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01caf082ccc576b2bf5f8d9f792d8231281a73e3ce547b52518ababe8fcab68d->enter($__internal_01caf082ccc576b2bf5f8d9f792d8231281a73e3ce547b52518ababe8fcab68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        $__internal_c1f9d29bf7c39b31430d270a78aeb53f3d2aad8b400a3abad820e4fb99717b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f9d29bf7c39b31430d270a78aeb53f3d2aad8b400a3abad820e4fb99717b32->enter($__internal_c1f9d29bf7c39b31430d270a78aeb53f3d2aad8b400a3abad820e4fb99717b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        // line 76
        echo "    <li>Book Registration</li>
";
        
        $__internal_c1f9d29bf7c39b31430d270a78aeb53f3d2aad8b400a3abad820e4fb99717b32->leave($__internal_c1f9d29bf7c39b31430d270a78aeb53f3d2aad8b400a3abad820e4fb99717b32_prof);

        
        $__internal_01caf082ccc576b2bf5f8d9f792d8231281a73e3ce547b52518ababe8fcab68d->leave($__internal_01caf082ccc576b2bf5f8d9f792d8231281a73e3ce547b52518ababe8fcab68d_prof);

    }

    // line 79
    public function block_left_menu($context, array $blocks = array())
    {
        $__internal_5ace3a8fa52100af3ed1d6b3a0e24a4c3a8f987a238ac4896273afb758376355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ace3a8fa52100af3ed1d6b3a0e24a4c3a8f987a238ac4896273afb758376355->enter($__internal_5ace3a8fa52100af3ed1d6b3a0e24a4c3a8f987a238ac4896273afb758376355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_menu"));

        $__internal_ec3f528408a1819ff532b7ae2263487d169e1474cbcdc5037898fd32e6feab49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec3f528408a1819ff532b7ae2263487d169e1474cbcdc5037898fd32e6feab49->enter($__internal_ec3f528408a1819ff532b7ae2263487d169e1474cbcdc5037898fd32e6feab49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_menu"));

        echo "             
";
        
        $__internal_ec3f528408a1819ff532b7ae2263487d169e1474cbcdc5037898fd32e6feab49->leave($__internal_ec3f528408a1819ff532b7ae2263487d169e1474cbcdc5037898fd32e6feab49_prof);

        
        $__internal_5ace3a8fa52100af3ed1d6b3a0e24a4c3a8f987a238ac4896273afb758376355->leave($__internal_5ace3a8fa52100af3ed1d6b3a0e24a4c3a8f987a238ac4896273afb758376355_prof);

    }

    // line 83
    public function block_body($context, array $blocks = array())
    {
        $__internal_e90f051fbc3eedfcbae212c94d24e439db6221e0319d00c788163fc1d171214e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e90f051fbc3eedfcbae212c94d24e439db6221e0319d00c788163fc1d171214e->enter($__internal_e90f051fbc3eedfcbae212c94d24e439db6221e0319d00c788163fc1d171214e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b65a84de92890a86192fb90e967591127d5d2caf768e8784821d93aba379b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b65a84de92890a86192fb90e967591127d5d2caf768e8784821d93aba379b10->enter($__internal_1b65a84de92890a86192fb90e967591127d5d2caf768e8784821d93aba379b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 84
        echo "<div class=\"row\">
    <div class=\"panel panel-default\" style=\"margin:auto; width:67%\">
        <div class=\"panel-heading\">
            <h3 style=\"text-align:center; margin-bottom:20px\" ><i class=\" fa fa-book \"></i> Book Registration</h3>
        </div>                       
        <div class=\"panel-body\"> 
            <p style=\"margin-left:2.2%; margin-top:10px; font-family:calibri; color:blue; font-style:italic\"> Note: All fields label ending with * are compulsory! </p>
           \t<div>
           \t";
        // line 92
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("novalidate" => "novalidate"));
        echo "
                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <th>";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo " *</th>
                    <th> ";
        // line 95
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subTitle", array()), 'label');
        echo " </th>
                    <tr>
                        <td>";
        // line 97
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "</td>
                        <td>";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subTitle", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\">";
        // line 101
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors')), "html", null, true);
        echo "</td>
                        <td class=\"error_right\">";
        // line 102
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subTitle", array()), 'errors')), "html", null, true);
        echo "</td>
                    </tr>
                </table>

                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <th>";
        // line 107
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'label');
        echo " *</th>
                    <th> ";
        // line 108
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editor", array()), 'label');
        echo " </th>
                    <tr>
                        <td>";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'widget');
        echo "</td>
                        <td>";
        // line 111
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editor", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\">";
        // line 114
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'errors')), "html", null, true);
        echo "</td>
                        <td class=\"error_right\">";
        // line 115
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editor", array()), 'errors')), "html", null, true);
        echo "</td>
                    </tr>
                </table>

                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <th>";
        // line 120
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edition", array()), 'label');
        echo "</th>
                    <th> ";
        // line 121
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantity", array()), 'label');
        echo " * </th>
                    <th> ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numberOfPages", array()), 'label');
        echo " </th>
                    <tr>
                        <td width=\"\">";
        // line 124
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edition", array()), 'widget');
        echo "</td>
                        <td>";
        // line 125
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantity", array()), 'widget');
        echo "</td>
                        <td>";
        // line 126
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numberOfPages", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\">";
        // line 129
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edition", array()), 'errors')), "html", null, true);
        echo "</td>
                        <td class=\"error_left\">";
        // line 130
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantity", array()), 'errors')), "html", null, true);
        echo "</td>
                        <td class=\"error_right\">";
        // line 131
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numberOfPages", array()), 'errors')), "html", null, true);
        echo "</td>
                    </tr>
                </table>
                
                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <th>";
        // line 136
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateAcquired", array()), 'label');
        echo " *</th>
                    <th> ";
        // line 137
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "yearPublished", array()), 'label');
        echo " </th>
                    <tr>
                        <td>";
        // line 139
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateAcquired", array()), 'widget');
        echo "</td>
                        <td>";
        // line 140
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "yearPublished", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\">";
        // line 143
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateAcquired", array()), 'errors')), "html", null, true);
        echo "</td>
                        <td class=\"error_right\">";
        // line 144
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "yearPublished", array()), 'errors')), "html", null, true);
        echo "</td>
                    </tr>
                </table>

                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <th>";
        // line 149
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isbn", array()), 'label');
        echo "</th>
                    <th> ";
        // line 150
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ean", array()), 'label');
        echo " </th>
                    <th> ";
        // line 151
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pklibCode", array()), 'label');
        echo " </th>
                    <tr>
                        <td width=\"\">";
        // line 153
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isbn", array()), 'widget');
        echo "</td>
                        <td>";
        // line 154
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ean", array()), 'widget');
        echo "</td>
                        <td>";
        // line 155
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pklibCode", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\">
                            <ul style=\"list-style:none\">
                                ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isbn", array()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 161
            echo "                                  <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "</li>
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                          </ul>
                        </td>
                        <td class=\"error_left\">
                            <ul style=\"list-style:none\">
                                ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ean", array()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 168
            echo "                                  <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "</li>
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                          </ul>
                        </td>
                        <td class=\"error_right\">";
        // line 172
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pklibCode", array()), 'errors')), "html", null, true);
        echo "</td>
                    </tr>
                </table>

                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <th>";
        // line 177
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "format", array()), 'label');
        echo "</th>
                    <th> ";
        // line 178
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color", array()), 'label');
        echo " </th>
                    <th> ";
        // line 179
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "volume", array()), 'label');
        echo " </th>
                    <tr>
                        <td width=\"\">";
        // line 181
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "format", array()), 'widget');
        echo "</td>
                        <td>";
        // line 182
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color", array()), 'widget');
        echo "</td>
                        <td>";
        // line 183
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "volume", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\">";
        // line 186
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "format", array()), 'errors')), "html", null, true);
        echo "</td>
                        <td class=\"error_left\">";
        // line 187
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color", array()), 'errors')), "html", null, true);
        echo "</td>
                        <td class=\"error_right\">";
        // line 188
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "volume", array()), 'errors')), "html", null, true);
        echo "</td>
                    </tr>
                </table>

                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <th>";
        // line 193
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cdNumber", array()), 'label');
        echo "</th>
                    <th> ";
        // line 194
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'label');
        echo " </th>
                    <th> ";
        // line 195
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "language", array()), 'label');
        echo " </th>
                    <tr>
                        <td width=\"\">";
        // line 197
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cdNumber", array()), 'widget');
        echo "</td>
                        <td>";
        // line 198
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'widget');
        echo "</td>
                        <td>";
        // line 199
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "language", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\">";
        // line 202
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cdNumber", array()), 'errors')), "html", null, true);
        echo "</td>
                        <td class=\"error_left\">";
        // line 203
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'errors')), "html", null, true);
        echo "</td>
                        <td class=\"error_right\">";
        // line 204
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "language", array()), 'errors')), "html", null, true);
        echo "</td>
                    </tr>
                </table>

                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <th>";
        // line 209
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "acquisition", array()), 'label');
        echo "</th>
                    <th> ";
        // line 210
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "state", array()), 'label');
        echo " </th>
                    <tr>
                        <td>";
        // line 212
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "acquisition", array()), 'widget');
        echo "</td>
                        <td>";
        // line 213
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "state", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\">";
        // line 216
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "acquisition", array()), 'errors')), "html", null, true);
        echo "</td>
                        <td class=\"error_right\">";
        // line 217
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "state", array()), 'errors')), "html", null, true);
        echo "</td>
                    </tr>
                </table>

                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <tr>
                        <th>";
        // line 223
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coverPicture", array()), 'label');
        echo "*</th>
                        <th>";
        // line 224
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "summary", array()), 'label');
        echo "*</th>
                    </tr>
                    <tr>
                        <td>";
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coverPicture", array()), "file", array()), 'widget');
        echo "</td>
                        <td>";
        // line 228
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "summary", array()), "file", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\">";
        // line 231
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coverPicture", array()), "file", array()), 'errors')), "html", null, true);
        echo "</td>
                        <td class=\"error_right\">";
        // line 232
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "summary", array()), "file", array()), 'errors')), "html", null, true);
        echo "</td>
                    </tr>
                </table>

                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\">
                    <th> ";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subCategories", array()), 'label');
        echo " </th>
                    <tr>
                        <td>";
        // line 239
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subCategories", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\" >";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subCategories", array()), 'errors');
        echo "</td>
                    </tr>
                </table>

                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate; margin-top:15px\"> 
                  <tr>
                    <td><a href=\"";
        // line 248
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"btn btn-default\" style=\"width:100%; margin-bottom:20px \"> cancel </a></td>
                    <td><input class=\"form-control\" style=\"font-weight:bold; width:100%; color:white; background-color:#20B2AA; margin-bottom:20px;\" type=\"submit\" value=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Submit"), "html", null, true);
        echo "\" /></td>
                 </tr>
               </table>                
               ";
        // line 252
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
           
        </div>
    </div>
</div>


";
        
        $__internal_1b65a84de92890a86192fb90e967591127d5d2caf768e8784821d93aba379b10->leave($__internal_1b65a84de92890a86192fb90e967591127d5d2caf768e8784821d93aba379b10_prof);

        
        $__internal_e90f051fbc3eedfcbae212c94d24e439db6221e0319d00c788163fc1d171214e->leave($__internal_e90f051fbc3eedfcbae212c94d24e439db6221e0319d00c788163fc1d171214e_prof);

    }

    public function getTemplateName()
    {
        return "pkflibrary/book/addBook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  634 => 252,  628 => 249,  624 => 248,  615 => 242,  609 => 239,  604 => 237,  596 => 232,  592 => 231,  586 => 228,  582 => 227,  576 => 224,  572 => 223,  563 => 217,  559 => 216,  553 => 213,  549 => 212,  544 => 210,  540 => 209,  532 => 204,  528 => 203,  524 => 202,  518 => 199,  514 => 198,  510 => 197,  505 => 195,  501 => 194,  497 => 193,  489 => 188,  485 => 187,  481 => 186,  475 => 183,  471 => 182,  467 => 181,  462 => 179,  458 => 178,  454 => 177,  446 => 172,  442 => 170,  433 => 168,  429 => 167,  423 => 163,  414 => 161,  410 => 160,  402 => 155,  398 => 154,  394 => 153,  389 => 151,  385 => 150,  381 => 149,  373 => 144,  369 => 143,  363 => 140,  359 => 139,  354 => 137,  350 => 136,  342 => 131,  338 => 130,  334 => 129,  328 => 126,  324 => 125,  320 => 124,  315 => 122,  311 => 121,  307 => 120,  299 => 115,  295 => 114,  289 => 111,  285 => 110,  280 => 108,  276 => 107,  268 => 102,  264 => 101,  258 => 98,  254 => 97,  249 => 95,  245 => 94,  240 => 92,  230 => 84,  221 => 83,  202 => 79,  191 => 76,  182 => 75,  166 => 68,  160 => 65,  154 => 62,  145 => 56,  138 => 52,  132 => 48,  123 => 42,  117 => 39,  111 => 36,  105 => 32,  103 => 31,  98 => 29,  91 => 24,  82 => 23,  53 => 4,  44 => 3,  11 => 1,);
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

{% block stylesheets %}
    {{parent()}}
    <style>
    .error_right{
        color:red;
        font-family:andalus;
        font-weight:;
        font-size:15px;
        float:right;
     }

     .error_left{
        color:red;
        font-family:andalus;
        font-weight:;
        font-size:15px;
     }
  </style>
{% endblock %}

{% block menu %}

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav navbar-right\" style=\"font-weight:bold;background-color:black;\">
            <li>
                <a href=\"{{ path('homepage',{'page': 1}) }}\"><i class=\"fa fa-home\"></i> Home</a>
            </li>
            {% if is_granted(\"ROLE_ADMIN\") %}
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> Management <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\"  >
                        <li>
                         <a href=\"{{ path('AdminUserEnableList',{'page': 1}) }}\" style=\"font-family:calibri\"> <i class=\"fa fa-user\"></i>  User Management</a>
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
                    <a href=\"{{ path('UserDetail',{'id': app.user.Id ,'page': page}) }}\" style=\"font-family:calibri\"><i class=\"fa fa-user\"></i>My Personal data</a>
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
    <li>Book Registration</li>
{% endblock %}

{% block left_menu %}             
{% endblock %}


{% block body %}
<div class=\"row\">
    <div class=\"panel panel-default\" style=\"margin:auto; width:67%\">
        <div class=\"panel-heading\">
            <h3 style=\"text-align:center; margin-bottom:20px\" ><i class=\" fa fa-book \"></i> Book Registration</h3>
        </div>                       
        <div class=\"panel-body\"> 
            <p style=\"margin-left:2.2%; margin-top:10px; font-family:calibri; color:blue; font-style:italic\"> Note: All fields label ending with * are compulsory! </p>
           \t<div>
           \t{{form_start(form, {'novalidate':'novalidate'})}}
                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <th>{{ form_label(form.title) }} *</th>
                    <th> {{ form_label(form.subTitle) }} </th>
                    <tr>
                        <td>{{ form_widget(form.title) }}</td>
                        <td>{{ form_widget(form.subTitle) }}</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\">{{ form_errors(form.title) | striptags }}</td>
                        <td class=\"error_right\">{{ form_errors(form.subTitle) | striptags }}</td>
                    </tr>
                </table>

                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <th>{{ form_label(form.author) }} *</th>
                    <th> {{ form_label(form.editor) }} </th>
                    <tr>
                        <td>{{ form_widget(form.author) }}</td>
                        <td>{{form_widget(form.editor)}}</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\">{{ form_errors(form.author) | striptags }}</td>
                        <td class=\"error_right\">{{ form_errors(form.editor) | striptags }}</td>
                    </tr>
                </table>

                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <th>{{ form_label(form.edition) }}</th>
                    <th> {{ form_label(form.quantity) }} * </th>
                    <th> {{ form_label(form.numberOfPages) }} </th>
                    <tr>
                        <td width=\"\">{{ form_widget(form.edition) }}</td>
                        <td>{{form_widget(form.quantity)}}</td>
                        <td>{{form_widget(form.numberOfPages)}}</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\">{{ form_errors(form.edition) | striptags }}</td>
                        <td class=\"error_left\">{{ form_errors(form.quantity) | striptags }}</td>
                        <td class=\"error_right\">{{ form_errors(form.numberOfPages) | striptags }}</td>
                    </tr>
                </table>
                
                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <th>{{ form_label(form.dateAcquired) }} *</th>
                    <th> {{ form_label(form.yearPublished) }} </th>
                    <tr>
                        <td>{{ form_widget(form.dateAcquired) }}</td>
                        <td>{{ form_widget(form.yearPublished) }}</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\">{{ form_errors(form.dateAcquired) | striptags }}</td>
                        <td class=\"error_right\">{{ form_errors(form.yearPublished) | striptags }}</td>
                    </tr>
                </table>

                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <th>{{ form_label(form.isbn) }}</th>
                    <th> {{ form_label(form.ean) }} </th>
                    <th> {{ form_label(form.pklibCode) }} </th>
                    <tr>
                        <td width=\"\">{{ form_widget(form.isbn) }}</td>
                        <td>{{form_widget(form.ean)}}</td>
                        <td>{{form_widget(form.pklibCode)}}</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\">
                            <ul style=\"list-style:none\">
                                {% for error in form.isbn.vars.errors %}
                                  <li>{{ error.message }}</li>
                              {% endfor %}
                          </ul>
                        </td>
                        <td class=\"error_left\">
                            <ul style=\"list-style:none\">
                                {% for error in form.ean.vars.errors %}
                                  <li>{{ error.message }}</li>
                              {% endfor %}
                          </ul>
                        </td>
                        <td class=\"error_right\">{{ form_errors(form.pklibCode) | striptags }}</td>
                    </tr>
                </table>

                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <th>{{ form_label(form.format) }}</th>
                    <th> {{ form_label(form.color) }} </th>
                    <th> {{ form_label(form.volume) }} </th>
                    <tr>
                        <td width=\"\">{{ form_widget(form.format) }}</td>
                        <td>{{form_widget(form.color)}}</td>
                        <td>{{form_widget(form.volume)}}</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\">{{ form_errors(form.format) | striptags }}</td>
                        <td class=\"error_left\">{{ form_errors(form.color) | striptags }}</td>
                        <td class=\"error_right\">{{ form_errors(form.volume) | striptags }}</td>
                    </tr>
                </table>

                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <th>{{ form_label(form.cdNumber) }}</th>
                    <th> {{ form_label(form.location) }} </th>
                    <th> {{ form_label(form.language) }} </th>
                    <tr>
                        <td width=\"\">{{ form_widget(form.cdNumber) }}</td>
                        <td>{{form_widget(form.location)}}</td>
                        <td>{{form_widget(form.language)}}</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\">{{ form_errors(form.cdNumber) | striptags }}</td>
                        <td class=\"error_left\">{{ form_errors(form.location) | striptags }}</td>
                        <td class=\"error_right\">{{ form_errors(form.language) | striptags }}</td>
                    </tr>
                </table>

                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <th>{{ form_label(form.acquisition) }}</th>
                    <th> {{ form_label(form.state) }} </th>
                    <tr>
                        <td>{{ form_widget(form.acquisition) }}</td>
                        <td>{{ form_widget(form.state) }}</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\">{{ form_errors(form.acquisition) | striptags }}</td>
                        <td class=\"error_right\">{{ form_errors(form.state) | striptags }}</td>
                    </tr>
                </table>

                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <tr>
                        <th>{{ form_label(form.coverPicture) }}*</th>
                        <th>{{ form_label(form.summary) }}*</th>
                    </tr>
                    <tr>
                        <td>{{ form_widget(form.coverPicture.file) }}</td>
                        <td>{{ form_widget(form.summary.file) }}</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\">{{ form_errors(form.coverPicture.file) | striptags }}</td>
                        <td class=\"error_right\">{{ form_errors(form.summary.file) | striptags }}</td>
                    </tr>
                </table>

                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\">
                    <th> {{ form_label(form.subCategories) }} </th>
                    <tr>
                        <td>{{ form_widget(form.subCategories) }}</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\" >{{ form_errors(form.subCategories) }}</td>
                    </tr>
                </table>

                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate; margin-top:15px\"> 
                  <tr>
                    <td><a href=\"{{ path('homepage') }}\" class=\"btn btn-default\" style=\"width:100%; margin-bottom:20px \"> cancel </a></td>
                    <td><input class=\"form-control\" style=\"font-weight:bold; width:100%; color:white; background-color:#20B2AA; margin-bottom:20px;\" type=\"submit\" value=\"{{ 'Submit'|trans }}\" /></td>
                 </tr>
               </table>                
               {{form_end(form)}}
\t\t\t</div>
           
        </div>
    </div>
</div>


{% endblock %}", "pkflibrary/book/addBook.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\pkflibrary\\book\\addBook.html.twig");
    }
}
