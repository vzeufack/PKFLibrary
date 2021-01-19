<?php

/* @User/Security/login_content.html.twig */
class __TwigTemplate_a6c9b8a86c9019ccf501e2de299ee50516051cb609b1824418cb22a4b80b5d52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e2d14886a94a7177539ffdd4c7aa8c1073988fcbda8a208e39d0bac64dfad66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e2d14886a94a7177539ffdd4c7aa8c1073988fcbda8a208e39d0bac64dfad66->enter($__internal_1e2d14886a94a7177539ffdd4c7aa8c1073988fcbda8a208e39d0bac64dfad66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/login_content.html.twig"));

        $__internal_297f17082a14cda3127aa455077591f9577c49558e3ddf29c3e2d1f87098458a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_297f17082a14cda3127aa455077591f9577c49558e3ddf29c3e2d1f87098458a->enter($__internal_297f17082a14cda3127aa455077591f9577c49558e3ddf29c3e2d1f87098458a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/login_content.html.twig"));

        // line 2
        echo "
    

    <div class=\"row\" style=\"margin-top:50px\">
        <div class=\"col-md-6\" style=\"margin-left:5%\">
            <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"3\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"4\"></li>
                </ol>
 
                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\">
                    <div class=\"item active\">
                        <img class=\"img-responsive\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Library Images/egypt_02.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"item\">
                        <img class=\"img-responsive\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Library Images/egypt_05.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"item\">
                        <img class=\"img-responsive\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Library Images/egypt_06.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"item\">
                        <img class=\"img-responsive\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Library Images/egypt_07.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"item\">
                        <img class=\"img-responsive\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Library Images/egypt_01.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </div>

                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\"></span>
                </a>
                <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\"></span>
                </a>
            </div>
        </div>

        <div class=\"col-md-5\" style=\"\">
            <div class=\"panel panel-default\" style=\"margin:auto; width:80%; height:345px\">
                <div class=\"panel-heading\">
                    <h2 style=\"text-align:center\">Login</h2>
                </div>                       
                <div class=\"panel-body\"> 
                 <form action=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    ";
        // line 53
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 54
            echo "                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                    ";
        }
        // line 56
        echo "
                    <label for=\"username\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" style=\"margin-bottom:25px\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

                    <label for=\"password\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"password\" class=\"form-control\" id=\"password\" style=\"margin-bottom:25px\" name=\"_password\" required=\"required\" />  
                    <input type=\"submit\" id=\"_submit\" class=\"form-control\" style=\"margin-bottom:25px; font-weight:bold; color:white ; background-color:#20B2AA; width:50%; float:right\" name=\"_submit\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign In", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    <a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" style=\"float:left; font-family:calibri; color:blue; margin-top:3%\" > Not Yet Registered? </a>
                </form>                   
            </div>                        
        </div>
        ";
        // line 67
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 68
            echo "           <div style=\"text-align:center; color:red; font-weight:bold; font-height:20px; margin-top:10px\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 70
        echo "    </div>
</div>";
        
        $__internal_1e2d14886a94a7177539ffdd4c7aa8c1073988fcbda8a208e39d0bac64dfad66->leave($__internal_1e2d14886a94a7177539ffdd4c7aa8c1073988fcbda8a208e39d0bac64dfad66_prof);

        
        $__internal_297f17082a14cda3127aa455077591f9577c49558e3ddf29c3e2d1f87098458a->leave($__internal_297f17082a14cda3127aa455077591f9577c49558e3ddf29c3e2d1f87098458a_prof);

    }

    public function getTemplateName()
    {
        return "@User/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 70,  134 => 68,  132 => 67,  125 => 63,  121 => 62,  116 => 60,  111 => 58,  107 => 57,  104 => 56,  98 => 54,  96 => 53,  92 => 52,  69 => 32,  63 => 29,  57 => 26,  51 => 23,  45 => 20,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

    

    <div class=\"row\" style=\"margin-top:50px\">
        <div class=\"col-md-6\" style=\"margin-left:5%\">
            <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"3\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"4\"></li>
                </ol>
 
                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\">
                    <div class=\"item active\">
                        <img class=\"img-responsive\" src=\"{{ asset('Library Images/egypt_02.jpg') }}\" alt=\"\">
                    </div>
                    <div class=\"item\">
                        <img class=\"img-responsive\" src=\"{{ asset('Library Images/egypt_05.jpg') }}\" alt=\"\">
                    </div>
                    <div class=\"item\">
                        <img class=\"img-responsive\" src=\"{{ asset('Library Images/egypt_06.jpg') }}\" alt=\"\">
                    </div>
                    <div class=\"item\">
                        <img class=\"img-responsive\" src=\"{{ asset('Library Images/egypt_07.jpg') }}\" alt=\"\">
                    </div>
                    <div class=\"item\">
                        <img class=\"img-responsive\" src=\"{{ asset('Library Images/egypt_01.jpg') }}\" alt=\"\">
                    </div>
                </div>

                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\"></span>
                </a>
                <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\"></span>
                </a>
            </div>
        </div>

        <div class=\"col-md-5\" style=\"\">
            <div class=\"panel panel-default\" style=\"margin:auto; width:80%; height:345px\">
                <div class=\"panel-heading\">
                    <h2 style=\"text-align:center\">Login</h2>
                </div>                       
                <div class=\"panel-body\"> 
                 <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                    {% if csrf_token %}
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                    {% endif %}

                    <label for=\"username\">{{ 'Username'|trans }}</label>
                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" style=\"margin-bottom:25px\" value=\"{{ last_username }}\" required=\"required\" />

                    <label for=\"password\">{{ 'Password'|trans }}</label>
                    <input type=\"password\" class=\"form-control\" id=\"password\" style=\"margin-bottom:25px\" name=\"_password\" required=\"required\" />  
                    <input type=\"submit\" id=\"_submit\" class=\"form-control\" style=\"margin-bottom:25px; font-weight:bold; color:white ; background-color:#20B2AA; width:50%; float:right\" name=\"_submit\" value=\"{{ 'Sign In'|trans }}\" />
                    <a href=\"{{ path('fos_user_registration_register') }}\" style=\"float:left; font-family:calibri; color:blue; margin-top:3%\" > Not Yet Registered? </a>
                </form>                   
            </div>                        
        </div>
        {% if error %}
           <div style=\"text-align:center; color:red; font-weight:bold; font-height:20px; margin-top:10px\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}
    </div>
</div>", "@User/Security/login_content.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle\\Resources\\Views\\Security\\login_content.html.twig");
    }
}
