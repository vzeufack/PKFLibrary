<?php

/* @User/Resetting/request_content.html.twig */
class __TwigTemplate_d63f6edcc4345e763b4028daca606348af9afb5baaad45fc641a7266b92e41b4 extends Twig_Template
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
        $__internal_ecf0bb3a260b618f4d3ad5f3b7c2659f6e9dd36a5329de44db1ae1cd1ab8ed41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf0bb3a260b618f4d3ad5f3b7c2659f6e9dd36a5329de44db1ae1cd1ab8ed41->enter($__internal_ecf0bb3a260b618f4d3ad5f3b7c2659f6e9dd36a5329de44db1ae1cd1ab8ed41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/request_content.html.twig"));

        $__internal_10ece0a28ebb619936bf7cbf4094e2ee15d23f960fba14ec8a0a048d3b02a13f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ece0a28ebb619936bf7cbf4094e2ee15d23f960fba14ec8a0a048d3b02a13f->enter($__internal_10ece0a28ebb619936bf7cbf4094e2ee15d23f960fba14ec8a0a048d3b02a13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_ecf0bb3a260b618f4d3ad5f3b7c2659f6e9dd36a5329de44db1ae1cd1ab8ed41->leave($__internal_ecf0bb3a260b618f4d3ad5f3b7c2659f6e9dd36a5329de44db1ae1cd1ab8ed41_prof);

        
        $__internal_10ece0a28ebb619936bf7cbf4094e2ee15d23f960fba14ec8a0a048d3b02a13f->leave($__internal_10ece0a28ebb619936bf7cbf4094e2ee15d23f960fba14ec8a0a048d3b02a13f_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
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

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "@User/Resetting/request_content.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle\\Resources\\Views\\Resetting\\request_content.html.twig");
    }
}
