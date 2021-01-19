<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_a9bb67f680395640a419cde78637d9a28e362e30058b7c7dbe0f91b211c0cc55 extends Twig_Template
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
        $__internal_db2ce0d1a8eee06b18e6cb029f81f572142d2cf012ee7b7fb33d15b04d3f8e54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db2ce0d1a8eee06b18e6cb029f81f572142d2cf012ee7b7fb33d15b04d3f8e54->enter($__internal_db2ce0d1a8eee06b18e6cb029f81f572142d2cf012ee7b7fb33d15b04d3f8e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_f994f780cb994005aa64fffe78efa2a3ff8584cd8ffeacc8d7ddc4a3a7c0f33a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f994f780cb994005aa64fffe78efa2a3ff8584cd8ffeacc8d7ddc4a3a7c0f33a->enter($__internal_f994f780cb994005aa64fffe78efa2a3ff8584cd8ffeacc8d7ddc4a3a7c0f33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_db2ce0d1a8eee06b18e6cb029f81f572142d2cf012ee7b7fb33d15b04d3f8e54->leave($__internal_db2ce0d1a8eee06b18e6cb029f81f572142d2cf012ee7b7fb33d15b04d3f8e54_prof);

        
        $__internal_f994f780cb994005aa64fffe78efa2a3ff8584cd8ffeacc8d7ddc4a3a7c0f33a->leave($__internal_f994f780cb994005aa64fffe78efa2a3ff8584cd8ffeacc8d7ddc4a3a7c0f33a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
