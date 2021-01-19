<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_40e1e3cc91da3a31bbae9cdb6e3c41e265acbd00908b0a46ff91de73573d6051 extends Twig_Template
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
        $__internal_2a3363ef972403bf9432ad6ebb12a81317199953d40a6dfcc94ebe8ccab6c0b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a3363ef972403bf9432ad6ebb12a81317199953d40a6dfcc94ebe8ccab6c0b8->enter($__internal_2a3363ef972403bf9432ad6ebb12a81317199953d40a6dfcc94ebe8ccab6c0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_82ef59f42a6813ad739a3f67a78352b7cfeb116d38f82fe8ce5ba0745881aa0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ef59f42a6813ad739a3f67a78352b7cfeb116d38f82fe8ce5ba0745881aa0d->enter($__internal_82ef59f42a6813ad739a3f67a78352b7cfeb116d38f82fe8ce5ba0745881aa0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_2a3363ef972403bf9432ad6ebb12a81317199953d40a6dfcc94ebe8ccab6c0b8->leave($__internal_2a3363ef972403bf9432ad6ebb12a81317199953d40a6dfcc94ebe8ccab6c0b8_prof);

        
        $__internal_82ef59f42a6813ad739a3f67a78352b7cfeb116d38f82fe8ce5ba0745881aa0d->leave($__internal_82ef59f42a6813ad739a3f67a78352b7cfeb116d38f82fe8ce5ba0745881aa0d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
