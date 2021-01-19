<?php

/* pkflibrary/user/addUser.html.twig */
class __TwigTemplate_858940c27dd18071473d8b5c6f92427356b4800d0278d5e9c23742af82876e4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("pkflibrary/base.html.twig", "pkflibrary/user/addUser.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'status' => array($this, 'block_status'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "pkflibrary/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_005fcb3ebd4e212456bbc7a7a00de211ccd14b69200f4d0263e94ac9f62292f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_005fcb3ebd4e212456bbc7a7a00de211ccd14b69200f4d0263e94ac9f62292f6->enter($__internal_005fcb3ebd4e212456bbc7a7a00de211ccd14b69200f4d0263e94ac9f62292f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/user/addUser.html.twig"));

        $__internal_ad0bf8abafe7aabbd5fc93424818ffc3b3b1516ec7b069cb6a6288d643fb4a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0bf8abafe7aabbd5fc93424818ffc3b3b1516ec7b069cb6a6288d643fb4a15->enter($__internal_ad0bf8abafe7aabbd5fc93424818ffc3b3b1516ec7b069cb6a6288d643fb4a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pkflibrary/user/addUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_005fcb3ebd4e212456bbc7a7a00de211ccd14b69200f4d0263e94ac9f62292f6->leave($__internal_005fcb3ebd4e212456bbc7a7a00de211ccd14b69200f4d0263e94ac9f62292f6_prof);

        
        $__internal_ad0bf8abafe7aabbd5fc93424818ffc3b3b1516ec7b069cb6a6288d643fb4a15->leave($__internal_ad0bf8abafe7aabbd5fc93424818ffc3b3b1516ec7b069cb6a6288d643fb4a15_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_763196329e56117314cb3892eccabc3477ca902921a66be84ce6ded2caec449a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_763196329e56117314cb3892eccabc3477ca902921a66be84ce6ded2caec449a->enter($__internal_763196329e56117314cb3892eccabc3477ca902921a66be84ce6ded2caec449a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6dcd057780d817f69dd90daf73bd00c814630ebd73b27231ff8c8cbe760686f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dcd057780d817f69dd90daf73bd00c814630ebd73b27231ff8c8cbe760686f3->enter($__internal_6dcd057780d817f69dd90daf73bd00c814630ebd73b27231ff8c8cbe760686f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav navbar-right\" style=\"font-weight:bold\">
            <li>
                <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manageBorrows");
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
        echo "\"><i class=\"fa fa-sign-out\"></i> Logout</a>
        </li>

 </ul>
</div>
<!-- /.navbar-collapse -->
";
        
        $__internal_6dcd057780d817f69dd90daf73bd00c814630ebd73b27231ff8c8cbe760686f3->leave($__internal_6dcd057780d817f69dd90daf73bd00c814630ebd73b27231ff8c8cbe760686f3_prof);

        
        $__internal_763196329e56117314cb3892eccabc3477ca902921a66be84ce6ded2caec449a->leave($__internal_763196329e56117314cb3892eccabc3477ca902921a66be84ce6ded2caec449a_prof);

    }

    // line 54
    public function block_status($context, array $blocks = array())
    {
        $__internal_2ead579a05831947eb67f78d9b400316bdcc9e1a7bb6d344649da5d9193b58ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ead579a05831947eb67f78d9b400316bdcc9e1a7bb6d344649da5d9193b58ff->enter($__internal_2ead579a05831947eb67f78d9b400316bdcc9e1a7bb6d344649da5d9193b58ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        $__internal_1fd1b3c912486e6b9528dfb341b1109847e8d1e7766b8c3859c17792c85e3d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd1b3c912486e6b9528dfb341b1109847e8d1e7766b8c3859c17792c85e3d97->enter($__internal_1fd1b3c912486e6b9528dfb341b1109847e8d1e7766b8c3859c17792c85e3d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "status"));

        // line 55
        echo "    <li><a class=\"active\" href=\"#\" style=\"color:black\">Management / User Management / Add user </a>
    </li>
";
        
        $__internal_1fd1b3c912486e6b9528dfb341b1109847e8d1e7766b8c3859c17792c85e3d97->leave($__internal_1fd1b3c912486e6b9528dfb341b1109847e8d1e7766b8c3859c17792c85e3d97_prof);

        
        $__internal_2ead579a05831947eb67f78d9b400316bdcc9e1a7bb6d344649da5d9193b58ff->leave($__internal_2ead579a05831947eb67f78d9b400316bdcc9e1a7bb6d344649da5d9193b58ff_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbcc15fa0b8de48080888b1dba830ce1cfc3765b8bda176087faaaaba63b8a60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbcc15fa0b8de48080888b1dba830ce1cfc3765b8bda176087faaaaba63b8a60->enter($__internal_bbcc15fa0b8de48080888b1dba830ce1cfc3765b8bda176087faaaaba63b8a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3f87cce9cf0b4ea82c1a76e9b91b1a0ae6ae64b65fb5c1bd82916b0bc796cb00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f87cce9cf0b4ea82c1a76e9b91b1a0ae6ae64b65fb5c1bd82916b0bc796cb00->enter($__internal_3f87cce9cf0b4ea82c1a76e9b91b1a0ae6ae64b65fb5c1bd82916b0bc796cb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 60
        echo "  <div class=\"panel panel-default\" style=\"margin:auto; width:60%;\">
    <div class=\"panel-heading\">
      <h3 style=\"text-align:center\">Create Account</h3>
    </div>

    ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

    <p style=\"margin-left:2.2%; margin-top:10px; font-family:calibri; color:blue; font-style:italic\"> Note: All fields label ending with * are compulsory! </p>
    
    <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
      <th>";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'label');
        echo "</th>
      <th> ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "familyName", array()), 'label');
        echo " * </th>
      <tr>
        <td>";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'widget');
        echo "</td>
        <td>";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "familyName", array()), 'widget');
        echo "</td>
      </tr>
      <tr>
        <td></td>
        <td class=\"error_right\">";
        // line 78
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "familyName", array()), 'errors')), "html", null, true);
        echo "</td>
      </tr>
    
      <th>";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "studentID", array()), 'label');
        echo "</th>
      <th> ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo " * </th>
      <tr>
        <td>";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "studentID", array()), 'widget');
        echo "</td>
        <td>";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "</td>
      </tr>
      <tr>
        <td class=\"error_left\">";
        // line 88
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "studentID", array()), 'errors')), "html", null, true);
        echo "</td>
        <td class=\"error_right\">";
        // line 89
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors')), "html", null, true);
        echo "</td>
      </tr>
    
      <th><i class=\"fa fa-key fa-fw\"></i></span>";
        // line 92
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label');
        echo " *</th>
      <th> ";
        // line 93
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label');
        echo " * </th>
      <tr>
        <td>";
        // line 95
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "</td>
        <td>";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "</td>
      </tr>
      <tr>
        <td class=\"error_left\">";
        // line 99
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors')), "html", null, true);
        echo "</td>
        <td class=\"error-right\">";
        // line 100
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors')), "html", null, true);
        echo "</td>
      </tr>

      <th><i class=\"fa fa-envelope-o fa-fw\"></i> ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo " *</th>
      <th> <i class=\"fa fa-phone\"></i> ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phoneNumber", array()), 'label');
        echo " * </th>
      <tr>
        <td>";
        // line 106
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</td>
        <td>";
        // line 107
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phoneNumber", array()), 'widget');
        echo "</td>
      </tr>
      <tr>
        <td class=\"error_left\">";
        // line 110
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors')), "html", null, true);
        echo " </td>
        <td class=\"error_right\">
        <ul style=\"list-style:none\">
         ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phoneNumber", array()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 114
            echo "          <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "</li>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "        </ul>
        </td>
      </tr>

      <th> ";
        // line 120
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'label');
        echo " *</th>
      <th> <i class=\"fa fa-user fa-fw\"></i>";
        // line 121
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'label', array("label" => "Profile Picture"));
        echo " * </th>
      <tr>
        <td>";
        // line 123
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget');
        echo "</td>
        <td>";
        // line 124
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), "file", array()), 'widget');
        echo "</td>
      </tr>
      <tr>
        <td class=\"error_left\">";
        // line 127
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'errors')), "html", null, true);
        echo "</td>
        <td class=\"error_right\">";
        // line 128
        echo twig_escape_filter($this->env, strip_tags($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), "file", array()), 'errors')), "html", null, true);
        echo "</td>
      </tr>
    </table>       
    
    <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
      <th>";
        // line 133
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userCategory", array()), 'label');
        echo " *</th>
      <th> ";
        // line 134
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "batch", array()), 'label');
        echo " </th>
      <th> ";
        // line 135
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "specialty", array()), 'label');
        echo " </th>
      <tr>
        <td>";
        // line 137
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userCategory", array()), 'widget');
        echo "</td>
        <td>";
        // line 138
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "batch", array()), 'widget');
        echo "</td>
        <td>";
        // line 139
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "specialty", array()), 'widget');
        echo "</td>
      </tr>
    </table>  

    <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate; margin-top:15px\"> 
      <tr>
        <td><a href=\"";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminUserEnableList", array("page" => 1));
        echo "\" class=\"btn btn-default\" style=\"width:100%; margin-bottom:20px \"> cancel </a></td>
        <td><input class=\"form-control\" style=\"font-weight:bold; width:100%; color:white; background-color:#20B2AA; margin-bottom:20px\" type=\"submit\" value=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Submit"), "html", null, true);
        echo "\" /></td>
      </tr>
    </table> 
    <div class=\"input-group\" style=\"\">
    </div>
  </div>
  <script type=\"text/javascript\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
  <script>
    \$(document).ready(function(event) {
        \$('#app_user_registration_userCategory').change(function(e){

          if ( ! (\$('#app_user_registration_userCategory').val() === \"Undergraduate\" )){
             document.getElementById(\"app_user_registration_studentID\").required = false;
              document.getElementById(\"app_user_registration_batch\").required = false;
          }
          else{
            document.getElementById(\"app_user_registration_studentID\").required = true;
            document.getElementById(\"app_user_registration_batch\").required = true;
          }
         }).change();
    });
  </script>
  ";
        // line 168
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_3f87cce9cf0b4ea82c1a76e9b91b1a0ae6ae64b65fb5c1bd82916b0bc796cb00->leave($__internal_3f87cce9cf0b4ea82c1a76e9b91b1a0ae6ae64b65fb5c1bd82916b0bc796cb00_prof);

        
        $__internal_bbcc15fa0b8de48080888b1dba830ce1cfc3765b8bda176087faaaaba63b8a60->leave($__internal_bbcc15fa0b8de48080888b1dba830ce1cfc3765b8bda176087faaaaba63b8a60_prof);

    }

    public function getTemplateName()
    {
        return "pkflibrary/user/addUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 168,  388 => 152,  379 => 146,  375 => 145,  366 => 139,  362 => 138,  358 => 137,  353 => 135,  349 => 134,  345 => 133,  337 => 128,  333 => 127,  327 => 124,  323 => 123,  318 => 121,  314 => 120,  308 => 116,  299 => 114,  295 => 113,  289 => 110,  283 => 107,  279 => 106,  274 => 104,  270 => 103,  264 => 100,  260 => 99,  254 => 96,  250 => 95,  245 => 93,  241 => 92,  235 => 89,  231 => 88,  225 => 85,  221 => 84,  216 => 82,  212 => 81,  206 => 78,  199 => 74,  195 => 73,  190 => 71,  186 => 70,  178 => 65,  171 => 60,  162 => 59,  150 => 55,  141 => 54,  124 => 46,  118 => 43,  112 => 40,  103 => 34,  97 => 31,  91 => 27,  83 => 22,  77 => 19,  71 => 16,  65 => 12,  63 => 11,  58 => 9,  51 => 4,  42 => 3,  11 => 1,);
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

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav navbar-right\" style=\"font-weight:bold\">
            <li>
                <a href=\"{{ path('homepage',{'page': page}) }}\"><i class=\"fa fa-home\"></i> Home</a>
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
                    <a href=\"{{ path('manageBorrows') }}\" style=\"font-family:calibri\"> <i class=\"fa fa-book\"></i> Borrow Reports </a>
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
    <li><a class=\"active\" href=\"#\" style=\"color:black\">Management / User Management / Add user </a>
    </li>
{% endblock %}

{% block body %}
  <div class=\"panel panel-default\" style=\"margin:auto; width:60%;\">
    <div class=\"panel-heading\">
      <h3 style=\"text-align:center\">Create Account</h3>
    </div>

    {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}

    <p style=\"margin-left:2.2%; margin-top:10px; font-family:calibri; color:blue; font-style:italic\"> Note: All fields label ending with * are compulsory! </p>
    
    <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
      <th>{{ form_label(form.firstName) }}</th>
      <th> {{ form_label(form.familyName) }} * </th>
      <tr>
        <td>{{ form_widget(form.firstName) }}</td>
        <td>{{ form_widget(form.familyName) }}</td>
      </tr>
      <tr>
        <td></td>
        <td class=\"error_right\">{{ form_errors(form.familyName) | striptags }}</td>
      </tr>
    
      <th>{{ form_label(form.studentID) }}</th>
      <th> {{ form_label(form.username) }} * </th>
      <tr>
        <td>{{ form_widget(form.studentID) }}</td>
        <td>{{ form_widget(form.username) }}</td>
      </tr>
      <tr>
        <td class=\"error_left\">{{ form_errors(form.studentID) | striptags }}</td>
        <td class=\"error_right\">{{ form_errors(form.username) | striptags }}</td>
      </tr>
    
      <th><i class=\"fa fa-key fa-fw\"></i></span>{{ form_label(form.plainPassword.first) }} *</th>
      <th> {{ form_label(form.plainPassword.second) }} * </th>
      <tr>
        <td>{{ form_widget(form.plainPassword.first) }}</td>
        <td>{{ form_widget(form.plainPassword.second) }}</td>
      </tr>
      <tr>
        <td class=\"error_left\">{{ form_errors(form.plainPassword.first) | striptags }}</td>
        <td class=\"error-right\">{{ form_errors(form.plainPassword.second) | striptags }}</td>
      </tr>

      <th><i class=\"fa fa-envelope-o fa-fw\"></i> {{ form_label(form.email) }} *</th>
      <th> <i class=\"fa fa-phone\"></i> {{ form_label(form.phoneNumber) }} * </th>
      <tr>
        <td>{{ form_widget(form.email) }}</td>
        <td>{{ form_widget(form.phoneNumber) }}</td>
      </tr>
      <tr>
        <td class=\"error_left\">{{ form_errors(form.email) | striptags }} </td>
        <td class=\"error_right\">
        <ul style=\"list-style:none\">
         {% for error in form.phoneNumber.vars.errors %}
          <li>{{ error.message }}</li>
         {% endfor %}
        </ul>
        </td>
      </tr>

      <th> {{ form_label(form.address) }} *</th>
      <th> <i class=\"fa fa-user fa-fw\"></i>{{ form_label(form.image, 'Profile Picture') }} * </th>
      <tr>
        <td>{{ form_widget(form.address) }}</td>
        <td>{{ form_widget(form.image.file) }}</td>
      </tr>
      <tr>
        <td class=\"error_left\">{{ form_errors(form.address) | striptags }}</td>
        <td class=\"error_right\">{{ form_errors(form.image.file) | striptags }}</td>
      </tr>
    </table>       
    
    <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate\"> 
      <th>{{ form_label(form.userCategory) }} *</th>
      <th> {{ form_label(form.batch) }} </th>
      <th> {{ form_label(form.specialty) }} </th>
      <tr>
        <td>{{ form_widget(form.userCategory) }}</td>
        <td>{{form_widget(form.batch)}}</td>
        <td>{{form_widget(form.specialty)}}</td>
      </tr>
    </table>  

    <table width=\"100%\" style=\"border-spacing:15px 0px; border-collapse:separate; margin-top:15px\"> 
      <tr>
        <td><a href=\"{{ path('AdminUserEnableList', {'page':1}) }}\" class=\"btn btn-default\" style=\"width:100%; margin-bottom:20px \"> cancel </a></td>
        <td><input class=\"form-control\" style=\"font-weight:bold; width:100%; color:white; background-color:#20B2AA; margin-bottom:20px\" type=\"submit\" value=\"{{ 'Submit'|trans }}\" /></td>
      </tr>
    </table> 
    <div class=\"input-group\" style=\"\">
    </div>
  </div>
  <script type=\"text/javascript\" src=\"{{asset('assets/js/jquery.js')}}\"></script>
  <script>
    \$(document).ready(function(event) {
        \$('#app_user_registration_userCategory').change(function(e){

          if ( ! (\$('#app_user_registration_userCategory').val() === \"Undergraduate\" )){
             document.getElementById(\"app_user_registration_studentID\").required = false;
              document.getElementById(\"app_user_registration_batch\").required = false;
          }
          else{
            document.getElementById(\"app_user_registration_studentID\").required = true;
            document.getElementById(\"app_user_registration_batch\").required = true;
          }
         }).change();
    });
  </script>
  {{ form_end(form) }}
{% endblock %}", "pkflibrary/user/addUser.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\app\\Resources\\views\\pkflibrary\\user\\addUser.html.twig");
    }
}
