<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_0bd6d88dad515a82c5c709205158360878d4233cca812b4ca40bb96bbe6e0c8a extends Twig_Template
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
        $__internal_caf81cf2068c049d169199371040496ecc8d383d9687f7f2a1649743f44687fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caf81cf2068c049d169199371040496ecc8d383d9687f7f2a1649743f44687fe->enter($__internal_caf81cf2068c049d169199371040496ecc8d383d9687f7f2a1649743f44687fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_4bd74f0f9b1ad89036de2671d6e2f9f739be799911f62b2fdfcc1860a5170992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd74f0f9b1ad89036de2671d6e2f9f739be799911f62b2fdfcc1860a5170992->enter($__internal_4bd74f0f9b1ad89036de2671d6e2f9f739be799911f62b2fdfcc1860a5170992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_caf81cf2068c049d169199371040496ecc8d383d9687f7f2a1649743f44687fe->leave($__internal_caf81cf2068c049d169199371040496ecc8d383d9687f7f2a1649743f44687fe_prof);

        
        $__internal_4bd74f0f9b1ad89036de2671d6e2f9f739be799911f62b2fdfcc1860a5170992->leave($__internal_4bd74f0f9b1ad89036de2671d6e2f9f739be799911f62b2fdfcc1860a5170992_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
