<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_cb16496135d1d5d211de07574958f91eec2c4da27cc96ca6d756ba63dd946d02 extends Twig_Template
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
        $__internal_0abb4a0ef8c4a9d36c525842b0d4a0be80e130fd5da0c35012a3462bbd8d2db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0abb4a0ef8c4a9d36c525842b0d4a0be80e130fd5da0c35012a3462bbd8d2db5->enter($__internal_0abb4a0ef8c4a9d36c525842b0d4a0be80e130fd5da0c35012a3462bbd8d2db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_84243b29d011eac4f158acd3b29f2d85c19e6fe016c58216cdb417fb6058dc2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84243b29d011eac4f158acd3b29f2d85c19e6fe016c58216cdb417fb6058dc2a->enter($__internal_84243b29d011eac4f158acd3b29f2d85c19e6fe016c58216cdb417fb6058dc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0abb4a0ef8c4a9d36c525842b0d4a0be80e130fd5da0c35012a3462bbd8d2db5->leave($__internal_0abb4a0ef8c4a9d36c525842b0d4a0be80e130fd5da0c35012a3462bbd8d2db5_prof);

        
        $__internal_84243b29d011eac4f158acd3b29f2d85c19e6fe016c58216cdb417fb6058dc2a->leave($__internal_84243b29d011eac4f158acd3b29f2d85c19e6fe016c58216cdb417fb6058dc2a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
