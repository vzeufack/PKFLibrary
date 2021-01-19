<?php

/* @User/Profile/edit.html.twig */
class __TwigTemplate_37c5c0c16b24200e08c16c96a35483e13a4802f0f3f5b3793a0deea03470f06a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@User/Profile/edit.html.twig", 1);
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
        $__internal_ef5459d7107170523256ce55de369f7278bd4cdfe04122817641bb6cb60833e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef5459d7107170523256ce55de369f7278bd4cdfe04122817641bb6cb60833e5->enter($__internal_ef5459d7107170523256ce55de369f7278bd4cdfe04122817641bb6cb60833e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/edit.html.twig"));

        $__internal_de5ca2fbcc4a745a8ccd981437b026dbe95cf5c84985276e034e225354a47956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5ca2fbcc4a745a8ccd981437b026dbe95cf5c84985276e034e225354a47956->enter($__internal_de5ca2fbcc4a745a8ccd981437b026dbe95cf5c84985276e034e225354a47956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef5459d7107170523256ce55de369f7278bd4cdfe04122817641bb6cb60833e5->leave($__internal_ef5459d7107170523256ce55de369f7278bd4cdfe04122817641bb6cb60833e5_prof);

        
        $__internal_de5ca2fbcc4a745a8ccd981437b026dbe95cf5c84985276e034e225354a47956->leave($__internal_de5ca2fbcc4a745a8ccd981437b026dbe95cf5c84985276e034e225354a47956_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fcc4dde5192b7ad06dd958d405812542ba75dfb78a12d7fdbc691d58604f2965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcc4dde5192b7ad06dd958d405812542ba75dfb78a12d7fdbc691d58604f2965->enter($__internal_fcc4dde5192b7ad06dd958d405812542ba75dfb78a12d7fdbc691d58604f2965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ba5773d3ea68d4ef2e8aa0a84b74a84f1a3f9ca8aa6f8f433439135395a93d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba5773d3ea68d4ef2e8aa0a84b74a84f1a3f9ca8aa6f8f433439135395a93d83->enter($__internal_ba5773d3ea68d4ef2e8aa0a84b74a84f1a3f9ca8aa6f8f433439135395a93d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@User/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_ba5773d3ea68d4ef2e8aa0a84b74a84f1a3f9ca8aa6f8f433439135395a93d83->leave($__internal_ba5773d3ea68d4ef2e8aa0a84b74a84f1a3f9ca8aa6f8f433439135395a93d83_prof);

        
        $__internal_fcc4dde5192b7ad06dd958d405812542ba75dfb78a12d7fdbc691d58604f2965->leave($__internal_fcc4dde5192b7ad06dd958d405812542ba75dfb78a12d7fdbc691d58604f2965_prof);

    }

    public function getTemplateName()
    {
        return "@User/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@User/Profile/edit.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle\\Resources\\Views\\Profile\\edit.html.twig");
    }
}
