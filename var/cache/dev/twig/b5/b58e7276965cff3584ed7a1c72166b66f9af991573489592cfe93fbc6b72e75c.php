<?php

/* @User/Profile/show.html.twig */
class __TwigTemplate_754545969c7ef920be20955947d300f508972ce5dfc6d97c2e531bfa6daaa5a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@User/Profile/show.html.twig", 1);
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
        $__internal_80333d9da9580aded3df447e828c2443d18150a90c15000b489bc98ed3baa0e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80333d9da9580aded3df447e828c2443d18150a90c15000b489bc98ed3baa0e1->enter($__internal_80333d9da9580aded3df447e828c2443d18150a90c15000b489bc98ed3baa0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/show.html.twig"));

        $__internal_313a930e2bf87bd3d52716ad7d128b392c2a4c19ed43156749e45cda67fbd382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_313a930e2bf87bd3d52716ad7d128b392c2a4c19ed43156749e45cda67fbd382->enter($__internal_313a930e2bf87bd3d52716ad7d128b392c2a4c19ed43156749e45cda67fbd382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80333d9da9580aded3df447e828c2443d18150a90c15000b489bc98ed3baa0e1->leave($__internal_80333d9da9580aded3df447e828c2443d18150a90c15000b489bc98ed3baa0e1_prof);

        
        $__internal_313a930e2bf87bd3d52716ad7d128b392c2a4c19ed43156749e45cda67fbd382->leave($__internal_313a930e2bf87bd3d52716ad7d128b392c2a4c19ed43156749e45cda67fbd382_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f8d2111377d92351a77518c8f5b8fc327d9fceafc231ea47b13f45f5bf6cfba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8d2111377d92351a77518c8f5b8fc327d9fceafc231ea47b13f45f5bf6cfba1->enter($__internal_f8d2111377d92351a77518c8f5b8fc327d9fceafc231ea47b13f45f5bf6cfba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a21eb95e0b0cd8165375ab136ae0912156dff9cb1f51a12db98545faeb3ecda7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a21eb95e0b0cd8165375ab136ae0912156dff9cb1f51a12db98545faeb3ecda7->enter($__internal_a21eb95e0b0cd8165375ab136ae0912156dff9cb1f51a12db98545faeb3ecda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@User/Profile/show.html.twig", 4)->display($context);
        
        $__internal_a21eb95e0b0cd8165375ab136ae0912156dff9cb1f51a12db98545faeb3ecda7->leave($__internal_a21eb95e0b0cd8165375ab136ae0912156dff9cb1f51a12db98545faeb3ecda7_prof);

        
        $__internal_f8d2111377d92351a77518c8f5b8fc327d9fceafc231ea47b13f45f5bf6cfba1->leave($__internal_f8d2111377d92351a77518c8f5b8fc327d9fceafc231ea47b13f45f5bf6cfba1_prof);

    }

    public function getTemplateName()
    {
        return "@User/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@User/Profile/show.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle\\Resources\\Views\\Profile\\show.html.twig");
    }
}
