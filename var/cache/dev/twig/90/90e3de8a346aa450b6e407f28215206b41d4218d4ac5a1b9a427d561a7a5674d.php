<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_32ea313636933ce3b7adfbac1385c20229a941ca14a30931e38116954e9543df extends Twig_Template
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
        $__internal_93c81aaa4c3f3c3429393df22c65a429266b72cc29d3870e7e29ec643d87e8a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c81aaa4c3f3c3429393df22c65a429266b72cc29d3870e7e29ec643d87e8a7->enter($__internal_93c81aaa4c3f3c3429393df22c65a429266b72cc29d3870e7e29ec643d87e8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_fb8067e371c836c280c474c0dd3ec6f0338f9ce524aae27649aafffb19ae5c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8067e371c836c280c474c0dd3ec6f0338f9ce524aae27649aafffb19ae5c0f->enter($__internal_fb8067e371c836c280c474c0dd3ec6f0338f9ce524aae27649aafffb19ae5c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_93c81aaa4c3f3c3429393df22c65a429266b72cc29d3870e7e29ec643d87e8a7->leave($__internal_93c81aaa4c3f3c3429393df22c65a429266b72cc29d3870e7e29ec643d87e8a7_prof);

        
        $__internal_fb8067e371c836c280c474c0dd3ec6f0338f9ce524aae27649aafffb19ae5c0f->leave($__internal_fb8067e371c836c280c474c0dd3ec6f0338f9ce524aae27649aafffb19ae5c0f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
