<?php

/* pkflibrary/book/editBook.html.twig */
class __TwigTemplate_a78290359eaff93c8abe90d62ac6e9ee62831e26e9b47bc9315cb239f3409db5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("pkflibrary/base.html.twig ", "pkflibrary/book/editBook.html.twig", 1);
        $this->blocks = array(
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
        $__internal_7d74f9d621a9ff41785ab41a89520332d4a1706581dc93f44637c669551f2eea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d74f9d621a9ff41785ab41a89520332d4a1706581dc93f44637c669551f2eea->enter($__internal_7d74f9d621a9ff41785ab41a89520332d4a1706581dc93f44637c669551f2eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/book/editBook.html.twig"));

        $__internal_12b9e5a4972fbd6cf7aea899e7c5202dad4d37c7ff07ea985cdbffc6103340d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b9e5a4972fbd6cf7aea899e7c5202dad4d37c7ff07ea985cdbffc6103340d1->enter($__internal_12b9e5a4972fbd6cf7aea899e7c5202dad4d37c7ff07ea985cdbffc6103340d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/book/editBook.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d74f9d621a9ff41785ab41a89520332d4a1706581dc93f44637c669551f2eea->leave($__internal_7d74f9d621a9ff41785ab41a89520332d4a1706581dc93f44637c669551f2eea_prof);

        
        $__internal_12b9e5a4972fbd6cf7aea899e7c5202dad4d37c7ff07ea985cdbffc6103340d1->leave($__internal_12b9e5a4972fbd6cf7aea899e7c5202dad4d37c7ff07ea985cdbffc6103340d1_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1a5c99dfb8fa7dfa8ca26e2f68deb0386d0a7ceedb1477171a22e11a99b2960b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a5c99dfb8fa7dfa8ca26e2f68deb0386d0a7ceedb1477171a22e11a99b2960b->enter($__internal_1a5c99dfb8fa7dfa8ca26e2f68deb0386d0a7ceedb1477171a22e11a99b2960b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c4d80efe9dddd612690518d9ecaa01743109279f1cf6cefd6c7fee28a4317eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d80efe9dddd612690518d9ecaa01743109279f1cf6cefd6c7fee28a4317eae->enter($__internal_c4d80efe9dddd612690518d9ecaa01743109279f1cf6cefd6c7fee28a4317eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav navbar-right\" style=\"font-weight:bold\">
            <li>
                <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", array("page" => 1));
        echo "\"><i class=\"fa fa-home\"></i> Home</a>
            </li>
            ";
        // line 10
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 11
            echo "                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> Management <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\"  >
                        <li>
                         <a href=\"";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserEnableList", array("page" => 1));
            echo "\" style=\"font-family:calibri\"> <i class=\"fa fa-user\"></i>  User Management</a>
                     </li>
                     <li>
                        <a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manageBorrows");
            echo "\" style=\"font-family:calibri\" > <i class=\"fa fa-book\"></i>  Borrow Management</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 21
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
        echo "\" style=\"font-family:calibri\"><i class=\"fa fa-user\"></i>My Personal data</a>
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
        echo "\" style=\"font-family:calibri\"><i class=\"fa fa-sign-out\"></i> Logout</a>
       </li>
   </ul>
</div>
<!-- /.navbar-collapse -->
";
        
        $__internal_c4d80efe9dddd612690518d9ecaa01743109279f1cf6cefd6c7fee28a4317eae->leave($__internal_c4d80efe9dddd612690518d9ecaa01743109279f1cf6cefd6c7fee28a4317eae_prof);

        
        $__internal_1a5c99dfb8fa7dfa8ca26e2f68deb0386d0a7ceedb1477171a22e11a99b2960b->leave($__internal_1a5c99dfb8fa7dfa8ca26e2f68deb0386d0a7ceedb1477171a22e11a99b2960b_prof);

    }

    // line 53
    public function block_status($context, array $blocks = array())
    {
        $__internal_fabfd76f03572defb98f29ad03e6d55bdfcef88292b02edafce29aec2ee5114f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fabfd76f03572defb98f29ad03e6d55bdfcef88292b02edafce29aec2ee5114f->enter($__internal_fabfd76f03572defb98f29ad03e6d55bdfcef88292b02edafce29aec2ee5114f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        $__internal_f3884b3daab2861205e21691cfbaad8ddde89e3b64c76122b43e001a776cc452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3884b3daab2861205e21691cfbaad8ddde89e3b64c76122b43e001a776cc452->enter($__internal_f3884b3daab2861205e21691cfbaad8ddde89e3b64c76122b43e001a776cc452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        // line 54
        echo "    <li><a class=\"active\" href=\"#\" style=\"color:blue\">Book Modification</a>
    </li>
";
        
        $__internal_f3884b3daab2861205e21691cfbaad8ddde89e3b64c76122b43e001a776cc452->leave($__internal_f3884b3daab2861205e21691cfbaad8ddde89e3b64c76122b43e001a776cc452_prof);

        
        $__internal_fabfd76f03572defb98f29ad03e6d55bdfcef88292b02edafce29aec2ee5114f->leave($__internal_fabfd76f03572defb98f29ad03e6d55bdfcef88292b02edafce29aec2ee5114f_prof);

    }

    // line 58
    public function block_left_menu($context, array $blocks = array())
    {
        $__internal_b41423e1319d61612253ee59f0240602be68158f4309a27606e8368cc38dcccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b41423e1319d61612253ee59f0240602be68158f4309a27606e8368cc38dcccd->enter($__internal_b41423e1319d61612253ee59f0240602be68158f4309a27606e8368cc38dcccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_menu"));

        $__internal_3257e44f3a26a9eea67ae6232dae7f3681061727e1f32a60b401a2af1ebfa637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3257e44f3a26a9eea67ae6232dae7f3681061727e1f32a60b401a2af1ebfa637->enter($__internal_3257e44f3a26a9eea67ae6232dae7f3681061727e1f32a60b401a2af1ebfa637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_menu"));

        echo "             
";
        
        $__internal_3257e44f3a26a9eea67ae6232dae7f3681061727e1f32a60b401a2af1ebfa637->leave($__internal_3257e44f3a26a9eea67ae6232dae7f3681061727e1f32a60b401a2af1ebfa637_prof);

        
        $__internal_b41423e1319d61612253ee59f0240602be68158f4309a27606e8368cc38dcccd->leave($__internal_b41423e1319d61612253ee59f0240602be68158f4309a27606e8368cc38dcccd_prof);

    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        $__internal_676d1622fced29efe2f6362f1940c29b74aadd8393ab491dee478ba6c8bb68b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_676d1622fced29efe2f6362f1940c29b74aadd8393ab491dee478ba6c8bb68b2->enter($__internal_676d1622fced29efe2f6362f1940c29b74aadd8393ab491dee478ba6c8bb68b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c6c31bc1be8e36cef2e7a320e90ee0c27e830329bda51a56ab479d644bd097af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c31bc1be8e36cef2e7a320e90ee0c27e830329bda51a56ab479d644bd097af->enter($__internal_c6c31bc1be8e36cef2e7a320e90ee0c27e830329bda51a56ab479d644bd097af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 63
        echo "<div class=\"row\">
    <div class=\"panel panel-default\" style=\"margin:auto; width:67%\">
        <div class=\"panel-heading\">
            <h3 style=\"text-align:center; margin-bottom:20px;\" ><i class=\" fa fa-book \"></i> Book Registration</h3>
        </div>                       
        <div class=\"panel-body\"> 
            <p style=\"margin-left:2.2%; margin-top:10px; font-family:calibri; color:blue; font-style:italic\"> Note: All fields label ending with * are compulsory! </p>
            <div>
            ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("novalidate" => "novalidate"));
        echo "
                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <th>";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo " *</th>
                    <th> ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subTitle", array()), 'label');
        echo " </th>
                    <tr>
                        <td>";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "</td>
                        <td>";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subTitle", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\">";
        // line 80
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors')), "html", null, true);
        echo "</td>
                        <td class=\"error_right\">";
        // line 81
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subTitle", array()), 'errors')), "html", null, true);
        echo "</td>
                    </tr>
                </table>

                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <th>";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'label');
        echo " *</th>
                    <th> ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editor", array()), 'label');
        echo " </th>
                    <tr>
                        <td>";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'widget');
        echo "</td>
                        <td>";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editor", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\">";
        // line 93
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'errors')), "html", null, true);
        echo "</td>
                        <td class=\"error_right\">";
        // line 94
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editor", array()), 'errors')), "html", null, true);
        echo "</td>
                    </tr>
                </table>

                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <th>";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edition", array()), 'label');
        echo "</th>
                    <th> ";
        // line 100
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantity", array()), 'label');
        echo " * </th>
                    <th> ";
        // line 101
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numberOfPages", array()), 'label');
        echo " </th>
                    <tr>
                        <td width=\"\">";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edition", array()), 'widget');
        echo "</td>
                        <td>";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantity", array()), 'widget');
        echo "</td>
                        <td>";
        // line 105
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numberOfPages", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\">";
        // line 108
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edition", array()), 'errors')), "html", null, true);
        echo "</td>
                        <td class=\"error_left\">";
        // line 109
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantity", array()), 'errors')), "html", null, true);
        echo "</td>
                        <td class=\"error_right\">";
        // line 110
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numberOfPages", array()), 'errors')), "html", null, true);
        echo "</td>
                    </tr>
                </table>
                
                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <th>";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateAcquired", array()), 'label');
        echo " *</th>
                    <th> ";
        // line 116
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "yearPublished", array()), 'label');
        echo " </th>
                    <tr>
                        <td>";
        // line 118
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateAcquired", array()), 'widget');
        echo "</td>
                        <td>";
        // line 119
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "yearPublished", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\">";
        // line 122
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateAcquired", array()), 'errors')), "html", null, true);
        echo "</td>
                        <td class=\"error_right\">";
        // line 123
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "yearPublished", array()), 'errors')), "html", null, true);
        echo "</td>
                    </tr>
                </table>

                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <th>";
        // line 128
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isbn", array()), 'label');
        echo "</th>
                    <th> ";
        // line 129
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ean", array()), 'label');
        echo " </th>
                    <th> ";
        // line 130
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pklibCode", array()), 'label');
        echo " </th>
                    <tr>
                        <td width=\"\">";
        // line 132
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isbn", array()), 'widget');
        echo "</td>
                        <td>";
        // line 133
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ean", array()), 'widget');
        echo "</td>
                        <td>";
        // line 134
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pklibCode", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\">
                            <ul style=\"list-style:none\">
                                ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isbn", array()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 140
            echo "                                  <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "</li>
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                          </ul>
                        </td>
                        <td class=\"error_left\">
                            <ul style=\"list-style:none\">
                                ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ean", array()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 147
            echo "                                  <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "</li>
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "                          </ul>
                        </td>
                        <td class=\"error_right\">";
        // line 151
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pklibCode", array()), 'errors')), "html", null, true);
        echo "</td>
                    </tr>
                </table>

                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <th>";
        // line 156
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "format", array()), 'label');
        echo "</th>
                    <th> ";
        // line 157
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color", array()), 'label');
        echo " </th>
                    <th> ";
        // line 158
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "volume", array()), 'label');
        echo " </th>
                    <tr>
                        <td width=\"\">";
        // line 160
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "format", array()), 'widget');
        echo "</td>
                        <td>";
        // line 161
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color", array()), 'widget');
        echo "</td>
                        <td>";
        // line 162
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "volume", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\">";
        // line 165
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "format", array()), 'errors')), "html", null, true);
        echo "</td>
                        <td class=\"error_left\">";
        // line 166
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color", array()), 'errors')), "html", null, true);
        echo "</td>
                        <td class=\"error_right\">";
        // line 167
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "volume", array()), 'errors')), "html", null, true);
        echo "</td>
                    </tr>
                </table>

                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <th>";
        // line 172
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cdNumber", array()), 'label');
        echo "</th>
                    <th> ";
        // line 173
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'label');
        echo " </th>
                    <th> ";
        // line 174
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "language", array()), 'label');
        echo " </th>
                    <tr>
                        <td width=\"\">";
        // line 176
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cdNumber", array()), 'widget');
        echo "</td>
                        <td>";
        // line 177
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'widget');
        echo "</td>
                        <td>";
        // line 178
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "language", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\">";
        // line 181
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cdNumber", array()), 'errors')), "html", null, true);
        echo "</td>
                        <td class=\"error_left\">";
        // line 182
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'errors')), "html", null, true);
        echo "</td>
                        <td class=\"error_right\">";
        // line 183
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "language", array()), 'errors')), "html", null, true);
        echo "</td>
                    </tr>
                </table>

                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <th>";
        // line 188
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "acquisition", array()), 'label');
        echo "</th>
                    <th> ";
        // line 189
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "state", array()), 'label');
        echo " </th>
                    <tr>
                        <td>";
        // line 191
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "acquisition", array()), 'widget');
        echo "</td>
                        <td>";
        // line 192
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "state", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\">";
        // line 195
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "acquisition", array()), 'errors')), "html", null, true);
        echo "</td>
                        <td class=\"error_right\">";
        // line 196
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "state", array()), 'errors')), "html", null, true);
        echo "</td>
                    </tr>
                </table>

                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
                    <tr>
                        <th>";
        // line 202
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coverPicture", array()), 'label');
        echo "*</th>
                        <th>";
        // line 203
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "summary", array()), 'label');
        echo "*</th>
                    </tr>
                    <tr>
                        <td>";
        // line 206
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coverPicture", array()), "file", array()), 'widget');
        echo "</td>
                        <td>";
        // line 207
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "summary", array()), "file", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\">";
        // line 210
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coverPicture", array()), "file", array()), 'errors')), "html", null, true);
        echo "</td>
                        <td class=\"error_right\">";
        // line 211
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "summary", array()), "file", array()), 'errors')), "html", null, true);
        echo "</td>
                    </tr>
                </table>

                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\">
                    <th> ";
        // line 216
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subCategories", array()), 'label');
        echo " </th>
                    <tr>
                        <td>";
        // line 218
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subCategories", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"error_left\" >";
        // line 221
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subCategories", array()), 'errors');
        echo "</td>
                    </tr>
                </table>

                <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate; margin-top:15px\"> 
                  <tr>
                    <td><a href=\"";
        // line 227
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"btn btn-default\" style=\"width:100%; margin-bottom:20px \"> cancel </a></td>
                    <td><input class=\"form-control\" style=\"font-weight:bold; width:100%; color:white; background-color:#20B2AA; margin-bottom:20px;\" type=\"submit\" value=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Submit"), "html", null, true);
        echo "\" /></td>
                 </tr>
               </table>                
               ";
        // line 231
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
           
        </div>
    </div>
</div>


";
        
        $__internal_c6c31bc1be8e36cef2e7a320e90ee0c27e830329bda51a56ab479d644bd097af->leave($__internal_c6c31bc1be8e36cef2e7a320e90ee0c27e830329bda51a56ab479d644bd097af_prof);

        
        $__internal_676d1622fced29efe2f6362f1940c29b74aadd8393ab491dee478ba6c8bb68b2->leave($__internal_676d1622fced29efe2f6362f1940c29b74aadd8393ab491dee478ba6c8bb68b2_prof);

    }

    public function getTemplateName()
    {
        return "pkflibrary/book/editBook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  594 => 231,  588 => 228,  584 => 227,  575 => 221,  569 => 218,  564 => 216,  556 => 211,  552 => 210,  546 => 207,  542 => 206,  536 => 203,  532 => 202,  523 => 196,  519 => 195,  513 => 192,  509 => 191,  504 => 189,  500 => 188,  492 => 183,  488 => 182,  484 => 181,  478 => 178,  474 => 177,  470 => 176,  465 => 174,  461 => 173,  457 => 172,  449 => 167,  445 => 166,  441 => 165,  435 => 162,  431 => 161,  427 => 160,  422 => 158,  418 => 157,  414 => 156,  406 => 151,  402 => 149,  393 => 147,  389 => 146,  383 => 142,  374 => 140,  370 => 139,  362 => 134,  358 => 133,  354 => 132,  349 => 130,  345 => 129,  341 => 128,  333 => 123,  329 => 122,  323 => 119,  319 => 118,  314 => 116,  310 => 115,  302 => 110,  298 => 109,  294 => 108,  288 => 105,  284 => 104,  280 => 103,  275 => 101,  271 => 100,  267 => 99,  259 => 94,  255 => 93,  249 => 90,  245 => 89,  240 => 87,  236 => 86,  228 => 81,  224 => 80,  218 => 77,  214 => 76,  209 => 74,  205 => 73,  200 => 71,  190 => 63,  181 => 62,  162 => 58,  150 => 54,  141 => 53,  125 => 46,  119 => 43,  113 => 40,  104 => 34,  98 => 31,  92 => 27,  83 => 21,  77 => 18,  71 => 15,  65 => 11,  63 => 10,  58 => 8,  52 => 4,  43 => 3,  11 => 1,);
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
        <ul class=\"nav navbar-nav navbar-right\" style=\"font-weight:bold\">
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
           <a href=\"{{ path('fos_user_security_logout') }}\" style=\"font-family:calibri\"><i class=\"fa fa-sign-out\"></i> Logout</a>
       </li>
   </ul>
</div>
<!-- /.navbar-collapse -->
{% endblock %}

{% block status %}
    <li><a class=\"active\" href=\"#\" style=\"color:blue\">Book Modification</a>
    </li>
{% endblock %}

{% block left_menu %}             
{% endblock %}


{% block body %}
<div class=\"row\">
    <div class=\"panel panel-default\" style=\"margin:auto; width:67%\">
        <div class=\"panel-heading\">
            <h3 style=\"text-align:center; margin-bottom:20px;\" ><i class=\" fa fa-book \"></i> Book Registration</h3>
        </div>                       
        <div class=\"panel-body\"> 
            <p style=\"margin-left:2.2%; margin-top:10px; font-family:calibri; color:blue; font-style:italic\"> Note: All fields label ending with * are compulsory! </p>
            <div>
            {{form_start(form, {'novalidate':'novalidate'})}}
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
            </div>
           
        </div>
    </div>
</div>


{% endblock %}", "pkflibrary/book/editBook.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\pkflibrary\\book\\editBook.html.twig");
    }
}
