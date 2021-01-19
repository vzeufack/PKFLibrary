<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9d2bf7ef03d96e439730276fb6c2927361b6d1f584a24ff3dce4e021d51c5d1c extends Twig_Template
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
        $__internal_7d2cb23a378dd4e2983b3d10580aed3f03d4c68919668f2aa47e3dc3727a9504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d2cb23a378dd4e2983b3d10580aed3f03d4c68919668f2aa47e3dc3727a9504->enter($__internal_7d2cb23a378dd4e2983b3d10580aed3f03d4c68919668f2aa47e3dc3727a9504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_3812f09313dea02ef30c9ccff37879f5baf4441ad82bba41cc7e39d9983e4431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3812f09313dea02ef30c9ccff37879f5baf4441ad82bba41cc7e39d9983e4431->enter($__internal_3812f09313dea02ef30c9ccff37879f5baf4441ad82bba41cc7e39d9983e4431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7d2cb23a378dd4e2983b3d10580aed3f03d4c68919668f2aa47e3dc3727a9504->leave($__internal_7d2cb23a378dd4e2983b3d10580aed3f03d4c68919668f2aa47e3dc3727a9504_prof);

        
        $__internal_3812f09313dea02ef30c9ccff37879f5baf4441ad82bba41cc7e39d9983e4431->leave($__internal_3812f09313dea02ef30c9ccff37879f5baf4441ad82bba41cc7e39d9983e4431_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
