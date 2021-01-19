<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_06adb6e2e06ada30907c7f4d844bb00bc001f7aecad3b0954d2101b88e9e3524 extends Twig_Template
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
        $__internal_e1e4e6548accd96401044383c103c80cd5ac3845e1d154424645cdf644694aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1e4e6548accd96401044383c103c80cd5ac3845e1d154424645cdf644694aeb->enter($__internal_e1e4e6548accd96401044383c103c80cd5ac3845e1d154424645cdf644694aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_b5d3f5133d3f79481135528bbc6a0ca736a333a42637b987e75b985f388cca8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d3f5133d3f79481135528bbc6a0ca736a333a42637b987e75b985f388cca8d->enter($__internal_b5d3f5133d3f79481135528bbc6a0ca736a333a42637b987e75b985f388cca8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e1e4e6548accd96401044383c103c80cd5ac3845e1d154424645cdf644694aeb->leave($__internal_e1e4e6548accd96401044383c103c80cd5ac3845e1d154424645cdf644694aeb_prof);

        
        $__internal_b5d3f5133d3f79481135528bbc6a0ca736a333a42637b987e75b985f388cca8d->leave($__internal_b5d3f5133d3f79481135528bbc6a0ca736a333a42637b987e75b985f388cca8d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
