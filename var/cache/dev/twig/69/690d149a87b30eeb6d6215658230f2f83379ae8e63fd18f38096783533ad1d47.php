<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_daa2c12703357440070a45311aac51c8e90c5064f19f8136363f5a0954fda213 extends Twig_Template
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
        $__internal_df0eb99762c21493b930fbfb0e64a07caa2a2759a98ce87f3fdbe069033edaf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df0eb99762c21493b930fbfb0e64a07caa2a2759a98ce87f3fdbe069033edaf3->enter($__internal_df0eb99762c21493b930fbfb0e64a07caa2a2759a98ce87f3fdbe069033edaf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_f024e3a3f79091c770bae34f4ef101b6cdfed6d66043cc14d08410f1caed25cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f024e3a3f79091c770bae34f4ef101b6cdfed6d66043cc14d08410f1caed25cb->enter($__internal_f024e3a3f79091c770bae34f4ef101b6cdfed6d66043cc14d08410f1caed25cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_df0eb99762c21493b930fbfb0e64a07caa2a2759a98ce87f3fdbe069033edaf3->leave($__internal_df0eb99762c21493b930fbfb0e64a07caa2a2759a98ce87f3fdbe069033edaf3_prof);

        
        $__internal_f024e3a3f79091c770bae34f4ef101b6cdfed6d66043cc14d08410f1caed25cb->leave($__internal_f024e3a3f79091c770bae34f4ef101b6cdfed6d66043cc14d08410f1caed25cb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
