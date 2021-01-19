<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_4e6b680afc153a1ced38acd68568e11d88fac12b69f37a6f9a51500cd55fdb6d extends Twig_Template
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
        $__internal_9c54282ed5dddc3d309cf46532e5fc8fc1c46eb54e53e5f1831ac945a5d81d9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c54282ed5dddc3d309cf46532e5fc8fc1c46eb54e53e5f1831ac945a5d81d9c->enter($__internal_9c54282ed5dddc3d309cf46532e5fc8fc1c46eb54e53e5f1831ac945a5d81d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_713859be8f7db6c6b9c1f61e7f640509df4580d3aa5d255e449c50a6a52aefec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_713859be8f7db6c6b9c1f61e7f640509df4580d3aa5d255e449c50a6a52aefec->enter($__internal_713859be8f7db6c6b9c1f61e7f640509df4580d3aa5d255e449c50a6a52aefec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9c54282ed5dddc3d309cf46532e5fc8fc1c46eb54e53e5f1831ac945a5d81d9c->leave($__internal_9c54282ed5dddc3d309cf46532e5fc8fc1c46eb54e53e5f1831ac945a5d81d9c_prof);

        
        $__internal_713859be8f7db6c6b9c1f61e7f640509df4580d3aa5d255e449c50a6a52aefec->leave($__internal_713859be8f7db6c6b9c1f61e7f640509df4580d3aa5d255e449c50a6a52aefec_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\xampp\\htdocs\\PKFLibrary\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
