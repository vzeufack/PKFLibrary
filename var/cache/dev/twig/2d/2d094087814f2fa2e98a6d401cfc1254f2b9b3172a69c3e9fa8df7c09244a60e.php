<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_bfe96a97d989b854a96d61b58086662e219c1acc193a91261faad89f2a288a5b extends Twig_Template
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
        $__internal_fc2a418ea7c0299cb05fb78cafb8347f162de29ac8071e935d50316dadd51e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc2a418ea7c0299cb05fb78cafb8347f162de29ac8071e935d50316dadd51e53->enter($__internal_fc2a418ea7c0299cb05fb78cafb8347f162de29ac8071e935d50316dadd51e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_e12ff02310b4847adf1a2da6f9f45f2cfb03ab3d3acf2bfa1a48b667660f14f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e12ff02310b4847adf1a2da6f9f45f2cfb03ab3d3acf2bfa1a48b667660f14f9->enter($__internal_e12ff02310b4847adf1a2da6f9f45f2cfb03ab3d3acf2bfa1a48b667660f14f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_fc2a418ea7c0299cb05fb78cafb8347f162de29ac8071e935d50316dadd51e53->leave($__internal_fc2a418ea7c0299cb05fb78cafb8347f162de29ac8071e935d50316dadd51e53_prof);

        
        $__internal_e12ff02310b4847adf1a2da6f9f45f2cfb03ab3d3acf2bfa1a48b667660f14f9->leave($__internal_e12ff02310b4847adf1a2da6f9f45f2cfb03ab3d3acf2bfa1a48b667660f14f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
