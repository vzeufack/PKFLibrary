<?php

/* UserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_c8ca60751458264e7ceb8d791d352cb8597fd89fe62a2770285a8de2321e9a39 extends Twig_Template
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
        $__internal_2fcf536b77e83bf7e52ee8d57409d8d2d42d84933271e5913402a7cf67f4ee48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fcf536b77e83bf7e52ee8d57409d8d2d42d84933271e5913402a7cf67f4ee48->enter($__internal_2fcf536b77e83bf7e52ee8d57409d8d2d42d84933271e5913402a7cf67f4ee48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request_content.html.twig"));

        $__internal_9d08712871011b860de775a6765548784553a9c64795e67a31aa51dce542bb32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d08712871011b860de775a6765548784553a9c64795e67a31aa51dce542bb32->enter($__internal_9d08712871011b860de775a6765548784553a9c64795e67a31aa51dce542bb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request_content.html.twig"));

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
        
        $__internal_2fcf536b77e83bf7e52ee8d57409d8d2d42d84933271e5913402a7cf67f4ee48->leave($__internal_2fcf536b77e83bf7e52ee8d57409d8d2d42d84933271e5913402a7cf67f4ee48_prof);

        
        $__internal_9d08712871011b860de775a6765548784553a9c64795e67a31aa51dce542bb32->leave($__internal_9d08712871011b860de775a6765548784553a9c64795e67a31aa51dce542bb32_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:request_content.html.twig";
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
", "UserBundle:Resetting:request_content.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle/Resources/views/Resetting/request_content.html.twig");
    }
}
