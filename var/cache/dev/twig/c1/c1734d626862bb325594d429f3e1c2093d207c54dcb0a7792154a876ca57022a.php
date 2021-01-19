<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_bf72e064def7572753be25db5ed9da457db3bf8eef8d7d4ec521db821e3c1aae extends Twig_Template
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
        $__internal_5fd27e584acbbf511486a8c02739bd0d648a4e015a96d566bcafb47f0e3703a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fd27e584acbbf511486a8c02739bd0d648a4e015a96d566bcafb47f0e3703a5->enter($__internal_5fd27e584acbbf511486a8c02739bd0d648a4e015a96d566bcafb47f0e3703a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_a97eb6471a08bc4c54fc89e041f9bc189e230d671e00cab006d57e05cd1d2511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97eb6471a08bc4c54fc89e041f9bc189e230d671e00cab006d57e05cd1d2511->enter($__internal_a97eb6471a08bc4c54fc89e041f9bc189e230d671e00cab006d57e05cd1d2511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5fd27e584acbbf511486a8c02739bd0d648a4e015a96d566bcafb47f0e3703a5->leave($__internal_5fd27e584acbbf511486a8c02739bd0d648a4e015a96d566bcafb47f0e3703a5_prof);

        
        $__internal_a97eb6471a08bc4c54fc89e041f9bc189e230d671e00cab006d57e05cd1d2511->leave($__internal_a97eb6471a08bc4c54fc89e041f9bc189e230d671e00cab006d57e05cd1d2511_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
