<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e0a1b8df9024d415313cb638f30885b01c94ad4e50cd098af1ba6fb6e042015a extends Twig_Template
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
        $__internal_0e62e9950dbf2d37da73e76c3dee919fe103a4aed5f6c79e80dda0941da2b8b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e62e9950dbf2d37da73e76c3dee919fe103a4aed5f6c79e80dda0941da2b8b7->enter($__internal_0e62e9950dbf2d37da73e76c3dee919fe103a4aed5f6c79e80dda0941da2b8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_343b450a0f2060ef79d979284401965312d1aa1a90685e858ea14e36af9ff9a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343b450a0f2060ef79d979284401965312d1aa1a90685e858ea14e36af9ff9a4->enter($__internal_343b450a0f2060ef79d979284401965312d1aa1a90685e858ea14e36af9ff9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_0e62e9950dbf2d37da73e76c3dee919fe103a4aed5f6c79e80dda0941da2b8b7->leave($__internal_0e62e9950dbf2d37da73e76c3dee919fe103a4aed5f6c79e80dda0941da2b8b7_prof);

        
        $__internal_343b450a0f2060ef79d979284401965312d1aa1a90685e858ea14e36af9ff9a4->leave($__internal_343b450a0f2060ef79d979284401965312d1aa1a90685e858ea14e36af9ff9a4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
