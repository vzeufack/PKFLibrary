<?php

/* UserBundle:Group:show.html.twig */
class __TwigTemplate_ff37dc91b41942bbc27ef3b4bff2f836f8a300781a9475bf4f34bac4f29113a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_500ae1b5232dfed339f8a1d11bc61fcfbaff327e469d516a9185098b57d8e348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_500ae1b5232dfed339f8a1d11bc61fcfbaff327e469d516a9185098b57d8e348->enter($__internal_500ae1b5232dfed339f8a1d11bc61fcfbaff327e469d516a9185098b57d8e348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show.html.twig"));

        $__internal_675ef1a433ba429ce68b31d59628fc78ae2948a187296039c44cc55be3dce477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_675ef1a433ba429ce68b31d59628fc78ae2948a187296039c44cc55be3dce477->enter($__internal_675ef1a433ba429ce68b31d59628fc78ae2948a187296039c44cc55be3dce477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_500ae1b5232dfed339f8a1d11bc61fcfbaff327e469d516a9185098b57d8e348->leave($__internal_500ae1b5232dfed339f8a1d11bc61fcfbaff327e469d516a9185098b57d8e348_prof);

        
        $__internal_675ef1a433ba429ce68b31d59628fc78ae2948a187296039c44cc55be3dce477->leave($__internal_675ef1a433ba429ce68b31d59628fc78ae2948a187296039c44cc55be3dce477_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd293cbd22483f8b873765580113c87db4e0569f70f280361757e804966ecd98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd293cbd22483f8b873765580113c87db4e0569f70f280361757e804966ecd98->enter($__internal_dd293cbd22483f8b873765580113c87db4e0569f70f280361757e804966ecd98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a52b3ba7fa063e27d250b1a53ef51418546b2c8f764b4a9b74c0b343a4d3ed44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a52b3ba7fa063e27d250b1a53ef51418546b2c8f764b4a9b74c0b343a4d3ed44->enter($__internal_a52b3ba7fa063e27d250b1a53ef51418546b2c8f764b4a9b74c0b343a4d3ed44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "UserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_a52b3ba7fa063e27d250b1a53ef51418546b2c8f764b4a9b74c0b343a4d3ed44->leave($__internal_a52b3ba7fa063e27d250b1a53ef51418546b2c8f764b4a9b74c0b343a4d3ed44_prof);

        
        $__internal_dd293cbd22483f8b873765580113c87db4e0569f70f280361757e804966ecd98->leave($__internal_dd293cbd22483f8b873765580113c87db4e0569f70f280361757e804966ecd98_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "UserBundle:Group:show.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle/Resources/views/Group/show.html.twig");
    }
}
