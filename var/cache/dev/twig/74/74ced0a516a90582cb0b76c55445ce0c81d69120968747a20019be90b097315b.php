<?php

/* UserBundle:Group:edit.html.twig */
class __TwigTemplate_f30f0e533f5dbafd7d03256019a9da632e1bd1e96d41b3d1795eae9cb8824ade extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:Group:edit.html.twig", 1);
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
        $__internal_e70edb7578348728a7968332f883b56652a3813350e91cb0ef28de91b28636dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e70edb7578348728a7968332f883b56652a3813350e91cb0ef28de91b28636dc->enter($__internal_e70edb7578348728a7968332f883b56652a3813350e91cb0ef28de91b28636dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:edit.html.twig"));

        $__internal_d1c16b0dbeb7c93aaa5dfeaebb85b557bf9b6e7e690dd93b38db68f94e9bc15b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c16b0dbeb7c93aaa5dfeaebb85b557bf9b6e7e690dd93b38db68f94e9bc15b->enter($__internal_d1c16b0dbeb7c93aaa5dfeaebb85b557bf9b6e7e690dd93b38db68f94e9bc15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e70edb7578348728a7968332f883b56652a3813350e91cb0ef28de91b28636dc->leave($__internal_e70edb7578348728a7968332f883b56652a3813350e91cb0ef28de91b28636dc_prof);

        
        $__internal_d1c16b0dbeb7c93aaa5dfeaebb85b557bf9b6e7e690dd93b38db68f94e9bc15b->leave($__internal_d1c16b0dbeb7c93aaa5dfeaebb85b557bf9b6e7e690dd93b38db68f94e9bc15b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_78f4fb87eddd889a0240b0f286246aa81db0c403060dc125b92375caa4d2da91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78f4fb87eddd889a0240b0f286246aa81db0c403060dc125b92375caa4d2da91->enter($__internal_78f4fb87eddd889a0240b0f286246aa81db0c403060dc125b92375caa4d2da91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8c16dc92ab7774f5fe7ace70e64b4dc2b60b6a9603cf05c87385e800c82be63e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c16dc92ab7774f5fe7ace70e64b4dc2b60b6a9603cf05c87385e800c82be63e->enter($__internal_8c16dc92ab7774f5fe7ace70e64b4dc2b60b6a9603cf05c87385e800c82be63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "UserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_8c16dc92ab7774f5fe7ace70e64b4dc2b60b6a9603cf05c87385e800c82be63e->leave($__internal_8c16dc92ab7774f5fe7ace70e64b4dc2b60b6a9603cf05c87385e800c82be63e_prof);

        
        $__internal_78f4fb87eddd889a0240b0f286246aa81db0c403060dc125b92375caa4d2da91->leave($__internal_78f4fb87eddd889a0240b0f286246aa81db0c403060dc125b92375caa4d2da91_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "UserBundle:Group:edit.html.twig", "C:\\xampp\\htdocs\\PKFLibrary\\src\\UserBundle/Resources/views/Group/edit.html.twig");
    }
}
