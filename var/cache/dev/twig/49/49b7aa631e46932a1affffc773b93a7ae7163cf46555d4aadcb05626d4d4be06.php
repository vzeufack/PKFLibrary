<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_72b2bf0367ef5a92861d174fb24c9cab747a982ec6f6b0220f5cc082e59e2a03 extends Twig_Template
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
        $__internal_757515b5aefdddf1164834aec80380def8574f1497349a411530952060de6646 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_757515b5aefdddf1164834aec80380def8574f1497349a411530952060de6646->enter($__internal_757515b5aefdddf1164834aec80380def8574f1497349a411530952060de6646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_a6100f15f0c92a6b1c46efae336eb27b3fd1c43c138ce75e46ef6def5f4f4f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6100f15f0c92a6b1c46efae336eb27b3fd1c43c138ce75e46ef6def5f4f4f0a->enter($__internal_a6100f15f0c92a6b1c46efae336eb27b3fd1c43c138ce75e46ef6def5f4f4f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_757515b5aefdddf1164834aec80380def8574f1497349a411530952060de6646->leave($__internal_757515b5aefdddf1164834aec80380def8574f1497349a411530952060de6646_prof);

        
        $__internal_a6100f15f0c92a6b1c46efae336eb27b3fd1c43c138ce75e46ef6def5f4f4f0a->leave($__internal_a6100f15f0c92a6b1c46efae336eb27b3fd1c43c138ce75e46ef6def5f4f4f0a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
