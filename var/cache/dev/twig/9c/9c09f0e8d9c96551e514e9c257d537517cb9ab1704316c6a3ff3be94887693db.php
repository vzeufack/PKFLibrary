<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_3f1c896060ef55da5db64224707a08634991b0948d0e698673d877b0f2f37c3c extends Twig_Template
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
        $__internal_15340fe4cc539e440f1469f9703a842ddef25b7b7688c46dbbef8bc5634675d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15340fe4cc539e440f1469f9703a842ddef25b7b7688c46dbbef8bc5634675d7->enter($__internal_15340fe4cc539e440f1469f9703a842ddef25b7b7688c46dbbef8bc5634675d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_b36d0198650103ff84a7f5b4a2958737c96fadebfcd233dba288cb958bf03814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36d0198650103ff84a7f5b4a2958737c96fadebfcd233dba288cb958bf03814->enter($__internal_b36d0198650103ff84a7f5b4a2958737c96fadebfcd233dba288cb958bf03814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_15340fe4cc539e440f1469f9703a842ddef25b7b7688c46dbbef8bc5634675d7->leave($__internal_15340fe4cc539e440f1469f9703a842ddef25b7b7688c46dbbef8bc5634675d7_prof);

        
        $__internal_b36d0198650103ff84a7f5b4a2958737c96fadebfcd233dba288cb958bf03814->leave($__internal_b36d0198650103ff84a7f5b4a2958737c96fadebfcd233dba288cb958bf03814_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
